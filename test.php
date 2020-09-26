<?php



function sortedProductsEndpoint()
{
    $products = readFromFile(PRODUCTS_FILE, []);

    return array_filter($products, function ($product) {
        $categoryId = $_GET['categoryId'];
        if ($categoryId === $product['category_id']) {
            return $product;
        }
    });
}


