<?php
    
function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authLogin($postData)) {
            $user = model('user')->authLogin($postData);
            /*echo $user['role'];die;*/
            if($user['role']==1)
                redirect('/index.php?c=admin&m=logged');
            else
                redirect('/index.php?c=index&m=logged');
        } else {
            $data['error'] = 'Login failed ! Please try again !';
        }
    } 
    $data['template_file'] = 'auth/login.php';
    render('layout.php', $data);
}

function auth_logout() {
    model('user')->authLogout();
    redirect('/index.php?c=blog&m=list_client');
}

function auth_register() {
    $data = array();
    $data['template_file'] = 'auth/register.php';
    
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authRegister($postData)) {
            redirect('/index.php?c=blog&m=list_client');
        } else {
            $data['error'] = 'Register failed ! Email exists ! Please try again !';
            $data['postData'] = $postData;
        }
    }
    render('layout.php', $data);
}

function auth_change_info() {
    $logged = isLogged();
    $email = $logged['email'];
    $role = $logged['role'];
    if (isPostRequest()) {
        $postData = postData();
        //var_dump($postData);die;
        if (model('user')->authChangeInfo($postData, $email, $role)) {
            redirect('/index.php?c=blog&m=list');
        }
    }
    $data['user_info'] = model('user')->authGetInfo($email);
    //var_dump($data);die;
    $data['template_file'] = 'auth/change_info.php';
    render('layout.php', $data);
}