<?php

class User extends Model{
    public $table = 'users';
    public $primary_key = 'id';
    
    public function authLogin($postData) {
        $user = static::getOneBy($postData['email'], 'email');
        
        if ($user && $user['password'] == md5($postData['password'])) {
            unset($user['password']);
            $_SESSION['logged'] = $user;
            return $user;
        }
        
        return false;
    }
    
    public function authRegister($postData) {
        $user = static::getOneBy($postData['email'], 'email');
        
        if ($user) {
            return false;
        } else {
            $postData['password'] = md5($postData['password']);
            $postData['role']=2;
            $user_id = db_insert($this->table, $postData);
            unset($postData['password']);
            /*$postData['id'] = $user_id;*/
            $_SESSION['logged'] = $postData;
            
            return true;
        }
    }
    
    public function authLogout() {
        unset($_SESSION['logged']);
        session_destroy();
    }

    public function authChangeInfo($postData, $email, $role) {
        $where = "email='" . $email."'";
        $postData['password'] = md5($postData['password']);
        $user = db_update($this->table, $postData, $where);
        unset($postData['password']);
        $postData['role']=$role;
        $postData['email']=$email;
        $_SESSION['logged'] = $postData;
        return true;
    }

    public function authGetInfo($email) {
        $sql = "SELECT * FROM {$this->table} WHERE email='" . $email. "'";
        //echo $sql;die;
        return db_get_one($sql);
    }
}
