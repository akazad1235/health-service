<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>
	@yield('headLink')
</head>



<body class="home page-template-default page page-id-14 post-template-default single single-post postid-1543 single-format-standard interior-page page-id-697 page-template-templatesquiz-php page page-template-quiz" style="opacity:0; transition:all 0.5s">


	<!-- Section for Unsupported Browsers - anything below IE11 - Add in Site Logo-->
	<div id="ie-unsupported">
		<img width="200" alt="Open Systems Healthcare Logo"
			src="{{asset('frontend/wp-content/themes/push10custom/assets/imgs/logos/color-logo.svg')}}">
		<p>Hello, you are using an old browser that's unsafe and no longer supported. Please consider
			<a href="https://support.microsoft.com/en-us/help/17621/internet-explorer-downloads">updating</a>
			your browser to a newer version, or downloading a
			<a href="https://www.google.com/chrome/browser/desktop/index.html">modern</a>
			browser.
		</p>
	</div>
	<!-- End Unsupported Section -->

	<div id="site">
        @include('frontend.layouts.header')





		<!-- Button trigger modal -->
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			Launch demo modal
		</button> -->

	



		<main id="main-content" class="osh-quiz" class="landing-pages">

            @yield('content')
            
		</main>

        @include('frontend.layouts.footer')

	</div><!-- close #site -->


	{{-- <script src="{{asset('frontend/assets/bootstrap/js/jquery-3.5.1.slim.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script src="https://apis.google.com/js/api.js"></script>
	<script src="{{asset('frontend/assets/js/youtube.js')}}"></script>

	<script defer src="{{asset('frontend/wp-content/themes/push10custom/assets/dist/javascript.min9232.js')}}"
		type="text/javascript"></script>
	<script defer src="{{asset('frontend/wp-includes/js/wp-embed.min40df.js')}}" type="text/javascript"></script> --}}

	@yield('scriptLink')

</body>


</html>