<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 13:04:26
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17349485505544a3cc140987-05622646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18c5991bb5e0084cc194f7558dc4ae8c53a450d' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/breadcrumb.tpl',
      1 => 1430587602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17349485505544a3cc140987-05622646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a3cc1731a9_71782379',
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a3cc1731a9_71782379')) {function content_5544a3cc1731a9_71782379($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>