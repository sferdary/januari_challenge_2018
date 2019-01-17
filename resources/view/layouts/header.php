<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"> <!--Website scaling-->
    <title><?php echo PAGETITLE; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="<?php echo RESOURCES?>/css/style.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="<?php echo RESOURCES?>/css/navbar.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="<?php echo RESOURCES?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo RESOURCES?>/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="animate-bottom"><?php require_once "{$resources}/view/includes/navbar.php"; ?></div>
<div class="layer">
<div class="container">
    <header>
        <a id="title" href="<?php echo HOMELINK;?>"> <h2 id="title">CHALLENGE</h2></a>
        <p id="subtitle">
            effe bikkelen op een mooie website.
        </p>
    </header>