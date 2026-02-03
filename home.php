<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Data Encryption Standard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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



    <header class="heading row align-items-center">
        <div data-aos="fade-right" class="col-md-6 text-center text-md-start text-light">
            <h1 class="fw-bolder">Selamat Datang di Dunia Enkripsi <strong class="span-0 fw-bolder">DES</strong>!</h1>
            <p>
                DES (Data Encryption Standard) adalah salah satu algoritma enkripsi simetris yang dirancang untuk melindungi data dengan mengamankan pesan menggunakan kunci yang sama untuk proses enkripsi dan dekripsi.
            </p>
            <div class="ms-auto">
                <a href="#home" type="button" class="btn logout-btn" disabled>Jelajahi DES</a>
            </div>
        </div>
        <div data-aos="fade-left" class="col-md-6 text-center">
            <img src="IMG/pana4.png" alt="Illustration" class="img-fluid animated">
        </div>
    </header>

    <main class="konten" id="home">
        <div class="row align-items-center mt-3 mb-5 md-6">
            <div data-aos="fade-right" class="col-md-6 mb-4">
                <h2 class="fs-1 fw-bolder">Apa Itu <span class="span-1">DES</span>?</h2>
                <p>
                    <strong>Data Encryption Standard</strong> (DES) adalah algoritma enkripsi simetris yang digunakan untuk mengamankan data. Dalam enkripsi simetris, kunci yang sama digunakan untuk enkripsi dan dekripsi data. DES mengenkripsi data dalam blok-blok berukuran 64 bit dan menggunakan kunci enkripsi berukuran 56 bit.
                </p>
                <p>
                    DES dikembangkan oleh IBM pada awal 1970-an dan diadopsi sebagai standar oleh National Institute of Standards and Technology (NIST) pada tahun 1977. DES menjadi salah satu algoritma enkripsi yang paling banyak digunakan di dunia untuk melindungi data sensitif, termasuk transaksi keuangan dan komunikasi rahasia. Namun, seiring dengan perkembangan teknologi, panjang kunci 56 bit mulai dianggap tidak aman, dan pada tahun 2005, NIST menyarankan untuk beralih ke algoritma yang lebih kuat, seperti Advanced Encryption Standard (AES).
                </p>
            </div>
            <div data-aos="fade-down" class="col-md-6 text-center">
                <img class="img-fluid w-75" src="IMG/DES2.png" alt="DES">
            </div>
        </div>

        <div class="cara-kerja mt-5">
            <div data-aos="fade-up" class="text-center">
            <h2 class="title-ck fs-2 fw-bolder">Cara Kerja DES</h2>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="text-center my-3">
                <img class="w-50 proses" src="IMG/data-encryption-standards-removebg.jpg" alt="">
            </div>
            <div class="row justify-content-center">
                <p data-aos="fade-up" class="text-center">DES bekerja dengan membagi data menjadi blok-blok berukuran 64 bit. Proses enkripsi melibatkan beberapa tahap:</p>

                <div data-aos="fade-up"  class="my-3 me-4" style="max-width: 17rem;">
                    <div class="card-header text-center mb-3">
                        <img src="ICON/icons8-key-100.png" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Pemilihan Kunci</h5>
                        <p class="card-text text-justify px-3">DES menghasilkan 16 kunci 48-bit dari kunci asli 56-bit yang digunakan dalam setiap putaran enkripsi.</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="my-3 me-4" style="max-width: 17rem;">
                    <div class="card-header text-center mb-3">
                        <img src="ICON/icons8-processing-100.png" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Pemrosesan Blok</h5>
                        <p class="card-text text-justify px-3">Setiap blok data diproses melalui 16 putaran, di mana setiap putaran melibatkan substitusi dan permutasi data.</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="my-3 me-4" style="max-width: 17rem;">
                    <div class="card-header text-center mb-3">
                        <img src="ICON/icons8-arrow-100.png" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Substitusi</h5>
                        <p class="card-text text-justify px-3">Data yang masuk ke dalam algoritma dikenakan substitusi menggunakan tabel yang telah ditentukan.</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400" class="my-3" style="width: 17rem;">
                    <div class="card-header text-center mb-3">
                        <img src="ICON/icons8-permutation-100.png" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Permutasi</h5>
                        <p class="card-text text-justify px-3">Setelah substitusi, data akan dipermutasikan untuk meningkatkan keamanan.</p>
                    </div>
                </div>
                <p data-aos="fade-up" class="text-center mb-3 mt-3">Proses ini menghasilkan blok data yang terenkripsi yang hanya dapat didekripsi menggunakan kunci yang sama.</p>
            </div>
        </div>

    <div class="container mt-5">
        <div data-aos="fade-up" class="text-center mb-3">
            <h3 class="title-ck fs-2 fw-bolder">Kelebihan dan Kekurangan DES</h3>
        </div>
    <div class="row">
        <div data-aos="fade-up" data-aos-delay="200" class="col-md-6">
            <div class="card mb-3">
                <div class="card-header text-center bg-success text-white">
                    <i class="bi bi-check-circle"></i> Kelebihan
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> <strong>Sederhana dan Cepat:</strong> DES relatif mudah diimplementasikan dan cepat dalam proses enkripsi dan dekripsi.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> <strong>Standar yang Terbukti:</strong> DES telah digunakan secara luas selama beberapa dekade dan memiliki rekam jejak yang baik dalam keamanan data.</li>
                        <li class="list-group-item"><i class="bi bi-check-circle-fill text-success"></i> <strong>Kompatibilitas:</strong> Banyak sistem dan aplikasi yang mendukung DES, sehingga mudah untuk diintegrasikan.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="300" class="col-md-6">
            <div class="card mb-3">
                <div class="card-header text-center bg-danger text-white">
                    <i class="bi bi-x-circle"></i> Kekurangan
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-x-circle-fill text-danger"></i> <strong>Keamanan:</strong> DES dianggap tidak aman lagi untuk banyak aplikasi karena panjang kunci yang pendek (56-bit) yang rentan terhadap serangan brute force.</li>
                        <li class="list-group-item"><i class="bi bi-x-circle-fill text-danger"></i> <strong>Efisiensi:</strong> DES tidak efisien untuk enkripsi data yang sangat besar karena bekerja pada blok data yang relatif kecil (64-bit).</li>
                        <li class="list-group-item"><i class="bi bi-x-circle-fill text-danger"></i> <strong>Algoritma Lama:</strong> DES adalah algoritma yang sudah tua dan telah digantikan oleh algoritma yang lebih aman seperti AES.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    </main>

    <footer class="footer text-white mt-5 p-4 text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5>Ikuti Kami</h5>
                <a href="#" class="text-white me-4 fs-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-4 fs-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-4 fs-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white fs-3"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="mt-3">
            <p>&copy; 2025 Implementasi Data Encryption Standard.</p>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
     AOS.init({
        delay: 0, 
        duration: 1000, 
     });
    </script>
    </style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    updateNavbar();
    
    window.addEventListener('scroll', updateNavbar);
});
</script>
</body>

</html>
