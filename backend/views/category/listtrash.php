<?php
    include_once('models/category.php');
    $f= new Category();
    $c= $f ->trashCategory();

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
            <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('category');?>"> Quay về danh sách</a>
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
                      <th>Tên loại sản phẩm</th>
                      <th>Parent</th>
                      <th style="width:20px;">Status</th>
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
                                    <a class="btn btn-sm btn-success"><i class="far fa-check-circle"></i></a>
                                <?php
                                    }
                                    else{
                                ?>
                                    <a class="btn btn-sm btn-danger"><i class="fas fa-ban"></i></a>
                                <?php
                                     }
                                ?>
                                </td>
                                <td><a href="<?=$routing->site_url_backend('restore');?>/<?=$value['id'];?>" class="btn btn-sm btn-success"><i class="fas fa-undo"></i></a></td>
                                <td><a href="<?=$routing->site_url_backend('delcat');?>/<?=$value['id'];?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
                        <?php
                            $i++;
                            endforeach;
                        ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width:20px;" class="text-center">ID</th>
                      <th>Tên loại sản phẩm</th>
                      <th>Parent</th>
                      <th style="width:20px;">Status</th>
                      <th style="width:20px;">Edit</th>
                      <th style="width:20px;">Deltrash</th>
                    </tr>
                  </tfoot>
            </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>