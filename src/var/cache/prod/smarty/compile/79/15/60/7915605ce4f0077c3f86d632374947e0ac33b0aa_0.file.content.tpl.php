<?php
/* Smarty version 4.3.1, created on 2023-10-11 23:15:52
  from '/var/www/html/admin2137/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65271088a3d537_60702271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7915605ce4f0077c3f86d632374947e0ac33b0aa' => 
    array (
      0 => '/var/www/html/admin2137/themes/default/template/content.tpl',
      1 => 1695892354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65271088a3d537_60702271 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
