<?php
 include "connect.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read data</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>


<div class="container">
    <table id="table">
        <thead class="col">
                <tr id="colum">
                    <th scope="col">Sl.no</th>
                    <th  scope="col">Firstname</th>
                    <th  scope="col">Lastname</th>
                    <th  scope="col">Phonenum</th>
                    <!-- <th scope="clo">email</th> -->
                    <th>Operation</th>
                    <th>Insert</th>
                </tr>


        </thead>
        <tbody>

        <?php
        //select query
        $sql= " select * from `table` " ;
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['firstname'];
            $lname=$row['lastname'];
            $mobile=$row['phonenum'];
            // $email=$row['email'];
            echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$mobile.'</td>
                
                  <td>
                  <a href="update.php?updateid='.$id.'">UPDATE</a>
                <a href=" delete.php?deleteid='.$id.'">DELETE</a>
                 <a href="index.php?">INSERT DATA</a>
                </td>
                
                  </tr>';
          
        }
        ?>        
        </tbody> 
    </table>   

</div>
    
</body>
</html>