<?php
Login::noAccessAdmin();

$action = URL::getParameter('action');

switch($action){

    case 'add':
        require_once('news/add.php');
        break;

    case 'add-success':
        require_once('news/add-success.php');
        break;

    case 'add-failed':
        require_once('news/add-failed.php');
        break;

    case 'add-no-image':
        require_once('news/add-no-image.php');
        break;

    case 'edit':
        require_once('news/edit.php');
        break;

    case 'edit-success':
        require_once('news/edit-success.php');
        break;

    case 'edit-failed':
        require_once('news/edit-failed.php');
        break;

    case 'edit-no-image':
        require_once('news/edit-no-image.php');
        break;

    case 'remove':
        require_once('news/remove.php');
        break;

    default:
        require_once('news/list.php');

}



