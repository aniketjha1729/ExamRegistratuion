<?php
//CAPTCHA Matching code
session_start();
if(isset($_POST['verify'])){
    if ($_SESSION["code"] == $_POST["captcha"]) {
        header("Location: http://localhost/cap/abc.html");
    } else {
        header("Location: http://localhost/cap/index.html");
    }
}
?>
