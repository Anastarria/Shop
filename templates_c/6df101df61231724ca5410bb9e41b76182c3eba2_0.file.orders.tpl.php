<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 21:40:39
  from '/laravel/templates/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5921a7bb5fb9_98146090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df101df61231724ca5410bb9e41b76182c3eba2' => 
    array (
      0 => '/laravel/templates/orders.tpl',
      1 => 1599676707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5921a7bb5fb9_98146090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2805503475f5921a7bb58a7_56953925', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_2805503475f5921a7bb58a7_56953925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2805503475f5921a7bb58a7_56953925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    LIST OF ALL MY ORDERS
<?php
}
}
/* {/block "body"} */
}
