<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
  <?php if ($this->is('index')): ?><title>Cho's</title>
	<?php else: ?>
	<title><?php $this->archiveTitle('.', '', ' - '); ?>Cho's</title>
	<?php endif; ?>
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>">
    <![endif]-->
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
  <?php $this->header("generator=&template=&"); ?>
</head>
<body>
<div class="body404">
<div class="info404">
<header id="header404" class="clearfix">
  <div class="site-name404">
    <i>404</i>
  </div>
</header>
<section>
  <div class="title404"><p>每一个平凡的日常<br/>都是连续发生中的奇迹</p></div>
  <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">回首页看看</a>
</section>
<footer id="footer404">
	&copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?>.</span>
</footer>
</div>
</div>
<?php $this->footer(); ?>
</body>
</html>