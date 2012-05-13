<?php
    class Post_Controller {
        public function _list(){
            if (isset($_POST['delete_post'])) {
               Post::destroy($_POST['id']);
            }
            if (isset($_POST['update_post'])){
                Post::edit($_POST, $_POST['id']);
            }
            if (isset($_POST['create_post'])){
                Post::create($_POST);
            }
            $posts_array = Post::getAll();
            if($posts_array){
                foreach($posts_array as &$post){
                    $blogger = Blogger::getOne($post['user_id']);
                    $post['username'] = $blogger[0]['username'];
                }
            }

            return array('posts' => $posts_array);
        }
        public function _view($id){
            $post = Post::getOne($id);
            if($post){
                $post['username'] = Blogger::getOne($post['user_id']);
            }
            return array('post'=>$post);
        }

    }
?>