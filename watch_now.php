<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.php";?>

  <body>

 <img src="img/watchpage.jpg" class="bgcl" alt="">   

    <?php include "includes/navbar.php" ?>
    

    <div class="container-fluid">
      <div class="row">
        <!-- Map -->
        <div class="col-sm-6" >
        <h2 class="text-center">Map</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.626593495807!2d174.76372660000004!3d-36.85141799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47e56926a1b9%3A0x380a1c04441c3ef8!2s291+Queen+St!5e0!3m2!1sen!2snz!4v1403230522781" 
        width="100%" height="100%" frameborder="0" style="border:0" id="map"></iframe>
        </div> <!-- End of map -->

     <?php include "includes/session-table.php";?>

      </div> 
    </div>

  <?php include "includes/footer.php";?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>