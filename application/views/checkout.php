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
.navbar .form-inline .form-control { border:0;     width: 103px;}
.navbar .form-inline .btn {
    color: #fff;
    font-size: 19px;
    position: relative;
    left: 7px;
    top: 2px;
}
.buymeacoffee {
  padding: 22px 20px;
    border:0;
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
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 d-flex align-items-center justify-content-center flex-column">
								<h2 style="color: #ed2ba2; padding-bottom: 30px; padding-top: 15px;">Checkout</h2>
								<h5 class="mb-3 text-secondary" style="font-weight: 400; padding-bottom: 15px;">Please check your transaction</h5>
								<ul class="list-group w-100">
								</ul>
								<table class="table">
										<tbody >
											
											<tr class="plan-1000" >
												<th scope="row">
													<p class="lead" style="font-weight: 600; padding-top: 15px; color: #737d92;">
													Your package</p>
												</th>
												<td>
												<p class="lead" style="font-weight: 600; padding-top: 15px; color: #737d92;">
													Package A</p>
												</td>
											</tr>
											<tr class="plan-1000">
												<th scope="row">
													<p class="lead" style="font-weight: 600; padding-top: 15px; color: #737d92;">
													Comment</p>
												</th>
												<td>	
													<p class="lead" style="font-weight: 600; padding-top: 15px; color: #737d92;">
													500 Comment</p>														
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
														<a class="small">IDR 20.000</a>
													</div>
												</td>
											</tr>
											
											
										</tbody>
									</table>
							</div>
							<div class="col-md-6 text-center checkout-details">
								<div class="mt-3">
									<h5>CODE VERIFICATION
								 </h5>
								</div>
								<div>
								<div class="price">
									<span class="small">20000125</span>
								</div>
                                
									
									<p class="mb-0">
									Please transfer payment with : </p>
								
							</div>
						<div>
					<div>
					<img src="<?= base_url(); ?>build/img/logoBRI.png" alt="" width="90" height="60">
                    <h6>3509-2501-8980-1234</h6>
							
						<h4 class="mb-0" style="font-style: bold; padding:5px; color: #737d92;">or </h4>
						
					<img src="<?= base_url(); ?>build/img/logoDANA.png" style="padding:5px;" alt="" width="130" height="40">
                    <h6>0812-3245-6789</h6>
                    <div class="alert alert-danger " style="padding:5px;">
								
						<h7  class="mb-0" style="font-style: bold; color: red;">*Please send a verification code to 0812-3245-6789 via Whatsapp </h7>
                        <img src="<?= base_url(); ?>build/img/logoWA.png" alt="" width="20" height="20">
                        <br>
                        <br>
                        <h7  style="font-style: bold; color: red;">*PLEASE SAVE VERIFICATION CODES </h7>
					</div>
					</div>
					<table class="table">
								<tbody>
									
									<tr class="plan-influencer">
										<th scope="row">
											<i class="far ml-2  d-block d-sm-none "></i>
											 *clik confirm to finish
											
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
	
</div>
    <div class="row d-naone">
        <div class="col-12">
            <div class="text-center mt-3" style="font-size: 13px">
                <p><span class="green"><i class="fas fa-check mr-2"></i> Unlimited Giveaway</span> You can make this contest unlimited times.</p>
                <p><span class="green"><i class="fas fa-check mr-2"></i> Money Back Guarantee</span> In case you have a problem, we will refund your payment</p>
            </div>

        </div>
    </div>
        </div>
        </div>
    </div>

<style>
  .mercadopago-button { display: block; width: 100%; }
  .list-group-item { padding: 10px; }
  .list-group-item img { width: 50px; height: 50px; object-fit: cover; object-position:center; border-radius: 50%; }
</style>
</div>


	<?php $this->load->view('modul template/footer'); ?>

</body>

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->

</html>
