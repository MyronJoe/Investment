<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Icon Link -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/odometer.css">

    <!-- Custom Link -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Digihyip - Hyip Investment Business HTML template</title>

</head>

<body>

    <!-- HEADER -->
    @include('frontend.include.header')
	<!-- /HEADER -->


    <!-- Banner Section Starts Here -->
    @include('frontend.include.banner')
    <!-- Banner Section Ends Here -->


    <!-- Why Choose Us Section Starts Here -->
    @include('frontend.include.why_us')
    <!-- Why Choose Us Section Ends Here -->


    <!-- Plan Section Starts Here -->
    @include('frontend.include.plans')
    <!-- Plan Section Ends Here -->


    <!-- Profit Calculation Section Starts Here -->
    @include('frontend.include.calculate')
    <!-- Profit Calculation Section Ends Here -->


    <!-- Feature Section Starts Here -->
    @include('frontend.include.feature')
    <!-- Feature Section Ends Here -->


    <!-- Referral Section Starts Here -->
    @include('frontend.include.referral')
    <!-- Referral Section Ends Here -->


    <!-- Investor Section Starts Here -->
    @include('frontend.include.investors')
    <!-- Investor Section Ends Here -->


    <!-- Download Section Starts Here -->
    @include('frontend.include.download')
    <!-- Download Section Ends Here -->


    <!-- Faq Section Starts Here -->
    @include('frontend.include.faq')
    <!-- Faq Section Ends Here -->


    <!-- Transection Section Starts Here -->
    <section class="transection-section section-bg padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">Latest Deposit & Withdraw </h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <ul class="transection__tab__menu nav-tabs nav border-0 justify-content-center">
                        <li><a data-bs-toggle="tab" href="#deposit" class="cmn--btn2 active">Last Deposit</a></li>
                        <li><a data-bs-toggle="tab" href="#widthdraw" class="cmn--btn2">Last Widthdraw</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show fade active" id="deposit">
                            <table class="table transection__table">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Amount</th>
                                        <th>Wallet</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item1.png" alt="dashboard">
                                                </div>
                                                <p class="name">Robert Mahfuj</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                        <td data-label="Date"><span class="date">25 Apr 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item2.png" alt="dashboard">
                                                </div>
                                                <p class="name">Munna Ahmed</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                        <td data-label="Date"><span class="date">25 Jan 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item3.png" alt="dashboard">
                                                </div>
                                                <p class="name">Rafuj Raihan</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">block.io</span></td>
                                        <td data-label="Date"><span class="date">25 May 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item4.png" alt="dashboard">
                                                </div>
                                                <p class="name">Robert Mahfuj</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Bank Wire</span></td>
                                        <td data-label="Date"><span class="date">25 Feb 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item5.png" alt="dashboard">
                                                </div>
                                                <p class="name">Jibon Khan</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$2500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Paypal</span></td>
                                        <td data-label="Date"><span class="date">25 May 2021</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane show fade" id="widthdraw">
                            <table class="table transection__table">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Amount</th>
                                        <th>Wallet</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item1.png" alt="dashboard">
                                                </div>
                                                <p class="name">Robert Mahfuj</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                        <td data-label="Date"><span class="date">25 Apr 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item2.png" alt="dashboard">
                                                </div>
                                                <p class="name">Munna Ahmed</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Payeer</span></td>
                                        <td data-label="Date"><span class="date">25 Jan 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item3.png" alt="dashboard">
                                                </div>
                                                <p class="name">Rafuj Raihan</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">block.io</span></td>
                                        <td data-label="Date"><span class="date">25 May 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item4.png" alt="dashboard">
                                                </div>
                                                <p class="name">Robert Mahfuj</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$1500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Bank Wire</span></td>
                                        <td data-label="Date"><span class="date">25 Feb 2021</span></td>
                                    </tr>
                                    <tr>
                                        <td data-label="User Name">
                                            <div class="user d-flex flex-wrap align-items-center">
                                                <div class="thumb">
                                                    <img src="assets/images/dashboard/item5.png" alt="dashboard">
                                                </div>
                                                <p class="name">Jibon Khan</p>
                                            </div>
                                        </td>
                                        <td data-label="Amount"><span class="amount">$2500</span></td>
                                        <td data-label="Wallet"><span class="wallet">Paypal</span></td>
                                        <td data-label="Date"><span class="date">25 May 2021</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Transection Section Ends Here -->


    <!-- Testimonial Section Starts Here -->
    <section class="testimonial-section padding-top padding-bottom">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="testimonial__img__slider">
                        <div class="single-slide">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonial/item1.png" alt="testimonial">
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__thumb">
                                <img src="assets/images/testimonial/item2.png" alt="testimonial">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial__content__slider">
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>Maecenas tempus tellus egcondi entuhoncus seuam semper libero sit amet adipiscing sque sesum.amuam nunc, blandit vel, luctus pvinar hendrerilorem. aecenas nec odio</p>
                                <h3 class="name">Rasel Pranto</h3>
                                <span class="designation text-white">Front-end Web Developer</span>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="testimonial__content">
                                <div class="icon"><i class="fas fa-quote-left"></i></div>
                                <p>Maecenas tempus tellus egcondi entuhoncus seuam semper libero sit amet adipiscing sque sesum.amuam nunc, blandit vel, luctus pvinar hendrerilorem. aecenas nec odio</p>
                                <h3 class="name">Munna Ahmed</h3>
                                <span class="designation text-white">Front-end Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Ends Here -->


    <!-- Blog Section STartrs Here -->
    <section class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header max-p text-center">
                        <h2 class="section__header-title">See Our Latest Blog & Tips</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="assets/images/blog/item1.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="assets/images/blog/item2.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="post__item">
                        <div class="post__item-thumb">
                            <img src="assets/images/blog/item3.png" alt="blog">
                            <div class="thumb__content">
                                <h3 class="title"><a href="blog-details.html">Aenean Ligul Porttitoe Consequat Ditae</a></h3>
                                <ul class="post-meta d-flex flex-wrap m-0 justify-content-between">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        Thomas Addican
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar"></i>
                                        15 Aug 2020
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section Ends Here -->


    <!-- Brand Section Starts Here -->
    <div class="padding-top padding-bottom">
        <div class="container">
            <div class="brand__slider">
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
                <div class="single-slide">
                    <div class="brand__item">
                        <img src="assets/images/brand/item1.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section Ends Here -->


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