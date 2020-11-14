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
    <title>Edit - BigLibrary</title>

    <style>
        img {
            width:100px;
            height:auto;
        }
        #logoImg {
            width:30px;
        }
        .btn {
            border-radius:15px;
        }
        #updateID {
            border: solid lightgray 3px;
            padding: 30px;
            display:flex;
            justify-content:center;
            background-color:#fbf9f3;
            border-radius:15px;
            -webkit-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
            -moz-box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
            box-shadow: 0px 0px 20px 21px rgba(0,0,0,0.14);
        }
        #buttonBox {
            display:flex;
            justify-content: space-between;
        }
        #headingId {
            text-align:center;
            margin: 20px 0 20px 0;
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
    
    <!-- Heading for the Update Site -->
    <h3 id="headingId">Edit Entry</h3>
    <hr>
    <!-- Show given Content - Set it into right inputBoxes for editing -->
    <div class="container mt-5" id="updateID">
        <form action="actions/a_update.php" method="post">
            <table>
                <tr>
                    <th>Author First Name:</th>
                    <td> <input size="50" type="text" name="author_first_name" placeholder="Author First Name" value="<?php echo $data['author_first_name'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Author Last Name:</th>
                    <td> <input size="50" type="text" name="author_last_name" placeholder="Author Last Name" value="<?php echo $data['author_last_name'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Publisher Name:</th>
                    <td> <input size="50" type="text" name="pub_name" placeholder="Publisher Name" value="<?php echo $data['pub_name'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Publisher Address:</th>
                    <td> <input size="50" type="text" name="pub_address" placeholder="Publisher Address" value="<?php echo $data['pub_address'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Date of Publication:</th>
                    <td> <input size="50" type="text" name="pub_date" placeholder="Publication Date" value="<?php echo $data['pub_date'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Publication Size:</th>
                    <td> <input size="50" type="text" name="pub_size" placeholder="Size of Publication" value="<?php echo $data['pub_size'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Title of Media:</th>
                    <td> <input size="50" type="text" name="med_title" placeholder="Name of book, cd, dvd, game,..." value="<?php echo $data['med_title'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Image of Media:</th>
                    <td> <input size="50" type="text" name="med_image" placeholder="Image URL" value="<?php echo $data['med_image'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Media Type:</th>
                    <td> <input size="50" type="text" name="med_type" placeholder="book, cd, dvd, game,..." value="<?php echo $data['med_type'] ?>" /> </td>
                </tr>
                <tr>
                    <th>ISBN:</th>
                    <td> <input size="50" type="text" name="isbn" placeholder="ISBN of Media" value="<?php echo $data['isbn'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Short Description:</th>
                    <td> <input size="50" type="text" name="short_desc" placeholder="Give a short description..." value="<?php echo $data['short_desc'] ?>" /> </td>
                </tr>
                <tr>
                    <th>Availability Status:</th>
                    <td> <input size="50" type="text" name="med_status" placeholder="available or reserved" value="<?php echo $data['med_status'] ?>" /> </td>
                </tr>
            </table>
                <div class="mt-3" id="buttonBox">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <td><button  class="btn btn-primary" type="submit"> Save Changes </button></td>
                    <td><a href="index.php"><button class="btn btn-secondary" type="button">Back</button></a></td>
                </div>
                
        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>