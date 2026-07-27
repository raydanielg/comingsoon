<?php
// Itwillbe - Privacy Policy Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itwillbe Privacy Policy - How we handle your data.">
    <title>Itwillbe — Privacy Policy</title>
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
            <h1>Privacy <span class="gradient">Policy</span></h1>
            <p>Your privacy matters to us. Here's how we handle your data.</p>
            <div class="updated">Last updated: <?php echo date('F j, Y'); ?></div>
        </div>
    </section>

    <div class="legal-content">
        <div class="container">

            <section>
                <h2>Introduction</h2>
                <p>At Itwillbe, we are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This Privacy Policy explains how we collect, use, store, and protect your data when you visit our website or use our services.</p>
                <p>By accessing or using our services, you agree to the terms outlined in this Privacy Policy. If you do not agree with these terms, please discontinue use of our services.</p>
            </section>

            <section>
                <h2>Information We Collect</h2>
                <p>We may collect the following types of information:</p>
                <ul>
                    <li><strong>Personal Information:</strong> Name, email address, and contact details when you voluntarily provide them through our forms.</li>
                    <li><strong>Technical Data:</strong> IP address, browser type, device information, and usage patterns.</li>
                    <li><strong>Cookies:</strong> We use cookies and similar technologies to enhance your browsing experience and analyze traffic.</li>
                    <li><strong>Communication Data:</strong> Any information you share with us through emails, support tickets, or feedback forms.</li>
                </ul>
            </section>

            <section>
                <h2>How We Use Your Information</h2>
                <p>Your information is used for the following purposes:</p>
                <ul>
                    <li>To provide, maintain, and improve our services and features.</li>
                    <li>To send you notifications about updates, launches, and important announcements.</li>
                    <li>To respond to your inquiries and provide customer support.</li>
                    <li>To analyze user behavior and optimize our platform's performance.</li>
                    <li>To comply with legal obligations and protect against fraudulent activity.</li>
                </ul>
            </section>

            <div class="highlight">
                <p><strong>Note:</strong> We will never sell, rent, or trade your personal information to third parties for marketing purposes. Your trust is our top priority.</p>
            </div>

            <section>
                <h2>Data Storage & Security</h2>
                <p>We implement industry-standard security measures to protect your data from unauthorized access, alteration, or disclosure. This includes encryption, secure servers, and regular security audits. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.</p>
            </section>

            <section>
                <h2>Cookies Policy</h2>
                <p>We use the following types of cookies:</p>
                <ul>
                    <li><strong>Essential Cookies:</strong> Required for the website to function properly.</li>
                    <li><strong>Analytics Cookies:</strong> Help us understand how visitors interact with our website.</li>
                    <li><strong>Preference Cookies:</strong> Remember your settings and preferences for a personalized experience.</li>
                </ul>
                <p>You can control and manage cookies through your browser settings. Disabling cookies may affect some features of our website.</p>
            </section>

            <section>
                <h2>Your Rights</h2>
                <p>You have the following rights regarding your personal data:</p>
                <ul>
                    <li><strong>Access:</strong> Request a copy of the personal data we hold about you.</li>
                    <li><strong>Correction:</strong> Request that we correct inaccurate or incomplete information.</li>
                    <li><strong>Deletion:</strong> Request that we delete your personal data, subject to legal requirements.</li>
                    <li><strong>Opt-out:</strong> Unsubscribe from marketing communications at any time.</li>
                    <li><strong>Data Portability:</strong> Receive your data in a structured, machine-readable format.</li>
                </ul>
            </section>

            <section>
                <h2>Third-Party Services</h2>
                <p>We may use third-party services (such as analytics providers and hosting platforms) that collect, monitor, and analyze data. These third parties have their own privacy policies, and we encourage you to review them.</p>
            </section>

            <section>
                <h2>Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. We recommend reviewing this policy periodically to stay informed.</p>
            </section>

            <section>
                <h2>Contact Us</h2>
                <p>If you have any questions or concerns about this Privacy Policy, please contact us through our <a href="contact.php" style="color: var(--brand); font-weight: 600;">contact page</a>.</p>
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
