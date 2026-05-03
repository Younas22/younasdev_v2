<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $seo['title'] }}</title>
    <meta name="description" content="{{ $seo['description'] }}">
    <meta name="keywords" content="{{ $seo['keywords'] }}">
    <meta property="og:title" content="{{ $seo['title'] }}">
    <meta property="og:description" content="{{ $seo['description'] }}">
    <meta property="og:image" content="{{ $seo['img'] }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <link rel="icon" type="image/png" href="{{ pub_asset('public/assets/images/personal/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ pub_asset('public/assets/images/personal/logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: { colors: { 'brand': '#B1E78E' } } }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">


    @include('common.analytics')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        * { box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: #000; color: #fff; margin: 0; }
        :root { --brand: #B1E78E; }

        .btn-brand {
            background: #B1E78E; color: #000; font-weight: 700; border: none; cursor: pointer;
            transition: opacity .2s, transform .15s; display: inline-flex; align-items: center;
            justify-content: center; gap: 8px; text-decoration: none; border-radius: 10px;
            padding: 14px 28px; font-size: 1rem;
        }
        .btn-brand:hover { opacity: .88; transform: translateY(-2px); }

        .btn-outline {
            background: transparent; color: #fff; font-weight: 600; border: 2px solid #333;
            cursor: pointer; transition: background .2s, color .2s, border-color .2s;
            display: inline-flex; align-items: center; justify-content: center; gap: 8px;
            text-decoration: none; border-radius: 10px; padding: 12px 26px; font-size: 1rem;
        }
        .btn-outline:hover { background: #fff; color: #000; border-color: #fff; }

        .btn-ghost {
            background: rgba(255,255,255,0.06); color: #fff; font-weight: 600;
            border: 1px solid rgba(255,255,255,0.12); cursor: pointer; transition: background .2s;
            display: inline-flex; align-items: center; justify-content: center; gap: 8px;
            text-decoration: none; border-radius: 10px; padding: 12px 26px; font-size: 1rem;
        }
        .btn-ghost:hover { background: rgba(255,255,255,0.11); }

        .wa-float {
            position: fixed; bottom: 28px; right: 28px; z-index: 9999;
            width: 56px; height: 56px; border-radius: 50%; background: #25D366;
            display: flex; align-items: center; justify-content: center;
            box-shadow: 0 4px 20px rgba(37,211,102,.5); transition: transform .2s;
        }
        .wa-float:hover { transform: scale(1.1); }

        .section-line { border-color: #1a1a1a; }
        nav { background: #000; border-bottom: 1px solid #1a1a1a; }

        /* ── SECTION SPLIT EFFECT ── */
        .ss { position: relative; overflow: hidden; }
        .ss > * { position: relative; z-index: 1; }
        .ss::before {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 0;
        }
        /* dark sections — green-tinted panel */
        .ss-l::before {
            background: rgba(177,231,142,0.06);
            clip-path: polygon(0 0, 60% 0, 45% 100%, 0 100%);
        }
        .ss-r::before {
            background: rgba(177,231,142,0.06);
            clip-path: polygon(55% 0, 100% 0, 100% 100%, 40% 100%);
        }
        /* green sections — dark-tinted panel */
        .ss-dl::before {
            background: rgba(0,0,0,0.11);
            clip-path: polygon(0 0, 58% 0, 43% 100%, 0 100%);
        }
        .ss-dr::before {
            background: rgba(0,0,0,0.11);
            clip-path: polygon(57% 0, 100% 0, 100% 100%, 42% 100%);
        }

        .hero-img {
            width: 100%; height: calc(100vh - 64px);
            object-fit: contain; object-position: top center; display: block;
        }
        @media (max-width: 1023px) { .hero-img { height: 300px; } }

        .proof-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: rgba(177,231,142,0.08); border: 1px solid rgba(177,231,142,0.2);
            color: #B1E78E; padding: 5px 14px; border-radius: 100px;
            font-size: 0.75rem; font-weight: 600;
        }

        .service-card {
            background: #0a0a0a; border: 1px solid #1e1e1e; border-radius: 16px;
            padding: 28px; transition: border-color .25s, transform .2s; position: relative; overflow: hidden;
        }
        .service-card:hover { border-color: #B1E78E; transform: translateY(-4px); }
        .service-card::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
            background: linear-gradient(90deg, transparent, #B1E78E, transparent);
            opacity: 0; transition: opacity .25s;
        }
        .service-card:hover::before { opacity: 1; }

        .tag-pill {
            display: inline-flex; align-items: center; gap: 5px;
            background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
            color: #9ca3af; padding: 5px 12px; border-radius: 100px; font-size: 0.72rem; font-weight: 500;
        }

        .glow-green { box-shadow: 0 0 50px rgba(177,231,142,0.12); }

        @keyframes pulse-dot { 0%,100%{opacity:1;} 50%{opacity:.35;} }
        .pulse-dot { animation: pulse-dot 1.6s infinite; }

        .social-link {
            color: #6b7280; text-decoration: none; font-size: .85rem; font-weight: 500;
            display: inline-flex; align-items: center; gap: 5px; transition: color .2s;
        }
        .social-link:hover { color: #B1E78E; }

        .hero-bio a { border-bottom: 1px solid rgba(177,231,142,0.35); transition: border-color .2s; }
        .hero-bio a:hover { border-color: #B1E78E; }

        /* ═══ 8 CLIENTS BLUEPRINT — PREMIUM SECTION ═══ */
        .blueprint-section {
            background: #080808;
            padding: 80px 0;
            border-top: 1px solid #1a1a1a;
        }
        .blueprint-hero {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 56px;
        }
        .blueprint-title {
            font-size: clamp(1.9rem, 4vw, 2.9rem);
            font-weight: 900;
            color: #fff;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin: 16px 0 20px;
        }
        .bp-highlight { color: #B1E78E; }
        .blueprint-subtitle {
            color: #9ca3af;
            font-size: .96rem;
            line-height: 1.75;
            max-width: 680px;
            margin: 0 auto;
        }

        /* STATS */
        .bp-stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 40px;
            max-width: 560px;
            margin-left: auto;
            margin-right: auto;
        }
        .bp-stat-card {
            background: #0f0f0f;
            border: 1px solid #1e1e1e;
            border-radius: 10px;
            padding: 14px 10px;
            text-align: center;
            transition: border-color .2s, transform .18s;
        }
        .bp-stat-card:hover { border-color: rgba(177,231,142,.3); transform: translateY(-2px); }
        .bp-stat-card--accent {
            border-color: rgba(177,231,142,.15);
            box-shadow: 0 0 20px rgba(177,231,142,.07);
        }
        .bp-stat-number {
            font-size: 1.55rem;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            margin-bottom: 5px;
        }
        .bp-stat-number--green { color: #B1E78E; }
        .bp-stat-label {
            font-size: .6rem;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: .08em;
            font-weight: 600;
        }

        /* SECTION LABEL */
        .bp-section-label {
            text-align: center;
            font-size: .68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            color: #374151;
            margin-bottom: 24px;
        }

        /* FLOW DIAGRAM */
        .bp-diagram-section {
            margin-bottom: 56px;
            background: #0d0d0d;
            border: 1px solid #1e1e1e;
            border-radius: 20px;
            padding: 40px 28px 28px;
        }
        .bp-flow {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .bp-flow-step {
            background: #131313;
            border: 1px solid #222;
            border-radius: 14px;
            padding: 18px 20px;
            text-align: center;
            min-width: 100px;
            transition: border-color .2s, transform .2s;
        }
        .bp-flow-step:hover { border-color: rgba(177,231,142,.3); transform: translateY(-2px); }
        .bp-flow-step--final {
            background: rgba(177,231,142,.05);
            border-color: rgba(177,231,142,.4);
            box-shadow: 0 0 36px rgba(177,231,142,.14);
            min-width: 130px;
            transform: scale(1.06);
        }
        .bp-flow-step--final:hover { transform: scale(1.09) translateY(-2px); }
        .bp-flow-number {
            font-size: 1.15rem;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            margin-bottom: 6px;
        }
        .bp-flow-number--final { font-size: 1.4rem; color: #B1E78E; }
        .bp-flow-desc {
            font-size: .62rem;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: .07em;
            font-weight: 600;
        }
        .bp-flow-arrow { font-size: 1.4rem; color: #374151; font-weight: 700; flex-shrink: 0; }
        .bp-math-caption {
            text-align: center;
            color: #4b5563;
            font-size: .8rem;
            font-weight: 600;
            font-style: italic;
            margin: 0;
        }

        /* METHOD GRID */
        .bp-method-section { margin-bottom: 52px; }
        .bp-method-grid {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .bp-method-card {
            background: #0d0d0d;
            border: 1px solid #1e1e1e;
            border-radius: 16px;
            padding: 28px 22px;
            text-align: center;
            flex: 1;
            min-width: 170px;
            max-width: 230px;
            transition: border-color .25s, transform .2s, box-shadow .25s;
            cursor: default;
        }
        .bp-method-card:hover {
            border-color: rgba(177,231,142,.35);
            transform: translateY(-4px);
            box-shadow: 0 10px 40px rgba(177,231,142,.08);
        }
        .bp-method-step {
            font-size: .62rem;
            font-weight: 700;
            color: #B1E78E;
            text-transform: uppercase;
            letter-spacing: .14em;
            margin-bottom: 10px;
        }
        .bp-method-name {
            font-size: 1.45rem;
            font-weight: 900;
            color: #fff;
            letter-spacing: -.02em;
            margin-bottom: 10px;
        }
        .bp-method-desc { font-size: .82rem; color: #6b7280; line-height: 1.55; }
        .bp-method-arrow { font-size: 1.6rem; color: #374151; font-weight: 700; flex-shrink: 0; }

        /* VALUES */
        .bp-values-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin: 0 auto 52px;
            max-width: 680px;
        }
        .bp-value-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: .88rem;
            color: #9ca3af;
            line-height: 1.55;
        }
        .bp-check-icon { color: #B1E78E; margin-top: 2px; flex-shrink: 0; }

        /* PRICING BOX */
        .bp-pricing-box { max-width: 500px; margin: 0 auto; }
        .bp-pricing-inner {
            background: #0d0d0d;
            border: 1px solid rgba(177,231,142,.2);
            border-radius: 20px;
            padding: 36px 30px;
            text-align: center;
            box-shadow: 0 0 60px rgba(177,231,142,.08);
        }
        .bp-price-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 10px;
        }
        .bp-old-price { color: #4b5563; text-decoration: line-through; font-size: .82rem; }
        .bp-new-price {
            color: #B1E78E;
            font-size: 2rem;
            font-weight: 900;
            line-height: 1;
            letter-spacing: -.04em;
        }
        .bp-badge-discount {
            background: rgba(239,68,68,.15);
            color: #f87171;
            border: 1px solid rgba(239,68,68,.3);
            font-size: .7rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 100px;
        }
        .bp-timer-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            color: #6b7280;
            font-size: .72rem;
            margin-bottom: 10px;
        }
        .bp-countdown {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-bottom: 16px;
        }
        .bp-countdown-unit { text-align: center; }
        .bp-countdown-num {
            font-size: 1.4rem;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }
        .bp-countdown-num--green { color: #B1E78E; }
        .bp-countdown-label {
            font-size: .58rem;
            color: #4b5563;
            text-transform: uppercase;
            letter-spacing: .1em;
            font-weight: 700;
            margin-top: 4px;
        }
        .bp-countdown-sep { font-size: 1.2rem; font-weight: 900; color: #374151; margin-bottom: 12px; }
        .bp-cta-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #B1E78E;
            color: #000;
            font-weight: 700;
            font-size: 1rem;
            padding: 16px 28px;
            border-radius: 12px;
            text-decoration: none;
            width: 100%;
            transition: opacity .2s, transform .15s, box-shadow .2s;
            margin-bottom: 12px;
        }
        .bp-cta-btn:hover {
            opacity: .9;
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 30px rgba(177,231,142,.28);
        }
        .bp-cta-note { color: #4b5563; font-size: .74rem; margin: 0; }

        /* Responsive */
        @media (max-width: 768px) {
            .bp-values-grid { grid-template-columns: 1fr; max-width: 100%; }
            .bp-pricing-inner { padding: 26px 18px; }
            .bp-new-price { font-size: 2.2rem; }
        }
        @media (max-width: 480px) {
            .bp-stat-card { padding: 20px 8px; }
            .bp-stat-number { font-size: 1.6rem; }
        }

        /* ═══ BLUEPRINT FORMULA — INFOGRAPHIC SYSTEM ═══ */
        .bpf-wrapper {
            background: #0d0d0d;
            border: 1px solid #1a1a1a;
            border-radius: 14px;
            padding: 26px 22px 20px;
            margin: 0 auto 22px;
            max-width: 1000px;
        }
        .bpf-header { text-align: center; margin-bottom: 20px; }
        .bpf-main-title {
            font-size: 1.45rem;
            font-weight: 900;
            color: #fff;
            letter-spacing: -.03em;
            line-height: 1;
            margin: 0;
            display: inline-block;
        }
        .bpf-main-title::after {
            content: '';
            display: block;
            height: 2px;
            width: 48%;
            background: linear-gradient(90deg, transparent, #B1E78E 50%, transparent);
            margin: 7px auto 0;
            border-radius: 2px;
            opacity: .55;
        }
        .bpf-sub-title {
            font-size: .66rem;
            color: #4b5563;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            margin: 9px 0 0;
        }

        /* FORMULA ROW */
        .bpf-formula {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .bpf-pill {
            background: #111;
            border: 1px solid #1e1e1e;
            border-radius: 8px;
            padding: 8px 10px;
            text-align: center;
            min-width: 60px;
            line-height: 1;
            transition: border-color .18s, transform .15s;
        }
        .bpf-pill:hover { border-color: rgba(177,231,142,.2); transform: translateY(-1px); }
        .bpf-pill--result {
            background: rgba(177,231,142,.06);
            border-color: rgba(177,231,142,.42);
            box-shadow: 0 0 16px rgba(177,231,142,.14);
            min-width: 74px;
        }
        .bpf-pill--result:hover { box-shadow: 0 0 24px rgba(177,231,142,.22); transform: translateY(-2px); }
        .bpf-pill-val {
            display: block;
            font-size: .86rem;
            font-weight: 800;
            color: #fff;
            line-height: 1;
            margin-bottom: 3px;
        }
        .bpf-pill-val--result { font-size: 1rem; color: #B1E78E; }
        .bpf-pill-lbl {
            display: block;
            font-size: .52rem;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: .07em;
            font-weight: 600;
        }

        /* RATE BADGES */
        .bpf-rate {
            background: rgba(177,231,142,.04);
            border: 1px solid rgba(177,231,142,.14);
            border-radius: 100px;
            padding: 5px 8px;
            flex-shrink: 0;
            transition: border-color .18s;
        }
        .bpf-rate:hover { border-color: rgba(177,231,142,.28); }
        .bpf-rate-val {
            display: block;
            font-size: .7rem;
            font-weight: 800;
            color: #B1E78E;
            line-height: 1;
        }

        /* OPERATORS */
        .bpf-op { font-size: .8rem; color: #272727; font-weight: 700; flex-shrink: 0; user-select: none; }

        /* CAPTION */
        .bpf-caption {
            text-align: center;
            color: #374151;
            font-size: .66rem;
            font-weight: 600;
            font-style: italic;
            margin: 0 0 16px;
        }

        /* DIVIDER */
        .bpf-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, #1e1e1e 30%, #1e1e1e 70%, transparent);
            margin-bottom: 14px;
        }

        /* METHOD ROW */
        .bpf-method-heading {
            text-align: center;
            font-size: .66rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            color: #4b5563;
            margin: 0 0 12px;
        }
        .bpf-method-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            flex-wrap: wrap;
        }

        /* ACRONYM CARDS — GROW / BRIGHT / MACTER */
        .bpf-acr-card {
            background: #111;
            border: 1px solid #1e1e1e;
            border-radius: 10px;
            padding: 12px 13px;
            flex: 1;
            min-width: 175px;
            max-width: 295px;
            transition: border-color .18s, transform .15s, box-shadow .2s;
            cursor: default;
        }
        .bpf-acr-card:hover {
            border-color: rgba(177,231,142,.28);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(177,231,142,.07);
        }
        .bpf-acr-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .bpf-acr-name {
            font-size: .88rem;
            font-weight: 900;
            color: #fff;
            letter-spacing: -.01em;
        }
        .bpf-acr-tag {
            font-size: .52rem;
            font-weight: 600;
            color: #374151;
            text-transform: uppercase;
            letter-spacing: .1em;
        }
        .bpf-acr-grid {
            display: grid;
            gap: 4px 3px;
            text-align: center;
        }
        .bpf-acr-grid--4 { grid-template-columns: repeat(4, 1fr); }
        .bpf-acr-grid--6 { grid-template-columns: repeat(6, 1fr); }
        .bpf-acr-col {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 3px;
        }
        .bpf-acr-letter {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 22px;
            height: 22px;
            background: rgba(177,231,142,.08);
            border: 1px solid rgba(177,231,142,.14);
            border-radius: 5px;
            font-size: .68rem;
            font-weight: 800;
            color: #B1E78E;
            line-height: 1;
            flex-shrink: 0;
        }
        .bpf-acr-letter--dim {
            background: rgba(255,255,255,.04);
            border-color: rgba(255,255,255,.07);
            color: #4b5563;
        }
        .bpf-acr-letter--hot {
            background: rgba(177,231,142,.14);
            border-color: rgba(177,231,142,.45);
            color: #B1E78E;
            box-shadow: 0 0 8px rgba(177,231,142,.2);
        }
        .bpf-acr-word {
            font-size: .51rem;
            font-weight: 600;
            color: #6b7280;
            line-height: 1.2;
            text-align: center;
        }
        .bpf-acr-word--hot { color: #B1E78E; }
        .bpf-acr-note {
            font-size: .46rem;
            color: #374151;
            line-height: 1.2;
            text-align: center;
        }
        .bpf-acr-note--hot { color: rgba(177,231,142,.7); }

        /* RESPONSIVE */
        @media (max-width: 640px) {
            .bpf-wrapper { padding: 16px 11px 14px; }
            .bpf-formula { gap: 3px; }
            .bpf-pill { min-width: 48px; padding: 7px 6px; }
            .bpf-pill-val { font-size: .72rem; }
            .bpf-pill--result { min-width: 60px; }
            .bpf-pill-val--result { font-size: .84rem; }
            .bpf-op { font-size: .64rem; }
            .bpf-acr-card { min-width: 140px; padding: 10px 9px; }
            .bpf-acr-letter { width: 18px; height: 18px; font-size: .58rem; }
            .bpf-acr-word { font-size: .44rem; }
            .bpf-acr-note { font-size: .4rem; }
        }
        /* WHO IS THIS FOR */
        .bp-for-section {
            margin: 0 auto 22px;
            max-width: 680px;
            text-align: center;
        }
        .bp-for-label {
            font-size: .66rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            color: #4b5563;
            margin: 0 0 10px;
        }
        .bp-for-list {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            justify-content: center;
        }
        .bp-for-pill {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(177,231,142,.04);
            border: 1px solid rgba(177,231,142,.1);
            border-radius: 100px;
            padding: 5px 11px;
            font-size: .71rem;
            color: #9ca3af;
            font-weight: 500;
            transition: border-color .18s, color .18s;
        }
        .bp-for-pill:hover { border-color: rgba(177,231,142,.25); color: #d1fae5; }
        .bp-for-dot {
            width: 5px;
            height: 5px;
            background: #B1E78E;
            border-radius: 50%;
            flex-shrink: 0;
            opacity: .7;
        }

        /* PRICING TOP — centered above reviews */
        .bp-pricing-top {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        .bp-pricing-center {
            width: 300px;
            background: #0d0d0d;
            border: 1px solid rgba(177,231,142,.2);
            border-radius: 16px;
            padding: 18px 20px;
            text-align: center;
            box-shadow: 0 0 40px rgba(177,231,142,.08);
        }

        /* REVIEWS BELOW */
        .bp-reviews-bottom { margin-top: 4px; }
        .bp-reviews-heading {
            text-align: center;
            font-size: .66rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            color: #4b5563;
            margin: 0 0 12px;
        }
        .bp-reviews-heading .fa-star { color: #B1E78E; margin-right: 5px; font-size: .6rem; }
        .bp-reviews-grid {
            display: flex;
            gap: 8px;
            justify-content: center;
        }
        .bp-rev-stack {
            display: flex;
            flex-direction: column;
            gap: 4px;
            flex: 0 0 180px;
            width: 180px;
        }
        .bp-rev-img {
            width: 100%;
            height: auto;
            border-radius: 7px;
            border: 1px solid rgba(255,255,255,.07);
            display: block;
            position: relative;
            transition: transform .22s ease, opacity .22s, border-color .2s, box-shadow .2s;
            cursor: zoom-in;
        }

        /* LEFT STACK — odd = aagy (lean right toward center), even = pechy (lean left) */
        .bp-reviews-grid > .bp-rev-stack:first-child .bp-rev-img:nth-child(odd) {
            transform: translateX(16px);
            z-index: 2;
            box-shadow: 4px 3px 14px rgba(0,0,0,.45);
        }
        .bp-reviews-grid > .bp-rev-stack:first-child .bp-rev-img:nth-child(even) {
            transform: translateX(-10px);
            opacity: .65;
            z-index: 1;
        }

        /* MIDDLE STACK — slight alternating tilt */
        .bp-reviews-grid > .bp-rev-stack:nth-child(2) .bp-rev-img:nth-child(odd) {
            transform: translateX(6px);
            z-index: 2;
        }
        .bp-reviews-grid > .bp-rev-stack:nth-child(2) .bp-rev-img:nth-child(even) {
            transform: translateX(-6px);
            opacity: .7;
            z-index: 1;
        }

        /* RIGHT STACK — odd = aagy (lean left toward center), even = pechy (lean right) */
        .bp-reviews-grid > .bp-rev-stack:last-child .bp-rev-img:nth-child(odd) {
            transform: translateX(-16px);
            z-index: 2;
            box-shadow: -4px 3px 14px rgba(0,0,0,.45);
        }
        .bp-reviews-grid > .bp-rev-stack:last-child .bp-rev-img:nth-child(even) {
            transform: translateX(10px);
            opacity: .65;
            z-index: 1;
        }

        /* Hover — bring to front, normalize position */
        .bp-rev-img:hover {
            transform: translateX(0) scale(1.07) translateY(-2px) !important;
            opacity: 1 !important;
            z-index: 10;
            border-color: rgba(177,231,142,.25);
            box-shadow: 0 10px 26px rgba(0,0,0,.6) !important;
        }
        @media (max-width: 768px) {
            .bp-pricing-center { width: 100%; }
            .bp-reviews-grid { gap: 6px; flex-direction: column; }
            .bp-rev-stack { flex-direction: row; overflow-x: auto; padding-bottom: 4px; width: 100%; flex: none; }
            .bp-rev-img { width: 90px; flex-shrink: 0; transform: none !important; opacity: 1 !important; }
        }

        /* ═══ BOOK REVIEWS MARQUEE ═══ */
        .br-section { margin: 0 0 24px; }
        .br-label {
            text-align: center;
            font-size: .66rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .14em;
            color: #4b5563;
            margin: 0 0 12px;
        }
        .br-star { color: #B1E78E; margin-right: 4px; font-size: .7rem; }
        .br-mask {
            overflow: hidden;
            margin-bottom: 8px;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
        }
        .br-track {
            display: flex;
            gap: 8px;
            width: max-content;
        }
        .br-track--fwd { animation: br-fwd 30s linear infinite; }
        .br-track--rev { animation: br-rev 36s linear infinite; }
        .br-mask:hover .br-track { animation-play-state: paused; }
        .br-img {
            height: 110px;
            width: auto;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,.07);
            object-fit: cover;
            flex-shrink: 0;
            display: block;
            transition: transform .2s, box-shadow .2s, border-color .2s;
        }
        .br-img:hover {
            transform: scale(1.06) translateY(-2px);
            box-shadow: 0 10px 28px rgba(0,0,0,.6);
            border-color: rgba(177,231,142,.25);
        }
        @keyframes br-fwd {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        @keyframes br-rev {
            from { transform: translateX(-50%); }
            to   { transform: translateX(0); }
        }
        @media (prefers-reduced-motion: reduce) {
            .br-track--fwd, .br-track--rev { animation: none; }
        }

        /* ══════════════════════════════════════
           GLOBAL MOBILE RESPONSIVE — max 768px
        ══════════════════════════════════════ */
        @media (max-width: 768px) {

            /* ── HERO ── */
            .btn-brand, .btn-outline, .btn-ghost {
                min-width: unset !important;
                width: 100%;
                justify-content: center;
            }

            /* ── BLUEPRINT SECTION ── */
            .blueprint-section { padding: 40px 0; }

            /* ── SECTION BIG HEADINGS ── */
            .section-big-heading {
                font-size: clamp(1.9rem, 7vw, 2.8rem) !important;
            }

            /* ── ACRONYM GRIDS (formula cards) ── */
            .bpf-acr-grid--4 { grid-template-columns: repeat(2, 1fr) !important; gap: 6px !important; }
            .bpf-acr-grid--6 { grid-template-columns: repeat(3, 1fr) !important; gap: 6px !important; }
            .bpf-acr-col { padding: 6px 4px; }

            /* ── FORMULA FLOW ── */
            .bpf-flow { flex-direction: column; align-items: flex-start; gap: 6px; }
            .bpf-op { display: none; }

            /* ── STATS ROW ── */
            .bp-stats-row { flex-direction: column; gap: 10px; }
            .bp-stats-row .w-px { display: none; }

            /* ── PRICING CARD ── */
            .bp-pricing-center { width: 100% !important; }
            .bp-countdown { gap: 8px; }
            .bp-countdown-num { font-size: 1.6rem; }

            /* ── REVIEWS ── */
            .bp-reviews-grid { flex-direction: column; }
            .bp-rev-stack { flex-direction: row; overflow-x: auto; padding-bottom: 6px; width: 100%; flex: none; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch; }
            .bp-rev-stack::-webkit-scrollbar { height: 3px; }
            .bp-rev-stack::-webkit-scrollbar-track { background: #111; }
            .bp-rev-stack::-webkit-scrollbar-thumb { background: #333; border-radius: 2px; }
            .bp-rev-img { width: 110px; flex-shrink: 0; transform: none !important; opacity: 1 !important; scroll-snap-align: start; }

            /* ── WHO IS THIS FOR pills ── */
            .bp-for-pill { font-size: .72rem; }

            /* ── VALUES GRID ── */
            .bp-value-item { font-size: .82rem; }
        }

        /* ══════════════════════════════════════
           SMALL MOBILE — max 480px
        ══════════════════════════════════════ */
        @media (max-width: 480px) {

            /* ── HERO ── */
            .hero-bio p { font-size: .85rem !important; line-height: 1.5 !important; }

            /* ── SECTION HEADINGS ── */
            h2[style*="clamp(2.6rem"] {
                font-size: clamp(1.7rem, 8vw, 2.4rem) !important;
            }

            /* ── BLUEPRINT SECTION ── */
            .blueprint-section { padding: 28px 0; }
            .blueprint-hero { margin-bottom: 24px; }
            .blueprint-title { font-size: 1.6rem !important; }
            .blueprint-subtitle { font-size: .82rem !important; }

            /* ── FORMULA WIDGET ── */
            .bpf-wrapper { padding: 14px 10px 12px; }
            .bpf-main-title { font-size: 1.1rem; }
            .bpf-acr-grid--4 { grid-template-columns: repeat(2, 1fr) !important; }
            .bpf-acr-grid--6 { grid-template-columns: repeat(2, 1fr) !important; }
            .bpf-acr-card { min-width: unset; width: 100%; }

            /* ── COUNTDOWN ── */
            .bp-countdown-num { font-size: 1.35rem; }
            .bp-countdown-label { font-size: .5rem; }
            .bp-cta-btn { font-size: .88rem; padding: 13px 18px; }

            /* ── REVIEWS ── */
            .bp-rev-img { width: 85px; transform: none !important; opacity: 1 !important; }

            /* ── STAT CARDS (CustomerNearMe section) ── */
            .grid.grid-cols-3 { grid-template-columns: repeat(3, 1fr) !important; }

            /* ── SOCIAL CARDS ── */
            .grid.grid-cols-2 { gap: 8px; }

            /* ── NAVBAR ── */
            nav .max-w-6xl { padding-left: 16px; padding-right: 16px; }
        }

        /* ══════════════════════════════════════
           EXTRA SMALL — max 360px
        ══════════════════════════════════════ */
        @media (max-width: 360px) {
            .blueprint-title { font-size: 1.4rem !important; }
            .bp-countdown-num { font-size: 1.15rem; }
            .bp-rev-img { width: 72px; }
            .bpf-acr-word { font-size: .42rem; }
            .bpf-acr-note { font-size: .38rem; }
        }
    </style>
</head>
<body>


    @include("common.navbar")

