<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<div class="conatiner">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-5">
				<h1>Admin Login</h1>
				<?php if (!empty($this->session->flashdata('msg'))) {
                echo "<div class='alert alert-danger'>".$this->session->flashdata('msg')."</div>";
                }?>
                <?php if (!empty($this->session->flashdata('success'))) {
                echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
                }?>
				<form method="post" action="<?php echo site_url('Login/authentication')?>">
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="username">
						<?php echo form_error('username');?>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
						<?php echo form_error('password');?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="save">Sign In</button>
					</div>
				</form>
				<a href="<?php echo site_url('index.php/Login/register')?>">Register a new membership</a>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>