@extends('layouts.frontend-header')
@section('content')

<head>
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script src="js/modernizer.js"></script>
<style>
#accordion .panel{
    border: none;
    border-radius: 5px;
    box-shadow: none;
    margin-bottom: 10px;
    background: transparent;
}
#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 5px;
    background: transparent;
    position: relative;
}
#accordion .panel-title a{
    display: block;
    padding: 20px 30px;
    margin: 0;
    background: rgb(190 23 23);
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-transform: capitalize;
    /* letter-spacing: 1px; */
    border: none;
    border-radius: 5px;
    position: relative;
}
#accordion .panel-title a.collapsed{ border: none; }
#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before{
    content: "\f107";
    font-family: "Font Awesome 5 Free";
    width: 30px;
    height: 30px;
    line-height: 27px;
    text-align: center;
    font-size: 25px;
    font-weight: 900;
    color: #fff;
    position: absolute;
    top: 15px;
    right: 30px;
    transform: rotate(180deg);
    transition: all .4s cubic-bezier(0.080, 1.090, 0.320, 1.275);
}
#accordion .panel-title a.collapsed:before{
    color: rgba(255,255,255,0.5);
    transform: rotate(0deg);
}
#accordion .panel-body{
    padding: 20px 30px;
    background: rgb(255 255 255);
    font-size: 17px;
    color: #000000;
    line-height: 28px;
    letter-spacing: 0px;
    border-top: none;
    border-radius: 5px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.centered-table {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
      margin: 0 auto;
    }

    .centered-table td {
      vertical-align: middle;
      text-align: center;
      padding: 8px;
    }

    .centered-table col:nth-child(1) {
      width: 10%;
    }

    .centered-table col:nth-child(2) {
      width: 40%;
      text-align: left !important;
    }

    .centered-table col:nth-child(3) {
      width: 50%;
    }
    .border-points ul, li, ol {
  margin:
0px;
  padding:
4px 26px;
  list-style: disc !important;
}

