<div class="footer-slope slope" style="background-color: #f7f7f7; height: 50px; margin-top: 100px;"></div>
<footer class="" style="background-color: #f7f7f7;">
	<div class="container pt-5 pb-5">
		<div class="row">
			<div class="col-12 col-md-5">
				<img src="<?= base_url(); ?>build/img/Undigiveway.png" class="mb-3" alt="" width="180" height="30">
				<!-- <img src="https://app-sorteos.com/img/logo2.png" class="mb-3" alt="" width="180"> -->
				<p>Create free Instagram and Youtube Giveaways and contents, online and free. Pick a random winner from your
					Instagram photos and Youtube videos.</p>
				<p>Create free Instagram, Youtube and "Random Name" Giveaways and Contents.</p>
				<p>Instagram random comment Picker</p>
			</div>
			<div class="col-12 col-md-4">
				<h5>Help</h5>
				<ul class="list-unstyled mt-3">
					<li>
						<a href="">Faqs</a>
					</li>
					<li>
						<a href="">How to create
							Instagram Giveaways</a>
					</li>
					<li>
						<a href="">Find your Instagram picture URL</a>
					</li>
					<li>
						<a href="">How to filter Instagram
							Giveaways comments</a>
					</li>
				</ul>
				<div class="mt-4">
					<h5>More</h5>
					<ul class="list-unstyled mt-2">
						<li>
							<a target="_blank" href="">Certification</a>
						</li>
						<li>
							<a target="_blank" href="">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-3">
				<h5>Apps</h5>
				<ul class="list-unstyled mt-2">
					<li>
						<a href="">Instagram Giveaway</a>
					</li>
					<li>
						<a href="">Facebook Giveaway</a>
					</li>
					<li>
						<a href="">Roll Dice</a>
					</li>
					<li>
						<a href="">Youtube Giveaway</a>
					</li>
					<li>
						<a href="">Random Name Winner</a>
					</li>
					<li>
						<a href="">Wheel Decide</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="text-center social-links mt-4">
				<a target="_blank" href="https://www.instagram.com/app_sorteos_ok/"><i
						class="text-brand fab fa-instagram"></i></a>
				<a target="_blank" href="https://www.facebook.com/pg/App-Sorteos-1104332809735550"><i
						class="text-brand fab fa-facebook-square"></i></a>
				<a target="_blank" href="https://twitter.com/app_sorteos_ok"><i class="text-brand fab fa-twitter"></i></a>
			</div>
		</div>
	</div>
</footer>

