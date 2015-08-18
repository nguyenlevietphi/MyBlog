<?php

function comment_list() {
	$data = array();
	$currentUser = isLogged();

	if($currentUser['role']==1)
    {
		$id = $_GET['id'];
		$data['comment_data'] = model('comment')->getComment($id);
		/*var_dump($data);die;*/
		$data['template_file'] = 'comment/list.php';
		render('layout.php', $data);
	}
	else redirect('/index.php?c=blog&m=list_client');
}

function comment_delete() {
	$id = $_GET['id'];
	$blogs_id = $_GET['blogs_id'];
	$currentUser = isLogged();
	/*var_dump($id);die;*/
	if (model('comment')->deleteOne($id)) {
            redirect('/index.php?c=comment&m=list&id='.$blogs_id);
    }
}
