<?php
defined('_JEXEC') or die('Restricted access');
function modChrome_lvround_left($module, &$params, &$attribs)
{ ?>
<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
<?php if ($module->showtitle != 0) : ?>
<div class="h3-ml"><h3 class="module"><strong><?php echo $module->title; ?></strong></h3></div>
<?php endif; ?>
<div><div><div><?php echo $module->content; ?></div></div></div></div>
<?php
}
function modChrome_lvround_right($module, &$params, &$attribs)
{ ?>
<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
<?php if ($module->showtitle != 0) : ?>
<div class="h3-mr"><h3 class="module"><strong><?php echo $module->title; ?></strong></h3></div>
<?php endif; ?>
<div><div><div><?php echo $module->content; ?></div></div></div></div>
<?php
}
function modChrome_lvround($module, &$params, &$attribs)
{ ?>
<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
<?php if ($module->showtitle != 0) : ?>
<h3 class="module"><strong><?php echo $module->title; ?></strong></h3>
<?php endif; ?>
<div><div><div><?php echo $module->content; ?></div></div></div></div>
<?php
}