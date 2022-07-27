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

<body class="d-flex h-100 text-white bg-dark">

    <?php

    
    include "_fuzzy.php";

    ?>
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Cegah Lubang</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="index.php">Beranda</a>
                    <!-- <a class="nav-link" href="#">Features</a> -->
                    <a class="nav-link" href="info.php">Informasi</a>
                    <a class="nav-link" href="about.php">Tentang</a>
                    <a class="nav-link active" aria-current="page" href="history.php">Histori Pengguna</a>

                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1 class="text-center">Hasil</h1>

            <div id="detail1">
                <?php
                $count = 0;
                if (isset($_POST['checkbox'])) {
                    if (is_array($_POST['checkbox'])) {
                        $count = count($_POST['checkbox']);
                    }
                }
                $gejala = ceil($count / 2);
                if ($gejala == 0) $gejala = 1;
                $hasil = inferensi((int)$_POST["karies"], (int)$_POST["ekonomi"], (int)$_POST["manis"], (int)$_POST["imigrasi"], (int)$_POST["perawatanKhusus"], (int)$_POST["minumFlour"], (int)$_POST["bercakPutih"], (int)$_POST["lubangTambal"],  (int)$_POST["sikatGigi"], (int)$_POST["susuGula"], (int)$_POST["topikalFLouride"], (int)$_POST["memeriksaGigi"], (int)$_POST["karangGigi"], $gejala);
                $tingkat = "";
                $saran = "";

                if ($hasil <= 1 + (2 / 3)) {
                    $tingkat = 'Rendah';
                    $saran = 'Menjaga kebersihan gigi dan mulut setiap hari, Melakukan pemeriksaan rutin ke dokter gigi 6 bulan sekali';
                } else if ($hasil <= 1 + (4 / 3)) {
                    $tingkat = 'Sedang';
                    $saran = 'Menjaga kebersihan gigi dan mulut setiap hari, Melakukan pemeriksaan rutin ke dokter gigi 6 bulan sekali, Melakukan aplikasi flour ke dokter gigi';
                } else {
                    $tingkat = 'Tinggi';
                    $saran = 'Menjaga kebersihan gigi dan mulut setiap hari, Melakukan pemeriksaan rutin ke dokter gigi 6 bulan sekali, Melakukan aplikasi flour ke dokter gigi, Merawat gigi yang telah rusak';
                }


                ?>
            </div>

            <div class="container mt-3">

                <table class="table table-borderless border w-50  text-white mx-auto">

                    <tbody>
                        <tr>
                            <th>
                                Nama
                            </th>
                            <td><?php
                    echo $_POST["fname"]; ?> </td>
                        </tr>
                        <tr>
                            <th>
                                No HP
                            </th>
                            <td><?php
                    echo $_POST["no"]; ?> </td>
                        </tr>

                        <tr>
                            <th>Umur</th>
                            <td><?php
                    echo $_POST["dd"]." Tahun"; ?> </td>
                        </tr>

                        <tr>
                            <th>Tingkat Risiko</th>
                            <td><?php
                    echo $tingkat; ?> </td>
                        <tr>
                            <th>Saran</th>
                            <td><?php
                            
                            $listSaran = explode(',', $saran);
                            $len=sizeof($listSaran);
                    echo $listSaran[0]; ?> </td>
                            <?php
                                            $listSaran = explode(',', $saran);
                                            $len=sizeof($listSaran);
                for ($x = 1; $x < $len; $x++) {
                echo "
                <tr>
                <td></td>
                <td>".$listSaran[$x]."</td></tr>"
                                        ;}
                                        ?>

                        </tr>
                        </tr>
                    </tbody>

                </table>
                <div class="w-100 text-center">
                    <button class="btn btn-primary" type="button" id="detailopen">Lebih
                        Lanjut</button> <br>
                </div>
            </div>
        </main>
        <footer class="mt-auto text-center text-white-50">
            <br>
            <p>2022© Cegah Lubang</p>
        </footer>
    </div>


    <script>
    var detail1 = document.getElementById('detail1')
    var detailopen = document.getElementById('detailopen')
    var open = false
    detailopen.addEventListener('click', e => {
        e.preventDefault()
        open = !open
        if (open) {
            detail1.style.display = 'block'
            detailopen.innerText = 'Lebih Sedikit'
        } else {
            detail1.style.display = 'none'
            detailopen.innerText = 'Lebih Lanjut'
        }
    })
    </script>
</body>

</html>

<?php
// Check If form submitted, insert form data into users table.
$name = $_POST['fname'];
$age = $_POST['dd'];
$hp = $_POST['no'];
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
$Lainnya = $_POST['lain'];

// include database connection file
include_once("config.php");
// Check username is exists or not
$query = "SELECT count(*) as allcount FROM history 
          WHERE nama='" . $name . "' && umur='" . $age . "' && nohp='".$hp."' &&
          karies='" . $karies . "' && imigrasi='" . $imigrasi . "'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$allcount = $row['allcount'];
$str = "";
$strNum = "";
if (isset($_POST['checkbox'])) {
    if (is_array($_POST['checkbox'])) {
        foreach ($_POST['checkbox'] as $value) {
            $str .=  ", " . $value;
            $strNum .= "," . 1;
        }
    }
}
if (empty($lainnyaa)) {
  $chk="-";
} else {
  $lainnyaa1 = $_POST['lainnyaa'];
$lainnyaa = array();
    $chk="";  
    foreach($lainnyaa1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  
}


// insert new record
if ($allcount == 0) {
    $sql = "INSERT INTO history(nama,umur, nohp, karies, ekonomi, manis, imigrasi, perawatan_khusus, minum_flour, bercak_putih, lubang_tambal,  sikat_gigi, susu_gula, topikal_fLouride, memeriksa_gigi, karang_gigi, lainnya, lainnya2, hasil" . $str . ") VALUES('$name',$age, $hp, $karies,$ekonomi,$manis,$imigrasi,$perawatanKhusus,$minumFlour,$bercakPutih,$lubangTambal,$sikatGigi,$susuGula,$topikalFLouride,$memeriksaGigi,$karangGigi,'$Lainnya','$chk' ,$hasil" . $strNum . ")";
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