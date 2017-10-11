<?php

namespace FrancisTerry\Products;

use Stripe;

require_once '../../vendor/autoload.php';
require_once '../env.php';

Stripe\Stripe::setApiKey(getenv('SENDGRID_API_KEY'));

try {
    $products = Stripe\Product::all();

    $skus = [];

    /** @var \Stripe\Product $product */
    foreach ($products->data as $product) {
        $productSkus = array_map(function (Stripe\SKU $sku) use ($product) {
            return [
                'id' => $sku->id,
                'name' => $product->name,
                'price' => $sku->price,
            ];
        }, $product->skus->data);

        $skus = array_merge($skus, $productSkus);
    }

    usort($skus, function ($sku1, $sku2) {
        return $sku1['price'] > $sku2['price'] ? 1 : -1;
    });

    header("Content-Type: application/json;charset=utf-8");
    echo json_encode($skus);
} catch (\Exception $error) {
    http_response_code(500);
}
