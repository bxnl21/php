<?php 
    include_once("libs/authorization.php");
    $l = new Auth();
    if(isset($_POST['btnLog'])){
        $result = $l->login();
        if($result != false){
            $_SESSION['user'] = $result;
            $url = $routing->site_url('trang-chu');
            ob_clean();
            header("Location: $url");
        }
        else{
            ?><script>alert("Email hay password không đúng");</script><?php
            // $url = $routing->site_url('trang-chu');
            // header("Location: $url");
        }
    }
?>