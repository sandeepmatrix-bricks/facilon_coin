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
    background: rgb(190, 23, 23);
    font-size: 17px;
    font-weight: bold;
    color: #fff;
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
    color: rgba(255, 255, 255, 0.5);
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
  <section id="services" class="services">
        <div class="container">
          <div class="section-heading mb-40 text-center">
            <div class="sub-heading">FAQ's</div>
            <!-- <div class="bar m-auto"></div> -->
          </div>
          
          <div class="tablike-sec text-center">
              <div class="rv-1-about__pills">
                <a href="#residential-status" class="rv-1-about__pill scroll"><div class=""></div>Residential Status</a>
                                <a href="#General-FAQs" class="rv-1-about__pill scroll"><div class=""></div>General FAQs</a>
                <a href="#Investorss" class="rv-1-about__pill scroll"><div class=""></div>FAQs for Investors</a>

                <a href="#bank-account" class="rv-1-about__pill scroll"><div class=""></div>Bank Account</a>
                <a href="#securities" class="rv-1-about__pill scroll"><div class=""></div>Securities</a>
                
                <a href="#investment-routes" class="rv-1-about__pill scroll"><div class=""></div>Investment Routes</a>
                <a href="#service-providers" class="rv-1-about__pill scroll"><div class=""></div>Service Providers</a>
                <a href="#investment-in-listed-securities" class="rv-1-about__pill scroll"><div class=""></div>Investment in Listed Securities</a>
                                <a href="#service-provider-faqs" class="rv-1-about__pill scroll rc-sub-sec"><div class=""></div>FAQs for Service Providers (SP – Brokers, Custodians, Banks, etc.)</a>

                <a href="#investment-routes-account-opened" class="rv-1-about__pill scroll"><div class=""></div>Investment routes - Accounts to be opened / maintained</a>
                <a href="#portfolio-management-scheme" class="rv-1-about__pill scroll rc-sub-sec"><div class=""></div>Portfolio Management Scheme ('PMS') - NRI (NRE and NRO accounts) / OCI</a>
                <a href="#portfolio-investment-scheme" class="rv-1-about__pill scroll rc-sub-sec"><div class=""></div>Portfolio Investment Scheme ('PIS') - NRIs who maintain NRE Accounts only</a>

            </div>
          </div>


          <!-- Modal -->

        </div>



    </section>
    <section id="services" class="services">
      <div class="faq-1">
        <div class="container">
          <div class="row">
            <div class="section-heading mb-40 text-center">
                   <!-- New Heading -->
              <div class="section-heading mb-20 text-center" id="residential-status">
                <h2 class="main-heading"><strong>Residential-status related</strong></h2>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How do I know whether I fall under the category of a non-resident Indian ('NRI') or a Person of Indian Origin ('PIO')                                
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <p><strong>NRI: You're an Indian citizen living abroad for over half the year.</strong></p>
                      <ul>
                        <li>- You are a citizen of India.</li>
                        <li>- You live outside India for more than 182 days in a year in the Preceding Financial Year. Preceding Financial Year means the financial year, which ended on the last 31st of March.</li>
                        <li>- Your reason for living abroad could be employment, business, education, or any other purpose with an uncertain duration of stay.</li>
                      </ul><br>
                      <p><strong>PIO: You're a citizen of another country with Indian roots either through yourself, your parents, grandparents, or marriage.</strong></p>
                      <ul>
                        <li>- You are a citizen of any country except Bangladesh or Pakistan.</li>
                        <li>- You previously held an Indian passport.</li>
                        <li>- You or either of your parents or grandparents were citizens of India.</li>
                        <li>- You are a spouse of an Indian citizen or someone who meets the above criteria.</li>
                      </ul>
                    </div>
                  </div> 
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How do I know whether I am an Overseas Citizen of India ('OCI')
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <p><strong>OCI: You are an OCI if you meet any of the following criteria:</strong></p>
                      <ul>
                        <li>- You are a citizen of another country, but you were a citizen of India on or after January 26, 1950.</li>
                        <li>- You are a citizen of another country, but you were eligible to become a citizen of India on January 26, 1950.</li>
                        <li>- You are a citizen of another country, but you belong to a territory that became part of India after August 15, 1947.</li>
                        <li>- You are a child, grandchild, or great-grandchild of someone who meets any of the above criteria.</li>
                        <li>- You are a minor child whose parents are either both Indian citizens or one parent is an Indian citizen.</li>
                        <li>- You are a foreign spouse of an Indian citizen or an OCI cardholder. The following conditions apply:
                          <ul><br>
                            <li>You are married to an Indian citizen or an OCI cardholder (registered under section 7A of the Citizenship Act, 1955).</li>
                            <li>Your marriage must have been registered and lasted for at least two years before applying for the OCI card.</li>
                            <li>You will need to undergo a security clearance by a competent authority in India.</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Is physical presence overseas a prerequisite for being classified as an NRI if I hold an Indian passport and work overseas/abroad                                
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <p>Please refer to our response to Q </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Is physical presence overseas a prerequisite for being considered an OCI (Overseas Citizen of India)
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      <p>No, you do not need to be physically present outside of India to maintain your OCI status. As long as you remain registered
                      under Section 7A of the Citizenship Act, 1955 and hold your OCI card, you can enjoy the benefits of OCI status (lifetime
                      visa-free entry, property ownership, etc.) even if you live in India.
                      </p>
                      <p>However, it is important to keep a few points in mind:</p>
                      <ul>
                        <li>You cannot apply for OCI while in India on certain visas: Tourist, Missionary, and Mountaineering visas are not valid for OCI registration within India.</li>
                        <li>'Ordinarily Resident' in India: If you spend more than six months continuously in India, you might be considered "ordinarily resident" and face challenges applying for or renewing your OCI status.</li>
                      </ul>
                      <p>You can live in India as an OCI, but maintain your status by registering and holding the OCI card. Just be mindful of visa restrictions when applying and avoid residing in India for extended periods to avoid complications.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              What is the difference between an OCI and a PIO
                          </a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                      <p><strong>PIO is a broader term representing Indian origin. <br> 
                      OCI is a specific legal status granting long-term residency and benefits in India.</strong></p>
                      <ul>
                        <li><strong> 1. Who they are:</strong> 
                          <ul>
                              <li>PIO:A foreign citizen with Indian ancestry through themselves, parents, grandparents, or great-grandparents.</li>
                              <li>OCI: A foreign citizen with Indian origin who can live and work in India long-term.</li>
                          </ul>
                        </li>
                        <li><strong>2. Scope and benefits:</strong>
                          <ul>
                              <li>PIO:Limited immigration benefits; requires registration if staying in India for over 180 days.</li>
                              <li>OCI: Visa-free entry for life, study, work, and live in India; own property; invest; similar to Indian residents in many ways.</li>
                          </ul>
                        </li>
                        <li><strong>3. Family coverage:</strong>
                            <ul>
                                <li>PIO: Covers self, parents, grandparents, great-grandparents, and spouse.</li>
                                <li>OCI: Covers self, parents, and grandparents.</li>
                            </ul>
                        </li>
                        <li><strong>4. Duration:</strong>
                            <ul>
                                <li>PIO: Card valid for 15 years; renewable.</li>
                                <li>OCI: Card valid for a lifetime.</li>
                            </ul>
                        </li>
                        <li><strong>5. Relationship:</strong>
                            <ul>
                                <li>Not all OCIs are PIOs: <br> Only if an OCI cardholder has Indian ancestry through themselves, parents, or grandparents.</li><br>
                                <li><strong>All PIOs can apply for OCI: But not all PIOs necessarily choose to do so.</strong></li>
                            </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div><br><br>
                
                
                <!--genral-->
                <div class="row">
  <div class="section-heading mb-20 text-center" id="General-FAQs">
    <h2 class="main-heading"><strong>General FAQs</strong></h2>
  </div>
