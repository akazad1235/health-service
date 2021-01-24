<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>Our Team | 1st Choice Family Service</title>

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


<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">



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

        .employee-item-title a{
            color: white;
            background-color: #e50e38;
            padding: 1px 15px;
            border-radius: 5px;
        }
        
	</style>

</head>



<body
	class="page-template page-template-templates page-template-team page-template-templatesteam-php page page-id-160 interior-page"
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


			<section class="banner transparent-blue-with-image"
            style="background-image:url({{asset('frontend/assets/images/page-photos/01Home_OurTeam.jpg')}})">


            <div class="overlay"></div>

            <div class="frame">
                <h1 class="hide-logo-trigger">Our Team</h1>
                <div class="text">
                    <p> Over 8000 Direct Support Professionals available worldwide and 50 internal administrators
                        providing twenty-four hours support to our DSPs. <br>
                        <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                            href="{{url('ourteam')}}" class="link">Join Our Team</a>

                    </p>
                </div>
            </div>

        </section>


        <section class="container team-repeater">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 d-flex justify-content-center ">

                <div class="col mb-4">
                    <div class="card">
                    <img src="{{asset('frontend/assets/images/NewPagePhotos02/New Page Photos 02/1CFS_AonistIcon.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Aonist Coles</h5>
                            <h5 class="card-title-name">OUR FOUNDER & CEO</h5>

                        </div>
                    </div>

                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('frontend/assets/images/NewPagePhotos02/New Page Photos 02/1CFS_ShastriIcon.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shastri Coles</h5>
                            <h5 class="card-title-name">OUR CO-FOUNDER & CFO</h5>

                        </div>
                    </div>
                </div>


            </div>
        </section>



        
        
        
        <section class="additional-team-members accordion">
            <div class="frame">
                <div class="accordion-header" data-anim="in" data-accordion="finance">Service Managers</div>
                <div class="accordion-inner" id="finance">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Angelita Uballe</div>
                            <div class="employee-item-title">Service Manager</div>
                            <div class="employee-item-title"><a href="mailto: angelita@1stcfs.org">Email</a></div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Brandi Cotton</div>
                            <div class="employee-item-title">Service Manager</div>
                            <div class="employee-item-title"><a href="mailto: brandi@1stcfs.org">Email</a></div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Cassandra Ramrattan</div>
                            <div class="employee-item-title">Service Manager</div>
                            <div class="employee-item-title"><a href="mailto: Cassandra@1stcfs.org">Email</a></div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Jamarr Coles</div>
                            <div class="employee-item-title">Service Manager </div>
                            <div class="employee-item-title"><a href="mailto: Jamarr@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                            src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Jordan Ferguson </div>
                            <div class="employee-item-title">Service Manager </div>
                            <div class="employee-item-title"><a href="mailto: Jordan@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/darker-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Moesha Jeffrey </div>
                            <div class="employee-item-title">Service Manager </div>
                            <div class="employee-item-title"><a href="mailto: Moesha@1stcfs.org">Email</a></div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Steve Franklin</div>
                            <div class="employee-item-title">Senior Service Manager</div>
                            <div class="employee-item-title"><a href="mailto: Steve@1stcfs.org">Email</a></div>
                        </div>

                    </div>

                </div>
                <div class="accordion-header" data-anim="in" data-accordion="human-resources">HR Department</div>
                <div class="accordion-inner" id="human-resources">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Jordanna Chatoor</div>
                            <div class="employee-item-title">Head of HR</div>
                            <div class="employee-item-title"><a href="mailto: Jordanna@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Keith Good</div>
                            <div class="employee-item-title">Recruiter</div>
                            <div class="employee-item-title"><a href="mailto: Keith@1stcfs.org">Email</a></div>


                        </div>

                    </div>


                </div>
                <div class="accordion-header" data-anim="in" data-accordion="it">Admin Department</div>
                <div class="accordion-inner" id="it">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Iris Valles</div>
                            <div class="employee-item-title">Office administrator</div>
                            <div class="employee-item-title"><a href="mailto: Iris@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Alicia Lalla </div>
                            <div class="employee-item-title">Health Management cooridnator</div>
                            <div class="employee-item-title"><a href="mailto: Alicia@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Gwen Coles </div>
                            <div class="employee-item-title">Crisis Management Evaluator</div>
                            <div class="employee-item-title"><a href="mailto: Gwen@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Melanie Nudes</div>
                            <div class="employee-item-title">Adiministrative Manager</div>
                            <div class="employee-item-title"><a href="mailto: Melanie@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Giselle Mota</div>
                            <div class="employee-item-title">Administrative Assistant</div>
                            <div class="employee-item-title"><a href="mailto: Giselle@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Yasir Lalla</div>
                            <div class="employee-item-title">Project Manager</div>
                            <div class="employee-item-title"><a href="mailto: Yasir@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Mike Slate</div>
                            <div class="employee-item-title">Project Manager</div>
                            <div class="employee-item-title"><a href="mailto: Mike@1srcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-golden-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Olivia Hammons</div>
                            <div class="employee-item-title">Project Manager</div>
                            <div class="employee-item-title"><a href="mailto: Olivia@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Magaly Masis</div>
                            <div class="employee-item-title">Project Manager</div>
                            <div class="employee-item-title"><a href="mailto: magaly@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Ashfur Rahman Evan</div>
                            <div class="employee-item-title">Community Manager</div>
                            <div class="employee-item-title"><a href="mailto: Shanewaz@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Touhidur Rahman Adil</div>
                            <div class="employee-item-title">Community Manager</div>
                            <div class="employee-item-title"><a href="mailto: touhidur@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Sheriza Mohammed</div>
                            <div class="employee-item-title">Project Manager</div>
                            <div class="employee-item-title"><a href="mailto: Sheriza@1stcfs.org">Email</a></div>


                        </div>

                    </div>





                </div>
                <div class="accordion-header" data-anim="in" data-accordion="learning---development">WFM Department</div>
                <div class="accordion-inner" id="learning---development">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Marielle Servo</div>
                            <div class="employee-item-title">Director Workforce Management</div>
                            <div class="employee-item-title"><a href="mailto: Marielle@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Cenon Rubiso</div>
                            <div class="employee-item-title">WFM Assistant</div>
                            <div class="employee-item-title"><a href="mailto: Cenon@1stcfs.org">Email</a></div>


                        </div>

                    </div>

                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Nel Castillo</div>
                            <div class="employee-item-title">Workforce Admin</div>
                            <div class="employee-item-title"><a href="mailto: Nel@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Rica Suarez</div>
                            <div class="employee-item-title">Workforce department trainer  </div>
                            <div class="employee-item-title"><a href="mailto: Rica@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Franka Wilson</div>
                            <div class="employee-item-title">Workforce Manager </div>
                            <div class="employee-item-title"><a href="mailto: Franka@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Nestor Montehermoso</div>
                            <div class="employee-item-title">Workforce Management Assistant</div>
                            <div class="employee-item-title"><a href="mailto: Nestor@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Charlyn Nogra</div>
                            <div class="employee-item-title">Workforce Admin</div>
                            <div class="employee-item-title"><a href="mailto: Charlyn@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Jose Carreon</div>
                            <div class="employee-item-title">Workforce Management Assistant</div>
                            <div class="employee-item-title"><a href="mailto: Charlyn@1stcfs.org">Email</a></div>


                        </div>

                    </div>


                </div>
                <div class="accordion-header" data-anim="in" data-accordion="legal">Analytic Department</div>
                <div class="accordion-inner" id="legal">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Adity Patil</div>
                            <div class="employee-item-title">Market Analyst </div>
                            <div class="employee-item-title"><a href="mailto: Adity@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Akshay Patil</div>
                            <div class="employee-item-title">Market Analyst</div>
                            <div class="employee-item-title"><a href="mailto: Akshay@1stcfs.org">Email</a></div>
                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Tapiwa Sibanda</div>
                            <div class="employee-item-title">Business Analyst</div>
                            <div class="employee-item-title"><a href="mailto: Tapiwa@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Kevine Osika </div>
                            <div class="employee-item-title">Business Analyst</div>
                            <div class="employee-item-title"><a href="mailto: Kevine@1stcfs.org">Email</a></div>


                        </div>

                    </div>


                </div>
                <div class="accordion-header" data-anim="in" data-accordion="marketing">Graphic Department</div>
                <div class="accordion-inner" id="marketing">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Paul Alcantara</div>
                            <div class="employee-item-title">Graphic Designer</div>
                            <div class="employee-item-title"><a href="mailto: Paul@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Christoffer Rees</div>
                            <div class="employee-item-title">Graphic Designer</div>
                            <div class="employee-item-title"><a href="mailto: Christoffer@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Timothy Sarno</div>
                            <div class="employee-item-title">Graphic Designer </div>
                            <div class="employee-item-title"><a href="mailto: Timothy@1stcfs.org">Email</a></div>


                        </div>

                    </div>


                </div>
                <div class="accordion-header" data-anim="in" data-accordion="operations">Marketing Department
                </div>
                <div class="accordion-inner" id="operations">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Cherisse Gonzale</div>
                            <div class="employee-item-title">Project Manager Marketing </div>
                            <div class="employee-item-title"><a href="mailto: Cherisse@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-golden-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Kate McAndrews</div>
                            <div class="employee-item-title">Marketing Coordinator</div>
                            <div class="employee-item-title"><a href="mailto: Kate@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Pascal Magero</div>
                            <div class="employee-item-title">Researcher and Content Creator</div>
                            <div class="employee-item-title"><a href="mailto: Pascal@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/brown-skin-black-hair-male.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Alejandro Morales</div>
                            <div class="employee-item-title">Content Marketing Strategy</div>
                            <div class="employee-item-title"><a href="mailto: Alejandro@1stcfs.org">Email</a></div>


                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="{{asset('frontend/assets/images/NewPagePhotos02/Icons/light-skin-black-hair-female.png')}}" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Samantha Genelsa</div>
                            <div class="employee-item-title">Content Creator </div>
                            <div class="employee-item-title"><a href="mailto: Samantha@1stcfs.org">Email</a></div>


                        </div>

                    </div>

                </div>
                <!-- <div class="accordion-header" data-anim="in" data-accordion="sales">Recruiting Department </div> -->
                <!-- <div class="accordion-inner" id="sales">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_MaleIcon.svg" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Keith Good</div>
                            <div class="employee-item-title">Recruiter </div>
                            <div class="employee-item-title">kgoodie24@gmail.com </div>

                        </div>
                    </div>

                </div> -->
                <!-- <div class="accordion-header" data-anim="in" data-accordion="talent-acquisition">System Management
                    Department </div> -->
                <!-- <div class="accordion-inner" id="talent-acquisition">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Female Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_FemaleIcon.svg" class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Maureen</div>
                            <div class="employee-item-title">System administrative </div>
                            <div class="employee-item-title">Maureen@1stcfs.org </div>

                        </div>

                    </div>

                </div> -->
                <!-- <div class="accordion-header" data-anim="in" data-accordion="prime-professional-services">Finance Department</div> -->
                <!-- <div class="accordion-inner" id="prime-professional-services">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_MaleIcon.svg"
                                class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Fred</div>
                            <div class="employee-item-title">Manager Finance </div>
                            <div class="employee-item-title">frederick@1stcfs.org</div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_FemaleIcon.svg"
                                class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">JCamille </div>
                            <div class="employee-item-title">Administrative assistant (Finance Department)</div>
                            <div class="employee-item-title">camille@1stcfs.org</div>

                        </div>

                    </div>
                </div> -->

                <!-- <div class="accordion-header" data-anim="in" data-accordion="IT-Department">IT Department </div> -->
                <!-- <div class="accordion-inner" id="IT-Department">
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_MaleIcon.svg"
                                class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Gonzalo Casaux</div>
                            <div class="employee-item-title">IT Project Manager  </div>
                            <div class="employee-item-title">gonzalocasaux@gmail.com</div>

                        </div>

                    </div>
                    <div class="employee-item">
                        <div class="employee-item-icon">
                            <img alt="OSH Male Employee Icon"
                                src="../assets/images/NewPagePhotos02/Icons/OurTeam_FemaleIcon.svg"
                                class="inject">
                        </div>
                        <div class="employee-item-inner">
                            <div class="employee-item-name">Louie Fajarillo </div>
                            <div class="employee-item-title">IT Developer  </div>
                            <div class="employee-item-title">kenshin03cute@gmail.com</div>

                        </div>

                    </div>
                </div> -->
            </div>


        </section>







		</main>






{{--
		<footer>
			<div class="top-footer">
				<div class="frame">

					<div class="col-4">
						<div class="footer-group">
							<h3>
								Quick Links </h3>
							<a href="../about-us/index.html">About Us</a>
							<a href="../services/index.html">Services</a>
							<a href="../news-blog/index.html">Blog</a>
							<a href="../news-blog/press/index.html">Press</a>
						</div>
					</div>

					<div class="col-4">
						<div class="footer-group">
							<h3>Our Address</h3>
							<p class="p1"><span class="s1">175 s.3rd street suite 200 Columbus Ohio 43215</span></p>

						</div>
					</div>

					<div class="col-4">
						<h3>Locations</h3>
						<div class="location-scrolling">
							<a href="#">Adams County, OH</a>
							<a href="#">Allen County, OH</a>
							<a href="#">Allen County, OH</a>
							<a href="#">Ashland County, OH</a>
							<a href="#">Ashtabula County, OH</a>
							<a href="#">Athens County, OH</a>
							<a href="#">Auglaize County, OH</a>
							<a href="#">Belmont County, OH</a>
							<a href="#">Brown County, OH</a>
							<a href="#">Butler County, OH</a>
							<a href="#">Butler County, OH</a>
							<a href="#">Carroll County, OH</a>
							<a href="#">Champaign County, OH</a>
							<a href="#">Clark County, OH</a>
							<a href="#">Clermont County, OH</a>
							<a href="#">Clinton County, OH</a>
							<a href="#">Columbiana County, OH</a>
							<a href="#">Coshocton County, OH</a>
							<a href="#">Crawford County, OH</a>
							<a href="#">Cuyahoga County, OH</a>
							<a href="#">Darke County, OH</a>
							<a href="#">Defiance County, OH</a>
							<a href="#">Delaware County, OH</a>
							<a href="#">Erie County, OH</a>
							<a href="#">Fairfield County, OH</a>
							<a href="#">Fayette County, OH</a>
							<a href="#">Franklin County, OH</a>
							<a href="#">Fulton County, OH</a>
							<a href="#">Gallia County, OH</a>
							<a href="#">Geauga County, OH</a>
							<a href="#">Greene County, OH</a>
							<a href="#">Guernsey County, OH</a>
							<a href="#">Hamilton County, OH</a>
							<a href="#">Hancock County, OH</a>
							<a href="#">Hardin County, OH</a>
							<a href="#">Harrison County, OH</a>
							<a href="#">Henry County, OH</a>
							<a href="#">Highland County, OH</a>
							<a href="#">Hocking County, OH</a>
							<a href="#">Holmes County, OH</a>
							<a href="#">Huron County, OH</a>
							<a href="#">Jackson County, OH</a>
							<a href="#">Jefferson County, OH</a>
							<a href="#">Knox County, OH</a>
							<a href="#">Lake County, OH</a>
							<a href="#">Lawrence County, OH</a>
							<a href="#">Licking County, OH</a>
							<a href="#">Logan County, OH</a>
							<a href="#">Lorain County, OH</a>
							<a href="#">Lucas County, OH</a>
							<a href="#">Madison County, OH</a>
							<a href="#">Mahoning County, OH</a>
						</div>

					</div>
					<div class="col-4">
						<div class="location-scrolling">
							<a href="#">Marion County, OH</a>
							<a href="#">Medina County, OH</a>
							<a href="#">Meigs County, OH</a>
							<a href="#">Mercer County, OH</a>
							<a href="#">Miami County, OH</a>
							<a href="#">Monroe County, OH</a>
							<a href="#">Montgomery County, OH</a>
							<a href="#">Morgan County, OH</a>
							<a href="#">Morrow County, OH</a>
							<a href="#">Muskingum County, OH</a>
							<a href="#">Noble County, OH</a>
							<a href="#">Ottawa County, OH</a>
							<a href="#">Paulding County, OH</a>
							<a href="#">Perry County, OH</a>
							<a href="#">Pickaway County, OH</a>
							<a href="#">Pike County, OH</a>
							<a href="#">Portage County, OH</a>
							<a href="#">Preble County, OH</a>
							<a href="#">Putnam County, OH</a>
							<a href="#">Richland County, OH</a>
							<a href="#">Ross County, OH</a>
							<a href="#">Sandusky County, OH</a>
							<a href="#">Scioto County, OH</a>
							<a href="#">Seneca County, OH</a>
							<a href="#">Shelby County, OH</a>
							<a href="#">Stark County, OH</a>
							<a href="#">Summit County, OH</a>
							<a href="#">Trumbull County, OH</a>
							<a href="#">Tuscarawas County, OH</a>
							<a href="#">Union County, OH</a>
							<a href="#">Van Wert County, OH</a>
							<a href="#">Van Wert County, OH</a>
							<a href="#">Warren County, OH</a>
							<a href="#">Washington County, OH</a>
							<a href="#">Wayne County, OH</a>
							<a href="#">Williams County, OH</a>
							<a href="#">Wood County, OH</a>
							<a href="#">Wyandot County, OH</a>
						</div>

					</div>
				</div>
			</div>


			<div class="bottom-footer">
				<div class="frame">
					<img alt="Open Systems Healtcare Footer Illustration" class="inject footer-illustration"
						src="../assets/images/home/01Home_FooterIllustartion.png">
					<div class="footer-info">
						<div class="copyright">© 2021 1st Choice Family Service. All Rights Reserved.</div>
					</div>
				</div>
			</div>






        </footer> --}}
    @extends('frontend.layouts.footer')

	</div><!-- close #site -->


	<script src="{{asset('frontend/assets/bootstrap/js/jquery-3.5.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>


	<script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min76ab.js')}}"
		type="text/javascript"></script>
	<script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>


</body>

</html>
