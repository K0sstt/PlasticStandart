<?php
    
    if(isset($param['class'], $param['page'], $param['title'])){
        return '<a href="?page='.$param['page'].'&class='.$param['class'].(isset($param['id'])?'&id='.$param['id']:'').'" class="sm-text">'.$param['title'].'</a>';
    }

    return null;
?>