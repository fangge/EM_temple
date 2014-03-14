<?php
/*
Template Name:外国语学院
Description:广东技术示范学院外国语学院
Version:1.1
Author:Mr.F
Author Url:fangge-sun.blog.163.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
<head>
<meta charset="utf-8"/>
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="viewport" content="width=device-width,maximum-scale=1.0">
<meta name="generator" content="emlog" />
<meta name="front-end technicist" content="MrF" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<meta name="renderer" content="webkit">
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet" type="text/css" />
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo TEMPLATE_URL; ?>iefix.js" type="text/javascript"></script>
<![endif]-->
<!--[if lte IE 9]><script charset="gb2312" src="<?php echo TEMPLATE_URL; ?>html5shiv.js"></script><![endif]-->
<?php doAction('index_head'); ?>
</head>
<body>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div id="wrap">
    <header>
        <img src="<?php echo TEMPLATE_URL; ?>/img/header.jpg" alt="外国语学院LOGO"/>
        <a id="logo" class="g-thide" href="<?php echo BLOG_URL; ?>" title="<?php echo $site_title; ?>" target="_blank"><?php echo $site_title; ?></a>
    </header>
    <nav>
        <a href="javascript:void(0)" id="openNav"><img src="<?php echo TEMPLATE_URL; ?>/img/opennav.jpg" alt="打开导航" title="打开导航"></a>
        <a href="javascript:void(0)" id="closeNav"><img src="<?php echo TEMPLATE_URL; ?>/img/close.gif" alt="关闭导航" title="关闭导航"></a>
        <?php blog_navi();?>
    </nav>
