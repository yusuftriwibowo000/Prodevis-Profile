<!DOCTYPE html>
<html lang="en" xml:lang="en">

<head>
	<?php $this->load->view('modul template/head'); ?>
</head>

<body>
	<?php $this->load->view('modul template/navbar'); ?>

	<!-- <style>
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
</style> -->
	<div class="main">
		<div style="background-color: #f5fafd;">
			<div class="jumbotron gradient bg-whiate rounded-0 text-white text-center slope">
				<div class="container pb-1 pt-1">
					<h1><strong>Free Instagram Giveaways</strong></h1>
					<p class="lead mt-3">Create free Instagram giveaways & sweepstakes for free</p>
					<div class="row justify-content-center mt-5 mb-3">
						<div class="col-12 col-sm-8 col-md-6 col-lg-5 mt-3 ig-input">
							<form id="createForm" action="https://app-sorteos.com/en/app" method="POST">
								<div class="ig-input__group">
									<i class="fab fa-instagram ig-input-icon"></i>
									<input name="url[]" placeholder="Enter an Instagram Photo URL" type="url"
										class="form-control form-control-lg" value="">
									<i class="fas error-icon fa-exclamation-triangle text-danger"></i>
									<i class="icon-mas add-icon d-noane" title="Add another post" data-toggle="tooltip"
										data-placement="top"></i>
								</div>
								<div id="toappend">
									<div class="ig-input__group mt-3 d-none" id="fmi">
										<i class="fab fa-instagram ig-input-icon"></i>
										<input name="url[]" placeholder="Enter an Instagram Photo URL" type="url"
											class="form-control form-control-lg" value="">
										<i class="fas error-icon fa-exclamation-triangle text-danger"></i>
										<i class="far fa-trash-alt delete-icon" title="Remove" data-toggle="tooltip"
											data-placement="top"></i>
									</div>
								</div>
								<div class="disclaimer js-disclaimer d-none">
									<i class="icon-double-check mr-2"></i>This is a MultiPost Giveaway. <a
										target="_blank"
										href="https://app-sorteos.com/en/blog/instagram-multi-accounts-giveaways">Learn
										more.</a>
								</div>
								<button id="sigmp" type="button" class="btn mt-4 btn-outline-light"
									onclick="submitMultiForm(event)">
									<span class="t">Start</span>
									<span class="l d-none">Loading..</span>
								</button>
								<input id="sigmp2" type="hidden" name="type" value="multi-post-instagram">
							</form>
						</div>
					</div>

					<script>
						var procressMultiForm = function () {

							var $btn = $('#sigmp');

							$btn.prop('disabled', true);
							$btn.find('.t').addClass('d-none');
							$btn.find('.l').removeClass('d-none');

							var inputs = $('.ig-input__group').not(".d-none");

							MultiForm.proccessMedia(inputs);

							if (inputs.length === 1) {
								$('#sigmp2').val('instagram');
								setTimeout(function () {
									$('#createForm').submit();
								}, 2000);
								return true;
							}
							$('#sigmp2').val('multi-post-instagram');
							setTimeout(function () {
								$.ajax({
									url: '/api/validate',
									type: 'post',
									dataType: 'json',
									data: $('form').serialize(),
									success: function (response) {
										var inputs = $('.ig-input__group');
										var hasErrors = false;

										$btn.prop('disabled', false);
										$btn.find('.t').removeClass('d-none');
										$btn.find('.l').addClass('d-none');

										if (response.data.payment) {
											window.location.href = '/' + locale + '/app/' + response.data
												.preference;
											return;
										}

										if (response.data.preference_id) {
											MultiForm.showUpdagrade(response.data);
											mixpanel.track("AS_ShowedUpgradeMultiPost", response.data.plan);
											return;
										}

										for (var i = 0; i < response.data.length; i++) {
											var item = response.data[i];

											if (item.error && item.error !== 'ERROR_EMPTY_URL') {
												$(inputs[i]).addClass('has-error');
												hasErrors = true;
											} else {
												$(inputs[i]).removeClass('has-error');
											}
										}

										if (hasErrors) {
											MultiForm.showErrors(response.data);
										}

									}
								});
							}, 3000);
							return false;
						}

						var MultiForm = {};

						MultiForm.init = function () {
							var $input = $('#fmi');

							for (i = 0; i < 10; i++) {
								$('#toappend').append($input.clone());
							}

							$('.ig-input__group .form-control').on('keyup', function (e) {
								var $el = $(this);
								var $parent = $el.parent('.ig-input__group');
								$parent.removeClass('has-error');
							});
							$('.ig-input__group .delete-icon').on('click', function (e) {
								var $el = $(this);
								var $parent = $el.parent('.ig-input__group');
								$parent.addClass('d-none');
								$parent.find('input').val('');
								MultiForm.toggleDisclaimer();
							});
							$('.ig-input__group .add-icon').on('click', function (e) {
								$('.ig-input__group.d-none').first().removeClass('d-none');
								MultiForm.toggleDisclaimer();
							});
						};

						MultiForm.toggleDisclaimer = function () {
							var inputs = $('.ig-input__group').not(".d-none");
							var $disclaimer = $('.js-disclaimer');
							if (inputs.length === 1) {
								$disclaimer.addClass('d-none');
							} else {
								$disclaimer.removeClass('d-none');
							}
						};

						MultiForm.showErrors = function (data) {
							var $el = $('#errors_display');
							$el.html('');
							for (var i = 0; i < data.length; i++) {
								var item = data[i];

								if (item.error && item.error !== 'ERROR_EMPTY_URL') {
									$el.append('<div class="text-danger"><i class="fas fa-exclamation-triangle mt-4 mr-2"></i>' + __e[
										item.error] + '</div>');
									$el.append('<small><a target="_blank" href="' + item.url + '" class="ml-3 text-secondary">' + item
										.url + '</a></small>');
								}
							}
							$('#errorGenericModal').modal();
						};

						MultiForm.showUpdagrade = function (data) {
							$pref = $('.js-preference-url').text();
							$('.js-plan-currency').text(data.plan.currency);
							$('.js-plan-price').text(data.plan.price);
							$('.js-plan-cc').text(MultiForm.getNum(data.total_comments));
							$('.js-plan-pc').text(data.total_posts);
							$('.js-btn-preference').attr('href', $pref + data.preference_hash);
							if (data.plan.currency === '$') {
								$('.js-mp-logo').show();
							}
							$('#upgradeModal2').modal();
						};

						MultiForm.getNum = function (x) {
							return x.toLocaleString().replace(',', '.');
						};

						MultiForm.proccessMedia = function (urls) {
							urls.each(function (index) {
								var url = $(this).find('input').val();
								url = parseurl(url);
								if (!url) {
									return false;
								}
								$(this).find('input').val(url);

								var shortcode = getShortcode(url);
								var uri = 'https://www.instagram.com/p/' + shortcode + '/?__a=1';

								$.getJSON(uri, function (r) {
									if (r.graphql && r.graphql.shortcode_media) {
										var data = r.graphql.shortcode_media;
										var l = parseResponse(data);
										var hash = CryptoJS.MD5(url).toString();
										var ck = encodeURIComponent(JSON.stringify(l));
										setCookie(hash, ck, 1);
									}
								});
							});
						};

						var parseurl = function (url) {
							var sc = getShortcode(url);
							if (sc) {
								return 'https://www.instagram.com/p/' + sc + '/';
							}
							return false;
						}
						var getShortcode = function (url) {
							if (url.indexOf("instagram.com") === -1) {
								return '';
							}
							if (url.indexOf("https://app-sorteos.com/p/") === -1 && url.indexOf("https://app-sorteos.com/tv/") === -
								1) {
								return '';
							}
							if (url.indexOf("https://app-sorteos.com/p/") > -1) {
								var cont = url.indexOf("https://app-sorteos.com/p/") + 3;
							}
							if (url.indexOf("https://app-sorteos.com/tv/") > -1) {
								var cont = url.indexOf("https://app-sorteos.com/tv/") + 4;
							}
							shortcode = url.substr(cont);
							if (shortcode.indexOf("https://app-sorteos.com/") > -1) {
								shortcode = shortcode.substr(0, shortcode.indexOf("https://app-sorteos.com/"));
							}

							return shortcode;
						}
						var parseResponse = function (data) {
							var ow = data.owner;
							var cc = '';
							var ti = '';
							var th = '';

							if (data.edge_media_to_parent_comment && data.edge_media_to_parent_comment.count) {
								cc = parseInt(data.edge_media_to_parent_comment.count);
							}

							if (data.display_url) {
								th = data.display_url;
							}

							if (data.edge_media_to_caption &&
								data.edge_media_to_caption.edges &&
								data.edge_media_to_caption.edges[0] &&
								data.edge_media_to_caption.edges[0]['node'] &&
								data.edge_media_to_caption.edges[0]['node']['text']) {
								ti = data.edge_media_to_caption.edges[0]['node']['text'];
							}

							ow.followers = 0;

							return {
								'comments_count': cc,
								'comments_disabled': data.comments_disabled,
								'owner': ow,
								'media_id': data.id + '_' + ow.id,
								'shortcode': data.shortcode,
								'title': ti,
								'thumb': th,
								'url': 'https://www.instagram.com/p/' + data.shortcode + '/'
							};
						}

					</script>
				</div>
			</div>
		</div>

		<section style="background-color: #f5fafd; padding-top: 100px; padding-bottom: 80px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 text-center">
						<h1 class="mb-2 text-secondary">More apps</h1>
						<p class="mb-5 lead text-secondary">All the apps you need to pick random winners from
							everywhere!</p>
					</div>
					<div class="col-12 mt-4">
						<div class="row justify-content-center">
							<div class="col-12 col-md-4 compact sweepstake">
								<a href="instagram">
									<div class="card">
										<div class="card-body">
											<div class="icon icon-instagram">
												<i class="fab fa-instagram"></i>
											</div>
											<div class="content">
												<h2>Instagram Giveaway</h2>
												<p>Pick a random winner from your photos</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 compact sweepstake">
								<a>
									<div class="card">
										<div class="card-body">
											<div class="icon icon-youtube">
												<i class="fab fa-youtube"></i>
											</div>
											<div class="content">
												<h2>Youtube Giveaway</h2>
												<p>Pick a random winner from your videos</p>
											</div>
											<div class="tag">COMING SOON</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 compact sweepstake">
								<a>
									<div class="card">
										<div class="card-body">
											<div class="icon icon-facebook">
												<i class="fab fa-facebook"></i>
											</div>
											<div class="content">
												<h2>Facebook Giveaway</h2>
												<p>Pick a random winner from your posts</p>
											</div>
											<div class="tag">COMING SOON</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 compact sweepstake">
								<a href="<?= base_url("Pick_random"); ?>">
									<div class="card">
										<div class="card-body">
											<div class="icon icon-random">
												<i class="fas fa-list-ol"></i>
											</div>
											<div class="content">
												<h2>Random Name Winner</h2>
												<p>Pick a random winner from a list</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-12 col-md-4 compact sweepstake">
								<a href="<?= base_url("Wheel_decide"); ?>">
									<div class="card">
										<div class="card-body">
											<div class="icon icon-wheel">
												<i class="fas fa-chart-pie"></i>
											</div>
											<div class="content">
												<h2>Wheel Decide</h2>
												<p>Spin the wheel and get a winner!</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<!-- <div class="col-12 col-md-4 compact sweepstake">
                        <a href="https://app-sorteos.com/en/apps/twitter-giveaway">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon icon-twitter">
                                    <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="content">
                                    <h2>Twitter Giveaway</h2>
                                    <p>Pick a random winner from your tweets and followers</p>
                                    </div>
                                    <div class="tag">New</div>
                                </div>
                            </div>
                        </a>
                    </div> -->
							<div class="col-12 col-md-4 compact sweepstake">
								<a href="<?= base_url("Roll_dice"); ?>">
									<div class="card">
										<div class="card-body">
											<div class="icon icon-dice">
												<i class="fas fa-dice"></i>
											</div>
											<div class="content">
												<h2>Roll Dice</h2>
												<p>Online dice roller simulator</p>
											</div>
											<div class="tag">New</div>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-9 col-lg-8">
					<div class="blog-post">
						<h2 class="blog-post__title">About <strong>App Sorteos</strong></h2>
						<p>
							<strong>App-Sorteos.com</strong> it's an online and free tool to create <strong>Instagram
								Giveaways, Sweepstakes, Contests and Promotions</strong>, allowing you to pick a random
							comment from your Instagram photo URL.</p>
						<p>Just enter your Instagram Photo URL, and we will find all the comments for you. After that,
							you need to select the <i>number of winners</i>, and press the START button.</p>
						<p>We DO NOT need access to your account credentials, just use our <a
								href="https://app-sorteos.com/en/apps/instagram-comment-picker">Instagram Giveaways Free
								App</a> with the post URL.</p>
						<p>Now, you can create free <a href="https://app-sorteos.com/en/apps/youtube-giveaway">Youtube
								Giveaways, Sweepstakes, Contests and Promotions</a> with your videos, by choosing a
							random comment.</p>
						<p>We CANNOT read comments from PRIVATE POST, yet.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		(function (c, a) {
			if (!a.__SV) {
				var b = window;
				try {
					var d, m, j, k = b.location,
						f = k.hash;
					d = function (a, b) {
						return (m = a.match(RegExp(b + "=([^&]*)"))) ? m[1] : null
					};
					f && d(f, "state") && (j = JSON.parse(decodeURIComponent(d(f, "state"))), "mpeditor" === j.action && (
						b.sessionStorage.setItem("_mpcehash", f), history.replaceState(j.desiredHash || "", c
							.title, k.pathname + k.search)))
				} catch (n) {}
				var l, h;
				window.mixpanel = a;
				a._i = [];
				a.init = function (b, d, g) {
					function c(b, i) {
						var a = i.split(".");
						2 == a.length && (b = b[a[0]], i = a[1]);
						b[i] = function () {
							b.push([i].concat(Array.prototype.slice.call(arguments,
								0)))
						}
					}
					var e = a;
					"undefined" !== typeof g ? e = a[g] = [] : g = "mixpanel";
					e.people = e.people || [];
					e.toString = function (b) {
						var a = "mixpanel";
						"mixpanel" !== g && (a += "." + g);
						b || (a += " (stub)");
						return a
					};
					e.people.toString = function () {
						return e.toString(1) + ".people (stub)"
					};
					l = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove"
						.split(" ");
					for (h = 0; h < l.length; h++) c(e, l[h]);
					var f = "set set_once union unset remove delete".split(" ");
					e.get_group = function () {
						function a(c) {
							b[c] = function () {
								call2_args = arguments;
								call2 = [c].concat(Array.prototype.slice.call(call2_args, 0));
								e.push([d, call2])
							}
						}
						for (var b = {}, d = ["get_group"].concat(Array.prototype.slice.call(arguments, 0)), c =
								0; c < f.length; c++) a(f[c]);
						return b
					};
					a._i.push([b, d, g])
				};
				a.__SV = 1.2;
				b = c.createElement("script");
				b.type = "text/javascript";
				b.async = !0;
				b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ?
					MIXPANEL_CUSTOM_LIB_URL : "file:" === c.location.protocol &&
					"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ?
					"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js" :
					"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";
				d = c.getElementsByTagName("script")[0];
				d.parentNode.insertBefore(b, d)
			}
		})(document, window.mixpanel || []);
		mixpanel.init("d4277a45cee115114888f6e17552af75");

	</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133519727-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-133519727-1');

	</script>
	<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-6091836725090448",
			enable_page_level_ads: true
		});

	</script>
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	</script>

	<script async type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5">
	</script>

	<?php $this->load->view('modul template/footer'); ?>
</body>

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->

</html>
