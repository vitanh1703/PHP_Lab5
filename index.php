<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product-list';
$id = $_GET['id'] ?? null;

$productController = new ProductController();

switch ($page) {
    case 'product-list':
        $productController->index();
        break;
    case 'product-detail':
        $productController->detail($id);
        break;
    case 'product-add':
        $productController->create();
        break;
    case 'product-store':
        $productController->store();
        break;
    case 'product-edit':
        $productController->edit($id);
        break;
    case 'product-update':
        $productController->update($id);
        break;
    case 'product-delete':
        $productController->destroy($id);
        break;
    default:
        $productController->index();
        break;
}