<?php
    global $db;
    $config = include('admin/config/db.php');
    // $db = new mysqli($config['host'], $config['user'], $config['password'], $config['defaultDb']);

    include('blocks/header.php');

    if(isset($_GET['p'])){
        $p = $_GET['p'];
    }
    else $p = 'main';

    switch($p){
        case 'about':{
            include('content/about.php');
            break;
        }
        case 'service':{
            include('content/service.php');
            break;
        }
        case 'tech':{
            include('content/tech.php');
            break;
        }
        case 'contacts':{
            include('content/contacts.php');
            break;
        }
        case 'caps':{
            include('content/caps.php');
            break;
        }
        case 'preforms':{
            include('content/preforms.php');
            break;
        }
        case 'handles':{
            include('content/handles.php');
            break;
        }
        case 'logo':{
            include('content/logo.php');
            break;
        }
        default:{
            include('content/main.php');
            break;
        }
    }

    include('blocks/footer.php');
?>