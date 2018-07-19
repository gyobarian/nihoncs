<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="日本キャピタル証券株式会社は、証券会社投資・ビジネスにおいて「情報」こそ最も重要なエレメンツです。 独自の情報ネットワークにより、きめ細かなインテリジェンスの提供を行います。" />
    <meta name="keywords" content="日本キャピタル証券,投資,外国株,シンガポール株,台湾株,ロボット,ロボアドバイザー,投資信託," />
    <meta name="author" content="日本キャピタル証券株式会社" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(
        array(
            'animate.css',
            'icomoon.css',
            'themify-icons.css',
            'bootstrap.css',
            'magnific-popup.css',
            'bootstrap-datetimepicker.min.css',
            'owl.carousel.min.css',
            'owl.theme.default.min.css',
            'style.css',
            'extend.css',
        )
    ) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <!-- <div class="container clearfix"> -->
    <!-- <div class="page-inner"> -->
    <div class="gtco-loader"></div>
    
    <div id="page">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']) ?>">Savory <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="menu.html">Menu</a></li>
                            <li class="has-dropdown">
                                <a href="#">Services</a>
                                <ul class="dropdown">
                                    <li><a href="#">Food Catering</a></li>
                                    <li><a href="#">Wedding Celebration</a></li>
                                    <li><a href="#">Birthday's Celebration</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
                        </ul>   
                    </div>
                </div>
                
            </div>
        </nav>

        <?= $this->fetch('content') ?>

    </div>
    <!-- </div> -->
    <footer id="gtco-footer" role="contentinfo" style="background-image: url(/images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row row-pb-md">

                

                
                <div class="col-md-12 text-center">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                    <div class="gtco-widget">
                        <h3>Get Social</h3>
                        <ul class="gtco-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 text-center copyright">
                    <p><small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
                        <small class="block">Designed by <a href="http://gettemplates.co/" target="_blank">GetTemplates.co</a> Demo /images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
                </div>

            </div>

            

        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <?= $this->Html->script(
        array(
            'modernizr-2.6.2.min.js',
            'jquery.min.js',
            'jquery.easing.1.3.js',
            'bootstrap.min.js',
            'jquery.waypoints.min.js',
            'owl.carousel.min.js',
            'jquery.countTo.js',
            'jquery.stellar.min.js',
            'jquery.magnific-popup.min.js',
            'magnific-popup-options.js',
            'moment.min.js',
            'bootstrap-datetimepicker.min.js',
            'main.js',
            'extend.js',
        )
    ) ?>
    
    <!-- 郵便番号から住所自動入力 -->
    <script type="text/javascript" src="//jpostal-1006.appspot.com/jquery.jpostal.js"></script>

</body>
</html>
