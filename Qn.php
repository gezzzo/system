<?php


session_start();
require_once("admin/lib.php");

if (empty($_SESSION["student"])) {
    header("LOCATION:index.php");
}




$questions = Showquestions();



?>



<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الأسئلة الشائعة</title>
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
<nav>
        <div class="nav container">
            <div class="items">
                <a href="home.php">
                    <h3>الرئيسية</h3>
                </a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION["student"]["name"] ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="logout.php">logout</a></li>

                        </ul>
                    </div>
            </div>
            <div class="logo">
                <a href="home.php"><img src="assets/imgs/logo-no-background.png" alt="" /></a>
            </div>
        </div>
    </nav>

    <div class="commonqs">

    <?php foreach($questions as $question): ?>
        <section>
            <p><?=  $question["question"] ?></p>
            <p>
            <p><?=  $question["answer"] ?></p>
            </p>
        </section>

    <?php endforeach; ?>

    </div>
</body>

</html>