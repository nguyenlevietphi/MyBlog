<?php

class Blog extends Model{
    public $table = 'blogs';
    public $primary_key = 'id';
    
    public function getAll() {
/*        $first_day_this_month = date("Y-m-d", strtotime('first day of this month'));
        $first_day_next_month = date("Y-m-d", strtotime('first day of next month'));
        */
        $sql = "SELECT * FROM {$this->table}";
        return db_get_all($sql);
    }

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

    public function deleteBlog($id) {
        $where = "id=" . $id;
        //Xóa các bình luận có liên kết với bài viết cần xóa
        db_delete("comments", "blogs_id=".$id);
        //echo "blogs_id=".$where . "comments";die;
        return db_delete($this->table,$where);
    }

    public function getAllComment($id) {
        $sql = "SELECT * FROM comments WHERE blogs_id =".$id;
        return db_get_all($sql);
    }
    public function addDayComment($postData, $id) {
        $postData['blogs_id'] = $id;
        $postData['comment_day'] = date("Y-m-d H:i:s");
        
        return db_insert('comments', $postData);
    }
}
