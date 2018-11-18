<?php
    require_once('lib/classMeta.php');
    require_once('lib/classUser.php');
    session_start();
    $user = new User();
    if(isset($_GET['class'], $_POST['desc'], $_POST['keys']) and $user->check){
        $class = $_GET['class'];
        $desc = $_POST['desc'];
        $keys = $_POST['keys'];
        if(strlen($desc) > 0 and strlen($keys) > 0){
            require_once('tools/classDb.php');
            global $db;
            $db = new Db();
            $meta = new Meta();
            $meta->set($class, $desc, $keys);
        }
        header('Location: index.php?page=meta&class='.$class);
        exit();
    }
?>