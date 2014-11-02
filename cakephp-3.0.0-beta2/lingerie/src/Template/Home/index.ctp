
	<!doctype html>
	<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
	<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
	<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
	<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
	<head>
			<meta charset="UTF-8">
			<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"UwYPVVRUGwAEVFNSAwg="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);</script><![endif]-->
			<title>Lingerie | Acheter lingerie, soutien-gorge, culotte sur Lemon Curve</title>
						
			<meta name="description" content="N°1 des sites de lingerie féminine. Lingerie et maillots de bain de marques pour tous les prix et dans toutes les tailles. LIVRAISONS ET RETOURS GRATUITS." />
			<meta name="keywords" content="Lemon Curve, Lingerie féminine, lingerie grandes marques, lingerie grandes tailles, maillots de bain, soutien-gorge, tanga, string, minimizer, abonnement de culottes, lingerie de nuit, nuisette, shapewear, lingerie sport, lingerie maternité " />
			<meta name="robots" content="index,follow" />
			
			<meta name="google-site-verification" content="IerzgHu0CaAJeeeGpw6I5SsWOWAmQ961suSlZFb7Qxs" />
			<link rel="icon" type="image/vnd.microsoft.icon" href="http://lemoncurve.com/img/favicon.ico" />
			<link rel="shortcut icon" type="image/x-icon" href="http://lemoncurve.com/img/favicon.ico" />

			<link rel="publisher" href="https://plus.google.com/109937761323260208910" />
			<script type="text/javascript">
				var baseDir = 'http://lemoncurve.com/';
				var static_token = '5cfdd82f14e1cc7fe3de59ff5abb8b05';
				var token = '23d66fa73b0c2120ca627ee4ef46cda9';
				var priceDisplayPrecision = 2;
				var priceDisplayMethod = 0;
				var roundMode = 2;
			</script>

			<meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
			<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->

			<link href="http://lemoncurve.com/themes/lemonchic/css/knacss.css" rel="stylesheet" type="text/css" media="" />
												<link href="/themes/lemonchic/css/global.css?v=20" rel="stylesheet" type="text/css" media="all" />
							
																										

			<!--<link href="http://lemoncurve.com/themes/lemonchic/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />-->
			<!--[if lte IE 7]>
			<link rel="stylesheet" href="http://lemoncurve.com/themes/lemonchic/css/ie7.css" type="text/css" media="screen" />
			<![endif]-->

			
												<script type="text/javascript" src="/js/jquery/jquery-1.4.4.min.js"></script>
									<script type="text/javascript" src="/js/jquery/jquery.easing.1.3.js"></script>
									<script type="text/javascript" src="/js/tools.js"></script>
									<script type="text/javascript" src="/modules/be2bill/js/fo_be2bill.js"></script>
							
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>

			<script type="text/javascript" src="http://lemoncurve.com/themes/lemonchic/js/pinit.js"></script>
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<script type="text/javascript" src="http://lemoncurve.com/themes/lemonchic/js/jquery.colorbox-min.js"></script>
			<script type="text/javascript" src="http://lemoncurve.com/themes/lemonchic/js/core.js?v=10"></script>

			<meta property='og:locale' content='fr_FR'/>
			<meta property="og:site_name" content="Lemon Curve" />
			<meta property="og:title" content="Lingerie | Acheter lingerie, soutien-gorge, culotte sur Lemon Curve" />
				
			<meta property="og:description" content="Avec la plus grande offre de lingerie sur le web, Lemon Curve est LE grand magasin de la lingerie en ligne. lemoncurve.com" />

			<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-24071820-1']);
</script><script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>

		</head>

		<body id="index">

			
			<header role="banner">
				<div id="header">
					<div id="social" class="line">
							<div id="sLangage">
		<ul>
							<li class="active">FR</li>
							<li ><a href="http://lemoncurve.com/en/" title="English (English)">EN</a></li>
					</ul>
	</div>

						<div id="sInfo">
							<ul>
								<li><span class="hov_livraison"><img src="http://lemoncurve.com/themes/lemonchic/img/icones/livraison.jpg" alt="Livraison gratuite"> Livraison gratuite</span></li>
								<li><span class="hov_expedition"><img src="http://lemoncurve.com/themes/lemonchic/img/icones/expedition.jpg" alt="Exp&eacute;dition sous 24h"> Exp&eacute;dition sous 24h</span></li>
								<li><span class="hov_retour"><img src="http://lemoncurve.com/themes/lemonchic/img/icones/retour.jpg" alt="Retour offert"> Retour offert*</span></li>
								<li><a href="http://lemoncurve.com/contactez-nous"><img src="http://lemoncurve.com/themes/lemonchic/img/icones/telephone.jpg" alt="T&eacute;l&eacute;phone : 09 81 95 32 17"> 09 81 95 32 17</a></li>
							</ul>
						</div>
						
	<div id="sCart">
		<ul>
			<li id="showaccountnav" ><a href="http://lemoncurve.com/mon-compte">Mon compte</a>
							</li>
			<li><a href="http://lemoncurve.com/content/24-aide" title="Consulter l&#039;aide">Aide</a></li>
			<li id="header-cart"><a href='http://lemoncurve.com/commande'><img src="http://lemoncurve.com/themes/lemonchic/img/icones/panier.jpg" alt="Mon panier"> Mon panier (0)</a></li>
		</ul>
	</div>

	<div id="cart" class="hide">
		<div id="cart-content">

							<div class="cart-title"><p>Votre panier est vide</p></div>
			
		</div>
	</div>

					</div>

					<div id="lemonlook" class="line">
						<div id="lLogo">
							<a id="logo" href="http://lemoncurve.com/" title="LEMON CURVE - Le grand magasin de la lingerie">
								<img src="http://lemoncurve.com/themes/lemonchic/img/lemoncurve_logo.jpg" alt="Lemon Curve">
							</a>
																								<h1>N&deg;1 des sites de lingerie</h1>
																					</div>

						<div id="lSearch" class="hidetunnel">
															<form data-role="none" id="search" action="http://lemoncurve.com/search.php" method="get">
																<input data-role="none" type="text" placeholder="Rechercher..." name="search_query" >
									<input  data-role="none" style="display:none" type="submit" value="Rechercher">
								</form>
						</div>

					</div>
				</head>
			</header>

						﻿	<div id="bandeau_habillage" class="hidetunnel">
		
			</div>


			<div id="nav" class="w1020p hidetunnel">
				<div id="menu" class="line">
	<nav>
		<ul>
			<li><a class="menu_item" href="http://lemoncurve.com/2-lingerie" id="show_submenu1" title="Lingerie">Lingerie</a></li>
			<li><a class="menu_item" href="http://lemoncurve.com/3-maillots-de-bain" id="show_submenu2" title="Maillots de bain">Maillots</a></li>
			<li><a class="menu_item" href="http://lemoncurve.com/4-lingerie-nuit-loungewear" id="show_submenu3" title="Nuisette et lingerie de nuit">Nuit</a></li>
			<li><a class="menu_item" href="http://lemoncurve.com/43-collants-bas-lingerie" id="show_submenu7" title="Collants et bas">Collants</a></li>
			<li><a class="menu_item" id="show_submenu4">Marques</a></li>
			<li style="max-width: 190px;"><a href="http://lemoncurve.com/47-abonnement-culottes-tangas" title="Abonnements de culottes et tangas">Abonnements</a></li>
			<li><a href="http://lemoncurve.com/40-lingerie-promo" style="color: #d0006f;font-weight: bold;" title="Promos lingerie">Promos</a></li>
			<li><a class="menu_item" href="http://lemoncurve.com/lingerie-grande-taille" id="show_submenu6" title="Lingerie Grande Taille">Grandes tailles</a></li>
			<li id="lemag"><a style="display:block;" href="http://lemoncurve.com/blog/" title="Découvrir le blog" target="_blank">Le mag</a></li>
		</ul>
	</nav>
</div>

