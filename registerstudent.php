<?php
session_start();
require_once("dashboard/lib.php");
if (isset($_POST["text1"])) {
    $email = $_POST["text1"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
    $password = md5($_POST["password"]);

    $errors = [];
    if (empty($_POST["text1"])){

        $errors[]="The email is required";

    }else{
        $email = explode("@",$email) ;
        if($email[1]=="s.mu.edu.sa" && strlen($email[0])==9 && gettype($email[0])=="integer"  ){
            $v = "done";
        }
        else{
            $errors[]="The email is not valied";
        }
    }



    if (empty($_POST["password"])){
        $errors[]="The password is required";
    }
    if (empty($_POST["name"])){
        $errors[]="The name is required";
    }
    if (empty($_POST["department"])){
        $errors[]="The department is required";
    }

    if (empty($_POST["phone"])){
        $errors[]="The phone is required";
    }
    

    

    if (empty($errors)){
    
        if (addstudent($name,$email,$password,$department,$phone)) {
            $res= loginstudent($email,$password);
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

<body onload="document.form1.text1.focus()">
    <article class="auth">
        <div class="header">
            <h1>logo</h1>
            <div class="h-btns">
                <a href="registerstudent.php">
                <button id="regbtn" type="button" class="btn">??????????????</button>
                </a>
                <a href="loginstudent.php">
                <button id="loginbtn" type="button" class="btn">????????????</button>
                </a>

            </div>
        </div>
        <section class="login-card" id="logincard">
            
        <form action="registerstudent.php" method="post"  name="form1">
                <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="??????????" />
                <input type="email" name="text1" class="form-control" placeholder="??????????????" />
                <input type="password" name="password"  class="form-control" placeholder="???????? ????????????" />
                <input type="text" name="department" class="form-control" placeholder="??????????" />
                <input type="text" name="phone" class="form-control" placeholder="??????????????" />

                </div>

                <button type="submit" onclick="ValidateEmail(document.form1.text1)" name="submit" class="btn">??????????</button>

            </form>
        </section>
    </article>
    <script src="assets/js/index.js"></script>
</body>

</html>