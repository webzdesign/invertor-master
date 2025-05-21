<!DOCTYPE html>
<html lang="en-GB" dir="ltr" style="background-color: rgb(55, 58, 61);">
    <head>
        <title>{{ config('app.name') }} | Buy E-Scooters Online</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
        <meta name="referrer" content="origin">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="title" content="{{ config('app.name') }} | Buy E-Scooters Online">
        <meta name="description" content="Explore high-performance electric scooters and e-bikes at Skootz. Enjoy fast free UK shipping, powerful motors, and eco-friendly commuting solutions. Ride smarter today!">
        <link rel="stylesheet" crossorigin="" href="{{ asset('assets/checkoutCss/StackedMerchandisePreview._xnAOXmq.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/intel.css') }}">
        <link rel="icon" href="{{ env('APP_Image_URL').'assets/images/favicon.ico' }}" type="image/png">
        <style data-description="shop-js-font-faces">
            @font-face {
            font-family: 'SuisseIntl';
            src: url("{{ asset('assets/font/SuisseIntl-Book.otf') }}")
            format('opentype');
            font-style: normal;
            font-weight: 450;
            font-display: fallback;
            }
            @font-face {
            font-family: 'SuisseIntl';
            src: url("{{ asset('assets/font/SuisseIntl-Medium.otf') }}")
            format('opentype');
            font-style: normal;
            font-weight: 500;
            font-display: fallback;
            }
            @font-face {
            font-family: 'SuisseIntl';
            src: url("{{ asset('assets/font/SuisseIntl-SemiBold.otf') }}")
            format('opentype');
            font-style: normal;
            font-weight: 600;
            font-display: fallback;
            }
        </style>
        <style type="text/css">
            .gpay-button {
            background-origin: content-box;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            border: 0px;
            border-radius: 4px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 1px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            cursor: pointer;
            height: 40px;
            min-height: 40px;
            padding: 12px 24px 10px;
            width: 240px;
            }
            .gpay-button.black {
            background-color: #000;
            box-shadow: none;
            }
            .gpay-button.white {
            background-color: #fff;
            }
            .gpay-button.short, .gpay-button.plain {
            min-width: 90px;
            width: 160px;
            }
            .gpay-button.black.active {
            background-color: #5f6368;
            }
            .gpay-button.black.hover {
            background-color: #3c4043;
            }
            .gpay-button.white.active {
            background-color: #fff;
            }
            .gpay-button.white.focus {
            box-shadow: #e8e8e8 0 1px 1px 0, #e8e8e8 0 1px 3px;
            }
            .gpay-button.white.hover {
            background-color: #f8f8f8;
            }
            .gpay-button-fill, .gpay-button-fill > .gpay-button.white, .gpay-button-fill > .gpay-button.black {
            width: 100%;
            height: inherit;
            }
            .gpay-button-fill > .gpay-button.white,
            .gpay-button-fill > .gpay-button.black {
            padding: 12px 15% 10px;
            }
            .gpay-button.donate, .gpay-button.book,
            .gpay-button.checkout,
            .gpay-button.subscribe, .gpay-button.pay,
            .gpay-button.order {
            padding: 9px 24px;
            }
            .gpay-button-fill > .gpay-button.donate,
            .gpay-button-fill > .gpay-button.book,
            .gpay-button-fill > .gpay-button.checkout,
            .gpay-button-fill > .gpay-button.order,
            .gpay-button-fill > .gpay-button.pay,
            .gpay-button-fill > .gpay-button.subscribe {
            padding: 9px 15%;
            }
        </style>
        <style type="text/css">
            .gpay-card-info-container.black,
            .gpay-button.black {
            outline: 1px solid #757575;
            box-shadow: none;
            }
            .gpay-card-info-container.black.focus,
            .gpay-button.black.focus {
            outline: 1px auto Highlight;
            outline: 1px auto -webkit-focus-ring-color;
            box-shadow: none;
            }
            .gpay-card-info-container.white,
            .gpay-button.white {
            outline: 1px solid #3C4043;
            box-shadow: none;
            }
            .gpay-card-info-container.white.focus,
            .gpay-button.white.focus {
            outline: 1px auto Highlight;
            outline: 1px auto -webkit-focus-ring-color;
            box-shadow: none;
            }
        </style>
    </head>
    <body class="" style="background-color: rgb(55, 58, 61);">
        <script>
            try {
            Function('const [result] = ((abc = 1) => [Promise.resolve(abc)])();')();
            if (!window.fetch) { throw new Error("no fetch")}
            } catch (err) {
            document.documentElement.innerHTML = "<div class=\"error-container\"><style>* {\n  box-sizing: border-box;\n  margin: 0;\n  padding: 0;\n}\n\nhtml {\n  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;\n  background: #F1F1F1;\n  font-size: 62.5%;\n  color: #303030;\n  min-height: 100%;\n}\n\nbody {\n  padding: 0;\n  margin: 0;\n  line-height: 2.7rem;\n}\n\nh1 {\n  font-size: 1.8rem;\n  font-weight: 400;\n  margin: 0 0 1.4rem 0;\n}\n\np {\n  font-size: 1.5rem;\n  margin: 0;\n}\n\n.error-container {\n  padding: 4rem 3.5rem;\n}\n\n@media all and (min-width:500px) {\n  .error-container {\n    padding: 7.5rem 10.5rem;\n    align-items: center;\n  }\n}</style><div><h1>It looks like your browser version isn't supported.</h1><p>Please update your browser to access the checkout and complete your purchase.</p></div></div>";
            }
        </script>
        <style>
            :root {
            --x-skeleton-color-global-accent: hsl(204, 77%, 39%);
            --x-skeleton-color-global-background: hsl(0, 0%, 100%);
            --x-skeleton-color-global-backgroundSubdued: hsl(0, 0%, 96%);
            --x-skeleton-color-global-border: hsl(0, 0%, 87%);
            --x-skeleton-color-global-text: hsl(0, 0%, 0%);
            --x-skeleton-color-global-textContrast: hsl(0, 0%, 100%);
            --x-skeleton-color-global-textSubdued: hsl(0, 0%, 44%);
            --x-skeleton-color-global-textSubdued200: hsl(0, 0%, 90%);
            --x-skeleton-color-schemes-scheme2-base-background: hsl(0, 0%, 96%);
            --x-skeleton-color-schemes-scheme2-base-backgroundSubdued: hsl(0, 0%, 93%);
            --x-skeleton-color-schemes-scheme2-base-border: hsl(0, 0%, 84%);
            --x-skeleton-color-schemes-scheme2-base-text: hsl(0, 0%, 0%);
            --x-skeleton-color-schemes-scheme2-base-textContrast: hsl(0, 0%, 96%);
            --x-skeleton-color-schemes-scheme2-base-textSubdued: hsl(0, 0%, 40%);
            --x-skeleton-color-schemes-scheme2-base-textSubdued200: hsl(0, 0%, 80%);
            --x-skeleton-color-global-accent: #108043;
            --x-skeleton-color-schemes-scheme1-base-background: #373a3d;
            --x-skeleton-color-schemes-scheme1-base-backgroundSubdued: #3d4144;
            --x-skeleton-color-schemes-scheme1-base-border: #696c6e;
            --x-skeleton-color-schemes-scheme1-base-text: #ffffff;
            --x-skeleton-color-schemes-scheme1-base-textContrast: #000000;
            --x-skeleton-color-schemes-scheme1-base-textSubdued: #ffffffa8;
            --x-skeleton-color-schemes-scheme1-base-textSubdued200: #ffffff33;
            --x-skeleton-color-schemes-scheme2-base-background: #373a3d;
            --x-skeleton-color-schemes-scheme2-base-backgroundSubdued: #3d4144;
            --x-skeleton-color-schemes-scheme2-base-border: #696c6e;
            --x-skeleton-color-schemes-scheme2-base-text: #ffffff;
            --x-skeleton-color-schemes-scheme2-base-textContrast: #000000;
            --x-skeleton-color-schemes-scheme2-base-textSubdued: #ffffffa8;
            --x-skeleton-color-schemes-scheme2-base-textSubdued200: #ffffff33;
            --x-skeleton-typography-line-small: 1.2;
            --x-skeleton-typography-line-base: 1.5;
            --x-skeleton-line-quantity-size: 2.1rem;
            --x-skeleton-typography-size-small: 1.2rem;
            --x-skeleton-typography-size-default: 1.4rem;
            --x-skeleton-typography-size-medium: 1.6rem;
            --x-skeleton-typography-size-large: 1.9rem;
            --x-skeleton-typography-size-extra-large: 2.1rem;
            --x-skeleton-typography-size-extra-extra-large: 2.4rem;
            --x-skeleton-typography-primary-weight-bold: 400;
            --x-skeleton-typography-primary-fonts: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --x-skeleton-typography-secondary-weight-bold: 600;
            --x-skeleton-typography-secondary-fonts: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --x-skeleton-spacing-none: 0;
            --x-skeleton-spacing-small-100: 1.1rem;
            --x-skeleton-spacing-small-200: 0.9rem;
            --x-skeleton-spacing-small-300: 0.7rem;
            --x-skeleton-spacing-small-400: 0.5rem;
            --x-skeleton-spacing-small-500: 0.3rem;
            --x-skeleton-spacing-base: 1.4rem;
            --x-skeleton-spacing-large-100: 1.7rem;
            --x-skeleton-spacing-large-200: 2.1rem;
            --x-skeleton-spacing-large-300: 2.6rem;
            --x-skeleton-spacing-large-400: 3.2rem;
            --x-skeleton-spacing-large-500: 3.8rem;
            --x-skeleton-border-radius-none: 0;
            --x-skeleton-border-radius-base: 5px;
            --x-skeleton-border-radius-small: 2px;
            --x-skeleton-border-radius-large: 10px;
            }
            @keyframes SkeletonPulse {
            50% {
            opacity: 1;
            }
            75% {
            opacity: 0.5;
            }
            100% {
            opacity: 1;
            }
            }
            *,
            :after,
            :before {
            box-sizing: border-box;
            }
            body,
            html {
            height: 100%;
            margin: 0;
            width: 100%;
            }
            html {
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
            font-size: 62.5%;
            font-family: var(--x-skeleton-typography-primary-fonts);
            line-height: var(--x-skeleton-typography-line-base);
            }
            body {
            -webkit-font-smoothing: subpixel-antialiased;
            overflow-wrap: break-word;
            overflow-x: hidden;
            overflow-y: scroll;
            }
            body.Loading {
            position: fixed;
            }
            /* TODO: need to take it out of the accessibility tree, too? */
            body.Loading > .LoadingShell {
            opacity: 1;
            }
            .BlockStack {
            display: grid;
            }
            .BlockStack--spacing-small500 {
            gap: var(--x-skeleton-spacing-small-500);
            }
            .BlockStack--spacing-small300 {
            gap: var(--x-skeleton-spacing-small-300);
            }
            .BlockStack--spacing-small100 {
            gap: var(--x-skeleton-spacing-small-100);
            }
            .BlockStack--spacing-base {
            gap: var(--x-skeleton-spacing-base);
            }
            .BlockStack--spacing-large100 {
            gap: var(--x-skeleton-spacing-large-100);
            }
            .BlockStack--spacing-large200 {
            gap: var(--x-skeleton-spacing-large-200);
            }
            .BlockStack--min-inline-size-full {
            flex: 1;
            }
            .BlockStack--inline-alignment-center {
            justify-items: center;
            }
            .BlockStack--inline-alignment-end {
            justify-items: end;
            }
            .LoadingHeaderHeading {
            margin: 0;
            font-size: var(--x-skeleton-typography-size-extra-large);
            font-weight: var(--x-skeleton-typography-secondary-weight-bold);
            font-family: var(--x-skeleton-typography-secondary-fonts);
            line-height: var(--x-skeleton-typography-line-small);
            }
            .LoadingHeaderImage {
            display: block;
            max-width: 100%;
            height: auto;
            }
            .InlineStack {
            display: flex;
            min-height: 100%;
            min-width: 100%;
            }
            .InlineStack--spacing-base {
            column-gap: var(--x-skeleton-spacing-base);
            }
            .InlineStack--spacing-small100 {
            column-gap: var(--x-skeleton-spacing-small-100);
            }
            .InlineStack--spacing-large200 {
            column-gap: var(--x-skeleton-spacing-large-200);
            }
            .InlineStack--inline-alignment-spaceBetween {
            justify-content: space-between;
            }
            .InlineStack--block-alignment-start {
            align-items: start;
            }
            .InlineStack--block-alignment-center {
            align-items: center;
            }
            .Divider {
            width: 100%;
            height: 1px;
            background-color: var(--x-skeleton-default-color-border);
            }
            .SkeletonButton {
            background-color: var(--x-skeleton-default-color-textSubdued200);
            border-radius: var(--x-skeleton-border-radius-base);
            animation: SkeletonPulse 4000ms ease infinite;
            width: 100%;
            }
            .SkeletonButtonInner {
            width: 100%;
            height: 4.8rem;
            }
            .SkeletonImage {
            background-color: var(--x-skeleton-default-color-textSubdued200);
            animation: SkeletonPulse 4000ms ease infinite;
            width: 100%;
            }
            .SkeletonImage--corner-radius-small {
            border-radius: var(--x-skeleton-border-radius-small);
            }
            .SkeletonImage--corner-radius-base {
            border-radius: var(--x-skeleton-border-radius-base);
            }
            .SkeletonImage--corner-radius-large {
            border-radius: var(--x-skeleton-border-radius-large);
            }
            .SkeletonImage--corner-radius-rounded {
            border-radius: 100%;
            }
            .SkeletonImageInner {
            width: 100%;
            height: 100%;
            }
            @supports (aspect-ratio: 1) {
            .SkeletonImage {
            aspect-ratio: 1;
            }
            }
            @supports not (aspect-ratio: 1) {
            .SkeletonImage::before {
            content: "";
            height: 0;
            display: block;
            padding-bottom: 100%;
            padding-bottom: calc(100% / 1);
            }
            }
            .SkeletonText {
            background-color: var(--x-skeleton-default-color-textSubdued200);
            border-radius: var(--x-skeleton-border-radius-base);
            animation: SkeletonPulse 4000ms ease infinite;
            }
            .SkeletonTextInner {
            display: inline-block;
            }
            .SkeletonTextInner--inline-size-small {
            width: 10ch;
            }
            .SkeletonTextInner--inline-size-base {
            width: 20ch;
            }
            .SkeletonTextInner--inline-size-large {
            width: 30ch;
            }
            .SkeletonTextInner--inline-size-full {
            width: 100%;
            }
            .Icon {
            fill: none;
            color: var(--x-skeleton-default-color-border);
            stroke: currentColor;
            }
            .Icon path {
            vector-effect: non-scaling-stroke;
            stroke-width: 1.4px;
            }
            .LoadingShellLineItems {
            display: grid;
            grid-auto-flow: row;
            align-items: stretch;
            gap: var(--x-skeleton-spacing-base);
            }
            .LoadingShellLine {
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: var(--x-skeleton-spacing-base);
            align-items: center;
            font-size: var(--x-type-size-base);
            }
            .LoadingShellLineImageWrapper {
            width: 6.4rem;
            height: 6.4rem;
            position: relative;
            }
            .LoadingShellImageWrapper--Small {
            width: 3.2rem;
            height: 3.2rem;
            position: relative;
            }
            .LoadingShellLineImage {
            width: 6.4rem;
            height: 6.4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            object-fit: contain;
            background: var(--x-skeleton-default-color-backgroundSubdued);
            }
            .LoadingShellLineImage--border-full {
            border: 1px solid var(--x-skeleton-default-color-border);
            }
            .LoadingShellLineImage--corner-radius-small {
            border-radius: var(--x-skeleton-border-radius-small);
            }
            .LoadingShellLineImage--corner-radius-base {
            border-radius: var(--x-skeleton-border-radius-base);
            }
            .LoadingShellLineImage--corner-radius-large {
            border-radius: var(--x-skeleton-border-radius-large);
            }
            .LoadingShellLineImage--corner-radius-rounded {
            border-radius: 100%;
            }
            .LoadingShellLineImageIcon {
            width: 3.3rem;
            height: 3.3rem;
            }
            .LoadingShellLineQuantity {
            position: absolute;
            top: 0;
            right: 0;
            transform: translate(25%, -50%);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 2.2rem;
            min-height: 2.2rem;
            padding: 0 var(--x-skeleton-spacing-small-300);
            border-radius: 1.1rem;
            background: var(--x-skeleton-default-color-textSubdued);
            color: var(--x-skeleton-default-color-textContrast);
            font-size: var(--x-skeleton-typography-size-small);
            font-weight: 500;
            }
            .LoadingShellLineQuantity--corner-radius-none {
            border-radius: 0;
            }
            .LoadingShellLineContent {
            display: flex;
            flex-direction: column;
            align-self: baseline;
            min-height: 6.4rem;
            justify-content: center;
            }
            .LoadingShellLinePrice {
            display: flex;
            align-self: baseline;
            }
            .Text {
            font-size: var(--x-skeleton-typography-size-default);
            }
            .Text--size-small {
            font-size: var(--x-skeleton-typography-size-small);
            }
            .Text--size-large {
            font-size: var(--x-skeleton-typography-size-large);
            }
            .Text--size-extraExtraLarge {
            font-size: var(--x-skeleton-typography-size-extra-extra-large);
            }
            .Text--appearance-subdued {
            color: var(--x-skeleton-default-color-textSubdued);
            }
            .SkeletonExpressCheckoutButtons {
            display: grid;
            gap: var(--x-skeleton-spacing-small-100);
            grid-template-columns: repeat(2, 1fr);
            }
            .SkeletonExpressCheckoutButtons > *:first-child {
            grid-column: 1 / -1;
            }
            .SkeletonExpressCheckout {
            margin-bottom: var(--x-skeleton-spacing-large-500);
            }
            .ExpressCheckoutDivider {
            display: flex;
            place-items: center;
            height: 21px;
            padding-top: calc(var(--x-skeleton-spacing-large-500) - 1px);
            }
            @media screen and (min-width: 1000px) {
            .SkeletonExpressCheckoutButtons {
            grid-template-columns: repeat(3, 1fr);
            }
            .SkeletonExpressCheckoutButtons > *:first-child {
            grid-column: auto;
            }
            .SkeletonExpressCheckoutButtons {
            grid-template-columns: repeat(3, 1fr);
            }
            .SkeletonExpressCheckoutButtons > *:first-child {
            grid-column: auto;
            }
            }
            .LoadingShellHeader--banner {
            background-position: 50% 50%;
            background-size: cover;
            background-image: var(--x-skeleton-banner-image);
            --x-skeleton-header-shop-name-color: #fff;
            --x-skeleton-cart-color: #fff;
            }
            .VisuallyHidden {
            border-width: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            white-space: nowrap;
            }
            .FadeIn {
            opacity: 0;
            animation: 400ms FadeIn 150ms forwards;
            }
            @keyframes FadeIn {
            from {
            opacity: 0;
            }
            to {
            opacity: 1;
            }
            }
            .colorSchemeScheme1 {
            --x-skeleton-default-color-background: var(--x-skeleton-color-schemes-scheme1-base-background, var(--x-skeleton-color-global-background));
            --x-skeleton-default-color-accent: var(--x-skeleton-color-schemes-scheme1-base-accent, var(--x-skeleton-color-global-accent));
            --x-skeleton-default-color-backgroundSubdued: var(--x-skeleton-color-schemes-scheme1-base-backgroundSubdued, var(--x-skeleton-color-global-backgroundSubdued));
            --x-skeleton-default-color-border: var(--x-skeleton-color-schemes-scheme1-base-border, var(--x-skeleton-color-global-border));
            --x-skeleton-default-color-text: var(--x-skeleton-color-schemes-scheme1-base-text, var(--x-skeleton-color-global-text));
            --x-skeleton-default-color-textContrast: var(--x-skeleton-color-schemes-scheme2-base-textContrast, var(--x-skeleton-color-global-textContrast));
            --x-skeleton-default-color-textSubdued: var(--x-skeleton-color-schemes-scheme1-base-textSubdued, var(--x-skeleton-color-global-textSubdued));
            --x-skeleton-default-color-textSubdued200: var(--x-skeleton-color-schemes-scheme1-base-textSubdued200, var(--x-skeleton-color-global-textSubdued200));
            }
            .colorSchemeScheme2 {
            --x-skeleton-default-color-background: var(--x-skeleton-color-schemes-scheme2-base-background, var(--x-skeleton-color-global-background));
            --x-skeleton-default-color-accent: var(--x-skeleton-color-schemes-scheme2-base-accent, var(--x-skeleton-color-global-accent));
            --x-skeleton-default-color-backgroundSubdued: var(--x-skeleton-color-schemes-scheme2-base-backgroundSubdued, var(--x-skeleton-color-global-backgroundSubdued));
            --x-skeleton-default-color-border: var(--x-skeleton-color-schemes-scheme2-base-border, var(--x-skeleton-color-global-border));
            --x-skeleton-default-color-text: var(--x-skeleton-color-schemes-scheme2-base-text, var(--x-skeleton-color-global-text));
            --x-skeleton-default-color-textContrast: var(--x-skeleton-color-schemes-scheme2-base-textContrast, var(--x-skeleton-color-global-textContrast));
            --x-skeleton-default-color-textSubdued: var(--x-skeleton-color-schemes-scheme2-base-textSubdued, var(--x-skeleton-color-global-textSubdued));
            --x-skeleton-default-color-textSubdued200: var(--x-skeleton-color-schemes-scheme2-base-textSubdued200, var(--x-skeleton-color-global-textSubdued200));
            }
            .colorSchemeScheme3 {
            --x-skeleton-default-color-background: var(--x-skeleton-color-schemes-scheme3-base-background, var(--x-skeleton-color-global-background));
            --x-skeleton-default-color-accent: var(--x-skeleton-color-schemes-scheme3-base-accent, var(--x-skeleton-color-global-accent));
            --x-skeleton-default-color-backgroundSubdued: var(--x-skeleton-color-schemes-scheme3-base-backgroundSubdued, var(--x-skeleton-color-global-backgroundSubdued));
            --x-skeleton-default-color-border: var(--x-skeleton-color-schemes-scheme3-base-border, var(--x-skeleton-color-global-border));
            --x-skeleton-default-color-text: var(--x-skeleton-color-schemes-scheme3-base-text, var(--x-skeleton-color-global-text));
            --x-skeleton-default-color-textContrast: var(--x-skeleton-color-schemes-scheme2-base-textContrast, var(--x-skeleton-color-global-textContrast));
            --x-skeleton-default-color-textSubdued: var(--x-skeleton-color-schemes-scheme3-base-textSubdued, var(--x-skeleton-color-global-textSubdued));
            --x-skeleton-default-color-textSubdued200: var(--x-skeleton-color-schemes-scheme3-base-textSubdued200, var(--x-skeleton-color-global-textSubdued200));
            }
            .colorSchemeScheme4 {
            --x-skeleton-default-color-background: var(--x-skeleton-color-schemes-scheme4-base-background, var(--x-skeleton-color-global-background));
            --x-skeleton-default-color-accent: var(--x-skeleton-color-schemes-scheme4-base-accent, var(--x-skeleton-color-global-accent));
            --x-skeleton-default-color-backgroundSubdued: var(--x-skeleton-color-schemes-scheme4-base-backgroundSubdued, var(--x-skeleton-color-global-backgroundSubdued));
            --x-skeleton-default-color-border: var(--x-skeleton-color-schemes-scheme4-base-border, var(--x-skeleton-color-global-border));
            --x-skeleton-default-color-text: var(--x-skeleton-color-schemes-scheme4-base-text, var(--x-skeleton-color-global-text));
            --x-skeleton-default-color-textContrast: var(--x-skeleton-color-schemes-scheme2-base-textContrast, var(--x-skeleton-color-global-textContrast));
            --x-skeleton-default-color-textSubdued: var(--x-skeleton-color-schemes-scheme4-base-textSubdued, var(--x-skeleton-color-global-textSubdued));
            --x-skeleton-default-color-textSubdued200: var(--x-skeleton-color-schemes-scheme4-base-textSubdued200, var(--x-skeleton-color-global-textSubdued200));
            }
            .backgroundColorBase {
            background-color: var(--x-skeleton-default-color-background);
            color: var(--x-skeleton-default-color-text);
            }
            .backgroundColorSubdued {
            background-color: var(--x-skeleton-default-color-backgroundSubdued);
            color: var(--x-skeleton-default-color-text);
            }
            .LoadingShell {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 100000;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.2s ease;
            will-change: opacity;
            min-height: 100dvh;
            display: grid;
            grid-template-rows: auto auto 1fr;
            grid-template-areas:
            'header'
            'disclosure'
            'shell-content';
            background-image: var(--x-skeleton-shell-background-image);
            --x-skeleton-shell-inline-size: 57rem;
            --x-skeleton-shell-background-image: var(--skeleton-config-shell-background-image);
            --x-skeleton-shell-header-inline-size: var(--x-skeleton-shell-inline-size);
            --x-skeleton-shell-header-padding: var(--skeleton-config-header-padding, var(--x-skeleton-spacing-large-200));
            --x-skeleton-shell-header-background-image: var(--skeleton-config-header-background-image);
            --x-skeleton-shell-disclosure-inline-size: var(--x-skeleton-shell-inline-size);
            --x-skeleton-shell-disclosure-padding: var(--x-skeleton-spacing-large-100) var(--x-skeleton-spacing-large-200);
            --x-skeleton-shell-disclosure-display: block;
            --x-skeleton-shell-main-inline-size: var(--x-skeleton-shell-inline-size);
            --x-skeleton-shell-main-justify-content: center;
            --x-skeleton-shell-main-padding: var(--x-skeleton-spacing-large-200);
            --x-skeleton-shell-main-border: none;
            --x-skeleton-shell-order-summary-display: none;
            --x-skeleton-shell-order-summary-background-image: var(--skeleton-config-order-summary-background-image);
            @media screen and (min-width: 1000px) {
            --x-skeleton-shell-main-inline-size: 66rem;
            --x-skeleton-shell-order-summary-inline-size: 52rem;
            --x-skeleton-shell-section-columns-offset: 7rem;
            --x-skeleton-shell-content-display: grid;
            --x-skeleton-shell-content-template-areas: 'main order-summary';
            --x-skeleton-shell-content-template-columns: minmax(
            min-content, calc(50% + var(--x-skeleton-shell-section-columns-offset))
            )
            1fr;
            --x-skeleton-shell-inline-size: 118rem;
            --x-skeleton-shell-header-padding: var(--skeleton-config-header-padding, 0);
            --x-skeleton-shell-disclosure-display: none;
            --x-skeleton-shell-main-justify-content: flex-end;
            --x-skeleton-shell-main-padding: var(--x-skeleton-spacing-large-500);
            --x-skeleton-shell-main-border: 1px solid var(--x-skeleton-default-color-border);
            --x-skeleton-shell-order-summary-display: block;
            --x-skeleton-shell-order-summary-padding: var(--x-skeleton-spacing-large-500);
            }
            }
            @supports (width: min(0px, 100px)) {
            /* mobile header padding is clamped at large-200 like Sections */
            @media screen and (max-width: 999px) {
            .LoadingShell {
            --x-skeleton-shell-header-padding: min(
            var(--skeleton-config-header-padding, var(--x-skeleton-spacing-large-200)),
            var(--x-skeleton-spacing-large-200)
            );
            }
            }
            }
            @media screen and (min-width: 1000px) {
            .LoadingShell.LoadingShellConfig-Header-positionStart {
            --x-skeleton-shell-header-padding: var(--skeleton-config-header-padding,
            calc(var(--x-skeleton-spacing-large-500) * 2) var(--x-skeleton-spacing-large-500)
            var(--x-skeleton-spacing-large-500)
            );
            }
            .LoadingShell.LoadingShellConfig-Header-positionStart.LoadingShell-variantOneStepCheckout {
            --x-skeleton-shell-header-padding: var(--skeleton-config-header-padding, var(--x-skeleton-spacing-large-200) var(--x-skeleton-spacing-large-500));
            }
            }
            .LoadingShellHeader {
            grid-area: header;
            }
            .LoadingShellHeaderContent {
            padding: var(--x-skeleton-shell-header-padding);
            width: 100%;
            max-width: var(--x-skeleton-shell-header-inline-size);
            }
            @media screen and (min-width: 1000px) {
            .LoadingShell:not(.LoadingShellConfig-Header-positionStart) .LoadingShellHeader-positionStart {
            display: none;
            }
            }
            @media screen and (max-width: 999px) {
            .LoadingShellConfig-Header-positionInline .LoadingShellHeader-positionInline,
            .LoadingShellConfig-Header-positionInlineSecondary .LoadingShellHeader-positionInlineSecondary {
            display: none;
            }
            .LoadingShellConfig-Header-positionInlineSecondary .LoadingShellHeader-positionStart {
            background-image: var(
            --x-skeleton-shell-header-background-image,
            var(--x-skeleton-shell-order-summary-background-image)
            );
            }
            }
            .LoadingShellHeader-positionStart {
            display: flex;
            justify-content: center;
            border-bottom: 1px solid var(--x-skeleton-default-color-border);
            background-image: var(--x-skeleton-shell-header-background-image);
            background-position: 50% 50%;
            background-size: cover;
            }
            .LoadingShellHeader-positionStart.LoadingShellHeader-hasBackgroundImage {
            --header-shop-name-color: #ffffff;
            --x-skeleton-default-color-accent: #ffffff;
            }
            .LoadingShellBuyerJourneyContent {
            width: 100%;
            width: var(--x-skeleton-shell-buyer-journey-inline-size);
            padding: var(--x-skeleton-shell-buyer-journey-padding);
            }
            .LoadingShellDisclosure {
            grid-area: disclosure;
            display: var(--x-skeleton-shell-disclosure-display);
            border-bottom: 1px solid var(--x-skeleton-default-color-border);
            }
            .LoadingShellDisclosureButton {
            display: flex;
            justify-content: center;
            width: 100%;
            }
            .LoadingShellDisclosureButton {
            text-align: start;
            background: var(--x-skeleton-default-color-backgroundSubdued);
            color: var(--x-skeleton-default-color-accent);
            position: relative;
            z-index: 2;
            }
            .LoadingShellConfig-Shell-hasBackgroundImage .LoadingShellDisclosureButton {
            background: transparent;
            color: inherit;
            }
            .LoadingShellDisclosureButtonContent {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: var(--x-skeleton-spacing-small-200);
            align-content: center;
            align-items: center;
            }
            .LoadingShellDisclosureButtonContent {
            padding: var(--x-skeleton-shell-disclosure-padding);
            width: 100%;
            max-width: var(--x-skeleton-shell-disclosure-inline-size);
            }
            .LoadingShellContent {
            grid-area: shell-content;
            display: var(--x-skeleton-shell-content-display);
            grid-template-areas: var(--x-skeleton-shell-content-template-areas);
            grid-template-columns: var(--x-skeleton-shell-content-template-columns);
            }
            .LoadingShellMain {
            grid-area: main;
            display: flex;
            justify-content: var(--x-skeleton-shell-main-justify-content);
            height: 100%;
            }
            .LoadingShellMain .LoadingShellMainContent {
            height: 100%;
            width: 100%;
            max-width: var(--x-skeleton-shell-main-inline-size);
            padding: var(--x-skeleton-shell-main-padding);
            border-inline-end: var(--x-skeleton-shell-main-border);
            display: grid;
            grid-template-rows: auto auto 1fr;
            grid-template-columns: 1fr;
            grid-template-areas:
            'header'
            'buyer-journey'
            'main-content-primary';
            }
            .LoadingShellMainContentPrimary {
            grid-area: main-content-primary;
            }
            .LoadingShellMainContent .LoadingShellHeader {
            margin-bottom: var(--x-skeleton-spacing-large-100);
            }
            .LoadingShellMainContent .LoadingShellBuyerJourney {
            margin-bottom: var(--x-skeleton-spacing-large-300);
            }
            .LoadingShell-variantOneStepCheckout .LoadingShellMainContent .LoadingShellHeader {
            margin-bottom: calc(var(--x-skeleton-spacing-large-300) * 2);
            }
            .LoadingShellOrderSummary {
            display: var(--x-skeleton-shell-order-summary-display);
            grid-area: order-summary;
            }
            .LoadingShellOrderSummary .LoadingShellOrderSummaryContent {
            position: sticky;
            padding: var(--x-skeleton-shell-order-summary-padding);
            width: 100%;
            max-width: var(--x-skeleton-shell-order-summary-inline-size);
            top: 0;
            right: auto;
            bottom: 0;
            left: auto;
            }
            .LoadingShellOrderSummaryContent .LoadingShellHeader {
            margin-bottom: var(--x-skeleton-spacing-large-200);
            }
            /* Header */
            .LoadingHeader {
            display: flex;
            width: 100%;
            }
            .LoadingHeader-alignmentStart {
            justify-content: flex-start;
            }
            .LoadingHeader-alignmentCenter {
            justify-content: center;
            }
            .LoadingHeader-alignmentEnd {
            justify-content: flex-end;
            }
            .LoadingShell-variantOneStepCheckout .LoadingHeader-alignmentCenter .LoadingHeaderHeading {
            display: flex;
            justify-content: center;
            }
            .LoadingShell-variantOneStepCheckout .LoadingHeader-alignmentEnd .LoadingHeaderHeading {
            display: flex;
            justify-content: flex-end;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/app.BiT_0bNB.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/OnePage.BL1uXB7_.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/DeliveryMethodSelectorSection.DNerkzQV.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/Rollup.o9Mx-fKL.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/SubscriptionPriceBreakdown.Bqs0s4oM.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/ShopPayLogo.D_HPU8Dh.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/PickupPointCarrierLogo.C0wRU6wV.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/VaultedPayment.BO3829nT.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/Section.sQehCocD.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/ShopPayLoginLoader.CjGSo8kt.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/PayButtonSection.DF7trkKf.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/RageClickCapture.DnkQ4tsk.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/DutyOptions.Bd1Z60K2.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/useAmazonContact.D-Ox6Dnf.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/StockProblemsLineItemList.CxdIQKjw.css') }}" crossorigin="">
        <link rel="stylesheet" href="{{ asset('assets/checkoutCss/ShopPayVerificationSwitch.DVQdwG9J.css') }}" crossorigin="">
        <div id="app">
            <div style="--swn0j0: rgb(16,128,67); --swn0j1: rgb(255,255,255); --swn0j2: rgb(10,100,51); --swn0j3: rgb(251,253,251); --swn0j4: rgb(243,248,244); --swn0j5: rgb(230,241,232); --swn0j8: rgb(90,109,95); --swn0j9: rgb(55,58,61); --swn0jb: rgb(34,36,38); --swn0ja: rgb(34,36,38); --swn0jc: rgb(255,255,255); --swn0jd: rgb(255,255,255); --swn0j1p: rgb(55,58,61); --swn0j1r: rgb(105,108,110); --swn0j1q: rgb(255,255,255); --swn0j23: rgb(66,69,73); --swn0j24: rgb(61,65,68); --swn0j25: rgba(255,255,255,0.065); --swn0j26: rgb(153,156,160); --swn0j27: rgb(0,0,0); --swn0j28: rgba(255,255,255,0.66); --swn0j29: rgba(255,255,255,0.2); --swn0j1z: rgba(16,128,67,0.15); --swn0j2a: rgb(241,160,176); --swn0j2b: rgb(183,183,183); --swn0j2c: rgb(162,190,159); --swn0j2d: rgb(254,163,0); --swn0j2o: rgba(16,128,67,0.05); --swn0j39: rgba(16,128,67,0.05); --swn0j1j: rgb(55,58,61); --swn0j1l: rgb(105,108,110); --swn0j53: rgb(255,255,255); --swn0j5g: rgb(66,69,73); --swn0j1k: rgb(61,65,68); --swn0j5i: rgba(255,255,255,0.065); --swn0j5j: rgb(153,156,160); --swn0j1m: rgb(0,0,0); --swn0j1n: rgba(255,255,255,0.66); --swn0j1o: rgba(255,255,255,0.2); --swn0j5c: rgba(16,128,67,0.15); --swn0j5n: rgb(241,160,176); --swn0j5o: rgb(183,183,183); --swn0j5p: rgb(162,190,159); --swn0j5q: rgb(254,163,0); --swn0j61: rgba(16,128,67,0.05); --swn0j6m: rgba(16,128,67,0.05); --swn0j8p: rgba(16,128,67,0.05); --swn0j9e: rgba(16,128,67,0.05); --swn0j9z: rgba(16,128,67,0.05); --swn0jc2: rgba(16,128,67,0.05); --swn0jcr: rgba(16,128,67,0.05); --swn0jdc: rgba(16,128,67,0.05);">
                <div class="g9gqqf1 g9gqqf0 _1fragemnu g9gqqfc g9gqqfa _1fragemsy g9gqqf6 g9gqqf2 _1fragemn6 _1fragemna">
                    <a href="#checkout-main" class="_9sntZ">Skip to content</a>
                    <h1 class="n8k95wf _1fragems1">Checkout</h1>
                    <div class="cm5pp U3Rye FeQiM oYrwu _1fragemna _1fragemn6 _1fragemsy">
                        <!----- checkout header ----->
                        @include('layouts.partials.checkoutHeader')

                        <!----- content ----->
                        @yield('content')

                        <script src="{{ asset('assets/js/jquery3-6-0.min.js') }}"></script>
                        <script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>

                        @yield('script')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
