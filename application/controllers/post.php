<?php
    class Post_Controller {
        public function _list(){
            $warning = "";
            if (isset($_POST['delete_post'])) {
               ///check if a user is logged in and if the logged in user is the one that wrote the blog post
               if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$_POST['user_id']){
                   Post::destroy($_POST['id']);
               }
               else{
                   $warning = 'Sorry, you do not have permissions to delete that post';
               }

            }
            if (isset($_POST['update_post'])){
                ///check if a user is logged in and if the logged in user is the one that wrote the blog post
                if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$_POST['user_id']){
                    Post::edit($_POST, $_POST['id']);
                }
                else{
                   $warning = 'Sorry, you do not have permissions to edit that post';
                }
            }
            if (isset($_POST['create_post'])){
                ///check if a user is logged in
                if(isset($_SESSION['user_id'])){
                    $_POST['user_id'] = $_SESSION['user_id'];
                    Post::create($_POST);
                }
                else{
                   $warning = 'Sorry, you must be logged in to submit a post';
                }
            }
            $posts_array = Post::getAll();
            if($posts_array){
                foreach($posts_array as &$post){
                    $blogger = Blogger::getOne($post['user_id']);
                    $post['username'] = $blogger['username'];
                }
            }

            return array('posts' => $posts_array,
                         'warning' => $warning);
        }

    }
?>