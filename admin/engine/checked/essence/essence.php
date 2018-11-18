<?php
    require_once('engine/checked/checked.php');
    require_once('lib/classData.php');
    $temp->content->title->t('Просмотр и редактирование');
    $temp->title->t('Просмотр и редактирование');

    $data = new Data();

    $class = isset($_GET['class'])?$_GET['class']:'caps';

    $obj = "menu_$class";
    if($arr = $data->getClass($class)){

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if($essence = $data->get($id)){        
                $temp->content->right->f('engine/checked/essence/form.tpl');
                $temp->content->right->title->t($essence['title']);
                $temp->content->right->description->t($essence['description']);
                $temp->content->right->class->t($class);
                $temp->content->right->id->t($id);

            }
        }
        else{
            $temp->content->right->f('engine/checked/essence/bad_id.tpl');
        }
        foreach($arr as $key => $value){
            $temp->content->$obj->at(Module::load('modules/checked-nav-a.php', ['page' => 'essence', 'class' => $class, 'id'=> $key, 'title' => $value['title']]));
            $temp->content->$obj->build();
        }
        $temp->content->$obj->af('engine/checked/add_essence.tpl');
        $temp->content->$obj->class->t($class);
        
    }
    else{
        header('Location: index.php?page=add_essence&class='.$class);
        exit;
    }
?>