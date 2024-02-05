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
    case 'show':
        $contact = $contacts_obj->show($_GET['id']);
        break;
    case 'list':
        $contacts = $contacts_obj->list($userID);

        break;
    case 'edit':
        $contact = $contacts_obj->show($_GET['id']);

        break;
    case 'update':
        $pic ='';
        if ($_FILES['pic']){
            $pic=$uploader->uploader($_FILES['pic']);
        }
        $contact = $contacts_obj->update($_POST,$pic);
        header('location:?c=contacts&a=list');
        break;
    case 'delete':
        $id = $_GET['id'];
        $contacts_obj->delete($id);
        header('location:?c=contacts&a=list');
        break;
}