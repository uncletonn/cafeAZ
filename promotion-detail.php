<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Amazon</title>

	    <meta name="description" content="Amazon" />
	    <meta name="keywords" content="Amazon" />
	    <meta name="author" content="Amazon" />

	    <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/pushy.css">
        <link rel="stylesheet" href="css/app.css">
    </head>

    <body>


        <!-- MENU -->
        <?php include('inc-menu.php'); ?>

        <!-- Banner -->
        <div id="landing-content" style="background-image: url('images/banner/products-banner-layer1.png');">
            <img src="images/banner/products-banner-layer2.png" class="slide-layer-1"></img>
        </div>


        <!-- Products Detail -->
        <div class="products-detail margin-section">
            <div class="row">
                <div class="columns small-12 medium-6 large-6 text-center">
                    <div class="promotions-detail-slide-show">
                        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
                            <ul class="orbit-container">
                                <li class="is-active orbit-slide">
                                    <img class="orbit-image" src="images/promotion01.jpg" width="100%" alt="Space">
                                </li>
                                <li class="orbit-slide">
                                    <img class="orbit-image" src="images/promotion02.jpg" width="100%" alt="Space">
                                </li>
                            </ul>

                            <nav class="orbit-bullets">
                                <button class="is-active" data-slide="0"></button>
                                <button data-slide="1"></button>
                            </nav>
                        </div>
                    </div>
                    <div>
                        <button class="btn-branch">ค้นหาสาขา <img src="images/icon_pin_location.png" class="branch-pin" /></button>
                    </div>
                </div>
                <div class="columns small-12 medium-6 large-6 fonts_dbadmanx product-detail-content">
                    <div class="promotions-detail-header">4 เมนูสุขภาพ</div>
                    <div class="promotions-detail-header-l2">ดื่มได้ตลอดเทศกาลเจ</div>
                    <div class="promotions-detail-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="row margin-bottom50">
                        <div class="columns small-4 medium-4 large-6 text-left sectiop-goback">
                            <div class="goback-to-products">
                                <!--a href=""-->
                                    <div class="icon-goback"></div>
                                    <div class="txt-goback weight_bold">กลับ</div>
                                <!--/a-->
                            </div>
                        </div>
                        <div class="columns small-8 medium-8 large-6 text-right section-social">
                            <div class="share-to-social weight_bold">แชร ์</div>
                            <div class="share-to-social">&nbsp;&nbsp;|&nbsp;&nbsp;</div>
                            <div class="share-to-social">
                                <div class="social-share ss-twitter"></div>
                                <div class="social-share ss-facebook"></div>
                                <div class="social-share ss-googleplus"></div>
                                <div class="social-share ss-print"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <?php include('inc-footer.php'); ?>


        <script src="js/jquery.js"></script>
        <script src="js/what-input.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/pushy.min.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>