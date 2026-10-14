<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign in · PharmaDEM</title>
    <style>
        * {
            box-sizing: border-box
        }

        :root {
            --ink: #19233b;
            --muted: #7d879d;
            --line: #e8ecf4;
            --blue: #625bff
        }

        body {
            margin: 0;
            font: 14px/1.5 Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", sans-serif;
            color: var(--ink)
        }

        .wrap {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            background: #f5f7fc
        }

        .visual {
            padding: clamp(30px, 6vw, 80px);
            background: radial-gradient(circle at 75% 20%, #827aff66, transparent 30%), linear-gradient(145deg, #111b38, #27266d 65%, #5148b9);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden
        }

        .visual:after {
            content: "";
            position: absolute;
            width: 430px;
            height: 430px;
            border: 1px solid #ffffff20;
            border-radius: 50%;
            right: -130px;
            bottom: -180px;
            box-shadow: 0 0 0 40px #ffffff08, 0 0 0 80px #ffffff06
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 20px;
            font-weight: 850;
            letter-spacing: -.6px
        }

        .mark {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #928bff, #5d57f4);
            font-size: 21px;
            box-shadow: 0 9px 25px #090b2a40
        }

        .brand small {
            display: block;
            font-size: 9px;
            letter-spacing: 1.8px;
            color: #aeb6ed
        }

        .visual-copy {
            max-width: 510px;
            position: relative;
            z-index: 1
        }

        .eyebrow {
            font-size: 10px;
            letter-spacing: 2px;
            color: #b8b4ff;
            font-weight: 850
        }

        .visual h2 {
            font-size: clamp(35px, 4vw, 55px);
            letter-spacing: -2.5px;
            line-height: 1.05;
            margin: 18px 0
        }

        .visual p {
            font-size: 14px;
            color: #c9ccef;
            max-width: 420px
        }

        .feature {
            display: flex;
            gap: 10px;
            align-items: center;
            color: #d8dcf6;
            font-size: 11px;
            margin-top: 28px
        }

        .feature span {
            display: grid;
            place-items: center;
            width: 25px;
            height: 25px;
            border-radius: 8px;
            background: #ffffff18;
            color: #a9ffdb
        }

        .visual-foot {
            font-size: 10px;
            color: #a8b2d7;
            position: relative;
            z-index: 1
        }

        .panel {
            display: grid;
            place-items: center;
            padding: 28px
        }

        .box {
            width: min(410px, 100%)
        }

        .mobile-brand {
            display: none
        }

        .box h1 {
            font-size: 29px;
            letter-spacing: -1.1px;
            margin: 0 0 7px
        }

        .muted {
            color: var(--muted);
            font-size: 12px
        }

        .field {
            margin: 20px 0
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            font-size: 11px;
            font-weight: 800;
            color: #39445d
        }

        .field input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #dce2ee;
            border-radius: 11px;
            font: inherit;
            font-size: 13px;
            background: #fff
        }

        .field input:focus {
            outline: 3px solid #625bff20;
            border-color: #817aff
        }

        .btn {
            width: 100%;
            padding: 14px;
            border: 0;
            border-radius: 11px;
            background: linear-gradient(100deg, #625bff, #7770ff);
            color: white;
            font-size: 12px;
            font-weight: 850;
            cursor: pointer;
            box-shadow: 0 9px 20px #625bff2b;
            transition: transform .2s
        }

        .btn:hover {
            transform: translateY(-1px)
        }

        .error {
            background: #fff0f1;
            border: 1px solid #ffdade;
            color: #ae2f42;
            padding: 12px;
            border-radius: 10px;
            font-size: 12px;
            margin: 17px 0
        }

        .hint {
            background: #f8f9fe;
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 14px;
            margin-top: 22px;
            font-size: 10px;
            line-height: 1.9;
            color: var(--muted)
        }

        .hint strong {
            color: #515d76
        }

        .note {
            font-size: 10px;
            color: var(--muted);
            text-align: center;
            margin-top: 24px
        }

        @media(max-width:800px) {
            .wrap {
                grid-template-columns: 1fr
            }

            .visual {
                display: none
            }

            .panel {
                min-height: 100vh;
                padding: 25px
            }

            .mobile-brand {
                display: flex;
                margin-bottom: 35px;
                color: var(--ink)
            }

            .mobile-brand small {
                color: var(--muted)
            }
        }
    </style>
</head>

<body>
    <div class="wrap">
        <section class="visual">
            <!-- <div class="brand"><span class="mark">✦</span><span>PharmaDEM<small>GROWTH WORKSPACE</small></span></div> -->
            <div class="visual-copy">
                <div class="eyebrow">MARKETING · SALES · MOMENTUM</div>
                <h2>Build better connections. Grow with purpose.</h2>
                <p>Your team's home for prospect research, thoughtful outreach, campaign planning and timely follow-ups.</p>
                <div class="feature"><span>✓</span> One clear view of every opportunity</div>
                <div class="feature"><span>✓</span> Campaigns and follow-ups, in sync</div>
                <div class="feature"><span>✓</span> A more intentional sales workflow</div>
            </div>
            <div class="visual-foot">PharmaDEM · Digital Marketing & Sales Navigator</div>
        </section>
        <section class="panel">
            <div class="box">
                <div class="brand mobile-brand"><span class="mark">✦</span><span>PharmaDEM<small>GROWTH WORKSPACE</small></span></div>
                <div class="eyebrow" style="color:#625bff">WELCOME BACK</div>
                <h1>Sign in to your workspace</h1>
                <p class="muted">Pick up where your team left off.</p>@if($errors->any())<div class="error" role="alert">{{ $errors->first() }}</div>@endif<form method="POST" action="{{ route('login.submit') }}">@csrf<div class="field"><label for="email">WORK EMAIL</label><input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" autocomplete="username" required autofocus></div>
                    <div class="field"><label for="password">PASSWORD</label><input id="password" type="password" name="password" placeholder="Enter your password" autocomplete="current-password" required></div><button class="btn" type="submit">Sign in securely&nbsp; →</button>
                </form>
                <!-- <div class="hint"><strong>Demo access</strong><br>Admin: admin@pharmadem.local / Admin@123<br>Sales: sales@pharmadem.local / Sales@123<br>Marketing: marketing@pharmadem.local / Marketing@123</div> -->
                <!-- <div class="note">Protected workspace · Use demo credentials for local evaluation only.</div> -->
            </div>
        </section>
    </div>
</body>

</html>