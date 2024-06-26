<?php
require 'php/sessioninfo.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/homestyle.css">
    <!--link css custom -->
</head>

<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo" style="text-decoration:none;">E-Court<span>.</span></a>

        <nav class="navbar">
            <a href="loggedhome.php">Home</a>
            <a href="consultation.php">Consult</a>
            <a href="appointment1.php"> Make Appointment</a>
        </nav>
    
        <img src="img/profile.png" class="profilepic" onclick="toggleMenu()">

        <div class="submenu-wrap" id="subMenu">
            <div class="submenu">
                <div class="userinfo">
                    <img src="img/profile.png">
                    <h3>
                        <?php
                        echo "$username";
                        ?>
                    </h3>
                </div>
                <hr>
                <a href="editprofile.php" class="sub-menu-link">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="home.php" class="sub-menu-link">
                    <?php
                    //session_destroy();
                    ?>
                    <p>Log Out</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="content">
            <h3>Solusi Terpercaya Untuk Perbaikan Elektronik Anda</h3>
        </div>
    </section>
    <section class="about">
        <h2 class="heading">
            <span>About Us</span>
        </h2>
        <div class="row">
            <div class="pic-container">
                <img src="img/repairmanabtus.jpeg">
            </div>
            <div class="content">
                <h3>Get To Know Us</h3>
                <p>Dedicated to solving your electronics issues with expertise and care.
                    Our team of seasoned professionals is here to provide top-notch consultation services,
                    ensuring your devices run smoothly. learn more about our mission, values,
                    and the experts behind our services!</p>
                <a href="loggedaboutus.php" class="btn">About Us</a>
            </div>
        </div>
    </section>
    <section class="about">
        <h2 class="heading">
            <span>How It Works</span>
        </h2>
        <div class="row">
            <div class="content">
                <h3>First Time?</h3>
                <p>Do not worry! Our step-by-step guide will walk you through everything you need to know to get
                    started with our online consultation services. From booking a session to resolving your
                    electronics issues, we've got you covered.</p>
                <a href="loggedhowitworks.php" class="btn">How It Works</a>
            </div>
            <div class="pic-container">
                <img src="img/confused.jpeg">
            </div>
        </div>
    </section>
    <section class="review" id="review">
        <h1 class="heading">
            <span>Customer's Review</span>
        </h1>
        <div class="box-conta">
            <div class="box">
                <div class="user">
                    <img src="img/cewegirl.jpeg">
                    <div class="user-info">
                        <h3>Aysha Viola</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Sangat membantu, Harga wajar, teknisinya ramah dan cepat selesai!
                </p>
                <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="user">
                    <img src="img/babyboy.jpeg">
                    <div class="user-info">
                        <h3>Vincent Immanuel</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Teknisi datang tepat waktu dan pengerjaan sesuai dengan permintaan.
                </p>
                <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="user">
                    <img src="img/maimunah.jpeg">
                    <div class="user-info">
                        <h3>Siti Zahra</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Sangat dapat diandalkan dan hasilnya memuaskan.
                </p>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>