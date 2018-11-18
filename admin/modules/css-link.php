<?php
    if(isset($param['path'])){
        $path = $param['path'];
        return "<link href=\"$path\" rel=\"stylesheet\" type=\"text/css\">";
    }
    return null;
?>