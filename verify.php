<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/verify1.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Navigation -->
    <div class="navbarcontainer">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
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
           echo "<div class=\"msgcontainer\">
                <div class=\"msgtitle\">
                      <center> Registraion Completed! </center>
                    </div>
                <div class=\"msg\">
                    <div class=\"fullmsg\">
                        Dear <b> $name </b>,<br><br>
                        <p>Your Registration has been created successfully for the positon of Software Engineer
                            Your Application No is";
                            $regen='0123456789';
                            $regen=substr(str_shuffle($regen),0,6);
                            $regnum='SOFT'.$regen;
                            echo "<b> $regnum";
                            $_SESSION['name']=$name;
                            $_SESSION['regnum']=$regnum;
                            $_SESSION['phone']=$phone;
                            $_SESSION['email']=$email;
                            $_SESSION['gender']=$gen;
                            $_SESSION['dob']=$dob;
                          echo  "</b> and you can login using your <b>DOB</b> to complete application process.
                        </p>
                        <p>
                          The Login credentials has been sent to your registered emailid and mobile number for future refernce.
                        </p>
                        <p>Please click on the below tab to complete your application process.</p>
                        <b>Thanks & Regards,<br>Aniket Jha</b>
                    </div>
                    <form action=\"form.php\" method=\"post\">
                      <div >
                        <center>
                          <button type=\"submit\" class=\"button\" name=\"login\">Login and Continue</button>
                        </center>
                      </div>
                    </form>
                </div>
            </div>";
        }
        else{
          header("Location: http://localhost/php/index.php");
        }
      }
      else{
        header("Location: http://localhost/php/index.php");
      }
      ?>
</form>
</body>
</html>