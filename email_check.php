<?php
 $email_address=$_GET['email'];
  echo $email_address;
  exit();
 require './classes/application.php';
 $obj_app=new Application();
 
 $query_result=$obj_app->customer_email_check($email_address);
 $customer_email=mysqli_fetch_assoc($query_result);
 if($customer_email){
     echo 'Email already exists';
 }  else {
     echo 'Email available';
}
 
 
 

