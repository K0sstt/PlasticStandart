<?php
    require_once('lib/classUser.php');
    session_start();
    $user = new user();
    if(isset($_GET['class'], $_GET['id'], $_POST['title'], $_POST['description'], $_FILES['image']) and $user->check){
        $class = $_GET['class'];
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        if($_FILES['image']['error'] == 0){
            $image = file_get_contents($_FILES['image']['tmp_name']);
        }
        else{
            $image = false;
        }
        if(strlen($title) > 0 and strlen($description) > 0){
            require_once('lib/classData.php');
            require_once('tools/classDb.php');
            global $db;
            $db = new Db;
            $data = new Data();
            $data->update($id, $title, $description, $image);
        }
        header('Location: index.php?page=essence&class='.$class.'&id='.$id);
        exit();
    }
?>