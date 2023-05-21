<?php

function getMailHTML($products) {
    ob_start();
    include __DIR__ . '/template.php';
    $html = ob_get_clean();
    return $html;
}

function sendMail($mail, $title, $products) {
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $mailHtml = getMailHTML($products);

    return mail($mail, $title, $mailHtml, $headers);
}