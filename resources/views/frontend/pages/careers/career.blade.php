<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" />
    <title>​Careers | 1st Choice Family Service</title>

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


        .BambooHR-ATS-Jobs-List a {
            color: #e50e38;
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
    class="page-template page-template-templates page-template-careers-landing page-template-templatescareers-landing-php page page-id-79 interior-page"
    style="opacity:0; transition:all 0.5s">


    <!-- Section for Unsupported Browsers - anything below IE11 - Add in Site Logo-->
    <div id="ie-unsupported">
        <img width="200" alt="Open Systems Healthcare Logo"
            src="../wp-content/themes/push10custom/assets/imgs/logos/color-logo.svg">
        <p style="">Hello, you are using an old browser that's unsafe and no longer supported. Please consider
            <a href="https://support.microsoft.com/en-us/help/17621/internet-explorer-downloads">updating</a>
            your browser to a newer version, or downloading a
            <a href="https://www.google.com/chrome/browser/desktop/index.html">modern</a>
            browser.
        </p>
    </div>
    <!-- End Unsupported Section -->


    <div id="site">
        @extends('frontend.layouts.header')

        <main id="main-content" class="landing-pages">

            <section class="banner solid-blue">
                <div class="frame row grid-row">
                    <div class="col-lg-5">
                        <img alt="OSH Careers in Care" class="inject"
                            src="{{asset('frontend/assets/images/home/01Home_OfficeIllustration-01.png')}}">
                    </div>

                    <div class="col-lg-7">
                        <h1 class="hide-logo-trigger">Join the Team</h1>
                        <div class="text">
                            <p class="p1">Are you looking for a chance to shine? We have a world of opportunities for
                                impact-driven people just like you.</p>
                        </div>
                    </div>
                </div>
            </section>






            <section class="faded-cta"
                style="background-image:linear-gradient(-90deg, #FFFFFF 41%, rgba(255,255,255,0.00) 100%), url({{asset('frontend/assets/images/page-photos/02_Services.jpg')}})">
                <div class="frame">
                    <div class="cta-container">
                        <div class="cta-container-inner">
                            <div data-anim="in" class=" cta-icon">
                                <img alt="CTA Icon" class="inject" src="{{asset('frontend/wp-content/uploads/2019/03/quiz.svg')}}">

                            </div>
                            <h3 data-anim="in">Why Join Us? </h3>
                            <p data-anim="in" style="font-size: 15px;">Would you enjoy working in a positive environment
                                built on teamwork and
                                compassion?
                                Would you like to work at a place where you can customize your schedule?
                                A place that allows you to build on the talents you already have?
                                Welcome to 1st Choice Family Services.
                                As an integrated service provider for people with developmental disabilities,
                                we
                                are looking for individuals to join our staff to assist our clients in such areas as
                                homemaker/personal care, community involvement, and daily skill developments.
                                We provide a positive work environment and offer excellent training and competitive
                                wages.

                                <br>
                                <br>
                                Whatever your abilities, professional skills or  passions might be, here you will be able to put those to use. Look around, find a position you fit in, or just click on the link to get in touch with us.

                            </p>
                            <!-- <a data-anim="in" class="link" href="../take-our-quiz/index.html">Take Our Quiz</a> -->
                        </div>

                    </div>
                </div>
            </section>



            {{-- <section class="icon-info-blocks">
                <!-- 	 -->
                <div class="frame grid-row">

                    <div class="info-block-item col-lg-12">
                        <div class="info-block-icon " data-anim="in">
                            <img alt="Your Care, Your Choice icon" class="inject"
                                src="../wp-content/uploads/2019/03/star.svg">
                        </div>
                        <div class="info-block-inner">
                            <!-- <div class="cursive" data-anim="in">Our Philosophy</div> -->
                            <!-- <div class="info-block-header" data-anim="in">Open Position</div> -->
                            <div id="BambooHR">
                                <script src="https://1stcfs.bamboohr.com/js/jobs2.php" type="text/javascript"></script>
                                <div id="BambooHR-Footer">Powered by<a href="http://www.bamboohr.com" target="_blank"
                                        rel="noopener external nofollow noreferrer"><img
                                            src="https://resources.bamboohr.com/images/footer-logo.png"
                                            alt="BambooHR - HR software" /></a></div>
                            </div>

                            <div class="info-block-disc" data-anim="in"></div>

                        </div>
                    </div>


                </div>
            </section> --}}



            <section id="find-an-office" class="two-col gray-diagonal">
                <div class="frame row">
                    <div data-anim="left" class="col-half">

                        <div class="left-job-list">
                            <h3>Benifits</h3>
                        </div>
                    </div>
                </div>
            </section>


            <section id="get-started" class=" two-col gray-diagonal">
                <div class="teasers">
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Tracheostomy Care" class="inject"
                                src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">BI Weekly Payments
                        </div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Ventilator & Airway Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Pay Raise Potential
                        </div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Infusion/TPN Administration & Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Competitive Wages</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Wound Management" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">24h Support</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Enteral/Tube Feeding" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Enteral/Tube Feeding</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Extended Hour Skilled Nursing Care" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Financial Security</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Skilled Nursing Visits" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Professional Development</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Private Duty Aides" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Advancement Opportunitiess</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Private Duty Aides" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Investment Education</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Private Duty Aides" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Diverse Culture</div>
                        <div class="teaser-item-text"></div>

                    </div>
                    <div class="teaser-item" data-anim="in">
                        <div class="teaser-icon circle-icon">
                            <img alt="Private Duty Aides" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/Service-Icon2.svg')}}">
                        </div>
                        <div class="teaser-item-name">Performance Based Bonuses</div>
                        <div class="teaser-item-text"></div>

                    </div>
                </div>
            </section>


            <section class="accordion faqs-accordion">
                <div class="frame">
                    <div class="accordion-header" data-accordion="for-families--care-recipients">FAQ</div>
                    <div class="accordion-inner" id="for-families--care-recipients">
                        <div class="faq-item">
                            <div class="faq-question">Why is 1 st Choice Family Services the right place for me?
                            </div>
                            <div class="faq-answer">
                                <p>At 1st Choice Family Services, we are the cornerstone of the direct support
                                    professionals industry. We lead by example with expert training. Our staff
                                    development programs help you grow personally, socially, and professionally.</p>
                                <p> We develop a relationship built on mutual respect, trust and professionalism born
                                    out of our commitment to our incredible team and giving support where it’s
                                    needed.
                                    We believe that understanding, flexibility, and a welcoming workplace are essential
                                    factors in ensuring you thrive and reach your career goals.
                                    Rapid on-boarding and ample training resources are just a few of the ways we’ve
                                    structured our benefits to support you in your journey to this new exciting career.
                                </p>
                            </div>


                        </div>
                        <div class="faq-item">
                            <div class="faq-question">What documentation will I need to provide to be hired?</div>
                            <div class="faq-answer">
                                <p>There's not much you need to be able to apply for one of our careers. As long as you
                                    are passionate about your profession and are results and impact-driven, you can be sure you
                                    will feel at home here. Here is the list of the documents you will need:</p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">High School Diploma or GED
                                    </li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Social Security Card </li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Driver License</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Proof of Insurance</li>
                                </ul>
                                <p>To protect our employees and clients, we also complete a background check
                                    (Requirements vary by state; contact your local office to see if this applies in
                                    your area).
                                    If you have more questions or need help gathering the necessary documents, give us a
                                    call at (614) 321-2430
                                </p>
                            </div>


                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Do I get paid for my training at 1st Choice Family Services?</div>
                            <div class="faq-answer">
                                <p>You will get paid for the 72 hours of orientation and training.</p>
                            </div>
                        </div>
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
