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
  <section id="services" class="services">
        <div class="container">
          <div class="section-heading mb-40 text-center">
            <div class="sub-heading">FAQ's</div>
            <!-- <div class="bar m-auto"></div> -->
          </div>
          
          <div class="tablike-sec text-center">
              <div class="rv-1-about__pills">
                <a href="#corporate" class="rv-1-about__pill scroll"><div class=""></div>Corporate Information</a>
                <a href="#business" class="rv-1-about__pill scroll"><div class=""></div>Business Model</a>
                <a href="#role" class="rv-1-about__pill scroll"><div class=""></div>Role and Responsibilities</a>
                <a href="#product" class="rv-1-about__pill scroll"><div class=""></div>Products and Solutions</a>
                <a href="#charge" class="rv-1-about__pill scroll"><div class=""></div>Charges and Fees</a>

                

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
              <div class="section-heading mb-20 text-center" id="corporate">
                <h2 class="main-heading"><strong>Corporate Information</strong></h2>
                <br>
              </div>
            </div>
            <div class="col-md-12">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <!-- Q1 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFacilon">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseFacilon" aria-expanded="true" aria-controls="collapseFacilon">
          What is Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseFacilon" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFacilon">
      <div class="panel-body">
        Facilon Services Private Limited (“Facilon”), is a private limited company incorporated under Indian laws (Companies Act, 2013) in June 2023 and is promoted by Mr. Suneet Luthra and Mr. Jaydeep Jayakar.
      </div>
    </div>
  </div>

  <!-- Q2 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingBranch">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseBranch" aria-expanded="false" aria-controls="collapseBranch">
          Does Facilon have any branch/liaison offices or suitable corporate structure in India or overseas?
        </a>
      </h4>
    </div>
    <div id="collapseBranch" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBranch">
      <div class="panel-body">
        No. But as the business expands or demands, Facilon may consider this requirement.
      </div>
    </div>
  </div>

  <!-- Q3 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingMeaning">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseMeaning" aria-expanded="false" aria-controls="collapseMeaning">
          What is the literal meaning of the word “Facilon”?
        </a>
      </h4>
    </div>
    <div id="collapseMeaning" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMeaning">
      <div class="panel-body">
        Facilon can be considered as a “mnemonic” which is derived from the two words viz “Facilitating” and “On-boarding” which are part of Facilon’s Logo.
      </div>
    </div>
  </div>

  <!-- Q4 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSocial">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseSocial" aria-expanded="false" aria-controls="collapseSocial">
          Is Facilon on business / social media sites too?
        </a>
      </h4>
    </div>
    <div id="collapseSocial" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSocial">
      <div class="panel-body">
        Yes. Facilon is registered on LinkedIn, Instagram and Facebook with a view to augment its visibility and aid marketing efforts including digital marketing.
      </div>
    </div>
  </div>

  <!-- Q5 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingStartup">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseStartup" aria-expanded="false" aria-controls="collapseStartup">
          Is Facilon a Start-up?
        </a>
      </h4>
    </div>
    <div id="collapseStartup" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingStartup">
      <div class="panel-body">
        Yes. Facilon is recognised as a Startup by Department for Promotion of Industry and Internal Trade, Government of India.
      </div>
    </div>
  </div>

  <!-- Q6 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingMSME">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseMSME" aria-expanded="false" aria-controls="collapseMSME">
          Is Facilon also a Micro, Small & Medium Enterprises (“MSME”)?
        </a>
      </h4>
    </div>
    <div id="collapseMSME" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMSME">
      <div class="panel-body">
        Yes. Facilon is registered as a Micro enterprise with Ministry of Micro, Small and Medium Enterprises.
      </div>
    </div>
  </div>

  <!-- Q7 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingLogo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseLogo" aria-expanded="false" aria-controls="collapseLogo">
          Is Facilon logo registered with any Authority?
        </a>
      </h4>
    </div>
    <div id="collapseLogo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLogo">
      <div class="panel-body">
        Yes. The Facilon’s logo and the word “FACILON” are registered with Trade Mark Registry of Government of India under Class 35 (Goods and services) and Class 36 (services rendered in financial and monetary affairs and services rendered in relation to insurance contracts of all kinds) in September 2023, as trademark and wordmark respectively.
      </div>
    </div>
  </div>

  <!-- Q8 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingGST">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseGST" aria-expanded="false" aria-controls="collapseGST">
          Is Facilon registered under Goods and Services (‘GST’) Laws?
        </a>
      </h4>
    </div>
    <div id="collapseGST" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGST">
      <div class="panel-body">
        Yes. Facilon’s GST Registration Number is 27AAFCF5175M1Z5.
      </div>
    </div>
  </div>

  <!-- Q9 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOffice">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseOffice" aria-expanded="false" aria-controls="collapseOffice">
          Where is the registered office of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseOffice" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOffice">
      <div class="panel-body">
        Registered Office of Facilon is in Mumbai at A-102, Golden Square CHS, Kalina, Santacruz (E), Vidyanagari, Mumbai 400098, Maharashtra, India.
      </div>
    </div>
  </div>

  <!-- Q10 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingCIN">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapseCIN" aria-expanded="false" aria-controls="collapseCIN">
          What is Company Identification Number (“CIN”) of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseCIN" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCIN">
      <div class="panel-body">
        Facilon’s CIN is U82990MH2023PTC405216.
      </div>
    </div>
  </div>

  <!-- Q11 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingPAN">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilon" href="#collapsePAN" aria-expanded="false" aria-controls="collapsePAN">
          What is Permanent Account Number (“PAN”) of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapsePAN" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPAN">
      <div class="panel-body">
        Facilon’s PAN is AAFCF5175M.
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="section-heading mb-20 text-center" id="business">
    <h2 class="main-heading" style="margin-top: 13px;"><strong>Business Model</strong></h2>
    
  </div>
