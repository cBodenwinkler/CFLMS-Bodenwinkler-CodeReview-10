<?php
    require_once 'actions/db_connect.php';

    if($_GET['id']){
        $id = $_GET['id'];

        $sql = "SELECT * FROM media WHERE id={$id}";
        $result = $connect->query($sql);

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
    hr {
        margin:1% 15% 1% 15%;
    }
    </style>
</head>

<body>
    <!-- Header Navbar -------------------------------------------------------------------------------->
    <header>
        <ul class="nav justify-content-center bg-dark">
            <li class="nav-item py-3">
                <a class="nav-link" href="index.php">
                    <h4 style="color:white">Homepage</h4>
                </a>
            </li>
            <li class="nav-item py-3 px-3">
                <a class="nav-link active" href="index.php"><img id="logoImg" src="img/logo.png" alt=""></a>
            </li>
            <li class="nav-item py-3">
                <a class="nav-link" href="create.php">
                    <h4 style="color:white">Create-Entry</h4>
                </a>
            </li>
        </ul>
    </header>

    <!-- Heading for the Show Everything Site -->
    <h3 id="headingId">More Information</h3>
    <hr>
    <!-- Show Otherwise Hidden Content -->
    <div class="container my-5" id="updateID">
        <div action="actions/a_update.php" method="post">
            <!-- Bootstrap Card -->
            <div class="card text-center" style="background-color:white;border-radius:10px;">

                <!-- IMAGE ON TOP -->
                <div class="card-header">
                    <img src="<?php echo $data['med_image'] ?>" alt="">
                </div>

                <div class="card-body">
                    <!-- Autor -->
                    <h4 class="card-title">Author</h4>
                    <p class="card-text"><?php echo $data['author_first_name'] ?> <?php echo $data['author_last_name'] ?></p>
                    <hr>

                    <!-- Publicist -->
                    <h4 class="card-title">Publicist</h4>
                    <p class="card-text">Name: <?php echo $data['pub_name'] ?></p>
                    <p class="card-text">Address: <?php echo $data['pub_address'] ?></p>
                    <p class="card-text">Publication Date: <?php echo $data['pub_date'] ?></p>
                    <p class="card-text">Publication Size: <?php echo $data['pub_size'] ?></p>
                    <hr>

                    <!-- Media Data -->
                    <h4 class="card-title">About</h4>
                    <p class="card-text">Title: <?php echo $data['med_title'] ?></p>
                    <p class="card-text">Type: <?php echo $data['med_type'] ?></p>
                    <p class="card-text">ISBN: <?php echo $data['isbn'] ?></p>
                    <hr>

                    <!-- Description -->
                    <h4 class="card-title">Description</h4>
                    <p class="card-text" style="margin:0 20% 0 20%"><?php echo $data['short_desc'] ?></p>
                    <hr>

                    <!-- Status -->
                    <h4 class="card-title">Status</h4>
                    <p class="card-text"><?php echo ucwords($data['med_status']) ?></p>

                </div>

                <div class="card-footer text-muted">
                <td><a href="index.php"><button class="btn btn-secondary" type="button">Back</button></a></td>
                </div>
            </div>
            <td>
            </form>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>