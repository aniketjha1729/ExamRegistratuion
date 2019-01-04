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
        error_reporting(0);
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
                ?>
                <div class="navbar">
                    <form action="logout.php" method="post">
                        <?php echo $name;echo "<br>";?>
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </div> <?php
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
                $phone=$data['phone'];?>
                <div class="navbar">
                    <form action="logout.php" method="post">
                        <?php echo $name;echo "<br>";?>
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </div>
                <?php
            }
        }else{
            $name="";
            ?>
        <!-- When a user is neither signed in nor has registered -->
           <div class="navbar">
                <?php $name ?>
            </div>
        <?php error_reporting(0);}?> 

</body>
</html>