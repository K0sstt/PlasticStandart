<?php
    class User{
        public $login = null;
        private $password = null;
        public $check = false;
        
        public function __construct(){
            if(isset($_SESSION['user']['login'], $_SESSION['user']['password'])){
                $data = include('config/admin.php');
                if($data['login'] == $_SESSION['user']['login'] and $data['password'] == $_SESSION['user']['password']){
                    $this->login = $_SESSION['user']['login'];
                    $this->password = $_SESSION['user']['password'];
                    $this->check = true;
                }
            }
        }
        
        public function login($login, $password){
            $data = include('config/admin.php');
            if($data['login'] == $login and $data['password'] == $password){
                $_SESSION['user']['login'] = $login;
                $_SESSION['user']['password'] = $password;
            }
        }
        
        public function logout(){
            unset($_SESSION['user']);
        }
        
    }
?>