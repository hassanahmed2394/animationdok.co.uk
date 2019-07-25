
<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Beautiful interactive website designs for your business.</title>
<meta name="description"  content="Great design makes user experiences delightful — but good looks aren’t enough. To bring your vision to life, you need innovative strategy and expert code." />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
 

</head>

<body class="home blog services_pages">

    <div class="app-content">
      <div class="main">

        <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>


<section class="top-home myhome">

    <div class="container-fluid">
    <div class="row">
    <div class="col-12 mobile-dog">
    <img src="assets/images/mobile_dog.png">
    </div>
    <div class="col-lg-6 height-dog">
        <div class="content" id="test">
        <h1 class="title for-anim-1">
        <span><i>Beautiful interactive website designs for your business</i></span>

        </h1>
        <p class="for-anim-2"><span>Great design makes user experiences delightful — but good looks aren’t enough. To bring your vision to life, you need innovative strategy and expert code.</span></p>
        <ul class="myticks for-anim-3">
          <li>A custom-designed website - Starting at  $469</li>
          <li>Dozens of design concepts to explore</li>
          <li>Full copyright and production ready files</li>
          <li>100% money back guarantee</li>
        </ul>

           
        <div class="bottom">
        <span class="watch-button" id="hire-us"></span> &nbsp;
        <a class="first-link" href="<?php echo $path;?>contact.php">  Let’s Discover and Build together.</a>
        <img class="" src="assets/images/arrow_new.svg">
        </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="fullwrap">
            <div class="mybanslider">
                <div class="item">
                    <figure>
                        <img src="assets/images/web_banner.png">
                    </figure>
                </div>
                
            </div>
        </div>
        
    </div>



    </div>
    </div>

<div class="home__bottom-bar">
<!-- <div class="mouse"></div> -->



<div class="arrow-down hvr-wobble-vertical">
<svg width="13px" height="29px" viewBox="0 0 13 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g id="Combined-Shape" fill="#000000">
<path d="M16.2658092,13.5684176 L13.0378861,10.3404945 L14.4001175,8.97826304 L18.559623,13.1377686 L18.6324343,13.0649573 L19.9946658,14.4271887 L19.9218545,14.5 L19.9946658,14.5728113 L18.6324343,15.9350427 L18.559623,15.8622314 L14.4001175,20.021737 L13.0378861,18.6595055 L16.2024879,15.4949037 L-7,15.4949037 L-7,13.5684176 L16.2658092,13.5684176 Z" transform="translate(6.500000, 14.500000) rotate(90.000000) translate(-6.500000, -14.500000) "></path>
</g>
</g>
</svg>
</div>

</div>



<div class="ipadt"></div>

</section>

<section class="designunigue topnegative">
  <div class="container-fluid">
    <div class="row">
      <ul>
        <li>
          <p>It's not the code that counts. It's the <strong>impact</strong>.
          </p>
        </li>
        <li>
          <ul class="subimages">
            <li>
              <img src="assets/images/webicon1.png">
              <h6>Wordpress</h6>
            </li>
            <li>
              <img src="assets/images/webicon2.png">
              <h6>Opencart</h6>
            </li>
            <li>
              <img src="assets/images/webicon3.png">
              <h6>Shopify</h6>
            </li>
            <li>
              <img src="assets/images/webicon4.png">
              <h6>PHP</h6>
            </li>
            <li>
              <img src="assets/images/webicon5.png">
              <h6>Custom Solution</h6>
            </li>
            
          </ul>
        </li>
        <li>
          <span>Let’s Envision and Build together.</span>
          <a href="<?php ?>" class="pur-bg" >Let’s Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</section>
            
    <section class="applications">
        <div class="app-container"> 
            <div class="works__info mbpx-0 myport">
                <h2 class="page-title">  Our customers love their web designs</h2>
                <p class="portfolioparagraph">Check out recent web page designs we’ve created for businesses like yours.</p>
            
                
            </div>
            <div class="tab-custom">
                        
            

                <div class="tabs tabs-logodesign current row m-app-slider no-gutters for-works-load">
                    <?php
                    $portfoliologo = $_SERVER['HTTP_HOST']; 
                    $portfoliologo = "includes/portfolio-web.php"; 
                    include($portfoliologo); 
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
<section class="mypackages">
    <div class="container">
        <div class="row">
            <div class="left information marginbtm40">
                <h2 class="title myheading">My Packages</h2>
                    
                <p class="mytext">DesignDok can help visualize even the craziest ideas converting them into elegant designs, awesome experiences and catchy brands.</p>
            </div>
            <div class="tab-custom">
            
            
                <div class="tabs tabs-ldpackages current row">
                <?php
                $packageslogo = $_SERVER['HTTP_HOST']; 
                $packageslogo = "includes/packages-webdesign.php"; 
                include($packageslogo); 
                ?>
                </div>

                 
               

            </div>

        </div>
    </div>
</section>

