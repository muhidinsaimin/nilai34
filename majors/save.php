<?php
if(isset($_POST['simpan'])) {
    include_once('config.php');
    $code = $_POST['code'];
    $major = $_POST['major'];

    $sql = "INSERT INTO majors SET code='$code', major='$major'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=majors');
    } else {
        include('index.php?m=majors&s=add');
        echo '<script language="JavaScript">
            alert("Data gagal ditambahkan")
        </script>';
    }
}