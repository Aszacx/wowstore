<?php /*%%SmartyHeaderCode:7461398785544a20e818151-76012386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cde8cf323ba35516418649699dd4617c8a397d8' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blocksearch/blocksearch-top.tpl',
      1 => 1430588212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7461398785544a20e818151-76012386',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55458f09d0b1b3_38750754',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55458f09d0b1b3_38750754')) {function content_55458f09d0b1b3_38750754($_smarty_tpl) {?><!-- block seach mobile -->
<div class="input_search" data-role="fieldcontain">
	<form method="get" action="http://wow.redot.mx/prestashop/es/buscar" id="searchbox">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>