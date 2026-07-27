<?php
// Itwillbe - Contact Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itwillbe Contact - Get in touch with our team.">
    <title>Itwillbe — Contact Us</title>
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
            <h1>Get In <span class="gradient">Touch</span></h1>
            <p>Have a question? We'd love to hear from you.</p>
        </div>
    </section>

    <div class="legal-content">
        <div class="container">

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3>Email Us</h3>
                    <p>hello@itwillbe.com</p>
                </div>
                <div class="contact-card">
                    <div class="icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3>Location</h3>
                    <p>Dar es Salaam, Tanzania</p>
                </div>
            </div>

            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="How can we help?" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Tell us more..." required></textarea>
                </div>
                <button type="submit">Send Message</button>
                <p class="notify-message" id="contactMsg" style="text-align: center; margin-top: 16px;"></p>
            </form>

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

// Contact form
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var msg = document.getElementById('contactMsg');
    msg.textContent = "Thank you! Your message has been received. We'll get back to you soon.";
    msg.className = 'notify-message success show';
    this.reset();
    setTimeout(function() {
        msg.classList.remove('show');
    }, 5000);
});
</script>

</body>
</html>
