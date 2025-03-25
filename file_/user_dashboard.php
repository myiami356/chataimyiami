<?php
include '_partials/_template/header.php';
include "Koneksi.php";
// Cek apakah pengguna sudah login dan memiliki role user biasa (role_id = 1)
if (!isset($_SESSION['user_id']) || $_SESSION['role_id'] != 1) {
    // Jika belum login atau bukan user biasa, redirect ke halaman login
    header("Location: index.php?page=login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
<div class="p-5 text-light  d-flex align-items-center position-relative" style="border-top: 4px solid rgb(34, 200, 255);
                      border-bottom : 6px solid rgb(34, 200, 255); 
                      border-right: 10px solid rgb(34, 200, 255);
                      border-left : 10px solid rgb(34, 200, 255);
                      border-top-right-radius: 40px;
                      border-top-left-radius: 40px;
                      border-radius: 70px 70px 70px 70px;
                      background-color: darkblue;">
            <div>
                <h1 class="fw-bold" style="font-size: 60px;">Selamat Datang, <?php echo $_SESSION['fullname']; ?></h1>
             
                <p class="text-light">Ini adalah halaman user dashboard. Jelajahi fitur yang tersedia di sini.</p>
            </div>
        </div>
    </div>
</body>
</html>