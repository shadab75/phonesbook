<?php
require_once 'method/users.php';
require_once 'method/contacts.php';
require_once 'method/uploader.php';
$uploader = new uploader();
$users_obj = new users();
$contacts_obj = new contacts();
switch ($action){
    case 'create':
        $pic = '';
        if ($_FILES['pic']){
            $pic = $uploader->uploader($_FILES['pic']);
        }
        $contacts_obj->create($userID,$_POST,$pic);
        header('location:?c=contacts&a=list');
        break;
    case 'list':
        $contacts = $contacts_obj->list($userID);

        break;
    case 'edit':
        break;
    case 'update':
        break;
    case 'delete':
        break;
}