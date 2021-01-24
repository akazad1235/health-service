<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" />
    <title>{{$getBlog->title}} | 1st Choice Family Service</title>

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
    href="{{asset('frontend/wp-content/plugins/pushblocks/blocks/header/dist/style40df.css')}}"
    onload="this.onload=null;this.rel='stylesheet';" as="style">

<link rel="preload" onerror="this.rel='stylesheet';"
    href="{{asset('frontend/wp-content/themes/push10custom/assets/dist/main.min76ab.css')}}"
    onload="this.onload=null;this.rel='stylesheet';" as="style">



<script defer src="{{asset('frontend/wp-includes/js/jquery/jquery.min9d52.js')}}" type="text/javascript"></script>
<script defer src="{{asset('frontend/wp-includes/js/jquery/jquery-migrate.mind617.js')}}" type="text/javascript"></script>


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



<body class="post-template-default single single-post postid-1543 single-format-standard interior-page"
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


        <main id="main-content">

<div class="post-content">

    <div class="wp-block-pushblocks-header card">
        <div class="frame">
            <h1 class="card__title">{{$getBlog->title}}</h1>
            <div class="post-meta"><span class="author">By: <span class="author__name">1st Choice Family Service</span></span><span class="date">Date: <span class="post__date">{{$getBlog->created_at->format('d/m/Y')}}</span></span></div>
            <img class="w-100 card__image " src="{{asset('backend/img/blog/'.$getBlog->image)}}" alt="" aria-hidden="true" />
        </div>
    </div>
        <p>
            {!! $getBlog->desc !!}
        </p>
</div>
        </main>




        @extends('frontend.layouts.footer')

    </div>


    <script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
    type="text/javascript"></script>
    <script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script>


</body>
</html>
