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
            <a href="#Home">Consult</a>
            <a href="appointment1.php"> Make Appointment</a>
        </nav>

        <img src="img/profile.png" class="profilepic" onclick="toggleMenu()">

        <div class="submenu-wrap" id="subMenu">
            <div class="submenu">
                <div class="userinfo">
                    <img src="img/profile.png">
                    <h3>
                        lindaforu
                    </h3>
                </div>
                <hr>
                <a href="" class="sub-menu-link">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="home.php" class="sub-menu-link">
                    <p>Log Out</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </header>
    <section class="choose" id="choose">
        <h1 class="heading1">
            <span>Buat Janji Temu</span>
            <p>Pilih layanan yang Anda butuhkan</p>
        </h1>
        <div class="box-conta">
        <div class="box">  
                <div class="user">
                    <span>Portable</span>
                </div>
                <p>Layanan ini mencakup perangkat elektronik seperti, smartphone, tablet, laptop, radio, speaker, dan lainnya.
                </p> 
                <a href="loggedhome.php" class="btn">Choose</a>
            </div>
            <div class="box">  
                <div class="user">
                    <span>Non-Portable</span>
                </div>
                <p>Layanan ini mencakup perangkat elektronik seperti, AC, mesin cuci, TV, kulkas, dan lainnya.
                </p>
                <a href="loggedhome.php" class="btn">Choose</a>
            </div>
        </div>
    </section>

    <script>
        let subMenu = document.getElementById('subMenu');

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>