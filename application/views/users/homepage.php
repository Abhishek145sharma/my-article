<?php include('header.php');?>

<div class="container" style="margin-top: 20px;">
	<div class="row">
		<h1>All Articles</h1>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					
					<th>Article Title</th>
					<th>Article Body</th>
					<th style="margin-left:400px;">Article Image</th>
					<th>Published On</th>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php if(count($article)):
                 $count= $this->uri->segment(3);
				?>
				<?php foreach ($article as $art): ?>
					<tr>
						 <td><?= ++$count;?></td>
						 <td width="150"><?= $art->article_title; ?></td>
						 <td width="400"><?= $art->article_body; ?></td>
						 <?php if(!is_null($art->image_path)) {?>
						 	<td><img src="<?php echo $art->image_path ?>" width="100%" height="auto"></td>
						 	<?php } ?>
						 	
						 	<td><?= date('d M y H:i:s',strtotime($art->created_at));?></td>
					</tr>
				<?php endforeach;?>
				<?php else:?>
					<tr>
						<td colspan="3">Not Data available</td>
					</tr>
					<?php endif; ?>
			</tbody>
		</table>
		<?php echo $this->pagination->create_links();?>
	</div>
</div>

