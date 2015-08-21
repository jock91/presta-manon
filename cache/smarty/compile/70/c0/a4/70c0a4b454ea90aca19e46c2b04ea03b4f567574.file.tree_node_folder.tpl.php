<?php /* Smarty version Smarty-3.1.19, created on 2015-06-10 15:37:58
         compiled from "/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98594969855783db6d03763-31717430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70c0a4b454ea90aca19e46c2b04ea03b4f567574' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1425636560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98594969855783db6d03763-31717430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55783db6d18ee7_80995617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55783db6d18ee7_80995617')) {function content_55783db6d18ee7_80995617($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
