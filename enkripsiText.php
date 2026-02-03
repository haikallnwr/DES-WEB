<?php
session_start();
require_once 'functions.php';

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

$encryptedText = "";

// Proses Enkripsi
if (isset($_POST['encrypt_text']) && !empty($_POST['plain_text'])) {
    $plainText = $_POST['plain_text'];
    $encryptedText = base64_encode(des_encrypt($plainText)); // Encode hasil enkripsi agar aman ditampilkan
}

// Proses Reset
if (isset($_POST['reset'])) {
    $encryptedText = "";
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/enkripsiTeks.css">
</head>
<body>
<nav class="navbar navbar-expand-lg p-3 sticky-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center fs-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link me-4" href="home.php">Beranda</a>
                </li>
                <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown d-flex align-items-center" href="#" id="enkripsiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Enkripsi <i class="bi bi-caret-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="enkripsiDropdown">
                        <li><a class="dropdown-item" href="enkripsiFile.php">Enkripsi File</a></li>
                        <li><a class="dropdown-item" href="enkripsiText.php">Enkripsi Teks</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown me-4 d-flex align-items-center" href="#" id="dekripsiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dekripsi <i class="bi bi-caret-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dekripsiDropdown">
                        <li><a class="dropdown-item" href="dekripsiFile.php">Dekripsi File</a></li>
                        <li><a class="dropdown-item" href="dekripsiText.php">Dekripsi Teks</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ms-auto">
            <a href="login.php?logout=true" class="btn logout-btn">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="text-center mb-3">
        <h3 class="title-ck fs-2 fw-bolder">Implementasi DES</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="mb-4 text-center fw-bold text-dark">Enkripsi Pesan</h5>
                    <!-- Form Enkripsi -->
                    <form method="POST" class="mb-3">
                        <div class="mb-3">
                            <input type="text" id="plain_text" name="plain_text" class="form-control" placeholder="Masukan Teks">
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" name="encrypt_text" class="btn btn-warning text-white">Enkripsi</button>
                        </div>
                    </form>

                    <div class="alert text-dark">
                        <strong>Hasil Enkripsi:</strong> <?php echo htmlspecialchars($encryptedText); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" class="mt-4 text-center">
        <button type="submit" name="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
