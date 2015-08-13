<?php

class Comment extends Model{
    public $table = 'comments';
    
    public function getComment($id) {
    	$where = "blogs_id=" . $id;
        $sql = "SELECT * FROM {$this->table} WHERE {$where}";
        return db_get_all($sql);
    }

/*    public function deleteComment($id) {
        $where = "id=" . $id;
        return db_delete($this->table,$where);
    }*/
}
