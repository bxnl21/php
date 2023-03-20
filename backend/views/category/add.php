<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php
        include_once("models/category.php");
        include_once("../libs/common.php");
        $cat= new Category();
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $newCat = $cat ->addNewCategory();
            if($newCat !=1 ){
                $newCat;
            }
            // $url = $routing->site_url_backend("category");
            // header("Location: $url");
            ?><form action="<?= $routing->site_url_backend('addcategory')?>" method="POST" name="formAddCat">
            <div class="content-wrapper pt-3">
                <section class="content">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách loại sản phẩm</strong></h3>
                      <div class="card-tools">
                          <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Lưu</button>
                          <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('category');?>"><i class="fas fa-arrow-left"></i> Quay về danh sách</a>
                      </div>
                      
                    </div>
                    <div class="card-body">
                        <div>
                        <?php if($newCat !=1){echo "<div class='alert alert-danger' role='alert'>$newCat</div>";}
                        else{echo "<div class='alert alert-success' role='alert'>Thêm thành công</div>";}?>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Tên loại sản phẩm</label>
                                    <input name="catname" class="form-control" type="text" placeholder="Nhập tên loại sản phẩm" required>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label> 
                                    <textarea name="slug" id="slug" class="form-control" placeholder="Nhập slug" required></textarea> 
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Parent</label>
                                    <select name="parent" class="form-control">
                                        <option value="0">--Chon Category--</option>
                                            <?php
                                                $allCat = $cat->getAllRecords("category");
                                                foreach ($allCat as  $value) {
                                                   echo " <option value=".$value['id'].">".$value['category_name']."</option>";
                                                }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option value="0">--Chưa Xuất bản--</option>
                                        <option value="1">--Xuất bản--</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Thùng rác</label>
                                    <select name="trash" class="form-control">
                                        <option value="0">--0--</option>
                                        <option value="1">--1--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- /.card -->
                </section>
                <!-- /.content -->
              </div>
            </form><?php
        }
        else{
?>
<form action="<?= $routing->site_url_backend('addcategory')?>" method="POST" name="formAddCat">
<div class="content-wrapper pt-3">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách loại sản phẩm</strong></h3>
          <div class="card-tools">
              <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Lưu</button>
              <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('category');?>"><i class="fas fa-arrow-left"></i> Quay về danh sách</a>
          </div>
        </div>
        <div class="card-body">
       
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Tên loại sản phẩm</label>
                        <input name="catname" class="form-control" type="text" placeholder="Nhập tên loại sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label> 
                        <textarea name="slug" id="slug" class="form-control" placeholder="Nhập slug"></textarea> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Parent</label>
                        <select name="parent" class="form-control">
                            <option value="0">--Chon Category--</option>
                                <?php
                                    $allCat = $cat->getAllRecords("category");
                                    foreach ($allCat as  $value) {
                                       echo " <option value=".$value['id'].">".$value['category_name']."</option>";
                                    }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                            <option value="0">--Chưa Xuất bản--</option>
                            <option value="1">--Xuất bản--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Thùng rác</label>
                        <select name="trash" class="form-control">
                            <option value="0">--0--</option>
                            <option value="1">--1--</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
</form>
<?php         
        }
?>
