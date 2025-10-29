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


      <section class="privacy-policy-sec">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="privacy-policy-text terms-use-text">
                <h2>Facilon Privacy Policy</h2>
                <h3>Introduction</h3>
                <p>We at Facilon Services Private Limited and our affiliates (hereinafter referred to as “Facilon”, “we”, “us” or “our”), place paramount importance on safeguarding the privacy and security of your personal information and data <b>("Personal Data")</b> and consider trust as our top priority and take the protection of your Personal Data very seriously. We want you to feel safe using our websites, portals, mobile applications, services, and solutions <b>(“Platform”)</b>. This Privacy Policy informs you of the way in which we collect, use, transfer, and store your Personal Data when you use our Platform, as well as your rights in relation to this Personal Data.</p>
                <p>Please read this Privacy Policy carefully prior to accessing our Platform or availing our services. </p>
                <p>By accessing and using our Platform, you hereby acknowledge that you have read, understood, and agree to the processing of your Personal Data in accordance with the terms of this Privacy Policy and our <a href="terms-of-use.html">Terms of Use</a>.</p>
                <h3>I. What Data Is Collected</h3>
                <h3>1. Personal Data</h3>
                <p>While using our Platform, we may ask you to provide us with certain Personal Data that can be used to contact or identify you. Where possible, we indicate the mandatory and the optional fields. You always have the option to not provide your Personal Data by choosing not to use a particular service or feature on the Platform. Personal Data may include, but is not limited to:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                  <li>Email address;</li>
                  <li>First name and Last name;</li>
                  <li>Phone number;</li>
                  <li>Address, State, Province, ZIP/Postal code, City;</li>
                  <li>Nationality</li>
                  <li>Job title;</li>
                  <li>Company name</li>
                </ul>
                <p>Not sharing the mandatory Personal Data may lead to certain features of the Platform or our services being restricted, unavailable, or unusable. For instance, withholding your email address will not allow us to share relevant information about our services.</p>
                <p>If you provide us with any Personal Data of another person, we will presume that you have taken free, specific, informed, unconditional and unambiguous consent from such person to share their Personal Data with us and have made available this Privacy Policy to them and such Personal Data is true and accurate.</p>
                <p>We may ask you to provide certain additional information about yourself on a case-to-case basis in relation to our Platform or services. </p>
                <p>It is clarified that any data which does not reveal your specific identity, does not relate to an identified or identifiable individual, information that is publicly available, information about software and hardware usage, or any anonymized or aggregated data (“Other Information”) is not considered as Personal Data. </p>
                <h3>2. Usage Data</h3>
                <h3>a) When you access or use any of our mobile applications:</h3>
                <p>We may collect information from phones you use to access our mobile applications and based on your mobile phone settings and how you manage your privacy controls, information that we obtain from these devices may include:</p>
                <p><b>Device attributes:</b> information such as the operating system, hardware and software versions.</p>
                <p><b>Device operations:</b> information whether the application has been foregrounded or backgrounded.</p>
                <p><b>Identifiers:</b> unique identifiers, device IDs and other identifiers.</p>
                <p><b>Device signals:</b> Information about nearby Wi-Fi access points.</p>
                <p><b>Data from device settings:</b> information that you allow us to receive through device settings that you turn on, such as access to your GPS location.</p>
                <p><b>Network and connections:</b> information such as the name of your mobile operator or ISP, language, time zone, mobile phone number, IP address.</p>
                <p>We collect the above information to provide automatic updates and additional security so that your interaction with us is not used on other people’s devices. In addition, the information provides us valuable feedback on your identity as a device holder as well as your device behavior, thereby allowing us to improve our Platform and provide an enhanced customized user experience to you.</p>
                <h3>b) When you visit our websites or any other web application:</h3>
                <p>We may collect information that your browser sends whenever you visit our website or any other web application. This usage data may include information such as your computer’s internet protocol address (e.g. IP address), browser type, browser version, the pages of our website that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data. When you access our website on a mobile device or access a mobile application, this usage data may include information such as the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic data.</p>
                <h3>c) Cookies Data</h3>
                <p>Cookies are small data files placed on your device that a website stores on your computer while you are browsing a website. We utilize cookies to accumulate small fragments of information on designated portions of the application to facilitate analysis of our Platform and user engagement. </p>
                <p>Cookies are used to reduce the frequency of password entry during a session. Cookies further assist us in obtaining information beneficial for tailoring services more precisely to your interests. The use of this information helps us identify you to make our Platform more user friendly. We may use cookies and other technologies to store your preferences and settings, help you with signing in, provide targeted ads and analyze Platform operations. </p>
                <p>Our Platform will enable you to decline these cookies but if you choose to do this it might affect service on some parts of our Platform. </p>
                <h3>d) Information Collected From Third Parties</h3>
                <p>If you send us personal correspondence, such as emails or letters, or if other individuals or third parties send us correspondence about your activities regarding the Platform or our services, we collect such information into a file specific to you.</p>
                <h3>II. When And How Personal Data Is Collected</h3>
                <p>The above-mentioned Personal Data and other information is collected in a number of ways including:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                  <li>Directly from you, for example when you use our Platform, our services or when you contact us through phone, email or use our contact us or chat with us or bot feature;</li>
                  <li>When you make an account or register with us;</li>
                  <li>When you are a recipient of services provided by us;</li>
                  <li>When you provide us information to verify your identity;</li>
                  <li>When you reach out to our customer support teams or when a support ticket is created</li>
                  <li>When you provide us feedback</li>
                  <li>Our social media pages</li>
                  <li>Web forms and surveys</li>
                  <li>Off-site services and events that relate to our Platform or services</li>
                  <li>APIs</li>
                  <li>Other interactions with you</li>
                </ul>
                <h3>III. How We Use Your Personal Data And Other Information</h3>
                <h3>a) Personal Data</h3>
                <p>We access, store, and use the information we collect from you to provide our services, to research and develop new ones.</p>
                <p>We use Personal Data to provide the services you request, to customize your user experience and to improve our Platform and services. To the extent we intend to use your Personal Data to market any services to you, we will provide you with the ability to opt-out of such uses. You can opt-out of receiving marketing materials from us at any time by following the unsubscribe instructions provided, indicating your preference when we call you, or directly contacting us. </p>
                <p>We use your Personal Data generated because of our services availed by you to:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                    <li>to ensure compliance of your access and use of services with our legal obligations and applicable laws. We may share such information with our advisors, third-party service partners, and service providers to facilitate a seamless user experience.</li>
