<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Asta Multimedia Tama | Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="icon" href="https://xportal.kokatto.com/img/icons/favicon-16x16.png" sizes="16x16" type="image/png">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- End of Bootstrap -->

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Hind|Tajawal" rel="stylesheet">
    <!-- End of Font -->

    <!-- bxSlider -->
    <script src="https://www.kokatto.com/assets/js/bxslider/jquery.bxslider-custom.js"></script>
    <link href="https://www.kokatto.com/assets/js/bxslider/jquery.bxslider.min.css" rel="stylesheet" />
    <!-- End of bxSlider -->

    <!-- masonry -->
    <script src="https://www.kokatto.com/assets/js/masonry/masonry.pkgd.min.js"></script>
    <script src="https://www.kokatto.com/assets/js/masonry/masonry-docs.min.js"></script>
    <!-- End of masonry -->

    <!-- aos -->
    <script src="https://www.kokatto.com/assets/js/aos/aos.js"></script>
    <link href="https://www.kokatto.com/assets/js/aos/aos.css" rel="stylesheet" />
    <!-- End of aos -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://www.kokatto.com/assets/js/flip/flip.min.js"></script>
    <script src="https://www.kokatto.com/assets/js/turnbox/turnBox.js"></script>

    <link href='https://www.kokatto.com/index.php?css=css_folder/style.v.1551701857' rel='stylesheet' type='text/css'>
    
</head>
<body>
    <div class="container-fluid no-padding">

        <header class="nav-menu-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 text-left no-padding-right-mobile">
                        <span class="hover-pointer" onclick="showMenu();">
                            <span class="open-menu-wrapper"><i class="fa fa-bars" aria-hidden="true"></i>
                            Menu</span>
                        </span>
                    </div>

                    <div class="col-xs-4 text-center">
                        <div class="nav-logo-wrapper"><a href="https://www.kokatto.com/"><img src="https://www.kokatto.com/assets/image/logo.png" class="img-responsive"></a></div>
                    </div>

                    <div class="col-xs-4 text-right no-padding-left-mobile">
                        <span class="hover-pointer" onClick="window.open('https://cportal.kokatto.com/login')">
                            <span>Login <i class="fa fa-sign-in" aria-hidden="true"></i></span>
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <div class="navigation-section default">
            <div class="navigation-wrapper">
                <div class="close-nagivation-wrapper" onclick="closeMenu()"><i class="fa fa-times" aria-hidden="true"></i></div>
                <div class="menu-wrapper">
                    <div class="menu-list menu-home"><a href="https://www.kokatto.com/">Home</a></div>
                    <div class="menu-list menu-products"><a href="https://www.kokatto.com/products">Products</a></div>
                    <div class="menu-list menu-services"><a href="https://www.kokatto.com/services">Services</a></div>
                    <div class="menu-list menu-team"><a href="https://www.kokatto.com/team">Team</a></div>
                    <div class="menu-list menu-career"><a href="https://www.kokatto.com/career">Career</a></div>
                    <div class="menu-list menu-contact"><a href="https://www.kokatto.com/contact">Contact</a></div>
                </div>
                <div class="menu-social-wrapper">
                    
                    
                    <a href="https://www.instagram.com/kokatto/" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-instagram.png"></a>  
                    
                    <a href="https://www.youtube.com/watch?v=1fx65pwyHbY" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-youtube.png"></a>   
                    
                    <a href="https://www.linkedin.com/company/kokatto" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-linkedin.png"></a> 
                    
                    
                </div>
            </div>
        </div>

        <script>
        function showMenu(){
            $(".navigation-section").removeClass("close-menu default").addClass("active-menu");
        }

        function closeMenu(){
            $(".navigation-section").removeClass("active-menu default").addClass("close-menu");
        }
        
        if("services"==""){$(".menu-home").addClass("active");}else{$(".menu-services").addClass("active");}
        console.log(".menu-list-services");
        
        

        $(document).click(function(e){
            console.log(e.target);
            if($(e).is('.open-menu-wrapper') ) {
            //closeMenu();
            console.log(e.target);
        }
    })
