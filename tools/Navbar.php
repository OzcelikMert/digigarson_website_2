 <!-- Navbar -->
 <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" id="uswgt">
        <a class="navbar-brand logo-image" href="index.php"><img src="images/DigigarsonLogo.png" alt="alternative"></a> 
        <div class="sign_div mobile-sign hide-mobile">
        </div>
        <input type="checkbox" id="menuToggler" class="input-toggler" value="1" autofocus="true"/>
        <label for="menuToggler" id="menuTogglerLabel" class="menu-toggler" role="button" aria-pressed="false" aria-expanded="false" aria-label="Navigation button">
        <span class="menu-toggler__line"></span>
        <span class="menu-toggler__line"></span>
        <span class="menu-toggler__line"></span>
        </label>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header"><?php echo $Menu_1_title; ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features"><?php echo $Menu_2_title; ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#preview"><?php echo $Menu_3_title; ?> </a>
                </li>
                
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $Menu_4_title; ?> </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="privacy-policy.php"><span class="item-text"><?php echo $Menu_4_title_1; ?> </span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="cookie-policy.php"><span class="item-text"><?php echo $Menu_4_title_2; ?> </span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="distance-sale-contract.php"><span class="item-text"><?php echo $Menu_4_title_3; ?> </span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact"><?php echo $Menu_5_title; ?> </a>
                </li>
                <li class="nav-item dropdown flag-lang">
                    <a class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" style="color:white;"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/tr"><img src="./images/flag/tr.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">Türkçe</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/en"><img src="./images/flag/en.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">English</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/de"><img src="./images/flag/de.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">Deutsch</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/is"><img src="./images/flag/ar.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">العربية</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/es"><img src="./images/flag/es.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">Español</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/ru"><img src="./images/flag/ru.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">Pусский</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="/fr"><img src="./images/flag/fr.png" style="height:20px;margin-right:10px;" alt=""><span class="item-text">Français</span></a>
                    </div>
                </li>
            </ul>
            
            
        </div>
        <?php include("./tools/Sidebar.php"); ?>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->
    
    
