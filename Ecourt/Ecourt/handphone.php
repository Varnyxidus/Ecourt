<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handphone</title>
    <link rel="stylesheet" href="style/consult.css">
    <link rel="stylesheet" href="style/homestyle.css">
</head>
<body>
    <header>
    <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">E-Court<span>.</span></a>

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
                <a href="EditProfile.php" class="sub-menu-link">
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
    <div class="sidebar">
        <h2>Specialization</h2>
        <ul>
            <li><a href="consultation.php">All</a></li>
            <li><a href="handphone.php">Handphone</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Radio</a></li>
            <li><a href="#">Speaker/Microphone</a></li>
            <li><a href="#">AC</a></li>
            <li><a href="#">Refrigerator</a></li>
            <li><a href="#">Television</a></li>
            <li><a href="#">Washing Machine</a></li>
            <li><a href="#">Others</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="search-container">
            <form action="/search" method="GET">
                <ul class="search">
                    <li>
                         <input type="text" id="search" name="search" placeholder="Search...">
                    </li>
                    <li>
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
                    </li>
                </ul>
               
            </form>
        </div>

        <div class="card">
            <img src="img/2.jpg">
            <div class="card-content">
                <ul class="content-atas">
                    <li>
                        <h3>Wen Hua Ting</h3>
                    </li>
                    <li>
                        <svg class="bookmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 48C0 21.5 21.5 0 48 0l0 48V441.4l130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4V48H48V0H336c26.5 0 48 21.5 48 48V488c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488V48z"/></svg>
                    </li>
                </ul>
                <p>Servis HP, Laptop</p>
                <ul class="ratingyear">
                    <li cl>
                        <p>6 years</p>
                    </li>
                    <li class="rate">
                        <p><svg class="star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                            4,7/5</p>
                        </li>
                    </ul>
                    <h4>Rp.200,000</h4>
                    <a href="chatroom.php" class="btn">Consult Now</a>
                </div>
            </div>
    </div>
</body>
</html>