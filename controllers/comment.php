<?php

function comment_list() {
	$data = array();
	$currentUser = isLogged();
	
	$data['comment_data'] = model('comment')->getAll();
	/*var_dump($data);die;*/
	$data['template_file'] = 'comment/list.php';
	render('layout.php', $data);
}

function comment_delete() {
	$id = $_GET['id'];
	$currentUser = isLogged();
	/*var_dump($id);die;*/
	if (model('comment')->deleteComment($id)) {
            redirect('/admin.php?c=comment&m=list');
        }
}
