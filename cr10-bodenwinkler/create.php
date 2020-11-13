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
    <title>Create Entry - BigLibrary</title>
</head>

<body>
    <!-- Header Navbar -------------------------------------------------------------------------------->
    <header>
        <!-- As a heading -->
        <nav class="navbar bg-dark" style="color:white">
            <span class="navbar-brand mb-0 h1"> BigLibrary - Create Entry</span>
        </nav>
    </header>

    <!-- Form for User to insert Data to send it to Server ------------------------------------------->
    <div class="container mt-3">
        <form action="actions/a_create.php" method="post">
            <table>
                <!-- Input Of Media Data -->
                <tr>
                    <th> Author First Name: </th>
                    <td><input size="50" type="text" name="author_first_name" placeholder="First Name of Author..." /></td>
                </tr>
                <tr>
                    <th> Author Last Name: </th>
                    <td><input size="50" type="text" name="author_last_name" placeholder="Last Name of Author..." /></td>
                </tr>
                <tr>
                    <th> Publisher Name: </th>
                    <td><input size="50" type="text" name="pub_name" placeholder="Name of Publisher..." /></td>
                </tr>
                <tr>
                    <th> Address of Publisher: </th>
                    <td><input size="50" size="50" type="text" name="pub_address" placeholder="Publisher Address..." /></td>
                </tr>
                <tr>
                    <th> Date of Publication: </th>
                    <td><input size="50" type="text" name="pub_date" placeholder="Day of Publication..." /></td>
                </tr>
                <tr>
                    <th> Publication Size: </th>
                    <td><input size="50" type="text" name="pub_size" placeholder="Publisher Size..." /></td>
                </tr>
                <tr>
                    <th> Title of Media: </th>
                    <td><input size="50" type="text" name="med_title" placeholder="NAME of Book, CD, Game,..." /></td>
                </tr>
                <tr>
                    <th> Image of Media: </th>
                    <td><input size="50" type="text" name="med_image" placeholder="URL Link..." /></td>
                </tr>
                <tr>
                    <th> Media Type: </th>
                    <td><input size="50" type="text" name="med_type" placeholder="game, cd, dvd, book,..." /></td>
                </tr>
                <tr>
                    <th> ISBN: </th>
                    <td><input size="50" type="text" name="isbn" placeholder="ISBN of Media..." /></td>
                </tr>
                <tr>
                    <th> Short Description: </th>
                    <td><input size="50" type="text" name="short_desc" placeholder="Content of Media..." /></td>
                </tr>
                <tr>
                    <th> Availability Status: </th>
                    <td><input size="50" type="text" name="med_status" placeholder="available or reserved" /></td>
                </tr>

            </table>
            <div class="mt-3">
                <!-- Button to Submit Input Data to a_create.php -->
                <button type="submit" class="btn btn-primary"> Send Media Data </button>

                <!-- Button to Return to index.php -->
                <a href="index.php"><button type="button" class="btn btn-secondary"> HOME </button> </a>
            </div>
        </form>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>