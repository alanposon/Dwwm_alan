<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

<nav class="navbar-dark bg-primary nb=3">
    <a href="/index.php"    class="navbar-brand"> Mon calendrier </a>
</nav>

<?php 

require '../src/Date/Month.php'; 

$month = new Month ('month':1,v'ear': 2020);  ?>

<h1><?= $month->toString();?> </h1> 
<!-- compter les semaines  -->

</body>

</html>