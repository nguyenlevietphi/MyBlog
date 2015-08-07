
<a href="admin.php?c=blog&m=list" class="btn btn-primary">QUẢN LÝ CÁC BÀI VIẾT</a>
<h3>Danh sách các bình luận</h3>
<table class="table table-bordered" border="1">
    <tr>
        <th>Blog ID</th>
        <th>Người viết</th>
        <th>Nội dung bình luận</th>
        <th>Ngày viết</th>
    </tr>
    <?php
        $i = 0;
        foreach ($comment_data as $b):
    ?>
    <tr>
        <td><?php echo $b['blogs_id']; ?></td>
        <td><?php echo $b['name']; ?></td>
        <td><?php echo $b['comment']; ?></td>
        <td><?php echo $b['comment_day']; ?></td>
        <td>
            <a onclick="return confirm('Bạn thực sự muốn xóa comment này?')" href="admin.php?c=comment&m=delete&id=<?php echo $b['id']; ?>" class="btn btn-primary">Delete</a>
        </td>
    </tr>
    <?php        
        endforeach;
    ?>
</table>