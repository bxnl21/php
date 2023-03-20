<?php
    include_once('models/product.php');
    $f= new Product();
    if(!isset($_GET['page'])){
      $cur_page = 1;
      $data = $f->getProduct();
    } else {
        $cur_page = $_GET['page'];
        $size = $_GET['size'];
        $data = $f->getProduct($size,$cur_page);
    }
    $c = $data['products'];
    $trash = $f->getNumberOfTrashItem("products");
?>
<div class="content-wrapper pt-3">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách sản phẩm</strong></h3>

          <div class="card-tools">
            <a class="btn btn-sm btn-success" href="<?= $routing->site_url_backend('addproduct');?>"><i class="fas fa-plus"></i> Thêm</a>
            <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('trashpro');?>"><i class="fas fa-trash"></i> Thùng rác (<?= $trash?>)</a>
          </div>
        </div>
        <div class="card-body">
        <?php
            // if(isset($newcat))  
            // {
            //     if($newcat)
            //     {   
            //         echo "<div class='alert alert-danger' role='alert'>Thêm thất bại</div>";
            //     }
            //     else{
            //         echo "<div class='alert alert-success' role='alert'>Thêm thành công</div>";
            //     }
            // }
        ?>
            <table class="table table-bordered border-hover ">
                <thead>
                    <tr>
                      <th style="width:20px;" class="text-center">ID</th>
                      <th style="width:200px;">Ảnh đại diện</th>
                      <th>Tên sản phẩm</th>
                      <th>Product category</th>
                      <th style="width:20px;">Status</th>
                      <th style="width:20px;">Edit</th>
                      <th style="width:20px;">Deltrash</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                              $i = 1;
                            foreach($c as $value):
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><img class="img-fluid" src="<?=$routing->base_url;?>assets/img/<?= $value['image'];?>" alt=""></td>
                                <td><?= $value['product_name'];?></td>
                                <td>
                                  <?php
                                      $p=$f->getCategoryName($value['product_category']);
                                      if(empty($p))
                                      { 
                                        echo "";
                                      } 
                                      else{  echo $p['category_name']; 
                                      }
                                  ?>
                                </td>
                                <td>
                                <?php
                                    if($value['status']==1)
                                    {
                                ?>
                                    <a href="<?=$routing->site_url_backend('statuspro');?>/<?=$value['id'];?>/<?=$value['status'];?>" class="btn btn-sm btn-success"><i class="far fa-check-circle"></i></a>
                                <?php
                                    }
                                    else{
                                ?>
                                    <a href="<?=$routing->site_url_backend('statuspro');?>/<?=$value['id'];?>/<?=$value['status'];?>" class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></a>
                                <?php
                                     }
                                ?>
                                </td>
                                <td><a href="<?=$routing->site_url_backend('editpro');?>/<?=$value['id'];?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a></td>
                                <td><a href="<?=$routing->site_url_backend('deltrashpro');?>/<?=$value['id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                        <?php
                            $i++;
                            endforeach;
                        ?>
                  </tbody>
            </table>
            <div class="pt-4"></div>
            <?= $data['paginator'];?>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>