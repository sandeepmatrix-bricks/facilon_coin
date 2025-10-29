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
                <h2 class="main-heading"><strong>SERVICE AGREEMENT</strong></h2>
              </div>
            </div>
            <div class="col-md-12">
              <p>This Service Agreement (“Agreement”) is executed at the place and on the date as specified in Schedule 1 between Facilon Services Private Limited, a private limited company incorporated under the Companies Act, 2013 and having its registered address at A102, Golden Square CHS, Kalina, Santacruz (E), Vidya Nagari, Mumbai – 400098, Maharashtra, India (hereinafter referred to as “Facilon”, which expression shall, unless repugnant to the context and meaning thereof, be deemed to include its successors and permitted assigns);<br> 
                AND 
                The Person as specified in Schedule 1 (hereinafter referred to as the “Client”, which expression shall, unless repugnant to the context and meaning thereof, be deemed to include its successors and permitted assigns).<br>
                Facilon and the Client shall be individually referred to as a “Party” and collectively, as “Parties”.
                <br>
                <strong>WHEREAS:</strong>
                <br>
                A. Facilon is a company based in Mumbai and has built a Platform (defined hereinafter) through which it provides technology solutions and related infrastructure to its clients. Facilon's technology aims to facilitate access, interaction, including but not limited to exchange of information and data as per the terms of this Agreement between Client and the investor who propose to invest or are eligible to invest in capital markets or other listed securities in India (“Indian Market Investments”) and related value-added services pursuant to the products sold by the Client to such investors and facilitate the exchange of information and documents.
                <br>
                B. The Client has registration granted by Regulatory Bodies (defined hereinafter) and is registered and licensed to provide banking and/or banking related services for Indian Market Investments by the investors and has requisite skill, experience, capital, manpower and facilities to assist the investors investing in Indian Market Investments.
                <br>
                <strong>OR</strong>
                <br>
                The Client renders services to various Persons (defined hereinafter) who propose to/are eligible to invest in Indian Market Investments and has the requisite license skill, experience, capital, manpower and facilities to advise such Person on investing in Indian Market Investments.
                <br>
                C. The Client wishes to avail the Services (defined hereinafter) from Facilon and Facilon desires to provide the Services to the Client on the terms and conditions as set out in this Agreement, and various other documents agreed to and executed between the Parties.
                </p>
                
                <p>
                <strong>NOW THEREFORE, in consideration of the premises and mutual agreements and covenants, representations and warranties hereinafter set forth and other good and valuable consideration (the receipt and adequacy of which are hereby mutually acknowledged), each of the Parties hereby agree as follows:</strong>
                </p>
                <p>
                <h3>1. Definitions and Interpretations</h3>
                <br>
                <strong>1.1 Definitions</strong>
                1.1.1 “Affiliate” means any Person that is directly or indirectly, through one or more intermediaries, Controlling, controlled by, or under common control with, one of the Parties hereto. For purposes of this definition, “Control” shall mean possessing, directly or indirectly, the power to direct or cause the direction of the management, policies, and operations of a Person, whether through ownership of voting securities, by contract, or otherwise;
                <br>
                1.1.2 “Applicable Laws” means and includes all Indian statutes, enactments, acts of legislature or parliament, codes, laws, ordinances, rules, by-laws, regulations, notifications, guidelines, policies, circulars, press notes, directions, directives, judgments, decrees or orders of any Governmental Authority in India, or any court or arbitral tribunal or any self-regulatory body in India which is applicable to a Party or to which its business or assets may be subject to;
                <br>
                1.1.3 “Confidential Information” means all information or material disclosed whether before, on or after the Effective Date, whatsoever, irrespective of the means, mode or medium of storage, representation or presentation of the same by Facilon to Client and/or its Personnel including but not limited to: (i) technical information, including patent, copyright, trade secret, and other proprietary information, techniques, sketches, drawings, models, inventions, know-how, processes, apparatus, equipment, algorithms, software programs, software source documents, and formulae related to the current, future and proposed products and services of Facilon; (iii) non-technical information relating to Facilon’s products, including without limitation pricing, margins, merchandising plans and strategies, finances, financial and accounting data and information, customers, customer lists, purchasing data, sales and marketing plans, future business plans; (iv) information relating to Facilon’s organizational structure; and (v) any information which is proprietary and confidential to Facilon or its Affiliates. For the purposes of clarity, the execution of this Agreement, the terms hereof and the existence of this Agreement shall also be treated as Confidential Information;
                <br>
                1.1.4 “Charges” means (i) the Fees; and (ii) any other costs and/or commissions and expenses payable by the Client in connection with the Services (including any third party expenditure paid or payable by Facilon on Client’s behalf);
                <br>
                1.1.5 “Effective Date” means the date specified in Schedule 1;
                <br>
                1.1.6 “Fees” means the fees invoiced and payable by the Client as set out in each SOW;
                <br>
                1.1.7 “Governmental Authority” means any government (whether federal, central, state, administrative, regional or local) or any legislative, executive, administrative, fiscal, judicial, statutory or regulatory authority, body, board, ministry, department, commission, court, tribunal, agency, instrumentality having or any other entity, authority, body or Person exercising power, jurisdiction or authority over the relevant Person or within the territory within which any of the relevant Person resides, operates or carries on any business;
                <br>
                1.1.8 “Force Majeure Event” means an event beyond the control of a Party, as a result of which it is unable to perform its obligations under this Agreement and include acts of god, cyber security incidents, flood, fire, earthquake, cyclones, storms, explosions, infestations or other natural calamities, war, terrorist threats or acts, riot or other civil unrest, prohibition or acts by government or public agency, epidemic, pandemic, outbreak of communicable disease, quarantines, regional or national emergencies, lockdown or other acts of nature;
                <br>
                1.1.9 "Intellectual Property” means all inventions, software, know-how, algorithms, source code, object code, technical and business plans, specifications, modules, hardware, circuits, computer languages, computer programs, databases, user interfaces, encoding techniques, mask works, words, marks, names, numerals, letters, devices, labels, brands and other documents, materials and innovations of any kind, including work product, whether or not the foregoing are eligible for patent, copyright, mask work, trade secret, trademark, service mark or other legal protection and includes all worldwide patents and other patent rights, utility models, trademarks, service marks, domain names, copyrights and mask work rights whether registered or unregistered, including right to apply for any of the foregoing before any intellectual property office in any part of the world;
                <br>
                1.1.10 “Person” means any natural individual, sole proprietor, partnership, limited liability partnership (LLP), unincorporated association, unincorporated syndicate, unincorporated organization, trust, body corporate, or a natural Person acting in the capacity of a trustee, executor, administrator, or other legal representative, as recognized under the laws of India;
                <br>
                1.1.11 “Personnel” refers to individual persons working for the Client and have the permission to use the Platform under this Agreement and includes employees, contractors, agents, or other authorized individual persons of the Client and are authorized to use the Platform for the services outlined in this Agreement;
                <br>
                1.1.12 “Personal Information” means all and any information that relates to an identified or identifiable living individual. Different pieces of information, which collected together can lead to the identification of a particular Person, also constitute Personal Information. This may include your name, contact information, payment details, and any other information necessary for the provision of our Services;
                <br>
                1.1.13 “Platform” means the proprietary technology platform of Facilon that encompasses the digital infrastructure, software, technology and tools developed and owned by Facilon including Facilon web portals and websites accessible through specific URLs/links, mobile applications, source code, database, database management, designs, drawings, software architecture, algorithms, push notifications, chatbots, and Facilon's social media channels.
                <br>
                1.1.14 “Privacy Policy” means the "https://www.facilonservices.com/privacy-policy.html”, as amended from time to time;
                <br>
                1.1.15 “Regulatory Bodies” means government departments, statutory entities, committees, and other authorized organizations empowered by law or regulations to oversee, investigate, and restate matters such as the RBI (Reserve Bank of India), SEBI (Security Exchange Board of India), IRDA (Insurance Regulatory and Development Authority of India), PFRDA (Pension Fund Regulatory and Development Authority), NABARD (National Bank for Agriculture and Rural Development) , SIDBI (Small Industries Development Bank of India), AMFI (Association of Mutual Funds of India), NSE (National Stock Exchange of India) and BSE (Bombay Stock Exchange of India), etc.;
                <br>
                1.1.16 “Services” means the services provided by Facilon from time to time pursuant to this Agreement and shall also include all services provided by Facilon through the Platform including but not limited to (a) a technology integration through the Platform to facilitate access and interaction with the Client by the service recipient (for Indian Market Investments) pursuant to the products and services sold by the Client, and (b) certain value-added services provided to its Users or any other service pursuant to the SOW as detailed under Clause 4 (Services);
                <br>
                1.1.17 “SOW” means any statement of work(s), document(s) or amendments thereof, detailing the Services and the terms and conditions, duly executed by the Parties either in writing or online through a click-wrap arrangement;
                <br>
                1.1.18 “Terms of Use” means the terms of use published on the Platform, as amended from time to time; and
                <br>
                1.1.19 “User” means the Client or the service recipient or any other Person or entity, who are registered on the Platform.
                </p>
                <br>
                <p>
                    <div class="section-heading mb-40 text-center">
                        <!-- New Heading -->
                      <div class="section-heading mb-20 text-center" id="residential-status">
                        <h2 class="main-heading"><strong>SCHEDULE 1</strong></h2>
                      </div>
                    </div>
                    <center><h2 class="main-heading"><strong>Details of the Client</strong></h2></center>
                    
                    <center>The following table provides details of the client(s) (herein referred to as the “Client”):</center><br>
                    <table class="centered-table">
                        <colgroup>
                          <col>
                          <col>
                          <col>
                        </colgroup>
                      <tr>
                        <td>a.</td>
                        <td>Date of Agreement</td>
                        <td>{{$fetch_scheduling_details->date_of_agreement}}</td>
                      </tr>
                      <tr>
                        <td>b.</td>
                        <td>Place of Execution</td>
                        <td>{{$fetch_scheduling_details->place_of_execution}}</td>
                      </tr>
                      <tr>
                        <td>c.</td>
                        <td>Other details of the Client</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Name of the Client</td>
                        <td>{{$fetch_scheduling_details->name_of_client}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Constitution / Type of the entity</td>
                        <td>{{$fetch_scheduling_details->type_of_entity}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Name of all Director</td>
                        <td>{{$fetch_scheduling_details->company_director_name}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>DIN</td>
                        <td>{{$fetch_scheduling_details->company_director_din}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Name of all Partner</td>
                        <td>{{$fetch_scheduling_details->partner_name}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>DPIN</td>
                        <td>{{$fetch_scheduling_details->partner_dpin}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Registration Numbers</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>PAN</td>
                        <td>{{$fetch_scheduling_details->pan_no}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>TAN</td>
                        <td>{{$fetch_scheduling_details->tan_no}}</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>GST</td>
                        <td>{{$fetch_scheduling_details->gst_no}}</td>
                      </tr> 
                      <tr>
                        <td></td>
                        <td>Registered with RBI under (Name)</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>RBI Regstration No</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Registered with SEBI under (Name)</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>SEBI Registration No</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Registered with Exchange (Name)</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Segment Name</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Compliance Office Details</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Name</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Phone No</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Email</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Office Address</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Address of Registered office of the Client</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Contact Person and Designation</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>E-mail ID</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Phone No(s) – Landline</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>d.</td>
                        <td>Details of the Branch / Corporate Office</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Place of the Branch / Corporate office</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Address of the Branch / Corporate office</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Primary Contact Person Name</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Primary Contact Person E-mail ID</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Primary Contact Person Phone No(s)</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>e.</td>
                        <td>List of Personnel </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Secondary Contact Name </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Secondary Contact Email </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Secondary Contact Designation </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Secondary Contact Phone </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Escalation Contact Name </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Escalation Contact Email </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Escalation Contact Designation </td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Escalation Contact Phone </td>
                        <td></td>
                      </tr>
                    </table>
                </p>
                
                
            </div>
            <div class="col-md-12">
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-4">
                    <div class="single-field mb-0">
                        <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;margin-bottom: 3%;" type="submit">Agree</a>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="single-field mb-0">
                        <a href="" class="button-1" style="padding: 12px 20px;font-size: 18px;display: inline-block;width: 100%;text-align:center;" type="submit">Not Agree</a>
                    </div>
                </div>
                <div class="col-md-2">
                    
                </div>
            </div>
            <br>
        </div>
    </div>
    </section>

</div>
       
@endsection