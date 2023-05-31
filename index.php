
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>DigiGarson | Zekiyim, Hızlıyım, Çalışkanım!</title>
    <link rel="stylesheet" type="text/css" href="./css/sidebar.css?v=<?=md5_file('css/sidebar.css')?>">
    <?php include("./tools/Head.php"); ?>
    <script src="animate/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="animate/animate.css">
</head>
<body data-spy="scroll" data-target=".fixed-top">
   <?php
     

     include("./tools/Preloader.php");
     // Language Start
     include("./tools/Values.php");
     // Language Finished
     
     include("./tools/TopNavbar.php");
     
     include("./tools/Navbar.php");
     
     include("./tools/Header.php");
     
     include("./tools/Features.php");
     
     include("./tools/Video.php");
     
     include("./tools/Details.php");
     
     include("./tools/DetailBox.php");
     
     include("./tools/Screenshots.php");
     
     //include("./tools/Testimonials.php");
     
     include("./tools/Download.php");
     
     include("./tools/Statistics.php");
     
     include("./tools/Contact.php");
     
     include("./tools/Footer.php");
     
     include("./tools/Copyright.php");
     
     include("./tools/Scripts.php");
     // TRYNOW Popup //
     include("./tools/Popup_trynow.php");
     include("./tools/Cookie.php");
     ?>

<script>
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
    );
    wow.init();
    </script>
<script src="./js/popup_trynow.js?v=<?=md5_file('./js/popup_trynow.js')?>"></script>
<script src='./js/sidebar.js?v=<?=md5_file('./js/sidebar.js')?>'></script>

</body>
</html>