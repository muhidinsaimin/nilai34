<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM majors WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=majors');
} else {
    include('index.php?m=majors');
    echo '<script language="JavaScript">
            alert("Data gagal dihapus")
        </script>';
}