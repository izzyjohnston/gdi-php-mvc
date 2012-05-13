<?php $data =  Blogger_Controller::_list(); ?>

<div id="bloggers-list">

    <h2>Bloggers</h2>
    <?php foreach ($data['bloggers'] as $blogger):  ?>
        <div>
            <div class = "blogger-name"><?php echo $blogger['username']; ?></div>
        </div>
    <?php endforeach; ?>

</div>