<?php 
	include 'inc/header.php';
?>
<?php 
	$login_check = Session::get('customer_login');
	if ($login_check==false) {
	  	header('Location:login.php');
	}
?>
<div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="content_top">
    			<div class="heading">
    				<h3>Thông tin cá nhân khách hàng</h3>
    			</div>
    			<div class="clear"></div>
    		</div>
			<table class="tblone">
				<?php 
				$id = Session::get('customer_id');
				$get_customers = $cs->show_customers($id);
				if ($get_customers) {
					while ($result = $get_customers->fetch_assoc()) {				
				?>
						<tr>
							<td>Tài khoản</td>
							<td>:</td>
							<td><?php echo $result['name']; ?></td>
						</tr>
						<tr>
							<td>Đơn vị công tác</td>
							<td>:</td>
							<td><?php echo $result['company']; ?></td>
						</tr>
						<tr>
							<td>Số điện thoại</td>
							<td>:</td>
							<td><?php echo $result['phone']; ?></td>
						</tr>
						<tr>
							<td>Khu vực sinh sống</td>
							<td>:</td>
							<td><?php echo $result['region']; ?></td>
						</tr>
						<tr>
							<td>Zipcode</td>
							<td>:</td>
							<td><?php echo $result['zipcode']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><?php echo $result['email']; ?></td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td>:</td>
							<td><?php echo $result['address']; ?></td>
						</tr>
						<tr>
							<td colspan="3"><a href="editprofile.php">Cập nhật thông tin cá nhân</a></td>						
						</tr>				
				<?php 
					}
				}
				?>
			</table>	
    	</div>	
	</div>
</div>
<?php 
	include 'inc/footer.php';
?>