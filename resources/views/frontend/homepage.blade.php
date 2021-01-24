<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />

	<title>​Home | 1st Choice Family Service</title>
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
<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">


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



<body class="home page-template-default page page-id-14" style="opacity:0; transition:all 0.5s">


	<!-- Section for Unsupported Browsers - anything below IE11 - Add in Site Logo-->
	<div id="ie-unsupported">
		<img width="200" alt="Open Systems Healthcare Logo"
			src="wp-content/themes/push10custom/assets/imgs/logos/color-logo.svg">
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




		<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Launch demo modal
		</button> -->

		<!-- Modal -->
		<div class="modal fade" id="onClickVideoPlay" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-body youtubeVideoOnPlay">
						<iframe src="https://www.youtube-nocookie.com/embed/A3ULB7UN_3w?autoplay=1" frameborder="0"
							allow="accelerometer; allow=autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>

					</div>
				</div>
			</div>
		</div>



		<main id="main-content">


            <section id="home-banner">
                <video id='my-video' controls class="video-js" preload='auto'
                    poster="{{asset('frontend/assets/images/update-image/04_HomeBanner.jpg')}}">
                    <source src="{{asset('frontend/assets/videos/TheExperienceofanEssentialDirectSupportProfessionals(DSP).mp4')}}"
                        type="video/mp4">
                    <p class='vjs-no-js'>
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                    </p>
                </video>
                <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/A3ULB7UN_3w"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe> -->

                <!-- <div class="video-close">X</div> -->
                <div class="container">
                    <h1 class="hide-logo-trigger" style="font-size: 48px;">Direct Support Professionals
                        You Can Rely On</h1>
                    <div class="banner-intro">
                        <p class="p1">We help people with developmental disabilities become the best version of
                            themselves.</p>
                        <a class="link" href="about-us/index.html">Get to Know 1st Choice Family Services.</a>
                        <button class="play-video" data-toggle="modal" data-target="#onClickVideoPlay"> Play
                            Video</button>
                    </div>
                </div>
            </section>
                <div class="icon-ctas">
                    <div class="frame row">
                        <div class="cta-item">
                            <div class="cta-item-inner">
                                <div class="icon">
                                    <img alt="Find Care" class="inject"
                                        src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/01Home_01Service.svg')}}">
                                </div>
                                <h3>Get Services</h3>
                                <p> Do you or anyone in your family need an expert direct support professional? Find out how
                                    we can help you here.</p>
                                <a class="link" href="{{url('ourService')}}">Get Services</a>
                            </div>
                        </div>
                        <div class="cta-item">
                            <div class="cta-item-inner">
                                <div class="icon">
                                    <img alt="Find A Job" class="inject"
                                        src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/01Home_02Work.svg')}}">
                                </div>
                                <h3>Get Work</h3>
                                <p>Are you looking for a rewarding career that challenges you where you can make a real
                                    difference and impact the world?</p>
                                <a class="link" href="{{route('career.index')}}">Join Our Team</a>
                            </div>
                        </div>
                        <div class="cta-item">
                            <div class="cta-item-inner">
                                <div class="icon">
                                    <img alt="Not Sure?" class="inject"
                                        src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/01Home_03Doubt.svg')}}">
                                </div>
                                <h3>Still In Doubt?</h3>
                                <p>Not sure which service or career path suits you best?
                                    We have a world of choices. Take the quiz to find out!</p>
                                <a class="link" href="{{url('quiz')}}">Take the Quiz</a>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="find-an-office" class="two-col gray-diagonal">
                    <div class="frame">
                        <div data-anim="left" class="col-half">
                            <h2>Find An Expert</h2>
                            <p><a class="callUs" href="tel:(614) 321-2430">Call Now</a> To get immediate
                                assistance or <a class="callUs" href="https://zoom.us/j/3890358376">Get Live
                                    Support</a></p>
                        </div>
                        <div class="col-half" data-anim="right">
                            <img alt="Find an Office Illustration" src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}"
                                class="inject">
                        </div>
                    </div>
                </section>



                <div id="with-us-youre-home" class="two-col-full-width">
                    <div class="row frame-right">
                        <div class="col-half" data-anim="left">
                            <div class="img-wrap">
                                <img width="831" height="554" src="{{asset('frontend/assets/images/update-image/03_WithUs.jpg')}}"
                                    class="attachment-full size-full" alt="" loading="lazy" srcset=""
                                    sizes="(max-width: 831px) 100vw, 831px" />
                                <a href="{{route('career.index')}}">Careers</a>

                            </div>
                        </div>
                        <div class="col-half" data-anim="right">
                            <div class="fancy-script">Be All You Can Be</div>
                            <div class="text">
                                <p class="p1">As Direct Support Professionals, we have only one mission in mind: to help you
                                    achieve your full
                                    potential, become the best person you can be, and do everything you have always wanted.
                                    You only have one life, and we'd love to help you live it the way you like it.</p>
                                <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                                    href="{{route('career.index')}}" class="link">Join The Team</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="partner-logos">
                    <h3 data-anim="in">As Featured In</h3>
                    <div class="frame row flex-align">
                        <div data-anim="in" class="logo-item">
                            <a target="_blank"
                                href="https://finance.yahoo.com/news/1st-choice-family-services-delivers-195000980.html"><img
                                    width="155" height="95" src="{{asset('frontend/assets/images/logo/1200px-Yahoo_Finance_Logo_2013.svg.png')}}"
                                    class="attachment-full size-full" alt="" loading="lazy" /></a>
                        </div>

                        <div data-anim="in" class="logo-item">
                            <a target="_blank"
                                href="https://thecourier.com/news/288793/the-mission-is-simple-give-back/"><img width="220"
                                    height="95" src="{{asset('frontend/assets/images/logo/currier-logo.png')}}" class="attachment-full size-full"
                                    alt="" loading="lazy" /></a>
                        </div>

                        <div data-anim="in" class="logo-item">
                            <a target="_blank"
                                href="https://guardian.co.tt/news/mission-giveback-shares-groceries-and-computer-tablets-6.2.1271237.02c323ab74"><img
                                    width="220" height="95" src="{{asset('frontend/assets/images/logo/gurdian.png')}}"
                                    class="attachment-full size-full" alt="" loading="lazy" /></a>
                        </div>

                        <div data-anim="in" class="logo-item">
                            <a target="_blank"
                                href="https://www.wfmj.com/story/43075355/1st-choice-family-services-delivers-during-mission-giveback"><img
                                    width="220" height="95" src="{{asset('frontend/assets/images/logo/21WFM.webp')}}"
                                    class="attachment-full size-full" alt="" loading="lazy" /></a>
                        </div>


                        <div data-anim="in" class="logo-item">
                            <a target="_blank"
                                href="http://bloggersofhealth.com/prnewswire/?rkey=20201217CL28327&filter=20225#sthash.ZIoO3pJn.dpbs"><img
                                    width="220" height="95" src="{{asset('frontend/assets/images/logo/bloggerHealth.png')}}"
                                    class="attachment-full size-full" alt="" loading="lazy" /></a>
                        </div>


                    </div>
                </div>



                <div class="testimonials" style="background-image:url({{asset('frontend/assets/images/home/01Home_Testimonials.jpg')}})">
                    <div class="frame">
                        <div class="testimonial-slider">
                            <div class="testimonial-item">
                                <div class="testimonial-item-inner">
                                    <img src="{{asset('frontend/wp-content/uploads/2019/04/girl-icon.svg')}}" class="attachment-full size-full"
                                        alt="" loading="lazy" />
                                    <div class="quote">
                                        <p><i>“This job is very rewarding in itself. I take pride in my work of taking care
                                                of my clients. There's nothing like the bond between a DSP and a
                                                client.”</i></p>
                                    </div>
                                    <!-- <div class="attribution">- XYZ</div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Modal -->
            <div class="modal fade" id="onClickVideoPlay" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body youtubeVideoOnPlay">
                        <iframe src="https://www.youtube-nocookie.com/embed/A3ULB7UN_3w?autoplay=1" frameborder="0"
                            allow="accelerometer; allow=autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>

		</main>
        @extends('frontend.layouts.footer')

	</div><!-- close #site -->


    <script src="{{asset('frontend/assets/bootstrap/js/jquery-3.5.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
type="text/javascript"></script>
<script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>

</body>


</html>
