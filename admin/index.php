<?php
    require_once('tools/classDb.php');
    require_once('tools/classTemp.php');
    require_once('tools/fork.php');
    require_once('tools/classModule.php');
    require_once('lib/classUser.php');
    session_start();
    global $db, $user;
    $db = new Db();
    $user = new User();
    $temp = new Temp();
    require_once(fork($user->check, isset($_GET['page'])? $_GET['page']: null));
    echo $temp->build();
    echo $temp->map();
?>