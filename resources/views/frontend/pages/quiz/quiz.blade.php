<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" />
    <title>Take Our Quiz | 1st Choice Family Service</title>

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
    class="page-template page-template-templates page-template-quiz page-template-templatesquiz-php page page-id-697 interior-page"
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

        <main id="main-content" class="osh-quiz ">

            <section class="banner solid-blue">
                <div class="frame row grid-row">
                    <div class="col-lg-5">
                        <img alt="OSH Take Our Quiz!" class="inject"
                            src="{{asset('frontend/wp-content/uploads/2019/03/quiz-banner.svg')}}">
                    </div>
            
                    <div class="col-lg-7">
                        <h1 class="hide-logo-trigger">Take Our Quiz!</h1>
                        <div class="text">
                            <p>Care recipients and families, are you unsure which home care service is right for you?
                                Professionals, are you looking to start your career in care or move career paths? Take
                                our quiz to learn which option is best for you.</p>
                        </div>
                        <a class="quiz-start link">Get Started</a>
                    </div>
                </div>
            </section>
            
            
            
            
            <div class="quiz-section">
                <div class="quiz-question quiz-question-1">
                    <div class="frame">
                        <div class="question">How can we help you today?</div>
                        <div class="answers">
                            <div class="answer" style="height: 100px" data-goto="hire-a-direct-support">
                                <div class="answer-inner">
                                    Hire A Direct Support Professional</div>
                            </div>
                            <div class="answer" data-goto="become-a-direct-support">
                                <div class="answer-inner">
                                    Become A Direct Support Professional </div>
                            </div>
                            <div class="answer" data-goto="find-a-career">
                                <div class="answer-inner">
                                    Find A Career</div>
                            </div>
                            <div class="answer" data-goto="join-campus-ambassador">
                                <div class="answer-inner">
                                    To Join The Campus Ambassador Program</div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div data-slug="hire-a-direct-support" class="path path-hire-a-direct-support ">
                    <div class="quiz-question quiz-question-2">
                        <div class="frame">
                            <div class="question">
                                <p>Who need our help?</p>
                            </div>
                            <div class="answers">
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        May Parents</div>
                                </div>
            
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        Myself </div>
                                </div>
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        My Child </div>
                                </div>
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        My Grant Parents </div>
                                </div>
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        My Spouse </div>
                                </div>
                                <div class="answer" data-current="question-2" data-goto="question-5">
                                    <div class="answer-inner">
                                        Other </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            
                    <div class="quiz-question quiz-question-3">
                        <div class="frame">
                            <div class="question">
                                <p>When do you need our help?</p>
                            </div>
                            <div class="answers">
                                <div class="answer" data-current="question-3" data-goto="question-5">
                                    <div class="answer-inner">
                                        Right Now </div>
                                </div>
            
                                <div class="answer" data-current="question-3" data-goto="question-5">
                                    <div class="answer-inner">
                                        Within a week </div>
                                </div>
                                <div class="answer" data-current="question-3" data-goto="question-5">
                                    <div class="answer-inner">
                                        Within two weeks </div>
                                </div>
                                <div class="answer" data-current="question-3" data-goto="question-5">
                                    <div class="answer-inner">
                                        Within a month </div>
                                </div>
            
            
            
                            </div>
                        </div>
                    </div>
            
            
            
            
                    <div class="quiz-question quiz-question-5">
                        <div class="frame">
                            <div class="question">
                                <p style="margin-bottom: 20px;">Feel free to<a class="callUs" href="tel:(614) 321-2430"
                                        style="color: white;">Call Us</a> To get immediate
                                    assistance or <a class="callUs" href="https://zoom.us/j/3890358376"
                                        style="color: white;">Get Live
                                        Support</a></p>
                            </div>
                            <a href="#" data-current="question-5" class="reset">Start over</a>
                        </div>
                    </div>
            
            
            
                </div>
            
            
            
                <div data-slug="become-a-direct-support" class="path path-become-a-direct-support ">
                    <div class="quiz-question quiz-question-2">
                        <div class="frame">
                            <div class="question">
                                <p>Do have a Social Security Card, Driver License, and any Proof of insurance?</p>
                            </div>
                            <div class="answers">
                                <div class="answer" data-current="question-2" data-goto="question-4">
                                    <div class="answer-inner">
                                        Yes </div>
                                </div>
            
                                <div class="answer" data-current="question-2" data-goto="question-3">
                                    <div class="answer-inner">
                                        No </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
            
                    <div class="quiz-question quiz-question-3">
                        <div class="frame">
                            <div class="question">
                                <p style="margin-bottom: 20px;">Sorry, You will need those documents to be able to work
                                    as DSP, However, why don't you try another of our careers instead? <br> <a
                                        class="link" href="../careers/index.html">Carrers</a></p>
                            </div>
                            <a href="#" data-current="question-3" class="reset">Start over</a>
                        </div>
                    </div>
            
                    <div class="quiz-question quiz-question-4">
                        <div class="frame">
                            <div class="question">
                                <p style="margin-bottom: 20px;">Congratulations! You have everything it is needed to be
                                    a Direct Support Professional<a class="callUs" href="tel:(614) 321-2430"
                                        style="color: white;">Call Us</a> To get immediate
                                    assistance or <a class="callUs" href="https://zoom.us/j/3890358376"
                                        style="color: white;">Get Live
                                        Support</a></p>
                            </div>
                            <a href="#" data-current="question-4" class="reset">Start over</a>
                        </div>
                    </div>
            
                </div>
            
            
                <div data-slug="find-a-career" class="path path-find-a-career">
            
                    <div class="quiz-question quiz-question-2">
                        <div class="frame">
                            <div class="question">
                                <p style="margin-bottom: 20px;">Please visit Now<br> <a class="link"
                                        href="../careers/index.html">Carrers Page</a></p>
                            </div>
                            <a href="#" data-current="question-2" class="reset">Start over</a>
                        </div>
                    </div>
            
                </div>
            
                <div data-slug="join-campus-ambassador" class="path path-join-campus-ambassador">
            
                    <div class="quiz-question quiz-question-2">
                        <div class="frame">
                            <div class="question">
                                <p style="margin-bottom: 20px;">Please visit Now<br> <a class="link"
                                        href="../campus-ambassador/index.html">Campus Ambassador Program Page</a></p>
                            </div>
                            <a href="#" data-current="question-2" class="reset">Start over</a>
                        </div>
                    </div>
            
                </div>

        </main>



        @extends('frontend.layouts.footer')

    </div><!-- close #site -->

    <script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
    type="text/javascript"></script>
    <script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>
</body>

</html>