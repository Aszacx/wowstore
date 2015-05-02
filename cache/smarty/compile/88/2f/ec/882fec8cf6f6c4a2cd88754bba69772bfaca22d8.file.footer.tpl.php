<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:59:32
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20136096905544a2104b6d82-04097578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '882fec8cf6f6c4a2cd88754bba69772bfaca22d8' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/leoconv/footer.tpl',
      1 => 1430587614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20136096905544a2104b6d82-04097578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a2104ccfd7_25488029',
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a2104ccfd7_25488029')) {function content_5544a2104ccfd7_25488029($_smarty_tpl) {?>
	<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
							</div><!-- 5-->
						</div><!-- 4-->
						
						<?php if ($_smarty_tpl->tpl_vars['page_name']->value!="index"){?>
						<div id="leo-rightcol" class="span3">
							<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

						</div><!--righttcol-->
						<?php }?>	
					</div><!-- End Of Fluid-Width -->
				</div><!-- 4-->
			</div>
			</div>

			<div id="leo-manufac" class="leo-manufac">
			
				<div class="row-fluid">
					<div class="container">
						<?php echo Hook::exec('bottomManufacturer');?>

					</div>
				</div>
			</div>
		<!-- Footer -->	
   		<div id="leo-footer" class=" leo-footer">
			<div class="footer-wrapper">
			</div>
			<div class="container">	
				<div class="row-fluid"  >
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
	
				</div>
			</div>  <!--footer-->	
			
		</div>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value){?>
		   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</div>	<!--leopage-->
	</body>
</html><?php }} ?>