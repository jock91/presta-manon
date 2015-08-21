<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 12:13:46
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159384816555783f52b8d068-03354716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fff99217dacd62a60919e443f1f60c1304a27ebd' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1439892650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159384816555783f52b8d068-03354716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55783f52c1deb1_95090532',
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55783f52c1deb1_95090532')) {function content_55783f52c1deb1_95090532($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
