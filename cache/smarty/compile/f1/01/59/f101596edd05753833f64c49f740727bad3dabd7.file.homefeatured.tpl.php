<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 12:11:39
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208872362455d304db3d9541-08230400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '208872362455d304db3d9541-08230400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d304db4c6ca8_42971143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d304db4c6ca8_42971143')) {function content_55d304db4c6ca8_42971143($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
