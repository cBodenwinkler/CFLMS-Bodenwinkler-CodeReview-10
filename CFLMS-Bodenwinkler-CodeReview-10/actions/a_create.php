<?php
    require_once 'db_connect.php';

    if($_POST) {
        //When valid Input -> Saving InputVal in VARS:
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

        // query to insert inputdata into database:
        $sql = "INSERT INTO media (author_first_name, author_last_name, pub_name, pub_address, pub_date, pub_size, med_title, med_image, med_type, isbn, short_desc, med_status) VALUES ('$author_first_name', '$author_last_name', '$pub_name', '$pub_address', '$pub_date', '$pub_size', '$med_title', '$med_image', '$med_type', '$isbn', '$short_desc', '$med_status')";

        // Check if Successfully Created: If yes output of buttons to return to create.php... 
        //... or to index.php
        if($connect->query($sql) === TRUE) {
            echo "<p>New Media Entry Created</p>";
            echo "<a href='../create.php'><button type='button'>Back</button></a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";
        } else {
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }

    $connect->close();
    }
?>