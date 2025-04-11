<?php
include "connection1.php";
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['mobile'];
  // $email=$_POST['email'];

  // insert query
  $sql="insert into `table`(firstname,lastname,phonenum) values('$fname','$lname','$mobile')";


  //exetute query
  // $result= mysqli_query($con,$sql);
  $result = mysqli_query($con,$sql);
  if($result){
    header('location:read.php');
  }
  else{
    header('loaction:read.php');
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container " >
      <h3>Insert Data</h3>
      <form  class="form" name="form" onsubmit="return isvalid()" method="post">
        <div class="student">
        <br><br>
          fname: <input type="text" name="fname" placeholder="enter firstname">
          <br><br>
        </div>

        <div class="student">
          lname: <input type="text" name="lname" placeholder=" enter last name">
          <br><br>
        </div>

        <!-- <div class="student">
          email: <input type="text" name="email" placeholder=" enter email">
          <br><br>
        </div> -->


    
        <div class="student">
          mobile: <input type="text" name="mobile" placeholder="enter phone num">
          <br><br>
        </div>
        <button type="text" name="submit">submit</button>

        </form>
      </div>
      <script>
        function isvalid(){
          var fname=document.form.fname.value;
          var fname=document.form.lname.value;
          var mobile=document.form.mobile.value;
          var email=document.form.email.value;
          if(fname.length == "" && lname.length == "" && mobile.length == "" && email.length==""){
            alert(" enter data fname and lname and mobile and email");
            return false;
          }
          else{ 
            if(fname.length==""){
              alert(" enter data fname ");
            return false; 
          }
          if(lname.length==""){
              alert(" enter data lname ");
            return false; 
          }

          if(mobile.length==""){
              alert(" enter data mobile ");
            return false; 
          }
        //   if(email.length==""){
        //       alert(" enter email ");
        //     return false; 
        // }
      }
      </script>


</body>
</html>
