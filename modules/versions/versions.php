<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Pokemon car</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="<?php echo $domain;?>"><i class="bx bx-home-alt"></i></a>
				</li>
				<li class="breadcrumb-item"><a href="<?php echo $domain;?>projects">Projects</a>
				</li>
				<li class="breadcrumb-item"><a href="<?php echo $domain;?>models">Project 1</a>
				</li>
				<li class="breadcrumb-item">Pokemon car</li>
			</ol>
		</nav>
	</div>
	<div class="ms-auto">
		<a data-bs-toggle="modal" data-bs-target="#modalModels" href="javascript:;" class="btn btn-light"><i class="bx bx-plus-circle"></i> Add version</a>
	</div>
</div>

<h6 class="mb-0 text-uppercase">Pokemon card versions</h6>
<hr>
<div class="row">
	<div class="col-md-2">
		<div class="card">
			<div class="card-body">
				<h5 class="text-center">Pokemon car</h5>
				<hr>
				<img class="w-100" src="<?php echo $domain;?>assets/images/models/1.png">
				<div  class="mt-2">Versions: 4</div>
				<div  class="mt-2">Latest version: 4.0</div>
				<div class="ms-auto">
					<a href="<?php echo $domain;?>models" class="btn btn-light w-100 mt-4"><i class="bx bx-arrow-back"></i> Back Project 1</a>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h5 class="text-center">Project 1</h5>
				<hr>
				<div class="mt-2">Created at: Oct 10, 2023</div>
				<div  class="mt-2">Models: 3</div>

				<div class="btn btn-sm rounded-pill bg-success text-white w-100 mt-2">Active</div>
				<div class="ms-auto">
					<a data-bs-toggle="modal" data-bs-target="#modalProject" href="javascript:;" class="btn btn-light w-100 mt-4"><i class="bx bx-edit"></i> Edit project</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-10">
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
			<div class="col">
				<div class="card">
					<div class="btn btn-sm rounded-pill bg-info text-white mt-2" style="position: absolute; left: 5px; ">Latest version</div>
					<div class="btn btn-sm rounded-pill bg-success text-white mt-2" style="position: absolute; right: 5px; ">Aproved</div>
					<img src="assets/images/models/1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="card-title">Pokemon car</h6>
						<div>Version: 4.0</div>
						<div>Created at: Oct 10, 2023</div>
						<hr>
						<a href="<?php echo $domain;?>viewver" class="btn btn-light w-100">See latest version</a>
						<div class="text-center mt-2">
						<a data-tooltip="tooltip" data-placement="top" title="Download version" href="javascript:;" class="btn btn-light"><i class="bx bx-download"></i></a>
						<a data-tooltip="tooltip" data-placement="top" title="Delete version" href="javascript:;" class="btn btn-light deleteRow"><i class="bx bx-trash"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card">
					<div class="btn btn-sm rounded-pill bg-danger text-white mt-2" style="position: absolute; right: 5px; ">Refused</div>
					<img src="assets/images/models/1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="card-title">Pokemon car</h6>
						<div>Version: 3.0</div>
						<div>Created at: Oct 09, 2023</div>
						<hr>
						<a href="<?php echo $domain;?>viewver" class="btn btn-light w-100">See version 3.0</a>
						<div class="text-center mt-2">
						<a data-tooltip="tooltip" data-placement="top" title="Download version" href="javascript:;" class="btn btn-light"><i class="bx bx-download"></i></a>
						<a data-tooltip="tooltip" data-placement="top" title="Delete version" href="javascript:;" class="btn btn-light deleteRow"><i class="bx bx-trash"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card">
					<div class="btn btn-sm rounded-pill bg-danger text-white mt-2" style="position: absolute; right: 5px; ">Refused</div>
					<img src="assets/images/models/1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="card-title">Pokemon car</h6>
						<div>Version: 2.0</div>
						<div>Created at: Oct 08, 2023</div>
						<hr>
						<a href="<?php echo $domain;?>viewver" class="btn btn-light w-100">See version 2.0</a>
						<div class="text-center mt-2">
						<a data-tooltip="tooltip" data-placement="top" title="Download version" href="javascript:;" class="btn btn-light"><i class="bx bx-download"></i></a>
						<a data-tooltip="tooltip" data-placement="top" title="Delete version" href="javascript:;" class="btn btn-light deleteRow"><i class="bx bx-trash"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<div class="card">
					<div class="btn btn-sm rounded-pill bg-danger text-white mt-2" style="position: absolute; right: 5px; ">Refused</div>
					<img src="assets/images/models/1.png" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="card-title">Pokemon car</h6>
						<div>Version: 1.0</div>
						<div>Created at: Oct 07, 2023</div>
						<hr>
						<a href="<?php echo $domain;?>viewver" class="btn btn-light w-100">See version 1.0</a>
						<div class="text-center mt-2">
						<a data-tooltip="tooltip" data-placement="top" title="Download version" href="javascript:;" class="btn btn-light"><i class="bx bx-download"></i></a>
						<a data-tooltip="tooltip" data-placement="top" title="Delete version" href="javascript:;" class="btn btn-light deleteRow"><i class="bx bx-trash"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>