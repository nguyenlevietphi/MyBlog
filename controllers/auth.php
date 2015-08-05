<?php
    
function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authLogin($postData)) {
            redirect('/admin.php?c=admin&m=logged');
        } else {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }
    
    $data['template_file'] = 'auth/login.php';
    render('layout.php', $data);
}

function auth_logout() {
    model('user')->authLogout();
    redirect('/admin.php?c=auth&m=login');
}