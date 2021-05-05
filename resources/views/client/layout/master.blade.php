<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon"/>
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    @yield('links')

    <link rel="stylesheet" type="text/css" href="/client/js/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/client/js/bootstrap/css/bootstrap-rtl.min.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/owl.transitions.css"/>

    <link rel="stylesheet" type="text/css" href="/client/js/swipebox/src/css/swipebox.min.css">
    <link rel="stylesheet" type="text/css" href="/client/css/responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/stylesheet-rtl.css"/>
    <link rel="stylesheet" type="text/css" href="/client/css/responsive-rtl.css"/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"><span class="drop-icon visible-sm visible-xs"><i
                            class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a>
                                </li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="/client/image/banner/cms-block.jpg"></td>
                                                        <td><img alt="" src="/client/image/banner/responsive.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html
                                                            نوشتاری یا تصویری را در آن قرار دهید.
                                                        </td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html
                                                            نوشتاری یا تصویری را در آن قرار دهید.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه
                                                                    مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">لیست علاقه مندی (0)</a></li>
                                <li><a href="checkout.html">تسویه حساب</a></li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> <img
                                        src="/client/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img
                                            src="/client/image/flags/gb.png" alt="انگلیسی" title="انگلیسی"/> انگلیسی
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img
                                            src="/client/image/flags/ar.png" alt="عربی" title="عربی"/> عربی
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> تومان <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€
                                        Euro
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£
                                        Pound Sterling
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$
                                        USD
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="register.html">ثبت نام</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.html"><img class="img-responsive" src="/client/image/logo.png"
                                                                 title="MarketShop" alt="MarketShop"/></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                    class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="cart-total">2 آیتم - 132000 تومان</span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img class="img-thumbnail"
                                                                                                title="کفش راحتی مردانه"
                                                                                                alt="کفش راحتی مردانه"
                                                                                                src="/client/image/product/sony_vaio_1-50x50.jpg"></a>
                                            </td>
                                            <td class="text-left"><a href="product.html">کفش راحتی مردانه</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">32000 تومان</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="حذف" onClick=""
                                                        type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img class="img-thumbnail"
                                                                                                title="تبلت ایسر"
                                                                                                alt="تبلت ایسر"
                                                                                                src="/client/image/product/samsung_tab_1-50x50.jpg"></a>
                                            </td>
                                            <td class="text-left"><a href="product.html">تبلت ایسر</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">98000 تومان</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="حذف" onClick=""
                                                        type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right">132000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">4000 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">11880 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right">139880 تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i
                                                    class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a
                                                href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i>
                                                تسویه حساب</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
    @include('client.layout.menu')
    <!-- Main آقایانu End-->
    </div>

{{--    =======================================================================--}}
{{--    =======================================================================--}}
        @yield('content')
{{--    =======================================================================--}}
{{--    =======================================================================--}}
    <!--Footer Start-->
  @include('client.layout.footer')
    <!--Footer End-->
    <!-- Facebook Side Block Start -->
    <div id="facebook" class="fb-left sort-order-1">
        <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
        <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true"
             data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/harnishdesign/"><a
                        href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
            </div>
        </div>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    <!-- Facebook Side Block End -->
    <!-- Twitter Side Block Start -->
    <div id="twitter_footer" class="twit-left sort-order-2">
        <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
        <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent"
           data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive"
           data-widget-id="347621595801608192">توییت های @</a>
        <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
    </div>
    <!-- Twitter Side Block End -->
    <!-- Video Side Block Start -->
    <div id="video_box" class="vb-left sort-order-3">
        <div id="video_box_icon"><i class="fa fa-play"></i></div>
        <p>
            <iframe allowfullscreen="" src="" height="315" width="560"></iframe>
        </p>
    </div>
    <!-- Video Side Block End -->
    <!-- Custom Side Block Start -->
    <div id="custom_side_block" class="custom_side_block_left sort-order-4">
        <div class="custom_side_block_icon"><i class="fa fa-chevron-right"></i></div>
        <table>
            <tbody>
            <tr>
                <td><h2>بلاک های محتوا</h2></td>
            </tr>
            <tr>
                <td><img alt="" src="/client/image/banner/cms-block.jpg"></td>
            </tr>
            <tr>
                <td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>
            </tr>
            <tr>
                <td><strong><a href="#">ادامه مطلب</a></strong></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/client/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/client/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/client/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/client/js/custom.js"></script>

@yield("scripts")
<!-- JS Part End-->
</body>
</html>
