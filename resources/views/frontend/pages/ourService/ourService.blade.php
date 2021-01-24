<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>​Our Services | 1st Choice Family Service</title>
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
        href="{{asset('frontend/wp-content/themes/push10custom/assets/dist/video-js.min76ab.css')}}"
        onload="this.onload=null;this.rel='stylesheet';" as="style">
        <link rel="preload" onerror="this.rel='stylesheet';"
        href="{{asset('frontend/wp-content/themes/push10custom/assets/dist/main.min76ab.css')}}"
        onload="this.onload=null;this.rel='stylesheet';" as="style">
        <link rel="preload" onerror="this.rel='stylesheet';" href="{{asset('frontend/wp-content/themes/push10custom/maintenance12d2.css')}}"
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
	class="page-template page-template-templates page-template-services-landing page-template-templatesservices-landing-php page page-id-75 interior-page"
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
{{--
		<header>
			<div class="frame">

				<div id="logo">
					<a href="../index.html" id="logo-link">

						<img alt="Open Systems Healthcare Logo" id="main-logo"
							src="../assets/images/home/01Home_MenuLogo.svg">
						<img alt="Open Systems Healthcare Logo" id="color-logo"
							src="../assets/images/home/01Home_MenuLogo_BLACK.svg">

					</a>
				</div>
				<div class="header-align-right">
					<ul class="main-nav">
						<li id="menu-item-91"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-91">
							<a href="../about-us/index.html">About Us</a>
							<ul class="sub-menu">
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="../index.html">Home</a></li>
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="../about-us/index.html">About Us</a></li>
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="../our-team/index.html">Our Team</a></li>
							</ul>
						</li>
						<li id="menu-item-90"
							class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-75 current_page_item menu-item-has-children menu-item-90">
							<a href="index.html" aria-current="page">Our Services</a>
							<ul class="sub-menu">
								<li id="menu-item-606"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
										href="../services/index.html">Our Services</a></li>
								<li id="menu-item-606"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
										href="../services/remote-monitoring/index.html">Remote Monitoring</a></li>
								<li id="menu-item-607"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-607"><a
										href="../services/direct-support-profestional/index.html">Direct Support
										Professionals</a></li>
								<li id="menu-item-608"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-608"><a
										href="../services/emergency-response-team/index.html">Emergency Response
										Team</a>
								</li>
							</ul>
						</li>
						<li id="menu-item-90"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-90">
							<a href="../careers/index.html">Careers</a>
							<ul class="sub-menu">
								<li id="menu-item-606"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
										href="../careers/index.html">Careers</a></li>
								<li id="menu-item-606"
									class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
										href="../careers/dsp-hiring/index.html">DSP Hiring</a></li>
							</ul>
						</li>
						<li id="menu-item-87"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a
								href="../campus-ambassador/index.html">1CFS Campus Ambassador</a></li>
						<li id="menu-item-682"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-682">
							<a href="../news-blog/index.html">News &#038; Blog</a>
							<ul class="sub-menu">
								<li id="menu-item-1308"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
										href="../news-blog/index.html">News &#038; Blog</a></li>
								<li id="menu-item-1308"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
										href="../news-blog/press/index.html">Press</a></li>
								<li id="menu-item-1308"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
										href="../news-blog/image-gallery/index.html">Image Gallery</a></li>
								<li id="menu-item-3081"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a
										href="../news-blog/video-gallery/index.html">Video Gallery</a></li>
							</ul>
						</li>
					</ul>
					<div class="util-nav">
						<div class="phone">
							<a class="donate-btn" href="https://zoom.us/j/3890358376" target="_blank">Get Live
								Support</a>
						</div>
						<div class="phone">
							<img alt="Telephone Icon"
								src="../wp-content/themes/push10custom/assets/imgs/icons/phone.svg">
							<a href="tel:(614) 321-2430">Call Now</a>
						</div>
					</div>

				</div>

				<div id="menu-toggle">
					<div class="top-bar"></div>
				</div>
			</div>
        </header> --}}
        @extends('frontend.layouts.header')


		<main id="main-content" class="landing-pages">


            <section class="banner solid-blue">

                <div class="frame row grid-row">
                    <div class="col-lg-5">
                        <img alt="OSH Home Care Services" class="inject"
                            src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}">
                    </div>

                    <div class="col-lg-7">
                        <h1 class="hide-logo-trigger">Services</h1>
                        <div class="text">
                            <p>With 1st Choice Family Services, you are in control. We designed our services to provide
                                you with the ability to make informed choices You decide how we can help you.
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <div class="frame">
                <h3 class="hide-logo-trigger">Direct Support Services</h3>
                <div class="text service-text">
                    <p> At 1st Choice Family Services, you're the boss. Every single services was designed to give you
                        the perfect balance of support and independence.<br> <br>
                        <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                            href="{{url('ourteam')}}" class="link">Join Our Team</a>

                    </p>
                </div>
            </div>

            <div class="frame">
                <h3 class="hide-logo-trigger">Remote Monitoring</h3>
                <div class="text service-text">
                    <p> Remote monitoring services help you be safe at all times while maintaining total independence.
                        <br> <br>
                        <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                            href="{{url('ourteam')}}" class="link">Join Our Team</a>

                    </p>
                </div>
            </div>

            <div class="frame">
                <h3 class="hide-logo-trigger">COVID RAPID RESPONSE TEAM</h3>
                <div class="text service-text">
                    <p> Stay safe and protected even during a pandemic with our quick
                        response assistance care.
                        <br> <br>
                        <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                            href="{{url('ourteam')}}" class="link">Join Our Team</a>

                    </p>
                </div>
            </div>




            <section class="faded-cta"
                style="background-image:linear-gradient(-90deg, #FFFFFF 1%, rgba(255,255,255,0.00) 100%), url({{asset('frontend/assets/images/icon/Service.jpg')}})">
                <div class="frame">
                    <div class="cta-container">
                        <div class="cta-container-inner">
                            <div data-anim="in" class=" cta-icon">
                                <img alt="CTA Icon" class="inject" src="{{asset('frontend/wp-content/uploads/2019/03/quiz.svg')}}">

                            </div>
                            <h3 data-anim="in">STILL IN DOUBT? FIND THE EXACT SERVICE FOR YOU! </h3>
                            <p data-anim="in">Every person is different, and so are the Direct Support options. Take the
                                quiz and find the right one for you.</p>
                            <a data-anim="in" class="link" href="{{url('quiz')}}">Take Our Quiz</a>
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
