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


<!-- Advanced Services Section -->
<section class="section-gap" style="background: radial-gradient(circle at bottom, var(--glow-color), transparent 70%);">
    <div class="container">
        <div style="margin-bottom: 5rem; text-align: center;">
            <div class="glass" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.6rem 1.2rem; border-radius: 100px; margin-bottom: 1.5rem;">
                <span style="font-size: 0.85rem; font-weight: 700; color: var(--accent-orange); text-transform: uppercase; letter-spacing: 0.1em;">Our Ecosystem</span>
            </div>
            <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); letter-spacing: -0.03em; line-height: 1.1;">Architecting <span class="text-accent">Impact</span> Through Print</h2>
            <p class="text-zinc" style="max-width: 600px; margin: 1.5rem auto 0;">We combine surgical precision with modern tech to deliver print solutions that don't just exist—they communicate.</p>
        </div>

        <div class="services-architect-grid">
            <!-- Digital Printing (Main Large) -->
            <div class="service-card-v2" style="grid-column: span 8;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_0560.HEIC?auto=format&fit=crop&q=80&w=1200" alt="Digital Printing">
                <div class="service-content-v2">
                    <span class="service-tag">Most Popular</span>
                    <h3>High-Speed Digital Printing</h3>
                    <p>Sharp, vibrant prints for flyers, business cards, and brochures with 24h rapid response delivery.</p>
                </div>
            </div>

            <!-- Large Format -->
            <div class="service-card-v2" style="grid-column: span 4;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1981.HEIC?auto=format&fit=crop&q=80&w=800" alt="Large Format">
                <div class="service-content-v2">
                    <span class="service-tag">Visibility</span>
                    <h3>Large Format</h3>
                    <p>Banners, roll-ups, and outdoor branding designed for maximum impact and durability.</p>
                </div>
            </div>

            <!-- Branding & Corporate -->
            <div class="service-card-v2" style="grid-column: span 4;">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1368.JPG?auto=format&fit=crop&q=80&w=800" alt="Branding">
                <div class="service-content-v2">
                    <span class="service-tag">Identity</span>
                    <h3>Corporate Branding</h3>
                    <p>Complete corporate identity sets. ID cards, letterheads, and official stationery engineered for trust.</p>
                </div>
            </div>

            <!-- Custom Merchandise -->
            <div class="service-card-v2" style="grid-column: span 8;">
                <img src="https://ik.imagekit.io/zudgi2oxs/Estamparia%20personalizada%20em%20pe%C3%A7as%20que%20a%20cliente%20j%C3%A1%20havia%20adquirido%20na%20Hering.jpg?updatedAt=1767362802183?auto=format&fit=crop&q=80&w=1200" alt="Merchandise">
                <div class="service-content-v2">
                    <span class="service-tag">Engagement</span>
                    <h3>Customized Merchandise</h3>
                    <p>From T-shirts and mugs to branded souvenirs. Leave a lasting impression beyond paper surfaces.</p>
                </div>
            </div>

            <!-- Packaging -->
            <div class="service-card-v2" style="grid-column: span 6;">
                <img src="https://ik.imagekit.io/zudgi2oxs/small-wn-3-1013x1024.jpg?auto=format&fit=crop&q=80&w=1000" alt="Packaging">
                <div class="service-content-v2">
                    <span class="service-tag">Retail</span>
                    <h3>Packaging & Labeling</h3>
                    <p>Premium labels and structural packaging that make your products stand out on any shelf.</p>
                </div>
            </div>

            <!-- Design -->
            <div class="service-card-v2" style="grid-column: span 6;">
                <img src="https://ik.imagekit.io/zudgi2oxs/design-school-in-ibadan-lagos-nigeria.jpg?auto=format&fit=crop&q=80&w=1000" alt="Graphic Design">
                <div class="service-content-v2">
                    <span class="service-tag">Creative</span>
                    <h3>Graphic Design</h3>
                    <p>Visually compelling brand identities and campaign assets tailored to convert your target audience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Velocity Marquee -->
<div class="speed-marquee">
    <div class="marquee-content">
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.71-2.13.71-2.13l-4.43-.87ZM2.1 4.3a2.49 2.49 0 0 0 0 3.5L4 9.7l7-7-1.9-1.9a2.49 2.49 0 0 0-3.5 0L4.3 2.1Z"/><path d="m22 2-3 3-9.5 9.5M11 12.5l5.5 5.5"/></svg> 24H RAPID RESPONSE</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg> NATIONWIDE DELIVERY</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M13 2 L3 14 L12 14 L11 22 L21 10 L12 10 L13 2 Z"/></svg> HIGH-SPEED PRINTING</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg> GLOBAL SHIPPING</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg> SURGICAL PRECISION</div>
        <!-- Duplicate for loop -->
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.71-2.13.71-2.13l-4.43-.87ZM2.1 4.3a2.49 2.49 0 0 0 0 3.5L4 9.7l7-7-1.9-1.9a2.49 2.49 0 0 0-3.5 0L4.3 2.1Z"/><path d="m22 2-3 3-9.5 9.5M11 12.5l5.5 5.5"/></svg> 24H RAPID RESPONSE</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg> NATIONWIDE DELIVERY</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><path d="M13 2 L3 14 L12 14 L11 22 L21 10 L12 10 L13 2 Z"/></svg> HIGH-SPEED PRINTING</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg> GLOBAL SHIPPING</div>
        <div class="marquee-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 8px; transform: translateY(-1px);"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg> SURGICAL PRECISION</div>
    </div>
