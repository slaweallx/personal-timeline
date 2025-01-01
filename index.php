<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Ali Çömez || Slaweally Alt Kuruluşlar</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to bottom, #e0f7fa, #ffffff);
        color: #333;
    }

    header {
        background-color: #008cba;
        color: white;
        text-align: center;
        padding: 40px 20px;
    }

    header img {
        max-width: 150px;
        margin-bottom: 20px;
    }

    header h1 {
        font-size: 2.5rem;
        margin: 10px 0;
    }

    header p {
        font-size: 1.2rem;
    }

    .timeline {
        position: relative;
        margin: 50px auto;
        padding: 10px 0;
        width: 80%;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 100%;
        background: #00bcd4;
    }

    .timeline-item {
        position: relative;
        width: 50%;
        padding: 20px;
        box-sizing: border-box;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
        text-align: right;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-item .content {
        position: relative;
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .timeline-item:nth-child(odd) .content {
        margin-right: 20px;
    }

    .timeline-item:nth-child(even) .content {
        margin-left: 20px;
    }

    .timeline-item img {
        max-width: 100px;
        display: block;
        margin: 0 auto 10px;
    }

    .timeline-item h3 {
        margin: 0 0 10px;
        font-size: 1.5rem;
        color: #008cba;
    }

    .timeline-item p {
        margin: 0 0 10px;
    }

    .timeline-item .social-buttons {
        margin-top: 10px;
        text-align: center;
    }

    .timeline-item .social-buttons a {
        margin: 0 5px;
        text-decoration: none;
        color: #008cba;
        font-size: 1.2rem;
    }

    footer {
        background: #004d66;
        color: white;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
    }

    .social-buttons {
        text-align: center;
        margin-top: 10px;
    }

    .social-buttons a {
        margin: 0 10px;
        text-decoration: none;
        font-size: 1.5rem;
        color: #008cba;
    }

    .social-buttons a:hover {
        color: #005f7f;
    }

    .timeline-item.success {
        background-color: rgba(0, 255, 0, 0.1);
    }

    .timeline-item.failed {
        background-color: rgba(255, 0, 0, 0.1);
    }

    .timeline-item.cancelled {
        background-color: rgba(128, 0, 128, 0.1);
    }

    header .intro blockquote {
        background-color: #f9f9f9;
        border-left: 5px solid #007BFF;
        margin: 20px auto;
        padding: 15px 20px;
        font-style: italic;
        color: #555;
    }

    header .intro blockquote p {
        margin: 10px 0;
        font-size: 1.1rem;
    }

    header .intro blockquote p:first-of-type {
        font-weight: bold;
        font-size: 1.2rem;
        color: #007BFF;
    }

    /* Mobil Uyumlu Tasarım */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2rem;
        }

        header p {
            font-size: 1rem;
        }

        .timeline {
            width: 95%;
        }

        .timeline-item {
            width: 100%;
            text-align: center;
        }

        .timeline-item:nth-child(odd),
        .timeline-item:nth-child(even) {
            left: 0;
        }

        .timeline-item .content {
            margin: 0 auto;
        }

        footer {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        header h1 {
            font-size: 1.8rem;
        }

        header img {
            max-width: 120px;
        }

        header p {
            font-size: 0.9rem;
        }

        .timeline-item h3 {
            font-size: 1.2rem;
        }

        .timeline-item p {
            font-size: 0.9rem;
        }

        .timeline-item img {
            max-width: 80px;
        }
    }
</style>

</head>
<body>
    <header>
        <div class="intro">
            <img src="https://allvectorlogo.com/img/2021/12/github-logo-vector.png" alt="Random User">
            <h1>Random User (Developer) Projects</h1>
            <blockquote>
                <p>"Building the web for everyone, accessible, easy, and seamless."</p>
                <p>"These include both my ambitious starts and experimental projects, some of which failed but taught me invaluable lessons."</p>
                <p>"Here, you will find my journey, including failures and successes, as I strive to create impactful projects."</p>
            </blockquote>
        </div>
    </header>

<div class="timeline">
      <!-- 2013/2024 - DevHelper -->
        <div class="timeline-item success">
            <div class="content">
                <i class="bi bi-code-square"></i>
                <h3>2013/2024 - DevHelper</h3>
                <p>Launched in 2013 and rebranded in 2024, DevHelper was a technical content platform for developers and admins, now continuing at codegear.io.</p>
                <p>Web Site: <a href="#" target="_blank">devhelper.com</a></p>
                <div class="site-status">
                    <p><span class="status-icon cancelled">&#10060;</span> Status: Closed - Rebranded to CodeGear.io</p>
                </div>
            </div>
        </div>

    <!-- 2014/2015 - HostHive -->
    <div class="timeline-item cancelled">
        <div class="content">
            <i class="bi bi-cloud"></i>
            <h3>2014/2015 - HostHive</h3>
            <p>A simple platform offering shared hosting services, aimed at individual users.</p>
            <p>Web Site: <a href="#" target="_blank">hosthive.com</a></p>
             <div class="site-status">
                <p><span class="status-icon cancelled">&#10060;</span> Status: Closed</p>
             </div>
        </div>
    </div>

    <!-- 2015-2018 - CloudNode -->
    <div class="timeline-item success">
        <div class="content">
            <i class="bi bi-server"></i>
            <h3>2015-2018 - CloudNode</h3>
            <p>A robust hosting platform providing server and domain services for professional and individual users.</p>
            <p>Web Site: <a href="#" target="_blank">cloudnode.net</a></p>
             <div class="site-status">
                <p><span class="status-icon cancelled">&#10060;</span> Status: Closed</p>
             </div>
        </div>
    </div>

    <!-- 2019-2022 - ByteLogic -->
    <div class="timeline-item failed">
        <div class="content">
            <i class="bi bi-gear"></i>
            <h3>2019-2022 - ByteLogic</h3>
            <p>Entered the market with a customizable cloud hosting slogan but was rebranded in 2022 to OmniHost.</p>
            <p>Web Site: <a href="#" target="_blank">bytelogic.net</a></p>
            <div class="site-status">
                <p><span class="status-icon cancelled">&#10060;</span> Status: Rebranded to OmniHost</p>
             </div>
        </div>
    </div>

    <!-- 2022-2023 - OmniHost -->
    <div class="timeline-item success">
        <div class="content">
            <i class="bi bi-hdd-network"></i>
            <h3>2022-2023 - OmniHost</h3>
            <p>Expanded its portfolio to include domain, hosting, and managed server solutions.</p>
            <p>Web Site: <a href="https://omninet.com" target="_blank">omninet.com</a></p>
          <div class="site-status">
              <p><span class="status-icon active">&#9989;</span> Status: Active</p>
          </div>
        </div>
    </div>

    <!-- 2023 - UptimeTrack -->
    <div class="timeline-item success">
        <div class="content">
            <i class="bi bi-clock-history"></i>
            <h3>2023 - UptimeTrack</h3>
            <p>A solution for monitoring website uptime and tracking performance in real time.</p>
            <p>Web Site: <a href="https://uptimetrack.org" target="_blank">uptimetrack.org</a></p>
          <div class="site-status">
              <p><span class="status-icon active">&#9989;</span> Status: Active</p>
          </div>
        </div>
    </div>

    <!-- 2024 - NetMasters -->
    <div class="timeline-item success">
        <div class="content">
            <i class="bi bi-diagram-3"></i>
            <h3>2024 - NetMasters</h3>
            <p>A platform for sharing network administration insights and tutorials.</p>
            <p>Web Site: <a href="https://netmasters.io" target="_blank">netmasters.io</a></p>
          <div class="site-status">
              <p><span class="status-icon active">&#9989;</span> Status: Active</p>
          </div>
        </div>
    </div>
</div>

    <footer>
        <p>© 2013 - 2024... Random User. All Rights Reserved.</p>
        <p>Contact: info@netmasters.io</p>
    </footer>
</body>
</html>
