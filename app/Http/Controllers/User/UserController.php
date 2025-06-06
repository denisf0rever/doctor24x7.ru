<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMain;
use App\Models\Role;
use App\Models\Consultation\ConsultationCategory as Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Carbon\Carbon;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{	
    public function index()
    {
        $users = User::query()
			->orderBy('id')
            ->get();
			
		$totalUsers = User::count();

		return view('dashboard.user.list', compact('users', 'totalUsers'));
    }

    public function create(UserRequest $request, UserService $userService)
    {
		$userData = $request->all();
		
		$images = [];
		
		if ($request->hasFile('avatar')) {
			$imagePath = $request->file('avatar')->store('public/avatar');
			$avatarImage = Str::of($imagePath)->basename();
			$images['avatarImage'] = $avatarImage;
		}
		if ($request->hasFile('avatar_webp')) {
			$webpPath = $request->file('avatar_webp')->store('public/avatar/webp');
			$avatarWebp = Str::of($webpPath)->basename();
			$images['avatarWebp'] = $avatarWebp;
		}
		
		$is_priority = $request->has('is_priority') ? 1 : 0;
		$is_active = $request->has('is_active') ? 1 : 0;
		
		$user = $userService->createUser($request->validated(), $images, $is_priority, $is_active);
		
		if ($user) {
			return redirect()->route('dashboard.user.edit', ['id' => $user->id])->with('user_added', 'Пользователь успешно добавлен');
		} else {
			return redirect()->back()->with('user_added', 'Пользователь не добавлен');
		}
    }

    public function store(Request $request)
    {
        return view('dashboard.user.add-user');
    }

    public function show(string $slug)
    {
		$user = UserMain::query()
			->where('username', $slug)
			->firstOrFail();
		
		$user->increment('views');
		
		$dateString = $user->created_at;
		$createdAt = Carbon::parse($dateString);
		\Carbon\Carbon::setLocale('ru');
		$date = $createdAt->translatedFormat('j F Y') . ' года';
		
		return view('user.profile.item', compact('user', 'date'));
    }
	
    public function edit(string $id)
    {
        $user = UserMain::query()
			->where('id', $id)
            ->firstOrFail();
			
		//$roles = Role::all();

		return view('dashboard.user.edit-user', compact('user'));
    }
	
    public function update(Request $request, string $id)
    {
         $data = $request->validate([
            'email' => 'string|max:255',
            'username' => 'string|max:255',
            'password' => 'nullable|max:255',
            'role' => 'nullable|string|max:1',
            'name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'middle_name' => 'string|max:255',
            'city' => 'string|max:255',
            'phone' => 'string|max:255',
            'experience' => 'integer|max:2050',
            'work_place' => 'nullable|string|min:10',
            'gender' => 'integer|max:1',
			'is_priority' => 'in:1,0',
			'is_active' => 'in:1,0',
			'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
			'webp_avatar' => 'image|mimes:webp|max:2048'
        ]);
		
		$user = UserMain::query()
            ->where('id', $id)
            ->firstOrFail();
			
		if ($request->hasFile('avatar')) {
			$imagePath = $request->file('avatar')->store('public/avatar');
			$avatarImage = Str::of($imagePath)->basename();
			$user->avatar = $avatarImage;
		}
		
		if ($request->hasFile('avatar_webp')) {
			$webpPath = $request->file('avatar_webp')->store('public/avatar/webp');
			$avatarWebp = Str::of($webpPath)->basename();
			$user->webp_avatar = $avatarWebp;
		}
		
		$is_priority = $request->has('is_priority') ? 1 : 0;
		$is_active = $request->has('is_active') ? 1 : 0;
		
		if ($request->filled('password')) {
			$user->password = Hash::make($data['password']);
		}
		
		$user->email_address = $data['email'];
		$user->username = $data['username'];
		$user->role = $data['role'] ?? 1;
		$user->first_name = $data['name'];
		$user->last_name = $data['last_name'];
		$user->middle_name = $data['middle_name'];
		$user->is_priority_user = $data['is_priority'];
		$user->is_active = $data['is_active'];
		$user->city = $data['city'];
		$user->phone = $data['phone'];
		$user->experience = $data['experience'];
		$user->work_place = $data['work_place'];
		$user->gender = $data['gender'];
		$user->save();
		
		return redirect()->back()->with('success', 'Пользователь успешно обновлен');
    }
	
    public function destroy(string $id)
    {
         $user = User::query()
            ->where('id', $id)
            ->firstOrFail();
		
		if ($user->avatar) {
			$avatarImage = $user->avatar;
			Storage::delete($avatarImage);
		}
		
		if ($user->webp_avatar) {
			$webpImage = $user->webp_avatar;
			Storage::delete($webpImage);
		}
		
		$user->delete();
				
		if ($user) {
			 return redirect()->route('dashboard.user')->with('success', 'Юзер успешно удален');
		}
    }
	
	public function showForm()
    {
        return view('dashboard.user.finduser');
    }
	
	public function getConsultationIds(Request $request)
    {
        $request->validate(['user_id' => 'required|integer']);

        $userId = $request->input('user_id');

        $consultationIds = DB::table('sf_consultation_comment_answer as a')
            ->join('sf_consultation_comment_pin as p', 'a.comment_id', '=', 'p.comment_id')
            ->where('a.user_id', $userId)
			->take(20)
            ->distinct()
            ->pluck('a.comment_id');

        return response()->json($consultationIds);
    }

}
