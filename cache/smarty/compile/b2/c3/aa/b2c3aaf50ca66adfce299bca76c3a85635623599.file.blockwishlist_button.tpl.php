<?php /* Smarty version Smarty-3.1.19, created on 2015-08-18 17:05:59
         compiled from "/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19517159555d349d7d41114-24998199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c3aaf50ca66adfce299bca76c3a85635623599' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/gd-poesie-interieur/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1439892397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19517159555d349d7d41114-24998199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55d349d7dbc780_42630480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d349d7dbc780_42630480')) {function content_55d349d7dbc780_42630480($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
