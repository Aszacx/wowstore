<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21185928625544a20eb50bb6-71312110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce449b82a01afaccae9e22937f319062404ada1' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockstore/blockstore.tpl',
      1 => 1430588224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21185928625544a20eb50bb6-71312110',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20eb6e834_42458487',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20eb6e834_42458487')) {function content_5544a20eb6e834_42458487($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4 class="title_block"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
</a></h4>
	<div class="block_content blockstore">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" /></a></p>
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
">&raquo; <?php echo smartyTranslate(array('s'=>'Discover our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>