<?php
session_start();
//require_once('includes/config.inc.php');
include_once('variables.php');
include_once('function.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <script src="https://kit.fontawesome.com/35ec662076.js" crossorigin="anonymous" defer></script>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar px-5 navbar-expand-lg navbar-light bg-light">

            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <a class="navbar-brand" href="index.php">B.store</a>
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    <a class="nav-link" href="list.php">Tous les bonnets</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </div>
                <div class="nav-bar">
                    <div class="align-top d-flex">
                        <span class="me-5">

                            <?php if (isset($_SESSION['user'])) {

                                echo 'Bonjour ' . $_SESSION['user'];
                            } ?>

                        </span>
                        <div class="text-center">
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo ' <a href="logout.php" class="p-0 nav-link"><i class="fas fa-sign-out-alt"></i> <br>Se déconnecteur </a>';
                            } else {
                                echo ' <a href="login.php" class="p-0 mx-2 nav-link"><i class="fas fa-user"></i><br>S\'identifier </a>';
                            }

                            ?>


                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </header>
    <div class="container py-5">

        <?php    // Dans header.php (par exemple) :
        // On récupère le paramètre, s'il existe, et on affiche un message
        if (!empty($_GET['disconnected']) && $_GET['disconnected'] == 1) {
            echo "<div id='toast' class='bg-success col-6 p-3 mx-auto my-3 rounded text-white text-center'>Vous êtes déconnecté !</div>";
        }
        ?>
        <script>
            var toast = document.getElementById('toast');

            function hideElem() {
                toast.style.display = 'none';
            }
            setTimeout(hideElem, 2000);
        </script>

        <h1 class="text-center">Bonnets Store</h1>
        <p class="text-center"> <?php echo date('d-m-y H:i:s'); ?> </p>
        <br>