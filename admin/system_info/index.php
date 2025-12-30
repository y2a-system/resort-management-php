<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<style>
	/* General image styling */
	img#cimg{
		height: 80px;
		width: 80px;
		object-fit: cover;
		border-radius: 50%;
		box-shadow: 0 4px 12px rgba(0,0,0,0.1);
	}
	img#cimg2{
		width: 50%;
		height: auto;
		max-height: 200px;
		object-fit: cover;
		border-radius: 12px;
		box-shadow: 0 4px 12px rgba(0,0,0,0.1);
	}
	/* Two-column layout */
	.system-info-container {
		display: flex;
		flex-wrap: wrap;
		gap: 2rem;
	}
	.system-info-left {
		flex: 1 1 400px;
	}
	.system-info-right {
		flex: 1 1 400px;
		display: flex;
		flex-direction: column;
		gap: 2rem;
	}
	.custom-file-label {
		cursor: pointer;
	}
	fieldset {
		border: 1px solid #ddd;
		padding: 1rem 1.5rem;
		border-radius: 8px;
		margin-top: 1.5rem;
	}
	legend {
		width: auto;
		padding: 0 10px;
		font-size: 1.1rem;
		font-weight: 600;
	}
	.card-footer {
		background: #f8f9fa;
	}
</style>

<div class="col-lg-12">
	<div class="card shadow-sm rounded-0">
		<div class="card-header bg-dark text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">System Information</h5>
                <button type="button" class="btn btn-sm btn-outline-light" 
                    onclick="window.location.href='./?route=system_info/front_pages'">
                    Edit Front Pages
                </button>
            </div>
        </div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="mb-3"></div>
				<div class="system-info-container">
					<!-- Left Column: Form Fields -->
					<div class="system-info-left">
						<div class="form-group">
							<label for="name" class="control-label">System Name</label>
							<input type="text" class="form-control form-control-sm" name="name" id="name" value="<?php echo $_settings->info('name') ?>">
						</div>
						<div class="form-group">
							<label for="short_name" class="control-label">System Short Name</label>
							<input type="text" class="form-control form-control-sm" name="short_name" id="short_name" value="<?php echo  $_settings->info('short_name') ?>">
						</div>
						<fieldset>
							<legend>Other Information</legend>
							<div class="form-group">
								<label for="email" class="control-label">Email</label>
								<input type="email" class="form-control form-control-sm" name="email" id="email" value="<?php echo $_settings->info('email') ?>">
							</div>
							<div class="form-group">
								<label for="contact" class="control-label">Contact #</label>
								<input type="text" class="form-control form-control-sm" name="contact" id="contact" value="<?php echo $_settings->info('contact') ?>">
							</div>
							<div class="form-group">
								<label for="address" class="control-label">Office Address</label>
								<textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none"><?php echo $_settings->info('address') ?></textarea>
							</div>
						</fieldset>
					</div>

					<!-- Right Column: Images -->
					<div class="system-info-right">
						<div class="form-group">
							<label class="control-label">System Logo</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile" name="img" onchange="displayImg(this,$(this))">
								<label class="custom-file-label" for="customFile">Choose file</label>
							</div>
							<div class="mt-1 d-flex justify-content-center">
								<img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Logo" id="cimg">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label">Cover Image</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="customFile2" name="cover" onchange="displayImg2(this,$(this))">
								<label class="custom-file-label" for="customFile2">Choose file</label>
							</div>
							<div class="mt-3">
								<img src="<?php echo validate_image($_settings->info('cover')) ?>" alt="Cover" id="cimg2">
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

		<div class="card-footer d-flex justify-content-end">
			<button class="btn btn-primary" form="system-frm">Update</button>
		</div>
	</div>
</div>

<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
	function displayImg2(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg2').attr('src', e.target.result);
	        	_this.siblings('.custom-file-label').html(input.files[0].name)
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
</script>