</script>

<content>
    

    
    <div class="services-header header-page-wrapper text-center" style="background: linear-gradient(to right, RGBA(0, 0, 0, 0.5), RGBA(0, 0, 0, 0.5)), url(https://www.kokatto.com/images/uploads/global/image_10.png) no-repeat center center; background-size: cover;">
        <div class="header-page">
            <div class="header-page-title">
                <p>Where Your Ideas Evolve </p>

                <p>Into Product</p>                 
            </div>
                <!-- <div class="header-page-info text-center">
                    In Kokatto, we understand the difficulty companies face in delivering their messages successfully to their customers. From a humble beginning in early 2014, we embarked on a journey to solve this problem. And now our clients enjoy a more effective and efficient way of communicating their messages across. Say hello, to the future of notifications!
                </div> -->
                <div class="kokatto-red-button" onclick="window.location.href='https://www.kokatto.com/estimate'">
                    Get A Quote <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>  
        </div>
        


        <div class="services-products-speciality-section">
            <div class="container">
                <div class="row homepage-team-title-wrapper">
                    <div class="col-md-3 no-padding-desktop speciality-slider-pager-container">
                        <div class="title-3">
                            Our Speciality<br/>
                            Services
                        </div>
                        <div>
                            <span id="speciality-pager-prev" class="speciality-pager-wrapper"></span>
                            <span id="speciality-pager-next" class="speciality-pager-wrapper"></span>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-8 no-padding speciality-slider-container">
                        <div class="col-md-offset-2 col-md-8 no-padding">
                            <div id="speciality-wraper">
                                
                                <div class="speciality-list" data-slide="0">
                                    <div class="speciality-list-icon"><img src="https://www.kokatto.com/images/uploads/global/api.png" class="img-responsive"></div>
                                    <div class="speciality-list-name">API based Development</div>
                                    <div class="speciality-list-description"><p>We develop API based application for you to easily access and analyze your data</p></div>
                                </div>
                                
                                <div class="speciality-list" data-slide="1">
                                    <div class="speciality-list-icon"><img src="https://www.kokatto.com/images/uploads/global/mobile-app-developing.png" class="img-responsive"></div>
                                    <div class="speciality-list-name">Mobile Application Development</div>
                                    <div class="speciality-list-description"><p>We are experts in Mobile Application Development (Android &amp; iOS)</p></div>
                                </div>
                                
                                <div class="speciality-list" data-slide="2">
                                    <div class="speciality-list-icon"><img src="https://www.kokatto.com/images/uploads/global/consult.png" class="img-responsive"></div>
                                    <div class="speciality-list-name">Tech Consultancy Services</div>
                                    <div class="speciality-list-description"><p>​Professional Technology Consultant Services, including IBM and AWS</p></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="services-products-list-section">
            <div class="container">
                <div class="title-1 text-center">
                    Here Are Some Of Our<br/>
                    Highlighted Project
                </div>

                
                
                <div class="row services-list" data-id="8" data-aos="fade-left">
                    <div class="col-md-6 no-padding services-list-image">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/Unilever.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/unilever_logo_png_%28service_project%29.png">
                            </div>
                            <div class="services-project-header-title">
                                Unilever: Bonus Prestasi web dashboard
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/net-logo_rsz.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_microsoft-sql-server-logo-png-11536003314pm60goufi1.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_windows-server-logo.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_5.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="65" data-aos="fade-right">
                    <div class="col-md-6 no-padding services-list-image float-right-desktop">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/BTN.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/bank_btn_logo-2.png">
                            </div>
                            <div class="services-project-header-title">
                                BTN Installment Program
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_5.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_3.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="71" data-aos="fade-left">
                    <div class="col-md-6 no-padding services-list-image">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/SystemZ.png">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/rsz_ibm_png19652.png">
                            </div>
                            <div class="services-project-header-title">
                                IBM Z Mainframe Server Consultancy Services
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_logo_zos.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_transparent_ibm_cics_logo_1.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_1280px-tivoli_software_logo.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="47" data-aos="fade-right">
                    <div class="col-md-6 no-padding services-list-image float-right-desktop">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/Ponimu.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/1280px-Logo_Ponimu.svg_.png">
                            </div>
                            <div class="services-project-header-title">
                                Ponimu - Legal Anime Video On Demand Application
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_14.1.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/kotlin_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/vuejs_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_5.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_spring-boot-logo.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_aws-logo-orig-1-1.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="9" data-aos="fade-left">
                    <div class="col-md-6 no-padding services-list-image">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/Foxlogger.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/fox_logger_logo_copy.png">
                            </div>
                            <div class="services-project-header-title">
                                Foxlogger GPS Tracker
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_5.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/ionic_logo_64.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="67" data-aos="fade-right">
                    <div class="col-md-6 no-padding services-list-image float-right-desktop">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/tez_laptop.png">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/tvi-default.png">
                            </div>
                            <div class="services-project-header-title">
                                Tez Ventura Indonesia - Accounting Web System
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_3.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="70" data-aos="fade-left">
                    <div class="col-md-6 no-padding services-list-image">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/Bringbax_572x400.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/logo_bringbax.png">
                            </div>
                            <div class="services-project-header-title">
                                Bringbax - Jasa Titip Application
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_14.1.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/kotlin_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/swift_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/angular_logo_final.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_aws-logo-orig-1-1.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="48" data-aos="fade-right">
                    <div class="col-md-6 no-padding services-list-image float-right-desktop">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/ONTA.jpg">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/unnamed.png">
                            </div>
                            <div class="services-project-header-title">
                                Onta - Online Travel Assistant
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_14.1.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/kotlin_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/swift_logo_64.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_5.png"></span>
                            
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/rsz_php_png26.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                
                
                <div class="row services-list" data-id="69" data-aos="fade-left">
                    <div class="col-md-6 no-padding services-list-image">
                        <img class="img-responsive" src="https://www.kokatto.com/images/uploads/services/buumi_laptop.png">
                    </div>
                    <div class="col-md-6 no-padding services-project-list-content">
                        <div class="services-project-header-wrapper">
                            <div class="services-project-header-logo">
                                <img src="https://www.kokatto.com/images/uploads/services/bumi_playscape_logo_copy.png">
                            </div>
                            <div class="services-project-header-title">
                                Buumi Playscape – Website Application
                            </div>
                        </div>
                        <div class="services-project-view-detail">
                            <div class="kokatto-red-button">
                                View Details <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="services-project-technology-used-title">
                            Technology Used
                        </div>
                        <div class="services-project-technology-used-list">
                            
                            
                            <span class="services-project-technology-used"><img src="https://www.kokatto.com/images/uploads/services/image_3.png"></span>
                            
                            
                        </div>
                    </div>
                </div>
                
                

            </div>
        </div>

        
        <div class="services-footer header-page-wrapper text-center" style="background: linear-gradient(to right, RGBA(0, 0, 0, 0.7), RGBA(0, 0, 0, 0.8)), url(https://www.kokatto.com/images/uploads/global/image_10.png) no-repeat center center; background-size: cover;">
            <div class="header-page">
                <div class="header-page-title">
                    <p>Already Have An Idea?<br>
                       Share With Us Now.</p>
                   </div>
                   
                   <div class="kokatto-red-button" onclick="window.location.href='https://www.kokatto.com/estimate'">
                    Get A Quote <i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
