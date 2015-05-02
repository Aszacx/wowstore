<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:19
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/helpers/list/list_action_transferstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199527555554157437fbdd4-01923911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fadadc9c4e1f92672a4003cddb873b083b9fdb4' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/helpers/list/list_action_transferstock.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199527555554157437fbdd4-01923911',
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
  'unifunc' => 'content_55415743803481_99671597',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415743803481_99671597')) {function content_55415743803481_99671597($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/transfer_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>