<?php /* Smarty version Smarty-3.1.19, created on 2015-06-10 15:45:50
         compiled from "/Applications/MAMP/htdocs/prestashop/admin331fujcer/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98088255155783f8eed6240-59047329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9c5595b44ad10e94e53e9d004ab4dea1fb6d27' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin331fujcer/themes/default/template/content.tpl',
      1 => 1425636560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98088255155783f8eed6240-59047329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55783f8ef2de60_16612313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55783f8ef2de60_16612313')) {function content_55783f8ef2de60_16612313($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
