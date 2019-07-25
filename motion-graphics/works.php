

<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Get the perfect logo design - or any design in over 90 categories!</title>
<meta name="description"  content="Animation Dok is a digital design agency specializing in branding, animation, mobile and web design and development." />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
 

</head>


<body class="page-template page-template-works page-template-works-php page page-id-23">

    <div class="app-content">
        <div class="main">
             <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>




<div class="works-wrap">
   <section class="applications">
        <div class="app-container"> 
            <div class="works__info mbpx-0 myport">
                <h2 class="page-title">  Our customers love their motion graphics.</h2>
                <p class="portfolioparagraph">Check out recent animation we’ve created for businesses like yours.</p>
            
                
            </div>
            <div class="tab-custom">
                        
              <ul class="tabbing-links">
                <li class="current" data-targetit="tabs-3danimation">3D Animation</li>
                  <li data-targetit="tabs-motiongraphics">2D Animation</li>
                  <li data-targetit="tabs-whiteboard">White Board</li>
                  <li data-targetit="tabs-explainer">Explainer Video</li>
                  
                  
                </ul>

                <div class="tabs tabs-3danimation current row m-app-slider no-gutters for-works-load loadmore3d">
                    <?php
                    $portfolio3d = $_SERVER['HTTP_HOST']; 
                    $portfolio3d = "includes/portfolio-3d.php"; 
                    include($portfolio3d); 
                    ?>
                </div>
                <div class="tabs tabs-motiongraphics row m-app-slider no-gutters for-works-load loadmorevideo">
                    <?php
                    $portfoliovideo = $_SERVER['HTTP_HOST']; 
                    $portfoliovideo = "includes/portfolio-video.php"; 
                    include($portfoliovideo); 
                    ?>
                </div>
                <div class="tabs tabs-whiteboard row m-app-slider no-gutters for-works-load loadmorewhiteboard">
                    <?php
                    $portfoliowhiteboard = $_SERVER['HTTP_HOST']; 
                    $portfoliowhiteboard = "includes/portfolio-whiteboard.php"; 
                    include($portfoliowhiteboard); 
                    ?>
                </div>
                <div class="tabs tabs-explainer row m-app-slider no-gutters for-works-load loadmoreexplainer">
                    <?php
                    $portfolioexplainer = $_SERVER['HTTP_HOST']; 
                    $portfolioexplainer = "includes/explainer-video.php"; 
                    include($portfolioexplainer); 
                    ?>
                </div>
          

                  <div class="cta">
                  <div class="container">
                  <div class="row">
                   <h3>Let’s conceptualize and design your idea <br>with creative professionals. <i class="same">Discuss With Our <a href="javascript:;" onclick="setButtonURL();"> Strategists</a></i></h3>
<a href="<?php echo $path;?>contact">Let’s Get Started</a> 

</div>
</div>
               </div> 
                

            </div>
        </div>
    </section>
</div>




<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">Let’s talk business</h2>
                        </div>
                        <h3 class="title">Services</h3>
<?php
$footerform = $_SERVER['HTTP_HOST']; 
$footerform = "includes/footer-form.php"; 
include($footerform); 
?>                         
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="social-info-wrap">

                        <div class="social-info">
                            <div class="content">
                                <h2 class="form-name">Contacts</h2>
                            </div>

                            <div class="social-flex-wrap">

                                <div class="hire-wrap">
                                    <h3 class="title">Hire</h3>
                                    <a href="mailto:order@animationdok.com" class="mail">order@animationdok.com</a><a
                                    class="phone" href="tel:++442033181217">+44 203 3181 217</a>
                                </div>
                                <div class="follow-wrap">
                                    <h3 class="title">Follow</h3>
                                    <ul>
                                     <li><a href="https://www.facebook.com/designdok/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="https://www.linkedin.com/company/design-dok"><i class="fa fa-linkedin"></i></a></li>
                                     <li><a href="https://dribbble.com/designdok" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                     <li><a href="https://www.instagram.com/designdok/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                                </div>
                                <div class="map">
                                  <ul>
                                      <li><a href="#" class="bluecolr">+44 203 3181 217</a></li>
                                      <li>39899 Balentine Drive, Newark, New Jersey, 94560, USA<br> <a href="https://goo.gl/maps/NP1C31dUhhYu3sMA8" style="font-weight: bold;">Go to location</a></li>
                                  </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div>     
        </div>
    </div>    
</section> 


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer-top.php"; 
include($footer); 
?>


   <section class="next-page">
          <div class="next-page-wrap">
              <a href="<?php echo $path;?>packages" class="next-page__link">
                  <div class="next-page__desc">Next stop</div>
                  <div class="next-page__title">Packages</div>
                 
              </a>
          </div>
          <div class="next-page-mask"></div>
          <p class="next-page__copy">
              <span>&copy; 2019 Animation Dok</span>
          </p>
      </section>


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>
