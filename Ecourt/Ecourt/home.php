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
</head>

<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">E-Court<span>.</span></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="index.php">Consult</a>
            <a href="index.php"> Make Appointment</a>
        </nav>

        <div class="login">
            <a href="index.php" class="loginbtn">Login</a>
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
                <a href="AboutUs.php" class="btn">About Us</a>
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
                <a href="HowItWorks.php" class="btn">How It Works</a>
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
</body>

</html>