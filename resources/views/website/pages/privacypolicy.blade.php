@extends('website.layout.ruralnet')

@section('content')
<div class="privacy_policy_banner">
    <div class="container">
        <p>Data Privacy Policy</p>
        <img src="{{ asset('images/CashKO_Hand-12.png') }}">
    </div>
</div>
<div class="container">
    <div class="privacy_policy_content">
        <ul>
            <li class="lead">I.OBJECTIVE</li>
            <li class="desc">Data Privacy is both a business and regulatory requirement. RuralNet and CashKo Insurance Brokerage commit to safeguard all Personal Data under its custody and control. As such, it is imperative for its employees including contractors, partners and third parties contracted by RuralNet and CasKo Insurance Brokerage to implement adequate data protection measures across systems, applications and other components that are directly related to the collection; use, storage and transmission; retention; and disposal and destruction of Personal Data.</li>
            {{-- SCOPE --}}
            <li class="lead">II.SCOPE</li>
            <li class="desc">This policy covers RuralNet and CashKo Insurance Brokerage, henceforth referred to as the “Company”. This also applies to all employees including contractors, partners, vendors and contracted third parties as well as customers who are directly involved in processing personal data. The Personal Data coverage includes, but is not limited to the data of employees, applicants, customers and insurance policy holders.</li>
            {{-- DEFINATION --}}
            <li class="lead">III.DEFINITION OF TERMS</li>
            <li class="desc">The following key terms used throughout this document are defined for clarification</li>
            {{-- CHILD DATA SUBJECT --}}
            <li class="child"><b>A. Data Subject</b></li>
            <li class="child-desc">Refers to an individual whose personal, sensitive personal or privileged information is processed by the Company.</li>
            {{-- CHILD PERSONAL DATA --}}
            <li class="child"><b>B. Personal Data</b></li>
            <li class="child-desc">Personal Data Refers to all types of personal information, i.e personal identifiable, sensitive personal and privileged, as defined below:</li>
            <li class="child"><b>a. Personal Identifiable Information (PII) or Personal Information</b></li>
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
            
            <li class="child"><b>b. Priviledged Information</b></li>
            <li class="child-desc">Refers to any and all forms of data which under the Rules of Court and other pertinent laws constitute privileged communication.</li>
            <li class="child"><b>c. Sensitive Personal Information</b></li>
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
            <li class="child underlined-child" style="text-decoration: underline"><b>PROCESSING OF PERSONAL DATA</b></li>
            <li class="child-desc">The Company is processing of Personal Data within the data life cycle, from collection to disposal and destruction, adheres with the principle of transparency, legitimate use and proportionality. It upholds the Rights of the Data Subject in the processing of Personal Data.</li>
            <li class="child"><b>1.HOW DO WE CREATE AND COLLECT YOUR PERSONAL DATA?</b></li>
            <li class="child-desc-b">1.1 The Company provides to customers and partners a statement to inform its data subjects what, how and why their personal data is being collected from them including, where applicable, the automated processing for profiling, or processing for direct marketing and data sharing these will be disclosed as part of the Privacy Notice is sometimes referred to as a privacy statement, a fair processing statement, or a privacy policy.</li>
            <li class="child-desc-c">a. This Privacy Notice, referred to as privacy policy, will be posted in the website and online facilities of RuralNet.</li>
            <li class="child-desc-c">b. In the event that collected Personal Data will be used for purpose or shared with outside entities it is necessary that consent from the Data Privacy Officer must be obtained.</li>
            <li class="child-desc-c">c. Privacy notice will be placed if entities need to download any reports from RuralNet website and online facilities.</li>
            <li class="child-desc-c">d. Privacy notice will be placed integrated into the Company’s physical forms, where customer’s personal data is collected.</li>
            <li class="child-desc">1.2 Collection must be for a declared, specified and legitimate purpose.</li>
            <li class="child-desc-c">a. Collection of personal data, both Personally Identifiable Information (PII)and Sensitive Personal Information (SPI), about an individual will only be limited to those necessary, relevant and not excessive for the business purposes.</li>
            <li class="child-desc-c">b. Manner of collection of PII and SPI that will be employed include accomplishment of online forms and/or hard copy service forms.</li>
            <li class="child-desc-c">c. Collection of Personal Data about employee, applicants, customers, insurance policy holders and partners will rely to the fullest extent possible on the original source (e.g., employee or customer applications). The use of secondary copies (e.g., employee created spreadsheets, databases, and printed reports) of Personal Data should be limited, with the exclusion of the renewal of policies and services previously applied for.</li>
            <li class="child"><b>2. HOW DO WE STORE AND TRANSFER YOUR INFORMATION?</b></li>
            <li class="child-desc-b">2.1 Collected Personal Data, whether in electronic or hard copy, will be safeguarded against loss, unauthorized access and data leakage through adequate physical and technical security controls. All digitally processed Personal Data are encrypted when at rest and in transit.</li>
            <li class="child-desc-b">2.2 Storage of Personal Data kept in digital format will also be protected against unlawful or unauthorized processing.</li>
            <li class="child-desc-b">2.3 Personal Data will only be stored for as long as is necessary, in consideration of the purposes for which data was collected and the applicable legal storage periods.</li>
            <li class="child-desc-c">a. Personal Data stored in temporary storage will be erased immediately once intention for temporary storage has been satisfied.</li>
            <li class="child-desc-c">b. Personal Data with expired storage periods will be erased in a permanent and secure manner.</li>
            <li class="child"><b>3. HOW DO WE DISTRIBUTE AND RETAIN YOUR INFORMATION?</b></li>
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
            <li class="child"><b>4.HOW DO WE DISPOSE AND DESTROY YOUR INFORMATION?</b></li>
            <li class="child-desc-b">4.1 Personal Data will be disposed of or discarded in a secure manner that would prevent further processing, unauthorized access, or disclosure to any other party or the public, or prejudice the interests of the data subjects.</li>
            <li class="child-desc-c">a. Steps to identify Personal Data which can or cannot be destroyed will be observed based on specified retention periods or as may be required by court order, litigation requirements, or other such requirements by regulatory authorities.</li>
            <li class="child-desc-c">b. Departments who have been approved to create secondary copies of Personal Data about employees, applicants, customers, insurance policy holders and partner (e.g. employee- created spreadsheets, databases and printed reports) are responsible for prompt destruction of that information when it is no longer necessary to complete legitimate purpose or business activity.</li>
            <li class="child-desc-c">c. Justified holding of any information on criminal conviction of the owner of Personal Data will follow secure disposal or destruction policy once the information is no longer required due to resolution of case.</li>
            <li class="child-desc-c">d. Disposal or destruction of Personal Data is allowed if status of relationship of data subject with RuralNet has been changed (e.g. termination of relationship) and data becomes irrelevant to the service activities pertaining to the data subject, unless there are retention requirements as per 4.1.a.</li>
            <li class="child" style="text-decoration: underline"><b>SECURITY MEASURES</b></li>
            <li class="child"><b>1. HOW DO OUR ORGANIZATIONAL SECURITY MEASURES WORK?</b></li>
            <li class="child-desc-b">1.1 An appropriate level of leadership and resources to support the leadership, who are accountable for the Privacy and Data Protection Program, shall be established. The level of leadership may include, as appropriate the creation of a senior governing body (e.g. committee), who will provide support and oversight function on the effective implementation of the Privacy and Data Protection Program.</li>
            <li class="child-desc-b">1.2 Designation of Data Privacy Officer (DPO) for RuralNet and CashKo Insurance Brokerage.</li>
            <li class="child-desc-c" style="text-decoration: underline">Data Privacy Officer (DPO)</li>
            <li class="bullet-child-a">The designated DPO will be the Information Security Officer. The DPO shall act independently in the performance of his or her functions and shall be given sufficient degree of autonomy.  The DPO shall assume the following roles:</li>
            <li class="bullet-child-a">Establish and sustain a privacy program at the Company.</li>
            <li class="bullet-child-a">Maintain and supervise enforcement of the privacy policy.</li>
            <li class="bullet-child-a">Report to the RuralNet Top Management and Board of Directors on the status of the Privacy Program.</li>
            <li class="bullet-child-a">Monitor the legal and regulatory environment affecting the field staff, customers, contractors, vendors and third parties’ privacy.</li>
            <li class="bullet-child-a">Facilitate the development and establishment of privacy roles and responsibilities throughout the organization to ensure that privacy practices are communicated, understood and implemented.</li>
            <li class="bullet-child-a">Perform periodic assessments of privacy risk.</li>
            <li class="bullet-child-a">Sponsor or direct privacy control correction or improvement efforts when needed or the development and implementation of new privacy controls.</li>
            <li class="bullet-child-a">Review and process exception requests for the privacy policy.</li>
            <li class="bullet-child-a">Oversee the notification process required in the event of a breach in privacy.</li>
            <li class="bullet-child-a">Maintain this Policy.</li>
            <li class="bullet-child-a">Facilitate the sharing of ideas, tools, procedures and approaches relating to privacy company-wide.</li>
            <li class="bullet-child-a">Ensure compliance by the Personal Information Controller (PIC) or Personal Information Processor (PIP) with the Philippine Data Privacy Act (PDPA), its IRR, issuances by the National Privacy Commission (NPC), and other applicable laws and regulations relating to privacy and data protection.</li>
            <li class="bullet-child-a">The opinion of the DPO must be given due weight. In case of disagreement and should the PIC or PIP choose not to follow the advice of the DPO, it is recommended as good practice to document the reasons therefore.
            </li>
            <li class="child-desc-c">1.3 Effective implementation of this policy is the responsibility of all employees, partners, contractors, vendors and contracted third parties including customers.  The key roles and responsibility to uphold the requirements in this policy is attached as an Annex on the contract or agreement.</li>
            <li class="child-desc-c">1.4 All employees with access to Personal Data shall operate and hold Personal Data under strict confidentiality if the same is not intended for public disclosure.</li>
            <li class="child-desc-c">1.5 To properly protect Personal Data and meet legal obligations, this Data Privacy Policy as well as the Data Privacy Framework shall be monitored, assessed and revised, as needed, to allow for improvements and remain responsive to data privacy best practices and technology developments.</li>
            <li class="child-desc-c">1.6 Record and document activities carried out by the DPO, or the organization itself, to ensure compliance with the DPA, its IRR and other relevant policies.</li>
            <li class="child-desc-b"><b>2. WHAT ARE OUR PHYSICAL SECURITY MEASURES?</b></li>
            <li class="child-desc-c">These measures provide for the actual design of the facility, the physical arrangement of equipment and furniture, the permissible modes of transfer and the schedule and means of retention and disposal of data.</li>
            <li class="child-desc-c">2.1 The layout of the office spaces and work stations as well as the physical arrangement of furniture and equipment of RuralNet and CashKO Insurance Brokerage will be periodically evaluated and adjusted in order to provide privacy to anyone processing Personal Data taking into consideration accessibility to unauthorized person.</li>
            <li class="child-desc-c">2.2 Policies and procedures will be implemented to monitor and limit access to and activities in the work area of workstation, including the proper use of and access to electronic data and devices.</li>
            <li class="child-desc-c">2.3 Policies and procedures regarding the transfer, removal, disposal and re-use of electronic media, to ensure appropriate protection of Personal Data will be imposed to all involved in the processing of personal data.</li>
            <li class="child-desc-c">2.4 Policies and procedures that prevent the mechanical destruction of files and equipment shall be established to secure, as far as practicable, physical resources and infrastructure used in processing Personal Data against natural disaster, power disturbances, external access and other similar threats.</li>
            <li class="child-desc-b">WHAT ARE OUR TECHNICAL SECURITY MEASURES?</li>
            <li class="child-desc-c">Technical security involves the technological aspect of security in protecting Personal Data which includes.</li>
            <li class="child-desc-b">1.1 Safeguard of computer network against accident, unlawful or unauthorized usage that will affect data integrity or hinder the functioning or availability of the system and unauthorized access.</li>
            <li class="child-desc-b">1.2 Ensure and maintain the confidentiality, integrity, availability and resilience of Personal Data processing systems and services.</li>
            <li class="child-desc-b">1.3 Restore the availability and access to Personal Data in a timely manner in the event of a physical or technical incident.</li>
            <li class="child-desc-b">1.4 Regularly test, assess and evaluate the effectiveness of security measures.</li>
            <li class="child-desc-b">1.5 Control and limit access on digitally processed Personal Data to authorized person through encryption whether it is at rest or while in transit, employ authentication process and other technical security measure.</li>
            <li class="child-desc-b">1.6 Use of online access to process Personal Data should employ an identity authentication method that uses a unique user and password for log-in.</li>
            <li class="child" style="text-decoration: underline"><b>BREACH NOTIFICATION AND REPORT</b></li>
            <li class="child-desc-b"><b>1. HOW DOES BREACH NOTIFICATION WORKS?</b></li>
            <li class="child-desc-c">1.1 All employees, contractors, partners and providers involved in the processing of Personal Data are enjoined to report any signs of possible data breach or Security Incident. In the event that such signs are discovered, the facts and circumstances need to be reported to the DPO within twenty-four (24) covers from its discovery for the verification as to whether or not a breach that occurred requires notification under the Data Privacy Act as well as for the determination of the relevant circumstances surrounding the reported breach and/or Security Incident.</li>
            <li class="child-desc-c">1.2 For breach requiring notification, the DPO shall, within seventy – two (72) hours upon receipt of facts or circumstances, notify the National Privacy Commission and the affected Data subjects following the procedures prescribed by the DPA.</li>
            <li class="child-desc-b"><b>2. HOW DO WE DOCUMENT REPORTS ON DATA BREACH?</b></li>
            <li class="child-desc-c">2.1 All Security Incidents and Personal Data breaches shall be documented through written reports, including those not covered by the notification requirements and summary of the reports shall be submitted by DPO to NPC annually as follows:</li>
            <li class="child-desc-c">a.Personal Data Breaches with the facts surrounding an incident, the effects of such incident and the remedial actions taken by RuralNet to address the data breach.</li>
            <li class="child-desc-c">b. Aggregated data of Security Incidents not involving Personal Data.
            </li>
            <li class="child-desc-b"><b>3. HOW DO WE CORRECT AND PREVENT DATA BREACHES?</b></li>
            <li class="child-desc-b"><b>3.1 Ransomware –</b> is a type of malicious software from cryptovirology that threatens to publish the victim's data or perpetually block access to it unless a ransom is paid.</li>
            <li class="child-desc-b" style="text-decoration: underline">Corrective Measure</li>
            <li class="child-desc-b">Recovery consists of removing the ransom Trojan and transferring data from the backup storage. If ransom Trojan cannot be removed, data will be restored from daily record backups.</li>
            <li class="child-desc-b" style="text-decoration: underline">Preventive Measure</li>
            <li class="child-desc-b">1. Daily backup of data base, application, domain server.</li>
            <li class="child-desc-b">2. Enable and personalize anti-spam settings.</li>
            <li class="child-desc-b">3. Orientation of users to avoid opening of suspicious attachments from unknown sender.</li>
            <li class="child-desc-b">4. Up-to-date operating systems, antivirus and other software.</li>
            <li class="child-desc-b">5. Browser add-on to block pop-ups.</li>
            <li class="child-desc-b"> 3.2 <b>Password attacks –</b> Password attacks are combination of brute force attacks that are used to       	gain access to insecure passwords. A hacker uses a program that tries multiple passwords to get 	access to a user’s data until a password work. </li>
            <li class="child-desc-b" style="text-decoration: underline">Corrective Measure</li>
            <li class="child-desc-b">Restore a backup for the domain server.  A change password will be administered by the IT Administrator to users affected by the breach.</li>
            <li class="child-desc-b" style="text-decoration: underline">Preventive Measure</li>
            <li class="child-desc-b">1. Login Password Retry Lockout</li>
            <li class="child-desc-b">The ASA (firewall) allows an administrator to lock out a local user account after set of unsuccessful login attempts. Once a user is locked out, the account is locked until the administrator unlocks it.</li>
            <li class="child-desc-b">Authorized users can lock themselves out of a device if the number of unsuccessful login attempts is reached. In addition, a malicious user can create a denial of service (DoS) condition with repeated attempts to authenticate with a valid username.</li>
            <li class="child-desc-b"> 3.3 <b>Phishing –</b> Email or phone calls that seem official to gain access or personal information is 	called phishing. They frequently take the guise of known, credible entities—such as a person’s 	bank. Various levels of misrepresentation to outright deception are employed to defraud or gain 	information.</li>
            <li class="child-desc-b" style="text-decoration: underline">Corrective Measure</li>
            <li class="child-desc-b">1.  Immediate disconnection of the device from the internet.</li>
            <li class="child-desc-b">A ransomware will be installed on the computer and will be placed offline.</li>
            <li class="child-desc-b">For wired connections, the internet cable from the computer will be unplugged and Wi-Fi networks will be disconnected.</li>
            <li class="child-desc-b">2. Change RuralNet account credentials.</li>
            <li class="child-desc-b">Change passwords for all online accounts must be done, especially email, online banking, and           social media, and do it from a clean computer.</li>
            <li class="child-desc-b">It’s also critical to use different passwords for each account to make it difficult for cyber criminals to steal identity.
            </li>
            <li class="child-desc-b">3. Scan systems for malware
            </li>
            <li class="child-desc-b">After changing passwords, will run a complete anti-malware scan of the system to get rid of self-replicating malware that could spread to the network and the devices connected to it.</li>
            <li class="child-desc-b">Key points to remember:</li>
            <li class="child-desc-b">Scan using offline software
                Run a second scan using a different program
                No program should run if scanning is not completed. </li>
            <li class="child-desc-b"><b>Prevention:</b></li>
            <li class="child-desc-b">1. Orientation to employees on phishing incidents.</li>
            <li class="child-desc-b">2. Installation of latest security patches and updates for all system.</li>
            <li class="child-desc-b">3. Deployment of SPAM filters to detect viruses and blank senders.</li>
            <li class="child-desc-b">4. Deployment of web filter to block malicious websites</li>
            <li class="child-desc-b" style="text-decoration: underline"><b>MONITORING AND ENFORCEMENT </b></li>
            <li class="child-desc-b">To monitor compliance with this policy and to identify area for improvement in response inquiries and /or complaints regarding  	Personally Identifiable Information (PII) that is subject to this policy, the following shall be observed:</li>
            <li class="child-desc-b">1. Regularly test and verify management of Personal Data consistent with this policy.</li>
            <li class="child-desc-b">2. Supervise third party compliance with contractual obligations relating to data privacy.</li>
            <li class="child-desc-b">3. Periodic conduct of risk-assessment process that includes follow-up procedures to verify accuracy of privacy practices and controls implemented by concerned organizational unit and/or employees, partners, contractors and third party providers.</li>
            <li class="child-desc-b">4. Monitor corrections or improvements to deficiencies in control or policies to verify that compliance finding are addressed in a timely manner.</li>
            <li class="child-desc-b">5. Handle privacy concerns, issues or complains reported by data subjects in a timely manner. Privacy complaints and action steps taken will be documented and corrective actions reviewed for patterns and root causes.</li>
            <li class="child-desc-b">6. Train al employees to recognize and report potential privacy event, provide awareness on the importance of reporting any possible privacy event in a timely manner.</li>
            <li class="child-desc-b">A current version of this document is shared to all members of staff under RuralNet.</li>
            <li class="lead" style="text-decoration: underline"><b>ROLES AND RESPONSIBILITIES:</b></li>
            <li class="child-desc-c">1. Legal 
                The Legal Counsel will provide needed legal support related to the privacy, which include among others:
                </li>
            <li class="child-desc-c">a. Interpretations of legal requirements related to privacy.</li>
            <li class="child-desc-c">b. Advise the DPO on exception request for the privacy policy.</li>
            <li class="child-desc-c">c. Review agreements for third party disclosures of Personal Data about employees, field staff, customers, contractors, vendors and third parties.</li>
            <li class="child-desc-c">Advice and support negotiation and drafting of appropriate privacy language for agreements with Third Parties.</li>
            <li class="child-desc-b"><b>Human Resource</b></li>
            <li class="child-desc-c">a. The HR will support the effective implementation of this policy through the following initiatives:</li>
            <li class="child-desc-c">b. Organized (logistics, schedule, attendance of participants) training and awareness campaign on privacy policies and business requirements with the support from the Data Privacy Office of RuralNet for all employees especially those who are directly engaged in the processing of personal data.</li>
            <li class="child-desc-c">b. Seek the advice of the DPO in establishing privacy accountability within RuralNet and communicating appropriate disciplinary guidelines.</li>
            <li class="child-desc-c">c. Evaluate significant changes to existing process related to handling of employees’ Personal Data in coordination with the DPO and Legal Counsel.</li>
            <li class="child-desc-b"><b>3. Operations and Business Departments </b></li>
            <li class="child-desc-b">Ensure compliance to this data privacy policy through the following activities among others:</li>
            <li class="child-desc-c">a. Verify data subject identity to make sure that PII and SPI is shared only with legitimate data subject or authorized representative.</li>
            <li class="child-desc-c">b. Establish and implement rules for appropriate sharing of Personal Data with callers</li>
            <li class="child-desc-c">c. Recognize privacy events which represent a potential breach of Personal Data privacy and report promptly to the department head.</li>
            <li class="child-desc-c">d. Require privacy training as recommended by the Data Privacy Office to ensure that each employee has knowledge and understanding of the responsibility of RuralNet to protect Personal Data under its custody and control, the general requirements of this Data Privacy Policy and the significance that data privacy breaches may have to the brand and reputation of RuralNet.</li>
         </ul>
    </div>
</div>  
<x-banner-send-message></x-banner-send-message>  
@endsection