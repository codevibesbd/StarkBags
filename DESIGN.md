---
name: Starkbags
description: Industrial-grade luggage and travel gear manufacturing powerhouse
colors:
  primary: "#E11D48"
  primary-hover: "#BE123C"
  primary-subtle: "#FFE4E6"
  obsidian: "#0B0F17"
  carbon-slate: "#1E293B"
  surface-light: "#FFFFFF"
  neutral-bg: "#F8FAFC"
  border-subtle: "#E2E8F0"
  border-strong: "#CBD5E1"
  text-primary: "#0F172A"
  text-muted: "#64748B"
  maritime-blue: "#2563EB"
typography:
  display:
    fontFamily: "Plus Jakarta Sans, system-ui, -apple-system, sans-serif"
    fontSize: "3.75rem"
    fontWeight: 800
    lineHeight: 1.05
    letterSpacing: "-0.025em"
  headline:
    fontFamily: "Plus Jakarta Sans, system-ui, -apple-system, sans-serif"
    fontSize: "2.25rem"
    fontWeight: 700
    lineHeight: 1.15
    letterSpacing: "-0.02em"
  title:
    fontFamily: "Plus Jakarta Sans, system-ui, -apple-system, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 600
    lineHeight: 1.3
    letterSpacing: "-0.01em"
  body:
    fontFamily: "Inter, system-ui, -apple-system, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
    letterSpacing: "0em"
  label:
    fontFamily: "Plus Jakarta Sans, system-ui, -apple-system, sans-serif"
    fontSize: "0.75rem"
    fontWeight: 600
    lineHeight: 1
    letterSpacing: "0.05em"
rounded:
  sm: "6px"
  md: "10px"
  lg: "14px"
  full: "9999px"
spacing:
  xs: "4px"
  sm: "8px"
  md: "16px"
  lg: "24px"
  xl: "32px"
  2xl: "48px"
  3xl: "64px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface-light}"
    rounded: "{rounded.sm}"
    padding: "12px 24px"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.obsidian}"
    textColor: "{colors.surface-light}"
    rounded: "{rounded.sm}"
    padding: "12px 24px"
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.sm}"
    padding: "12px 24px"
  card-facility:
    backgroundColor: "{colors.surface-light}"
    rounded: "{rounded.lg}"
    padding: "24px"
  card-product:
    backgroundColor: "{colors.surface-light}"
    rounded: "{rounded.lg}"
    padding: "20px"
---

# Design System: Starkbags (Stark Bag Industries Ltd.)

## Overview

**Creative North Star: "The Industrial Atelier"**

Starkbags is an export-scale luggage, backpack, and travel gear manufacturer operating across multiple specialized factory units in Bangladesh. The design system bridges raw industrial manufacturing power (1.5M+ pcs/month, 5,000+ workforce, 6 sister concerns) with the refined, architectural precision of high-end global travel brands (Rimowa, Tumi, Aer).

The visual language rejects generic corporate "WordPress/Elementor slop"—no decorative gradient text, no fuzzy drop-shadow halos, no artificial stock illustrations, and no kicker eyebrows above headings. Every screen communicates industrial capability, structural integrity, and global compliance through tactile typography, razor-sharp geometric alignment, authentic photography of production floors and hard-shell luggage, and disciplined contrast.

### Key Characteristics:
- **Architectural & Bold:** Strong dark-field anchors (`#0B0F17`) juxtaposed with clean, high-air white product stages (`#FFFFFF` on `#F8FAFC`).
- **Signature Industrial Crimson:** Stark’s energetic red accent (`#E11D48`) used as an intentional focal pulse for primary calls to action, capacity highlights, and key brand markers—never smeared across background gradients.
- **Physicality & Material Truth:** Showcases real materials (polycarbonate shells, ballistics nylon, anodized aluminum handles, automated sewing lines) with clean 1px structural borders and subtle 2px hover lifts.
- **Global Compliance Authority:** Prominent presentation of international certifications (ISO 9001/14001, amfori BSCI, Sedex, FSC) and worldwide export routes.

---

## Colors

The palette balances Stark's energetic manufacturing crimson with deep carbon obsidian and clean architectural neutrals.

### Primary
- **Stark Crimson** (`#E11D48`): The signature brand accent. Used for primary CTAs, active states, key metric highlights, and the brand monogram.
- **Stark Crimson Deep** (`#BE123C`): The pressed/hover variant for primary buttons and high-contrast interactions.
- **Crimson Tint** (`#FFE4E6`): Subtle badge backdrops and highlight states.

