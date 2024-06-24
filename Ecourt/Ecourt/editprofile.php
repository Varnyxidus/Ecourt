<?php
session_start();

$username = $_SESSION['name'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!--link cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!--link css custom -->
    <link rel="stylesheet" href="style/homestyle.css">
    <link rel="stylesheet" href="style/AboutUs.css">
</head>

<body>

    <section class="Edit-prof">
        <div class="profiles">
            <h1>EDIT PROFILE</h1>
            <form action="pros">
                <h3>Name</h3>
                <input type="Name" placeholder="<?php echo "$username" ?>">
                <h3>Email</h3>
                <input type="Email" placeholder="<?php echo "$email" ?>">
                <h3>No. Telpon</h3>
                <input type="Telpon" placeholder="081xxxxxx">
                <h3>Address</h3>
                <input type="Alamat" placeholder="Street no. 4, xyz">
                <h3></h3>
                <a href="loggedhome.php" class="btn">Save</a>
            </form>
        </div>
    </section>


</body>

</html>