<!DOCTYPE html>
<html lang="tr">
<head>
    <title>DigiGarson | Gizlilik Politikası</title>
    <?php include("./tools/Head.php") ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <?php 
    include("./tools/Preloader.php");
    
    include("./tools/Values.php");

    include("./tools/TopNavbar.php");
    ?>


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php echo $Privacy_Policy; ?></h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                
                    <div class="text-container">
                        <h3><?php echo $Privacy_Policy_title_1; ?></h3>
                        <p><?php echo $Privacy_Policy_title_1_comment; ?></p>
                    </div> <!-- end of text-container-->
                    
                    <div class="text-container">
                        <h3><?php echo $Privacy_Policy_title_2; ?></h3>
                        <p><?php echo $Privacy_Policy_title_2_comment; ?></p>
                    </div> <!-- end of text-container-->

                    <div class="text-container">
                        <h3><?php echo $Privacy_Policy_title_3; ?></h3>
                        <p><?php echo $Privacy_Policy_title_3_comment; ?></p>
                    </div> <!-- end of text-container-->

                    <div class="text-container">
                        <h3><?php echo $Privacy_Policy_title_5; ?></h3>
                        <p><?php echo $Privacy_Policy_title_5_comment; ?></p>
                    </div> <!-- end of text-container-->

                    <div class="text-container">
                        <h3><?php echo $Privacy_Policy_title_6; ?></h3>
                        <p><?php echo $Privacy_Policy_title_6_comment; ?></p>
                    </div> <!-- end of text-container-->
                                       
                    <a class="btn-outline-reg back" href="index.php"><?php echo $Privacy_Policy_button_1_title; ?></a>
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
    <!-- end of privacy content -->

    <?php include("./tools/Copyright.php"); ?>

    <?php include("./tools/Scripts.php"); ?>
</body>
</html>