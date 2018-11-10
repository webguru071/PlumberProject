
<?php include 'header.php' ?>
       
    <!--Page Title-->
    <section class="page-title">
        <div class="auto-container">
            <div class="sec-title light centered"><h2>Contact Us</h2></div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container">
            <ul class="bread-crumb">
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Info-->
    
    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Contact Details</h2>
                <div class="text">If you have any questions about what we offer for consumers or for business, you can always email us or call us via the below details. We’ll reply within 24 hours.</div>
            </div>
            
            <div class="row clearfix">
                <!--Info Column-->
                <div class="info-column col-md-8 col-sm-12 col-xs-12">

                    <div class="row clearfix">
                        <!--Info Block-->
                        <div class="info-block col-md-6 col-sm-6 col-xs-12">
                            <div class="info-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-travel"></span>
                                </div>
                                <h3>Address :</h3>
                                <div class="text">Plomberie Bonne-eau, Montreal</div>
                            </div>
                        </div>
                        
                        <!--Info Block-->
                        <div class="info-block col-md-6 col-sm-6 col-xs-12">
                            <div class="info-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-technology-1"></span>
                                </div>
                                <h3>Phone :</h3>
                                <div class="text">Office: 514-817-8066, 514-705-7001 <br>Admin: 514-718-5527</div>
                            </div>
                        </div>
                        
                        <!--Info Block-->
                        <div class="info-block col-md-6 col-sm-6 col-xs-12">
                            <div class="info-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-mail"></span>
                                </div>
                                <h3>Email Address :</h3>
                                <div class="text">Plomberiebonneau@gmail.com</div>
                            </div>
                        </div>
                        
                        <!--Info Block-->
                        <div class="info-block col-md-6 col-sm-6 col-xs-12">
                            <div class="info-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-clock"></span>
                                </div>
                                <h3>Working Hours :</h3>
                                <div class="text">Our Services 24/7 Open</div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!--Form Column-->
                <div class="form-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        
                        <!-- Subscribe Form -->
                        <form class="subscribe-form-two">
                            <h4>Subscribe for Newsletter</h4>
                            <div class="text">Plomberie Bonne-eau is your ONE STOP <br>solution bringing best plumbung services.</div>
                            <div class="form-group">
                                <input type="email" placeholder="Email Addres...">
                                <button type="submit" class="fa fa-paper-plane"></button>
                            </div>
                            
                            <p>* Your Mail id is Fully Protected.</p>
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Contact Section-->

    <!--Contact Section-->
    <section class="contact-section grey-bg">
        <div class="auto-container">

            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Leave Your Message</h2>
                <div class="text">If you have any questions about the services we provide simply use the form below. We try and respond to all queries and comments within 24 hours.</div>
            </div>
            
            <!--Form Column-->
            <div class="form-column">
                <div class="inner-column">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <!--Comment Form-->
                        <form method="post" action="#" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name*" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email id*" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone Number *" required>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Your Message..."></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Comment Form -->
                    
                </div>
            </div>

        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <div class="google-map" 
                id="contact-google-map" 
                data-map-lat="51.506810" 
                data-map-lng="-0.079770" 
                data-icon-path="images/icons/map-marker.png" 
                data-map-title="Plomberie Bonne-eau, Montreal" 
                data-map-zoom="12" 
                data-markers='{
                    "marker-2": [51.508974, -0.078697, "<h4>Head Office</h4><p>Plomberie Bonne-eau, Montreal</p>"]
                }'>

            </div>
        </div>
    </section>
    <!--End Map Section-->
    
<?php include 'footer.php' ?>