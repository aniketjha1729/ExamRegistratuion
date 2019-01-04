<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emailer</title>
</head>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
        <div class="content" id="d1">
                <div class="heading"><b><center> Create Account</center></b></div><br><br>
                <div class="form">
                    <form action="reg.php" method="post">
                        <b>Your Name:</b><br>
                        <input type="text" name="name" id="" placeholder="Name"><br><br>
                        <b>Email:</b><br>
                        <input type="email" name="email" id="" placeholder="Email"><br><br>
                        <b>Mobile Number</b><br>
                        <input type="number" name="phone" id="" placeholder="Mobile Number"><br><br>
                        <b>Password</b><br>
                        <input type="password" name="pass" id="" placeholder="*********"><br><br>
                        <button type="submit" name="signup" class="signup">Sign Up</button>
                    </form><br><br>
                    <b>Already have an Account?</b> 
                    <!-- <button type="submit" onclick="f1()">Sign in</button> -->
                    <button type="submit" id="abc">Sign In</button>
                    
                </div>
        </div>
        <div class="content1" id="d2">
                <div class="heading2"><b><center> Sign In</center></b></div><br><br>
                <div class="form2">
                    <form action="login.php" method="post">
                        <b>Email:</b><br>
                        <input type="email" name="email" id="" placeholder="Email"><br><br>
                        <b>Password</b><br>
                        <input type="password" name="pass" id="" placeholder="*********"><br><br>
                        <button type="submit" name="login" class="signin">Sign In</button>
                    </form><br><br> 
                </div>
        </div>
        <script>
            // function f1(){
            //     document.getElementById("d1").style.display="none";
            //     document.getElementById("d2").style.display="block";
            // }
            $(document).ready(function(){
                $("#abc").click(function(){
                    $(".content1").fadeIn(6000);
                    $(".content").fadeOut(1000);
                });
            });


        </script>
</body>
</html>