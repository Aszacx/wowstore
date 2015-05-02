<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleocustom1/tmpl/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15525537965544a20fadb435-95486143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dc231e68e99e7f2956bb2c32dc1c409263cebe' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleocustom1/tmpl/default.tpl',
      1 => 1430587013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15525537965544a20fadb435-95486143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20fae7ac0_74549968',
  'variables' => 
  array (
    'class_prefix' => 0,
    'pos' => 0,
    'show_title' => 0,
    'module_title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20fae7ac0_74549968')) {function content_5544a20fae7ac0_74549968($_smarty_tpl) {?><div class="customhtml <?php echo $_smarty_tpl->tpl_vars['class_prefix']->value;?>
" id="leo-customhtml1-<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
">
	<?php if ($_smarty_tpl->tpl_vars['show_title']->value){?>
		<h3 class="title_block"><?php echo $_smarty_tpl->tpl_vars['module_title']->value;?>
</h3>
	<?php }?>
	<div class="block_content1 clearfix">
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	</div>
</div><?php }} ?>