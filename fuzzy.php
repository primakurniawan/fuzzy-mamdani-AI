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
                    <a class="nav-link" href="#">Tentang</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Hasil</h1>

            <div id="detail1">
                <?php
                $hasil = inferensi((int)$_POST["karies"], (int)$_POST["ekonomi"], (int)$_POST["manis"], (int)$_POST["imigrasi"], (int)$_POST["perawatanKhusus"], (int)$_POST["minumFlour"], (int)$_POST["bercakPutih"], (int)$_POST["lubangTambal"],  (int)$_POST["sikatGigi"], (int)$_POST["susuGula"], (int)$_POST["topikalFLouride"], (int)$_POST["memeriksaGigi"], (int)$_POST["karangGigi"]);
                echo "</div>";
                ?>

                <div>
                    <?php echo $hasil;
                    ?>
                    <button class="btn btn-primary" type="button" id="detailopen">Lebih Lanjut</button>
                </div>


        </main>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Modal Header</h2>
                </div>
                <div class="modal-body">
                    <p>Some text in the Modal Body</p>
                    <p>Some other text...</p>
                </div>
                <div class="modal-footer">
                    <h3>Modal Footer</h3>
                </div>
            </div>

        </div>
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