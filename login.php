
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>Login</title>
     <?php include 'include/links.php' ?>

</head>

<body class="res layout-1 layout-subpage">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    

    <?php include 'include/header.php' ?>

    
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Login</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-sm-12">
				<div class="page-login">
				
					<div class="account-border">
						<div class="row">
							
							
							<form action="#" method="post" enctype="multipart/form-data">
								<div class="col-sm-6 customer-login">
									<div class="well">
										<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
										<p><strong>I am a returning customer</strong></p>
										<div class="form-group">
											<label class="control-label " for="input-email">E-Mail Address</label>
											<input type="text" name="email" value="" id="input-email" class="form-control" />
										</div>
										<div class="form-group">
											<label class="control-label " for="input-password">Password</label>
											<input type="password" name="password" value="" id="input-password" class="form-control" />
										</div>
									</div>
									<div class="bottom-form">
										<a href="#" class="forgot">Forgotten Password</a>
										<input type="submit" value="Login" class="btn btn-default pull-right" />
									</div>
								</div>
							</form>
                           <div class="col-sm-6 new-customer">
							<div class="well">
									<h2>Sign in with your social account</h2>
									<p>We promise that we won't post anything on you behalf.</p>
									<div class="text-center btnRow">
									   <a href="javascript:void(0);" class="sclbtn facebook">FACEBOOK</a>	
									    <a href="javascript:void(0);" class="sclbtn google">GOOGLE</a>
									</div>
 
									<div class="signupBtn text-center">
										<span>OR</span><br>
										<a href="register.php">Sign Up</a>
									</div>
								</div>
								<div class="bottom-form">
									<!-- <a href="#" class="btn btn-default pull-right">Continue</a> -->
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Main Container -->
	

	 <?php include 'include/footer.php' ?>

    </div>
</body>
</html>