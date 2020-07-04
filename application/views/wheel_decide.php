<html lang="en" xml:lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
<div class="jumbotron gradient rounded-0 text-white text-center slope">
<div class="container pb-1 pt-1">
<h1>The <span>
Wheel</span> Decide</h1>
<p class="lead mt-3">Spin the wheel to get random winners!</p>
</div>
</div>
<script type='text/javascript' src="<?= base_url(); ?>vendors/platform-api.sharethis.com/js/sharethis.js#property=5ea4443da10c1200152b4814&product=sticky-share-buttons&cms=sop" async='async'></script><div class="container">
<div id="app" v-cloak class="row mt-5 justify-content-center">
<div class="col-12 col-md-6 noselect">
<button class="d-sm-none btn mb-5 btn-game btn-success btn-block" @click="editChoices">
Edit Choices </button>
<span class="whell-title" v-if="title">{{ title }}</span>
<div class="d-flex justify-content-center">
<div class="whell">
<canvas v-on:click="run" id="canvas" width="440" height="440" data-responsiveminwidth="180" data-responsivescaleheight="true" data-responsivemargin="50">
Canvas not supported, use another browser. </canvas>
<img class="centered-spin" v-on:click="run" src="<?= base_url(); ?>/build/img/apps/en_wheel-spin.png" alt="">
<div v-on:click="run" class="wheel-border"></div>
<div class="wheel-overlay" v-on:click="closeOverlay" v-if="open">
<div class="d-flex">
<div class="winner">
{{ curentSegment.originalText || curentSegment.text }}
</div>
</div>
</div>
<div class="wheel-settings d-none d-sm-block">
<div class="d-flex align-items-center mr-4">
<div class="btn btn-light btn-icon mr-2" @click="toggleSound()">
<i class="icon-volume" v-if="playSounds"></i>
<i class="icon-volume-mute" v-if="!playSounds"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-3 pt-4 pt-sm-0">
<button class="d-none d-sm-block btn btn-game btn-success btn-block" @click="editChoices">
Edit Choices </button>
<div class="box mt-3" v-if="results.length">
<div class="box__header">
<span>Results</span>
<i @click="results=[]" class="far fa-trash-alt delete-icon" title="Remove" data-toggle="tooltip" data-placement="top"></i>
</div>
<div class="box__content">
<ul class="list-group list-group-flush list-results">
<li class="list-group-item" v-for="(item, index) in results">
<strong>{{index+1}}.</strong>
<span class="ml-2 small">{{item}}</span>
</li>
</ul>
</div>
</div>
</div>
<div class="modal modal-game" tabindex="-1" role="dialog" id="choicesModal">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit Choices</h5>
</div>
<div class="modal-body p-4">
<div class="form-group">
<label>Choices</label>
<textarea class="form-control" v-model="source" cols="30" rows="6" placeholder=""></textarea>
<small class="form-text text-muted">Each option must be on a new line</small>
</div>
<div class="form-group">
<label>Title</label>
<input v-model="newTitle" type="text" class="form-control">
</div>
<div class="form-group">
<div class="form-check">
<input v-model="removeAfterLanded" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
<label class="form-check-label" for="defaultCheck1">
Remove choice after it's landed on </label>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-game btn-secondary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-game btn-success" @click="updateSource">Update</button>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-5 justify-content-center">
<div class="col-12 col-md-11">
<div class="blog-post">
<h2 class="blog-post__title">How "The Wheel Decide" works</h2>
<p>To spin the wheel you need just to click on it.<br>
Before start, we recommend you edit <strong>Options</strong> and <strong>Choices List</strong>. <br>
If you want each choice could win only one time, just select the option to remove after it is selected</p>
<h2 class="blog-post__title mt-5">Spin the wheel and let it decide!</h2>
<p>This is a picker wheel that spins and picks a random word based on your input. Fun and useful! Let's say you're a teacher and all of your students have to hold a presentation today. Who will go first? You can start at the top of your student list, but then the same students always have to start first, plus you don't always have your student list within reach. The solution: pick a random name. How? With this tool! Simply fill in all of your students and let the wheel decide.</p> </div>
</div>
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
<script async src="../../../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
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
  js.src = '<?= base_url(); ?>vendors/connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script async type="text/javascript" src="<?= base_url(); ?>vendors/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5"></script>
