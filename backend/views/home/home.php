<div class="content-wrapper pt-3">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong class="text-uppercase text-danger">Danh sách loại sản phẩm</strong></h3>

          <div class="card-tools">
            <a class="btn btn-sm btn-success" href="{{ route('category.getinsert') }}"><i class="fas fa-plus"></i> Thêm</a>
            <a class="btn btn-sm btn-danger" href="{{ route('category.trash') }}"><i class="fas fa-trash"></i> Thùng rác</a>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered border-hover ">
                <thead>
                    <tr>
                      <th style="width:20px;" class="text-center">ID</th>
                      <th >Tên loại sản phẩm</th>
                      <th >Cấp cha</th>
                      <th >Chức năng</th>
                    </tr>
                  </thead>
                  <tbody>
  
                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width:20px;" class="text-center">ID</th>
                      <th >Tên loại sản phẩm</th>
                      <th >Cấp cha</th>
                      <th >Chức năng</th>
                    </tr>
                  </tfoot>
            </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>