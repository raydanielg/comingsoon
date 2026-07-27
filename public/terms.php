<?php
// Itwillbe - Terms & Conditions Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itwillbe Terms & Conditions - Rules and guidelines for using our services.">
    <title>Itwillbe — Terms & Conditions</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/coming-soon.css">
</head>
<body>

<div class="page">

    <section class="legal-hero">
        <div class="container">
            <a href="index.php" class="legal-back">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                Back to Home
            </a>
            <h1>Terms & <span class="gradient">Conditions</span></h1>
            <p>The rules and guidelines for using our platform.</p>
            <div class="updated">Last updated: <?php echo date('F j, Y'); ?></div>
        </div>
    </section>

    <div class="legal-content">
        <div class="container">

            <section>
                <h2>Acceptance of Terms</h2>
                <p>Welcome to Itwillbe. By accessing or using our website and services, you agree to be bound by these Terms & Conditions. If you do not agree with any part of these terms, please do not use our services.</p>
                <p>These terms apply to all visitors, users, and others who access or use our platform.</p>
            </section>

            <section>
                <h2>Use of Our Services</h2>
                <p>You agree to use our services only for lawful purposes and in accordance with these Terms. You must not:</p>
                <ul>
                    <li>Use the services in any way that violates applicable laws or regulations.</li>
                    <li>Attempt to gain unauthorized access to our systems, data, or user accounts.</li>
                    <li>Interfere with or disrupt the services, servers, or networks connected to our platform.</li>
                    <li>Upload, post, or transmit any content that is harmful, offensive, or infringes on others' rights.</li>
                    <li>Use automated scripts, bots, or crawlers without our express written permission.</li>
                    <li>Reproduce, duplicate, copy, or resell any part of our services without authorization.</li>
                </ul>
            </section>

            <div class="highlight">
                <p><strong>Important:</strong> Violation of these terms may result in suspension or termination of your access to our services without prior notice.</p>
            </div>

            <section>
                <h2>Intellectual Property</h2>
                <p>All content on this platform, including text, graphics, logos, images, and software, is the property of Itwillbe or its content creators and is protected by intellectual property laws. You may not:</p>
                <ul>
                    <li>Copy, modify, or distribute our content without written permission.</li>
                    <li>Use our trademarks, logos, or branding without prior authorization.</li>
                    <li>Reverse engineer, decompile, or disassemble any part of our software.</li>
                </ul>
            </section>

            <section>
                <h2>User Accounts</h2>
                <p>When you create an account with us, you are responsible for:</p>
                <ul>
                    <li>Maintaining the confidentiality of your account credentials.</li>
                    <li>All activities that occur under your account.</li>
                    <li>Providing accurate and complete information during registration.</li>
                    <li>Notifying us immediately of any unauthorized use of your account.</li>
                </ul>
            </section>

            <section>
                <h2>Service Availability</h2>
                <p>We strive to maintain high availability of our services but do not guarantee uninterrupted access. We may:</p>
                <ul>
                    <li>Suspend or discontinue services temporarily for maintenance or updates.</li>
                    <li>Modify or discontinue any feature without prior notice.</li>
                    <li>Limit access to certain features based on usage patterns or account type.</li>
                </ul>
            </section>

            <section>
                <h2>Limitation of Liability</h2>
                <p>To the fullest extent permitted by law, Itwillbe shall not be liable for:</p>
                <ul>
                    <li>Any indirect, incidental, special, or consequential damages.</li>
                    <li>Loss of data, profits, or business opportunities.</li>
                    <li>Any downtime, service interruptions, or technical failures.</li>
                    <li>Content or behavior of third-party services linked to our platform.</li>
                </ul>
            </section>

            <section>
                <h2>Disclaimer</h2>
                <p>Our services are provided "as is" and "as available" without warranties of any kind, whether express or implied. We do not guarantee that the services will be error-free, secure, or available at all times.</p>
            </section>

            <section>
                <h2>Changes to Terms</h2>
                <p>We reserve the right to modify these Terms & Conditions at any time. Updated terms will be posted on this page with a revised date. Continued use of our services after changes constitutes acceptance of the new terms.</p>
            </section>

            <section>
                <h2>Contact Us</h2>
                <p>If you have any questions about these Terms & Conditions, please reach out through our <a href="contact.php" style="color: var(--brand); font-weight: 600;">contact page</a>.</p>
            </section>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Itwillbe. All rights reserved.</p>
            <div class="footer-links">
                <a href="privacy.php">Privacy</a>
                <a href="terms.php">Terms</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </footer>

</div>

<script>
document.addEventListener('contextmenu', function(e) { e.preventDefault(); });
document.addEventListener('copy', function(e) { e.preventDefault(); });
document.addEventListener('cut', function(e) { e.preventDefault(); });
document.addEventListener('selectstart', function(e) { e.preventDefault(); });
document.addEventListener('dragstart', function(e) { e.preventDefault(); });
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && (e.key === 'c' || e.key === 'x' || e.key === 'a' || e.key === 's' || e.key === 'u')) {
        e.preventDefault();
    }
    if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C'))) {
        e.preventDefault();
    }
});
</script>

</body>
</html>
