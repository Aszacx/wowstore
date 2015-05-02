<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 05:08:16
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19293214695544a210300682-36202707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d7a9c57dd18778b14fa891cda345c201dd2d13b' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocknewsletter/views/templates/hook/blocknewsletter.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19293214695544a210300682-36202707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5544a210324523_87154941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a210324523_87154941')) {function content_5544a210324523_87154941($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<p>
				<input class="inputNew" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
				<input type="submit" value="ok" class="button_mini" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
    
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });
        });
    
</script><?php }} ?>