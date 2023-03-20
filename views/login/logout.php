<?php
    $url = $routing->site_url('trang-chu');
    unset($_SESSION['user']);
    session_destroy();
    header("Location: $url");
?>