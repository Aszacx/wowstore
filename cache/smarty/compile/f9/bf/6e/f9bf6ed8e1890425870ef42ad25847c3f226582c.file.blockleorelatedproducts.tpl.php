<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:04:33
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockleorelatedproducts/blockleorelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139452599554503a111d525-36652166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9bf6ed8e1890425870ef42ad25847c3f226582c' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockleorelatedproducts/blockleorelatedproducts.tpl',
      1 => 1430584651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139452599554503a111d525-36652166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554503a115c910_64681579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554503a115c910_64681579')) {function content_554503a115c910_64681579($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="relatedproducts" class="block products_block exclusive blockleorelatedproducts">
	<h4 class="title-style title_block"> 
		<span><?php echo smartyTranslate(array('s'=>'Related products','mod'=>'blockleorelatedproducts'),$_smarty_tpl);?>
</span>
	</h4>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leorelatedcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.blockleorelatedproducts .carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>