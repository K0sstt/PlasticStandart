<?php
    if(isset($_GET['n'])){
        $n = $_GET['n'];
        if(file_exists("scripts/$n.php")){
            require_once("scripts/$n.php");
        }
    }
    header('Location: index.php');
    exit();
?>