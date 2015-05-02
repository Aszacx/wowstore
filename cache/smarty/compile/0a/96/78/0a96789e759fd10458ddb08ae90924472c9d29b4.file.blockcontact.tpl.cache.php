<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:15
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockcontact/blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187182403855446a4716b165-15363520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a96789e759fd10458ddb08ae90924472c9d29b4' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockcontact/blockcontact.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187182403855446a4716b165-15363520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a471862b8_80480577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a471862b8_80480577')) {function content_55446a471862b8_80480577($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<div id="contact_block" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</h4>
	<div class="block_content clearfix">
			<p><?php echo smartyTranslate(array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl);?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!=''){?><p class="tel"><span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['telnumber']->value, 'htmlall', 'UTF-8');?>
</p><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['email']->value!=''){?><a href="mailto:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value, 'htmlall', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }} ?>