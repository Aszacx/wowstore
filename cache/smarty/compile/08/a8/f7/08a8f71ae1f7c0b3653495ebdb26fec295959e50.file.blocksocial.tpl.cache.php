<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:15
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125142535055446a47403480-41297017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a8f71ae1f7c0b3653495ebdb26fec295959e50' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocksocial/blocksocial.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125142535055446a47403480-41297017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a47426ed7_86424149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a47426ed7_86424149')) {function content_55446a47426ed7_86424149($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<div id="social_block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</h4>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>