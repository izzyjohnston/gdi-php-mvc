<?php $data =  Blogger_Controller::_list();?>
<?php if($data['bloggerWarning']) echo $data['bloggerWarning']?>
<div id="bloggers-list">
    <div id = "new-blogger" class="add"><img class="icon" src='/public/images/add.png'/><div class="button-text"> Register</div></div>
    <?php if(!isset($_SESSION['user_id'])): ?><div id = "login" class="edit"><img class="icon" src='/public/images/pencil.png'/><div class="button-text"> Login</div></div>
    <?php else: ?>
        <div id = "logout" class="delete"><img class="icon" src='/public/images/delete.png'/><div class="button-text"> Logout</div></div>
    <?php endif;?>
    <br class="clear">
    <?php /**
            * Form to login. On page load, this form is hidden
            * Clicking on the Login button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'login_blogger' so that the controller knows
            * which form was sent
            */ ?>
    <div id= "login-blogger">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <label>Username</label><input type="text" name ="username"/>
                <label>Password</label><input type="password" name ="password"/>
                <input type = "hidden" value ="true" name="login_blogger"/>
                <button type = "submit" value="Login" class="edit"><img class="icon" src='/public/images/add.png'/><div class="button-text"> Login</div></button>
            </form>
        </div>
    <?php /**
            * Form to logout. On page load, this form is hidden
            * Clicking on the Logout button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'logout_blogger' so that the controller knows
            * which form was sent
            * Sends no data in the $_POST because we are just unsetting the session
            */ ?>
    <div id= "logout-blogger">
        <p class="warning">Are you sure you want to logout?</p>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <input type = "hidden" value ="true" name="logout_blogger"/>
            <button type = "submit" value="Logout" class="delete"><img class="icon" src='/public/images/delete.png'/><div class="button-text"> Logout</div></button>
        </form>
    </div>
    <?php /**
            * Form to register new blogger. On page load, this form is hidden
            * Clicking on the Add new register button will make it appear
            * Sends data to itself (index.php) via method post
            * Sends hidden value 'create_blogger' so that the controller knows
            * which form was sent
            */ ?>
    <div id= "register-blogger">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <label>Username</label><input type="text" name ="username"/>
                <label>Email</label><input type="text" name ="email"/>
                <label>Password</label><input type="password" name ="password"/>
                <label>Confirm Password</label><input type="password" name ="confirm_password"/>
                <input type = "hidden" value ="true" name="create_blogger"/>
                <button type = "submit" value="Submit" class="add"><img class="icon" src='/public/images/add.png'/><div class="button-text"> Submit</div></button>
            </form>
        </div>
    <h2>Bloggers</h2>
    <?php /**
            * For each blogger in our database (as retrieved from the blogger controller)
            * Go through each blogger, and show the username
            */ ?>
    <?php foreach ($data['bloggers'] as $blogger):  ?>
        <div class="blogger">
            <span class = "blogger-name"><?php echo $blogger['username']; ?></span>
            <div class ="edit-blogger edit"><img class="icon" src='/public/images/pencil.png'/></div><div class = "delete-blogger delete"><img class="icon" src='/public/images/delete.png'/></div>
            <?php /**
                    * Form to edit current blogger. On page load, this form is hidden
                    * Clicking on the Edit blogger button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'update_blogger' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which blogger
                    * to update
                    */ ?>
            <div class= "edit-current-blogger">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <label>Username</label><input type="text" name ="username" value="<?php echo $blogger['username']?>">
                    <label>Email</label><input type="text" name ="email" value="<?php echo $blogger['email']?>">
                    <label>Old Password</label><input type="password" name ="old_password"/>
                    <label>New Password</label><input type="password" name ="password"/>
                    <input type = "hidden" value =<?php echo $blogger['id']?> name ="id"/>
                    <input type = "hidden" value ="true" name="update_blogger"/>
                    <button type = "submit" value="Submit" class="edit"><img class="icon" src='/public/images/pencil.png'/><div class="button-text"> Submit</div></button>
                </form>
            </div>
            <?php /**
                    * Form to delete current blogger. On page load, this form is hidden
                    * Clicking on the Delete blogger button will make it appear
                    * Sends data to itself (index.php) via method post
                    * Sends hidden value 'delete_blogger' so that the controller knows
                    * which form was sent
                    * Sends hidden value 'id' so that the controller knows which blogger
                    * to delete
                    */ ?>
            <div class= "delete-current-blogger">
                <p class="warning">Are you sure you want to delete this blogger?</p>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <input type = "hidden" value ="true" name="delete_blogger"/>
                    <input type = "hidden" value =<?php echo $blogger['id']?> name ="id"/>
                    <button type = "submit" value="Submit" class="delete"><img class="icon" src='/public/images/delete.png'/><div class="button-text"> Delete</div></button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>

</div>