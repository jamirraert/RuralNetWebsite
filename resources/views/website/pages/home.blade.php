@extends('website.layout.ruralnet')

@section('content')
<div class="banner">
    <div class="container">
        <img src="{{ asset('images/ruralnet-banner-left.png') }}" id="banner_left_img">
        <div id="banner_main">
            <p id="banner_header">
                Making insurance better accessible to all Filipinos
                <img src="{{ asset('images/CashKO_Accent-3.png') }}" id="underline">
            </p>
            <p id="banner_content">
                We provide the Philippines’ first fully digital 
                & API-driven insurance distribution & claims management platform.
            </p>
            <button class='btn_big' onclick="scrollToSection()">LEARN MORE</button>    
        </div>
        <img src="{{ asset('images/ruralnet-banner-right.png') }}" id="banner_right_img">
    </div>
</div>

<!----------------------------- end of banner --------------------->

<div class="section1">
    <div class="container" id="section1_learn_more">
        <p class="section_left">    
            RuralNet is an Insurance Technology company that seeks to give every Filipino access to affordable insurance.
        </p>
        <p class="section_right">  
            RuralNet, along with our subsidiary insurance brokerage, CashKO, focuses on establishing 
            sustainable financial systems at the grassroots level. We do this by partnering with institutions 
            that cater to underserved Filipinos and SMEs. We also create systems solutions that help insurance 
            providers serve their communities better.  
        </p>
    </div>
</div>
<!----------------------------- end of section1 --------------------->

<div class="home_cards">
    <div class="container">
        <div id="micro">
            <div>
                <img src="{{ asset('images/CashKo-Tertiatry-Descriptor-FW-09.png') }}">
                <p>
                    CashKO provides microinsurance solutions that 
                    focus on fast claims processing with high approval rates.
                </p>
                <button class='btn-primary' onclick="redirect('micro.cashko-insurance.com')">LEARN MORE</button>
            </div>
           
        </div>
        <div id="financial">
            <div>
                <img src="{{ asset('images/CashKo-Primary-Descriptor-FW-01.png') }}">
                <p>
                    CashKO works with underserved SMEs to develop comprhensive 
                    insurance plans that can help businesses grow at scale.
                </p>
                <button class='btn_blue' onclick="redirect('cashko-insurance.com')">LEARN MORE</button>
            </div>
            
        
        </div>
        <div id="insurance">
            <div>
                <img src="{{ asset('images/ruralnet-solutions-logo.png') }}">
                <p>
                    RuralNet’s digital insurance distribution 
                    platform allows you to fully digitize the 
                    insurance process and make it more accessible to consumers.
                </p>
                <button onclick="window.location.href = '/insurance_solutions'" class='btn'>LEARN MORE</button>
            </div>    
            
        </div>
    </div>
</div>  
<!----------------------------- end of home_cards --------------------->

<div class="home_social_impact">
    <div class="container">
        <div id='left'>
            <div>
                <p>Social impact is at the heart of our operations.</p>
                <p>
                    RuralNet was founded with the goal of developing 
                    microinsurance programs that directly address the 
                    needs of the everyday Filipino. Our programs offer 
                    faster claims turnaround times than traditional insurers, 
                    which allows customers to get the help they need. By 
                    working with partner institutions on the grassroots level, 
                    we are able to build financial security nets for 
                    Filipinos who need it most.
                </p>
            </div>    
        </div>
        <div id='right'>
            <div>   
                <ul>
                    <li>2 million Filipinos protected via RuralNet’s digital insurance platform</li>
                    <li>
                        Average claim turnaround of 33 days <br>
                        <span>
                            (which is 40-60% faster than traditional insurers)
                        </span>
                    </li>
                    <li>
                        50-75% less overhead expenditure for institutional partners
                    </li>
                </ul>
                <img src="{{ asset('images/ruralnet-home-accent.png') }}">
            </div>
        </div>
    
    </div>
</div>   
<!----------------------------- end of home_social_impact ---------------------> 


<div class="home_banner2">
    <div class="container">
        <div class="left">
            <div>
                <p>
                    Our insurance solutions have helped our partners scale rapidly at less cost.
                </p>
                <img src="{{ asset('images/CashKO_Accent-4.png') }}">
            </div>
            <p>
                Learn more about our platform and <span><a href="/insurance_solutions" style="color: white">see what we can do for you</a></span>.
            </p>
        </div>
        <img src="{{ asset('images/banner-bg.png') }}"  class="right">
    </div>
</div>
<!----------------------------- end of home_banner2 ---------------------> 


