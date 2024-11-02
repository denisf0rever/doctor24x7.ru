<li class="promo__item">
                    <div class="promo__header">
                      <h3 class="promo__item-title">{{ $tariff->title }}</h3>
                      <span class="promo__subtitle">{{ $tariff->description }}</span>
                    </div>
                    <ul class="promo__item-list">
                      <li class="promo__item-item">
                        Гарантированная консультация
                      </li>
                      <li class="promo__item-item">
                        Профессиональный ответ
                      </li>
                      <li class="promo__item-item">
                        Уведомление на почту бесплатно
                      </li>
                    </ul>
                    <div class="promo__bottom">
                      <span class="promo__price">
                        {{ $tariff->sum }} &#8381;
                      </span>
                      <input type="radio" id="promo380" name="Sum" stadart-price="{{ $tariff->sum }}" hidden checked type="text"
                        class="promo__input-radio">
                      <label for="promo380" class="promo__label">
                        Выбрать
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 20"
                          style="margin-left: 8px;width: 20px;">
                          <path fill="#fff"
                            d="M9.457 14.531a.624.624 0 01-.442-1.067l3.308-3.308-3.308-3.308a.625.625 0 01.884-.884l3.75 3.75a.625.625 0 010 .884l-3.75 3.75a.623.623 0 01-.442.183z">
                          </path>
                        </svg>
                      </label>
                    </div>
                  </li>