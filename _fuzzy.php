<br>
<?php
    function nilaiGrafik($nilai)
    {
        echo  "Rendah (" . $nilai[0] . ") </br>";
        echo  "Sedang (" . $nilai[1] . ") </br>";
        echo  "Tinggi (" . $nilai[2] . ") </br>";
        echo "";
    }

    function hasilfuzzifikasi($nilaiRendah, $nilaiSedang, $nilaiTinggi)
    {

        echo "<br><h4><b>Hasil Fuzzifikasi: </b></h4>";

        // echo "<p><b>Nilai Fuzzy Ekonomi OR Imigrasi: </b></p>";
        // nilaiGrafik($nilaiRendah);
        // echo "<p><b>Nilai Fuzzy Karies OR Perawatan Khusus OR Minum Flour OR Bercak Putih OR Lubang Tambal: </b></p>";
        // nilaiGrafik($nilaiSedang);
        // echo "<p><b>Nilai Fuzzy Manis OR Susu Gula OR Sikat Gigi OR Topikal Flouride OR Periksa Gigi OR Karang Gigi OR Mucul Gejala: </b></p>";
        // nilaiGrafik($nilaiTinggi);


        echo "<div class=\"border\"><p><b>Nilai Fuzzy Ekonomi OR Imigrasi: </b></p>Rendah(".$nilaiRendah[0].")</br>Sedang(".$nilaiRendah[1].")</br>Tinggi(".$nilaiRendah[2].")</br></div>";
        echo "<div class=\"border\"><p><b>Nilai Fuzzy Karies OR Perawatan Khusus OR Minum Flour OR Bercak Putih OR Lubang Tambal: </b></p>Rendah(".$nilaiSedang[0].")</br>Sedang(".$nilaiSedang[1].")</br>Tinggi(".$nilaiSedang[2].")</br></div>";
        echo "<div class=\"border\"><p><b>Nilai Fuzzy Manis OR Susu Gula OR Sikat Gigi OR Topikal Flouride OR Periksa Gigi OR Karang Gigi OR Mucul Gejala: </b></p>Rendah(".$nilaiTinggi[0].")</br>Sedang(".$nilaiTinggi[1].")</br>Tinggi(".$nilaiTinggi[2].")</br></div>";
        
    }


    // ini fungsi untuk inferensi, penentuan rules yang dipakai
    function inferensi($karies, $ekonomi, $manis, $imigrasi, $perawatanKhusus, $minumFlour, $bercakPutih, $lubangmbal, $sikatGigi, $susuGula, $topikalFlouride, $periksaGigi, $karangGigi, $gejala)
    {
        //fuzzyfikasi
        $nilaiRendah = calcAvg($ekonomi, $imigrasi); //memiliki tingkta pengaruh yang rendah
        $nilaiSedang = calcAvg($karies, $perawatanKhusus, $minumFlour, $bercakPutih, $lubangmbal); //memiliki tingkta pengaruh yang sedang
        $nilaiTinggi = calcAvg($manis, $susuGula, $sikatGigi, $topikalFlouride, $periksaGigi, $karangGigi, $gejala); //memiliki tingkta pengaruh yang tiggi

        hasilfuzzifikasi($nilaiRendah, $nilaiSedang, $nilaiTinggi);

        echo "<br><h4><b>Rules yang digunakan: </b></h4>";

        $x = 0;
        $no = 1;
        $kondisi = [];

        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                for ($k = 1; $k <= 3; $k++) {

                    // implikasi
                    $minimal[$x] = min($nilaiRendah[$i - 1], $nilaiSedang[$j - 1], $nilaiTinggi[$k - 1]);
                    // Komposisi aturan
                    if ($i <= 2 && $k < 2) {
                        if ($j <= 2) {
                            $kondisi[$x] = "Rendah";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    } else if ($i > 2 && $k >= 2) {
                        if ($j >= 2) {
                            $kondisi[$x] = "Tinggi";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    } else {
                        if ($j > 2) {
                            $kondisi[$x] = "Tinggi";
                        } else if ($j < 2) {
                            $kondisi[$x] = "Rendah";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    }

                    if ($minimal[$x] > 0) {
                        echo "<div class=\"border\"><p>" . $no . ". IF  (Ekonomi OR Imigrasi = " . kondisi($i) . "(" . $nilaiRendah[$i - 1] . ")) AND (Karies OR Perawatan Khusus OR Minum Flour OR Bercak Putih OR Lubang Tambal = " . kondisi($j) . "(" . $nilaiSedang[$j - 1] . ")) AND (Manis OR Susu Gula OR Sikat Gigi OR Topikal Floure OR Periksa Gigi OR Karang Gigi OR Muncul Gejala = " . kondisi($k) . "(" . $nilaiTinggi[$k - 1] . ")) THAN Resiko = " . $kondisi[$x] . "(" . $minimal[$x] . ")</p></div>";
                    } //Hasil Penentuan rules yan digunakan


                    $x++;
                    $no++;
                }
            }
        }
        //Nilai Fuzzy Output
        $nilai_rendah = 0;
        $nilai_sedang = 0;
        $nilai_tinggi = 0;
        for ($l = 0; $l < sizeof($kondisi); $l++) {
            if ($kondisi[$l]  == "Rendah") {
                $nilai_rendah = max($minimal[$l], $nilai_rendah);
            } else if ($kondisi[$l]  == "Sedang") {
                $nilai_sedang = max($minimal[$l], $nilai_sedang);
            } else if ($kondisi[$l]  == "Tinggi") {
                $nilai_tinggi = max($minimal[$l], $nilai_tinggi);
            }
        }
       
        echo "<br><h4><b>Nilai Fuzzy Output: </b></h4>";
        echo "<div class=\"border\"> <p>Resiko Rendah(" . $nilai_rendah . ")</p> <p>Resiko Sedang(" . $nilai_sedang . ")</p><p>Resiko Tinggi( " . $nilai_tinggi . ")</p></div>";
        // echo "<p>Resiko Rendah(" . $nilai_rendah . ")</p>";
        // echo "<p>Resiko Sedang(" . $nilai_sedang . ")</p>";
        // echo "<p>Resiko Tinggi( " . $nilai_tinggi . ")</p>";

        //Defuzzifikasi
        // penentua tingkat resiko gigi berlubang pada balita
        echo '<br><h4><b>Defuzzifikasi</b></h4>';
        
        echo '<p>Menggunakan metode Centroid Method</p>';
        echo '(1 x ' . $nilai_rendah . ') + (2 x ' . $nilai_sedang . ') + (3 x ' . $nilai_tinggi . ') / (' . $nilai_rendah . ' + ' . $nilai_sedang . ' + ' . $nilai_tinggi . ')';

        $nilaiy = ((1 * $nilai_rendah) + (2 * $nilai_sedang) + (3 * $nilai_tinggi)) / ($nilai_rendah + $nilai_sedang + $nilai_tinggi);

        echo "<br><br><h4><b>Tingkat Resiko= </b>" . $nilaiy . "</h4><br>";
        return $nilaiy;
    }

    //fuzzifikasi
    function calc($weight)
    {
        if ($weight == 1) return [1, 0, 0];
        else if ($weight == 2) return [0, 1, 0];
        else if ($weight == 3) return [0, 0, 1];
        return [0, 0, 0];
    }

    function calcAvg(...$vars)
    {
        $newVars = [];
        foreach ($vars as $var) {
            $newVars[] = calc($var);
        }
        $arr = [];
        for ($i = 0; $i < 3; $i++) {
            $arr[$i] = 0;
            foreach ($newVars as $var) {
                $arr[$i] += $var[$i];
            }
            $arr[$i] /= sizeof($newVars);
        }
        return $arr;
    }
    //Codingan Menampilkann resiko
    function kondisi($n)
    {
        if ($n == 1) return "Rendah";
        else if ($n == 2) return "Sedang";
        else if ($n == 3) return "Tinggi";
    }

    ?>