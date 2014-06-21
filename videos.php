<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.php";?>
  

  <body>
   <img src="img/videopage.jpg" class="bgcl" alt=""> 

<?php include "includes/navbar.php" ?>
    
        <div class="container">   
          <div class="row">
            <div class="col-xs-12 text-center">
<div id="slider1_container" style="position: relative; margin:auto; width: 640px;
        height: 390px;">

        <!-- Slides Container -->
        <div u="slides">
            <div>
                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
                  <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;" 
                    url="http://www.youtube.com/embed/ZOUvwOfikKg"
                    frameborder="0" scrolling="no"></iframe>
                </div>
                </div>

                <div>
                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
                    <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;"
                     url="http://www.youtube.com/embed/KY5Ug1OW5O4"
                     frameborder="0" scrolling="no"></iframe>                    
                </div>
                </div>

                <div>
                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
                   <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;"
                     url="http://www.youtube.com/embed/6VdGI5-z_hg"
                     frameborder="0" scrolling="no"></iframe>                    
                </div>
                </div>

                <div>
                <div u="player" style="position: relative; top: 0px; left: 0px; width: 640px; height: 390px; overflow: hidden;">
                  <iframe pHandler="ytiframe" pHideControls="0" width="640" height="390" style="z-index: 0;"
                    url="http://www.youtube.com/embed/yUjbbrzl3I4"
                    frameborder="0" scrolling="no"></iframe>                    
                </div>
            </div>
        </div>
        
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 6px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><NumberTemplate></NumberTemplate></div>
        </div>
    </div>
    </div>
    </div>
</div> 


   

<?php include "includes/footer.php" ?>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slider js -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
     <script type="text/javascript" src="js/jssor.utils.js"></script>
     <script type="text/javascript" src="js/jssor.slider.js"></script>
     <script type="text/javascript" src="js/jssor.player.ytiframe.js"></script>
     <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3,                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlayInterval: 4000,            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
                $ArrowKeyNavigation: true,      //[Optional] Allows keyboard (arrow key) navigation or not, default value is false

                $BulletNavigatorOptions: {                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 1,                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 640));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            //Scale slider immediately
            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end

            //fetch and initialize youtube players
            $JssorPlayer$.$FetchPlayers(document.body);
        });
    </script>

  </body>
</html>


