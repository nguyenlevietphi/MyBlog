<h3>Danh sách các bài blog</h3>
<table class="table table-bordered" border="1">
    <?php
        $i = 0;
        foreach ($blog_data as $b):
        /*$i++;*/
    ?>
    <hr/>
    <i>Ngày đăng: <b><?php echo $b['blog_day'] ?></b></i>
    <h4>
        <a href="index.php?c=blog&m=detail&id=<?php echo $b['id']; ?>" style="text-decoration:none; color:Black     ;" >
            <?php echo $b['title']; ?>
        </a>
    </h4>
    <a href="index.php?c=blog&m=detail&id=<?php echo $b['id']; ?>" style="text-decoration:none; color:Black     ;" >
        <?php echo substr($b['content'], 0, 300); ?> <b>Đọc thêm</b>
    </a>
    <?php        
        endforeach;
    ?>
</table>