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
        <input type="checkbox" name="checklist[]" value="Kolkata" id="1" >Kolata<br>
        <input type="checkbox" name="checklist[]" value="Mumbai" id="2">Mumbai<br>
        <input type="checkbox" name="checklist[]" value="Pune" id="3">Pune<br>
        <input type="checkbox" name="checklist[]" value="Patna" id="4">Patna<br>
        <button type="submit" name="sumbitbtn">Submit</button>
    </form>
    <?php
        $dbservername="localhost";
        $username="root";
        $password="";
        $dbname="try";
        $conn=mysqli_connect($dbservername,$username,$password,$dbname);
        if(isset($_POST['sumbitbtn'])){
            if(!empty($_POST['checklist'])){
                foreach ($_POST['checklist'] as $val) {
                    echo $val;
                    $sql="INSERT INTO chekbox(city) VALUES('$val')";
                    $result =mysqli_query($conn,$sql);
                }
                
            }
        }
    ?>
</body>
</html>