<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:04:33
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1156871600554503a1361335-78014440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17fba69865214ecaf17b4bf7c18d94ebf5c1afb7' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1430584651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1156871600554503a1361335-78014440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554503a13681d0_76302731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554503a13681d0_76302731')) {function content_554503a13681d0_76302731($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>