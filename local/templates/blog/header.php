<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Page\Asset;
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<? $APPLICATION->ShowHead() ?>
<title><? $APPLICATION->ShowTitle() ?></title>
<?
	
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');
	Asset::getInstance()->addString('<meta name="keywords" content="FeedLive iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />');
	Asset::getInstance()->addString("<link href='//fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>");



?>
	
</head>
<body>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!---start-wrap---->
<div class="wrap">
<!---start-sidebar---->
<div class="left-sidebar">
	<div class="logo">
		<a href="/"><img src="<?=DEFAULT_TEMPLATE_PATH?>/images/logo.png" title="logo" /></a>
		<h1>Feedlive Blogger site</h1>
	</div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

</div>
<!----start-content----->
<div class="content">