<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm - Lab 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Danh sách sản phẩm</h5>
        <a href="index.php?page=product-add" class="btn btn-light btn-sm">Thêm sản phẩm</a>
    </div>
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><strong><?= $p['name'] ?></strong></td>
                    <td class="text-danger fw-bold"><?= number_format($p['price'], 0, ',', '.') ?>đ</td>
                    <td><small class="text-muted"><?= $p['description'] ?></small></td>
                    <td>
                        <a href="index.php?page=product-detail&id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-info">Xem</a>
                        <a href="index.php?page=product-edit&id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-warning">Sửa</a>
                        <a href="index.php?page=product-delete&id=<?= $p['id'] ?>" 
                           onclick="return confirm('Xác nhận xóa?')" 
                           class="btn btn-sm btn-outline-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>