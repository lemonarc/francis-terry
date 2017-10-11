<?php

namespace FrancisTerry\Orders;

use Stripe;

require_once '../../vendor/autoload.php';
require_once '../env.php';

Stripe\Stripe::setApiKey(getenv('SENDGRID_API_KEY'));

try {
    $order = Stripe\Order::create(array(
        "currency" => "gbp",
        "email" => $_POST['email'],
        "items" => [[
            "type" => "sku",
            "parent" => $_POST['sku'],
        ]],
    ));

    $order->pay(["source" => $_POST['stripeToken']]);

    $mailer = new ConfirmationMailer();

    $mailer->send($_POST['name'], $_POST['email'], $_POST['description'], $_POST['message']);

    http_response_code(201);
} catch (\Exception $error) {
    error_log($error, 4);
    http_response_code(500);
}
