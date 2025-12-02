<?php
require_once 'db.php';
session_start();

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit;
        } else {
            $message = "Username atau password salah!";
        }
    } catch (PDOException $e) {
        $message = "Gagal login: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #D4EBF8 , #1F509A);
            font-family: "Nunito", sans-serif;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 6rem;
            width: 80%;
        }

        .login-title {
            text-align: center;
            color: #0A3981;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .login-image img {
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
        }

        .login-form {
            flex: 1;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .login-form h2 {
            color: #0A3981;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .btn-primary {
            background: #0A3981;
            border-color: #0A3981;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #1F509A;
            border-color: #0A3981;
        }

        .alert-danger {
            font-size: 14px;
            padding: 10px;
            border-radius: 5px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        a {
            color: #1F509A;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Gambar dengan Teks di Atas -->
        <div class="login-image">
            <div class="login-title text-start">
                <h1 class="fw-bold fs-2">Data Encryption Standard</h1>
                <hr></hr>
            </div>
            <img class="mt-3" src="IMG/SIS2.png" alt="Enkripsi DES">
        </div>

        <!-- Form Login -->
        <div class="login-form">
            <h2>Login</h2>
            <?php if ($message): ?>
                <div class="alert alert-danger"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="mt-3 text-center">Belum punya akun? <a href="register.php">Daftar di sini</a>.</p>
        </div>
    </div>
</body>
</html>
