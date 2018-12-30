<!DOCTYPE html>
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
    <link href="css/upload.css" rel="stylesheet">
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
                          <table class=\"details\">
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
                    <div class=\"uplaod\">
                        <table class=\"content\">
                            <tr>
                                <th colspan=\"2\" class=\"col\"><center>Upload Your Picture</center></th>
                                <th colspan=\"2\" class=\"col\"><center>Upload Your Signature</center></th>
                            </tr>
                            <form method=\"post\" enctype='multipart/form-data'>
                                <tr>
                                    <td colspan=\"2\" class=\"col\"><center><input type=\"file\" name=\"upload[]\"></center></td>
                                    <td colspan=\"2\" class=\"col\"><center><input type=\"file\" name=\"upload[]\"></center></td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\" class=\"col\"><center><button type=\"submit\" name=\"upload\" class=\"next\">Upload</button></center></td>
                                </tr>
                                <input type=\"hidden\" name=\"continue\" />
                            </form>";
                                if(isset($_POST['upload'])){
                                    //error_reporting(0);
                                    //echo "hello";
                                    for($i=0; $i<2; $i++) {
                                        $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
                                        if ($tmpFilePath != ""){
                                            $file[$i] = $newFilePath = "upload/" .$_SESSION['regnum'].$_FILES['upload']['name'][$i];
                                            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                                                $filename[$i]=$_SESSION['regnum'].$_FILES['upload']['name'][$i];
                                                //echo $filename[$i]; 
                                            }
                                        }
                                    }
                                    $i=0;
                                    echo "<tr>
                                            <td colspan=\"2\" rowspan=\"4\"><center>";
                                                echo '<img src="upload/'.$filename[0].'" id="fileimage"  class="pic"/>';
                                                echo "</center>
                                            </td>
                                            <td colspan=\"2\" rowspan=\"4\"><center>";
                                                echo '<img src="upload/'.$filename[1].'" id="fileimage"  class="sign"/>';
                                                echo "</center>
                                            </td>        
                                         </tr>";
                                }
                        
                        echo  "</table>
                    </div><br>
                    <form action=\"preview.php\" method=\"post\">
                        <div class=\"footer\"><center><button type=\"submit\" class=\"next\" name=\"preview\">Save and Next</button></center></div>
                    </form>
                </div>";
                if(isset($_POST['preview'])){
                    header("Location: http://localhost/php/preview.php");
                }
        }
        else{
            header("Location: http://localhost/php/index.php");
         }    
    ?>
            
</body>
</html>