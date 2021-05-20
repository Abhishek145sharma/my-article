<?php include('header.php');?>
<div class="container">
	<h1>Add Articles</h1>
	<?php echo form_open_multipart('Admin/userValidation');?>
	 <?php echo form_hidden('user_id',$this->session->userdata('id'));?>
     <?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>

	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="Article Title">Article Title</label>
				<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'article_title','value'=>set_value('article_title')]);?>
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
				<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Article Body','name'=>'article_body','value'=>set_value('article_body')]);?>
			</div>
		</div>
		<div class="col-lg-6" style="margin-top: 40px;">
			<?php echo form_error('article_body'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Select Image</label>
				<?php echo form_upload(['name'=>'userfile']);?>
			</div>
		</div>
		<div class="col-lg-6">
			<?php if(isset($upload_error)) {echo $upload_error;}?>
		</div>
	</div>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-default','value'=>'Reset']); ?>
</div>