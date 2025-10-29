@extends('layouts.frontend-header')
@section('content')

<head>
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script src="js/modernizer.js"></script>
<style>
/* Accordion Container */
#accordion .panel {
    border: none;
    border-radius: 5px;
    box-shadow: none;
    margin-bottom: 10px;
    background: transparent;
}

/* Panel Heading */
#accordion .panel-heading {
    padding: 0;
    border: none;
    border-radius: 5px;
    background: transparent;
    position: relative;
}

/* Accordion Title Link */
#accordion .panel-title a {
    display: block;
    padding: 20px 60px 20px 30px; /* Extra right padding for icon */
    margin: 0;
background: rgb(255 255 255);    font-size: 17px;
    font-weight: bold;
    color: #be1717;
    text-transform: capitalize;
    border: none;
    border-radius: 5px;
    position: relative;
    text-decoration: none;
}

/* When collapsed */
#accordion .panel-title a.collapsed {
    border: none;
}

/* Icon Before (Expanded) */
#accordion .panel-title a::before,
#accordion .panel-title a.collapsed::before {
    content: "\f107"; /* Font Awesome down arrow */
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 27px;
    color: #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%) rotate(180deg);
    transition: all 0.4s cubic-bezier(0.08, 1.09, 0.32, 1.275);
}

/* Collapsed State Icon */
#accordion .panel-title a.collapsed::before {
    color: rgb(179 0 0);
    transform: translateY(-50%) rotate(0deg);
}

/* Panel Body */
#accordion .panel-body {
    padding: 20px 30px;
    background: rgb(255, 255, 255);
    font-size: 17px;
    color: #000;
    line-height: 28px;
    border-top: none;
    border-radius: 5px;
}

/* Pills Container */
.rv-1-about__pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

/* Individual Pill */
.rv-1-about__pill {
    flex: 1 1 calc(33.33% - 20px); /* 3 columns on desktop */
    min-width: 150px;
    max-width: 100%;
    padding: 10px;
    box-sizing: border-box;
    height: auto;
    text-align: center;
    word-break: break-word;
}

/* Tablet: 2 Columns */
@media (max-width: 768px) {
    .rv-1-about__pill {
        flex: 1 1 calc(50% - 20px);
    }
}

/* Mobile: 1 Column */
@media (max-width: 480px) {
    .rv-1-about__pill {
        flex: 1 1 100%;
    }

    /* Reduce padding for small screens */
    #accordion .panel-title a {
        padding: 15px 50px 15px 20px;
        font-size: 16px;
    }

    #accordion .panel-body {
        padding: 15px 20px;
        font-size: 16px;
    }

    #accordion .panel-title a::before,
    #accordion .panel-title a.collapsed::before {
        font-size: 24px;
        right: 15px;
    }
}


</style>
</head>


<div id="fullpage">
 
   <section class="login-form-style4 steps4-sec serv-c section-padding align-items-center"
      style="background-image:url('./public/frontend/images/expand__28590.png');">
      <div class="container ">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="lgf4_Left_content">
		<p>Contact Facilon to connect with global investors looking to invest in India. Our platform enables brokers, custodians and portfolio managers to showcase their services, access new opportunities and streamline onboarding processes. </p>
              <h3><span style="background-color:#be1717 !important;">Interested?</span> </h3>
              <p>Expand your reach and grow your business with Facilon’s flexible, scalable solutions. </p>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="login-form-style3-main">
              <div class="login-form-style3-main_full">
                <!-- <div class="login-register_style3-head">
                  <h2>Investor Registration</h2>
                </div> -->
                <div class="login-register3-form-middle">
                  <form action="{{route('thank_you_show')}}" data-bitwarden-watching="1">


                    <div class="name-sec">
                      <div class="row">
                        <h1 style="color: #be1717; text-align: center; font-size:25px; font-weight: bold;">
  Fill out the form below to express your interest:
</h1>
<br>
<br>
                        <div class="col-md-6">
                          <div class="single-field">
                              
                            <label for="username"><i class="fa-solid fa-building"></i> Company Name: <span class="star-color">*</span>
                            </label>
                            <input type="text" name="name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-user"></i> Contact Person: <span class="star-color">*</span>
                            </label>
                                                       <input type="text" name="name">

                          </div>
                        </div>
                      </div>
 <div class="row">
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-envelope"></i> Email Address : <span class="star-color">*</span>
                            </label>
                            <input type="text" name="name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-field">
                            <label for="username"><i class="fa-solid fa-phone"></i> Phone Number : <span class="star-color">*</span>
                            </label>
                                                       <input type="text" name="name">

                          </div>
                        </div>
                      </div>
                      
                     <div class="row">
                         <div class="col-md-6">
                                                                            <div class="single-field self-sec1">
                        <label for="username-one"><i class="fa-solid fa-landmark"></i> Type of Service Provider  <span
                            class="star-color">*</span></label>
<select>
    <option>Broker</option>
    <option>Custodian</option>
    <option>Bank</option>
    <option>RTA</option>
    <option>Other</option>
</select>
                      </div>
                         </div>
                         <div class="col-md-6">
                                                                         <div class="single-field">
                        <label for="username"><i class="fa-solid fa-briefcase"></i> Services Offered: <span class="star-color">*</span>
                        </label>
                        <input type="text" name="name">
                      </div>
                         </div>


                     </div>


                      <div class="single-field self-sec1">
  <label><i class="fa-solid fa-globe"></i> Region of Operation: <span class="star-color">*</span></label>
  <div class="radio-box">
    <label class="radio">
      <input name="region" type="radio">
      <span>India</span>
    </label>
    <label class="radio">
      <input name="region" type="radio">
      <span>International</span>
    </label>
  </div>
</div>

<div class="single-field self-sec1">
  <label><i class="fa-solid fa-tag"></i> Are You Interested in Details on Plans and Pricing? <span class="star-color">*</span></label>
  <div class="radio-box">
  <label class="radio">
    <input id="plans-yes" name="plans" type="radio" value="yes" checked>
    <span>Yes</span>
  </label>
  <label class="radio">
    <input id="plans-no" name="plans" type="radio" value="no">
    <span>No</span>
  </label>
</div>
</div>

<div class="single-field self-sec1">
  <label><i class="fa-solid fa-voicemail"></i> Preferred Contact Method <span class="star-color">*</span></label>
  <div class="radio-box">
  <label class="radio">
    <input id="contact-email" name="contact" type="radio" value="email" checked>
    <span>Email</span>
  </label>
  <label class="radio">
    <input id="contact-phone" name="contact" type="radio" value="phone">
    <span>Phone</span>
  </label>
</div>
</div>

                                                                  <div class="single-field self-sec1">
                        <label for="username"><i class="fa-solid fa-comment"></i> Additional Comments or Questions<span
                            class="star-color">*</span></label>
<input type="text" name="comments"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="single-field mb-0">
                          <button class="button-1" type="submit" name="submit">Submit</button>
                        </div>
                      </div>
                      
                    </div>
                    <!-- <div class="single-field text-center confidential">
                      <a href="#">Privileged & Confidential</a>
                    </div> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
       
@endsection



















