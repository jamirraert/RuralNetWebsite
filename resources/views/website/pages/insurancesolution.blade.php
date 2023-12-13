@extends('website.layout.ruralnet')

@section('content')

<div class="insurance_header">
    <div class="container">
        <div>
            <p>Made-to-measure digital insurance solutions for all</p>
            <span>Our comprehensive online platform and distribution channels can help you reach more customers at less cost.</span>
        </div>
        <img src="{{ asset('images/ruralnet-solutions-header-crop.png') }}">   
    </div>
</div>
<div class="insurance_header_middle">
    <div class="container">
        <p>
            We create comprehensive solutions to successfully 
            implement your microinsurance programs.
        </p>
    </div>
</div>

<div class="insurance_cards">
    <div class="container">
        <hr>
        <div id='product_creation'>
            <div>
                <p>Product Creation</p>
                <p>RuralNet designs microinsurance plans that address the real needs of your clients & deliver financial success.</p>
            </div>
            <div>
                <ul>
                    <li>Market research</li>
                    <li>Product design</li>
                    <li>Product underwriting</li>
                </ul>
            </div>
        </div>
        <div id='digitalization'>
            <div>
                <p>Digitalization</p>
                <p>Our API-enabled microinsurance platform automates most of the admin work from running a microinsurance program.</p>
            </div>
            <div>
                <ul>
                    <li>Digital enrollment tools</li>
                    <li>Branch-assisted claims portal</li>
                    <li>Online self-service claims</li>
                    <li>API integration</li>
                    <li>Automated reporting</li>
                </ul>
            </div>
        </div>
        <div id='implementation'>
            <div>
                <p>Implementation</p>
                <p>Our implementation team helps you get microinsurance programs off the ground at distribution channels in as fast as 1 month.</p>
            </div>
            <div>
                <ul>
                    <li>Nationwide implementation team</li>
                    <li>Training services</li>
                    <li>Marketing and sales campaigns</li>
                    <li>Claims pre-screening</li>
                </ul>
            </div>
        </div>
    </div>
</div>    

<div class="insurance_send_message">
    <div class="container">
        <div>
            <p>Want to learn more about our solutions?</p>
            <button class="btn" onclick="window.location.href = '/contact'">SEND US A MESSAGE</button>
        </div>
    </div>
</div>

<div class="insurance_content_head">
    <div class="container">
        <div>
           <p>Why work with RuralNet?</p>
           <img src="{{ asset('images/CashKO_Accent-5.png') }}"> 
        </div>
    </div>
</div>

<div class="insurance_contents">
    <div class="container">
        <div>
            <img src="{{ asset('images/ruralnet-solutions-icon-1.svg') }}"> 
            <div>
                <p>Stay up-to-date at all times</p>
                <p>RuralNet’s platform makes it easy for branches to regularly update KPIs and give reports, allowing you to stay connected with what’s happening in your community.  </p>
                <p>Our system notifies agents and branches once policies are up for renewal. Policies can be issued for real-time printing at any branch, or can be sent directly to users via e-mail. Furthermore, our APIs pull from existing customer data to make renewing, adding, or amending policies as seamless as possible.</p>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/ruralnet-solutions-icon-2.svg') }}"> 
            <div>
                <p>Process applications and claims quickly </p>
                <p>RuralNet’s application portal automatically validates customer information, while the claims portal allows users to directly scan and upload claims documents for easy filing.  </p>
                <p>Customer information is automatically validated as they enroll, and our claims approval tools helps your team keep track of all ongoing claims. </p>
            </div>
        </div>
        <div>
            <img src="{{ asset('images/ruralnet-solutions-icon-3.svg') }}"> 
            <div>
                <p>Engage with more clients at less risk </p>
                <p>As the only Philippine InsureTech company to operate on a profit-sharing model, RuralNet securely maintains its own cloud platform and only charges broker’s commissions or platform fees. For financial institutions, this means less capital expenditure and more opportunities for customer outreach.</p>
            </div>
        </div>
    </div>
</div>

<div class="insurance_use_cases_head">
    <div class="container">
        <div>
            <p>USE CASES</p>
            <p>Here’s how we’ve helped our partner insurers.</p>
        </div>
    </div>
</div>

