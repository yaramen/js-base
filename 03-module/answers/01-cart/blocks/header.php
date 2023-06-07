<header>
    <nav class="menu menu_main">
        <div class="container">
            <button class="hamburger">
                <span class="hamburger__line"></span>
            </button>
            <ul class="menu__list">
                <li class="menu__item"><a class="menu__link" href="/">HTML</a></li>
                <li class="menu__item"><a class="menu__link" href="/">CSS</a></li>
                <li class="menu__item"><a class="menu__link" href="/">JavaScript</a></li>
                <li class="menu__item"><a class="menu__link" href="/">TypeScript</a></li>
            </ul>
            <?php if ($_SERVER['PHP_SELF'] !== '/cart.php'): ?>
            <a class="button button_cart" href="/cart.php">
                <img src="/assets/cart.svg" alt="cart" width="20px"/>
                <span class="button__count">0</span>
            </a>
            <?php endif; ?>
            <button class="button button_login" data-popup="auth">Login</button>
        </div>
    </nav>
    <?php if ($_SERVER['PHP_SELF'] === '/index.php'): ?>
        <div class="swiper slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="slider__image" src="https://i.pickadummy.com/400x400" alt="1">
                </div>
                <div class="swiper-slide">
                    <img class="slider__image" src="https://i.pickadummy.com/400x400" alt="2">
                </div>
                <div class="swiper-slide">
                    <img class="slider__image" src="https://i.pickadummy.com/400x400" alt="3">
                </div>
            </div>
            <div class="slider__pagination swiper-pagination"></div>
            <div class="slider__nav swiper-button-prev"></div>
            <div class="slider__nav swiper-button-next"></div>
        </div>
    <?php endif; ?>
</header>