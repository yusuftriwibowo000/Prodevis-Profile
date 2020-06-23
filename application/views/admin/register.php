<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?=$title; ?></h1>
	<div class="card-body">
		<?= $this->session->flashdata('message'); ?>
		<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
			href="<?= base_url("Admin/Auth/register"); ?>" method="post">
			<div class="form-group">
				<label for="username" class="control-label col-md col-sm col-xs-12">Username</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Enter Username" name="username"
						id="username" type="text">
				</div>
				<?= form_error('username', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-md col-sm col-xs-12">Password]</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Enter Password" name="password"
						id="password" type="password">
				</div>
				<?= form_error('password', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-md col-sm col-xs-12">Konfirmasi Password
					</label>
				<div class="col-md col-sm col-xs-12">
					<input class="form-control" placeholder="Konfirmasi Password" name="password2"
						id="password" type="password">
				</div>
				<?= form_error('password2', '<small class = "text-danger pl-3">', '</small>'); ?>
			</div>
			<div class="form-group">
				<div class="col-md col-sm col-xs-12 col-md-offset-3">
					<button type="submit" class="btn btn-success float-right" class="btn btn-info pull-left">Tambah Data</button>
				</div>
			</div>
		</form>
	</div>
	<!-- !Table Menu -->
</div>
<!-- /.container-fluid -->
