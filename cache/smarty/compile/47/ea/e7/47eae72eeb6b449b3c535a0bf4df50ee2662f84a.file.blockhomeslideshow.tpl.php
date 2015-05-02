<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:21:13
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/modules/blockhomeslideshow/blockhomeslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46568354655446a46dd93c6-84977469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47eae72eeb6b449b3c535a0bf4df50ee2662f84a' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/modules/blockhomeslideshow/blockhomeslideshow.tpl',
      1 => 1430547498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46568354655446a46dd93c6-84977469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a46def7e3_86725711',
  'variables' => 
  array (
    'page_name' => 0,
    'this_path' => 0,
    'outputtops' => 0,
    'outputtop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a46def7e3_86725711')) {function content_55446a46def7e3_86725711($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<!-- Module Editorial -->
<link href="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/prod.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/jquery_002.js"></script>

<script type="text/javascript" charset="utf-8">
$(window).load(function()
{
	init_slideshow()
})

init_slideshow = function()
{
	$('#home_slides').cycle({
		fx:'fade',
		timeout:8000,
		pager:'#slide_navigation',
		after:update_slide_caption,
		before:fade_slide_caption
	})
}

fade_slide_caption = function(next, previous)
{
	caption_container = $('#project_caption')
	caption_container.fadeOut('fast')
}

update_slide_caption = function(next, previous)
{
	caption_container = $('#project_caption')

	caption = $('span.slide_caption', previous)
	caption_container.fadeIn('fast')
	caption_container.html(caption.html())
	
}
</script>

<div id="home_slideshow">
 <ul style="position: relative; width: 965px; height: 337px !important;background-color:transparent;" id="home_slides">
 <?php  $_smarty_tpl->tpl_vars['outputtop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['outputtop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['outputtops']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['outputtop']->key => $_smarty_tpl->tpl_vars['outputtop']->value){
$_smarty_tpl->tpl_vars['outputtop']->_loop = true;
?>                
 <li style="position: absolute; top: 0px; left: 0px; display: list-item; z-index: 4; opacity: 1;"> 
	 <a href="<?php echo $_smarty_tpl->tpl_vars['outputtop']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['outputtop']->value['name'];?>
"></a>
 </li>
<?php } ?>
	</ul>
<div id="home_slideshow_violator" class="clearfix">
 <div style="display: block;" id="project_caption"></div><div id="slide_navigation" class="clearfix"></div>
</div>
</div>
<?php }?><?php }} ?>