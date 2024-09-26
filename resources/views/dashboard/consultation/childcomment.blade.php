@foreach($comments as $comment)
					@if ($comment->children)
						 <div style="display:flex;margin-left: 15px;margin-bottom: 40px;padding:15px;border-radius: 8px;background:#f2f2f2">
                <div> {{ $comment->description }}</div>
                <div> Ответить</div>
                <div> Удалить</div>
                </div>
					@include('dashboard.consultation.childcomment', ['comments' => $comment->children])
					@endif
				@endforeach