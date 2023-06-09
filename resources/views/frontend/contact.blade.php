<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Banner Section Starts Here -->
<div class="inner-banner section-bg overflow-hidden">
    <div class="container">
        <div class="inner__banner__content text-center">
            <h2 class="title">Get in Touch With us</h2>
            <ul class="breadcums d-flex flex-wrap justify-content-center">
                <li><a href="/">Home</a>//</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <div class="shapes">
        <img src="assets/images/banner/inner-bg.png" alt="banner" class="shape shape1">
        <img src="assets/images/banner/inner-thumb.png" alt="banner" class="shape shape2 d-none d-lg-block">
    </div>
</div>
<!-- Banner Section Ends Here -->

<!-- Contact Section Starts Here -->
<div class="contact-section">
    <div class="container">
        <div class="row padding-top padding-bottom gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="contact__info__item plan__item">
                    <div class="icon">
                        <i class="las la-map-marker"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Office Address</h3>
                        <p>28 Benin, south San Francisco, United States of America</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="contact__info__item plan__item">
                    <div class="icon">
                        <i class="las la-envelope-open-text"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Email Address</h3>
                        <ul class="contacts">
                            <li><a href="https://template.viserlab.com/cdn-cgi/l/email-protection#1d797870725d7a707c7471337e7270"><span class="__cf_email__" data-cfemail="8fe7eae3e3e0a1ecf6edeafdcfe8e2eee6e3a1ece0e2">[email&#160;protected]</span></a></li>
                            <li><a href="https://template.viserlab.com/cdn-cgi/l/email-protection#4f2b2a22200f28222e2623612c2022"><span class="__cf_email__" data-cfemail="1078757c7c7f3e736972756250777d71797c3e737f7d">[email&#160;protected]</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="contact__info__item plan__item">
                    <div class="icon">
                        <i class="las la-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Phone Number</h3>
                        <ul class="contacts">
                            <li><a href="tel:02834">+10-928 4591 8725</a></li>
                            <li><a href="tel:02834">+91-123 4356 9150</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative map__area">
        <div class="container padding-top padding-bottom contact__area">
            <div class="contact__form__wrapper mx-auto me-lg-0">
                <h3 class="title">Send Your Messages</h3>
                <form class="contact__form form" id="contact_form_submit" action="https://template.viserlab.com/digihyip/demo/contact.php">
                    <div class="form-group">
                        <input type="text" class="form-control form--control" placeholder="Full Name" name="contact_name" id="contact_name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control form--control" name="contact_email" placeholder="Email" id="contact_email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form--control" name="contact_message" placeholder="Write Your Messages" id="contact_message"></textarea>
                    </div>
                    <button type="submit" class="cmn--btn btn">Send Message</button>
                </form>
            </div>
        </div>
        <div class="map__wrapper">
            <div class="overlay01"></div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4340.214604426607!2d90.39243230460072!3d23.830298940050135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1638968781774!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!-- Contact Section Ends Here -->

<!-- Footer Section Starts Here -->
@include('frontend.include.footer')
<!-- Footer Section Ends Here -->

<a href="#0" class="scrollToTop"><i class="las la-rocket"></i></a>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>