</div>
<br>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <!-- 1: What is Facilon Services? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOneee">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOneee"
          aria-expanded="false" aria-controls="collapseOne">
          What is Facilon Services?
        </a>
      </h4>
    </div>
    <div id="collapseOneee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneee">
      <div class="panel-body">
        <p>
          Facilon Services (Facilon) is a digital facilitation platform for cross-border investment activities,
          offering Facilitation as a Service (FaaS). It enables seamless investor onboarding, secure document
          management, and smooth interaction between global investors and regulated Indian service providers like
          brokers, custodians, and banks.
          <br><br>
          Facilon Services Private Limited is a private limited company incorporated under Indian laws (Companies Act,
          2013) in June 2023 and is promoted by Mr. Suneet Luthra and Mr. Jaydeep Jayakar. It is registered as a
          Start-up. Visit <a href="https://www.facilonservices.com" target="_blank">facilonservices.com</a> for more
          information. Facilon is not a financial or investment advisor.
        </p>
      </div>
    </div>
  </div>

  <!-- 2: What services does Facilon offer? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwoo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoo"
          aria-expanded="false" aria-controls="collapseTwoo">
          What services does Facilon offer?
        </a>
      </h4>
    </div>
    <div id="collapseTwoo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoo">
      <div class="panel-body">
        <p><strong>For Investors (NRIs, OCIs, FPIs):</strong></p>
        <ul>
          <li>Seamless onboarding for investment in permitted securities in India</li>
          <li>Compare and select registered service providers like Brokers, Custodians, Portfolio Managers, and Banks</li>
          <li>KYC, account opening, and document submission</li>
          <li>Investment journey tracking and secured instruction tools</li>
        </ul>
        <p><strong>For SEBI/RBI regulated Service Providers:</strong></p>
        <ul>
          <li>Client acquisition and investor outreach</li>
          <li>End-to-end onboarding automation</li>
          <li>Digital documentation tools and client communications</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 3: What investor problems does Facilon solve? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThreee">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThreee"
          aria-expanded="false" aria-controls="collapseThreee">
          What investor problems does Facilon solve?
        </a>
      </h4>
    </div>
    <div id="collapseThreee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreee">
      <div class="panel-body">
        <ul>
          <li>Helps overseas investors identify the right SEBI-registered intermediaries</li>
          <li>Facilitates account opening process for Indian equity and bond markets</li>
          <li>Streamlines document submission and compliance</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 4: What are the benefits for service providers? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFourr">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourr"
          aria-expanded="false" aria-controls="collapseFourr">
          What are the benefits for service providers?
        </a>
      </h4>
    </div>
    <div id="collapseFourr" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourr">
      <div class="panel-body">
        <ul>
          <li>Access to global investor leads</li>
          <li>Accelerated onboarding using Facilon’s digital tools</li>
          <li>Increased digital visibility and improved operational efficiency / TAT</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 5: How can service providers list on Facilon? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFivee">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFivee"
          aria-expanded="false" aria-controls="collapseFivee">
          How can service providers list on Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseFivee" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFivee">
      <div class="panel-body">
        <p>Reach out via <a href="mailto:Contact@facilonservices.com">Contact@facilonservices.com</a> to explore partnership options and platform listing.</p>
      </div>
    </div>
  </div>

  <!-- 6: Is Facilon involved in regulatory or investment advisory? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSixX">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSixX"
          aria-expanded="false" aria-controls="collapseSixX">
          Is Facilon involved in regulatory or investment advisory?
        </a>
      </h4>
    </div>
    <div id="collapseSixX" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixX">
      <div class="panel-body">
        <p>No. Facilon does not provide investment or regulatory advice. It connects investors with SEBI/RBI regulated service providers. Facilon facilitates engagement across all pre-trading stages — including KYC, regulatory registration, and onboarding — as well as post-trading coordination.</p>
      </div>
    </div>
  </div>

  <!-- 7: Does Facilon provide onboarding support? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSevenn">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSevenn"
          aria-expanded="false" aria-controls="collapseSevenn">
          Does Facilon provide onboarding support?
        </a>
      </h4>
    </div>
    <div id="collapseSevenn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSevenn">
      <div class="panel-body">
        <p>Yes. Facilon offers guided onboarding for both investors and providers with document checklists and status tracking tools.</p>
      </div>
    </div>
  </div>

  <!-- 8: Where can I find Facilon's Privacy Policy & Terms of Use? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEightt">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEightt"
          aria-expanded="false" aria-controls="collapseEightt">
          Where can I find Facilon's Privacy Policy & Terms of Use?
        </a>
      </h4>
    </div>
    <div id="collapseEightt" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEightt">
      <div class="panel-body">
        <p>These are available at <a href="https://www.facilonservices.com" target="_blank">facilonservices.com</a> under the "Privacy Policy" and "Terms of Use" sections.</p>
      </div>
    </div>
  </div>

  <!-- 9: How can I register with Facilon? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNiene">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNiene"
          aria-expanded="false" aria-controls="collapseNiene">
          How can I register with Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseNiene" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNiene">
      <div class="panel-body">
        <p>Both investors and service providers can register by signing up and completing the verification process at <a href="https://www.facilonservices.com" target="_blank">facilonservices.com</a>.</p>
      </div>
    </div>
  </div>

  <!-- 10: Is there a cost to use Facilon? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTenn">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTenn"
          aria-expanded="false" aria-controls="collapseTenn">
          Is there a cost to use Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseTenn" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTenn">
      <div class="panel-body">
        <p>Facilon is free for investors to onboard. Service providers should contact Facilon for customized pricing based on services used. All pricing and commercial terms will be agreed upon upfront and documented in a formal agreement between Facilon and the service provider.</p>
      </div>
    </div>
  </div>
  <!-- 11: What about data privacy and security on Facilon? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11"
          aria-expanded="false" aria-controls="collapse11">
          What about data privacy and security on Facilon?
        </a>
      </h4>
    </div>
    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
      <div class="panel-body">
        <p>Facilon uses bank-grade security protocols, encrypted data storage, and is compliant with data protection standards.</p>
      </div>
    </div>
  </div>

  <!-- 12: Where is Facilon’s registered office located? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading12">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12"
          aria-expanded="false" aria-controls="collapse12">
          Where is Facilon’s registered office located?
        </a>
      </h4>
    </div>
    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
      <div class="panel-body">
        <p>A-102, Golden Square CHS, Kalina, Santacruz (E), Vidyanagari, Mumbai-400098, Maharashtra, India.</p>
      </div>
    </div>
  </div>

  <!-- 13: Does Facilon have physical branches? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading13">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13"
          aria-expanded="false" aria-controls="collapse13">
          Does Facilon have physical branches in India or abroad?
        </a>
      </h4>
    </div>
    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
      <div class="panel-body">
        <p>Currently, Facilon is a digital-only financial facilitation platform. Plans for expansion may include branch offices in the future.</p>
      </div>
    </div>
  </div>

  <!-- 14: Which industries does Facilon operate in? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading14">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14"
          aria-expanded="false" aria-controls="collapse14">
          Which industries does Facilon operate in?
        </a>
      </h4>
    </div>
    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
      <div class="panel-body">
        <p>Facilon operates at the intersection of the Investment Tech, FinTech, and Wealth Management sectors.</p>
      </div>
    </div>
  </div>

  <!-- 15: Is Facilon regulated by SEBI or RBI? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading15">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15"
          aria-expanded="false" aria-controls="collapse15">
          Is Facilon regulated by SEBI or RBI?
        </a>
      </h4>
    </div>
    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
      <div class="panel-body">
        <p>Facilon is not directly regulated as it functions as a digital facilitator. Based on legal review, it does not require SEBI or RBI registration.</p>
      </div>
    </div>
  </div>

  <!-- 16: What does the name “Facilon” mean? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading16">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16"
          aria-expanded="false" aria-controls="collapse16">
          What does the name “Facilon” mean?
        </a>
      </h4>
    </div>
    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
      <div class="panel-body">
        <p>It is derived from “Facilitating” and “Onboarding,” emphasizing its role in simplifying investment onboarding.</p>
      </div>
    </div>
  </div>

  <!-- 17: Is Facilon present on social media? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading17">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17"
          aria-expanded="false" aria-controls="collapse17">
          Is Facilon present on social media?
        </a>
      </h4>
    </div>
    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
      <div class="panel-body">
        <p>Yes. Facilon maintains active profiles on LinkedIn, Instagram, and Facebook to promote its platform and build visibility.</p>
      </div>
    </div>
  </div>

  <!-- 18: Is Facilon a recognized startup? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading18">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18"
          aria-expanded="false" aria-controls="collapse18">
          Is Facilon a recognized startup?
        </a>
      </h4>
    </div>
    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
      <div class="panel-body">
        <p>Yes. Facilon is recognized by the DPIIT (Department for Promotion of Industry and Internal Trade), Government of India.</p>
      </div>
    </div>
  </div>

  <!-- 19: Is Facilon an MSME-registered company? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading19">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19"
          aria-expanded="false" aria-controls="collapse19">
          Is Facilon an MSME-registered company?
        </a>
      </h4>
    </div>
    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
      <div class="panel-body">
        <p>Yes. Facilon is registered as a Micro enterprise under India’s MSME classification.</p>
      </div>
    </div>
  </div>

  <!-- 20: Are the Facilon brand name and logo trademarked? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading20">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse20"
          aria-expanded="false" aria-controls="collapse20">
          Are the Facilon brand name and logo trademarked?
        </a>
      </h4>
    </div>
    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
      <div class="panel-body">
        <p>Yes. The Facilon logo and the word “FACILON” are registered with the Trademark Registry, Government of India under Class 35 and Class 36 as trademark and wordmark respectively in September 2023.</p>
      </div>
    </div>
  </div>

  <!-- 21: Is Facilon registered under GST? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading21">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21"
          aria-expanded="false" aria-controls="collapse21">
          Is Facilon registered under GST?
        </a>
      </h4>
    </div>
    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
      <div class="panel-body">
        <p>Yes. GSTIN: 27AAFCF5175M1Z5</p>
      </div>
    </div>
  </div>

  <!-- 22: What is Facilon’s CIN? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading22">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22"
          aria-expanded="false" aria-controls="collapse22">
          What is Facilon’s CIN?
        </a>
      </h4>
    </div>
    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
      <div class="panel-body">
        <p>U82990MH2023PTC405216</p>
      </div>
    </div>
  </div>

  <!-- 23: What is Facilon’s PAN? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading23">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23"
          aria-expanded="false" aria-controls="collapse23">
          What is Facilon’s PAN?
        </a>
      </h4>
    </div>
    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
      <div class="panel-body">
        <p>AAFCF5175M</p>
      </div>
    </div>
  </div>

  <!-- 24: What is the core business objective of Facilon? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading24">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24"
          aria-expanded="false" aria-controls="collapse24">
          What is the core business objective of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
      <div class="panel-body">
        <p>Facilon aims to build a secure digital marketplace for investors and Indian financial intermediaries to connect, collaborate, and transact.</p>
      </div>
    </div>
  </div>

  <!-- 25: What is Facilon’s business model? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading25">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25"
          aria-expanded="false" aria-controls="collapse25">
          What is Facilon’s business model?
        </a>
      </h4>
    </div>
    <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
      <div class="panel-body">
        <p>Facilon operates a multi-sided SaaS platform enabling:</p>
        <ul>
          <li><strong>B2B:</strong> Service Providers (brokers, banks, custodians)</li>
          <li><strong>B2C:</strong> Investors (NRIs, OCIs, FPIs)</li>
          <li><strong>B2B2C:</strong> Investment Advisors and Portfolio Managers</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- 26: Does Facilon have employees? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading26">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse26"
          aria-expanded="false" aria-controls="collapse26">
          Does Facilon have employees?
        </a>
      </h4>
    </div>
    <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
      <div class="panel-body">
        <p>Yes. Facilon currently has a lean team of 3 professionals, including the founders, and plans to scale up with business growth.</p>
      </div>
    </div>
  </div>

  <!-- 27: What is Facilon’s organizational structure? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading27">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse27"
          aria-expanded="false" aria-controls="collapse27">
          What is Facilon’s organizational structure?
        </a>
      </h4>
    </div>
    <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
      <div class="panel-body">
        <p>Facilon works with legal advisors, compliance consultants, and tech professionals. Team details are available on the website and LinkedIn.</p>
      </div>
    </div>
  </div>

  <!-- 28: What is Facilon’s mission? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading28">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse28"
          aria-expanded="false" aria-controls="collapse28">
          What is Facilon’s mission?
        </a>
      </h4>
    </div>
    <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
      <div class="panel-body">
        <p>To offer secure, efficient onboarding and digital support for overseas investors accessing Indian financial markets.</p>
      </div>
    </div>
  </div>

  <!-- 29: What is Facilon’s vision? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading29">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse29"
          aria-expanded="false" aria-controls="collapse29">
          What is Facilon’s vision?
        </a>
      </h4>
    </div>
    <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading29">
      <div class="panel-body">
        <p>To become the leading platform digitally enabling investor-service provider interactions through compliant, secure, and scalable technology.</p>
      </div>
    </div>
  </div>

  <!-- 30: Can Facilon be considered a Financial Adviser or Distributor? -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading30">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse30"
          aria-expanded="false" aria-controls="collapse30">
          Can Facilon be considered a Financial Adviser or a Financial/Investment/Insurance Product distributor?
        </a>
      </h4>
    </div>
    <div id="collapse30" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading30">
      <div class="panel-body">
        <p>No. Facilon is a facilitator. It is a marketplace where the documents and information flow are intended to achieve the certain key objectives to Service Recipients and Service Providers.</p>
      </div>
    </div>
  </div>

