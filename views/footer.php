<?php 


?>
 <section class="clearfix footer bg-dark text-light py-3">
            <div class="container">
            <div class="row">
                    <div class="col-12 col-md-3"> 
                        <h6 class="text-center">Styker Leap Shop</h6>
                        <ul style="list-style-type: none;">
                            <li><a href="">Game bản quyền là gì?</a></li>
                            <li><a href="">Giới thiệu Styker Leap Shop</a></li>
                            <li><a href="">Điều khoản dịch vụ</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3"> 
                        <h6 class="text-center">TÀI KHOẢN</h6> 
                        <ul style="list-style-type: none;">
                            <li><a href="">Giỏ hàng</a></li>
                            <li><a href="">Đăng kí</a></li>
                            <li><a href="">Đăng nhập</a></li>
                            <li><a href="">Sản phẩm đã mua</a></li>
                            <li><a href="">Chế độ bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4"> 
                         <h6 class="text-center">LIÊN HỆ</h6>
                        <ul style="list-style-type: none;">
                            <li><a href="">Địa chỉ giao dịch trực tiếp</a></li>
                            <li><a href="">Hotline: xxxx xxx xxx (7:00 - 24:00)</a></li>
                            <li><a href="">Email: hotro@sykerleap.vn</a></li>
                            <li><a href="">Fanpage</a></li>
                            <li><a href="">Donate nhân viên CSKH</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
                        <h6 class="text-center">LIÊN HỆ</h6>
                    </div>
                </div>
            </div>
        </section>

    <!-- Optional JavaScript -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=$routing->site_url('dang-nhap')?>">
                    <div class="form-group">
                        <label >Username</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="email" type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Password</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="pass" type="password" class="form-control" id="inputPassword4" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <button type="submit" name="btnLog" class="btn btn-primary">Sign in</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Đăng ký</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=$routing->site_url('dang-ky')?>">
                    <div class="form-group">
                        <label >Username</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="email" type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username" email>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Password</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="pass" type="password" class="form-control" id="inputPassword4" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Họ tên</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="name" type="text" class="form-control" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Số điện thoại</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="phone" id="mobile" type="text" class="form-control" required >
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Địa chỉ</label>
                        <div class="input-group mb-2 mr-sm-2">
                        <input name="address" type="text" class="form-control" required>
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                        </div>
                    </div>
                    <button type="submit" name="btnReg" class="btn btn-primary">Sign in</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= $routing->base_url('assets/js/jquery-3.5.1.slim.min.js')?>"></script>
    <script src="<?= $routing->base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?= $routing->base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </body>
</html>



