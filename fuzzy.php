<?php include_once('_header.php'); ?>

<div class="box">
    <h1>Perhitungan Fuzzy</h1>
    <p>Menghitung debit irigasi tanaman padi<br><br><br></p>
    <form method="post" action="">
        <div class="form-group row">
            <label class="col-sm-2">karies</label>
            <div class="col-sm-10">
                <input type="number" name="karies" step=0.01 class="form-control" placeholder="Masukkan karies 1-100 °C" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["karies"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">ekonomi</label>
            <div class="col-sm-10">
                <input type="number" name="ekonomi" step=0.01 class="form-control" placeholder="Masukkan ekonomi 1-100 %" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["ekonomi"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Manis</label>
            <div class="col-sm-10">
                <input type="number" name="manis" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["manis"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Imigrasi</label>
            <div class="col-sm-10">
                <input type="number" name="imigrasi" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["imigrasi"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Perawatan Khusus</label>
            <div class="col-sm-10">
                <input type="number" name="perawatanKhusus" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["perawatanKhusus"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Minum Flour</label>
            <div class="col-sm-10">
                <input type="number" name="minumFlour" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["minumFlour"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Bercak Putih</label>
            <div class="col-sm-10">
                <input type="number" name="bercakPutih" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["bercakPutih"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Lubang Tambal</label>
            <div class="col-sm-10">
                <input type="number" name="lubangTambal" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["lubangTambal"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Susu Gula</label>
            <div class="col-sm-10">
                <input type="number" name="susuGula" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["susuGula"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Sikat Gigi</label>
            <div class="col-sm-10">
                <input type="number" name="sikatGigi" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["sikatGigi"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Topikal Flouride</label>
            <div class="col-sm-10">
                <input type="number" name="topikalFLouride" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["topikalFLouride"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Memeriksa Gigi</label>
            <div class="col-sm-10">
                <input type="number" name="memeriksaGigi" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["memeriksaGigi"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Karang Gigi</label>
            <div class="col-sm-10">
                <input type="number" name="karangGigi" step=0.01 class="form-control" placeholder="Masukkan Tinggi Air 1-15 cm" value="<?php if (isset($_POST["submit"])) echo (int)$_POST["karangGigi"] ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include "_fuzzy.php";

?>

<div class="card card-body">
    <?php
    inferensi((int)$_POST["karies"], (int)$_POST["ekonomi"], (int)$_POST["manis"], (int)$_POST["imigrasi"], (int)$_POST["perawatanKhusus"], (int)$_POST["minumFlour"], (int)$_POST["bercakPutih"], (int)$_POST["lubangTambal"],  (int)$_POST["sikatGigi"], (int)$_POST["susuGula"], (int)$_POST["topikalFLouride"], (int)$_POST["memeriksaGigi"], (int)$_POST["karangGigi"]);
    echo "</div>";

    include_once('_foother.php');
    ?>