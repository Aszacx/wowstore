<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:21:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21735293455446a47442934-80386003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5b8b4ad0a0f78db406a86ed3a13184c970467c' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/header.tpl',
      1 => 1430547173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21735293455446a47442934-80386003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a4751fa29_54432522',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'img_ps_dir' => 0,
    'img_update_time' => 0,
    'content_dir' => 0,
    'static_token' => 0,
    'token' => 0,
    'priceDisplayPrecision' => 0,
    'currency' => 0,
    'priceDisplay' => 0,
    'roundMode' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'img_dir' => 0,
    'HOOK_TOP' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a4751fa29_54432522')) {function content_55446a4751fa29_54432522($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/homepages/15/d548348874/htdocs/wowstore/prestashop/tools/smarty/plugins/modifier.escape.php';
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">



	<head>



		<title><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8');?>
</title>



<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value){?>



		<meta name="description" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_description']->value, 'html', 'UTF-8');?>
" />



<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value){?>



		<meta name="keywords" content="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_keywords']->value, 'html', 'UTF-8');?>
" />



<?php }?>



		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />



		<meta name="generator" content="PrestaShop" />



		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,follow" />



		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
favicon.ico?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />



		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
favicon.ico?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />



		<script type="text/javascript">



			var baseDir = '<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
';



			var static_token = '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
';



			var token = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';



			var priceDisplayPrecision = <?php echo $_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals;?>
;



			var priceDisplayMethod = <?php echo $_smarty_tpl->tpl_vars['priceDisplay']->value;?>
;



			var roundMode = <?php echo $_smarty_tpl->tpl_vars['roundMode']->value;?>
;



		</script>



<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)){?>



	<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>



	<link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />



	<?php } ?>



<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)){?>



	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value){
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>



	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>



	<?php } ?>



<?php }?>



		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




	</head>



	



	<body <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='404'){?>id="pagenotfound"<?php }elseif($_smarty_tpl->tpl_vars['page_name']->value){?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page_name']->value, 'htmlall', 'UTF-8');?>
"<?php }?>>



	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>



		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value){?>



		<div id="restricted-country">



			<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>



		</div>



		<?php }?>



		<div id="page" class="container_9 clearfix">







			<!-- Header -->



			<div id="header" class="grid_9 alpha omega">



				<a id="header_logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
">



					<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo.png?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['shop_name']->value, 'htmlall', 'UTF-8');?>
" width="279px" height="88px" />



				</a>



				<div id="header_right" class="grid_6 omega">



					<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>




				</div>



			</div>







			<div id="columns" class="grid_9 alpha omega clearfix">



				<!-- Left -->



                <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='search'||$_smarty_tpl->tpl_vars['page_name']->value=='payment'||$_smarty_tpl->tpl_vars['page_name']->value=='product'||$_smarty_tpl->tpl_vars['page_name']->value=='cms'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products'||$_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?>



				<div id="left_column" class="column grid_2 alpha">



					<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>




				</div>



                <?php }else{ ?>



                <?php }?>







				<!-- Center -->



                <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='order'||$_smarty_tpl->tpl_vars['page_name']->value=='authentication'||$_smarty_tpl->tpl_vars['page_name']->value=='order-slip'||$_smarty_tpl->tpl_vars['page_name']->value=='history'||$_smarty_tpl->tpl_vars['page_name']->value=='addresses'||$_smarty_tpl->tpl_vars['page_name']->value=='identity'||$_smarty_tpl->tpl_vars['page_name']->value=='discount'||$_smarty_tpl->tpl_vars['page_name']->value=='contact-form'||$_smarty_tpl->tpl_vars['page_name']->value=='supplier'||$_smarty_tpl->tpl_vars['page_name']->value==''||$_smarty_tpl->tpl_vars['page_name']->value=='order-opc'||$_smarty_tpl->tpl_vars['page_name']->value=='password'||$_smarty_tpl->tpl_vars['page_name']->value=='module-cheque-payment'||$_smarty_tpl->tpl_vars['page_name']->value=='my-account'||$_smarty_tpl->tpl_vars['page_name']->value=='module-paypal-about'||$_smarty_tpl->tpl_vars['page_name']->value=='module-bankwire-payment'||$_smarty_tpl->tpl_vars['page_name']->value=='module-agilesellerproducts-sellers'||$_smarty_tpl->tpl_vars['page_name']->value=='order-confirmation'||$_smarty_tpl->tpl_vars['page_name']->value=='module-cashondelivery-validation'){?>



				<div id="center_column" class="full_width">



                <?php }elseif($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='search'||$_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products'){?>



                <div id="center_column" class="half_width">



                <?php }elseif($_smarty_tpl->tpl_vars['page_name']->value=='product'||$_smarty_tpl->tpl_vars['page_name']->value=='user'||$_smarty_tpl->tpl_vars['page_name']->value=='cms'){?>



                <div id="center_column" class="grid_5">



                <?php }?>



	<?php }?>



<?php }} ?>