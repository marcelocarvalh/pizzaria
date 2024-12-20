<?php
    include("process/conn.php");

    $msg = "";
    
    if(isset($_SESSION["msg"])) {

       $msg = $_SESSION["msg"];
       $status = $_SESSION["status"];

        $_SESSION["msg"] = "";
        $_SESSION["status"] = "";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu Pedido!</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- App CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <head>
        <nav class="navbar navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
                <img src="img/pizza.svg" alt="Pizzaria do João" id="brand-logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="navbar-item active">
                        <a href="index.php" class="nav-link">Peça sua pizza</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <?php if($msg != ""): ?>
     <div class="alert alert-<?= $status ?>">
        <p><?= $msg ?></p>
     </div>
    <?php endif; ?>