<?php
/* Smarty version 3.1.33, created on 2020-10-17 13:07:03
  from '/Applications/MAMP/htdocs/prestashop/admin458bkcvd6/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8aec77e17cb0_50301424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6df39fbc30017fc92fb5471face4cc66ef8421' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin458bkcvd6/themes/default/template/content.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8aec77e17cb0_50301424 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
