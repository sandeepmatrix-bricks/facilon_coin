@extends('layouts.frontend-header')

@section('content')
<style>
  .content-section ul {
    list-style-type: disc;
    margin-left: 20px;
    padding-left: 20px;
  }
  .content-section h2 {
    color: #3e6f7c;
    font-weight: 700;
  }
  .content-section h3 {
    color: #3e6f7c;
    font-weight: 600;
  }
  .social-icon-below {
    margin-top: 10px;
    font-size: 20px;
    color: #eaf0f3;
    background: #be1717;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: inline-flex
;
    align-items: center;
    justify-content: center;
    text-decoration: none;
}
.message-box h2 {
    font-size: 28px;
    font-weight: 700;
    padding: 0 0 20px;
    /* margin: 13px; */
    line-height: 62px;
    margin-top: 0;
    text-transform: none;
    color: #BE1717;
}
</style>

<div id="fullpage">
  <!-- Meet the Team Section -->
  <section id="section1" class="section fp-auto-height-responsive our-team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="message-box">
                  <div class="text-center">
                    <h2 style="font-size:32px;">Meet the Team</h2>
                  </div>
                  <div class="new-team-wrap">
                    
                  </div>
                </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Suneet -->
  <section id="suneet" class="section single-team-member fp-auto-height-responsive">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center">
          <div class="team-member-img">
            <img src="{{ asset('/public/our-team/1.png') }}" alt="Suneet Luthra" class="img-responsive">
            <a href="https://www.linkedin.com/in/suneet-luthra-021331a/" target="_blank" class="social-icon-below">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <h5>Suneet Luthra</h5>
            <p>CEO & Co-Founder</p>
            <i>Board Member</i>
          </div>
        </div>
       
        <div class="col-md-9">
          <div class="team-member-box-text">
             <p><b><i>Suneet Luthra</i></b> is a Chartered Accountant from India, having graduated in Economics and Accounting from Bombay University. With over 30 years of experience, he has worked with prominent organizations such as Price Waterhouse, Morgan Stanley, and J.P. Morgan in locations spanning Mumbai, Bahrain, New York, Shanghai, and Hong Kong. His expertise lies in funds and securities processing, encompassing custody and clearing practices, as well as cash and foreign exchange requirements in Asian and Australian markets.
</p>
<p>Suneet's guiding philosophy is simple yet powerful: "Change is the only constant." This perspective has led him to actively participate in various transformations and advancements within the funds and securities processing industry. Throughout his career, Suneet has taken on diverse roles, including Operational, Agent Relationship Management, Market Management, Program Management, Product Management, and Product Development. He has also spearheaded numerous business transformation and cross-functional projects.
</p>
<p>In essence, Suneet possesses a comprehensive understanding of the securities services industry, including the capabilities of various providers, including technology firms, and the requirements of asset owners and asset gatherers. His strategic thinking, ability to view challenges as opportunities, proactive skill development, and unwavering commitment to delivering results make him a valuable asset to any team or organization.
                  </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Jaydeep -->
  <section id="jaydeep" class="section single-team-member fp-auto-height-responsive jaydeep-fl-sec">
    <div class="container">
      <div class="row align-items-center" style="
    padding-top: 50px;
">
        <div class="col-md-9">
          <div class="team-member-box-text">
             <p><b><i>Jaydeep Jayakar</i></b> based at Mumbai carries 40+ years of rich experience having worked with Standard Chartered Bank Group in multiple capacities. He has worked in various departments, branches / offices of the Bank in India and overseas and was also led/associated with Bank’s several major business transformational and cross functional projects.

</p>
<p>He has knowledge and experience of branch banking, country finance/taxation, treasury/FX operations and internal control, forensic banking and investigation, para-legal support, operationalising structured/escrow transactions and custodial/securities services operations and servicing including relationship management of domestic and cross-border institutional investors/clients.
</p>

<p>His contribution to various initiatives and projects during his long tenure with the Bank was instrumental as driving a change, developing strategies during changing times, managing risks, setting benchmarks for service standards assisting institutional clients and the Bank without compromising on operational, legal, and reputational risks. He also has experience in engaging with Regulators, investigating agencies; Industry bodies/associations, legal and professional firms to support developments in the Securities and Financial Markets.
</p>