</div>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel-group" id="accordionBusiness" role="tablist" aria-multiselectable="true">

  <!-- Q1 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingBizObjective">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseBizObjective" aria-expanded="true" aria-controls="collapseBizObjective">
          What is the Business Objective of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseBizObjective" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingBizObjective">
      <div class="panel-body">
        Facilon intends to create a market place to facilitate SPs and SRs. The Company will use Microsoft Power Apps platform (a Portal as well as an App), which is a cloud based SaaS solution where the accessibility guidelines and controls are managed by Microsoft (Microsoft Dynamics 365 CE/ Power Apps duly supported by APIs where applicable and required) for the flow of data and information including data security.
      </div>
    </div>
  </div>

  <!-- Q2 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingBizModel">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseBizModel" aria-expanded="false" aria-controls="collapseBizModel">
          What then is the Business Model of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseBizModel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingBizModel">
      <div class="panel-body">
        The main business activity of Facilon is to act as a bridge or facilitator for movement of data and information to those parties who are in the business of holding or trading in securities, through an electronic medium/facility.<br><br>
        The business of Facilon is to electronically facilitate the flow of information (in the form of data, documents, comments, observations etc) between onshore (Indian) parties such as custodians, designated depository participants (DDPs), depository participants, brokers, banks, portfolio managers, investment funds and identified tax consultant on one side (“Service Provider”/ “SP”) and offshore (foreign parties) such as investors (institutions, body corporate or individuals such as NRIs, OCIs or foreign resident individuals), investment advisors and professional firms (who can source investors on other side) (“Service Recipient”/“SR”).
      </div>
    </div>
  </div>

  <!-- Q3 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingModelType">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseModelType" aria-expanded="false" aria-controls="collapseModelType">
          Is your Business Model B2B and B2C?
        </a>
      </h4>
    </div>
    <div id="collapseModelType" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingModelType">
      <div class="panel-body">
        Yes. It can be summarized as follows:<br><br>
        <strong style="margin-left: 23px;">1. B2B:</strong> Targeting Brokers, Portfolio Managers, Banks.<br>
        <strong style="margin-left: 23px;">2. B2C:</strong> Targeting Investors.<br>
        <strong style="margin-left: 23px;">3. B2B2C:</strong> Targeting External Investment Managers.
      </div>
    </div>
  </div>

  <!-- Q4 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingIndustry">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseIndustry" aria-expanded="false" aria-controls="collapseIndustry">
          Which Industry/Sector Facilon operates?
        </a>
      </h4>
    </div>
    <div id="collapseIndustry" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIndustry">
      <div class="panel-body">
        Facilon operates in Financial / Investment / Banking Sectors.
      </div>
    </div>
  </div>

  <!-- Q5 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingAdvisor">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseAdvisor" aria-expanded="false" aria-controls="collapseAdvisor">
          Can Facilon be considered as Financial Adviser or a Financial/Investment/Insurance Product distributor?
        </a>
      </h4>
    </div>
    <div id="collapseAdvisor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAdvisor">
      <div class="panel-body">
        No. Facilon is a facilitator.<br><br>
        It is a market place where the documents and information flow is intended to achieve the certain key objectives to Service Recipients and Service Providers.
      </div>
    </div>
  </div>

  <!-- Q6 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEmployees">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseEmployees" aria-expanded="false" aria-controls="collapseEmployees">
          Are there any employees of Facilon?
        </a>
      </h4>
    </div>
    <div id="collapseEmployees" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEmployees">
      <div class="panel-body">
        Yes. Presently there are 3 Employees of the Company. The day to day affairs including business/financial strategy is responsibility of the Board of Directors who are also employees of the Company.<br><br>
        Going forward, as the business expands Facilon will recruit more personnel as per business requirements.
      </div>
    </div>
  </div>

  <!-- Q7 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingStructure">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseStructure" aria-expanded="false" aria-controls="collapseStructure">
          As a Start-up, can you describe Facilon’s organisation structure in brief?
        </a>
      </h4>
    </div>
    <div id="collapseStructure" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingStructure">
      <div class="panel-body">
        Facilon has engaged a range of professionals including legal and professional firms having the requisite experience and expertise in business segment which Company will operate. The profile of the team is available on Facilon’s website <a href="https://www.facilonservices.com" target="_blank">www.facilonservices.com</a> as well as on <a href="https://www.linkedin.com" target="_blank">www.linkedin.com.</a>
      </div>
    </div>
  </div>

  <!-- Q8 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSEBI">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseSEBI" aria-expanded="false" aria-controls="collapseSEBI">
          Are you registered under any SEBI and/or RBI Regulations?
        </a>
      </h4>
    </div>
    <div id="collapseSEBI" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSEBI">
      <div class="panel-body">
        No. As per legal opinions obtained, given the business objectives, Facilon is not required to register under any Regulation of SEBI and/or RBI.
      </div>
    </div>
  </div>

  <!-- Q9 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingMission">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseMission" aria-expanded="false" aria-controls="collapseMission">
          Does Facilon have any ‘Mission’ Statement?
        </a>
      </h4>
    </div>
    <div id="collapseMission" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMission">
      <div class="panel-body">
        Yes. Facilon’s Mission is to provide innovative, efficient and secure solutions to investors and their advisors, seeking services from Brokers, Custodians, Banks, Investment Funds and related providers.
      </div>
    </div>
  </div>

  <!-- Q10 -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingVision">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionBusiness" href="#collapseVision" aria-expanded="false" aria-controls="collapseVision">
          Does Facilon have any ‘Vision’ Statement?
        </a>
      </h4>
    </div>
    <div id="collapseVision" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingVision">
      <div class="panel-body">
        Yes. Our vision is to facilitate efficient onboarding of investors with service providers and digitally enable their interactions with a selection of brokers, custodians, banks, asset managers, and associated service providers.
      </div>
    </div>
  </div>

