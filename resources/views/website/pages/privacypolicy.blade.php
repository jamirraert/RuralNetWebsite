@extends('website.layout.ruralnet')

@section('content')
<div class="privacy_policy_banner">
    <div class="container">
        <p>Data Privacy Policy</p>
        <img src="{{ asset('images/CashKO_Hand-12.png') }}">
    </div>
</div>
<div class="privacy_policy_content">
    <div class="container">
        <ul>
            <li class="lead">I.OBJECTIVE</li>
            <li class="desc">Data Privacy is both a business and regulatory requirement. RuralNet and CashKo Insurance Brokerage commit to safeguard all Personal Data under its custody and control. As such, it is imperative for its employees including contractors, partners and third parties contracted by RuralNet and CasKo Insurance Brokerage to implement adequate data protection measures across systems, applications and other components that are directly related to the collection; use, storage and transmission; retention; and disposal and destruction of Personal Data.</li>
            {{-- SCOPE --}}
            <li class="lead">II.SCOPE</li>
            <li class="desc">This policy covers RuralNet and CashKo Insurance Brokerage, henceforth referred to as the “Company”. This also applies to all employees including contractors, partners, vendors and contracted third parties as well as customers who are directly involved in processing personal data. The Personal Data coverage includes, but is not limited to the data of employees, applicants, customers and insurance policy holders.</li>
            {{-- DEFINATION --}}
            <li class="lead">III.DEFINATION</li>
            <li class="desc">The following key terms used throughout this document are defined for clarification</li>
            {{-- CHILD DATA SUBJECT --}}
            <li class="child">A. Data Subject</li>
            <li class="child-desc">Refers to an individual whose personal, sensitive personal or privileged information is processed by the Company.</li>
            {{-- CHILD PERSONAL DATA --}}
            <li class="child">B. Personal Data</li>
            <li class="child-desc">Personal Data Refers to all types of personal information, i.e personal identifiable, sensitive personal and privileged, as defined below:</li>
            <li class="child">a. Personal Identifiable Information (PII) or Personal Information</li>
            <li class="child-desc">Any information, whether recorded in a material form or not, from which the identity of an individual is apparent or can be reasonably and directly ascertained or when put together with other information would directly and certainly identify an individual. As per the Company, PII includes, but are not limited to, first name, middle name and last name in combination with any one or more of the following data elements:</li>
            <li class="bullet-child">Name</li>
            <li class="bullet-child">Date and Place of Birth</li>
            <li class="bullet-child">Specimen Signature or Biometrics(fingerprint)</li>
            <li class="bullet-child">Photo</li>
            <li class="bullet-child">Present Address</li>
            <li class="bullet-child">Permanent Address</li>
            <li class="bullet-child">Nationality</li>
            <li class="bullet-child">Nature of Work; Source of Funds or Income</li>
            <li class="bullet-child">Name of Employer or Nature of Self-Employment or Business</li>
            <li class="bullet-child">Contact Number</li>
            
            <li class="child">b. Priviledged Information</li>
            <li class="child-desc">Refers to any and all forms of data which under the Rules of Court and other pertinent laws constitute privileged communication.</li>
            <li class="child">c. Sensitive Personal Information</li>
            <li class="child-desc">This information falls to the category of personal information with higher security impact and that requires extra level of protection. In consideration of the list of defined SPIs per Section 3, part of the Implementing Rules and Regulations (IRR) of R.A. 10173 (Data Privacy Act of 2012), the following information are defined as SPIs:</li>
            
            <li class="child-desc-a">i. About an individual’s health, education, gender or any proceeding for any offense committed or alleged to have been committed by individual</li>
            <li class="bullet-child-a">Education</li>
            <li class="bullet-child-a">Police Clearance</li>
            <li class="bullet-child-a">NBI Clearance</li>
            <li class="child-desc-a">ii. Issued by government agencies peculiar to an individual</li>
            <li class="bullet-child-a">Social Security System (SSS) Number</li>
            <li class="bullet-child-a">Government Service Insurance System (GSIS) Number</li>
            <li class="bullet-child-a">Passport</li>
            <li class="bullet-child-a">Driver's License</li>
            <li class="bullet-child-a">Professional Regulation Commission (PRC) ID</li>
            <li class="bullet-child-a">Postal ID</li>
            <li class="bullet-child-a">Voter's ID</li>
            <li class="bullet-child-a">Baranggay Certification</li>
            <li class="bullet-child-a">Senior Citizen Card</li>
            <li class="bullet-child-a">Overseas Workers Welfare Administration (OWWA) ID</li>
            <li class="bullet-child-a">OFW ID</li>
            <li class="bullet-child-a">Seaman's Book</li>
            <li class="bullet-child-a">Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</li>
            <li class="bullet-child-a">Department of Social Welfare and Development Certification (DSWD)</li>
            <li class="bullet-child-a">Foreign Passport or Alien Certification of Registration (ACR) or Immigrant Certificate of Registration (ICR) for foreigners</li>
            <li class="child-desc-a">iii. Cardholder Data (Card Number, Full Track, CVV/CVC and Expiry Date)</li>
            <li class="child-desc-a">iv. User Credential(i.e User and Password, PIN/MPIN, etc)</li>
            <li class="child-desc-a">v. Integrated Bar of the Philippines ID</li>
            <li class="child-desc-a">vi. IDs issued by private companies that are duly registered with the Securities and Exchange Commission</li>
            <li class="child-desc-a">vii. Student's ID for students who are benefeciaries of remittance who are not yet of voting age (below 18 years old)</li>
            {{-- REFERENCE --}}
            <li class="lead">IV. REFERENCE</li>
            <li class="desc">
               <ul>
                  <li>R.A. 10173 or Data Privacy Act of 2012</li>
                  <li>R.A. Implementing Rules and Regulations </li>
                  <li>NPC Circular No. 16-01</li>
                  <li>NPC Advisory 2017-01</li>
               </ul>
            </li>
            {{-- POLICY --}}
            <li class="lead">V. POLICY</li>
            <li class="desc">This Privacy Policy outlines the established security and protection policies to ensure that adequate control mechanisms are in place within RuralNet’s systems, applications and other components directly related to the collection; use, storage and transmission; retention; and disposal and destruction of Personal Data. </li>
            <li class="child underlined-child"><u>PROCESSING OF PERSONAL DATA</u></li>
            <li class="child-desc">The Company is processing of Personal Data within the data life cycle, from collection to disposal and destruction, adheres with the principle of transparency, legitimate use and proportionality. It upholds the Rights of the Data Subject in the processing of Personal Data.</li>
            <li class="child">1.HOW DO WE CREATE AND COLLECT YOUR PERSONAL DATA?</li>
            <li class="child-desc-b">1.1 The Company provides to customers and partners a statement to inform its data subjects what, how and why their personal data is being collected from them including, where applicable, the automated processing for profiling, or processing for direct marketing and data sharing these will be disclosed as part of the Privacy Notice is sometimes referred to as a privacy statement, a fair processing statement, or a privacy policy.</li>
            <li class="child-desc-c">a. This Privacy Notice, referred to as privacy policy, will be posted in the website and online facilities of RuralNet.</li>
            <li class="child-desc-c">b. In the event that collected Personal Data will be used for purpose or shared with outside entities it is necessary that consent from the Data Privacy Officer must be obtained.</li>
            <li class="child-desc-c">c. Privacy notice will be placed if entities need to download any reports from RuralNet website and online facilities.</li>
            <li class="child-desc-c">d. Privacy notice will be placed integrated into the Company’s physical forms, where customer’s personal data is collected.</li>
            <li class="child-desc">1.2 Collection must be for a declared, specified and legitimate purpose.</li>
            <li class="child-desc-c">a. Collection of personal data, both Personally Identifiable Information (PII)and Sensitive Personal Information (SPI), about an individual will only be limited to those necessary, relevant and not excessive for the business purposes.</li>
            <li class="child-desc-c">b. Manner of collection of PII and SPI that will be employed include accomplishment of online forms and/or hard copy service forms.</li>
            <li class="child-desc-c">c. Collection of Personal Data about employee, applicants, customers, insurance policy holders and partners will rely to the fullest extent possible on the original source (e.g., employee or customer applications). The use of secondary copies (e.g., employee created spreadsheets, databases, and printed reports) of Personal Data should be limited, with the exclusion of the renewal of policies and services previously applied for.</li>
            <li class="child">2. HOW DO WE STORE AND TRANSFER YOUR INFORMATION?</li>
            <li class="child-desc-b">2.1 Collected Personal Data, whether in electronic or hard copy, will be safeguarded against loss, unauthorized access and data leakage through adequate physical and technical security controls. All digitally processed Personal Data are encrypted when at rest and in transit.</li>
            <li class="child-desc-b">2.2 Storage of Personal Data kept in digital format will also be protected against unlawful or unauthorized processing.</li>
            <li class="child-desc-b">2.3 Personal Data will only be stored for as long as is necessary, in consideration of the purposes for which data was collected and the applicable legal storage periods.</li>
            <li class="child-desc-c">a. Personal Data stored in temporary storage will be erased immediately once intention for temporary storage has been satisfied.</li>
            <li class="child-desc-c">b. Personal Data with expired storage periods will be erased in a permanent and secure manner.</li>
            <li class="child">3. HOW DO WE DISTRIBUTE AND RETAIN YOUR INFORMATION?</li>
            <li class="child-desc-b">3.1 Personal Data will only be processed in accordance with the expressed purpose and may not be shared, distributed, or otherwise disclosed to a third party without explicit approval of the Data Privacy Officer.</li>
            <li class="child-desc">The Company recognizes that application of this policy may be inappropriate in certain limited circumstances. Accordingly, under the circumstances listed below. RuralNet may allow disclosures of Personal Data about employees, applicants, customers, insurance policy holders and partners:</li>
            <li class="bullet-child-d">When required in response to carry out the function of public authority in accordance with a constitutionally and statutorily mandated function pertaining to law enforcement, or regulatory function including a subpoena or search warrant;</li>
            <li class="bullet-child-d">When there exist an emergency which is believed to threaten risk of harm to person or property;</li>
            <li class="bullet-child-d">When used for the needs of scientific and statistical research intended for public benefit without any activities to be carried out or decisions to be undertaken regarding the owner of personal data; and</li>
            <li class="bullet-child-d">When necessary to protect legal interests of the Company</li>
            
            <li class="child-desc">Exceptions, other than those for administrative or judicial process, are subject to evaluation and approval in writing by the Data Privacy Officer before proceeding with the actual disclosure. Requests for exceptions must be submitted in writing to the Data Privacy Officer for review and approval. Further consultation with the National Privacy Commission (NPC) of the Philippines can be initiated by the Data Privacy Officer on a case to case basis.</li>
            <li class="child-desc-b">3.2 Steps will be required to verify that Personal Data about employees, applicants, customers, insurance policy holders and partners is accurate, complete and current.</li>
            <li class="child-desc-c">a. Employees will comply with the established procedures to verify that any Personal Data being process is accurate and complete. If data is inaccurate or incomplete, it will be corrected or updated.</li>
            <li class="bullet-child">Employee will provide a profile sheet to be accomplished by the client, partners and vendors via digital or hardcopy forms.</li>
            <li class="bullet-child">Accomplished forms will be encoded to RuralNet online facilities and will be validated by the Employee by sending the information through email for confirmation.</li>
            
            <li class="child-desc-c">b. Personal Data will be obtained from authoritative sources (e.g. direct data subject), when practical, rather than from secondary sources (e.g. personal spreadsheets).</li>
            <li class="child-desc-b">3.3 Personal Data may only be disclosed to third parties, such as partners, contractors and providers when there is a legitimate reason, consent from data subject has been secured as necessary and such disclosure is covered by a Data Sharing Agreement. The Data Sharing Agreement must establish adequate safeguards for data privacy and security and upholds the rights of data subjects. Data Sharing Agreement needs to be in place with insurers and service providers.</li>
            <li class="child-desc-b">3.4 Personal Data under the custody of the company will be treated with confidentiality and will be disclosed only pursuant to a lawful purpose and to authorize recipients of such data as required by law.</li>
            <li class="child-desc-c">a. Formal requests for disclosure of Personal Data must be given by the Requesting Party along with supporting document to establish lawful purpose, e.g. subpoena</li>
            <li class="child-desc-c">b. Disclosure will only be allowed subject to the evaluation of formal request and approval of the Data Privacy Officer.</li>
            <li class="child-desc-b">3.5 Personal Data will not be retained longer than necessary for the purpose for which the information was collected or for which it is further processed or for which such longer period as may be required by applicable laws, regulation, or contractual responsibilities.</li>
            <li class="child-desc-c">a. Steps will be undertaken to keep Personal Data about employees, applicants, customers and insurance policy holders only as long as it is necessary.</li>
            <li class="child-desc-c">b. Retention of Personal Data may only be allowed for legitimate business purposes that are consistent with applicable standards or approved by appropriate government agency.</li>
            <li class="child-desc-c">c. Personal Data will not be retained in permanence for possible future use yet to be determined.</li>
            <li class="child-desc-c">d. Personal Data may be kept for a period of 5 years for the purpose of cross marketing, provision of additional services by the company and ease of re-use of services previously availed by the customer.</li>
         </ul>
    </div>
</div>  
<x-banner-send-message></x-banner-send-message>  
@endsection