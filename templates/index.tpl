{extends file="layout.tpl"}

{block name="body"}
    <div class="row">




        <div class="col-md-3">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="/" role="tab" aria-controls="home">All</a>
                {foreach from=$categories item=category}
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="/?action=sorted&categoryId={$category['id']}" role="tab" aria-controls="profile">{$category['name']}</a>
                {/foreach}
            </div>
        </div>



        <div class="col-md-9">


            <div class="row">

                {foreach from=$products item=product}
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            {if $product['image']}<img src="/{{$product['image']}}" width="200" height="200">{else}<img src="/product_images/noimage.png" width="250" height="150">{/if}
                            <div class="caption">
                                <h3>{$product['name']}</h3>
                                <p>Category: <b>{$product['category_name']}</b></p>
                                <p>{$product['price']}$</p>
                                <p>
                                    <form action="/?action=addToCart" method="POST">
                                        <input type="hidden" name="id" value="{$product['id']}">
                                        <input type="submit" class="btn btn-success" role="button" value="Add to cart!">
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                {/foreach}

         </div>
    </div>
{/block}