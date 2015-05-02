<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:26
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/order-opc-payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5379530765541574ae0f577-06764414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f361a30943a0b08feeedf7afad66651fcebd82fc' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/order-opc-payment.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5379530765541574ae0f577-06764414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_PAYMENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5541574ae1a7f3_92752415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541574ae1a7f3_92752415')) {function content_5541574ae1a7f3_92752415($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Payment: '),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="content">
	<fieldset data-role="controlgroup">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT']->value;?>

	</fieldset>
</div>
<?php }} ?>