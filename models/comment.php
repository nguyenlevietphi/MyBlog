<?php

class Comment extends Model{
    public $table = 'comments';
    
    public function getAll() {
        $sql = "SELECT * FROM {$this->table} ORDER BY blogs_id";
        return db_get_all($sql);
    }

    public function deleteComment($id) {
        $where = "id=" . $id;
        return db_delete($this->table,$where);
    }
}