</div>

           <br><br>
                
                
                <div class="row">
  <div class="section-heading mb-20 text-center" id="Investorss">
    <h2 class="main-heading"><strong>FAQs for Investors</strong></h2>
  </div>
</div><br>

<div class="panel-group" id="accordionInvestor" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq1-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq1" aria-expanded="false" aria-controls="investor-faq1" class="collapsed">
          What is Facilon?
        </a>
      </h4>
    </div>
    <div id="investor-faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq1-heading">
      <div class="panel-body">
        Facilon is a digital investment facilitation platform that connects global investors—NRIs, OCIs, and FPIs—with Indian SEBI registered service providers such as brokers, custodians, and scheduled banks. It simplifies access to the Indian stock market and ensures secured onboarding.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq2-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq2" aria-expanded="false" aria-controls="investor-faq2" class="collapsed">
          What are the key benefits for investors using Facilon?
        </a>
      </h4>
    </div>
    <div id="investor-faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq2-heading">
      <div class="panel-body">
        <ul>
          <li>Access to a curated network of SEBI-registered market intermediaries</li>
          <li>Fast, seamless onboarding for opening of investment accounts in India</li>
          <li>Consolidated dashboards and reporting tools</li>
          <li>Enhanced transparency with standardized documentation</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq3-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq3" aria-expanded="false" aria-controls="investor-faq3" class="collapsed">
          Can I invest in any Indian company through Facilon?
        </a>
      </h4>
    </div>
    <div id="investor-faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq3-heading">
      <div class="panel-body">
        Facilon supports investment in eligible securities of listed companies through SEBI registered intermediaries.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq4-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq4" aria-expanded="false" aria-controls="investor-faq4" class="collapsed">
          What investment products are available via Facilon?
        </a>
      </h4>
    </div>
    <div id="investor-faq4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq4-heading">
      <div class="panel-body">
        Investors can explore a wide range of investment products including Indian equities, bonds, and market-linked securities, based on the services offered by connected providers registered with Facilon.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq5-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq5" aria-expanded="false" aria-controls="investor-faq5" class="collapsed">
          Is my personal and financial data safe on Facilon?
        </a>
      </h4>
    </div>
    <div id="investor-faq5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq5-heading">
      <div class="panel-body">
        Yes. Facilon prioritizes data protection and information security through encryption, cloud-based storage, and regular compliance audits.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq6-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq6" aria-expanded="false" aria-controls="investor-faq6" class="collapsed">
          How much does it cost to use Facilon’s investor services?
        </a>
      </h4>
    </div>
    <div id="investor-faq6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq6-heading">
      <div class="panel-body">
        Investor onboarding and selection services are free for investors. Additional services may carry charges based on service provider agreements.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq7-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq7" aria-expanded="false" aria-controls="investor-faq7" class="collapsed">
          What digital products are available for investors?
        </a>
      </h4>
    </div>
    <div id="investor-faq7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq7-heading">
      <div class="panel-body">
        <ul>
          <li><strong>Facilon Appoint:</strong> Compare, evaluate and appoint Indian service providers</li>
          <li><strong>Facilon Status:</strong> Real-time onboarding document status and progress updates</li>
          <li><strong>Facilon Instruct:</strong> Send secure transaction and service instructions</li>
          <li><strong>Facilon Report:</strong> Access consolidated investment reports and provider insights</li>
        </ul>
        These products may evolve in due course depending on market/regulatory dynamics and practices.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="investor-faq8-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionInvestor" href="#investor-faq8" aria-expanded="false" aria-controls="investor-faq8" class="collapsed">
          What is Facilon's technology framework?
        </a>
      </h4>
    </div>
    <div id="investor-faq8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="investor-faq8-heading">
      <div class="panel-body">
        Facilon is built on Microsoft Power Apps, offering a cloud-native SaaS experience that ensures reliability, scalability, and compliance.
      </div>
    </div>
  </div>

