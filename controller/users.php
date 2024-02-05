<?php
require_once 'method/users.php';
require_once 'method/contacts.php';
$users_obj = new users();
$contacts_obj = new contacts();
switch ($action){
    case 'login':
        $email = $_POST['email'];
        $password = strtoupper(sha1($_POST['password']));
        $user = $users_obj->login($email);
        if ($user['password']=$password){
             setcookie('email',$email,time()+(86400*30));
             header('location:?c=users&a=dashboard');
        }
       break;

    case 'dashboard':
         $contacts = $contacts_obj->last_contacts($userID);
          break;
    case 'signup':
        $email = $_POST['email'];
        $signup = $users_obj->signup($_POST);
        if ($signup){
            setcookie('email',$email,time()+(86400*30));
            header('location:index.php?c=users&a=dashboard');
        }
        header('location:signup.php');
        break;

    case 'exit':
        setcookie('email','',time()-3600);
        header('location:login.php');
        break;


}