<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/homecarousel/homecarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4749234955446a46eb3d55-30003748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2488e7ff1237517ea866bf88b6303329403e989' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/homecarousel/homecarousel.tpl',
      1 => 1430546961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4749234955446a46eb3d55-30003748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
    'autoplay' => 0,
    'autoplayduration' => 0,
    'itemsvisible' => 0,
    'itemsscroll' => 0,
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'productLink' => 0,
    'displayname' => 0,
    'displayprice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a46f0d1f6_96030049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a46f0d1f6_96030049')) {function content_55446a46f0d1f6_96030049($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?>
<!--
  jCarousel library
-->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/homecarousel/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/homecarousel/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/homecarousel/jcarousel/skins/tango/skin.css" />

<?php if ($_smarty_tpl->tpl_vars['autoplay']->value){?>
	<script type="text/javascript">
		var carousel_autoplay = <?php echo $_smarty_tpl->tpl_vars['autoplayduration']->value;?>
;
		var carousel_items_visible = <?php echo $_smarty_tpl->tpl_vars['itemsvisible']->value;?>
;
		var carousel_scroll = <?php echo $_smarty_tpl->tpl_vars['itemsscroll']->value;?>
;
	</script>
<?php }else{ ?>
	<script type="text/javascript">
		var carousel_autoplay = 0;
		var carousel_items_visible = <?php echo $_smarty_tpl->tpl_vars['itemsvisible']->value;?>
;
		var carousel_scroll = <?php echo $_smarty_tpl->tpl_vars['itemsscroll']->value;?>
;
	</script>
<?php }?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
modules/homecarousel/homecarousel.js"></script>
	
<!-- MODULE Home Featured Products -->
<div class="clear"></div>
<div class="latest-deals">
<h2 class="latest_deals">Latest Deals</h2>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
  <ul id="mycarousel" class="jcarousel-skin-tango">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['productLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']), null, 0);?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['legend'];?>
" class="product_image">
				
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'hot_deals');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'html', 'UTF-8');?>
" />
			</a>	
			<?php if ($_smarty_tpl->tpl_vars['displayname']->value){?>		
				<h5><a href="<?php echo $_smarty_tpl->tpl_vars['productLink']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8'),45);?>
</a></h5>													
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['displayprice']->value){?>
				<div class="hot_price">					
					<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</span>					
				</div>
			<?php }?>
		</li>
	<?php } ?>
	</ul>
<?php }else{ ?>
	<p><?php echo smartyTranslate(array('s'=>'No products for carousel','mod'=>'homecarousel'),$_smarty_tpl);?>
</p>
<?php }?>
</div>
<!-- /MODULE Home Featured Products -->
<?php }?><?php }} ?>