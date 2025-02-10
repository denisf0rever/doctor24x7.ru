<?php

namespace App\Http\Controllers\Consultation\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        if ($request->file('image')->isValid()) {
            $path = $request->file('image')->store('uploads', 'public/consultation/images');

            return back()->with('success', 'Файл загружен успешно: ' . $path);
        }

        return back()->with('error', 'Ошибка при загрузке файла');
    }
}
