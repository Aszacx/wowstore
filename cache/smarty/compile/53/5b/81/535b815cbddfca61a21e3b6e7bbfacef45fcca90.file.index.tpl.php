<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:24
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21289800285541574836af98-19623070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '535b815cbddfca61a21e3b6e7bbfacef45fcca90' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/mobile/index.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21289800285541574836af98-19623070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554157483706e9_69633024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554157483706e9_69633024')) {function content_554157483706e9_69633024($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>