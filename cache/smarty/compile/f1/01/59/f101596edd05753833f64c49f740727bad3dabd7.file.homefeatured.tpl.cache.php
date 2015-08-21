<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 12:09:15
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11960770355d3044b0ae6b7-58180417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f101596edd05753833f64c49f740727bad3dabd7' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/homefeatured/homefeatured.tpl',
      1 => 1439892397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11960770355d3044b0ae6b7-58180417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d3044b18be10_85454478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3044b18be10_85454478')) {function content_55d3044b18be10_85454478($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
