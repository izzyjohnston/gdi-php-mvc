<?php
    class Post{
        /**
         * @static
         * @return array|bool
         * Function gets all data about posts in database, in reverse chronological order
         */
        public static function getAll () {
            //construct your SQL query-- in English Select all the data about a post (every field), order the results by date_created DESC
            //send that query to the Model class that Posts extends
            //return results to controller
        }
        /**
         * @static
         * @param $id
         * @return array|bool
         * Function get all the data about one post if you know the post's id
         */
        public static function getOne($id){
            //construct your SQL query-- select all the data about one post by id
            //send that query to the Model class that Posts extends
            //return results to controller
        }
        /**
         * @static
         * @param $fields
         * @return int
         * Insert a new post into the database.
         */
        public static function create ($fields) {
            //set today's date and time
            ///clean all fields so they are not harmful to the database
            //construct sql query insert into the four database fields, the four values from our form
            //send that query to the Model class that Posts extends
            //return results to controller
        }

        public static function edit ($fields, $id) {
             ///clean all fields so they are not harmful to the database
            //construct sql query to update username
           //return results to controller
        }

        public static function destroy ($id) {
            //construct query to delete
            //send that query to the Model class that Posts extends
            //return results to controller
        }
    }
?>