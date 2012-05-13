<?php $data =  Post_Controller::_list();?>
<div id="posts-list">
    <div id = "new-post" class="add"><img class="icon" src='/public/images/blog.png'/><div class="button-text"> Add new blog post</div></div>
    <h2>Blog Posts</h2>

    <?php foreach ($data['posts'] as $post):  ?>
        <div class="post">
            <h3><?php echo $post['title']; ?></h3>
            <div class = "post-text"><?php echo $post['text']; ?></div>
            <div class = "post-footer">
                <div class = "post-date"><?php echo date("F j, Y g:i a", strtotime($post['date_created']));  ?></div>
                <div class = "post-blogger"><?php echo $post['username']; ?></div>
            </div>
            <br class="clear"/>
            <div><div class ="edit-post edit"><img class="icon" src='/public/images/pencil.png'/><div class="button-text"> Edit blog post</div></div><div class = "delete-post delete"><img class="icon" src='/public/images/delete.png'/>Delete blog post</div></div>
        </div>
    <?php endforeach; ?>

</div>