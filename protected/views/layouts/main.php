<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/core.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/owl.carousel.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/owl.transitions.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick-theme.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!--<div id="loader">--><?php //echo CHtml::image('images/preloader.gif'); ?><!--</div>-->
<div id="page">
    <div class="fixed_element">
        <div class="left_menu blur">
            <div class="left_menu_wrap">
                <div class="menu-lang">
                    <ul>
                        <li>LT</li>
                        <li>EN</li>
                        <li>RU</li>
                    </ul>
                </div>
            </div>
            <div class="menu-line"></div>
            <div class="left_menu_wrap">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/call-icon.png" alt="">
                <ul class="menu-list">
                    <li>Projektų vadovas:</li>
                    <li class="bold">+370 658 55696</li>
                </ul>
            </div>
            <div class="menu-line"></div>
            <div class="left_menu_wrap">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/skype-icon.png" alt="">
                <ul class="menu-list">
                    <li>Skype status:</li>
                    <li class="bold">Online</li>
                </ul>
            </div>
            <div class="menu-line"></div>
            <div class="left_menu_wrap">
                <div class="left_menu_choice">
                    <h1 onclick="jumpTo(0);" class="menu_item selected">Pagrindinis</h1>
                    <h1 onclick="jumpTo(1);" class="menu_item">Darbo metodika</h1>
                    <p class="menu_item_description">Išsiskiriame kūrybiškumu ir lankstumu. Pateikiame patikimus, inovatyvius, bei kokybiškus techninius sprendimus.</p>
                    <h1 onclick="jumpTo(2);" class="menu_item">Darbo sritys</h1>
                    <p class="menu_item_description">Vertiname kokybę, todėl specializuojamės tik į tai ką sugebame atlikti geriausiai. Esame inovatyvūs, todėl neįmanomų užduočių mums nėra.</p>
                    <h1 onclick="jumpTo(3);" class="menu_item">Mūsų darbai</h1>
                    <p class="menu_item_description">Didžiuojamės visais savo darbais. Čia rasite mūsų darbus, kuriais galime pasidalinti su Jumis (konfidencialumas viena iš didžiausių mūsų vertybių).</p>
                    <h1 onclick="jumpTo(4);" class="menu_item">Kontaktai</h1>
                </div>
            </div>
            <div class="left_menu_wrap">
                <div class="menu-bottom">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/menu_img/cc-metaliksa.png" alt="">
                </div>
            </div>
        </div>
    </div>
	<?php echo $content; ?>
    <div class="preloader" style="display: none;"></div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/blur.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick.min.js"></script>
</body>
</html>
