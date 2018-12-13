{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}

            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Nunito', sans-serif;--}}
                {{--font-weight: 200;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}">Login</a>--}}
                        {{--<a href="{{ route('register') }}">Register</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://nova.laravel.com">Nova</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jen Luker: Developer and knitter</title>
    <link rel="stylesheet" href="css/styles.processed.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
</head>

<body>


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</div>


<!-- START SYMBOL BLOCK -->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" display="none">
    <defs>
        <filter id="drop-shadow" x="0" y="0" width="200%" height="200%">
            <feOffset result="offOut" in="SourceAlpha" dx="10" dy="10" />
            <feGaussianBlur result="blurOut" in="offOut" stdDeviation="10" />
            <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
        </filter>
        <filter id="f4" x="0" y="0" width="200%" height="200%">
            <feOffset result="offOut" in="SourceGraphic" dx="10" dy="10" />
            <feColorMatrix result="matrixOut" in="offOut" type="matrix"
                           values="0.2 0 0 0 0 0 0.2 0 0 0 0 0 0.2 0 0 0 0 0 1 0" />
            <feGaussianBlur result="blurOut" in="matrixOut" stdDeviation="10" />
            <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
        </filter>
    </defs>

    <symbol id="twitter" viewBox="0 0 100 100"><path d="M100.001 17.942a39.965 39.965 0 0 1-11.783 3.339c4.236-2.624 7.49-6.779 9.021-11.73a40.289 40.289 0 0 1-13.026 5.146C80.47 10.575 75.138 8 69.234 8c-11.33 0-20.518 9.494-20.518 21.205 0 1.662.183 3.281.533 4.833-17.052-.884-32.168-9.326-42.288-22.155a21.637 21.637 0 0 0-2.778 10.659c0 7.357 3.622 13.849 9.127 17.65a19.94 19.94 0 0 1-9.293-2.651c-.002.089-.002.178-.002.268 0 10.272 7.072 18.845 16.458 20.793a19.939 19.939 0 0 1-9.264.365c2.609 8.424 10.187 14.555 19.166 14.726-7.021 5.688-15.867 9.077-25.48 9.077A40.59 40.59 0 0 1 0 82.473C9.08 88.491 19.865 92 31.449 92c37.737 0 58.374-32.312 58.374-60.336 0-.92-.02-1.834-.059-2.743a42.547 42.547 0 0 0 10.237-10.979z"></path></symbol>

    <symbol id="github" viewBox="0 0 250 243.83"><path d="M125 0a125 125 0 0 0-39.5 243.61c6.25 1.15 8.53-2.71 8.53-6 0-3-.11-10.83-.17-21.26-34.77 7.55-42.11-16.76-42.11-16.76-5.68-14.44-13.88-18.28-13.88-18.28-11.35-7.76.86-7.6.86-7.6 12.54.88 19.15 12.88 19.15 12.88C69 205.67 87.13 200.16 94.25 197c1.14-8.08 4.36-13.59 7.94-16.71-27.76-3.15-56.94-13.88-56.94-61.78a48.32 48.32 0 0 1 12.86-33.59c-1.29-3.16-5.57-15.87 1.23-33.08 0 0 10.5-3.36 34.37 12.81a118.48 118.48 0 0 1 62.59 0c23.86-16.18 34.34-12.81 34.34-12.81 6.82 17.21 2.53 29.92 1.24 33.08a48.24 48.24 0 0 1 12.85 33.54c0 48-29.23 58.59-57.07 61.68 4.49 3.86 8.49 11.49 8.49 23.15 0 16.71-.15 30.19-.15 34.29 0 3.34 2.25 7.23 8.6 6A125 125 0 0 0 125 0z"></path></symbol>

    <symbol id="codePen" viewBox="0 0 100 100"><path d="M100 34.2c-.4-2.6-3.3-4-5.3-5.3-3.6-2.4-7.1-4.7-10.7-7.1-8.5-5.7-17.1-11.4-25.6-17.1-2-1.3-4-2.7-6-4-1.4-1-3.3-1-4.8 0-5.7 3.8-11.5 7.7-17.2 11.5L5.2 29C3 30.4.1 31.8 0 34.8c-.1 3.3 0 6.7 0 10v16c0 2.9-.6 6.3 2.1 8.1 6.4 4.4 12.9 8.6 19.4 12.9 8 5.3 16 10.7 24 16 2.2 1.5 4.4 3.1 7.1 1.3 2.3-1.5 4.5-3 6.8-4.5 8.9-5.9 17.8-11.9 26.7-17.8l9.9-6.6c.6-.4 1.3-.8 1.9-1.3 1.4-1 2-2.4 2-4.1V37.3c.1-1.1.2-2.1.1-3.1 0-.1 0 .2 0 0zM54.3 12.3L88 34.8 73 44.9 54.3 32.4V12.3zm-8.6 0v20L27.1 44.8 12 34.8l33.7-22.5zM8.6 42.8L19.3 50 8.6 57.2V42.8zm37.1 44.9L12 65.2l15-10.1 18.6 12.5v20.1zM50 60.2L34.8 50 50 39.8 65.2 50 50 60.2zm4.3 27.5v-20l18.6-12.5 15 10.1-33.6 22.4zm37.1-30.5L80.7 50l10.8-7.2-.1 14.4z"></path></symbol>

    <symbol id="home" viewBox="0 0 64 64"><path d="M27.854 0h8.292l2.113 8.83a24 24 0 0 1 5.697 2.36l7.74-4.75 5.862 5.864-4.75 7.74a24 24 0 0 1 2.36 5.697L64 27.855v8.292l-8.83 2.113a24 24 0 0 1-2.36 5.697l4.75 7.74-5.864 5.862-7.74-4.75a24 24 0 0 1-5.697 2.36L36.145 64h-8.292l-2.113-8.83a24 24 0 0 1-5.697-2.36l-7.74 4.75-5.862-5.864 4.75-7.74a24 24 0 0 1-2.36-5.697L0 36.145v-8.292l8.83-2.113a24 24 0 0 1 2.36-5.697l-4.75-7.74 5.864-5.862 7.74 4.75a24 24 0 0 1 5.697-2.36M32 32"/></symbol>

    <symbol id="codeSandbox" viewBox="0 0 1024 1024"><g id="Layer_1"><polyline points="719.001,851 719.001,639.848 902,533.802 902,745.267 719.001,851"></polyline><polyline points="302.082,643.438 122.167,539.135 122.167,747.741 302.082,852.573 302.082,643.438"></polyline><polyline points="511.982,275.795 694.939,169.633 512.06,63 328.436,169.987 511.982,275.795"></polyline></g><g id="Layer_2"><polyline fill="none" stroke-width="80" stroke-miterlimit="10" points="899,287.833 509,513 509,963"></polyline><line fill="none" stroke-width="80" stroke-miterlimit="10" x1="122.167" y1="289" x2="511.5" y2="513"></line><polygon fill="none" stroke-width="80" stroke-miterlimit="10" points="121,739.083 510.917,963.042 901,738.333 901,288 511,62 121,289"></polygon></g></symbol>

    <symbol id="knitting" viewBox="0 0 68 68">
        <path fill="#000000" d="M596.018403,431.386191 L596.018403,431.386191 C596.006228,431.259103 596,431.130279 596,431 C596,428.790861 597.790861,427 600,427 C602.209139,427 604,428.790861 604,431 C604,433.209139 602.209139,435 600,435 C599.40885,435 598.84765,434.871763 598.342703,434.641591 L581.349472,446.779613 C583.037858,449.804423 584,453.289851 584,457 C584,460.250519 583.26148,463.328548 581.94308,466.075448 C581.3398,455.905383 575.986766,447.013606 568.071352,441.587491 C569.145552,440.236489 570.341972,438.987019 571.643888,437.855804 C572.181853,438.099085 572.707736,438.364376 573.220387,438.650528 L585.358409,421.657297 C585.128237,421.15235 585,420.59115 585,420 C585,417.790861 586.790861,416 589,416 C591.209139,416 593,417.790861 593,420 C593,422.209139 591.209139,424 589,424 C588.869721,424 588.740897,423.993772 588.613809,423.981597 L576.512171,440.923891 C577.438574,441.703354 578.296646,442.561426 579.076109,443.487829 L596.018403,431.386191 Z M545.002169,467.826358 L545.002169,467.826358 C543.096372,464.664942 542,460.960507 542,457 C542,447.545542 548.247838,439.550345 556.839954,436.917968 C551.3629,442.660703 548,450.437628 548,459 C548,464.867748 549.579315,470.366626 552.336053,475.094743 C552.281759,475.062676 552.227621,475.030372 552.173642,474.997831 L546.209848,483.347143 C545.892854,483.790934 545.259733,483.899809 544.80611,483.575793 L543.19389,482.424207 C542.733304,482.095217 542.630523,481.476338 542.948769,481.030793 L548.959225,472.616155 C548.406792,472.119128 547.880872,471.593208 547.383845,471.040775 L538.973437,477.048209 C538.5303,477.364736 537.899809,477.259733 537.575793,476.80611 L536.424207,475.19389 C536.095217,474.733304 536.20458,474.11035 536.657368,473.78693 L545.002169,467.826358 Z M562.322637,454.735784 C567.668846,459.83509 571,467.028528 571,475 C571,475.482061 570.987818,475.961278 570.963745,476.437357 C570.238258,476.734913 569.492424,476.993032 568.72891,477.209049 C564.534039,472.31336 562,465.952608 562,459 C562,457.55022 562.110185,456.126176 562.322637,454.735784 L562.322637,454.735784 Z M565.810996,444.888069 C573.171386,449.933037 578,458.402627 578,468 C578,469.350377 577.904407,470.678427 577.719618,471.977752 C576.876588,472.806342 575.963921,473.564309 574.9912,474.242067 C574.767453,464.615635 570.292639,456.040347 563.371207,450.320652 C563.993074,448.411451 564.814551,446.592376 565.810996,444.888069 Z M567.303927,436.441447 L567.303927,436.441447 C561.553425,442.226785 558,450.198419 558,459 C558,466.098734 560.311466,472.657596 564.222805,477.964992 C563.818167,477.988224 563.410459,478 563,478 C561.669277,478 560.367464,477.876225 559.105444,477.639561 C554.686147,472.689088 552,466.158236 552,459 C552,449.487741 556.743349,441.08335 563.993777,436.023099 C565.12275,436.075695 566.228426,436.217437 567.303927,436.441447 Z" transform="translate(-536 -416)"></path>
    </symbol>

    <symbol id="talks" viewBox="0 0 79.93 77.12"><path d="M41.12,40.43c-1.29,0-1.46,2-.16,2a3.65,3.65,0,0,1,2.6.67,3.47,3.47,0,0,1,.58,2.34c0,1.28,2,1.46,2,.16a5.87,5.87,0,0,0-1-3.77C44.18,40.66,42.48,40.46,41.12,40.43ZM78,67.51a38,38,0,0,0-27.86-36.6,17.16,17.16,0,1,0-20.32,0A38,38,0,0,0,2,67.51H37.27V62h5.38v5.47ZM42,60H38a6.48,6.48,0,0,1-6.48-6.49V44.11A6.49,6.49,0,0,1,38,37.62h4a6.5,6.5,0,0,1,6.49,6.49v9.41A6.5,6.5,0,0,1,42,60Zm38,14.82a2.3,2.3,0,0,1-2.29,2.29H2.29a2.29,2.29,0,1,1,0-4.57H77.65a2.28,2.28,0,0,1,2.29,2.28Z"/>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></symbol>
</svg>
<!-- END SYMBOL BLOCK -->

<!-- This is where the webpage starts -->
<div id="app"></div>

<script type="text/javascript" src="js/app.processed.js"></script>
<script type="text/javascript" src="js/radial-animation.js"></script>

</body>
</html>

{{--<p>Laravel</p>--}}


{{--<body>--}}

{{--<style>--}}

    {{--body {--}}
        {{--display: grid;--}}
        {{--height: 100vh;--}}
        {{--place-content: center;--}}
        {{--background: linear-gradient(77deg, #000 0%,#666 100%);--}}
    {{--}--}}
    {{--p {--}}
        {{--font-size: 80px;--}}
        {{--color: #fff;--}}
        {{--filter: url("#blurMe");--}}
    {{--}--}}
    {{--svg {--}}
        {{--display: none;--}}
    {{--}--}}
{{--</style>--}}
{{--<svg width="180" height="120"--}}
     {{--xmlns="http://www.w3.org/2000/svg"--}}
     {{--xmlns:xlink="http://www.w3.org/1999/xlink">--}}
    {{--<filter id="blurMe">--}}
        {{--<feTurbulence--}}
                {{--id="turb1"--}}
                {{--in="SourceGraphic"--}}
                {{--type="fractalNoise"--}}
                {{--baseFrequency="0 0"--}}
                {{--numOctaves="8"--}}
                {{--result="warp" />--}}
        {{--<animate--}}
                {{--xlink:href="#turb1"--}}
                {{--attributeName="baseFrequency"--}}
                {{--values="0 0;0 0.006;0 0.016"--}}
                {{--repeatCount="indefinite"--}}
                {{--dur="8s" />--}}
        {{--<feDisplacementMap--}}
                {{--in="SourceGraphic"--}}
                {{--in2="warp"--}}
                {{--xChannelSelector="G"--}}
                {{--yChannelSelector="B"--}}
                {{--scale="100"--}}
                {{--result="disp"/>--}}
        {{--<feGaussianBlur--}}
                {{--id="blur1"--}}
                {{--in="disp"--}}
                {{--stdDeviation="3"--}}
                {{--result="blur" />--}}
        {{--<animate--}}
                {{--xlink:href="#blur1"--}}
                {{--attributeName="stdDeviation"--}}
                {{--values="3.5;5.5;12.0"--}}
                {{--repeatCount="indefinite"--}}
                {{--dur="8s" />--}}
        {{--<feColorMatrix--}}
                {{--id="mat"--}}
                {{--in="blur"--}}
                {{--mode="matrix"--}}
                {{--values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 12 -3"--}}
                {{--result="mat" />--}}
        {{--<animate--}}
                {{--xlink:href="#mat"--}}
                {{--attributeName="values"--}}
                {{--values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 10.0 -3;--}}
              {{--1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 8.0  -3;--}}
              {{--1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5.0  -3"--}}
                {{--repeatCount="indefinite"--}}
                {{--dur="8s"/>--}}
        {{--<feOffset--}}
                {{--id="offset1"--}}
                {{--in="mat"--}}
                {{--dx="0" dy="0"--}}
                {{--result="move"/>--}}
        {{--<animate--}}
                {{--xlink:href="#offset1"--}}
                {{--attributeName="dy"--}}
                {{--values="0;-10.5;-60.0"--}}
                {{--repeatCount="indefinite"--}}
                {{--dur="8s"/>--}}
        {{--<animate--}}
                {{--xlink:href="#offset1"--}}
                {{--attributeName="dx"--}}
                {{--values="0;-20.5;40.0"--}}
                {{--repeatCount="indefinite"--}}
                {{--dur="8s"/>--}}
    {{--</filter>--}}
{{--</svg>--}}