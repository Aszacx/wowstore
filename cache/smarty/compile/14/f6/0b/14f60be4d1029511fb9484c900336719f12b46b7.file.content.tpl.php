<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 12:10:11
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/controllers/emails/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:941828195554504f32dcf38-16858533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f60be4d1029511fb9484c900336719f12b46b7' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/admin1917/themes/default/template/controllers/emails/content.tpl',
      1 => 1390233260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941828195554504f32dcf38-16858533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_554504f331ded9_37893779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554504f331ded9_37893779')) {function content_554504f331ded9_37893779($_smarty_tpl) {?>

<script type="text/javascript">
	var textMsg = "<?php echo smartyTranslate(array('s'=>'This is a test message. Your server is now configured to send email.','js'=>1),$_smarty_tpl);?>
";
	var textSubject = "<?php echo smartyTranslate(array('s'=>'Test message -- Prestashop','js'=>1),$_smarty_tpl);?>
";
	var textSendOk = "<?php echo smartyTranslate(array('s'=>'A test email has been sent to the email address you provided.','js'=>1),$_smarty_tpl);?>
";
	var textSendError= "<?php echo smartyTranslate(array('s'=>'Error: Please check your configuration','js'=>1),$_smarty_tpl);?>
";
	var token_mail = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var errorMail = "<?php echo smartyTranslate(array('s'=>'This email address is not valid','js'=>1),$_smarty_tpl);?>
";
	$(document).ready(function() {
		if ($('input[name=PS_MAIL_METHOD]:checked').val() == 2)
			$('#smtp').show();
	});
</script>
<script type="text/javascript" src="../js/sendMailTest.js"></script>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



<?php }} ?>