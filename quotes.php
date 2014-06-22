<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anchor Man</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link href="css/impress-demo.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,
    semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic
    |PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    

  <body>

<?php include "includes/navbar.php" ?>
    <div id="impress">

    
    <div id="bored" class="step slide" data-x="-1000" data-y="-1500">
    <q>"Don't act like you're not impressed."</br>— Ron Burgundy</q>

    </div>

    
    <div class="step slide" data-x="0" data-y="-1500">
       <img src="img/quotes_page/p1.jpg" alt=""> 
    </div>

    
    <div id="title" class="step" data-x="0" data-y="0" data-scale="4">
    <img src="img/quotes_page/p2.jpg" alt="">    
    </div>

    
    <div id="its" class="step" data-x="850" data-y="3000" data-rotate="90" data-scale="5">
        <q>“You are a smelly pirate hooker. Why don’t you go back to your home on Whore Island?”</br> — Ron Burgundy</q>
    </div>

    <div id="big" class="step" data-x="3500" data-y="2100" data-rotate="180" data-scale="6">
        <img src="img/quotes_page/p3.jpg" alt="">
    </div>

    
    <div id="tiny" class="step" data-x="2825" data-y="2325" data-z="-3000" data-rotate="300" data-scale="1">
        <img src="img/quotes_page/p4.jpg" alt="">
    </div>

   
    

    <div id="imagination" class="step" data-x="6700" data-y="-300" data-scale="6">
    <img src="img/quotes_page/p5.jpg" alt="">
    </div>


    
    <div id="its-in-3d" class="step" data-x="6200" data-y="4300" data-z="-100" data-rotate-x="-40" data-rotate-y="10" data-scale="2">
        <p><span class="have">I'm</span> <span class="you">in</span> <span class="noticed">a glass</span> <span class="its">case of</span> <span class="in">of</span> <b>emotion</b>!</p>
        <span class="footnote">--Ron Burgundy</span>
    </div>

    
    <div id="overview" class="step" data-x="3000" data-y="1500" data-scale="10">
    </div>

</div>


<div class="hint">
    <p>Use a spacebar or arrow keys to navigate</p>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!-- Impress.js script  -->
     <script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>


<script src="js/impress.js"></script>
<script>impress().init();</script>

  </body>
</html>