.checkbox-wrapper-19 {
    box-sizing: border-box;
    --background-color: #fff;
    --checkbox-height: 25px;
  }

  @-moz-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @-webkit-keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothabottomcheck-19 {
    0% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) / 2);
    }
  }

  @keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-webkit-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  @-moz-keyframes dothatopcheck-19 {
    0% {
      height: 0;
    }
    50% {
      height: 0;
    }
    100% {
      height: calc(var(--checkbox-height) * 1.2);
    }
  }

  .checkbox-wrapper-19 input[type=checkbox] {
    display: none;
  }

  .checkbox-wrapper-19 .check-box {
    height: var(--checkbox-height);
    width: var(--checkbox-height);
    background-color: transparent;
    border: calc(var(--checkbox-height) * .1) solid #000;
    border-radius: 5px;
    position: relative;
    display: inline-block;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -moz-transition: border-color ease 0.2s;
    -o-transition: border-color ease 0.2s;
    -webkit-transition: border-color ease 0.2s;
    transition: border-color ease 0.2s;
    cursor: pointer;
  }
  .checkbox-wrapper-19 .check-box::before,
  .checkbox-wrapper-19 .check-box::after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    position: absolute;
    height: 0;
    width: calc(var(--checkbox-height) * .2);
    background-color: #be1717;
    display: inline-block;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-radius: 5px;
    content: " ";
    -webkit-transition: opacity ease 0.5;
    -moz-transition: opacity ease 0.5;
    transition: opacity ease 0.5;
  }
  .checkbox-wrapper-19 .check-box::before {
    top: calc(var(--checkbox-height) * .72);
    left: calc(var(--checkbox-height) * .41);
    box-shadow: 0 0 0 calc(var(--checkbox-height) * .05) var(--background-color);
    -moz-transform: rotate(-135deg);
    -ms-transform: rotate(-135deg);
    -o-transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
    transform: rotate(-135deg);
  }
  .checkbox-wrapper-19 .check-box::after {
    top: calc(var(--checkbox-height) * .37);
    left: calc(var(--checkbox-height) * .05);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }

  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box,
  .checkbox-wrapper-19 .check-box.checked {
    border-color: #be1717;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::after,
  .checkbox-wrapper-19 .check-box.checked::after {
    height: calc(var(--checkbox-height) / 2);
    -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
    animation: dothabottomcheck-19 0.2s ease 0s forwards;
  }
  .checkbox-wrapper-19 input[type=checkbox]:checked + .check-box::before,
  .checkbox-wrapper-19 .check-box.checked::before {
    height: calc(var(--checkbox-height) * 1.2);
    -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
    -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
    animation: dothatopcheck-19 0.4s ease 0s forwards;
  }
   .checkbox-inline-wrapper {
        display: flex;
        align-items: center;
        gap:15px;

    }
</style>
</head>


<div id="fullpage">
  
    <section id="services" class="services">
      <div class="faq-1">
        <div class="container">
          <div class="row">
            <div class="section-heading mb-40 text-center">
                   <!-- New Heading -->
              <div class="section-heading mb-20 text-center" id="residential-status">
                <h2 class="main-heading"><strong>Statement of Work No. 1 (Online Agreement)</strong></h2>
              </div>
            </div>
            <div class="col-md-12">
              <p>
                  This online Statement of Work No. 1 (“SOW No. 1”) is made pursuant to and governed by the Service Agreement (“Service Agreement”) that you / (Name of Service Provider) (“Client”) have executed with Facilon 
                  Services Private Limited("Facilon"). 
                  Please fill and submit the form below to opt for Service(s) offered on this Platform.
              </p>
                
                <p>
                    1. Facilon will provide the following Services on this Platform:
                </p>
                <p>
                     <div class="checkbox-inline-wrapper">
                    <div class="checkbox-wrapper-19">
                      <input type="checkbox" id="cbtest-19" />
                      <label for="cbtest-19" class="check-box">
                    </div>
                    <span>
Facilon ONBOARD: This Service is intended solely for the facilitation of investor onboarding. It enables real-time tracking, secure document submission, and status visibility 
                   to support a smooth and compliant onboarding experience for referred investors. The service includes 
                   </span>
    </div>
                   </p>
                   <p>
                   <br>
                   <div class="border-points">
                    <ul>
                        <li>View and track onboarding progress of referred investors. </li>
                        <li>Upload and manage onboarding-related documents securely.</li>
                        <li>Receive notifications and alerts regarding pending or completed onboarding tasks.</li>
                        <li>Access status updates for transparency and compliance</li>
                    </ul>
                    </div>





</p>
<p>
   2. In case you wish to opt for any or all of the above listed Services, please click on the checkbox in front of such Service(s) above and then click on“I Agree” below. 
<br>
3. Once you have submitted this form, our team will reach out to you to discuss the details related to plans and pricing offered for the Services on the Platform and you agree to execute and enter into an SOW detailing the same.
<br>
4. In case of any conflict between the terms and conditions of this SOW No. 1 and the terms of the Service Agreement, the terms of this SOW shall prevail.
<br>
5. Unless the context requires otherwise, capitalised terms undefined in this SOW No. 1 will have the meaning ascribed to them in the Service Agreement. 
</p>

<p>
   Please note that by clicking on “I Agree”, you agree, accept and acknowledge that you have fully understood the terms and conditions of the Services and you agree to be bound by the 
   Service Agreement, the <a href="">Privacy Policy</a> and the <a href="">Terms of Use</a>, as amended from time to time. 
</p>


            <div class="col-md-12">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <div class="single-field mb-0">
                        <a href="{{route('serivice_provider_online_sow_service_agreement_submit')}}/{{$service_provider_email}}" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;margin-bottom: 3%;" type="submit">I Agree</a>
                    </div> 
                </div>
                
                <div class="col-md-4">
                    
                </div>
            </div>
            <br>
        </div>
    </div>
    </section>

</div>
       
@endsection