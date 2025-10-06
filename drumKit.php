<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUM KIT</title>
    <link rel="stylesheet" href="style_drum.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
   
    <h1> DRUM <img src="pictures/d.png" height="125px" width="135px"> KIT</h1>
    <div id="box">
    <button type="button" style="margin-left: 200px;background-image: url('pictures/tom1.png');" id="w">w</button>
    <button type="button" style="background-image: url('pictures/tom2.png')" id="a">a</button>
    <button type="button" style="background-image: url('pictures/tom3.png');" id="s">s</button>
    <button type="button" style="background-image: url('pictures/tom4.png');" id="d">d</button>
    <button type="button" style="background-image: url('pictures/snare.png');" id="j">j</button>
    <button type="button" style="background-image: url('pictures/crash.png');" id="k">k</button>
    <button type="button" style="background-image: url('pictures/kick.png');" id="l">l</button>
    </div>
    <a href="logout.php" class="logout-btn">Logout</a>



    <script src="script.js"></script>
</body>
</html>