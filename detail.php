<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $name = $_POST['nama'];
    $mobile = $_POST['umur'];
    $email = $_POST['karies'];

    // update user data
    $conn = mysqli_query($conn, "UPDATE history SET name='$name',umur='$umur',karies='$karies' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    // header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$conn = mysqli_query($conn, "SELECT * FROM history WHERE id=$id");

while ($user_data = mysqli_fetch_array($conn)) {
    $nama = $user_data['nama'];
    $umur = $user_data['umur'];
    $karies = $user_data['karies'];
    $ekonomi = $user_data['ekonomi'];
    $manis = $user_data['manis'];
    $imigrasi = $user_data['imigrasi'];
    $perawatanKhusus = $user_data['perawatan_khusus'];
    $minumFlour = $user_data['minum_flour'];
    $bercakPutih = $user_data['bercak_putih'];
    $lubangTambal = $user_data['lubang_tambal'];
    $sikatGigi = $user_data['sikat_gigi'];
    $susuGula = $user_data['susu_gula'];
    $topikalFLouride = $user_data['topikal_fLouride'];
    $memeriksaGigi = $user_data['memeriksa_gigi'];
    $karangGigi = $user_data['karang_gigi'];
    $bercakCoklat = $user_data['bercak_coklat'];
    $gigiGelap = $user_data['gigi_gelap'];
    $gigiKeropos = $user_data['gigi_keropos'];
    $bauMulut = $user_data['bau_mulut'];
    $liurSedikit = $user_data['liur_sedikit'];
    $mulutAsam = $user_data['mulut_asam'];
}
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

        p {
            text-align: left;
        }

        .form-check {
            text-align: left;
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
                    <a class="nav-link" href="#">Tentang</a>
                    <a class="nav-link active" aria-current="page" href="history.php">Histori Pengguna</a>
                </nav>
            </div>

        </header>

        <h4>
            <br>
            <br>
            Detail Histori Pengguna Aplikasi Sistem Pakar<br>
            <br>
            <br>
        </h4>

        <p class="display-6">Nama Anak</p>
        <p class="lead"><?php echo $nama; ?> </p>
        <p class="display-6">Umur Anak</p>
        <p class="lead"><?php echo $umur; ?> Tahun</p>

        <p class=" display-6">Orangtua Yang Memiliki Karies?</p>
        <p class="lead"><?php

                        if ($karies = 1) {
                            echo "Kedua orang tua tidak memiliki gigi berlubang";
                        } elseif ($karies = 2) {
                            echo "Ayah/Ibu salah satu orang tua memiliki gigi berlubang";
                        } elseif ($karies = 3) {
                            echo "Kedua orang tua memiliki gigi berlubang";
                        }
                        ?> </p>


        <p class="display-6">Anak yang membutuhkan perawatan khusus ?</p>
        <p class="lead"><?php

                        if ($perawatanKhusus = 1) {
                            echo "Tidak ada perawatan khusus";
                        } elseif ($perawatanKhusus = 2) {
                            echo "Ada 1 perawatan khusu";
                        } elseif ($perawatanKhusus = 3) {
                            echo "Lebih dari 1 perawatan khusus";
                        }
                        ?> </p>


        <p class="display-6">Anak yang meminum susu botol sebelum tidur
            dengan susu murni atau ada penambahan gula ?</p>
        <p class="lead"><?php

                        if ($susuGula = 1) {
                            echo "Susu murni (tidak ada penambahan gula)";
                        } elseif ($susuGula = 2) {
                            echo "Penambahan gula 1 sendok";
                        } elseif ($susuGula = 3) {
                            echo "Penambahan gula > 2 sendok";
                        }
                        ?> </p>


        <p class="display-6">Anak yang memiliki konsumsi makanan ringan
            atau minuman manis lebih dari 3 kali/hari ?</p>
        <p class="lead"><?php

                        if ($manis = 1) {
                            echo "1 kali/hari";
                        } elseif ($manis = 2) {
                            echo "2 – 3 kali/hari";
                        } elseif ($manis = 3) {
                            echo "> 3 kali/hari";
                        }
                        ?> </p>


        <p class="display-6">Orangtua yang memilki status ekonomi rendah
            ?</p>
        <p class="lead"><?php
                        if ($ekonomi = 1) {
                            echo " > Rp.5.000.000";
                        } elseif ($ekonomi = 2) {
                            echo "Rp.2.000.000-Rp.5.000.000";
                        } elseif ($ekonomi = 3) {
                            echo "< Rp.2.000.000 ";
                        }
                        ?> </p>


        <p class="display-6">Anak yang menerima topikal aplikasi fluor dari
            dokter gigi
            ?</p>
        <p class="lead"><?php

                        if ($topikalFLouride = 3) {
                            echo "Tidak pernah";
                        } elseif ($topikalFLouride = 2) {
                            echo "Setahun sekali";
                        } elseif ($topikalFLouride = 1) {
                            echo "Enam bulan sekali";
                        }
                        ?> </p>


        <p class="display-6">Anak yang menggosok gigi setiap hari dengan
            pasta gigi fluoride?</p>
        <p class="lead"><?php
                        if ($sikatGigi = 3) {
                            echo "Tidak pernah";
                        } elseif ($sikatGigi = 2) {
                            echo "1 kali/ hari";
                        } elseif ($sikatGigi = 1) {
                            echo "2 kali/ hari";
                        }
                        ?> </p>


        <p class="display-6">Anak yang menerima air minum yang
            mengandung fluor atau suplemen fluor secara
            optimal
            ?</p>
        <p class="lead"><?php
                        if ($minumFlour = 3) {
                            echo " Tidak ada sama sekali";
                        } elseif ($minumFlour = 2) {
                            echo "Kadang-kadang";
                        } elseif ($minumFlour = 1) {
                            echo "Rutin";
                        }
                        ?> </p>


        <p class="display-6">Anak yang baru berimigrasi
            ?</p>
        <p class="lead"><?php
                        if ($imigrasi = 1) {
                            echo " Tidak pernah berimigrasi";
                        } elseif ($imigrasi = 2) {
                            echo "1 kali berimigrasi";
                        } elseif ($imigrasi = 3) {
                            echo "Lebih dari 1 kali berimigrasi ";
                        }
                        ?> </p>


        <p class="display-6">Anak yang rutin memeriksa kesehatan gigi secara
            teratur </p>
        <p class="lead"><?php
                        if ($memeriksaGigi = 3) {
                            echo " Tidak pernah";
                        } elseif ($memeriksaGigi = 2) {
                            echo "Setahun sekali";
                        } elseif ($memeriksaGigi = 1) {
                            echo "Enam bulan sekalii ";
                        }
                        ?> </p>


        <p class="display-6">Anak yang memiliki karang gigi
            ?</p>
        <p class="lead"><?php
                        if ($karangGigi = 1) {
                            echo " Tidak Ada";
                        } elseif ($karangGigi = 2) {
                            echo "1 – 3 Gigi";
                        } elseif ($karangGigi = 3) {
                            echo "> 3 Gigi ";
                        }
                        ?> </p>


        <p class="display-6">Anak yang memiliki lubang/ tambalan
            ?</p>
        <p class="lead"><?php
                        if ($lubangTambal = 1) {
                            echo " Tidak Ada";
                        } elseif ($lubangTambal = 2) {
                            echo "1 – 3 Lubang/ Tambalan";
                        } elseif ($lubangTambal = 3) {
                            echo "> 3 Lubang/ Tambalan ";
                        }
                        ?> </p>


        <p class="display-6">Anak yang memiliki bercak putih pada gigi ?</p>
        <p class="lead"><?php
                        if ($bercakPutih = 1) {
                            echo " Tidak Ada";
                        } elseif ($bercakPutih = 2) {
                            echo "1 – 3 Bercak Putih";
                        } elseif ($bercakPutih = 3) {
                            echo "> 3 Bercak Putih ";
                        }
                        ?> </p>


        <p class="display-6">Apakah ada muncul gejala?</p>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="bercak_coklat" id="check1" <?php if ($bercakCoklat == 1) echo "checked" ?>>
            <label class="form-check-label lead text-left" for="check1">
                Ada bercak coklat muda di gigi
            </label>
        </div>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="gigi_gelap" id="check2" <?php if ($gigiGelap == 1) echo "checked" ?>>
            <label class="form-check-label lead text-left" for="check2">
                Bagian gigi berubah warna menjadi gelap (hitam)
            </label>
        </div>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="gigi_keropos" id="check3" <?php if ($gigiKeropos == 1) echo "checked" ?>>
            <label class="form-check-label lead text-left" for="check3">
                Gigi keropos
            </label>
        </div>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="bau_mulut" id="check4" <?php if ($bauMulut == 1) echo "checked" ?>>
            <label class="form-check-label lead text-left" for="check4">
                Bau mulut
            </label>
        </div>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="liur_sedikit" id="check5" <?php if ($liurSedikit == 1) echo "checked" ?>>
            <label class="form-check-label lead text-left" for="check5">
                Jumlah aliran air liur sedikit
            </label>
        </div>
        <div class="form-check">
            <input disabled class="form-check-input" type="checkbox" name="checkbox[]" value="mulut_asam" id="check6" <?php if ($mulutAsam == 1) echo "checked" ?>>
            <label class="form-check-label lead " for="check6">
                Mulut terasa asam
            </label>
        </div>



        <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?> disabled></td>

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
    //     echo "";
    //     echo "<td>" . $history_data['nama'] . "</td>";
    //     echo "<td>" . $history_data['umur'] . "</td>";
    //     echo "<td>" . $history_data['karies'] . "</td>";
    //     // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";        
    // }


    ?>
</body>

</html>