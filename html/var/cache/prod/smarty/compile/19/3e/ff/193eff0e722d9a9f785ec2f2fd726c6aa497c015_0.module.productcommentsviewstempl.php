<?php
/* Smarty version 3.1.39, created on 2022-01-10 03:13:00
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61db962c842e01_93044556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '193eff0e722d9a9f785ec2f2fd726c6aa497c015' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1641736617,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61db962c842e01_93044556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="module-addons-suggestion">
  <div class="suggestion-icon">
  </div>
  <div class="suggestion-category-details">
    <div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Want to go further?','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

    </div>
    <div class="category-label">
      <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['name'];?>

    </div>
    <div class="marketplace-label">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons Marketplace','d'=>'Admin.Global'),$_smarty_tpl ) );?>

    </div>
  </div>
  <div class="suggestion-category-description">
    <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['description'];?>

  </div>
  <div class="suggestion-link">
    <a target="_blank" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['addons_category']->value['link'];?>
">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover all modules','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

    </a>
  </div>
</div>
<?php }
}
