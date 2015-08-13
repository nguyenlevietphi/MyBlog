<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
    	<?php if($logged['role']==1): ?>
    		<li><a href="index.php?c=admin&m=logged">Trang Quản Lý</a></li>
		<?php endif; ?>
    <li><a href="index.php?c=auth&m=change_info">Chỉnh sửa thông tin</a></li>
    <li><a href="index.php?c=auth&m=logout">Logout</a></li>
    <?php else: ?>
    <li><a href="index.php?c=auth&m=login">Login</a></li>
    <li><a href="index.php?c=auth&m=register">Register</a></li>
    <?php endif; ?>
</ul>
