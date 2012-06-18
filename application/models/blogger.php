<?php
    class Blogger{
        /**
         * @static
         * @param int $limit
         * @return array|bool
         * Function gets all data about bloggers in database, ordered by username
         */
        public static function getAll () {

            //construct your SQL query-- select all the data about bloggers (every field), order the results by username (alphabetically),
            //send that query to the Model class that Bloggers extends
            //return results to controller
        }
        /**
         * @static
         * @param $id
         * @return array|bool
         * Function get all the data about one blogger if you know the blogger's id
         */
        public static function getOne($id){
            //construct your SQL query-- select all the data about one blogger by id
            //send that query to the Model class that Bloggers extends
            //return results to controller
        }
        /**
         * @static
         * @param $fields
         * @return int
         * Insert data about a blogger into the database. This is a new blogger, because it creates a new row.
         */
        public static function create ($fields) {
            //set today's date and time
            ///clean all fields so they are not harmful to the database
            ///scramble the password
            //construct sql query insert into the four database fields, the four values from our form
            //send that query to the Model class that Bloggers extends
            //return results to controller
        }

        public static function edit ($fields, $id) {
             ///clean all fields so they are not harmful to the database

            //construct sql query to update username

           //return results to controller
        }

        public static function destroy ($id) {
            //construct query to delete
            //send that query to the Model class that Bloggers extends
            //return results to controller
        }

        public static function login ($fields){
            //construct your SQL query-- select all the data about one blogger by id

            //send that query to the Model class that Bloggers extends
            //return results to controller


        }
    }
?>