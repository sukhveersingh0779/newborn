<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form using HTML5 and CSS3</title>
  
  
  
      <link rel="stylesheet" href="<?php echo admin_base_url('/assets/back_end/css/login.css'); ?>" >

  
</head>

<body>
  <body>
<div class="container">
	<section id="content">
		<!-- <form action=""> -->
		<?php 
//$attributes=array('class'=>'form-horizontal','name'=>'admin_login_form','id'=>'admin_login_form');
//echo base_url('login/admin_login',$attributes);	
 ?> 
  <form method="post" name="admin_login_form" id="admin_login_form" action="<?php echo base_url('login/admin_login'); ?>"> 
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="User Name" name="username" required="" id="username" required />
			</div>
			<div>
				<input type="password" placeholder="Password" name="password" required="" id="password" required />
			</div>
			<div>
				<input type="submit" value="Log in" />
				 <a href="<?php echo base_url('login/lost_password_request'); ?>">Lost your password?</a>
			<!-- <a href="<?php// echo base_url('login/register_user_request'); ?>">Register</a> -->
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Download source file</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script src="<?php echo admin_base_url('/assets/back_end/js/login.js') ?>" ></script>
</html>
