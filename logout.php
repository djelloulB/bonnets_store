<?php
session_start();

session_destroy(); //destroy the session

header("location: index.php?disconnected=1"); //to redirect back to "index.php" after logging out

