<?php
if (isset($_COOKIE['email'])){
    header('location:index.php?c=users&a=dashboard');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonebook | Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="container bg-white w-50 text-center shadow mt-5 p-2 border">
         <form action="index.php?c=users&a=signup" method="post">
            <div class="form-group">
                <label for="firstname">Firstname:</label>
                <input type="text" class="form-control" name="firstname" placeholder="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" name="lastname" placeholder="lastname">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="email">Mobile number:</label>
                <input type="text" class="form-control" name="mobile" placeholder="mobile">
            </div>
             <div class="form-group">
                 <label for="email">Password:</label>
                 <input type="password" class="form-control" name="password" placeholder="password">
             </div>
            <div class="form-group">
                <label for="email">Address:</label>
                <input type="text" class="form-control" name="address" placeholder="address">
            </div>


            <input type="submit" value="Signup" class="btn btn-primary">

        </form>

    </div>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>