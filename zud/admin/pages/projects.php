<?php

Login::noAccessAdmin();



$action = URL::getParameter('action');



switch($action){


    case 'add':

        require_once('projects/add.php');

        break;



    case 'add-success':

        require_once('projects/add-success.php');

        break;



    case 'add-failed':

        require_once('projects/add-failed.php');

        break;



    case 'add-no-image':

        require_once('projects/add-no-image.php');

        break;



    case 'edit':

        require_once('projects/edit.php');

        break;



    case 'edit-success':

        require_once('projects/edit-success.php');

        break;



    case 'edit-failed':

        require_once('projects/edit-failed.php');

        break;



    case 'edit-no-image':

        require_once('projects/edit-no-image.php');

        break;



    case 'remove':

        require_once('projects/remove.php');

        break;



    default:

        require_once('projects/list.php');



}







