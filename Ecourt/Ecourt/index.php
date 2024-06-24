<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

        <?php
            include ("php/config.php");

            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
                $stmt = $con->prepare("SELECT * FROM Users WHERE Username = ? AND Password = ?");
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                if (is_array($row) && !empty($row)) {
                $_SESSION['email'] = $row['Email'];
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['name'] = $row['Username'];
        // Don't store the password in the session
        // $_SESSION['password'] = $row['Password'];

                header('Location: loggedhome.php');
                exit; // Stop executing the script
                } else {
                    echo "<div class='Message'><p>Wrong Username or Password</p></div> <br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button>";
                }
            } else {
                ?>

                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have an account? <a href="register.php">Sign Up</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>