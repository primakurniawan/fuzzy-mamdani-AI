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
        }

        .lead {
            color: coral;
        }

        h4 {
            color: coral;
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
                <h3 class="float-md-start mb-0">Sistem Pakar</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <!-- <a class="nav-link" href="#">Features</a> -->
                    <a class="nav-link" href="about.php">Tentang</a>
                    <a class="nav-link active" aria-current="page" href="history.php">Histori Pengguna</a>
                </nav>
            </div>
        </header>
        <h4>
            <br>
            <br>

            Tabel Histori Pengguna Aplikasi Sistem Pakar<br>
            <br>
            <br>
        </h4>

        <!-- <main class="px-3"> -->
        <table class="table table-sm table-dark">

            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Tingkat Resiko Gigi Berlubang</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($history_data = mysqli_fetch_array($conn)) {
                echo "<tr>";
                echo "<td> </td>";
                echo "<td>" . $history_data['nama'] . "</td>";
                echo "<td>" . $history_data['umur'] . "</td>";
                echo "<td>" . $history_data['hasil'] . "</td>";
                echo "<td><a href='detail.php?id=$history_data[id]'>Detail</a>";
                echo "<td><a href='delete.php?id=$history_data[id]'>Delete</a></td>";
                echo "<tr>";
            }
            ?>
        </table>
        <!-- </main> -->

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