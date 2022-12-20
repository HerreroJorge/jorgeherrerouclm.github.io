<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorge Herrero</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet"  media="(max-width: 750px)" href="css/style_mov.css" >
    <link rel="stylesheet"  media="(min-width: 751px)" href="css/style_desk.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="">
    <meta name="author" content="Jorge Herrero Úbeda">


</head>

<body>

    <header id="header">
        <a class="titulo" href="">Jorge Herrero Úbeda</a>
        <div class="div-menu"></div>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu"><i class="fas fa-bars"></i></label>
            <nav class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#separadorPortfolio">Portfolio</a></li>
                    <li><a href="#separadorContact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="home" id="home"></section>
        <section class="about" id="about">
            <div class="primeraInfo">
                <div class="foto">
                    <img src="img/3.jpg" width="100%" alt="">
                </div>
                <div class="infoCV">
                    <h1 id="h1Nombre" class="h1Nombre">Jorge Herrero Úbeda</h1>
                    <div class="rowNombre" id="rowNombre"><h2>Computer Engineer</h2><h3>Information Technology</h3></div>
                    <p class="pNombre" id="pNombre">I was born and finished my mandatory studies in Madrid,<br> 
                    then I moved to Ciudad Real to start the Computer <br> at Castilla La Mancha University (UCLM).</p>
                    <ul class="ulNombre" id="ulNombre">
                        <li>
                            <p>B2 English level</p>
                        </li>
                        <li>
                            <p>B driving license</p>
                        </li>
                    </ul>
                    <button class="buttonCV" id="buttonCV">Download CV</button>
                </div>
            </div>
            <div class="skills">
                <h1>My Skills</h1>
                <ul>
                    <li>
                        <h3>Software development (High level lenguages) <i class="fa-brands fa-java"></i> <i class="fa-brands fa-python"></i>
                        <i class="fa-solid fa-c"></i><i class="fa-brands fa-r-project"></i>
                        </h3>
                        <div class="barraProgreso">
                            <div class="barraProgreso1"></div>
                        </div>
                    </li>
                    <li>
                        <h3>Web development (Full Stack) <i class="fa-brands fa-square-js"></i> <i class="fa-brands fa-php"></i>
                            <i class="fa-brands fa-node"></i> <i class="fa-brands fa-html5"></i> <i class="fa-brands fa-css3-alt"></i>
                            <i class="fa-brands fa-angular"></i>
                        </h3>
                        <div class="barraProgreso">
                            <div class="barraProgreso2">
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>Mobile application development (web and native lenguajes) <i class="fa-brands fa-react"></i><i class="fa-brands fa-node-js"></i>
                        <i class="fa-brands fa-npm"></i></h3>
                        <div class="barraProgreso">
                            <div class="barraProgreso3">
                            </div>
                        </div>
                    </li>
                    <li>
                        <h3>Other technologies and Interface Design <i class="fa-brands fa-square-github"></i>
                            <i class="fa-brands fa-square-git"></i>
                        </h3>
                        <div class="barraProgreso">
                            <div class="barraProgreso4">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="separadorPortfolio"></div>
        </section>

        <section class="portfolio">
            <h1>Portfolio</h1>
            <div class="container-slider">
                <div class="slider" id="slider">
                
                    <div class="slider__section">
                        <div class="slider-izquierda">
                            <h1>Jamonería Gutierrez</h1>
                            <p>A web page for Jamonería Gutierrez, a business in Alcorcon for the sale of Iberian products.
                                A professional dynamic website not for the purpose of online sales but for the promotion 
                                of the products. Still in development and released in the coming months.
                            </p>
                        </div>
                        <div class="slider-derecha">
                            <img src="img/portfolio/gutierrez/1.png" alt="">
                            <img src="img/portfolio/gutierrez/2.png" alt="">
                        </div>
                    </div>
                    <div class="slider__section">
                        <div class="slider-izquierda">
                            <h1>2s4w clothing</h1>
                            <p>This web page is a clothing store of an urban brand in my neighborhood that has not yet gone 
                                on the market. This project is almost finished as a dynamic web with payment platforms 
                                and all the tools related to ecommerce included and programmed by myself. Released in february 2023.</p>
                        </div>
                        <div class="slider-derecha">
                            <img src="img/portfolio/2s4w/1.png" alt="">
                            <img src="img/portfolio/2s4w/2.png" alt="">
                        </div>
                    </div>
                    <div class="slider__section">
                        <div class="slider-izquierda">
                            <h1>Analify</h1>
                            <p>A project based in a web page using APIs of different platorms like twitter and spotify,
                                The website is focused in comparing artist compare artists with the help of data and 
                                statistics provided by social networks dedicated to the musical field.
                            </p>
                        </div>
                        <div class="slider-derecha">
                            <img src="img/portfolio/analify/1.png" alt="">
                            <img src="img/portfolio/analify/2.png" alt="">
                        </div>
                    </div>    
                <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
                <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
            </div>
            <div id="separadorContact"></div>
        </section>

        <section class="contact" id="contact">
            <div class="infoContactForm">
                <div class="infoContact">
                    <h2>Contact Information</h2>
                    <ul class="ulInformacion">
                        <li>
                            <i class="fa-solid fa-envelope"></i><p>jorgeherrero32@gmail.com</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone"></i><p>665181853</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i><p>Alcorcón, Madrid</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i><p>Ciudad Real</p>
                        </li>
                    </ul>
                    <ul class="ulRedes">
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>

                </div>
                <div class="div-formContacto" background="IMAGENES/niño_blancoYnegro.jpg">
                    <form action="PHPMailer/enviarForm.php" method="post">
                        <h4>Quick Message</h4>
                        <input type="text" name="nombre" placeholder="Name*" required>
                        <input type="text" name="correo" placeholder="Mail" required>
                        <input type="text" name="telefono" placeholder="Phone Number">
                        <textarea name="mensaje" placeholder="Please write here your message*" required></textarea>
                        <input type="submit" value="SEND" id="botonForm">
                    </form>    
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>
            Copyright © <?php echo(date("Y")) ?> Jorge Herrero Úbeda
        </p>
    </footer>

    <script src="js/header.js"></script>
    <script src="js/slider.js"></script>


</body>
</html>