<?php
    require "connect.php";
    session_start();
    if(isset($_POST['signup'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        
        $query1="SELECT * FROM registration WHERE email='$email' or phone='$phone'";
        $sql1=mysqli_query($conn,$query1);
        if($sql1){
            $num=mysqli_num_rows($sql1);
            if($num==0){
                $query2="INSERT INTO registration (name,email,phone,password)  VALUES ('$name','$email','$phone','$pass')";
                $query3="INSERT INTO userdata (mail)  VALUES ('$email')";
                $sql2=mysqli_query($conn,$query2);
                $sql3=mysqli_query($conn,$query3);
                if($sql2 and $sql3){
                    $_SESSION['check']=2;
                    $_SESSION['email']=$email;
                    header("Location: http://localhost/email/dashboard.php");
                }else{
                    echo "something went wrong";
                }
            }else{
                echo "data already exsit";
            }
        }else{
            echo "connection problem";
        }
    }
    else{
        header("Location: http://localhost/email/index.php");
    }
?>