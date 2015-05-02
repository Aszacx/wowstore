<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockpermanentlinks2/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131047314355446a46ae8324-71741952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96eed6b834a5edf5b57f45d23fcb7f8b284c6225' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockpermanentlinks2/blockpermanentlinks-header.tpl',
      1 => 1430546929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131047314355446a46ae8324-71741952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a46b05ed4_90046504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a46b05ed4_90046504')) {function content_55446a46b05ed4_90046504($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_sitemap"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap.php');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_bookmark">
	 
		<script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->tpl_vars['come_from']->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->tpl_vars['meta_title']->value));?>
', '<?php echo smartyTranslate(array('s'=>'bookmark','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>