### Secondary
- **Maritime Blue** (`#2563EB`): Dedicated to global trade routes, export logistics maps, and compliance verification marks.

### Neutral
- **Obsidian Black** (`#0B0F17`): Deepest dark anchor. Applied to the primary navigation bar, full-screen industrial hero sections, and the footer foundation.
- **Carbon Slate** (`#1E293B`): Secondary dark container for monthly production capacity stats and technical spec grids.
- **Surface Light** (`#FFFFFF`): Pure white canvas for product cards, sister concern facilities, and certification badges.
- **Neutral Background** (`#F8FAFC`): Slate-50 ground providing clean separation for white floating cards.
- **Border Subtle** (`#E2E8F0`): Crisp 1px structural framing for cards, inputs, and dividers.
- **Border Strong** (`#CBD5E1`): Active input borders and secondary button outlines.
- **Text Primary** (`#0F172A`): Slate-900 high-contrast body and heading color.
- **Text Muted** (`#64748B`): Slate-500 for secondary descriptions, spec labels, and captions.

### Named Rules
**The Rarity Rule.** Stark Crimson is an intentional punctuation mark, not a wallpaper. It must occupy no more than 10% of any viewport to preserve maximum visual punch.
**The No-Gradient Rule.** Text, borders, and main card surfaces remain solid. No multi-color gradient sweeps or rainbow fills.

---

## Typography

**Display Font:** `Plus Jakarta Sans` (fallback: `system-ui, -apple-system, sans-serif`)  
**Body Font:** `Inter` (fallback: `system-ui, -apple-system, sans-serif`)  
**Technical/Numerics:** `JetBrains Mono` or `Plus Jakarta Sans` with `font-variant-numeric: tabular-nums`

**Character:** Confident, engineered, and utilitarian. Plus Jakarta Sans delivers sharp, modern geometric display weights, while Inter provides tireless legibility across technical specifications, production capacities, and contact matrices.

### Hierarchy
- **Display** (800 weight, `clamp(2.5rem, 5vw, 3.75rem)`, line-height `1.05`, tracking `-0.025em`): Hero impact statements, defining brand headlines.
- **Headline** (700 weight, `clamp(1.75rem, 3vw, 2.25rem)`, line-height `1.15`, tracking `-0.02em`): Section titles (`SISTER CONCERNS`, `PRODUCTS`, `MONTHLY CAPACITY`).
- **Title** (600 weight, `1.25rem` to `1.5rem`, line-height `1.3`, tracking `-0.01em`): Facility names, product names, article titles.
- **Body** (400/500 weight, `1rem`, line-height `1.6`, measure `65-75ch`): Factory overviews, descriptive copy, specification bullets.
- **Label / Technical** (600 weight, `0.75rem`, letter-spacing `0.05em`, uppercase): Metadata, certification badges, stat descriptors.

### Named Rules
**The No-Eyebrow Rule.** Never place a tiny kicker or eyebrow label above section headings. Let section headlines speak with their own scale, weight, and position.

---

## Layout

- **Viewport Discipline (1 Section per Screen):** The desktop landing experience (at 1440×900) presents one clear narrative section per viewport:
  1. *Screen 1:* Full-bleed Hero & core manufacturing mission.
  2. *Screen 2:* Core Metrics & Key Operational Pillars (Who We Are, What We Do, Industry 4.0).
  3. *Screen 3:* Global Export Route Network radiating from Bangladesh.
  4. *Screen 4:* Monthly Production Capacity & Sister Concern Manufacturing Facilities.
  5. *Screen 5:* Signature Product Showcase (Hard-shell Luggage, Backpacks, Duffels).
  6. *Screen 6:* Industrial Manufacturing Floor Callout & Global Certifications.
- **Max Container Width:** `1280px` (`max-w-7xl`) centered with equal horizontal padding (`px-6` on mobile, `px-12` on desktop).
- **Rhythm & Spacing:** Generous section spacing (`py-20` to `py-28`). Spacing above a heading is always at least 2× the space below it.

---

## Elevation & Depth

The system uses **flat surfaces with crisp 1px borders** at rest, reserving elevation exclusively as a tactile response to user interaction.

