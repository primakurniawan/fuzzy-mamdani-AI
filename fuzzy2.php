<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Sistem Pakar</title>
    <!-- <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'> -->
    <link href="./_assets/bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        body {
            background: #212529
        }

        #regForm {
            background-color: #ebebeb;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        h1 {
            text-align: center
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            -webkit-appearance: none
        }

        .tab input:focus {
            border: 1px solid #212529 !important;
            outline: none
        }

        input.invalid {
            border: 1px solid #e03a0666
        }

        .tab {
            display: none
        }

        button {
            background-color: #212529;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        button:hover {
            opacity: 0.8
        }

        button:focus {
            outline: none !important
        }

        #prevBtn {
            background-color: #212529
        }

        #submit {
            display: none;
            background-color: #212529;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
            display: inline-flex;
            justify-content: center
        }

        .step {
            height: 40px;
            width: 40px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            color: #212529;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            color: #fff;
            background: #212529;
            opacity: 1
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px
        }

        .thanks-message {
            display: none
        }
    </style>
</head>

<body oncontextmenu='return false' class=''>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm" action="fuzzy.php" method="POST">
                    <h1 id="register">Sistem Pakar</h1>
                    <div class="all-steps" id="all-steps"> <span class="step">
                            <i class="fa fa-user"></i></span> <span class="step">
                            <i class="fa fa-map-marker"></i></span> <span class="step">
                            <i class="fa fa-home"></i></span> <span class="step">
                            <i class="fas fa-hospital"></i></span> <span class="step">
                            <i class="fas fa-wine-glass"></i></span> <span class="step">
                            <i class="fas fa-utensils"></i></span> <span class="step">
                            <i class="fas fa-dollar-sign"></i></span> <span class="step">
                            <i class="far fa-hospital"></i></span> <span class="step">
                            <i class="fas fa-medkit"></i></span> <span class="step">
                            <i class="fas fa-bath"></i></span> <span class="step">
                            <i class="fas fa-beer"></i></span> <span class="step">
                            <i class="fas fa-plane"></i></span> <span class="step">
                            <i class="fas fa-search-plus"></i></span> <span class="step">
                            <i class="fas fa-wrench"></i></span> <span class="step">
                            <i class="far fa-life-ring"></i> </span>
                    </div>
                    <div class="tab">
                        <h6>Masukkan nama</h6>
                        <p> <input placeholder="Nama..." oninput="this.className = ''" name="fname"></p>
                    </div>
                    <div class="tab">
                        <h6>Masukkan umur</h6>
                        <p><input type="number" placeholder="Umur" oninput="this.className = ''" name="dd"></p>
                    </div>
                    <div class="tab">
                        <h6>Orangtua yang memiliki karies ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="karies" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1">Kedua orang tua tidak memiliki gigi berlubang</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="karies" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Ayah/Ibu salah satu orang tua memiliki gigi berlubang</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="karies" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">Kedua orang tua memiliki gigi berlubang</label>
                        </div>
                        <!-- <p>
                            <select name="karies" id="">
                                <option value="1">Kedua orang tua tidak memiliki gigi berlubang</option>
                                <option value="2">Ayah/Ibu salah satu orang tua memiliki gigi berlubang</option>
                                <option value="3">Kedua orang tua memiliki gigi berlubang</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang membutuhkan perawatan khusus ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="perawatanKhusus" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1">Tidak ada perawatan khusus</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="perawatanKhusus" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Ada 1 perawatan khusus</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="perawatanKhusus" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">Lebih dari 1 perawatan khusus</label>
                        </div>
                        <!-- <p>
                            <select name="perawatanKhusus" id="">
                                <option value="1">Tidak ada perawatan khusus</option>
                                <option value="2">Ada 1 perawatan khusus</option>
                                <option value="3">Lebih dari 1 perawatan khusus</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang meminum susu botol sebelum tidur
                            dengan susu murni atau ada penambahan gula ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="susuGula" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1">Susu murni (tidak ada penambahan gula</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="susuGula" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Penambahan gula 1 sendok</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="susuGula" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">Penambahan gula > 2 sendok</label>
                        </div>
                        <!-- <p>
                            <select name="susuGula" id="">
                                <option value="1">Susu murni (tidak ada penambahan gula)</option>
                                <option value="2">Penambahan gula 1 sendok</option>
                                <option value="3">Penambahan gula > 2 sendok</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki konsumsi makanan ringan
                            atau minuman manis lebih dari 3 kali/hari ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="manis" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1">1 kali/hari</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="manis" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">2 – 3 kali/hari</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="manis" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2"> > 3 kali/hari</label>
                        </div>
                        <!-- <p>
                            <select name="manis" id="">
                                <option value="1">1 kali/hari</option>
                                <option value="2">2 – 3 kali/hari</option>
                                <option value="3">> 3 kali/hari</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Orangtua yang memilki status ekonomi rendah
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="ekonomi" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1"> > Rp.5.000.000</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="ekonomi" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Rp.2.000.000-Rp.5.000.000</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="ekonomi" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">
                                < Rp.2.000.000</label>
                        </div>
                        <!-- <p>
                            <select name="ekonomi" id="">
                                <option value="1">> Rp.5.000.000</option>
                                <option value="2">Rp.2.000.000-Rp.5.000.000</option>
                                <option value="3">
                                    < Rp.2.000.000</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang rutin memeriksa kesehatan gigi secara
                            teratur ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="memeriksaGigi" id="" value="3">
                            <label class="form-check-label" for="inlineRadio1"> Tidak pernah</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="memeriksaGigi" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Setahun sekali</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="memeriksaGigi" id="" value="1">
                            <label class="form-check-label" for="inlineRadio2">
                                Enam bulan sekali</label>
                        </div>
                        <!-- <p>
                            <select name="memeriksaGigi" id="">
                                <option value="3">Tidak pernah</option>
                                <option value="2">Setahun sekali</option>
                                <option value="1">
                                    Enam bulan sekali</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang menerima topikal aplikasi fluor dari
                            dokter gigi
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="topikalFLouride" id="" value="3">
                            <label class="form-check-label" for="inlineRadio1"> Tidak pernah</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="topikalFLouride" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 kali/ tahun</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="topikalFLouride" id="" value="1">
                            <label class="form-check-label" for="inlineRadio2">
                                2 kali / tahun </label>
                        </div>

                        <!-- <p>
                            <select name="topikalFLouride" id="">
                                <option value="3">Tidak pernah</option>
                                <option value="2">1 kali/ tahun</option>
                                <option value="1">
                                    2 kali/ tahun</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang menggosok gigi setiap hari dengan
                            pasta gigi fluoride?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="sikatGigi" id="" value="3">
                            <label class="form-check-label" for="inlineRadio1"> Tidak pernah</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="sikatGigi" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 kali/ hari</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="sikatGigi" id="" value="1">
                            <label class="form-check-label" for="inlineRadio2">
                                2 kali/ hari </label>
                        </div>
                        <!-- <p>
                            <select name="sikatGigi" id="">
                                <option value="1">Tidak pernah</option>
                                <option value="2">1 kali/ hari</option>
                                <option value="3">
                                    2 kali/ hari</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang menerima air minum yang
                            mengandung fluor atau suplemen fluor secara
                            optimal
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="minumFlour" id="" value="3">
                            <label class="form-check-label" for="inlineRadio1"> Tidak ada sama sekali</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="minumFlour" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">Kadang-kadang</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="minumFlour" id="" value="1">
                            <label class="form-check-label" for="inlineRadio2">
                                Rutin </label>
                        </div>
                        <!-- <p>
                            <select name="minumFlour" id="">
                                <option value="1">Tidak ada sama sekali</option>
                                <option value="2">Kadang-kadang</option>
                                <option value="3">
                                    Rutin</option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang baru berimigrasi
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="imigrasi" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1"> Tidak pernah berimigrasi</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="imigrasi" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 kali berimigrasi</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="imigrasi" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">
                                Lebih dari 1 kali berimigrasi </label>
                        </div>
                        <!-- <p>
                            <select name="imigrasi" id="">
                                <option value="1">Tidak pernah berimigrasi</option>
                                <option value="2">1 kali berimigrasi</option>
                                <option value="3">
                                    Lebih dari 1 kali berimigrasi
                                </option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki karang gigi
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="karangGigi" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1"> Tidak Ada</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="karangGigi" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 – 3 Gigi</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="karangGigi" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">
                                > 3 Gigi</label>
                        </div>
                        <!-- <p>
                            <select name="karangGigi" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1 – 3 gigi</option>
                                <option value="3">
                                    > 3 gigi
                                </option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki lubang/ tambalan
                            ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="lubangTambal" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1"> Tidak Ada</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="lubangTambal" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 – 3 Lubang/ Tambalan</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="lubangTambal" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">
                                > 3 Lubang/ Tambalan</label>
                        </div>
                        <!-- <p>
                            <select name="lubangTambal" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1 – 3 lubang/ tambalan</option>
                                <option value="3">
                                    > 3 lubang/ tambalan
                                </option>
                            </select>
                        </p> -->
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki bercak putih pada gigi ?</h6>
                        <div class="form-check">
                            <input checked class="form-check-input" type="radio" name="bercakPutih" id="" value="1">
                            <label class="form-check-label" for="inlineRadio1"> Tidak Ada</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bercakPutih" id="" value="2">
                            <label class="form-check-label" for="inlineRadio2">1 – 3 Bercak Putih</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bercakPutih" id="" value="3">
                            <label class="form-check-label" for="inlineRadio2">
                                > 3 Bercak Putih</label>
                        </div>
                        <!-- <p>
                            <select name="bercakPutih" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1-3 bercak putih</option>
                                <option value="3">
                                    > 3 bercak putih
                                </option>
                            </select>
                        </p> -->
                    </div>

                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button>
                            <button type="submit" name="Submit" id="submit" class="btn btn-sucess"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>
        var currentTab = 0;
        document.addEventListener("DOMContentLoaded", function(event) {
            showTab(currentTab);
        });

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style.display = "none";
                document.getElementById("submit").style.display = "inline";
            } else {
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("submit").style.display = "none";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab += n;

            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";

        }
    </script>
</body>

</html>