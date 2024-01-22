<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);

    $sql   ="INSERT INTO `tbl_user`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:login.php');
    echo"<script>alert('Succès de l'inscription d'un nouvel utilisateur');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
