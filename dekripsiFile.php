<?php
session_start();
require_once 'functions.php';

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

$message = "";

// Proses Reset
if (isset($_POST['reset'])) {
    $encryptedText = "";
    $decryptedText = "";
}

// Proses Dekripsi File
if (isset($_POST['decrypt_file']) && isset($_FILES['file_to_decrypt'])) {
    $uploadDir = 'uploads/';
    $uploadedFile = $uploadDir . basename($_FILES['file_to_decrypt']['name']);
    $decryptedFile = $uploadDir . 'decrypted_' . basename($_FILES['file_to_decrypt']['name']);

    if (move_uploaded_file($_FILES['file_to_decrypt']['tmp_name'], $uploadedFile)) {
        decrypt_file($uploadedFile, $decryptedFile);
        unlink($uploadedFile); // Hapus file terenkripsi setelah dekripsi
        $message = "File berhasil didekripsi. <a href='$decryptedFile' download>Download File Didekripsi</a>";
    } else {
        $message = "Gagal mengunggah file.";
    }
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
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #0A3981 0%, #2a5298 100%);
            min-height: 100vh;
            color: white;
        }

        .navbar {
            background:rgb(10, 57, 129, 0.3);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .dropdown-item:hover {
            background: rgba(30, 60, 114, 0.1);
            color: #1e3c72;
        }

        .card {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border: none;
            padding: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            color: white;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            box-shadow: none;
        }

        .form-label {
            color: white;
            font-weight: 600;
        }

        .btn-warning {
            background: #0A3981;
            border: none;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
        }

        .btn-warning:hover {
            background: #0A3981;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgb(10, 57, 129, 0.3);
        }

        .btn-secondary {
            background: #E38E49;
            border: none;
            font-weight: 600;
            padding: 10px 25px;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background:rgb(219, 127, 52);
            transform: translateY(-2px);
        }

        .title-ck {
            position: relative;
            display: inline-block;
            padding: 1rem;
        }

        .title-ck::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 75%;
            height: 4px;
            background-color: #ffff;
            text-align: center;
        }
    </style>
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
            <div class="col-md-8 ">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="mb-4 text-center fw-bold text-dark">Dekripsi File</h5>
                        <form method="POST" enctype="multipart/form-data" class="mb-3">
                            <div class="mb-3">
                                
                                <input type="file" id="file_to_decrypt" name="file_to_decrypt" class="form-control" required>
                            </div>
                            <?php if (!empty($message)): ?>
                            <div class="alert alert-info"><?php echo $message; ?></div>
                            <?php endif; ?>
                            <div class="text-center">
                                <button type="submit" name="decrypt_file" class="btn btn-warning text-white mb-3 mt-3">Dekripsi</button>
                            </div>
                        </form>
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