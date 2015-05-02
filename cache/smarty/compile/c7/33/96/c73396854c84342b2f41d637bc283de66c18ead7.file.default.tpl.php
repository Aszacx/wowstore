<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 10:46:29
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/leobtslidermini/themes/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:919097115544f155343239-10814724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73396854c84342b2f41d637bc283de66c18ead7' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/leobtslidermini/themes/default/default.tpl',
      1 => 1430562065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '919097115544f155343239-10814724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leobtslidermini_modid' => 0,
    'leobtslidermini_slides' => 0,
    'slidemini' => 0,
    'leobtslidermini' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544f15539e1f5_58919401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544f15539e1f5_58919401')) {function content_5544f15539e1f5_58919401($_smarty_tpl) {?><div class="span4">
<div id="leobttslidermini<?php echo $_smarty_tpl->tpl_vars['leobtslidermini_modid']->value;?>
" class="carousel slide leobttslidermini block_box">
	<div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['slidemini'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slidemini']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslidermini_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidenamemini']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slidemini']->key => $_smarty_tpl->tpl_vars['slidemini']->value){
$_smarty_tpl->tpl_vars['slidemini']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidenamemini']['index']++;
?>
			<div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slidenamemini']['index']==0){?> active<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['slidemini']->value['url']){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['slidemini']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slidemini']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidemini']->value['title'];?>
" /></a>
				<?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['slidemini']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slidemini']->value['title'];?>
" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slidemini']->value['title']||$_smarty_tpl->tpl_vars['slidemini']->value['description']){?>
					<div class="slide-info">
						<h1><?php echo $_smarty_tpl->tpl_vars['slidemini']->value['title'];?>
</h1>
						<div class="desc"><?php echo $_smarty_tpl->tpl_vars['slidemini']->value['description'];?>
</div>
					</div>
				<?php }?>
			</div>
		<?php } ?>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['leobtslidermini_slides']->value)>1){?>
	<a class="carousel-control left" href="#leobttslidermini<?php echo $_smarty_tpl->tpl_vars['leobtslidermini_modid']->value;?>
" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#leobttslidermini<?php echo $_smarty_tpl->tpl_vars['leobtslidermini_modid']->value;?>
" data-slide="next">&rsaquo;</a>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['leobtslidermini_slides']->value)>1){?>
		<?php if ($_smarty_tpl->tpl_vars['leobtslidermini']->value['image_navigator']){?>
			<ol class="carousel-indicators thumb-indicators hidden-phone">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslidermini_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']++;
?>
				<li data-target="#leobttslidermini<?php echo $_smarty_tpl->tpl_vars['leobtslidermini_modid']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index']==0){?>active<?php }?>">
					<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
"/>
				</li>
			<?php } ?>
			</ol> 
		<?php }?>
	<?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['leobtslidermini']->value['auto']){?>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		$('#leobttslidermini<?php echo $_smarty_tpl->tpl_vars['leobtslidermini_modid']->value;?>
').carousel({
		  interval: <?php echo $_smarty_tpl->tpl_vars['leobtslidermini']->value['delay'];?>

		});
	});
	
</script>
<?php }?><?php }} ?>