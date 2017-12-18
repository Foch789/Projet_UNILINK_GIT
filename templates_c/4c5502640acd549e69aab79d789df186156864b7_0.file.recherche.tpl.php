<?php
/* Smarty version 3.1.30, created on 2017-12-18 09:59:20
  from "C:\UwAmp\www\Projet_UNILINK_GIT\application\views\modules\recherche.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a379178bff052_75254110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c5502640acd549e69aab79d789df186156864b7' => 
    array (
      0 => 'C:\\UwAmp\\www\\Projet_UNILINK_GIT\\application\\views\\modules\\recherche.tpl',
      1 => 1513589026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a379178bff052_75254110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274245a379178bf2b51_07161615', "body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "body"} */
class Block_274245a379178bf2b51_07161615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="page">

	<h1>Vous êtes un professionnel à la recherche d'un stagiaire ?</h1>
	<h2>Trouvez le parmi nos étudiants </h2>

	<form action="" class="formulaire">
		<input class="champ" type="text" value="Recherche..." />
		<input class="image" type="image" src="../../../asset/img/magnifier.png " />
	</form>

</div>

<?php
}
}
/* {/block "body"} */
}
