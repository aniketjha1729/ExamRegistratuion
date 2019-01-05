<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard1.css">
</head>
<body>
    <?php
        require "connect.php";
        session_start();
        //error_reporting(0);
        //This code will execute when a user login:
        if($_SESSION['check']==1){
            $id=$_SESSION['id'];
            //echo $id;
            $query="SELECT * FROM registration WHERE id='$id'";
            $sql=mysqli_query($conn,$query);
            if($sql){
                //echo "hello";
                $data=mysqli_fetch_assoc($sql);
                $name=$data['name']; 
                $email=$data['email'];
                $phone=$data['phone'];
                $id=$data['id'];
                //echo "login";
                $_SESSION['name']=$name;
                $_SESSION['id']=$id;
            }else{
                echo "Connection Problem";
            }
             
        }
        //This part will execute when a new user sign up
        elseif($_SESSION['check']==2){
            $email=$_SESSION['email'];
            $query="SELECT *FROM registration WHERE email='$email'";
            $sql=mysqli_query($conn,$query);
            if($sql){
                $data=mysqli_fetch_assoc($sql);
                $id=$data['id'];
            }
            $query="SELECT * FROM registration WHERE id='$id'";
            $sql=mysqli_query($conn,$query);
            if($sql){
                $data=mysqli_fetch_assoc($sql);
                $name=$data['name']; 
                $email=$data['email'];
                $phone=$data['phone'];
                $id=$data['id'];
                //echo "signup";
                $_SESSION['name']=$name;
                $_SESSION['id']=$id;
            }
        }else{
            //echo "nothing";
            $_SESSION['name']="";
            $_SESSION['id']="";
        }
        ?>
        <!-- When a user is neither signed in nor has registered -->
           <div class="navbar">
                <?php 
                    require "connect.php";
                    echo $_SESSION['name']; echo "<br>";
                    if($_SESSION['name']!=""){ $_SESSION['id']=$_SESSION['id'];?>
                        <form action="logout.php" method="post">
                            <button type="submit" name="logout">Logout</button>
                        </form>
                        <form  method="post" enctype='multipart/form-data' >
                            <input type="file" name="upload" id="" src="">
                            <button type="submit" name="upload">Upload</button>
                        </form>
                    <?php
                        require "connect.php";
                        $id=$_SESSION['id'];
                        //echo $id;
                        $query="SELECT * FROM userdata WHERE id='$id'";
                        $sql=mysqli_query($conn,$query);
                            if($sql){
                                //echo "ok";
                                $num=mysqli_num_rows($sql);
                                if($num!=0){
                                    $data=mysqli_fetch_assoc($sql);
                                    $img=$data['pic'];
                                    //echo $img;
                                    if($img!=""){
                                        echo '<img src="upload/'.$img.'" id="fileimage"  class="pic"/>';
                                    }else{
                                    echo '<img src="upload/unknown.jpg" id="fileimage"  class="pic"/>';
                                    }
                                }
                            }
                    $_SESSION['id']=$_SESSION['id'];
                    // error_reporting(0);
                    }
                ?>
                
                <?php
                    require "connect.php";
                    $id=$_SESSION['id'];
                    $_SESSION['id']=$id;
                    if(isset($_POST['upload'])){
                        $file=$_FILES['upload']['tmp_name'];
                        if($file!=""){
                            $filepath = "upload/".$_SESSION['id']."@".$_FILES['upload']['name'];
                            if(move_uploaded_file($file, $filepath)) {
                                $_SESSION['pic']=$_SESSION['id']."@".$_FILES['upload']['name'];
                                $paddress=$_SESSION['pic'];
                                //echo $paddress;
                                $query="UPDATE userdata SET pic='$paddress' WHERE id='$id'";
                                $sql=mysqli_query($conn,$query);
                                if($sql){
                                    echo "done";

                                }else {
                                    echo "oops";
                                }

                            }
                        }
                    }
                ?>
            </div>
             
    

</body>
</html>