<div id="submenu" class="line">
	<!-- Lingerie -->
	<div class="menu_container line"  id="submenu1">
		<div class="w200p mr4 left">
			<span class="menu_title">
				<a href="http://lemoncurve.com/5-soutiens-gorge" title="Soutiens-gorge">Soutiens-gorge</a>
			</span>
			<ul>
				<li><a href="http://lemoncurve.com/11-lingerie-soutiens-gorge-push-up-ampliformes" title="Soutien-gorge push-up">Push-up</a></li>
				<li><a href="http://lemoncurve.com/9-lingerie-soutiens-gorge-corbeilles-balconnets" title="Soutien-gorge corbeilles et balconnets">Corbeilles et balconnets</a></li>
				<li><a href="http://lemoncurve.com/10-lingerie-soutiens-gorge-emboitants-cercles" title="Soutien-gorge emboitants">Emboitants</a></li>
				<li><a href="http://lemoncurve.com/13-lingerie-soutiens-gorge-triangles-sans-armatures" title="Soutien-gorge triangles et sans armatures">Triangles et sans armatures</a></li>
				<li><a href="http://lemoncurve.com/35-lingerie-soutiens-gorge-minimiseurs" title="Soutien-gorge minimiseurs">Soutiens-gorge minimiseurs</a></li>
				<li><a href="http://lemoncurve.com/12-lingerie-soutiens-gorge-bandeaux-bretelles-amovibles" title="Soutien-gorge bandeaux et bretelles amovibles">Bandeaux</a></li>
				<li><a href="http://lemoncurve.com/34-lingerie-soutiens-gorge-ampliformes" title="Soutien-gorge ampliformes">Coques et ampliformes</a></li>
				<li><a href="http://lemoncurve.com/15-lingerie-soutiens-gorge-maternite" title="Soutien-gorge maternit&eacute; et allaitement">Maternit&eacute; et allaitement</a></li>
				<li><a href="http://lemoncurve.com/14-lingerie-soutiens-gorge-sport" title="Soutien-gorge sport">Sport</a></li>
				<li><a href="http://lemoncurve.com/lingerie-soutiens-gorge-grandes-tailles-bonnets-E-plus" title="Soutien-gorge bonnets E et +">Bonnets E et +</a></li>
				<li><a href="http://lemoncurve.com/lingerie-soutiens-gorge-bonnets-A" title="Soutien-gorge bonnet A">Bonnets A</a></li>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/5-soutiens-gorge" title="Soutiens-gorge">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
			</ul>
		</div>
		<div class="w200p mr4 left">
			<span class="menu_title">
				<a href="http://lemoncurve.com/6-culottes-shorties-tangas-strings" title="Culottes et autres bas">Culottes et autres bas</a>
			</span>
			<ul>
				<li><a href="http://lemoncurve.com/16-lingerie-culottes" title="Culottes">Culottes</a></li>
				<li><a href="http://lemoncurve.com/17-lingerie-strings-tangas" title="Strings et tangas">Strings et tangas</a></li>
				<li><a href="http://lemoncurve.com/18-lingerie-shorties-boxers" title="Shorty et boxers">Shorty et Boxers</a></li>
				<li><a href="http://lemoncurve.com/36-lingerie-culottes-gainantes-panties" title="Culottes et panties gainants">Culottes et panties gainants</a></li>
				<li><a href="http://lemoncurve.com/19-lingerie-culottes-shorties-sport" title="Culotte de sport">Sport</a></li>
				<li><a href="http://lemoncurve.com/20-lingerie-culottes-shorties-strings-maternite" title="Culotte maternit&eacute;">Maternit&eacute;</a></li>
				<li><a href="http://lemoncurve.com/63-invisibles-bas" title="Culotte invisibles">Invisibles</a></li>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/6-culottes-shorties-tangas-strings" title="Culottes et autres bas">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
			</ul>
		</div>
		<div class="w200p mr4 left">
			<span class="menu_title" style="letter-spacing: -0.9px;">
				Autres types de lingerie
			</span>
			<ul>
				<li><a href="http://lemoncurve.com/8-lingerie-bodies" title="Body">Body</a></li>
				<li><a href="http://lemoncurve.com/7-lingerie-porte-jarretelles" title="Porte-jarretelles">Porte-jarretelles</a></li>
				<li><a href="http://lemoncurve.com/33-lingerie-guepieres" title="Gu&ecirc;pi&egrave;res">Gu&ecirc;pi&egrave;res</a></li>
				<li><a href="http://lemoncurve.com/37-lingerie-bustiers-corsets" title="Corsets et bustiers">Corsets et bustiers</a></li>
				<li><a href="http://lemoncurve.com/42-lingerie-gainante" title="Lingerie gainante">Produits gainants</a>
				<li></li>
			</ul>
			<span class="menu_title mt2">
				<a href="http://lemoncurve.com/41-ensembles-lingerie" title="Ensemble de lingerie">Les ensembles</a>
			</span>
			<span class="menu_title mt2">
				<a href="http://lemoncurve.com/39-accessoires-lingerie" title="Accessoires lingerie">Accessoires</a>
			</span>
			<span class="menu_title mt2">
				<a href="http://lemoncurve.com/accessoires-lingerie/677-carte-cadeau-lingerie-50.html" title="Cartes cadeaux lingerie">Cartes cadeaux</a>
			</span>
		</div>
		<div class="w200p left">
			<span class="menu_title">Conseils</span>
			<ul>
				<li><a href="http://lemoncurve.com/content/43-taille-de-soutien-gorge" title="Comment bien choisir son soutien-gorge ?">Comment bien choisir son soutien-gorge ?</a></li>
				<li><a href="http://lemoncurve.com/content/category/3-collections-lingerie" title="Les tendances lingerie">Les tendances lingerie</a></li>
				<li><a href="http://lemoncurve.com/content/category/6-conseils-lingerie" title="Tous nos conseils lingerie">Tous nos conseils lingerie</a></li>
			</ul>

			<span class="menu_title mt2">Inspirations</span>
			<ul>
				<li><a href="http://lemoncurve.com/53208-lingerie-mariage" title="Comment choisir sa lingerie pour le mariage ?">Lingerie mariage</a></li>
				<li><a href="http://lemoncurve.com/53209-lingerie-sexy" title="Comment choisir sa lingerie sexy ?">Lingerie sexy</a></li>
				<li><a href="http://lemoncurve.com/53214-lingerie-invisible" title="Comment choisir sa lingerie invisible ?">Lingerie invisible</a></li>
				<li><a href="http://lemoncurve.com/53213-lingerie-coton" title="Comment choisir sa lingerie en coton ?">Lingerie coton</a></li>
			</ul>
			<p>
		</div>
	</div>

	<!-- Maillots -->
	<div class="menu_container line" id="submenu2">
		<div class="w200p mr4 left">
			<span class="menu_title">
				<a href="http://lemoncurve.com/22-maillots-de-bain-2-pieces" title="Maillot de bain 2 pi&egrave;ces">Maillot de bain 2 pi&egrave;ces</a>
			</span>
			<ul>
				<li><a href="http://lemoncurve.com/26-maillots-de-bain-bandeaux-bretelles-amovibles" title="Maillot de bain bandeaux et bretelles amovibles">Bandeaux</a></li>
				<li><a href="http://lemoncurve.com/27-maillots-de-bain-triangle" title="Maillot de bain triangles">Triangles</a></li>
				<li><a href="http://lemoncurve.com/28-maillots-de-bain-armatures" title="Maillot de bain armatur&eacute;s">Armatur&eacute;s</a></li>
				<li><a href="http://lemoncurve.com/25-maillots-de-bain-push-up-ampliformes" title="Maillot de bain push-up">Push-up</a></li>
				<li><a href="http://lemoncurve.com/23-culottes-maillots-de-bain" title="Culottes">Culottes</a></li>
				<li><a href="http://lemoncurve.com/24-maillots-de-bain-shorties-boxers" title="Shorty et boxers">Shorty et Boxers</a></li>
				<li><a href="http://lemoncurve.com/29-bikinis" title="Bikinis">Bikinis</a></li>
				<li><a href="http://lemoncurve.com/recherche?search_query=&idc=22&idg=7,8,9,10,11,12,13,14" title="Maillot de bain bonnets D et +">Bonnets D et +</a>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/22-maillots-de-bain-2-pieces" title="Maillot de bain 2 pi&egrave;ces">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>
		</div>
		<div class="w200p mr4 left">
			<span class="menu_title">
				<a href="http://lemoncurve.com/21-maillots-de-bain-1-piece" title="Maillot de bain 1 pi&egrave;ce">Maillot de bain 1 pi&egrave;ce</a>
			</span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/21-maillots-de-bain-1-piece" title="Maillot de bain 1 pi&egrave;ce">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>
			<span class="menu_title mt3"><a href="http://lemoncurve.com/maillots-de-bain-grandes-tailles" title="Maillots de bain grande taille">Maillots grande taille</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/maillots-de-bain-grandes-tailles" title="Maillots de bain grande taille">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>
		</div>
		<div class="w250p left">
			<span class="menu_title">
				<a href="http://lemoncurve.com/53554-maillot-de-bain-grossesse" title="Maillots de bain maternit&eacute;">Maillots de bain maternit&eacute;</a>
			</span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/53554-maillot-de-bain-grossesse" title="Maillots de bain maternit&eacute;">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>
		</div>
	</div>

	<!-- Nuit -->
	<div class="menu_container line" id="submenu3">
		<div class="w200p mr4 left">
			<span class="menu_title"><a href="http://lemoncurve.com/30-lingerie-nuit-loungewear-nuisettes" title="Nuisettes">Nuisettes</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/30-lingerie-nuit-loungewear-nuisettes" title="Nuisettes">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>

			<span class="menu_title mt3"><a href="http://lemoncurve.com/32-lingerie-nuit-loungewear-tops-caracos" title="Tops et caracos">Tops et caracos</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/32-lingerie-nuit-loungewear-tops-caracos" title="Tops et caracos">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>

			<span class="menu_title mt3"><a href="http://lemoncurve.com/31-lingerie-nuit-loungewear-shorties-culottes" title="Bas et shorty">Bas et shorty</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/31-lingerie-nuit-loungewear-shorties-culottes" title="Bas et shorty">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>

		</div>
		<div class="w250p left">
			<span class="menu_title"><a href="http://lemoncurve.com/83-kimonos-et-robes-de-chambre-lingerie-de-nuit-aubade" title="Kimonos et Robes de chambre">Kimonos et Robes de chambre</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/83-kimonos-et-robes-de-chambre-lingerie-de-nuit-aubade" title="Kimonos et Robes de chambre">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>

		</div>
	</div>

	<!-- Collants -->
	<div class="menu_container line" id="submenu7">
		<div class="w200p mr4 left">
			<span class="menu_title">Collants et chaussants</span>
			<ul>
				<li><a href="http://lemoncurve.com/44-bas-lingerie" title="Bas">Bas</a></li>
				<li><a href="http://lemoncurve.com/45-collants-lingerie" title="Collants">Collants</a></li>
				<li><a href="http://lemoncurve.com/46-lingerie-socquette-mi-bas" title="Socquettes &amp; Mi-bas">Socquettes &amp; Mi-bas</a></li>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/43-collants-bas-lingerie" title="Collants et bas">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
			</ul>
		</div>
		<div class="w250p left">
			<span class="menu_title">Marques de collants et bas</span>
			<ul>
				<li><a href="http://lemoncurve.com/65_dim-chaussant" title="Dim Chaussant">Dim Chaussant</a></li>
				<li><a href="http://lemoncurve.com/44_gerbe" title="Gerbe">Gerbe</a></li>
				<li><a href="http://lemoncurve.com/43_le-bourget" title="Le Bourget">Le Bourget</a></li>
			</ul>
		</div>
	</div>

	<!-- Marques -->
	<div class="menu_container line" id="submenu4">
		<div class="w200p mr4 left">
			<span class="menu_title">Vos marques pr&eacute;f&eacute;r&eacute;es</span>
			<ul>
				<li><a href="http://lemoncurve.com/5_aubade" title="Aubade lingerie">Aubade</a></li>
				<li><a href="http://lemoncurve.com/48_banana-moon" title="Banana Moon maillot de bain">Banana Moon</a></li>
				<li><a href="http://lemoncurve.com/23_barbara" title="Barbara lingerie">Barbara</a></li>
				<li><a href="http://lemoncurve.com/143_bikini-bar" title="Bikini Bar maillot de bain">Bikini Bar</a></li>
				<li><a href="http://lemoncurve.com/70_billet-doux" title="Billet Doux lingerie">Billet Doux</a></li>
				<li><a href="http://lemoncurve.com/138_bluebella" title="Bluebella lingerie">Bluebella</a></li>
				<li><a href="http://lemoncurve.com/92_bomb-girl" title="Bomb Girl lingerie">Bomb Girl</a></li>
				<li><a href="http://lemoncurve.com/46_cleo-by-panache" title="Cleo by Panache lingerie">Cleo by Panache</a></li>
				<li><a href="http://lemoncurve.com/66_curvy-kate" title="Curvy Kate lingerie">Curvy Kate</a></li>
				<li><a href="http://lemoncurve.com/10_dim" title="Dim lingerie">Dim</a></li>
				<li><a href="http://lemoncurve.com/7_fleur-of-england" title="Fleur of England lingerie">Fleur of England</a></li>
				<li><a href="http://lemoncurve.com/21_gossard" title="Gossard lingerie">Gossard</a></li>
				<li><a href="http://lemoncurve.com/36_hanky-panky" title="Hanky Panky lingerie">Hanky Panky</a></li>
			</ul>
		</div>
		<div class="w200p mr4 mt3 left">
			<ul>
				<li><a href="http://lemoncurve.com/9_huit" title="Huit lingerie">Huit</a></li>
				<li><a href="http://lemoncurve.com/28_implicite" title="Implicite lingerie">Implicite</a></li>
				<li><a href="http://lemoncurve.com/137_kiwi-saint-tropez" title="Kiwi Saint Tropez maillot de bain">Kiwi Saint Tropez</a></li>
				<li><a href="http://lemoncurve.com/145_l-agent-by-agent-provocateur" title="L'Agent by Agent Provocateur lingerie">L'Agent by Agent Provocateur</a></li>
				<li><a href="http://lemoncurve.com/25_lc-by-lemon-curve" title="LC by Lemon Curve">LC by Lemon Curve</a></li>
				<li><a href="http://lemoncurve.com/91_lemon-boudoir" title="Lemon Boudoir lingerie"><b>Lemon Boudoir</b></a></li>
				<li><a href="http://lemoncurve.com/42_maison-close" title="Maison close lingerie">Maison close</a></li>
				<li><a href="http://lemoncurve.com/89_oups" title="Oups lingerie">Oups by Sans Complexe</a></li>
				<li><a href="http://lemoncurve.com/47_panache" title="Panache lingerie">Panache</a></li>
				<li><a href="http://lemoncurve.com/45_passionata" title="Passionata lingerie">Passionata</a></li>
				<li><a href="http://lemoncurve.com/149_petit-bateau" title="Petit Bateau lingerie">Petit Bateau</a></li>
				<li><a href="http://lemoncurve.com/90_playboy" title="Playboy lingerie">Playboy</a></li>
				<li><a href="http://lemoncurve.com/144_playtex" title="Playtex lingerie">Playtex</a></li>
			</ul>
		</div>
		<div class="w200p mr4 mt3 left">
			<ul>
				<li><a href="http://lemoncurve.com/68_princesse-tam-tam" title="Princesse tam tam lingerie">Princesse tam tam</a></li>
				<li><a href="http://lemoncurve.com/71_rosy" title="Rosy lingerie">Rosy</a></li>
				<li><a href="http://lemoncurve.com/73_sans-complexe" title="Sans Complexe lingerie">Sans Complexe</a></li>
				<li><a href="http://lemoncurve.com/55_scandale" title="Scandale lingerie">Scandale</a></li>
				<li><a href="http://lemoncurve.com/148_shock-absorber" title="Shock Absorber lingerie">Shock Absorber</a></li>
				<li><a href="http://lemoncurve.com/29_simone-perele" title="Simone Pérèle lingerie">Simone Pérèle</a></li>
				<li><a href="http://lemoncurve.com/58_vero-moda" title="Vero Moda lingerie">Vero Moda</a></li>
				<li><a href="http://lemoncurve.com/22_wacoal" title="Wacoal lingerie">Wacoal</a></li>
				<li><a href="http://lemoncurve.com/11_wonderbra" title="Wonderbra lingerie">Wonderbra</a></li>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/content/56-les-marques-de-lingerie-sont-toutes-chez-lemon-curve" title="Voir nos 80 marques"><b>Voir nos 80 marques</b> <span class="navigation-pipe">►</span></a></li>
			</ul>
		</div>
	</div>

	<!-- Grandes Tailles -->
	<div class="menu_container line" id="submenu6">
		<div class="w200p mr4 left">
			<span class="menu_title"><a href="http://lemoncurve.com/lingerie-soutiens-gorge-grandes-tailles-bonnets-E-plus" title="Soutien-gorge bonnets E Et +">Soutiens-gorge</a></span>
			<ul>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-e" title="Soutien-gorge bonnets E">Bonnets E</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-f" title="Soutien-gorge bonnets F">Bonnets F</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-g" title="Soutien-gorge bonnets G">Bonnets G</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-h" title="Soutien-gorge bonnets H">Bonnets H</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-i" title="Soutien-gorge bonnets I">Bonnets I</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-j" title="Soutien-gorge bonnets J">Bonnets J</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-bonnets-k" title="Soutien-gorge bonnets K">Bonnets K</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-soutiens-gorge-minimiseurs" title="Soutien-gorge minimiseurs">Soutiens-gorge minimiseurs</a></li>
			</ul>
		</div>
		<div class="w200p mr4 left">
			<span class="menu_title"><a href="http://lemoncurve.com/lingerie-grandes-tailles-culottes-strings-tangas-shorties-44-et-plus" title="Culottes et autres bas 44 Et +">Culottes et autres bas</a></span>
			<ul>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-culottes-strings-tangas-shorties-44-46" title="Culottes tailles 44 &agrave; 46">Tailles 44 &agrave; 46</a></li>
				<li><a href="http://lemoncurve.com/lingerie-grandes-tailles-culottes-strings-tangas-shorties-48-52" title="Culottes tailles 48 &agrave; 52">Tailles 48 &agrave; 52</a></li>
					<li><a href="http://lemoncurve.com/grandes-tailles-culottes-panties" title="Culottes et panties sculptants">Culottes et panties sculptants</a></li>
			</ul>
			<span class="menu_title mt1"><a href="http://lemoncurve.com/maillots-de-bain-grandes-tailles" title="Maillots de bain grande taille">Maillots de bain</a></span>
			<ul>
				<li class="mt1"><a class="allmodel" href="http://lemoncurve.com/maillots-de-bain-grandes-tailles" title="Maillots de bain grande taille">Voir tous les mod&egrave;les <span class="navigation-pipe">►</span></a></li>
				</li>
			</ul>
		</div>
		<div class="w440p left">
			<span class="menu_title">Conseils lingerie</span>
			<ul>
				<li><a href="http://lemoncurve.com/content/43-taille-de-soutien-gorge" title="Comment trouver ma taille de soutien-gorge ?">Comment trouver ma taille de soutien-gorge ?</a></li>
				<li><a href="http://lemoncurve.com/content/52-soutien-gorge-grande-taille" title="Quel soutien-gorge pour une poitrine g&eacute;n&eacute;reuse ?">Quel soutien-gorge pour une poitrine g&eacute;n&eacute;reuse ?</a></li>
				<li><a href="http://lemoncurve.com/content/31-lingerie-grandes-tailles-les-beautes-genereuses-par-stephanie-zwicky" title="Les conseils de St&eacute;phanie Zwicky">Les conseils de St&eacute;phanie Zwicky</a></li>
			</ul>
		</div>
	</div>

