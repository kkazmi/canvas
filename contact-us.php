<?php
include_once('header.php');
?>
    <!-- Header End -->


<!-- Begin Content -->
<div class="main-container">
    <!-- About us -->
    <section class="iq-contact wrapper">
        <div class="container-fluid h-100">
            <div class="row row-eq-height h-100">
                <div class="col-md-3 purple-bg">
                    <div class="iq-objects">
                            <!-- BACKGROUND PARTICLES -->   
                            <div id="particles-js"></div>
                            <span class="iq-objects-01">
                                <img class="img-fluid" src="images/01.png" alt="drive">
                            </span>
                        </div>
                </div>
                <div class="col-md-9 main-content align-self-center">
                    <div id="boxscroll" class="inner-box">
                        <div class="iq-plr-40">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="main-title iq-mb-15">
                                    <small>My Contact</small>
                                <h1 class="display-4 iq-tw-8 iq-font-purple">Contact Me</h1>
                            </div>
                            </div> 
                            <div class="col-md-4">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.0120368742324!2d77.28553362651823!3d28.56831688341495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce389ddc77875%3A0x151155fc32fcfe86!2sBatla+House%2C+Nafees+Road%2C+Jogabai+Extension%2C+Jamia+Nagar%2C+Okhla%2C+New+Delhi%2C+Delhi+110025!5e0!3m2!1sen!2sin!4v1514552659224" style="border:0" allowfullscreen></iframe>
                            </div>  
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="title iq-tw-8 text-uppercase iq-mt-0">Get in Touch</h3>
                                          <ul class="contact-info">
                                            <li><i class="ti-mobile"></i> <p>(+91) 8395000092 </p></li>
                                            <li><i class="ti-mobile"></i> <p>(123) 9650611781 </p></li>
                                            <li><i class="ti-marker-alt"></i> <p>kazmikashif007@gmail.com </p></li>
                                            <li><i class="ti-location-pin"></i> <p>18/3 Nafees road, Jamia Nagar, New delhi 110025</p> </li>
                                          </ul>
                                    </div>
                                </div>
                            <div class="iq-get-in">
                            <div id="formmessage">Success/Error Message Goes Here</div>
                            <form class="form-horizontal" id="form" method="post" action="contact_form.php">
                                <div class="contact-form row">
                                    <div class="section-field col-md-4">
                                        <input id="name" type="text" placeholder="Name*" name="name" id="name">
                                    </div>
                                    <div class="section-field col-md-4">
                                        <input type="email" placeholder="Email*" name="email" id="email">
                                    </div>
                                    <div class="section-field col-md-4">
                                        <input type="text" placeholder="Phone*" name="phone" id="contact">
                                    </div>
                                    <div class="section-field textarea col-md-12">
                                        <textarea  id="message" class="input-message" placeholder="Comment*" rows="5" name="message"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" name="action" value="sendEmail" />
                                    <button name="submit" type="submit" value="Send" class="button iq-mt-30">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <div id="ajaxloader" style="display:none"><img class="center-block mt-30 mb-30" src="images/ajax-loader.html" alt="#"></div>
                        </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->
</div>


<!-- Footer -->
    <?php
include_once('footer.php');
?>
