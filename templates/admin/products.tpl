{extends file="layout.tpl"}

{block name="body"}

    {if isset($smarty.get.error)}
        <div class="alert alert-danger" role="alert">{{$smarty.get.error}}</div>
    {/if}

    {if isset($smarty.get.message)}
        <div class="alert alert-success" role="alert">{{$smarty.get.message}}</div>
    {/if}

    <form action="/?action=adminAddProduct" method="POST" style="width: 400px" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product name" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
        </div>
        <div class="form-group">
            <label for="file">Image</label>
            <input type="file" class="form-control-file" id="file" name="image">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control form-control-sm" id="category" name="category_id">
                {foreach from=$categories item=category}
                <option value="{$category['id']}">{$category['name']}</option>
                {/foreach}
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create Product</button>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$products item=product}
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{if $product['image']}<img src="/{{$product['image']}}" width="200" height="200">{else}<img src="/product_images/noimage.png" width="250" height="150">{/if}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['category_name']}}</td>
                    <td>
                        <button class="btn btn-warning">Update</button>
                    <td><a href="/?action=adminRemoveProduct&productId={$product['id']}" class="btn btn-danger">Delete</a></td>
                    </td>
                </tr>
            {/foreach}

        </tbody>
    </table>
{/block}