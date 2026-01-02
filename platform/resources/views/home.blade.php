@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="section-gap" style="position: relative; overflow: hidden; padding-top: 5rem;">
    <div class="glow" style="top: -10%; left: 50%; transform: translateX(-50%);"></div>
    <div class="container" style="text-align: center;">
        
        <div class="glass" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.6rem 1.2rem; border-radius: 100px; margin-bottom: 2.5rem;">
            <div style="width: 24px; height: 24px; background: var(--accent-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                 <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <span style="font-size: 0.9rem; font-weight: 600; color: var(--text-primary);">Premium Brand Solutions</span>
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
        
        <!-- Large Brand Showcase -->
        <div class="glass" style="margin-top: 6rem; height: 450px; display: flex; flex-direction: column; align-items: center; justify-content: center; border-radius: 30px; border: 2px solid var(--primary-blue); overflow:hidden; position:relative;">
             <div style="position:absolute; inset:0; background: linear-gradient(45deg, var(--primary-blue), transparent); opacity: 0.1;"></div>
             <svg width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="var(--primary-blue)" stroke-width="1" opacity="0.3"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
             <p class="text-zinc" style="margin-top: 2rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase;">Megagraphix &rarr; MegaPrint Empire</p>
        </div>
    </div>
</section>

<!-- Stats / Trust Section (Mix of Primary Blue) -->
<section class="section-gap" style="background: var(--primary-blue); padding: 6rem 0; margin-left: -1rem; margin-right: -1rem; position: relative;">
     <div class="bg-grid" style="opacity: 0.1;"></div>
     <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 4rem; text-align: center;">
          <div>
              <h2 style="font-size: 3.5rem; color: white;">15+</h2>
              <p style="color: rgba(255,255,255,0.7); font-weight: 500;">Years of Expertise</p>
          </div>
          <div>
              <h2 style="font-size: 3.5rem; color: white;">36</h2>
              <p style="color: rgba(255,255,255,0.7); font-weight: 500;">States Covered</p>
          </div>
          <div>
              <h2 style="font-size: 3.5rem; color: white;">10k+</h2>
              <p style="color: rgba(255,255,255,0.7); font-weight: 500;">Projects Delivered</p>
          </div>
          <div>
              <h2 style="font-size: 3.5rem; color: white;">24h</h2>
              <p style="color: rgba(255,255,255,0.7); font-weight: 500;">Rapid Response</p>
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
