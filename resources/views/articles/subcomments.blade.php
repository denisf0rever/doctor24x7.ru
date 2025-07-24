<ul class="article-comment__sub-comments">
                          @foreach($comments as $comment)
						  <li class="article-comment__sub-comment">
                            <a href="" class="article-comment__user-link">
                              <img src="images/avatar.jpg" alt="" class="article-comment__avatar">
                              <span class="article-comment__user-name">{{ $comment->name }}</span>
                              <span class="article-comment__time">7 м</span>
                            </a>
                            <span class="article-comment__text">{{ $comment->comment }}</span>
                            <div class="article-comment__sub-section">
                              <a href="" class="article-comment__ansver">Ответить</a>
                              <img class="article-comment__likes" src="images/like.svg" alt="">
                              <span class="article-comment__likes-amount">97</span>
                              <img class="article-comment__dislikes" src="images/like.svg" alt="">
                            </div>
                          </li>
						  @endforeach
                        </ul>