<?php
require_once 'method/users.php';
$users_obj = new users();
switch ($action){
    case 'login':
        $email = $_POST['email'];
        $password = strtoupper(sha1($_POST['password']));
        $user = $users_obj->login($email);
        if ($user['password']=$password){
             setcookie('email',$email,time()+(86400*30));
             header('location:?c=users&a=dashboard');
        }

    case 'dashboard':
         echo $_COOKIE['email'];
         break;
    case 'exit':
        setcookie('email','',time()-3600);
        header('location:login.php');
        break;


}