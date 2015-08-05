<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = isLogged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
    <li><a href="admin.php?c=auth&m=logout">Logout</a></li>
    <?php else: ?>
    <li><a href="admin.php?c=auth&m=login">Login</a></li>
    <?php endif; ?>
</ul>
