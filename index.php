<?
require_once 'functions.php';
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Настольные игры</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fontello/css/fontello.css">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/content.js"></script>
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>




</head>


<body>


<? include 'temp/menu.php' ?>
<div class="break"></div>

<div id="main_content">
<!--    --><?//include 'temp/filter.php'?>
    <?include 'temp/events.php'?>
</div>



</body>
</html>