<li>Dispute resolution;</li>
<li>troubleshoot problems;</li>
<li>help promote a safe service;</li>
<li>analytical analysis including sharing personal information with third party partners to perform analysis;</li>
<li>measure consumer interest and satisfaction in our services;</li>
<li>inform you about online and offline services and updates;</li>
<li>customize your experience;</li>
<li>detect and protect us against suspicious or illegal activity, fraud and other criminal activity</li>
<li>enforce our terms and conditions;</li>
<li>improvement of our services and as otherwise described to you at the time of collection</li>
<li>continually improve our service offerings, we collect and analyze demographic and profile data about our users' activity on our Platform. The information we collect (including recordings of customer support calls and chats) may be used to assist you when you contact our customer support services, to investigate and address your queries, and monitor and improve our customer support responses. This information may also be used for staff training, quality assurance, or to retain evidence of a specific transaction or interaction.</li>
                </ul>
                <h3>b) Use Of Your Device Information</h3>
                <p>We use the information provided by you in the following ways:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                    <li>to establish identity and verify the same;</li>
                    <li>monitor, improve and administer our Platform;</li>
                    <li>provide our service.</li>
                    <li>analyse how the Platform is used, diagnose service or technical problems and maintain security;</li>
                    <li>send communications notifications, information regarding the services requested by you or process queries and applications that you have made on the Platform;</li>
                    <li>manage our relationship with you and inform you about other services we think you might find of some use.</li>
                </ul>
                <p>We will use and retain your information for such periods as necessary to provide you the services on our Platform, to comply with our legal obligations, to resolve disputes, and enforce our agreements. We will pseudonymize/ anonymize your data wherever possible to uphold your privacy.</p>
                <h3>c) Disclosure To Third Parties</h3>
                <p>We may disclose your Personal Data, without any prior notice or consent, if we are under a duty to do so in order to comply with any legal obligation or an order from the government and/or a statutory authority, or in order to enforce or apply our <b><a href="terms-of-use.html" target="_blank">Terms of Use</a></b> or assign such Personal Data in the course of corporate divestitures, mergers, or to protect the rights, property, or safety of us, our users, or others. This includes exchanging Personal Data with other companies and organizations for the purposes of fraud protection and credit risk reduction.</p>
                <p>We and our affiliates may share your Personal Data with another business entity should we (or our assets) merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business for continuity of business. Should such a transaction occur then any business entity (or the new combined entity) receiving any such Personal Data from us shall be bound by this Policy with respect to your information.</p>
                <p>By using the Platform, you hereby grant your consent to us to share/disclose your Personal Data (i) To the concerned third parties in connection with the services; and (ii) With the governmental authorities, quasi-governmental authorities, judicial authorities, and quasi-judicial authorities, in accordance with applicable laws of India.</p>
                <p>In case we use or disclose your information for any purpose not specified above, we will take your consent.</p>
                <h3>IV. How Long Do We Retain Your Data</h3>
                <p>We will retain your Personal Data for as long as needed to fulfil the purpose for which we collected it and for a reasonable period thereafter to comply with audit, accounting, contractual, technical and legal requirements, for security purposes, and/or to resolve any future disputes. We may retain Other Information indefinitely or to the extent allowed by applicable law. Our retention guidelines are applicable even when you no longer are using our Platform or availing our services.</p>
                <h3>V. Your Privacy Controls</h3>
                <p>You have certain choices regarding the information we collect and how it is used:</p>
                <ul style="margin-bottom: 10px">
                    <li>a) Device-level settings: Your device may have controls that determine what information you share with us.</li>

