<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brgy. East Ormoc City, Leyte</title>
    <link rel="website icon" href="background/logo3.png">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <div class="header">
        <div class="header-box1">
            <img src="background/logo2.png" alt="Logo">
        </div>
        <div class="header-box2">
            <h1>Health Information</h1>
        </div>
        <div class="header-box3">
            <h1 onclick="terms()">Register</h1>
        </div>
        <div class="header-box4">
            <h1>Feedback</h1>
        </div>
        <div class="header-box4">
            <h1 onclick="about()">About</h1>
        </div>
        <!-- This is in the header. This will only be display in mobile mode(Start) -->
        <div class="header-mobile-box">
            <h1 onclick="option()">≡</h1>
        </div>
        <!-- This is in the header. This will only be display in mobile mode(End) -->
    </div>

    <div class="container1">
        <div class="con-wrap">
            <div class="con-left">
                <div class="con-left-text1">
                    <h1>Brgy. East</h1>
                </div>
                <div class="con-left-text2">
                    <p>- Your body hears everything your mind says. Stay positive, <br>stay healthy -</p>
                </div>
                <div class="con-left-box">
                    <button onclick="log()">Login</button>
                </div>
            </div>
            <div class="con-right">
                <!-- Background Picture -->
            </div>
        </div>
        <div class="con2-wrap">
            <div class="con2-box">
                <div class="con2-box-pic">
                    <!-- Picture -->
                </div>
                <div class="con2-box-text">
                    <h1>Informed Decision Making</h1>
                </div>
                <div class="con2-box-p">
                    <p>Access to accurate health information allows individuals to make informed decisions about their health</p>
                </div>
            </div>
            <div class="con2-box">
                <div class="con2-box-pic2">
                    <!-- Picture -->
                </div>
                <div class="con2-box-text">
                    <h1>Empowerment</h1>
                </div>
                <div class="con2-box-p">
                    <p>Knowledge about one's health fosters a sense of empowerment, enabling individuals to actively participate in their healthcare decisions</p>
                </div>
            </div>
            <div class="con2-box">
                <div class="con2-box-pic3">
                    <!-- Picture -->
                </div><br>
                <div class="con2-box-p">
                    <p>Overall, health information plays a pivotal role in promoting individual and public health, empowering individuals, and advancing healthcare systems and practices</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-box1">
            <h1>© 2024 All rights reserved</h1>
        </div>
        <div class="footer-box2">
            <img src="icon/icons8-telephone-50.png" alt="Telephone">
            <h1>Telefax: +63 970 900 8146</h1>
        </div>
        <div class="footer-box2">
            <img src="icon/icons8-email-24.png" alt="Email">
            <h1>brgyeast.oc@gmail.com</h1>
        </div>
        <div class="footer-box2">
            <img src="icon/icons8-location-50.png" alt="address">
            <h1>Brgy. East, Ormoc City, Philippines 6541</h1>
        </div>
    </div>
    

    <!-- This is in the header. This will only be display in mobile mode when clicking the option button(Start) -->
    <div class="header-mobile-box2">
        <div class="header-mobile-box2-button" onclick="terms()">
            <img src="icon/icons8-register-50 (1).png" alt="Register">
            <h1>Register</h1>
        </div>
        <div class="header-mobile-box2-button">
            <img src="icon/icons8-feedback-50.png" alt="Feedback">
            <h1>Feedback</h1>
        </div>
        <div class="header-mobile-box2-button" onclick="about()">
            <img src="icon/icons8-about-24.png" alt="About">
            <h1>About</h1>
        </div>
        <div class="header-mobile-box2-button-close" onclick="cl()">
            <h1>⇋</h1>
        </div>
    </div>
    <!-- This is in the header. This will only be display in mobile mode when clicking the option button(End) -->

    <!-- This will be displayed when the user click the login button(Start) -->
    <div class="login-con">
        <div class="formBox">
            <div class="form">
               <button id="cancel-form" onclick="cancel_form()">
                   <h1>×</h1>
                </button>  
                <h2>Login</h2>
                <div class="inputBox">
                    <input type="text" id="email" required>
                    <span>Email/Brgy ID no.</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" id="pwd" required>
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#" onclick="forgot()">forgot your password?</a><br>
                    <a href="#" onclick="create()">Don't have an account?</a>
                </div>
                <input type="submit" id="login" onclick="login()" value="Login">
            </div> 
        </div>    
    </div>
    <!-- This will be displayed when the user click the login button(End) -->

    <!-- This will be displayed when the user click the register button(Start) -->
    <div class="register-con">
        <div class="formBox">
            <div class="form">
               <button id="cancel-form" onclick="register_cancel_form()">
                   <h1>×</h1>
                </button>  
                <h2>Register</h2>
                <div class="inputBox">
                    <input type="text" id="lname" required>
                    <span>Lastname</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" id="fname" required>
                    <span>Firstname</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" id="mname" required>
                    <span>Middlename(Optional)</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <select name="suffix" id="suffix" required>
                        <option value="None">None</option>
                        <option value="Sr.">Sr.</option>
                        <option value="Jr.">Jr.</option>
                    </select>
                    <br>
                    <span>Suffix</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#"></a>
                </div>
                <input type="submit" id="login" onclick="next1()" value="Next">
            </div> 
        </div>    
    </div>
    <!-- This will be displayed when the user click the register button(End) -->

    <!-- This is for loader(Start) -->
    <div class="loader-box">
        <div class="loader">
            <div></div>
        </div>
    </div>
    <!-- This is for loader(End) -->

    <!-- This is the terms and conditions agreement -->
    <div class="terms-con">
        <div class="terms-box1">
            <div class="terms-box1-title">
                <h1 onclick="read()">Terms And Conditions</h1>
            </div>
            <button onclick="reg()">Agree</button>
            <button onclick="disagree()">Disagree</button>
        </div>
    </div>
    <!-- This is the terms and conditions agreement -->
    <div class="read-tc">
        <div class="read-tc-box">
            <div class="read-title">
                <h1>Terms and Conditions</h1>
            </div>
            <div class="read-write">
                <p>The terms of a Barangay Health Information System (BHIS) typically outline the rights and responsibilities of users accessing and utilizing the system. While specific terms may vary depending on the provider and jurisdiction, here's an overview of what they may include:</p><br><br>
                <p>
                <b>1.Acceptance of Terms:</b> Users are required to agree to the terms and conditions before accessing the BHIS. This indicates their understanding and acceptance of the rules and guidelines set forth.<br><br>
                <b>2.Purpose of the System:</b> The terms may state the intended purpose of the BHIS, which is typically to facilitate the management, analysis, and dissemination of health-related information within the barangay or local community.<br><br>
                <b>3.User Registration:</b> Procedures for user registration, including providing accurate information, creating a secure password, and maintaining the confidentiality of login credentials.<br><br>
                <b>4.Access and Use:</b> Guidelines for accessing and using the BHIS, including any eligibility criteria, permitted activities, and prohibited actions. This section may also specify user responsibilities, such as ensuring the accuracy and integrity of data entered into the system.<br><br>
                <b>5.Data Privacy and Security:</b> Policies regarding the collection, storage, protection, and use of personal and health-related data within the BHIS. This typically includes measures to safeguard confidentiality, prevent unauthorized access, and comply with applicable data protection laws.<br><br>
                <b>6.Intellectual Property:</b> Statements regarding the ownership and use of intellectual property rights associated with the BHIS, including software, databases, and content. Users may be prohibited from reproducing, modifying, or distributing system components without authorization.<br><br>
                <b>7.Liability and Disclaimers:</b> Limitations of liability for the BHIS provider, including disclaimers of warranties and indemnification clauses. Users are often advised that the provider is not liable for any damages or losses arising from system use, except in cases of willful misconduct or gross negligence.<br><br>
                <b>8.Termination of Access:</b> Conditions under which access to the BHIS may be terminated or suspended, such as violation of the terms of use, security breaches, or non-compliance with registration requirements.<br><br>
                <b>9.Updates and Modifications:</b> Procedures for updating the terms of service and notifying users of changes. Users may be informed of updates through email notifications, website announcements, or within the BHIS interface.<br><br>
                <b>10.Governing Law and Jurisdiction:</b> The jurisdiction and laws that govern the interpretation and enforcement of the terms of service. This typically specifies the applicable laws of the country or region where the BHIS is operated.<br><br>
                <b>11.Contact Information:</b> Information on how users can contact the BHIS provider for inquiries, technical support, or reporting issues related to system access or functionality.<br><br><br><br>
                By agreeing to the terms of the BHIS, users acknowledge their commitment to adhering to these guidelines and regulations while using the system. It's important for users to review these terms carefully before proceeding with access to ensure compliance and understanding.
                </p><br><br><br><br><br>

                <p>
                The conditions of a Barangay Health Information System (BHIS) typically outline the requirements, limitations, and expectations associated with its use. Here's an overview of common conditions that may be included: <br><br><br>
                <b>1.Acceptance of Conditions:</b> Users are required to accept the conditions outlined before accessing the BHIS. This signifies their agreement to comply with the terms set forth.<br><br>
                <b>2.User Eligibility:</b> Conditions specifying who is eligible to access and use the BHIS, which may include barangay health workers, local government officials, healthcare professionals, and authorized personnel.<br><br>
                <b>3.User Registration:</b> Requirements for user registration, including providing accurate personal information, agreeing to data privacy policies, and creating secure login credentials.<br><br>
                <b>4.Authorized Use:</b> Conditions regarding the permitted use of the BHIS, such as accessing and inputting health information, generating reports, and utilizing system features for healthcare management purposes within the barangay.<br><br>
                <b>5.Confidentiality and Data Privacy:</b> Conditions outlining the protection of sensitive health information stored within the BHIS, including measures to maintain confidentiality, secure data transmission, and comply with relevant data protection laws and regulations.<br><br>
                <b>6.Data Integrity:</b> Conditions ensuring the accuracy, completeness, and integrity of data entered into the BHIS, as well as measures to prevent unauthorized modification or tampering with information.<br><br>
                <b>7.Security Measures:</b> Conditions regarding the implementation of security measures to safeguard the BHIS against unauthorized access, data breaches, malware attacks, and other security threats.<br><br>
                <b>8.Compliance with Laws and Regulations:</b> Conditions requiring users to comply with applicable laws, regulations, and ethical standards governing the use of health information systems, including those related to data protection, patient privacy, and healthcare practice.<br><br>
                <b>9.System Maintenance and Updates:</b> Conditions regarding system maintenance, updates, and downtime, including notifications to users about scheduled maintenance activities and any impact on system availability.<br><br>
                <b>10.Termination of Access:</b> Conditions under which access to the BHIS may be terminated or suspended, such as violations of the terms of use, security breaches, or failure to adhere to registration requirements.<br><br>
                <b>11.Liability and Indemnification:</b> Conditions limiting the liability of the BHIS provider for damages, losses, or claims arising from system use, except in cases of willful misconduct or gross negligence. Users may also agree to indemnify the provider against any claims or liabilities resulting from their actions or use of the system.<br><br>
                <b>12.Governing Law and Jurisdiction:</b> Conditions specifying the governing law and jurisdiction applicable to the BHIS, which may include the laws of the country or region where the system is operated.<br><br>
                By agreeing to these conditions, users acknowledge their understanding and acceptance of the responsibilities, limitations, and expectations associated with using the BHIS. It's essential for users to review and comply with these conditions to ensure the effective and ethical use of the system for healthcare management within the barangay.<br><br>
                </p>
            </div>
            <div class="read-button">
                <h1 onclick="cl2()">Close</h1>
            </div>
        </div>
    </div>
    <!-- This is the terms and conditions -->

    <!-- About (Start) -->
    <div class="about-con">
        <div class="about-con-box">
            <div class="about-cancel">
                <img src="icon/icons8-cancel-48.png" alt="Cancel" onclick="cancel_about()">
            </div>
            <div class="about-con-box-p">
               <div class="about-con-box-title">
                    <h1>About</h1>
               </div>
               <div class="about-con-box-content">
                    <p>
                        The Barangay Health Information System (BHIS) is a digital platform designed to streamline the management of health-related data at the barangay (village or community) level. It aims to facilitate the efficient collection, storage, retrieval, and analysis of health information to support decision-making and improve healthcare services within the community.<br><br>
                        BHIS provides functionalities such as:<br>
                        &nbsp &nbsp • Management of patient records, including demographic information, medical history, and problems.<br>
                        &nbsp &nbsp • Scheduling and tracking of appointments for healthcare services.<br>
                        &nbsp &nbsp • Generation of health reports for monitoring community health trends and planning interventions.<br><br>
                        By centralizing health information and making it accessible to authorized personnel, BHIS empowers barangay health workers and officials to better understand the health needs of their community, allocate resources effectively, and deliver targeted healthcare services.
                    </p>
               </div>
            </div>
        </div>
    </div>
    <!-- About (End) -->
 
<script src="javaScript/jquery.js"></script>
<script src="javaScript/sweetalert.js"></script>
<script src="javaScript/function/index.js"></script>
<script src="javaScript/function/register.js"></script>
<script src="javaScript/function/login.js"></script>
</body>
</html>