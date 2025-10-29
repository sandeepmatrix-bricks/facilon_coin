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


      <section class="terms-use-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="terms-use-text">
                  <h2>Introduction</h2><span style="float:right !important; margin-top:-5% !important; color:#be1717 !important;">Version 2025/01 of 10/01/2025</span>
                  <p>These Terms of Use govern your use of Facilon websites such as <a href="https://www.facilonservices.com/">www.facilonservices.com</a> and <a href="http://www.facilonservices.co.in/">www.facilonservices.co.in</a>  and any other Facilon mobile application or Facilon Portal   (collectively, the <b>“Platforms”</b>) The Platforms are owned by FACILON Services Private Limited. (‘Facilon’ or ‘we’ or ‘us’).</p>
                <h3>Acceptance Of The Terms Of Use</h3>
                <p>Please read these terms of use carefully. By accessing or using the Platforms, you are agreeing to the terms of use set out below (as revised from time to time) <b>(“Terms”)</b>. Please note that the Terms may be updated from time to time, and it is your responsibility to look through them as often as possible. Your continued use of the Platforms after any changes to these Terms are posted, will be considered acceptance of those changes. Subject to your compliance with these Terms, Facilon grants you a limited, revocable, non-exclusive, non-transferable, non-sublicensable license to use and access the Platforms.</p>
                <h3>Eligibility</h3>
                <p>You may use the Platforms in accordance with our contractual arrangement with you and /or as per these Terms. You must be over the age of eighteen (18) years and able to understand and agree to the terms, conditions, obligations, representations, and warranties set forth in these Terms.  </p>
                <h3>Use And Protection Of Intellectual Property Rights</h3>
                <p>All intellectual property, including in relation to the Platforms, including any software, techniques and processes used, and any trademarks, logos, images, material, content, designs, information, and other content available on the Platform belongs exclusively to Facilon or is licensed to Facilon. By no means is any proprietary right or license in any intellectual property implied or expressly granted by Facilon to You or any other user of the Platform using the Platform.</p>
                <p>You shall not copy, decompile, reverse engineer, or otherwise attempt to discover any source code, license, use or assign any intellectual property in the Platform, copy any logos, brand names, marketing or branding material or pictures from the Platform, remove any copyright and other proprietary notices contained in any content on the Platform, or use spiders, crawlers or robots for the purpose of accessing the Platform, or any content on the Platform.</p>
                <p>Any unauthorized use of Facilon’s intellectual property rights in connection with any other good, service or offering will constitute an infringement of the intellectual property rights of Facilon and may be actionable under the applicable laws.</p>
                <p>FACILON Platform and the FACILON services are protected by copyright, trademarks, patents, trade secret and/or other intellectual property laws. No information, content, or material from the FACILON Platform including, without limitation, all of the page headers, images, illustrations, graphics, audio clips, video clips or text, reports generated, trademarks, tradenames may be copied, reproduced, republished, uploaded, posted, transmitted or distributed in any way without Our express written permission. You are hereby given a limited license to use the FACILON Platforms, subject to your agreement of these Terms.</p>
                <p>When you upload, submit, store, send or receive content that may include chat or feedback to or through the FACILON Platform, you give FACILON a worldwide, perpetual license to use, host, store, reproduce, modify, create derivative works, communicate, publish, publicly perform, publicly display, and distribute such content. This license shall not expire even if it is not used by FACILON. The rights you grant in this license are for the limited purpose of operating, promoting, and improving the FACILON services, and to develop new ones. This license continues even if you stop using the FACILON services.</p>
                <h3>Indemnity And Release</h3>
                <p>You shall indemnify and hold FACILON, its officers, owners, directors, employees and agents, partners, co-branders, licensors, licensees, consultants, contractors and other applicable third parties (collectively <b>‘Indemnified Parties’)</b> harmless from any claim or demand, or actions including reasonable attorney’s fees, made by any third party or penalty imposed due to or arising out of your breach of these Terms or any document incorporated by reference, or your violation of any law, rules, regulations, or the rights of a third party.</p>
                <h3>Limitation Of Liability</h3>
                <p>In no event shall FACILON, their officers, shareholders, subsidiaries, associate companies, directors, employees and agents, partners, co-branders, licensors, licensees, consultants, or contractors be liable to you or any third party for any special, incidental, indirect, consequential or punitive damages or losses whatsoever, or damages for loss of data or profits, goodwill, and/ or other intangible loss, whether or not foreseeable and regardless of whether FACILON has been advised of the possibility of such damages, or based on any theory of liability, including breach of contract or warranty, negligence or other tortious action, or any other claim arising out of or in connection with your use of, or access to, the FACILON Platforms or Facilon services. </p>
                <p>In no event shall FACILON’s total cumulative liability to you in connection with the FACILON services and Platform for all damages, losses and causes of action (whether arising under contract or otherwise), arising from or relating to your use of the FACILON Platforms or arising from these Terms exceed INR 10,000/- (Indian Rupees Ten Thousand only). </p>
                <h3>Disclaimer</h3>
                <p>The FACILON Platform and services, including all content, software, functions, material, and information made available or accessible through the FACILON Platform are provided “as is”. FACILON and their respective agents, co-branders or partners, make no representation and warranty of any kind for the content, software, functions, material, network providers, internet connection and information available or accessible through the services and/or Platform.</p>
                <p>FACILON does not warrant that the functions contained in content, information, and materials on the FACILON Platform, including, without limitation any third-party sites or services linked to the Platform will be uninterrupted, timely or error-free, that the defects will be rectified, or that the FACILON Platform or the servers that make such content, information, and materials available are free of viruses or other harmful components.</p>
                <p>It is agreed that none of the services available on Facilon’s Platform shall be deemed to be investment advice by Facilon. If you receive any information, recommendations or advice from any employee or representative of Facilon, then such information, recommendations or advice shall strictly be in the personal capacity of such employee or representative, and you may act upon it at your sole risk and costs. Facilon shall in no way be liable or responsible for any transactions executed by you in pursuance of such information, recommendations, or advice. </p>
                <p>Facilon and its officers, directors, partners, employees, agents and affiliates shall have no responsibility with respect to any investment decisions or transactions made by you. Facilon will not be responsible for any business loss (including loss of profits, revenue, contracts, anticipated savings, data, goodwill or wasted expenditure) or any other indirect or consequential loss that is not reasonably foreseeable to both you and us when you commenced using the Platform. </p>
                <h3>Privacy Policy</h3>
                <p>Our Privacy Policy outlines what Personal Data we collect when you sign-up with us or use our Platform, why we collect this Personal Data, and how we process that Personal Data to provide you with our services. You can access the <a href="privacy-policy.html" target="_blank">Privacy Policy</a> associated with our Platform to understand our use of your Personal Data.</p>
                <h3>Violation Of Terms Of Use / Suspicious Actvity</h3>
                <p>If we believe that you have violated any of the conditions as mentioned under these Terms, our <a href="privacy-policy.html" target="_blank">Privacy Policy</a> and other terms and conditions applicable to certain Platforms, services or any agreements consented to while availing FACILON services or Facilon Platform, we reserve the right to suspend your access to the FACILON services and/or Platform without prior notice to you. </p>
                <h3>Your Use Of Facilon</h3>
                <p>You agree that:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                  <li>Your use of the Facilon Platform shall not violate any applicable law or regulation.</li>
                  <li>Your use of the FACILON Platforms shall be only for legitimate purposes.</li>
                  <li>All information you submit is truthful, complete and accurate and you agree to maintain accurate, complete and up-to-date account information in your account.</li>
                  <li>You are responsible for all the interactions that take place on the Platform including ensuring maintaining the confidentiality and secured access of your account information such as user ID, password, OTP.</li>
                  <li>You shall not access or use the FACILON Platform in any manner that (i) may be harmful to the operation of the FACILON Platform or its content; (ii) may be unlawful; (iii) maybe harmful to FACILON or to any other user; (iv) may hinder the other user’s enjoyment of the FACILON Platform; or (v) to defraud other users, FACILON or any Service Provider.</li>
                  <li>You shall not post, distribute, or otherwise transmit or make available any software or other computer files that contain a virus, other harmful component, or malicious content, or otherwise impair or damage the FACILON Platform or any connected network, or otherwise interfere with any person or entity's use or enjoyment of the FACILON Platform.</li>
                  <li>You shall not delete or modify any content of the FACILON Platform or services.</li>
                  <li>Your use of the FACILON Platform shall indicate that you have provided consent to automatically receive updates such as bug fixes, patches, enhanced functions, missing plug-ins, and new versions (collectively, <b>‘Updates’</b>), for the purpose of effective delivery of the FACILON services. Please note that your continued use of the FACILON Platform following such Updates would mean deemed acceptance by you of the same.</li>
                  <li>You understand and accept that not all services are available in all geographic areas, and you may not be eligible for all services offered by FACILON on the FACILON Platforms. FACILON reserves the right to determine the availability and eligibility for any services offered on the FACILON Platform.</li>
                </ul>
                <h3>General</h3>
                <p>No joint venture, partnership, employment, or agency relationship exists between you, FACILON or any Third Party as a result of the contract contained in these Terms. If any provision of these Terms is held to be illegal, invalid, or unenforceable, in whole or in part, under any law, such provision or part thereof shall to that extent be deemed not to form part of these Terms but the legality, validity and enforceability of the other provisions in these Terms shall not be affected. In that event, FACILON shall replace the illegal, invalid or unenforceable provision or part thereof with a provision or part thereof that is legal, valid and enforceable and that has, to the greatest extent possible, a similar effect as the illegal, invalid or unenforceable provision or part thereof, given the contents and purpose of these Terms. These Terms (together with any additional terms displayed in specific sections of the FACILON Platform) constitute the entire agreement and understanding of the parties with respect to its subject matter and replaces and supersedes all prior or contemporaneous agreements or undertakings regarding such subject matter.</p>
                <h3>Force Majeure</h3>
                <p>Facilon shall not be responsible for any interruptions, delays or defaults in the performance of its obligations due to any contingencies beyond its control. Such contingencies include but are not limited to losses caused directly or indirectly by exchange or market rulings, cyber security incidents, suspension of trading, fires, floods, civil commotions or riots, earthquakes, cyclones, tsunamis, wars, strikes, pandemics or health calamities, any terrorist actions, electrical power failures, telecommunication equipment failures, system failures, breakdown in internet links, other equipment failures and any regulatory actions by the government.</p>
                <h3>Governing Law And Jurisdiction</h3>
                <p>The FACILON Platform, the FACILON services, all your interactions with FACILON Platform, and our relationship shall be governed by the laws of India, without regard to conflict of law principles. You agree that any claims arising out of the use of the information from the Platforms or services shall be governed by the laws of India and only the Courts in Mumbai, Maharashtra, and no other Courts, shall have jurisdiction over the same.</p>
                <h3>Assignment</h3>
                <p>You shall not transfer or assign any of Your rights and obligations arising from these Terms.</p>
                <p>You agree and acknowledge that FACILON may assign or transfer its rights and obligations under these Terms in whole or in part, to (i) an acquirer of FACILON or any other FACILON entity or their respective equity interest, business or assets; or (iii) a successor entity resulting from any corporate action including mergers or demergers.</p>
                <h3>Severability</h3>
                <p>If any part of the provisions contained in these Terms are determined to be invalid, or unenforceable to any extent, such provision shall be severed from the remaining provisions which shall continue to be valid and enforceable to the fullest extent permitted by law.</p>
                <h3>Support</h3>
                <p>We support and encourage all users to contact us for questions, concerns, or suggestions relating to our Terms and our Privacy Policy or practices involving the usage of data. </p>
                <p>We commit to reaching out to you within 7 working days of your request. We may be contacted at <a href="mailto:social@facilonservices.com">social@facilonservices.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>

       
@endsection



















