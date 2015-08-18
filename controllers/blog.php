<?php

function blog_list() {
	$data = array();
	$currentUser = isLogged();

    if($currentUser['role']==1)
    {
        $data['blog_data'] = model('blog')->getAll();
        /*var_dump($data);die;*/
        $data['template_file'] = 'blog/list.php';
        render('layout.php', $data);
    }
    else redirect('/index.php?c=blog&m=list_client');	
}

function blog_add() {
    if (isPostRequest()) {
        $postData = postData();
        $currentUser = isLogged();
        if (model('blog')->addDayBlog($postData)) {
            redirect('/index.php?c=blog&m=list');
        }
    }
    
    $data['template_file'] = 'blog/add.php';
    render('layout.php', $data);
}

function blog_update() {
	$id = $_GET['id'];

    if (isPostRequest()) {
        $postData = postData();
        /*$currentUser = isLogged();*/
        if (model('blog')->updateBlog($postData, $id)) {
            redirect('/index.php?c=blog&m=list');
        }
    }
    $data['blog_object'] = model('blog')->getOne($id);
    //var_dump($data);die;
    $data['template_file'] = 'blog/update.php';
    render('layout.php', $data);
}

function blog_delete() {
	$id = $_GET['id'];
	$currentUser = isLogged();
	/*var_dump($id);die;*/
	if (model('blog')->deleteOne($id)) {
            redirect('/index.php?c=blog&m=list');
    }
}

//Chức năng dành cho client
function blog_list_client() {
    $data = array(); 
    $data['blog_data'] = model('blog')->getAll();
    /*var_dump($data);die;*/
    $data['template_file'] = 'blog/list_client.php';
    render('layout.php', $data);
}

function blog_detail() {
    $id = $_GET['id'];

    if (isPostRequest()) {
        $postData = postData();
        $currentUser = isLogged();
        if (model('blog')->addComment($postData, $id)) {
            redirect('/index.php?c=blog&m=detail&id='.$id);
        }
    }
    $data['blog_content'] = model('blog')->getOneBlog($id);
    $data['blog_comment'] = model('blog')->getAllComment($id);

    //var_dump($data);die;
    $data['template_file'] = 'blog/viewBlog.php';
    render('layout.php', $data);
}