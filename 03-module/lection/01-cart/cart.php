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
        <ul class="card-list card-list_cart">
            <?php foreach ($products as $index => $product): ?>
            <li class="card-list__item">
                <section class="card card_cart" data-product-id="<?= $product['id']?>">
                    <img class="card__image" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    <div class="card__content">
                        <h2 class="card__title"><?= $product['name'] ?></h2>
                        <div class="card__pair">
                            <div class="card__price"><?= $product['price'] ?>руб.</div>
                            <button class="card__button card__button_add button" data-product-add="<?= $product['id']?>">Добавить</button>
                            <div class="card__count-change">
                                <button class="card__button card__button_dec button" data-product-dec="<?= $product['id']?>">-</button>
                                <span class="card__count" data-product-count></span>
                                <button class="card__button card__button_inc button" data-product-inc="<?= $product['id']?>">+</button>
                            </div>
                        </div>
                    </div>
                </section>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
</main>
<?php include __DIR__ . '/blocks/footer.php' ?>
</body>
</html>