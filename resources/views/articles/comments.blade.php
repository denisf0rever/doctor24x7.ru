@if($article->comments->isNotEmpty())
	<div class="main__comments comments">
                  <div class="article-comments__wrapper">
                    <span class="article-comments__amount">{{ $article->comments->count() }} комментариев</span>
                    <form action="" class="article-comments__form">
                      <textarea class="article-comments__textarea" name="comment"
                        placeholder="Написать комментарий..."></textarea>
                      <button class="article-comments__button">Отправить</button>
                    </form>
                    <ul class="article-comments__list">
                      @foreach($article->comments as $comment)
					  <li class="article-comments__item comment">
                        <div class="article-comment__main-comment">
                          <a href="" class="article-comment__user-link">
                            <img src="images/avatar.jpg" alt="" class="article-comment__avatar">
                            <span class="article-comment__user-name">{{ Str::substr($comment->name, 0, 1) }} {{ $comment->name }}</span>
                            <span class="article-comment__time">7 м</span>
                          </a>
                          <span class="article-comment__text">{{ $comment->comment }}</span>
                          <div class="article-comment__sub-section">
                            <a href="" class="article-comment__ansver">Ответить</a>
                            <img class="article-comment__likes" src="images/like.svg" alt="">
                            <span class="article-comment__likes-amount">97</span>
                            <img class="article-comment__dislikes" src="images/like.svg" alt="">
                          </div>
                        </div>
						
						<!--if ($comment->children)
						include('articles.subcomments', ['comments' => $comment->children])
						endif -->
                      </li>
					  @endforeach
                    </ul>
                  </div>
                </div>
@endif