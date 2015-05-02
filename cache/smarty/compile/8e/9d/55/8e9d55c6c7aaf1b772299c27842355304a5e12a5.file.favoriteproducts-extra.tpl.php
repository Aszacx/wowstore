<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:04:33
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1907133379554503a12ed211-80618439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e9d55c6c7aaf1b772299c27842355304a5e12a5' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl',
      1 => 1430584651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1907133379554503a12ed211-80618439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'isLogged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554503a1302316_42529078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554503a1302316_42529078')) {function content_554503a1302316_42529078($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['isLogged']->value){?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>