</div>

               
          
                <br><br>
                
                
                <div class="row">
  <div class="section-heading mb-20 text-center" id="service-provider-faqs">
    <h2 class="main-heading"><strong>FAQs for Service Providers (SP – Brokers, Custodians, Banks, etc.)</strong></h2>
  </div>
</div><br>

<div class="panel-group" id="accordionSP" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="sp-faq1-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionSP" href="#sp-faq1" aria-expanded="false" aria-controls="sp-faq1" class="collapsed">
          What is Facilon for service providers?
        </a>
      </h4>
    </div>
    <div id="sp-faq1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sp-faq1-heading">
      <div class="panel-body">
        Facilon enables service providers and SEBI registered Market Intermediaries in India to connect with overseas investors through a tech-first approach. It facilitates onboarding, enhances discoverability, and boosts client acquisition for brokers, custodians, and banks.
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="sp-faq2-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionSP" href="#sp-faq2" aria-expanded="false" aria-controls="sp-faq2" class="collapsed">
          How does Facilon help in new client acquisition?
        </a>
      </h4>
    </div>
    <div id="sp-faq2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sp-faq2-heading">
      <div class="panel-body">
        <ul>
          <li>Exposure to international investors exploring Indian financial markets</li>
          <li>Seamless onboarding workflows</li>
          <li>Investor engagement tools that improve TAT, communication, and conversions</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="sp-faq3-heading">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionSP" href="#sp-faq3" aria-expanded="false" aria-controls="sp-faq3" class="collapsed">
          What Facilon products are available for service providers?
        </a>
      </h4>
    </div>
    <div id="sp-faq3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sp-faq3-heading">
      <div class="panel-body">
        <ul>
          <li><strong>Facilon Onboard:</strong> Automates client onboarding processes</li>
          <li><strong>Facilon Appoint:</strong> Showcases provider profiles to global investors for selection</li>
        </ul>
      </div>
    </div>
  </div>

</div>
<br><br>
                
                <div class="row">
                  <div class="section-heading mb-20 text-center" id="bank-account">
                    <h2 class="main-heading"><strong>Bank Account Related</strong></h2>
                  </div>
                </div><br>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingSix">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              As an NRI, am I allowed to open and maintain a bank account in India?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        <p>Yes.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingSeven">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              What is the specific name or term used for such a bank account?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                      <div class="panel-body">
                          <p>As an NRI, Banks are permitted to open the following bank accounts:</p>
                          <ul>
                              <li>1. Non-Resident External (NRE) Bank Accounts</li>
                              <li>2. Non-Resident Ordinary (NRO) Bank Accounts</li>
                          </ul>
                       </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Additionally, if I opened bank accounts in India before becoming an NRI, what are these accounts referred to when my residential status changes to that of a Resident
                      </a>
                    </h4>
                  </div>
                  <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                      <p>In cases where an account holder holds a Resident Bank account (single or joint) before their NRI status begins, they have the option to convert their existing account to an NRO account. This conversion process involves contacting the bank and completing the necessary formalities</p>
                    </div>
                  </div>
                </div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingNine">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              I am an OCI. Can I open and maintain a Bank Account in India            
      </a>
        </h4>
    </div>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
        <div class="panel-body">
            <p>Yes. <br>
    As stated earlier, OCI cardholders fall under the category of PIOs (Person of Indian Origin).<br><br>
 
    PIOs have the authorization to open and manage these accounts with authorized dealers and banks, including cooperative banks
    that are specifically permitted by the Reserve Bank to maintain such accounts.
      </p>
         </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
            What type of Bank Accounts are permitted to be opened by NRIs / OCIs / PIOs         
      </a>
        </h4>
    </div>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
        <div class="panel-body">
            <p> <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><strong>Account type /Residential Status </strong></th>
                            <th><strong>Resident Account </strong></th>
         <th><strong>NRO </strong></th>
               <th><strong>NRE Accounts </strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>NRI</td>
                            <td>Not-permitted</td>
          <td>Permitted</td>

          <td>Permitted</td>

                        </tr>
                        <tr>
                            <td>PIO</td>
          <td>Not-permitted</td>
          <td>Permitted</td>

          <td>Permitted</td>

                        </tr>
                        <tr>
                            <td>OCI</td>
                            <td>Permitted in certain cases</td>
          <td>Permitted</td>
          <td>Permitted</td>

                        </tr>
                      </tbody>
                </table>      
    </p>


     <p><strong style="color: red;">Please note- Certain conditions apply regarding:</strong><br><br>
                a) Eligibility criteria for joint account holders.<br>
                b) Restrictions on citizens from specific countries who may be prohibited from opening accounts.<br><br>
                Account holders are advised to contact their respective banks for guidance on the specific eligibility criteria or any related restrictions that may apply in their case.
            </p>
         </div>
    </div>
