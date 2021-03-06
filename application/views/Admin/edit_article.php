<?php include('header.php');?>
<div class="container">
	<h1>Edit Articles</h1>
	<?php echo form_open("Admin/updatearticle/{$article->id}");
     //echo form_hidden('article_id',$article->id);
	?>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="Article Title">Article Title</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title',$article->article_title)]);?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top: 40px;">
			<?php echo form_error('article_title'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="body">Article Body</label>
				<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body',$article->article_body)]);?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top: 40px;">
			<?php echo form_error('article_body'); ?>
		</div>
	</div>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-default','value'=>'Reset']); ?>
</div>