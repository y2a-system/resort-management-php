<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<div class="col-lg-12">
	<div class="card shadow-sm rounded-0">
		<div class="card-header bg-dark text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Edit Front Pages</h5>
                <button type="button" class="btn btn-sm btn-outline-light" 
                    onclick="window.location.href='<?php echo base_url.'admin/?route=system_info' ?>'">
                    Back to Setting
                </button>
            </div>
        </div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="mb-3"></div>
				<div class="system-info-container">
					<div class="system-info-left">
						<div class="form-group">
							<label for="welcome" class="control-label">Welcome Content</label>
							<textarea class="form-control form-control-sm summernote" name="content[welcome]" id="welcome"><?php echo is_file(base_app.'welcome.html') ? file_get_contents(base_app.'welcome.html') : '' ?></textarea>
						</div>
						<div class="form-group">
							<label for="about_us" class="control-label">About Us</label>
							<textarea class="form-control form-control-sm summernote" name="content[about_us]" id="about_us"><?php echo is_file(base_app.'about_us.html') ? file_get_contents(base_app.'about_us.html') : '' ?></textarea>
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
	$(document).ready(function(){
		 $('.summernote').summernote({
		        height: '60vh',
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
					['insert', ['link', 'picture']],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
</script>
