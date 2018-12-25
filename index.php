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
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

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
    <!-- Form -->
  
    <div class="formcontainer">
      <div class="formtitle">
       <center> Registraion Form</center>
      </div>
      <form action="verify.php" method="post">
        <div class="frominput">
          <span>Post applied For:</span>
          <div><b> Software Engineer</b></div>
        </div>
        <div class="frominput">
          <span>Name of the candidate (As per 10th certificate)* </span>
          <div><input type="text" class="input" name="name" placeholder="Full Name" required></div>
        </div>
        <div class="frominput">
          <table>
            <tr>
              <td class="tdform">Date of Birth</td>
              <td class="tdform">Age Calculated as of now</td>
              <td class="tdform">Gender</td>
            </tr>
            <tr>
              <td class="tdform"><input type="text" class="input" name="dob" placeholder="DD/MM/YYYY" required></td>
              <td class="tdform"><input type="text" class="input" name="" id="" required></td>
              <td class="tdform">
                <select name="gender[]" id="" style="-webkit-appearance: none";>
                  <option value="select">--Select--</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </td>
            </tr>
          </table>
        </div>
        <div class="frominput">
          <table>
            <tr>
              <td class="tdform">Email</td>
              <td class="tdform">Confirm Email</td>
              <td class="tdform">Phone</td>
            </tr>
            <tr>
              <td class="tdform"><input type="email" class="input" name="email" required></td>
              <td class="tdform"><input type="email" class="input" name="" id="" required></td>
              <td class="tdform"><input type="number" class="input" name="phone" required></td>
            </tr>
          </table>
        </div>
        <div class="frominput">
          Captcha Code*:
          <img id="img" src="captcha.php"/>
          <input id="captcha1" name="captcha" type="text">
        </div>
        <div class="frominput">
          <table>
            <tr>
              <td class="agree"><input type="checkbox" name="" id="" required></td>
              <td class="agree">I declare that I have gone through the advertisement and I satisfy the Reqirements as per Rule.</td>
            </tr></table> 
        </div>
        <div class="frominput">
        <center>
          <button type="submit" name="verify" class="sub">Save and Continue</button>
          <button type="submit" name="cancel" class="can">Cancel</button>
        </center>
        </div>
      </form>
    </div>
  </body>

</html>
