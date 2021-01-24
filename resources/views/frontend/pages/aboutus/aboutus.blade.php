<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>​About Us | 1st Choice Family Service</title>

	<script>
		var b = document.documentElement;
		b.className = b.className.replace('no-js', 'js');
		b.setAttribute("data-useragent", navigator.userAgent);
		b.setAttribute("data-platform", navigator.platform);
		function defer(method) {
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



	<script>
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
			var links = document.getElementsByTagName('link');
			for (var i = 0; i < links.length; i++) {
				var link = links[i];
				if (link.rel === 'preload' && link.getAttribute('as') === 'style') {
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



<body class="page-template page-template-templates page-template-about page-template-templatesabout-php page page-id-73 interior-page"
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
							class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-73 current_page_item menu-item-has-children menu-item-91">
							<a href="index.html" aria-current="page">About Us</a>
							<ul class="sub-menu">
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="../index.html">Home</a></li>
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="index.html">About Us</a></li>
								<li id="menu-item-678"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
										href="../our-team/index.html">Our Team</a></li>
							</ul>
						</li>
						<li id="menu-item-90"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-90">
							<a href="../services/index.html">Our Services</a>
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

        <header>
            <div class="frame">

                <div id="logo">
                    <a href="{{route('home')}}" id="logo-link">

                        <img alt="Open Systems Healthcare Logo" id="main-logo"
                            src="{{asset('frontend/assets/images/home/01Home_MenuLogo.sv')}}g">
                        <img alt="Open Systems Healthcare Logo" id="color-logo"
                            src="{{asset('frontend/assets/images/home/01Home_MenuLogo_BLACK.svg')}}">
                    </a>
                </div>
                <div class="header-align-right">
                    <ul class="main-nav">
                        <li id="menu-item-91"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-91">
                            <a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li id="menu-item-678"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
                                        href="{{route('home')}}">Home</a></li>
                                <li id="menu-item-678"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
                                        href="{{url('/about')}}">About Us</a></li>
                                <li id="menu-item-678"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a
                                        href="{{url('/ourteam')}}">Our Team</a></li>


                            </ul>
                        </li>
                        <li id="menu-item-90"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-90">
                            <a href="#">Our Services</a>
                            <ul class="sub-menu">
                                <li id="menu-item-606"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
                                        href="{{url('/ourService')}}">Our Services</a></li>
                                <li id="menu-item-606"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
                                        href="{{url('/remortMonitoring')}}">Remote Monitoring</a></li>
                                <li id="menu-item-607"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-607"><a
                                        href="{{url('/directSupport')}}">Direct Support
                                        Professionals</a></li>
                                <li id="menu-item-608"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-608"><a
                                        href="">COVID RAPID RESPONSE TEAM</a>
                                </li>
                            </ul>
                        </li>

                        <li id="menu-item-90"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-90">
                            <a href="#">Careers</a>
                            <ul class="sub-menu">
                                <li id="menu-item-606"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
                                        href="{{route('career.index')}}">Careers</a></li>
                                <li id="menu-item-606"
                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-606"><a
                                        href="{{route('career.dspHiring')}}">DSP Hiring</a></li>
                            </ul>
                        </li>



                        <li id="menu-item-87"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a
                                href="{{url('campusAmbassador')}}">1CFS Campus Ambassador</a></li>
                        <li id="menu-item-682"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-682">
                            <a href="news-blog/index.html">News &#038; Blog</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1308"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
                                        href="{{route('blog.index')}}">News &#038; Blog</a></li>
                                <li id="menu-item-1308"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
                                        href="{{url('press')}}">Press</a></li>
                                <li id="menu-item-1308"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a
                                        href="{{url('/imageGallery')}}">Image Gallery</a></li>
                                <li id="menu-item-3081"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a
                                        href="{{url('videoGallery')}}">Video Gallery</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="util-nav">
                        <div class="phone">
                            <a class="donate-btn" href="https://zoom.us/j/3890358376" target="_blank">Get Live Support</a>
                        </div>
                        <div class="phone">
                            <img alt="Telephone Icon" src="{{asset('frontend/wp-content/themes/push10custom/assets/imgs/icons/phone.svg')}}">
                            <a href="tel:(614) 321-2430">Call Now</a>
                        </div>
                    </div>

                </div>

                <div id="menu-toggle">
                    <div class="top-bar"></div>
                </div>
            </div>
        </header>



		<main id="main-content">

            <section class="banner solid-blue">



                <div class="frame  grid-row">
                    <div class="col-lg-5">
                        <img alt="OSH Our Mission" class="inject"
                            src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}">
                    </div>

                    <div class="col-lg-7">
                        <h1 class="hide-logo-trigger">Our Mission</h1>
                        <div class="text">
                            <p>To help people with developmental disabilities overcome life challenges through
                                advocation, informed decision making, and total community integration.
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
                            <div class="cursive" data-anim="in">Our Philosophy</div>
                            <div class="info-block-header" data-anim="in">Care On Your Terms</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Every person should have the right to decide how they want to live their
                                    lives. At 1st CFS, we design our services to provide you with independence and
                                    informed decision-making so you can live your life just the way you want it.</p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>
                    <div class="info-block-item col-lg-6">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="A Different Standard icon" class="inject"
                                src="{{asset('frontend//wp-content/uploads/2019/03/home.svg')}}">
                        </div>
                        <div class="info-block-inner">
                            <div class="info-block-header" data-anim="in">A New Way Of Doing Things</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">A lot of positive changes have been made since the ADA Act of 1990. Still,
                                    poor care coordination and lack of training are the most common issues in the
                                    industry. We aim to eradicate these with our world-class training and coordination
                                    systems.</p>
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
                            <div class="info-block-header" data-anim="in">A Service You Can Trust</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">Trust-based relationships are the core of everything we do. From our
                                    internal processes to our clients' support services, everything we do is specially
                                    planned to build strong bond relationships that last a lifetime.</p>
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
                            <div class="info-block-header" data-anim="in">Your Safety Matter To Us</div>
                            <div class="info-block-text" data-anim="in">
                                <p class="p1">At 1st Choice Family Services, we believe the only way possible to help
                                    disabled people join society is through customized services that fit them perfectly
                                    and are adaptable. </p>
                            </div>
                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>

                </div>
            </section>

            <section class="image-cta" style="background-image:url({{asset('frontend/assets/images/NewPagePhotos02/02_AboutUs.jpg')}})">
                <div class="frame">
                    <div class="cta-container" data-anim="left">
                        <div class="cta-container-inner">
                            <h3>Our History</h3>
                            <p class="p1">After years of working in the direct support professional industry, our
                                leaders realized several issues with the current standards. That’s why they decided to
                                create a company under the promise of doing things the right way.</p>
                            <a href="{{url('ourteam')}}" target="_blank">Meet The Team</a>
                        </div>

                    </div>
                </div>
            </section>

		</main>



        @extends('frontend.layouts.footer')




	</div>
	<script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
		type="text/javascript"></script>
	<script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>


</body>

</html>
