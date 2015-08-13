<?php

function index_index() {
    redirect('/index.php?c=blog&m=list_client');
}

function index_logged() {
	redirect('/index.php?c=blog&m=list_client');
    /*$data['template_file'] = 'index/index.php';
    render('layout_client.php', $data);*/
}
