<?php
    require_once('engine/engine.php');
    $temp->content->f('engine/checked/main.tpl');
    $temp->css->t(Module::load('modules/css-link.php', ['path' => 'css/checked.css']));
?>