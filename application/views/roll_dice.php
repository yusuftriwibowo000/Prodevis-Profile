<!DOCTYPE html>
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
<h1>Roll Dice Online</h1>
<p class="lead mt-3">

</p>
</div>
<div class="container" id="dice-app" v-clock>
<div class="row">
<div class="col-12">
<div class="options d-flex justify-content-center">
<div class="d-flex align-items-center dices-number">
<span class="mr-3">Number of dices</span>
<select @change="refresh" class="form-control" v-model="quantity">
<option :value="n" v-for="(n,index) in maxQuantity">{{n}}</option>
</select>
</div>
<div class="d-flex align-items-center dices-number ml-3">
<span class="mr-3">Number of sides</span>
<select @change="refresh" class="form-control" v-model="faces">
<option v-if="n>1" :value="n" v-for="(n,index) in maxFaces">{{n}}</option>
</select>
</div>
</div>
</div>
<div class="col-12 mt-5 mb-2">
<div class="d-flex justify-content-center flex-wrap">
<div v-for="dice in dices" class="dice" :class="getClass(dice)">
<div v-if="faces<=6" v-for="(n,index) in dice" class="dot"></div>
<div class="number" v-if="faces>6">{{dice}}</div>
</div>
</div>
<span class="result-total" :class="{'hide': shaking || !rolled}">
Your result: <strong>{{ total }}</strong>
</span>
</div>
<div class="col-12 mt-3">
<div class="d-flex flex-column justify-content-center">
<div>
<button :disabled="shaking" class="btn btn-outline-light" @click="roll()">
Roll </button>
</div>
<small class="mt-3">(or press the space bar)</small>
</div>
</div>
</div>
</div>
</div>
<script type='text/javascript' src='../../../platform-api.sharethis.com/js/sharethis.js#property=5ea4443da10c1200152b4814&product=sticky-share-buttons&cms=sop' async='async'></script>
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-md-10 col-lg-8 mt-5">
<div class="blog-post circles-list">
<h2 class="blog-post__title">How this "<strong>Virtual Dice roller</strong>" works</h2>
<p class="mb-4">Roll the dice online with this great tool! It is very easy and totally free. If you want to play a game with dices and you realize that you have lost them, or if you want choose something at random, roll the dice and they will make the decision! You can select the number of dice to use and design your own dice, with the number of faces you want!</p>
<h2>What can I do with this <strong>roll dice online</strong></h2>
<p>This <strong>roll dice simulator</strong> is for whatever you want, for board games like monopoly, the game of life,snakes and ladder game and all those games where dices are used. You can also play generala game, the ten thousand, or any game you can think of. And you can also use them to choose at random in any activity.</p>
<h2>How to roll the dice online?</h2>
<p>Get the best of our <strong>app to roll dices online</strong>. Follow these steps to configure it as you like.</p>
<ol class="">
<li>You must generate the dice, choose how many faces you want your dice to be. They can be from 2 to 20 faces (these will be called <strong>d20</strong> to the one with twenty faces, <strong>d3</strong> to the one with three faces and so on)</li>
<li>You select the number of dices to use, you can use up to 20 dices in each roll!</li>
<li>You roll the dice totally free by pressing the button that says "roll", you can also use the space bar.</li>
<li>Once you have <strong>rolled the dices</strong>, the result will appear immediately</li>
</ol>
</div> </div>
</div>
</div>
<div class="container mt-5 d-none">
<div class="row justify-content-center">
<div class="col-12 col-md-9 col-lg-8">
<div class="blog-post">
<h2 class="blog-post__title">About <strong>App Sorteos</strong></h2>
<p>
<strong>App-Sorteos.com</strong> it's an online and free tool to create <strong>Instagram Giveaways, Sweepstakes, Contests and Promotions</strong>, allowing you to pick a random comment from your Instagram photo URL.</p>
<p>Just enter your Instagram Photo URL, and we will find all the comments for you. After that, you need to select the <i>number of winners</i>, and press the START button.</p>
<p>We DO NOT need access to your account credentials, just use our <a href="instagram-comment-picker.html">Instagram Giveaways Free App</a> with the post URL.</p>
<p>Now, you can create free <a href="youtube-giveaway.html">Youtube Giveaways, Sweepstakes, Contests and Promotions</a> with your videos, by choosing a random comment.</p>
<p>We CANNOT read comments from PRIVATE POST, yet.</p>
</div> </div>
</div>
</div> </div>
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
<script async src="<?= base_url(); ?>vendors/agead2.googlesyndication.com/pagead/js/f.txt"></script>
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
<script src="<?= base_url(); ?>vendors/js/all.front.compiled6a78.js?1591495844"></script>

<script>
var app=new Vue({el:"#dice-app",data:{rolled:!1,auth:!1,faces:6,shaking:!1,quantity:1,maxQuantity:20,maxFaces:20,dices:[]},created:function(){var i=this;this.randomize(),window.addEventListener("keydown",function(t){32===t.keyCode&&(t.preventDefault(),i.shaking||i.roll())})},computed:{total:function(){var i=0;return this.dices.forEach(function(t){i+=parseInt(t)}),i}},methods:{roll:function(t){if(this.shaking)return!1;this.rolled=!0,this.shaking=!0,this.interval=setInterval(this.randomize,100),setTimeout(this.stop,1200)},stop:function(){clearInterval(this.interval),this.shaking=!1},validate:function(){100<this.quantity&&(this.quantity=100),parseInt(this.faces)<2&&(this.faces=6)},refresh:function(){this.rolled=!1,this.randomize()},randomize:function(){var t=[];this.validate(),100<this.quantity&&(this.quantity=100);for(var i=0;i<this.quantity;i++)t.push(rando(1,parseInt(this.faces)));this.dices=t},getClass:function(t){var i={},a=this.faces<6?6:this.faces;return i["dice-"+t]=!0,i["d"+a]=!0,i.shake=this.shaking,i}}});
</script>

	<?php $this->load->view('modul template/footer'); ?>

	</script>
</body>


</html>