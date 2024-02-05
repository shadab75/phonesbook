<?php
require_once 'includes/conf.php';
require_once 'method/users.php';

$users_obj = new users();

if ($_COOKIE['email']){
    $user = $users_obj->login($_COOKIE['email']);
    $userID = $user['id'];
}
$controller = (!empty($_GET['c'])?$_GET['c']:'index');
$action = (!empty($_GET['a'])?$_GET['a']:'index');
require_once "controller/$controller.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonebook | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="bg-light">
<div class="container">
<div class="row">
    <aside class="col-sm-3 bg-white shadow p-2">
        <h4>Menu</h4>
        <ul>
        <li><a href="?c=users&a=dashboard">Dashboard</a></li>
        <li><a href="?c=contacts&a=add">New Contacts</a></li>
        <li><a href="?c=contacts&a=list">Contacts List</a></li>
        <li><a href="?c=users&a=exit">Exit</a></li>
        </ul>
    </aside>
    <div class="col-sm-9 bg-white shadow p-2">
        <?php
        require_once "view/$controller/$action.php";
        ?>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>