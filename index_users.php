<?php
session_start();
if (!isset($_SESSION["user_id"]))
{
    header("location: login.php");
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourist Information</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400">   
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">               
    <link rel="stylesheet" href="css/bootstrap.min.css">                         
    <link rel="stylesheet" href="css/magnific-popup.css">                                     
    <link rel="stylesheet" href="css/templatemo-style.css">               
    <link rel="icon" type="image/ico" href="img/favicon.ico">
</head>

    <body id="top" class="home">
       
        <div class="container-fluid">
            <div class="row">
              
                <div class="tm-navbar-container">
                
                <!-- navbar   -->
                <nav class="navbar navbar-full navbar-fixed-top">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                        
                    <div class="collapse navbar-toggleable-sm" id="tmNavbar">                            

                        <ul class="nav navbar-nav">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#top">Intro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tm-section-2">Places to visit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tm-section-3">A Taste of Ireland</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tm-section-4">Contact Us</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link external" href="map.html">Map</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="logout_transaction.php">Logout</a>
                            </li>
                        </ul>

                    </div>
                  
                </nav>

              </div>  

           </div>

           <div class="row">
                <div class="tm-intro">

                    <section id="tm-section-1">                        
                        <div class="tm-container text-xs-center tm-section-1-inner">
                            <img src="img/ireland.png" alt="Logo" class="tm-logo">
                            <h1 class="tm-site-name">The real view of Ireland</h1>
                            <p class="tm-intro-text">Marketing the island of Ireland overseas</p>
                            <p class="tm-intro-text"><?php
echo "<h1 class='tm-intro-text'>Welcome " . $_SESSION["user_name"] . "</h1>";?></p>
                            <a href="#tm-section-2" class="tm-intro-link">Begin</a>    
                        </div>                                               
                   </section>

                </div>
            </div>

            <div class="row gray-bg">
                
                <div id="tm-section-2" class="tm-section">
                    <div class="tm-container tm-container-wide">
                        <h2 class="blue-text tm-title text-xs-center">Places to visit</h2>
                        <div class="tm-news-item">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="img/cliffsofmoher.jpg" alt="Image" class="img-fluid tm-news-item-img">  
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">The Cliffs of Moher</h2>
                                <p class="tm-news-text">Attracting tourists is in the blood of the Cliffs of Moher. At the end of the 16th to early 19th centuries, young nobles would embark on grand tours of Europe – and Irish travel journals around the time of 1780 give many descriptions of the beauty of County Clare and the Cliffs of Moher.</p>
                                <a href="cliffs_of_moher.html" class="btn tm-light-blue-bordered-btn tm-news-link">Learn More</a>
                            </div>
                        </div>
                        

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
                                <img src="img/newgrange.jpg" alt="" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
                                <h2 class="tm-news-title dark-gray-text">Newgrange</h2>
                                <p class="tm-news-text">Newgrange is a 5,200 year old passage tomb located in the Boyne Valley in Ireland's Ancient East. Newgrange was built by Stone Age farmers, the mound is 85 meters (93 yards) in diameter and 13.5 meters (15 yards) high, an area of about 1 acre. To find out more about the history of Newgrange please click "Learn More".</p>
                                <a href="newgrange.html" class="btn tm-light-blue-bordered-btn tm-news-link">Learn More</a>
                            </div>
                        </div>

                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-item-img-container">
                                <img src="img/dublin.jpg" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container">
                                <h2 class="tm-news-title dark-gray-text">The City of Dublin</h2>
                                <p class="tm-news-text">Credit goes to <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a>Dublin was voted Europe's fourth most popular city break destination, behind London, Paris and Rome and is one of the friendliest capital cities in the world. Dublin's elegant Georgian architecture makes it one of Europe's most attractive capitals. If you wish to learn more please click "Learn More"</p>
                                <a href="dublin.html" class="btn tm-light-blue-bordered-btn tm-news-link">Learn More</a>
                            </div>
                        </div>
                        
                        <div class="tm-news-item">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 flex-order-2 tm-news-item-img-container">
                                <img src="img/giantscauseway.jpg" alt="Image" class="img-fluid tm-news-item-img">
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-news-container flex-order-1">
                                <h2 class="tm-news-title dark-gray-text">The Giants Causeway</h2>
                                <p class="tm-news-text">For centuries countless visitors have marvelled at the majesty and mystery of the Giants Causeway. At the heart of one of Europe's most magnificent coastlines its unique rock formations have, for millions of years, stood as a natural rampart against the unbridled ferocity of Atlantic storms. If you wish to read more about the Giants Causeway please click "Learn More". </p>
                                <a href="giants_causeway.html" class="btn tm-light-blue-bordered-btn tm-news-link">Learn More</a>
                            </div>
                        </div>
                    </div>                    
               </div>

           </div> <!-- row -->

            <div class="row">

                <section id="tm-section-3" class="tm-section">
                    <div class="tm-container text-xs-center">
                        
                        <h2 class="blue-text tm-title">A Taste of Ireland</h2>
                        <p class="margin-b-5">This is just a glimpse of what Ireland has to offer!</p>
                       
                        
<div class="photogallery">
<ul>
   <li><a><img src="img/dublin1.jpg"></a>Samuel Beckett Bridge in Dublin</li>
   <li><a ><img src="img/food.jpg"></a>Shepards Pie, traditional Irish cuisine</li>
   <li><a ><img src="img/gaa.jpg"></a>Hurling, a traditional Irish sport</li>
   <li><a ><img src="img/glendalough.jpg"></a>Glendalough in County Wicklow</li> 
   <li><a><img src="img/grass.jpg"></a>The Rolling Hills of Ireland</li>
   <li><a ><img src="img/dublin2.jpg"></a>Temple Bar in Dublin</li>
   <li><a><img src="img/house.png"></a>Powerscourt Estate in Enniskerry, County Wicklow</li>
   <li><a ><img src="img/dublin3.jpg"></a>The Custom House in Dublin</li>
   <li><a ><img src="img/waterfall.jpg"></a>Torc Waterfall in Killarney, County Kerry</li>  
</ul>
</div>

                    </div>
                </section>

            </div> <!-- row -->

            <div class="row gray-bg">

                <section id="tm-section-4" class="tm-section">
                    <div class="tm-container">

                        <h2 class="blue-text tm-title text-xs-center">Contact Us</h2>
                      
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <form action="index.html" method="post" class="tm-contact-form">                                
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-left">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-form-group-right">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                            
                                <button type="submit" class="btn tm-light-blue-bordered-btn pull-xs-right">Submit</button>                          
                            </form>   
                        </div> <!-- col -->
                        
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 margin-top-xs-50">
                            <h3 class="light-blue-text tm-subtitle">Etiam at rhoncus nisl</h3>
                            <p>Nunc rutrum ac ante euismod cursus. Suspendisse imperdiet feugiat massa nec iaculis</p>
                            <p>
                                Tel: <a href="tel:0100200340">010-020-0340</a><br>
                                Email: <a href="mailto:info@company.com">info@company.com</a>
                            </p>
                        </div>
                    </div>                    
                </section>

                <!-- footer -->
                <footer class="tm-footer">                
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <p class="text-xs-center tm-footer-text">Copyright &copy; 2016 Irish Tourism Board</p>       
                        <?php echo "<p class='text-xs-center tm-footer-text'><a  href='user_profile.php' alt='Change User Profile' title='Change User Profile'>" . $_SESSION["user_name"] . "</a></p>";?>
                    </div>                
                </footer>  

            </div>
           
        </div> 
        
        <script src="js/jquery-1.11.3.min.js"></script>           
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script>     
       
            $(document).ready(function(){

                var mobileTopOffset = 54;
                var desktopTopOffset = 80;
                var topOffset = desktopTopOffset;

                if($(window).width() <= 767) {
                    topOffset = mobileTopOffset;
                }
                
                /* Single page nav
                -----------------------------------------*/
                $('#tmNavbar').singlePageNav({
                   'currentClass' : "active",
                    offset : topOffset,
                    'filter': ':not(.external)'
                }); 

                /* Handle nav offset upon window resize
                -----------------------------------------*/
                $(window).resize(function(){
                    if($(window).width() <= 767) {
                        topOffset = mobileTopOffset;
                    } 
                    else {
                        topOffset = desktopTopOffset;
                    }

                    $('#tmNavbar').singlePageNav({
                        'currentClass' : "active",
                        offset : topOffset,
                        'filter': ':not(.external)'
                    });
                });
                

                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');
                });

                /* Turn navbar background to solid color starting at section 2
                ---------------------------------------------------------------*/
                var target = $("#tm-section-2").offset().top - topOffset;

                if($(window).scrollTop() >= target) {
                    $(".tm-navbar-container").addClass("bg-inverse");
                }
                else {
                    $(".tm-navbar-container").removeClass("bg-inverse");
                }

                $(window).scroll(function(){
                   
                    if($(this).scrollTop() >= target) {
                        $(".tm-navbar-container").addClass("bg-inverse");
                    }
                    else {
                        $(".tm-navbar-container").removeClass("bg-inverse");
                    }
                });


                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top - topOffset
                            }, 1000);
                            return false;
                        }
                    }
                }); 

              
                /* Magnific pop up
                ------------------------- */
                $('.tm-img-grid').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery: {enabled:true}            
                });            
            });

        </script>             

</body>
</html>