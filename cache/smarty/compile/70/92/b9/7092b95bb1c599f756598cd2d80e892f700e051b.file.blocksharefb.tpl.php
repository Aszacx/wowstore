<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:04:33
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1032797931554503a12922b5-48917168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7092b95bb1c599f756598cd2d80e892f700e051b' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocksharefb/blocksharefb.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1032797931554503a12922b5-48917168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554503a129a530_46317250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554503a129a530_46317250')) {function content_554503a129a530_46317250($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>