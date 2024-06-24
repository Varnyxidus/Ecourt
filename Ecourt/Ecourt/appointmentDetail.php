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
    <title>Consult</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style/homestyle.css">
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

    <section class="appointments">
        <h1 class="headings">
        </h1>
        <div class="profile">
            <img src="img/prof.jpg" alt="Profile Image" width="250" height="250">
            <div class="profile-info">
                <h2>Gracia Abrams</h2>
                <p>Spesialisasi</p>
                <div class="details">
                    <h2>Institut<br>Lokasi</h2>
                    <div class="rating">★ 5.0</div>
                </div>
            </div>
        </div>
        <div class="contents">
            <div class="description">
                <h2>DESCRIPTION</h2>
                <p>Gracie Abrams is a dedicated and highly skilled electronics service provider, offering her expertise 
                    through [Platform Name], a leading platform connecting customers with trusted professionals. With a 
                    passion for technology and a commitment to customer satisfaction, Amanda provides top-notch repair 
                    and maintenance services for a wide range of electronic devices.</p>
                <h2>AVAILABLE SERVICES</h2>
                <p>1) Smartphones and Tablets: Screen replacements, battery replacements, software troubleshooting, and hardware repairs for all major brands.</p>
                <p>2) Computers and Laptops: Diagnostics, hardware upgrades, virus removal, data recovery, and software installation.</p>
            </div>
            <div class="appointment">
                <div class="calendar">
                    <div id="calendar"></div>
                </div>
                <div class="times">
                    <div class="title">
                        <p>Choose available times</p>
                    </div>
                    <div class="button">
                        <button>09:00</button>
                        <button>12:00</button>
                        <button>15:00</button>
                    </div>
                </div>
                <div class="device-type">
                    <form action="#">
                        <select name="" id="">
                            <option class="form-control">Device Type</option>
                        </select>
                        <textarea class="detailss" placeholder="Enter details here..."></textarea>
                    </form>
                </div>
                <button class="make-appointment">MAKE APPOINTMENT</button>
            </div>
        </div>
    </section>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
            });
            calendar.render();
        });
    </script>
</body>

</html>