</div>




<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEleven">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              What are the similarities and key differences between NRE and NRO Accounts           
      </a>
        </h4>
    </div>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
        <div class="panel-body">
            <p><strong>Similarities: </strong><br>
    . NRE and NRO accounts are Indian Rupee accounts. <br>
    . NRE and NRO accounts can be opened as savings as well as current accounts     </p>

      <p><strong>Key Differences: </strong><br>

<table class="table table-bordered">
<thead>
<tr>
<th><strong>NRE Accounts</strong></th>
<th><strong>NRO Accounts</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>Balance freely repatriable.</td>
<td rowspan="2">Balances repatriable up to INR equivalent of USD 1 Million per financial year, net of applicable taxes</td>
</tr>
<tr>
<td>Account is tax free from interest earned on balances perspective</td>
<td></td> </tr>
<tr>
<td>Permitted credits include:</td>
<td rowspan="5">Permitted to credit income originating in India such as salary, rent, interest, dividend etc</td>

</tr>
<tr>
<td>a) Inward remittances from outside India</td>
<td></td>
</tr>
<tr>
<td>b) Income earned on investments made through the NRE Account including maturity value/proceeds</td>
<td></td>
</tr>
<tr>
<td>c) Transfer from other NRE account</td>
<td></td>
</tr>
</tbody>
</table>

</div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwelve">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
             What is the minimum requirement from NRI and OCI which Service Providers expect before e progressing further?      
      </a>
        </h4>
    </div>
    <div id="collapsetwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwelve">
        <div class="panel-body">
            <p><strong> . For NRI: PAN Card<br>
    . For OCI: OCI Card and PAN Card </strong> <br><br>

    Service providers may offer informal recommendations for professional firms that can assist NRIs/OCIs in this matter. Investors are
    encouraged to independently contact and engage these professional firms for their expertise     
     </p>
         </div>
    </div>
</div><br><br>


      <div class="row">
                        <div class="section-heading mb-20 text-center" id="securities">
                    <h2 class="main-heading"><strong>Securities Related</strong></h2>
              </div>
              </div><br>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
            What is the definition of 'listed securities'  
      </a>
        </h4>
    </div>
    <div id="collapsethirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirteen">
        <div class="panel-body">
            <p>In India, listed securities encompass shares, debentures, or any tradable securities processed through an exchange.
    Listing signifies the acceptance of a company's securities for trading on a stock exchange.     
     </p>
         </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfourteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
            In what form are 'listed securities' typically held in India
      </a>
        </h4>
    </div>
    <div id="collapsefourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfourteen">
        <div class="panel-body">
            <p>From the standpoint of an NRI/PIO/OCI investor, securities are maintained in a dematerialized format within the investor's account,
    established and managed with a chosen Depository Participant. <br><br>
    This account can be held with either of the two depositories: <br>
    National Securities Depository Limited or Central Depository Services (India) Limited.      
     </p>
         </div>
    </div>
</div><br><br><br>



      <div class="row">
                        <div class="section-heading mb-20 text-center" id="investment-in-listed-securities">
                    <h2 class="main-heading"><strong>Investment in listed securities related</strong></h2>
              </div>
              </div><br>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingfifteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
            As an NRI or OCI, can I invest in listed securities'
      </a>
        </h4>
    </div>
    <div id="collapsefifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfifteen">
        <div class="panel-body">
            <p>Yes    
     </p>
         </div>
    </div>
</div><br<br>




<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingsixteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
            Are there any specific investment routes exclusively designed for NRIs and OCIs interested in investing in listed securities
            </a>
        </h4>
    </div>
    <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsixteen">
        <div class="panel-body">
            <p><strong>Yes. Broadly there are two investment routes available for NRIs and OCIs</strong></p><br>
            <p><strong>PIS:</strong>
                NRIs and PIOs have the opportunity to engage in India's primary and secondary capital markets via the Portfolio Investment Scheme (PIS), regulated by the Reserve Bank of India. Through this scheme, NRIs can purchase and trade shares/debentures of Indian companies on Indian stock exchanges. Specific conditions govern repatriation/non-repatriation and the percentage of investment in the listed company's paid-up share capital. Banks providing PIS as a service might levy charges that can vary among different banks.
            </p><br>
            <p><strong>PMS:</strong>
                Many brokerage firms, investment advisory firms, wealth management firms, and SEBI-registered banks provide Portfolio Management Schemes (PMS) as a product, acting as Portfolio Managers. This offering is tailored for investors seeking exposure to the Indian equity market but lack either the time or expertise to handle their portfolios. PMS comes in two variations and caters to this investor class.
            </p><br>
            <p><strong>Discretionary PMS:</strong>
                Under this category, the Portfolio Manager autonomously handles investors' funds in alignment with their specified investment objectives.
            </p><br>

            <p><strong>Non-discretionary PMS:</strong>
                In this category, the Portfolio Manager exclusively oversees the portfolio based on the investor's instructions and guidance.
            </p><br>

            <p>
                SEBI-regulated Portfolio Managers may offer various schemes or products tailored to suit potential investors' specific investment strategies, objectives, risk profiles, and more.
            </p><br>

            <p>
                The Portfolio Manager will levy charges on the investor, which may include:
                <ul>
                    <li>a) Computed as a percentage of the portfolio's value or average value over an agreed billing period.</li>
                    <li>b) Determined as a percentage of profits or a fixed amount based on the excess return achieved beyond the specified benchmark return.</li>
                </ul>
            </p><br>

        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingseventeen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseventeen" aria-expanded="false" aria-controls="collapseseventeen">
            Can you confirm if the listed securities purchased through these outlined investment routes will be registered under my name as the investor
      </a>
        </h4>
    </div>
    <div id="collapseseventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseventeen">
        <div class="panel-body">
            <p>Yes.It is mandatory for all Bank, Demat, Trading, and Portfolio Accounts to be established in the name of the Investor.
    Therefore all securities procured through PMS or PIS Schemes will be maintained and traded in an account linked to the investor
    which will be identified by a unique number. 
     </p>
         </div>
    </div>
</div><br<br>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingeighteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeighteen" aria-expanded="false" aria-controls="collapseeighteen">
            Can I freely sell/trade shares as a NRI or OCI      </a>
        </h4>
    </div>
    <div id="collapseeighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeighteen">
        <div class="panel-body">
            <p>Yes.
     </p>
         </div>
    </div>
