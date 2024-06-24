<?php
session_start();

$username = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--link cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/homestyle.css">
    <!--link css custom -->
    <!--link css custom -->
    <link rel="stylesheet" href="style/homestyle.css">
    <link rel="stylesheet" href="style/AboutUs.css">

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

    <section class="howtoworks">
        <h1 class="headings">
            <span>Gimana sih cara kerjanya?</span>
        </h1>
        <div class="container">
            <div class="steps">
                <div class="step">
                    <h3>Step 1</h3>
                    <p>Anda akan melakukan konsultasi dengan penyedia jasa untuk memperoleh informasi dan
                        mengidentifikasi permasalahan yang ada. Konsultasi ini akan dilakukan secara online.</p>
                </div>
                <div class="step">
                    <h3>Step 2</h3>
                    <p>Setelah melakukan konsultasi, penyedia jasa akan mempersiapkan dokumen atau informasi yang
                        diperlukan untuk memulai proses layanan yang anda butuhkan.</p>
                </div>
                <div class="step">
                    <h3>Step 3</h3>
                    <p>Perwajilan jasa akan mulai memproses dokumen atau informasi yang telah disiapkan dan memberikan
                        hasil akhirnya kepada anda melalui sistem pengiriman online atau pertemuan tatap muka.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <h1 class="headings">
            <span>FAQ</span>
        </h1>
        <div class="container">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Layanan apa saja yang ada pada E-Court?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            ultricies ex nisl, dignissim interdum sapien consequat non. Morbi vel tellus eget eros
                            maximus scelerisque vitae a augue. Etiam posuere nibh eget lorem gravida, venenatis varius
                            urna aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Pellentesque aliquam vestibulum luctus. Vivamus a magna porta, cursus
                            ligula quis, rutrum est. Vestibulum non magna id est mattis dictum nec et leo. Nulla ipsum
                            risus, tincidunt quis tempor at, auctor eu dui. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Sed sit amet nunc neque. Ut risus
                            risus, aliquet in diam et, bibendum eleifend orci.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Saya telah membuat janji konsultasi. Dimana saya bisa melihatnya?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            ultricies ex nisl, dignissim interdum sapien consequat non. Morbi vel tellus eget eros
                            maximus scelerisque vitae a augue. Etiam posuere nibh eget lorem gravida, venenatis varius
                            urna aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Pellentesque aliquam vestibulum luctus. Vivamus a magna porta, cursus
                            ligula quis, rutrum est. Vestibulum non magna id est mattis dictum nec et leo. Nulla ipsum
                            risus, tincidunt quis tempor at, auctor eu dui. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Sed sit amet nunc neque. Ut risus
                            risus, aliquet in diam et, bibendum eleifend orci.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Bagaimana cara lihat detail janji temu saya?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                            ultricies ex nisl, dignissim interdum sapien consequat non. Morbi vel tellus eget eros
                            maximus scelerisque vitae a augue. Etiam posuere nibh eget lorem gravida, venenatis varius
                            urna aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                            inceptos himenaeos. Pellentesque aliquam vestibulum luctus. Vivamus a magna porta, cursus
                            ligula quis, rutrum est. Vestibulum non magna id est mattis dictum nec et leo. Nulla ipsum
                            risus, tincidunt quis tempor at, auctor eu dui. Class aptent taciti sociosqu ad litora
                            torquent per conubia nostra, per inceptos himenaeos. Sed sit amet nunc neque. Ut risus
                            risus, aliquet in diam et, bibendum eleifend orci.</div>
                    </div>
                </div>
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