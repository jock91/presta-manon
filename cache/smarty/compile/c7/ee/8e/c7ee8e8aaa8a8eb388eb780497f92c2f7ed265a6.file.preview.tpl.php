<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 14:34:15
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/views/admin/_configure/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50804547755d326478c7325-31894484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ee8e8aaa8a8eb388eb780497f92c2f7ed265a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/views/admin/_configure/preview.tpl',
      1 => 1439892648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50804547755d326478c7325-31894484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_js_url' => 0,
    'facebook_css_url' => 0,
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d32647cb30e7_67827272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d32647cb30e7_67827272')) {function content_55d32647cb30e7_67827272($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['facebook_js_url']->value;?>
"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['facebook_css_url']->value;?>
" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo smartyTranslate(array('s'=>'Preview','mod'=>'blockfacebook'),$_smarty_tpl);?>

	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