<div class="footer-slope slope" style="background-color: #f7f7f7; height: 50px; margin-top: 100px;"></div>

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
<script src="<?= base_url(); ?>vendors/js//all.front.compiled6a78.js?1591495844"></script>

<script src="<?= base_url(); ?>vendors/cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="<?= base_url(); ?>vendors/js/vendor/winwheel.min.js"></script>
<script>
var _0x366a=['function\x20*\x5c(\x20*\x5c)','#optionsModal','https://app-sorteos.com/media/tick.mp3','currentTime','push','deleteSegment','test','input','wheelSpinning','offset','title','playSounds','resetValues','splice','while\x20(true)\x20{}','animation','participants','forEach','theWheel','init','removeAfterLanded','newTitle','#ed2ba2','setup','\x5c+\x5c+\x20*(?:[a-zA-Z_$][0-9a-zA-Z_$]*)','rotationAngle','indexOf','playSound','gger','length','text','pause','#a8cc3f','stateObject','Berlín','results','#choicesModal','Washington','numSegments','constructor','#app','originalText','join','wheel_add_options','modal','startAnimation','spins','action','colors','string','trim','Roma','addSegment','alertPrize','Estocolmo','draw','Tokio','playFxEnd','split','editInline','play','debu','curentSegment','hide','segments','power','scrollTop','filter','open','map','wheelPower','source','https://app-sorteos.com/media/wd-sound-fx-end.mp3','apply'];(function(_0x5532bd,_0x366a70){var _0xd1d75d=function(_0x2df418){while(--_0x2df418){_0x5532bd['push'](_0x5532bd['shift']());}};_0xd1d75d(++_0x366a70);}(_0x366a,0x1ca));var _0xd1d7=function(_0x5532bd,_0x366a70){_0x5532bd=_0x5532bd-0x0;var _0xd1d75d=_0x366a[_0x5532bd];return _0xd1d75d;};var _0x90decb=function(){var _0x3386c6=!![];return function(_0xdd86d4,_0x4c6b87){var _0x53f274=_0x3386c6?function(){if(_0x4c6b87){var _0x49be74=_0x4c6b87[_0xd1d7('0x3b')](_0xdd86d4,arguments);_0x4c6b87=null;return _0x49be74;}}:function(){};_0x3386c6=![];return _0x53f274;};}();(function(){_0x90decb(this,function(){var _0x17ed83=new RegExp(_0xd1d7('0x3c'));var _0x5a1ca9=new RegExp(_0xd1d7('0xa'),'i');var _0xba584d=_0x2a2810(_0xd1d7('0x5'));if(!_0x17ed83[_0xd1d7('0x42')](_0xba584d+'chain')||!_0x5a1ca9[_0xd1d7('0x42')](_0xba584d+_0xd1d7('0x43'))){_0xba584d('0');}else{_0x2a2810();}})();}());var audio=new Audio(_0xd1d7('0x3e'));var fxEnd=new Audio(_0xd1d7('0x3a'));var app=new Vue({'el':_0xd1d7('0x1a'),'data':{'colors':['#56ccf5','#f65033',_0xd1d7('0x12'),_0xd1d7('0x8'),'#f3f320'],'wheelSpinning':![],'playSounds':!![],'removeAfterLanded':![],'editInline':![],'source':'','open':![],'power':0x1,'input':'','newTitle':'','title':'','participants':[],'results':[],'theWheel':null},'created':function(){},'mounted':function(){this['theWheel']=new Winwheel({'responsive':!![],'pointerAngle':0x0,'numSegments':0xa,'outerRadius':0xdc,'innerRadius':0x32,'textFontSize':0x10,'textMargin':0x0,'segments':[{'fillStyle':this['colors'][0x0],'text':'Paris'},{'fillStyle':this[_0xd1d7('0x22')][0x1],'text':'Singapur'},{'fillStyle':this['colors'][0x2],'text':_0xd1d7('0x25')},{'fillStyle':this[_0xd1d7('0x22')][0x3],'text':_0xd1d7('0x14')},{'fillStyle':this[_0xd1d7('0x22')][0x4],'text':_0xd1d7('0x17')},{'fillStyle':this[_0xd1d7('0x22')][0x0],'text':'Buenos\x20Aires'},{'fillStyle':this[_0xd1d7('0x22')][0x1],'text':'Lima'},{'fillStyle':this['colors'][0x2],'text':_0xd1d7('0x2a')},{'fillStyle':this['colors'][0x3],'text':_0xd1d7('0x28')},{'fillStyle':this[_0xd1d7('0x22')][0x4],'text':'Bagkok'}],'animation':{'type':'spinToStop','duration':0x5,'spins':0x8,'callbackFinished':this[_0xd1d7('0x27')],'callbackSound':this[_0xd1d7('0xd')]},'lineWidth':'1','strokeStyle':'#fff'});},'methods':{'addPerson':function(_0x23e038){if(this[_0xd1d7('0x2')][_0xd1d7('0xc')](this[_0xd1d7('0x43')])===-0x1){this[_0xd1d7('0x2')][_0xd1d7('0x40')](this[_0xd1d7('0x43')]);this[_0xd1d7('0x43')]='';}},'deletePerson':function(_0x307ba9){this[_0xd1d7('0x2')][_0xd1d7('0x49')](_0x307ba9,0x1);},'resetValues':function(){this[_0xd1d7('0x4')][_0xd1d7('0x32')]=[null];this[_0xd1d7('0x4')][_0xd1d7('0x18')]=0x0;},'setup':function(){var _0x8aa15e=this;this[_0xd1d7('0x48')]();var _0x16e828=0x0;if(this[_0xd1d7('0x2')][_0xd1d7('0xf')]<0x2){alert(__e[_0xd1d7('0x1d')]);return![];}this[_0xd1d7('0x2')][_0xd1d7('0x3')](function(_0x550aa4,_0x4559fc){var _0x4f6dff=_0x8aa15e[_0xd1d7('0x22')][_0x16e828];_0x16e828++;if(_0x16e828>_0x8aa15e[_0xd1d7('0x22')][_0xd1d7('0xf')]-0x1)_0x16e828=0x0;var _0x3ef75c=0x10;var _0x157e8f=_0x550aa4;if(_0x550aa4[_0xd1d7('0xf')]>0xa){_0x3ef75c=0xe;}if(_0x550aa4[_0xd1d7('0xf')]>0x14){_0x3ef75c=0xc;}if(_0x8aa15e[_0xd1d7('0x2')][_0xd1d7('0xf')]>0x19){_0x157e8f='';}_0x8aa15e[_0xd1d7('0x4')][_0xd1d7('0x26')]({'text':_0x157e8f,'originalText':_0x550aa4,'fillStyle':_0x4f6dff,'textFontSize':_0x3ef75c});});_0x8aa15e[_0xd1d7('0x4')][_0xd1d7('0x29')]();$(window)[_0xd1d7('0x34')]($(_0xd1d7('0x1a'))[_0xd1d7('0x45')]()['top']-0x64);this[_0xd1d7('0x36')]=![];},'run':function(){if(this['theWheel'][_0xd1d7('0x18')]<=0x2){this['power']=0x3;}else if(this[_0xd1d7('0x4')][_0xd1d7('0x18')]<=0x5){this[_0xd1d7('0x33')]=0x2;}else{this[_0xd1d7('0x33')]=0x1;}wheelPower=this['power'];console['log'](_0xd1d7('0x38'),wheelPower);if(this[_0xd1d7('0x44')]==![]){if(wheelPower==0x1){this[_0xd1d7('0x4')][_0xd1d7('0x1')][_0xd1d7('0x20')]=0x4;}else if(wheelPower==0x2){this[_0xd1d7('0x4')][_0xd1d7('0x1')]['spins']=0x8;}else if(wheelPower==0x3){this['theWheel'][_0xd1d7('0x1')][_0xd1d7('0x20')]=0xf;}this[_0xd1d7('0x4')][_0xd1d7('0x1f')]();this['wheelSpinning']=!![];}},'alertPrize':function alertPrize(_0x3f8af3){this[_0xd1d7('0x44')]=![];this[_0xd1d7('0x2b')]();this['curentSegment']=_0x3f8af3;this['open']=!![];while(this[_0xd1d7('0x4')][_0xd1d7('0xb')]>=0x168){this['theWheel'][_0xd1d7('0xb')]-=0x168;}var _0x1bbc8a=_0x3f8af3[_0xd1d7('0x1b')]||_0x3f8af3[_0xd1d7('0x10')];this[_0xd1d7('0x15')][_0xd1d7('0x40')](_0x1bbc8a);},'playSound':function(){if(!this[_0xd1d7('0x47')]){return![];};audio[_0xd1d7('0x11')]();audio[_0xd1d7('0x3f')]=0x0;audio[_0xd1d7('0x2e')]();},'playFxEnd':function(){if(!this[_0xd1d7('0x47')]){return![];};fxEnd[_0xd1d7('0x11')]();fxEnd[_0xd1d7('0x3f')]=0x0;fxEnd[_0xd1d7('0x2e')]();},'closeOverlay':function(){$('.overlay')[_0xd1d7('0x31')]();this[_0xd1d7('0x36')]=![];if(this['removeAfterLanded']){this[_0xd1d7('0x4')][_0xd1d7('0x41')](this[_0xd1d7('0x30')]['index']);this['theWheel'][_0xd1d7('0x29')]();}},'setInlineEdition':function(){this['source']=this['participants'][_0xd1d7('0x1c')]('\x0a');this[_0xd1d7('0x2d')]=!![];},'updateSource':function(){var _0x1ef57b=this[_0xd1d7('0x39')][_0xd1d7('0x2c')]('\x0a')[_0xd1d7('0x35')](function(_0x4445ef){return _0x4445ef!=='';})[_0xd1d7('0x37')](function(_0x37a369){return _0x37a369[_0xd1d7('0x24')]();});if(_0x1ef57b[_0xd1d7('0xf')]<0x2){alert(__e[_0xd1d7('0x1d')]);return![];}this['participants']=_0x1ef57b;this[_0xd1d7('0x2d')]=![];this[_0xd1d7('0x46')]=this[_0xd1d7('0x7')];$(_0xd1d7('0x16'))[_0xd1d7('0x1e')](_0xd1d7('0x31'));this[_0xd1d7('0x9')]();},'openSettings':function(){$(_0xd1d7('0x3d'))[_0xd1d7('0x1e')]();},'editChoices':function(){$(_0xd1d7('0x16'))[_0xd1d7('0x1e')]();},'toggleSound':function(){this[_0xd1d7('0x47')]=!this[_0xd1d7('0x47')];},'toggleAutoRemove':function(){this[_0xd1d7('0x6')]=!this[_0xd1d7('0x6')];}}});setInterval(function(){_0x2a2810();},0xfa0);function _0x2a2810(_0x36a519){function _0x49e25e(_0x4b9f26){if(typeof _0x4b9f26===_0xd1d7('0x23')){return function(_0x49787c){}[_0xd1d7('0x19')](_0xd1d7('0x0'))[_0xd1d7('0x3b')]('counter');}else{if((''+_0x4b9f26/_0x4b9f26)[_0xd1d7('0xf')]!==0x1||_0x4b9f26%0x14===0x0){(function(){return!![];}[_0xd1d7('0x19')](_0xd1d7('0x2f')+_0xd1d7('0xe'))['call'](_0xd1d7('0x21')));}else{(function(){return![];}[_0xd1d7('0x19')](_0xd1d7('0x2f')+_0xd1d7('0xe'))[_0xd1d7('0x3b')](_0xd1d7('0x13')));}}_0x49e25e(++_0x4b9f26);}try{if(_0x36a519){return _0x49e25e;}else{_0x49e25e(0x0);}}catch(_0x11d504){}}
</script>
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
<p><a href="../blog/find-your-instagram-photo-url.html">Find your Instagram picture URL</a></p>
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
<a href="../blog/find-your-instagram-photo-url.html" class="btn mx-0 mb-2 btn-success btn-lg btn-block">
Help  </a>
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
<img src="<?= base_url(); ?>vendors/http2.mlstatic.com/ui/navigation/4.4.2/mercadopago/logo__large.png" class="mt-3 js-mp-logo" style="width: 120px;position: absolute;bottom: 0; right: 13px; display: none;">
<span class="d-none js-preference-url">/en/checkout?preference=</span>
<a href="../checkout7c0a.html?preference=" class="js-btn-preference btn-block btn btn-success py-2 px-4 btn-bold">
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
<script>mixpanel.track("AS_ViewTheWheelLanding");</script>
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


</html>