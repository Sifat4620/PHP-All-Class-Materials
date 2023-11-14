<?php
     
     $host  = "localhost";
     $user  = "root";
     $pass  = "";
     $dbname= "deshboard";

     // to connecy a database with our project
     $db = mysqli_connect($host,$user,$pass,$dbname);

     if ($db){
        echo "Database Connected Successfully wtih our project";
     }
     else{
        die("Opps !! some thing wrong".mysqli_error($db));
     }
?>