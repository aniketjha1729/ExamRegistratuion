<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select name="taskOption">
      <option value="first">First</option>
      <option value="second">Second</option>
      <option value="third">Third</option>
</select>
<?php
$var = $_POST['taskOption'];
echo $var;
?>

</body>
</html>