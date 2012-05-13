<?php
    //initialize data from controller
    $data =  Post_Controller::_list();
?>
<div id="posts-list">
    <div id = "new-post" class="add"><img class="icon" src='/public/images/blog.png'/><div class="button-text"> Add new blog post</div></div>
    <h2>Blog Posts</h2>
    <?php /**
            * Form to submit new post. On page load, this form is hidden
            * Clicking on the Add new blog post button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'create_post' so that the controller knows
            * which form was sent
            */ ?>
    <div id= "add-new">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" placeholder="Blog Title" name ="title"/>
                <textarea placeholder="Enter blog post content" name = "text"></textarea>
                <input type = "hidden" value ="true" name="create_post"/>
                <button type = "submit" value="Submit" class="add"><img class="icon" src='/public/images/add.png'/><div class="button-text"> Submit</div></button>
            </form>
        </div>
    <?php /**
            * For each post in our database (as retrieved from the posts controller)
            * Go through each post, and show the title, the text, the date_created
            * and the blogger's username, as retrieved from the blog table
            */ ?>
    <?php foreach ($data['posts'] as $post):  ?>

        <div class="post">
            <h3><?php echo $post['title']; ?></h3>
            <div class = "post-text"><?php echo $post['text']; ?></div>
            <div class = "post-footer">
                <div class = "post-date"><?php echo date("F j, Y g:i a", strtotime($post['date_created']));  ?></div>
                <div class = "post-blogger"><?php echo $post['username']; ?></div>
            </div>
            <br class="clear"/>
            <?php /**
                    * Form to edit current post. On page load, this form is hidden
                    * Clicking on the Edit blog post button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'update_post' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which post
                    * to delete
                    */ ?>
            <div class= "edit-current">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <input type="text" placeholder="Blog Title" name ="title" value ="<?php echo $post['title']; ?>"/>
                            <textarea placeholder="Enter blog post content" name = "text"><?php echo $post['text']; ?></textarea>
                            <input type = "hidden" value =<?php echo $post['user_id']?> name ="user_id"/>
                            <input type = "hidden" value ="true" name="update_post"/>
                            <input type = "hidden" value =<?php echo $post['id']?> name ="id"/>
                            <button type = "submit" value="Submit" class="edit"><img class="icon" src='/public/images/pencil.png'/><div class="button-text"> Submit</div></button>
                        </form>
                    </div>
            <?php /**
                    * Form to delete current post. On page load, this form is hidden
                    * Clicking on the Delete blog post button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'delete_post' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which post
                    * to delete
                    */ ?>
            <div class= "delete-current">
                <p class="warning">Are you sure you want to delete this post?</p>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type = "hidden" value ="true" name="delete_post"/>
                    <input type = "hidden" value =<?php echo $post['id']?> name ="id"/>
                    <input type = "hidden" value =<?php echo $post['user_id']?> name ="user_id"/>
                    <button type = "submit" value="Submit" class="delete"><img class="icon" src='/public/images/delete.png'/><div class="button-text"> Delete</div></button>
                </form>
            </div>
            <div class ="edit-post edit"><img class="icon" src='/public/images/pencil.png'/><div class="button-text"> Edit blog post</div></div><div class = "delete-post delete"><img class="icon" src='/public/images/delete.png'/><div class="button-text"> Delete blog post</div></div>
        </div>
    <?php endforeach; ?>

</div>