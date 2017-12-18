<?php
/* Smarty version 3.1.30, created on 2017-12-18 09:57:11
  from "C:\UwAmp\www\Projet_UNILINK_GIT\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3790f7b28ec1_19061533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b1341e1acf3490a6a8e313bfc46d405caf66dc' => 
    array (
      0 => 'C:\\UwAmp\\www\\Projet_UNILINK_GIT\\application\\views\\layout.tpl',
      1 => 1513589026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/layout_entete.inc.tpl' => 1,
    'file:layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a3790f7b28ec1_19061533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="asset/css/style.css"/>
		<link rel="shortcut icon" href="https://ent.univ-amu.fr/uPortal/favicon.ico" type="image/x-icon">
	</head>

	<header class="header">
		<?php $_smarty_tpl->_subTemplateRender("file:layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</header>

	

	<body>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207345a3790f7af7b77_03665363', "body");
?>


	</body>

	<footer class= "foot">

		<?php $_smarty_tpl->_subTemplateRender("file:layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	</footer>

</html>
<?php }
/* {block "body"} */
class Block_207345a3790f7af7b77_03665363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "body"} */
}
