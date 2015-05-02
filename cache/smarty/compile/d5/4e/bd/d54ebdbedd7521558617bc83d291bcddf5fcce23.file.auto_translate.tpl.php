<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:18
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/translations/auto_translate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2114407810554157424d8dd4-41327601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd54ebdbedd7521558617bc83d291bcddf5fcce23' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin/themes/default/template/controllers/translations/auto_translate.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2114407810554157424d8dd4-41327601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'not_available' => 0,
    'tooltip_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554157424e2b45_13274404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554157424e2b45_13274404')) {function content_554157424e2b45_13274404($_smarty_tpl) {?>

<input type="button" class="button" id="translate_all" value="<?php echo smartyTranslate(array('s'=>'Translate with Google (experimental).'),$_smarty_tpl);?>
" />
<script type="text/javascript">
	var gg_translate = {
		language_code : '<?php echo $_smarty_tpl->tpl_vars['language_code']->value;?>
',
		not_available : '<?php echo $_smarty_tpl->tpl_vars['not_available']->value;?>
',
		tooltip_title : '<?php echo $_smarty_tpl->tpl_vars['tooltip_title']->value;?>
'
	};
</script><?php }} ?>