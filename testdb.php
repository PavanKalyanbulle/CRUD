<?php
$db_server ="localhost";
$db_user ="root";
$db_pass ="";
$db_name= "testdb";
$conn ="";


try{
    $conn = mysqli_connect($db_server,  $db_user, $db_pass, $db_name);
                        
                       
                       
}
catch(mysqli_sql_exception){
    echo "not connected";
}

if($conn ){
    echo "<h2>your are connected <br/></h2>";
}
else{
    echo " <h3>you have to connect data base</h3>";
}


?>