<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-blue-50 {
            --tw-bg-opacity: 0.1;
            background-color: rgb(11 93 192 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-blue-500 {
            stroke: #0b5dc0
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .focus\:outline-blue-500:focus {
            outline-color: #0b5dc0
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <?xml version="1.0" standalone="no"?>
                <!DOCTYPE svg
                    PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="body_1"
                    width="87" height="64">

                    <g transform="matrix(1.3333334 0 0 1.3333334 0 0)">
                        <image x="0" y="0"
                            xlink:href="data:image/png;base64,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"
                            preserveAspectRatio="none" width="65.25" height="48" />
                    </g>
                </svg>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="{{ route('login') }}"
                        class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                        <div>
                            <div class="h-16 w-16 bg-blue-50 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900">Provider Area</h2>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit provident fuga tempore
                                distinctio quas delectus veritatis modi nam corrupti labore inventore vel rem maiores
                                repudiandae voluptatum porro minus, voluptatibus expedita?
                                Hic maiores eius sequi quisquam distinctio, veritatis modi aspernatur laboriosam quidem,
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="{{ route('login', ['role' => 'admin']) }}"
                        class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-blue-500">
                        <div>
                            <div class="h-16 w-16 bg-blue-50 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" class="w-7 h-7 stroke-blue-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900">Annalist Area</h2>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                nobis dolor deserunt magnam illo maxime asperiores ut eos id, accusantium quas. Amet,
                                mollitia? Accusantium sapiente aspernatur quos nulla.
                                Atque pariatur officiis rem recusandae, nisi, tempora expedita nulla minus quidem fuga
                                eaque ratione autem quo reiciendis minima, non aspernatur ducimus reprehenderit nostrum
                                dolorum praesentium. Illum velit deserunt commodi unde?
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            class="self-center shrink-0 stroke-blue-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
