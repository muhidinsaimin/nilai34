<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=students');
} else {
    include('index.php?m=students');
    echo '<script language="JavaScript">
            alert("Data gagal dihapus")
        </script>';
}