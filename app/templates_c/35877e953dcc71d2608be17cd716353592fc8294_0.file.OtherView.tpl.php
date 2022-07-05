<?php
/* Smarty version 3.1.30, created on 2022-07-05 18:47:49
  from "C:\xampp\htdocs\php_04\app\OtherView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62c46b35864110_30529175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35877e953dcc71d2608be17cd716353592fc8294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04\\app\\OtherView.tpl',
      1 => 1657037196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.tpl' => 1,
  ),
),false)) {
function content_62c46b35864110_30529175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213722520162c46b358635a2_15292380', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11559348062c46b35863e40_98620300', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_213722520162c46b358635a2_15292380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Ta część stopki została wpisana z drugiego szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11559348062c46b35863e40_98620300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
		<div class="row">
        		<header class="page-header">
					<h1 class="page-title">To jest inna strona</h1>
    				</header>
                </div>		
	</div>	<!-- /container -->

<?php
}
}
/* {/block 'content'} */
}
