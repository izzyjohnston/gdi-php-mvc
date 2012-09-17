<?php
    class Post_Controller {
        public static function _list(){
            $warning = "";
            if (isset($_POST['delete_post'])) {
               ///check if a user is logged in and if the logged in user is the one that wrote the blog post
                   Post::destroy($_POST['id']);
               //otherwise say the user doesn't have permission

            }
            if (isset($_POST['update_post'])){
                ///check if a user is logged in and if the logged in user is the one that wrote the blog post
                    Post::edit($_POST, $_POST['id']);
                //otherwise say the user doesn't have permission
            }
            if (isset($_POST['create_post'])){
                ///check if a user is logged in and set the post's user_id to the id of the logged in user

                    Post::create($_POST);
                //otherwise say the user doesn't have permission
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