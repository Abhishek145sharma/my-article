<?php include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Artical</title>
</head>
<body>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
		
			
			<a href="adduser" class="btn btn-primary">Add Artical</a>
			
			<?php if($error=$this->session->flashdata('msg')):
                  $msg_class=$this->session->flashdata('msg_class');
				?>

				<div class="col-sm-6">
					<div class="alert <?= $msg_class?>">
						<?= $error;?>
					</div>
				</div>
			<?php endif;?>
		
        
		<table class="table table-bordered" style="margin-top: 10px;">
			<thead>
				<tr>
					<th>S.No</th>
					<th>Artical Title</th>
					<th>Artical Body</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($articles)):
                     $count=$this->uri->segment(3);
					?>
				<?php foreach($articles as $art):?>
                   <tr>
                   	<td><?= ++$count;?></td>
                   	<td><?= $art->article_title;?></td>
                   	<td><?= $art->article_body;?></td>
                   	<td><?= anchor("Admin/editarticles/{$art->id}","Edit",['class'=>'btn btn-success'])?></td>
                   	<td>
                   		<?=
                        form_open('Admin/delarticle'),
                        form_hidden('id',$art->id),
                        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                        form_close();
                   		?>
                   	</td>
                   
                   </tr>
					<?php endforeach; ?>
					<?php else:?>
						<tr>
							<td>no data available</td>
						</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php echo $this->pagination->create_links();?>
	    
		
	  </div>
	</div>

</body>
</html>