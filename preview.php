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
    <link href="css/preview.css" rel="stylesheet">
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
                  </form>";?>
                <div class="content">
                    <div class="heading1">
                        <center>Deatils</center>
                    </div>
                    <table class="data">
                        <tr>
                            <td class="tddata" colspan="2">aniket aniket</td>
                            <td class="tddata" colspan="2">aniket</td>
                            <td class="tddata"colspan="2" rowspan="3">
                            <?php
                                echo '<img src="upload/'.$_SESSION['pic'].'" id="fileimage"  class="pic"/>';
                            ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata" rowspan="2" >aniket</td>
                            
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata">aniket</td>
                            <td class="tddata"colspan="2">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata" colspan="3">aniket</td>
                            
                        </tr>
                        <tr>
                            <td class="tddata"colspan="2">aniket</td>
                            <td class="tddata"colspan="3">aniket</td>
                        </tr>
                    </table>
                    <div class="heading1">
                        <center>Deatils</center>
                    </div>
                    <table class="data1">
                        <tr>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                            <th class="tddata1">aniket</th>
                        </tr>
                        <tr>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                        </tr>
                        <tr>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                            <td class="tddata1">aniket</td>
                        </tr>
                    </table>
                    <br>
                    <div class="footer">
                        <div>
                        <?php
                                echo '<img src="upload/'.$_SESSION['sign'].'" id="fileimage"  class="sign"/>';
                            ?>
                        </div>
                        <table>
                            <tr>
                                <td class="agree"><input type="checkbox" name="" id="" required></td>
                                <td class="agree">I hereby decalre that the particulars furnished by me in this application are true,correct and complete to the best of
                                    my knowledge and belief abd nothing has been concealed or suppressed. I array_multisort
                                understand that in the event of any information being found false or incorrect of ineligibily being detected before or after the examination or selection ,I shall be 
                            liable for action taken by the company. </td>
                            </tr>
                        </table> 
                    </div>
                </div>  
        <?php
        }
        else{
            header("Location: http://localhost/php/index.php");
        }
    ?>
</body>
</html>
