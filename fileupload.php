<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" enctype="multipart/form-data" method="post" >
        <input type="file" name="file" id="file">
        <button type="submit" name="sumbitbtn">Upload</button>
    </form><br>
    <form action="" method="post">
        <button type="submit" name="view">View</button>
    </form>
    <?php
        session_start();
        $dbname="try";$dbservername="localhost";$password="";$username="root";
        $conn=mysqli_connect($dbservername,$username,$password,$dbname);
        if (isset($_POST['sumbitbtn'])) {
            $validextensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") ||
                    ($_FILES["file"]["type"] == "image/jpeg")) && ($_FILES["file"]["size"] < 100000) && in_array($file_extension, $validextensions))
                {
                    // if ($_FILES["file"]["error"] > 0) {
                    //     echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
                    //} else {
                        // echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
                        // echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
                        // echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                        // echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
                        $filename=$_FILES["file"]["name"];
                        if (file_exists("upload/" . $_FILES["file"]["name"])) {
                            echo $_FILES["file"]["name"] . " <b>already exists.</b> ";
                        } else {
                            echo "<span>Your File Uploaded Succesfully...!!</span><br/>";
                            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                            $imgFullpath = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'. "upload/" . $_FILES["file"]["name"];
                            //echo "<b>Stored in:</b><a href = '$imgFullpath' target='_blank'> " .$imgFullpath.'<a>';
                            $sql="INSERT INTO fileupload(filepath) VALUES ('$imgFullpath')";
                            if($result=mysqli_query($conn,$sql)){
                                echo "Path successfully copied";
                            }else{
                                echo "Something went wrong";
                            }
                        }
                    //}
                } 
            else {
                echo "<span>***Invalid file Size or Type***<span>";
            }
            $_SESSION['filename']=$filename;//path of the file stored in the array
        }
    ?>
    <?php
        // session_start();
        $dbname="try";$dbservername="localhost";$password="";$username="root";
        $conn=mysqli_connect($dbservername,$username,$password,$dbname);
        if(isset($_POST['view'])){
            $file_name=$_SESSION['filename'];
            //echo $filepath;
            echo '<img src="upload/'.$file_name.'" id="fileimage" class="filename"/>';
        }
    ?>
    <br><button type="button" onclick='document.getElementById("fileimage").style.display="none"'>Click me to hide</button>
</body>


</html>
