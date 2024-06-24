<?php
session_start();

$username = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Appointment</title>

    <!--link cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!--link css custom -->
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

    <div class="container-fluid">
        <div class="sidebar">
            <h3>LOCATION</h3>
            <div class="filter-section">
                <ul>
                    <li><label><input type="radio" name="location" value="nearest"> Nearest</label></li>
                    <li><label><input type="radio" name="location" value="others"> Others</label></li>
                </ul>
            </div>
            <hr>
            <h3>SPECIALIZATION</h3>
            <div class="filter-section">
                <ul>
                    <li><label><input type="checkbox" name="specialization" value="ac"> AC</label></li>
                    <li><label><input type="checkbox" name="specialization" value="refrigeration"> Refrigeration</label>
                    </li>
                    <li><label><input type="checkbox" name="specialization" value="television"> Television</label></li>
                    <li><label><input type="checkbox" name="specialization" value="washing-machine"> Washing
                            Machine</label></li>
                    <li><label><input type="checkbox" name="specialization" value="others"> Others</label></li>
                </ul>
            </div>
        </div>
        <div class="contentt">
            <div class="search-box">
                <input class="form-control" type="text" placeholder="Search here...">
                <i class="fas fa-search"></i>
            </div>
            <div class="profile-card">
                <img src="img/prof.jpg" alt="Profile Image">
                <div class="info">
                    <h4>Gracia Abrams</h4>
                    <p>Spesialisasi</p>
                    <div class="details-ap">
                        <h2>Institut<br>Lokasi</h2>
                    </div>
                </div>
                <div class="info-rat">
                    <div class="price-range">overall rating</div>
                    <div class="rating">5.0</div>
                    <div class="price-range">Rp xxxxx - Rp xxxxx</div>
                    <a href="appointmentDetail.php" class="appointment-btn">MAKE APPOINTMENT</a>
                </div>
            </div>
            <div class="profile-card">
                <img src="img/1.jpg" alt="Profile Image">
                <div class="info">
                    <h4>Paul Klein</h4>
                    <p>Spesialisasi</p>
                    <div class="details-ap">
                        <h2>Institut<br>Lokasi</h2>
                    </div>
                </div>
                <div class="info-rat">
                    <div class="price-range">overall rating</div>
                    <div class="rating">5.0</div>
                    <div class="price-range">Rp xxxxx - Rp xxxxx</div>
                    <a href="appointmentDetail.php" class="appointment-btn">MAKE APPOINTMENT</a>
                </div>
            </div>
            <div class="profile-card">
                <img src="img/4.jpg" alt="Profile Image">
                <div class="info">
                    <h4>Taylor Swift</h4>
                    <p>Spesialisasi</p>
                    <div class="details-ap">
                        <h2>Institut<br>Lokasi</h2>
                    </div>
                </div>
                <div class="info-rat">
                    <div class="price-range">overall rating</div>
                    <div class="rating">5.0</div>
                    <div class="price-range">Rp xxxxx - Rp xxxxx</div>
                    <a href="appointmentDetail.php" class="appointment-btn">MAKE APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>

</html>