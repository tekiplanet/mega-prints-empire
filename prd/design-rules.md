# MegaPrint Empire – Design Rules & Component Guidelines

## 1. Visual Foundation
MegaPrint Empire uses a **premium, dark-first, SaaS-inspired aesthetic**. The design focuses on depth, clarity, and high-tech elegance, emphasizing our core brand identity.

### Color Palette
- **Primary Blue:** #151F79 (Core brand color. Used for depth, focus sections, and premium branding).
- **Accent Orange:** #F25100 (High-priority action color).

#### Theme: Dark (Default)
- **Background:** `#0A0C10` (Deep Space)
- **Surface (Glass):** `rgba(21, 31, 121, 0.08)` with `backdrop-filter: blur(12px)` (Blue-tinted glass)
- **Text Primary:** `#FFFFFF`
- **Text Secondary:** `#A1A1AA`
- **Border:** `rgba(255, 255, 255, 0.1)`

#### Theme: Light
- **Background:** `#F8FAFC`
- **Surface (Glass):** `rgba(21, 31, 121, 0.05)` with `backdrop-filter: blur(12px)`
- **Text Primary:** `#0F172A`
- **Text Secondary:** `#475569`
- **Border:** `rgba(15, 23, 42, 0.1)`

### Typography
- **Primary Font Family:** `'Poppins', sans-serif`
- **Headings:** Semi-bold to Bold. Large, impactful sizing for hero sections.
- **Body:** Regular weight. 16px base size. 1.6 line height for readability.

### Iconography
- **No Emojis:** Emojis are strictly forbidden to maintain a professional SaaS feel.
- **SVG Driven:** Use clean, minimalist SVG icons.
- **Stroke Width:** 2px.

---

## 2. Global Design Principles
- **Theme Switching:** Essential feature. persistent toggle in header.
- **Mobile First:** Responsive by design.
- **Mobile Menu:** Dedicated full-screen overlay or sidebar for mobile devices.
- **Glassmorphism:** Consistent use of translucent blurs to create depth.
- **Grid Backgrounds:** 1px grid patterns for tech-forward appeal.

---

## 3. Reusable Component Standards
All elements must be reusable and theme-aware.

### A. Buttons
- **Primary:** Accent Orange.
- **Secondary:** Theme-aware glass button.

### B. Glass Cards
- Used for all content containers.
- Tinted according to the current theme.

---

## 4. Mobile Responsiveness
- **Desktop Header:** Horizontal nav with logo and CTAs.
- **Mobile Header:** Logo (left/center) and Hamburger (right).
- **Mobile Menu:** Full-page slide-in or overlay with large, touch-friendly links.
