<?php
    require_once('lib/classUser.php');
    session_start();
    $user = new user();
    if(isset($_GET['class'], $_POST['title'], $_POST['description'], $_FILES['image']) and $user->check){
        $class = $_GET['class'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        if($_FILES['image']['error'] == 0){
            $image = file_get_contents($_FILES['image']['tmp_name']);
        }
        else{
            $image = '';
        }
        if(strlen($title) > 0 and strlen($description) > 0 and strlen($image) > 0){
            require_once('tools/classDb.php');
            require_once('lib/classData.php');
            global $db;
            $db = new Db();
            $data = new Data();
            $data->add($class, $title, $description, $image);
        }
        header('Location: index.php?page=add_essence&class='.$class);
        exit();
    }
?>