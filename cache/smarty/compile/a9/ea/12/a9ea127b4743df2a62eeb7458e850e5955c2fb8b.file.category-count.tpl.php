<?php /* Smarty version Smarty-3.1.14, created on 2015-04-29 22:12:28
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18577455855541574c13bcb1-05219578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ea127b4743df2a62eeb7458e850e5955c2fb8b' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/default/category-count.tpl',
      1 => 1390233262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18577455855541574c13bcb1-05219578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5541574c1574f0_67530864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541574c1574f0_67530864')) {function content_5541574c1574f0_67530864($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>