<div class="insurance_use_cases_contents">
    <div class="container">
        <div class="accordion">
            <!-- Accordion Item 1 -->
            <div class="accordion-item" >
                <div class="accordion-title">
                    <p>Helping a life insurer & lender successfully launch microinsurance</p>
                    <div>
                        <button class="btn_vdetail" onclick="toggleAccordion('accordion-item1')">VIEW</button>
                    </div>
                </div>   
                <div id="accordion-item1" class="accordion-content">
                    
                    <div id="acd1">
                        RuralNet collaborated with a life insurer and microfinance institution to create and 
                        manage a successful microinsurance program that expanded to cover over 90% of the 
                        microfinance portfolio within two years.
                    </div>
                    <div id="acd2">
                        <div>
                            <p>PRODUCT CREATION</p>
                            <ul>
                                <li><span>Market research done by RuralNet to evaluate customer needs and budgets</span></li>
                                <li><span>Product concepts, design, and underwriting analysis done by RuralNet in partnership with insurer team</span></li>
                            </ul>
                        </div>
                        <div>
                            <p>DIGITALIZATION</p>
                            <ul>
                                <li><span>Enrollment APIs and UI/UX integrated into the core lending system</span></li>
                                <li><span>Digital claims platform implemented at the branches, allowing even untrained staff to handle claims</span></li>
                            </ul>
                        </div>
                        <div>
                            <p>IMPLEMENTATION</p>
                            <ul>
                                <li><span>Sales and marketing approach and materials designed by RuralNet for the field</span></li>
                                <li><span>Cross-selling training, monitoring and implementation handled by the RuralNet team</span></li>
                            </ul>
                        </div>
                    </div>
                    <div id="acd3">
                        <div id='acd3_banner'>
                            <p id='acd3_banner_1'>BUSINESS OUTCOME</p>
                            <p id='acd3_banner_2'>Voluntary life program launched in 3 months (including pilot), with 50% of lending customers being cross-sold insurance in Year 1 and 90%+ bring captured by Year 2 of the program.</p>
                        </div>
                        <img src="{{ asset('images/ruralnet-solutions-faq-icon.png') }}"> 
                    </div>
                </div>
            </div>
    
            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <div class="accordion-title">
                    <p>Cutting claims turnaround time by 60% versus industry</p>
                    <div>
                        <button class="btn_vdetail" onclick="toggleAccordion('accordion-item2')">VIEW</button>
                    </div>
                </div>
                <div id="accordion-item2" class="accordion-content">
                    <p>
                        In addition to cost savings, RuralNet offers best-in-class claims services, 
                        with a focus on the microinsurance market serving lower-to-middle-income households. 
                        Our goal is to provide quick cash claims to address their urgent needs. We achieve this through 
                        a simplified claims process and user-friendly touchpoints so claims can get out faster.
                    </p>
                    <img src="{{ asset('images/ruralnet-solutions-sample-1.png') }}"> 
                </div>
            </div>
    
            <!-- Accordion Item 3 -->
            <div class="accordion-item">
                <div class="accordion-title">
                    <p>Cutting administrative overhead for an MBA by 50%</p>
                    <div>
                        <button class="btn_vdetail" onclick="toggleAccordion('accordion-item3')">VIEW</button>
                    </div>
                </div>
                <div id="accordion-item3" class="accordion-content">
                    <p>In addition to cost savings, RuralNet offers best-in-class claims services, with a focus on the microinsurance market serving lower-to-middle-income households. Our goal is to provide quick cash claims to address their urgent needs. We achieve this through a simplified claims process and user-friendly touchpoints so claims can get out faster.</p>
                    <img src="{{ asset('images/ruralnet-solutions-sample-2.png') }}">
                </div>
            </div>
        </div>
        <script>
            function toggleAccordion(itemID) {
                const item = document.getElementById(itemID);
                const isOpen = item.style.display === 'block';

                // Close all accordion items
                const allItems = document.querySelectorAll('.accordion-content');
                allItems.forEach((itemloop) => {
                    itemloop.style.display = 'none';
                });

                // Toggle the clicked item
                item.style.display = isOpen ? 'none' : 'block';

            }
        </script>
    </div>
</div>

<x-banner-send-message></x-banner-send-message>
@endsection