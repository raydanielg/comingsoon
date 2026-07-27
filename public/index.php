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
        <canvas id="networkCanvas" class="network-canvas"></canvas>
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
    // ===== Network Background =====
    const canvas = document.getElementById('networkCanvas');
    const ctx = canvas.getContext('2d');
    let nodes = [];
    let mouse = { x: -1000, y: -1000 };
    const NODE_COUNT = 80;
    const MAX_DISTANCE = 140;
    const MOUSE_RADIUS = 180;

    function resizeCanvas() {
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }

    function createNodes() {
        nodes = [];
        for (let i = 0; i < NODE_COUNT; i++) {
            nodes.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                vx: (Math.random() - 0.5) * 0.5,
                vy: (Math.random() - 0.5) * 0.5,
                r: Math.random() * 2 + 1
            });
        }
    }

    function drawNetwork() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let i = 0; i < nodes.length; i++) {
            const n = nodes[i];

            // Move
            n.x += n.vx;
            n.y += n.vy;

            // Bounce edges
            if (n.x < 0 || n.x > canvas.width) n.vx *= -1;
            if (n.y < 0 || n.y > canvas.height) n.vy *= -1;

            // Mouse repulsion
            const dx = n.x - mouse.x;
            const dy = n.y - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < MOUSE_RADIUS && dist > 0) {
                const force = (MOUSE_RADIUS - dist) / MOUSE_RADIUS;
                n.x += (dx / dist) * force * 2;
                n.y += (dy / dist) * force * 2;
            }

            // Draw node
            ctx.beginPath();
            ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(249, 115, 22, 0.5)';
            ctx.fill();

            // Draw connections
            for (let j = i + 1; j < nodes.length; j++) {
                const m = nodes[j];
                const ddx = n.x - m.x;
                const ddy = n.y - m.y;
                const d = Math.sqrt(ddx * ddx + ddy * ddy);
                if (d < MAX_DISTANCE) {
                    const opacity = (1 - d / MAX_DISTANCE) * 0.3;
                    ctx.beginPath();
                    ctx.moveTo(n.x, n.y);
                    ctx.lineTo(m.x, m.y);
                    ctx.strokeStyle = 'rgba(249, 115, 22, ' + opacity + ')';
                    ctx.lineWidth = 1;
                    ctx.stroke();
                }
            }

            // Draw connection to mouse
            if (dist < MOUSE_RADIUS) {
                const opacity = (1 - dist / MOUSE_RADIUS) * 0.5;
                ctx.beginPath();
                ctx.moveTo(n.x, n.y);
                ctx.lineTo(mouse.x, mouse.y);
                ctx.strokeStyle = 'rgba(245, 158, 11, ' + opacity + ')';
                ctx.lineWidth = 1.5;
                ctx.stroke();

                // Mouse node
                ctx.beginPath();
                ctx.arc(mouse.x, mouse.y, 3, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(245, 158, 11, 0.8)';
                ctx.fill();
            }
        }

        requestAnimationFrame(drawNetwork);
    }

    resizeCanvas();
    createNodes();
    drawNetwork();

    window.addEventListener('resize', function() {
        resizeCanvas();
        createNodes();
    });

    document.addEventListener('mousemove', function(e) {
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });

    document.addEventListener('mouseleave', function() {
        mouse.x = -1000;
        mouse.y = -1000;
    });
})();
</script>

<script>
(function() {
    // ===== Carousel =====
    const slides = document.querySelectorAll('.showcase-slide');
    const dotsContainer = document.getElementById('carouselDots');
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
