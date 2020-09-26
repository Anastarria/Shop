<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 15:53:37
  from '/laravel/templates/admin/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6f39d120f810_63258203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7171b6253ea6e1e1178fd28505d65d970db53f2a' => 
    array (
      0 => '/laravel/templates/admin/orders.tpl',
      1 => 1601122985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6f39d120f810_63258203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10861714415f6f39d11dae63_60624333', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_10861714415f6f39d11dae63_60624333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10861714415f6f39d11dae63_60624333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
        <thead>
        <tr>
            <th rowspan="2">ID</th>
            <th rowspan="2">User</th>
            <th rowspan="2">Phone</th>
            <th colspan="4" style="text-align: center"> Products</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
            <tr>
            <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['order']->value['products']);?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
            <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['order']->value['products']);?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['user'];?>
</td>
            <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['order']->value['products']);?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
</td>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {?><img src="/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['image'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" width="200" height="200"><?php } else { ?><img src="/product_images/noimage.png" width="250" height="150"><?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>

    </table>
<?php
}
}
/* {/block "body"} */
}
