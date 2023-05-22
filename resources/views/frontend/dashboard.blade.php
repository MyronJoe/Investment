<!-- links -->
@include('frontend.include.links')
<!-- /links -->

<!-- HEADER -->
@include('frontend.include.header')
<!-- /HEADER -->

<!-- Dashboard Section Starts Here -->
<div class="dashbaord-section padding-top padding-bottom">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-xxl-3 col-xl-4">
                <div class="sidebar dashboard__sidebar">
                    <div class="dashboard-user text-center">
                        <div class="thumb"><img src="assets/images/profile/{{ Auth::user()->image }}" alt="{{ Auth::user()->name }}"></div>
                        <div class="content mt-3">
                            <h3 class="name">{{ Auth::user()->name }}</h3>
                            <p class="text-white">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <ul class="dashbard__tab tags">
                        <li><a href="#" class="active">Overview</a></li>
                        <li><a href="#">Max Deposit</a></li>
                        <li><a href="#">Withdraw Fund</a></li>
                        <li><a href="#">Deposit List</a></li>
                        <li><a href="#">Deposit History</a></li>
                        <li><a href="#">Earnings History</a></li>
                        <li><a href="#">Referral Link</a></li>
                        <li><a href="{{route('edit_user')}}">Account Settings</a></li>
                        <li><a href="#">Security Settings</a></li>
                        <li><a href="#">Sign Out</a></li>
                    </ul>
                    <button class="btn-close btn-close-white d-lg-none"></button>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 col-xxl-9">
                <div class="dashboard__wrapper">
                    <div class="dashboard__header">
                        <div class="inner">
                            <h3 class="title">User Panel</h3>
                        </div>
                        <div class="inner">
                            <form class="search__form">
                                <div class="form-group">
                                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                                    <button type="submit" class="btn"><i class="las la-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="inner">
                            <ul class="tabs d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="las la-envelope"></i></a></li>
                                <li><a href="#"><i class="las la-bell"></i><span class="badge badge--base badge--round">01</span> </a></li>
                                <li>
                                    <div class="user-thumb"><img src="assets/images/profile/{{ Auth::user()->image }}" alt="#"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row pt-5 gy-4">
                        <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                            <div class="dashboard__card">
                                <div class="dashboard__card-icon">
                                    <i class="las la-wallet"></i>
                                </div>
                                <div class="dashboard__card-content">
                                    <p class="info">Total Balance</p>
                                    <h3 class="title">587 USD</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                            <div class="dashboard__card">
                                <div class="dashboard__card-icon">
                                    <i class="las la-money-bill-alt"></i>
                                </div>
                                <div class="dashboard__card-content">
                                    <p class="info">Earning Total</p>
                                    <h3 class="title">587 USD</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                            <div class="dashboard__card">
                                <div class="dashboard__card-icon">
                                    <i class="las la-file-invoice-dollar"></i>
                                </div>
                                <div class="dashboard__card-content">
                                    <p class="info">Pending Withdraw</p>
                                    <h3 class="title">587 USD</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 mb-4">
                        <h3 class="title">Latest Deposits</h3>
                        <select class="nice-select btn--round">
                            <option>Last Month</option>
                            <option>Last 3 Months</option>
                            <option>Last 6 Months</option>
                        </select>
                    </div>
                    <table class="table transection__table dashboard__table">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Amount</th>
                                <th>Wallet</th>
                                <th>Date</th>
                                <th>Currency</th>
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
                                <td data-label="Currency"><span class="currency">USD</span></td>
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
                                <td data-label="Currency"><span class="currency">BItcoin</span></td>
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
                                <td data-label="Currency"><span class="currency">NSU</span></td>
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
                                <td data-label="Currency"><span class="currency">BIT</span></td>
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
                                <td data-label="Currency"><span class="currency">USD</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row pt-5 gy-4">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="dashboard__card style--two">
                                <div class="dashboard__card-icon">
                                    <i class="las la-wallet"></i>
                                </div>
                                <div class="dashboard__card-content">
                                    <p class="info">Total Balance</p>
                                    <h3 class="title">587 USD</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="dashboard__card style--two">
                                <div class="dashboard__card-icon">
                                    <i class="las la-money-bill-alt"></i>
                                </div>
                                <div class="dashboard__card-content">
                                    <p class="info">Earning Total</p>
                                    <h3 class="title">587 USD</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="title mt-5 mb-4">Top Investors</h3>
                    <div class="row justify-content-center gy-4">
                        <div class="col-xl-4 col-xxl-3 col-md-4 col-sm-6">
                            <div class="investor__item style--two">
                                <div class="investor__item-thumb">
                                    <img src="assets/images/investor/item1.png" alt="investor">
                                </div>
                                <div class="investor__item-content">
                                    <h4 class="name">Robart Williams</h4>
                                    <p class="invest-amount">Invest 250 USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-3 col-md-4 col-sm-6">
                            <div class="investor__item style--two">
                                <div class="investor__item-thumb">
                                    <img src="assets/images/investor/item2.png" alt="investor">
                                </div>
                                <div class="investor__item-content">
                                    <h4 class="name">Munna Ahmed</h4>
                                    <p class="invest-amount">Invest 350 USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-3 col-md-4 col-sm-6">
                            <div class="investor__item style--two">
                                <div class="investor__item-thumb">
                                    <img src="assets/images/investor/item3.png" alt="investor">
                                </div>
                                <div class="investor__item-content">
                                    <h4 class="name">Maliha Mahtab</h4>
                                    <p class="invest-amount">Invest 450 USD</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-xxl-3 col-md-4 col-sm-6">
                            <div class="investor__item style--two">
                                <div class="investor__item-thumb">
                                    <img src="assets/images/investor/item4.png" alt="investor">
                                </div>
                                <div class="investor__item-content">
                                    <h4 class="name">Munna Ahmed</h4>
                                    <p class="invest-amount">Invest 550 USD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Section Ends Here -->

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