<?php
//include_once('includes/header.php');

if (isset($_POST['email'])) {
    //fonction de verification email
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse email est considérée comme valide.";
    }

    //requetes d'insertion
    $sql = "INSERT INTO contact (sujet, message, email) VALUES (:subject, :message, :email)";
    //on prepare la requete
    $pdoStatement = $connection->prepare($sql);

    $sujet = $_POST['subject'];
    $message =  $_POST['message'];
    $email = $_POST['email'];
    $pdoStatement->bindParam(':subject', $sujet);
    $pdoStatement->bindParam(':message', $message);
    $pdoStatement->bindParam(':email', $email);
    $pdoStatement->execute();
}


?>
<h2 class="text-center">Formulaire de contact</h2>
<form action="" method="post" class="shadow p-5">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name='email' class="form-control" id="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Sujet</label>
        <input type="text" name='subject' class="form-control" id="subject" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" placeholder="Tapez votre message ici" id="message" required></textarea>

    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

include_once('includes/footer.php');