<div class="bggray text-center">
<section class="section-padding qualities">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4  class="wow fadeInDown">Professionally Proven Worldwide</h4>
                <h3  class="wow fadeInDown">Creative ideas from real people</h3>
                  <p class="text-center wow fadeInDown">We’ll ask users what they want and analyze their behaviors to reveal real opportunities for your business. We question every assumption and validate every idea so you make just-right investments, every time.</p>
            </div>
        </div>
        
        <div class="row margin-bottom-20 margin-top-20 quick-contact-slider">
            
            <div class="col has-border wow fadeInLeft" data-wow-delay="0.2s">

                <div class="quality">
                    
                       <div class="quality-img"><img src="https://designeminent.com/img/awards/constant-client-coordination.svg"></div>
                <h4>Constant Client Coordination</h4>

                </div>

             
            </div>
            <div class="col has-border wow fadeInLeft" data-wow-delay="0.2s">
                <div class="quality">
                    
                       <div class="quality-img"><img src="https://designeminent.com/img/awards/supreme-customer-satisfaction.svg"></div>
                <h4>Supreme Customer Satisfaction</h4>

                </div>
            </div>
            <div class="col has-border wow fadeInLeft" data-wow-delay="0.3s">
               <div class="quality">
                    
                       <div class="quality-img"><img src="https://designeminent.com/img/awards/100percent-ownership-rights.svg"></div>
                <h4>100% Ownership Rights</h4>

                </div>
            </div>
            <div class="col has-border wow fadeInLeft" data-wow-delay="0.4s">
               <div class="quality">
                    
                       <div class="quality-img"><img src="https://designeminent.com/img/awards/secure-money-back-guarantee.svg"></div>
                <h4>Secure Money Back Guarantee</h4>

                </div>
            </div>
            <div class="col wow fadeInLeft" data-wow-delay="0.5s">
                <div class="quality">
                    
                       <div class="quality-img"><img src="https://designeminent.com/img/awards/industry-proven-professionals.svg"></div>
                <h4>Industry Proven Professionals</h4>

                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="section-padding call-actions  wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="row tetleft">

                    
                        <div class="col-md-3">
                            <h2 class="text-left">Call us and now and discuss your business with our experts today.</h2>

                            <div class="slash slash2"></div>
                           
                        </div>

                        <div class="col-md-4 phone-div">

                             <i class="fa  fa-mobile-phone"></i>
                                    
                                    <h3 class="text-left">

                                    <span>Call us</span>
                                    +44 203 3181 217</h3>
<div class="slash"></div>
                           
                        </div>


                        <div class="col-md-5 mail">

                             <i class="fa  fa-envelope-open-o"></i>
                                    
                                    <h3 class="text-left">
                                   
                                    <span>Discuss your Ideas</span>
                                   order@animationdok.co.uk</h3>

                           
                        </div>



  <div class="col-md-3" style="display: none;">

                             <i class="fa  fa-commenting-o"></i>
                                    
                                    <h3 class="text-left">
                                   
                                    <span>Call Toll Free</span>
                                    +44 203 3181 217</h3>
 
                           
                        </div>


                      
                       
                    </div>
                </section>
            </div>
        </div>
    </div>
</section> </div>


            <section class="testimonials">
            
                 <h3 class="title d-none d-sm-block">Testimonials</h3> 
                <p> Trusted by thousands of brands from every industry.</p>
                <div class="content">
                  <div style="display: none;" class="dots-url" data-url="Logo"></div>
                  <div style="display: none;" class="dots-url" data-url="Web Design"></div>
                  <div style="display: none;" class="dots-url" data-url="Branding"></div>
                  <div style="display: none;" class="dots-url" data-url="Mobile App"></div>
                  <div style="display: none;" class="dots-url" data-url="Content"></div>
                  <div style="display: none;" class="dots-url" data-url="Video"></div>
                  <div style="display: none;" class="dots-url" data-url="SEO"></div>
                  <div class="phrases">

                    
                        <div class="">
                             <div class="phrase-inner">
                            <div>
                                <figure style="background-image: url(assets/images/testi-3.jpg);"></figure>
                                <p class="phrase">The Animation Dok animation team was very easy to work with and responsive. They went out of his way to ensure I got the video completed in time for an important meeting and did a wonderful job conveying the changes I requested to the art team all along the way!
                                </p>
                            <div class="who">
                                <div class="avatar">
                                                  BG               
                                    </div>
                                <span class="name"> Bella Green </span>
                            </div>
                            </div>
                            <div>
                            <figure style="background-image: url(assets/images/testi-2.jpg);"></figure>
                                <p class="phrase">
                              
I was fortunate enough to find Animation Dok by responding to an email I received. After they successfully completed the first two (2) videos I was so happy with their work. I did 9 more videos for a total of 11. I'm already planning my next 12 projects. These guys are amazing with Mark at the helm. They will have me as a client for as long as they offer the service.

                                </p>
                            <div class="who">
                                <div class="avatar">DA</div>
                                <span class="name">David Agusta</span>
                            </div>
                            </div>
                            <div>
                              <figure style="background-image: url(assets/images/testi-1.jpg);"></figure>
                                <p class="phrase">
                      Animation Dok did impress me by their professionalism, competency and responsiveness. They listened to my needs and took all my comments immediately into consideration. These days I'm almost used to bad client Service but Animation Dok (I dealt with Mark) really made me feel like "Client is King"! I can only recommend Animation Dok and I#m grateful for this experience - well done!!
                                </p>
                            <div class="who">
                                <div class="avatar">RD </div>
                                <span class="name">Robert Dobay </span>
                            </div>
                            </div>
                                </div>
                        </div>
                        

                                        </div>  
                </div>
            </section>


<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">We don’t just build it for you. We build it with you.</h2>
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
                                    <a href="mailto:order@animationdok.co.uk" class="mail">order@animationdok.co.uk</a><a
                                    class="phone" href="tel:++442033181217">+44 203 3181 217</a>
                                </div>
                              
                                <div class="map">
                                  <img src="assets/images/animation_banner.gif">
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
              <a href="<?php echo $path;?>works" class="next-page__link">
                  <div class="next-page__desc">Next stop</div>
                  <div class="next-page__title">Portfolio</div>
                 
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
