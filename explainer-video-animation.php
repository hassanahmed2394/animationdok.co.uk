
<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Explainer-Video-Animation</title>
<meta name="description"  content="Animation Dok is a digital design agency specializing in animation" />

     
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

<section class="top-home myhome whiteClr" style="background-image: url(assets/images/explainer-video-animation.png);background-position: 50% 50%;
    background-size: cover;">

    <div class="container-fluid">
    <div class="row">
    <div class="col-12 mobile-dog">
    <img src="assets/images/mobile_dog.png">
    </div>
    <div class="col-lg-6 height-dog">
        <div class="content" id="test">
        <h1 class="title for-anim-1">
        <span><i>Supreme explainer videos for your service or products.</i></span>

        </h1>
        <p class="for-anim-2"><span>If a picture tells a 1000 words, imagine what an explainer video can do for your product or service.</span></p>
        <ul class="myticks for-anim-3">
          <li>100% original content</li>
          <li>Full copyright ownership</li>
          <li>Prioritized support</li>
        </ul>


        <div class="bottom">
        <span class="watch-button" id="hire-us"></span> &nbsp;
        <a class="first-link" href="<?php echo $path;?>contact.php">   Let’s sketch and animate together.</a>
        <img class="" src="assets/images/arrow_new.svg">
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
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <ul>
        <li>
          <p>
            We capture every animation styles & types.
          </p>
        </li>
        <li class="margin-top-20">
          <ul class="subimages">
            <li>
              <img src="assets/images/animationicon1.png">
              <h6>Isometric</h6>
            </li>
            <li>
              <img src="assets/images/animationicon2.png">
              <h6>Stop Motion</h6>
            </li>
            <li>
              <img src="assets/images/animationicon3.png">
              <h6>Infographics</h6>
            </li>
            <li>
              <img src="assets/images/animationicon4.png">
              <h6>Presentations</h6>
            </li>
            <li>
              <img src="assets/images/animationicon5.png">
              <h6>Social Media</h6>
            </li>
            
          </ul>
        </li>
        <li>
          <span>Let’s make a masterpiece.</span>
          <a href="<?php echo $path;?>contact" class="pur-bg" >Make a Video Now.</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</section>


    <section class="applications">
        <div class="app-container"> 
            <div class="works__info mbpx-0 myport">
                <h2 class="page-title"> Our customers love their motion graphics.</h2>
                <p class="portfolioparagraph">Check out recent animation we’ve created for businesses like yours.</p>
            
                
            </div>
            <div class="tab-custom">
                        
              <ul class="tabbing-links">
                  <li class="current" data-targetit="tabs-3danimation">Explainer Vdeo</li>
                  
                  
                </ul>

             
                <div class="tabs tabs-3danimation current row m-app-slider no-gutters for-works-load loadmore3d">
                    <?php
                    $portfolio3d = $_SERVER['HTTP_HOST']; 
                    $portfolio3d = "includes/explainer-video.php"; 
                    include($portfolio3d); 
                    ?>
                </div>
               
              <div class="cta">
                  <div class="container">
                  <div class="row">
                   <h3>Let’s animate a masterpiece with our creative professionals.<br> <i class="same">Discuss With Our <a href="javascript:;" onclick="setButtonURL();"> Strategists</a></i></h3>
<a href="<?php echo $path;?>contact">Make a Video Now</a> 

</div>
</div>
               </div> 
               

            </div>
        </div>
    </section>
    <section class="mypackages">
    <div class="container">
        <div class="row">
            <div class="left information">
                <h2 class="title myheading">My Packages</h2>
                    
                <p class="mytext">Animation Dok can help visualize even the craziest ideas converting them into elegant designs, awesome experiences and catchy brands.</p>
            </div>
            <div class="tab-custom">
                <ul class="tabbing-links">
                  <li class="current" data-targetit="tabs-vdpackages">Explainer Vdeo </li>
                </ul>
            
            
                

                <div class="tabs current tabs-vdpackages row current">
                <?php
                $packagesexplainervideo = $_SERVER['HTTP_HOST']; 
                $packagesexplainervideo = "includes/packages-explainer-video.php"; 
                include($packagesexplainervideo); 
                ?>
                </div>


             


            </div>

        </div>
    </div>
</section>

<section class="books">
                <div class="container">
                    <div class="content"><h2 class="title">Our Process</h2>
                        <div class="border"></div>
                        <p class="text"><span>To ensure each project is getting nothing but the best, we make sure we follow a set of rules that
keep us on track in terms of results.</span></p>
                    </div>
                    <div class="list">
                        <div id='#img-hover' class="row m-book-slider">
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-script.svg">
                                    </a>
<!--                                    <div class="image book1 img-hover"></div>-->
                                    <h3 class="title">Script</h3>
                                    <p class="description">Our team of creative masterminds first lay down the strategy to the creative script development for your motion graphic design project.
                                        </p>
                                    <div class="book-links">
                                        <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-storyboard.svg">
                                    </a>
<!--                                    <div class="image book2 img-hover"></div>-->
                                    <h3 class="title">Storyboard</h3>
                                    <p class="description">we move into storyboards and animatics, where the animation truly starts to take shape. It contain four to six rough stills with the corresponding dialogue under each frame.

</p>
                                    <div class="book-links">
                                        <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-design.svg">
                                    </a>
<!--                                    <div class="image book3 img-hover"></div>-->
                                    <h3 class="title">Design</h3>
                                    <p class="description">After the rough animatic, we develop and flesh out characters, background images, and props for the video. It faithfully presents the look and feel of the final animation.

</p>
                                <div class="book-links">
                                    <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-animation-01.svg">
                                    </a>
<!--                                    <div class="image book3 img-hover"></div>-->
                                    <h3 class="title">Animation</h3>
                                    <p class="description">We add the supple sinews and skin to make it whole. Characters that jumped jerkily from pose to pose now move smoothly, full of life.
</p>
                                <div class="book-links">
                                    <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                </div>
                                </div>
                            </div>
<div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-music-sound-01.svg">
                                    </a>
<!--                                    <div class="image book3 img-hover"></div>-->
                                    <h3 class="title">Music Sound Effects
</h3>
                                    <p class="description">Depending on the project, music is either commissioned as an original work from a composer or selected from library sources.



</p>
                                <div class="book-links">
                                    <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="#">
                                        <img class="book-size" src="assets/images/process-render-01.svg">
                                    </a>
<!--                                    <div class="image book3 img-hover"></div>-->
                                    <h3 class="title">Render/Deliver</h3>
                                    <p class="description">After all that, the finalized video is exported and safely delivered into the client’s hands. we take pride in the process of our craft, leaving nothing to doubt.



</p>
                                <div class="book-links">
                                    <a href="javascript:;" onclick="setButtonURL();">Let's discuss</a>
                                        <a href="tel:442033181217">+44 203 3181 217</a>
                                </div>
                                </div>
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
                  <p class="text-center wow fadeInDown">Our team of experts focus on client and customer satisfaction as the ultimate goal for our projects. This is one of the many reasons why our work is globally acclaimed and recognized.</p>
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
                            <h2 class="form-name">Video for any mission.</h2>
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
