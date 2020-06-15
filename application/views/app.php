
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AppSorteos</title>
<meta name="description" content="Hacé Sorteos para Instagram con nuestra App, online y gratis. Elegí un comentario ganador de tus fotos de Instagram.">
<link href="/isologo.ico" type="image/x-icon" rel="icon" />
<link href="/isologo.ico" type="image/x-icon" rel="shortcut icon" />
<link href="/favicon.ico" type="image/x-icon" rel="icon" /><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon" /> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link rel="stylesheet" href="/css/style.css?1590497493" />
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Serif:700" rel="stylesheet">
<link rel="stylesheet" href="/font/asicons-v1.0/style.css?1588070804" />
<meta property="og:title" content="Hace Sorteos para Instagram Online y Gratis" />
<meta property="og:description" content="Hace Sorteos para Instagram Gratis online y gratis con nuestra App!" />
<meta property="og:url" content="https://app-sorteos.com/" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://app-sorteos.com/img/socialshare.jpg" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:title" content="Hace Sorteos para Instagram Online y Gratis">
<meta property="twitter:description" content="Hace Sorteos para Instagram Gratis online y gratis con nuestra App!">
<meta property="twitter:image" content="https://app-sorteos.com/img/socialshare.jpg">
<script src="/js/adsbygoogle.js"></script>
<script src="https://browser.sentry-cdn.com/5.15.5/bundle.min.js" integrity="sha384-wF7Jc4ZlWVxe/L8Ji3hOIBeTgo/HwFuaeEfjGmS3EXAG7Y+7Kjjr91gJpJtr+PAT" crossorigin="anonymous"></script>
</head>
<body class="app">
<script>
        (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<div class="main">
<div id="app" v-cloak>
<button id="startButton" class="d-none"></button>
<button id="stopButton" class="d-none"></button>
<button @click="toggleFullScreen" class="btn d-none btn-ligth btn-fullscreen gradient2">
<i class="fas fa-expand mr-2"></i> {{$t('livemode')}}
</button>

<div class="container" style="position: relative;">
<div class="row justify-content-center">
<div class="col-12">
<div class="text-center mb-3 mt-4">
<a href="/" target="_blank">
<img src="/img/logo2.png" width="180" class="mb-2 laogo-top">
</a>
</div>
</div>
<div class="col-12 col-md-7 col-lg-5" v-if="step===-1">
<div class="card borderless rounded-2">
<div class="card-body py-3 p-md-5">
<div class="text-center">
<img src="/img/svg/undraw_alert.svg" alt="" width="100" class="mb-3" />
<h4 class="mb-2">{{ $t('addblocker.title') }}</h4>
<p class="text-secondary"> <span v-html="$t('addblocker.message')"></span> <strong>{{free_plan.currency}} {{free_plan.price}}</strong></p>
<div class="buttons d-flex mt-5 w-100 justify-content-center" style="height: 50px;">
<button @click="refreshApp()" class="btn btn-outline-secondary px-4 btn-blocak">
{{ $t('addblocker.refresh') }}
</button>
<button @click="goToCheckout()" style="max-width: 400px;" class="btn btn-success mt-0 ml-3 btn-block" @click="startFinal">
AppSorteos <strong>PRO</strong>
</button>
</div>
<div class="d-flex">
<div class="d-flex justify-content-center flex-column mt-4 w-100" style="font-size: 14px">
<span class="green mb-2"><i class="fas fa-check mr-2"></i> {{ $t('addblocker.feature1') }}</span>
<span class="green"><i class="fas fa-check mr-2"></i> <span v-html="$t('addblocker.feature2')"></span></span>
</div>
</div>
</div>
</div>
</div> </div>
<div class="col-12 col-md-7 col-lg-7" v-if="step===1111">
<div class="card borderless rounded-2 gradient2">
<div class="card-body py-3 p-md-5">
<div class="row influencer-card">
<div class="col-12 mb-3 d-none">
<div class="text-center">
<h3 class="text-white">{{ $t('loadingComments2') }}</h3>
</div>
</div>
<div class="col-12 col-sm-5">
<img :src="thumb" class="influencer-card__img">
</div>
<div class="col-12 col-sm-7 influencer-card__content text-center">
<h4 class="text-white mb-3">{{ author }}</h4>
<div class="small text-light influencer-card__title">{{ title }}</div>
<div class="spinner-border text-warning mt-4 mb-4" role="status">
<span class="sr-only">Loading...</span>
</div>
<h4 class="text-white "><i class="fa fa-comments mr-2"></i> {{ numberWithCommas(comments_count) }}</h4>
<div class="text-white small mt-3"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4d7cbd4cbd6d0c1e4c5d4d489d7cbd6d0c1cbd78ac7cbc9">[email&#160;protected]</a></div>
</div>
</div>
</div>
</div> </div>
<div class="col-12 col-md-7 col-lg-5" v-if="step!==-1 && step!==1111">
<div class="card borderless rounded-2" v-if="step===99">
<div class="card-body py-3 p-md-5">
<div class="text-center">
<i class="fas fa-exclamation-triangle mb-4 mt-2" style="font-size: 33px; color:rgb(236, 201, 33);"></i>
<h4>{{$t('demoTitle')}}</h4>
<p class="" style="color: rgb(177, 177, 177);">{{$t('demoText')}}</p>
<button class="btn btn-light btn-block mt-5" @click="startDemo">{{$t('startDemo')}}</button>
<button class="btn btn-success btn-block mt-2" @click="startFinal">{{$t('startGive')}}</button>
</div>
</div>
</div>
<div class="card borderless rounded-2" v-if="step===98">
<div class="card-body py-3 p-md-5">
<div class="text-center">
<i class="fas fa-check mb-4 mt-2" style="font-size: 45px; color:#a7cb18"></i>
<h4 class="mt-1">{{$t('demoCompleteTitle')}}</h4>
<p class="mt-3" style="color: rgb(177, 177, 177);">{{$t('demoCompleteText')}}</p>
<button class="btn btn-light btn-block mt-5" @click="startAgain">{{$t('startAgain')}}</button>
</div>
</div>
</div>

<div class="card borderless rounded-2" v-if="fetchErrorCount===100">
<div class="card-body py-5">
<div class="text-center">
<i class="fas fa-exclamation-triangle mb-4 mt-2" style="font-size: 33px; color: #f783ac;"></i>
<p class="" style="color: #ef276e;">{{$t('apiErrorLimit')}}</p>
<a href="/" class="btn btn-primary mt-4">{{$t('tryAgain')}}</a>
</div>
</div>
</div>

<div class="card borderless gradient2 rounded-2" v-if="step===77">
<div class="card-body py-3 p-md-5" v-if="!query.post">
<div class="text-center mb-4">
<h3 class="text-white mb-1">{{$t('multiPostTitle')}}</h3>
<p class="text-white small">{{ $t('multiPostSubTitle')}}</p>
</div>
<div class="flex-scroll-wrapper">
<i v-if="posts.length>3" @click="__scrollPrev()" class="icon icon-prev icon-chevron-left"></i>
<div class="flex-scroll" :class="{'justify-content-center': posts.length<3}">
<div class="user-preview" v-for="(post, index) in posts">
<img class="post-img" :src="post.thumbnail_url" />
<img class="user-img" :src="post.profile_picture" />
<span>{{ post.username }}</span>
</div>
</div>
<i v-if="posts.length>3" @click="__scrollNext()" class="icon icon-next icon-chevron-right"></i>
</div>
<div class="text-white text-center mt-3 total_comments" v-if="comments_count">
<i class="icon-comments-alt mr-2"></i> {{ numberWithCommas(comments_count) }}
</div>
<div class="text-white text-center mt-3 total_comments" v-else>
<div class="spinner-border text-light" role="status">
<span class="sr-only">Loading...</span>
</div>
</div>
<button class="btn btn-success btn-lg btn-block mt-2" @click="startMulti">{{$t('startGive')}}</button>
</div>
<div class="card-body py-4 p-md-5 text-center" v-else>
<div class=" mb-4">
<h3 class="text-white mb-1">{{$t('loadingComments2')}}</h3>
<p class="text-white small">{{$t('doNotReload')}}</p>
</div>
<div class="post-preview">
<img :src="query.post.thumbnail_url" />
<span><i class="icon-comments-alt"></i> {{ numberWithCommas(query.post.comments_count) }}</span>
</div>
<div class="custom-progress progress mt-4">
<div :class="{'notransition': query.progress===0}" class="progress-bar progress-bar-striped progress-bar-animated" :style="{width: query.progress + '%'}"></div>
</div>
<div class="text-white">
{{ query.i }} {{$t('of')}} {{ posts.length}}
</div>
</div>
</div>
<div class="card borderless gradient2 rounded-2" v-if="step===76">
<div class="card-body py-4 p-md-5 text-center">
<div class=" mb-4">
<h3 class="text-white mb-1">{{$t('verifying')}}</h3>
<p class="text-white small">{{ $t('followUsOnIG') }}</p>
</div>
<div class="custom-progress progress mt-4">
<div class="progress-bar progress-bar-striped progress-bar-animated" :style="{width: verifying + '%'}"></div>
</div>
</div>
</div>
<div class="card borderless gradient2 rounded-2" v-if="step===78">
<div class="card-body py-4 p-md-5 text-center">
<div class=" mb-4">
<h3 class="text-white mb-1">{{ $t('allReady') }}</h3>
<p class="text-white small">{{ $t('followUsOnIG') }}</p>
</div>
<button class="btn btn-lg btn-outline-light btn-block mt-5" @click="startDemo">{{$t('startDemo')}}</button>
<button class="btn btn-lg btn-success btn-block mt-3" @click="startFinal">{{$t('startGive')}}</button>
<div class="mt-3">
<button type="button" data-toggle="modal" data-target="#helpModal" class="btn btn-link" style="position: relative; top: 10px;">
<i class="icon-info mr-2"></i> {{$t('moreInformation')}}
</button>
</div>
</div>
</div>
<sweepstakes-loader :type="type" v-if="step===1 && type!=='random-name' && comments_count>0 && fetchErrorCount<100" :amount="comments.length" :total="comments_count" :c="params.c" :s="params.s" :cached="isPremium"></sweepstakes-loader>


<div v-if="step===2">

<div class="card borderless gradient2 small rounded-2 mb-4 mt-3">
<div class="options-btn" v-on:click="optionsOpen=true; filtersApplied=false;">
<i class="fas fa-tasks mr-2"></i>{{ $t('options') }}
</div>
<div class="card-body py-3 px-4" v-if="optionsOpen" style="border-top: 1px solid rgba(255,255,255,.2);padding-right: 30px !important;">
<div class="d-flex flex-column justify-content-center align-items-center pt-0 pb-0">
<form class="mt-0 mb-0" style="width: 100%;">
<div class="row">
<div class="col-12">
<div class="form-row mt-3">
<div class="col-8 d-flex align-items-center">
<label class="white-label"># {{ $t('winners') }}</label>
</div>
<div class="col-4 justify-content-end d-flex align-items-center">
<div class="winners-count">
<input class="form-control" type="number" min="1" max="15" v-model="winnersCount" />
<i class="fas fa-chevron-up" v-on:click="winnerUp" :class="{disabled: winnersCount>=maxWinners}"></i>
<i class="fas fa-chevron-down" v-on:click="winnerDown" :class="{disabled: winnersCount<=minWinners}"></i>
</div>
</div>
</div>
</div>
<div class="col-12" v-if="type!=='twitter'">
<div class="form-row mt-3">
<div class="col-8 d-flex align-items-center">
<label class="white-label">{{ $t('filterDuplicates')}}</label>
</div>
<div class="col-4 justify-content-end d-flex align-items-center switcher">
<label class="switch">
<input type="checkbox" v-model="filterDuplicates">
<span class="slider round"></span>
</label>
<span class="value">{{ (filterDuplicates) ? $t('yes') : $t('no') }}</span>
</div>
</div>
</div>
<div class="col-12" v-if="type!=='random-name' && type!=='twitter'">
<div class="form-row mt-3">
<div class="col-8 d-flex align-items-center">
<label class="white-label">{{$t('filter_by_mention_count')}}</label>
</div>
<div class="col-4 justify-content-end d-flex align-items-center switcher">
<label class="switch">
<input type="checkbox" v-model="filter_by_mentions_count">
<span class="slider round"></span>
</label>
<span class="value">{{ (filter_by_mentions_count) ? $t('yes') : $t('no') }}</span>
</div>
</div>
</div>
<div class="col-12">
<div class="form-group mt-3 borderead mb-5" v-if="filter_by_mentions_count">
<select class="form-control form-control-lg" v-model="filter_mentions_count">
<option :value="1">Min 1 {{$t('mention')}}</option>
<option :value="2">Min 2 {{$t('mentions')}}</option>
<option :value="3">Min 3 {{$t('mentions')}}</option>
<option :value="4">Min 4 {{$t('mentions')}}</option>
<option :value="5">Min 5 {{$t('mentions')}}</option>
</select>
</div>
</div>
<div class="col-12" v-if="type!=='random-name' && type!=='twitter'">
<div class="form-row mt-3">
<div class="col-8 d-flex align-items-center">
<label class="white-label">{{$t('filter_by_hashtag')}}</label>
</div>
<div class="col-4 justify-content-end d-flex align-items-center switcher">
<label class="switch">
<input type="checkbox" v-model="filter_by_hashtag">
<span class="slider round"></span>
</label>
<span class="value">{{ (filter_by_hashtag) ? $t('yes') : $t('no') }}</span>
</div>
</div>
</div>
<div class="col-12">
<div class="form-group mt-3 mb-3 bordeared" v-if="filter_by_hashtag">
<input type="text" class="form-control" v-model="filter_hashtag" :placeholder="$t('placeholders.write_hashtag')">
 </div>
</div>
<div class="col-12" v-if="type!=='random-name' && type!=='twitter'">
<div class="form-row mt-3">
<div class="col-8 d-flex align-items-center">
<label class="white-label">{{$t('filter_by_mention')}}</label>
</div>
<div class="col-4 justify-content-end d-flex align-items-center switcher">
<label class="switch">
<input type="checkbox" v-model="filter_by_mention">
<span class="slider round"></span>
</label>
<span class="value">{{ (filter_by_mention) ? $t('yes') : $t('no') }}</span>
</div>
</div>
</div>
<div class="col-12">
<div class="form-group mt-3 mb-3 bordeared" v-if="filter_by_mention">
<input type="text" class="form-control" v-model="filter_mention" :placeholder="$t('placeholders.write_mention')">
</div>
</div>
<div class="col-12">
<button type="button" class="btn mt-5 btn-block btn-success" @click="applyFilters(); filtersApplied=true;">
<strong>{{$t('confirm')}}</strong>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
<button v-if="filtersApplied" :disabled="filteredList.length<2" v-on:click="startCountdown" type="button" class="btn btn-lga btn-success pt-2 pb-2 btn-cta-start">
<strong v-if="filteredList.length>=2">{{ $t('callToAction') }}</strong>
<strong v-else>{{ $t('not_enough_comments') }}</strong>
</button>
<p class="text-center confirm-text" v-else>{{$t('confirm_text')}}</p>

<div class="card borderless small" v-if="comments.length">
<div class="card-header gradient2">
{{$t('participants')}}
<div class="shuffle-icon" @click="shuffleComments()" data-toggle="tooltip" data-placement="top" :title="$t('shuffle')">

<i class="fas fa-sync-alt" :class="{'fa-spin': shuffling }"></i>
</div>
<div class="comments_stats" v-if="!posts_count">

<span v-if="comments_count && comments.length > comments_count">{{$t('totals')}} <i>{{ numberWithCommas(comments.length) }}</i></span>
<span v-else>{{$t('totals')}} <i>{{(comments_count) ? numberWithCommas(comments_count) : numberWithCommas(comments.length) }}</i></span>

<span style="flex: 1;">
<span class="d-none">{{$t('excluded')}} <i>{{comments.length - filteredList.length}}</i></span>
</span>
</div>
<div class="comments_stats" v-else>
<span>{{$t('totals')}} <i>{{ numberWithCommas(comments_count) }}</i></span>
<span style="flex: 1; text-align: right;">{{$t('from')}} <i>{{ posts_count}}</i> POSTS</span>
</div>
</div>
<ul class="list-group list-group-flush" v-if="filteredList.length">
<div class="list-group-overlay" v-if="shuffling"></div>
<li class="list-group-item comment" v-for="user in filteredList.slice(pagination.page, pagination.count)">
<img class="comment__img" :src="user.picture" alt="" v-if="user.picture">
<span class="comment__user"><strong>{{ user.name }}</strong></span>
<span class="comment__text">{{ user.comment }}</span>
</li>
</ul>
<div class="card-body text-center" v-else>
<h5><strong>{{$t('no_comments')}}</strong></h5>
<p>{{$t('check_filters')}}</p>
</div>
<div class="text-center m-4" v-if="paginationPending>0">
<button type="button" class="btn btn-outline-info btn-block" v-on:click="pagination.count+=20">{{$t('load_more')}}</button>


<small></small>
</div>
<div class="text-center my-4" v-if="testRun && !paginationPending>0 && comments_count > 40">
<p class="mb-0">{{$t('testRunComments')}}</p>
</div>
</div>
</div>


<div class="counter" v-if="step===3">
<div class="countdown">
<div id="countdown-number">{{countdown}}</div>
<svg class="circular">
<circle class="path" cx="50" cy="50" r="44" fill="none" stroke-width="6" stroke-miterlimit="10" />
</svg>
</div>
</div>


<div v-if="step===4">
<div class="text-center">
<h4 class="mb-3 mt-4 title">{{$t('winners')}}</h4>
</div>
<winner class="cwi" v-for="(user, index) in currentWinners" @delete="deleteWinner" :index="index" :total="currentWinners.length" :key="index + '_' + user.id" :data="user">
</winner>
<div class="card small borderless rounded-2 d-none">
<div class="card-header gradient2"> <img src="/img/trophy.png" style="width: 29px;margin-right: 11px;" alt="">{{$t('winners')}}</div>
<ul class="list-group list-group-flush">
<li class="list-group-item hoverable comment lga" v-for="(user, index) in currentWinners">

<div class="comment__user big">
<strong>{{ (user.username) ? user.username : user.name }}</strong>
</div>
<span class="comment__text" v-if="user.comment" v-html="getRichCommentText(user.comment)"></span>
<div class="comment__options">
<button type="button" class="btn btn-link">
<i class="fas fa-exchange-alt"></i> REEMPLAZAR
</button>
<a class="btn btn-link" target="_blank" :href="'//instagram.com/'+user.username">
<i class="fas fa-external-link-alt"></i> VER PERFIL
</a>
</div>
<button type="button" class="btn delete-btn" v-on:click="deleteWinner(index, user)"><i class="far fa-times-circle"></i></button>
</li>
</ul>
</div>
<div class="notice mt-3 mb-3" role="alert" style="font-size: 13px;">
<span>{{$t('winners_delete_msg')}}</span>
</div>
<div class="d-flex justify-content-center mb-5">
<button :disabled="saving" v-on:click="save" type="button" class="btn-cta-start btn btn-lga btn-success pt-2 pb-2">
<span v-if="!saving"><i class="far fa-calendar-check"></i> <strong>{{ $t('finish') }}</strong></span>
<span v-else>{{ $t('saving') }}..</span>
</button>
</div>
<div class="card borderless rounded-2" v-if="comments.length && false">
<div class="card-header">
{{$t('substitutes')}}
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item comment" v-for="(user, index) in winners.slice(winnersCount, 10)">
<img class="comment__img" :src="user.profile_pic_url" v-if="user.profile_pic_url">
<span class="comment__user"><strong>{{ user.name }}</strong></span>
<span class="comment__text" v-if="user.comment" v-html="getRichCommentText(user.comment)"></span>
<span class="comment__position">{{index+1}}</span>
</li>
</ul>
</div>
</div>

</div>
<div class="col-12 mt-5 d-flex justify-content-center" :class="{'mb-4': !filtersApplied, 'mb-5': filtersApplied}" v-if="step!==3">
<div class="follow_widget">
<span class="mr-2">
<img src="/img/ig_profile_pic.jpg" width="40" alt="">
</span>
<div class="d-flex flex-column">
<strong>app_sorteos_ok</strong>
<small>46,4k {{ $t('followers') }}</small>
</div>
<div class="ml-auto">
 <a target="_blank" href="https://www.instagram.com/app_sorteos_ok/">{{ $t('follow')}}</a>
</div>
</div>
</div>
</div>
</div>
<div id="confirmationModal" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document" v-if="toDelete">
<div class="modal-content">
<div class="modal-body p-4">
<h5 class="mb-3">Reemplazar</h5>
<p>Quieres eliminar a <strong>{{toDelete.user.name}}</strong> de la lista de ganadores?</p>
<textarea name="rason" v-model="toDelete.reason" :placeholder="$t('reason')" rows="3" class="form-control"></textarea>
</div>
<div class="modal-footer">
<button :disabled="!toDelete.reason" v-on:click="confirmDelete" type="button" class="btn btn-warning pt-2 pb-2">
<strong>Eliminar</strong>
</button>
</div>
</div>
</div>
</div>
<div id="helpModal" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body p-4">
<h5 class="mb-3">{{$t('help_title')}}</h5>
<p class="mt-3" v-html="$t('help_body')"></p>
<p v-html="$t('help_body2')"></p>
<p v-html="$t('help_body3')"></p>
<div class="mt-4">
<button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal">
<strong>Ok</strong>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
<canvas id="canvas"></canvas>
<style>
#canvas {
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  zindex: 1;
  pointer-events: none;
}
</style>
<template type="text/x-template" id="template__cwi">
<div class="cwi" :class="{'cwi--card': total===1}">
<img v-if="data.picture" class="cwi__picture" :src="data.picture">
<span class="cwi__name">{{ (data.username) ? data.username : data.name }}</span>
<i v-if="!open" class="cwi__arrow fas fa-chevron-right" v-on:click="open=!open"></i>
<i v-else class="cwi__arrow fas fa-chevron-down" v-on:click="open=!open"></i>
<div class="speech-bubble" v-if="open && data.comment" v-html="getRichCommentText(data.comment)"></div>
<div v-if="open && !data.comment" class="mt-4"></div>
<div class="text-center" v-if="open">
<button class="btn btn-light btn-block btn-replace" v-on:click="onDelete">
<i class="fas fa-exchange-alt mr-2"></i> {{$t('replace')}}
</button>
</div>
</div>
</template>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
	var _sharedData = {
		lang: 'en',
		env: 'prod',
		app: {"type":"instagram","url":"https:\/\/www.instagram.com\/p\/B7nuPrmJsys\/","is_free_trial":false,"is_cus":false,"media_id":"2226951928500636844_6056172851","author":"yusuftriwibowo_","comments_count":14,"title":"","thumb":"https:\/\/scontent-atl3-1.cdninstagram.com\/v\/t51.2885-15\/e35\/81226182_206373037060618_2094016199969451763_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=454lOdJbmRYAX_icKQC&oh=50eab031efda0a84979f197043e36726&oe=5F044E12","premium":false,"followers":0,"code":"aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9wL0I3bnVQcm1Kc3lzLw==","checkout_url":"\/en\/checkout?code=aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9wL0I3bnVQcm1Kc3lzLw==","free_plan":{"plan":"1000","max_comments":1000,"price":1.99,"currency":"USD"}},
		tokens: ["V7X0I084GE","BZARW75NQ3","RKO2DM41P8"],
	};
