<?php

require('../../vendor/autoload.php');

Stripe\Stripe::setApiKey("sk_test_zKM594Dr7tVA1zuZpFoImFkr");

try {
    $order = \Stripe\Order::create(array(
        "currency" => "gbp",
        "email" => $_POST['email'],
        "items" => [[
            "type" => "sku",
            "parent" => $_POST['sku'],
        ]],
    ));

    $order->pay(["source" => $_POST['stripeToken']]);

    http_response_code(201);
} catch (\Exception $error) {
    http_response_code(500);
}
