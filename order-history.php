
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>Order History</title>
     <?php include 'include/links.php' ?>
</head>

<body class="res layout-1 layout-subpage">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    
   <?php include 'include/header.php' ?>

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Order History</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title">Order History</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Product Details</td>
								<td class="text-center">Part Number Brand</td>
								<td class="text-center">Order ID</td>
								<td class="text-center">Qty</td>
								<td class="text-center">Status</td>
								<td class="text-center">Date Added</td>
								<td class="text-right">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">
									<a href="product.php"><img width="85" class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="image/catalog/demo/product/replacement/1.jpg">
									</a>
								</td>
								<td class="text-left">
									<a href="product.php">Aspire Ultrabook Laptop</a>
								</td>
								<td class="text-center">-</td>
								<td class="text-center">#214521</td>
								<td class="text-center">1</td>
								<td class="text-center">Shipped</td>
								<td class="text-center">21/06/2016</td>
								<td class="text-right">$228.00</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="order-information.php" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
							<tr>
								<td class="text-center">
									<a href="product.php"><img  width="85" class="img-thumbnail" title="Xitefun Causal Wear Fancy Shoes" alt="Xitefun Causal Wear Fancy Shoes" src="image/catalog/demo/product/replacement/4.jpg">
									</a>
								</td>
								<td class="text-left"><a href="product.php">Xitefun Causal Wear Fancy Shoes</a>
								</td>
								<td class="text-center">-</td>
								<td class="text-center">#1565245</td>
								<td class="text-center">1</td>
								<td class="text-center">Shipped</td>
								<td class="text-center">20/06/2016</td>
								<td class="text-right">$133.20</td>
								<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="order-information.php" data-original-title="View"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
				<h2 class="subtitle">Account</h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="login.php">Login</a>
		</li>
		<li><a href="register.php">Register</a>
		</li>
		<li><a href="#">Forgotten Password</a>
		</li>
		<li><a href="#">My Account</a>
		</li>
		<li><a href="#">Address Books</a>
		</li>
		<li><a href="wishlist.php">Wish List</a>
		</li>
		<li><a href="#">Order History</a>
		</li>
		<li><a href="#">Downloads</a>
		</li>
		<li><a href="#">Reward Points</a>
		</li>
		<li><a href="#">Returns</a>
		</li>
		<li><a href="#">Transactions</a>
		</li>
		<li><a href="#">Newsletter</a>
		</li>
		<li><a href="#">Recurring payments</a>
		</li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
		

	 <?php include 'include/footer.php' ?>

    </div>
	
</body>
</html>