=======
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="icon">
    <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="apple-touch-icon">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('regna/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('regna/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick/slick-theme.css') }}">
  </head>
  <body id="page-service">
    @include('partials.nav')
    <main>
      <section id="services">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <h1>Our Speciality Services</h1>
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0">
              <div class="outerservice">
                <div>
                  <i class="far fa-handshake"></i>
                  <p>MICE</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-plane"></i>
                  <p>TRAVEL</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-box-open"></i>
                  <p>PRODUCT LAUNCHING</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fab fa-artstation"></i>
                  <p>MULTIMEDIA</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-project-diagram"></i>
                  <p>IT SOLUTION</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
                <div>
                  <i class="fas fa-poll"></i>
                  <p>ADVERTISING</p>
                  <p>Organizing Meeting, Incentive, Convention and Exhibition</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="product">
        <div class="container">
          <h1>Here Are Some Of Our Highlighted Project</h1>
          <div class="row" style="margin-top: 100px;">
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product1.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda fuga minima ipsam hic? Quo minus neque nulla vel alias animi et, repellat, consequuntur rerum blanditiis soluta eaque omnis? Impedit, necessitatibus.</p>
                  <button type="button" class="btn btn-info show-modal text-capitalize" data-toggle="modal" data-target="#product__self1">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self1" tabindex="-1" role="dialog" aria-labelledby="product__self1Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Product Name</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product1.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary mr-2">PHP</span><span class="badge badge-warning mr-2">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product2.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis tempora nesciunt aliquam aperiam eos recusandae repudiandae saepe, quam sed qui.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self2">
                    view detail
                  </button>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product3.png') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt modi ipsa accusamus alias corrupti ipsum quae tempora culpa tempore quos.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self3">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self3" tabindex="-1" role="dialog" aria-labelledby="product__self3Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product3.png') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On: <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product4.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem quia similique nesciunt eaque eius maxime saepe, tempore officia tempora.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self4">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self4" tabindex="-1" role="dialog" aria-labelledby="product__self4Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product4.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
            <div class="col-12">
              <figure>
                <img src="{{ asset('img/product5.jpg') }}" class="col-md-4" height="200" alt="Our Product">
                <figcaption class="col">
                  <p class="mb-2">Product Name</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ratione quas, inventore optio perspiciatis odio eaque nemo illo. Modi, repudiandae.</p>
                  <button type="button" class="btn btn-info text-capitalize" data-toggle="modal" data-target="#product__self5">
                    view detail
                  </button>
                  <div class="modal fade" id="product__self5" tabindex="-1" role="dialog" aria-labelledby="product__self5Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{ asset('img/product5.jpg') }}" height="200" alt="Our Product">
                          <p class="my-3">About This Product</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae saepe sunt odit magni, hic voluptatibus quaerat,
                            neque sint optio praesentium natus quidem in quos suscipit?</p>
                          <p>Created On <time class="text-success font-weight-bold">2017</time></p>
                          <p class="mb-0">Technology: <span class="badge badge-primary">PHP</span><span class="badge badge-warning">JS</span> </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </figcaption>
              </figure>