### Shadow Vocabulary
- **Resting Surface:** Zero shadow. Defined cleanly by `border: 1px solid #E2E8F0`.
- **Card Hover (`elevation-hover`):** `box-shadow: 0 12px 28px -6px rgba(11, 15, 23, 0.08), 0 4px 10px -2px rgba(11, 15, 23, 0.04)` combined with `transform: translateY(-2px)`.
- **Modal / Flyout (`elevation-dialog`):** `box-shadow: 0 24px 48px -12px rgba(11, 15, 23, 0.25)`.

### Named Rules
**Declare Elevation Once.** Never pair a heavy border with a prominent drop shadow (the "ghost card"). A card either has a crisp 1px border at rest, or an ambient surface lift on hover.

---

## Shapes

- **Card Radii:** `14px` (`rounded-xl` to `rounded-2xl`) for product cards, facility cards, and feature blocks.
- **Control Radii:** `6px` to `8px` (`rounded-md` to `rounded-lg`) for buttons, form inputs, and search fields.
- **Pills:** `9999px` (`rounded-full`) reserved strictly for small status tags, category chips, and floating badge counters.
- **Borders:** Crisp, razor-thin `1px` borders matching the architectural grid.

---

## Components

### Buttons
- **Shape:** `6px` radius (`rounded-md`), `font-weight: 600`, tracking `0em`.
- **Primary:** Background `#E11D48`, text `#FFFFFF`, padding `12px 24px`. On hover: `#BE123C`, subtle `translateY(-1px)`. On active: scale `0.98`.
- **Secondary (Dark):** Background `#0B0F17`, text `#FFFFFF`, padding `12px 24px`. On hover: `#1E293B`.
- **Outline / Ghost:** Background `transparent`, border `1px solid #CBD5E1`, text `#0F172A`. On hover: border `#0B0F17`, background `#F8FAFC`.

### Facility Cards (Sister Concerns)
- **Structure:** Crisp white background `#FFFFFF`, 1px border `#E2E8F0`, 14px radius.
- **Image:** 16:9 ratio photo of the factory exterior or clean production line with `object-fit: cover`.
- **Content:** Facility name (H3 in Plus Jakarta Sans), specific specialization (e.g. "Polymer & Shell Molding", "Printing & Accessories"), capacity badge, and location.
- **Hover:** 2px lift, 1.02x subtle photo scale inside frame.

### Product Showcase Cards
- **Structure:** Clean white stage `#FFFFFF`, 14px radius, 1px border `#E2E8F0`.
- **Image:** Isolated product photograph (suitcases, backpacks, duffels) on neutral/transparent background with ample breathing room.
- **Details:** Product category badge, model name, primary materials (e.g., "100% Bayer Polycarbonate", "Cordura 1000D"), and inquiry button.

### Capacity & Metric Displays
- **Layout:** High-contrast slate container `#1E293B` or energetic crimson block.
- **Numerals:** Large tabular digits (e.g., `1.5M+`, `5,000+`, `9,600`) in 800 weight with tight tracking.
- **Labels:** Uppercase 11px muted slate-400 label beneath the number.

### Navigation Header
- **Desktop:** Sticky navigation with subtle backdrop blur (`bg-[#0B0F17]/95 backdrop-blur-md`).
- **Brand:** Stylized red Stark "S" logo with bold white wordmark.
- **Links:** Navigation items (HOME, PRODUCTS, FACTORIES, GLOBAL PRESENCE, ABOUT, CONTACT) in 500 weight, hover in `#E11D48`.
- **Action:** Right-aligned "Request Factory Quote" primary crimson button.

---

## Do's and Don'ts

### Do:
- **Do** showcase real high-resolution photography of Stark’s factory facilities, sewing lines, and luggage products.
- **Do** maintain a strict 1-section-per-screen vertical pacing on desktop for core presentation areas.
- **Do** use tabular numbers (`font-variant-numeric: tabular-nums`) for capacity, workforce, and facility metrics.
- **Do** provide smooth, quiet micro-interactions (2px card lift, 1.02x photo zoom inside container, 150ms button transition).
- **Do** highlight authentic international compliance standards (ISO, amfori BSCI, Sedex, FSC).

### Don't:
- **Don't** use decorative gradient text or rainbow fills.
- **Don't** add kicker eyebrows or category labels floating above section headings.
- **Don't** use generic stock vector doodles, cartoon illustrations, or amateur SVG sketches.
- **Don't** allow third-party WordPress spam or unvetted news content into the application.
- **Don't** stack heavy borders with dark offset drop shadows ("ghost cards").
- **Don't** use carousels or timed auto-rotating tabs that hide content from users.

