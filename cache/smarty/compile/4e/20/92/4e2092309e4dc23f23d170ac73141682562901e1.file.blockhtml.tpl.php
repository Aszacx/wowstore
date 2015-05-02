<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockhtml/blockhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31566673955446a46f272d3-24585509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e2092309e4dc23f23d170ac73141682562901e1' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockhtml/blockhtml.tpl',
      1 => 1430546918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31566673955446a46f272d3-24585509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'text_left' => 0,
    'text_right' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a46f2fe38_86586085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a46f2fe38_86586085')) {function content_55446a46f2fe38_86586085($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<!-- Block HTML module -->
<div id="html_block_left" class="block">
	<div class="girl">
		<?php echo $_smarty_tpl->tpl_vars['text_left']->value;?>

	</div>
	<div class="men">
		<?php echo $_smarty_tpl->tpl_vars['text_right']->value;?>

	</div>
	<div class="clear"></div>
</div>
<!-- /BlockHTML module -->
<?php }?>
<?php }} ?>