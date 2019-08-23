<?php
   require "init.php";

   //Post variable values should be matched to database column name
   $userid = $_POST["userid"];
   $password = $_POST["password"];
  
   $sql = "select userid from credentials_info where userid = '$userid' and password = '$password'";

   $result = mysqli_query($con,$sql);
   if (!mysqli_num_rows($result)>0)
   {
      $status = "failed";
      echo json_encode(array("response"=>$status));
   }
   else
   {
      $row = mysqli_fetch_assoc($result);
      $name = $row['userid'];
      $status = "ok";
      echo json_encode(array("response"=>$status,"name"=>$name)); 
   }
   mysqli_close($con);
?>