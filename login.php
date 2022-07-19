<?php
include "config.php";

if (isset($_POST['but_submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn, $_POST['txt_pwd']);

    if ($username != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from user where username='" . $username . "' and password='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['username'] = $username;
            header('Location: history.php');
        } else {
            echo "Invalid username and password";
        }
    }
}
?>
<!doctype html>
<html lang="en" class="h-100">

<head>

    <link href="./_assets/bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./_assets/css/login.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./_assets/img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
    body {
        background-color: #000;
    }
    </style>

</head>

<body style="font-family: 'Martel Sans', sans-serif">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="./_assets/img/login.svg" class="img-fluid" alt="Login">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="container">
                        <form method="post" action="">
                            <div id="div_login">
                                <p style="font-size:50px;font-weight:bold; color:#6C63FF;">Login
                                <p>
                                <div>
                                    <input class="form-control form-control-lg" type="text" class="textbox"
                                        id="txt_uname" name="txt_uname" placeholder="Username" />
                                </div>
                                <br>
                                <div>
                                    <input class="form-control form-control-lg" type="password" class="textbox"
                                        id="txt_uname" name="txt_pwd" placeholder="Password" />
                                </div>
                                <br>
                                <div>
                                    <input style="background-color:#6C63FF"
                                        class="btn btn-primary btn-lg btn-block text-white" type="submit" value="Submit"
                                        name="but_submit" id="but_submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>