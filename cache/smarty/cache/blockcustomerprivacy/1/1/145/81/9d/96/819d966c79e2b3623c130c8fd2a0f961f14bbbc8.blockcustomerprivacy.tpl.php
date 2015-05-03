<?php /*%%SmartyHeaderCode:47431981055458f47975107-87100694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '819d966c79e2b3623c130c8fd2a0f961f14bbbc8' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47431981055458f47975107-87100694',
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55458f479a9327_88833143',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55458f479a9327_88833143')) {function content_55458f479a9327_88833143($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Privacidad de los datos de los clientes</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy">El dato personal que da esta utilizado para responder a sus búsquedas, procesa sus ordenes o autorizase el acceso especifico a la información. Tiene derecho de modificar todas las informaciones personales que tenemos sobre usted en pagina &quot;my account&quot;.</label>		
</fieldset><?php }} ?>