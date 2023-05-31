<!-- Header -->
<header id="header" class="header">
    <div id="demo-1" data-zs-src='["./Slider_images/image-1.jpg", "./Slider_images/image-2.jpg", "./Slider_images/image-3.jpg", "./Slider_images/image-4.jpg"]' data-zs-overlay="dots">
    <div class="header-content">
        <div class="container mobile-container">
            <div class="row  wow bounceInDown" data-wow-delay="0.5s">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 style="color:white !important;text-shadow: #337ab7 1px 3px;"><?php echo $Header_title; ?><br> <span id="js-rotating"><?php echo $Header_slogan_content; ?></span></h1>
                        <h3 style="color: #fff; text-shadow: 2px 2px #656565;font-weight: 400;font-size: 20px;"><?php echo $Header_comment; echo "<br><br>"; ?></h3>
                        <a class="btn-solid-lg page-scroll" href="#contact"><i class="fab fa fa-comment"></i><?php echo $Header_button_1; ?></a>
                        <a class="btn-solid-lg page-scroll" href="#download"><i class="fab fa fa-unlock"></i><?php echo $Header_button_2; ?></a>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid kf-updown" src="<?php echo $Header_image_url; ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</div>
</header> <!-- end of header -->
<!-- end of header -->
<!-- Slider Script -->