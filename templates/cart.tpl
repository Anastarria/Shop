{extends file="layout.tpl"}

{block name="body"}


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
        {foreach from=$products item=product}
            <tr>
                <td>{$product['id']}</td>
                <td>{$product['name']}</td>
                <td>{if $product['image']}<img src="/{{$product['image']}}" width="200" height="200">{else}<img src="/product_images/noimage.png" width="250" height="150">{/if}</td>
                <td>
                    <form action="/?action=addToCart" method="POST">
                        <input type="hidden" name="id" value="{$product['id']}">
                        <input type="submit" class="btn btn-success" role="button" value="+">
                    </form>
                    {$product['count']}
                    <form action="/?action=removeFromCart" method="POST">
                        <input type="hidden" name="id" value="{$product['id']}">
                        <input type="submit" class="btn btn-danger" role="button" value="-">
                    </form>
                </td>
                <td>{$product['price']} $</td>
                <td>{$product['count'] * $product['price']} $</td>
            </tr>
        {/foreach}
        </tbody>
    </table>

    <div>Total: {$total}$</div>

    <form action="/?action=makeOrder" method="POST">
        <input type="text" name="phone" placeholder="Phone number" class="form-control" style="width: 200px">
        <input type="submit" class="btn btn-success" value="Make order">
    </form>

{/block}