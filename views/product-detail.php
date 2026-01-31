<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm - Lab 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow border-info">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Chi tiết sản phẩm #<?= $product['id'] ?></h5>
            </div>
            <div class="card-body">
                <h3><?= $product['name'] ?></h3>
                <hr>
                <p><strong>Giá bán:</strong> <span class="text-danger fs-4"><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</span></p>
                <p><strong>Ngày nhập:</strong> <?= $product['created_at'] ?></p>
                <p><strong>Mô tả sản phẩm:</strong></p>
                <div class="p-3 bg-light border rounded">
                    <?= nl2br($product['description']) ?>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại danh sách</a>
                <a href="index.php?page=product-edit&id=<?= $product['id'] ?>" class="btn btn-warning">Sửa thông tin</a>
            </div>
        </div>
    </div>
</div>