</div><br<br><br>



      <div class="row">
                        <div class="section-heading mb-20 text-center" id="service-providers">
                    <h2 class="main-heading"><strong>Service Providers related</strong></h2>
              </div>
              </div><br>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingnineteen">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenineteen" aria-expanded="false" aria-controls="collapsenineteen">
            Which Service Providers should NRIs/OCIs consider engaging professionally before initiating any investments in India
      </a>
        </h4>
    </div>
    <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnineteen">
        <div class="panel-body">
            <p>Depending on the residential status and investment route, Investor will be required to appoint any/all of the following Service
    Providers who are regulated by SEBI and/or RBI <br><br>


    . Bank <br>
    . Bank - Custodian <br>
    . Non-bank - Custodian <br>
    . Depository Participant <br>
    . Broker - Trading Member of Stock Exchange <br>
    . Portfolio Manager <br><br>
    The investor holds sole responsibility for selecting a service provider. It is important to note that service providers may collaborate
    with other Service Providers, disclosing preferred names of such Service Providers while offering their products. <br><br>
    
    Every Service Provider may levy charges on the investor for the services or products they provide.
     </p>
         </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwenty">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwenty" aria-expanded="false" aria-controls="collapsetwenty">
            Could you expand on the pivotal responsibilities of each Service Provider mentioned in the earlier question
            </a>
        </h4>
    </div>
    <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwenty">
        <div class="panel-body">
            <p>Outlined below are the key roles of each Service Provider: <br><br>

            <u> Bank:</u> Open and maintain the Bank Accounts for NRE/PIO/OCI and monitor permissible credits and debits depending upon the nature and objective of the account opened. Banks are regulated by the Reserve Bank of India.<br><br>

            <u> Bank - Custodian / Non-bank - Custodian:</u> A Custodian of Securities, whether a Bank or a non-Bank entity, refers to a Service Provider registered under the Securities and Exchange Board of India (Custodian) Regulations, 1996, specializing in custodial services. These entities generally establish and manage Custody/Safekeeping Accounts for investors, reflecting the securities acquired/traded by the investor. Additionally, they provide supplementary services such as tailored reports.<br><br>

            <u> Depository Participants:</u> A DP is an agent of the two Depositories in India, namely NSDL and CDSL. DPs, governed by SEBI, act as intermediaries between a depository and an investor, facilitating the trading, transfer of ownership, and settlement process. DPs open and maintain Demat Accounts in the name of investors.<br><br>

      <u> Broker:</u> All brokers are members of the Stock Exchange and operate under specific SEBI regulations. Exchanges provide four categories of memberships:
            <ul>
                <li>a) Trading Members:Conduct trades both for their own accounts and on behalf of their clients. However, the clearing and settlement of these trades are managed through either a Trading-cum-Clearing Member or a Professional Clearing Member.</li><br>
                <li>b) Trading cum Self Clearing Member: Executes and manages the clearance and settlement of trades conducted both for their own account and on behalf of their clients.</li><br>
                <li>c) Trading cum Clearing Members: Executes trades for their own accounts and their clients' accounts. Additionally, they handle the clearance and settlement of trades conducted by themselves and other trading members who opt for their clearing services.</li><br>
                <li>d) Professional Clearing Members: Such as Custodians, facilitate the clearance and settlement of trades for Exchange members who opt to use their services for this purpose.</li><br>
            </ul><br>

            <u> Portfolio Manager:</u> A portfolio manager, as a corporate entity, assumes the duty of managing or administering a collection of securities or a client's funds. These managers are registered and governed by distinct SEBI Regulations.<br><br>

             Service providers, if eligible under applicable regulations, Service Providers may offer some or all of the services mentioned above to investors as a composite product and/or service.<br><br>
            </p>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentyone">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentyone" aria-expanded="false" aria-controls="collapsetwentyone">
            What are the primary phases an investor undergoes when engaging or appointing a Service Provider for services
            </a>
        </h4>
    </div>
    <div id="collapsetwentyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyone">
        <div class="panel-body">

            <u>From Service Providers' perspective:</u><br>

            The investor will go through the subsequent phases with each of the Service Providers:<br><br>
            <ul>
                <li>KYC Procedures</li>
                <li>On-boarding</li>
                <li>In-person Verification ('IPV')**</li>
                <li>Account Opening</li><br>
            </ul>
            During these stages, the investor will need to furnish documents, information, and undergo in-person verification via physical or electronic methods as mandated by SEBI and/or RBI. Although the procedures and documentation/information requirements will be similar among Service Providers, each Provider may have additional documentation/information prerequisites that must be complied with.<br><br>

            **In-person verification (IPV) is a mandatory process for all intermediaries (i.e. Brokers, Custodians, Portfolio Managers) to establish the individual's identity. Only the IPV performed by a SEBI-approved intermediary will be taken into consideration. Some Service Providers may stipulate certain Investors domiciled in certain jurisdictions (e.g. US-based NRI) to be physically present in India for execution of documentation.<br><br>

            From Investor's perspective:<br><br>

            <ul>
                <li>Chooses the investor status/investor eligibility - i.e. NRE, NRO, OCI, FPI etc.</li>
                <li>Chooses the investment route viz. PIS and/or PMS</li>
                <li>Chooses the Service Provider(s)</li>
                <li>Chooses the Scheme/Product(s) offered by the Service Provider</li>
                <li>Subjects to KYC and account opening documentation of the Service Provider</li>
            </ul>
            </p>
        </div>
    </div>
</div>




<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentytwo">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentytwo" aria-expanded="false" aria-controls="collapsetwentytwo">
            Prior to commencement of investment as NRI or OCI, do I have to register myself as an investor with any Regulatory or Supervisory Authority in India
    </a>
        </h4>
    </div>
    <div id="collapsetwentytwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentytwo">
        <div class="panel-body">
            <p>No.
     </p>
         </div>
    </div>
</div><br<br><br>



      <div class="row">
                        <div class="section-heading mb-20 text-center" id="investment-routes">
                    <h2 class="main-heading"><strong>Investment routes related</strong></h2>
              </div>
              </div><br>




<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentythree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentythree" aria-expanded="false" aria-controls="collapsetwentythree">
                What are the investment routes available to NRI's who maintains NRO accounts in India 
            </a>
        </h4>
    </div>
    <div id="collapsetwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentythree">
        <div class="panel-body">
            <p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Investor</th>
                            <th>Investment Route / Scheme</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Resident</td>
                            <td>Equity Trading</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>F&O Trading</td>
                            <td>Futures and Options</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>PMS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Non-resident (Ordinary)</td>
                            <td>Equity Trading</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>F&O Trading</td>
                            <td>Futures and Options</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>PMS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Non-resident Indian</td>
                            <td>NRE PIS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Non-Resident Indian</td>
                            <td>NRE PMS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Natural Person</td>
                            <td>FPI PMS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Legal entity</td>
                            <td>FPI PMS</td>
                            <td>Listed Securities</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Natural Person</td>
                            <td>FPI PIS</td>
                            <td>Listed Securities + Futures & Options</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Legal entity</td>
                            <td>FPI PIS</td>
                            <td>Listed Securities + Futures & Options</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Natural Person</td>
                            <td>FPI PMS</td>
                            <td>Listed Securities + Futures & Options</td>
                        </tr>
                        <tr>
                            <td>Foreign National - Legal entity</td>
                            <td>FPI PMS</td>
                            <td>Listed Securities + Futures & Options</td>
                        </tr>
                    </tbody>
                </table>
            </p>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentyfour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentyfour" aria-expanded="false" aria-controls="collapsetwentyfour">
          Before initiating investments as an NRI or OCI through any of the mentioned routes, is it necessary for the investor to enroll or register with any Regulatory or Supervisory Authority in India
    </a>
        </h4>
    </div>
    <div id="collapsetwentyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyfour">
        <div class="panel-body">
            <p> No, unless a foreign national (not categorized as an NRI or OCI) intends to invest specifically as a Foreign Portfolio Investor
     </p>
         </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentyfive">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentyfive" aria-expanded="false" aria-controls="collapsetwentyfive">
          Before initiating investments as a Foreign National or as a legal entity established under overseas laws through any of the mentioned routes, is it mandatory for the investor to register with any Regulatory or Supervisory Authority in India    </a>
        </h4>
    </div>
    <div id="collapsetwentyfive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyfive">
        <div class="panel-body">
            <p> No, unless a foreign national (not categorized as an NRI or OCI) intends to invest specifically as a Foreign Portfolio Investor.
     </p>
         </div>
    </div>
