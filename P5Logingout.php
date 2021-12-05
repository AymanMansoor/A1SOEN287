<?php 
session_start();
if(isset($_POST['logout-btn'])){
    session_unset();
    session_destroy();
    header("Location: index.html");
}
?>