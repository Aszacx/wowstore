<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 10:43:29
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808125345544f0a108dbb8-15312229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d463b7f527890e431a6ba7a3344fb92413492b' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808125345544f0a108dbb8-15312229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544f0a1099b48_94423966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544f0a1099b48_94423966')) {function content_5544f0a1099b48_94423966($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>