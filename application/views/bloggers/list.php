<?php $data =  Blogger_Controller::_list();?>
<?php if($data['bloggerWarning']) echo $data['bloggerWarning']?>
<div id="bloggers-list">
    <?php /**
            * Form to register new blogger. On page load, this form is hidden
            * Clicking on the Add new register button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'create_blogger' so that the controller knows
            * which form was sent
            */ ?>
    <h2>Bloggers</h2>
    <?php /**
            * For each blogger in our database (as retrieved from the blogger controller)
            * Go through each blogger, and show the username
            */ ?>
    <?php foreach ($data['bloggers'] as $blogger):  ?>
        <div class="blogger">
            <span class = "blogger-name"><?php echo $blogger['username']; ?></span>
            <?php /**
                    * Form to edit current blogger. On page load, this form is hidden
                    * Clicking on the Edit blogger button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'update_blogger' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which blogger
                    * to update
                    */ ?>
            <?php /**
                    * Form to delete current blogger. On page load, this form is hidden
                    * Clicking on the Delete blogger button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'delete_blogger' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which blogger
                    * to delete
                    */ ?>
        </div>
    <?php endforeach; ?>

</div>