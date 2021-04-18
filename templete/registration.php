<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Foxtar | Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img\favicon.png">

        <!-- Normalize CSS --> 
        <link rel="stylesheet" href="css\normalize.css">

        <!-- Main CSS -->         
        <link rel="stylesheet" href="css\main.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css\bootstrap.min.css">

        <!-- Animate CSS --> 
        <link rel="stylesheet" href="css\animate.min.css">

        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="css\font-awesome.min.css">
        
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="vendor\OwlCarousel\owl.carousel.min.css">
        <link rel="stylesheet" href="vendor\OwlCarousel\owl.theme.default.min.css">
        
        <!-- Main Menu CSS -->      
        <link rel="stylesheet" href="css\meanmenu.min.css">

        <!-- Datetime Picker Style CSS -->
        <link rel="stylesheet" href="css\jquery.datetimepicker.css">

        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="css\hover-min.css">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="css\select2.min.css">

        <!-- Nouislider Style CSS -->
        <link rel="stylesheet" href="vendor\noUiSlider\nouislider.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Modernizr Js -->
        <script src="js\modernizr-2.8.3.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Main Body Area Start Here -->
        <div id="wrapper">
            <?php require_once 'header.php' ?>
            
            <!-- Inner Page Banner Area Start Here -->
            <div class="pagination-area bg-secondary">
                <div class="container">
                    <div class="pagination-wrapper">
                        <ul>
                            <li><a href="index.htm">Home</a><span> -</span></li>
                            <li>Registration</li>
                        </ul>
                    </div>
                </div>  
            </div> 
            <!-- Inner Page Banner Area End Here -->          
            <!-- Registration Page Area Start Here -->
            <div class="registration-page-area bg-secondary section-space-bottom">
                <div class="container">
                    <h2 class="title-section">Registration</h2>
                    <div class="registration-details-area inner-page-padding">
                        <form id="personal-info-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="first-name">First Name *</label>
                                        <input type="text" id="first-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="last-name">Last Name *</label>
                                        <input type="text" id="last-name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="form-group">
                                        <label class="control-label" for="company-name">Company Name</label>
                                        <input type="text" id="company-name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="email">E-mail Address *</label>
                                        <input type="text" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="phone">Phone *</label>
                                        <input type="text" id="phone" class="form-control">
                                    </div>
                                </div>
                            </div>                                  
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                                    <div class="form-group">
                                        <label class="control-label" for="country">Country</label>
                                        <div class="custom-select">
                                            <select id="country" class='select2'>
                                                <option value="0">Select your country
                                                <option value="1">Bangladesh
                                                <option value="2">Spain
                                                <option value="3">Belgium
                                                <option value="3">Ecuador
                                                <option value="3">Ghana
                                                <option value="3">South Africa
                                                <option value="3">India
                                                <option value="3">Pakistan
                                                <option value="3">Thailand
                                                <option value="3">Malaysia
                                                <option value="3">Italy
                                                <option value="3">Japan
                                                <option value="4">Germany
                                                <option value="5">USA
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                                    <div class="form-group">
                                        <label class="control-label" for="town-city">Town / City</label>
                                        <input type="text" id="town-city" class="form-control">
                                        
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="form-group">
                                        <label class="control-label">Address line 1</label>
                                        <input type="text" id="address-line1" class="form-control">
                                        <label class="control-label">Address line 2</label>
                                        <input type="text" id="address-line2" class="form-control">
                                    </div>
                                </div>                                      
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="district">District *</label>
                                        <div class="custom-select">
                                            <select id="district" class='select2'>
                                                <option value="0">Select Your District
                                                <option value="1">Dhaka
                                                <option value="2">Rajshahi
                                                <option value="4">Chittagong
                                                <option value="5">GAZIPUR
                                                <option value="6">GOPALGANJ
                                                <option value="7">JAMALPUR
                                                <option value="8">KISHOREGONJ
                                                <option value="9">MADARIPUR
                                                <option value="10">MANIKGANJ
                                                <option value="11">MUNSHIGANJ
                                                <option value="12">MYMENSINGH
                                                <option value="13">NARAYANGANJ
                                                <option value="14">NARSINGDI
                                                <option value="15">NETRAKONA
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                                    <div class="form-group">
                                        <label class="control-label" for="postcode">Postcode / ZIP</label>
                                        <input type="text" id="postcode" class="form-control">
                                    </div>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                                    <div class="pLace-order">
                                        <button class="update-btn disabled" type="submit" value="Login">Submit</button>
                                    </div>
                                </div>
                            </div> 
                        </form>                      
                    </div> 
                </div>
            </div>
            <!-- Registration Page Area End Here -->
            <?php require_once 'footer.php' ?>
        </div>
        <!-- Main Body Area End Here -->
        <!-- jquery-->  
        <script src="js\jquery-2.2.4.min.js" type="text/javascript"></script>

        <!-- Plugins js -->
        <script src="js\plugins.js" type="text/javascript"></script>
        
        <!-- Bootstrap js -->
        <script src="js\bootstrap.min.js" type="text/javascript"></script>

        <!-- WOW JS -->     
        <script src="js\wow.min.js"></script>

        <!-- Owl Cauosel JS -->
        <script src="vendor\OwlCarousel\owl.carousel.min.js" type="text/javascript"></script>
        
        <!-- Meanmenu Js -->
        <script src="js\jquery.meanmenu.min.js" type="text/javascript"></script>

        <!-- Srollup js -->
        <script src="js\jquery.scrollUp.min.js" type="text/javascript"></script>

         <!-- jquery.counterup js -->
        <script src="js\jquery.counterup.min.js"></script>
        <script src="js\waypoints.min.js"></script>

        <!-- Nouislider Js -->
        <script src="vendor\noUiSlider\nouislider.min.js" type="text/javascript"></script>

        <!-- Isotope js -->
        <script src="js\isotope.pkgd.min.js" type="text/javascript"></script>

        <!-- Select2 Js -->
        <script src="js\select2.min.js" type="text/javascript"></script>
        
        <!-- Custom Js -->
        <script src="js\main.js" type="text/javascript"></script>

    </body>
</html>
