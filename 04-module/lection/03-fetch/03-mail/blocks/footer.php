<?php if ($_SERVER['PHP_SELF'] === '/index.php'): ?>
<footer>
    <div style="position:relative;overflow:hidden;">
        <iframe src="https://yandex.ru/map-widget/v1/?ll=47.903698%2C56.630132&mode=poi&poi%5Bpoint%5D=47.904351%2C56.629911&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D114525445109&z=17.91"
                width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
    </div>
</footer>
<?php endif; ?>

<div class="popup">
    <div class="popup__overlay"></div>
    <div class="popup__container">
        <div class="popup__content"></div>
        <button class="popup__close">X</button>
    </div>
</div>

<script type="text/template" id="auth">
    <form class="form form_auth">
        <div class="form__field">
            <label class="form__label" for="login">Login</label>
            <input type="text" name="login" id="login">
        </div>
        <div class="form__field">
            <label class="form__label" for="password">Password</label>
            <input type="password" name="login" id="password">
        </div>
        <button>Login</button>
    </form>
</script>

<script src="/js/libs/swiper-bundle.min.js" defer></script>
<script src="/js/cart.js" defer></script>
<script src="/js/main.js" defer></script>