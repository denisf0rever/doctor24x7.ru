@if($article->comments->isNotEmpty())
	<div class="main__comments comments">
                  <div class="article-comments__wrapper">
                    <span class="article-comments__amount">40 комментариев</span>
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
                            <span class="article-comment__user-name">Agatha</span>
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
						@if ($comment->children)
							
                       <ul class="article-comment__sub-comments">
                          <li class="article-comment__sub-comment">
                            <a href="" class="article-comment__user-link">
                              <img src="images/avatar.jpg" alt="" class="article-comment__avatar">
                              <span class="article-comment__user-name">Agatha</span>
                              <span class="article-comment__time">7 м</span>
                            </a>
                            <span class="article-comment__text"></span>
                            <div class="article-comment__sub-section">
                              <a href="" class="article-comment__ansver">Ответить</a>
                              <img class="article-comment__likes" src="images/like.svg" alt="">
                              <span class="article-comment__likes-amount">97</span>
                              <img class="article-comment__dislikes" src="images/like.svg" alt="">
                            </div>
                          </li>
					
                         <li class="article-comment__sub-comment">
                            <a href="" class="article-comment__user-link">
                              <img src="images/avatar.jpg" alt="" class="article-comment__avatar">
                              <span class="article-comment__user-name">Agatha</span>
                              <span class="article-comment__time">7 м</span>
                            </a>
                            <span class="article-comment__text">Lorem ipsum dolor, sit amet consectetur adipisicing
                              elit.</span>
                            <div class="article-comment__sub-section">
                              <a href="" class="article-comment__ansver">Ответить</a>
                              <img class="article-comment__likes" src="images/like.svg" alt="">
                              <span class="article-comment__likes-amount">97</span>
                              <img class="article-comment__dislikes" src="images/like.svg" alt="">
                            </div>
                          </li>
                        </ul>
					@endif
						
                      </li>@endforeach
                    </ul>
                  </div>
                </div>
@endif