<?php
    require_once('engine/engine.php');

    $temp->title->t('Вход');

    $temp->content->f('engine/login/form.tpl');
    $temp->css->t(Module::load('modules/css-link.php', ['path' => 'css/login.css']));
?>