<p>Jaydeep holds Bachelor’s degree in Commerce from Mumbai University and is a certified associate of the Indian Institute of Bankers. He also holds Investment Administration (IAQ) and International Custodial Services Qualification (ICSQ) from Securities Institute, UK (CISI).
                  </p>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="team-member-img">
            <img src="{{ asset('/public/our-team/2.png') }}" alt="Jaydeep Jayakar" class="img-responsive">
            <a href="https://www.linkedin.com/in/jaydeep-jayakar-236a9017/" target="_blank" class="social-icon-below">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <h5>Jaydeep Jayakar</h5>
            <p>CAO & Co-Founder</p>
            <i>Board Member</i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Rajiv -->
  <section id="rajiv" class="section single-team-member fp-auto-height-responsive">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center">
          <div class="team-member-img">
            <img src="{{ asset('/public/our-team/rajiv.png') }}" alt="Rajiv Shah" class="img-responsive">
            <a href="https://www.linkedin.com/in/rajiv-shah-1875066/" target="_blank" class="social-icon-below">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <h5>Rajiv Shah</h5>
            <p>CXO & Director</p>
            <i>Board Member</i>
          </div>
        </div>
        <div class="col-md-9">
          <div class="team-member-box-text">
           <p><b><i>Rajiv Shah </i></b> has over 30 years' experience in Indian Capital markets and Indian Life Insurance business across operations and service. He has is Accounts & Commerce graduate from Mumbai University and holds Diploma in Business Finance from ICFAI, Hyderabad. He has worked with Indian broker dealer, global custodian - Morgan Stanley Trust Company and Chase Manhattan Bank in Mumbai setting up. India desk for customer service to foreign institutional investors.</p>
                  <p>In Life Insurance industry working with companies Like AVIVA, AEGON Life & Reliance Life, he has setup and managed operations and customer service and worked across various streams in life insurance like claims management, branch network management for customer service and business retention.</p>
                  <p>His expertise lies in setting up & managing large customer facing operations to drive customer experience & satisfaction through simple processes leveraging technology. He has operations & systems for supporting life insurance online sales in India.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Nitin -->
  <section id="nitin" class="section single-team-member fp-auto-height-responsive nitin-fl-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="team-member-box-text">
            <p><b><i>Nitin Panchal</i></b> With over 23 years of experience in IT operations, cloud infrastructure and cybersecurity, Nitin brings deep technical leadership to Facilon. He has successfully led large-scale projects across Capgemini, Gyan and PriemX, leveraging multi-cloud platforms to build secure, scalable systems.
Known for his strategic mindset and hands-on approach, Nitin is passionate about using technology to drive innovation, enhance customer experience, and enable long-term business growth.</p>
          </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="team-member-img">
            <img src="{{ asset('/public/our-team/Untitled_design__3_-removebg-preview (1).png') }}" alt="Nitin Panchal" class="img-responsive">
            <a href="https://www.linkedin.com/in/nitin-panchal-8023a413" target="_blank" class="social-icon-below">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <h5>Nitin Panchal</h5>
            <p>Technology Lead</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kamakshi -->
  <section id="kamakshi" class="section single-team-member fp-auto-height-responsive panew-sec">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 text-center">
          <div class="team-member-img">
            <img src="{{ asset('/public/our-team/kamakshi-new (1).png
') }}" alt="Kamakshi Verma" class="img-responsive" style="height: 237px;">
            <a href="https://www.linkedin.com/in/kamakshi-verma-b824a3102/" target="_blank" class="social-icon-below">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <h5>Kamakshi Verma</h5>
            <p>Legal Lead</p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="team-member-box-text">
             <p><b><i>Kamakshi Verma</i></b> graduated from ILS Law College, Pune. While completing her law degree she interned with well reputed law firms such as JSA, Delhi and AZB, Pune. Enrolled with the Bar Council of Delhi, she has worked with advocates, senior advocates, CBI Prosecutor and was also appointed as a law researcher at the Delhi High Court. As a law researcher, the ambit of her legal research traversed all disciplines of law.

</p>
<p>Kamakshi worked for international companies and was involved in document review, conducted protocol trainings and litigation management. She is skilled in legal research, document review, drafting, civil and criminal litigation, and team management. Kamakshi is certified from Trinity Guildhall (Trinity College London) in effective communication skills.
</p>
<p>Adept in reviewing, interpreting and drafting, Kamakshi would be a worthy addition to an organization.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Scroll Top -->
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

@endsection
