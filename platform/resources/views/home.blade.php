@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="position: relative; overflow: hidden; margin-top: -5rem; padding-top: 7.5rem; min-height: 85vh; display: flex; align-items: center; background: url('https://ik.imagekit.io/zudgi2oxs/IMG_2630.HEIC?auto=format&fit=crop&q=80&w=2000') no-repeat center center; background-size: cover;">
    <!-- Theme-aware Overlay -->
    <div style="position: absolute; inset: 0; background: var(--bg-color); opacity: 0.85; z-index: 1;"></div>
    
    <div class="glow" style="top: -10%; left: 50%; transform: translateX(-50%); z-index: 2;"></div>
    <div class="container" style="text-align: center; position: relative; z-index: 3; width: 100%;">

        
        <div class="glass" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.6rem 1.2rem; border-radius: 100px; margin-bottom: 2.5rem;">
            <div style="width: 24px; height: 24px; background: var(--accent-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                 <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <span style="font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">Mega Prints Empire</span>
        </div>
        
        <h1 class="text-gradient" style="font-size: clamp(2.8rem, 10vw, 5.5rem); line-height: 1; margin-bottom: 2rem; letter-spacing: -0.04em; font-weight: 800;">
            Build Your <span class="text-accent">Empire</span> <br> Through Precision
        </h1>
        
        <p class="text-zinc" style="max-width: 650px; margin: 0 auto 3.5rem; font-size: 1.25rem; font-weight: 400; line-height: 1.6;">
            We don't just print. We engineer brand impact with surgical precision and nationwide speed. Formerly Megagraphix, now your scaling partner.
        </p>
        
        <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
            <a href="/order" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1.1rem;">
                Start an Order
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="/services" class="btn btn-secondary" style="padding: 1rem 2.5rem; font-size: 1.1rem;">Explore Ecosystem</a>
        </div>
        
        <!-- Modern Brand Showcase Collage -->
        <div class="collage-container">
            <!-- Center Main -->
            <div class="collage-item float-slow" style="width: 400px; height: 300px; z-index: 10; --rot: -2deg;">
                <img src="https://ik.imagekit.io/zudgi2oxs/Estamparia%20personalizada%20em%20pe%C3%A7as%20que%20a%20cliente%20j%C3%A1%20havia%20adquirido%20na%20Hering.jpg?auto=format&fit=crop&q=80&w=800" alt="Print Lab">
            </div>
            <!-- Top Right -->
            <div class="collage-item float-delay-1" style="width: 280px; height: 200px; top: 0; right: 10%; z-index: 5; --rot: 4deg;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_0508.HEIC?auto=format&fit=crop&q=80&w=600" alt="Tech Setup">
            </div>
            <!-- Top Left -->
            <div class="collage-item float-delay-2" style="width: 240px; height: 180px; top: 5%; left: 8%; z-index: 5; --rot: -6deg;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_0549.HEIC?auto=format&fit=crop&q=80&w=500" alt="Packaging">
            </div>
            <!-- Bottom Left -->
            <div class="collage-item float-delay-1" style="width: 300px; height: 220px; bottom: 0; left: 15%; z-index: 8; --rot: 3deg;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1305.JPG?auto=format&fit=crop&q=80&w=600" alt="Branding">
            </div>
            <!-- Bottom Right -->
            <div class="collage-item float-delay-2" style="width: 260px; height: 260px; bottom: 5%; right: 5%; z-index: 4; --rot: -4deg;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1987.HEIC?auto=format&fit=crop&q=80&w=500" alt="Custom Tshirts">
            </div>
        </div>

    </div>
</section>

<!-- Modern Panoramic Metrics Ribbon -->
<section class="metrics-ribbon">
    <div class="glow" style="top: 0; left: 0; opacity: 0.15;"></div>
    <div class="container">
        <div class="metrics-grid">
            <div class="metric-card">
                <span class="metric-number">15+</span>
                <span class="metric-label">Years Excellence</span>
            </div>
            <div class="metric-card">
                <span class="metric-number">36</span>
                <span class="metric-label">States Covered</span>
            </div>
            <div class="metric-card">
                <span class="metric-number">10K</span>
                <span class="metric-label">Projects Solved</span>
            </div>
            <div class="metric-card">
                <span class="metric-number">24H</span>
                <span class="metric-label">Rapid Delivery</span>
            </div>
        </div>
    </div>
</section>


<!-- Services Bento Grid -->
<section class="section-gap">
    <div class="container">
        <div style="margin-bottom: 5rem;">
            <h2 style="font-size: 3.5rem; letter-spacing: -0.02em;">Our <span class="text-accent">Services</span></h2>
            <p class="text-zinc">Modern tools for modern problems.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(12, 1fr); gap: 1.5rem;">
            <!-- Large Item -->
            <div class="glass" style="grid-column: span 8; padding: 4rem; position:relative; overflow:hidden;">
                <div style="position:absolute; top:-2rem; right:-2rem; width: 200px; height: 200px; background: var(--primary-blue); filter: blur(60px); opacity:0.2;"></div>
                <h3 style="font-size: 2rem; margin-bottom: 1rem;">End-to-End Branding</h3>
                <p class="text-zinc" style="max-width: 400px; margin-bottom: 2rem;">Total corporate identity engineering. Letterheads, ID cards, and official stationery.</p>
                <a href="/services/branding" class="btn btn-secondary">Get Package &rarr;</a>
            </div>
            <!-- Smaller Item -->
            <div class="glass" style="grid-column: span 4; padding: 3rem; background: var(--primary-blue);">
                <h3 style="color: white; margin-bottom: 1rem;">Digital Print</h3>
                <p style="color: rgba(255,255,255,0.7); margin-bottom: 2rem;">Sharp flyers & business cards with 24h turnaround.</p>
                <a href="/services/digital" class="btn btn-primary" style="background: white; color: var(--primary-blue);">Order Now</a>
            </div>
            <!-- Medium Item -->
            <div class="glass" style="grid-column: span 6; padding: 3rem;">
                 <h3 style="margin-bottom: 1rem;">Large Format</h3>
                 <p class="text-zinc">Banners and outdoor visibility that demands attention.</p>
            </div>
            <!-- Medium Item -->
            <div class="glass" style="grid-column: span 6; padding: 3rem;">
                 <h3 style="margin-bottom: 1rem;">Custom Merchandise</h3>
                 <p class="text-zinc">Branded essentials. T-shirts, mugs, and packaging.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Adjust layout for mobile bento grid
    if(window.innerWidth < 768) {
        const items = document.querySelectorAll('.glass');
        items.forEach(i => i.style.gridColumn = 'span 12');
    }
</script>
@endsection
