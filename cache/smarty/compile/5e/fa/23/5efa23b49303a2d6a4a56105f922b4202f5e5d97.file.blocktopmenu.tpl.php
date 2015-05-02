<?php /* Smarty version Smarty-3.1.14, created on 2015-05-02 01:10:14
         compiled from "/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocktopmenu2/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198106184155446a46db1a79-79688995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5efa23b49303a2d6a4a56105f922b4202f5e5d97' => 
    array (
      0 => '/homepages/15/d548348874/htdocs/wowstore/prestashop/modules/blocktopmenu2/blocktopmenu.tpl',
      1 => 1430546943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198106184155446a46db1a79-79688995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55446a46dca202_67348590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55446a46dca202_67348590')) {function content_55446a46dca202_67348590($_smarty_tpl) {?>        <?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
        </div>
				<!-- Menu -->
        <div class="sf-contener clearfix">
          <ul class="sf-menu clearfix">
            <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

            <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value){?>
            <li class="sf-search noBack" style="float:right">
              <form id="searchbox" action="search.php" method="get">
                <input type="hidden" value="position" name="orderby"/>
                <input type="hidden" value="desc" name="orderway"/>
                <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo $_GET['search_query'];?>
<?php }?>" />
              </form>
            </li>
            <?php }?>
          </ul>
        <div class="sf-right">&nbsp;</div>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/superfish-modified.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
css/superfish-modified.css" media="screen" />
				<!--/ Menu -->
        <?php }?>	<?php }} ?>