@extends('layouts.frontend-header')

@section('content')

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/fullpage.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script src="js/modernizer.js"></script>
  <!--====== Fontawesome css ======-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q4SXVPCRXX"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'G-Q4SXVPCRXX');

</script>



<style>
  @media (max-width: 1000px) {
    .sr-only {
        display: inline !important;
        position: relative !important;
    }
    }
    @media (max-width: 576px) {
  .footer-links {
    display: flex;
   
  }
 @media (min-width: 992px) {
    .col-md-3 {
        width: 33%;
    }
}
.connect-network {
    background: url("{{ asset('/public/expertise/network.jpeg') }}") no-repeat left center;
    background-size: cover; /* or contain */
    min-height: 400px; /* adjust as needed */
}

.providers ul li::marker {
    color: #ede8e5;
}


.categories-wrapper .col-md-3 {
  display: inline-block;
  float: none; /* Remove any float if applied */
}

    footer .col-12,
footer .col-sm-6,
footer .col-md-3 {
  padding-right: 0 !important;
}
.schedule-call a {
    border-radius: 30px !important;
}
/* First-level dropdown (India) */
.navbar-nav > li.dd-main > .dropdown-menu {
  display: none;
  position: absolute;
  top: 100%; /* aligns directly under parent */
  left: 0;
  min-width: 200px;
  background: #fff;
  border: none; /* remove default horizontal lines */
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  padding: 0; /* remove extra padding */
}

/* Show on hover */
.navbar-nav > li.dd-main:hover > .dropdown-menu {
  display: block;
}

/* Submenus (FAQ under India) */
.navbar-nav .dropdown-submenu {
  position: relative;
}

.navbar-nav .dropdown-submenu > .dropdown-menu {
  display: none;
  position: absolute;
  top: 0; /* aligns with parent */
  left: 100%; /* opens to the right */
  min-width: 200px;
  background: #fff;
  border: none;
  padding: 0;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

.navbar-nav .dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

/* Dropdown links */
.navbar-nav .dropdown-menu a {
  display: block;
  padding: 12px 20px; /* equal height for all items */
  color: #333;
  text-decoration: none;
  white-space: nowrap;
}

.navbar-nav .dropdown-menu a:hover {
  background: #f0f0f0;
  color: #000;
}

/* Optional: arrow indicator for submenus */
.navbar-nav .dropdown-submenu > a::after {
  content: "▶";
  float: right;
  margin-left: 5px;
  font-size: 12px;
  color: #666;
}
.providers ul {
    list-style: none;
}

    </style>
<div id="fullpage">
    <!-- Section 0 -->
    <div id="section0" class="section fp-auto-height-responsive fp-section active fp-table fp-is-overflow fp-completely our-expertise">
        <div class="fp-overflow" tabindex="-1">
            <div class="container">
                <div class="row ju">
                    <div class="col-md-12">
                      <div class="message-box" style="margin-top: 67px;">
    <h2>Our Expertise</h2>
    <p class="text-center">
        FACILON provides a comprehensive suite of solutions to facilitate the onboarding and ongoing support of investors, 
        through a network of custodians, banks, brokers and other intermediaries and agents as needed.
    </p>
</div>

<div class="categories-wrapper text-center">
    <div class="row justify-content-center">
                <div class="col-md-2">
            <div class="categories__item wow fadeInDown" data-wow-duration="0.2s" data-wow-delay="0s">
                <!--<div class="icon-img">-->
                <!--    <img src="{{ asset('/public/expertise/1 (1).png') }}" alt="Onboarding"/>-->
                <!--</div>-->
                <!--<span class="name">Streamlined Onboarding Process</span>-->
            </div>
        </div>

        <div class="col-md-3 d-inline-block">
            <div class="categories__item wow fadeInDown" data-wow-duration="0.2s" data-wow-delay="0s">
                <div class="icon-img">
                    <img src="{{ asset('/public/expertise/1 (1).png') }}" alt="Onboarding"/>
                </div>
                <span class="name">Streamlined Onboarding Process</span>
            </div>
        </div>

        <div class="col-md-3 d-inline-block">
            <div class="categories__item wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="0s">
                <div class="icon-img">
                    <img src="{{ asset('/public/expertise/2 (1).png') }}" alt="Efficiency"/>
                </div>
                <span class="name">Enhanced Efficiency</span>
            </div>
        </div>

        <div class="col-md-3 d-inline-block">
            <div class="categories__item wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="0s">
                <div class="icon-img">
                    <img src="{{ asset('/public/expertise/3.png') }}" alt="Timelines"/>
                </div>
                <span class="name">Reduced Timelines</span>
            </div>
        </div>
    </div>
</div>
<!-- /.categories-wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 1 -->
    <div id="section1" class="section fp-auto-height-responsive fl-con-invest-sec">
        <div class="container-fluid no-padding">
            <div class="row ju">
                <div class="col-md-12 connect-network">
                    <div class="message-box wow fadeInLeft">
                        <h2>Connecting investors with a network of service providers</h2>
                    </div>

                    <div class="col-md-4"></div>
                    <div class="col-md-8 no-padding fl-no-pad-sec">
                        <div class="providers">
                            <ul>
                                <li>Access and evaluate list of FACILON registered service providers & their product offerings.</li>
                                <li>Expedite the service provider appointment process</li>
                                <li>Navigate complexities of the securities market with confidence</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 3 -->
    <div id="section3" class="section fp-auto-height-responsive revolutionizing-wrapper">
        <div class="container">
            <div class="row ju">
                <div class="col-md-12">
                    <div class="message-box">
                        <h2>Revolutionizing the Investors' Experience</h2>
                    </div>

                   <div class="col-md-4">
    <div class="categories__item wow fadeInDown" data-wow-duration="0.01s" data-wow-delay="0s">
        <div class="icon-img">
            <img src="{{ asset('/public/expertise/4.png') }}" alt="Single Window"/>
        </div>
        <span class="name">A Unique Single Window Facility</span>
    </div>
</div>

<div class="col-md-4">
    <div class="categories__item wow fadeInDown" data-wow-duration="0.01s" data-wow-delay="0s">
        <div class="icon-img">
            <img src="{{ asset('/public/expertise/2 (2).png') }}" alt="Intermediaries"/>
        </div>
        <span class="name">Inspiring Intermediaries to Expand Horizons</span>
    </div>
</div>

<div class="col-md-4">
    <div class="categories__item wow fadeInDown" data-wow-duration="0.01s" data-wow-delay="0s">
        <div class="icon-img">
            <img src="{{ asset('/public/expertise/2 (1).png') }}" alt="Solutions"/>
        </div>
        <span class="name">A Pioneer in Comprehensive Solutions</span>
    </div>
</div>

                </div>
            </div>

            <br><br>
            <div class="col-md-12 text-center schedule-call">
                <a href="{{ url('contact-us') }}" class="btn btn-light btn-radius btn-brd" style="border-radius: 30px !important;">Contact Us</a>
            </div>
        </div>
    </div>
</div><!-- /#fullpage -->
<!-- Scroll to top -->
<a href="#" id="scroll-to-top" class="dmtop global-radius">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Scripts -->
<script src="js/all.js"></script>
<script src="js/custom.js"></script>
<script src="js/fullpage.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/hoverdir.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['Main-Info', 'Our-Purpose', 'Our-Identity', 'Investment', 'Contact-us', 'Info-box', 'Our-Solution'],
        navigation: false,
        navigationPosition: 'right',
        scrollBar: true,
        verticalCentered: true,
        responsiveWidth: 1000,
        responsiveSlides: true,
        scrollOverflow: true
    });
</script>

@endsection
