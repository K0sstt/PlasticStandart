<?php
    require_once('lib/classUser.php');
    session_start();
    $user = new user();
    if(isset($_GET['id']) and $user->check){
        $id = $_GET['id'];
        require_once('lib/classData.php');
        require_once('tools/classDb.php');
        global $db;
        $db = new Db;
        $data = new Data();
        $data->delete($id);
        header('Location: index.php?page=essence'.(isset($_GET['class'])?'&class='.$_GET['class']:''));
        exit();
    }
?>