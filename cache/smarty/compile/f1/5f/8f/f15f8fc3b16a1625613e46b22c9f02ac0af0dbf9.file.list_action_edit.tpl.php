<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:09:06
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143142011155446a0277d0d8-96538124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15f8fc3b16a1625613e46b22c9f02ac0af0dbf9' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143142011155446a0277d0d8-96538124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a02784a22_80597739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a02784a22_80597739')) {function content_55446a02784a22_80597739($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>