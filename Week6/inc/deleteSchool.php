<?php
    include("functions.php");
    require('../reusable/conn.php'); // we can use "require" or include
    if(isset($_GET['deleteSchool'])){
        $id = $_GET['id'];
        $query = "DELETE FROM schools WHERE `id` = '$id'";

        $school = mysqli_query($connect, $query);

        if($school){
            set_message('School was deleted successfully', 'danger');
            header("Location: ../index.php"); //to navigate to another page- similar to window.locatiom.href
        }else{
            echo 'Failed: ' . mysqli_error($connect);
        }
    }else{
        echo 'Not Authorized';
    }