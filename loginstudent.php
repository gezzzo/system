<?php
session_start();
require_once("dashboard/lib.php");
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $errors = [];
    if (empty($_POST["email"])){
        $errors[]="The email is required";
    }
    if (empty($_POST["password"])){
        $errors[]="The password is required";
    }

    if (empty($errors)){
        $res = loginstudent($email,$password);
        if (!empty($res)) {
            $_SESSION['student'] = $res;
            header("LOCATION:home.php");
        }
    }

}




?>




<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <article class="auth">
        <div class="header">
            <h1>logo</h1>
            <div class="h-btns">
                <a href="registerstudent.php">
                <button id="regbtn" type="button" class="btn">التسجيل</button>
                </a>
                <a href="loginstudent.php">
                <button id="loginbtn" type="button" class="btn">الدخول</button>
                </a>

            </div>
        </div>
        <section class="login-card" id="logincard">
        <form action="loginstudent.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="الايميل" />
                    <input type="password" name="password"  class="form-control" placeholder="كلمة المرور" />
                </div>
                <button type="submit" class="btn">دخول</button>
            </form>
        </section>
    </article>
    <script src="assets/js/index.js"></script>
</body>

</html>