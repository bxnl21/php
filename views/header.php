<?php session_start(); 
    ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="<?php echo $routing->base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet" >
    <link href="<?php echo $routing->base_url("assets/css/style.css")?>" rel="stylesheet" >
    <script type="text/javascript" src="<?php echo $routing->base_url("assets/ckeditor/ckeditor.js")?>"></script>
	  <link rel="icon" type="image/png" href="<?=$routing->base_url_backend;?>assets/login/images/icons/favicon.ico"/>
  </head>
  <body>
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-secondary bg-dark fixed-top">
            <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?=$routing->site_url('trang-chu')?>">Home <span class="sr-only">(current)</span></a>
                </li>
          
                <li class="nav-item">
                  <a class="nav-link" href="<?=$routing->site_url('lien-he')?>">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
              <form class="form-inline" style="margin-left:430px">
                  <div class="input-group">
                      <input type="search" class="form-control" placeholder="Search..." aria-label="Username" aria-describedby="basic-addon1">
                      <div class="input-group-prepend">
                          <button class="btn btn-success  rounded-right" type="submit" ><i class="fas fa-search"></i></button>
                      </div>
                  </div>
              </form>
              <?php if(isset($_SESSION['user']))
                  {?>
                    <div class="dropdown">
                        <a class="text-white text-capitalize dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        <?=$_SESSION['user']['name'];?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="border-bottom dropdown-item mt-1  " href="<?= $routing->site_url('thong-tin-tai-khoan')?>/<?=$_SESSION['user']['id'];?>">Thông tin tài khoản</a>
                          <a class="border-bottom dropdown-item mt-1" href="#">Lịch sử mua hàng</a>
                          <a class="dropdown-item mt-1" style="background-color:#ffe6e6;" href="<?=$routing->site_url('dang-xuat')?>">Logout</span></a>
                        </div>
                      </div>
                      <div>
                          <a  href="<?=$routing->site_url("gio-hang")?>" role="button">
                          <i class="fas fa-shopping-cart"></i> <?php if(!isset($_SESSION['number_of_item']))
                {
                    echo "(0)";
                }else{
                    echo "(".$_SESSION['number_of_item'].")";
                }
                ?></a>
                      </div>
                      <?php } else{?>
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal"  href="<?=$routing->site_url("dang-nhap")?>">Đăng nhập</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal2"  href="<?=$routing->site_url("dang-ky")?>">Đăng ký</a>
                          </li>
                        </ul>
                        <div>
                          <a  href="<?=$routing->site_url("gio-hang")?>" role="button">
                          <i class="fas fa-shopping-cart"></i> <?php if(!isset($_SESSION['number_of_item']))
                {
                    echo "(0)";
                }else{
                    echo "(".$_SESSION['number_of_item'].")";
                }
                ?></a>
                        </div>
                          <?php }
                        ?>
            </div>
            </div>
          </nav>
      </div>
