<?php
/* Smarty version 3.1.33, created on 2020-10-17 13:09:50
  from '/Applications/MAMP/htdocs/prestashop/admin458bkcvd6/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8aed1e4064c6_96517776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3457e7fe8bb040577a73444b02abdf3ab2eb6f4d' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin458bkcvd6/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1600952248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8aed1e4064c6_96517776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7528871835f8aed1e404904_26379981', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_7528871835f8aed1e404904_26379981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_7528871835f8aed1e404904_26379981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
