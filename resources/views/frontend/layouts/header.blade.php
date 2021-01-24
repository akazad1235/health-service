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
                                href="{{url('/emergencyResponse')}}">COVID RAPID RESPONSE TEAM</a>
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
                    <a href="#">News &#038; Blog</a>
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
