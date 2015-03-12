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
<div id="loader"><?php echo CHtml::image('images/preloader.gif'); ?></div>
<div id="page">
	<?php echo $content; ?>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/blur.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick.min.js"></script>
</body>
</html>
