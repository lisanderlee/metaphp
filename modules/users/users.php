<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Users</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="<?php echo $domain;?>"><i class="bx bx-home-alt"></i></a>
				</li>
				<li class="breadcrumb-item active">Settings</li>
				<li class="breadcrumb-item active" aria-current="page">Users</li>
			</ol>
		</nav>
	</div>
	<div class="ms-auto">
		<a data-bs-toggle="modal" data-bs-target="#modalUser" href="javascript:;" class="btn btn-light"><i class="bx bx-plus-circle"></i> Add user</a>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example2" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Role</th>
						<th>Last login</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								
								<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46" alt="">
								
								<div class="ms-2">
									<h6 class="mb-1 font-14">Emy Jackson</h6>
									<p class="mb-0 font-13 text-light-2">emy_jac@xyz.com</p>
								</div>
								
							</div>
						</td>
						<td>Administrator</td>
						<td>Never</td>
						<td><div class="btn btn-sm rounded-pill bg-success text-white w-100">Active</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
								<a href="javascript:;" data-tooltip="tooltip" data-placement="top" title="Delete user" class="ms-4 deleteRow"><i class="bx bx-trash"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46" alt="">
									
								<div class="ms-2">
									<h6 class="mb-1 font-14">Martin Hughes</h6>
									<p class="mb-0 font-13 text-light-2">martin.hug@xyz.com</p>
								</div>
							</div>
						</td>
						<td>Customer</td>
						<td>Oct 07, 2023</td>
						<td><div class="btn btn-sm rounded-pill bg-success text-white w-100">Active</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
								<a href="<?php echo $domain;?>models" data-tooltip="tooltip" data-placement="top" title="View models" class="ms-4"><i class="bx bx-cube"></i></a>
								<a href="javascript:;" data-tooltip="tooltip" data-placement="top" title="Delete user" class="ms-4 deleteRow"><i class="bx bx-trash"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								<img src="assets/images/avatars/avatar-23.png" class="rounded-circle" width="46" height="46" alt="">
									
								<div class="ms-2">
									<h6 class="mb-1 font-14">Laura Madison</h6>
									<p class="mb-0 font-13 text-light-2">laura_01@xyz.com</p>
								</div>
							</div>

						</td>
						<td>Administrator</td>
						<td>Oct 09, 2023</td>
						<td><div class="btn btn-sm rounded-pill bg-success text-white w-100">Active</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
								<a href="javascript:;" data-tooltip="tooltip" data-placement="top" title="Delete user" class="ms-4 deleteRow"><i class="bx bx-trash"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								<img src="assets/images/avatars/avatar-24.png" class="rounded-circle" width="46" height="46" alt="">
									
								<div class="ms-2">
									<h6 class="mb-1 font-14">Shoan Stephen</h6>
									<p class="mb-0 font-13 text-light-2">s.stephen@xyz.com</p>
								</div>
							</div>

						</td>
						<td>Customer</td>
						<td>Never</td>
						<td><div class="btn btn-sm rounded-pill bg-danger text-white w-100">Inactive</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
								<a href="<?php echo $domain;?>models" data-tooltip="tooltip" data-placement="top" title="View models" class="ms-4"><i class="bx bx-cube"></i></a>
								<a href="javascript:;" data-tooltip="tooltip" data-placement="top" title="Delete user" class="ms-4 deleteRow"><i class="bx bx-trash"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								<img src="assets/images/avatars/avatar-20.png" class="rounded-circle" width="46" height="46" alt="">
									
								<div class="ms-2">
									<h6 class="mb-1 font-14">Keate Medona</h6>
									<p class="mb-0 font-13 text-light-2">Keate@xyz.com</p>
								</div>
							</div>

						</td>
						<td>Designer</td>
						<td>Oct 10, 2023</td>
						<td><div class="btn btn-sm rounded-pill bg-success text-white w-100">Active</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
								<a href="javascript:;" data-tooltip="tooltip" data-placement="top" title="Delete user" class="ms-4 deleteRow"><i class="bx bx-trash"></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							
							<div class="customers-list-item d-flex align-items-center p-2 cursor-pointer">
								<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46" alt="">
									
								<div class="ms-2">
									<h6 class="mb-1 font-14">Salvador Rodríguez</h6>
									<p class="mb-0 font-13 text-light-2">salars@gmail.com</p>
								</div>
							</div>

						</td>
						<td>Super admin</td>
						<td>Oct 11, 2023</td>
						<td><div class="btn btn-sm rounded-pill bg-success text-white w-100">Active</div></td>
						<td>
							<div class="d-flex justify-content-center align-items-center order-actions">	
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalUser"  data-tooltip="tooltip" data-placement="top" title="Edit user" class=""><i class="bx bx-edit"></i></a>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>Created at</th>
						<th>Models</th>
						<th>Status</th>
						<th>Options</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>