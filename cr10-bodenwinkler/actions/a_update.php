<?php
    require_once 'db_connect.php';

    if($_POST) {
        $author_first_name = $_POST['author_first_name'];
        $author_last_name = $_POST['author_last_name'];
        $pub_name = $_POST['pub_name'];
        $pub_address = $_POST['pub_address'];
        $pub_date = $_POST['pub_date'];
        $pub_size = $_POST['pub_size'];
        $med_title = $_POST['med_title'];
        $med_image = $_POST['med_image'];
        $med_type = $_POST['med_type'];
        $isbn = $_POST['isbn'];
        $short_desc = $_POST['short_desc'];
        $med_status = $_POST['med_status'];
        
        $id = $_POST['id'];

        $sql = "UPDATE media SET author_first_name = '$author_first_name', author_last_name = '$author_last_name', pub_name = '$pub_name', pub_address = '$pub_address', pub_date = '$pub_date', pub_size = '$pub_size', med_title = '$med_title', med_image = '$med_image', med_type = '$med_type', isbn = '$isbn', short_desc = '$short_desc', med_status = '$med_status' WHERE id = {$id}";

        if($connect->query($sql) === TRUE) {
            echo "<p>Successfully Updated Entry</p>";
            echo "<a href='../update.php?id=" . $id . "'><button type='button'>Back</button></a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";
        } else {
            echo "Error updating Entry: " . $connect->error;
        }
        $connect->close();
    }
?>