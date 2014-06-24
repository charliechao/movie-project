<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.php";?>
  

  <body>

   <img src="img/videopage.jpg" class="bgcl" alt=""> 

<?php include "includes/navbar.php" ?>
    
        <div class="container ">
        <div class="row ">
            <div class="col-sm-12 text-center ">
             <div class="single">  
            <div>
                <iframe width="560" height="315" src="//www.youtube.com/embed/q-WhOERP3ng" frameborder="0" allowfullscreen></iframe>
            </div>
            <div>
                <iframe width="560" height="315" src="//www.youtube.com/embed/KY5Ug1OW5O4" frameborder="0" allowfullscreen></iframe>
            </div>
            <div>
                <iframe width="560" height="315" src="//www.youtube.com/embed/KoSmxnBXMGU" frameborder="0" allowfullscreen></iframe>
            </div>
            <div>
                <iframe width="560" height="315" src="//www.youtube.com/embed/A6JTQEuYBHE" frameborder="0" allowfullscreen></iframe>
            </div>
            </div> 
            </div>
        </div>
            
        </div> 


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!--  Slick -->
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.6/slick.min.js"></script>  
    <!-- FitVidez -->
    <script type="text/javascript"src="js/fitvids.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.single').slick();
            $(".single").fitVids();
            });
    </script>
   
  </body>
</html>


