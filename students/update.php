<?php
if(isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $code = $_POST['code'];
    $major = $_POST['major'];

    $sql = "UPDATE students SET code='$code', major='$major' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=students');
    } else {
        include('index.php?m=students');
        echo '<script language="JavaScript">
            alert("Data gagal diupdate")
        </script>';
    }
}