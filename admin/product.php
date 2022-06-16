<?php 
require("inc/session.php");
 require("../config/config.php"); 
 $query = "SELECT * FROM categories";

 // Get result 
 $result = mysqli_query($conn, $query);

 // Fetch data
 $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // Free Result 
 mysqli_free_result($result);

 // Close Connection
 mysqli_close($conn);
?>

<?php include("inc/head.php"); ?>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <?php include("inc/header.php"); ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include("inc/aside.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      

      <!-- Main content -->
      <section class="content">
        <div class="row margin-bottom">
          <div class="col-sm-12">
           <a href="productcreate.php" class="btn btn-default pull-right">Add New</a>
             
          </div>  
          
        </div>
        <?php include("allproduct.php"); ?>
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Product</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Product Description</th>
                  <th>Price</th>
                  <th>Date</th>
                  <th>Status</th>                  
                </tr>
                
                <!-- Read the data from the database and print it out -->
                <?php foreach($store_data as $store_datas) : ?>
                <tr>
                  <td><?php echo $store_datas['id']; ?></td>
                  <td><?php echo $store_datas['name'];?></td>
                  <td><?php echo $store_datas['description']; ?></td>
                  <td>$<?php echo number_format($store_datas['price']); ?></td>
                  <td><?php echo $store_datas['created_at']; ?></td>
                  <td>
                    <!-- <span class="btn btn-success">Approved</span> -->
                    <a href="productedit.php?product_id=<?php echo $store_datas['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="productdelete.php?delete_id=<?php echo $store_datas['id']; ?>" class="btn btn-danger">Delete</a>
                  </td>

                </tr>
              <?php endforeach; ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        

        </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
  <?php include("inc/footer.php"); ?>
</body>
</html>
