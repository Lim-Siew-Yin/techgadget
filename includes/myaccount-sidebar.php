<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	$query=mysqli_query($con,"SELECT * from `customer` where `CustomerID`='".$_SESSION['id']."'");
	while($row=mysqli_fetch_array($query))
	{


?>
	
	<div class="col-md-4">
					<!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
	<div class="panel-group">
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">My Loyalty Point</h4>
		    </div> 	
		    <div class="panel-body">
				<h1 style="padding: 10px; color: #ff6c6c; font-size: 70px;"><b><?php echo $row['LoyaltyPoint'];?></b></h1>
			</div>
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h4 class="unicase-checkout-title">My Checkout Progress</h4>
		    </div>
		    <div class="panel-body">
				<ul class="nav nav-checkout-progress list-unstyled">
					<li><a href="my-account.php">My Account</a></li>
					<li><a href="bill-ship-addresses.php">Shipping / Billing Address</a></li>
					<li><a href="order-history.php">Order History</a></li>
					<li><a href="pending-orders.php">Payment Pending Order</a></li>
				</ul>		
			</div>
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>
<?php }} ?>