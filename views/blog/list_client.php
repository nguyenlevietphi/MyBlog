<h3>Danh sách các bài blog</h3>
<table class="table table-bordered" border="1">
    <tr>
        <th>#</th>
        <th>Tiêu đề</th>
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
        <td><?php echo $b['blog_day']; ?></td>
        <td>
            <a href="index.php?c=blog&m=detail&id=<?php echo $b['id']; ?>" class="btn btn-primary">Xem chi tiết</a>
        </td>
    </tr>
    <?php        
        endforeach;
    ?>
</table>