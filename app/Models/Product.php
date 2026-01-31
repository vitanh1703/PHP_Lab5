<?php
namespace App\Models;

class Product extends BaseModel {
    public function all() {
        return $this->pdo->query("SELECT * FROM products ORDER BY id DESC")->fetchAll();
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insert($data) {
        $sql = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['name'], 
            $data['price'], 
            $data['description']
        ]);
    }

    public function update($id, $data) {
        $sql = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $data['name'], 
            $data['price'], 
            $data['description'], 
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}