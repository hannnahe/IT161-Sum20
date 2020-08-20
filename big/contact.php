<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Web Developer Examples and Resources by Hannah Eberts</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <body>
     
     
   <main>
       <header>
     <h1> <a href="index.html">Web Developer Examples and Resources by Hannah Eberts</a></h1>
      <h1> <a href="index.html">Web Developer Examples and Resources by Hannah Eberts</a></h1>
       <nav id="cssmenu">
        <ul>
     <li><a href="../index.html"><i class="fa fa-cube"></i> IT161</a></li>
     <li><a href="index.html"><i class="fa fa-smile-o"></i> BIG</a></li>
    <li><a href="#"><i class="fa fa-bars"></i> Research Projects</a>
        <ul>
           <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
            <li><a href="forms.html"><i class="fa fa-circle-thin"></i> Forms</a></li>
            <li><a href="smo.html"><i class="fa fa-diamond"></i> SMO</a></li>  
        </ul>
    <li><a href="gallery.html"><i class="fa fa-folder-o"></i> Images</a></li>
    <li><a href="#"><i class="	fa fa-gear"></i> Google Tools</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-star-o"></i> Contact Hannah</a></li>
  </ul>
     </nav>
     </header>
     <!-- START LEFT COLUMN -->
<section class="fullwidth">
    <h2 class="subheader">Contact Hannah</h2>
<div class="form-wrapper">
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ebertshannah@gmail.com";  //place your/your client's email address here
        $toName = "Hannah Eberts"; //place your client's name here
        $website = "Hannah's IT161 Site";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </div>
</section>
<!-- END LEFT COLUMN -->


     
       
     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Hannah Eberts</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
 
     
 </body>
</html>