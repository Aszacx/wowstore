<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 05:08:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8403124215544a20e31fb20-42436789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05644da5101cfd39cb139f438bfec806915fe8aa' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/feeder/feederHeader.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8403124215544a20e31fb20-42436789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20e354062_38840714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20e354062_38840714')) {function content_5544a20e354062_38840714($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>