<?php
    //initialize data from controller
    $data =  Post_Controller::_list();
?>
<?php if($data['warning']!='') echo $data['warning']?>
<div id="posts-list">
    <h2>Blog Posts</h2>
    <?php /**
            * Form to submit new post. On page load, this form is hidden
            * Clicking on the Add new blog post button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'create_post' so that the controller knows
            * which form was sent
            */ ?>
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
                    * to edit
                    */ ?>
            <?php /**
                    * Form to delete current post. On page load, this form is hidden
                    * Clicking on the Delete blog post button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'delete_post' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which post
                    * to delete
                    */ ?>
        </div>
    <?php endforeach; ?>

</div>