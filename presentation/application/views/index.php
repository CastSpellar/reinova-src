<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <title>Re.Inova - Environmental Knowledge</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="css/reinova_styles.css" type="text/css" media="screen" />

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" />
        <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/supersized.3.2.4.min.js"></script>
        <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="js/swfobject.js"></script>
        <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>

        <script type="text/javascript">
            var basic = false;
            
            
            /* Funçoes do player de mp3*/
            
            //Inicialização do jPlayer -> ver o Dev Guide em http://jplayer.org/latest/developer-guide/
            jQuery(function($) { 
              $("#jpId").jPlayer( {
                ready: function () {
                  $(this).jPlayer("setMedia", {
                    mp3: "sounds/finally_moving.mp3" // Defines the mp3 url
                  }).jPlayer("play"); // Attempts to Auto-Play the media
                },
                ended: function() { // The $.jPlayer.event.ended event
                    $(this).jPlayer("play"); // Repeat the media
                },
                supplied: "mp3",
                swfPath: "/js"
              });
            });
            
            // Play -> Começa a reprodução do mp3 e muda o icon de som
            function play() {
                $("#jpId").jPlayer("unmute");
                $("#playPause").fadeOut("slow", function() {
                    $("#playPause").html('<a href="javascript:pause();"><img src="img/unmute.png" /></a>');
                    $("#playPause").fadeIn("slow");
                });
            }
            
            // Pause -> Para a reprodução do mp3 e muda o icon de som
            function pause() {
                $("#jpId").jPlayer("mute");
                $("#playPause").fadeOut("slow", function() {
                    $("#playPause").html('<a href="javascript:play();"><img src="img/mute.png" /></a>');
                    $("#playPause").fadeIn("slow");
                });
            }
            
            jQuery(function($){
                $.supersized({
                    // Functionality
                    slideshow: 1,			// Slideshow on/off
                    autoplay: 1,			// Slideshow starts playing automatically
                    start_slide: 1,			// Start slide (0 is random)
                    stop_loop: 0,			// Pauses slideshow on last slide
                    random: 0,			// Randomize slide order (Ignores start slide)
                    slide_interval: 10000,		// Length between transitions
                    transition: 1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 1000,		// Speed of transition
                    new_window: 1,			// Image links open in new window/tab
                    pause_hover: 0,			// Pause slideshow on hover
                    keyboard_nav: 1,		// Keyboard navigation on/off
                    performance: 1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect: 1,		// Disables image dragging and right click with Javascript
															   
                    // Size and Position						   
                    min_width: 0,			// Min width allowed (in pixels)
                    min_height: 0,			// Min height allowed (in pixels)
                    vertical_center: 1,		// Vertically center background
                    horizontal_center: 1,		// Horizontally center background
                    fit_always: 0,			// Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait: 1,		// Portrait images will not exceed browser height
                    fit_landscape: 0,		// Landscape images will not exceed browser width
															   
                    // Components							
                    slide_links: 'blank',           // Individual links for each slide (Options: false, 'number', 'name', 'blank')
                    thumb_links: 0,			// Individual thumb links for each slide
                    thumbnail_navigation: 0,	// Thumbnail navigation
                    slides: [			// Slideshow Images
                        {image : 'images/tree.jpg'},
                        {image : 'images/spring.jpg'},
                        {image : 'images/autmn.jpg'},
                        {image : 'images/winter.jpg'}
                    ],
												
                    // Theme Options			   
                    progress_bar: 1,		// Timer for each slide							
                    mouse_scrub: 0
					
                });
            });
                    
            function loadPages(pageName){
                jQuery(function($){
                    $.ajax({
                        url: pageName,
                        dataType: "html",
                        success: function(html) {
                            if(basic){
                                $("#mainContentRightDiv").fadeOut("slow",function(){
                                    $("#mainContentRightDiv").html(html);
                                    $("#mainContentRightDiv").fadeIn("slow",function(){
                                        if($("#mainContentRightDiv").length > 0){
                                            //$("#mainContentRightDiv").prepend('<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>');
                                            //$("#mainContentRightDiv").tinyscrollbar();
                                        } else console.log("WTF");
                                            
                                    });                                    
                                }) ;
                            }
                        }
                    })});
            }        
                
            function loadFlash(){                
                var flashvars = {};
                var params = {};
                $("#mainContentLeftDiv").hide();
                $("#mainContentRightDiv").hide();
                params.play = "false";
                params.loop = "true";
                params.menu = "false";
                params.quality = "best";
                params.wmode = "transparent";
                params.devicefont = "true";
                params.allowfullscreen = "true";
                params.allowscriptaccess = "always";
                params.allownetworking = "all";
                var attributes = {};
                attributes.align = "middle";
                swfobject.embedSWF("swf/intro.swf", "base", "800px", "600px", "9.0.0", false, flashvars, params, attributes); 
            }
                
            function show(){
                basic = !basic;
                $("#version").fadeOut("slow");
                if(basic){
                    swfobject.removeSWF("base");
                    $("#mainContentDiv").fadeOut("slow") ;
                    $("#mainContentDiv").fadeIn("slow", function(){                                        
                        $("#mainContentLeftDiv").show();
                        $("#mainContentRightDiv").show();                                                
                        loadPages('concept');  
                        $("#version").text("Versao flash");
                        $("#version").fadeIn("slow");
                    });
                        
                } else {
                    $("#mainContentDiv").fadeOut("slow") ;
                    $("#mainContentDiv").prepend('<div id="base"></div>');
                    loadFlash();
                    $("#mainContentDiv").fadeIn("slow", function() {
                        $("#version").text("Versao basica");
                        $("#version").fadeIn("slow");
                    });
                }
            }
        </script>

    </head>
    <body>
        <div id="flashLinkDiv">
            <a id="version" onclick="show(true)" style="cursor: pointer;">Versao basica</a>
        </div>
        
        <div id="soundDiv">
            <div id="jpId"></div>
            <div id="playPause"><a href="javascript:pause();"><img src="/img/unmute.png" /></a></div>
        </div>

        <div id="mainContentDiv">
            <div id="base">&nbsp;</div>
            <?php $this->load->view('mainView'); ?>
        </div>

        <script language="javascript">
        
            if(swfobject.hasFlashPlayerVersion("9.0.0") && !basic){
                loadFlash();                
            }    
        </script>
    </body>
</html>
