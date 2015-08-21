<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 12:11:38
         compiled from "/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178337150355784033e9eee8-78037851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6171fc952d0fbb312fe64acde62d272160beaf96' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1439892647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178337150355784033e9eee8-78037851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55784034069a42_81414401',
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55784034069a42_81414401')) {function content_55784034069a42_81414401($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
