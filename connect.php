<?php
$db_server ="localhost";
$db_user ="root";
$db_pass ="";
$db_name= "testdb";
//$con ="";



try{
    $con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if(!$con){
        echo "connection is done successfully";
        // echo " <br/> Hi";
    }
}
   catch(mysqli_sql_exception){
        echo " error! <br/> connect data base properly and try it once again ";
    }

?>