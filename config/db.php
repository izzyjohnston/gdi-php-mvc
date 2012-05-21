<?php
    class DB {
        public static function  connect(){
            $connection_to_database=mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

            if  ($connection_to_database){
                if(mysql_select_db(DATABASE_NAME, $connection_to_database)){
                    return $connection_to_database;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
    }
?>