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
        echo "<p><b>Nilai Fuzzy Ekonomi OR Imigrasi: </b></p>";
        nilaiGrafik($nilaiRendah);
        echo "<p><b>Nilai Fuzzy Karies OR Perawatan Khusus OR Minum Flour OR Bercak Putih OR Lubang Tambal: </b></p>";
        nilaiGrafik($nilaiSedang);
        echo "<p><b>Nilai Fuzzy Manis OR Susu Gula OR Sikat Gigi OR Topikal Flouride OR Periksa Gigi OR Karang Gigi: </b></p>";
        nilaiGrafik($nilaiTinggi);
    }

    function inferensi($karies, $ekonomi, $manis, $imigrasi, $perawatanKhusus, $minumFlour, $bercakPutih, $lubangmbal, $sikatGigi, $susuGula, $topikalFlouride, $periksaGigi, $karangGigi)
    {
        //fuzzyfikasi
        $nilaiRendah = calcAvg($ekonomi, $imigrasi);
        $nilaiSedang = calcAvg($karies, $perawatanKhusus, $minumFlour, $bercakPutih, $lubangmbal);
        $nilaiTinggi = calcAvg($manis, $susuGula, $sikatGigi, $topikalFlouride, $periksaGigi, $karangGigi);

        hasilfuzzifikasi($nilaiRendah, $nilaiSedang, $nilaiTinggi);

        echo "<br><h4><b>Rules yang digunakan: </b></h4>";

        $x = 0;
        $no = 1;
        $kondisi = [];

        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                for ($k = 1; $k <= 3; $k++) {

                    // implikasi
                    $minimal[$x] = min($nilaiRendah[$j - 1], $nilaiSedang[$i - 1], $nilaiTinggi[$k - 1]);
                    // Komposisi aturan
                    if ($j <= 2 && $k < 2) {
                        if ($i <= 2) {
                            $kondisi[$x] = "Rendah";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    } else if ($j > 2 && $k >= 2) {
                        if ($i >= 2) {
                            $kondisi[$x] = "Tinggi";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    } else {
                        if ($i > 2) {
                            $kondisi[$x] = "Tinggi";
                        } else if ($i < 2) {
                            $kondisi[$x] = "Rendah";
                        } else {
                            $kondisi[$x] = "Sedang";
                        }
                    }

                    if ($minimal[$x] > 0) {
                        echo "<p>" . $no . ". IF  (Ekonomi OR Imigrasi = " . kondisi($j) . "(" . $nilaiRendah[$j - 1] . ")) AND (Karies OR Perawatan Khusus OR Minum Flour OR Bercak Putih OR Lubang Tambal = " . kondisi($i) . "(" . $nilaiSedang[$i - 1] . ")) AND (Manis OR Susu Gula OR Sikat Gigi OR Topikal Floure OR Periksa Gigi OR Karang Gigi= " . kondisi($k) . "(" . $nilaiTinggi[$k - 1] . ")) THAN Resiko = " . $kondisi[$x] . "(" . $minimal[$x] . ")</p>";
                    }

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
        echo "<p>Resiko Rendah(" . $nilai_rendah . ")</p>";
        echo "<p>Resiko Sedang(" . $nilai_sedang . ")</p>";
        echo "<p>Resiko Tinggi( " . $nilai_tinggi . ")</p>";

        //Defuzzifikasi
        echo '<br><h4><b>Defuzzifikasi</b></h4>';
        echo '<p>Menggunakan metode Centroid Method</p>';
        echo '(1 x ' . $nilai_rendah . ') + (2 x ' . $nilai_sedang . ') + (3 x ' . $nilai_tinggi . ') / (' . $nilai_rendah . ' + ' . $nilai_sedang . ' + ' . $nilai_tinggi . ')';

        $nilaiy = ((1 * $nilai_rendah) + (2 * $nilai_sedang) + (3 * $nilai_tinggi)) / ($nilai_rendah + $nilai_sedang + $nilai_tinggi);
        // echo "<br><h4><b>Tingkat Resiko= </b>" . $nilaiy . "</h4>";
        $tingkat = "";
        if ($nilaiy <= 1 + (2 / 3)) {
            $tingkat = 'Rendah';
            echo "Rendah";
        } else if ($nilaiy <= 1 + (4 / 3)) {
            $tingkat = 'Sedang';
            echo "Sedang";
        } else {
            $tingkat = 'Tinggi';
            echo "Tinggi";
        }
        return "<br><h4><b>Tingkat Resiko= </b>" . $nilaiy . "</h4> <h3>$tingkat</h3>";
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

    function kondisi($n)
    {
        if ($n == 1) return "Rendah";
        else if ($n == 2) return "Sedang";
        else if ($n == 3) return "Tinggi";
    }

    ?>