</script>
<style>
.options-btn{font-size:23px;text-align:center;color:#fff;font-weight:700;padding:10px;cursor:pointer}
.options-btn:hover{opacity:.9}
.white-label{color:#fff;font-size:17px;font-weight:300;margin-bottom:0}
.confirm-text{font-size:12px;position:relative;top:-13px}
.cwi{border-radius:3px;box-shadow:0 0 3px rgba(0,0,0,.1);background-color:#FFF;padding:10px;margin:10px;position:relative}
.cwi__picture{width:42px;height:42px;object-fit:cover;object-position:center;border-radius:50%}
.cwi__name{font-weight:700;font-size:16px;margin-left:14px}
.cwi__arrow{position:absolute;right:15px;top:17px;color:#ccc;font-size:26px;cursor:pointer}
.cwi__arrow:hover{color:#777;cursor:pointer}
.cwi--card{display:flex;flex-direction:column;align-items:center;padding-bottom:22px;padding-top:27px}
.cwi--card .cwi__picture{width:100px;height:100px}
.cwi--card .cwi__name{margin-top:16px;margin-left:0;font-size:23px}
.cwi--card .speech-bubble{width:75%!important}
.speech-bubble{position:relative;background:#f5f5f5;border-radius:.4em;margin:10px 15px;padding:20px 15px;font-size:13px;margin-bottom:24px}
.speech-bubble:after{content:'';position:absolute;top:0;left:70px;width:0;height:0;border:7px solid transparent;border-bottom-color:#f5f5f5;border-top:0;margin-left:-7px;margin-top:-7px}
.btn-replace{font-weight:700}
.btn-replace > i{color:#e43d3d}
.title{color:#b4b8c5;font-weight:400;letter-spacing:0}
.btn-light{color:#212529;background-color:#e5e5e5;border-color:#cacaca}

/* New */
.user-preview{display:flex;position:relative;flex-direction:column;align-items:center;margin:8px}
.user-preview img.post-img{border-radius:6px;width:150px;height:140px;object-fit:cover;object-position:center;box-shadow:0 0 6px 0 #923692}
.user-preview img.user-img{border-radius:50%;position:absolute;bottom:31px;left:50%;border:2px solid #fff;width:46px;height:46px;object-fit:cover;object-position:center;margin-left:-23px}
.user-preview span,.post-preview span{font-weight:700;background:#fff;padding:3px 13px;border-radius:21px;font-size:13px;font-weight:normal;position:relative;top:-13px;color:#973793}
.total_comments{font-size:20px;font-weight:700}
.post-preview{display:flex;flex-direction:column;justify-content:center;align-items:center;color:#fff}
.post-preview img{width:200px;height:200px;border-radius:10px;object-fit:cover;object-position:center}
.custom-progress{height:5px;width:80%;margin:10px auto}
.custom-progress .progress-bar{background-color:#d6b15d;background-color:#c1bc1b}
.progress-bar.notransition{-webkit-transition:none!important;-moz-transition:none!important;-o-transition:none!important;-ms-transition:none!important;transition:none!important}
.btn-lg.btn-outline-light{border-radius:.3em!important;padding:10px 24px!important}
.flex-scroll-wrapper{position:relative}
.flex-scroll-wrapper .icon{position:absolute;font-size:64px;top:40px;color:#bd4099}
.flex-scroll-wrapper .icon:hover{cursor:pointer;opacity:.7}
.flex-scroll-wrapper .icon.icon-prev{left:-139px}
.flex-scroll-wrapper .icon.icon-next{right:-166px}
.flex-scroll{display:flex;overflow-x:scroll;-webkit-overflow-scrolling:touch;margin-left:-48px;margin-right:-48px;margin-left:-74px;margin-right:-74px;scrollbar-width:none;-ms-overflow-style:none}
.flex-scroll::-webkit-scrollbar{display:none}
@media (max-width: 768px) {
.flex-scroll{margin-left:-35px;margin-right:-30px}
}
.btn-link{font-weight:400;color:#fff}
.follow_widget{display:flex;flex-direction:row;border:1px solid rgba(0,0,0,.1);border-radius:6px;max-width:360px;min-width:350px;padding:8px 10px;align-items:center;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif!important}
.follow_widget img{border-radius:50%}
.follow_widget strong{font-size:14px}
.follow_widget small{opacity:.65}
.follow_widget a{background-color:#3897f0!important;border-radius:3px!important;-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important;font-weight:600!important;margin-left:10px!important;padding:6px 14px!important;text-decoration:none!important;text-decoration:none!important;color:#fff;font-size:14px;font-weight:500!important}

.benefits {
	display: flex;
	flex-direction: column;
	color: #3cb568;
	color: #3baf65;
	font-weight: 300;
	font-size: 18px;
	margin-top: 25px;
}
</style>
<style>
	.influencer-card {}
	.influencer-card__img {
		width: 100%;
		height: 300px;
		object-fit: cover;
		object-position: center;
		border-radius: 10px;
	}
	.influencer-card__content {
		flex: 1;
	}
	.influencer-card__title {
		max-height: 98px;
		overflow-y: hidden;
	}
</style>
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
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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

<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59209fdf8bb355e5"></script>
<template id="vue-app-settings">
<div>

<div v-if="list.length && !running">
<div class="text-center">
<h2 class="mb-0">Tu sorteo esta listo.</h2>
</div>
<div class="card rounded-2 mb-5 mt-3">
<div class="card-header">
Opciones
</div>
<div class="card-body p-4">
<div class="d-flex flex-column justify-content-center align-items-center pt-0 pb-0">
<form class="mt-0 mb-0" style="width: 100%;">
<div class="row">
<div class="col-12 col-sm-4">
<div class="form-group">
<label for="exampleInputEmail1"># Ganadores</label>
<select v-model="winnersCount" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label for="exampleInputPassword1"># Suplentes</label>
<select v-model="suplentesCount" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="form-group">
<label for="exampleInputPassword1">FILTRAR DUPLICADOS</label>
<select v-model="filterDuplicates" class="form-control">
<option value="1">SI</option>
<option value="2">NO</option>
</select>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="card rounded-2 mb-5" v-if="running">
<div class="card-body p-5 text-center">
<div class="d-flexa">
<h1>{{percent}}%</h1>
<h3 class="mt-3 m-2 mb-5">Buscando ganadores..</h3>
<div class="progress" style="height: 26px;">
<div class="progress-bar progress-bar-striped" role="progressbar" :style="{'width': percent + '%'}"></div>
</div>
</div>
</div>
</div>
</div>
</template>
<style>
	.users-count {
		position: absolute;top: -30px; left: 5px;
	}
	.form-group label {
		display: inline-block;
		margin-bottom: 3px;
		font-size: 12px;
		text-transform: uppercase;
		color: #555;
	}
	.form-group select {
		/*max-width: 200px;*/
	}
	.form-control {
		background-color: #f5f5f5;
		border:0;
	}
	.form-text { font-size: 11px;  }
</style> <template id="vue-sweepstakes-progress-template">
<div class="card rounded-2 mb-5">
<div class="card-body p-5 text-center">
<div class="d-flexa">
<h1>{{percent}}%</h1>
<h3 class="mt-3 m-2 mb-5" v-if="winner && running">Buscando ganadores..</h3>
<div class="progress" style="height: 26px;">
<div class="progress-bar progress-bar-striped" role="progressbar" :style="{'width': percent + '%'}"></div>
</div>
</div>
</div>
</div>
</template> <template id="vue-sweepstakes-results-template">
<div id="testResultsModal" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body p-5" v-if="data.winners">
<h4 class="mb-3">Resultados de la Prueba</h4>
<div class="mt-3 mb-4 alert alert-warning mt-3" role="alert">
<strong>Atencion</strong> Estos resultados son de prueba, no tienen validez.
</div>
<div class="d-flex">
<div class="flex-1" style="width: 50%">
<h3><i class="fa fa trophy"></i> Ganadores <i>({{data.winners.length}})</i></h3>
<ul class="list-unstyled pr-3">
<li v-for="(winner, index) in data.winners">
<div class="d-flex user-card">
<span class="position">{{index+1}}</span>
<div v-if="!winner.user">
{{winner}}
</div>
<div v-if="winner.user">
<img class="mr-3 winner-picturea rounded-circle" width="50" :src="winner.user.profile_pic_url">
</div>
<div v-if="winner.user">
<div><strong>{{winner.user.full_name}}</strong></div>
@{{ winner.user.username }}
</div>
</div>
</li>
</ul>
</div>
<div class="flex-1" style="width: 50%">
<h3>Suplentes <i>({{data.suplentes.length}})</i></h3>
<ul class="list-unstyled pl-3">
<li v-for="(winner, index) in data.suplentes">
<div class="d-flex user-card">
<span class="position">{{index+1}}</span>
<div v-if="!winner.user">
{{winner}}
</div>
<div v-if="winner.user">
<img class="mr-3 winner-picturea rounded-circle" width="50" :src="winner.user.profile_pic_url">
</div>
<div v-if="winner.user">
<div><strong>{{winner.user.full_name}}</strong></div>
@{{ winner.user.username }}
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary pt-2 pb-2" data-dismiss="modal"><strong>Listo</strong></button>
</div>
</div>
</div>
</div>
</template> <template id="vue-sweepstakes-confirmation-template">
<div id="confirmationModal" class="modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body p-4">
<h4 class="mb-3">Atención</h4>
<p>Estás por realizar el sorteo, el cual <strong>será definitivo</strong>. Si solo estas haciendo una prueba, utiliza la opcion "Hacer una prueba". En el cual el sorteo generado no tendrá validez alguna</p>
</div>
<div class="modal-footer">
<button type="button" v-on:click="confirm" class="btn btn-blocak btn-success pt-2 pb-2">
<strong>Si, hacer el sorteo</strong>
</button>
<button type="button" v-on:click="test" class="btn btn-blaock btn-warning pt-2 pb-2"><strong>Realizar una prueba</strong></button>
</div>
</div>
</div>
</div>
</template> <template id="vue-sweepstakes-loader-template">
<div class="card borderless rounded-2">
<div class="card-body p-4 p-sm-5">
<div class="d-flex flex-column justify-content-center align-items-center text-center">

<i class="fas fa-tasks text-success mb-2 mt-2" style="font-size: 33px;"></i>
<h4 class="mt-2 mb-3" v-if="!cached">{{$t('loadingComments')}}</h4>
<h4 class="mt-2 mb-3" v-else>{{$t('refreshingComments')}}</h4>
<div class="progress" style="width: 90%;">
<div v-if="!cached && type!=='instagram-multi-post'" class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" :style="{width: progress + '%'}" style="height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
<div v-else class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" :style="{width: refreshingProgress + '%'}" style="height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p v-if="!cached && type==='instagram'" class="mt-4 text-muted">
<span v-if="seconds>0">{{$t('timeLeft')}}: {{min_left}}m {{seconds_left}}s</span>
<span v-else>{{ $t('loadingBitLonger')}}</span>
</p>
<div class="mt-4" v-else></div>
<p class="text-muted small">{{$t('doNotReload')}}</p>
<p class="mt-4">{{$t('loadingCommentsText')}}</p>
</div>
</div>
</div>
</template>
<style>
	.progress-bar {
		transition: width 2s ease;
		background-color: #cd1791;
	}
</style> <script>Sentry.init({ dsn: 'https://f4e04e56871a43bfabe7f4f467fb2bbf@o398859.ingest.sentry.io/5255196' });</script>

<script src="/js/all.front.compiled.js?1591447855"></script>


<script src="/js/all.app.compiled.js?1591447855"></script>

</body>
</html>
