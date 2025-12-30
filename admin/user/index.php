<?php 
$user = $conn->query("SELECT * FROM users where id ='".$_settings->userdata('id')."'");
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
?>

<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>

<div class="card profile-card shadow-sm" id="previewDiv">
	<div class="card-header bg-white border-0">
		<h5 class="mb-0 font-weight-semibold">
			<i class="fas fa-user-cog text-primary mr-2"></i> My Profile
		</h5>
	</div>

	<div class="card-body">
		<div id="msg"></div>

		<form action="" id="manage-user">
			<input type="hidden" name="id" value="<?php echo $_settings->userdata('id') ?>">

			<div class="row">
				<!-- Avatar Column -->
				<div class="col-md-4 text-center border-right">
					<div class="avatar-wrapper">
						<img src="<?php echo validate_image(isset($meta['avatar']) ? $meta['avatar'] :'') ?>"
							 id="cimg"
							 class="profile-avatar mb-3">
					</div>

					<div class="custom-file mt-2">
						<input type="file"
							   class="custom-file-input"
							   id="customFile"
							   name="img"
							   onchange="displayImg(this,$(this))"
							   accept="image/png, image/jpeg">
						<label class="custom-file-label" for="customFile">Change avatar</label>
					</div>

					<small class="text-muted d-block mt-2">
						PNG / JPG • Max 2MB
					</small>
				</div>

				<!-- Form Column -->
				<div class="col-md-8">
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>First Name</label>
							<input type="text" name="firstname" class="form-control"
								   value="<?php echo $meta['firstname'] ?? '' ?>" required>
						</div>

						<div class="form-group col-md-6">
							<label>Last Name</label>
							<input type="text" name="lastname" class="form-control"
								   value="<?php echo $meta['lastname'] ?? '' ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control"
							   value="<?php echo $meta['username'] ?? '' ?>"
							   autocomplete="off" required>
					</div>

					<div class="form-group">
						<label>New Password</label>
						<input type="password" name="password" class="form-control" autocomplete="off">
						<small class="text-muted">
							Leave blank to keep current password
						</small>
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="card-footer bg-white text-right">
		<button class="btn btn-primary px-4" form="manage-user">
			<i class="fas fa-save mr-1"></i> Update Profile
		</button>
	</div>
</div>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }else{
			$('#cimg').attr('src', "<?php echo validate_image(isset($meta['avatar']) ? $meta['avatar'] :'') ?>");
		}
	}
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Users.php?f=save',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp ==1){
					location.reload()
				}else{
					$('#msg').html('<div class="alert alert-danger">Username already exist</div>')
					end_loader()
				}
			}
		})
	})

</script>