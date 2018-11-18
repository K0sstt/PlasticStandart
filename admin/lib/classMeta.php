<?php
    class Meta{
        public $data;
        
        public function get_list(){
            global $db;
            $list = [];
            if($que = $db->query("SELECT `id`, `title` FROM `meta`")){
                while($res = $que->fetch_assoc()){
                    $list[$res['id']] = $res['title'];
                }
            }
            return $list;
        }
        
        public function get($id){
            global $db;
            if($res = $db->query("SELECT * FROM `meta` WHERE `id` = '$id'")->fetch_assoc()){
                return $res;
            }
            return false;
        }
        
        public function set($id, $desc, $keys){
            global $db;
            if($db->query("UPDATE `meta` SET `meta_desc` = '$desc', `meta_keys` = '$keys' WHERE `id` = '$id'")){
                return true;
            }
            return false;
        }
    }
?>