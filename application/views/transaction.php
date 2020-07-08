<!DOCTYPE html>
<html lang="en" xml:lang="en">

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 12:56:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<?php $this->load->view('modul template/head'); ?>
</head>

<body>
	<?php $this->load->view('modul template/navbar'); ?>

	<style>
		.navbar .form-inline {
			padding: 6px 10px;
			position: absolute;
			border-radius: 11px;
			width: 161px;
		}

		.navbar .form-inline .form-control {
			border: 0;
			width: 103px;
		}

		.navbar .form-inline .btn {
			color: #fff;
			font-size: 19px;
			position: relative;
			left: 7px;
			top: 2px;
		}

		.buymeacoffee {
			padding: 22px 20px;
			border: 0;
			/*background: #DFF0D8;*/
			border-radius: 0;
			margin-bottom: 0;
			display: block;
		}

		/*.buymeacoffee a {
  color: #5c7f3c;
}
.buymeacoffee:hover {
  opacity: .9;
  text-decoration: none;
  color: #dd299f;
}*/

		.server-status {
			padding: 22px 20px;
			border: 0;
			background: #fb5353;
			/* border-bottom: 1px solid rgba(60, 118, 61, 0.25); */
			border-radius: 0;
			margin-bottom: 0;
			display: block;
			color: #fff;
		}

		.server-status:hover {
			pointer-events: none;
			text-decoration: none;
			color: #fff;
		}

	</style>
	<div class="main">
		<section class="pricing gradieant">
			<div class="container">
				<div class="row mt-5 justify-content-center">
					<div class="col-12 text-center mb-5">
						<h1 class="text-whaite">Transaction</h1>
						<p class="lead" style="font-weight: 600; color: #737d92;">
							Pay only for each post. No signup. No subscriptions. </p>
					</div>
					
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-center flex-column">
							<div class="card">
								<div class="card-body p-0">
									<div class="text-center py-4">
										<h3 class="mb-0">Your Transaction</h3>
										<p class="text-secondary mt-2 mb-0">
											Price is calculated based on the number of comments </p>
									</div>
									
									<table class="table">
										<tbody>
											
											<tr class="plan-1000">
												<th scope="row">
													<p class="lead" style="font-weight: 600; color: #737d92;">
													Select your package</p>
												</th>
												<td>
													<div class="form-group"class="mb-0">
														
															<select onchange="onChange(event)" name="subject" id="subject" value="<?= set_value('subject')?>" required=""
															class="form-control form-control-inverse" class="text-center py-4">
																<option  value="" selected></option>
																<?php $no = 1; foreach ($dataPackage as $row): ?>
																<option><?= $row->name_package; ?></option>
																<!-- <option><?= $row->name_package; ?> - <?= $row->description; ?> - IDR <?= $row->price; ?></option> -->
																<?php $no++; endforeach; ?>
															</select>
															<?= form_error('subject', '<medium class = "text-danger pl-3">', '</medium>'); ?>
													</div>
												</td>
											</tr>
											<tr class="plan-1000">
												<th scope="row">
													<p class="lead" style="font-weight: 600; color: #737d92;">
													Comment</p>
												</th>
												<td>	
													<p class="lead" style="font-weight: 600; color: #737d92;">
													<?= $row->description; ?></p>														
												</td>
											</tr>
											<tr class="plan-1000">
												<th scope="row">
												
													<div class="price">
														<!-- <span class="small">IDR</span> -->
														<a class="small">TOTAL</a>
													</div>
												</th>
												<td>
													<div class="price">
														<!-- <span class="small">IDR</span> -->
														<a class="small">IDR <?= $row->price; ?></a>
													</div>
												</td>
											</tr>
											<tr class="plan-influencer">
												<th scope="row">
													<!-- <i class="far ml-2 fa-star d-block d-sm-none fa-star-mob"></i>
													INFLUENCER
													<i class="far ml-2 fa-star d-none d-sm-inline-block"></i> -->
												</th>
												<td>
													<a href="<?= base_url("Checkout"); ?>" class="btn btn-success">
														CONFIRM</a>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="d-none">

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">1.000</h5>
									<h6 class="card-price text-center">$0<span class="period">/post</span></h6>
									<hr>
									<div class="text-center mb-4">
										<p>Up to <strong>1000</strong> comments are totally free.</p>
									</div>
									<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
								</div>
							</div>
						</div>

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">3.000</h5>
									<h6 class="card-price text-center">$0.99<span class="period">/post</span></h6>
									<hr>
									<div class="text-center text-secondary mb-4">
										<p>Posts with up to <strong>3000</strong> comments</p>
									</div>

								</div>
							</div>
						</div>

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">5.000</h5>
									<h6 class="card-price text-center">$1.99<span class="period">/post</span></h6>
									<hr>
									<div class="text-center mb-4">
										<p>Posts with up to <strong>5000</strong> comments</p>
									</div>
									<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
								</div>
							</div>
						</div>

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">10.000</h5>
									<h6 class="card-price text-center">$3.99<span class="period">/post</span></h6>
									<hr>
									<div class="text-center mb-4">
										<p>Posts with up to <strong>3000</strong> comments</p>
									</div>
									<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
								</div>
							</div>
						</div>

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">20.000</h5>
									<h6 class="card-price text-center">$3.99<span class="period">/post</span></h6>
									<hr>
									<div class="text-center mb-4">
										<p>Posts with up to <strong>3000</strong> comments</p>
									</div>
									<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
								</div>
							</div>
						</div>

						<div class="col-lg-2 px-0">
							<div class="card mb-5 mb-lg-0">
								<div class="card-body">
									<h5 class="card-title text-muted text-uppercase text-center">50.000</h5>
									<h6 class="card-price text-center">$3.99<span class="period">/post</span></h6>
									<hr>
									<div class="text-center mb-4">
										<p>Posts with up to <strong>3000</strong> comments</p>
									</div>
									<a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script async type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5">
	</script>
	<?php $this->load->view('modul template/footer'); ?>

</body>

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->

</html>