</div><br><br><br>

      <div class="row">
                        <div class="section-heading mb-20 text-center" id="investment-routes-account-opened">
                    <h2 class="main-heading"><strong>Investment routes - Accounts to be opened / maintained related </strong></h2>
              </div>
              </div><br>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentysix">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentysix" aria-expanded="false" aria-controls="collapsetwentysix">
            Could you detail the accounts mandated for opening in correspondence with each investment route and its associated Service Provider
        </a>
        </h4>
    </div>
    <div id="collapsetwentysix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentysix">
        <div class="panel-body">
            <p> 

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Investor</th>
            <th>Investment Route / Scheme</th>
            <th>Investment</th>
            <th>Choice (where to open accounts) typically influenced by</th>
            <th>Broker</th>
            <th>Custodian</th>
            <th>Bank</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Resident</td>
            <td>Equity Trading</td>
            <td>Listed Securities</td>
            <td>Broker</td>
            <td>Trading and Demat Account</td>
            <td></td>
            <td>Bank Account OR 3 in 1 (Bank, Trading, and Demat) Accounts where such service is offered</td>
        </tr>
        <tr>
            <td></td>
            <td>F&O Trading</td>
            <td>Futures and Options</td>
            <td>Broker</td>
            <td>Trading Account</td>
            <td></td>
            <td>Bank Account OR 3 in 1 (Bank, Trading, and Demat) Accounts where such service is offered</td>
        </tr>
        <tr>
            <td></td>
            <td>PMS</td>
            <td>Listed Securities</td>
            <td>SEBI registered Portfolio Manager or Broker who is SEBI registered Portfolio Manager</td>
            <td>Trading and Demat Account</td>
            <td></td>
            <td>Bank Account</td>
        </tr>
        <tr>
            <td>Non-resident (Ordinary)</td>
            <td>Equity Trading</td>
            <td>Listed Securities</td>
            <td>Broker</td>
            <td>Trading and Demat Account</td>
            <td></td>
            <td>Bank Account OR 3 in 1 (Bank, Trading, and Demat) Accounts where such service is offered</td>
        </tr>
        <tr>
            <td></td>
            <td>F&O Trading</td>
            <td>Futures and Options</td>
            <td>Broker</td>
            <td>Trading Account</td>
            <td></td>
            <td>Bank Account OR 3 in 1 (Bank, Trading, and Demat) Accounts where such service is offered</td>
        </tr>
        <tr>
            <td></td>
            <td>PMS</td>
            <td>Listed Securities</td>
            <td>SEBI registered Portfolio Manager or Broker who is SEBI registered Portfolio Manager</td>
            <td>Trading and Demat Account</td>
            <td></td>
            <td>Bank Account</td>
        </tr>

    <tr>
            <td>Non-resident Indian</td>
            <td>NRE PIS</td>
            <td>Listed Securities</td>
            <td>Investor</td>
            <td>Trading and Demat Account</td>
            <td>Not required, but preferred by Broker</td>
            <td>1. Designated NRE Account to record entries relating to secondary Purchase and Sale<br>
                2. NRE Account for all other entries<br>
                3. Demat Account if Bank is also a Depository Participant</td>
            </tr>
        <tr>
            <td>Non-resident Indian</td>
            <td>NRE PMS</td>
            <td>Listed Securities</td>
            <td>SEBI registered Portfolio Manager or Broker who is SEBI registered Portfolio Manager</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 Bank Account</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Natural Person</td>
            <td>FPI PMS</td>
            <td>Listed Securities</td>
            <td>SEBI registered Portfolio Manager or Broker who is SEBI registered Portfolio Manager</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 Bank Account</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Legal entity</td>
            <td>FPI PMS</td>
            <td>Listed Securities</td>
            <td>SEBI registered Portfolio Manager or Broker who is SEBI registered Portfolio Manager</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 Bank Account</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Natural Person</td>
            <td>FPI PIS</td>
            <td>Listed Securities + Futures & Options</td>
            <td>Investor</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 INR Bank Account + 1 FCY Bank Account (which is optional)</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Legal entity</td>
            <td>FPI PIS</td>
            <td>Listed Securities + Futures & Options</td>
            <td>Investor</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 INR Bank Account + 1 FCY Bank Account (which is optional)</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Natural Person</td>
            <td>FPI PMS</td>
            <td>Listed Securities + Futures & Options</td>
            <td>Investor</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 INR Bank Account</td>
            <td></td>
        </tr>
        <tr>
            <td>Foreign National - Legal entity</td>
            <td>FPI PMS</td>
            <td>Listed Securities + Futures & Options</td>
            <td>Investor</td>
            <td>Trading Account</td>
            <td>Custody / Safekeeping Account + Demat Account</td>
            <td>1 INR Bank Account</td>
            <td></td>
        </tr>
    </tbody>
</table>
     </p>
         </div>
    </div>
</div><br><br>


      <div class="row">
                        <div class="section-heading mb-20 text-center" id="portfolio-management-scheme">
                    <h2 class="main-heading"><strong>Portfolio Management Scheme ('PMS') - NRI (NRE and NRO accounts) / OCI </strong></h2>
              </div>
              </div><br>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentyseven">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentyseven" aria-expanded="false" aria-controls="collapsetwentyseven">
            Is appointment of Custodian a mandatory requirement for investment through PMS
          </a>
        </h4>
    </div>
    <div id="collapsetwentyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyseven">
        <div class="panel-body">
            <p>Yes.    </p>
         </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentyeight">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentyeight" aria-expanded="false" aria-controls="collapsetwentyeight">
            Under whose name should the PMS Account be established and maintained
          </a>
        </h4>
    </div>
    <div id="collapsetwentyeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentyeight">
        <div class="panel-body">
            <p>All accounts will be opened in the name of the Primary Account holder within the Bank Account. Additionally, joint accounts
    (limited to a maximum of three holders) can be opened to replicate the Bank Account's account holders.
     </p>
         </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingtwentynine">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwentynine" aria-expanded="false" aria-controls="collapsetwentynine">
            Is it possible to associate the PMS Account with an NRO Account
          </a>
        </h4>
    </div>
    <div id="collapsetwentynine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwentynine">
        <div class="panel-body">
            <p>Yes.The Portfolio Manager might consent to the utilization of an NRO account held at any bank selected by the investor.
    Yet, the investor must ensure funding of the Portfolio Manager's 'designated Pool Account' whenever the need arises.
     </p>
         </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirty">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirty" aria-expanded="false" aria-controls="collapsethirty">
            Can Investor appoint multiple Portfolio Managers / multiple schemes of the same Portfolio Manager
          </a>
        </h4>
    </div>
    <div id="collapsethirty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirty">
        <div class="panel-body">
            <p>Yes. In this scenario, the Portfolio Manager may consent to linking with an NRO account held at an Investor's chosen bank. Yet, the
    Investor must fund the Portfolio Manager's 'designated Pool Account' whenever necessary.<br>
    The following conditions apply.  <br>

    1. A single unique NRE PIS Bank Account will be maintained.<br><br>
    The bank's internal system generates sub/virtual accounts to manage entries associated with the Portfolio Scheme at the Portfolio
    Manager level. <br><br>
    2. Virtual Account statements / transaction details are shared with appropriate Portfolio Manager<br><br>
    3. Sum total of opening and closing balances of all virtual account which reconcile with opening and closing balance at the Account level<br><br>
    Note: Should an investor with an NRE Bank PIS Account at a bank without existing business arrangements with the Portfolio
    Manager seek their services, the investor may need to transfer this account to a bank where the Portfolio Manager operates, subject to
    approval from other Portfolio Managers. If this resolution isn't viable, the current Portfolio Manager might ask the investor to close the
    account, or the new Portfolio Manager might be unable to offer the PMS Product for various reasons.
  
