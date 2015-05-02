<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleotopmenu/blockleotopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11358752275544a2104ab047-97623707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '669757a5ed016806475095e7f9405a4d6c84c6aa' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockleotopmenu/blockleotopmenu.tpl',
      1 => 1430586894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11358752275544a2104ab047-97623707',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a2104b1629_17719640',
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a2104b1629_17719640')) {function content_5544a2104b1629_17719640($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
	<!-- Menu -->
	<div class="navbar"><div class="navbar-inner">
		<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
    		<span class="icon-bar"></span>
		</button>
		<div class="nav-collapse collapse">
			<ul class="nav ">
				<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			</ul>
		</div>
    </div></div>
	<!--/ Menu -->
<?php }?><?php }} ?>