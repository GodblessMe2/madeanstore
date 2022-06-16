<?php 
 require("inc/session.php");
 require("../config/config.php"); 
 
 // Get Categories option data

 $query = "SELECT * FROM categories";

 // Get result 
 $result = mysqli_query($conn, $query);

 // Fetch data
 $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

 // Free Result 
 mysqli_free_result($result);


 // Update product

 if(isset($_POST['update'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $categories = mysqli_real_escape_string($conn, $_POST['categories']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    if (isset($_FILES['picture'])) {
      // code...
      $img_name = $_FILES['picture']['name'];
      $img_type = $_FILES['picture']['type'];
      $tmp_name = $_FILES['picture']['tmp_name'];
      $img_explode = explode('.', $img_name);
      $img_ext = end($img_explode);
      $extension = ["jpeg", "png", "jpg"];
      $file_store ="uploads/".$img_name;
      if(in_array($img_ext, $extension) === true) {
        $types = ["image/jpeg", "image/jpg", "image/png"];
        if (in_array($img_type, $types)=== true) {          
           move_uploaded_file($tmp_name, $file_store);
           $query = "UPDATE products SET 
                     name = '$name',
                     price ='$price',
                     picture = '$file_store',
                     category_id = '$categories',
                     description = '$description'
              WHERE id = {$product_id}";

           if (mysqli_query($conn, $query)) {
            // code...
            header('Location: index.php');
           } else {
            echo "ERROR ".mysql_error($conn);
           }
          } else {
            echo "Please upload an image file - jpeg, png, jpg";
          }
        } else {
          echo "Please upload an image file - jpeg, png, jpg";
        }
      }
 }

 
  

  

  // Get Data Value data for editing 

  $id = mysqli_real_escape_string($conn, $_GET['product_id']);

  var_dump($id);

  // Create Query
  $query = "SELECT * FROM products WHERE id = ".$id;

  // Get Result 
  $result = mysqli_query($conn, $query);

  // Fetch Data
  $product_data = mysqli_fetch_assoc($result);

  // var_dump($product_data);

  // Free Data
  mysqli_free_result($result);

  // Close connection 
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
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data" autocomplete="off">
               <h1>Edit Product</h1>
               <div class="box-body">
                 <div class="form-group">
                   <label for="Product_name">Product Name</label>
                   <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $product_data['name']; ?>">
                 </div>
                 <div class="form-group">
                   <label for="price">Price</label>
                   <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="<?php echo $product_data['price']; ?>">
                 </div>
                 <div class="form-group">
                   <label for="picture">Upload Product Image</label>
                   <input type="file" name="picture" id="picture" value="<?php echo $product_data['picture']; ?>">
                 </div>
                 <div class="form-group">
                   <select id="categories" name="categories" class="form-control form-select-lg p-4">
                    <?php foreach($data as $datas) :?>
                      <option value="<?php echo $product_data['category_id']; ?>"><?php echo $datas['name'];  ?></option>
                    <?php endforeach;?>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="description">Product Description</label>
                   <textarea type="text" name="description" class="form-control" rows="10" id="description" placeholder="Enter Product Description"> <?php echo $product_data['description']; ?> </textarea> 
                 </div>
                 <input type="hidden" name="product_id" value="<?php echo $product_data['id']; ?>">
                 <div class="form-group">
                   <button name="update" class="btn btn-primary">Update Product</button>
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