</div>

                </div>
                
                
                <div class="row">
  <div class="section-heading mb-20 text-center" id="role">
    <h2 class="main-heading" style="
    margin-top: 13px;
"><strong>Role and Responsibilities</strong></h2>
  </div>
</div>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel-group" id="accordionFacilonSP" role="tablist" aria-multiselectable="true">

  <!-- Q1: Who is a Service Provider -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSP">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionFacilonSP" href="#collapseSP" aria-expanded="true" aria-controls="collapseSP">
          Who according to Facilon is a Service Provider?
        </a>
      </h4>
    </div>
    <div id="collapseSP" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSP">
      <div class="panel-body">
        Service Provider, registered with Facilon should be registered under SEBI Regulations and could be any and/or of the following:
        <br>
        <ol>
          <li style="margin-left: 25px;">Broker.</li>
          <li style="margin-left: 25px;">Portfolio Manager.</li>
          <li style="margin-left: 25px;">Custodian.</li>
          <li style="margin-left: 25px;">Bank.</li>
          <li style="margin-left: 25px;">Custodian Clearing Member for clearing Futures and Option Trades.</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Q2: Objectives from SP perspective -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSPObj">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonSP" href="#collapseSPObj" aria-expanded="false" aria-controls="collapseSPObj">
          What Objectives Facilon intends achieve from Service Provider’s (‘SP’) perspective?
        </a>
      </h4>
    </div>
    <div id="collapseSPObj" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPObj">
      <div class="panel-body">
        <ol>
          <li>It will provide SPs like a Broker, Custodian, Fund Manager etc. the ability to provide status and comments during the onboarding process to clients. This facility is in addition to the already existing service provider‘s internal systems for Know Your Client (KYC) and Onboarding system.</li>
          <li>It will permit SPs to maintain the client data, scanned copies of client documentation, information regarding account numbers and the timeline of the exchange of information even after the KYC process has been completed.</li>
          <li>It will empower SPs to maintain a live portal for ongoing status updates.</li>
          <li>It will automate auto-filling of document to be executed, using client-provided data streamlining the documentation process.</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Q3: Objectives from SR perspective -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSRObj">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonSP" href="#collapseSRObj" aria-expanded="false" aria-controls="collapseSRObj">
          What Objectives Facilon intends achieve from Service Recipient’s (‘SR’) or Investors perspective?
        </a>
      </h4>
    </div>
    <div id="collapseSRObj" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSRObj">
      <div class="panel-body">
        <ul>
          <li>It will enable SRs to invest securities as permitted by Indian laws by creating a gateway for seamless onboarding / account opening of SRs with SPs.</li>
          <li>SRs can take an informed decision while selecting the investment route applicable.</li>
          <li>SRs can conveniently update their information and documents on the portal for service provider review.</li>
          <li>SRs can trade on the SEBI recognized Exchanges for listed stocks and derivative instruments.</li>
          <li>SRs can participate in IPOs, FPOs, OFS and similar products.</li>
          <li>SRs can have access to brokers and their research on India.</li>
          <li>SRs can vote on the resolutions of the various companies that they are invested in.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Q4: Facilon's Role -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRole">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonSP" href="#collapseRole" aria-expanded="false" aria-controls="collapseRole">
          What exactly is Facilon’s role from SR and SP perspective?
        </a>
      </h4>
    </div>
    <div id="collapseRole" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRole">
      <div class="panel-body">
        Our role is that of a facilitator to assist investors in liaising/engaging with intermediaries like custodians, portfolio managers and brokers for all the three stages of pre-trading - KYC procedures, Regulatory Registration and On-boarding as well as acting as a conduit for post-trading activities.
      </div>
    </div>
  </div>

