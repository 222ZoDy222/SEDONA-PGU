<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>HTML Academy: Седона</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="images/favicon.png">
  </head>
  <body>
    <?php 
    include "Header.php";
     ?>
    <main data-test="main" class="main-container main-index">
      <h1 class="visually-hidden">Седона.</h1>
      <section data-test="hero" class="hero">
        <h2 class="visually-hidden">Добро пожаловать в Седону.</h2>
        <img src="images/welcome.svg" width="458" height="352" alt="Welcome to the gorgeous Sedona. Because the Grand Canyon sucks!">
      </section>

      <section data-test="advantages" class="advantages">
        <div class="advantages-start-wrapper">
          <p class="lead advantages-lead">Седона — небольшой городок в Аризоне, заслуживающий большего!</p>
          <p class="desc">Рассмотрим причины, по которым Седона круче, чем Гранд-Каньон!</p>
        </div>
        <h2 class="visually-hidden">Преимущества.</h2>
        <ul class="advantages-list">
          <li class="advantages-item advantages-item-wide">
            <div class="advantages-item-wrapper">
              <h3 class="advantages-title">Настоящий городок</h3>
              <p class="advantage-description">Седона — не аттракцион для туристов, там течёт своя жизнь</p>
            </div>
            <img src="images/sedona-city.jpg" width="800" height="385" alt="Улица в городе Седона." class="advantage-image">
          </li>
          <li class="advantages-item">
            <div class="advantages-item-wrapper">
              <h3 class="advantages-title">Небольшая площадь</h3>
              <p class="advantage-description">Все достопримечательности находятся очень близко</p>
            </div>
          </li>
          <li class="advantages-item">
            <div class="advantages-item-wrapper">
              <h3 class="advantages-title">Красивая дорога</h3>
              <p class="advantage-description">Ехать в Седону из Лас-Вегаса совсем не скучно!</p>
            </div>
          </li>
          <li class="advantages-item">
            <div class="advantages-item-wrapper">
              <h3 class="advantages-title">Мало туристов</h3>
              <p class="advantage-description">Большинство едет в Гранд Каньон и толпится там</p>
            </div>
          </li>
          <li class="advantages-item advantages-item-wide advantages-item-wide-reverse">
            <div class="advantages-item-wrapper">
              <h3 class="advantages-title">Там есть мост&nbsp;дьявола</h3>
              <p class="advantage-description">Да, по нему можно пройти! Если вы осмелитесь, разумеется</p>
            </div>
            <img src="images/sedona-devil-bridge.jpg" width="800" height="385" alt="Мост дьявола в городе Седона." class="advantage-image">
          </li>
        </ul>
        <div class="advantages-end-wrapper">
          <p class="lead">Приезжайте в Седону отдохнуть в комфорте и уюте!</p>
          <p class="desc">Опытный персонал и качественное обслуживание!</p>
        </div>

      </section>

      <section class="services">
        <h2 class="visually-hidden">Сервисы.</h2>
        <ul class="services-list">
          <li class="services-item">
            <h3 class="services-title services-title-housing">Жильё</h3>
            <p class="service-description">Рекомендуем пожить в&nbsp;настоящем мотеле,<br>всё как в кино!</p>
          </li>
          <li class="services-item">
            <h3 class="services-title services-title-food">Еда</h3>
            <p class="service-description">Всегда заказывайте топовый фирменный бургер,<br>вы не разочаруетесь!</p>
          </li>
          <li class="services-item">
            <h3 class="services-title services-title-souvenir">Сувениры</h3>
            <p class="service-description">Не только китайского, но&nbsp;и&nbsp;настоящего местного производства!</p>
          </li>
        </ul>
      </section>

      <section data-test="search" class="search">
        <h2 class="lead">Заинтересовались?</h2>
        <p class="desc desc-search">Укажите предполагаемые даты поездки, <br>и мы покажем вам лучшие предложения гостиниц в Седоне</p>
        <a href="#" class="button-brown search-button">Поиск гостиницы в Седоне</a>
      </section>

      <section data-test="subscribe" class="newsletter">
        <h2 class="newsletter-heading">Подпишитесь на рассылку</h2>
        <p class="desc newsletter-desc">Только полезная информация и никакого спама, честное&nbsp;бойскаутское!</p>
        <form class="newsletter-form" action="https://echo.htmlacademy.ru/" method="post">
          <label for="newsletter-email" hidden>Email</label>
          <input class="field" placeholder="Ваш e-mail" type="email" name="newsletter-email" id="newsletter-email" required>
          <button class="button-blue newsletter-button" type="submit">Подписаться</button>
        </form>
      </section>
    </main>

    <footer data-test="footer" class="page-footer">
      <ul class="socials-list">
        <li class="socials-item">
          <a class="socials-link socials-link-vk" href="https://vk.com/htmlacademy">
            <span class="visually-hidden">Вконтакте.</span>
            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 25 15" fill="none"><path fill="#83B3D3" fill-rule="evenodd" d="M24.12 1.8c.16-.54 0-.94-.8-.94H20.7c-.67 0-.98.34-1.15.73 0 0-1.33 3.2-3.22 5.27-.61.6-.9.8-1.23.8-.16 0-.41-.2-.41-.75v-5.1c0-.66-.19-.95-.74-.95H9.82c-.42 0-.67.3-.67.59 0 .62.95.76 1.04 2.51v3.8c0 .83-.15.98-.48.98-.9 0-3.06-3.2-4.34-6.88-.25-.72-.5-1-1.18-1H1.57c-.75 0-.9.34-.9.73 0 .68.89 4.07 4.14 8.55 2.17 3.06 5.23 4.72 8 4.72 1.68 0 1.88-.37 1.88-1v-2.32c0-.74.16-.88.7-.88.38 0 1.05.19 2.6 1.66 1.79 1.75 2.08 2.54 3.08 2.54h2.63c.75 0 1.12-.37.9-1.1-.23-.72-1.08-1.77-2.2-3.02-.62-.71-1.54-1.48-1.82-1.86-.39-.5-.28-.71 0-1.15 0 0 3.2-4.42 3.54-5.93Z" clip-rule="evenodd"/></svg>
          </a>
        </li>
        <li class="socials-item">
          <a class="socials-link socials-link-tg" href="https://t.me/htmlacademy">
            <span class="visually-hidden">Telegram.</span>
            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none"><path fill="#83B3D3" d="M16.79.96.84 7.1c-1.09.44-1.08 1.05-.2 1.32l4.1 1.28 9.47-5.98c.44-.27.85-.13.52.17l-7.68 6.93-.28 4.22c.41 0 .6-.2.83-.41l1.99-1.94 4.13 3.06c.77.42 1.31.2 1.5-.71l2.72-12.8c.28-1.1-.43-1.61-1.16-1.28Z"/></svg>
          </a>
        </li>
        <li class="socials-item">
          <a class="socials-link socials-link-youtube" href="https://www.youtube.com/user/htmlacademyru">
            <span class="visually-hidden">YouTube.</span>
            <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none"><path fill="#83B3D3" d="M18.94.36H3.51C1.65.36.33 1.95.33 3.76v10.09c0 1.91 1.32 3.5 3.18 3.5h15.65c1.64 0 3.17-1.59 3.17-3.4V3.76c-.22-1.8-1.53-3.4-3.39-3.4ZM7.99 12.89V4.82l7.34 4.04-7.34 4.03Z"/></svg>
          </a>
        </li>
      </ul>
      <address class="page-footer-address">
        <a href="tel:+78128121212" class="page-footer-address-phone">+7 (812) 812-12-12</a>
      </address>
      <a class="page-footer-logo" href="https://htmlacademy.ru/">
        <span class="visually-hidden">Сайт HTML Academy.</span>
        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="115" height="34" viewBox="0 0 115 34" fill="none"><path fill="#000" d="M0 13.26v2.6h2.5v-2.6H0ZM11.6 4.86c-1.6 0-2.8.7-3.6 1.7h-.1V.36h-2v15.5h2v-5.3c0-2.1 1.3-3.6 3.3-3.6 1.8 0 2.9 1.4 2.9 3.2v5.7h2v-6.1c.1-3-1.8-4.9-4.5-4.9ZM26.6 5.16h-4.8v-3.7h-2v3.8h-1.9v2h1.9v6c0 1.7 1 2.7 2.7 2.7h4.1v-2h-3.7c-.7 0-1.1-.4-1.1-1.1v-5.7h4.8v-2ZM41.1 4.96c-1.6 0-2.9.8-3.5 2.1h-.1c-.6-1.2-1.8-2.1-3.4-2.1-1.4 0-2.5.8-3.1 1.8h-.1v-1.6H29v10.6h2v-5.4c0-2 1-3.5 2.6-3.5 1.5 0 2.4 1 2.4 2.6v6.3h2v-5.6c0-2.4 1.4-3.3 2.6-3.3 1.5 0 2.4 1 2.4 2.6v6.3h2v-6.5c.1-2.5-1.4-4.3-3.9-4.3ZM47.8 13.06c0 1.7 1 2.7 2.8 2.7h2v-2h-1.7c-.7 0-1.1-.4-1.1-1.1V.36h-2v12.7ZM28.9 20.06c-.9-1.1-2.2-1.8-3.9-1.8-3.1 0-5.4 2.3-5.4 5.6s2.3 5.6 5.4 5.6c1.8 0 3-.8 3.8-1.9h.1v1.6h2v-10.6h-2v1.5Zm-3.6 7.4c-2.2 0-3.6-1.6-3.6-3.6s1.4-3.6 3.6-3.6 3.6 1.6 3.6 3.6c0 1.9-1.4 3.6-3.6 3.6ZM44.2 22.36c-.5-2.4-2.6-4.1-5.4-4.1a5.4 5.4 0 0 0-5.6 5.6c0 3.1 2.2 5.6 5.6 5.6 2.8 0 4.9-1.8 5.4-4.2h-2.1a3.4 3.4 0 0 1-3.3 2.3c-2.2 0-3.6-1.6-3.6-3.6s1.4-3.6 3.6-3.6c1.6 0 2.8 1 3.3 2.2h2.1v-.2ZM55.1 20.06c-.9-1.1-2.2-1.8-3.9-1.8-3.1 0-5.4 2.3-5.4 5.6s2.3 5.6 5.4 5.6c1.8 0 3-.8 3.8-1.9h.1v1.6h2v-10.6h-2v1.5Zm-3.6 7.4c-2.2 0-3.6-1.6-3.6-3.6s1.4-3.6 3.6-3.6 3.6 1.6 3.6 3.6c0 1.9-1.5 3.6-3.6 3.6ZM68.7 20.16c-.9-1.1-2.2-1.9-3.9-1.9-3.1 0-5.4 2.3-5.4 5.6s2.2 5.6 5.4 5.6c1.7 0 3-.8 3.8-1.8h.1v1.5h2v-15.4h-2v6.4Zm-3.6 7.3c-2.2 0-3.6-1.6-3.6-3.6s1.4-3.6 3.6-3.6 3.6 1.6 3.6 3.6c-.1 2-1.5 3.6-3.6 3.6ZM78.3 18.26c-3.3 0-5.5 2.5-5.5 5.6 0 3 2.1 5.6 5.5 5.6 2.5 0 4.5-1.3 5.2-3.6h-2.1c-.5 1-1.6 1.6-3 1.6-1.9 0-3.3-1.3-3.4-2.9h8.8c.2-3.6-2-6.3-5.5-6.3Zm0 1.9c1.7 0 3 1 3.3 2.6h-6.5c.3-1.5 1.5-2.6 3.2-2.6ZM98.2 18.26c-1.6 0-2.9.8-3.6 2h-.1c-.6-1.2-1.8-2-3.4-2-1.4 0-2.5.7-3.1 1.8v-1.5h-1.9v10.6h2v-5.4c0-2 1-3.4 2.6-3.5 1.5 0 2.4 1 2.4 2.6v6.3h2v-5.6c0-2.4 1.4-3.3 2.6-3.3 1.5 0 2.4 1 2.4 2.6v6.3h2v-6.5c.1-2.6-1.4-4.4-3.9-4.4ZM109.4 27.36l-3.6-8.9h-2.2l4.8 11.6c-.3.9-.7 1.2-1.7 1.2h-2.5v2h2.5c1.8 0 2.8-.8 3.5-2.6l4.7-12.2h-2.1l-3.4 8.9Z"/></svg>
      </a>
    </footer>

    <div class="modal-container">
      <div class="modal modal-reserve">
        <header class="modal-header">
          <h2 class="modal-heading">Поиск гостиницы в Седоне</h2>
          <button class="modal-close-button">
            <span class="visually-hidden">Закрыть.</span>
          </button>
        </header>
        <section>
          <h2 class="visually-hidden">Модальное окно. Бронирование.</h2>
          <form method="post" action="https://echo.htmlacademy.ru/" class="modal-content">
            <div class="modal-content-wrapper input-date-wrapper">
            <label for="input-arrival" class="input-label input-label-date">Дата заезда:</label>
            <input type="text" id="input-arrival" placeholder="Укажите дату" value="27 апреля 2020" class="modal-input input-date">
            <p class="input-description alert-description">Мы не можем отправить вас в прошлое.</p>
            </div>
            <div class="modal-content-wrapper input-date-wrapper">
              <label for="input-departure" class="input-label input-label-date">Дата выезда:</label>
              <input type="text" id="input-departure" placeholder="Укажите дату" value="1 сентября 2023" class="modal-input input-date">
              <p class="input-description">На эти даты есть свободные номера. Пока есть.</p>
            </div>
            <div class="modal-content-wrapper input-people-amount">
              <span class="input-label input-label-adults">Взрослые:</span>
              <div class="input-amount-wrapper">
                <button type="button" class="button-input-amount button-minus button-minus-adults">
                  <span class="visually-hidden">Минус.</span>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9V11H17V9H3Z" fill="#756157" fill-opacity="0.3"/>
                  </svg>
                </button>
                <input type="number" id="input-amount-adults" value="2" class="modal-input input-amount input-amount-adults">
                <button type="button" class="button-input-amount button-plus button-plus-adults">
                  <span class="visually-hidden">Плюс.</span>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 9H11V3H9V9H3V11H9V17H11V11H17V9Z" fill="#756157" fill-opacity="0.3"/>
                  </svg>
                </button>
              </div>
              <div class="input-label input-label-children">
                Дети:
                <div class="popover popover-information">
                  <span class="visually-hidden">Всплывающее окно с информацией.</span>
                  <div class="popover-information-paragraph">
                    Укажите количество детей, которые будут с вами, возраст которых от 6 до 18 лет. Дети до 6 лет размещаются бесплатно.
                  </div>
                </div>
              </div>
              <div class="input-amount-wrapper">
                <button type="button" class="button-input-amount button-minus button-minus-children">
                  <span class="visually-hidden">Минус.</span>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9V11H17V9H3Z" fill="#756157" fill-opacity="0.3"/>
                  </svg>
                </button>
                <input type="number" id="input-amount-children" value="2" class="modal-input input-amount input-amount-children">
                <button type="button" class="button-input-amount button-plus button-plus-children">
                  <span class="visually-hidden">Плюс.</span>
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 9H11V3H9V9H3V11H9V17H11V11H17V9Z" fill="#756157" fill-opacity="0.3"/>
                  </svg>
                </button>
              </div>
            </div>
            <button type="button" class="modal-button button-blue">Найти</button>
          </form>
        </section>
      </div>
    </div>
    <script src="scripts/script.js"></script>
  </body>
</html>
