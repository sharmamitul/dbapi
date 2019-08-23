<?php

require "init.php";
$userid = $_POST["userid"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$company = $_POST["company"];
$designation = $_POST["designation"];
$role = $_POST["role"];
$password = $_POST["password"];


$sql = "select * from details where userid = '$userid'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
   $status = "exist";
}
else
{
   $sql = "insert into details(userid,firstname,lastname,email,contact,company,designation) values('$userid','$firstname','$lastname','$email','$contact','$company','$designation');"; 
   $sql .= "insert into credentials_info(userid,password,role) values('$userid','$password','$role');";
   if (mysqli_multi_query($con,$sql))
   {
      $status = "ok";

   }
   else
   {
      $status = "error";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
echo json_encode(array("response"=>$status));

mysqli_close($con);

?>
