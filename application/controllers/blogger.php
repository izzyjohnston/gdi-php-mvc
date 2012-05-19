<?php
    class Blogger_Controller {
        public function _list(){
            $warning = "";
            ///delete blogger form controller
            if (isset($_POST['delete_blogger'])) {
               ///check if a user is logged in and if the logged in user is the one trying to delete themselves
               if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$_POST['id']){
                   Blogger::destroy($_POST['id']);
               }
               else{
                   $warning = 'Sorry, you do not have permissions to delete that user';
               }
            }
            //update blogger form controller
            if (isset($_POST['update_blogger'])){
                 ///check if a user is logged in and if the logged in user is the one trying to edit the user
                if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$_POST['id']){
                    //if new password was not sent, edit the blogger's username or email
                    if($_POST['password']==''){
                        Blogger::edit($_POST, $_POST['id']);
                    }
                    //check if a new password was sent, if it was, check that the old password was sent
                    else if($_POST['password']!='' && $_POST['old_password']!=''){
                        //get old password for blogger and check that it matches
                        $blogger = Blogger::getOne($_POST['id']);
                        $old_password = md5($_POST['old_password'], false);
                        if($old_password == $blogger['password']){
                            Blogger::edit($_POST, $_POST['id']);
                        }
                        else{
                            $warning = 'Old password does not match password in the database';
                        }
                    }
                    else{
                        $warning = 'You must provide an old password to change passwords.';
                    }

                }
                else{
                   $warning = 'Sorry, you do not have permissions to edit that user';
                }
            }
            //create blogger form controller
            if (isset($_POST['create_blogger'])){
                //check if all fields are present
                //NOTE: in most real world application this check would be done in Javascript
                //      in order to avoid refreshing the page and losing the user's data
                if(isset($_POST['username'])&& isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
                    //check if password and confirm password match
                    //NOTE: in most real world application this check would be done in Javascript
                    //      in order to avoid refreshing the page and losing the user's data
                    if($_POST['password'] == $_POST['confirm_password']){
                        Blogger::create($_POST);
                    }
                    else{
                        $warning = 'Password and confirm password must match';
                    }

                }
                else{
                    $warning = 'Please enter all fields to register a user';
                }

            }
            if(isset($_POST['login_blogger'])){
                if($_POST['username']!='' && $_POST['password']!=''){
                    $blogger = Blogger::login($_POST);
                    if($blogger){
                        $_SESSION['user_id'] = $blogger['id'];
                    }
                    else{
                        $warning = 'No blogger with that username and database exists in our database';
                    }
                }
                else{
                    $warning = 'Please enter both username and password';
                }
            }
            if(isset($_POST['logout_blogger'])){
                unset($_SESSION['user_id']);
            }
            $blogger_array = Blogger::getAll();
            return array('bloggers' => $blogger_array,
                         'bloggerWarning' =>$warning);
        }

    }
?>