</div>
			</div>

			<div id="operation" class="w1020p hidetunnel">
				<div id="backoperation">
			<p><a href="http://lemoncurve.com/45_passionata" title="Dès 60€ d'achat, hors produits en promotion.">Votre miroir de sac Passionata OFFERT !<span>Je le veux ></span></a></p>
	</div>
			</div>
			
			<div id="main" role="main">

			
	<div id="home">
		<div class="w1020p line" id="home_sliders">
	
					<div class="slider_box_small mr3 left">
				<div class="slider_small box_first">
					<div class="slider_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-playboy.jpg) !important; background-position : 0px 0px;">
						<a href="http://lemoncurve.com/90_playboy" title="Lingerie Playboy"></a>
					</div>

					<div class="slider_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-playboy.jpg) !important; background-position : 100% 0px;">
						<a href="http://lemoncurve.com/90_playboy" title="Lingerie Playboy"></a>
						<div class="slider_text" style="color:#282828;">
							<h2>Lingerie Sexy et Audacieuse</h2>							<p>Découvrez les nouvelles lignes de Lingerie Playboy

</p>						</div>
					</div>
				</div>
			
		
	
					
				<div class="slider_small ">
					<div class="slider_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-l-agent-by-agent-provocateur.jpg) !important; background-position : 0px 0px;">
						<a href="http://lemoncurve.com/145_l-agent-by-agent-provocateur" title="Lingerie Agent by Agent Provocateur"></a>
					</div>

					<div class="slider_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-l-agent-by-agent-provocateur.jpg) !important; background-position : 100% 0px;">
						<a href="http://lemoncurve.com/145_l-agent-by-agent-provocateur" title="Lingerie Agent by Agent Provocateur"></a>
						<div class="slider_text" style="color:#282828;">
							<h2>Nouvelle collection</h2>							<p>Découvrez les lignes de lingerie L'Agent by Agent Provocateur</p>						</div>
					</div>
				</div>
			</div>
		
	
					<div class="slider_box_large mr3 left">

				<div class="slider_big">
					<div class="slider_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-aubade-soutien-gorge.jpg) !important; background-position : 0px 0px;">
						<a href="http://lemoncurve.com/5_aubade" title="Lingerie Aubade"></a>
					</div>

					<div class="slider_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-aubade-soutien-gorge.jpg) !important; background-position : 100% 0px;">
						<a href="http://lemoncurve.com/5_aubade" title="Lingerie Aubade"></a>
						<div class="slider_text" style="color:#282828;">
							<h2>Nouvelle collection</h2>							<p>Craquez pour les lignes de lingerie Aubade élégantes et raffinées.</p>						</div>
					</div>
				</div>
			</div>
		
	
					<div class="slider_box_small  left">
				<div class="slider_small box_first">
					<div class="slider_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-push-up.jpg) !important; background-position : 0px 0px;">
						<a href="http://lemoncurve.com/11-lingerie-soutiens-gorge-push-up-ampliformes" title="Soutien-gorge Push-up"></a>
					</div>

					<div class="slider_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-push-up.jpg) !important; background-position : 100% 0px;">
						<a href="http://lemoncurve.com/11-lingerie-soutiens-gorge-push-up-ampliformes" title="Soutien-gorge Push-up"></a>
						<div class="slider_text" style="color:#282828;">
							<h2>Notre selection</h2>							<p>Boostez votre décolleté avec notre sélection de Push-Up</p>						</div>
					</div>
				</div>
			
		
	
					
				<div class="slider_small ">
					<div class="slider_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-produits-gainants-lingerie-gainante-grande-taille.jpg) !important; background-position : 0px 0px;">
						<a href="http://lemoncurve.com/42-lingerie-gainante" title="Lingerie Gainante"></a>
					</div>

					<div class="slider_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-produits-gainants-lingerie-gainante-grande-taille.jpg) !important; background-position : 100% 0px;">
						<a href="http://lemoncurve.com/42-lingerie-gainante" title="Lingerie Gainante"></a>
						<div class="slider_text" style="color:#282828;">
							<h2>Lingerie Gainante</h2>							<p>Découvrez notre sélection de culottes ou autres bas !</p>						</div>
					</div>
				</div>
			</div>
		
	
