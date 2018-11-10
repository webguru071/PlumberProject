<?php include 'header.php' ?>   
<style>
.main-slider {
    height: 100%;
    width: 100%;
    position: relative;
}

#myVideo {
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
}

#home-overlay {
    background-color: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
}
#home-content {
    width: 100%;
    height: 100%;
    z-index: 1;
    top: 30%;
    position: absolute;
    display: table;
}
#home-content-inner {
    display: table-cell;
    vertical-align: middle;
}
#home-heading h1 {
    color: #fff;
    font-size: 65px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
    display: inline-block;
}

#home-heading h1:nth-child(3n) {
        font-size: 48px;
}

#home-heading h1 span {
    color: #f4c613;
    font-weight: 700;
}

#home-text p {
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    margin: 8px 0 30px 0;
}


@media (max-width: 992px){
    #home-heading h1 {
        font-size:28px;
    }
    #home-heading h1:nth-child(3n) {
        font-size: 16px;
}
    #home-text p {
font-size: 18px;
    }
}
    </style>
    <!--Main Slider-->
    <section class="main-slider">

        <!-- The video -->
        <video autoplay muted loop id="myVideo">
          <source src="https://ak3.picdn.net/shutterstock/videos/4011223/preview/stock-footage-apartment-plumbing-system-and-professional-jobs-plumber-and-engineer-talking-and-looking-at.webm" type="video/mp4">
        </video>
        <div id="home-overlay"></div>
        <div id="home-content">

            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <h1 id="home-heading-1" class="animated fadeInDown">PLOMBERIE BONNE-EAU</h1><br>
                    <h1 id="home-heading-2" class="animated fadeInLeft">service d'urgenge<span>&nbsp;24/7</span></h1>
                </div>

                <div id="home-text" class="animated zoomIn">
                    <p>résidentiel commercial rénnovation service</p>
                </div>

                <div id="home-btn" class="animated zoomIn">
                    <a class="theme-btn btn-style-one" href="#about" title="Start Now" role="button">Start Now</a>
                </div>

            </div>

        </div>
    </section>
<!--End Main Slider-->
<!--Call To Action-->
<section class="call-to-action-section" style="background-image:url(images/background/1.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text">service d'urgence 24/7 </div>
            </div>
            <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                <a href="contact.php" class="theme-btn btn-style-two">Contact us Today</a>
            </div>
        </div>
    </div>
</section>
<!--End Call To Action-->

<!--Services Section-->
<section class="services-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-s.jpg" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="upper-box">
                            <div class="icon-box">
                                <span class="icon flaticon-tool"></span>
                            </div>
                            <h3><a href="plumbing-camera-inspection.php">Plumbing Camera Inspection</a></h3>
                        </div>
                        <div class="text">
                            L’inspection par caméra nous permet de découvrir certains problèmes et anomalies qui peuvent provoquer un refoulement d’égout, un ralentissement d’évacuation d’eau ou même la perforation d’une conduite. Nous localisons les tuyaux d’égout souterrains à l’aide d’une caméra fonctionnant par radio détection. Ce procédé nous permet de fournir des renseignements, tels la profondeur et la longueur d’une conduite, et nous permet également de suivre la trajectoire d’une conduite. L’inspection par caméra est très utile! Cet appareil peut aussi repérer toute conduite ou tuyau métallique. <br><br> Il est parfois plus sage d’effectuer l’inspection par caméra pour savoir ce qui se cache dans vos drains. Que ce soit dans un cas de vente ou d’achat d’une résidence ou dans un cas potentiel de vice caché, l’inspection par caméra est la seule et unique façon de vérifier adéquatement l’état d’un système de drainage.
                        </div>
                    </div>
                </div>
            </div>

            <!--Services Block-->
            <div class="services-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/resource/service-ss.jpg" alt="" />
                    </div>
                    <div class="lower-content">
                        <div class="upper-box">
                            <div class="icon-box">
                                <span class="icon flaticon-water"></span>
                            </div>
                            <h3><a href="draining-plumbing.php">Drain cleaning</a></h3>
                        </div>
                        <div class="text">Si votre baignoire ou votre évier se vide plus lentement que d'habitude ou ne s'écoule pas du tout, votre drain est bouché ou endommagé. Plomberie Bonne-Eau est disposée à déboucher votre drain. Nous sommes disponibles pour le nettoyage des drains de cuisine, des salles de bains et du sous-sol et même votre drain français.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Services  Section-->

