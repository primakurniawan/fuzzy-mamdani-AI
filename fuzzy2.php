<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            background: #eee
        }

        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        #register {
            color: #6A1B9A
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
            border: 1px solid #6a1b9a !important;
            outline: none
        }

        input.invalid {
            border: 1px solid #e03a0666
        }

        .tab {
            display: none
        }

        button {
            background-color: #6A1B9A;
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
            background-color: #bbbbbb
        }

        #submit {
            background-color: #bbbbbb;
            display: none
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
            color: #6a1b9a;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            color: #fff;
            background: #6a1b9a;
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

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm" action="fuzzy.php" method="POST">
                    <h1 id="register">Survey Form</h1>
                    <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fa fa-shopping-bag"></i></span> <span class="step"><i class="fa fa-car"></i></span> <span class="step"><i class="fa fa-spotify"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
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
                        <p>
                            <select name="karies" id="">
                                <option value="1">Kedua orang tua tidak memiliki gigi berlubang</option>
                                <option value="2">Ayah/Ibu salah satu orang tua memiliki gigi berlubang</option>
                                <option value="3">Kedua orang tua memiliki gigi berlubang</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang membutuhkan perawatan khusus ?</h6>
                        <p>
                            <select name="perawatanKhusus" id="">
                                <option value="1">Tidak ada perawatan khusus</option>
                                <option value="2">Ada 1 perawatan khusus</option>
                                <option value="3">Lebih dari 1 perawatan khusus</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang meminum susu botol sebelum tidur
                            dengan susu murni atau ada penambahan gula ?</h6>
                        <p>
                            <select name="susuGula" id="">
                                <option value="1">Susu murni (tidak ada penambahan gula)</option>
                                <option value="2">Penambahan gula 1 sendok</option>
                                <option value="3">Penambahan gula > 2 sendok</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki konsumsi makanan ringan
                            atau minuman manis lebih dari 3 kali/hari ?</h6>
                        <p>
                            <select name="manis" id="">
                                <option value="1">1 kali/hari</option>
                                <option value="2">2 – 3 kali/hari</option>
                                <option value="3">> 3 kali/hari</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Orangtua yang memilki status ekonomi rendah
                            ?</h6>
                        <p>
                            <select name="ekonomi" id="">
                                <option value="1">> Rp.5.000.000</option>
                                <option value="2">Rp.2.000.000-Rp.5.000.000</option>
                                <option value="3">
                                    < Rp.2.000.000</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang rutin memeriksa kesehatan gigi secara
                            teratur
                            ?</h6>
                        <p>
                            <select name="memeriksaGigi" id="">
                                <option value="1">Tidak pernah</option>
                                <option value="2">Setahun sekali</option>
                                <option value="3">
                                    Enam bulan sekali</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang menerima topikal aplikasi fluor dari
                            dokter gigi
                            ?</h6>
                        <p>
                            <select name="topikalFLouride" id="">
                                <option value="1">Tidak pernah</option>
                                <option value="2">1 kali/ tahun</option>
                                <option value="3">
                                    2 kali/ tahun</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang menggosok gigi setiap hari dengan
                            pasta gigi fluoride
                            ?</h6>
                        <p>
                            <select name="sikatGigi" id="">
                                <option value="1">Tidak pernah</option>
                                <option value="2">1 kali/ hari</option>
                                <option value="3">
                                    2 kali/ hari</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang menerima air minum yang
                            mengandung fluor atau suplemen fluor secara
                            optimal
                            ?</h6>
                        <p>
                            <select name="minumFlour" id="">
                                <option value="1">Tidak ada sama sekali</option>
                                <option value="2">Kadang-kadang</option>
                                <option value="3">
                                    Rutin</option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang baru berimigrasi
                            ?</h6>
                        <p>
                            <select name="imigrasi" id="">
                                <option value="1">Tidak pernah berimigrasi</option>
                                <option value="2">1 kali berimigrasi</option>
                                <option value="3">
                                    Lebih dari 1 kali berimigrasi
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki karang gigi
                            ?</h6>
                        <p>
                            <select name="karangGigi" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1 – 3 gigi</option>
                                <option value="3">
                                    > 3 gigi
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki lubang/ tambalan
                            ?</h6>
                        <p>
                            <select name="lubangTambal" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1 – 3 lubang/ tambalan</option>
                                <option value="3">
                                    > 3 lubang/ tambalan
                                </option>
                            </select>
                        </p>
                    </div>
                    <div class="tab">
                        <h6>Anak yang memiliki bercak putih pada gigi
                            ?</h6>
                        <p>
                            <select name="bercakPutih" id="">
                                <option value="1">Tidak ada</option>
                                <option value="2">1-3 bercak putih</option>
                                <option value="3">
                                    > 3 bercak putih
                                </option>
                            </select>
                        </p>
                    </div>

                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button>
                            <button type="submit" id="submit" class="btn btn-sucess"><i class="fa fa-paper-plane"></i></button>
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
                document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
            } else {
                document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length - 1) {

                document.getElementById("submit").style.display = "block";
                document.getElementsByClassName("fa-angle-double-right").style.display = "none";
            }
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