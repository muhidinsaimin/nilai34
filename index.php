<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Aplikasi Nilai Rumah Gemilang Indonesia</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span>
                <span class="site-heading-upper text-primary mb-3">Rumah Gemilang Indonesia</span>
                <span class="site-heading-lower">Aplikasi Nilai</span>
            </span>
        </h1>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand fw-bold d-lg-none" href=".">TKJ34</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link" href=".">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link" href="?m=majors">Jurusan</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link" href="?m=students">Siswa</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link" href="?m=subjects">Mata Diklat</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link" href="?m=instructors">Instruktur</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section clearfix">
        <div class="container-fluid">
            <?php
            $m = isset($_GET['m']) ? $_GET['m'] : 'home';
            switch ($m) {
                case 'home':default:
                    include("home.php");
                    break;
                case 'majors':
                    include("majors/index.php");
                    break;
                case 'students':
                    include("students/index.php");
                    break;
            }
            ?>
        </div>
    </section>
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">LAZ Al Azhar</span>
                            <span class="section-heading-lower">Rumah Gemilang Indonesia</span>
                        </h2>
                        <p class="mb-0">Lembaga pendidikan vokasi dan pusat pemberdayaan pemuda usia produktif (putus sekolah/kurang mampu) berbasis pesantren yang dikelola oleh LAZ Al Azhar. RGI menyediakan pelatihan keterampilan gratis selama 6 bulan (kursus singkat) untuk mencetak generasi mandiri, berakhlak baik, dan siap kerja.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; <a href="https://rumahgemilang.id" target="blank" title="Rumah Gemilang Indonesia">RGI</a> - <span title="Teknik Komputer dan Jaringan">TKJ</span> <span title="Sejak Angkatan ke-2 tahun 2009">2009</span>-<?= date('Y') ?> by <a href="https://muhidin.web.id" target="blank">Muhidin</a></p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>