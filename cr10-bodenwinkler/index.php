<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home - BigLibrary</title>

    <style>
        img {
            width:100px;
            height:auto;
        }
    </style>
</head>

<body>
    <!-- Header Navbar -------------------------------------------------------------------------------->
    <header>
        <!-- As a heading -->
        <nav class="navbar bg-dark" style="color:white">
            <span class="navbar-brand mb-0 h1">BigLibrary</span>
        </nav>
    </header>

    <!-- Show All Content, to-CREATE to-EDIT, to-DELETE, to-Show-SPECIFIC ----------------------------->
    <div class="container">
        <!-- Forward Link to create.php to Create an Entry -->
        <a href="create.php"> <button type="button"> Create An Entry </button> </a>

        <!-- Incomplete List of Data to showcase: > Other Values will show on click of 'showmore button'
        Image, Title of Publication, mediaType, PublisherName  -->
        <table>
            <thead>
                <tr>
                    <th> Image </th>
                    <th> Title </th>
                    <th> Publisher </th>
                    <th> Type </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM media WHERE active = 0";
                    $result = $connect->query($sql);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo    "<tr>
                                        <td><img src=" .$row['med_image']. "> </td>
                                        <td>" .$row['med_title']. "</td>
                                        <td>" .$row['med_type']. "</td>
                                        <td>" .$row['pub_name']. "</td>
                                        <td>
                                            <a href='update.php?id=" .$row['id']."'><button class='btn btn-secondary' type='button'>Edit</button></a>
                                            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger' type='button'>Delete</button></a>
                                            <a href='show.php?id=" .$row['id']."'><button class='btn btn-primary' type='button'>Show All Data</button></a>
                                        </td>
                                    </tr>";
                        }
                    } else {
                        echo "<tr><td> NO DATA AVAILABLE</td><tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>