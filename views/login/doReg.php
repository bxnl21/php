<?php 
    include_once("libs/authorization.php");
    $user = new Auth();
    $u = $user->register();
    if($u == 1){
       ?> <script>alert("Đăng ký thành công");</script><?php
    }
    else{
        ?> <script>alert("Sdt/Email đã được sủ dụng để đăng ký");</script><?php
    }
?>