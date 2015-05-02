<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:21:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/modules/blocknewproducts/blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158555386955446a47116c36-17483395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c9867cea71f06a82323437c9defcbd63bb7c604' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/modules/blocknewproducts/blocknewproducts.tpl',
      1 => 1430547523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158555386955446a47116c36-17483395',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a47161643_72705877',
  'variables' => 
  array (
    'link' => 0,
    'new_products' => 0,
    'product' => 0,
    'mediumSize' => 0,
    'newproduct' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a47161643_72705877')) {function content_55446a47161643_72705877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'Latest Store Irems','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Latest Store Items','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content">
	<?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false){?>
		<ul class="product_images clearfix">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['newProducts']['index']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['newProducts']['index']<3){?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium');?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['legend'], 'html', 'UTF-8');?>
" /></a><p class="new_p"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newproduct']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['name']), 'html', 'UTF-8');?>
</a></p></li>
			<?php }?>
		<?php } ?>
		</ul>
		<p class="new_p"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products.php');?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="button_large">&raquo; <?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></p>
	<?php }else{ ?>
		<p>&raquo; <?php echo smartyTranslate(array('s'=>'No new products at this time','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block new products --><?php }} ?>