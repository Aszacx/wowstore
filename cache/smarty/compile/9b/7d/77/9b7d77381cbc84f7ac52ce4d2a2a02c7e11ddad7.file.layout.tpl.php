<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:24
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685563911554157482745b9-12448715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b7d77381cbc84f7ac52ce4d2a2a02c7e11ddad7' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/layout.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685563911554157482745b9-12448715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'header_file' => 0,
    'template' => 0,
    'display_footer' => 0,
    'footer_file' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55415748296f41_55162910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415748296f41_55162910')) {function content_55415748296f41_55162910($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['header_file'] = new Smarty_variable('./header.tpl', null, 0);?>
<?php $_smarty_tpl->tpl_vars['footer_file'] = new Smarty_variable('./footer.tpl', null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['header_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?>
<?php }} ?>