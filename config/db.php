<?php
    class DB {
        function connect(){
            $connection_to_database=mysqli_connect (DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);
            if  ($connection_to_database){
                if(mysql_select_db($connection_to_database, DATABASE_NAME)){
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