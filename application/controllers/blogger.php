<?php
    class Blogger_Controller {
        public static function _list(){
            $warning = "";
           /**
            * Add code to delete blogger if the delete_blogger
            * form is sent to the controller
            */
           if (isset($_POST['delete_blogger'])) {
           }
           /**
            * Add code to update blogger if the update_blogger
            * form is sent to the controller. Perform a validation
            * check that checks if the user tries to change their
            * password, they entered their old password. Perform
            * a second validation check to see if the old password
            * provided matches the password in the database
            */
           if (isset($_POST['update_blogger'])){

           }
           /**
            * Add code to create blogger if the create_blogger
            * form is sent to the controller. Perform a validation
            * check that checks if all fields are entered.
            */
           if (isset($_POST['create_blogger'])){

           }
           /**
            * Add code to get all bloggers using the Blogger
            * model. Get the username of the poster from
            * each post's user_id
            */

            $blogger_array = Blogger::getAll();
            /**
           * Return all the data to the view
           */
            return array('bloggers' => $blogger_array,
                         'bloggerWarning' =>$warning);
       }

    }
?>