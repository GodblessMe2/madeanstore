<?php 
require("inc/session.php");
 require("../config/config.php"); 
 // include ("productdelete.");
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
        <div class="row">
           <div col-sm-3></div>
           <div class="col-sm-6">
             <form action="producthandler.php" method="POST" role="form" enctype="multipart/form-data" autocomplete="off">
               <h1>Add Product</h1>
               <div class="box-body">
                 <div class="form-group">
                   <label for="Product_name">Product Name</label>
                   <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name">
                 </div>
                 <div class="form-group">
                   <label for="price">Price</label>
                   <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                 </div>
                 <div class="form-group">
                   <label for="picture">Upload Product Image</label>
                   <input type="file" name="picture" id="picture">
                 </div>
                 <div class="form-group">
                   <select id="categories" name="categories" class="form-control form-select-lg p-4">
                    <?php foreach($data as $datas) :?>
                      <option value="<?php echo $datas['id']; ?>"><?php echo $datas['name'];  ?></option>
                    <?php endforeach;?>


                     <!-- <option>Women</option>
                     <option>Men</option>
                     <option>Bag</option>
                     <option>Shoes</option>
                     <option>Watches</option> -->
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="description">Product Description</label>
                   <textarea type="text" name="description" class="form-control" rows="10" id="description" placeholder="Enter Product Description"></textarea> 
                 </div>
                 <div class="form-group">
                   <button name="submit" class="btn btn-primary">Create Product</button>
                 </div>
                 
               </div>
             </form>
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
