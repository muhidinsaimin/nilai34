<?php
$sub = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($sub) {
    case 'view': default:
        include("students/view.php");
        break;
    case 'add':
        include("students/add.php");
        break;
    case 'save':
        include("students/save.php");
        break;
    case 'edit':
        include("students/edit.php");
        break;
    case 'update':
        include("students/update.php");
        break;
    case 'delete':
        include("students/delete.php");
        break;

        /* CRUD  
        C - CREATE - add save 
        R - READ - view  
        U - Update - edit update
        D - Delete - delete
        */
}