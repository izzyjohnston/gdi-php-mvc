<?php
    class Post extends Model{
        /**
         * @static
         * @param int $limit
         * @return array|bool
         * Function gets all data about posts in database, in reverse chronological order
         */
        public static function getAll () {
            //construct your SQL query-- in English Select all the data about a post (every field), order the results by date_created DESC
            $sql = 'SELECT * FROM posts ORDER BY date_created DESC';
            //send that query to the Model class that Posts extends
            $results = self::select($sql);
            //return results to controller
            return $results;
        }
        /**
         * @static
         * @param $id
         * @return array|bool
         * Function get all the data about one post if you know the post's id
         */
        public static function getOne($id){
            //construct your SQL query-- select all the data about one post by id
            $sql = 'SELECT * FROM posts WHERE id = '. $id . ' LIMIT 1';
            //send that query to the Model class that Posts extends
            $results = self::select($sql);
            //return results to controller
            return $results;
        }
        /**
         * @static
         * @param $fields
         * @return int
         * Insert a new post into the database.
         */
        public static function create ($fields) {
            //set today's date and time
            $date = date ("Y-m-d H:i:s");
            ///clean all fields so they are not harmful to the database
            $fields = self::cleanData($fields);
            //construct sql query insert into the four database fields, the four values from our form
            $sql = 'INSERT INTO posts (title, text, user_id, date_created)
                   VALUES ("' . $fields['title'] . '", "' . $fields['text'] . '", ' . $fields['user_id']. ', "'. $date .'")';
            //send that query to the Model class that Posts extends
            $results = self::insert($sql);
            //return results to controller
            return $results;
        }

        public static function edit ($fields, $id) {
             ///clean all fields so they are not harmful to the database
            $fields = self::cleanData($fields);
            //construct sql query to update username
            $sql = 'UPDATE posts SET title = "' . $fields['title'] . '", text = "' . $fields['text'] . '" WHERE id = ' . $id;
            $results = self::update($sql);
           //return results to controller
           return $results;
        }

        public static function destroy ($id) {
            //construct query to delete
            $sql = 'DELETE FROM posts WHERE id = ' . $id;
            //send that query to the Model class that Posts extends
            $results = self::delete($sql);
            //return results to controller
            return $results;
        }
    }
?>