<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	 <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	 <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.0.js')?>"></script>
	<?= link_tag('assets/css/bootstrap.min.css')?>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=''>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Admin Panel</a>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php 
                     if($this->session->userdata('id'))
					{?>
					<li><a href="<?= base_url('index.php/Login/logout')?>" class="btn btn-info">Logout</a></li>
				<?php }?>
				</ul>
			</div>
		</div>
	</nav>

</body>
</html>