<?php
include_once('includes/header.php');
if (isset($_GET['page'])) {
    $requested_page = $_GET['page'];
    //var_dump($_GET['page']);
    }
    else {
    $requested_page = 'home';
    }
    // a better way would be to put this into an array, but I think a switch is easier to read for this example
    switch($requested_page) {
        case "login":
            include('pages/login.php');
            break;
        case "logout"    :
            include('pages/logout.php');
            break;
       case "list":
          include("pages/list.php");
          break;
       case "home":
          include("pages/home.php");
          break;
        case "contact":
            include('pages/contact.php');
            break;
       default:
          include("pages/404.php");
    }

    include_once('includes/footer.php');