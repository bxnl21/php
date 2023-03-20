<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once("models/product.php");
    $pro= new Product();
    if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $newPro = $pro ->addNewProduct();
            $url = $routing->site_url_backend("products");
            header("Location: $url");
            exit();
        }
        else{
?>
<form action="<?= $routing->site_url_backend('addproduct')?>" method="POST" name="formAddPro" enctype="multipart/form-data">
<div class="content-wrapper pt-3">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách sản phẩm</strong></h3>

          <div class="card-tools">
              <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Lưu</button>
              <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('products');?>"><i class="fas fa-arrow-left"></i> Quay về danh sách</a>
          </div>
        </div>
        <div class="card-body">
       
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input name="product_name" class="form-control" type="text" placeholder="Nhập tên loại sản phẩm" required>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="slug" id="slug" class="form-control" placeholder="Nhập slug" required></textarea> 
                    </div>
                    <div class="form-group">
                        <label>Product Detail</label>
                        <textarea name="detail" id="detail" class="form-control" placeholder="Nhập slug" required></textarea>
                        <script>CKEDITOR.replace( 'detail' );</script>  
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input name="image" class="form-control-file" type="file" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" class="form-control" type="numberic" required>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input name="quantity" class="form-control" type="numberic" required>
                    </div>
                    <div class="form-group">
                        <label>Product category</label>
                        <select name="category" class="form-control">
                            <option value="0">--Chon Category--</option>
                            <?php
                                    $allCat = $pro->getAllRecords("category");
                                    foreach ($allCat as  $value) {
                                       echo " <option value=".$value['id'].">".$value['category_name']."</option>";
                                    }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                            <option value="1">--Xuất bản--</option>
                            <option value="0">--Chưa Xuất bản--</option>
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
