<?php /* Smarty version Smarty-3.1.19, created on 2015-08-21 11:37:36
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28939067955d304dd23fd67-00964266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '28939067955d304dd23fd67-00964266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d304dd28c3f1_66089187',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d304dd28c3f1_66089187')) {function content_55d304dd28c3f1_66089187($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>
