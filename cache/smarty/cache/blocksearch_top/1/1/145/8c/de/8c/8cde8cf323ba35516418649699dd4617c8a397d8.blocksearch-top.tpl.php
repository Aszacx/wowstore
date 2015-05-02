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
    '9df5ae59d0ddf6e4d256e5012bc5225b43c4f941' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7461398785544a20e818151-76012386',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55451084106593_60483417',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55451084106593_60483417')) {function content_55451084106593_60483417($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">

	<form method="get" action="http://wow.redot.mx/prestashop/es/buscar" id="searchbox">

			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="submit" name="submit_search" value="Buscar" class="button" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://wow.redot.mx/prestashop/es/buscar', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>