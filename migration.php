<?php
error_reporting(E_ERROR | E_PARSE);
require_once 'includes/conf.php';
require_once 'method/migration.php';
$migrate = new Migration();
if (isset($_POST['submit'])){
    $dbname = $_POST['dbname'];
    $migrate->create_db($dbname);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonebook | Migration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>
<body class="bg-light">
<div class="container bg-white w-50 text-center shadow mt-5 p-2 border">
 <h3>create DB</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, praesentium.</p>
    <form method="post" action="#">
        <label>DB Name : </label>
        <input type="text" name="dbname" placeholder="please enter your DB Name..." required>
        <input type="submit" value="create" name="submit" class="btn btn-primary">
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
