<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from iqonicthemes.com/themes/profyl/canvas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 10:52:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Profyl - Personal Vcard Resume HTML Template" />
    <meta name="author" content="iqonicthemes.in" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Kashif kazmi Resume</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;Raleway:400,500,600,700,800" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Themify Fonts -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" href="css/style-customizer.css" />

    <!-- custom style -->
    <link rel="stylesheet" href="css/custom.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110149418-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110149418-1');
</script>

</head>

<body>

    <!-- loading -->

    <div id="loading" class="purple-bg">
        <div id="loading-center">
            <div data-loader="spinner"></div>
        </div>
    </div>

    <!-- loading End -->


    <!-- Header  -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar fixed-top navbar-expand-lg navbar-light white-bg">
                    <div class="col-md-3 purple-bg">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="col-md-9">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php $pagenameacco = basename($_SERVER['PHP_SELF']);?>
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item <?php if($pagenameacco=='index.php'){echo 'active';}?>">
                                    <a class="nav-link" data-type="page-transition" href="index.php">Home</a>
                                </li>
                                <li class="nav-item  <?php if($pagenameacco=='about-us.php'){echo 'active';}?>">
                                    <a class="nav-link" data-type="page-transition" href="about-us.php">About me</a>
                                </li>
                                <li class="nav-item  <?php if($pagenameacco=='resume.php'){echo 'active';}?>">
                                    <a class="nav-link" data-type="page-transition" href="resume.php">Resume</a>
                                </li>
                                <li class="nav-item  <?php if($pagenameacco=='services.php'){echo 'active';}?>">
                                    <a class="nav-link" data-type="page-transition" href="services.php">Services</a>
                                </li>
                               
                                <li class="nav-item  <?php if($pagenameacco=='contact-us.php'){echo 'active';}?>">
                                    <a class="nav-link" data-type="page-transition" href="contact-us.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>