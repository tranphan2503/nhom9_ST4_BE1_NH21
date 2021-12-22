<?php 
session_start();
include "header.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">         
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Your Cart</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Your Cart</h3>
          <?php
            if (isset($_GET['id'])){
              $cart = array();
              $id = $_GET['id'];
              if (isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]++;
              }else{
                $_SESSION['cart'][$id] = 1;
              } 
            }
            $cart = $_SESSION['cart'];
          ?>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped products">
              <thead>
                  <tr>
                      <th style="width: 20%;text-align: center">Name</th>
                      <th style="width: 8%;text-align: center">Image</th>
                      <th style="width: 35%;text-align: center;">Description</th>
                      <th style="width: 8%;text-align: center;">Price </th>
                      <th style="width: 5%" class="text-center">Manufacture</th>
                      <th style="width: 8%" class="text-center">Protypes</th>
                      <th style="width: 5%" class="text-center">Qty</th>
                      <th style="width: 50%;text-align: center;">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                  if($cart != null){
                    foreach($cart as $key=>$value1):
                      $getAllProducts = $product->getAllProducts();
                      foreach($getAllProducts as $value):
                        if($value['id'] == $key){
                  ?>
                  <tr>
                      <td class="project-actions text-left">
                        <?php echo substr($value['name'],0,55) ?>
                      </td>
                      <td class="project-actions text-center">
                        <img src="img/<?php echo $value['image'] ?>" alt="loi" style="width:50px">
                      </td>
                      <td class="project_progress" class="overflow" >
                      <?php echo substr($value['description'],0,120)?>
                      </td>
                      <td class="project_progress">
                      <?php echo number_format( $value['price']); ?> VND
                      </td>
                      <?php 
                        $getAllManufactures = $manufacture->getAllManufactures();
                        foreach ($getAllManufactures as $value2){
                          if($value['manu_id'] == $value2['manu_id']){
                      ?>
                      <td class="project-state" style="text-align: center;">
                          <span class="badge badge-success"><?php echo $value2['manu_name']; ?></span>
                      </td>
                      <?php } ?>
                      <?php } ?>
                      <?php 
                        $getAllProtype = $protype->getAllProtype();
                        foreach ($getAllProtype as $value3){
                          if($value['type_id'] == $value3['type_id']){
                      ?>
                      <td class="project-state" style="text-align: center;">
                          <span class="badge badge-success"><?php echo $value3['type_name']; ?></span>
                      </td>
                      <?php } ?>
                      <?php } ?>
                      <td style="text-align: center;">
                      <input aria-label="quantity" class="input-qty" max="<?php echo $value['qty']; ?>" min="1" name="" type="number" value="<?php echo $value1; ?>">
                      </td>                                                                
                      <td class="project-actions text-right" style="text-align: center;">
                      <a class="btn btn-danger btn-sm" 
                          href="delcart.php?id=<?php echo $value['id'] ?>">
                              <i class="fa fa-trash">
                              </i>
                              Delete
                      </td>
                  </tr>
                  <?php } ?>
                 <?PHP endforeach; ?>
                 <?PHP endforeach; ?>
                 <?php } ?>
              </tbody>
          </table>
          <a href="index.php" class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;Back</a>
					<a href="checkout.php" class="btn btn-primary btn-md"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Payment</a>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.php" ?>
