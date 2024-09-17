<section class="main__news news">
  <div class="news__wrapper section-wrapper">
    <div class="news__top">
      <span class="news__title">Статьи по офтальмологии</span>
      <div class="news__filter">
        <input class="news__filter-item" type="radio" id="news-filter-1" name="news-filter" checked value="0">
        <label class="news__filter-label" for="news-filter-1">
          По дате
        </label>
        <input class="news__filter-item" type="radio" id="news-filter-2" name="news-filter" value="0">
        <label class="news__filter-label" for="news-filter-2">
          По просмотрам
        </label>
      </div>
    </div>
    <span class="news__current-date">05 апреля</span>
    <ul class="news__list">
      @foreach ($articles as $article)
      <li class="news__item news-item">
        <div class="news-item__wrapper">
          <div class="news-item__time">{{ $article->id }}</div>
          <span class="news-item__text"><a
              href="{{ route('articles.item', $article->id) }}">{{ $article->h1 }}</a></a><span
              class="news-item__comment">
              <img src="images/bubble.svg" alt="" class="news-item__comment-img">
              <span class="news-item__comment-number">{{ $article->views }}</span>
            </span></span>
        </div>
      </li>
      @endforeach
    </ul>
    <!--<div class="news__load-more">
                <img src="images/load-more.svg" alt="" class="news__load-more-img">
                <span class="news__load-more-text">Загрузить еще</span>
              </div>-->
  </div>
</section>