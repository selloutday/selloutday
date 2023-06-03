<?php
echo
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>SelloutDay - Unlimited Offer</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .rounded-button {
            margin-top:20px;
            display: inline-block;
            background-color: #4CAF50; /* Green background color */
            border: none; /* Remove default border */
            color: white; /* Text color */
            text-align: center; /* Center text horizontally */
            text-decoration: none; /* Remove default text decoration */
            font-size: 16px; /* Font size */
            padding: 10px 20px; /* Padding */
            border-radius: 20px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Transition effect for hover */
        }

        .rounded-button:hover {
            background-color: #43a756; /* Darker green background color on hover */
        }

        .whatsapp-icon {
            vertical-align: middle; /* Align icon vertically */
            margin-right: 5px; /* Add spacing between icon and text */
        }

        .button-container {
            text-align: center; /* Center the button */
        }


    </style>

<script>
    function openWhatsApp(text) {
      var phoneNumber = "917034333356";
      var url = "https://api.whatsapp.com/send?phone=" + phoneNumber+"&text="+text;
      window.open(url);
    }

    function openFacebookPage() {
      window.open("https://www.facebook.com/profile.php?id=100092179158120", "_blank");
    }
  </script>
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <!-- header -->
    <header>
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 d-flex flex-wrap justify-content-between">
                        <div class="contact-box">
                           
                            <span> <a href="#" onclick="openWhatsApp('hi'); return false;"><i class="fas fa-phone" style="font-size:14px"></i> +91 7034333356</a></span>
                        </div>
                        <div class="social-box">
                            <span><a href="#" onclick="openFacebookPage(); return false;"><i class="fab fa-facebook" style="font-size:20px"></i></a></span>
                            <span><a href="#" onclick="openWhatsApp('hi'); return false;"><i class="fab fa-whatsapp" style="font-size:20px"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </header>


    <!-- food area -->
    <section class="food-area  popular-dishes-area padding-top-110 padding-bottom-110">
      
        <div class="container">
        <div class="common-title-area text-center padding-bottom-50">
                <h3>Sell Out Day</h3>
           
                <br>
                <h6>വാട്സ്ആപ്പ് വഴിയായിരിക്കും എല്ലാ ഓർഡറുകളും സ്വീകരിക്കുക</h6>
            </div>
            
            <!-- main-content -->
            <div class="tab-content" id="nav-tabContent-1">

                <!-- food 1 -->
                <div class="tab-pane fade show active" id="food1" role="tabpanel" aria-labelledby="food1-tab">
                    <div class="row">
                        
                     <?php
                          foreach($homedata as $item){
                       
                            echo "<div class='col-xl-3 col-lg-3 col-md-6 wow fadeInUp' data-wow-delay='.6s' onclick=\"openWhatsApp('" . htmlspecialchars('Hi,'.$item->title, ENT_QUOTES) . " എന്ന പ്രൊഡക്ടിനെ കുറിച്ച് കൂടുതൽ വിവരങ്ങൾ പറയാമോ ?')\">";
                            echo "<div class='single-dishes'>";
                            echo "<div class='dish-img'>";
                            echo "<img src='https://api.selloutday.in/alison/product/".$item->thumpid.".jpg' style='width: 200px;height:200px' alt=''>";
                            echo "</div>";
                            echo "<div class='dish-content'>";
                            echo "<h5 style='font-size:18px'> ".$item->title."</h5>";
                             
                            echo "<span class='price'>MRP : <s style='color:red'>₹".$item->offerprice."</s> ₹".$item->offerprice."</span>";
             
                            echo "</div>";
                            echo "<span class='badge badge-bg-color'>new</span>";
                         
                            echo "<div class='button-container'>";
                            echo "<a href='#' class='rounded-button' onclick=\"openWhatsApp('" . htmlspecialchars('Hi,'.$item->title, ENT_QUOTES) . " എന്ന പ്രൊഡക്ടിനെ കുറിച്ച് കൂടുതൽ വിവരങ്ങൾ പറയാമോ ?')\" return false;>";
                            echo "<i class='fab fa-whatsapp whatsapp-icon' style='font-size:30px'></i>";
                            echo "ഓർഡർ ചെയ്യാം";
                            echo "</a>";
                            echo "</div>";
                            echo "</div></div>";
                        }

                      ?>
                    </div>
                </div>
            </div>
        </div>
 
    </section>



 

    <!-- ToTop Button -->
    <button class="scrollup scrollup2"><i class="fas fa-angle-up"></i></button>

    <!-- Javascript Files -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/easing.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
 
</html>