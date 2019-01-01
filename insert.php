<?php
    session_start();
    if(isset($_POST['verify'])){
        if($_SESSION["code"]==$_POST["captcha"]){
          $name=$_POST['name'];
          $phone=$_POST['phone'];
          $dob=$_POST['dob'];
          $email=$_POST['email'];
          foreach($_POST['gender'] as $gender){
            $gen=$gender;
          }
          require "connect.php";
          $query="SELECT * FROM reg WHERE email='$email' or phone='$phone'";
          $result=mysqli_query($conn,$query);
          $num=mysqli_num_rows($result);
          if($num==0){
            $regen='0123456789';
            $regen=substr(str_shuffle($regen),0,6);
            $regnum='SOFT'.$regen;
              $sql="INSERT INTO reg (name,dob,phone,email,gender,regnum) VALUES ('$name','$dob','$phone','$email','$gender','$regnum')";
              $sql1="INSERT INTO data(regnum) VALUES('$regnum')";
              if(mysqli_query($conn,$sql) and (mysqli_query($conn,$sql1))){
                  header("Location: http://localhost/php/login.php");
              }
              else{
                  echo "Something Went Wrong";
              }
          }
          else{
              header("Location: http://localhost/php/login.php");
          }  

        }
        else{
            header("Location: http://localhost/php/index.php");
        }
    }
    
?>