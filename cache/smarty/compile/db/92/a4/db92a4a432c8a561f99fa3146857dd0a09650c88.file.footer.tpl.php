<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:21:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11005038355446a47529cf3-33143533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db92a4a432c8a561f99fa3146857dd0a09650c88' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/themes/prestadesigner_fragrance_shop/footer.tpl',
      1 => 1430547170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11005038355446a47529cf3-33143533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a4753c1e4_96777214',
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a4753c1e4_96777214')) {function content_55446a4753c1e4_96777214($_smarty_tpl) {?>



		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>

				</div>

                



<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product'||$_smarty_tpl->tpl_vars['page_name']->value=='cms'){?>



<!-- Right -->

				<div id="right_column" class="column grid_2 omega">

					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>


				</div>

                <?php }else{ ?>

                <?php }?>

			</div>



<!-- Footer -->

			<div id="footer" class="grid_9 alpha omega clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
 <div class="prestadesigner_copyright"><a href="http://prestadesigner.com" alt="Prestashop Themes" title="Prestashop Themes"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
prestadesigner.png"></a></div></div>

		</div>

	<?php }?>

	</body>

</html>

<?php }} ?>