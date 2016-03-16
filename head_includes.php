<meta name="designer" content="Team of Championptc - http://www.championptc.ru" />
<meta name="licence" content="Only for Championptc" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php if (($this->params->get('darkCss')) ==0) : ?>
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/modules.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>	
<?php if (($this->params->get('darkCss')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/css/dark/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/dark/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/dark/modules.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php if (($this->params->get('darkCss')) ==2) : ?>
<link href="templates/<?php echo $this->template ?>/css/rich/template.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/rich/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/rich/modules.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<!--[if IE 7]>
<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
img, div, h1, h3, pre, blockquote { behavior: url(templates/<?php echo $this->template ?>/js/iepngfix/iepngfix.htc) }
</style>
<![endif]-->
<?php if (($this->params->get('darkCss')) ==0) : ?>
<?php if (($this->params->get('ugol')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Sky_l.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php if (($this->params->get('ugol_r')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Sky_r.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php endif;?>
<?php if (($this->params->get('darkCss')) ==1) : ?>
<?php if (($this->params->get('ugol_night')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Night_l.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php if (($this->params->get('ugol_night_r')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Night_r.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php endif;?>
<?php if (($this->params->get('darkCss')) ==2) : ?>
<?php if (($this->params->get('ugol_rich')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Rich_l.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php if (($this->params->get('ugol_rich_r')) ==1) : ?>
<link href="templates/<?php echo $this->template ?>/addition/css/ugol_Rich_r.css" rel="stylesheet" type="text/css" media="all" />
<?php endif;?>
<?php endif;?>
<!--[if lte IE 6]>
<script src="<?php echo $this->baseurl ?>/templates/triple_champion/addition/js/DD_belatedPNG.js"></script>
<script>
DD_belatedPNG.fix("#upperLeftCorner, #upperRightCorner, #navigation a, #gotop, #lbc, #rbc, a#togglelink");
</script>
<![endif]-->
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/message.js"></script>
<?php if($this->countModules('toppanel')) : ?>
<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/toppanel.js"></script>
<?php endif;?>
<?php
if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
?>