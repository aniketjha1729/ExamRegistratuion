<?php
    if(isset($_POST['sub'])){
        $name=htmlspecialchars($_POST['name']);
        echo $name;
    }
?>