<?php
    require "connect.php";
    session_start();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $query="SELECT * FROM registration WHERE email='$email' and password='$pass'";
        $sql=mysqli_query($conn,$query);
        if($sql){
            $num=mysqli_num_rows($sql);
                if($num!=0){
                    $data=mysqli_fetch_assoc($sql);
                    $_SESSION['id']=$data['id'];
                    $_SESSION['check']=1;
                    header("Location: http://localhost/email/dashboard.php");
                }else{?>
                    <script>
                        alert("Invalid Credential");
                        window.location.replace("http://localhost/email/index.php")
                    </script><?php
                }
        }
        else{
            echo "Query Problem";
        }
    }else{
        header("Location: http://localhost/email/index.php");
    }
?>