<?php
    $url = $routing->site_url_backend('category');
    unset($_SESSION['user']);
    session_destroy();
    header("Location: $url");
?>