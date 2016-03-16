<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<style>

/*Список PTC-сайтов*/
﻿h2.zh2{color:#3D3D3D;margin-left:10px}
#regTable{background:#F9F9F9;border:2px solid #AEABC8}
#regTable td{padding:3px 5px;border-color:#AEABC8}
#regTable a:hover{text-decoration:none}

/*Управление PTC*/
table.ptc_list{margin-top:5px;background:#F9F9F9}
table.ptc_list td{border:1px solid #AEABC8}
table.ptc_list tr:hover{background:#ECECF8}
table.ptc_list td:hover{background:#D8D8F3}
table.ptc_list a:hover{text-decoration:none}

</style>
<head>
<?php JHtml::_('behavior.framework', true); ?>
<jdoc:include type="head" />
<?php require("head_includes.php"); ?>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21560087-3']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
  (function($){
     $('#mod_login_messagesimg').remove();    
     var mlpms = $('#mod_login_pms').css({
        'position':'fixed',
        'background':'url(http://championptc.ru/images/asd.gif) no-repeat center center',
        'width':'213px',
        'height':'140px',
        'z-index':'9999',
        'top':'-40%',
        'left':'50%',
        'margin-left':'-106px'
     });
      setTimeout(function(){
        mlpms.animate({'top':'40%'},1000);
      },2000);    
     $('#mod_login_messagestext').css({
        'width':'190px',
        'height':'auto',
        'color':'#8E1212',
        'display':'block',
        'font-weight':'700',
        'margin-top':'-10px',
        'margin-left':'10px',
        'font-size':'10px'
     });     
     $('#mod_login_messagestext').hover(function(){
        $(this).css('color','red');
     },function(){
        $(this).css('color','#8E1212');
     });
      
$('div.module_menu a:contains(Не кликать)').css({'color':'red','fontWeight':'700'}).after('<span id="anti" style="margin-left:15px;padding:3px 10px;">&nbsp;</span>');

$('#anti').css({'background':'url(http://championptc.ru/images/anti.gif) 0 -5px no-repeat'});

//Инпуты таблички добавления букса
$('input[name=name]:first').css({'margin-left':'54px','width':'280px'});
$('input[name=url]:first').css({'margin-left':'63px','width':'280px'});
$('input[name=price]:first').css('margin-left','7px');
$('input[name=forum]:first').css('width','280px');
     
})(jQuery);
});/*Конец реди*/
</script>
</head>
<body>
<div id="upperLeftCorner"></div><div id="upperRightCorner"></div><div id="topimg"><div id="topimg2"></div></div>
<?php if (($this->params->get('whatWidth')) ==1) : ?>
<div id="wrapper" style="max-width:<?php echo  $this->params->get('pageMaxWidth');?>;">
<?php endif;?>
<?php if (($this->params->get('whatWidth')) ==0) : ?>
<div id="wrapper" style="width:<?php echo  $this->params->get('pageWidth');?>;">
<?php endif;?>
<?php if($this->countModules('toppanel')) : ?>
<div id="toppanel"><jdoc:include type="modules" name="toppanel" /></div>
<a href="#" title="Верхняя панель :: Клик мышью" id="togglelink"><span></span></a>
<?php endif;?>
<?php require("modules/beforehead.php"); ?>
<div id="header_container">
<div id="header">
<?php if($this->countModules('headermodule1')) : ?>
<div id="headermodule1"><jdoc:include type="modules" name="headermodule1" /></div>
<?php endif; ?>			
<?php if($this->countModules('banner')) : ?>
<div id="banner_outer"><div id="banner"><jdoc:include type="modules" name="banner"/></div></div>
<?php endif; ?>			
<div id="logo">
<?php if (($this->params->get('showimgLogo')) !=0) : ?>				
<a class="imglogo" href="index.php"><img alt="Logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo/<?php echo  $this->params->get('imgLogo');?>"/></a>
<?php endif;?>
<?php if (($this->params->get('showtextLogo')) !=0) : ?>				
<a style="color:#<?php echo  $this->params->get('logoColor');?>;" class="logo" href="index.php"><?php echo  $this->params->get('textLogo');?></a>
<?php endif;?>
<?php if (($this->params->get('showSlogan')) !=0) : ?>				
<div style="color:#<?php echo  $this->params->get('sloganColor');?>;" class="slogan"><?php echo  $this->params->get('slogan');?></div>
<?php endif;?>
</div>	
<?php if($this->countModules('headermodule2')) : ?>
<div id="headermodule2"><jdoc:include type="modules" name="headermodule2" /></div>
<?php endif; ?>			
</div>
<?php require("modules/afterhead.php"); ?>
<div id="navigation_container">
<?php if($this->countModules('user3')) : ?>
<div id="navigation"><jdoc:include type="modules" name="user3" /></div>
<div class="clr"></div>
<?php endif; ?>
</div>
<?php if($this->countModules('slider')) : ?>
<div id="slider"><jdoc:include type="modules" name="slider" /></div>
<?php endif; ?>
</div>
<?php if($this->countModules('breadcrumb or user4')) : ?>
<div id="subhead">
<?php if($this->countModules('breadcrumb')) : ?>
<div id="breadcrumb"><jdoc:include type="module" name="breadcrumbs" /></div>
<?php endif; ?>
<?php if($this->countModules('user4')) : ?>
<div id="search"><jdoc:include type="modules" name="user4" /></div>
<?php endif; ?>
</div>
<?php endif; ?>
<div id="container">
<?php require("modules/top.php"); ?>
<?php if($this->countModules('left')) : ?>
<div id="leftcol"><jdoc:include type="modules" name="left" style="lvround_left" /></div>
<?php endif; ?>		
<?php if($this->countModules('right')) : ?>
<div id="rightcol"><jdoc:include type="modules" name="right" style="lvround_right" /></div>
<?php endif; ?>		
<div id="content_out<?php echo $contentwidth; ?>">
<?php require("modules/advert_top.php"); ?>
<div id="maincontent"><jdoc:include type="message" /><jdoc:include type="component" /></div>
<?php require("modules/advert_btm.php"); ?>
</div><div class="clr"></div>
</div>
<div id="container2"><?php require("modules/bottom.php"); ?><div class="clr"></div></div>
</div>
<?php if (($this->params->get('whatWidth')) ==1) : ?>
<div id="foot_container" style="max-width:<?php echo  $this->params->get('pageMaxWidth');?>;">
<?php endif;?>
<?php if (($this->params->get('whatWidth')) ==0) : ?>
<div id="foot_container" style="width:<?php echo  $this->params->get('pageWidth');?>;">
<?php endif;?>
<?php require("modules/foot.php"); ?>
<?php if($this->countModules('footer')) : ?>
<div id="footer"><jdoc:include type="modules" name="footer" /></div>
<?php endif; ?>			
<div id="subfoot">
<?php if (($this->params->get('showCopy')) !=0) : ?>				
<div class="copytext">&copy; <?php echo JHTML::Date($this->date_field, "%Y"); ?> - <?php echo  $this->params->get('copyText');?></div>
<?php endif;?>
</div>
<div class="clr"></div>
<div id="copyout">
<div id="lbc"></div><div id="rbc"></div><div id="scroll_up"> <a href="#" id="gotop" title=""></a></div>
<div id="copy"><span> <?php echo JHTML::Date($this->date_field, "%A, %d. %B %Y"); ?> </span>
</div></div></div></div></div>
<jdoc:include type="modules" name="debug" />


<!-- Поместите этот вызов функции отображения в соответствующее место. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21532183 = new Ya.Metrika({id:21532183,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21532183" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body></html>