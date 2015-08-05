<?php

function admin_admin() {
    redirect('/admin.php' . (isLogged() ? '?c=admin&m=logged' : '?c=auth&m=login'));
}

function admin_logged() {
    $data['template_file'] = 'admin/admin.php';
    render('layout.php', $data);
}