</div>

                </div>
                
                
                <div class="row">
  <div class="section-heading mb-20 text-center" id="product">
    <h2 class="main-heading" Products and Solutions
><strong>Products and Solutions</strong></h2>
  </div>
</div>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel-group" id="accordionFacilonProducts" role="tablist" aria-multiselectable="true">

  <!-- SP Products -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSPProducts">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseSPProducts" aria-expanded="true" aria-controls="collapseSPProducts">
          Can you list your products in brief? From Service Providers’ (‘SP’) perspective
        </a>
      </h4>
    </div>
    <div id="collapseSPProducts" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSPProducts">
      <div class="panel-body">
        Facilon presently offers two products/solutions viz:
        <br>
        <br>
        <ol>
          <li style="margin-left: 23px;"><strong>Facilon Onboard:</strong> Enables Service Providers and External Asset Managers / Investment Advisors to introduce / on-board new clients and/or existing clients.</li>
          <li style="margin-left: 23px;"><strong>Facilon Manage:</strong> Enables External Asset Managers / Investment Advisors to onboard their clients with Service Providers in India.</li>
        </ol>
    <br>
   
        <p>These products may evolve in due course depending on market/regulatory dynamics and practices. For more details, visit <a href="https://www.facilonservices.com" target="_blank">www.facilonservices.com</a>.</p>
      </div>
    </div>
  </div>

  <!-- Investor Products -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingInvestorProducts">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseInvestorProducts" aria-expanded="false" aria-controls="collapseInvestorProducts">
          Can you list your products in brief? From Investor perspective
        </a>
      </h4>
    </div>
    <div id="collapseInvestorProducts" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingInvestorProducts">
      <div class="panel-body">
        Facilon offers four products/solutions:
        <br><br>
        <h3>Pre-onboarding</h3>
        <ol>
          <li style="margin-left: 23px;"><strong>Facilon Appoint:</strong> Enables investors to compare, choose and appoint Service Providers who are registered with Facilon.</li>
          <li style="margin-left: 23px;"><strong>Facilon Status:</strong> Enables investor the ability to provide their information and documentation online and monitor the status of the onboarding process.</li>
        </ol>
        <br>
        <h3>Post-onboarding</h3>
        <ol start="3">
          <li style="margin-left: 23px;"><strong>Facilon Instruct:</strong> Enables investor to instruct service providers through Facilon’s secured communication channel.</li>
          <li style="margin-left: 23px;"><strong>Facilon Report:</strong> Enables investors to receive reports and advices from Service Providers appointed by them.</li>
        </ol>
        <br>
        <p>These products may evolve in due course depending on market/regulatory dynamics and practices. For more details, visit <a href="https://www.facilonservices.com" target="_blank">www.facilonservices.com</a>.</p>
      </div>
    </div>
  </div>

  <!-- Technical Architecture -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTechStructure">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseTechStructure" aria-expanded="false" aria-controls="collapseTechStructure">
          Can you tell us about technical solutions/structure to achieve Facilon’s business objective of offering these Products/Solutions?
        </a>
      </h4>
    </div>
    <div id="collapseTechStructure" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTechStructure">
      <div class="panel-body">
        The flow of information will be primarily through a Microsoft Power Apps platform (a Portal as well as an App), which is a cloud-based SaaS solution where the accessibility guidelines and controls are managed by Microsoft.
        <br><br>
        <ul>
          <li style="margin-left: 23px;">Facilon has a web-based Portal through Microsoft Dynamics 365 CE / Power Apps architecture.</li>
          <li style="margin-left: 23px;">This solution will be accessed by Service Providers (SPs).</li>
          <li style="margin-left: 23px;">A separate website-based solution will be available for Service Recipients (SRs).</li>
          <li style="margin-left: 23px;">These solutions will be connected through an API.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- SP Registration Precondition -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSPPrecondition">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseSPPrecondition" aria-expanded="false" aria-controls="collapseSPPrecondition">
          If we are Service Providers who wish to be associated with Facilon, what is the pre-condition(s)?
        </a>
      </h4>
    </div>
    <div id="collapseSPPrecondition" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPPrecondition">
      <div class="panel-body">
        Any Service Provider who wish to register with Facilon should be registered under applicable SEBI Regulation(s) either as Custodian, Broker, Portfolio Manager etc.
      </div>
    </div>
  </div>

  <!-- SP Registration Benefits -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSPBenefits">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseSPBenefits" aria-expanded="false" aria-controls="collapseSPBenefits">
          What are the advantages of registration by a Service Provider (‘SP’)?
        </a>
      </h4>
    </div>
    <div id="collapseSPBenefits" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSPBenefits">
      <div class="panel-body">
        <ol>
          <li>Access to secured and state-of-the-art web-based portal, which can be customised to suit SR’s requirement.</li>
          <li>Access to Facilon’s reach and resources to promote your brand, products and services.</li>
          <li>Pave way to thought leadership, content marketing and strategic partnerships and alliances.</li>
          <li>Can help increase SP’s product visibility and sales.</li>
          <li>Improvement of TAT for client onboarding and relationship management without compromising compliance and security:
            <ul>
              <li style="margin-left: 23px;">Monitor movement of data, documents, and supporting documentation.</li>
              <li style="margin-left: 23px;">Scrutinize documents submitted by Investor.</li>
              <li style="margin-left: 23px;">Electronically approve/reject/comment on documents.</li>
              <li style="margin-left: 23px;">Maintain full audit trail with time-stamp.</li>
              <li style="margin-left: 23px;">Built-in logical checks to ensure accuracy.</li>
            </ul>
          </li>
          <li>Facilon’s system architecture is flexible to adapt to any market, practice or regulation.</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Registration Process -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRegistrationSteps">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseRegistrationSteps" aria-expanded="false" aria-controls="collapseRegistrationSteps">
          Could you provide the brief steps for registration on Facilon Platform and its effect
        </a>
      </h4>
    </div>
    <div id="collapseRegistrationSteps" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRegistrationSteps">
      <div class="panel-body">
        <ol>
          <li>Visit <a href="https://www.facilonservices.com" target="_blank">www.facilonservices.com.</a></li>
          <li>Register as a Service Provider by providing basic details.</li>
          <li>Receive email verification link on the provided email.</li>
          <li>Facilon team shares legal agreement/documents including fee schedule.</li>
          <li>Upon receiving executed documents, Facilon provides electronic portal access.</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- Electronic Access -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingAccess">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionFacilonProducts" href="#collapseAccess" aria-expanded="false" aria-controls="collapseAccess">
          What does electronic access mentioned above, exactly provide
        </a>
      </h4>
    </div>
    <div id="collapseAccess" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAccess">
      <div class="panel-body">
        <ul>
          <li>Set up of Users and access level, defined by Service Providers.</li>
          <li>Upload Information Page to showcase your firm, products and services.</li>
          <li>Upload client onboarding/account opening checklist.</li>
          <li>Upload checklist for supporting documents.</li>
        </ul>
      </div>
    </div>
  </div>

