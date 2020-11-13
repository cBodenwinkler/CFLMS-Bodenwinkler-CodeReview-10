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
        width: 150px;
        height: auto;
        max-height:150px;
        border-radius:10px;
    }
    #logoImg {
        width: 30px;
    }
    .btn {
        border-radius:15px;
    }
    #tableID {
        text-align: center;
        margin-left:auto;
        margin-right:auto;
    }
    th{
        font-size:1.2rem;
        background-color: #343A40;
        color:white;
    }
    table, th, td {
        border: solid lightgray 1px;
        padding: 5px;
        min-width:80px;
    }
    td{
        height:250px;
        background-color:#fbf9f3;
    }
    #createButton {
        width:350px;
        height:50px;
        border-radius:50px;
    }
    #createBtnDiv {
        text-align:center;
        margin:20px 0 20px 0;
    }
    td {
        padding: 10px;
    }
    table {
        -webkit-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
        -moz-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
        box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
    }
    .editBtn {
        width:120px;
    }
    </style>
</head>

<body>
    <!-- Header Navbar -------------------------------------------------------------------------------->
    <header>
        <ul class="nav justify-content-center bg-dark">
            <li class="nav-item py-3">
                <a class="nav-link" href="index.php"><h4 style="color:white">Homepage</h4></a>
            </li>
            <li class="nav-item py-3 px-3">
                <a class="nav-link active" href="index.php"><img id="logoImg" src="img/logo.png" alt=""></a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link" href="create.php"><h4 style="color:white">Create-Entry</h4></a>
            </li>
        </ul>
    </header>

    <!-- Forward Link to create.php to Create an Entry -->
    <div id="createBtnDiv">
        <a href="create.php"> <button type="button" class="btn btn-secondary" id="createButton"><h4 style="font-weight:400"> Create An Entry</h4> </button> </a>
    </div>  
    <hr>


    <!-- Show All Content, to-CREATE to-EDIT, to-DELETE, to-Show-SPECIFIC ----------------------------->
    <div class="container my-5" id="tableID">
        <!-- Incomplete List of Data to showcase: > Other Values will show on click of 'showmore button'
        Image, Title of Publication, mediaType, PublisherName  -->
        <table class="mt-3">
            <thead>
                <tr>
                    <th> Image </th>
                    <th> Title </th>
                    <th> Author </th>
                    <th> Publisher </th>
                    <th> Type </th>
                    <th> Edit, Del, More</th>
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
                                        <td>" .$row['author_first_name']. " ".$row['author_last_name']. "</td>
                                        <td>" .$row['pub_name']. "</td>
                                        <td>" .$row['med_type']. "</td>
                                        <td>
                                            <a href='update.php?id=" .$row['id']."'><button class='btn btn-secondary my-1 editBtn' type='button'>Edit</button></a><br>
                                            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger my-1 editBtn' type='button'>Delete</button></a><br>
                                            <a href='show.php?id=" .$row['id']."'><button class='btn btn-primary my-1 editBtn' type='button'>Show Media</button></a><br>
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