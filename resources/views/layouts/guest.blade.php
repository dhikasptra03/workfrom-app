<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- WP_HEAD() START -->
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Poppins:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900|Poppins:100,200,300,400,500,600,700,800,900">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- This site is optimized with the Yoast SEO plugin v21.3 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Solusi Sewa Kantor &amp; Coworking Space yang Fleksibel | Workfrom</title>
    <meta name="description"
        content="Apapun jenis ruangan yang Anda butuhkan untuk bisnis Anda, ruang kantor dan coworking space kami selalu siap untuk memenuhinya. Ayo sewa kantor di Workform!" />
    <link rel="canonical" href="https://workfrom.id/" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Solusi Sewa Kantor &amp; Coworking Space yang Fleksibel | Workfrom" />
    <meta property="og:description"
        content="Apapun jenis ruangan yang Anda butuhkan untuk bisnis Anda, ruang kantor dan coworking space kami selalu siap untuk memenuhinya. Ayo sewa kantor di Workform!" />
    <meta property="og:url" content="https://workfrom.id/" />
    <meta property="og:site_name" content="Workfrom | Private Office Indonesia" />
    <meta property="article:modified_time" content="2023-06-07T05:24:45+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://workfrom.id/","url":"https://workfrom.id/","name":"Solusi Sewa Kantor & Coworking Space yang Fleksibel | Workfrom","isPartOf":{"@id":"https://workfrom.id/#website"},"datePublished":"2023-06-06T22:46:15+00:00","dateModified":"2023-06-07T05:24:45+00:00","description":"Apapun jenis ruangan yang Anda butuhkan untuk bisnis Anda, ruang kantor dan coworking space kami selalu siap untuk memenuhinya. Ayo sewa kantor di Workform!","breadcrumb":{"@id":"https://workfrom.id/#breadcrumb"},"inLanguage":"id","potentialAction":[{"@type":"ReadAction","target":["https://workfrom.id/"]}]},{"@type":"BreadcrumbList","@id":"https://workfrom.id/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://workfrom.id/#website","url":"https://workfrom.id/","name":"Workfrom | Private Office Indonesia","description":"Sharing Energy, Ideas, and Space","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://workfrom.id/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id"}]}</script>
    <!-- / Yoast SEO plugin. -->


    <link rel="alternate" type="application/rss+xml" title="Workfrom | Private Office Indonesia &raquo; Feed"
        href="https://workfrom.id/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Workfrom | Private Office Indonesia &raquo; Umpan Komentar"
        href="https://workfrom.id/comments/feed/" />
    <style id='wp-block-library-inline-css'>
        :root {
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px;
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223
        }

        @media (min-resolution:192dpi) {
            :root {
                --wp-admin-border-width-focus: 1.5px
            }
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            word-wrap: normal !important;
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .screen-reader-text:focus {
            clip: auto !important;
            background-color: #ddd;
            -webkit-clip-path: none;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }

        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
        }

        @media screen and (max-width:600px) {
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: 0px
            }
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--foreground: #000000;
            --wp--preset--color--background: #ffffff;
            --wp--preset--color--primary: #1a4548;
            --wp--preset--color--secondary: #ffe2c7;
            --wp--preset--color--tertiary: #F6F6F6;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--tertiary) 100%);
            --wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--background) 100%);
            --wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom, var(--wp--preset--color--tertiary) 0%, var(--wp--preset--color--background) 100%);
            --wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--foreground) 100%);
            --wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--secondary) 50%, var(--wp--preset--color--background) 50%);
            --wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--secondary) 50%);
            --wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--tertiary) 50%, var(--wp--preset--color--background) 50%);
            --wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--tertiary) 50%);
            --wp--preset--font-size--small: 1rem;
            --wp--preset--font-size--medium: 1.125rem;
            --wp--preset--font-size--large: 1.75rem;
            --wp--preset--font-size--x-large: clamp(1.75rem, 3vw, 2.25rem);
            --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            --wp--custom--spacing--small: max(1.25rem, 5vw);
            --wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap)));
            --wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);
            --wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);
            --wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);
            --wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);
            --wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);
            --wp--custom--typography--line-height--tiny: 1.15;
            --wp--custom--typography--line-height--small: 1.2;
            --wp--custom--typography--line-height--medium: 1.4;
            --wp--custom--typography--line-height--normal: 1.6;
        }

        :where(body .is-layout-flow)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-flow)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-flow)>* {
            margin-block-start: 1.5rem;
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)> :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-constrained)> :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained)>* {
            margin-block-start: 1.5rem;
            margin-block-end: 0;
        }

        :where(body .is-layout-flex) {
            gap: 1.5rem;
        }

        :where(body .is-layout-grid) {
            gap: 1.5rem;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='oxygen-css'
        href='https://workfrom.id/wp-content/plugins/oxygen/component-framework/oxygen.css?ver=4.7' media='all' />
    <link rel='stylesheet' id='core-sss-css'
        href='https://workfrom.id/wp-content/plugins/oxy-ninja/public/css/core-sss.min.css?ver=3.5.3' media='all' />
    <style id='wpgb-head-inline-css'>
        .wp-grid-builder:not(.wpgb-template),
        .wpgb-facet {
            opacity: 0.01
        }

        .wpgb-facet fieldset {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            box-shadow: none
        }

        .wpgb-facet fieldset:last-child {
            margin-bottom: 40px;
        }

        .wpgb-facet fieldset legend.wpgb-sr-only {
            height: 1px;
            width: 1px
        }
    </style>
    <link rel='stylesheet' id='splide-css'
        href='https://workfrom.id/wp-content/plugins/oxy-ninja/public/css/splide.min.css?ver=4.0.14' media='all' />
    <link rel='stylesheet' id='tablepress-default-css'
        href='https://workfrom.id/wp-content/plugins/tablepress/css/build/default.css?ver=2.1.8' media='all' />
    <script src='https://workfrom.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.0' id='jquery-core-js'></script>
    <script src='https://workfrom.id/wp-content/plugins/oxy-ninja/public/js/splide/splide.min.js?ver=4.0.14' id='splide-js'>
    </script>
    <script
        src='https://workfrom.id/wp-content/plugins/oxy-ninja/public/js/splide/splide-extension-auto-scroll.min.js?ver=0.5.2'
        id='splide-autoscroll-js'></script>
    <link rel="https://api.w.org/" href="https://workfrom.id/wp-json/" />
    <link rel="alternate" type="application/json" href="https://workfrom.id/wp-json/wp/v2/pages/11685" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://workfrom.id/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.3.1" />
    <link rel='shortlink' href='https://workfrom.id/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://workfrom.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fworkfrom.id%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://workfrom.id/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fworkfrom.id%2F&#038;format=xml" />
    <!-- HFCM by 99 Robots - Snippet # 1: GTM Header -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WM5BPQP');
    </script>
    <!-- End Google Tag Manager -->
    <!-- /end HFCM by 99 Robots -->
    <!-- HFCM by 99 Robots - Snippet # 3: Hotjar Tracking Code for Workfrom -->
    <!-- Hotjar Tracking Code for Workfrom -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3426332,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- /end HFCM by 99 Robots -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WM5BPQP');
    </script>
    <!-- End Google Tag Manager --><noscript>
        <style>
            .wp-grid-builder .wpgb-card.wpgb-card-hidden .wpgb-card-wrapper {
                opacity: 1 !important;
                visibility: visible !important;
                transform: none !important
            }

            .wpgb-facet {
                opacity: 1 !important;
                pointer-events: auto !important
            }

            .wpgb-facet *:not(.wpgb-pagination-facet) {
                display: none
            }
        </style>
    </noscript>
    <link rel="icon" href="https://workfrom.id/wp-content/uploads/2022/11/cropped-fav-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://workfrom.id/wp-content/uploads/2022/11/cropped-fav-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://workfrom.id/wp-content/uploads/2022/11/cropped-fav-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://workfrom.id/wp-content/uploads/2022/11/cropped-fav-270x270.png" />
    <link rel='stylesheet' id='oxygen-cache-12-css'
        href='//workfrom.id/wp-content/uploads/oxygen/css/12.css?cache=1696607615&#038;ver=6.3.1' media='all' />
    <link rel='stylesheet' id='oxygen-cache-11685-css'
        href='//workfrom.id/wp-content/uploads/oxygen/css/11685.css?cache=1696607611&#038;ver=6.3.1' media='all' />
    <link rel='stylesheet' id='oxygen-universal-styles-css'
        href='//workfrom.id/wp-content/uploads/oxygen/css/universal.css?cache=1696607612&#038;ver=6.3.1'
        media='all' />
    <!-- END OF WP_HEAD() -->
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM5BPQP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section id="section-253-12" class=" ct-section section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-260-12" class="ct-div-block"><a id="link-378-12" class="ct-link"
                    href="https://workfrom.id/"><img id="image-262-12" alt=""
                        src="https://workfrom.id/wp-content/uploads/2022/12/Logo-WF.png" class="ct-image"
                        srcset="" sizes="(max-width: 151px) 100vw, 151px" /></a>
                <div id="-pro-menu-376-12" class="oxy-pro-menu ">
                    <div class="oxy-pro-menu-mobile-open-icon  oxy-pro-menu-off-canvas-trigger oxy-pro-menu-off-canvas-left"
                        data-off-canvas-alignment="left"><svg id="-pro-menu-376-12-open-icon">
                            <use xlink:href="#Lineariconsicon-menu"></use>
                        </svg></div>


                    <div class="oxy-pro-menu-container  oxy-pro-menu-dropdown-links-visible-on-mobile oxy-pro-menu-dropdown-links-toggle oxy-pro-menu-show-dropdown"
                        data-aos-duration="400" data-oxy-pro-menu-dropdown-animation="fade"
                        data-oxy-pro-menu-dropdown-animation-duration="0.4"
                        data-entire-parent-toggles-dropdown="false"
                        data-oxy-pro-menu-off-canvas-animation="fade-right"
                        data-oxy-pro-menu-dropdown-animation-duration="0.4"
                        data-oxy-pro-menu-dropdown-links-on-mobile="toggle">

                        <div class="menu-main-menu-container">
                            <ul id="menu-main-menu" class="oxy-pro-menu-list">
                                <li id="menu-item-10714"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10714">
                                    <a href="https://workfrom.id/locations/">Locations</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-10715"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10715">
                                            <a href="https://workfrom.id/locations/?_choose_location=medan">Medan</a>
                                        </li>
                                        <li id="menu-item-10716"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10716">
                                            <a href="https://workfrom.id/locations/?_choose_location=jakarta-selatan">Jakarta
                                                Selatan</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-10688"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10688">
                                    <a href="https://workfrom.id/use-case/">Use Case</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-10689"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10689">
                                            <a href="https://workfrom.id/use-case/?_choose_use_case=event">Event</a>
                                        </li>
                                        <li id="menu-item-10690"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10690">
                                            <a
                                                href="https://workfrom.id/use-case/?_choose_use_case=meeting">Meeting</a>
                                        </li>
                                        <li id="menu-item-10691"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10691">
                                            <a
                                                href="https://workfrom.id/use-case/?_choose_use_case=photoshoot">Photoshoot</a>
                                        </li>
                                        <li id="menu-item-10692"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10692">
                                            <a
                                                href="https://workfrom.id/use-case/?_choose_use_case=videoshoot">Videoshoot</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-11511"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11511"><a
                                        href="https://workfrom.id/blog/">Blog</a></li>
                                <li id="menu-item-11511"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11511"><a
                                        id="link_text-377-12" class="ct-link-text"
                                        href="https://api.whatsapp.com/send/?phone=6282127832456&#038;text&#038;type=phone_number&#038;app_absent=0"
                                        target="_blank">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="oxy-pro-menu-mobile-close-icon"><svg id="svg--pro-menu-376-12">
                                <use xlink:href="#Lineariconsicon-cross"></use>
                            </svg></div>

                    </div>

                </div>

                <script type="text/javascript">
                    jQuery('#-pro-menu-376-12 .oxy-pro-menu-show-dropdown .menu-item-has-children > a', 'body').each(function() {
                        jQuery(this).append(
                            '<div class="oxy-pro-menu-dropdown-icon-click-area"><svg class="oxy-pro-menu-dropdown-icon"><use xlink:href="#Lineariconsicon-chevron-down"></use></svg></div>'
                        );
                    });
                    jQuery('#-pro-menu-376-12 .oxy-pro-menu-show-dropdown .menu-item:not(.menu-item-has-children) > a', 'body').each(
                        function() {
                            jQuery(this).append('<div class="oxy-pro-menu-dropdown-icon-click-area"></div>');
                        });
                </script><a></a>
            </div>
        </div>
    </section>
    <section id="section-365-12" class=" ct-section">
        <div class="ct-section-inner-wrap"></div>
    </section>
    <div class="font-sans text-gray-900 antialiased min-h-screen bg-slate-200">
        {{ $slot }}
    </div>
    <section id="section-272-12" class=" ct-section section">
        <div class="ct-section-inner-wrap">
            <div id="div_block-273-12" class="ct-div-block c-columns-6 c-columns-l-2">
                <div id="div_block-274-12" class="ct-div-block c-col-span-2 c-row-start-l-5"><img id="image-283-12"
                        alt="" src="https://workfrom.id/wp-content/uploads/2022/12/Logo-WF-1.png"
                        class="ct-image" srcset="" sizes="(max-width: 292px) 100vw, 292px" />
                    <div id="text_block-284-12" class="ct-text-block footer-address-text">Komp. Ruko Centre Point
                        Medan Jalan Timor Blok G No. III/IV 2nd Floor, Gang Buntu, Medan Timur, Medan City, North
                        Sumatra 20231<br></div>
                    <div id="text_block-285-12" class="ct-text-block footer-number-text">(+6261) 805 109 77<br></div>
                </div>
                <div id="div_block-364-12" class="ct-div-block"></div>
                <div id="div_block-277-12" class="ct-div-block c-row-start-l-2">
                    <div id="text_block-293-12" class="ct-text-block footer-title-menu-text">LOCATIONS</div><a
                        id="link-367-12" class="ct-link" href="https://workfrom.id/locations/clapham/">
                        <div id="text_block-295-12" class="ct-text-block footer-menu-link-text">Clapham</div>
                    </a><a id="link-391-12" class="ct-link" href="https://101space.co.id/" target="_blank">
                        <div id="text_block-392-12" class="ct-text-block footer-menu-link-text">The 101</div>
                    </a><a id="link-393-12" class="ct-link" href="https://workfrom.id/locations/yafurni/">
                        <div id="text_block-394-12" class="ct-text-block footer-menu-link-text">Yafurni</div>
                    </a><a id="link-395-12" class="ct-link" href="https://workfrom.id/">
                        <div id="text_block-396-12" class="ct-text-block footer-menu-link-text">Kalingga</div>
                    </a><a id="link-382-12" class="ct-link" href="https://workfrom.id/">
                        <div id="text_block-383-12" class="ct-text-block footer-menu-link-text">Spasi</div>
                    </a>
                </div>
                <div id="div_block-384-12" class="ct-div-block c-row-start-l-2">
                    <div id="text_block-385-12" class="ct-text-block footer-title-menu-text">USE CASE</div><a
                        id="link-386-12" class="ct-link" href="https://workfrom.id/use-case/?_choose_use_case=event">
                        <div id="text_block-387-12" class="ct-text-block footer-menu-link-text">Event</div>
                    </a><a id="link-388-12" class="ct-link"
                        href="https://workfrom.id/use-case/?_choose_use_case=meeting">
                        <div id="text_block-389-12" class="ct-text-block footer-menu-link-text">Meeting</div>
                    </a><a id="link-407-12" class="ct-link"
                        href="https://workfrom.id/use-case/?_choose_use_case=photoshoot">
                        <div id="text_block-408-12" class="ct-text-block footer-menu-link-text">Photo Shoot</div>
                    </a><a id="link-409-12" class="ct-link"
                        href="https://workfrom.id/use-case/?_choose_use_case=office">
                        <div id="text_block-410-12" class="ct-text-block footer-menu-link-text">Office</div>
                    </a>
                </div>
                <div id="div_block-300-12" class="ct-div-block ">
                    <div id="text_block-301-12" class="ct-text-block footer-title-menu-text">COMPANY</div><a
                        id="link-371-12" class="ct-link"
                        href="https://api.whatsapp.com/send/?phone=6282127832456&#038;text&#038;type=phone_number&#038;app_absent=0"
                        target="_blank">
                        <div id="text_block-319-12" class="ct-text-block footer-menu-link-text">Contact Us</div>
                    </a><a id="link-369-12" class="ct-link" href="https://workfrom.id/blog/" target="_self">
                        <div id="text_block-302-12" class="ct-text-block footer-menu-link-text">Blog</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WM5BPQP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- /end HFCM by 99 Robots -->
    <script>
        jQuery(document).on('click', 'a[href*="#"]', function(t) {
            if (jQuery(t.target).closest('.wc-tabs').length > 0) {
                return
            }
            if (jQuery(this).is('[href="#"]') || jQuery(this).is('[href="#0"]') || jQuery(this).is(
                    '[href*="replytocom"]')) {
                return
            };
            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname ==
                this.hostname) {
                var e = jQuery(this.hash);
                (e = e.length ? e : jQuery("[name=" + this.hash.slice(1) + "]")).length && (t.preventDefault(),
                    jQuery("html, body").animate({
                        scrollTop: e.offset().top - 0
                    }, 1000))
            }
        });
    </script>
    <?xml version="1.0"?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1">
        <defs>
            <symbol id="Lineariconsicon-cross" viewBox="0 0 20 20">
                <title>cross</title>
                <path class="path1"
                    d="M10.707 10.5l5.646-5.646c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-5.646 5.646-5.646-5.646c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l5.646 5.646-5.646 5.646c-0.195 0.195-0.195 0.512 0 0.707 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146l5.646-5.646 5.646 5.646c0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146c0.195-0.195 0.195-0.512 0-0.707l-5.646-5.646z" />
            </symbol>
            <symbol id="Lineariconsicon-menu" viewBox="0 0 20 20">
                <title>menu</title>
                <path class="path1"
                    d="M17.5 6h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z" />
                <path class="path2"
                    d="M17.5 11h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z" />
                <path class="path3"
                    d="M17.5 16h-15c-0.276 0-0.5-0.224-0.5-0.5s0.224-0.5 0.5-0.5h15c0.276 0 0.5 0.224 0.5 0.5s-0.224 0.5-0.5 0.5z" />
            </symbol>
            <symbol id="Lineariconsicon-chevron-down" viewBox="0 0 20 20">
                <title>chevron-down</title>
                <path class="path1"
                    d="M0 6c0-0.128 0.049-0.256 0.146-0.354 0.195-0.195 0.512-0.195 0.707 0l8.646 8.646 8.646-8.646c0.195-0.195 0.512-0.195 0.707 0s0.195 0.512 0 0.707l-9 9c-0.195 0.195-0.512 0.195-0.707 0l-9-9c-0.098-0.098-0.146-0.226-0.146-0.354z" />
            </symbol>
        </defs>
    </svg>
    <script type="text/javascript">
        function oxygen_init_pro_menu() {
            jQuery('.oxy-pro-menu-container').each(function() {

                // dropdowns
                var menu = jQuery(this),
                    animation = menu.data('oxy-pro-menu-dropdown-animation'),
                    animationDuration = menu.data('oxy-pro-menu-dropdown-animation-duration');

                jQuery('.sub-menu', menu).attr('data-aos', animation);
                jQuery('.sub-menu', menu).attr('data-aos-duration', animationDuration * 1000);

                oxygen_offcanvas_menu_init(menu);
                jQuery(window).resize(function() {
                    oxygen_offcanvas_menu_init(menu);
                });

                // let certain CSS rules know menu being initialized
                // "10" timeout is extra just in case, "0" would be enough
                setTimeout(function() {
                    menu.addClass('oxy-pro-menu-init');
                }, 10);
            });
        }

        jQuery(document).ready(oxygen_init_pro_menu);
        document.addEventListener('oxygen-ajax-element-loaded', oxygen_init_pro_menu, false);

        let proMenuMouseDown = false;

        jQuery(".oxygen-body")
            .on("mousedown", '.oxy-pro-menu-show-dropdown:not(.oxy-pro-menu-open-container) .menu-item-has-children',
                function(e) {
                    proMenuMouseDown = true;
                })

            .on("mouseup", '.oxy-pro-menu-show-dropdown:not(.oxy-pro-menu-open-container) .menu-item-has-children',
                function(e) {
                    proMenuMouseDown = false;
                })

            .on('mouseenter focusin',
                '.oxy-pro-menu-show-dropdown:not(.oxy-pro-menu-open-container) .menu-item-has-children',
                function(e) {
                    if (proMenuMouseDown) return;

                    var subMenu = jQuery(this).children('.sub-menu');
                    subMenu.addClass('aos-animate oxy-pro-menu-dropdown-animating').removeClass('sub-menu-left');

                    var duration = jQuery(this).parents('.oxy-pro-menu-container').data(
                        'oxy-pro-menu-dropdown-animation-duration');

                    setTimeout(function() {
                        subMenu.removeClass('oxy-pro-menu-dropdown-animating')
                    }, duration * 1000);

                    var offset = subMenu.offset(),
                        width = subMenu.width(),
                        docWidth = jQuery(window).width();

                    if (offset.left + width > docWidth) {
                        subMenu.addClass('sub-menu-left');
                    }
                })

            .on('mouseleave focusout', '.oxy-pro-menu-show-dropdown .menu-item-has-children', function() {
                jQuery(this).children('.sub-menu').removeClass('aos-animate');

                var subMenu = jQuery(this).children('.sub-menu');
                //subMenu.addClass('oxy-pro-menu-dropdown-animating-out');

                var duration = jQuery(this).parents('.oxy-pro-menu-container').data(
                    'oxy-pro-menu-dropdown-animation-duration');
                setTimeout(function() {
                    subMenu.removeClass('oxy-pro-menu-dropdown-animating-out')
                }, duration * 1000);
            })

            // open icon click
            .on('click', '.oxy-pro-menu-mobile-open-icon', function() {
                var menu = jQuery(this).parents('.oxy-pro-menu');
                // off canvas
                if (jQuery(this).hasClass('oxy-pro-menu-off-canvas-trigger')) {
                    oxygen_offcanvas_menu_run(menu);
                }
                // regular
                else {
                    menu.addClass('oxy-pro-menu-open');
                    jQuery(this).siblings('.oxy-pro-menu-container').addClass('oxy-pro-menu-open-container');
                    jQuery('body').addClass('oxy-nav-menu-prevent-overflow');
                    jQuery('html').addClass('oxy-nav-menu-prevent-overflow');

                    oxygen_pro_menu_set_static_width(menu);
                }
                // remove animation and collapse
                jQuery('.sub-menu', menu).attr('data-aos', '');
                jQuery('.oxy-pro-menu-dropdown-toggle .sub-menu', menu).slideUp(0);
            });

        function oxygen_pro_menu_set_static_width(menu) {
            var menuItemWidth = jQuery(".oxy-pro-menu-list > .menu-item", menu).width();
            jQuery(".oxy-pro-menu-open-container > div:first-child, .oxy-pro-menu-off-canvas-container > div:first-child",
                menu).width(menuItemWidth);
        }

        function oxygen_pro_menu_unset_static_width(menu) {
            jQuery(".oxy-pro-menu-container > div:first-child", menu).width("");
        }

        // close icon click
        jQuery('body').on('click', '.oxy-pro-menu-mobile-close-icon', function(e) {

            var menu = jQuery(this).parents('.oxy-pro-menu');

            menu.removeClass('oxy-pro-menu-open');
            jQuery(this).parents('.oxy-pro-menu-container').removeClass('oxy-pro-menu-open-container');
            jQuery('.oxy-nav-menu-prevent-overflow').removeClass('oxy-nav-menu-prevent-overflow');

            if (jQuery(this).parent('.oxy-pro-menu-container').hasClass('oxy-pro-menu-off-canvas-container')) {
                oxygen_offcanvas_menu_run(menu);
            }

            oxygen_pro_menu_unset_static_width(menu);
        });

        // dropdown toggle icon click
        jQuery('body').on(
            'touchstart click',
            '.oxy-pro-menu-dropdown-links-toggle.oxy-pro-menu-off-canvas-container .menu-item-has-children > a > .oxy-pro-menu-dropdown-icon-click-area,' +
            '.oxy-pro-menu-dropdown-links-toggle.oxy-pro-menu-open-container .menu-item-has-children > a > .oxy-pro-menu-dropdown-icon-click-area',
            function(e) {
                e.preventDefault();

                // fix for iOS false triggering submenu clicks
                jQuery('.sub-menu').css('pointer-events', 'none');
                setTimeout(function() {
                    jQuery('.sub-menu').css('pointer-events', 'initial');
                }, 500);

                // workaround to stop click event from triggering after touchstart
                if (window.oxygenProMenuIconTouched === true) {
                    window.oxygenProMenuIconTouched = false;
                    return;
                }
                if (e.type === 'touchstart') {
                    window.oxygenProMenuIconTouched = true;
                }
                oxygen_pro_menu_toggle_dropdown(this);
            }
        );

        function oxygen_pro_menu_toggle_dropdown(trigger) {

            var duration = jQuery(trigger).parents('.oxy-pro-menu-container').data(
                'oxy-pro-menu-dropdown-animation-duration');

            jQuery(trigger).closest('.menu-item-has-children').children('.sub-menu').slideToggle({
                start: function() {
                    jQuery(this).css({
                        display: "flex"
                    })
                },
                duration: duration * 1000
            });
        }

        // fullscreen menu link click
        var selector = '.oxy-pro-menu-open .menu-item a';
        jQuery('body').on('click', selector, function(event) {

            if (jQuery(event.target).closest('.oxy-pro-menu-dropdown-icon-click-area').length > 0) {
                // toggle icon clicked, no need to hide the menu
                return;
            } else if ((jQuery(this).attr("href") === "#" || jQuery(this).closest(".oxy-pro-menu-container").data(
                    "entire-parent-toggles-dropdown")) &&
                jQuery(this).parent().hasClass('menu-item-has-children')) {
                // empty href don't lead anywhere, treat it as toggle trigger
                oxygen_pro_menu_toggle_dropdown(event.target);
                // keep anchor links behavior as is, and prevent regular links from page reload
                if (jQuery(this).attr("href").indexOf("#") !== 0) {
                    return false;
                }
            }

            // hide the menu and follow the anchor
            if (jQuery(this).attr("href").indexOf("#") === 0) {
                jQuery('.oxy-pro-menu-open').removeClass('oxy-pro-menu-open');
                jQuery('.oxy-pro-menu-open-container').removeClass('oxy-pro-menu-open-container');
                jQuery('.oxy-nav-menu-prevent-overflow').removeClass('oxy-nav-menu-prevent-overflow');
            }

        });

        // off-canvas menu link click
        var selector = '.oxy-pro-menu-off-canvas .menu-item a';
        jQuery('body').on('click', selector, function(event) {
            if (jQuery(event.target).closest('.oxy-pro-menu-dropdown-icon-click-area').length > 0) {
                // toggle icon clicked, no need to trigger it
                return;
            } else if ((jQuery(this).attr("href") === "#" || jQuery(this).closest(".oxy-pro-menu-container").data(
                    "entire-parent-toggles-dropdown")) &&
                jQuery(this).parent().hasClass('menu-item-has-children')) {
                // empty href don't lead anywhere, treat it as toggle trigger
                oxygen_pro_menu_toggle_dropdown(event.target);
                // keep anchor links behavior as is, and prevent regular links from page reload
                if (jQuery(this).attr("href").indexOf("#") !== 0) {
                    return false;
                }
            }
        });

        // off canvas
        function oxygen_offcanvas_menu_init(menu) {

            // only init off-canvas animation if trigger icon is visible i.e. mobile menu in action
            var offCanvasActive = jQuery(menu).siblings('.oxy-pro-menu-off-canvas-trigger').css('display');
            if (offCanvasActive !== 'none') {
                var animation = menu.data('oxy-pro-menu-off-canvas-animation');
                setTimeout(function() {
                    menu.attr('data-aos', animation);
                }, 10);
            } else {
                // remove AOS
                menu.attr('data-aos', '');
            };
        }

        function oxygen_offcanvas_menu_run(menu) {

            var container = menu.find(".oxy-pro-menu-container");

            if (!container.attr('data-aos')) {
                // initialize animation
                setTimeout(function() {
                    oxygen_offcanvas_menu_toggle(menu, container)
                }, 0);
            } else {
                oxygen_offcanvas_menu_toggle(menu, container);
            }
        }

        var oxygen_offcanvas_menu_toggle_in_progress = false;

        function oxygen_offcanvas_menu_toggle(menu, container) {

            if (oxygen_offcanvas_menu_toggle_in_progress) {
                return;
            }

            container.toggleClass('aos-animate');

            if (container.hasClass('oxy-pro-menu-off-canvas-container')) {

                oxygen_offcanvas_menu_toggle_in_progress = true;

                var animation = container.data('oxy-pro-menu-off-canvas-animation'),
                    timeout = container.data('aos-duration');

                if (!animation) {
                    timeout = 0;
                }

                setTimeout(function() {
                    container.removeClass('oxy-pro-menu-off-canvas-container')
                    menu.removeClass('oxy-pro-menu-off-canvas');
                    oxygen_offcanvas_menu_toggle_in_progress = false;
                }, timeout);
            } else {
                container.addClass('oxy-pro-menu-off-canvas-container');
                menu.addClass('oxy-pro-menu-off-canvas');
                oxygen_pro_menu_set_static_width(menu);
            }
        }
    </script>


    <script type="text/javascript">
        function oxygenVSBInitTabs(element) {
            if (element !== undefined) {
                jQuery(element).find('.oxy-tabs-wrapper').addBack('.oxy-tabs-wrapper').each(function(index) {
                    jQuery(this).children('.oxy-tabs-wrapper > div').eq(0).trigger('click');
                });
            } else {
                jQuery('.oxy-tabs-wrapper').each(function(index) {
                    jQuery(this).children('.oxy-tabs-wrapper > div').eq(0).trigger('click');
                });
            }
        }

        jQuery(document).ready(function() {
            let event = new Event('oxygenVSBInitTabsJs');
            document.dispatchEvent(event);
        });

        document.addEventListener("oxygenVSBInitTabsJs", function() {
            oxygenVSBInitTabs();
        }, false);

        // handle clicks on tabs
        jQuery("body").on('click', '.oxy-tabs-wrapper > div', function(e) {

            /* a tab or an element that is a child of a tab has been clicked. prevent any default behavior */
            //e.preventDefault();

            /* which tab has been clicked? (e.target might be a child of the tab.) */
            clicked_tab = jQuery(e.target).closest('.oxy-tabs-wrapper > div');
            index = clicked_tab.index();

            /* which tabs-wrapper is this tab inside? */
            tabs_wrapper = jQuery(e.target).closest('.oxy-tabs-wrapper');

            /* what class dp we use to signify an active tob? */
            class_for_active_tab = tabs_wrapper.attr('data-oxy-tabs-active-tab-class');

            /* make all the other tabs in this tabs-wrapper inactive */
            jQuery(tabs_wrapper).children('.oxy-tabs-wrapper > div').removeClass(class_for_active_tab);

            /* make the clicked tab the active tab */
            jQuery(tabs_wrapper).children('.oxy-tabs-wrapper > div').eq(index).addClass(class_for_active_tab);

            /* which tabs-contents-wrapper is used by these tabs? */
            tabs_contents_wrapper_id = tabs_wrapper.attr('data-oxy-tabs-contents-wrapper');

            /* try to grab the correct content wrapper, in case of duplicated ID's */
            $content_wrapper = jQuery(tabs_wrapper).next();
            if ($content_wrapper.attr("id") != tabs_contents_wrapper_id) $content_wrapper = jQuery('#' +
                tabs_contents_wrapper_id);

            $content_tabs = $content_wrapper.children("div");

            /* hide all of the content */
            $content_tabs.addClass('oxy-tabs-contents-content-hidden');

            /* unhide the content corresponding to the active tab*/
            $content_tabs.eq(index).removeClass('oxy-tabs-contents-content-hidden');

        });
    </script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            let event = new Event('oxygenVSBInitToggleJs');
            document.dispatchEvent(event);
        });

        document.addEventListener("oxygenVSBInitToggleJs", function() {
            oxygenVSBInitToggleState();
        }, false);

        oxygenVSBInitToggleState = function() {

            jQuery('.oxy-toggle').each(function() {

                var initial_state = jQuery(this).attr('data-oxy-toggle-initial-state'),
                    toggle_target = jQuery(this).attr('data-oxy-toggle-target'),
                    active_class = jQuery(this).attr('data-oxy-toggle-active-class');

                if (initial_state == 'closed') {
                    if (!toggle_target) {
                        jQuery(this).next().hide();
                    } else {
                        jQuery(toggle_target).hide();
                    }
                    jQuery(this).children('.oxy-expand-collapse-icon').addClass('oxy-eci-collapsed');
                    jQuery(this).removeClass(active_class)
                } else {
                    jQuery(this).addClass(active_class)
                }
            });
        }

        jQuery("body").on('click', '.oxy-toggle', function() {

            var toggle_target = jQuery(this).attr('data-oxy-toggle-target'),
                active_class = jQuery(this).attr('data-oxy-toggle-active-class');

            jQuery(this).toggleClass(active_class)
            jQuery(this).children('.oxy-expand-collapse-icon').toggleClass('oxy-eci-collapsed');

            if (!toggle_target) {
                jQuery(this).next().toggle();
            } else {
                jQuery(toggle_target).toggle();
            }

            // force 3rd party plugins to rerender things inside the toggle
            jQuery(window).trigger('resize');
        });
    </script>

    <link rel='stylesheet' id='oxygen-aos-css'
        href='https://workfrom.id/wp-content/plugins/oxygen/component-framework/vendor/aos/aos.css?ver=6.3.1'
        media='all' />
    <script src='https://workfrom.id/wp-content/plugins/oxygen/component-framework/vendor/aos/aos.js?ver=1'
        id='oxygen-aos-js'></script>
    <script type="text/javascript" id="ct-footer-js">
        AOS.init({})

        jQuery('body').addClass('oxygen-aos-enabled');
    </script>
    <style type="text/css" id="ct_code_block_css_275">
        .oxy-expand-collapse-icon::after,
        .oxy-expand-collapse-icon::before {
            height: 1px;
        }
    </style>
</body>

</html>
