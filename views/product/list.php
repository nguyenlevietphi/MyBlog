
<h3>Danh sách sản phẩm</h3>
<p>
    <a href="index.php?c=product&m=add" class="btn btn-primary">Add New Product</a>
</p>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Hình ảnh</th>
        <th>Mô tả</th>
        <th></th>
    </tr>
    <?php
        $i = 0;
        foreach ($product_data as $p):
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $p['name']; ?></td>
        <td><?php echo $p['price']; ?></td>
        <td><img src='../images/products/<?php echo $p['image'];?>'/></td>
        <td><?php echo $p['description']; ?></td>
        <td>
            <form method="post" action="index.php?c=product&m=delete">
                <input type="hidden" name="id" value="<?php echo $p['id']; ?>"/>
                <input type="hidden" name="image" value="<?php echo $p['image']; ?>"/>
                <button onclick="return confirm('Bạn thực sự muốn xóa sản phẩm này?')" type="submit" class="btn btn-primary">Delete</button>
            </form>
        </td>
        <td>
            <form method="post" action="index.php?c=product&m=update">
                <input type="hidden" name="id" value="<?php echo $p['id']; ?>"/>
                <input type="hidden" name="image" value="<?php echo $p['image']; ?>"/>
                <button  type="submit" class="btn btn-primary" name="update" value="update">Update</button>
            </form>
        </td>
    </tr>
    <?php        
        endforeach;
    ?>
</table>