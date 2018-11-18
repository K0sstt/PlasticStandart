<?php
    class Db extends mysqli{
                
        public function __construct(){
                        
            $config = include('config/db.php');
            parent::__construct($config['host'], $config['user'], $config['password'], $config['defaultDb']);
            $this->query('SET NAMES `'.$config['charset'].'`');
        }
        
        public function quickTransaction($queries){
            if(count($queries) > 0){
                $this->start_transaction();
                foreach($queries as $query){
                    if(!$this->query($query)){
                        $this->rollback();
                        return false;
                    }
                }
                return true;
            }
            else{
                return false;
            }
        }
        
    }
?>