>>>>>>> 0ebfeb88b5e061ee40cad3fde8edffcfb32331e9
            </div>
          </div>
        </div>
<<<<<<< HEAD
        



        <div id="project-detail-modal" class="modal fade" role="dialog">
            
        </div>

        <script>
        var slider;
        $(window).on("load",function(){
            slider=$('#speciality-wraper').bxSlider({
                nextSelector: '#speciality-pager-next',
                prevSelector: '#speciality-pager-prev',
                nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
                prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                pager: false,
            //auto: true,
            mode: 'horizontal',
            speed: 1000,
            autoDelay: 1000,
            //minSlides: 2,
            infiniteLoop: false,
            hideControlOnEnd: true,
        });

            var $grid = $('.grid').masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
            });
        // layout Masonry after each image loads
        $grid.imagesLoaded().progress( function() {$grid.masonry();});
    });

        $(document).on("click",".services-project-view-detail .kokatto-red-button",function(){
            $.ajax({
                url: "https://www.kokatto.com/services/load_modal/"+$(this).closest(".services-list").attr("data-id"),
                success: function(result){
                //console.log(result);
                $("#project-detail-modal").empty().append(result);
                $("#project-detail-modal").modal("show");
=======
      </section>
      @include('partials.contact')
    </main>
    @include('partials.footer')
    <script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugin/slick/slick/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('regna/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('regna/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('regna/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('regna/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{ asset('regna/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{ asset('regna/contactform/contactform.js')}}"></script>
    <script src="https://kit.fontawesome.com/8e654f3295.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
      $(document).ready(function() {
        ScrollReveal().reveal("#product .row .col-12:nth-child(odd)", {
          reset: true,
          interval: 300,
          mobile: false,
          origin: 'left'
        });
        ScrollReveal().reveal("#product .row .col-12:nth-child(even)", {
          reset: true,
          mobile: false,
          interval: 300,
          origin: 'right'
        });
        $(".outerservice").slick({
          slidesToShow: 2,
          infinite: false,
          responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 1,
                slidesToScroll: 1
              }
>>>>>>> 0ebfeb88b5e061ee40cad3fde8edffcfb32331e9
            }
          ]
        });
<<<<<<< HEAD
            
        });

        $(document).on("click",".speciality-list",function(){slider.goToSlide($(this).attr("data-slide"));});
    </script>
</content>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-footer-wrapper">
                    <div class="logo-footer"><img class="img-responsive" src="https://www.kokatto.com/assets/image/logo.png"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12 no-padding footer-tagline-section">
                    <div class="footer-title">
                        Let's Make Great Things!
                    </div>
                    <div class="footer-article">
                        We are looking forward to grow your business with technology. If you have any question regarding your business, don’t hesitate to tell us!
                    </div>
                    <img class="img-responsive" src="https://www.kokatto.com/assets/image/license.png">
                </div>
                
                <div class="col-md-6 no-padding footer-address-section">
                    <div class="footer-title">
                        Address
                    </div>
                    <div class="footer-article">
                        <p>PT Kokatto Teknologi Global<br>
                           Menara Prima - 9th Floor<br>
                           Mega Kuningan, Setiabudi<br>
                           Jakarta Selatan - 12950</p>
                       </div>
                   </div>

                   <div class="col-md-6 no-padding footer-contact-section">
                    
                    <div class="footer-title">
                        Contact
                    </div>
                    <div class="footer-article">
                        
                        P : +6221 3972 3972<br/>
                        
                        E : support@kokatto.com<br/>
                        
                    </div>
                    <div class="footer-media-social">
                        
                        <a href="https://www.instagram.com/kokatto/" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-instagram.png"></a>
                        
                        <a href="https://www.youtube.com/watch?v=1fx65pwyHbY" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-youtube.png"></a>
                        
                        <a href="https://www.linkedin.com/company/kokatto" target="_blank"><img class="img-responsive" src="https://www.kokatto.com/images/uploads/global/social-linkedin.png"></a>
                        
                    </div>
                </div>
                
            </div>

            <div class="col-md-6">
                
                <form id="cform" method="post" action="https://www.kokatto.com/index.php/services"  enctype="multipart/form-data" >
                    <div class='hiddenFields'>
                        <input type="hidden" name="RET" value="https://www.kokatto.com/index.php/services" />
                        <input type="hidden" name="URI" value="services" />
                        <input type="hidden" name="return_url" value="global/send_mail" />
                        <input type="hidden" name="author_id" value="1" />
                        <input type="hidden" name="channel_id" value="10" />
                        <input type="hidden" name="entry_id" value="0" />
                        <input type="hidden" name="ACT" value="1" />
                        <input type="hidden" name="meta" value="LuF1SvSSkVkNlX5GqyR4wBmKzOSWvFUnBAtGPeWL+4L1whsVbfYGz2I5tdx6Ibf7mYZG5eQvz9xnL/uzZhrPzIBVGBYUwxG7paEH8YEV60DvCHc26dwnWpfZc+Zgcw1U3RKNfsic5sEDYWNBucaPfHGpr6Gs7PI0VZe21ODqo6xtcd+odjHvdaC3+98xH5c7cclT/J610MTtUXRf2iS4rNZaVMoCsnIycVK2DDdU9mCrqntSH336Min2heSgloFIx18KA0BChjvW9uGzt546hnq3lcv5wHj1QthA4XgJNN7feL80KSPuW0APU24v2suA9CpBNBqW2/NjnMOMM1qshULrtAscMpU1cofZCkSY89KvGBXLeFJ+0f1HCEuLI4xQk7U1pGHWsFIU8Jy6gmj1Kd8j9O0KTWX2G53RisDrIoqCenoiW3wMshXifJuFhTIv" />
                        <input type="hidden" name="return" value="global/send_mail" />
                        <input type="hidden" name="site_id" value="1" />
                        <input type="hidden" name="csrf_token" value="f8df748a4290ef1c98a47a49370d35e8b949865b" />
                    </div>


                    <form id="inquiry-form">
                        <input type="hidden" id="title" name="title">
                        <div class="form-group">
                            <input id="name" type="text" name="name" class="form-control" placeholder="Your Name (Required)" oninput="setTitle()" required>
                        </div>
                        <div class="form-group">
                            <input id="email" type="email" name="client_email" class="form-control" placeholder="Your Email (Required)" required>
                        </div>
                        <div class="form-group">
                            <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Your Message" rows="4" required></textarea>
                        </div>
                        <div class="form-group inquiry-submit-wrapper">
                            <button class="kokatto-red-button" onclick="">SEND MESSAGE <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </form>
                
            </div>
        </div>
    </div>

</footer>
<div class="copyright-section text-center">
    Copyright 2019 by Kokatto. All Rights Reserved
</div>
<a class="back-to-top"><i class="fa fa-angle-up"></i></a>
</div>

<script>
$(window).on("load",function(){AOS.init();});   


function setTitle(){
    var counter = 1;
    
    
    counter = 1+1;
    
    
    
    counter = 2+1;
    
    
    
    counter = 3+1;
    
    
    
    counter = 4+1;
    
    
    
    counter = 5+1;
    
    
    
    counter = 6+1;
    
    
    
    counter = 7+1;
    
    
    
    counter = 8+1;
    
    
    
    counter = 9+1;
    
    
    
    counter = 10+1;
    
    
    
    counter = 11+1;
    
    
    
    counter = 12+1;
    
    
    
    counter = 13+1;
    
    
    
    counter = 14+1;
    
    
    
    counter = 15+1;
    
    
    
    counter = 16+1;
    
    
    
    counter = 17+1;
    
    
    
    counter = 18+1;
    
    
    
    counter = 19+1;
    
    
    
    counter = 20+1;
    
    
    
    counter = 21+1;
    
    
    
    counter = 22+1;
    
    
    
    counter = 23+1;
    
    
    
    counter = 24+1;
    
    
    
    counter = 25+1;
    
    
    
    counter = 26+1;
    
    
    
    counter = 27+1;
    
    
    
    counter = 28+1;
    
    
    
    counter = 29+1;
    
    
    
    counter = 30+1;
    
    
    
    counter = 31+1;
    
    
    
    counter = 32+1;
    
    
    $("#title").attr("value",counter+"-"+$("#name").val());
    console.log($("#title").val());
}

$('.back-to-top').click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
});

$(window).scroll(function (event) {
    if( $(window).scrollTop() > $(window).height()+100 ){$(".back-to-top").fadeIn(500);}else{$(".back-to-top").fadeOut(500);}
});
</script>

</body>
</html>
=======
      });
    </script>
    <script src="{{ asset('regna/js/main.js')}}"></script>
  </body>
</html>
>>>>>>> 0ebfeb88b5e061ee40cad3fde8edffcfb32331e9
