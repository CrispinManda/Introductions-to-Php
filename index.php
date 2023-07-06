<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'nav-menu.php';?>
  
<h1>Welcome to my home page!</h1>
<?php include 'about.php';?>
<p>Some text.</p>
<p>Some more text.</p>
<?php //include 'front-page.php';?>
<?php// include 'upload.php';?>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Hello " . date("l");

?>

<?php include 'contact-us.php';?>
<?php include 'form.php';?>

<?php require "footer.php";?>


</body>
</html>