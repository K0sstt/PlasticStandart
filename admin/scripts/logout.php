<?php
    require_once('lib/classUser.php');
    require_once('tools/classDb.php');
    session_start();
    global $db;
    $db = new db();
    $user = new user();
    $user->logout();
?>