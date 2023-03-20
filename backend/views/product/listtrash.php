<?php
    include_once('models/product.php');
    $f= new Product();
    $c= $f ->trashProduct();

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
            <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('products');?>"><i class="fas fa-arrow-left"></i> Quay về danh sách</a>
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
                      <th>Tên sản phẩm</th>
                      <th>Product category</th>
                      <th style="width:20px;">Restore</th>
                      <th style="width:20px;">Deltrash</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=0;
                            foreach($c as $value):
                        ?>
                            <tr>
                                <td><?= $i ?></td>
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
                                <td><a href="<?=$routing->site_url_backend('restorepro');?>/<?=$value['id'];?>" class="btn btn-sm btn-success"><i class="fas fa-undo"></i></a></td>
                                <td><a href="<?=$routing->site_url_backend('delpro');?>/<?=$value['id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                        <?php
                            $i++;
                            endforeach;
                        ?>
                  </tbody>
            </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>