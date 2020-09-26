{extends file="layout.tpl"}

{block name="body"}
    <table class="table">
        <thead>
          <tr>
            <th rowspan="2">ID</th>
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
            {foreach from=$orders item=order}
                <tr>
                    <td rowspan="{count($order['products'])}">{$order['id']}</td>
                    {foreach from=$order['products'] item=product}

                        <td>{$product['name']}</td>
                        <td>{if $product['image']}<img src="/{{$product['image']}}" width="200" height="200">{else}<img src="/product_images/noimage.png" width="250" height="150">{/if}</td>
                        <td>{$product['count']}</td>
                        <td>{$product['price']}</td>
                        </tr>
                    {/foreach}

            {/foreach}
        </tbody>

    </table>
{/block}