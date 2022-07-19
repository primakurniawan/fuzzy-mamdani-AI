<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$conn = mysqli_query($conn, "SELECT * FROM history ORDER BY id ASC");
?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Gigi Balita</title>
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
        color: #6C63FF;
    }



    table {
        counter-reset: rowNumber;
    }

    table tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
        counter-increment: rowNumber;

    }
    </style>


    <!-- Custom styles for this template -->
    <link href="./_assets/css/coverhistory.css" rel="stylesheet">
</head>

<body class="d-flex text-center text-white bg-dark">

    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Cegah Lubang</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <a class="nav-link" href="info.php">Informasi</a>
                    <a class="nav-link" href="about.php">Tentang</a>
                    <a class="nav-link active" aria-current="page" href="history.php">Histori Pengguna</a>
                </nav>
            </div>
        </header>
        <h3 style="color:#6C63FF;">
            <br>
            <br>

            Tabel Histori Pengguna Cegah Lubang<br>
            <br>
            <br>
        </h3>

        <!-- <main class="px-3"> -->
        <table class="table table-sm table-dark">

            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Nomor HP</th>
                <th>NIlai Risiko Gigi Berlubang</th>
                <th>Tingkat Risiko Gigi Berlubang</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            while ($history_data = mysqli_fetch_array($conn)) {
                echo "<tr>";
                echo "<td> </td>";
                echo "<td>" . $history_data['nama'] . "</td>";
                echo "<td>" . $history_data['umur'] . "</td>";
                echo "<td>" . $history_data['nohp'] . "</td>";
                echo "<td>" . $history_data['hasil'] . "</td>";
                $tingkat = "";
                if ($history_data['hasil'] <= 1 + (2 / 3)) {
                    $tingkat = 'Rendah';
                } else if ($history_data['hasil'] <= 1 + (4 / 3)) {
                    $tingkat = 'Sedang';
                } else {
                    $tingkat = 'Tinggi';
                }
                echo "<td>" . $tingkat . "</td>";
                echo "<td><a href='detail.php?id=$history_data[id]'>Detail</a>";
                echo "<td><a href='delete.php?id=$history_data[id]'>Delete</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
        <!-- </main> -->

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