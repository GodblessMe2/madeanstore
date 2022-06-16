<?php include("inc/head.php");?>
<body class="hold-transition login-page">
   	   <div class="login-box">
	  <div class="login-logo">
	    <a href="../../index2.html"><b>COZA</b>Store</a>
	  </div>
     <!-- /.login-logo -->
	  <div class="login-box-body">
	       <p class="login-box-msg lead">Sign in as an admin</p>

		    <form action="loginhandler.php" method="post">
		      <div class="form-group has-feedback">
		        <input type="name" class="form-control" placeholder="Username" name="username">
		        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		      </div>
		      <div class="form-group has-feedback">
		        <input type="password" class="form-control" placeholder="Password" name="password">
		        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		      </div>
		      <div class="row">
		        
		        <div class="col-xs-4 pull-right">
		          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Sign In</button>
		        </div>
		        <!-- /.col -->
		      </div>
		    </form>
       </div>
       <!-- /.login-box-body -->
   </div>
   <!-- /.login-box -->
   	
   
   
</body>
</html>
