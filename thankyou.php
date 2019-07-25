

<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Thank You</title>
<meta name="description"  content="Animation Dok is a digital design agency specializing in animation" />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
  <style>
     
     .border{margin:40px auto !important;}
 </style>

</head>


<body class="home blog">

    <div class="app-content">
        <div class="main">
            
        <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>



<section class="services-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2> Congratulations! </h2>
                <div class="border"></div>
                <h1 class=" cust-top text-center mb5">
                   You've Signed up, For Further Assistance:.
                </h1> 
                 <a href="javascript:;" onclick="setButtonURL();" class="gotohome mb5">Start Live Chat</a>
            </div>

        </div>
        </div>
    </div>
</section>



<!--<section class="contacts">-->
<!--    <div class="container">-->
<!--        <div class="contacts-wrap">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="contact-form">-->
<!--                        <div class="content">-->
<!--                            <h2 class="form-name">Let’s design together</h2>-->
<!--                        </div>-->
<!--                        <h3 class="title">Services</h3>-->

//                       <?php
// $footerform = $_SERVER['HTTP_HOST']; 
// $footerform = "includes/footer-form.php"; 
// include($footerform); 
// ?>                         
<!--                    </div>  -->
<!--                </div>-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="social-info-wrap">-->

<!--                        <div class="social-info">-->
<!--                            <div class="content">-->
<!--                                <h2 class="form-name">Contacts</h2>-->
<!--                            </div>-->

<!--                            <div class="social-flex-wrap">-->

<!--                                <div class="hire-wrap">-->
<!--                                    <h3 class="title">Hire</h3>-->
<!--                                    <a href="mailto:order@animationdok.co.uk" class="mail">order@animationdok.co.uk</a><a-->
<!--                                    class="phone" href="tel:++442033181217">+44 203 3181 217</a>-->
<!--                                </div>-->
                              
<!--                                <div class="map">-->
<!--                                  <img src="assets/images/animation_banner.gif">-->
<!--                                </div>-->
<!--                            </div>-->
                            
<!--                        </div>-->
<!--                    </div>-->
<!--                </div> -->
<!--            </div>     -->
<!--        </div>-->
<!--    </div>    -->
<!--</section> -->


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer-top.php"; 
include($footer); 
?>





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>
