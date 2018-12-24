<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="city[]" id="" style="-webkit-appearance: none";>
            <option value="Kolkata">Kolkata</option>
            <option value="Patna">Patna</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
        </select>
        <button type="submit" name="submitbtn">Submit</button>
    </form>
    <?php
        $dbserver="localhost";$dbname="try";$username="root";$password="";
        $conn=mysqli_connect($dbserver,$username,$password,$dbname);
        if(isset($_POST['submitbtn'])){
            foreach($_POST['city'] as $select){
                echo $select;
                $sql="INSERT INTO selectbox(options) VALUES ('$select')";
                if($result=mysqli_query($conn,$sql)){
                    echo "done";
                }
                else
                    echo "something went wrong";
            }
        }
    ?>
</body>
</html>