</div>﻿<div id="home_marques" class="line">
	<p id="nbmarques">80 marques</p>

	<div id="mapmarques">
		<img src='http://lemoncurve.com/themes/lemonchic/img/marques.png' alt='' usemap='#manufacturer'>
		<map name='manufacturer'>
			<area shape="rect" coords="0,0,113,45" href="http://lemoncurve.com/73_lingerie-sans-complexe" title="Sans Complexe">
			<area shape="rect" coords="114,0,227,45" href="http://lemoncurve.com/10_lingerie-dim" title="Dim">
			<area shape="rect" coords="228,0,340,45" href="http://lemoncurve.com/48_lingerie-banana-moon" title="Banana Moon">
			<area shape="rect" coords="341,0,453,45" href="http://lemoncurve.com/11_lingerie-wonderbra" title="Wonderbra">
			<area shape="rect" coords="454,0,567,45" href="http://lemoncurve.com/90_lingerie-playboy" title="Playboy">
			<area shape="rect" coords="568,0,680,45" href="http://lemoncurve.com/45_lingerie-passionata" title="Passionata">
			<area shape="rect" coords="681,0,792,45" href="http://lemoncurve.com/145_l-agent-by-agent-provocateur" title="L'agent Provocateur">
			<area shape="rect" coords="793,0,895,45" href="http://lemoncurve.com/5_lingerie-aubade" title="Aubade">
			<area shape="rect" coords="896,0,1020,45" href="http://lemoncurve.com/29_lingerie-simone-perele" title="Simone Pérèle">
		</map>
	</div>

	<p id="allmarques"><a class="pink_button" href="http://lemoncurve.com/content/56-marques-de-lingerie-chez-lemon-curve" title="Voir les marques distribu&eacute;es par Lemoncurve.com">Toutes les marques</a></p>
