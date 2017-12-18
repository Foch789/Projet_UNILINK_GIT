<?php
/* Smarty version 3.1.30, created on 2017-12-18 10:03:28
  from "C:\UwAmp\www\Projet_UNILINK_GIT\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37927010ae42_70967839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f839f6e60826d4fe9d29e49925a78a3bd7801890' => 
    array (
      0 => 'C:\\UwAmp\\www\\Projet_UNILINK_GIT\\application\\views\\modules\\accueil.tpl',
      1 => 1513591391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a37927010ae42_70967839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137205a3792700e7bf8_86760065', "body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "body"} */
class Block_137205a3792700e7bf8_86760065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="page">

	<div class="containment">

		<h1>Unilink </h1>
		<h2>RÉSEAU SOCIAL DE L’UNIVERSITÉ D'AIX-MARSEILLE</h2>

		<a href= "index.php/?page=recherche "id="icon"><img src="img/chevron-arrow-down.png"/></a>

	</div>

</div>

<?php
}
}
/* {/block "body"} */
}
