<?php

class Blog extends Model{
    public $table = 'blogs';
    public $primary_key = 'id';
    
    public function getOneBlog($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id=" . $id;
        return db_get_one($sql);
    }
    
    public function addDayBlog($postData) {
        $postData['blog_day'] = date("Y-m-d H:i:s");
        
        return db_insert($this->table, $postData);
    }

    public function updateBlog($postData, $id) {
        $postData['blog_day'] = date("Y-m-d H:i:s");
        $where = "id=" . $id;
        return db_update($this->table, $postData, $where);
    }

    public function getAllComment($id) {
        $sql = "SELECT * FROM comments WHERE blogs_id =".$id;
        return db_get_all($sql);
    }
    public function addComment($postData, $id) {
        $postData['blogs_id'] = $id;
        $postData['comment_day'] = date("Y-m-d H:i:s");

        $logged = isLogged();
        $postData['name']=$logged['name'];
        
        return db_insert('comments', $postData);
    }
}
