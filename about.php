<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cegah Lubang</title>
    <!-- Bootstrap core CSS -->
    <link href="./_assets/bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./_assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    body {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('./_assets/img/coverdr.svg');
        background-size: cover;
        background-size: 100% 100%;
        background-attachment: fixed;
        font-family: 'Martel Sans', sans-serif;
    }

    .lead {
        color: white;
    }

    h1 {
        color: white;
    }

    .column {
        float: left;
        width: 33.33%;
        padding: 15px;
    }

    .row: after {
        content: "";
        display: table;
        clear: both;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="./_assets/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Cegah Lubang</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <!-- <a class="nav-link" href="#">Features</a> -->
                    <a class="nav-link" href="info.php">Informasi</a>
                    <a class="nav-link active" aria-current="page" href="about.php">Tentang</a>
                    <a class="nav-link" href="login.php">Histori Pengguna</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <div class="row">

                <div class="column">
                    <img src="_assets/img/expert.png" alt="Sistem Pakar" class="img-fluid center"
                        style="height: 100px" />
                    <h3>Apa itu Sistem Pakar?</h3>
                    <p>Sistem pakar merupakan cabang ilmu dari kercerdasan buatan. Sistem pakar adalah disiplin
                        ilmu yang dirincikan oleh sistem berbasis pengetahuan, memiliki potensi bagi komputer untuk
                        berfikir dan
                        mengambil kesimpulan dari rangkaian kaidah (James Ignizo, 1991).</p>
                </div>
                <div class="column">

                    <img src="_assets/img/profil.png" alt="Profil" class="img-fluid center" style="height: 100px" />
                    <h3>Profil</h3>
                    <p>Frisella Natalida adalah mahasiswi tingkat akhir program studi Ilmu Komputer, fakultas Ilmu
                        Komputer dan Teknologi Informasi, Universitas Sumatera Utara. Saat ini dia sedang mendalami
                        mengenai
                        UI/UX designer dan mengikuti program bootcamp salah satu mitra EduTech yang ada di Indonesia.
                    </p>
                </div>
                <div class="column">

                    <img src="_assets/img/logo.png" alt="Cegah Lubang" class="img-fluid center" style="height: 100px" />
                    <h3>Cegah Lubang</h3>
                    <p>Cegah lubang merupakan website yang menyediakan informasi mengenai gigi berlubang pada balita,
                        selain itu adanya kuesioner untuk mengetahui tingkat risiko gigi berlubang yang menjadi salah
                        satu cara pencegahan dini terjadinya pengalaman gigi berlubang pada balita. Pemrosesan dilakukan
                        dengan metode Fuzzy Mamdani. Website ini dibuat sebagai tugas akhir di program studi S-1 Ilmu
                        Komputer Fasilkom TI USU. </p>
                </div>
            </div>

            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>2022© Cegah Lubang</p>
        </footer>
    </div>


    <?php
    // include_once('config.php');
    // // $result = mysqli_query($mysqli, "SELECT * FROM history");
    // $sql = "SELECT * FROM history";
    // $result = $conn->query($sql);
    // while ($history_data = mysqli_fetch_array($result)) {
    //     echo "<tr>";
    //     echo "<td>" . $history_data['nama'] . "</td>";
    //     echo "<td>" . $history_data['umur'] . "</td>";
    //     echo "<td>" . $history_data['karies'] . "</td>";
    //     // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    // }


    ?>
</body>

</html>