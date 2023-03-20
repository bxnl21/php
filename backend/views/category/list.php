<?php
    include_once('models/category.php');
    $f= new Category();
    if(!isset($_GET['page'])){
      $cur_page = 1;
      $data = $f->getCategory();
    } else {
        $cur_page = $_GET['page'];
        $size = $_GET['size'];
        $data = $f->getCategory($size,$cur_page);
    }
    $c= $data['category'];
    $trash = $f->getNumberOfTrashItem("category");
?>
<div class="content-wrapper pt-3">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách loại sản phẩm</strong></h3>

          <div class="card-tools">
            <a class="btn btn-sm btn-success" href="<?= $routing->site_url_backend('addcategory');?>"><i class="fas fa-plus"></i> Thêm</a>
            <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('trashcat');?>"><i class="fas fa-trash"></i> Thùng rác (<?= $trash?>)</a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered border-hover ">
                <thead>
                    <tr>
                      <th style="width:20px;" class="text-center">ID</th>
                      <th>Tên loại sản phẩm</th>
                      <th>Parent</th>
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
                                <td><?= $value['category_name'];?></td>
                                <td>
                                <?php
                                    $p=$f->getParentNameCategory($value['parent']);
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
                                    <a href="<?=$routing->site_url_backend('status');?>/<?=$value['id'];?>/<?=$value['status'];?>" class="btn btn-sm btn-success"><i class="far fa-check-circle"></i></a>
                                <?php
                                    }
                                    else{
                                ?>
                                    <a href="<?=$routing->site_url_backend('status');?>/<?=$value['id'];?>/<?=$value['status'];?>" class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></a>
                                <?php
                                     }
                                ?>
                                </td>
                                <td><a href="<?=$routing->site_url_backend('editcat');?>/<?=$value['id'];?>" class="btn btn-sm btn-success"><i class="far fa-edit"></i></a></td>
                                <td><a href="<?=$routing->site_url_backend('deltrashcat');?>/<?=$value['id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
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