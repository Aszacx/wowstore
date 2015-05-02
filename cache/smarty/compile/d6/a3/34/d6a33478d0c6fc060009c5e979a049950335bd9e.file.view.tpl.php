<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:18
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/marketing/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4595381355415742788782-88332450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a33478d0c6fc060009c5e979a049950335bd9e' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/marketing/helpers/view/view.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4595381355415742788782-88332450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55415742794f72_10905720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415742794f72_10905720')) {function content_55415742794f72_10905720($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>
<?php }} ?>