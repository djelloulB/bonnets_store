<?php
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>


</head>
<body>
    <header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">B.store</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        <a class="nav-link" href="list.php">Tous les bonnets</a>
      </div>
      <div class="nav-bar">
         <p>L'utilisateur:  <?php  if(isset($user)) {
             echo $user;
         } ?> est connecté</p>
      </div>
    </div>
  </div>
</nav>
    </header>
<div class="container">
<h1 class="text-center">Bonnets Store</h1>
<p class="text-center"> <?php echo date('d-m-d H:i:s');?> </p> 
<br>