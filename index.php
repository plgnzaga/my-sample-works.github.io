<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Paulfolio</title>
        
        <link rel="stylesheet" href="css/newstyle.css">
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
         


    </head>

<body>
        <div class="banner">
           
            <h1>Hi! I'm Paul Gonzaga</h1>
        </div>

        

<div class="wrapper">
   <div class="portfolio">

    <section class="one">
      <a href="pldesigns/index.html">
        <img class="img-responsive grayscale" src="css/images/pldesigns.jpg">
      </a>
    </section>

    <section class="two">
      <a href="univman/index.php">
        <img class="img-responsive grayscale" src="css/images/univman.jpg">
      </a>
    </section>
    <section class="three">
      <a href="betsin-art-parasites/index.php">
        <img class="img-responsive grayscale" src="css/images/betsin-arts.jpg">
      </a>
    </section>
    <section class="four">
       <a href="CafeDeEspadana/index.php">
        <img class="img-responsive grayscale" src="css/images/cafe-de-espadana.jpg">
      </a>
    </section>
    <section class="five">
       <a href="tumblr_shirts/index.html">
        <img class="img-responsive grayscale" src="css/images/tumblr.png">
      </a>
    </section>
    <section class="six">
      <a href="LizaSoberano/index.php">
        <img class="img-responsive grayscale" src="css/images/hope-blog.jpg">
      </a>
    </section>
    <section class="seven">
       <a href="http://spi-global-ph.890m.com">
        <img class="img-responsive grayscale" src="css/images/spi.jpg">
      </a>
    </section>
    <section class="eight">
      <a href="vlogger/index.html">
        <img class="img-responsive grayscale" src="css/images/vlogger.png">
      </a>
    </section>
    <section class="nine">
       <a href="wanderer/index.php">
        <img class="img-responsive grayscale" src="css/images/wanderer.jpg">
      </a>
    </section>
    <section class="ten">
      <a href="webdev-quiz/index.php">
        <img class="img-responsive grayscale" src="css/images/webby.jpg">
      </a>
    </section>
    <section class="eleven">
      <a href="sleek/index.php">
        <img class="img-responsive grayscale" src="css/images/sleek.jpg">
      </a>
    </section>
    <section class="twelve">
      <a href="white-walkers/index.php"> 
        <img class="img-responsive grayscale" src="css/images/white-walkers.jpg">
      </a>
    </section>
    <section class="thirteen">
       <a href="typecast/index.php">
        <img class="img-responsive grayscale" src="css/images/typecast.jpg"  >
        </a>
    </section>

    </div>           
</div>



<footer>
   <p>&copy; Paul Stephen T. Gonzaga </p>
        <p>All Rights Reserved <?php echo date("Y"); ?></p>
    

</footer>

   
</body>

  <script>
        $(document).ready(function(){
            $(".wrapper img").mouseover(function(){
              $(this).toggleClass("grayscale");
            });
               $(".wrapper img").mouseout(function(){
              $(this).toggleClass("grayscale");
            });
            
        });
  </script>


</html>