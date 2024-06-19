<?php 
    include('functions.php');

    if(isset($_POST['updateButton'])){
        print_r($_POST);
        //Array ( [schoolName] => test [schoolLevel] => test [phone] => 1234567890 [email] => test@gmail.com )
        $id = $_POST['id'];
        $schoolName = $_POST['schoolName'];
        $schoolLevel = $_POST['schoolLevel'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        //connection string
        include('../reusable/conn.php');

        $query = "UPDATE `schools` SET `School Name`='$schoolName',`School Level`='$schoolLevel',`Phone`='$phone',`Email`='$email' WHERE `id`='$id'";

        $school = mysqli_query($connect, $query);

        if($school){
            set_message("School was updated", 'success');
            header("Location: ../index.php"); //to navigate to another page- similar to window.locatiom.href
        }else{
            echo 'Failed: ' . mysqli_error($connect);
        }
    }else{
        echo 'You are not allowed here!';
    }
?>