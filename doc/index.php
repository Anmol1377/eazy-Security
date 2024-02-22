<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EaZy Security - Documentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css?v=2.2" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
     <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png" />

    <style type="text/css">
    body {
        color: #555;
        padding-top: 0;
        line-height: 27px;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        line-height: 1.3;
        margin-top: 45px;
        margin-bottom: 26px;
        font-weight: 500;
    }

    h1,
    h2,
    h3 {
        font-weight: 500;
    }

    h5,
    h6 {
        font-weight: 500;
        font-size: 17px;
    }

    li {
        /* font-size: 20px; */
        font-weight: bold;
    }

    ul,
    ol,
    pre,
    dl,
    dd {
        margin-bottom: 1em;
    }

    li,
    dt,
    dd {
        line-height: inherit;
    }

    ul,
    ol {
        margin-left: 35px;
    }


    p {
        margin-bottom: 24px;
    }

    section {
        margin-top: -80px;
    }

    section a {
        text-decoration: underline;
    }

    h1 {
        font-size: 40px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-size: 27px;
    }

    h4 {
        font-size: 21px;
    }

    strong {
        font-weight: 600;
        color: #0D141B;
    }

    .dl-horizontal dt {
        width: 180px;
        white-space: initial;
    }

    .dl-horizontal dd {
        margin-left: 210px;
    }

    .dl-horizontal dd:after {
        content: '';
        display: block;
        clear: both;
    }

    a strong {
        color: inherit;
    }

    .img-polaroid {
        margin: 15px 0;
        cursor: pointer;
        height: auto;
        width: auto;
    }

    /* img.enlarge {
			/* max-width: 100vw; */
    /* } */

    li .img-polaroid {
        margin: 25px 0;
        margin-left: -30px;
    }

    li p+.img-polaroid {
        margin-top: 5px;
    }

    .bs-docs-sidenav a {
        color: #444;
    }

    .container {
        margin: 0;
        margin-left: 350px;
        width: auto;
        max-width: 1170px;
    }

    .row {
        width: 100%;
    }

    .bs-docs-sidenav {
        margin: 0 0;
        padding: 0;
        box-shadow: 0;
        -webkit-box-shadow: 0;
        left: 0;
        top: 0;
        right: auto;
        bottom: 0;
        left: 0;
        background-color: #F8F5F5;
        border-right: 1px solid #DDD7CC;
        padding-top: 150px;
        position: fixed;
        overflow-y: auto;
        border-radius: 0;
    }

    .bs-docs-sidenav.affix {
        top: 0;
    }

    .bs-docs-sidenav>li:first-child>a,
    .bs-docs-sidenav>li:last-child>a {
        border-radius: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
    }

    .bs-docs-sidebar li ul {
        font-size: 0.85em;
        background: #F8F5F5;
        list-style: none;
        margin-top: 1px;
        margin-left: 0;
        display: none;
        border-left: 15px solid #e5e5e5;
    }

    .bs-docs-sidebar .active ul {
        display: block;
    }

    .bs-docs-sidenav ul a {
        padding: 8px 0;
        padding-left: 20px;
        display: block;
        text-decoration: none;
        border-top: 1px solid #e5e5e5;
    }

    .bs-docs-sidenav ul .active>a {
        font-weight: 600;
        background: #fff;
    }

    .bs-docs-sidenav>li>a {
        border-right: 0;
        padding-left: 20px;
        background: rgb(250, 250, 250);
        line-height: 24px;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        letter-spacing: 0.01em;
        -webkit-font-smoothing: antialiased;
    }


    section ol {
        counter-reset: item;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    section ol>li {
        counter-increment: item;
        list-style: none;
        margin-left: 10px;
    }

    section ol>li:before {
        display: block;
        float: left;
        margin-left: -30px;
        font-weight: bold;
        text-align: right;
        content: counter(item) ". ";
    }

    section h2,
    section h3 {
        border-bottom: 1px solid #e5e5e5;
        padding-bottom: 10px;
    }

    section {
        padding-top: 150px;
    }

    section ul li,
    section ol li {
        padding: 2px;
        margin-bottom: 6px;
    }

    section>.page-header,
    section>.lead {
        color: #0D141B;
    }

    .label {
        margin-right: 5px;
    }

    .sc-sample {
        max-height: 200px;
        overflow: auto;
    }

    .logo {
        margin-top: -120px;
        margin-bottom: 30px;
        margin-left: 15px;
        font-size: 2.1em;
        font-weight: bold;
        font-family: "Open Sans", Arial, sans-serif;
        color: #0D141B;
        letter-spacing: -1px;
    }

    .about-online,
    .about-help {
        position: fixed;
        z-index: 1;
        padding: 10px;
        padding-left: 354px;
        top: 0;
        width: 100%;
        display: none;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .bs-docs-sidenav {
        z-index: 2;
    }

    .about-online a {
        font-weight: bold;
        color: white;
    }

    .online-pad {
        top: 44px;
    }

    .about-help {
        display: block;
        background: #f9f9f9;
        border-bottom: 1px solid #e5e5e5;
        font-weight: 700;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .about-help .close {
        float: right;
        margin-right: 10px;
    }

    .about-help .links {
        font-weight: normal;
        margin-left: 5px;
        font-weight: normal;

    }

    img.alignright {
        float: right;
        margin-left: 50px;
    }

    .about-help .links a {
        margin: 0 5px;
    }

    ::-webkit-scrollbar {
        width: 4px;
    }

    ::-webkit-scrollbar-track {
        background-color: #F8F5F5;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #ece6da;
    }

    body::-webkit-scrollbar {
        width: 12px;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #d8d3c9;
    }



    .has-top h3:before,
    .has-top h4:before {
        display: block;
        content: " ";
        margin-top: -80px;
        height: 80px;
        visibility: hidden;
    }

    .faqs {
        list-style: none;
        padding: 0;
        margin: 0;
        counter-reset: faqs;
    }

    .faqs>li {
        margin: 0;
        padding: 0;
    }

    .faqs h5 {
        padding: 15px 0;
        border-bottom: 1px solid #efefef;
        font-family: "Open Sans", Arial, sans-serif;
        color: #27b196;
        margin: 0;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
    }

    .faqs .number {
        margin-right: 10px;
        line-height: 1;
        padding: 5px 7px;
        font-size: 12px;
        font-weight: 700;
        color: #999;
        border-radius: 4px;
        background: #f2f2f2;
        text-align: center;
        display: inline-block;
        vertical-align: top;
        margin-top: -1px;
    }

    .faqs .number:before {
        counter-increment: faqs;
        content: counters(faqs, ".") " ";
    }

    .faqs article {
        display: none;
        padding-left: 10px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .faqs h5:after {
        content: "+";
        float: right;
        color: #999;
        font-size: 16px;
        margin-right: 5px;
    }

    .faqs h5.active:after {
        content: "-";
        font-size: 19px;
        line-height: 1;
    }
    </style>
</head>




<body class="has-top">
    <!-- <div class="about-online btn-danger"><a>Notice.. </a> -->
    <?php 
//Connect to database
// $conn = mysqli_connect("localhost", "root", "", "cib");

// //Check for database connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }



// Set the key and IV
// include_once 'ezy_sc_k.php';
// include_once 'ezy_sc_i.php';


// Send a request to the randomuser.me API
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://security.bikswee.com/api/');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $response = curl_exec($ch);
// curl_close($ch);

// // Decode the JSON response
// $data = json_decode($response, true);

// if ($data !== null) {
//   // Get the first record from the data array
//   $record = $data['data'][0];

//   // Extract the host, username, password, and port from the record
//   $ServerName = $record['host'];
//   $dbUserName = $record['username'];
//   $dbPassword = $record['password'];
//   $port = $record['port'];
//   $dbName = $record['db_name'];

//   // Decrypt the host
//   $decrypted_host = openssl_decrypt($ServerName, 'aes-256-cbc', $key, 0, $iv);
//   $decrypted_username = openssl_decrypt($dbUserName, 'aes-256-cbc', $key, 0, $iv);
//   $decrypted_password = openssl_decrypt($dbPassword, 'aes-256-cbc', $key, 0, $iv);
//   $decrypted_port = openssl_decrypt($port, 'aes-256-cbc', $key, 0, $iv);
//   $decrypted_db_name = openssl_decrypt($dbName, 'aes-256-cbc', $key, 0, $iv);

//   // Connect to database
//   $conn = @mysqli_connect($decrypted_host, $decrypted_username, $decrypted_password, $decrypted_db_name, $decrypted_port);
//   if (!$conn){
//     die("Connection failed: " . mysqli_connect_error());
//   }

// } else {
//   // The response was not valid JSON
//   echo "Error: Invalid JSON response";
// }



// //Fetch data from database
// $query = "SELECT * FROM notifications ORDER BY date_time DESC LIMIT 1";
// $result = mysqli_query($conn, $query);

// //Check for data fetch
// if (mysqli_num_rows($result) > 0) {
//     //Display notifications
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo '<div class="notification">';
//         // echo '<p>'.$row["title"].' '.$row["message"].'</p>';
//         echo '<p>'.$row["title"].' '.': -'.' '.$row["message"].'</p>';
//         echo '</div>';
//     }
// } else { 
//     echo '<p>No notifications available</p>';
// }

// //Close database connection
// mysqli_close($conn);
// ?>
 
    </div>
   
    <div class="container">
        <div class="bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav" style="padding-top: 0rem;">
                <li>
<h2 style="margin-top: 1rem;">&nbsp;EaZy_Security</h2>
                    <a  href="https://security.bikswee.com">
                  <img src="assets/img/logo-c.png" alt="Logo" style="width: 4rem;mix-blend-mode: darken;">
                </a>
                </li>
                <li><a href="#introduction">Introduction</a></li>
                <li><a href="#installation">Installation</a>
                </li>
                <li><a href="#post-install"> Feature of Eazy Security</a></li>
                <li><a href="#header-setup">Dashboard</a>
                </li>
                </li>
                <li><a href="#categories">Settings</a></li>
                <li><a href="#adding-posts">Protection &amp; modules</a>
                </li>
                <li><a href="#creating-pages">Logs</a></li>
                <li><a href="#widgets">Bans Details </a>
                </li>
                <li><a href="#footer-setup">Scan Site</a>
                </li>
                <li><a href="#recipes">WhiteList details</a>
                </li>
                <!-- <li><a href="#woocommerce">Warning Pages</a></li> -->
                <li><a href="#amp">PHP Security Check</a></li>
                <li><a href="#style-typography">System information</a></li>
                <li><a href="#translation">Visit Analytics</a></li>
                <li><a href="#performance">Error Monitoring</a></li>
                <li><a href="#gdpr-guide">Htaccess Editor</a>
                </li>
                <li><a href="#customizations">Port Scanner</a></li>
                <li><a href="#faq">IP Blacklist Checker</a></li>
                <li><a href="#credits">Hashing</a></li>
                <li><a href="#login">Login History</a></li>
                <li><a href="#contact">Contact Us!</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="span9">
                <section id="introduction">
                    <div class="page-header">
                        <h1>Welcome to EaZy Security!</h1>
                    </div>
                    <h3>Thanks for Buying</h3>
                    <p>First of all, thank you for buying this plugin. To make your experience pleasant, we've added as
                        much info as needed in this documentation. If you're stuck with anything, please connect us on our 
                       <a href="http://security.bikswee.com/">website.</a> </p>
                    <ul>
                        <li>Powered By : Bikswee Solutions</li>
                        <li>Support Site: <a href="https://security.bikswee.com/">EaZy Security</a></li>
                        <li>LinkedIn: <a href="https://www.linkedin.com/company/bikswee-solutions/">Bikswee Solutions</a></li>
                        <li>Instagram: <a href="https://www.instagram.com/bikswee_solutions">Bikswee Solutions</a></li>
                        <li>Version: 2.3</li>
                    </ul>
                </section>
                <section id="installation">
                    <div class="page-header">
                        <h1>Installation</h1>
                    </div>
                    <p>Follow mailed instructions or mail us on contact@bikswee.com</p>
                  
                    <section id="post-install">
                        <div class="page-header">
                            <h1>Feature of EaZy Security</h1>
                        </div>
                        <p>Once you're done with <a href="#installation">plugin installation</a>, it's time to setup
                            your blog. What to do next:</p>
                        <ul>
                            <li><a href="#protection">SQLI Protection </a>:- Protection from SQL Injections (SQLi) and
                                XSS Vulnerabilities (Cross-Site Scripting).</li>
                            <li><a href="#protection">Proxy Protection </a>:- Protection from Proxy, VPN, and TOR
                                Visitors or so-called people hiding behind proxies.</li>
                            <li><a href="#protection">Spam Protection </a>:- ProProtection from Spammers and Spam Bots
                                that aim to spam your website.</li>
                            <li><a href="#logs">Logs Details </a>:- The logs contain many information about the Threat /
                                Attack like Browser, Operating System, Country, State, City, User Agent, Location and
                                other useful information.</li>
                            <li><a href="#bans">Auto Ban </a>:- Function that will automatically ban attackers and
                                threats when bad behavior is detected.</li>
                            <li><a href="#error_monitoring">Errors Monitoring </a>:- Useful tool that shows all logged
                                errors from your website.</li>
                            <li><a href="#htaccess">.htaccess Editor </a>:- Edit your .htaccess file directly from the
                                Admin Panel, no need to open it in any external editor.</li>
                            <li><a href="#whitelist">IP & File Whitelist </a>:- A list of IP Addresses and Files that
                                will be ignored by the app and will not be blocked.</li>
                            <li><a href="#live_traffic">Live Traffic </a>:- Observe your visitors in real time as they
                                interact with your website.</li>
                            <li><a href="#visit_analytics">Visit Analytics </a>:- Track and analyze how people use your
                                website.</li>
                            <li><a href="#php_config">PHP Configuration Checker </a>:- Check current PHP Configuration
                                for potential security flaws.</li>
                            <li><a href="#sytem_information">System Information </a>:- Page with a big amount of
                                information and statistics about your web host.</li>
                            <li><a href="#bad_bot_protection">Fake Bots Protection </a>:- Verifying search engine bots
                                that visit your website whether they are real or fake bots.</li>
                            <li><a href="#live_traffic">Headers Check </a>:- Every visitor’s response headers will be
                                checked and if there are suspicious objects their access to the website will be denied.
                            </li>
                            <li><a href="#bans">Ban System </a>:- Ban System</li>
                            <li><a href="#scan">Scan Site </a>:- This features scan vulnerability in your website.</li>
                            <li><a href="#port_scanner">Port Scanner </a></li>
                            <li><a href="#hashing">Hashing </a></li>
                            <li><a href="#contact">Contact </a></li>

                        </ul>
                        <br />

                    </section>
                    <section id="header-setup">
                        <div class="page-header">
                            <h1>Dashboard</h1>
                        </div>
                        <p>Today's Stats</p>
                        <img src="assets/img/dashboard.png" class="img-polaroid" width="298" />
                        <ol>
                            <li>Overall Statistics</li>
                            <img src="assets/img/overall_stats.png" class="img-polaroid" width="298" />
                            <li>Modules & Functions</li>
                            <img src="assets/img/modules.png" class="img-polaroid" width="298" />
                            <li>Statistics </li>
                            <img src="assets/img/stats.png" class="img-polaroid" width="298" />
                        </ol>
                    </section>
                    <section id="categories">
                        <div class="page-header">
                            <h1>Setting</h1>
                            <img src="assets/img/setting.png" class="img-polaroid" width="298" />

                        </div>
                    </section>
                    <section id="adding-posts ">
                        <div class="page-header">
                            <h1 id="protection">Protection Modules</h1>
                            <img src="assets/img/protection_module.png" class="img-polaroid" width="298" />
                        </div>
                        <ol>
                            <li>SQLi Protection</li>
                            <img src="assets/img/sqli_protection.png" class="img-polaroid" width="298" />
                            <li>Bad Bot Protection</li>
                            <img src="assets/img/bad_bot_protection.png" class="img-polaroid" width="298" />
                            <li>Proxy Protection </li>
                            <img src="assets/img/proxy_protection.png" class="img-polaroid" width="298" />
                            <li>Spam Protection </li>
                            <img src="assets/img/spam_protection.png" class="img-polaroid" width="298" />
                        </ol>
                    </section>

                    <section id="creating-pages">
                        <div class="page-header">
                            <h1 id="logs">Logs</h1>
                            <img src="assets/img/logs.png" class="img-polaroid" width="298" />
                        </div>
                        <ul>
                            <li>Logs Details</li>
                            <img src="assets/img/log_details.png" class="img-polaroid" width="298" />
                        </ul>

                    </section>

                    <section id="widgets">
                        <div class="page-header">
                            <h1 id="bans">Bans</h1>
                        </div>
                        <ol>
                            <li>Ip Bans</li>
                            <img src="assets/img/ip_ban.png" class="img-polaroid" width="298" />
                            <li>Country Bans</li>
                            <img src="assets/img/country_ban.png" class="img-polaroid" width="298" />
                            <li>IP Range Bans </li>
                            <img src="assets/img/ip_range_ban.png" class="img-polaroid" width="298" />
                            <li>Other Bans </li>
                            <img src="assets/img/other_ban.png" class="img-polaroid" width="298" />
                        </ol>
                    </section>

                    <section id="footer-setup">
                        <div class="page-header">
                            <h1 id="scan">Scan</h1>
                        </div>
                        <h3>Internal Scanner by EaZy Security</h3>

                        <p>PHP, JS, CSS, and image files will all be scanned internally for malware. The file system is
                            being scanned for viruses using heuristic methods. Our technique use heuristics to find
                            unidentified infections. Note that because of its great sensitivity, it might also detect
                            potentially safe code (False-Positive). Please get in touch with EaZy Security support via
                            the plugin page to resolve the false positives or email :- contact@bikswee.com .
                            Press Scan Now to run internal scan</p>
                        <img src="assets/img/scan.png
							" class="img-polaroid" width="298" />
                    </section>

                    <section id="recipes">
                        <div class="page-header">
                            <h1 id="whitelist">WhiteList</h1>
                        </div>
                        <img src="assets/img/whitelist.png
							" class="img-polaroid" width="298" />
                    </section>

                    <!-- <section id="woocommerce">
					<div class="page-header">
						<h1>Warning Pages</h1>
					</div>
				</section> -->

                    <section id="amp">
                        <div class="page-header">
                            <h1 id="php_config">PHP Security Check</h1>

                        </div>
                        <img src="assets/img/php_config.png" class="img-polaroid" width="298" />
                        <h4>Information & Tips</h4>
                        <p>On this page you can see which vulnerable PHP Functions are enabled on your host.
                            If you decide you can disable them from the php.ini file on your host.</p>
                        <h4>How to Disable PHP Functions</h4>
                        <p>Open the php.ini file of your website
                            Find disable_functions variable and set it as follows for example:

                            disable_functions = exec,passthru,shell_exec,system,proc_open,popen
                            Save and close the file. Restart the HTTPD Server (Apache)</p>
                    </section>

                    <section id="style-typography">
                        <div class="page-header">
                            <h1 id="system_information">System information</h1>
                        </div>
                        <h3>Host Information</h3>
                        <p>System information about the web host</p>
                        <ul>
                            <li>DOMAIN IP</li>
                            <li>COUNTRY</li>
                            <li>SERVER SOFTWARE</li>
                            <li>ISP</li>
                            <li>SERVER OS</li>
                            <li>PHP VERSION</li>
                            <li>MYSQL VERSION</li>
                            <li>SERVER PORT</li>
                            <li>OPENSSL VERSION</li>
                            <li>CURL EXTENSION</li>
                            <li>HTTP PROTOCOL</li>
                            <li>GATEWAY INTERFACE</li>
                            <img src="assets/img/System_information
						.png
							" class="img-polaroid" width="298" />
                        </ul>
                    </section>

                    <section id="translation">
                        <div class="page-header">
                            <h1>Visit Analytics</h1>
                            <img src="assets/img/visit_analytic
						.png
							" class="img-polaroid" width="298" />
                            <h1>Live Traffic</h1>
                            <img src="assets/img/live_traffic.png
							" class="img-polaroid" width="298" />
                        </div>
                    </section>

                    <section id="performance">
                        <div class="page-header">
                            <h1 id="error_monitoring">Error Monitoring</h1>
                        </div>
                        <h4>Information & Tips</h4>
                        <p>Logging errors is recommended best practice, even for production site. Checking those logs
                            however might seem like a chore. The error monitoring brings all entries from error log on
                            this page.

                            The log file is detected automatically from the configuration of the server,
                            only the end of file is read - no memory overflow issues, safe for large logs
                            Optimized to work card card-body bg-light even with very large log files
                        </p>
                    </section>

                    <section id="gdpr-guide">
                        <div class="page-header">
                            <h1 id="htaccess">Htaccess Editor</h1>
                        </div>
                        <img src="assets/img/htaccess.png
							" class="img-polaroid" width="298" />
                        <h4>
                            .htaccess Editor
                        </h4>
                        <p>A .htaccess (hypertext access) file is a directory-level configuration file supported by several web servers, that allows for decentralized management of web server configuration. They are placed inside the web tree, and are able to override a subset of the server's global configuration for the directory that they are in, and all sub-directories.
                        </p>
                        <h4>Common Usage</h4>
                        <p> <strong>1. Authorization </strong>
                            A .htaccess file is often used to specify security restrictions for a directory, hence the
                            filename "access". The .htaccess file is often accompanied by a .htpasswd file which stores
                            valid usernames and their passwords. </br>
                           <strong> 2. Rewriting URLs</strong>
                            Servers often use .htaccess to rewrite long, overly comprehensive URLs to shorter and more
                            memorable ones. </br>
                           <strong> 3. Blocking</strong>
                            Use allow/deny to block users by IP address or domain. Also, use to block bad bots, rippers
                            and referrers. Often used to restrict access by Search Engine spiders </br>
                           <strong> 4. SSI</strong>
                            Enable server-side includes. </br>
                           <strong> 5. Directory listing</strong>
                            Control how the server will react when no specific web page is specified. </br>
                           <strong> 6. Customized error responses</strong>
                            Changing the page that is shown when a server-side error occurs, for example HTTP 404 Not
                            Found or, to indicate to a search engine that a page has moved, HTTP 301 Moved Permanently. </br>
                           <strong> 7. MIME types</strong>
                            Instruct the server how to treat different varying  file types.</br>
                           <strong> 8. Cache Control</strong>
                            .htaccess files allow a server to control caching by web browsers and proxies to reduce
                            bandwidth usage, server load, and perceived lag.</p>
                    </section>

                    <section id="customizations">
                        <div class="page-header">
                            <h1 id="port_scanner">Port Scanner</h1>
                        </div>
                        <img src="assets/img/port_scanner.png" class="img-polaroid" width="298" />
                        <h4>
                            What is Port Scanning ?
                        </h4>
                        <p>Port Scanning is the name for the technique used to identify open ports and services
                            available on a network host. Port Scanning is used to determine which ports are open and
                            vulnerable to attacks.

                            Port Scanning is a slow proccess so it can take a while.</p>
                    </section>

                    <section id="faq" class="faq">
                        <div class="page-header">
                            <h1 id="ip_black_checker">Ip Blacklist Checker</h1>
                        </div>
                        <img src="assets/img/ip_blacklist_checker.png" class="img-polaroid" width="298" />
                    </section>

                    <section id="credits">
                        <div class="page-header">
                            <h1 id="hashing">Hashing</h1>
                        </div>
                        <img src="assets/img/hashing.png" class="img-polaroid" width="298" />
                        <h4>Information & Tips</h4>
                        <p>Producing hash values for accessing data or for security. A hash value (or simply hash), also
                            called a message digest, is a number generated from a string of text. The hash is
                            substantially smaller than the text itself, and is generated by a formula in such a way that
                            it is extremely unlikely that some other text will produce the same hash value.</p>
                        <h4>Purposes</h4>
                        <p>Hashing can be used for many purposes:
                            It can be used to compare large amounts of data. You create the hashes for the data, store
                            the hashes and later if you want to compare the data, you just compare the hashes.
                            Hashes can be used to index data. They can be used in hash tables to point to the correct
                            row. If you want to quickly find a record, you calculate the hash of the data and directly
                            go to the record where the corresponding hash record is pointing to. (This assumes that you
                            have a sorted list of hashes that point to the actual records)
                            They can be used in cryptographic applications like digital signatures.
                            Hashing can be used to generate seemingly random strings.</p>
                    </section>

                    <section id="login">
                        <div>
                            <h1>Login History</h1>
                            <img src="assets/img/login_history.png
							" class="img-polaroid" width="298" />

                        </div>
                    </section>

                    <section id="contact">
                        <div>
                            <h1>Contact Us</h1>
                            <img src="assets/img/contact.png
							" class="img-polaroid" width="298" />
                            <p>Feel Free to Contact us, we are here for your help 24/7</p>
                        </div>
                    </section>

            </div>
        </div>
    </div>
    <!-- Footer
		================================================== -->
    <footer class="footer">
        <div class="container">
            <p>Content &copy; <a href="http://security.bikswee.com/"" target="_blank">EaZy_Security</a>. All rights reserved.</p>

            <ul class="footer-links">
                <li><a href="mailto:contact@bikswee.com">Support</a></li>
                <!-- <li class="muted">&middot;</li> -->

            </ul>
        </div>
    </footer>
    <!-- Le javascript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
<script>
  var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

  if (isMobile) {
    alert("Only the desktop version of this website is appropriate.");
    window.location.href = "../";
  }
</script>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js?b=1"></script>
</body>

</html>