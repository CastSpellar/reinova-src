<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <title>Re.Inova - Environmental Knowledge</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/reinova_styles.css" type="text/css" media="screen" />

            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
            <script type="text/javascript" src="js/jquery.easing.min.js"></script>

            <script type="text/javascript" src="js/supersized.3.2.4.min.js"></script>
            <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
            <script type="text/javascript" src="js/jquery.scrollbar.min.js"></script>
            <script type="text/javascript" src="js/swfobject.js"></script>

            <script type="text/javascript">
			
                jQuery(function($){
				
                    $.supersized({
				
                    // Functionality
                    slideshow               :   1,			// Slideshow on/off
                    autoplay				:	1,			// Slideshow starts playing automatically
                    start_slide             :   1,			// Start slide (0 is random)
                    stop_loop				:	0,			// Pauses slideshow on last slide
                    random					: 	0,			// Randomize slide order (Ignores start slide)
                    slide_interval          :   15000,		// Length between transitions
                    transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed		:	1000,		// Speed of transition
                    new_window				:	1,			// Image links open in new window/tab
                    pause_hover             :   0,			// Pause slideshow on hover
                    keyboard_nav            :   1,			// Keyboard navigation on/off
                    performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
                        // Size & Position						   
                        min_width		        :   0,			// Min width allowed (in pixels)
                        min_height		        :   0,			// Min height allowed (in pixels)
                        vertical_center         :   1,			// Vertically center background
                        horizontal_center       :   1,			// Horizontally center background
                        fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
                        fit_portrait         	:   1,			// Portrait images will not exceed browser height
                        fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
                    // Components							
                    slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
                    thumb_links				:	0,			// Individual thumb links for each slide
                    thumbnail_navigation    :   0,			// Thumbnail navigation
                    slides 					:  	[			// Slideshow Images
                        /*{image : 'images/supersized1.jpg'},
                        {image : 'images/supersized2.jpg'},  
                        {image : 'images/supersized3.jpg'},
                        {image : 'images/supersized4.png'},
                        {image : 'images/supersized5.jpg'},
                        {image : 'images/supersized6.jpg'},
                        {image : 'images/supersized7.jpg'}*/
                        {image : 'images/tree.jpg'},
                        {image : 'images/spring.jpg'},
                        {image : 'images/autmn.jpg'},
                        {image : 'images/winter.jpg'}
                    ],
												
                        // Theme Options			   
                        progress_bar			:	1,			// Timer for each slide							
                        mouse_scrub				:	0
					
                    });
                });
		    
            </script>

            <script type="text/javascript">
                    
                function loadPages(pageName){
                
                    jQuery(function($){
                        $.ajax({
                            url: pageName,
                            dataType: "html",
                            success: function(html) {
                                $("#mainContentRightDiv").fadeOut("slow",function(){
                                    $("#mainContentRightDiv").html(html);
                                    $("#mainContentRightDiv").prepend('<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>');
                                    $("#mainContentRightDiv").fadeIn("slow",function(){
                                        if($("#mainContentRightDiv").length > 0){
                                            $("#mainContentRightDiv").tinyscrollbar();
                                        } else console.log("WTF");
                                    });                                    
                                }) ;
                                //$("#mainContentRightDiv").empty() ;
                        
                                
                            }
                        })});
                
                }
            </script>

    </head>
    <body>

        <div id="mainContentDiv">

            <div id="mainContentLeftDiv">
                <img src="images/logo_small.png" alt="" />
                <ul>
                    <li><a href="#" onClick="loadPages('concept')" class="navMenu">Conceito</a></li>
                    <li><a href="#" onClick="loadPages('enterprise')" class="navMenu">Empresa</a></li>
                    <li><a href="#" onClick="loadPages('services')" class="navMenu">Serviços</a></li>
                    <li><a href="#" onClick="loadPages('partners')" class="navMenu">Parceiros</a></li>
                    <li><a href="#" onClick="loadPages('portal')" class="navMenu">Portal</a></li>
                    <li><a href="#" onClick="loadPages('contacts')" class="navMenu">Contactos</a></li>
                    <li><a href="#" onClick="loadPages('flash')" class="navMenu">Flash</a></li>
                </ul>
            </div>

            <div id="mainContentRightDiv"/>

        </div>

    </body>
</html>
