<?php

namespace FrancisTerry\Orders;

use Stripe;

require_once '../../vendor/autoload.php';
require_once '../env.php';

Stripe\Stripe::setApiKey(getenv('STRIPE_API_SECRET_KEY'));

session_start();

try {
    $order = Stripe\Order::create(array(
        "currency" => "gbp",
        "email" => $_POST['email'],
        "items" => [[
            "type" => "sku",
            "parent" => $_POST['sku'],
        ]],
    ));

    $order = $order->pay(["source" => $_POST['stripeToken']]);
    $_SESSION['order'] = json_encode($order);

    $mailProvider = new MailProvider();

    $staffMailer = new StaffMailer($mailProvider);
    $staffMailer->send($_POST['name'], $_POST['email'], $_POST['phone_number'], $_POST['description'], $_POST['message']);

    $customerMailer = new CustomerMailer($mailProvider);
    $customerMailer->send($_POST['name'], $_POST['email'], $order->created, $_POST['description'], $order->amount);

    http_response_code(201);
} catch (\Exception $error) {
    error_log($error, 4);
    http_response_code(500);
}