</div>

                </div>
                
                
                <div class="row">
  <div class="section-heading mb-20 text-center" id="charge">
    <h2 class="main-heading" style="
    margin-top: 13px;
"><strong>Charges and Fees</strong></h2>
  </div>
</div>
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel-group" id="accordionCharges" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingCharges">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordionCharges" href="#collapseCharges" aria-expanded="true" aria-controls="collapseCharges">
          What are the charges for Facilon’s Products and Services?
        </a>
      </h4>
    </div>
    <div id="collapseCharges" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingCharges">
      <div class="panel-body">
        <p>Broadly, Facilon will charge Service Providers (<strong>‘SPs’</strong>) under these heads, depending on the product and/or solution or be-spoke solution(s) offered:</p>
        <ol>
          <li style="margin-left: 23px;">Listing Fee.</li>
          <li style="margin-left: 23px;">Set UP Fee.</li>
          <li style="margin-left: 23px;">Subscription Fee.</li>
          <li style="margin-left: 23px;">Per KYC Fee.</li>
          <li style="margin-left: 23px;">Software Licence Fee / Charges.</li>
          <li style="margin-left: 23px;">Annual Maintenance Fee.</li>
          <li style="margin-left: 23px;">Customisation Fee under SaaS model.</li>
          <li style="margin-left: 23px;">Customisation Fee under ‘White Label’ model.</li>
          <li style="margin-left: 23px;">Out of Pocket Expenses.</li>
        </ol>
        <br><br>
        <p>The fees and related terms of payment will be agreed upfront and would form part of the legal/contractual agreement/arrangement between Facilon and the Service Provider.</p>
      </div>
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