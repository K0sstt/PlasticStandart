<?php
    class Data{
        
        public function getClass($class){
            global $db;
            $list = [];
            if($que = $db->query("SELECT `id`, `title` FROM `essence` WHERE `class` = '$class'")){
                while($res = $que->fetch_assoc()){
                    $list[$res['id']]['title'] = $res['title'];
                }
            }
            return $list;
        }
        
        public function get($id){
            global $db;
            if($que = $db->query("SELECT * FROM `essence` WHERE `id` = '$id'")){
                return $que->fetch_assoc();
            }
            return null;
        }
        
        public function add($class, $title, $description, $image){
            global $db;
            $image = $db->real_escape_string($image);
            if($db->query("INSERT INTO `essence`(`class`, `title`, `description`, `image`) VALUES ('$class', '$title', '$description', '$image')")){
                return true;
            }
            return false;
        }
        
        public function update($id, $title, $description, $image = false){
            global $db;
            if($image){
                $image = $db->real_escape_string($image);
                $image = ", `image`='$image'";
            }
            else{
                $image = '';
            }
            if($db->query("UPDATE `essence` SET `title`='$title', `description`='$description'$image WHERE `id` = '$id'")){
                return true;
            }
            return false;
        }
        
        public function delete($id){
            global $db;
            if($db->query("DELETE FROM `essence` WHERE `id` = '$id'")){
                return true;
            }
            return false;
        }
        
    }

?>