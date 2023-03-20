<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php
    include_once("models/order.php");
    $f = new Orders();
    if(!isset($_GET['page'])){
        $cur_page = 1;
        $data = $f->getOrders();
    }else{
        $cur_page = $_GET['page'];
        $size = $_GET['size'];
        $data = $f->getOrders($size,$cur_page);
    }
    $data_orders = $data['orders'];
    $trash = $f->getNumberOfTrashItem("orders");
   ?> 
   
<div class="content-wrapper pt-3">
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách đơn hàng</strong></h3>

          <div class="card-tools">
            <a class="btn btn-sm btn-danger" href="<?= $routing->site_url_backend('trashcat');?>"><i class="fas fa-trash"></i> Thùng rác (<?= $trash?>)</a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered border-hover ">
                <thead>
                    <tr>
                      <th style="width:20px;" class="text-center">Order_id</th>
                      <th>Customer_id</th>
                      <th>Ordered_date</th>
                      <th style="width:20px;">Delivered</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                              $i = 1;
                            foreach($data_orders as $value):
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><a href="<?= $routing->site_url_backend("order_detail");?>/<?=$value['id']?>"><?= $value['customer_id'];?></a></td>
                                <td><?= $value['order_date'];?></td>
                                <td><?php if($value['delivered'] == 0 )
                                    {
                                        ?><i class="text-danger fas fa-times-circle"></i><?php
                                    }
                                    else {
                                        ?><i class="text-success fas fa-check-circle"></i><?php
                                    }
                                ?></td>
                            </tr>
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
    </section>
  </div>