<div class="home_faq">
    <div class="container">
        <div id="left">
            <p>FAQs</p> 
            <p>Learn more about RuralNet and what we offer.</p>   
        </div>  
        <div id="right">
                
            <!-- Accordion -->
             <div class="accordion">

                <!-- Accordion Item 1 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>Who is RuralNet?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>   
                    <div id="accordion-content" class="accordion-content">
                        RuralNet is an InsurTech company in the Philippines, offering the country's first fully digital and 
                        API-driven platform for insurance distribution and claims management. We collaborate with institutions 
                        to bring insurance within reach of all Filipinos, with a focus on underserved individuals and SMEs. 
                        We also develop system solutions to empower insurance providers to serve their communities better.
                    </div>
                </div>
        
                <!-- Accordion Item 2 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>Do I need servers to use the RuralNet platform?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        The RuralNet platform is cloud-based, which means you don’t need to invest in equipment or infrastructure 
                        to use the platform. Our infrastructure team is ready to help you set up your own cloud instance, ensuring 
                        that all your customer’s data is kept secure and private.
                    </div>
                </div>
        
                <!-- Accordion Item 3 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>How do I partner with RuralNet to improve our microinsurance operations?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        If you have mass-market insurance distribution operations, RuralNet’s Partnership team can help you build a 
                        solution that’s right for you. Schedule a product demo through our Contact Us page.
                    </div>
                </div>
        
                <!-- Accordion Item 4 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>I have an existing legacy system. How can RuralNet help me migrate my data?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        RuralNet would be happy to help you clean up and migrate your existing data onto the RuralNet platform. Our 
                        dedicated project managers will ensure a smooth transition and onboarding process for your products. 
                    </div>
                </div>
        
                <!-- Accordion Item 5 -->
                <div class="accordion-item" id="accordion-item">
                    <div>
                        <p>I’m concerned about Data Privacy. How can RuralNet help me protect my clients’ data?</p>
                        <div>
                            <i class='bx bx-chevron-up'></i>
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </div>
                    <div id="accordion-content" class="accordion-content">
                        RuralNet is a National Privacy Commission-registered institution and is fully compliant with the Data 
                        Privacy Act. Our platform keeps each partner’s data on a separate cloud instance, helping you keep your 
                        clients’ data segregated, encrypted, and secure.
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                let accordionItems = document.querySelectorAll('#accordion-item');
                let currentlyOpenItem = null;

                accordionItems.forEach(function(element) {
                    element.querySelector('#accordion-content').style.display = 'none';

                    element.addEventListener('click', function(event) {
                        event.stopPropagation();

                        let accordionContent = this.querySelector('#accordion-content');
                        let chevUp = this.querySelector('.bx-chevron-up');
                        let chevDown = this.querySelector('.bx-chevron-down');

                        if (currentlyOpenItem && currentlyOpenItem !== this) {
                            // Close the previously open item
                            let prevAccordionContent = currentlyOpenItem.querySelector('#accordion-content');
                            let prevChevUp = currentlyOpenItem.querySelector('.bx-chevron-up');
                            let prevChevDown = currentlyOpenItem.querySelector('.bx-chevron-down');

                            prevAccordionContent.style.display = 'none';
                            prevChevUp.style.display = 'none';
                            prevChevDown.style.display = 'block';
                        }

                        if (accordionContent.style.display === 'none') {
                            accordionContent.style.display = 'block';
                            chevUp.style.display = 'block';
                            chevDown.style.display = 'none';
                            currentlyOpenItem = this;
                        } else {
                            accordionContent.style.display = 'none';
                            chevUp.style.display = 'none';
                            chevDown.style.display = 'block';
                            currentlyOpenItem = null;
                        }
                    });
                });

                // hide content when clicking outside element
                document.addEventListener('click', function(event) {
                    const target = event.target;

                    if (!Array.from(accordionItems).some(item => item.contains(target))) {
                        accordionItems.forEach(function(element) {
                            let accordionContent = element.querySelector('#accordion-content');
                            let chevUp = element.querySelector('.bx-chevron-up');
                            let chevDown = element.querySelector('.bx-chevron-down');

                            accordionContent.style.display = 'none';
                            chevUp.style.display = 'none';
                            chevDown.style.display = 'block';
                        });

                        currentlyOpenItem = null;
                    }
                });
            });

            function redirect(url) {
                window.location=`https://${url}`;
            }

            </script>
        </div>
    </div>
</div>
<!----------------------------- end of home_faq ---------------------> 


<x-banner-send-message></x-banner-send-message>
<!----------------------------- end of home_faq ---------------------> 
<script>
    function scrollToSection() {
        var targetSection = document.getElementById('section1_learn_more');
        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
</script>
@endsection