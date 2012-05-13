<?php $data =  Blogger_Controller::_list(); ?>

<div id="bloggers-list">
    <div id = "new-blogger" class="add"><img class="icon" src='/public/images/add.png'/><div class="button-text">Register</div></div>
    <h2>Bloggers</h2>
    <?php foreach ($data['bloggers'] as $blogger):  ?>
        <div class="blogger">
            <span class = "blogger-name"><?php echo $blogger['username']; ?></span>
            <div class ="edit-blogger edit"><img class="icon" src='/public/images/pencil.png'/></div><div class = "delete-blogger delete"><img class="icon" src='/public/images/delete.png'/></div>
        </div>
    <?php endforeach; ?>

</div>