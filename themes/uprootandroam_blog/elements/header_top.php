<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
<head>

	<?php $this->inc('elements/analytics_tags_testing.php'); ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">

    <!-- Start Polo Theme -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="<?php echo $view->getThemePath()?>/css/plugins.css" rel="stylesheet">
    <link href="<?php echo $view->getThemePath()?>/css/style.css" rel="stylesheet">
    <link href="<?php echo $view->getThemePath()?>/css/responsive.css" rel="stylesheet">
    <!-- End Polo Theme -->

	<?php echo $html->css($view->getStylesheet('main.less')) ?>
	<?php View::element('header_required', [
		'pageTitle' => isset($pageTitle) ? $pageTitle : '',
		'pageDescription' => isset($pageDescription) ? $pageDescription : '',
		'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
	]);?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="<?php echo $c->getPageWrapperClass()?>" id="wrapper">
