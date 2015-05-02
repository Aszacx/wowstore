<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:27
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19198923865541574b880766-78801705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b311957ae15d3964747e3ce6071adad4dac0c418' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/store_infos.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19198923865541574b880766-78801705',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5541574b891253_39426691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541574b891253_39426691')) {function content_5541574b891253_39426691($_smarty_tpl) {?>

<br />
<br />
<span id="store_hours"><?php echo smartyTranslate(array('s'=>'working hours'),$_smarty_tpl);?>
</span>
<table style="font-size: 9px;">
	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value){
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<tr>
		<td style="width: 70px;"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</td>
	</tr>
	<?php } ?>
</table>
<?php }} ?>