<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/leobtslider/themes/default/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15393793985544a20f96db98-71882467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aee338fd0d8dfb4346a2083ab9d2078f7fdbe030' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/leobtslider/themes/default/default.tpl',
      1 => 1430587436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15393793985544a20f96db98-71882467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20f9d0d94_48528816',
  'variables' => 
  array (
    'leobtslider_modid' => 0,
    'leobtslider_slides' => 0,
    'slide' => 0,
    'leobtslider' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20f9d0d94_48528816')) {function content_5544a20f9d0d94_48528816($_smarty_tpl) {?>
<div id="leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" class="carousel slide leobttslider">
	<div class="carousel-inner">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidename']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slidename']['index']++;
?>
			<div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slidename']['index']==0){?> active<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" /></a>
				<?php }else{ ?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['mainimage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']){?>
					<div class="slide-info">
						<h1><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</h1>
						<div><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
					</div>
				<?php }?>
			</div>
		<?php } ?>
	</div> 

	<?php if (count($_smarty_tpl->tpl_vars['leobtslider_slides']->value)>1){?>
		<?php if ($_smarty_tpl->tpl_vars['leobtslider']->value['image_navigator']){?>
			<ol class="carousel-indicators thumb-indicators hidden-phone">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']++;
?>
				<li data-target="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index']==0){?>active<?php }?>">
					<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumbnail'];?>
"/>
				</li>
			<?php } ?>
			</ol>
		<?php }else{ ?>
			<ol class="carousel-indicators">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leobtslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemname']['index']++;
?>
				<li data-target="#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemname']['index']==0){?>active<?php }?>"></li>
			<?php } ?>
			</ol>
		<?php }?>
	<?php }?>
	
</div>
<?php if ($_smarty_tpl->tpl_vars['leobtslider']->value['auto']){?>
<script type="text/javascript">
	
	jQuery(document).ready(function(){
		$('#leobttslider<?php echo $_smarty_tpl->tpl_vars['leobtslider_modid']->value;?>
').carousel({
		  interval: <?php echo $_smarty_tpl->tpl_vars['leobtslider']->value['delay'];?>

		});
	});
	
</script>
<?php }?><?php }} ?>