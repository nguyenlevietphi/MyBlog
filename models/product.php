<?php
class Product extends Model{
    public $table = 'products';
    
    public function addProduct($postData) {
    	return db_insert($this->table, $postData);
    }

    public function updateProduct($postData, $id){
    	$where = "id=" . $id;
        return db_update($this->table, $postData, $where);
    }
}