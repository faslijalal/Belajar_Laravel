<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Icon Gallery</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <style>
            :root {
                --bg: #f8fafc;
                --panel: #ffffff;
                --border: #e2e8f0;
                --text: #0f172a;
                --muted: #475569;
                --accent: #2563eb;
                --accent-soft: rgba(37, 99, 235, 0.14);
                --shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
            }

            * { box-sizing: border-box; }

            body {
                margin: 0;
                min-height: 100vh;
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                background: linear-gradient(180deg, #eff6ff 0%, var(--bg) 24%, #f8fafc 100%);
                color: var(--text);
            }

            .page {
                max-width: 1100px;
                margin: 0 auto;
                padding: 64px 24px 80px;
            }

            .topbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                margin-bottom: 32px;
            }

            .brand {
                display: inline-flex;
                align-items: center;
                gap: 12px;
                font-weight: 700;
                letter-spacing: 0.02em;
            }

            .brand-mark {
                width: 42px;
                height: 42px;
                border-radius: 14px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                background: linear-gradient(135deg, var(--accent), #7c3aed);
                box-shadow: var(--shadow);
            }

            .brand-mark svg {
                width: 22px;
                height: 22px;
                color: white;
            }

            .nav-link {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                color: var(--muted);
                text-decoration: none;
                padding: 10px 14px;
                border-radius: 999px;
                border: 1px solid var(--border);
                background: rgba(255,255,255,0.7);
                backdrop-filter: blur(10px);
            }

            .hero {
                background: rgba(255,255,255,0.75);
                border: 1px solid rgba(148, 163, 184, 0.25);
                border-radius: 32px;
                padding: 40px 32px;
                box-shadow: var(--shadow);
                margin-bottom: 32px;
            }

            .eyebrow {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 12px;
                border-radius: 999px;
                background: var(--accent-soft);
                color: var(--accent);
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 0.08em;
                text-transform: uppercase;
            }

            h1 {
                margin: 18px 0 14px;
                font-size: clamp(2.2rem, 5vw, 4rem);
                line-height: 1;
                letter-spacing: -0.045em;
            }

            .hero p {
                margin: 0;
                max-width: 620px;
                color: var(--muted);
                font-size: 1.08rem;
                line-height: 1.7;
            }

            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
                gap: 18px;
            }

            .card {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 18px;
                padding: 26px 18px;
                background: rgba(255,255,255,0.86);
                border: 1px solid rgba(148, 163, 184, 0.25);
                border-radius: 22px;
                box-shadow: 0 14px 28px rgba(15, 23, 42, 0.04);
                text-align: center;
            }

            .icon-wrap {
                width: 72px;
                height: 72px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 18px;
                background: linear-gradient(135deg, #eff6ff, #e0e7ff);
                color: var(--accent);
            }

            .icon-wrap svg {
                width: 32px;
                height: 32px;
            }

            .card h2 {
                margin: 0;
                font-size: 1rem;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <div class="topbar">
                <div class="brand">
                    <span class="brand-mark">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 2l2.5 6.5L21 11l-6.5 2.5L12 20l-2.5-6.5L3 11l6.5-2.5L12 2z"></path>
                        </svg>
                    </span>
                    <span>Icon Gallery</span>
                </div>
                <a class="nav-link" href="{{ url('/') }}">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 11.5L12 4l9 7.5"></path><path d="M5 10.5V20h14v-9.5"></path></svg>
                    Home
                </a>
            </div>

            <section class="hero">
                <div class="eyebrow">SVG icons</div>
                <h1>Small icons. Big polish.</h1>
                <p>Build and preview a clean icon set for product UI, dashboards, and marketing pages without introducing any frontend dependencies.</p>
            </section>

            <section class="grid" aria-label="icon gallery">
                @foreach ($icons as $icon)
                    <article class="card">
                        <div class="icon-wrap" aria-hidden="true">
                            @switch($icon['icon'])
                                @case('rocket')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3c3.5 1.5 6 4.5 7 8-3.5-1-6.5-3.5-8-7z"></path><path d="M14 3c-2.5 3.5-4 7.5-3.5 12.5L2 22l6.5-8.5C13.5 12 17.5 10.5 14 3z"></path><path d="M6 18l-2 4 4-2"></path></svg>
                                    @break
                                @case('sparkles')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v4"></path><path d="M12 17v4"></path><path d="M4.2 4.2l2.8 2.8"></path><path d="M17 17l2.8 2.8"></path><path d="M3 12h4"></path><path d="M17 12h4"></path><path d="M4.2 19.8l2.8-2.8"></path><path d="M17 7l2.8-2.8"></path></svg>
                                    @break
                                @case('shield')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v6c0 4.5-3.1 8.7-7 10-3.9-1.3-7-5.5-7-10V6l7-3z"></path></svg>
                                    @break
                                @case('cloud')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 18H7a4 4 0 1 1 0-8 5 5 0 0 1 9.4-1.7A3.5 3.5 0 1 1 17 18z"></path></svg>
                                    @break
                                @case('star')
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.9 6.1L21 9.5l-5 4.8 1.3 6.7L12 0 6.7 21l1.3-6.7-5-4.8 6.1-1.4L12 2z"></path></svg>
                                    @break
                                @default
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            @endswitch
                        </div>
                        <h2>{{ $icon['name'] }}</h2>
                    </article>
                @endforeach
            </section>
        </div>
    </body>
</html>
