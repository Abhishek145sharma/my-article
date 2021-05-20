<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>

	<div class="conatiner">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-5">
				<h1>Register Form</h1>
				<?php if (!empty($this->session->flashdata('msg'))) {
                echo "<div class='alert alert-danger'>".$this->session->flashdata('msg')."</div>";
                }?>
				<form method="post" action="<?php echo site_url('Login/register')?>">
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
						<label>Email</label>
						<input type="email" class="form-control" name="email">
						<?php echo form_error('email');?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="save">Sign In</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
					</div>

				</form>
				
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>

</body>
</html>