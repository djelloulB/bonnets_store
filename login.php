<?php 
include_once('includes/header.php');


//On verifie si l'email et le mdp
if(isset($_POST['email']) && isset($_POST['pwd']))  {
    if(!empty($_POST['pwd']) && !empty($_POST['email'])){
        
        if($_POST['email'] == $email && $_POST['pwd'] == $pwd){
            $user = $_POST['email'];
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            echo "<div  class='bg-danger bg-gradient col-6 p-3 mx-auto my-3 rounded text-white text-center'>l'email ou votre mot de passe est incorrect !</div>";
        }
    }
}


?>
<div class="bgcolor" >
    <form action="login.php" method="post" class="mx-auto col-6 shadow p-5">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password</label>
        <input required type="pwd" name="pwd" class="form-control" id="pwd">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php
    include_once('includes/footer.php');
?>