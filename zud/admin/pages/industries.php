<?php

Login::noAccessAdmin();



$action = URL::getParameter('action');



switch($action){



    case 'add':

        require_once('industries/add.php');

        break;



    case 'add-success':

        require_once('industries/add-success.php');

        break;



    case 'add-failed':

        require_once('industries/add-failed.php');

        break;



    case 'edit':

        require_once('industries/edit.php');

        break;



    case 'edit-success':

        require_once('industries/edit-success.php');

        break;



    case 'edit-failed':

        require_once('industries/edit-failed.php');

        break;



    case 'remove':

        require_once('industries/remove.php');

        break;



    default:

        require_once('industries/list.php');



}







