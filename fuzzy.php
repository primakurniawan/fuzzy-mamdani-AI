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
            background-color: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
            /* background-image: url('./_assets/img/coverdr.svg'); */
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

        #detail1 {
            display: none;
            text-align: left;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="./_assets/css/cover.css" rel="stylesheet">
    <link href="modals.css" rel="stylesheet">

</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <?php
    include "_fuzzy.php";

    ?>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
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
            <h1>Hasil</h1>

            <div id="detail1">
                <?php
                $hasil = inferensi((int)$_POST["karies"], (int)$_POST["ekonomi"], (int)$_POST["manis"], (int)$_POST["imigrasi"], (int)$_POST["perawatanKhusus"], (int)$_POST["minumFlour"], (int)$_POST["bercakPutih"], (int)$_POST["lubangTambal"],  (int)$_POST["sikatGigi"], (int)$_POST["susuGula"], (int)$_POST["topikalFLouride"], (int)$_POST["memeriksaGigi"], (int)$_POST["karangGigi"]);
                $tingkat = "";
                if ($hasil <= 1 + (2 / 3)) {
                    $tingkat = 'Rendah';
                } else if ($hasil <= 1 + (4 / 3)) {
                    $tingkat = 'Sedang';
                } else {
                    $tingkat = 'Tinggi';
                }


                ?>
            </div>
            <div>
                <p class="h4">
                    <?php
                    echo "Nama Balita " . $_POST["fname"]; ?>
                    <br>
                    <?php
                    echo "Umur " . $_POST["dd"] . " Tahun";
                    ?>
                    <br>
                    <?php
                    echo "<h3>Tingkat Resiko Gigi Berlubang $tingkat</h3>"

                    ?>
                </p>
                <button class="btn btn-primary" type="button" id="detailopen">Lebih Lanjut</button>
            </div>


        </main>
        <footer class="mt-auto text-white-50">
            <p>Aplikasi Menggunakan Metode Fuzzy Mamdina</p>
        </footer>
    </div>


    <script>
        var detail1 = document.getElementById('detail1')
        var detailopen = document.getElementById('detailopen')
        detailopen.addEventListener('click', e => {
            e.preventDefault()
            detail1.style.display = 'block'
        })
    </script>
</body>

</html>

<?php
// Check If form submitted, insert form data into users table.
$name = $_POST['fname'];
$age = $_POST['dd'];
$karies = (int)$_POST["karies"];
$ekonomi = (int)$_POST["ekonomi"];
$manis = (int)$_POST["manis"];
$imigrasi = (int)$_POST["imigrasi"];
$perawatanKhusus = (int)$_POST["perawatanKhusus"];
$minumFlour = (int)$_POST["minumFlour"];
$bercakPutih = (int)$_POST["bercakPutih"];
$lubangTambal = (int)$_POST["lubangTambal"];
$sikatGigi = (int)$_POST["sikatGigi"];
$susuGula = (int)$_POST["susuGula"];
$topikalFLouride = (int)$_POST["topikalFLouride"];
$memeriksaGigi = (int)$_POST["memeriksaGigi"];
$karangGigi = (int)$_POST["karangGigi"];

// include database connection file
include_once("config.php");
// Check username is exists or not
$query = "SELECT count(*) as allcount FROM history 
          WHERE nama='" . $name . "' && umur='" . $age . "' && 
          karies='" . $karies . "' && imigrasi='" . $imigrasi . "'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$allcount = $row['allcount'];

// insert new record
if ($allcount == 0) {
    $sql = "INSERT INTO history(nama,umur, karies, ekonomi, manis, imigrasi, perawatan_khusus, minum_flour, bercak_putih, lubang_tambal,  sikat_gigi, susu_gula, topikal_fLouride, memeriksa_gigi, karang_gigi, hasil) VALUES('$name',$age, $karies,$ekonomi,$manis,$imigrasi,$perawatanKhusus,$minumFlour,$bercakPutih,$lubangTambal,$sikatGigi,$susuGula,$topikalFLouride,$memeriksaGigi,$karangGigi, $hasil)";
    $conn->query($sql);
}
// Insert user data into table

// if ($conn->query($sql)) {
//     printf("Record inserted successfully.<br />");
// }
// if ($conn->errno) {
//     printf("Could not insert record into table: %s<br />", $conn->errno);
// }
$conn->close();

// Show message when user added
// echo "History added successfully. <a href='index.php'>View Users</a>";
?>