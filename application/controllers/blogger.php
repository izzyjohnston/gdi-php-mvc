<?php
    class Blogger_Controller {
        public static function _list(){
            $warning = "";
            ///delete blogger form controller
            if (isset($_POST['delete_blogger'])) {
               ///check if a user is logged in and if the logged in user is the one trying to delete themselves
                   Blogger::destroy($_POST['id']);
               //otherwise say the user doesn't have permission
            }
            //update blogger form controller
            if (isset($_POST['update_blogger'])){
                 ///check if a user is logged in and if the logged in user is the one trying to edit the user

                    //if new password was not sent, edit the blogger's username or email
                    if($_POST['password']==''){
                        Blogger::edit($_POST, $_POST['id']);
                    }
                    //check if a new password was sent, if it was, check that the old password was sent
                    else if($_POST['password']!='' && $_POST['old_password']!=''){
                        //get old password for blogger and check that it matches
                        $blogger = Blogger::getOne($_POST['id']);
                        $old_password = "";///scramble password to compare
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
                  //otherwise say the user doesn't have permission
            }
            //create blogger form controller
            if (isset($_POST['create_blogger'])){
                //check if all fields are present
                //NOTE: in most real world application this check would be done in Javascript
                //      in order to avoid refreshing the page and losing the user's data
                if($_POST['username'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['confirm_password'] != ""){

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
            /**
             * login blogger with login function in blogger model set $_SESSION['user_id']
             */
            if(isset($_POST['login_blogger'])){
            }
            /**
             * log out blogger by unsetting $_SESSION
             */
            if(isset($_POST['logout_blogger'])){
            }
            $blogger_array = Blogger::getAll();
            return array('bloggers' => $blogger_array,
                         'bloggerWarning' =>$warning);
        }

    }
?>