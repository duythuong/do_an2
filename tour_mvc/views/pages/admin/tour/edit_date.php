 <?php
  while ($row = $resultt->fetch_assoc()) {
      $MaTour     = $row['MaTour'];
      $ngaykhoihanh = $row['ngaykhoihanh'];
    }
 ?>

 <?php include "views/pages/admin/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa ngày khởi hành</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="AddSale" action="#" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-8"><label>Tên loại Tour:</label>
                      <div class="form-group">
                          <select class="form-control" name="MaTour">
                            <?php 
                                while ($row = $result->fetch_assoc()) {
                                  $id   = $row['MaTour']; 
                                  $selected = ($MaTour == $id)?'selected':'';
                                  $name = $row['TenTour'];
                                  echo "<option value='$id'>$name</option>";
                                }
                            ?>
                          </select>
                        </div>
                    </div>
                    <div class="col-xs-4"><label>Ngày khởi hành:</label>
                      <div class="form-group">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" name="ngaykhoihanh" value="<?php echo $ngaykhoihanh?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-block btn-primary btn-lg" name="edit_date">Cập nhật</button>
                

              </form>
            </div>
            <!-- /.box-body -->
          </div>        
        </div>
      </div>
    </section>
      </div>
  <!-- /.content-wrapper -->
  <?php include "views/pages/admin/footer.php" ?>
