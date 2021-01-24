<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<title>​COVID RAPID RESPONSE TEAM | 1st Choice Family Service</title>

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



<body class="service-template-default single single-service postid-364 interior-page"
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

            <section class="banner bright-blue-with-image"
            style="background-image:url({{asset('frontend/assets/images/NewPagePhotos02/01_ERT.jpg')}})">

            <div class="frame row grid-row">
                <h1 class="hide-logo-trigger">Covid Rapid Response Team</h1>
                <p class="service-text service-text2">The safest way to protect your family from the Covid outbreak.</p>
            </div>
        </section>

        <section class="overview-locations">

            <div class="frame grid-row">
                <div class="col-lg-6 associated-locations">
                    <div class="locations-inner" data-anim="left">
                        <h3>OFFICE LOCATIONS</h3>

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
                <div class="col-lg-6 overview" data-anim="right">
                    <p>At 1CFS, we are all about giving back to the community. Our Covid Rapid response team ensures you and your loved ones are fully secured at all times.</p>

                    <p>We aim to keep your family safe and protected through infrared scans, electrostatics guns, and regularly strict disinfection protocols.
                    </p>


                </div>


            </div>

        </section>
        <section id="get-started" class=" two-col gray-diagonal form-inside">
            <div class="teasers">
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Tracheostomy Care" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">Harmful Cleaning</div>
                    <div class="teaser-item-text">Disposable gloves, microfiber
                        Mops, cloths, and 100% bleach-free disinfecting solutions are our ways to ensure there is no
                        harm to you or your family during our process.
                    </div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">Fast Non Disruptive Process</div>
                    <div class="teaser-item-text">While we recommend leaving the house through the disinfection, you
                        still can go back 15 minutes after we finish the entire process. That way, you get secured
                        without disrupting your routine.</div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">Electrostatic Treatment</div>
                    <div class="teaser-item-text">As in everything we do, we went ahead with our cleaning system
                        being one of the first companies to implement electrostatic treatment to ensure 100%
                        effectiveness.</div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">Recurrent Protocol</div>
                    <div class="teaser-item-text">With a weekly treatment protocol, we aim to provide our community
                        and clients with the protection they need to feel safe against Covid. </div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">24/7
                        Support
                    </div>
                    <div class="teaser-item-text">Viruses are a 24/7 menace. That’s why we work around the clock to
                        give proper attention and response to our community members, employees, and clients. </div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                    </div>
                    <div class="teaser-item-name">Total
                        Security

                    </div>
                    <div class="teaser-item-text">Our cleaning process is so secure that an eight-year-old child
                        could perform it. By using non-aggressive chemicals, we ensure your health is never at risk.
                    </div>

                </div>

                {{-- <h2 style="display:block !important; visibility: visible !important">How it Works?</h2> --}}

            </div>



            <h3 style="margin-bottom: 100px" >How its works?</h3>
            <div class="teasers">

                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/assets/images/icon/scan.svg')}}">
                    </div>
                    <div class="teaser-item-name">Scan</div>
                    <div class="teaser-item-text">As a Covid menace is detected or informed, we act rapidly to infrared scan the people involved.
                    </div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/assets/images/icon/cleaning.svg')}}">
                    </div>
                    <div class="teaser-item-name">Cleaning</div>
                    <div class="teaser-item-text">After scanning, we proceed to clean the area with electrostatic guns to ensure 100% accuracy.</div>

                </div>
                <div class="teaser-item" data-anim="in">
                    <div class="teaser-icon circle-icon">
                        <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/assets/images/icon/monitoring.svg')}}">
                    </div>
                    <div class="teaser-item-name">Monitoring</div>
                    <div class="teaser-item-text">15 min after the cleaning is over, you can go back to your routine staying under our protection once or twice a week.</div>

                </div>
            </div>



            <div class="frame row">
                <div class="col-half" data-anim="left">
                    <h2>Get Started</h2>
                    <p>Call us now to get immediate assistance or to become one of us.
                        <br>
                        <a href="https://zoom.us/j/3890358376" target="_blank" class="link">Get Services</a> | <a
                            href="{{route('career.index')}}" class="link">Join Our Team</a>
                    </p>

                </div>
                <div class="col-half" data-anim="right">
                    <img alt="Get Started with OSH" src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}"
                        class="inject">
                </div>
            </div>




        </section>



        @include('frontend.pages.careers.supportForm')

		</main>



        @extends('frontend.layouts.footer')

	</div><!-- close #site -->

    <script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
    type="text/javascript"></script>
    <script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>

</body>



</html>
