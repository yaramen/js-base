<?php
require_once __DIR__ . '/data/products.php';
/**
 * @var $products array
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/libs/swiper-bundle.min.css"/>
    <link href="styles/styles.css" type="text/css" rel="stylesheet">
    <script>
        const products = <?= json_encode($products) ?>;
    </script>
</head>
<body>
<?php include __DIR__ . '/blocks/header.php';?>
<main>
    <div class="container">
        <div class="order">
            <ul class="card-list card-list_cart" data-order-root></ul>
            <div class="order__pair">
                <div>Sum: <span data-order-sum></span>rub.</div>
                <button class="button button_primary" data-order-clear>Clear</button>
            </div>
            <button class="button button_primary" data-order-clear>Buy</button>
        </div>
    </div>
</main>
<?php include __DIR__ . '/blocks/footer.php' ?>
<script type="text/template" id="order-card">
    <li class="card-list__item">
        <section class="card card_cart card_added" data-product-id="{{PRODUCT_ID}}">
            <img class="card__image" src="{{PRODUCT_IMAGE}}" alt="{{PRODUCT_NAME}}">
            <div class="card__content">
                <h2 class="card__title">{{PRODUCT_NAME}}</h2>
                <div class="card__pair">
                    <div class="card__price">{{PRODUCT_PRICE}}rub.</div>
                    <button class="card__button card__button_add button" data-product-add="{{PRODUCT_ID}}">Добавить</button>
                    <div class="card__count-change">
                        <button class="card__button card__button_dec button" data-product-dec="{{PRODUCT_ID}}">-</button>
                        <span class="card__count" data-product-count></span>
                        <button class="card__button card__button_inc button" data-product-inc="{{PRODUCT_ID}}">+</button>
                    </div>
                </div>
            </div>
        </section>
    </li>
</script>
</body>
</html>