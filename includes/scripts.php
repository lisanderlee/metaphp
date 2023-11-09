<div class="modal fade" id="modalUser" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add user</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="card border-top border-0 border-4 border-white">
					<div class="card-body p-5">
						<form class="row g-3">
							<div class="col-md-6">
								<label for="inputLastName1" class="form-label">First Name</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-user"></i></span>
									<input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="First Name">
								</div>
							</div>
							<div class="col-md-6">
								<label for="inputLastName2" class="form-label">Last Name</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-user"></i></span>
									<input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Last Name">
								</div>
							</div>
							<div class="col-12">
								<label for="inputPhoneNo" class="form-label">Phone No</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-microphone"></i></span>
									<input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No">
								</div>
							</div>
							<div class="col-12">
								<label for="inputEmailAddress" class="form-label">Email Address</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-message"></i></span>
									<input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address">
								</div>
							</div>
							<div class="col-12">
								<label for="inputChoosePassword" class="form-label">Choose Password</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-lock-open"></i></span>
									<input type="password" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password">
								</div>
							</div>
							<div class="col-12">
								<label for="inputConfirmPassword" class="form-label">Confirm Password</label>
								<div class="input-group"> <span class="input-group-text"><i class="bx bxs-lock"></i></span>
									<input type="password" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password">
								</div>
							</div>
							<div class="col-12">
								<label for="inputAddress3" class="form-label">Address</label>
								<textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3"></textarea>
							</div>
							<div class="col-12">
								<div class="form-check">
									<input checked class="form-check-input" type="checkbox" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Active</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-light px-5">Save</button>
							</div>
						</form>
					</div>
				</div>

				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalProject" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add project</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="card border-top border-0 border-4 border-white">
					<div class="card-body p-5">
						<form class="row g-3">
							<div class="col-md-12">
								<label for="projectName" class="form-label">Project name</label>
								
								<input type="text" class="form-control border-start-0" id="projectName" placeholder="Project name">
								
							</div>
							<div class="col-12">
								<label for="projectDescription" class="form-label">Description</label>
								<textarea class="form-control" id="projectDescription" placeholder="Description" rows="3"></textarea>
							</div>
							<div class="col-12">
								<div class="form-check">
									<input checked class="form-check-input" type="checkbox" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Active</label>
								</div>
							</div>
							<div class="col-12">
								<button type="submit" class="btn btn-light px-5">Save</button>
							</div>
						</form>
					</div>
				</div>

				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalModels" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add model</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">


				<div class="card">
					<div class="card-body">
						<form>
							<input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
						</form>
					</div>
				</div>

				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo $domain;?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $domain;?>assets/js/jquery.min.js"></script>
<script src="<?php echo $domain;?>assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?php echo $domain;?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?php echo $domain;?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="<?php echo $domain;?>assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(!isset($mod) or $mod=='dashboard') { ?>
<script>
	new PerfectScrollbar('.product-list');
	new PerfectScrollbar('.customers-list');
</script>
<?php } ?>

<?php if(isset($mod) and $mod=='projects' or $mod=='users') { ?>
<script src="<?php echo $domain;?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $domain;?>assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		var table = $('#example2').DataTable( {
			lengthChange: false,
			buttons: [ 'copy', 'excel', 'pdf', 'print']
		} );
	 
		table.buttons().container()
			.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	} );
</script>
<?php } ?>

<?php if(isset($mod) and $mod=='models' or $mod=='versions') { ?>
<script src="<?php echo $domain;?>assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<script>
	$(document).ready(function () {
		$('#image-uploadify').imageuploadify();
	})
</script>
<?php } ?>