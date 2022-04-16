<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Gigi Balita</title>
    <!-- Bootstrap core CSS -->
    <link href="./_assets/bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
            /* background-color: #E6E6FA; */
        }

        .lead {
            color: coral;
        }

        h1 {
            color: coral;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./_assets/css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Sistem Pakar</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    <!-- <a class="nav-link" href="#">Features</a> -->
                    <a class="nav-link" href="about.php">Tentang</a>
                    <a class="nav-link" href="history.php">Histori Pengguna</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1> Aplikasi Sistem Pakar</h1>
            <p class="lead">Selamat Datang di Aplikasi Sistem Pakar Penilaian Risiko Gigi Berlubang pada Balita</p>
            <p class="lead">
                <a href="fuzzy2.php" role="button" class="btn btn-primary">Mulai</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Aplikasi Menggunakan Metode Fuzzy Mamdina</p>
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