</div><div class="w1020p line" id="home_blocs">
	
		<div class="line blocs_line">			<div class="blocs_box left mr3">
				<div class="blocs_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-lemon-boudoir.jpg) !important; background-position : 0px 0px;">
					<a href="http://lemoncurve.com/91_lemon-boudoir" title="Lingerie Lemon Boudoir"></a>
				</div>

				<div class="blocs_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-lemon-boudoir.jpg) !important; background-position : 100% 0px;">
					<a href="http://lemoncurve.com/91_lemon-boudoir" title="Lingerie Lemon Boudoir"></a>
					<div class="blocs_text" style="color:#282828;">
						<h2>petits prix</h2>						<p>Découvrez les nouvelles lignes de lingerie Lemon Boudoir  !</p>					</div>
				</div>
			</div>
		
	
					<div class="blocs_box left mr3">
				<div class="blocs_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-maternite.jpg) !important; background-position : 0px 0px;">
					<a href="http://lemoncurve.com/20-lingerie-culottes-shorties-strings-maternite" title="Lingerie maternité"></a>
				</div>

				<div class="blocs_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-maternite.jpg) !important; background-position : 100% 0px;">
					<a href="http://lemoncurve.com/20-lingerie-culottes-shorties-strings-maternite" title="Lingerie maternité"></a>
					<div class="blocs_text" style="color:#282828;">
						<h2>Notre sélection</h2>						<p>Découvrez notre sélection de lingerie de maternité ! </p>					</div>
				</div>
			</div>
		
	
					<div class="blocs_box left ">
				<div class="blocs_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-cleo.jpg) !important; background-position : 0px 0px;">
					<a href="http://lemoncurve.com/46_cleo-by-panache" title="Nouvelle collection lingerie cleo"></a>
				</div>

				<div class="blocs_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-cleo.jpg) !important; background-position : 100% 0px;">
					<a href="http://lemoncurve.com/46_cleo-by-panache" title="Nouvelle collection lingerie cleo"></a>
					<div class="blocs_text" style="color:#282828;">
						<h2>Jusqu'au bonnet J</h2>						<p>Craquez pour les nouvelles lignes de Lingerie Cléo</p>					</div>
				</div>
			</div>
		</div>
	
		<div class="line blocs_line">			<div class="blocs_box left mr3">
				<div class="blocs_show" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-collants.jpg) !important; background-position : 0px 0px;">
					<a href="http://lemoncurve.com/content/category/23-choisir-ses-collants" title="comment choisir ses collants"></a>
				</div>

				<div class="blocs_hide" style="background-image : url(http://lemoncurve.com/upload/Slider/FR/lingerie-lemon-curve-collants.jpg) !important; background-position : 100% 0px;">
					<a href="http://lemoncurve.com/content/category/23-choisir-ses-collants" title="comment choisir ses collants"></a>
					<div class="blocs_text" style="color:#282828;">
						<h2>Collants et bas </h2>						<p>Découvrez nos astuces et conseils pour bien choisir vos collants</p>					</div>
				</div>
			</div>
		
	
	<!-- Le Mag -->
	<div id="lemag">
		<div id="magmenu" class="left">
			<div id="maglogo"><span id="logomag"></span></div>
			<ul id="magnav">
									<li id="magfirst" class="active">L’Agent by Agent Provocateur : nouvelle collection</li>
									<li id="magsecond">Conseil : Comment bien choisir ses collants ?</li>
									<li id="magthird">Ma morpho-lingerie</li>
							</ul>
		</div>

		<div id="magcontent" class="left">
			
			<article id="articlefirst" class="active">
				<header>
					<h2><a target="blank" href="http://lemoncurve.com/blog/2014/09/15/agent-by-agent-provocateur-lingerie/" title="L’Agent by Agent Provocateur : nouvelle collection">L’Agent by Agent Provocateur : nouvelle collection</a></h2>
					<span class="magdate">15-09-2014</span>
				</header>

				<p>Nous vous dévoilons les dessous de la nouvelle collection de lingerie L’Agent by Agent Provocateur, de sa création jusqu’aux lignes de lingerie. La marque de lingerie britannique qui collabore avec les très belles Pénélope et Monica Cruz mise sur la couleur et joue la carte de la séduction pour que toutes les femmes puissent se sentir belles et séduisantes....<br>
				<a id="maglink" target="blank" href="http://lemoncurve.com/blog/2014/09/15/agent-by-agent-provocateur-lingerie/" title="L’Agent by Agent Provocateur : nouvelle collection">Voir la suite ></a></p>
			</article>

			
			<article id="articlesecond">
				<header>
					<h2><a target="blank" href="http://lemoncurve.com/blog/2013/12/09/bien-choisir-ses-collants/" title="Conseil : Comment bien choisir ses collants ?">Conseil : Comment bien choisir ses collants ?</a></h2>
					<span class="magdate">09-12-2013</span>
				</header>

				<p>L’automne est arrivé et les collants vont bientôt s’installer dans nos placards ! La baisse des températures annonce donc l’achat de collants pour cet hiver, mais attention il est important de bien les choisir ! Tout comme la lingerie, le collant est un atout séduction, il met nos formes et valeur et habille joliment nos gambettes ! Ne vous inquiétez pas, on vous livre nos astuces et conseils lingerie !...<br>
				<a id="maglink" target="blank" href="http://lemoncurve.com/blog/2013/12/09/bien-choisir-ses-collants/" title="Conseil : Comment bien choisir ses collants ?">Voir la suite ></a></p>
			</article>

			
			<article id="articlethird">
				<header>
					<h2><a target="blank" href="http://lemoncurve.com/blog/2013/03/18/ma-morpho-lingerie/" title="Ma morpho-lingerie">Ma morpho-lingerie</a></h2>
					<span class="magdate">18-03-2013</span>
				</header>

				<p>Acheter de la jolie lingerie c’est important mais acheter de la lingerie en fonction de sa morphologie c’est encore mieux ! Il est donc très important de connaitre la forme de sa silhouette pour la mettre en valeur, c’est pourquoi la Lemon Team vous conseille en fonction de votre morphologie. Découvrez vite tous nos conseils et astuces lingerie pour valoriser votre corps....<br>
				<a id="maglink" target="blank" href="http://lemoncurve.com/blog/2013/03/18/ma-morpho-lingerie/" title="Ma morpho-lingerie">Voir la suite ></a></p>
			</article>

					</div>
	</div>

	</div>
