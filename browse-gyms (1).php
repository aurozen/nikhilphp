<?php

  $opts = array('http' => array(
    'method' => "GET",
    'header' =>
    "Content-Type: application/x-www-form-urlencoded\r\n",
  ));

  $context = stream_context_create($opts);
  $city = file_get_contents('http://13.233.29.39:8012/getAllCity', false, $context);
  $getAllCity = json_decode($city, true);

  $exp = file_get_contents('http://13.233.29.39:8012/getAllExercise', false, $context);
  $getAllExercise = json_decode($exp, true);

?>

<!doctype html>
<html lang="en-US" class="no-js">
  <head>
    <meta data-rh="true" charset="UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="Book your gym with Aurozen app, Best pay per session gym near your area, Do Workout anywhere and anytime in any gym, browse the best gym near you, and do exercise.">
    <script>
      document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>Book your gym: Do Workout anywhere, anytime in any gym – Aurozen Fitness App</title>
    <link href='images/favicon.jpg' rel='shortcut icon' type='image/x-icon' />
    <link data-rh="true" rel="canonical" href="https://www.aurozen.com/browse-gyms.html" />
    <script>
      var mytheme_urls = {
          stickynav: 'enable',
          isRTL: '',
          loadingbar: 'enable',
          linkedin: 'disable'
      };
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175803256-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-175803256-1');
    </script>
    <link rel='stylesheet' id='dt-sc-css-css' href='css/new-style.css' media='all' />
    <link rel='stylesheet' id='dt-sc-css-css' href='css/shortcodes.css?ver=5.4.2' media='all' />
    <link rel='stylesheet' id='default-css' href='https://fitnesszonewp.wpengine.com/wp-content/themes/fitnesszone/style.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='skin-css' href='css/green.css?ver=5.4.2' media='all' />
    <link rel='stylesheet' id='pace-load-css' href='css/pace-theme-loading-bar.css?ver=5.4.2' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='css/font-awesome.min.css?ver=5.4.2' media='all' />
    <link rel='stylesheet' id='responsive-css' href='css/woocommerce-responsive.css?ver=5.4.2' media='all' />
    <link rel='stylesheet' id='mytheme-google-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic%7CRoboto:400,300,700%7CRoboto+Condensed:400,700%7CCrete+Round' type='text/css'
      media='all' />
    <style type="text/css">
      .widget .upcoming-events-widget li:before{top:auto}#footer .dt-sc-contact-info.dt-phone p a{color:#fff}#group-create-body input#bp-browse-button{float:none;margin-left:10px}#previous-next>#group-creation-previous{float:left}#group-create-body .bp-avatar-nav{display:inline-block;margin-top:20px;width:100%}#group-create-body .bp-avatar-nav ul li{padding-bottom:0}.dt-style-picker-wrapper{display:none}.main-menu-container .main-menu{background-color:#020202!important}.top-bar{background:#0b0a0a!important}.normal_logo{margin:-9px 0 0}.recentcomments a{display:inline!important;padding:0!important;margin:0!important}.secondary-sidebar .widget ul li::before{top:4px;display:none}.widget .recent-posts-widget ul li,.widget.widget_popular_entries ul li{padding:0 0 25px;border:none;line-height:normal;display:inline-flex}.blog-entry h4{margin-bottom:0;font-size:25px;text-transform:uppercase;font-weight:600}.blog-entry .entry-meta .date span{font-weight:800;font-size:30px;line-height:27px;margin-left:-5px}.blog-entry .entry-meta{position:absolute;top:0;left:0;width:85px;text-align:center;line-height:18px}.blog-entry .entry-meta .date::before{content:"";border:1px solid #fff;display:inline-block;width:75px;position:absolute;left:5px;top:5px;height:88%}.wpcf7-form input[type="text"],.wpcf7-form input[type="email"],.wpcf7-form textarea,.wpcf7-form select{background:#aca5a5;border:0;color:#fffefe;border-radius:10px}select option{background:#aca5a5}p{font-size:15px;text-align:justify}#footer .copyright a:hover{color:#9bb70d}#footer p,#footer .widget_tweetbox li{font-size:14px}.fa.fa-map-marker{color:#9bb70d}.widget.widget_text ul li{padding-left:0;font-size:14px;border-bottom:1px solid #222;line-height:30px}#footer .footer-links li{font-size:14px;font-weight:700}a{color:#000}#footer .copyright p{font-weight:700}@media only screen and (max-width:768px){.vk{margin-top:12px!important}}.widget{float:none}@media only screen and (max-width:768px){#vk1{display:none!important}}@media only screen and (max-width:768px){.recent-gallery-widget{display:none!important}}.badge{display:inline-block;padding:5px 3px 0 0;font-size:75%}.mt-3,.my-3{margin-top:1rem!important}.dt-sc-hr-invisible-medium{float:left;width:100%;margin:30px 0;display:block;clear:both}.footer-widgets-wrapper{padding:20px 0 0}.widget{padding:0 0 20px}#footer .copyright{padding:10px 0}.top-bar{min-height:65px}.blog-entry .entry-title{padding:5px 20px 3px}.icons{width:161px;border-radius:10px}#secondary-left.secondary-has-both-sidebar,#secondary-right.secondary-has-both-sidebar{margin:0;width:300px;}.btn-3{float:right !important;}
    </style>
    <script type="text/javascript">
      var ajaxurl = 'https://fitnesszonewp.wpengine.com/wp-admin/admin-ajax.php';
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PRFLNFK');
    </script>
    <!-- End Google Tag Manager -->
  </head>
  <body class="bp-legacy page-template page-template-tpl-blog page-template-tpl-blog-php page page-id-286 page-child parent-pageid-270 tribe-no-js no-js">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRFLNFK"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="loader-wrapper">
      <div class="loader"><span class="fa fa-spinner fa-spin"></span></div>
    </div>
    <!-- **Wrapper** -->
    <div class="wrapper">
      <div class="inner-wrapper">
        <!-- header-wrapper starts here -->
        <div id="header-wrapper" class="">
          <header id="header" class="header1">
            <!-- Top bar starts here -->
            <div class="top-bar">
              <div class="container">
                <div class="dt-sc-contact-info">
                  <p><i class="fa fa-phone"></i>Call Us: <a href="tel:+91-975 259 5777">(+91) - 975 259 5777</a></p>
                </div>
              </div>
            </div>
            <!-- Top bar ends here -->
            <div class="main-menu-container">
              <div class="main-menu">
                <div id="logo"> <a href="http://www.aurozen.com/" title="Aurozen">
                  <img class="normal_logo" src="images/logo-auro.png" alt="Aurozen" title="Aurozen" />
                  <img class="retina_logo" src="images/logo-auro.png" alt="Aurozen" title="Aurozen"/>
                  </a>
                </div>
                <div id="primary-menu">
                  <div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                  <nav id="main-menu">
                    <ul id="menu-main-menu" class="menu">
                      <li id="menu-item-2410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-megamenu-parent  megamenu-4-columns-group"><a href="http://www.aurozen.com/"><i class='fa fa-home'></i>Home</a>
                      </li>
                      <li id="menu-item-2409" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2399 current_page_item current-menu-ancestor current_page_ancestor menu-item-depth-0 menu-item-megamenu-parent  megamenu-4-columns-group"><a href="browse-gyms.html"><i class='fa fa-user'></i>Browse Gyms</a>
                      </li>
                      <li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-megamenu-parent  megamenu-4-columns-group"><a href="blogs.html"><i class='fa fa-pencil'></i>Blogs</a>
                      </li>
                      <li id="menu-item-378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-0 menu-item-megamenu-parent  megamenu-4-columns-group"><a href="about-aurozen.html"><i class='fa fa-camera'></i>About Aurozen</a>
                      </li>
                      <li id="menu-item-245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-0 menu-item-megamenu-parent  megamenu-2-columns-group"><a href="gym-vendors.html"><i class='fa fa-calendar'></i>Gym Vendors</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </header>
        </div>
        <!-- breadcrumb starts here -->
        <div class="breadcrumb-wrapper ">
          <div class='fullwidth-section full-pattern ' style="background-image:url(images/paralx-3.jpg);background-repeat:no-repeat;background-position:center center;padding-top:0px;margin-top:-75px;">
            <div class="container">
              <div class='column dt-sc-two-fifth space first'>
                <div class='dt-sc-hr-invisible-medium  '></div>
                <img title="" src="images/girlImage.png" alt=""></p>
              </div>
              <div class='column dt-sc-three-fifth  space '>
                <div class='dt-sc-hr-invisible-medium  '></div>
                <div class="dt-sc-clear"></div>
                <br/>
                <h2 style="margin-top:20px;font-size:25px;color:#fff;">Enter the name you want to search!!</h2>
                <!--<div class='dt-sc-hr-invisible-small  '></div>-->
                <form name="frmcontact" class="wpcf7-form" method="post" action="#">
                  <div class="selection-box">
                    <select name="SearchTxt0">
                      <?php if(count($getAllCity["data"]) > 0) { ?>
                      <?php for($i=0;$i<count($getAllCity["data"]);$i++){ ?>
                      <option><?php echo $getAllCity["data"][$i]["city"]; ?></option>
                      <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="selection-box"><input class="vk" type="text" name="SearchTxt" placeholder="Enter Gym Name..." /></div>
                  <div class="clear"></div>
                  <div class="dt-sc-one-half column first"></div>
                  <div class="dt-sc-one-half column">
                    <input type="submit" name="submit" value="Search" class="btn-3" onclick="javascript_fun_search();">
                  </div>
                </form>
                <div class="dt-sc-clear"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- breadcrumb ends here -->
        <div id="main">
          <!-- main-content starts here -->
          <div id="main-content">
            <div class="container" style="margin-top:-35px;">
              <div class="dt-sc-hr-invisible"></div>
              <div class="dt-sc-hr-invisible"></div>
              <section class="secondary-sidebar secondary-has-both-sidebar" id="secondary-left">
                <aside id="recent-posts-2" class="widget widget_recent_entries">
                  <div class="widgettitle">
                    <h3>Fitness</h3>
                  </div>
                <ul>
                  <?php if(count($getAllExercise["data"]) > 0) { ?>
                    <?php for($i=0;$i<count($getAllExercise["data"]);$i++){ ?>
                      <li>
                        <input type="checkbox" name="check" style="margin-left:-30px;"> &nbsp;&nbsp;&nbsp; <?php echo $getAllExercise["data"][$i]["exeName"]; ?>
                      </li>
                    <?php } ?>
                  <?php } ?>
                </ul>
                </aside>
                <div class='dt-sc-hr-invisible-small  '></div>
                <aside id="my_mailchimp-2" class="widget mailchimp">
                  <div class="widgettitle" style="background: #9bb70d;">
                    <h3 style="background: #9bb70d;padding: 5px;color: #000;">Why choose Aurozen?</h3>
                  </div>
                  <!--<h4 style="margin-top:-25px;padding: 10px;">Unlock Fitness Revolution</h4>-->
                  <p style="padding: 10px;margin-top: -35px;">Through Aurozen, Users can find the nearest gym around your office and home. When you choose any gym for workouts, then it shows how many people are available at the gym at that time, so through these features, you can
                    choose less traffic gym easily and you can do the best workouts there.
                  </p>
                  <div id="ajax_newsletter_msg"></div>
                </aside>
                <aside id="my_gallery_widget-2" class="widget widget_popular_entries" style="margin-top:-30px;">
                  <div class="widgettitle" id="vk1">
                    <h3>Gallery</h3>
                  </div>
                  <div class='recent-gallery-widget'>
                    <ul>
                      <li><a href='images/g1-1.jpg' class='thumb'>
                        <img src='images/g1.jpg' alt='Flexible Muscle...'/></a>
                      </li>
                      <li><a href='images/g2-2.jpg' class='thumb'><img src='images/g2.jpg' alt='Shoulder Press'/></a>
                      </li>
                      <li><a href='images/g3-3.jpg' class='thumb'><img src='images/g3.jpg' alt='Shoulder Press'/></a>
                      </li>
                      <li><a href='images/g4.jpg' class='thumb'><img src='images/g4.jpg' alt='Shoulder Press'/></a>
                      </li>
                      <!--<li><a href='images/g5-5.jpg' class='thumb'><img src='images/g5.jpg' alt='Shoulder Press'/></a>
                        </li>
                        <li><a href='images/g6-6.jpg' class='thumb'><img src='images/g6.jpg' alt='Shoulder Press'/></a>
                        
                        </li>-->
                    </ul>
                  </div>
                </aside>
              </section>

              <section id="primary" class="page-with-sidebar page-with-left-sidebar">
                <article id="post-282" class="post-282 page type-page status-publish hentry">
                <div class="tpl-blog-holder apply-isotope"></div>
               </article>
              </section>
             






            </div>
            <div class="dt-sc-hr-invisible-small"></div>
          </div>
        </div>
        <!-- footer starts here -->
        <footer id="footer">
          <div class="footer-widgets-wrapper">
            <div class="container">
              <div class='column dt-sc-one-fourth first'>
                <aside id="text-2" class="widget widget_text">
                  <h3 class="widgettitle">
                    <span class="fa fa-user"></span>About Aurozen
                  </h3>
                  <div class="textwidget">
                    <p>Aurozen application have multiple gym and fitness center option to choose from.</p>
                    <p>You can browse and choose where you want workout and you will not have to pay a huge membershipn instead just pay for a single visit and enjoy your workout.</p>
                  </div>
                </aside>
              </div>
              <div class='column dt-sc-one-fourth '>
                <aside id="my_recent_posts-3" class="widget widget_recent_posts">
                  <h3 class="widgettitle">
                    <span class="fa fa-download"></span>Download Aurozen App
                  </h3>
                  <div class='recent-posts-widget'>
                    <ul>
                      <li><a href='https://play.google.com/store/apps/details?id=com.aurozenuserapp.user&hl=en&showAllReviews=true' target="_blank" class='thumb'><img src='images/playstore.png' alt='Playstore'/></a>
                      </li>
                      <li></li>
                      <!--<li><a href='#' class='thumb'><img src='images/iosapp.png' alt='IOS App' width="156px"/></a></li>-->
                    </ul>
                  </div>
                </aside>
              </div>
              <div class='column dt-sc-one-fourth '>
                <aside id="text-3" class="widget widget_text">
                  <h3 class="widgettitle"><span class="fa fa-link"></span>Useful Social Links</h3>
                  <div class="textwidget" style="margin-left: -3px;">
                    <ul class="dt-sc-social-icons">
                      <li><a href='https://www.facebook.com/Aurozen-106826077521392/' target="_blank"><img src="images/facebook.png" alt="facebook"></a></li>
                      <li><a href='https://www.youtube.com/channel/UCtrbIC2jTX-YQtgz0e32NLg' target="_blank"><img src="images/youtube.png" alt="facebook"></a></li>
                      <li><a href='https://www.instagram.com/aurozen_/' target="_blank"><img src="images/instagram.png" alt="facebook"></a></li>
                      <li><a href='https://www.linkedin.com/company/aurozen/' target="_blank"><img src="images/linkedin.png" alt="facebook"></a></li>
                    </ul>
                  </div>
                </aside>
              </div>
              <div class='column dt-sc-one-fourth '>
                <aside id="text-3" class="widget widget_text">
                  <h3 class="widgettitle"><span class="fa fa-address-book-o"></span>For Any Assistance</h3>
                  <div class="textwidget">
                    <ul>
                      <li class="d-flex">
                        <img src="images/phone-icon.png" alt="" />&nbsp;&nbsp;&nbsp;(+91) - 975 259 5777
                      </li>
                      <li>
                        <div class="assistance-block"><img src="images/mail-icon.png" alt="" /><span class="head">&nbsp;&nbsp;&nbsp;CUSTOMER-RELATED QUERIES</span></div>
                        <div class="assistance-data pl-25">
                          <span> <a href="mailto:support@aurozen.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support@aurozen.com</a></span>
                        </div>
                        <div class="assistance-block pl-25 pt-20"><span class="head">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OTHER QUERIES</span></div>
                        <div class="assistance-data pl-25">
                          <span> <a href="mailto:support@aurozen.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support@aurozen.com</a></span>
                        </div>
                      </li>
                      <li class="d-flex"><img src="images/clock.png" alt="" /><span class="pl-40 dflex-center">&nbsp;&nbsp;&nbsp;Mon - Sat: 10am - 7pm</span></li>
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
            <div class="social-media-container">
              <div class="social-media">
                <div class="container">
                  <div class="dt-sc-contact-info dt-phone">
                    <p><i class="fa fa-phone"></i> <span>(+91) - 975 259 5777</span> </p>
                  </div>
                  <ul class="dt-sc-social-icons">
                    <li class='facebook'><a class='fa fa-facebook' href='https://www.facebook.com/Aurozen-106826077521392/' target="_blank"></a></li>
                    <li class='twitter'><a class='fa fa-linkedin' href='https://www.linkedin.com/company/aurozen/' target="_blank"></a></li>
                    <li class='flickr'><a class='fa fa-instagram' href='https://www.instagram.com/aurozen_/' target="_blank"></a></li>
                    <li class='youtube'><a class='fa fa-youtube' href='https://www.youtube.com/channel/UCtrbIC2jTX-YQtgz0e32NLg' target="_blank"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="container">
              <ul id="menu-footer-menu" class="footer-links">
                <li id="menu-item-2605" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2605"><a href="http://www.aurozen.com/">Home</a></li>
                <li id="menu-item-2606" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2399 current_page_item menu-item-2606"><a href="browse-gyms.html" aria-current="page">Browse Gyms</a></li>
                <li id="menu-item-2607" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2607"><a href="blogs.html">Blogs</a></li>
                <li id="menu-item-2608" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2608"><a href="about-aurozen.html">About Aurozen</a></li>
                <li id="menu-item-2610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2610"><a href="gym-vendors.html">Gym Vendors</a></li>
              </ul>
              <p>Copyright &copy; 2020 - Gym App - Aurozen | All Rights Reserved</p>
            </div>
          </div>
        </footer>
        <!-- footer ends here -->
      </div>
      <!-- **Inner Wrapper - End** -->
    </div>
    <!-- **Wrapper - End** -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
    <script type='text/javascript' src='js/pace.min.js?ver=5.4.2'></script> 
    <script type='text/javascript' src='js/jquery.js?ver=1.12.4-wp'></script> 
    <script src='js/jquery.plugins.min.js?ver=5.4.2'></script>    
    <script src='js/custom.js?ver=5.4.2'></script>
    <script src='js/wp-embed.min.js?ver=5.4.2'></script>
    <script type="text/javascript">
    $(document).ready(function(){
    javascript_function_search("Gwalior");
    function javascript_function_search(GymName)
      {
        $('.tpl-blog-holder').html('<i class="fa fa-spinner fa-spin"></i>');
        $.ajax({ type:"POST",url:"ajax-code-data.php",data:{GymName:GymName,ActionVal:2},
         success:function(result) { 
           $('.tpl-blog-holder').html(result);
          }
        });
      }

      $(document).on("change","select[name=SearchTxt0]",function(){
        var SearchTxt0=$(this).val();
        javascript_function_search(SearchTxt0);
      });
    });
    </script>
  </body>
</html>