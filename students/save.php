<?php
if(isset($_POST['simpan'])) {
    include_once('config.php');
    $code = $_POST['code'];
    $major = $_POST['major'];

    $sql = "INSERT INTO students SET code='$code', major='$major'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=students');
    } else {
        include('index.php?m=students&s=add');
        echo '<script language="JavaScript">
            alert("Data gagal ditambahkan")
        </script>';
    }
}