</p>
         </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtyone">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtyone" aria-expanded="false" aria-controls="collapsethirtyone">
            Are there special requirements to opening/maintenance of Bank Account linked to PMS account
          </a>
        </h4>
    </div>
    <div id="collapsethirtyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtyone">
        <div class="panel-body">
            <p>When investing in a Portfolio Management Scheme (PMS), linking your Non-Resident External (NRE) PIS Bank Account becomes.<br>
    The following options are available to the investor:   <br><br>

    1. Convert an existing NRE-non PIS Bank Account to an NRE PIS Bank Account, granted that the current NRE-non PIS Bank Account
    is maintained with a Bank partnered with the Portfolio Manager. If there's no arrangement, the Investor must open a new NRE-PIS
    Bank Account with a Bank associated with the Portfolio Manager.. <br><br>

    2. Opens a new NRE PIS Bank Account with the Bank partnered with the Portfolio Manager<br><br>
    3. Opens a new NRE PIS Bank Account with the Bank partnered with the Portfolio Manager and transfers (or can transfer) funds from old NRE
      PIS Bank Account, subject to the conditions that<br>
    a) Investor provides documentary evidence that old NRE PIS Bank Account has been closed and
    b) Trading will be permitted only on fulfillment of the condition 'a' <br><br>
    Note: As the appointment of a Custodian is a mandatory prerequisite, although the account opening documents are signed by the account
    holder, the account's operations rely on the Power of Attorney granted by the account holder to the Custodian.  
</p>
         </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtytwo">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtytwo" aria-expanded="false" aria-controls="collapsethirtytwo">
            Are there specific requirements concerning balances within the Bank Account associated with the PMS account
          </a>
        </h4>
    </div>
    <div id="collapsethirtytwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtytwo">
        <div class="panel-body">
            <p>Yes. The investor has the following options.<br><br>
  
    1. The investor can repatriate the balance held in existing NRE PIS Bank Account to his/her overseas Bank account, subject to payment of
      taxes if any and completion of formalities prior to closing of this Bank Account
      . <br><br>

    2. The investor can transfer the balance held in existing NRE PIS Bank Account to the new NRE PIS Bank Account prior to closing of this Bank Account<br><br>

    The new NRE PIS Bank Account may receive funds through inward remittance and/or balance transfer from an existing NRE PIS Bank Account.</p>
         </div>
    </div>
</div>



<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtythree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtythree" aria-expanded="false" aria-controls="collapsethirtythree">
            Can investor transfer shares be held under PIS to PMS?          </a>
        </h4>
    </div>
    <div id="collapsethirtythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtythree">
        <div class="panel-body">
            <p>Yes, it's possible, but with conditions: <br><br>
  
    <u> Portfolio Manager's Approval:</u> The first step is to check if the Portfolio Manager allows such transfers under the specific PMS product you're
    considering. Not all PMS schemes accommodate this option. <br>
    <u> Detailed Disclosure:</u> If the transfer is permitted, you'll need to provide comprehensive information about each share you intend to transfer.
      </p>
         </div>
    </div>
</div><br><br>


      <div class="row">
                        <div class="section-heading mb-20 text-center" id="portfolio-investment-scheme">
                    <h2 class="main-heading"><strong>Portfolio Investment Scheme ('PIS') - NRIs who maintain NRE Accounts only </strong></h2>
              </div>
              </div><br>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtyfour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtyfour" aria-expanded="false" aria-controls="collapsethirtyfour">
            Is it obligatory to appoint a Custodian for investing through PMS
          </a>
        </h4>
    </div>
    <div id="collapsethirtyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtyfour">
        <div class="panel-body">
            <p>No, while not mandatory, certain Brokers might encourage investors to appoint a Custodian </p>     
    </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtyfive">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtyfive" aria-expanded="false" aria-controls="collapsethirtyfive">
            Under whose name should the PMS Account be established and maintained
          </a>
        </h4>
    </div>
    <div id="collapsethirtyfive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtyfive">
        <div class="panel-body">
            <p>The NRE PIS accounts will be established in the name of the Primary Account holder within the Bank Account. However, the trading and demat accounts must be compulsorily opened with the Broker.
    </p>     
    </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtysix">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtysix" aria-expanded="false" aria-controls="collapsethirtysix">
            Under what circumstances would the usage of the virtual Bank accounts, as stated in the PMS section, be relevant or applicable?         </a>
        </h4>
    </div>
    <div id="collapsethirtysix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtysix">
        <div class="panel-body">
            <p>The virtual accounts will be opened by the Bank if the NRI who has investment through PMS also wishes to invest through PIS
    </p>     
    </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtyseven">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtyseven" aria-expanded="false" aria-controls="collapsethirtyseven">
            Are there specific Banks where brokers prefer to have business arrangements for the opening and maintenance of NRE PIS accounts
        </a>
        </h4>
    </div>
    <div id="collapsethirtyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtyseven">
        <div class="panel-body">
            <p>Yes. <br><br>
    Brokers reserve the right to decline onboarding and may request the investor to transfer the PIS account to their preferred Bank. These
    arrangements encompass the exchange of trade data, client opening and closing balances. The process outlined in the PMS section
    regarding opening new PIS accounts, closure/conversion of existing accounts, and transferring/repatriating balances will be applicable. <br><br>
    It's important to note that if an investor currently investing through PIS intends to invest via PMS, the list of Banks where the Portfolio
    Manager may have arrangements might differ or be limited.
      </p>     
    </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingthirtyeight">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirtyeight" aria-expanded="false" aria-controls="collapsethirtyeight">
            Are there additional conditions or features concerning the Bank Account that should be taken into account when investing through PIS        </a>
        </h4>
    </div>
    <div id="collapsethirtyeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirtyeight">
        <div class="panel-body">
            <p>Yes. <br><br>
    The specified NRE PIS accounts are exclusively used for managing debits and credits pertaining to secondary trades executed by the investor.
    All additional credits (such as dividends, interest, and other permitted credits) and debits (rights, IPO/FPO subscriptions, and other permitted
    debits) must be conducted through the NRE account held with the Investor's chosen Bank. The Broker is not involved nor does it hold influence
    over the investor in this regard.
      </p>     
    </div>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
    </section>

</div>
       
@endsection