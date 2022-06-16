<?php 
require("inc/session.php");
include("inc/head.php"); ?>
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
           <form action="categorieshandler.php" method="POST" role="form">
             <h1>Add Categories</h1>
             <div class="box-body">
               <div class="form-group">
                 <label for="Product_name">Categories</label>
                 <input type="text" name="categories" class="form-control" id="name" placeholder="Enter Product Name">
               </div>
               <div class="form-group">
                 <button name="submit" class="btn btn-primary">Create Category</button>
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
