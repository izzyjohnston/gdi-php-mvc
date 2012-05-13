<?php
/**
 * Model class extends DB to connect to database
 * Model class does the same four CRUD functions that every model has to do, so we put it in a separate class, so we don't have to rewrite the same code in every model.
 * Generally, all the functions that have mysql_ as a prefix are kept in separate classes like this one because every model, that is every table in your database, will use them the same way.
 */
    class Model extends DB{
        public static function select($sql){///The R(ead) of CRUD
            if(self::connect()){

                //initialize the rows of data you might get from your database. If you don't the last line will throw an error because it will try to count something that doesn't exist.
                $rows = array();
                ///get the results from the database
                $results_from_database = mysql_query($sql, self::connect());
                ///while there are results from the database, put the data into our $rows array
                ///mysql_fetch_assoc puts results into an associative array
                ///if there is data in that array (i.e. if there is data in the database, assign that data to our $rows array
                while ($row_from_database = mysql_fetch_assoc($results_from_database)) {
                    $rows[] = $row_from_database;
                }
                ///if there was data from the database, return that data so we can use it in the controller
                if(count($rows)>0){
                    return $rows;
                }
                ///else return false, we must return something so our controller knows it can continue on.
                else{
                    return false;
                }
            }
            else return false;

        }
        public static function insert($sql){//The C(reate) of CRUD
            if(self::connect()){
                ///send insert query
                mysql_query(self::connect(), $sql);
                //return id of query just inserted
                return mysql_insert_id();
            }
            else return false;

        }
        public static function update($sql){//The U(pdate) of CRUD
            if(self::connect()){
                //send update query
                mysql_query(self::connect(), $sql);
                //return true
                return true;
            }
            else return false;
        }
        public static function delete($sql){//The D(elete) of CRUD
            if(self::connect()){
                //send delete query
                mysql_query(self::connect(), $sql);
                //return true
                return true;
            }
            else return false;
        }

        public static function cleanData($fields){
            if(self::connect()){
                //for each of the fields, replace the current value with a cleaned up version of the value so it doesn't hurt the database
                foreach ($fields as &$field){
                    $field = mysql_real_escape_string(self::connect(), $field);
                }
                return $fields;
            }
            else return false;
        }

    }
?>