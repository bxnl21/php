<?php
include_once("common.php");
class Auth extends Common{
    public function register(){
        $f = new Common();
        $user = array(
            'name' => $_POST['name'],
            'email'=> $_POST['email'],
            'phone' => $_POST['phone'],
            'address'=> $_POST['address'],
            'password' => sha1($_POST['pass']),
            'created_at'=> date("Y-m-d H:i:s"),
            'status'=>1
        );
        $sql1 = "SELECT * FROM users WHERE email = '".$user['email']."'";
        $result = $this->getOne($sql1);
        if(is_null($result)){
        $f->addRecords("users",$user);
            return 1;
        } else{
            return 0;}
    }
    public function login(){
        $e = $_POST['email'];
        $pw = sha1($_POST['pass']);
        $sql = "SELECT * FROM users WHERE email = '$e' AND password = '$pw' ";
        $result = $this->getOne($sql);
        if(is_null($result)){
            return false;
        }else{
            return $result;
        }
    }
    public function loginAdmin(){
        $e = $_POST['email'];
        $pw = sha1($_POST['pass']);
        $sql = "SELECT * FROM users WHERE email = '$e' AND password = '$pw' AND role ='admin'";
        $result = $this->getOne($sql);
        $name = $result['name'];
        if(is_null($result))
        {
            return false;
        }else{
            return $name;
        }
    }
} 
?>