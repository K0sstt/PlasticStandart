<?php
    class Module{
        
        public function load($path, $param = []){
            try{
                if(!file_exists($path)){
                    throw new Exception("<span>Module not found in \"<b>$path</b></span>\"");
                }
                return include($path);
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }
        
    }
?>