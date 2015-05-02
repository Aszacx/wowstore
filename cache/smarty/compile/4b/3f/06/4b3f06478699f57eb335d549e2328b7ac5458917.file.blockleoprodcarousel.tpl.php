<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockleoprodcarousel/blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12366071285544a20f9e3b95-59376919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3f06478699f57eb335d549e2328b7ac5458917' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockleoprodcarousel/blockleoprodcarousel.tpl',
      1 => 1430588182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12366071285544a20f9e3b95-59376919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20f9f3ef5_88740592',
  'variables' => 
  array (
    'products' => 0,
    'product_tpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20f9f3ef5_88740592')) {function content_5544a20f9f3ef5_88740592($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="categoriesprodtabs" class="block products_block exclusive blockleoprodcarousel">
	<h4 class="title-style title_block">
		<span><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</span>
	</h4>
	<div class="block_content">	
		<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)){?>
			<?php $_smarty_tpl->tpl_vars['tabname'] = new Smarty_variable("leoproductcarousel", null, 0);?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['product_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
		<?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<script>
$(document).ready(function() {
    $('.carousel').each(function(){
        $(this).carousel({
            pause: true,
            interval: false
        });
    });
	 
});
</script>
 <?php }} ?>