</div>

<!-- Why Speed Matters: Velocity Engine -->
<section class="velocity-section">
    <div class="velocity-glow-path"></div>
    <div class="container">
        <div class="velocity-grid">
            <div class="velocity-visual">
                <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1987.HEIC?auto=format&fit=crop&q=80&w=800" alt="High Speed Printing">
            </div>
            
            <div style="position: relative; z-index: 10;">
                <div class="glass" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.6rem 1.2rem; border-radius: 100px; margin-bottom: 2rem;">
                    <span style="font-size: 0.85rem; font-weight: 700; color: var(--accent-orange); text-transform: uppercase;">Efficiency Engine</span>
                </div>
                
                <h2 style="font-size: clamp(2.5rem, 5vw, 4.5rem); letter-spacing: -0.04em; line-height: 1; margin-bottom: 3rem;">
                    Precision at the <br> <span class="text-accent">Speed of Empire</span>
                </h2>
                
                <div class="velocity-beat">
                    <h3>01. Digital Sync</h3>
                    <p>Our intake pipeline is fully digitized. From instant quotes to real-time design approvals, we eliminate the lag between your idea and our machinery.</p>
                </div>
                
                <div class="velocity-beat">
                    <h3>02. Concurrent Lab</h3>
                    <p>Using industrial-grade concurrent processing, we handle bulk orders and custom prints simultaneously without missing a single detail.</p>
                </div>
                
                <div class="velocity-beat">
                    <h3>03. Logistical Reach</h3>
                    <p>Engineered for nationwide impact, our logistics network ensures your brand reaches all 36 states and global destinations with surgical speed.</p>
                </div>
                
                <a href="/order" class="btn btn-primary" style="margin-top: 2rem;">Start Rapid Order &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Technology & Process: The Laboratory -->
<section class="lab-section">
    <div class="lab-split-bg">
        <div class="lab-split-left"></div>
        <div class="lab-split-right"></div>
    </div>
    
    <div class="container">
        <div class="lab-grid">
            <div class="lab-visual-stack">
                <div class="lab-main-image">
                    <img src="https://ik.imagekit.io/zudgi2oxs/IMG_1993.HEIC?auto=format&fit=crop&q=80&w=1200" alt="Industrial Print Array">
                </div>
                
                <div class="lab-data-card">
                    <div class="lab-sensor">
                        <div class="sensor-dot"></div>
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--accent-orange); text-transform: uppercase;">System Online</span>
                    </div>
                    <div style="font-size: 0.85rem; color: var(--text-primary); font-weight: 600;">2024 Industrial Array</div>
                    <div style="font-size: 0.75rem; color: var(--text-secondary); margin-top: 0.25rem;">Consistency Index: 99.9%</div>
                    <div style="margin-top: 1rem; height: 40px; border-left: 2px solid var(--accent-orange); padding-left: 0.75rem; display: flex; align-items: center;">
                        <span style="font-size: 0.7rem; color: var(--text-secondary);">Recalibrating for pixel-perfect output...</span>
                    </div>
                </div>
            </div>
            
            <div class="lab-content">
                <div class="glass" style="display: inline-flex; align-items: center; gap: 0.75rem; padding: 0.6rem 1.2rem; border-radius: 100px; margin-bottom: 2rem;">
                    <span style="font-size: 0.85rem; font-weight: 700; color: var(--accent-orange); text-transform: uppercase;">Process Advantage</span>
                </div>
                
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); letter-spacing: -0.04em; line-height: 1.1; margin-bottom: 2.5rem;">
                    The Fusion of <br> <span class="text-accent">Hardware & Soul</span>
                </h2>
                
                <p class="text-zinc" style="font-size: 1.1rem; max-width: 500px;">
                    Our commitment to consistency isn't an accident. It's the result of industrial-grade machinery guided by the industry's most skilled artisans.
                </p>
                
                <div class="lab-feature">
                    <div class="lab-feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v10m0 0l-4-4m4 4l4-4M5 22h14"></path></svg>
                    </div>
                    <div>
                        <h4>Precision Calibration</h4>
                        <p>Our 2024 Industrial Print Array is recalibrated every 24 hours to ensure that color accuracy remains identical across every single unit.</p>
                    </div>
                </div>
                
                <div class="lab-feature">
                    <div class="lab-feature-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div>
                        <h4>Master Craftsmanship</h4>
                        <p>Hardware is only half the story. Our technicians bring years of material expertise to guide every print through specialized finishing processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
