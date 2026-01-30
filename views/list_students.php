<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên - Lab 5 MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="mb-4">Danh sách sinh viên</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Họ tên</th>
                <th>Mã SV</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $sv): ?>
            <tr>
                <td><?= $sv['id'] ?></td>
                <td><?= htmlspecialchars($sv['fullname']) ?></td>
                <td><?= $sv['student_code'] ?></td>
                <td><?= $sv['email'] ?></td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                    <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?page=home" class="btn btn-secondary">Quay lại</a>
</body>
</html>