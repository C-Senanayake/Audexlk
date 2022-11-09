<?php
    function verify_query($set){
        global $connection;

        if(!$set){
            die("Database query failed:hiii ". mysqli_error($connection));
        }
    }
?>