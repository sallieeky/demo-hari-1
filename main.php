<?php

// Data produk
$products = [
    ['id' => 1, 'name' => 'Laptop','price' => 1500, 'category' => 'Electronics'],
    ['id' => 2, 'name' => 'Phone', 'price' => 800, 'category' => 'Electronics',],
    ['id' => 3, 'name' => 'Desk', 'price' => 200, 'category' => 'Furniture'],
    ['id' => 4, 'name' => 'Chair', 'price' => 100, 'category' => 'Furniture'],
    ['id' => 5, 'name' => 'TV', 'price' => 500, 'category' => 'Electronics'],
];

function main($products) {
    showAllProducts($products);
    countTotalProductByElectronicsCategory($products);
    countTotalPriceByFurnitureCategory($products);
    filterProductByElectronicsCategory($products);
    filterProductByFurnitureCategory($products);
    showEachProductByCategory($products);
}

// Tampilkan semua produk
function showAllProducts($products) {
    echo "=== Produk ===\n";
    foreach ($products as $product) {
        echo "ID: {$product['id']}, Name: {$product['name']}, Price: {$product['price']}, Category: {$product['category']}\n";
    }
}

// Hitung total harga kategori Electronics
function countTotalProductByElectronicsCategory($products) {
    $totalElectronics = 0;
    foreach ($products as $product) {
        if ($product['category'] === 'Electronics') {
            $totalElectronics += $product['price'];
        }
    }
    echo "Total Electronics: $totalElectronics\n";
}

// Hitung total harga kategori Furniture
function countTotalPriceByFurnitureCategory($products) {
    $totalFurniture = 0;
    foreach ($products as $product) {
        if ($product['category'] === 'Furniture') {
            $totalFurniture += $product['price'];
        }
    }
    echo "Total Furniture: $totalFurniture\n";
}

// Filter produk kategori Electronics
function filterProductByElectronicsCategory($products) {
    $electronicsProducts = [];
    foreach ($products as $product) {
        if ($product['category'] === 'Electronics') {
            $electronicsProducts[] = $product;
        }
    }
    echo "=== Produk Electronics ===\n";
    foreach ($electronicsProducts as $product) {
        echo "ID: {$product['id']}, Name: {$product['name']}, Price: {$product['price']}\n";
    }
}

// Filter produk kategori Furniture
function filterProductByFurnitureCategory($products) {
    $furnitureProducts = [];
    foreach ($products as $product) {
        if ($product['category'] === 'Furniture') {
            $furnitureProducts[] = $product;
        }
    }
    echo "=== Produk Furniture ===\n";
    foreach ($furnitureProducts as $product) {
        echo "ID: {$product['id']}, Name: {$product['name']}, Price: {$product['price']}\n";
    }
}

// Tampilkan jumlah produk per kategori
function showEachProductByCategory($products) {
    $electronicsCount = 0;
    $furnitureCount = 0;
    foreach ($products as $product) {
        if ($product['category'] === 'Electronics') {
            $electronicsCount++;
        } elseif ($product['category'] === 'Furniture') {
            $furnitureCount++;
        }
    }
    echo "Jumlah Produk Electronics: $electronicsCount\n";
    echo "Jumlah Produk Furniture: $furnitureCount\n";
}

main($products);