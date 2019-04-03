<?php
    require "includes/common.php";
    

$email=$_POST['email'];
$regex_email="/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{
    
    header('location:signup.php?email_error1=1');
            
}
$password=md5($_POST['password']);

$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);

$dup_query="SELECT id FROM student WHERE email='".$email."'";
$dup_query_result=mysqli_query($con,$dup_query);
if(mysqli_num_rows($dup_query_result)>0)
{
    header('location:signup.php?email_error2=1');
}
 else 
{
     $name=$_POST['name'];
     $course=$_POST['course'];
     $year=$_POST['year'];
     $clg=$_POST['clg'];     
     $mob_no=$_POST['mob_no'];
     
     
    $user_reg_query="INSERT INTO student(Name,Course,Year,College,Mobile_no,email,password) values('$name','$course','$year','$clg','$mob_no','$email','$password')";
    $user_reg_submit= mysqli_query($con,$user_reg_query) or die(mysqli_error($con));

    
    
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['name']=$name;
    $_SESSION['course']=$course;
    $_SESSION['year']=$year;
    $_SESSION['clg']=$clg;
    $_SESSION['mob_no']=$mob_no;
    header('location: courses.php');
}

   ?>     

    