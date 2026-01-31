<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->all();
        include 'views/product-list.php';
    }

    public function detail($id) {
        $product = $this->productModel->find($id);
        include 'views/product-detail.php';
    }

    public function create() {
        include 'views/product-add.php';
    }

    public function store() {
        if (empty($_POST['name']) || empty($_POST['price'])) {
            die("Vui lòng nhập đầy đủ tên và giá!");
        }

        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'description' => $_POST['description']
        ];

        if ($this->productModel->insert($data)) {
            header("Location: index.php?page=product-list");
        }
    }

    public function edit($id) {
        $product = $this->productModel->find($id);
        include 'views/product-edit.php';
    }

    public function update($id) {
        $data = [
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'description' => $_POST['description']
        ];
        $this->productModel->update($id, $data);
        header("Location: index.php?page=product-list");
    }

    public function destroy($id) {
        $this->productModel->delete($id);
        header("Location: index.php?page=product-list");
    }
}