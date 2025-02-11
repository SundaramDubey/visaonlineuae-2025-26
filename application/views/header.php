<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Visa UAE"; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/script.js'); ?>" class="js">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <header class="row pull_left borderFromBottom headerSection">
        <div class="wrap">
            <div class="row upperSection">
                <div class="menuIcon" id="menuIcon">
                    <div class="idv-img-sprites mobi"></div>
                </div>
                <div class="logoPanel">
                    <a href="<?php echo base_url('tour'); ?>" class="row">
                        <img class="marginTopsm marginRight flags lazy"
                            src="<?php echo base_url('assets/images/bmb-logo-sm.png'); ?>" height="50"
                            style="display: unset; position:relative; float:left; top: -5px;" alt="UAE" />
                    </a>
                </div>
                <div class="navigationmain-section">
                    <div class="header-menu-overlay"></div>
                    <nav class="navigation-Panel radius-0-1-1-0">
                        <div class="navigation">
                            <a class="active" href="<?php echo base_url('/index.php/header'); ?>">Home</a>
                            <div class="bmbmenudiv"></div>
                            <a class="closeMenu testi" href="#faqs" style="display:none">Faq</a>
                            <a class="closeMenu testi" href="#testimonials">Testimonials</a>
                            <a class="closeMenu changehref" href="#contact">Contact</a>
                        </div>
                    </nav>
                </div>

                <div class="marginFromTop paddingFromTop pull_right livechatmob">
                    <a href="javascript:void(Tawk_API.toggle())" class="popup-btn">Live Chat</a>
                </div>

                <div class="pull_right column-one mobWhatsappIcon padding-All-sm paddingFromLeftNone mob10 mobmargin-0">
                    <div class="row">
                        <a href="https://api.whatsapp.com/send?phone=971555903386&amp;text=Hi, I just visited your website and I have some queries related to it."
                            target="_blank" class="container paddingFromTop mobpadding-0">
                            <img class='lazy' src="<?php echo base_url('assets/images/whatsapp-sm.webp'); ?>"
                                alt="Whatsapp Icon" title="Whatsapp Icon" width="100" height="40">
                        </a>
                    </div>
                    <div class="row alignFromCenter fontEleven mobDisplayNone">+971-555903386</div>
                </div>

            </div>
        </div>
    </header>
    <div class="searchsection row bannerBox" style="display:block">
        <div class="wrap">
            <div class="row searchtitle">
                <h1>Get Visa Easier and Faster</h1>
                <p>We inaugurated our first travel agency in Dubai back in 2001. We have the expertise and specialize in
                    Visa
                    processing. Having already issued over 50 million visas, you can trust us to deliver your visa on
                    time.</p>
            </div>

            <div class="searchsection-inner-main fl">
                <div class="searchsection-inner fl">
                    <form action="http://localhost/visaonlineuae-2025-26/index.php/form" method="post">
                        <div class="forminputcol selectcountry fl col-35 citizenfield">
                            <!-- <label class="row" for="destination_id_form">Please Choose Destination</label> -->
                            <select name="destination_id_form" id="destination_id_form" class="row"
                                aria-label="Destination">
                                <option value="" selected disabled>Select Destination</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="ybb row fw-400"><strong class="fw-600">Most Popular</strong> Destinations</h2>

        <div class="carousel-container">
            <button class="nav-button left-btn" id="left-btn">&#10094;</button>
            <div class="carousel" id="carousel">
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\india.jpeg'); ?>" alt="India">
                    <div class="card-info">
                        <h3>India</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\europe.jpg'); ?>" alt="Europe">
                    <div class="card-info">
                        <h3>Europe</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\vietnam.jpg'); ?>" alt="Vietnam">
                    <div class="card-info">
                        <h3>Vietnam</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\dubai.jpeg'); ?>" alt="Dubai">
                    <div class="card-info">
                        <h3>Dubai</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\thailand.jpeg'); ?>" alt="Thailand">
                    <div class="card-info">
                        <h3>Thailand</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\andaman.jpg'); ?>" alt="Andman">
                    <div class="card-info">
                        <h3>Andman</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\australia.webp'); ?>" alt="Australia">
                    <div class="card-info">
                        <h3>Australia</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\turkey.jpeg'); ?>" alt="Turkey">
                    <div class="card-info">
                        <h3>Turkey</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo base_url('\assets\images\brazil.jpg'); ?>" alt="Brazil">
                    <div class="card-info">
                        <h3>Brazil</h3>
                        <button type="button" class="btn-white" value="Search">Learn More</button>
                    </div>
                </div>
            </div>
            <button class="nav-button right-btn" id="right-btn">&#10095;</button>
        </div>

        <!-- Here start code the more destination countries -->
        <section class="more-destinations">
            <div class="wrap">
                <div class="row">
                    <h2 class="ybb row fw-400"><strong class="fw-600">More</strong> Destinations</h2>
                </div>
                <div class="destination-container" id="destination-list"></div>
            </div>
        </section>
        <!-- Here end the more destination countries -->

        <!-- Here start the code the step to follow -->
        <section class="whyus row bannerBox">
            <div class="wrap">
                <div class="whyusmain">
                    <div class="titlemain">
                        <h2><strong>Steps</strong> to follow</h2>
                        <span>Assurance, Safety and Reliability</span>
                    </div>

                    <div class="whyuscolmain">
                        <div class="whyuscol">
                            <div class="whyuscolicon">
                                <img src="<?php echo base_url('assets/images/step1.webp'); ?>" alt="Step 1"
                                    title="Step 1" width="40" height="45">

                            </div>
                            <div class="whyuscolname">
                                <h3>Check Eligibility</h3>
                                <p>Make a quick choice for your nationality to check travel eligibility.</p>
                            </div>
                        </div>

                        <div class="whyuscol">
                            <div class="whyuscolicon">
                                <img src="<?php echo base_url('assets/images/step2.webp'); ?>" alt="Step 2"
                                    title="Step 2" width="40" height="45">
                            </div>
                            <div class="whyuscolname">
                                <h3>Choose your visa</h3>
                                <p>The visa information simplifies your choice of type of visa.</p>
                            </div>
                        </div>

                        <div class="whyuscol">
                            <div class="whyuscolicon">
                                <img src="<?php echo base_url('assets/images/step3.webp'); ?>" alt="Step 1"
                                    title="Step 1" width="40" height="45">

                            </div>
                            <div class="whyuscolname">
                                <h3>Pay fee</h3>
                                <p>Enjoy secured transactions with a debit or credit card.</p>
                            </div>
                        </div>

                        <div class="whyuscol">
                            <div class="whyuscolicon">
                                <img src="<?php echo base_url('assets/images/step4.webp'); ?>" alt="Step 4"
                                    title="Step 4" width="40" height="45">
                            </div>
                            <div class="whyuscolname">
                                <h3>Get the visa</h3>
                                <p>Carry a printout of your visa & enjoy your travel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row featured-section">
            <div class="wrap">
                <div class="row featured-title">
                    Featured on
                </div>
                <div class="row featured-logos">
                    <div class="column-two"><img src="<?= base_url('assets/images/bw.webp') ?>" alt="BW" /></div>
                    <div class="column-two"><img src="<?= base_url('assets/images/wn.webp') ?>" alt="WN" /></div>
                    <div class="column-two"><img src="<?= base_url('assets/images/ani.webp') ?>" alt="ANI" /></div>
                    <div class="column-two"><img src="<?= base_url('assets/images/bs.webp') ?>" alt="BS" /></div>
                    <div class="column-two"><img src="<?= base_url('assets/images/tp.webp') ?>" alt="TP" /></div>
                </div>
            </div>
        </section>
        <section class="stepsection">
            <div class="container">
                <div class="row customerreviews">
                    <ul>
                        <li>
                            <img src="<?= base_url('assets/images/costumer.png'); ?>" alt="Happy Customers">
                            <strong>5M</strong> Happy Customers
                        </li>
                        <li>
                            <img src="<?= base_url('assets/images/on-time.png'); ?>" alt="On-Time Delivery">
                            <strong>99%</strong> On-Time Delivery
                        </li>
                        <li>
                            <img src="<?= base_url('assets/images/quality.png'); ?>" alt="Experience">
                            <strong>10</strong> Years of Experience
                        </li>
                        <li>
                            <img src="<?= base_url('assets/images/review.png'); ?>" alt="Top Reviews">
                            <strong>Top</strong> Reviews
                        </li>
                    </ul>
                </div>
            </div>
            <section class="donwlaodapp-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" src="https://www.visauae.online/bmb/images/appimg-480x510.png"
                                alt="Download App"style="width:50%;height:50%;">
                        </div>
                        <div class="col-md-6 text-start">
                            <h2><span style="color:#007bff">Download</span> Our App</h2>
                            <p>Travel is made better with the BMB App.</p>
                            <p>Book all-inclusive tour packages, activities, and hotel bookings for your upcoming
                                holidays.
                                Travel the world as you want.</p>
                            <div class="donwlaodapp-right-bot">
                                <a href="https://play.google.com/store/apps/details?id=com.bookmybooking"
                                    target="_blank">
                                    <img src="https://www.visauae.online/bmb/images/googleplayicon.png"
                                        alt="Google Play">
                                </a>
                                <a href="https://apps.apple.com/us/app/bookmybooking-travel-smart/id6511226809"
                                    target="_blank">
                                    <img src="https://www.visauae.online/bmb/images/appstoreicon.png" alt="App Store">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="row pageGapping" id="contact">
            <div class="wrap alignLeft label">
                <div class="row socialcontact paddingAllExtra marginFromTop border-Dashed marginFromBottom">
                    <div class="orangetitle row green marginFromBottom line-height-reg fontTwnty8">
                        <h2>Ways to Connect with
                            Us:</h2>
                    </div>

                    <div class="social-box">
                        <a href="https://api.whatsapp.com/send?phone=971505863986&amp;text=Hi, I just visited your website and have some queries."
                            target="_blank">
                            <div class="social-content">
                                <div class="icon-box">
                                    <img src="<?= base_url('assets/images/whatsapp-sm-new.png'); ?>" alt="WhatsappTour"
                                        title="WhatsappTour">
                                </div>
                                <div class="text-box">
                                    <div class="service-name">WhatsApp</div>
                                    <div class="service-number">+971-505863986</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="chat-box">
                        <a href="javascript:void(Tawk_API.toggle())">
                            <div class="chat-content">
                                <div class="chat-icon">
                                    <img src="<?= base_url('assets/images/ullu.webp'); ?>" alt="Click to Chat"
                                        title="Click to Chat">
                                </div>
                                <div class="chat-text">
                                    <div class="chat-title">Online Chat Assist</div>
                                    <div class="chat-subtext">Our team is available 24x7 to assist you</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="address-box">
                        <div class="address-content">
                            <div class="address-icon">
                                <img src="<?= base_url('assets/images/address-sm.png'); ?>" alt="Address"
                                    title="Address" width="24" height="24">
                            </div>
                            <div class="address-text">
                                <div class="address-title">Address</div>
                                <div class="address-subtext">
                                    201, M Square Commercial Building, Near Double Tree Hotel, Bur Dubai, Dubai, UAE,
                                    P.O. Box: 120375
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="row footer-panel pull_left white">
            <div class="wrap">
                <div class="container">
                    <div class="footerLogo">
                        <div class="logo-item">
                            <img src="<?= base_url('assets/images/secure-transaction.webp'); ?>"
                                alt="Secure Transaction" class="lazyloaded" width="100" height="79">
                        </div>
                        <div class="logo-item">
                            <img src="<?= base_url('assets/images/logo-1.png'); ?>" alt="UAE" />
                        </div>
                        <div class="logo-item">
                            <img src="<?= base_url('assets/images/secure-payment.webp'); ?>" alt="Secure Payment"
                                class="lazyloaded" width="100" height="79">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="column-two">
                        <div class="row">
                        </div>
                    </div>
                    <div class="column-six paddingAllExtra mobpadding-0 container">
                        <div class="container">
                            <p
                                class="ptext3 upperCase titleFont white paddingFromTop marginFromTop alignFromCenter mobpadding-0 mobmargin-0 mobFont18">
                                About Us
                            </p>
                        </div>
                        <div
                            class="row line-height-regExtra alignFromCenter padding-top-bottom-sm mobline-height-reg moblineheight">
                            <h4></h4>
                            <h5 class="container column-eight font-Weight-Normal">
                                We are on a quest to redefine travel. Come! And experience travel like none. Insta
                                Tourism
                                offers a 360-degree travel solution. Insta Tourism is a long-serving entity in
                                international
                                travel. We understand and are all ears to the travellers approaching us for their
                                queries
                                and travel-related Q & A.
                            </h5>
                        </div>
                        <div class="container paddingFromTop">
                            <p
                                class="row upperCase titleFont white paddingFromBottom marginFromTop alignFromCenter mobpadding-0 mobmargin-0">
                            <h2><strong>Payment Method</strong></h2>
                            </p>
                            <div class="row">
                                <img src="<?= base_url('assets/images/payment.webp'); ?>" alt="Payment Methods"
                                    title="Secure Payment Methods" class="lazyloaded float-Disabled lazy" width="230"
                                    height="27">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="row footerBG">
        <div class="wrap">
            <div class="row line-height-reg mobRow mobAlignCenter alignFromCenter">
                www.instadubaivisa.ae is a site operated by Insta Tourism L.L.C, a travel agency registered in Dubai
                under Registration 1660669 number. Commercial License Number: 929791 issued on 08/02/2021.Head
                Office located at Office No.201, M SQUARE COMMERCIAL BUILDING, Near Double Tree Hotel, Bur Dubai,
                Dubai, United Arab Emirates. <br>
                All rights Reserved. 2025 © YourWebsite.com
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</body>