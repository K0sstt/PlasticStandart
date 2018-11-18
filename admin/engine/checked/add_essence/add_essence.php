<?php
    require_once('engine/checked/checked.php');
    $temp->content->title->t('Добавление');
    $temp->title->t('Добавление');
    if(isset($_GET['class'])){
        require_once('lib/classData.php');
        $class = $_GET['class'];
        
        $data = new Data;
        $arr = $data->getClass($class);
        $obj = "menu_$class";
        foreach($arr as $key => $value){
            $temp->content->$obj->at(Module::load('modules/checked-nav-a.php', ['page' => 'essence', 'class' => $class, 'id'=> $key, 'title' => $value['title']]));
            $temp->content->$obj->build();
        }
        $temp->content->$obj->af('engine/checked/add_essence.tpl');
        $temp->content->$obj->class->t($class);

        $temp->content->right->f('engine/checked/add_essence/form.tpl');
        $temp->content->right->class->t($class);
    }
?>