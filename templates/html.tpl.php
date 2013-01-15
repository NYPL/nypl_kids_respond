<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--[if lt IE 7]>  <html class="no-js ie ie6 lte9 lte8 lte7"> <![endif]-->
  <!--[if IE 7]>     <html class="no-js ie ie7 lte9 lte8 lte7"> <![endif]-->
  <!--[if IE 8]>     <html class="no-js ie ie8 lte9 lte8"> <![endif]-->
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
