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
						<h1 class="text-whaite">Pricing</h1>
						<p class="lead" style="font-weight: 600; color: #737d92;">
							Pay only for each post. No signup. No subscriptions. </p>
					</div>
					<div class="col-12 col-lg-10 d-none">
						<div class="d-flex justify-content-center flex-column">
							<ul class="nav nav-pills" style="justify-content: space-evenly;">
								<li class="nav-item">
									<a class="nav-link active" href="#!">1.000 <i class="far ml-2 fa-comment-alt"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!">3.000 <i class="far ml-2 fa-comment-alt"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!">5.000 <i class="far ml-2 fa-comment-alt"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!">10.000 <i class="far ml-2 fa-comment-alt"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!">20.000 <i class="far ml-2 fa-comment-alt"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#!">INFLUENCER <i class="far ml-2 fa-star"></i></a>
								</li>
							</ul>
						</div>
						<div class="d-flex justify-content-center">
							<div class="col-lg-3 px-0">
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
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="d-flex justify-content-center flex-column">
							<div class="card">
								<div class="card-body p-0">
									<div class="text-center py-4">
										<h3 class="mb-0">Instagram Giveaways</h3>
										<p class="text-secondary mt-2 mb-0">
											Price is calculated based on the number of comments </p>
									</div>
									<table class="table">
										<tbody>
											<tr class="plan-1000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 1.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">1.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-3000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 3.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">1.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-6000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 6.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">2.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-10000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 10.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">3.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-25000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 25.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">4.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-50000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 50.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">5.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-100000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 100.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">6.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-500000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 500.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">7.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-1000000">
												<th scope="row">
													<small class="upto d-block d-sm-inline-block">UP TO</small> 1.000.000 <i
														class="far ml-2 fa-comment-alt"></i>
												</th>
												<td>
													<div class="price">
														<span class="small">USD</span>
														<span class="value">8.99</span>
													</div>
												</td>
											</tr>
											<tr class="plan-influencer">
												<th scope="row">
													<i class="far ml-2 fa-star d-block d-sm-none fa-star-mob"></i>
													INFLUENCER
													<i class="far ml-2 fa-star d-none d-sm-inline-block"></i>
												</th>
												<td>
													<a href="#" class="btn btn-success" data-toggle="modal" data-target="#contactModal">
														Contact us </a>
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
