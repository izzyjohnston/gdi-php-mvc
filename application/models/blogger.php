<?php
    class Bloggers  extends Model{
        /**
         * @static
         * @param int $limit
         * @return array|bool
         * Function gets all data about bloggers in database, 1000 at a time, ordered by username
         */
        public static function get ($limit = 1000, $page = 0) {

            //construct your SQL query-- in English Select all the data about bloggers (every field), order the results by username (alphabetically), limit the results to 1000 on page 0 to start with
            $sql = 'SELECT * FROM bloggers ORDER BY username DESC LIMIT' . $limit . ' OFFSET' . $page;
            //send that query to the Model class that Bloggers extends
            $results = self::select($sql);
            //return results to controller
            return $results;
        }
        /**
         * @static
         * @param $fields
         * @return int
         * Insert data about a blogger into the database. This is a new blogger, because it creates a new row.
         */
        public static function create ($fields) {
            //set today's date and time
            $date = date ("Y-m-d H:i:s");
            ///clean all fields so they are not harmful to the database
            $fields = self::cleanData($fields);
            ///scramble the password
            $password = md5($fields['password'], true);
            //construct sql query insert into the four database fields, the four values from our form
            $sql = 'INSERT INTO bloggers (username, email, password, date_created)
                   VALUES ("' . $fields['username'] . '", "' . $fields['email'] . ', '. $password .', '. $date .'")';
            //send that query to the Model class that Bloggers extends
            $results = self::insert($sql);
            //return results to controller
            return $results;
        }

        public static function edit ($fields, $id) {
             ///clean all fields so they are not harmful to the database
            $fields = self::cleanData($fields);
            //construct sql query to update username
            $sql = 'UPDATE bloggers SET username = "' . $fields['username'] . '" WHERE id = ' . $id;

        }

        public static function destroy ($id) {
            //construct query to delete
            $sql = 'DELETE FROM bloggers WHERE id = ' . $id;
            //send that query to the Model class that Bloggers extends
            $results = self::delete($sql);
            //return results to controller
            return $results;
        }
    }
?>