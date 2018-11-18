<?php
        
    function fork($user_login, $page){

        if($user_login){
            switch($page){
                case 'essence':             return 'engine/checked/essence/essence.php';            break;
                case 'add_essence':         return 'engine/checked/add_essence/add_essence.php';    break;
                default:                    return 'engine/checked/meta/meta.php';
            }
        }
        else{
            return 'engine/login/login.php';
        }
        
    }

?>