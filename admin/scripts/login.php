<?php
    if(isset($_POST['login'], $_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        require_once('lib/classUser.php');
        $user = new user();
        session_start();
        $user->login($login, $password);
    }
?>