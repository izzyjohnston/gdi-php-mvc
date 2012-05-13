<?php $data =  Post_Controller::_list();?>
<div id="posts-list">

    <h2>Blog Posts</h2>

    <?php foreach ($data['posts'] as $post):  ?>
        <div>
            <h3><?php echo $post['title']; ?></h3>
            <div class = "post-text"><?php echo $post['text']; ?></div>
            <div class = "post-footer">
                <div class = "post-date"><?php echo date("F j, Y g:i a", strtotime($post['date_created']));  ?></div>
                <div class = "post-blogger"><?php echo $post['username']; ?></div>
            </div>
        </div>
    <?php endforeach; ?>

</div>