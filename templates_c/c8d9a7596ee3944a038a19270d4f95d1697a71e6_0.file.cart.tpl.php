<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 14:57:07
  from '/laravel/templates/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6f2c93e18f24_79918857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8d9a7596ee3944a038a19270d4f95d1697a71e6' => 
    array (
      0 => '/laravel/templates/cart.tpl',
      1 => 1601121421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6f2c93e18f24_79918857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9684227155f6f2c93e125c6_72867998', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_9684227155f6f2c93e125c6_72867998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9684227155f6f2c93e125c6_72867998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Count</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {?><img src="/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['image'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" width="200" height="200"><?php } else { ?><img src="/product_images/noimage.png" width="250" height="150"><?php }?></td>
                <td>
                    <form action="/?action=addToCart" method="POST">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                        <input type="submit" class="btn btn-success" role="button" value="+">
                    </form>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>

                    <form action="/?action=removeFromCart" method="POST">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                        <input type="submit" class="btn btn-danger" role="button" value="-">
                    </form>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 $</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['count']*$_smarty_tpl->tpl_vars['product']->value['price'];?>
 $</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <div>Total: <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$</div>

    <form action="/?action=makeOrder" method="POST">
        <input type="text" name="phone" placeholder="Phone number" class="form-control" style="width: 200px">
        <input type="submit" class="btn btn-success" value="Make order">
    </form>

<?php
}
}
/* {/block "body"} */
}
