<?php
include "dbconnect.php";
session_start();


if (isset($_POST['submit'])) {

    $catname = $_POST['cat_name'];
    $catdesc = $_POST['cat_desc'];
    $thumb = $_FILES['thumb_1']['name'];

    $sql="INSERT INTO `add_category`(`cat_name`, `cat_desc`, `thumb_1`) VALUES ('$catname','$catdesc', '$thumb')";
    $data = mysqli_query($conn, $sql);

    if($data){
        move_uploaded_file($_FILES["thumb_1"]["tmp_name"], "upload/".$_FILES["thumb_1"]["name"]);
        $_SESSION['status'] = "successfull";
        header("location:view_cat.php");

    }else{
        echo "not succesfull";
    }
}
?>