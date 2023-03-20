<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');?>
<?php 
    include_once("models/order.php");
    $f = new Orders();
    $cus = $f->orderDetail($_GET['id']);
    $detail = $f->orderDetail1($cus['customer_id']);
?>
<div class="content-wrapper pt-3">
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Thông tin</strong></h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <h4>Thông tin khách hàng</h4>
                    <tr>
                      <th>Customer Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Order date</th>
                    </tr>
                  </thead>
                  <tbody>
           
                    <tr>
                        <td><?=$cus['name']?></td>
                        <td><?=$cus['email']?></td>
                        <td><?=$cus['phone']?></td>
                        <td><?=$cus['address']?></td>
                        <td><?=$cus['order_date']?></td>
                    </tr>
                  
                  </tbody>
            </table>

            <table class="table table-bordered border-hover">
                <thead>
                    <h4 class="mt-4">Thông tin đơn hàng</h4>
                    <tr>
                      <th>Order id</th>
                      <th>Customer Name</th>
                      <th>Product name</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th>Order date</th>
                      <th>Delivered</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php $i=0;foreach($detail as $row): ?>
                    <tr>
                        <td><?=$i?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['product_name']?></td>
                        <td><?=number_format($row['price']);?></td>
                        <td><?=$row['qty']?></td>
                        <td><?=number_format($total=$row['price']*$row['qty'])?></td>
                        <td><?=$row['order_date']?></td>
                        <td><?php 
                            if($row['delivered']==0)
                            {
                                echo "<i class='text-danger fas fa-times-circle'></i>";
                            }else{
                                echo "<i class='text-success far fa-check-circle'></i>";
                            }
                            ?></td>
                    </tr>
                          <?php $i++;endforeach;?>
                  </tbody>
            </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>