<li>b) You can also request Personal Data to be removed from our servers based on applicable law or by writing to us at <a href="mailto:social@facilonservices.com">social@facilonservices.com</a></li>
                </ul>
                <h3>VI. How Do We Keep Your Data Secure</h3>
                <h3>a) Security Precautions</h3>
                <p>Facilon endeavors to protect your Personal Data and to maintain its accuracy as confirmed by you. We have implemented reasonable physical, administrative and technical safeguards to help us protect your Personal Data from unauthorized access, use and disclosure which include:</p>
                <ul class="alpha-list" style="margin-bottom: 10px;">
                    <li>We use encryption to keep your data private while in transit;</li>

 <li>We anonymize or pseudonymize your data wherever feasible to uphold your privacy.</li>

 <li>We review our information collection, storage, and processing practices, including physical security measures, to prevent unauthorized access to our systems;</li>

 <li> We restrict access to Personal Data to our employees, contractors, and agents who need that information in order to process it. Anyone with this access is subject to contractual confidentiality obligations and may be disciplined or terminated if they fail to meet these obligations.</li>

 <li>Compliance & Cooperation with Regulations and applicable laws;</li>

 <li> We regularly review this Privacy Policy and make sure that we process your information in ways that comply with it.</li>

 <li> Data transfers.</li>

 <li> We maintain your Personal Data on servers located in India unless there are any specific data storage requirements under applicable laws. Data protection laws vary among countries, with some providing more protection than others. We also comply with certain legal frameworks relating to the transfer of data as mentioned and required under the Information Technology Act, 2000 or other applicable data protection laws.</li>

 <li> When we receive formal written complaints, we respond by contacting the person who made the complaint. We work with the appropriate regulatory authorities, including local data protection authorities, to resolve any complaints regarding the transfer of your data that we cannot resolve with you directly.</li>
                </ul>
                <h3>b) Third Party Links</h3>
                <p>When using the Platform or services, you may encounter links to third-party websites/apps, service provider ads that are not affiliated with FACILON. We are not responsible for the privacy practices or the content of those linked websites. With this Privacy Policy we’re only addressing the disclosure and use of data collected by us. If you visit any websites through the links on the Platform, please ensure you go through the privacy policies of each of those websites. Their data collection practices, and their policies might be different from this Privacy Policy and we neither have control over any of their policies nor do we have any liability in this regard.</p>
                <h3>VII. Children</h3>
                <p>Our Platform or services are not available for children (under the age of 18 or any other age of children as per the applicable laws) and do not provide information aimed at or specifically targeting children. If you are categorized as a child under the applicable laws and use our Platform and our services then we shall presume that you are using our Platform and our services only under the guidance and involvement of a parent or legal guardian.</p>
                <h3>VIII. Your Consent</h3>
                <p>By using the Platform and our services / or by providing your information, you consent to the collection and use of the information you disclose during your interaction with us in accordance with this Privacy Policy, including but not limited to your consent for collecting, using, sharing, and disclosing your information as per this Privacy Policy.</p>
                <p>Please note that the Privacy Policy may be updated from time to time, and it is your responsibility to look through them as often as possible. Your continued use of the Platform after any changes to this Privacy Policy are posted, will be considered as deemed acceptance of those changes.</p>
                <h3>IX. Your Rights</h3>
                <p>Depending upon your location and in accordance with applicable laws, you may have the right to access what Personal Data we hold about you, or the right to have incomplete or inaccurate data about you corrected or completed. Subject to certain exceptions where information needs to be retained for legal, internal audit, security & fraud prevention purposes and depending on your location, you may also have the right to request erasure of Personal Data or the right to restrict processing in accordance with applicable data protection laws.</p>
                <p>You always have the right to report any Personal Data breach at <a href="mailto:social@facilonservices.com">social@facilonservices.com</a> and the right to not be discriminated against by us for exercising any of your privacy rights</p>
                <p>If you would like to exercise any of these rights, please contact us as set forth below. Upon verifying the authenticity of such a request, we will process such requests in accordance with applicable laws. Please note in order to protect your privacy, we will take steps to verify your identity before processing and fulfilling your request.</p>
                <h3>X. Termination</h3>
                <p>We extend an option to all individuals to delete their account or use of services with us by contacting us through email at <a href="mailto:social@facilonservices.com">social@facilonservices.com</a>. Upon receiving such a request, all information corresponding to the specific account, including but not limited to profile details, transactional data will be eradicated. There might be scenarios where we may not be able to execute account deletion, such as if there exists an outstanding dispute, transactions suspected to be fraudulent, unresolved claims attached to your account. Upon resolution of the obstruction preventing deletion, the relevant information is promptly deleted and cannot be retrieved thereafter. Notwithstanding anything contained herein above, we may continue to retain certain information if deemed necessary for regulatory compliance, legitimate business interests like fraud prevention, enhancing user safety and security, or to fulfill our legal and contractual obligations.</p>
                <h3>XI. Support And Greivances</h3>
                <p>We support and encourage all users to contact us for questions, concerns, or suggestions relating to our <b><a href="terms-of-use.html" target="_blank">Terms of Use</a></b> and our Privacy Policy or practices involving the usage of data. We may be contacted at <a href="mailto:social@facilonservices.com">social@facilonservices.com.</a> We commit to reaching out to you within 7 working days of your request.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

       
@endsection



















