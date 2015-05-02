<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 10:46:29
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleoprodcarousel/blockleoprodcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8586766105544f155230907-72813440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c23a31e595e153173ddc95e067268bf821b719c8' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleoprodcarousel/blockleoprodcarousel.tpl',
      1 => 1430561515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8586766105544f155230907-72813440',
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
  'unifunc' => 'content_5544f155244177_71853825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544f155244177_71853825')) {function content_5544f155244177_71853825($_smarty_tpl) {?>

<!-- MODULE Block specials -->
<div id="categoriesprodtabs" class="block products_block exclusive blockleoprodcarousel">
	<h3><?php echo smartyTranslate(array('s'=>'Latest Products','mod'=>'blockleoprodcarousel'),$_smarty_tpl);?>
</h3>
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