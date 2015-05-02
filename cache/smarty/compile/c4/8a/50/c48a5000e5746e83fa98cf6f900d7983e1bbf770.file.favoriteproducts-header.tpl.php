<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 13:04:25
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15422260925544a20e3c5822-57158468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48a5000e5746e83fa98cf6f900d7983e1bbf770' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1430589738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15422260925544a20e3c5822-57158468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20e3e0ec4_31860829',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20e3e0ec4_31860829')) {function content_5544a20e3e0ec4_31860829($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>