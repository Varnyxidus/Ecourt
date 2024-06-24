<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php
            include ("php/config.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $confirmpassword = $_POST['confirmpassword'];

                //verify username
                $verifyUsername = mysqli_query($con, "SELECT Username FROM Users WHERE Username='$username'");
                $verifyEmail = mysqli_query($con, "SELECT Email FROM Users WHERE Email='$email'");
                if (mysqli_num_rows($verifyUsername) != 0) {
                    echo "<div class='Message'
                        <p>Username is not available</p>
                    </div> <br>";
                    echo "<a href='register.php'><button class='btn'>Go Back</button>";
                }
                //verify email
                else if (mysqli_num_rows($verifyEmail) != 0) {
                    echo "<div class='Message'
                        <p>This email has already been used, are you sure you don't have an account yet?</p>
                    </div> <br>";
                    echo "<a href='register.php'><button class='btn'>Go Back</button>";
                }

                //verify password
                else if ($password != $confirmpassword) {
                    echo "<div class='Message'
                        <p>Password didn't match</p>
                    </div> <br>";
                    echo "<a href='register.php'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($con, "INSERT INTO Users(Username, Email, Password) VALUES('$username', '$email', '$password')") or die("Error Occured");
                    echo "<div class='Message'
                        <p>Registration Succesful!</p>
                    </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Login Now</button>";
                }

            } else {
                ?>

                <header>Register</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field input">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Already have an account? <a href="index.php">Login</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>