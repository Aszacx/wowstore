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
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55451083bf7176_07519349',
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55451083bf7176_07519349')) {function content_55451083bf7176_07519349($_smarty_tpl) {?><script type="text/javascript">
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
	<div class="leo-button"><a class="leo-mobile">Información	</a></div>
	<div id="form-permanentlinks">
		<div class="nav-item">
			<div class="item-top"> 
									<a href="http://wow.redot.mx/prestashop/es/mi-cuenta" title="Ingrese a su cuenta de cliente" class="login" rel="nofollow">Iniciar la sesión</a>
							</div>
		</div>
		<div class="nav-item">
			<div class="item-top">
				<a href="http://wow.redot.mx/prestashop/es/mi-cuenta" title="Mi cuenta">Mi cuenta</a>
			</div>
		</div>
		<div class="nav-item" id="wishlist_block">
			<div class="item-top">
				<a href="http://wow.redot.mx/prestashop/es/module/blockwishlist/mywishlist" title="Mis listas de regalo">Mi lista de deseos</a>
			</div>
		</div>
	</div>
</div>
<!-- /Block permanent links module HEADER --><?php }} ?>