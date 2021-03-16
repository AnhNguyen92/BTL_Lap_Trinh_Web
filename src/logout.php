<?php 
    require_once("config.php");
    
    unset($_SESSION['idLogin']);

    redirect('index.php');
