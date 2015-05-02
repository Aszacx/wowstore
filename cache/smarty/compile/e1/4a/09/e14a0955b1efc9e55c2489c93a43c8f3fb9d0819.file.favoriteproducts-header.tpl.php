<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 17:37:39
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164839544355415d33ed2877-64484638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14a0955b1efc9e55c2489c93a43c8f3fb9d0819' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164839544355415d33ed2877-64484638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55415d33f1b5e4_08109578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415d33f1b5e4_08109578')) {function content_55415d33f1b5e4_08109578($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>