</div><script type="text/javascript">
		window.criteo_q = window.criteo_q || [];
		window.criteo_q.push(
				{ event: "setAccount", account: 8576 },
				
				{ event: "viewHome" }
		);
		</script>
	</div>

	<div class="hidescript">
		<img src="http://email-reflex.com/tags/target.php?source=238" alt=""/>

		<!-- Start of Home Page Mastertag Code: -->
		
		<div class="zx_1FA2E7C505D816FC1145 zx_mediaslot">
		<script type="text/javascript">
		window._zx = window._zx || [];
		window._zx.push({"id":"1FA2E7C505D816FC1145"});
		(function(d) {
		var s = d.createElement("script"); s.async = true;
		s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//static.zanox.com/scripts/zanox.js";
		var a = d.getElementsByTagName("script")[0]; a.parentNode.insertBefore(s, a);
		}(document));
		</script>
		</div>
		
		<!-- End of Home Page Mastertag Code -->
	</div>

	        <div class="w1020p">
            <div id="reassurance">
                <div id="reacontent">
                    <p class="hov_livraison left"><span id="img_livraison"></span>Livraison gratuite<span class="subinfo">D&egrave;s 49&euro; d&#039;achat</span></p>

                    <p class="hov_expedition left"><span id="img_expedition"></span>Exp&eacute;dition express<span class="subinfo">Sous 24h</span></p>

                    <p class="hov_retour left"><span id="img_retour"></span>Retour offert*<span class="subinfo">Pendant 100 jours</span></p>

                    <p class="hov_contact left"><a href="http://lemoncurve.com/contactez-nous"><span id="img_telephone"></span>Nous contacter<span class="subinfo">09 81 95 32 17</span></a></p>
                </div>
            </div>
        </div>

        </div>

        <div class="hidescript">
        
        
        <!-- Yandex.Metrika informer -->
		<a href="https://metrica.yandex.com/stat/?id=26020317&amp;from=informer"
		target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/26020317/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
		style="width:88px; height:31px; border:0;" alt="Yandex.Metrica" title="Yandex.Metrica: data for today (page views, visits and unique visitors)" onclick="try{Ya.Metrika.informer({i:this,id:26020317,lang:'en'});return false}catch(e){}"/></a>
		<!-- /Yandex.Metrika informer -->

		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function (d, w, c) {
		    (w[c] = w[c] || []).push(function() {
		        try {
		            w.yaCounter26020317 = new Ya.Metrika({id:26020317,
		                    webvisor:true,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true});
		        } catch(e) { }
		    });

		    var n = d.getElementsByTagName("script")[0],
		        s = d.createElement("script"),
		        f = function () { n.parentNode.insertBefore(s, n); };
		    s.type = "text/javascript";
		    s.async = true;
		    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

		    if (w.opera == "[object Opera]") {
		        d.addEventListener("DOMContentLoaded", f, false);
		    } else { f(); }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript><div><img src="//mc.yandex.ru/watch/26020317" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
		

        <!-- Google Code for Balise de remarketing 1007745214-->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 1007745214;
        var google_conversion_label = "Fz6pCNKr3wUQvvHD4AM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1007745214/?value=0&amp;label=Fz6pCNKr3wUQvvHD4AM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>

        <!-- Code Google de la balise de remarketing 974973714-->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 974973714;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/974973714/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>

        <!-- Placez cette ballise après la dernière balise Bouton +1. -->
        
        <script type="text/javascript">
          window.___gcfg = {lang: 'fr'};

          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/platform.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
        

				<script type="text/javascript">
			_gaq.push(['_setCustomVar', 4, 'Other', "Other Page", 3]);
			_gaq.push(['_trackPageview', '']);
		</script>
		
        <!-- Analytics -->
         <script type="text/javascript">
        
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })(); 
        </script>
        </div>

        <!-- Google Tag Manager -->
        
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-ZCGHT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-ZCGHT');</script>
        
        <!-- End Google Tag Manager -->

                    		<footer role="contentinfo">
           <div id="footer">
                <div class="line" style="padding-top: 60px;">
                    <p id="socialfollow">Suivez-nous</p>
                    <p id="socialnetwork">
                        <a target="_blank" id="facebooklink" href="https://www.facebook.com/LemonCurve?fref=ts" title="Suivez-nous sur Facebook">Suivez-nous sur Facebook</a>
                        <a target="_blank" id="twitterlink" href="https://twitter.com/LemonCurve" title="Suivez-nous sur Twitter">Suivez-nous sur Twitter</a>
                        <a target="_blank" id="pinterestlink" href="https://www.pinterest.com/lemoncurve/" title="Suivez-nous sur Pinterest">Suivez-nous sur Pinterest</a>
                        <a target="_blank" id="instagram" href="http://instagram.com/lemoncurve" title="Suivez-nous sur Instagram">Suivez-nous sur Instagram</a>
                        <a target="_blank" id="googlelink" href="https://plus.google.com/109937761323260208910/posts" title="Suivez-nous sur Google +">Suivez-nous sur Google +</a>
                    </p>
                </div>

                <div class="line">
                    <div id="footinfo" class="left">
                        <div class="left" id="lemonfoot">
                            <h3>Lemon Curve</h3>
                            <ul>
                                <li><a href="http://lemoncurve.com/content/4-qui-sommes-nous-lemon-curve-le-grand-magasin-de-la-lingerie" title="L'équipe Lemon Curve">Qui sommes-nous ?</a></li>
                                <li><a href="http://lemoncurve.com/content/20-carrieres" title="Lemon Curve recrute">Carri&egrave;re : rejoignez-nous !</a></li>
                                <li><a href="http://lemoncurve.com/content/21-devenir-affilie-lemon-curve" title="Devenir affilié Lemon Curve">Devenir affili&eacute;</a></li>
                                <li><a href="http://lemoncurve.com/content/158-agathe-molinar-fondatrice-de-lemon-curve" title="Agathe Molinar fondatrice de Lemon Curve">Agathe Molinar</a></li>
                                <li><a href="http://lemoncurve.com/content/19-lemon-curve-et-les-medias" title="Lemon Curve et les médias">Lemon Curve et les m&eacute;dias</a></li>
                            </ul>
                        </div>

                        <div class="left" id="servicesfoot">
                            <h3>Nos services</h3>
                            <ul>
                                <li><a href="http://lemoncurve.com/content/12-livraison-lingerie-offerte" title="Lingerie en livraison gratuite">Livraison offerte</a></li>
                                <li><a href="http://lemoncurve.com/content/13-retour-lingerie-gratuit" title="Lingerie en retour gratuit">Retour gratuit sous 100 jours</a></li>
                                <li><a href="http://lemoncurve.com/content/16-satisfait-ou-rembourse" title="Satisfait ou remboursé">Satisfait ou rembours&eacute;</a></li>
                                <li><a href="http://lemoncurve.com/content/17-temoignages-clients" title="Témoignages clients Lemon Curve">T&eacute;moignages clients</a></li>
                            </ul>
                        </div>

                        <div class="left" id="partenairesfoot">
                            <h3>Nos Partenaires</h3>
                            <div id="partenaire_sprite"><p>Colissimo, Chronoposte demain chez vous et Mondial Relay</p></div>

                            <h3>Paiement s&eacute;curis&eacute;</h3>
                            <div id="paiement_sprite"><p>Mastercard, Visa, Paypal et BNP Paribas</p></div>

                                                        <div id="avisv">
                                <a href="http://www.aviscertifies.com/avis-clients/lemoncurve.com" target="_blank" alt="Voir les avis Lemon Curve" title="Voir les avis Lemon Curve">
                                <span id="starsav"><span style="width: 108.72px"></span></span>
                                <span id="clientsav">Avis de nos clients</span>
                                <span id="noteav">9.06 / 10,0</span>
                                </a>
                            </div>
                            
                        </div>

                        <div class="right" id="footnews">
                            <div id="home_newsletter">
                                <form id="form_newsletter" name="form_newsletter" action="#" method="post">
                                    <input type="hidden" name="action" value="0">
                                    <input type="hidden" name="submitNewsletter" value="1">
                                    <p id="phrasenew">Recevez une r&eacute;duction de</p>
                                    <div class="radio">
                                        <input id="Mme" type="radio" name="civilitepre" value="2"><label for="Mme">Mme</label>
                                        <input id="Mr" type="radio" name="civilitepre" value="1"><label for="Mr">Mr</label>
                                    </div>

                                    <p><input type="text" id="email_nl" placeholder="Votre email..." name="emailpre">
                                        <a href="javascript:;" id="submit-newsletter">OK</a></p>
                                 </form>
                            </div>


                           <div class="line left">
                                <!-- FB -->
                                <span style="display:inline-block; cursor:pointer; position: absolute;" class="fb-like" style = "position : absolute; overflow:visible;color:#353535; font-size:1px; display: inline;" data-href="https://www.facebook.com/LemonCurve?ref=ts&fref=ts" data-width="450" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></span>

                                <!-- Twitter -->
                                
                                <span style="display:inline-block; width: 136px; cursor:pointer; margin-left: 98px; margin-top: 1px;">
                                    <a style="display:block;" href="https://twitter.com/LemonCurve" class="twitter-follow-button" data-show-count="true" data-lang="fr" data-show-screen-name="false">Suivre @LemonCurve</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                </span>
                                

                                <!-- Google + -->
                                <!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
                                <span style="display:inline-block; cursor:pointer; width: 70px !important;">
                                    <span class="g-plusone" data-size="medium" data-href="http://lemoncurve.com/"></span>
                                </span>

                           </div>

                        </div>
                    </div>

                </div>

                <div class="line" id="presentafoot">
                    	<h2>Lemon Curve, le site n°1 de la vente de lingerie féminine</h2>
