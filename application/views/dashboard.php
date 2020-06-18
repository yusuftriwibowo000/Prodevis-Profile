<!DOCTYPE html>
<html lang="en" xml:lang="en">

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 12:56:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
                        <input name="url[]" placeholder="Enter an Instagram Photo URL" type="url" class="form-control form-control-lg" value="">
                        <i class="fas error-icon fa-exclamation-triangle text-danger"></i>
                        <i class="icon-mas add-icon d-noane" title="Add another post" data-toggle="tooltip" data-placement="top"></i>
                    </div>
                    <div id="toappend">
                        <div class="ig-input__group mt-3 d-none" id="fmi">
                            <i class="fab fa-instagram ig-input-icon"></i>
                            <input name="url[]" placeholder="Enter an Instagram Photo URL" type="url" class="form-control form-control-lg" value="">
                            <i class="fas error-icon fa-exclamation-triangle text-danger"></i>
                            <i class="far fa-trash-alt delete-icon" title="Remove" data-toggle="tooltip" data-placement="top"></i>
                        </div>
                    </div>
                    <div class="disclaimer js-disclaimer d-none">
                        <i class="icon-double-check mr-2"></i>This is a MultiPost Giveaway. <a target="_blank" href="https://app-sorteos.com/en/blog/instagram-multi-accounts-giveaways">Learn more.</a>
                    </div>
                <button id="sigmp" type="button" class="btn mt-4 btn-outline-light" onclick="submitMultiForm(event)">
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
                    success: function(response) {
                        var inputs = $('.ig-input__group');
                        var hasErrors = false;

                        $btn.prop('disabled', false);
                        $btn.find('.t').removeClass('d-none');
                        $btn.find('.l').addClass('d-none');

                        if (response.data.payment) {
                            window.location.href = '/' + locale + '/app/' + response.data.preference;
                            return;
                        }

                        if (response.data.preference_id) {
                            MultiForm.showUpdagrade(response.data);
                            mixpanel.track("AS_ShowedUpgradeMultiPost", response.data.plan);
                            return;
                        }

                        for (var i=0; i<response.data.length;i++) {
                            var item = response.data[i];

                            if (item.error && item.error!=='ERROR_EMPTY_URL') {
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

            for (i=0;i<10;i++) {
                $('#toappend').append( $input.clone() );
            }

            $('.ig-input__group .form-control').on('keyup', function(e) {
                var $el = $(this);
                var $parent = $el.parent('.ig-input__group');
                $parent.removeClass('has-error');
            });
            $('.ig-input__group .delete-icon').on('click', function(e) {
                var $el = $(this);
                var $parent = $el.parent('.ig-input__group');
                $parent.addClass('d-none');
                $parent.find('input').val('');
                MultiForm.toggleDisclaimer();
            });
            $('.ig-input__group .add-icon').on('click', function(e) {
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
            for (var i=0; i<data.length;i++) {
                var item = data[i];

                if (item.error && item.error!=='ERROR_EMPTY_URL') {
                    $el.append('<div class="text-danger"><i class="fas fa-exclamation-triangle mt-4 mr-2"></i>'+__e[item.error]+'</div>');
                    $el.append('<small><a target="_blank" href="'+item.url+'" class="ml-3 text-secondary">'+item.url+'</a></small>');
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
        return x.toLocaleString().replace(',','.');
        };

        MultiForm.proccessMedia = function (urls) {
            urls.each(function (index) {
                var url = $(this).find('input').val();
                url = parseurl(url);
                if(!url) {
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
                return 'https://www.instagram.com/p/'+sc+'/';
            }
            return false;
        }
        var getShortcode = function (url) {
            if (url.indexOf("instagram.com") === -1) {
                return '';
            }
            if (url.indexOf("https://app-sorteos.com/p/") === -1 && url.indexOf("https://app-sorteos.com/tv/") === -1) {
                return '';
            }
            if (url.indexOf("https://app-sorteos.com/p/") > -1 ) {
                var cont = url.indexOf("https://app-sorteos.com/p/")+3;
            }
            if (url.indexOf("https://app-sorteos.com/tv/") > -1 ) {
                var cont = url.indexOf("https://app-sorteos.com/tv/")+4;
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
        </script> </div>
    </div>
</div>

<section style="background-color: #f5fafd; padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
            <h1 class="mb-2 text-secondary">More apps</h1>
            <p class="mb-5 lead text-secondary">All the apps you need to pick random winners from everywhere!</p>
            </div>
            <div class="col-12 mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4 compact sweepstake">
                        <a href="https://app-sorteos.com/en/apps/instagram-comment-picker">
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
                        <a href="https://app-sorteos.com/en/apps/facebook-comment-picker">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon icon-facebook">
                                    <i class="fab fa-facebook"></i>
                                    </div>
                                    <div class="content">
                                    <h2>Facebook Giveaway</h2>
                                    <p>Pick a random winner from your posts</p>
                                    </div>
                                    <div class="tag">Beta</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 compact sweepstake">
                        <a href="https://app-sorteos.com/en/apps/pick-random-name-winner">
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
                        <a href="https://app-sorteos.com/en/apps/wheel-decide">
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
                    <div class="col-12 col-md-4 compact sweepstake">
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
                    </div>
                    <div class="col-12 col-md-4 compact sweepstake">
                        <a href="https://app-sorteos.com/en/apps/online-roll-dice">
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
                    <div class="col-12 col-md-4 compact sweepstake">
                        <a href="https://app-sorteos.com/en/apps/youtube-giveaway">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon icon-youtube">
                                    <i class="fab fa-youtube"></i>
                                    </div>
                                    <div class="content">
                                    <h2>Youtube Giveaway</h2>
                                    <p>Pick a random winner from your videos</p>
                                    </div>
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
<strong>App-Sorteos.com</strong> it's an online and free tool to create <strong>Instagram Giveaways, Sweepstakes, Contests and Promotions</strong>, allowing you to pick a random comment from your Instagram photo URL.</p>
<p>Just enter your Instagram Photo URL, and we will find all the comments for you. After that, you need to select the <i>number of winners</i>, and press the START button.</p>
<p>We DO NOT need access to your account credentials, just use our <a href="https://app-sorteos.com/en/apps/instagram-comment-picker">Instagram Giveaways Free App</a> with the post URL.</p>
<p>Now, you can create free <a href="https://app-sorteos.com/en/apps/youtube-giveaway">Youtube Giveaways, Sweepstakes, Contests and Promotions</a> with your videos, by choosing a random comment.</p>
<p>We CANNOT read comments from PRIVATE POST, yet.</p>
</div> </div>
</div>
</div>
</div>
<script type="text/javascript">(function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
mixpanel.init("d4277a45cee115114888f6e17552af75");</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133519727-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script async type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5"></script>

<?php $this->load->view('modul template/footer'); ?>

<style>
	footer h5 { font-size: 16px; }
	footer p { font-size: 13px; color: #999; }
	footer a { color: #636363; font-size: 14px; }
	footer ul li { margin: 8px 0; }
	.social-links a { font-size:  30px; margin: 0 15px; display: inline-block; }
</style>
<script>
var __e = {};

__e['upgradeText1'] = 'Your post has <strong>{0}</strong> comments';
__e['upgradeText2'] = 'You can make contests on Instagram with a post up to <strong>{0}</strong> comments totally for free. Unlock this contest and make it immediately for just';

__e['ERROR_DUPLICATED_URL'] = 'The URL is duplicated, please remove one';
__e['ERROR_INVALID_URL'] = 'The URL is invalid.';
__e['ERROR_NOT_FOUND'] = 'We cannot read the URL';
__e['ERROR_COMMENTS_DISABLED'] = 'This Instagram Post has the comments disabled. Please turn it ON to start this giveway.';
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
<p><a href="https://app-sorteos.com/en/blog/find-your-instagram-photo-url">Find your Instagram picture URL</a></p>
</div>
<div class="modal-body text-center px-4" style="display: none;" id="error_comments">
<p>This post has no comments. Be sure to make the giveaway when it's finished, and everyone has participated.</p>
</div>
<div class="modal-body text-center px-4" style="display: none;" id="error_exists">
<p>This post has already been used to get winners. If you need help, on Instagram and ww help you.</p>
<p><a href="https://www.instagram.com/app_sorteos_ok/" target="_blank"><strong>@app_sorteos_ok</strong></p></a>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary py-2 px-4 btn-bold" data-dismiss="modal">Ok</button>
</div>
</div>
</div>
</div>
<div id="wrapfabtest"><div class="adBanner" style="background-color: transparent;height: 1px;width: 1px;"></div></div>
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
</style> <div class="modal" tabindex="-1" role="dialog" id="errorModalInfo">
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
<p>This is probably because your <strong>Profile is Private</strong>, or you have a <strong>Minimum Age Limit</strong> restriction for your account.</p>
<p class="text-secondary">Switch your profile to Public, or remove the Age Restriction, and try again.</p>
</div>
<div class="modal-footer px-5 pb-4" style="background-color: transparent !important;">
<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
</div>
</div>
</div>
</div> <div class="modal" tabindex="-1" role="dialog" id="errorCommentsDisabled">
<div class="modal-dialog modal-dialog-centered modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Comments Disabled</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="far fa-times-circle"></i>
</button>
</div>
<div class="modal-body text-center px-5">
<img src="https://app-sorteos.com/img/svg/undraw_maker_launch_crhe.svg" width="180" class="mb-5" alt="">
<p>This Instagram Post has the comments disabled. Please turn it ON to start this giveway.</p>
</div>
<div class="modal-footer px-5 pb-4" style="background-color: transparent !important;">
<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
</div>
</div>
</div>
</div> <div class="modal" tabindex="-1" role="dialog" id="errorInvalidUrl">
<div class="modal-dialog modal-dialog-centered modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">The URL is invalid</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="far fa-times-circle"></i>
</button>
</div>
<div class="modal-body text-center px-5">
<img src="https://app-sorteos.com/img/svg/undraw_page_not_found.svg" width="160" class="mb-5" alt="">
<p>The image URL is invalid. Please check your image URL looks like this</p>
<p class="small my-3"><a href="#">https://www.instagram.com/p/Bt1opxvFPEY</a></p>

</div>
<div class="modal-footer d-flex flex-column px-5 pb-4" style="background-color: transparent !important;">
<a href="https://app-sorteos.com/en/blog/find-your-instagram-photo-url" class="btn mx-0 mb-2 btn-success btn-lg btn-block">
Help </a>
<button type="button" class="btn mb-3 btn-primary btn-lg btn-block" data-dismiss="modal">Ok</button>
</div>
</div>
</div>
</div> <div class="modal" tabindex="-1" role="dialog" id="errorNoComments">
<div class="modal-dialog modal-dialog-centered modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Oops!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="far fa-times-circle"></i>
</button>
</div>
<div class="modal-body text-center px-4">
<p>This post has no comments. Be sure to make the giveaway when it's finished, and everyone has participated.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary py-2 px-4 btn-bold" data-dismiss="modal">Ok</button>
</div>
</div>
</div>
</div> <div class="modal" tabindex="-1" role="dialog" id="errorGenericModal">
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
</style> <div class="modal" tabindex="-1" role="dialog" id="contactModal">
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
</style> <div class="modal" tabindex="-1" role="dialog" id="upgradeModal2">
<div class="modal-dialog modal-dialog-centered modal-md" role="document" style="max-width: 430px;">
<div class="modal-content">
<div class="modal-header gradiaent">
<h5 class="modal-title">Multi Post Giveaway!</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<i class="fas fa-times"></i>
</button>
</div>
<div class="modal-body text-center" style="position: relative; top: -15px;" id="upgrade-text">
<p class="text-secondary" style="font-size: 14px;">Your <strong><span class="js-plan-pc"></span></strong> posts has <strong><span class="js-plan-cc"></span></strong> comments in total</p>
<p class="px-3 text-secondary" style="font-size: 13px;">MultiPosts Giveaways is a <strong>PREMIUM</strong> functionality. Unlock and run it immediately for just</p>
<div class="d-flex flex-column align-items-center justify-content-center pb-3 pt-3 pay-content">
<div class="price mb-3">
<span class="small js-plan-currency"></span>
<span class="js-plan-price"></span>
</div>
<img src="https://http2.mlstatic.com/ui/navigation/4.4.2/mercadopago/logo__large.png" class="mt-3 js-mp-logo" style="width: 120px;position: absolute;bottom: 0; right: 13px; display: none;">
<span class="d-none js-preference-url">/en/checkout?preference=</span>
<a href="https://app-sorteos.com/en/checkout?preference=" class="js-btn-preference btn-block btn btn-success py-2 px-4 btn-bold">
Continue to Checkout </a>
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
<script>mixpanel.track("AS_ViewHomepage");</script>
<script>
    var isios = function () {
        return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    };

    window.mobilecheck = function() {
      var check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check;
    };
    var submitForm = function () {
        return true;
    }
    var submitSorteadosForm = function () {
       var rows = $('#sorteadosTextarea').val().split("\n").length;
       if( rows < 2 ) {
            return false;
       }

       return true;
    }
    $('#sorteadosTextarea').keydown(function(e){
        var rows = $(this).val().split("\n").length;
        if( rows > 1 ) {
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
        $('#upgradeModal').modal({backdrop: 'static', keyboard: false});
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

$.extend(
{
    redirectPost: function(location, args)
    {
        var form = '';
        $.each( args, function( key, value ) {
            value = value.split('"').join('\"')
            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
        });
        $('<form action="' + location + '" method="POST">' + form + '</form>').appendTo($(document.body)).submit();
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
    $('.jstf').textfill({widthOnly: true});
}

$('.color').click(function () {
    // $bg = $('#' + $(this).data('target'));
    $bg = $('.cert');
    $bg.removeClass (function (index, className) {
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

function eta (c) {
    if (c < 500) { return '0-5 min'}
    if (c < 1000) { return '5-10 min'}
    if (c < 2000) { return '5-10 min'}
    if (c < 3000) { return '10-15 min'}
    if (c < 5000) { return '13-19 min'}

    return '20-45 min';
}

//Donations
$('.btn-group.coffee-count').on('click', '.btn', function() {
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

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
</script>
</body>

<!-- Mirrored from app-sorteos.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2020 13:23:56 GMT -->
</html>
