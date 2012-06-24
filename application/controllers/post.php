<?php
    class Post_Controller {
        public static function _list(){
            /**
             * Add code to delete post if the delete_post
             * form is sent to the controller
             */
            if (isset($_POST['delete_post'])) {
            }
            /**
             * Add code to update post if the update_post
             * form is sent to the controller
             */
            if (isset($_POST['update_post'])){

            }
            /**
             * Add code to create post if the create_post
             * form is sent to the controller
             */
            if (isset($_POST['create_post'])){

            }
            /**
             * Add code to get all posts using the Post
             * model. Get the username of the poster from
             * each post's user_id
             */
            $posts_array = Post::getAll();
            /**
             * Return all the data to the view
             */
            return array('posts' => $posts_array);
        }
}
?>