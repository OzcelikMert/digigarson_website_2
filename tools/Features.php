<!-- Features -->
<div id="features" class="tabs t-bg2">
        <div class="container wow bounceInLeft"  data-wow-delay="0.2s">
            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo $Features_title; ?></h2>
                    <div class="p-heading p-large"><?php echo $Features_comment; ?><div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa fa-question"></i><?php echo $Features_menu1_title; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa fa-folder-open"></i><?php echo $Features_menu2_title; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa fa-language"></i><?php echo $Features_menu3_title; ?></a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="lenoTabsContent">
                    
                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card left-pane first">
                                        <div class="card-body mt-e90">
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item1; ?></h4>
                                                <p><?php echo $Features_menu1_item1_comment; ?></p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa fa-qrcode"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item2; ?></h4>
                                                <p><?php echo $Features_menu1_item2_comment; ?></p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa fa-cart-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item3; ?></h4>
                                                <p><?php echo $Features_menu1_item5_comment; ?></p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-gem"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane" >
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item7; ?></h4>
                                                <p><?php echo $Features_menu1_item7_comment; ?></p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa fa-assistive-listening-systems"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="<?php echo $Features_image_url_1; ?>" alt="alternative">
                                </div>
                                <!-- end of image pane -->
                                
                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4" >
                                    <div class="card right-pane first">
                                        <div class="card-body mt-e90">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item4; ?></h4>
                                                <p class="w120"><?php echo $Features_menu1_item4_comment; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item5; ?></h4>
                                                <p class="w120"><?php echo $Features_menu1_item3_comment; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="fas fa fa-hand-point-right"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title"><?php echo $Features_menu1_item6; ?></h4>
                                                <p class="w120"><?php echo $Features_menu1_item6_comment; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="<?php echo $Features_image_url_2; ?>" alt="alternative">
                                </div>
                                <!-- end of image pane -->
                                
                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="text-area">
                                        <h3><?php echo $Features_menu2_title; ?></h3>
                                        <p><?php echo $Features_menu2_title_comment; ?></p>
                                    </div> <!-- end of text-area -->
                                    
                                    <div class="icon-cards-area">
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="fas fa fa-chart-line"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item1; ?></h4>
                                                    <p><?php echo $Features_menu2_item1_comment; ?></p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa fa-hand-holding-usd"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item2; ?></h4>
                                                    <p><?php echo $Features_menu2_item2_comment; ?></p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa fa-chart-pie"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item3; ?></h4>
                                                    <p><?php echo $Features_menu2_item3_comment; ?></p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa fa-th"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item4; ?></h4>
                                                    <p><?php echo $Features_menu2_item4_comment; ?></p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa fa-donate"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item5; ?></h4>
                                                    <p><?php echo $Features_menu2_item5_comment; ?></p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-icon">
                                                    <i class="far fa fa-clipboard-check"></i>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $Features_menu2_item6; ?></h4>
                                                    <p><?php echo $Features_menu2_item6_comment; ?></p>
                                                </div>
                                            </div>
                                    </div> <!-- end of icon cards area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item1; ?></h4>
                                                <p><?php echo $Features_menu3_item1_comment; ?></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item2; ?></h4>
                                                <p><?php echo $Features_menu3_item2_comment; ?></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="fas fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item3; ?></h4>
                                                <p><?php echo $Features_menu3_item3_comment; ?><p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item4; ?></h4>
                                                <p><?php echo $Features_menu3_item4_comment; ?></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item5; ?></h4>
                                                <p><?php echo $Features_menu3_item5_comment; ?></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item6; ?></h4>
                                                <p><?php echo $Features_menu3_item6_comment; ?></p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa fa-language"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $Features_menu3_item7; ?></h4>
                                                <p><?php echo $Features_menu3_item7_comment; ?></p>
                                            </div>
                                        </div>
                                    </div> <!-- end of icon cards area -->
                                    
                                    <div class="text-area">
                                        <h3><?php echo $Features_menu3_title; ?></h3>
                                        <p><?php echo $Features_menu3_title_comment; ?><p>
                                    </div> <!-- end of text-area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class="col-md-4">
                                    <img class="img-fluid" src="images/language.png" alt="alternative">
                                </div>
                                <!-- end of image pane -->
                                    
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div><!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->
                    </div>
            </div> <!-- end of row --> 
        </div> <!-- end of container --> 
    </div> <!-- end of tabs -->
</div>
    <!-- end of features -->