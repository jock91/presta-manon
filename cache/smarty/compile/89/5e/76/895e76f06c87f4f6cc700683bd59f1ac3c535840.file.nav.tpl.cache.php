<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 14:14:01
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167672180555d3044da28ee3-16380533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '895e76f06c87f4f6cc700683bd59f1ac3c535840' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/blockcontact/nav.tpl',
      1 => 1439900035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167672180555d3044da28ee3-16380533',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d3044da69962_47230123',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d3044da69962_47230123')) {function content_55d3044da69962_47230123($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>
