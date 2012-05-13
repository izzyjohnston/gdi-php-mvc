<?php
    class Blogger_Controller {
        public function _list(){

            if (isset($_POST['delete_blogger'])) {
               Blogger::destroy($_POST['id']);
            }
            if (isset($_POST['update_blogger'])){
                Blogger::edit($_POST, $_POST['id']);
            }
            if (isset($_POST['create_blogger'])){
                Blogger::create($_POST);
            }
            $blogger_array = Blogger::getAll();
            return array('bloggers' => $blogger_array);
        }
        public function _view($id){
            $blogger = Blogger::getOne($id);
            return array('blogger' =>$blogger);
        }

    }
?>