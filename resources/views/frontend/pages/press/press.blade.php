<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>​Press | 1st Choice Family Service</title>

	<script>
		var b = document.documentElement;
		b.className = b.className.replace('no-js', 'js');
		b.setAttribute("data-useragent", navigator.userAgent);
		b.setAttribute("data-platform", navigator.platform);
		function defer(method) {
			// console.log("Dsdsdsd");
			if (window.jQuery) {
				method();
			} else {
				setTimeout(function () { defer(method) }, 50);
			}
		}
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
<link rel="preload" onerror="this.rel='stylesheet';"
href="{{asset('frontend/wp-content/plugins/instagram-feed-pro/css/sb-instagram.min77e1.css')}}"
onload="this.onload=null;this.rel='stylesheet';" as="style">
<link rel="preload" onerror="this.rel='stylesheet';"
href="{{asset('frontend/wp-content/plugins/simple-banner/simple-bannerf71b.css')}}"
onload="this.onload=null;this.rel='stylesheet';" as="style">
<link rel="preload" onerror="this.rel='stylesheet';"
href="{{asset('frontend/wp-content/themes/push10custom/assets/dist/video-js.min9232.css')}}"
onload="this.onload=null;this.rel='stylesheet';" as="style">
<link rel="preload" onerror="this.rel='stylesheet';"
href="{{asset('frontend/wp-content/themes/push10custom/assets/dist/main.min9232.css')}}"
onload="this.onload=null;this.rel='stylesheet';" as="style">
<link rel="preload" onerror="this.rel='stylesheet';" href="{{asset('frontend/wp-content/themes/push10custom/maintenance285c.css')}}"
onload="this.onload=null;this.rel='stylesheet';" as="style">
<script defer src="{{asset('frontend/wp-includes/js/jquery/jquery.min9d52.js')}}" type="text/javascript"></script>
<script defer src="{{asset('frontend/wp-includes/js/jquery/jquery-migrate.mind617.js')}}" type="text/javascript"></script>

	<style type="text/css" media="screen">
		.simple-banner {
			background: #f16521;
		}
	</style>
	<style type="text/css" media="screen">
		.simple-banner .simple-banner-text {
			color: #ffffff;
		}
	</style>
	<style type="text/css" media="screen">
		.simple-banner .simple-banner-text a {
			color: #1a4175;
		}
	</style>


	<script>
		// `rel=preload` Polyfill for <link> elements
		var DOMTokenListSupports = function (tokenList, token) {
			if (!tokenList || !tokenList.supports) {
				return;
			}
			try {
				return tokenList.supports(token);
			}
			catch (e) {
				if (e instanceof TypeError) {
					console.log("The DOMTokenList doesn’t have a supported tokens list");
				}
				else {
					console.error("That shouldn’t have happened");
				}
			}
		};
		var linkSupportsPreload = DOMTokenListSupports(document.createElement('link').relList, 'preload');
		if (!linkSupportsPreload) {
			// Dynamically load the things that relied on preload.
			var links = document.getElementsByTagName('link');
			for (var i = 0; i < links.length; i++) {
				var link = links[i];
				// qualify links to those with rel=preload and as=style attrs
				if (link.rel === 'preload' && link.getAttribute('as') === 'style') {
					// prevent re-running on link
					link.setAttribute('rel', 'stylesheet');
				}
			}
		}

	</script>
	<style>
		#ie-unsupported {
			display: none;
			position: fixed;
			margin: 0 auto;
			margin-top: 400px;
			text-align: center;
			width: 100%;
		}

		#ie-unsupported img {
			margin: 0 auto;
			margin-bottom: 40px;
			width: 200px;
		}

		#ie-unsupported p {
			max-width: 300px;
			margin: 0 auto;
		}

		html[data-useragent*='MSIE 10.0'] #ie-unsupported {
			display: block;
		}

		html[data-useragent*='MSIE 10.0'] #site {
			display: none;
		}

		.ie9 #ie-unsupported {
			display: block;
		}

		.lt-ie9 #ie-unsupported {
			display: block;
		}

		.lt-ie9 #site {
			display: none;
		}

		.ie9 #site {
			display: none;
		}
	</style>
</head>


<body
	class="page-template page-template-templates page-template-archive page-template-templatesarchive-php page page-id-439 interior-page"
	style="opacity:0; transition:all 0.5s">


	<!-- Section for Unsupported Browsers - anything below IE11 - Add in Site Logo-->
	<div id="ie-unsupported">
		<img width="200" alt="Open Systems Healthcare Logo"
			src="../../wp-content/themes/push10custom/assets/imgs/logos/color-logo.svg">
		<p>Hello, you are using an old browser that's unsafe and no longer supported. Please consider
			<a href="https://support.microsoft.com/en-us/help/17621/internet-explorer-downloads">updating</a>
			your browser to a newer version, or downloading a
			<a href="https://www.google.com/chrome/browser/desktop/index.html">modern</a>
			browser.
		</p>
	</div>
	<!-- End Unsupported Section -->


	<div id="site">
        @extends('frontend.layouts.header')


		<main id="main-content">

                    
        <section class="banner solid-blue">
            <div class="frame row grid-row">
                <div class="col-lg-5">
                    <img alt="OSH Our Mission" class="inject"
                        src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}">
                </div>

                <div class="col-lg-7">
                    <h1 class="hide-logo-trigger">Press</h1>
                </div>
            </div>
        </section>

        <div class="landing-archive grid-row">
            @foreach ($allPress as $item)
            <div class="post-item">
                <img src="{{asset('backend/img/press/'.$item->image)}}">
                <div class="post-item-inner">
                    <a target="_blank" href="{{$item->url}}"
                        class="post-item-title">{{$item->title}}
                    </a>
                    <div class="post-item-teaser">{{substr($item->title, 0, 100)}}</div>
                    <a class="link" target="_blank" href="{{$item->url}}">Learn More</a>
                </div>
            </div>
            <div class="post-item">
                <img src="{{asset('frontend/assets/images/news-blogs/adnann4.jpg')}}">
                <div class="post-item-inner">
                    <a href="#" class="post-item-title">Best Antidote Work Stress</a>
                    <div class="post-item-teaser">The global pandemic has shown us how unpredictable our world can
                        be. It has forced us to become adaptable and flexible given our new work environment. Most
                        of us are ...</div>
                    <a class="link" href="#">Learn
                        More</a>
                </div>
            </div>
            @endforeach
        </div>



		</main>


 @extends('frontend.layouts.footer')

	</div><!-- close #site -->

    <script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
    type="text/javascript"></script>
    <script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>



</body>



</html>