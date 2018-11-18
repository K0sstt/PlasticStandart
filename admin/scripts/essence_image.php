<?php
    header('Content-Type: image/png');
    if($_GET['id']){
        $id = $_GET['id'];
        require_once('lib/classData.php');
        require_once('tools/classDb.php');
        global $db;
        $db = new Db();
        $data = new Data();
        if($essence = $data->get($id)){
            echo $essence['image'];
        }
    }
    exit;
?>