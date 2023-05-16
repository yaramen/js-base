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
</head>
<body>

<?php include __DIR__ . '/blocks/header.php' ?>

<main>
    <div class="container">
        <ul class="card-list">
            <?php foreach ($products as $index => $product): ?>
            <li class="card-list__item">
                <section class="card" data-product-id="<?= $product['id']?>">
                    <img class="card__image" src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    <div class="card__content">
                        <h2 class="card__title"><?= $product['name'] ?></h2>
                        <div class="card__pair">
                            <div class="card__price"><?= $product['price'] ?>rub.</div>
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
        <p>Doming comprehensam signiferumque neque posuere percipit luptatum dis et efficitur. Sodales legimus
            comprehensam ligula utinam aperiri sed referrentur integer expetenda. Partiendo iudicabit viderer amet
            dictum dis maiorum scripta tamquam amet. Turpis pro noster elit libris evertitur sententiae quaestio.
            Salutatus lacinia dui utinam non instructior.</p>
        <ul>
            <li>Luctus alterum quaeque fabellas cubilia fames risus. Pertinax ornare consectetuer dis intellegat sumo
                principes. Splendide mandamus dicat netus tota inciderint mentitum qualisque eirmod blandit.
            </li>
            <li>Luctus alterum quaeque fabellas cubilia fames risus. Pertinax ornare consectetuer dis intellegat sumo
                principes. Splendide mandamus dicat netus tota inciderint mentitum qualisque eirmod blandit.
            </li>
            <li>Luctus alterum quaeque fabellas cubilia fames risus. Pertinax ornare consectetuer dis intellegat sumo
                principes. Splendide mandamus dicat netus tota inciderint mentitum qualisque eirmod blandit.
            </li>
            <li>Luctus alterum quaeque fabellas cubilia fames risus. Pertinax ornare consectetuer dis intellegat sumo
                principes. Splendide mandamus dicat netus tota inciderint mentitum qualisque eirmod blandit.
            </li>
            <li>Luctus alterum quaeque fabellas cubilia fames risus. Pertinax ornare consectetuer dis intellegat sumo
                principes. Splendide mandamus dicat netus tota inciderint mentitum qualisque eirmod blandit.
            </li>
        </ul>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
        <p>Expetenda civibus doming auctor fabulas atomorum dictum vitae. Litora nonumes epicuri fames adversarium dicta
            conceptam eripuit hendrerit. Putent tota repudiare signiferumque salutatus in epicuri. Mel vel blandit sonet
            mnesarchum falli per eloquentiam. Doming aliquam dicunt tempor saperet quem aenean magnis class pri. Nullam
            minim quas delenit netus ancillae offendit dissentiunt quam. Patrioque affert penatibus honestatis doctus
            ponderum. Evertitur dignissim habeo vestibulum expetenda praesent expetendis dolores venenatis mucius.
            Curabitur nunc viverra dico postea adipisci aeque. Impetus an cubilia lectus facilisi leo faucibus.
            Tractatos integer persius legere inani posuere nonumy. Ferri utroque nobis expetenda libris aenean mazim
            fermentum dicat. Orci nibh assueverit pertinacia lorem appareat expetendis ante fastidii. Condimentum
            praesent habeo tempus mattis corrumpit.</p>
    </div>
</main>

<?php include __DIR__ . '/blocks/footer.php' ?>
</body>
</html>