<style>
		footer h5 {
			font-size: 16px;
		}

		footer p {
			font-size: 13px;
			color: #999;
		}

		footer a {
			color: #636363;
			font-size: 14px;
		}

		footer ul li {
			margin: 8px 0;
		}

		.social-links a {
			font-size: 30px;
			margin: 0 15px;
			display: inline-block;
		}

	</style>
	<script>
		var __e = {};

		__e['upgradeText1'] = 'Your post has <strong>{0}</strong> comments';
		__e['upgradeText2'] =
			'You can make contests on Instagram with a post up to <strong>{0}</strong> comments totally for free. Unlock this contest and make it immediately for just';

		__e['ERROR_DUPLICATED_URL'] = 'The URL is duplicated, please remove one';
		__e['ERROR_INVALID_URL'] = 'The URL is invalid.';
		__e['ERROR_NOT_FOUND'] = 'We cannot read the URL';
		__e['ERROR_COMMENTS_DISABLED'] =
			'This Instagram Post has the comments disabled. Please turn it ON to start this giveway.';
		__e['wheel_add_options'] = 'Add at least 2 options';

	</script>
	<script src="https://app-sorteos.com/js/all.front.compiled.js?1590497505"></script>

	<div class="modal" tabindex="-1" role="dialog" id="errorModal">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Oops!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>
				<div class="modal-body text-center px-4" id="error_url">
					<p>The image URL is invalid. Please check your image URL looks like this</p>
					<p><strong>https://www.instagram.com/p/Bt1opxvFPEY</strong></p>
					<p><a href="https://app-sorteos.com/en/blog/find-your-instagram-photo-url">Find your Instagram
							picture URL</a></p>
				</div>
				<div class="modal-body text-center px-4" style="display: none;" id="error_comments">
					<p>This post has no comments. Be sure to make the giveaway when it's finished, and everyone has
						participated.</p>
				</div>
				<div class="modal-body text-center px-4" style="display: none;" id="error_exists">
					<p>This post has already been used to get winners. If you need help, on Instagram and ww help you.
					</p>
					<p><a href="https://www.instagram.com/app_sorteos_ok/"
							target="_blank"><strong>@app_sorteos_ok</strong></p></a>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary py-2 px-4 btn-bold" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div id="wrapfabtest">
		<div class="adBanner" style="background-color: transparent;height: 1px;width: 1px;"></div>
	</div>
	<style>
		.pay-content {
			max-width: 290px;
			margin: 0 auto;
		}

		.currency {
			font-size: 65%;
			position: relative;
			top: -4px;
			left: 2px;
			margin-left: 10px;
		}

	</style>
	<div class="modal" tabindex="-1" role="dialog" id="errorModalInfo">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Picture not Found</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>
				<div class="modal-body text-center px-5">
					<img src="https://app-sorteos.com/img/svg/undraw_taken.svg" width="140" class="mb-4" alt="">
					<p>This is probably because your <strong>Profile is Private</strong>, or you have a <strong>Minimum
							Age Limit</strong> restriction for your account.</p>
					<p class="text-secondary">Switch your profile to Public, or remove the Age Restriction, and try
						again.</p>
				</div>
				<div class="modal-footer px-5 pb-4" style="background-color: transparent !important;">
					<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" tabindex="-1" role="dialog" id="errorCommentsDisabled">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Comments Disabled</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>
				<div class="modal-body text-center px-5">
					<img src="https://app-sorteos.com/img/svg/undraw_maker_launch_crhe.svg" width="180" class="mb-5"
						alt="">
					<p>This Instagram Post has the comments disabled. Please turn it ON to start this giveway.</p>
				</div>
				<div class="modal-footer px-5 pb-4" style="background-color: transparent !important;">
					<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" tabindex="-1" role="dialog" id="errorInvalidUrl">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">The URL is invalid</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>
				<div class="modal-body text-center px-5">
					<img src="https://app-sorteos.com/img/svg/undraw_page_not_found.svg" width="160" class="mb-5"
						alt="">
					<p>The image URL is invalid. Please check your image URL looks like this</p>
					<p class="small my-3"><a href="#">https://www.instagram.com/p/Bt1opxvFPEY</a></p>

				</div>
				<div class="modal-footer d-flex flex-column px-5 pb-4"
					style="background-color: transparent !important;">
					<a href=""
						class="btn mx-0 mb-2 btn-success btn-lg btn-block">
						Help </a>
					<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" tabindex="-1" role="dialog" id="errorNoComments">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Oops!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>
				<div class="modal-body text-center px-4">
					<p>This post has no comments. Be sure to make the giveaway when it's finished, and everyone has
						participated.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary py-2 px-4 btn-bold" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" tabindex="-1" role="dialog" id="errorGenericModal">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">We detect errors!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="far fa-times-circle"></i>
					</button>
				</div>

				<div id="errors_display" class="px-4 pb-4 pt-0">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary py-2 px-4 btn-bold" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	<style>
		#errors_display {}

	</style>
	<div class="modal" tabindex="-1" role="dialog" id="contactModal">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document" style="max-width: 380px;">
			<div class="modal-content">
				<div class="modal-header gradiaent">
					<h5 class="modal-title">Get in touch!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body text-center">
					<p class="text-secondary">Just send us an Instagram DM, we are</p>
					<p><a href="http://instagram.com/app_sorteos_ok" target="_blank">@app_sorteos_ok</a></p>
					<div class="p-4">
						<button class="btn btn-primary btn-block" data-dismiss="modal">Done.</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
		.pay-content {
			max-width: 290px;
			margin: 0 auto;
		}

		.currency {
			font-size: 65%;
			position: relative;
			top: -4px;
			left: 2px;
			margin-left: 10px;
		}

	</style>
	<div class="modal" tabindex="-1" role="dialog" id="upgradeModal2">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document" style="max-width: 430px;">
			<div class="modal-content">
				<div class="modal-header gradiaent">
					<h5 class="modal-title">Multi Post Giveaway!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body text-center" style="position: relative; top: -15px;" id="upgrade-text">
					<p class="text-secondary" style="font-size: 14px;">Your <strong><span
								class="js-plan-pc"></span></strong> posts has <strong><span
								class="js-plan-cc"></span></strong> comments in total</p>
					<p class="px-3 text-secondary" style="font-size: 13px;">MultiPosts Giveaways is a
						<strong>PREMIUM</strong> functionality. Unlock and run it immediately for just</p>
					<div class="d-flex flex-column align-items-center justify-content-center pb-3 pt-3 pay-content">
						<div class="price mb-3">
							<span class="small js-plan-currency"></span>
							<span class="js-plan-price"></span>
						</div>
						<img src="https://http2.mlstatic.com/ui/navigation/4.4.2/mercadopago/logo__large.png"
							class="mt-3 js-mp-logo"
							style="width: 120px;position: absolute;bottom: 0; right: 13px; display: none;">
						<span class="d-none js-preference-url">/en/checkout?preference=</span>
						<!-- <a href="https://app-sorteos.com/en/checkout?preference="
							class="js-btn-preference btn-block btn btn-success py-2 px-4 btn-bold">
							Continue to Checkout </a> -->
						<small class="text-secondary pt-1">No signup required</small>
					</div>
				</div>
			</div>
		</div>
	</div>



	<style>
		.pay-content {
			max-width: 290px;
			margin: 0 auto;
		}

		.currency {
			font-size: 65%;
			position: relative;
			top: -4px;
			left: 2px;
			margin-left: 10px;
		}

	</style>
	<script>
		mixpanel.track("AS_ViewHomepage");

	</script>
	<script>
		var isios = function () {
			return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
		};

		window.mobilecheck = function () {
			var check = false;
			(function (a) {
				if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
					.test(a) ||
					/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
					.test(a.substr(0, 4))) check = true;
			})(navigator.userAgent || navigator.vendor || window.opera);
			return check;
		};
		var submitForm = function () {
			return true;
		}
		var submitSorteadosForm = function () {
			var rows = $('#sorteadosTextarea').val().split("\n").length;
			if (rows < 2) {
				return false;
			}

			return true;
		}
		$('#sorteadosTextarea').keydown(function (e) {
			var rows = $(this).val().split("\n").length;
			if (rows > 1) {
				$('#sorteadosSubmit').prop('disabled', false);
			} else {
				$('#sorteadosSubmit').prop('disabled', true);
			}
		});
		var country = 'ID';
		var locale = 'en';
		var free_limit = '1000';
		var hasError = window.location.href.indexOf('?error=') !== -1;
		var hasErrorComments = window.location.href.indexOf('?error=comments_limit') !== -1;
		var hasErrorNoComments = window.location.href.indexOf('?error=no_comments') !== -1;
		var hasErrorExist = window.location.href.indexOf('?error=already_exist') !== -1;
		var hasErrorInfo = window.location.href.indexOf('?error=invalid_info') !== -1;
		var hasErrorUrl = window.location.href.indexOf('?error=invalid_url') !== -1;
		var hasErrorCommentsDisabled = window.location.href.indexOf('?error=comments_disabled') !== -1;

		var openContactModal = function () {
			$('#upgradeModal').modal('hide');
			$('#contactModal').modal('show');
		};

		var showErrorModal = function (error) {
			switch (error) {
				case 'invalid_url':
					$('#errorInvalidUrl').modal();
					break;
				case 'invalid_info':
					$('#errorModalInfo').modal();
					break;
				case 'no_comments':
					$('#errorNoComments').modal();
					break;
				case 'comments_disabled':
					$('#errorCommentsDisabled').modal();
					break;
			}
		};

		if (hasErrorComments) {
			var upgradeMetadata = {};
			if (upgradeMetadata.plan === 'influencer') {
				$('#upgrade-text').hide();
				$('#upgrade-alt').show();
			}
			$('#upgradeModal').modal({
				backdrop: 'static',
				keyboard: false
			});
			mixpanel.track("AS_ShowedUpgrade", upgradeMetadata);
		} else if (hasErrorCommentsDisabled) {
			showErrorModal('comments_disabled');
		} else if (hasErrorInfo) {
			showErrorModal('invalid_info');
		} else if (hasErrorUrl) {
			showErrorModal('invalid_url');
		} else if (hasErrorNoComments) {
			showErrorModal('no_comments');
		}

		$.extend({
			redirectPost: function (location, args) {
				var form = '';
				$.each(args, function (key, value) {
					value = value.split('"').join('\"')
					form += '<input type="hidden" name="' + key + '" value="' + value + '">';
				});
				$('<form action="' + location + '" method="POST">' + form + '</form>').appendTo($(document.body))
					.submit();
			}
		});

		$certwrap = $('#cert-wrapper');
		$cert = $('#cert-post');

		if ($certwrap.length) {
			var ratio = ($certwrap.width() / $cert.width());
			$cert.css('zoom', ratio);
		}

		$certwrap2 = $('#cert-story-wrapper');
		$cert2 = $('#cert-story');

		if ($certwrap2.length) {
			var ratio = ($certwrap2.width() / $cert2.width());
			$cert2.css('zoom', ratio);
			$('.jstf').textfill({
				widthOnly: true
			});
		}

		$('.color').click(function () {
			// $bg = $('#' + $(this).data('target'));
			$bg = $('.cert');
			$bg.removeClass(function (index, className) {
				return (className.match(/(^|\s)g\S+/g) || []).join(' ');
			});
			$bg.addClass($(this).data('color'));
		});

		$('[datetime]').each(function () {
			var datetime = $(this).attr('datetime');
			$(this).text(dayjs(new Date(datetime)).format('DD-MM-YYYY HH:mm'));
		});

		// $('.js-share-link').val(url);
		$('.js-share-link-copy').on('click', function () {
			$('.js-share-link')[0].select();
			document.execCommand("copy");
			var original_text = $('.js-share-link-copy').html();
			$('.js-share-link-copy').html('Copiado!')
				.removeClass('bg-white btn-light')
				.addClass('btn-success');
			setTimeout(function () {
				$('.js-share-link-copy').html(original_text)
					.addClass('bg-white btn-light')
					.removeClass('btn-success');
			}, 2500);
		});

		$('.js-share-code-copy').on('click', function () {
			$('.js-share-code')[0].select();
			document.execCommand("copy");
			var original_text = $('.js-share-code-copy').html();
			$('.js-share-code-copy').html('Copiado!')
				.removeClass('bg-white btn-light')
				.addClass('btn-success');
			setTimeout(function () {
				$('.js-share-code-copy').html(original_text)
					.addClass('bg-white btn-light')
					.removeClass('btn-success');
			}, 2500);
		});

		function eta(c) {
			if (c < 500) {
				return '0-5 min'
			}
			if (c < 1000) {
				return '5-10 min'
			}
			if (c < 2000) {
				return '5-10 min'
			}
			if (c < 3000) {
				return '10-15 min'
			}
			if (c < 5000) {
				return '13-19 min'
			}

			return '20-45 min';
		}

		//Donations
		$('.btn-group.coffee-count').on('click', '.btn', function () {
			$(this).addClass('active').siblings().removeClass('active');
		});

		var submitMultiForm = function (e) {
			e.preventDefault();
			procressMultiForm();
			return false;
		}

		if (typeof MultiForm !== 'undefined') {
			MultiForm.init();
		}

		$(document).ready(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});

		function setCookie(name, value, days) {
			var expires = "";
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + (value || "") + expires + "; path=/";
		}

		function getCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		}

	</script>
	
	<!-- Modal Notification For Login -->
<?php
if($this->session->flashdata('alert') || $this->session->flashdata('success')) { ?>
	<script>
		$(document).ready(function () {
			$("#myModal12").modal('show');
		});
	</script>
<?php  } ?>
<div id="myModal12" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h6>
				<?php if($this->session->flashdata('alert')) : ?>	
					<div class="alert alert-danger" role="alert"><?= $this->session->flashdata('alert'); ?></div>
				<?php elseif($this->session->flashdata('success')) : ?>	
					<div class="alert alert-success" role="alert"><?= $this->session->flashdata('success'); ?></div>	
				<?php endif; ?>
				</h6>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

