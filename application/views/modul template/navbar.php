<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
	<a class="navbar-brand" href="<?= base_url(); ?>">
		<img src="<?= base_url(); ?>build/img/Ulogonav.png" alt="" width="60" height="50">
	</a>
	<button class="navbar-toggler" class="navbar-dark" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto align-items-center">
			<li class="nav-item mr-4">
				<a href="<?= base_url('Dashboard'); ?>" class="nav-link">
					<strong>Dashboard</strong>
				</a>
			</li>
			<li class="nav-item mr-4">
				<a href="<?= base_url('Pricing'); ?>" class="nav-link">
					<strong>Pricing</strong>
				</a>
			</li>
			<li class="nav-item mr-4">
				<a href="<?= base_url('Help'); ?>" class="nav-link">
					<strong>Help</strong>
				</a>
			</li>
			<li class="nav-item mr-4">
				<a href="<?= base_url('Contact'); ?>" class="nav-link">
					<strong>Contact</strong>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Apps'); ?>" class="btn btn-md btn-primary my-2 my-sm-0 btn-success btn-bold">
					<i class="fas fa-plus mr-2"></i>Create Giveaway
				</a>
			</li>
			<?php if(isset($_SESSION['username'])) { ?>
			<li class="nav-item dropdown ml-2">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <strong style="text-transform: uppercase;"><?= $_SESSION['username'] ;?></strong>
                </a>
                <div class="dropdown-menu dropdown-menu-lang" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">Change Password</a>
					<a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>">Log Out</a>
                </div>
            </li>
			<?php } else { ?>
				<li class="nav-item">
				<a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal"
					class="lnr lnr-user text-light">Login
					<span class="lnr lnr-user text-light"></span>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</nav>

<!-- LOGIN -->
<div id="loginModal" class="modal fade">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content border-0 shadow-lg text-center">
			<div class="modal-body">
				<div class="modal-container">
					<div class="text-left my-3">
						<h3 class="d-inline">Login</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="dropdown-divider"></div>
					<form method="post" action="<?= base_url('Auth'); ?>">
						<div class="row my-3">
							<div class="col-md-12 my-2">
								<h6><label for="username">Username:</label></h6>
								<input required type="text" type="text" class="form-control simpli-border shadow-sm" id="username" name="username" value="<?= set_value('username'); ?>">
								<?= form_error('username', '<medium class = "text-danger pl-3">', '</medium>'); ?>
							</div>
							<div class="col-md-12 my-2">
								<h6><label for="passwordForLogin">Password :</label></h6>
								<input required type="password" type="password" class="form-control simpli-border shadow-sm"
									id="passwordForLogin" name="password">
							</div>
							<!-- <div class="col-md-12 my-2">
								<div class="custom-control custom-checkbox my-1 mr-sm-2">
									<input type="checkbox" class="custom-control-input" name="remember" checked
										id="remember" value="1">

									<label class="custom-control-label checkbox-simpli ml-2" for="remember">
										<h6>Remember Me</h6>
									</label>
								</div>
							</div> -->
							<div class="col-md-12">
								<button class="primary-btn my-3" type="submit">Login<span
										class="lnr lnr-arrow-right"></span></button>
							</div>
						</div>
					</form>
					<a href="<?= base_url('Auth/register') ?>" class="primary-btn border-0 d-block m-1 p-2">Register<span class="lnr lnr-chevron-right"></span>
					</a>
					<a href="en/forget-my-password.html" rel="nofollow" title="Forget Password"
						class="primary-btn border-0 d-block m-1 p-2">Forget Password<span class="lnr lnr-lock"></span>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>

<script type="3943a0f289fc8f7a9a21f33f-text/javascript">
	$(document).ready(function () {


		$('#loginModal').on('show.bs.modal', function (e) {
			$('.modal').modal('hide');
		});

		$('#loginModal').on('shown.bs.modal', function (e) {
			if (!$('body').hasClass('modal-open')) {
				$('body').addClass('modal-open');
			}
		});
	});

</script>
<script type="3943a0f289fc8f7a9a21f33f-text/javascript">
	$(document).ready(function () {
		$('#registerModal').on('show.bs.modal', function (e) {
			$('.modal').modal('hide')
		});

		$('#registerModal').on('shown.bs.modal', function (e) {
			if (!$('body').hasClass('modal-open')) {
				$('body').addClass('modal-open');
			}
		});


		$("body").on("keyup", "#password, #passwordRepeat", function () {
			var pass1 = $("#password").val();
			var pass2 = $("#passwordRepeat").val();
			if (pass1 === pass2) {
				$("#sifrelerEslesmiyor").slideUp("fast");
			} else {
				$("#sifrelerEslesmiyor").slideDown("fast");
			}
		});
	})

</script>
