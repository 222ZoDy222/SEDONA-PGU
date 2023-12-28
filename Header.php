<header data-test="header" class="page-header">
      <nav class="navigation">
        <a href="index.php" aria-current="page">
          <img class="navigation-sedona-logo" width="140" height="70" src="images/logo.svg" alt="Логотип сайта Седона.">
        </a>
        <ul class="navigation-list">
          <li class="navigation-item">
            <a href="index.php" aria-current="page" class="navigation-link">Главная</a>
          </li>
          <li class="navigation-item">
            <a href="#" class="navigation-link">О Седоне</a>
          </li>
          <li class="navigation-item">
            <a href="catalog.php" class="navigation-link">Гостиницы</a>
          </li>
        </ul>
        <ul class="navigation-user-list">
          <li class="navigation-user-item">
            <span class="visually-hidden">Поиск.</span>
            <a href="#" class="navigation-user-link navigation-link-search">
            </a>
          </li>
          <li class="navigation-user-item">
            <a href="#" class="navigation-user-link navigation-link-favourites">
              <span class="visually-hidden">Избранное.</span>
              <span class="favourites-amount">12</span>
            </a>
          </li>
          <?php 

          if (!isset($_COOKIE['user'])) {
            ?>

            <li class="navigation-user-item">
            <a href="registration.php" class="button-brown navigation-link-want-to-go">Хочу сюда!</a>
            </li>

            <?php 
            }
            else {
            ?>
            <li class="navigation-user-item">
            <p><?php echo $_COOKIE['user'] ?></p>
            </li>
          <?php 
            }
          ?>

           
          
        </ul>
      </nav>
    </header>