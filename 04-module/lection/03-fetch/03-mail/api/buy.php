<?php
require_once __DIR__ . '/../data/products.php';
require_once __DIR__ . '/../mail/send.php';

function getData($order)
{
    global $products;

    $rst = [];
    foreach ($products as $key => $product) {
        if (!$order[$product['id']]) {
            continue;
        }

        $product['count'] = $order[$product['id']];
        array_push($rst, $product);
    }

    return $rst;
}

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
$isSend = sendMail('fikkoperza@gufum.com', 'order', getData($input));
$response = [
    'status' => $isSend ? 'ok' : 'error',
];
echo json_encode($response);


