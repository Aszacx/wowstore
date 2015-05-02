<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:31
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11390050115544a20e3f90a2-61785697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc88a90c94156447a964c2616c2bcbe34affc133' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1430588205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11390050115544a20e3f90a2-61785697',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a20e429f72_59022832',
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a20e429f72_59022832')) {function content_5544a20e429f72_59022832($_smarty_tpl) {?><script type="text/javascript">
$(document).ready(function () {
	var width = $(window).width(); 
		
	$('#permanentlinks').each(function(){
		$(this).find('a.leo-mobile').click(function(){
		 $('#').slideToggle('slow');

		});
	  });
	
  $(window).resize(function(){
		var width = $(window).width();
		if(width >= 600){	
			$("#form-permanentlinks").css("display","block");
			$(".leo-button").css("display","none");
		}
		else{
			$("#form-permanentlinks").css("display","none");
			$(".leo-button").css("display","block");
			
		}
	});	
	

});
</script>

<!-- Block permanent links module HEADER -->
<div id="permanentlinks">
	<div class="leo-button"><a class="leo-mobile"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></div>
	<div id="form-permanentlinks">
		<div class="nav-item">
			<div class="item-top"> 
				<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" class="logout" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
				<?php }else{ ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
" class="login" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
				<?php }?>
			</div>
		</div>
		<div class="nav-item">
			<div class="item-top">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account');?>
" title="<?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
			</div>
		</div>
		<div class="nav-item" id="wishlist_block">
			<div class="item-top">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My Wishlist','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a>
			</div>
		</div>
	</div>
</div>
<!-- /Block permanent links module HEADER --><?php }} ?>