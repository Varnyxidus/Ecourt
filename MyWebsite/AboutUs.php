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

    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">E-Court<span>.</span></a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Home">Consult</a>
            <a href="#Home"> Make Appointment</a>
        </nav>

        <div class="login">
            <a href="index.php" class="loginbtn">Login</a>
        </div>
    </header>

    <!--Tentang kami-->
    <section class="about-us" id="ab">
        <div class="rw">
            <div class="contentUs">
                <h3>ABOUT US</h3>
                <p>Kami adalah platform terpercaya yang berkomitmen untuk membantu Anda memperbaiki berbagai jenis
                    peralatan elektronik, seperti AC, TV, mesin cuci, dan perangkat lainnya. Dengan penyedia jasa yang
                    pengalaman bertahun-tahun di industri ini, kami percaya bahwa perbaikan peralatan elektronik
                    haruslah menjadi pengalaman yang mudah, handal, dan berkualitas tinggi bagi setiap pelanggan.</p>
                <a href="AboutUs.php" class="btn">Our Vision</a>
                <a href="AboutUs.php" class="btn">Contact Us</a>
            </div>
            <div class="pic-aboutUs">
                <img src="img/haa.jpg">
            </div>
        </div>
    </section>

    <!--Misi kami-->
    <section class="misi-kami">
        <h1>OUR VISION</h1>
        <p>E-court selalu mengutamakan kualitas dalam setiap layanan yang kami berikan. Kepuasan Pelanggan merupakan
            Prioritas Utama kami. Kami terus berinovasi untuk meningkatkan layanan kami dan juga terus mengikuti
            perkembangan terbaru dalam teknologi dan teknik perbaikan yang terbaik untuk memastikan bahwa layanan
            keandalan dan efektivitas layanan kami.</p>

        <div class="row">
            <div class="misi-colo">
                <img src="img/siti.jpg">
                <div class="layer">
                    <h3>MENANGANI</h3>
                </div>
            </div>
            <div class="misi-colo">
                <img src="img/arul.jpg">
                <div class="layer">
                    <h3>MEMPERBAIKI</h3>
                </div>
            </div>
            <div class="misi-colo">
                <img src="img/sumanto.jpg">
                <div class="layer">
                    <h3>MENGATASI</h3>
                </div>
            </div>
        </div>
    </section>

    <!--contact us-->
    <section class="contact-us">
        <div class="hubungi">
            <h1>CONTACT US</h1>
        </div>
    </section>

    <!---Contact kedua-->
    <section class="contact-kedua">



    </section>


    <!---Contact awal-->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7932.955854866416!2d106.78518359999998!3d-6.200505499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1716622323668!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-house-chimney-user"></i>
                    <span>
                        <h5>Jakarta, Indonesia</h5>
                        <p>Jl. apalah gatau, Kecamatan gatau, Jakarta Barat, Indonesia</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <i class="fa-solid fa-phone-volume"></i>
                <span>
                    <h5>+62-122-333-44</h5>
                    <p>Monday to Friday, 9AM to 7PM</p>
                </span>
            </div>
            <div class="contact-col">
                <i class="fa-solid fa-envelope-open"></i>
                <span>
                    <h5>Cigarettes.AfterS@gmail.com</h5>
                    <p>Email us if you have any questions.</p>
                </span>
            </div>
        </div>

        <div class="contact-col">

            <form action="">
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email Address" required>
                <input type="text" placeholder="Subject" required>
                <textarea rows="8" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>

        </div>
    </section>

</body>

</html>