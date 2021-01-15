<!DOCTYPE html>
<html>
<head>
<title>Log in</title>

  <meta charset="utf-8">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/bower_components/font-awesome/css/style.css') ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<div class="w3layouts-main">
 <div class="bg-layer">
  <h1>Login</h1>
  <div class="header-main">
    <div class="main-icon">
			<span class="fa fa-eercast"></span>
		</div>

    <?php echo validation_errors(); ?>

    <?php if(!empty($errors)) {
      echo $errors;
    } ?>
    <div class="header-left-bottom">
      <form action="<?php echo base_url('auth/login') ?>" method="post">
        <div class="icon1">
          <span class="fa fa-user"></span>
          <input type="email" name="email" id="email" placeholder="Email" autocomplete="on">
        </div>
        <div class="icon1">
          <span class="fa fa-lock"></span>
          <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
        </div>
        <div class="login-check">
          <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
        </div>
        <!-- /.col -->
        <div class="bottom">
          <button type="submit" class="btn">Sign In</button>
        </div>
        <!-- /.col -->
        <div class="links">
  				<p><a href="#">Forgot Password?</a></p>
  				<p class="right"><a href="#">Register</a></p>
  				<div class="clear"></div>
  			</div>
      </form>
    </div>
  </div>
  <!-- /.login-box-body -->
 </div>
<!-- /.login-box -->

<!-- jQuery 3 -->


</div>
</body>
</html>