<p>Sur LemonCurve.com retrouvez le plus grand choix de lingerie de marque pour femmes sur internet. Avec plus de <a title="Voir les marques distribuées par Lemoncurve.com" href="http://lemoncurve.com/content/56-marques-de-lingerie-chez-lemon-curve">80 grandes marques de lingerie </a> et 40 000 modèles de soutiens-gorge, culottes, tangas, body ou encore maillots de bain, Lemon Curve est LA destination lingerie de toutes les femmes.</p>
<h2>De la lingerie de marque et de qualité pour toutes les femmes</h2>
<p>Envie de lingerie classique ou confortable? Dim, Simone Pérèle, Wacoal, Triumph ou encore la lingerie Sans Complexe vous proposent des modèles de soutiens-gorge confortables aux matières de qualité.<br /> Envie de lingerie sexy ou de lingerie séduction? La délicatesse des dentelles d'Aubade, les push-up Wonderbra, l'impertinence de la marque Maison Close, d'Implicite ou de l'Agent by Agent Provocateur vous offriront l'audace que vous recherchez.<br /> Pour une lingerie féminine et fraîche, Passionata, Princesse Tam Tam, Rosy, Billet Doux, Gossard, ou encore Huit lingerie vous combleront.<br /> Lemon Curve c'est aussi une grande sélection de maillots de bain avec les plus grandes marques comme Banana Moon, Kiwi maillot et Bikini Bar, mais aussi des maillots de bain de créateurs avec Albertine maillot.</p>
<h2>Lemon Curve vous conseille pour votre achat de lingerie</h2>
<p>Lemon Curve est votre expert lingerie et vous apporte tous les <a title="conseils lingerie" href="http://lemoncurve.com/content/category/7-comment-choisir-son-soutien-gorge">conseils lingerie</a> dont vous avez besoin. Nous vous guidons pour trouver votre <a title="Comment choisir sa taille de soutien gorge" href="http://lemoncurve.com/content/43-comment-choisir-son-soutien-gorge">taille de soutien-gorge</a> ou dénicher les <a title="collection lingerie" href="http://lemoncurve.com/content/category/3-collections-lingerie">tendances lingerie de la saison.</a></p>
<h2>Lemon Curve, décrypte les tendances lingerie</h2>
<p>Etre un bon distributeur de lingerie fine c'est aussi savoir décrypter les tendances lingerie. Lemon Curve est au coeur de la mode lingerie et partage ses coups de coeur et actualités mode sur son <a href="http://lemoncurve.com/blog/">blog</a> et sur sa <a href="https://fr-fr.facebook.com/LemonCurve">page facebook</a>.</p>

                </div>

                <div class="line" style="padding-bottom: 20px;">
                    <p id="mentions">
                        <a href="http://lemoncurve.com/content/3-conditions-generales-de-ventes" title="Conditions g&eacute;n&eacute;rales de ventes">CGV</a> |
                        <a href="http://lemoncurve.com/content/2-mentions-legales" title="Mentions l&eacute;gales">Mentions l&eacute;gales</a> |
                        Copyright © 2014 |
                        <a href="http://lemoncurve.com/plan-du-site" title="Plan du site">Sitemap</a>
                    </p>
                </div>
            </div>
        </footer>        
        

                <!-- Colorbox -->
        <div class="hidden">
            <div id="livraison_gratuite" class="popin">
                <b><span style="font-family: georgia, palatino; font-size: 10pt;">Livraison offerte</span></b><br /><br />
                <p style="font-size: 10pt; text-align:justify;"><em>Chez Lemon Curve, la livraison est gratuite d&egrave;s 49&euro; d&#039;achat, en France m&eacute;tropolitaine m&ecirc;me pendant les soldes, quel que soit le montant de votre commande.</em>
                <br /><br />
                Acheter en ligne n&#039;a jamais &eacute;t&eacute; aussi simple et &eacute;conomique :
                <br /></p>
                <ol><li><u>Vous &ecirc;tes livr&eacute; s&ucirc;rement, simplement :</u></li>
                    <ul style="margin-top:5px;">
                        <li><b>Confirmation d&#039;exp&eacute;dition</b> : un email de confirmation vous est envoy&eacute; d&egrave;s l&#039;exp&eacute;dition de votre commande.</li><br />
                        <li><b>Numero de suivi</b> : vous y trouverez un num&eacute;ro de suivi de colis, Colissimo ou Mondial Relay, Chronopost demain chez vous avant 13h ou Fedex. Ce num&eacute;ro de colis est &eacute;galement disponible depuis votre compte client. Il vous permet de savoir o&ugrave; en est votre livraison sur le site du transporteur.</li>
                    </ul>
                    <br />
                    <li><u>Vous &ecirc;tes livr&eacute; SANS SURCO&Ucirc;T :</u></li>
                    <ul style="margin-top:5px;">

                        <li>Livraison gratuite d&egrave;s 49&euro; d&#039;achat directement dans votre boite aux lettres (So Colissimo par la Poste) ou en Mondial Relay (c&#039;est-&agrave;-dire dans un des 4 300 Points Relais&reg; en France)</li><br />
                        <li>En dessous de 49&euro; d&#039;achat, livraison &agrave; 4,90&euro; avec So Colissimo ou Mondial Relay.</li><br />
                        <li>Service Livraison EXPRESS (passez commande avant 12h et soyez livr&eacute;s le lendemain avant 13h) &agrave; 8,50&euro; avec Chronopost.</li><br />

                        <li><b>LIVRAISONS INTERNATIONALES</b><br />
                        Choisissez votre pays ou zone g&eacute;ographique pour les co&ucirc;ts et d&eacute;lais de livraisons. :
                        
                        <script type="text/javascript">
                            var country ="0";
                            var oldCountry="0";

                            function delivery(x){
                                oldCountry = country;

                                if(!oldCountry){oldCountry="0";}

                                country=x.value;
                                if(oldCountry!="0")
                                    document.getElementById(oldCountry).className="hide";

                                if(country!="0")
                                document.getElementById(country).className="";

                            $('#cboxContent').colorbox.resize();

                            }
                        </script>
                        

                    <form>
                <select autocomplete="off" name="country" size = "1" onChange="delivery(this)">
                    <option value="0" selected="selected"><b>---</b></option>
                    <option value="country9">DOM-TOM</option>
                    <optgroup label="EUROPE">
                        <option value="country1">Italie</option>
                        <option value="country2">Espagne &amp; Portugal</option>
                        <option value="country3">Belgique</option>
                        <option value="country4">Pays Bas</option>
                        <option value="country5">Luxembourg</option>
                        <option value="country6">Royaume-Uni</option>
                        <option value="country7">Allemagne &amp; Autriche</option>
                        <option value="country8">Suisse et Norv&egrave;ge</option>
                        <option value="country10">autres pays de l&#039;UE</option>
                        <option value="country11">Pays de l&#039;Europe hors UE (Turquie, Ukraine, Serbie, etc)</option>
                    </optgroup>
                    <optgroup label="MONDE">
                        <option value="country12">USA / Canada</option>
                        <option value="country13">Israel, Argentine, Br&eacute;sil, Liban, Maroc, Arabie Saoudite, UAE, Yemen</option>
                        <option value="country14">Russia</option>
                        <option value="country15">Chine, Japon, Hong-Kong, Australie, et le reste du monde</option>
                    </optgroup>
                </select>
            </form>
            <p style="" id="0" class="hide"></p>
            <div> <!-- tableaux pays -->
                    <div id="country1" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</span></td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>Bartolini</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td> 7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country2" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</span></td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>SEUR</td>
                                <td>5-6 jours ouvr&eacute;s</td>
                                <td>8.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country3" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</span></td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST TAXIPOST</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>6.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country4" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td>7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country5" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td>7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country6" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>GLS</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>8.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country7" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country8" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>17.90 €</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div><!--fin pays proches-->
                    <div id="country9" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
							<tr>
                                <td>STANDARD</td>
                                <td>COLISSIMO OUTRE-MER</td>
                                <td>5-7 jours ouvr&eacute;s</td>
                                <td>< 250 € : 17.90 € à 21.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td>< 250 € : 24.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country10" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>17.90 €</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country11" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>24.90 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country12" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 18.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country13" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 35.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country14" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>35.90 € <br /><span class="Citalic">(max 190&euro; par commande,<br /> et 1000&euro; par mois)</span></td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country15" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 24.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden">
            <div id="expedition_express" class="popin">
                <b><span style="font-family: georgia, palatino; font-size: 10pt;">Livraison Express</span></b><br /><br />
                <p style="font-size: 10pt; text-align:justify;">Parce que lorsqu&#039;on craque pour un joli ensemble de lingerie on veut l&#039;avoir tout de suite...<br />
                <b>Nous exp&eacute;dions le jour m&ecirc;me ou le lendemain pour les commandes pass&eacute;es apr&egrave;s 12h</b>.<br /><br />
                Toute commande pass&eacute;e avant 12h peut donc &ecirc;tre re&ccedil;ue le lendemain ou surlendemain !<br />
                Vous ne retrouverez ces d&eacute;lais sur aucun autre site.<br /><br />
                A ces d&eacute;lais d&#039;exp&eacute;ditions il vous suffit d&#039;ajouter le d&eacute;lai (moyen constat&eacute;) de transport :</p><br />
                <ul style="list-style-position:inside;margin-left:50px;">
                    <li>En <b>So Colissimo (La Poste)</b> : 24h-48h ouvr&eacute;s en France m&eacute;tropolitaine.<br />
                    Si vous n&#039;&ecirc;tes pas l&agrave;, le colis est gliss&eacute; dans votre boite aux lettres ou gard&eacute; au bureau de poste. Gr&acirc;ce &agrave; un num&eacute;ro de suivi, vous pouvez suivre &agrave; tout moment l&#039;&eacute;tat de votre livraison Colissimo.<br />
                    <p style="text-align:center;font-weight:bold;">GRATUIT au-del&agrave; de 49&euro; d&#039;achat<br />4,90&euro; pour moins de 49&euro; d&#039;achat</p><br /></li>
                    <li>En <b>Mondial Relay</b> : 2-3 ouvr&eacute;s en France m&eacute;tropolitaine.<br />
                    Parce que vous n&#039;&ecirc;tes pas toujours &agrave; votre domicile ou parce que votre bo&icirc;te aux lettres est trop petite pour accueillir votre nouvelle lingerie, nous vous offrons &eacute;galement la possibilit&eacute; de retirer votre colis au sein d&#039;un des 4 800 points relais de notre partenaire Mondial Relay. Vous &ecirc;tes averti par email de l&#039;arriv&eacute;e de votre colis au sein du point relais que vous avez choisi et vous pouvez ainsi r&eacute;cup&eacute;rer votre colis quand vous le souhaitez, dans un d&eacute;lai de 14 jours &agrave; compter de la date de r&eacute;ception de votre email.<br />
                    <p style="text-align:center;font-weight:bold;">GRATUIT au-del&agrave; de 49&euro; d&#039;achat<br />4,90€ pour moins de 49&euro; d&#039;achat</p><br /></li>
                    <li>En <b>EXPRESS (Chronopost Demain chez vous)</b> : 24h ouvrables maximum, en France m&eacute;tropolitaine.<br />
                    Livr&eacute; le lendemain avant 13h pour les commandes avant 12h. SMS avant la livraison.
                    Remis contre Signature et, en cas d&#039;absence, d&eacute;pos&eacute; &agrave; un Relais Colis&reg;.<br />
                    <p style="text-align:center;font-weight:bold;">8,50€ (rembours&eacute; si non livr&eacute; le lendemain - pas de livraison le samedi ou dimanche)</p><br /></li>
                    <li><b>LIVRAISONS INTERNATIONALES</b><br />
                    Choisissez votre pays ou zone g&eacute;ographique pour les co&ucirc;ts et d&eacute;lais de livraisons. :
                    
                        <script type="text/javascript">
                            var country2 ="0";
                            var oldCountry2="0";

                            function delivery2(x){
                                oldCountry2 = country2;

                                if(!oldCountry2){oldCountry2="0";}

                                country2=x.value;
                                if(oldCountry2!="0")
                                    document.getElementById(oldCountry2).className="hide";

                                if(country2!="0")
                                document.getElementById(country2).className="";

                            $('#cboxContent').colorbox.resize();

                            }
                        </script>
                        

                        <form>
                <select autocomplete="off" name="country" size = "1" onChange="delivery2(this)">
                    <option value="0" selected="selected"><b>---</b></option>
                    <option value="country9b">DOM-TOM</option>
                    <optgroup label="EUROPE">
                        <option value="country1b">Italie</option>
                        <option value="country2b">Espagne &amp; Portugal</option>
                        <option value="country3b">Belgique</option>
                        <option value="country4b">Pays Bas</option>
                        <option value="country5b">Luxembourg</option>
                        <option value="country6b">Royaume-Uni</option>
                        <option value="country7b">Allemagne &amp; Autriche</option>
                        <option value="country8b">Suisse et Norv&egrave;ge</option>
                        <option value="country10b">autres pays de l&#039;UE</option>
                        <option value="country11b">Pays de l&#039;Europe hors UE (Turquie, Ukraine, Serbie, etc)</option>
                    </optgroup>
                    <optgroup label="MONDE">
                        <option value="country12b">USA / Canada</option>
                        <option value="country13b">Israel, Argentine, Br&eacute;sil, Liban, Maroc, Arabie Saoudite, UAE, Yemen</option>
                        <option value="country14b">Russia</option>
                        <option value="country15b">Chine, Japon, Hong-Kong, Australie, et le reste du monde</option>
                    </optgroup>
                </select>
            </form>
            <p style="" id="0" class="hide"></p>
            <div> <!-- tableaux pays -->
                    <div id="country1b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>Bartolini</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td> 7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country2b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>SEUR</td>
                                <td>5-6 jours ouvr&eacute;s</td>
                                <td>8.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country3b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST TAXIPOST</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>6.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country4b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td> 7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country5b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td>7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country6b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>GLS</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>8.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country7b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>B-POST INTERNATIONAL</td>
                                <td>3-4 jours ouvr&eacute;s</td>
                                <td>7.90 €</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>12.50 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country8b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>17.90 €</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div><!--fin pays proches-->
                    <div id="country9b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>STANDARD</td>
                                <td>COLISSIMO OUTRE-MER</td>
                                <td>5-7 jours ouvr&eacute;s</td>
                                <td>< 250 € : 17.90 € à 21.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>4-5 jours ouvr&eacute;s</td>
                                <td>< 250 € : 24.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country10b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>17.90 €</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country11b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>24.90 €</td>
                            </tr>
                        </table>
                    </div>
                    <div id="country12b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 18.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country13b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 35.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country14b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>35.90 € <br /><span class="Citalic">(max 190&euro; ar commande,<br />  et 1000&euro; par mois)</span></td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                    <div id="country15b" class="hide">
                        <table class="country_tab">
                            <tr class="country_tab_firstRow">
                            <td style="background-color : #fff !important; "></td>
                                <td>Service</td>
                                <td>D&eacute;lais de livraison</td>
                                <td>Co&ucirc;t par montant de commande</td>
                            </tr>
                            <tr>
                                <td>EXPRESS</td>
                                <td>FEDEX</td>
                                <td>2-3 jours ouvr&eacute;s</td>
                                <td>< 250 € : 24.90 € <br /> > 250 € : GRATUIT</td>
                            </tr>
                        </table>
                        <p style="font-size:11px;"><b>You may be liable for import duty / tax on goods entering your country</b>. The amount of duty (if any) depends on the type of goods and their value. Some items can be imported without paying any duty at all.<br/>
                        <b>Any additional charges for customs clearance must be borne by you</b>. We have no control over these charges and unfortunately can't predict what they might be.<br/>
                        <b>It is a legal requirement that we declare the full value of the goods</b> (not including shipping charges) on all packages destined outside the European Union.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden">
            <div id="retour_offert" class="popin">
                <b><span style="font-family: georgia, palatino; font-size: 10pt;">Retour gratuit  &amp; sous 100 jours</span></b><br /><br />
                <p style="font-size: 10pt; text-align:justify;"><em>Chez Lemon Curve vous disposez d&#039;une qualit&eacute; de service incroyable incluant un retour gratuit pendant <b>100 jours</b>.</em><br /><br />
                Pas de pression, vous avez 100 jours (3 mois) pour d&eacute;cider si vous conservez ou non votre lingerie. Prenez le temps qu&#039;il vous faut et si vos achats ne sont pas &agrave; la hauteur de vos attentes, connectez-vous &agrave; votre compte, dans l&#039;espace &quot;g&eacute;rer mes retours&quot; pour imprimer votre &eacute;tiquette de retour pr&eacute;pay&eacute;e.<br /><br />
                Si la lingerie retourn&eacute;e est en parfait &eacute;tat, dans son emballage d&#039;origine, avec ses &eacute;tiquettes et non port&eacute;e, nous vous remboursons sans aucune d&eacute;marche suppl&eacute;mentaire de votre part.<br /><br />
                Seuls les articles achet&eacute;s en soldes ou en promotion sont &agrave; retourner &agrave; vos frais, mais vous avez tout de m&ecirc;me 100 jours pour d&eacute;cider !</p>
            </div>
        </div>
        
    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-6.newrelic.com","licenseKey":"6594330dff","applicationID":"3402049","transactionName":"M1IGMUpXVxECVBYMVwoYMRdRGVAMB1IaS0gMRw==","queueTime":0,"applicationTime":452,"ttGuid":"","agentToken":"","atts":"HxUFRwJNRB8=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script></body>
</html>
