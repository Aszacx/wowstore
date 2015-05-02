<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:18
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134571454554157428e39e3-30043598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd333b7001a80dd367b0f7d76780428ad66aa2363' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134571454554157428e39e3-30043598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554157428ed4c8_41791921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554157428ed4c8_41791921')) {function content_554157428ed4c8_41791921($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>