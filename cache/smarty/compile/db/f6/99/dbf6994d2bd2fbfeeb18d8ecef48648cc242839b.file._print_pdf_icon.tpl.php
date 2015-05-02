<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:17
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15381953635541574166f7e9-98870541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf6994d2bd2fbfeeb18d8ecef48648cc242839b' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15381953635541574166f7e9-98870541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_state' => 0,
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55415741693ce3_92052843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415741693ce3_92052843')) {function content_55415741693ce3_92052843($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
<?php if (($_smarty_tpl->tpl_vars['order_state']->value->invoice||$_smarty_tpl->tpl_vars['order']->value->invoice_number)){?>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
<?php }else{ ?>
	-
<?php }?>
</span>


<span style="width:20px;">
<?php if (($_smarty_tpl->tpl_vars['order_state']->value->delivery||$_smarty_tpl->tpl_vars['order']->value->delivery_number)){?>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateDeliverySlipPDF&id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"><img src="../img/admin/delivery.gif" alt="delivery" /></a>
<?php }else{ ?>
	-
<?php }?>
</span>
<?php }} ?>