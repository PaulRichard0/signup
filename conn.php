<?php
$username =$_POST['username'];
$email =$_POST['email'];
$password =$_POST['password'];
//data connection
$conn = new mysql ('localhost','Richard','root','123456789');
if($conn->connection_error);
 {
  die('connection failed :'.$conn->connection_error);
 }
 else{

        $stmt = $conn->prepare("insert into login page(username,email,password,values(?,?,?,)");
         $stmt->bind_param("sss"$username,$email,$password);
         $stmt->execute();
         echo "sign up successful";
         $stmt->close();
         $conn->close();
       }

?>