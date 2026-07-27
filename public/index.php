<?php
// Comginsoon - Coming Soon Landing Page
// Static PHP page with auto-rotating image carousel
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Itwillbe - Something amazing is on the way. Stay tuned.">
    <title>Itwillbe</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/coming-soon.css">
</head>
<body>

<div class="page">

    <!-- ===== Hero ===== -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">

            <!-- Image Showcase (transparent, no card) -->
            <div class="showcase" id="carousel">
                <div class="showcase-track" id="carouselTrack">
                    <div class="showcase-slide active">
                        <img src="images/o.png" alt="Preview 1">
                    </div>
                    <div class="showcase-slide">
                        <img src="images/img2.png" alt="Preview 2">
                    </div>
                    <div class="showcase-slide">
                        <img src="images/img3.png" alt="Preview 3">
                    </div>
                    <div class="showcase-slide">
                        <img src="images/img4.png" alt="Preview 4">
                    </div>
                    <div class="showcase-slide">
                        <img src="images/img5.png" alt="Preview 5">
                    </div>
                    <div class="showcase-slide">
                        <img src="images/img6.png" alt="Preview 6">
                    </div>
                </div>

                <!-- Arrows -->
                <button class="showcase-arrow prev" id="prevBtn" aria-label="Previous">
                    <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="showcase-arrow next" id="nextBtn" aria-label="Next">
                    <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>

                <!-- Dots -->
                <div class="showcase-dots" id="carouselDots"></div>
            </div>

            <!-- Badge -->
            <div class="coming-badge">
                <span class="dot"></span>
                Something big is coming
            </div>

            <!-- Title -->
            <h1 class="coming-title">
                <span class="word">Itwill</span><span class="word gradient">be</span>
            </h1>

            <p class="coming-subtitle">
                We're crafting something extraordinary. A platform that will change the way you build, deploy, and scale. Be the first to know when we launch.
            </p>

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

        </div>
    </section>

    <!-- ===== Footer ===== -->
    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Itwillbe. All rights reserved.</p>
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
    const slides = document.querySelectorAll('.showcase-slide');
    const dotsContainer = document.getElementById('carouselDots');
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
    }

    function nextSlide() { goToSlide(currentSlide + 1); }
    function prevSlide() { goToSlide(currentSlide - 1); }

    function startTimer() {
        slideInterval = setInterval(nextSlide, slideDuration);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    nextBtn.addEventListener('click', function() { nextSlide(); resetTimer(); });
    prevBtn.addEventListener('click', function() { prevSlide(); resetTimer(); });

    // Pause on hover
    const carousel = document.getElementById('carousel');
    carousel.addEventListener('mouseenter', function() {
        clearInterval(slideInterval);
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
