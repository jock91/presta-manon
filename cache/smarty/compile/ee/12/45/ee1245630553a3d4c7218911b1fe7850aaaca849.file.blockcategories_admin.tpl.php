<?php /* Smarty version Smarty-3.1.19, created on 2015-08-21 12:29:21
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182846186855d6fd814f8be9-38685545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee1245630553a3d4c7218911b1fe7850aaaca849' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1440152691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182846186855d6fd814f8be9-38685545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d6fd81510902_67495067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d6fd81510902_67495067')) {function content_55d6fd81510902_67495067($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>
