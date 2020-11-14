<?php
    require_once 'actions/db_connect.php';

    if($_GET['id']){
        $id = $_GET['id'];

        $sql = "SELECT * FROM media WHERE pub_name like '$id';";
        $result = $connect->query($sql);

        // while ($row = $result->fetch_assoc()) {
        //     echo "<h1>".$row['pub_name']."</h1><br>";
        //     break;
        // };

        $data = $result->fetch_assoc();

        $connect->close();
    }
?>

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
    <title>Update - BigLibrary</title>

    <style>
    img {
        max-width: 400px;
        height: auto;
        max-height: 300px;
    }

    #logoImg {
        width: 30px;
    }

    .btn {
        border-radius: 15px;
    }

    #updateID {
        background-color:#fbf9f3;
        border-radius:30px;
        padding: 30px;
        display: flex;
        justify-content: center;
        -webkit-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
        -moz-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
        box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
    }

    #buttonBox {
        display: flex;
        justify-content: space-between;
    }

    #headingId {
        text-align: center;
        margin: 20px 0 20px 0;
    }
    #backBtn {
        width:350px;
        font-size:1.1rem;
        /* border:solid lightgray 1px; */
        -webkit-box-shadow: 0px 0px 2px 3px rgba(0,0,0,0.14);
        -moz-box-shadow: 0px 0px 2px 3px rgba(0,0,0,0.14);
        box-shadow: 0px 0px 2px 3px rgba(0,0,0,0.14);
    }
    li {
        font-size:1.5rem;
    }
    div {
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
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



    <div class="container my-5">
        <h5>
            <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<h1>Media published by: ".$row['pub_name']."</h1><br>";
                    break;
                };
            ?>
        </h5>
        <hr>
        <ol class="mt-5 ml-3">
            <?php
            foreach($result as $row) {
                echo "<li class='my-3'>".$row['med_title']."</li><hr>";
                
            }
            ?>
        </ol>
        <a href="index.php"><button class="btn btn-secondary mt-5" type="button" id="backBtn">Back</button></a>
    </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>