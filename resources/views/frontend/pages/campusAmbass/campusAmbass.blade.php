<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>​1CFS Campus Ambassador | 1st Choice Family Service</title>

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
<link rel="preload" onerror="this.rel='stylesheet';"
href="{{asset('frontend/wp-content/themes/push10custom/maintenance285c.css')}}"
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
	class="page-template page-template-templates page-template-about page-template-templatesabout-php page page-id-73 interior-page"
	style="opacity:0; transition:all 0.5s">



	<!-- Section for Unsupported Browsers - anything below IE11 - Add in Site Logo-->
	<div id="ie-unsupported">
		<img width="200" alt="Open Systems Healthcare Logo"
			src="../wp-content/themes/push10custom/assets/imgs/logos/color-logo.svg">
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
                            src="{{asset('frontend/assets/images/NewPagePhotos02/03Campus_Illustration.svg')}}">
                    </div>

                    <div class="col-lg-7">
                        <h1 class="hide-logo-trigger">Campus Ambassadors</h1>
                        <div class="text">
                            <p>Experience learning opportunities and receive an incredible chance to network with leading experts in the direct support professional  industry.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="icon-info-blocks">
                <!-- 	 -->
                <div class="frame grid-row">

                    <div class="info-block-item col-lg-6">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="Your Care, Your Choice icon" class="inject"
                                src="{{asset('frontend/wp-content/uploads/2019/03/star.svg')}}">
                        </div>
                        <div class="info-block-inner">
                            <!-- <div class="cursive" data-anim="in">Our Philosophy</div> -->
                            <div class="info-block-header" data-anim="in">Develop New Skills</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Problem resolution, teamwork, conflict resolution, and time management
                                    skills will complement your college education and make you valuable in the job
                                    market.</p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>
                    <div class="info-block-item col-lg-6">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="A Different Standard icon" class="inject"
                                src="{{asset('frontend/wp-content/uploads/2019/03/home.svg')}}">
                        </div>
                        <div class="info-block-inner">
                            <div class="info-block-header" data-anim="in">Great Network Opportunities</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Have you experienced working side by side with experts of a world-class
                                    industry leader organization? Join our  campus ambassador group to learn and grow with us.
                                </p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>
                    <div class="info-block-item col-lg-6">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="Integrity & Trust icon" class="inject"
                                src="{{asset('frontend/wp-content/uploads/2019/03/trust.svg')}}">
                        </div>
                        <div class="info-block-inner">
                            <div class="info-block-header" data-anim="in">Free Training</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Learn how to care properly for yourself and your loved ones with our
                                    health care free training. The instruction is free and is a chance to learn about first aid, stress control and medical advances.
                                </p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>
                    <div class="info-block-item col-lg-6">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="For Us, It's Personal icon" class="inject"
                                src="{{asset('frontend/wp-content/uploads/2019/03/handshake.svg')}}">
                        </div>
                        <div class="info-block-inner">
                            <div class="info-block-header" data-anim="in">Internship Opportunities</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Get into a little known industry full of personal growth opportunities
                                    where every single day is rewarding, and you can feel at home.</p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="image-cta"
                style="background-image:url({{asset('frontend/assets/images/update-image/01_CampusAmbass.jpg')}})">
                <div class="frame">
                    <div class="cta-container" data-anim="left">
                        <div class="cta-container-inner">
                            <h3>Why A Campus Ambassador Program? </h3>
                            <p class="p1">By creating this camp, we aim to offer you an opportunity of being a valuable
                                professional by strengthening your soft skills. We aim to introduce you to a
                                little-known industry packaged with growth and personal meaning.</p>
                            <!-- <a href="../our-team/index.html" target="_blank">Meet The Team</a> -->
                        </div>

                    </div>
                </div>
            </section>

		</main>
        @extends('frontend.layouts.footer')

	</div><!-- close #site -->

    <script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
    type="text/javascript"></script>
    <script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>


</body>

</html>
