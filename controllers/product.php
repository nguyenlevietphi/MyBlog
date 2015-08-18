<?php

function product_list() {
	$data = array();
	$currentUser = isLogged();

    if($currentUser['role']==1)
    {
        $data['product_data'] = model('product')->getAll();
        /*var_dump($data);die;*/
        $data['template_file'] = 'product/list.php';
        render('layout.php', $data);
    }
    else redirect('/index.php?c=product&m=list_client');	
}

function product_add(){
	if (isPostRequest()) {
        $postData = postData();
        $postData['image'] = uploadImage();;
        $currentUser = isLogged();
        //var_dump($postData);die;
        if($postData['image']==0)
        	echo "Không upload được hình ảnh";
        else{
        	if (model('product')->addProduct($postData))
            	redirect('/index.php?c=product&m=list');
            else echo "<script>alert('"."Không thêm vào được CSDL!"."')</script>";
        }
    }
    $data['template_file'] = 'product/add.php';
    render('layout.php', $data);
}

function product_delete() {
	$id = $_POST['id'];
	if (model('product')->deleteOne($id)) {
		deleteImage();
        redirect('/index.php?c=product&m=list');
    }
}

function product_update(){
	$id = $_POST['id'];
	if(isset($_POST['update'])){
		$data['product_object'] = model('product')->getOne($id);
	    //var_dump($data);die;
	    $data['template_file'] = 'product/update.php';
	    render('layout.php', $data);
	}
	if(isset($_POST['saveUpdate'])) {
		unset($_POST['saveUpdate']);
        $postData = postData();
        if($_FILES["fileImage"]['name']!=""){
        	$postData['image'] = uploadImage();
        	deleteImage($_POST['image']);
        }
        if (model('product')->updateProduct($postData, $id)) {
            redirect('/index.php?c=product&m=list');
        }
    }
}

function uploadImage(){
	$target_dir = ROOT.DS."images".DS."products".DS;
	$name_img = $_FILES["fileImage"]["name"];
	$type_pos = strrpos($name_img, ".");
	$type_img = substr($name_img, $type_pos);
	
	$uploadOk = 1;
	//Random name file and check if file already exists
	do {
		$id_img = rand(1,9999999999);
		$name_img = $id_img . $type_img;

		$target_file = $target_dir . $name_img;
	} while (file_exists($target_file));
	
	// Check file size
	if ($_FILES["fileImage"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    return 0;
	// if everything is ok, try to upload file
	} else {
		//var_dump($_FILES);die;
	    if (move_uploaded_file($_FILES["fileImage"]["tmp_name"], $target_file))
	    	return $name_img;
	    else 
	    	return 0;
	}
}

function deleteImage(){
	$img = "./images/products/".$_POST['image'];
	unlink($img);
}