
<a href="admin.php?c=comment&m=list" class="btn btn-primary">QUẢN LÝ CÁC BÌNH LUẬN</a>
<h3>Danh sách các bài blog</h3>
<p>
    <a href="admin.php?c=blog&m=add" class="btn btn-primary">Add New Blog</a>
</p>
<table class="table table-bordered" border="1">
    <tr>
        <th>#</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Ngày viết</th>
    </tr>
    <?php
        $i = 0;
        foreach ($blog_data as $b):
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $b['title']; ?></td>
        <td><?php echo $b['content']; ?></td>
        <td><?php echo $b['blog_day']; ?></td>
        <td>
            <a onclick="return confirm('Bạn thực sự muốn xóa bài viết này?')" href="admin.php?c=blog&m=delete&id=<?php echo $b['id']; ?>" class="btn btn-primary">Delete</a>
        </td>
        <td>
            <a href="admin.php?c=blog&m=update&id=<?php echo $b['id']; ?>" class="btn btn-primary">Update</a>
        </td>
    </tr>
    <?php        
        endforeach;
    ?>
</table>