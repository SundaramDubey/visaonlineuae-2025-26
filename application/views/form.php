<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Visa UAE"; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css'); ?>">
    <link rel="stylesheet" href="script_form.js">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

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

    <form id="vForm" name="vForm" action="#" method="post" enctype="multipart/form-data">
        <div class="country-list" id="countryList">Loading countries...</div>
        <div class="form-section">
            <h3>General Details</h3>

            <div class="form-row">
                <div class="form-group ">
                    <label for="nationality_id">Nationality</label>
                    <select name="nationality_id" id="nationality_id" aria-label="Nationality">
                        <option value="">Select Nationality</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="git_type_id">Visa Type</label>
                    <select name="git_type_id" id="git_type_id" aria-label="Visa Type">
                        <option value="">Please Select</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="address1">Your Current Address</label>
                    <input type="text" id="address1" name="address1" placeholder="Current Address" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City" />
                </div>

                <div class="form-group">
                    <label for="state">State / Province</label>
                    <input type="text" id="state" name="state" placeholder="State / Province" />
                </div>

                <div class="form-group">
                    <label for="country_isd_code">Country Code</label>
                    <select name="country_isd_code" id="country_isd_code" aria-label="Code">
                        <option value="">Country Code</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="text" id="mobile" name="mobile" placeholder="Mobile Number" />
                </div>

                <!-- <div class="form-group">
                    <label>
                        <input type="checkbox" name="same_as" id="same_as" checked />
                        Same as WhatsApp Number
                    </label>
                </div> -->

                <div class="form-group">
                    <label for="whatsapp_isd_code">WhatsApp Country Code</label>
                    <select name="whatsapp_isd_code" id="whatsapp_isd_code" aria-label="WhatsApp Country Code">
                        <option value="">Country Code</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="whatsapp_number">WhatsApp Mobile No.</label>
                    <input type="text" id="whatsapp_number" name="whatsapp_number" placeholder="WhatsApp Number" />
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="start_date_day">Travel Date</label>
                    <div class="select-group">
                        <select name="start_date_day" id="start_date_day" aria-label="Day">
                            <option value="">Day</option>
                        </select>
                        <select name="start_date_month" id="start_date_month" aria-label="Month">
                            <option value="">Month</option>
                        </select>
                        <select name="start_date_year" id="start_date_year" aria-label="Year">
                            <option value="">Year</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="email_id">Your Email</label>
                <input type="email" id="email_id" name="email_id" placeholder="demo@example.com" />
            </div>
        </div>

        <div class="form-section">
            <h3>Passport Details</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" />
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="personal_dob_day">Date of Birth</label>
            <div class="select-group">
                <select name="personal_dob_day" id="personal_dob_day" aria-label="Day">
                    <option value="">Day</option>
                </select>
                <select name="personal_dob_month" id="personal_dob_month" aria-label="Month">
                    <option value="">Month</option>
                </select>
                <select name="personal_dob_year" id="personal_dob_year" aria-label="Year">
                    <option value="">Year</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="Passport_no">Passport No.</label>
                <input type="text" id="Passport_no" name="Passport_no" placeholder="Passport No." />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="passport_expiry_day">Passport Expiry Date</label>
                <div class="select-group">
                    <select name="passport_expiry_day" id="passport_expiry_day" aria-label="Day">
                        <option value="">Day</option>
                    </select>
                    <select name="passport_expiry_month" id="passport_expiry_month" aria-label="Month">
                        <option value="">Month</option>
                    </select>
                    <select name="passport_expiry_year" id="passport_expiry_year" aria-label="Year">
                        <option value="">Year</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit">Submit Applicant</button>
        <button type="submit">Add Another Person</button>
    </form>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>