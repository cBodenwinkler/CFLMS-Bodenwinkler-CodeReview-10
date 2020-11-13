<?php
    require_once 'actions/db_connect.php';

    if($_GET['id']){
        $id = $_GET['id'];

        $sql = "SELECT * FROM media WHERE id = {$id}";
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
    <title>Entry Deleted - BigLibrary</title>

    <style>
        #logoImg {
            width:30px;
        }
        .btn {
            border-radius:15px;
        }
    </style>
</head>

<body>
    <!-- Header Navbar ------------------------------------------------------------------------------ -->
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

    <!-- Show Message if entry should be deleted -->
    <div class="container mt-5">
        <h3>Do you really want to delete the entry?</h3>
        <hr>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <button type="submit" class="btn btn-danger"> Yes, delete!</button>
            <a href="index.php"> <button type="button" class="btn btn-secondary"> No, back to Home </button> </a>
        </form>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>