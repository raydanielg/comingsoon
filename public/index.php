<?php
// Comginsoon - Coming Soon Landing Page
// Static PHP page with auto-rotating image carousel
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comginsoon - Something amazing is on the way. Stay tuned.">
    <title>Comginsoon — Coming Soon</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/coming-soon.css">
</head>
<body>

<div class="page">

    <!-- ===== Navbar ===== -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="brand">
                <span class="brand-icon">C</span>
                Comginsoon
            </a>
            <div class="nav-status">
                <span class="pulse"></span>
                In Development
            </div>
        </div>
    </nav>

    <!-- ===== Hero ===== -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">

            <!-- Badge -->
            <div class="coming-badge">
                <span class="dot"></span>
                Something big is coming
            </div>

            <!-- Title -->
            <h1 class="coming-title">
                <span class="word">COMING</span>
                <span class="word gradient">SOON</span>
            </h1>

            <p class="coming-subtitle">
                We're crafting something extraordinary. A platform that will change the way you build, deploy, and scale. Be the first to know when we launch.
            </p>

            <!-- Image Carousel -->
            <div class="carousel" id="carousel">
                <div class="carousel-track" id="carouselTrack">
                    <div class="carousel-slide active">
                        <img src="images/o.png" alt="Preview 1">
                    </div>
                    <div class="carousel-slide">
                        <img src="images/img2.png" alt="Preview 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="images/img3.png" alt="Preview 3">
                    </div>
                    <div class="carousel-slide">
                        <img src="images/img4.png" alt="Preview 4">
                    </div>
                    <div class="carousel-slide">
                        <img src="images/img5.png" alt="Preview 5">
                    </div>
                    <div class="carousel-slide">
                        <img src="images/img6.png" alt="Preview 6">
                    </div>
                </div>

                <!-- Arrows -->
                <button class="carousel-arrow prev" id="prevBtn" aria-label="Previous">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="carousel-arrow next" id="nextBtn" aria-label="Next">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>

                <!-- Dots -->
                <div class="carousel-dots" id="carouselDots"></div>

                <!-- Progress bar -->
                <div class="carousel-progress" id="carouselProgress"></div>
            </div>

            <!-- Countdown -->
            <div class="countdown" id="countdown">
                <div class="countdown-item">
                    <div class="countdown-number" id="cdDays">00</div>
                    <div class="countdown-label">Days</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="cdHours">00</div>
                    <div class="countdown-label">Hours</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="cdMins">00</div>
                    <div class="countdown-label">Minutes</div>
                </div>
                <div class="countdown-item">
                    <div class="countdown-number" id="cdSecs">00</div>
                    <div class="countdown-label">Seconds</div>
                </div>
            </div>

            <!-- Notify Form -->
            <div class="notify">
                <p class="notify-title">Get notified when we launch</p>
                <form class="notify-form" id="notifyForm">
                    <input type="email" id="notifyEmail" placeholder="Enter your email address" required>
                    <button type="submit">Notify Me</button>
                </form>
                <p class="notify-message" id="notifyMsg"></p>
            </div>

            <!-- Social -->
            <div class="social">
                <a href="#" aria-label="Twitter">
                    <svg fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#" aria-label="GitHub">
                    <svg fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn">
                    <svg fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>

        </div>
    </section>

    <!-- ===== Footer ===== -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Comginsoon. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </footer>

</div>

<script>
(function() {
    // ===== Carousel =====
    const slides = document.querySelectorAll('.carousel-slide');
    const dotsContainer = document.getElementById('carouselDots');
    const progressBar = document.getElementById('carouselProgress');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentSlide = 0;
    let slideInterval;
    const slideDuration = 5000;

    // Create dots
    slides.forEach(function(_, i) {
        const dot = document.createElement('button');
        dot.className = 'carousel-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dot.addEventListener('click', function() {
            goToSlide(i);
            resetTimer();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.carousel-dot');

    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        // Restart progress bar
        progressBar.classList.remove('running');
        void progressBar.offsetWidth;
        progressBar.classList.add('running');
    }

    function nextSlide() { goToSlide(currentSlide + 1); }
    function prevSlide() { goToSlide(currentSlide - 1); }

    function startTimer() {
        slideInterval = setInterval(nextSlide, slideDuration);
        progressBar.classList.add('running');
    }

    function resetTimer() {
        clearInterval(slideInterval);
        progressBar.classList.remove('running');
        void progressBar.offsetWidth;
        startTimer();
    }

    nextBtn.addEventListener('click', function() { nextSlide(); resetTimer(); });
    prevBtn.addEventListener('click', function() { prevSlide(); resetTimer(); });

    // Pause on hover
    const carousel = document.getElementById('carousel');
    carousel.addEventListener('mouseenter', function() {
        clearInterval(slideInterval);
        progressBar.classList.remove('running');
    });
    carousel.addEventListener('mouseleave', function() {
        startTimer();
    });

    startTimer();

    // ===== Countdown =====
    // Set target date: 60 days from now
    const targetDate = new Date();
    targetDate.setDate(targetDate.getDate() + 60);
    targetDate.setHours(0, 0, 0, 0);

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate.getTime() - now;

        if (distance < 0) {
            document.getElementById('cdDays').textContent = '00';
            document.getElementById('cdHours').textContent = '00';
            document.getElementById('cdMins').textContent = '00';
            document.getElementById('cdSecs').textContent = '00';
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const secs = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('cdDays').textContent = String(days).padStart(2, '0');
        document.getElementById('cdHours').textContent = String(hours).padStart(2, '0');
        document.getElementById('cdMins').textContent = String(mins).padStart(2, '0');
        document.getElementById('cdSecs').textContent = String(secs).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);

    // ===== Notify Form =====
    const form = document.getElementById('notifyForm');
    const emailInput = document.getElementById('notifyEmail');
    const msg = document.getElementById('notifyMsg');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = emailInput.value.trim();

        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            msg.textContent = 'Please enter a valid email address.';
            msg.className = 'notify-message error show';
            return;
        }

        // Simulate submission
        msg.textContent = "You're on the list! We'll notify you when we launch.";
        msg.className = 'notify-message success show';
        emailInput.value = '';

        setTimeout(function() {
            msg.classList.remove('show');
        }, 4000);
    });
})();
</script>

</body>
</html>
