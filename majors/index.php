<?php
$sub = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($m) {
    case 'view': default:
        include("majors/view.php");
        break;
    case 'add':
        include("majors/add.php");
        break;
    case 'save':
        include("majors/save.php");
        break;
    case 'edit':
        include("majors/edit.php");
        break;
    case 'update':
        include("majors/update.php");
        break;
    case 'delete':
        include("majors/delete.php");
        break;

        /* CRUD  
        C - CREATE - add save 
        R - READ - view  
        U - Update - edit update
        D - Delete - delete
        */
}