\<!DOCTYPE html>
<html lang="en">
<head>

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
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/upload1.css" rel="stylesheet">
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
        if(isset($_POST['continue'])){
           echo "<form action=\"index.php\" method=\"post\">
                  <div class=\"header\">
                    <div class=\"headercontent\">
                      <span>
                          <table>
                              <tr>
                                  <td>Candidate Name:<b>";
                                  echo $_SESSION['name']; echo "</b><br> </td>
                              </tr>
                              <tr>
                                  <td>Application Number:<b>"; echo $_SESSION['regnum']; echo "</b></td>
                              </tr>
                          </table>
                      </span>
                    </div>
                  </div>
                  </form>";
            echo "<div class=\"formcontainer\">
                    <div class=\"formtitle\">
                    <center> Registraion Form</center>
                    </div>
                    
                    <table class=\"pic\">
                        <tr> 
                            <td class=\"td1\"><b>Upload Photograph(JPG,JPEG only)*</b><br><br>
                                <form enctype=\"multipart/form-data\" method=\"post\" >
                                    <input type=\"file\" name=\"file\" id=\"file\"><br><br>
                                    <button type=\"submit\" name=\"picbtn\" class=\"fullupload\">Upload</button>
                                </form>
                            </td>
                            <td>
                                <img src=\"upload/Albert_Einstein_(Nobel).png\" id=\"fileimage\" class=\"picupload\">
                            </td>
                        </tr>
                        <tr> 
                            <td class=\"td1\"><b>Upload Photograph(JPG,JPEG only)*</b><br><br>
                                <form enctype=\"multipart/form-data\" method=\"post\" >
                                    <input type=\"file\" name=\"file\" id=\"file\"><br><br>
                                    <button type=\"submit\" name=\"signbtn\" class=\"fullupload\">Upload</button>
                                </form>
                            </td>
                            <td>
                                <img src=\"upload/B612_20181103_222640_472.jpg\" id=\"fileimage\" class=\"signupload\">
                            </td>
                        </tr>
                    </table>
                    <div class=\"upload\">
                        <form action=\"go.php\" method=\"post\">
                           <center> <button type=\"submit\" name=\"fullupload\" class=\"fullupload\">View Details</button></center>
                        </form>
                    </div>
                  </div>";
        }
        else{
            header("Location: http://localhost/php/index.php");
        }
    ?>
</body>
</html>