<!--Project Section-->
<section class="project-section fullwidth-galley">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title light">
            <h2>Our Projects</h2>
        </div>
    </div>

    <!--Sortable Gallery-->
    <div class="mixitup-gallery">
        <div class="auto-container position-relative">
            <!--Filter-->
            <div class="filters style-two clearfix">
                <ul class="filter-tabs filter-btns">
                    <li class="filter active" data-role="button" data-filter="all">All Projects</li>
                    <li class="filter" data-role="button" data-filter=".camera">Plumbing Camera Inspection</li>
                    <li class="filter" data-role="button" data-filter=".drain">Drain cleaning</li>
                </ul>
            </div>
        </div>


        <div class="filter-list clearfix">

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all drain">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/13.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all drain">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/14.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all camera ">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/15.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all camera">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/16.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all drain">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/17.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all drain">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/18.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all camera">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/19.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all drain">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/20.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all camera">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/21.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Item Three-->
            <div class="gallery-item-three mix all camera">
                <div class="inner-box">
                    <div class="image">
                        <img src="images/gallery/22.jpg" alt="" />
                        <div class="overlay-box">
                            <div class="option-box">
                                <a href="#" class="image-link"><span class="icon fa fa-link"></span></a>
                            </div>
                            <div class="content">
                                <h3><a href="#">Bathroom Plumbing</a></h3>
                                <div class="category">Plumbing, Tiling</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!--End Project Section-->

<!--Default Section-->
<section class="default-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Column-->
            <div class="about-column col-md-6 col-sm-12 col-xs-12">
                <div class="sec-title">
                    <h2>About Us</h2>
                </div>
                <div class="inner-column">
                    <div class="row clearfix">
                        <div class="image col-md-6 col-sm-6 col-xs-12">
                            <img src="images/resource/about-1.jpg" alt="" />
                        </div>
                        <div class="image col-md-6 col-sm-6 col-xs-12">
                            <img src="images/resource/about-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="text">Plomberie Bonne-eau,Plomberie Bonne-Eau est une entreprise avec beaucoup d'expérience et énormément de projets résidentiels et commerciaux à son actif, grace à sa réputation son expertise et son savoir-faire notre clientèle ne fait qu'augmenter et par le fait nous avons donc décidé de partir une nouvelle division en déblocage de drain et inspection de caméra pour réponde à la demande.Nous offrons un service rapide et de qualité tout en respectant votre environnement.</div>
                </div>
            </div>

            <!--Column-->
            <div class="form-column col-md-6 col-sm-12 col-xs-12">
                <div class="sec-title">
                    <h2>Request a Free Quote</h2>
                </div>
                <div class="inner-column">

                    <!-- Default Form -->
                    <div class="default-form">
                        <!--Comment Form-->
                        <form method="post" action="#">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name*" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email id *" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone Number *" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder=""></textarea>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit</button>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 form-group">
                                    <div class="text">
                                        <span class="theme_color">Note:</span> We dont’t do spam and Your mail id very confidential.
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Default Form -->

                </div>
            </div>

        </div>
    </div>
</section>
<!--End Default Section-->

<!--Testimonial Section-->
<section class="testimonial-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Client Reviews</h2>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme">
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="content">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Robert Frenette</h3> 
                        <div class="text">Nous avons eu besoins de ses services au début de janvier 2018 et je peux vous confirmer que nous sommes satisfaits de son travail bien fait et un monsieur sympathique. C’etait Le renvoi de lla laveuse et il a tout changer et vérifier aussi tout installations à la maison.
                                    Ã bon prix aussi. <br>Merci
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="content">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Robert Frenette</h3> 
                        <div class="text">We needed his services in early January 2018 and can confirm that we are happy with his job well done and a nice guy. It was the return of the washer and it changed everything and also check all the facilities at home.
                                At a good price too.<br>Thank you 
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="content">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Robert Frenette</h3> 
                        <div class="text">Nous avons eu besoins de ses services au début de janvier 2018 et je peux vous confirmer que nous sommes satisfaits de son travail bien fait et un monsieur sympathique. C’etait Le renvoi de lla laveuse et il a tout changer et vérifier aussi tout installations à la maison.
                                    Ã bon prix aussi. <br>Merci
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="content">
                        <div class="image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h3>Robert Frenette</h3> 
                        <div class="text">We needed his services in early January 2018 and can confirm that we are happy with his job well done and a nice guy. It was the return of the washer and it changed everything and also check all the facilities at home.
                                At a good price too.<br>Thank you 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
