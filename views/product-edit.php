<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sản phẩm - Lab 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow border-warning">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Chỉnh sửa sản phẩm: <?= $product['name'] ?></h5>
            </div>
            <div class="card-body">
                <form action="index.php?page=product-update&id=<?= $product['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá (VNĐ)</label>
                        <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="4"><?= $product['description'] ?></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=product-list" class="btn btn-secondary">Hủy bỏ</a>
                        <button type="submit" class="btn btn-warning">Cập nhật thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>