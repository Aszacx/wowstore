<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/lofmanufacturerscroll2/lofmanufacturerscroll2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12887565735544a2104db178-75862857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '338842e007db12ae976baae95bf99b5d01a380d5' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/lofmanufacturerscroll2/lofmanufacturerscroll2.tpl',
      1 => 1430588261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12887565735544a2104db178-75862857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a2104f18e1_80608313',
  'variables' => 
  array (
    'show_title' => 0,
    'module_title' => 0,
    'lofmanufacturers' => 0,
    'manufacturer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a2104f18e1_80608313')) {function content_5544a2104f18e1_80608313($_smarty_tpl) {?><div id="mycarouselHolder" align="center" class="block">
	<div class="row-fluid">
		<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>
			<div class="span3">
				<h2><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h2>
			</div>
		<?php }?>		
		<div class="<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>span9<?php }?> jcarousel-wrap">		
			<div id="wrap">
			  <ul id="lofjcarousel" class="jcarousel-skin-tango">
				<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lofmanufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
					<li class="lof-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['link'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['linkIMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" vspace="0" border="0" />
							
						</a>
					</li>
				<?php } ?>
			  </ul>
			</div>
		</div>
	</div>
</div><?php }} ?>