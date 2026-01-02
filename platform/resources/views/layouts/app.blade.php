<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MegaPrint Empire - Precision Branding</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-grid"></div>

    <!-- Main Navigation Header -->
    <header class="glass" style="position: sticky; top: 1rem; margin: 0 1.5rem; z-index: 1000; border-radius: 100px; padding: 0.5rem 1rem;">
        <div class="container" style="max-width: 1400px;">
            
            <!-- Desktop Nav -->
            <div class="header-desktop">
                <a href="/" style="display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 38px; height: 38px; background: var(--primary-blue); border-radius: 10px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.1);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
                    </div>
                    <span style="font-size: 1.25rem; font-weight: 800; letter-spacing: -0.02em;">MegaPrint <span class="text-accent">Empire</span></span>
                </a>

                <nav style="display: flex; gap: 2rem; align-items: center;">
                    <a href="/" style="font-weight: 500;">Home</a>
                    <a href="/services" class="text-zinc">Services</a>
                    <a href="/about" class="text-zinc">About</a>
                    <a href="/contact" class="text-zinc">Contact</a>
                </nav>

                <div style="display: flex; gap: 1rem; align-items: center;">
                    <button id="theme-toggle" class="glass theme-btn-global" title="Toggle Theme">
                        <svg class="sun-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        <svg class="moon-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </button>
                    <a href="/login" class="text-zinc" style="font-weight: 500;">Login</a>
                    <a href="/order" class="btn btn-primary" style="padding: 0.5rem 1.4rem; font-size: 0.875rem;">Get Started</a>
                </div>
            </div>

            <!-- Mobile Nav Bar -->
            <div class="header-mobile">
                <a href="/" style="font-weight: 800; font-size: 1.1rem;">MegaPrint <span class="text-accent">Empire</span></a>
                <div style="display: flex; gap: 1rem; align-items: center;">
                    <button class="theme-toggle theme-btn-global">
                        <svg class="sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        <svg class="moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </button>
                    <button id="mobile-menu-trigger" style="background:none; border:none; color:inherit; cursor:pointer;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="mobile-menu">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-weight: 800; font-size: 1.2rem;">MegaPrint Empire</span>
            <button id="mobile-menu-close" style="background:none; border:none; color:inherit; cursor:pointer;">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <nav class="mobile-menu-links">
            <a href="/">Home</a>
            <a href="/services" class="text-zinc">Services</a>
            <a href="/about" class="text-zinc">About Us</a>
            <a href="/contact" class="text-zinc">Contact</a>
            <div style="margin-top: 2rem; display: flex; flex-direction: column; gap: 1rem;">
                <a href="/login" class="btn btn-secondary">Login</a>
                <a href="/order" class="btn btn-primary">Get Started</a>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand-side">
                    <h3>MEGA <span class="text-accent">PRINTS</span></h3>
                    <p>At Mega Print Empire, we don't just print; we help you communicate and leave lasting impressions.</p>
                    <div class="social-links">
                        <a href="#" class="social-link" title="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                        <a href="#" class="social-link" title="Twitter/X">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4l11.733 16h4.267l-11.733 -16z"/><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"/></svg>
                        </a>
                        <a href="#" class="social-link" title="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="social-link" title="TikTok">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>
                        </a>
                    </div>
                </div>

                <div class="footer-column">
                    <span class="footer-title">Solutions</span>
                    <ul class="footer-links">
                        <li><a href="/services">Branding & Identity</a></li>
                        <li><a href="/services">Corporate Stationery</a></li>
                        <li><a href="/services">Large Format</a></li>
                        <li><a href="/services">Event Collaterals</a></li>
                        <li><a href="/services">Custom Fabrication</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <span class="footer-title">Company</span>
                    <ul class="footer-links">
                        <li><a href="/about">Our Story</a></li>
                        <li><a href="/process">The Lab</a></li>
                        <li><a href="/logistics">Global Reach</a></li>
                        <li><a href="/contact">Support</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <span class="footer-title">Fulfillment Hubs</span>
                    <div class="footer-contact-item">
                        <div class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="contact-text">
                            <strong>Benin City</strong><br>
                            Dawnson Junction,<br>Edo State, Nigeria.
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l2.18-2.18a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="contact-text">
                            +234 800 MEGAPRINT<br>
                            contact@megaprint.empire
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">
                    © 2026 Mega Print Empire. Always On Point.
                </div>
                <div style="font-size: 0.75rem; color: var(--text-secondary); display: flex; gap: 1rem;">
                    <span>Terms of Service</span>
                    <span>Security Disclosure</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Check for saved theme
        const savedTheme = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-theme', savedTheme);

        // Theme Toggle Logic
        const themeBtn = document.getElementById('theme-toggle');
        const themeBtnMobile = document.querySelector('.header-mobile .theme-toggle');
        const html = document.documentElement;
        
        const toggleTheme = () => {
            const current = html.getAttribute('data-theme');
            const target = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', target);
            localStorage.setItem('theme', target);
        };

        if(themeBtn) themeBtn.addEventListener('click', toggleTheme);
        if(themeBtnMobile) themeBtnMobile.addEventListener('click', toggleTheme);

        // Mobile Menu Logic
        const trigger = document.getElementById('mobile-menu-trigger');
        const close = document.getElementById('mobile-menu-close');
        const overlay = document.getElementById('mobile-overlay');

        if(trigger) trigger.addEventListener('click', () => overlay.classList.add('active'));
        if(close) close.addEventListener('click', () => overlay.classList.remove('active'));
    </script>
</body>
</html>
