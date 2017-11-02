<?php

namespace FrancisTerry\Orders;

session_start();

try {
    $order = json_decode($_SESSION['order']);

    $details = [
        'order_number' => $order->created,
        'product' => $order->items[0]->description,
        'amount' => $order->amount,
    ];

    http_response_code(200);

    header("Content-Type: application/json;charset=utf-8");
    echo json_encode($details);
} catch (\Exception $error) {
    error_log($error, 4);
    http_response_code(500);
}
