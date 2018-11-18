<?php
    require_once('engine/checked/checked.php');
    require_once('lib/classMeta.php');
    
    $temp->content->title->t('Мета-даные');
    $temp->title->t('Мета-даные');

    $meta = new Meta;
    $list = $meta->get_list();
    foreach($list as $key => $value){
        $temp->content->menu_meta->at(Module::load('modules/checked-nav-a.php', ['page' => 'meta','class' => $key, 'title' => $value]));
        $temp->content->menu_meta->build();
    }
    $temp->content->right->f('engine/checked/meta/form.tpl');
    if(isset($_GET['class']) and $data = $meta->get($_GET['class'])){
        $class = $_GET['class'];
    }
    else{
        $class = 1;
    }
    $data = $meta->get($class);
    $temp->content->right->metaClass->t($data['title']);
    $temp->content->right->desc->t($data['meta_desc']);
    $temp->content->right->keys->t($data['meta_keys']);
    $temp->content->right->class->t($class);
?>