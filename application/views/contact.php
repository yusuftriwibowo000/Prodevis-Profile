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
		<style>
			body {
				background-color: #fff;
			}

			.form-control-inverse {
				background: #f5f5f5;
				border: 0;
				font-size: 14px;
			}

		</style>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6 mt-5">
					<div class="blog-post">
						<h2 class="blog-post__title">Contact</h2>
						<form onsubmit="return submitCForm();" method="POST" action="#">
							<div class="form-group">
								<label>Name</label>
								<input name="name" required="" type="text" class="form-control form-control-lg form-control-inverse">
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input name="email" required="" type="email" class="form-control form-control-lg form-control-inverse">
							</div>
							<div class="form-group">
								<label>Subject</label>
								<select onchange="onChange(event)" name="subject" required=""
									class="form-control form-control-lg form-control-inverse">
									<option selected></option>
									<option value="question">Contact / Questions</option>
									<option value="invoice">Invoice Request</option>
									<option value="sales">Sales</option>
									<option value="app">Giveway / App Issues</option>
									<option value="payment">Payment Issues</option>
								</select>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea name="message" required class="form-control form-control-lg form-control-inverse" id=""
									cols="30" rows="6"></textarea>
							</div>
							<div class="alert alert-warning">
								Please include the IG Post URL if you are having payment or app issues, or requesting an Invoice </div>
							<input type="hidden" name="is_form_valid" value="1">
							<div class="g-recaptcha" data-sitekey="6Ld2MeUUAAAAAD4EslvxXqsiZXK_m8auBIRhSleO"></div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-lg btn-success" style="font-size: 15px;">Send</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="../../www.google.com/recaptcha/apida10.js?onload=onloadCallback" async defer></script>
		<script type="text/javascript">
			var submitCForm = function () {
				var response = grecaptcha.getResponse();
				return response !== '';
			};

		</script>
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
					f && d(f, "state") && (j = JSON.parse(decodeURIComponent(d(f, "state"))), "mpeditor" === j.action && (b
						.sessionStorage.setItem("_mpcehash", f), history.replaceState(j.desiredHash || "", c.title, k.pathname +
							k.search)))
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
					l =
						"disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove"
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
						for (var b = {}, d = ["get_group"].concat(Array.prototype.slice.call(arguments, 0)), c = 0; c < f
							.length; c++) a(f[c]);
						return b
					};
					a._i.push([b, d, g])
				};
				a.__SV = 1.2;
				b = c.createElement("script");
				b.type = "text/javascript";
				b.async = !0;
				b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ?
					MIXPANEL_CUSTOM_LIB_URL : "file:" === c.location.protocol && "//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js"
					.match(/^\/\//) ? "https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js" :
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
	<script async src="../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
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
			js.src = '../../connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	</script>

	<script async type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5">
	</script>

	<?php $this->load->view('modul template/footer'); ?>
</body>

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->

</html>
