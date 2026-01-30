<?php
require 'vendor/autoload.php';

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    (new App\Controllers\HomeController())->index();
} elseif ($page === 'students') {
    (new App\Controllers\StudentController())->index();
} else {
    echo "404 - Không tìm thấy trang";
}