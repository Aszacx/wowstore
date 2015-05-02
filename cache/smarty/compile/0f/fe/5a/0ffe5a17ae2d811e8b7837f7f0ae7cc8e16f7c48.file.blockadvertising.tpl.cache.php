<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 17:37:40
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149338594355415d3441a398-54645598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ffe5a17ae2d811e8b7837f7f0ae7cc8e16f7c48' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockadvertising/blockadvertising.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149338594355415d3441a398-54645598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55415d344259f6_55868150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55415d344259f6_55868150')) {function content_55415d344259f6_55868150($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>