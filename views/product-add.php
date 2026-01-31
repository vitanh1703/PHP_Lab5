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
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Thêm sản phẩm mới</h5>
            </div>
            <div class="card-body">
                <form action="index.php?page=product-store" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="VD: Laptop Dell XPS..." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá (VNĐ)</label>
                        <input type="number" name="price" class="form-control" placeholder="VD: 25000000" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Nhập mô tả sản phẩm..."></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php?page=product-list" class="btn btn-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-success">Lưu sản phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>