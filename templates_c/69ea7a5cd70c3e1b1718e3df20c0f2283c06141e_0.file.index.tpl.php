<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 14:17:00
  from '/laravel/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6f232c0c57f7_69842445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea7a5cd70c3e1b1718e3df20c0f2283c06141e' => 
    array (
      0 => '/laravel/templates/index.tpl',
      1 => 1601119017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6f232c0c57f7_69842445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7807639915f6f232c0af7f9_21579363', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_7807639915f6f232c0af7f9_21579363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7807639915f6f232c0af7f9_21579363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">




        <div class="col-md-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="/" role="tab" aria-controls="home">All</a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="/?action=sorted&categoryId=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" role="tab" aria-controls="profile"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>



        <div class="col-md-9">


            <div class="row">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {?><img src="/<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['image'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" width="200" height="200"><?php } else { ?><img src="/product_images/noimage.png" width="250" height="150"><?php }?>
                            <div class="caption">
                                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
                                <p>Category: <b><?php echo $_smarty_tpl->tpl_vars['product']->value['category_name'];?>
</b></p>
                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
$</p>
                                <p>
                                    <form action="/?action=addToCart" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                        <input type="submit" class="btn btn-success" role="button" value="Add to cart!">
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

         </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
