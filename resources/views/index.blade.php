<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="uploaded_img/logo.png">

        
    <style data-href="https://www.gstatic.com/_/boq-play/_/ss/k=boq-play.PlayStoreUi.EMK8mr1GfXw.L.B1.O/am=5sBh-IPA7vxCCwAI/d=1/ed=1/rs=AB1caFVWaeD_fbEMmfRuIl1sBoIAhNnIpA/m=appdetailsview,_b,_tp,_r" nonce="">
        html {
    width: 100%;
    overflow-x: hidden;
    height: 100%
}

body {
    font-family: 'Open Sans', sans-serif;
    color: #333;
    height: 100%;
}

.content {
    padding: 65px 0 65px 0;
    position: relative;
}

.introduction {
    margin-bottom: 45px;
}

p {
    margin: 0 0 20px;
    font-size: 18px;
    line-height: 28px;
    font-weight: 300;
}

p.large {
    font-size: 20px;
    line-height: 30px;
    font-weight: 300;
    margin-bottom: 55px;
}

span.underline {
    text-decoration: underline;
}

a {
    cursor: pointer;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

b {
    font-weight: 700;
}

img {
    max-width: 100%;
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: inherit;
    font-weight: 400 !important;
    line-height: 1.1;
    color: inherit;
}

h1 {
    font-size: 48px;
}

h2 {
    text-align: center;
    margin-bottom: 35px;
    font-size: 36px;
}

h2.section-title {
    line-height: 42px;
    max-width: 800px;
    margin: 0 auto;
    margin-bottom: 35px;
}

h3 {
    margin-bottom: 25px;
    margin-top: 35px;
    font-weight: 300;
}

h4 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 18px;
}

h5 {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 18px;
}

.clear {
    clear: both;
}

.cta_btn {
    margin: 35px 0;
}

.cta_btn a {
    cursor: pointer;
    text-decoration: none;
    font-size: 24px;
    background: #ff4546;
    padding: 15px 35px;
    color: #fff;
    border-radius: 5px;
    font-weight: 400;
    display: inline-block;
}

.cta_btn a:hover,
.cta_btn a:focus,
.cta_btn a:active {
    background: #ff5f5f;
    text-decoration: none;
    color: #fff;
}

@media(max-width:998px) {
    .cta_btn a {
        cursor: pointer;
        text-decoration: none;
        font-size: 22px;
        background: #ff4546;
        padding: 15px 15px;
        color: #fff;
        border-radius: 5px;
        font-weight: 400;
        display: inline-block;
    }
}

tbody tr td {
    padding: 10px 0
}

.text-block-narrow {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 10px
}

.centered,
p.large.centered {
    text-align: center;
}

.text-block ul,
.text-block-narrow ul {
    list-style-type: none;
}

.text-block ul li,
.text-block-narrow ul li {
    margin: 0 0 18px;
    font-size: 18px;
    line-height: 26px;
    font-weight: 300;
    text-align: left;
}

.text-block ul li::before,
.text-block-narrow ul li::before {
    content: "\f00c";
    font-family: Fontawesome;
    font-weight: 400;
    font-size: 20px;
    margin-left: -35px;
    padding-right: 10px;
    opacity: .85;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-text-stroke: 2px #fff;
}

.section-grey .text-block ul li::before,
.section-grey .text-block-narrow ul li::before {
    -webkit-text-stroke: 2px #f7f7f7;
}

.section-purple .text-block ul li::before,
.section-purple .text-block-narrow ul li::before {
    -webkit-text-stroke: 2px #6747c7;
}

.section-grey {
    background: #f7f7f7;
}

@media (min-width: 768px) {
    .error {
        padding-bottom: 150px;
    }

    .footer.static {
        position: fixed !important;
        bottom: 0 !important;
    }
}

@media (max-width: 768px) {
    .footer.static .cta_btn {
        left: auto !important;
        top: auto !important;
        transform: inherit !important;
        margin: 0;
    }
}

.footer.static {
    background-color: #6747c7;
    overflow: hidden;
    padding: 0;
    text-align: left;
    z-index: 6;
    width: 100%;
    height: 150px;
    bottom: 0;
    position: relative;
}

.arrow__bg {
    background-color: #5435b0;
    min-height: 100%;
    position: absolute;
    left: 0;
    width: 57%;
}

.arrow__bg::after {
    border-bottom: 75px solid transparent;
    border-left: 50px solid #5435b0;
    border-top: 75px solid transparent;
    bottom: 0;
    content: " ";
    display: block;
    height: 150px;
    position: absolute;
    top: 0;
    width: 0;
    right: -49px;
}

@media (max-width: 768px) {
    .footer.static {
        height: auto;
    }

    .arrow__bg {
        display: none;
    }
}

.footer.static .content {
    text-align: left;
    color: #fff;
    padding: 15px 0 15px 0;
    position: relative;
}

.footer.static h2 {
    text-align: left;
    margin-bottom: 20px;
}

.footer.static .content ul {
    padding: 0;
}

.footer.static .content ul li {
    display: inline-block;
    font-size: 16px;
    list-style-type: none;
    color: #fff;
    font-weight: 300;
    padding: 5px 28px 5px 0;
    vertical-align: middle;
}

.footer.static .cta_btn {
    left: auto;
    top: 50%;
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
    margin: 0;
}
        html {
            height: 100%;
            overflow: hidden
        }

        body {
            height: 100%;
            overflow: hidden;
            -webkit-font-smoothing: antialiased;
            color: rgba(0, 0, 0, .87);
            font-family: poppins;
            margin: 0;
            text-size-adjust: 100%
        }

        textarea {
            font-family: poppins
        }

        a {
            text-decoration: none;
            color: #2962ff
        }

        img {
            border: none
        }

        * {
            -webkit-tap-highlight-color: transparent
        }

        #apps-debug-tracers {
            display: none
        }

        html {
            overflow: visible
        }

        body {
            overflow: visible;
            overflow-y: scroll
        }

        @keyframes mdc-ripple-fg-radius-in {
            0% {
                animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
            }
            to {
                transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
            }
        }

        @keyframes mdc-ripple-fg-opacity-in {
            0% {
                animation-timing-function: linear;
                opacity: 0
            }
            to {
                opacity: var(--mdc-ripple-fg-opacity, 0)
            }
        }

        @keyframes mdc-ripple-fg-opacity-out {
            0% {
                animation-timing-function: linear;
                opacity: var(--mdc-ripple-fg-opacity, 0)
            }
            to {
                opacity: 0
            }
        }

        .VfPpkd-ksKsZd-XxIAqe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity;
            position: relative;
            outline: none;
            overflow: hidden
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-ksKsZd-XxIAqe::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-ksKsZd-XxIAqe::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf::after {
            animation: mdc-ripple-fg-opacity-out 150ms;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            top: calc(50% - 100%);
            left: calc(50% - 100%);
            width: 200%;
            height: 200%
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded],
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd {
            overflow: visible
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded]::before,
        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded]::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::before,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd::after {
            top: calc(50% - 50%);
            left: calc(50% - 50%);
            width: 100%;
            height: 100%
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::before,
        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::before,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::after {
            top: var(--mdc-ripple-top, calc(50% - 50%));
            left: var(--mdc-ripple-left, calc(50% - 50%));
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe[data-mdc-ripple-is-unbounded].VfPpkd-ksKsZd-mWPk3d::after,
        .VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd.VfPpkd-ksKsZd-mWPk3d::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-ksKsZd-XxIAqe::before,
        .VfPpkd-ksKsZd-XxIAqe::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-ksKsZd-XxIAqe:hover::before,
        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, 0.04)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before,
        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d):focus::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, 0.12)
        }

        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d)::after {
            transition: opacity 150ms linear
        }

        .VfPpkd-ksKsZd-XxIAqe:not(.VfPpkd-ksKsZd-mWPk3d):active::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-ksKsZd-XxIAqe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-NLUYnc-V67aGc {
            position: absolute;
            left: 0;
            transform-origin: left top;
            line-height: 1.15rem;
            text-align: left;
            text-overflow: ellipsis;
            white-space: nowrap;
            cursor: text;
            overflow: hidden;
            will-change: transform
        }

        [dir=rtl] .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-NLUYnc-V67aGc[dir=rtl] {
            right: 0;
            left: auto;
            transform-origin: right top;
            text-align: right
        }

        .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            cursor: auto
        }

        .VfPpkd-NLUYnc-V67aGc-OWXEXe-ztc6md:not(.VfPpkd-NLUYnc-V67aGc-OWXEXe-ZYIfFd-ztc6md-vXpfLb)::after {
            margin-left: 1px;
            margin-right: 0;
            content: "*"
        }

        [dir=rtl] .VfPpkd-NLUYnc-V67aGc-OWXEXe-ztc6md:not(.VfPpkd-NLUYnc-V67aGc-OWXEXe-ZYIfFd-ztc6md-vXpfLb)::after,
        .VfPpkd-NLUYnc-V67aGc-OWXEXe-ztc6md:not(.VfPpkd-NLUYnc-V67aGc-OWXEXe-ZYIfFd-ztc6md-vXpfLb)[dir=rtl]::after {
            margin-left: 0;
            margin-right: 1px
        }

        .VfPpkd-NLUYnc-V67aGc {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            transition: transform .15s cubic-bezier(.4, 0, .2, 1), color .15s cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-106%) scale(.75)
        }

        .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-standard .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-standard {
            0% {
                transform: translateX(0) translateY(-106%) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(4%) translateY(-106%) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(-4%) translateY(-106%) scale(.75)
            }
            100% {
                transform: translateX(0) translateY(-106%) scale(.75)
            }
        }

        .VfPpkd-RWgCYc-ksKsZd::before,
        .VfPpkd-RWgCYc-ksKsZd::after {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            border-bottom-style: solid;
            content: ""
        }

        .VfPpkd-RWgCYc-ksKsZd::before {
            z-index: 1
        }

        .VfPpkd-RWgCYc-ksKsZd::after {
            transform: scaleX(0);
            opacity: 0;
            z-index: 2
        }

        .VfPpkd-RWgCYc-ksKsZd-OWXEXe-auswjd::after {
            transform: scaleX(1);
            opacity: 1
        }

        .VfPpkd-RWgCYc-ksKsZd-OWXEXe-JD038d::after {
            opacity: 0
        }

        .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-width: 1px
        }

        .VfPpkd-RWgCYc-ksKsZd::after {
            border-bottom-width: 2px
        }

        .VfPpkd-RWgCYc-ksKsZd::after {
            transition: transform .18s cubic-bezier(.4, 0, .2, 1), opacity .18s cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-NSFCdd-i5vt6e {
            display: flex;
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            max-width: 100%;
            height: 100%;
            text-align: left;
            pointer-events: none
        }

        [dir=rtl] .VfPpkd-NSFCdd-i5vt6e,
        .VfPpkd-NSFCdd-i5vt6e[dir=rtl] {
            text-align: right
        }

        .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-NSFCdd-MpmGFe {
            box-sizing: border-box;
            height: 100%;
            pointer-events: none
        }

        .VfPpkd-NSFCdd-MpmGFe {
            flex-grow: 1
        }

        .VfPpkd-NSFCdd-Ra9xwd {
            flex: 0 0 auto;
            width: auto
        }

        .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NLUYnc-V67aGc {
            display: inline-block;
            position: relative;
            max-width: 100%
        }

        .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            text-overflow: clip
        }

        .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            max-width: 133.3333333333%
        }

        .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd {
            padding-left: 0;
            padding-right: 8px;
            border-top: none
        }

        [dir=rtl] .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd[dir=rtl] {
            padding-left: 8px;
            padding-right: 0
        }

        .VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc .VfPpkd-NSFCdd-Ra9xwd {
            display: none
        }

        .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-NSFCdd-MpmGFe {
            border-top: 1px solid;
            border-bottom: 1px solid
        }

        .VfPpkd-NSFCdd-Brv4Fb {
            border-left: 1px solid;
            border-right: none;
            width: 12px
        }

        [dir=rtl] .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-NSFCdd-Brv4Fb[dir=rtl] {
            border-left: none;
            border-right: 1px solid
        }

        .VfPpkd-NSFCdd-MpmGFe {
            border-left: none;
            border-right: 1px solid
        }

        [dir=rtl] .VfPpkd-NSFCdd-MpmGFe,
        .VfPpkd-NSFCdd-MpmGFe[dir=rtl] {
            border-left: 1px solid;
            border-right: none
        }

        .VfPpkd-NSFCdd-Ra9xwd {
            max-width: calc(100% - 24px)
        }

        .Tj45d {
            position: relative
        }

        .ncIyJc {
            position: absolute;
            overflow: hidden;
            left: -1px;
            top: auto;
            width: 1px;
            height: 1px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d .VfPpkd-fmcmS-OyKIhb::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d .VfPpkd-fmcmS-OyKIhb::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-fmcmS-OyKIhb::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-fmcmS-OyKIhb::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-fmcmS-OyKIhb::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d .VfPpkd-fmcmS-OyKIhb::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-fmcmS-OyKIhb {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .VfPpkd-fmcmS-yrriRe {
            border-top-left-radius: 4px;
            border-top-left-radius: var(--mdc-shape-small, 4px);
            border-top-right-radius: 4px;
            border-top-right-radius: var(--mdc-shape-small, 4px);
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            display: inline-flex;
            align-items: baseline;
            padding: 0 16px;
            position: relative;
            box-sizing: border-box;
            overflow: hidden;
            will-change: opacity, transform, color
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NLUYnc-V67aGc {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-wGMbrd {
            color: rgba(0, 0, 0, .87)
        }

        @media all {
            .mdc-text-field:not(.mdc-text-field--disabled) .mdc-text-field__input::-webkit-input-placeholder {
                color: rgba(0, 0, 0, .54)
            }
            .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-wGMbrd::placeholder {
                color: rgba(0, 0, 0, .54)
            }
        }

        @media all {
            .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder {
                color: rgba(0, 0, 0, .54)
            }
        }

        .VfPpkd-fmcmS-yrriRe .VfPpkd-fmcmS-wGMbrd {
            caret-color: #6200ee;
            caret-color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me)+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me)+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc {
            color: rgba(0, 0, 0, .54)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
            color: rgba(0, 0, 0, .54)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-fmcmS-yrriRe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-fmcmS-yrriRe .VfPpkd-NLUYnc-V67aGc {
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none
        }

        .VfPpkd-fmcmS-wGMbrd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            height: 28px;
            transition: opacity .15s 0ms cubic-bezier(.4, 0, .2, 1);
            width: 100%;
            min-width: 0;
            border: none;
            border-radius: 0;
            background: none;
            -webkit-appearance: none;
            appearance: none;
            padding: 0
        }

        .VfPpkd-fmcmS-wGMbrd::-ms-clear {
            display: none
        }

        .VfPpkd-fmcmS-wGMbrd::-webkit-calendar-picker-indicator {
            display: none
        }

        .VfPpkd-fmcmS-wGMbrd:focus {
            outline: none
        }

        .VfPpkd-fmcmS-wGMbrd:invalid {
            box-shadow: none
        }

        @media all {
            .mdc-text-field__input::-webkit-input-placeholder {
                -webkit-transition: opacity 67ms 0ms cubic-bezier(.4, 0, .2, 1);
                transition: opacity 67ms 0ms cubic-bezier(.4, 0, .2, 1);
                opacity: 0
            }
            .VfPpkd-fmcmS-wGMbrd::placeholder {
                transition: opacity 67ms 0ms cubic-bezier(.4, 0, .2, 1);
                opacity: 0
            }
        }

        @media all {
            .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder {
                -ms-transition: opacity 67ms 0ms cubic-bezier(.4, 0, .2, 1);
                transition: opacity 67ms 0ms cubic-bezier(.4, 0, .2, 1);
                opacity: 0
            }
        }

        @media all {
            .mdc-text-field--no-label .mdc-text-field__input::-webkit-input-placeholder,
            .mdc-text-field--focused .mdc-text-field__input::-webkit-input-placeholder {
                transition-delay: 40ms;
                transition-duration: .11s;
                opacity: 1
            }
            .VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-wGMbrd::placeholder,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-fmcmS-wGMbrd::placeholder {
                transition-delay: 40ms;
                transition-duration: .11s;
                opacity: 1
            }
        }

        @media all {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder {
                transition-delay: 40ms;
                transition-duration: .11s;
                opacity: 1
            }
        }

        .VfPpkd-fmcmS-MvKemf {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            height: 28px;
            transition: opacity .15s 0ms cubic-bezier(.4, 0, .2, 1);
            opacity: 0;
            white-space: nowrap
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-V67aGc-NLUYnc .VfPpkd-fmcmS-MvKemf,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-MvKemf {
            opacity: 1
        }

        @supports (-webkit-hyphens:none) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-MvKemf {
                align-items: center;
                align-self: center;
                display: inline-flex;
                height: 100%
            }
        }

        .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            padding-left: 0;
            padding-right: 2px
        }

        [dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c[dir=rtl] {
            padding-left: 2px;
            padding-right: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            padding-left: 0;
            padding-right: 12px
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c[dir=rtl] {
            padding-left: 12px;
            padding-right: 0
        }

        .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            padding-left: 12px;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB,
        .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB[dir=rtl] {
            padding-left: 0;
            padding-right: 12px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            padding-left: 2px;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB[dir=rtl] {
            padding-left: 0;
            padding-right: 2px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be {
            height: 56px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb::after {
            background-color: rgba(0, 0, 0, .87);
            background-color: var(--mdc-ripple-color, rgba(0, 0, 0, .87))
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be:hover .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-fmcmS-OyKIhb::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-fmcmS-OyKIhb::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be::before {
            display: inline-block;
            width: 0;
            height: 40px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) {
            background-color: whitesmoke
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-color: rgba(0, 0, 0, .42)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):hover .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-RWgCYc-ksKsZd::after {
            border-bottom-color: #6200ee;
            border-bottom-color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc {
            left: 16px;
            right: auto
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc[dir=rtl] {
            left: auto;
            right: 16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-106%) scale(.75)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-wGMbrd {
            height: 100%
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-NLUYnc-V67aGc {
            display: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc::before {
            display: none
        }

        @supports (-webkit-hyphens:none) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-MvKemf {
                align-items: center;
                align-self: center;
                display: inline-flex;
                height: 100%
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc {
            height: 56px;
            overflow: visible
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-37.25px) scale(1)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: .75rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-34.75px) scale(.75)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: 1rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-text-field-outlined .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-text-field-outlined {
            0% {
                transform: translateX(0) translateY(-34.75px) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(4%) translateY(-34.75px) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(-4%) translateY(-34.75px) scale(.75)
            }
            100% {
                transform: translateX(0) translateY(-34.75px) scale(.75)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-wGMbrd {
            height: 100%
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-MpmGFe {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
            border-color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-MpmGFe {
            border-color: #6200ee;
            border-color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb {
            border-top-left-radius: 4px;
            border-top-left-radius: var(--mdc-shape-small, 4px);
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-left-radius: var(--mdc-shape-small, 4px)
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb[dir=rtl] {
            border-top-left-radius: 0;
            border-top-right-radius: 4px;
            border-top-right-radius: var(--mdc-shape-small, 4px);
            border-bottom-right-radius: 4px;
            border-bottom-right-radius: var(--mdc-shape-small, 4px);
            border-bottom-left-radius: 0
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb {
                width: max(12px, var(--mdc-shape-small, 4px))
            }
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd {
                max-width: calc(100% - max(12px, var(--mdc-shape-small, 4px))*2)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
            border-top-left-radius: 0;
            border-top-right-radius: 4px;
            border-top-right-radius: var(--mdc-shape-small, 4px);
            border-bottom-right-radius: 4px;
            border-bottom-right-radius: var(--mdc-shape-small, 4px);
            border-bottom-left-radius: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe[dir=rtl] {
            border-top-left-radius: 4px;
            border-top-left-radius: var(--mdc-shape-small, 4px);
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-bottom-left-radius: var(--mdc-shape-small, 4px)
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc {
                padding-left: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
            }
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc {
                padding-right: max(16px, var(--mdc-shape-small, 4px))
            }
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc {
                padding-left: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
            }
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc {
                padding-right: max(16px, var(--mdc-shape-small, 4px))
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c {
            padding-left: 0
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c {
                padding-right: max(16px, var(--mdc-shape-small, 4px))
            }
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c[dir=rtl] {
            padding-right: 0
        }

        @supports (top:max(0%)) {
            [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c[dir=rtl] {
                padding-left: max(16px, var(--mdc-shape-small, 4px))
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c {
            padding-right: 0
        }

        @supports (top:max(0%)) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c {
                padding-left: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
            }
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c[dir=rtl] {
            padding-left: 0
        }

        @supports (top:max(0%)) {
            [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c[dir=rtl] {
                padding-right: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c {
            padding-left: 0;
            padding-right: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd {
            padding-top: 1px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-OyKIhb::before,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-OyKIhb::after {
            background-color: transparent;
            background-color: var(--mdc-ripple-color, transparent)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc {
            left: 4px;
            right: auto
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc[dir=rtl] {
            left: auto;
            right: 4px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-wGMbrd {
            display: flex;
            border: none !important;
            background-color: transparent
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e {
            z-index: 1
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od {
            flex-direction: column;
            align-items: center;
            width: auto;
            height: auto;
            padding: 0;
            transition: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od .VfPpkd-NLUYnc-V67aGc {
            top: 19px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od .VfPpkd-NLUYnc-V67aGc:not(.VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe) {
            transform: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od .VfPpkd-fmcmS-wGMbrd {
            flex-grow: 1;
            height: auto;
            min-height: 1.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            box-sizing: border-box;
            resize: none;
            padding: 0 16px;
            line-height: 1.5rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be::before {
            display: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-10.25px) scale(.75)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-textarea-filled .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-textarea-filled {
            0% {
                transform: translateX(0) translateY(-10.25px) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(4%) translateY(-10.25px) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(-4%) translateY(-10.25px) scale(.75)
            }
            100% {
                transform: translateX(0) translateY(-10.25px) scale(.75)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-wGMbrd {
            margin-top: 23px;
            margin-bottom: 9px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be.VfPpkd-fmcmS-yrriRe-OWXEXe-di8rgd-V67aGc .VfPpkd-fmcmS-wGMbrd {
            margin-top: 16px;
            margin-bottom: 16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd {
            padding-top: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-27.25px) scale(1)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: .75rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-24.75px) scale(.75)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: 1rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-textarea-outlined .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-textarea-outlined {
            0% {
                transform: translateX(0) translateY(-24.75px) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(4%) translateY(-24.75px) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(-4%) translateY(-24.75px) scale(.75)
            }
            100% {
                transform: translateX(0) translateY(-24.75px) scale(.75)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-wGMbrd {
            margin-top: 16px;
            margin-bottom: 16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc {
            top: 18px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-k4Qmrd-gmhCAd .VfPpkd-fmcmS-wGMbrd {
            margin-bottom: 2px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-k4Qmrd-gmhCAd .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            align-self: flex-end;
            padding: 0 16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-k4Qmrd-gmhCAd .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd::after {
            display: inline-block;
            width: 0;
            height: 16px;
            content: "";
            vertical-align: -16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-k4Qmrd-gmhCAd .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd::before {
            display: none
        }

        .VfPpkd-fmcmS-kHQaff {
            align-self: stretch;
            display: inline-flex;
            flex-direction: column;
            flex-grow: 1;
            max-height: 100%;
            max-width: 100%;
            min-height: 56px;
            min-width: fit-content;
            min-width: -webkit-fill-available;
            overflow: hidden;
            resize: both
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-kHQaff {
            transform: translateY(-1px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            transform: translateY(1px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff {
            transform: translateX(-1px) translateY(-1px)
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff[dir=rtl] {
            transform: translateX(1px) translateY(-1px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            transform: translateX(1px) translateY(1px)
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-wGMbrd,
        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-wGMbrd[dir=rtl],
        .VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-fmcmS-kHQaff .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd[dir=rtl] {
            transform: translateX(-1px) translateY(1px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c {
            padding-left: 0;
            padding-right: 16px
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c[dir=rtl] {
            padding-left: 16px;
            padding-right: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc {
            max-width: calc(100% - 48px);
            left: 48px;
            right: auto
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc[dir=rtl] {
            left: auto;
            right: 48px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            max-width: calc(133.3333333333% - 85.3333333333px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc {
            left: 36px;
            right: auto
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc[dir=rtl] {
            left: auto;
            right: 36px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc :not(.VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd) .VfPpkd-NSFCdd-Ra9xwd {
            max-width: calc(100% - 60px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-37.25px) translateX(-32px) scale(1)
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe[dir=rtl] {
            transform: translateY(-37.25px) translateX(32px) scale(1)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: .75rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            transform: translateY(-34.75px) translateX(-32px) scale(.75)
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe[dir=rtl],
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe[dir=rtl] {
            transform: translateY(-34.75px) translateX(32px) scale(.75)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-mWPk3d .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            font-size: 1rem
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon {
            0% {
                transform: translateX(-32px) translateY(-34.75px) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(calc(4% - 32px)) translateY(-34.75px) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(calc(-4% - 32px)) translateY(-34.75px) scale(.75)
            }
            100% {
                transform: translateX(-32px) translateY(-34.75px) scale(.75)
            }
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc[dir=rtl] .VfPpkd-NLUYnc-V67aGc-OWXEXe-bF1zU {
            animation: mdc-floating-label-shake-float-above-text-field-outlined-leading-icon .25s 1
        }

        @keyframes mdc-floating-label-shake-float-above-text-field-outlined-leading-icon-rtl {
            0% {
                transform: translateX(32px) translateY(-34.75px) scale(.75)
            }
            33% {
                animation-timing-function: cubic-bezier(.5, 0, .701732, .495819);
                transform: translateX(calc(4% + 32px)) translateY(-34.75px) scale(.75)
            }
            66% {
                animation-timing-function: cubic-bezier(.302435, .381352, .55, .956352);
                transform: translateX(calc(-4% + 32px)) translateY(-34.75px) scale(.75)
            }
            100% {
                transform: translateX(32px) translateY(-34.75px) scale(.75)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c {
            padding-left: 16px;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c[dir=rtl] {
            padding-left: 0;
            padding-right: 16px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc {
            max-width: calc(100% - 64px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            max-width: calc(133.3333333333% - 85.3333333333px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc :not(.VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd) .VfPpkd-NSFCdd-Ra9xwd {
            max-width: calc(100% - 60px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c {
            padding-left: 0;
            padding-right: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc {
            max-width: calc(100% - 96px)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-SfQLQb-UbuQg-Bz112c.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-NLUYnc-V67aGc-OWXEXe-TATcMc-KLRBe {
            max-width: calc(133.3333333333% - 128px)
        }

        .VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc {
            display: flex;
            justify-content: space-between;
            box-sizing: border-box
        }

        .VfPpkd-fmcmS-yrriRe+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc {
            padding-right: 16px;
            padding-left: 16px
        }

        .VfPpkd-I9GLp-yrriRe>.VfPpkd-fmcmS-yrriRe+label {
            align-self: flex-start
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NLUYnc-V67aGc {
            color: rgba(98, 0, 238, .87)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-MpmGFe {
            border-width: 2px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS:not(.VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS-OWXEXe-Rfh2Tc-EglORb) {
            opacity: 1
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd {
            padding-top: 2px
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe.VfPpkd-fmcmS-yrriRe-OWXEXe-INsAgc.VfPpkd-fmcmS-yrriRe-OWXEXe-B7I4Od .VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd .VfPpkd-NSFCdd-Ra9xwd {
            padding-top: 0
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):hover .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-color: #b00020;
            border-bottom-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-RWgCYc-ksKsZd::after {
            border-bottom-color: #b00020;
            border-bottom-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NLUYnc-V67aGc {
            color: #b00020;
            color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS-OWXEXe-Rfh2Tc-EglORb {
            color: #b00020;
            color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc .VfPpkd-fmcmS-wGMbrd {
            caret-color: #b00020;
            caret-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
            color: #b00020;
            color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-color: #b00020;
            border-bottom-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-MpmGFe {
            border-color: #b00020;
            border-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me):not(.VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe):hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
            border-color: #b00020;
            border-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc:not(.VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me).VfPpkd-fmcmS-yrriRe-OWXEXe-XpnDCe .VfPpkd-NSFCdd-MpmGFe {
            border-color: #b00020;
            border-color: var(--mdc-theme-error, #b00020)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-UJflGc+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS-OWXEXe-Rfh2Tc-EglORb {
            opacity: 1
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me {
            pointer-events: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd {
            color: rgba(0, 0, 0, .38)
        }

        @media all {
            .mdc-text-field--disabled .mdc-text-field__input::-webkit-input-placeholder {
                color: rgba(0, 0, 0, .38)
            }
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd::placeholder {
                color: rgba(0, 0, 0, .38)
            }
        }

        @media all {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder {
                color: rgba(0, 0, 0, .38)
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NLUYnc-V67aGc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
            color: rgba(0, 0, 0, .3)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-RWgCYc-ksKsZd::before {
            border-bottom-color: rgba(0, 0, 0, .06)
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-Brv4Fb,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-Ra9xwd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-MpmGFe {
            border-color: rgba(0, 0, 0, .06)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .mdc-text-field--disabled .mdc-text-field__input::-webkit-input-placeholder {
                color: GrayText
            }
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd::placeholder {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd:-ms-input-placeholder {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NLUYnc-V67aGc {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me+.VfPpkd-fmcmS-yrriRe-W0vJo-RWgCYc .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
                color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-RWgCYc-ksKsZd::before {
                border-bottom-color: GrayText
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-Brv4Fb,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-Ra9xwd,
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NSFCdd-MpmGFe {
                border-color: GrayText
            }
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd {
                background-color: Window
            }
            .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NLUYnc-V67aGc {
                z-index: 1
            }
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-NLUYnc-V67aGc {
            cursor: default
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be {
            background-color: #fafafa
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me.VfPpkd-fmcmS-yrriRe-OWXEXe-MFS4be .VfPpkd-fmcmS-OyKIhb {
            display: none
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-OWB6Me .VfPpkd-fmcmS-wGMbrd {
            pointer-events: auto
        }

        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-wGMbrd {
            text-align: right
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-wGMbrd[dir=rtl] {
            text-align: left
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-wGMbrd,
        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-MvKemf,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-MvKemf {
            direction: ltr
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            padding-left: 0;
            padding-right: 2px
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            padding-left: 12px;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc {
            order: 1
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            order: 2
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-wGMbrd {
            order: 3
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            order: 4
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS[dir=rtl] .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
            order: 5
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-wGMbrd,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd[dir=rtl] .VfPpkd-fmcmS-wGMbrd {
            text-align: right
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-qdIk2c {
            padding-right: 12px
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB,
        .VfPpkd-fmcmS-yrriRe-OWXEXe-i3jM8c-fmcmS.VfPpkd-fmcmS-yrriRe-OWXEXe-CpWD9d-KW5YQd[dir=rtl] .VfPpkd-fmcmS-MvKemf-OWXEXe-iJ4yB {
            padding-left: 2px
        }

        .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-caption-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit);
            display: block;
            margin-top: 0;
            line-height: normal;
            margin: 0;
            opacity: 0;
            will-change: opacity;
            transition: opacity .15s 0ms cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 16px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-fmcmS-yrriRe-W0vJo-fmcmS-OWXEXe-zvnfze {
            transition: none;
            opacity: 1;
            will-change: auto
        }

        .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-caption-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit);
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-left: auto;
            margin-right: 0;
            padding-left: 16px;
            padding-right: 0;
            white-space: nowrap
        }

        .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd::before {
            display: inline-block;
            width: 0;
            height: 16px;
            content: "";
            vertical-align: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
        .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd[dir=rtl] {
            margin-left: 0;
            margin-right: auto
        }

        [dir=rtl] .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd,
        .VfPpkd-fmcmS-yrriRe-JZnCve-gmhCAd[dir=rtl] {
            padding-left: 0;
            padding-right: 16px
        }

        .VfPpkd-fmcmS-TvZj5c {
            align-self: center;
            cursor: pointer
        }

        .VfPpkd-fmcmS-TvZj5c:not([tabindex]),
        .VfPpkd-fmcmS-TvZj5c[tabindex="-1"] {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-fmcmS-TvZj5c svg {
            display: block
        }

        .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc {
            margin-left: 16px;
            margin-right: 8px
        }

        [dir=rtl] .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc,
        .VfPpkd-fmcmS-TvZj5c-OWXEXe-M1Soyc[dir=rtl] {
            margin-left: 8px;
            margin-right: 16px
        }

        .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg {
            padding: 12px;
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg,
        .VfPpkd-fmcmS-TvZj5c-OWXEXe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .Ufn6O {
            display: inline-flex;
            flex-direction: column;
            position: relative
        }

        .Ufn6O[hidden] {
            display: none
        }

        .VfPpkd-dgl2Hf-ppHlrf-sM5MNb {
            display: inline
        }

        .VfPpkd-Bz112c-LgbsSe {
            font-size: 24px;
            width: 48px;
            height: 48px;
            padding: 12px
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            max-height: 48px;
            max-width: 48px
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-Jh9lGc {
            width: 40px;
            height: 40px;
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 4px;
            margin-left: 4px
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-Bz112c-LgbsSe-OWXEXe-e5LLRc-SxQuSe .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            max-height: 40px;
            max-width: 40px
        }

        .VfPpkd-Bz112c-LgbsSe:disabled {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-disabled-on-light, rgba(0, 0, 0, .38))
        }

        .VfPpkd-Bz112c-LgbsSe svg,
        .VfPpkd-Bz112c-LgbsSe img {
            width: 24px;
            height: 24px
        }

        .VfPpkd-Bz112c-LgbsSe {
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            border: none;
            outline: none;
            background-color: transparent;
            fill: currentColor;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
            user-select: none;
            z-index: 0;
            overflow: visible
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-RLmnJb {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 50%;
            width: 48px;
            transform: translate(-50%, -50%)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-J1Ukfc-LhBDec,
            .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                display: block
            }
        }

        .VfPpkd-Bz112c-LgbsSe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-Bz112c-LgbsSe[hidden] {
            display: none
        }

        .VfPpkd-Bz112c-LgbsSe-OWXEXe-KVuj8d-Q3DXx {
            align-items: center;
            display: inline-flex;
            justify-content: center
        }

        .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%;
            display: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-Bz112c-kBDsod {
            display: inline-block
        }

        .VfPpkd-Bz112c-kBDsod.VfPpkd-Bz112c-kBDsod-OWXEXe-IT5dJd,
        .VfPpkd-Bz112c-LgbsSe-OWXEXe-IT5dJd .VfPpkd-Bz112c-kBDsod {
            display: none
        }

        .VfPpkd-Bz112c-LgbsSe-OWXEXe-IT5dJd .VfPpkd-Bz112c-kBDsod.VfPpkd-Bz112c-kBDsod-OWXEXe-IT5dJd {
            display: inline-block
        }

        .VfPpkd-Bz112c-mRLv6 {
            height: 100%;
            left: 0;
            outline: none;
            position: absolute;
            top: 0;
            width: 100%
        }

        .VfPpkd-Bz112c-LgbsSe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-Bz112c-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-Bz112c-Jh9lGc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-Bz112c-Jh9lGc::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Bz112c-Jh9lGc::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-Bz112c-LgbsSe:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Bz112c-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-Bz112c-LgbsSe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Bz112c-LgbsSe:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .VfPpkd-Bz112c-LgbsSe .VfPpkd-Bz112c-Jh9lGc {
            height: 100%;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1
        }

        .VfPpkd-LgbsSe {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            min-width: 64px;
            border: none;
            outline: none;
            line-height: inherit;
            user-select: none;
            -webkit-appearance: none;
            overflow: visible;
            vertical-align: middle;
            background: transparent
        }

        .VfPpkd-LgbsSe .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-LgbsSe::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .VfPpkd-LgbsSe:active {
            outline: none
        }

        .VfPpkd-LgbsSe:hover {
            cursor: pointer
        }

        .VfPpkd-LgbsSe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-LgbsSe[hidden] {
            display: none
        }

        .VfPpkd-LgbsSe .VfPpkd-kBDsod {
            margin-left: 0;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            vertical-align: top
        }

        [dir=rtl] .VfPpkd-LgbsSe .VfPpkd-kBDsod,
        .VfPpkd-LgbsSe .VfPpkd-kBDsod[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        .VfPpkd-LgbsSe .VfPpkd-UdE5de-uDEFge {
            font-size: 0;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            line-height: normal
        }

        .VfPpkd-LgbsSe .VfPpkd-vQzf8d {
            position: relative
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px);
            display: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-LgbsSe .VfPpkd-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-J1Ukfc-LhBDec,
            .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-J1Ukfc-LhBDec {
                display: block
            }
        }

        .VfPpkd-LgbsSe .VfPpkd-RLmnJb {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 0;
            right: 0;
            transform: translateY(-50%)
        }

        .VfPpkd-vQzf8d+.VfPpkd-kBDsod {
            margin-left: 8px;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-vQzf8d+.VfPpkd-kBDsod,
        .VfPpkd-vQzf8d+.VfPpkd-kBDsod[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        svg.VfPpkd-kBDsod {
            fill: currentColor
        }

        .VfPpkd-LgbsSe-OWXEXe-dgl2Hf {
            margin-top: 6px;
            margin-bottom: 6px
        }

        .VfPpkd-LgbsSe {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-decoration: none
        }

        .VfPpkd-LgbsSe {
            padding: 0 8px 0 8px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ {
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            padding: 0 16px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 12px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 16px 0 12px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb {
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            padding: 0 16px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 12px 0 16px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 16px 0 12px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc {
            border-style: solid;
            transition: border .28s cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            border-style: solid;
            border-color: transparent
        }

        .VfPpkd-LgbsSe {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            z-index: 0
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-Jh9lGc::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-Jh9lGc::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-Jh9lGc::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d .VfPpkd-Jh9lGc::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-Jh9lGc {
            position: absolute;
            box-sizing: content-box;
            overflow: hidden;
            z-index: 0;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0
        }

        .VfPpkd-LgbsSe {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px
        }

        .VfPpkd-LgbsSe:not(:disabled) {
            color: #6200ee
        }

        .VfPpkd-LgbsSe:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-text-button-pressed-state-layer-opacity, 0.12)
        }

        .VfPpkd-LgbsSe .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
            color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::after {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .08
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-filled-button-pressed-state-layer-opacity, 0.24)
        }

        .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px;
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled) {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled) {
            color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc::after {
            background-color: #fff
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .08
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .24
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-protected-button-pressed-state-layer-opacity, 0.24)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(.VfPpkd-ksKsZd-mWPk3d):focus {
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:hover {
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:not(:disabled):active {
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-MV7yeb:disabled {
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc {
            font-family: Roboto, sans-serif;
            font-size: .875rem;
            letter-spacing: .0892857143em;
            font-weight: 500;
            text-transform: uppercase;
            height: 36px;
            border-radius: 4px;
            padding: 0 15px 0 15px;
            border-width: 1px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(:disabled) {
            color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:disabled {
            color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-kBDsod {
            font-size: 1.125rem;
            width: 1.125rem;
            height: 1.125rem
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc::after {
            background-color: #6200ee
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:hover .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-outlined-button-pressed-state-layer-opacity, 0.12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            border-radius: 4px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:not(:disabled) {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc:disabled {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 11px 0 15px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 15px 0 11px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-Jh9lGc {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: 1px
        }

        .VfPpkd-LgbsSe-OWXEXe-INsAgc .VfPpkd-RLmnJb {
            left: -1px;
            width: calc(100% + 2px)
        }

        .nCP5yc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .nCP5yc .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .nCP5yc:not(:disabled) {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-fillbutton-container-color, rgb(26, 115, 232))
        }

        .nCP5yc:not(:disabled) {
            color: #fff;
            color: var(--gm-fillbutton-ink-color, #fff)
        }

        .nCP5yc:disabled {
            background-color: rgba(60, 64, 67, .12);
            background-color: var(--gm-fillbutton-disabled-container-color, rgba(60, 64, 67, .12))
        }

        .nCP5yc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-fillbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .nCP5yc .VfPpkd-Jh9lGc::before,
        .nCP5yc .VfPpkd-Jh9lGc::after {
            background-color: rgb(32, 33, 36);
            background-color: var(--gm-fillbutton-state-color, rgb(32, 33, 36))
        }

        .nCP5yc:hover .VfPpkd-Jh9lGc::before,
        .nCP5yc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .16;
            opacity: var(--mdc-ripple-hover-opacity, .16)
        }

        .nCP5yc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .2;
            opacity: var(--mdc-ripple-press-opacity, .2)
        }

        .nCP5yc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.2)
        }

        .nCP5yc .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #fff
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .nCP5yc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .nCP5yc:hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .nCP5yc:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc:active {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .nCP5yc:active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .nCP5yc:disabled {
            box-shadow: none
        }

        .nCP5yc:disabled:hover .VfPpkd-Jh9lGc::before,
        .nCP5yc:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .nCP5yc:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .nCP5yc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .nCP5yc:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .nCP5yc:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Rj2Mlf {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .Rj2Mlf .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .Rj2Mlf:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-hairlinebutton-ink-color, rgb(26, 115, 232))
        }

        .Rj2Mlf:not(:disabled) {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:not(:disabled):hover {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .Rj2Mlf:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-hairlinebutton-outline-color--stateful, rgb(23, 78, 166))
        }

        .Rj2Mlf:not(:disabled):active,
        .Rj2Mlf:not(:disabled):focus:active {
            border-color: rgb(218, 220, 224);
            border-color: var(--gm-hairlinebutton-outline-color, rgb(218, 220, 224))
        }

        .Rj2Mlf:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-hairlinebutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .Rj2Mlf:disabled {
            border-color: rgba(60, 64, 67, .12);
            border-color: var(--gm-hairlinebutton-disabled-outline-color, rgba(60, 64, 67, .12))
        }

        .Rj2Mlf:hover:not(:disabled),
        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .Rj2Mlf:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-hairlinebutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .Rj2Mlf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .Rj2Mlf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .Rj2Mlf .VfPpkd-Jh9lGc::before,
        .Rj2Mlf .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-hairlinebutton-state-color, rgb(26, 115, 232))
        }

        .Rj2Mlf:hover .VfPpkd-Jh9lGc::before,
        .Rj2Mlf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Rj2Mlf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .Rj2Mlf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .Rj2Mlf:disabled:hover .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .Rj2Mlf:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Rj2Mlf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Rj2Mlf:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .b9hyVd {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .b9hyVd:not(:disabled) {
            background-color: #fff;
            background-color: var(--gm-protectedbutton-container-color, #fff)
        }

        .b9hyVd:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-protectedbutton-ink-color, rgb(26, 115, 232))
        }

        .b9hyVd:disabled {
            background-color: rgba(60, 64, 67, .12);
            background-color: var(--gm-protectedbutton-disabled-container-color, rgba(60, 64, 67, .12))
        }

        .b9hyVd:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-protectedbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .b9hyVd:hover:not(:disabled),
        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .b9hyVd:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-protectedbutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .b9hyVd .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .b9hyVd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-BFbNVe-bF1uUb,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:hover {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:not(:disabled):active {
            border-width: 0;
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 3px 0 var(--gm-protectedbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 4px 8px 3px var(--gm-protectedbutton-ambientshadow-color, rgba(60, 64, 67, .15))
        }

        .b9hyVd:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd .VfPpkd-Jh9lGc::before,
        .b9hyVd .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-protectedbutton-state-color, rgb(26, 115, 232))
        }

        .b9hyVd:hover .VfPpkd-Jh9lGc::before,
        .b9hyVd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .b9hyVd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .b9hyVd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .b9hyVd:disabled {
            box-shadow: none
        }

        .b9hyVd:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .b9hyVd:disabled:hover .VfPpkd-Jh9lGc::before,
        .b9hyVd:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .b9hyVd:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .b9hyVd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .b9hyVd:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Kjnxrf {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none;
            transition: border .28s cubic-bezier(.4, 0, .2, 1), box-shadow .28s cubic-bezier(.4, 0, .2, 1);
            box-shadow: none
        }

        .Kjnxrf .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .Kjnxrf:not(:disabled) {
            background-color: rgb(232, 240, 254)
        }

        .Kjnxrf:not(:disabled) {
            color: rgb(25, 103, 210)
        }

        .Kjnxrf:disabled {
            background-color: rgba(60, 64, 67, .12)
        }

        .Kjnxrf:disabled {
            color: rgba(60, 64, 67, .38)
        }

        .Kjnxrf:hover:not(:disabled),
        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .Kjnxrf:active:not(:disabled) {
            color: rgb(23, 78, 166)
        }

        .Kjnxrf .VfPpkd-Jh9lGc::before,
        .Kjnxrf .VfPpkd-Jh9lGc::after {
            background-color: rgb(25, 103, 210);
            background-color: var(--mdc-ripple-color, rgb(25, 103, 210))
        }

        .Kjnxrf:hover .VfPpkd-Jh9lGc::before,
        .Kjnxrf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Kjnxrf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .Kjnxrf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .Kjnxrf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(25, 103, 210)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .Kjnxrf .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .Kjnxrf:hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .Kjnxrf:hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:not(:disabled):active {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .Kjnxrf:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:disabled {
            box-shadow: none
        }

        .Kjnxrf:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Kjnxrf:disabled:hover .VfPpkd-Jh9lGc::before,
        .Kjnxrf:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .Kjnxrf:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .Kjnxrf:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .Kjnxrf:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .ksBjEc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none
        }

        .ksBjEc .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .ksBjEc:not(:disabled) {
            background-color: transparent
        }

        .ksBjEc:not(:disabled) {
            color: rgb(26, 115, 232);
            color: var(--gm-colortextbutton-ink-color, rgb(26, 115, 232))
        }

        .ksBjEc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-colortextbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(26, 115, 232)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .ksBjEc .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .ksBjEc:hover:not(:disabled),
        .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .ksBjEc:active:not(:disabled) {
            color: rgb(23, 78, 166);
            color: var(--gm-colortextbutton-ink-color--stateful, rgb(23, 78, 166))
        }

        .ksBjEc .VfPpkd-Jh9lGc::before,
        .ksBjEc .VfPpkd-Jh9lGc::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-colortextbutton-state-color, rgb(26, 115, 232))
        }

        .ksBjEc:hover .VfPpkd-Jh9lGc::before,
        .ksBjEc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .ksBjEc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .ksBjEc:disabled:hover .VfPpkd-Jh9lGc::before,
        .ksBjEc:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .ksBjEc:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .ksBjEc:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .ksBjEc:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .LjDxcd {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: .875rem;
            letter-spacing: .0107142857em;
            font-weight: 500;
            text-transform: none
        }

        .LjDxcd .VfPpkd-Jh9lGc {
            height: 100%;
            position: absolute;
            overflow: hidden;
            width: 100%;
            z-index: 0
        }

        .LjDxcd:not(:disabled) {
            color: rgb(95, 99, 104);
            color: var(--gm-neutraltextbutton-ink-color, rgb(95, 99, 104))
        }

        .LjDxcd:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-neutraltextbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .LjDxcd:hover:not(:disabled),
        .LjDxcd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
        .LjDxcd:active:not(:disabled) {
            color: rgb(32, 33, 36);
            color: var(--gm-neutraltextbutton-ink-color--stateful, rgb(32, 33, 36))
        }

        .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: rgb(95, 99, 104)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .LjDxcd .VfPpkd-UdE5de-uDEFge .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .LjDxcd .VfPpkd-Jh9lGc::before,
        .LjDxcd .VfPpkd-Jh9lGc::after {
            background-color: rgb(95, 99, 104);
            background-color: var(--gm-neutraltextbutton-state-color, rgb(95, 99, 104))
        }

        .LjDxcd:hover .VfPpkd-Jh9lGc::before,
        .LjDxcd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .LjDxcd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .LjDxcd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .LjDxcd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .LjDxcd:disabled:hover .VfPpkd-Jh9lGc::before,
        .LjDxcd:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .LjDxcd:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .LjDxcd:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .LjDxcd:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .DuMIQc {
            padding: 0 24px 0 24px
        }

        .P62QJc {
            padding: 0 23px 0 23px;
            border-width: 1px
        }

        .P62QJc.VfPpkd-LgbsSe-OWXEXe-Bz112c-UbuQg {
            padding: 0 11px 0 23px
        }

        .P62QJc.VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc {
            padding: 0 23px 0 11px
        }

        .P62QJc .VfPpkd-Jh9lGc {
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            border-width: 1px
        }

        .P62QJc .VfPpkd-RLmnJb {
            left: -1px;
            width: calc(100% + 2px)
        }

        .yHy1rc {
            z-index: 0
        }

        .yHy1rc .VfPpkd-Bz112c-Jh9lGc::before,
        .yHy1rc .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .yHy1rc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .fzRBVc {
            z-index: 0
        }

        .fzRBVc .VfPpkd-Bz112c-Jh9lGc::before,
        .fzRBVc .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .fzRBVc:disabled {
            color: rgba(60, 64, 67, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .WpHeLc {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            outline: none
        }

        [dir=rtl] .HDnnrf .VfPpkd-kBDsod,
        .HDnnrf .VfPpkd-kBDsod[dir=rtl] {
            transform: scaleX(-1)
        }

        [dir=rtl] .QDwDD,
        .QDwDD[dir=rtl] {
            transform: scaleX(-1)
        }

        .PDpWxe {
            will-change: unset
        }

        .LQeN7 .VfPpkd-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid rgb(24, 90, 188);
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .LQeN7 .VfPpkd-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .LQeN7 .VfPpkd-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid rgb(232, 240, 254);
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .LQeN7 .VfPpkd-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .LQeN7.gmghec .VfPpkd-J1Ukfc-LhBDec {
            display: inline-block
        }

        @media (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .LQeN7.gmghec .VfPpkd-J1Ukfc-LhBDec {
                display: none
            }
        }

        .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            pointer-events: none;
            border: 2px solid rgb(24, 90, 188);
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {
            .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                border-color: CanvasText
            }
        }

        .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
            content: "";
            border: 2px solid rgb(232, 240, 254);
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .mN1ivc .VfPpkd-Bz112c-J1Ukfc-LhBDec::after {
                border-color: CanvasText
            }
        }

        .mN1ivc.gmghec .VfPpkd-Bz112c-J1Ukfc-LhBDec {
            display: inline-block
        }

        @media (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .mN1ivc.gmghec .VfPpkd-Bz112c-J1Ukfc-LhBDec {
                display: none
            }
        }

        .MyRpB .VfPpkd-kBDsod,
        .MyRpB .VfPpkd-vQzf8d {
            opacity: 0
        }

        [data-tooltip-enabled=true]:disabled,
        .VfPpkd-Bz112c-LgbsSe[data-tooltip-enabled=true]:disabled .VfPpkd-Bz112c-Jh9lGc {
            pointer-events: auto
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #6200ee;
            stroke: var(--mdc-theme-primary, #6200ee)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .VfPpkd-JGcpL-uI4vCe-u014N {
            stroke: transparent
        }

        @keyframes mdc-circular-progress-container-rotate {
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes mdc-circular-progress-spinner-layer-rotate {
            12.5% {
                transform: rotate(135deg)
            }
            25% {
                transform: rotate(270deg)
            }
            37.5% {
                transform: rotate(405deg)
            }
            50% {
                transform: rotate(540deg)
            }
            62.5% {
                transform: rotate(675deg)
            }
            75% {
                transform: rotate(810deg)
            }
            87.5% {
                transform: rotate(945deg)
            }
            100% {
                transform: rotate(3turn)
            }
        }

        @keyframes mdc-circular-progress-color-1-fade-in-out {
            from {
                opacity: .99
            }
            25% {
                opacity: .99
            }
            26% {
                opacity: 0
            }
            89% {
                opacity: 0
            }
            90% {
                opacity: .99
            }
            to {
                opacity: .99
            }
        }

        @keyframes mdc-circular-progress-color-2-fade-in-out {
            from {
                opacity: 0
            }
            15% {
                opacity: 0
            }
            25% {
                opacity: .99
            }
            50% {
                opacity: .99
            }
            51% {
                opacity: 0
            }
            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-color-3-fade-in-out {
            from {
                opacity: 0
            }
            40% {
                opacity: 0
            }
            50% {
                opacity: .99
            }
            75% {
                opacity: .99
            }
            76% {
                opacity: 0
            }
            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-color-4-fade-in-out {
            from {
                opacity: 0
            }
            65% {
                opacity: 0
            }
            75% {
                opacity: .99
            }
            90% {
                opacity: .99
            }
            to {
                opacity: 0
            }
        }

        @keyframes mdc-circular-progress-left-spin {
            from {
                transform: rotate(265deg)
            }
            50% {
                transform: rotate(130deg)
            }
            to {
                transform: rotate(265deg)
            }
        }

        @keyframes mdc-circular-progress-right-spin {
            from {
                transform: rotate(-265deg)
            }
            50% {
                transform: rotate(-130deg)
            }
            to {
                transform: rotate(-265deg)
            }
        }

        .VfPpkd-JGcpL-P1ekSe {
            display: inline-flex;
            position: relative;
            direction: ltr;
            line-height: 0;
            transition: opacity .25s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-JGcpL-uI4vCe-haAclf,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G,
        .VfPpkd-JGcpL-IdXvz-haAclf,
        .VfPpkd-JGcpL-QYI5B-pbTTYe {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .VfPpkd-JGcpL-uI4vCe-haAclf {
            transform: rotate(-90deg)
        }

        .VfPpkd-JGcpL-IdXvz-haAclf {
            font-size: 0;
            letter-spacing: 0;
            white-space: nowrap;
            opacity: 0
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo-Bd00G,
        .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            fill: transparent
        }

        .VfPpkd-JGcpL-uI4vCe-LkdAo {
            transition: stroke-dashoffset .5s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-JGcpL-OcUoKf-TpMipd {
            position: absolute;
            top: 0;
            left: 47.5%;
            box-sizing: border-box;
            width: 5%;
            height: 100%;
            overflow: hidden
        }

        .VfPpkd-JGcpL-OcUoKf-TpMipd .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            left: -900%;
            width: 2000%;
            transform: rotate(180deg)
        }

        .VfPpkd-JGcpL-lLvYUc-e9ayKc {
            display: inline-flex;
            position: relative;
            width: 50%;
            height: 100%;
            overflow: hidden
        }

        .VfPpkd-JGcpL-lLvYUc-e9ayKc .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            width: 200%
        }

        .VfPpkd-JGcpL-lLvYUc-qwU8Me .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            left: -100%
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-uI4vCe-haAclf {
            opacity: 0
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-IdXvz-haAclf {
            opacity: 1
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-IdXvz-haAclf {
            animation: mdc-circular-progress-container-rotate 1.5682352941176s linear infinite
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-QYI5B-pbTTYe {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-R6PoUb {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-1-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-ibL1re {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-2-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-c5RTEf {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-3-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-Ydhldb-II5mzb {
            animation: mdc-circular-progress-spinner-layer-rotate 5332ms cubic-bezier(.4, 0, .2, 1) infinite both, mdc-circular-progress-color-4-fade-in-out 5332ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-lLvYUc-LK5yu .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            animation: mdc-circular-progress-left-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-A9y3zc .VfPpkd-JGcpL-lLvYUc-qwU8Me .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            animation: mdc-circular-progress-right-spin 1333ms cubic-bezier(.4, 0, .2, 1) infinite both
        }

        .VfPpkd-JGcpL-P1ekSe-OWXEXe-xTMeO {
            opacity: 0
        }

        .DU29of {
            position: relative
        }

        .DU29of .VfPpkd-JGcpL-uI4vCe-LkdAo,
        .DU29of .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #4285f4
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-uI4vCe-LkdAo,
            .DU29of .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-R6PoUb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #4285f4
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-R6PoUb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-ibL1re .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #ea4335
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-ibL1re .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-c5RTEf .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #fbbc04
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-c5RTEf .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Ydhldb-II5mzb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
            stroke: #34a853
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .DU29of .VfPpkd-JGcpL-Ydhldb-II5mzb .VfPpkd-JGcpL-IdXvz-LkdAo-Bd00G {
                stroke: CanvasText
            }
        }

        .DU29of .VfPpkd-JGcpL-Mr8B3-V67aGc {
            height: 100%;
            width: 100%;
            position: absolute;
            opacity: 0;
            overflow: hidden;
            z-index: -1
        }

        .VfPpkd-z59Tgd {
            border-radius: 4px;
            border-radius: var(--mdc-shape-small, 4px)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            border-radius: 4px;
            border-radius: var(--mdc-shape-small, 4px)
        }

        .VfPpkd-z59Tgd {
            color: white;
            color: var(--mdc-theme-text-primary-on-dark, white)
        }

        .VfPpkd-z59Tgd {
            background-color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-MlC99b {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-light, rgba(0, 0, 0, .87))
        }

        .VfPpkd-IqDDtd {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-IqDDtd-hSRGPd {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-suEOdc.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .VfPpkd-z59Tgd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit)
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            border-radius: 4px;
            line-height: 20px
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b {
            display: block;
            margin-top: 0;
            line-height: 20px;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-subtitle2-font-size, .875rem);
            line-height: 1.375rem;
            line-height: var(--mdc-typography-subtitle2-line-height, 1.375rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-subtitle2-font-weight, 500);
            letter-spacing: .0071428571em;
            letter-spacing: var(--mdc-typography-subtitle2-letter-spacing, .0071428571em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle2-text-transform, inherit)
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit)
        }

        .VfPpkd-z59Tgd {
            word-break: break-all;
            word-break: var(--mdc-tooltip-word-break, normal);
            overflow-wrap: anywhere
        }

        .VfPpkd-suEOdc-OWXEXe-eo9XGd-RCfa3e .VfPpkd-z59Tgd-OiiCO {
            transition: opacity .15s 0ms cubic-bezier(0, 0, .2, 1), transform .15s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-suEOdc-OWXEXe-ZYIfFd-RCfa3e .VfPpkd-z59Tgd-OiiCO {
            transition: opacity 75ms 0ms cubic-bezier(.4, 0, 1, 1)
        }

        .VfPpkd-suEOdc {
            position: fixed;
            display: none;
            z-index: 9
        }

        .VfPpkd-suEOdc-sM5MNb-OWXEXe-nzrxxc {
            position: relative
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd,
        .VfPpkd-suEOdc-OWXEXe-eo9XGd,
        .VfPpkd-suEOdc-OWXEXe-ZYIfFd {
            display: inline-flex
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd.VfPpkd-suEOdc-OWXEXe-nzrxxc,
        .VfPpkd-suEOdc-OWXEXe-eo9XGd.VfPpkd-suEOdc-OWXEXe-nzrxxc,
        .VfPpkd-suEOdc-OWXEXe-ZYIfFd.VfPpkd-suEOdc-OWXEXe-nzrxxc {
            display: inline-block;
            left: -320px;
            position: absolute
        }

        .VfPpkd-z59Tgd {
            line-height: 16px;
            padding: 4px 8px;
            min-width: 40px;
            max-width: 200px;
            min-height: 24px;
            max-height: 40vh;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center
        }

        .VfPpkd-z59Tgd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-z59Tgd::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            min-height: 24px;
            min-width: 40px;
            max-width: 320px;
            position: relative
        }

        .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd {
            text-align: left
        }

        [dir=rtl] .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd,
        .VfPpkd-suEOdc-OWXEXe-LlMNQd .VfPpkd-z59Tgd[dir=rtl] {
            text-align: right
        }

        .VfPpkd-z59Tgd .VfPpkd-MlC99b {
            margin: 0 8px
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            max-width: 184px;
            margin: 8px;
            text-align: left
        }

        [dir=rtl] .VfPpkd-z59Tgd .VfPpkd-IqDDtd,
        .VfPpkd-z59Tgd .VfPpkd-IqDDtd[dir=rtl] {
            text-align: right
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd .VfPpkd-IqDDtd {
            max-width: 304px;
            align-self: stretch
        }

        .VfPpkd-z59Tgd .VfPpkd-IqDDtd-hSRGPd {
            text-decoration: none
        }

        .VfPpkd-suEOdc-OWXEXe-nzrxxc-LQLjdd,
        .VfPpkd-IqDDtd,
        .VfPpkd-MlC99b {
            z-index: 1
        }

        .VfPpkd-z59Tgd-OiiCO {
            opacity: 0;
            transform: scale(.8);
            will-change: transform, opacity
        }

        .VfPpkd-suEOdc-OWXEXe-TSZdd .VfPpkd-z59Tgd-OiiCO {
            transform: scale(1);
            opacity: 1
        }

        .VfPpkd-suEOdc-OWXEXe-ZYIfFd .VfPpkd-z59Tgd-OiiCO {
            transform: scale(1)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            position: absolute;
            height: 24px;
            width: 24px;
            transform: rotate(35deg) skewY(20deg) scaleX(.9396926208)
        }

        .VfPpkd-Djsh7e-XxIAqe-ma6Yeb .VfPpkd-BFbNVe-bF1uUb,
        .VfPpkd-Djsh7e-XxIAqe-cGMI2b .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            outline: 1px solid transparent;
            z-index: -1
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
                outline-color: CanvasText
            }
        }

        .VfPpkd-BFbNVe-bF1uUb {
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
            opacity: 0;
            opacity: var(--mdc-elevation-overlay-opacity, 0);
            transition: opacity .28s cubic-bezier(.4, 0, .2, 1);
            background-color: #fff;
            background-color: var(--mdc-elevation-overlay-color, #fff)
        }

        .NZp2ef {
            background-color: #e8eaed
        }

        .EY8ABd {
            z-index: 2101
        }

        .EY8ABd .VfPpkd-z59Tgd {
            background-color: #3c4043;
            color: #e8eaed
        }

        .EY8ABd .VfPpkd-MlC99b,
        .EY8ABd .VfPpkd-IqDDtd {
            color: #3c4043
        }

        .EY8ABd .VfPpkd-IqDDtd-hSRGPd {
            color: #1a73e8
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-MlC99b {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .EY8ABd.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            border-radius: 8px
        }

        .ziykHb {
            z-index: 2101
        }

        .ziykHb .VfPpkd-z59Tgd {
            background-color: #3c4043;
            color: #e8eaed
        }

        .ziykHb .VfPpkd-MlC99b,
        .ziykHb .VfPpkd-IqDDtd {
            color: #3c4043
        }

        .ziykHb .VfPpkd-IqDDtd-hSRGPd {
            color: #1a73e8
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd,
        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-ma6Yeb,
        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-Djsh7e-XxIAqe-cGMI2b {
            background-color: #fff
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-MlC99b {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .ziykHb.VfPpkd-suEOdc-OWXEXe-nzrxxc .VfPpkd-z59Tgd {
            border-radius: 8px
        }

        .EY8ABd-OWXEXe-TAWMXe {
            position: absolute;
            left: -10000px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
            -webkit-user-select: none;
            -webkit-user-select: none
        }

        html[dir=rtl] .giSqbe {
            transform: scaleX(-1)
        }

        .VfPpkd-I9GLp-yrriRe {
            display: inline-flex;
            align-items: center;
            vertical-align: middle
        }

        .VfPpkd-I9GLp-yrriRe[hidden] {
            display: none
        }

        .VfPpkd-I9GLp-yrriRe>label {
            margin-left: 0;
            margin-right: auto;
            padding-left: 4px;
            padding-right: 0;
            order: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe>label,
        .VfPpkd-I9GLp-yrriRe>label[dir=rtl] {
            margin-left: auto;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe>label,
        .VfPpkd-I9GLp-yrriRe>label[dir=rtl] {
            padding-left: 0;
            padding-right: 4px
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-WrakWd>label {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label {
            margin-left: auto;
            margin-right: 0;
            padding-left: 0;
            padding-right: 4px;
            order: -1
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label[dir=rtl] {
            margin-left: 0;
            margin-right: auto
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fW01td-CpWD9d>label[dir=rtl] {
            padding-left: 4px;
            padding-right: 0
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL {
            justify-content: space-between
        }

        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label {
            margin: 0
        }

        [dir=rtl] .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label,
        .VfPpkd-I9GLp-yrriRe-OWXEXe-fozPsf-t6UvL>label[dir=rtl] {
            margin: 0
        }

        .VfPpkd-I9GLp-yrriRe {
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-form-field-label-text-font, Roboto, sans-serif);
            line-height: 1.25rem;
            line-height: var(--mdc-form-field-label-text-line-height, 1.25rem);
            font-size: .875rem;
            font-size: var(--mdc-form-field-label-text-size, .875rem);
            font-weight: 400;
            font-weight: var(--mdc-form-field-label-text-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-form-field-label-text-tracking, .0178571429em);
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-form-field-label-text-color, var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87)))
        }

        .MlG5Jc {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0142857143em;
            font-weight: 400
        }

        .MlG5Jc gm-checkbox[disabled]~.VfPpkd-V67aGc,
        .MlG5Jc gm-radio[disabled]~.VfPpkd-V67aGc,
        .MlG5Jc .VfPpkd-MPu53c-OWXEXe-OWB6Me~.VfPpkd-V67aGc,
        .MlG5Jc .VfPpkd-GCYh9b-OWXEXe-OWB6Me~.VfPpkd-V67aGc {
            color: rgb(95, 99, 104)
        }

        .VfPpkd-MPu53c {
            padding: 11px;
            padding: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
            margin: 0;
            margin: calc((var(--mdc-checkbox-touch-target-size, 40px) - 40px)/2)
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-MPu53c:hover .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:hover .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-MPu53c .VfPpkd-YQoJzd {
            top: 11px;
            top: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
            left: 11px;
            left: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe {
            top: 0;
            top: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            right: 0;
            right: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            left: 0;
            left: calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
            width: 40px;
            width: var(--mdc-checkbox-touch-target-size, 40px);
            height: 40px;
            height: var(--mdc-checkbox-touch-target-size, 40px)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(0, 0, 0, .54);
            border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
            background-color: transparent
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #018786;
            border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
            background-color: #018786;
            background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
        }

        @keyframes mdc-checkbox-fade-in-background-8A000000FF01878600000000FF018786 {
            0% {
                border-color: rgba(0, 0, 0, .54);
                border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
                background-color: transparent
            }
            50% {
                border-color: #018786;
                border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
                background-color: #018786;
                background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
            }
        }

        @keyframes mdc-checkbox-fade-out-background-8A000000FF01878600000000FF018786 {
            0%,
            80% {
                border-color: #018786;
                border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
                background-color: #018786;
                background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
            }
            100% {
                border-color: rgba(0, 0, 0, .54);
                border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
                background-color: transparent
            }
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-8A000000FF01878600000000FF018786
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-8A000000FF01878600000000FF018786
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(0, 0, 0, .38);
            border-color: var(--mdc-checkbox-disabled-color, rgba(0, 0, 0, .38));
            background-color: transparent
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
            border-color: transparent;
            background-color: rgba(0, 0, 0, .38);
            background-color: var(--mdc-checkbox-disabled-color, rgba(0, 0, 0, .38))
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-ink-color, #fff)
        }

        .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-ink-color, #fff)
        }

        @keyframes mdc-checkbox-unchecked-checked-checkmark-path {
            0%,
            50% {
                stroke-dashoffset: 29.7833385
            }
            50% {
                animation-timing-function: cubic-bezier(0, 0, .2, 1)
            }
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes mdc-checkbox-unchecked-indeterminate-mixedmark {
            0%,
            68.2% {
                transform: scaleX(0)
            }
            68.2% {
                animation-timing-function: cubic-bezier(0, 0, 0, 1)
            }
            100% {
                transform: scaleX(1)
            }
        }

        @keyframes mdc-checkbox-checked-unchecked-checkmark-path {
            from {
                animation-timing-function: cubic-bezier(.4, 0, 1, 1);
                opacity: 1;
                stroke-dashoffset: 0
            }
            to {
                opacity: 0;
                stroke-dashoffset: -29.7833385
            }
        }

        @keyframes mdc-checkbox-checked-indeterminate-checkmark {
            from {
                animation-timing-function: cubic-bezier(0, 0, .2, 1);
                transform: rotate(0deg);
                opacity: 1
            }
            to {
                transform: rotate(45deg);
                opacity: 0
            }
        }

        @keyframes mdc-checkbox-indeterminate-checked-checkmark {
            from {
                animation-timing-function: cubic-bezier(.14, 0, 0, 1);
                transform: rotate(45deg);
                opacity: 0
            }
            to {
                transform: rotate(1turn);
                opacity: 1
            }
        }

        @keyframes mdc-checkbox-checked-indeterminate-mixedmark {
            from {
                animation-timing-function: mdc-animation-deceleration-curve-timing-function;
                transform: rotate(-45deg);
                opacity: 0
            }
            to {
                transform: rotate(0deg);
                opacity: 1
            }
        }

        @keyframes mdc-checkbox-indeterminate-checked-mixedmark {
            from {
                animation-timing-function: cubic-bezier(.14, 0, 0, 1);
                transform: rotate(0deg);
                opacity: 1
            }
            to {
                transform: rotate(315deg);
                opacity: 0
            }
        }

        @keyframes mdc-checkbox-indeterminate-unchecked-mixedmark {
            0% {
                animation-timing-function: linear;
                transform: scaleX(1);
                opacity: 1
            }
            32.8%,
            100% {
                transform: scaleX(0);
                opacity: 0
            }
        }

        .VfPpkd-MPu53c {
            display: inline-block;
            position: relative;
            flex: 0 0 18px;
            box-sizing: content-box;
            width: 18px;
            height: 18px;
            line-height: 0;
            white-space: nowrap;
            cursor: pointer;
            vertical-align: bottom
        }

        .VfPpkd-MPu53c[hidden] {
            display: none
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
            .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
        .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
            .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
                border-color: CanvasText
            }
        }

        @media (-ms-high-contrast:none) {
            .VfPpkd-MPu53c .VfPpkd-sMek6-LhBDec {
                display: none
            }
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-SJnn3d {
                margin: 0 1px
            }
        }

        .VfPpkd-MPu53c-OWXEXe-OWB6Me {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-YQoJzd {
            display: inline-flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 18px;
            height: 18px;
            border: 2px solid currentColor;
            border-radius: 2px;
            background-color: transparent;
            pointer-events: none;
            will-change: background-color, border-color;
            transition: background-color 90ms 0ms cubic-bezier(.4, 0, .6, 1), border-color 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-HUofsb {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transition: opacity .18s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb {
            opacity: 1
        }

        .VfPpkd-HUofsb-Jt5cK {
            transition: stroke-dashoffset .18s 0ms cubic-bezier(.4, 0, .6, 1);
            stroke: currentColor;
            stroke-width: 3.12px;
            stroke-dashoffset: 29.7833385;
            stroke-dasharray: 29.7833385
        }

        .VfPpkd-SJnn3d {
            width: 100%;
            height: 0;
            transform: scaleX(0) rotate(0deg);
            border-width: 1px;
            border-style: solid;
            opacity: 0;
            transition: opacity 90ms 0ms cubic-bezier(.4, 0, .6, 1), transform 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-YQoJzd {
            animation-duration: .18s;
            animation-timing-function: linear
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-HUofsb-Jt5cK {
            animation: mdc-checkbox-unchecked-checked-checkmark-path .18s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-SJnn3d {
            animation: mdc-checkbox-unchecked-indeterminate-mixedmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-HUofsb-Jt5cK {
            animation: mdc-checkbox-checked-unchecked-checkmark-path 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-A9y3zc .VfPpkd-HUofsb {
            animation: mdc-checkbox-checked-indeterminate-checkmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-A9y3zc .VfPpkd-SJnn3d {
            animation: mdc-checkbox-checked-indeterminate-mixedmark 90ms linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-barxie .VfPpkd-HUofsb {
            animation: mdc-checkbox-indeterminate-checked-checkmark .5s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-barxie .VfPpkd-SJnn3d {
            animation: mdc-checkbox-indeterminate-checked-mixedmark .5s linear 0s;
            transition: none
        }

        .VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-SJnn3d {
            animation: mdc-checkbox-indeterminate-unchecked-mixedmark .3s linear 0s;
            transition: none
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd,
        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd {
            transition: border-color 90ms 0ms cubic-bezier(0, 0, .2, 1), background-color 90ms 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK {
            stroke-dashoffset: 0
        }

        .VfPpkd-muHVFf-bMcfAe {
            position: absolute;
            margin: 0;
            padding: 0;
            opacity: 0;
            cursor: inherit
        }

        .VfPpkd-muHVFf-bMcfAe:disabled {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-MPu53c-OWXEXe-dgl2Hf {
            margin: 4px;
            margin: calc((var(--mdc-checkbox-state-layer-size, 48px) - var(--mdc-checkbox-state-layer-size, 40px))/2)
        }

        .VfPpkd-MPu53c-OWXEXe-dgl2Hf .VfPpkd-muHVFf-bMcfAe {
            top: -4px;
            top: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            right: -4px;
            right: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            left: -4px;
            left: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
            width: 48px;
            width: var(--mdc-checkbox-state-layer-size, 48px);
            height: 48px;
            height: var(--mdc-checkbox-state-layer-size, 48px)
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            transition: opacity .18s 0ms cubic-bezier(0, 0, .2, 1), transform .18s 0ms cubic-bezier(0, 0, .2, 1);
            opacity: 1
        }

        .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            transform: scaleX(1) rotate(-45deg)
        }

        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            transform: rotate(45deg);
            opacity: 0;
            transition: opacity 90ms 0ms cubic-bezier(.4, 0, .6, 1), transform 90ms 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-SJnn3d,
        .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            transform: scaleX(1) rotate(0deg);
            opacity: 1
        }

        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-YQoJzd,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb-Jt5cK,
        .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-SJnn3d {
            transition: none
        }

        .VfPpkd-MPu53c {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-OYHm6b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-OYHm6b::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-OYHm6b::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d .VfPpkd-OYHm6b::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-MPu53c {
            z-index: 0
        }

        .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
        .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
            z-index: -1;
            z-index: var(--mdc-ripple-z-index, -1)
        }

        .VfPpkd-OYHm6b {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
                border-color: GrayText;
                border-color: var(--mdc-checkbox-disabled-unselected-icon-color, GrayText);
                background-color: transparent
            }
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
                border-color: GrayText;
                background-color: GrayText;
                background-color: var(--mdc-checkbox-disabled-selected-icon-color, GrayText)
            }
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonText;
                color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonText;
                border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonFace;
                color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
            .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonFace;
                border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--mdc-checkbox-disabled-unselected-icon-color, rgba(60, 64, 67, .38));
            background-color: transparent
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
            border-color: transparent;
            background-color: rgba(60, 64, 67, .38);
            background-color: var(--mdc-checkbox-disabled-selected-icon-color, rgba(60, 64, 67, .38))
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
            color: #fff;
            color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
            border-color: #fff;
            border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #5f6368;
            border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
            background-color: transparent
        }

        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #1a73e8;
            border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
        }

        @keyframes mdc-checkbox-fade-in-background-FF5F6368FF1A73E800000000FF1A73E8 {
            0% {
                border-color: #5f6368;
                border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
                background-color: transparent
            }
            50% {
                border-color: #1a73e8;
                border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
                background-color: #1a73e8;
                background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
            }
        }

        @keyframes mdc-checkbox-fade-out-background-FF5F6368FF1A73E800000000FF1A73E8 {
            0%,
            80% {
                border-color: #1a73e8;
                border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
                background-color: #1a73e8;
                background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
            }
            100% {
                border-color: #5f6368;
                border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
                background-color: transparent
            }
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF5F6368FF1A73E800000000FF1A73E8
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF5F6368FF1A73E800000000FF1A73E8
        }

        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-hover-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6)
        }

        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:hover.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-focus-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
            border-color: #202124;
            border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
            background-color: transparent
        }

        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
            border-color: #174ea6;
            border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
            background-color: #174ea6;
            background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
        }

        @keyframes mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6 {
            0% {
                border-color: #202124;
                border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
                background-color: transparent
            }
            50% {
                border-color: #174ea6;
                border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
                background-color: #174ea6;
                background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
            }
        }

        @keyframes mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6 {
            0%,
            80% {
                border-color: #174ea6;
                border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
                background-color: #174ea6;
                background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
            }
            100% {
                border-color: #202124;
                border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
                background-color: transparent
            }
        }

        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-barxie .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-iAfbIe-A9y3zc .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-barxie-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd,
        .Ne8lhe:not(:disabled):active.VfPpkd-MPu53c-OWXEXe-vwu2ne-A9y3zc-iAfbIe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd {
            animation-name: mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6
        }

        .Ne8lhe .VfPpkd-OYHm6b::before,
        .Ne8lhe .VfPpkd-OYHm6b::after {
            background-color: #3c4043;
            background-color: var(--mdc-checkbox-unselected-hover-state-layer-color, #3c4043)
        }

        .Ne8lhe:hover .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-checkbox-unselected-hover-state-layer-opacity, .04)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-checkbox-unselected-focus-state-layer-opacity, .12)
        }

        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-checkbox-unselected-pressed-state-layer-opacity, .1)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-checkbox-unselected-pressed-state-layer-opacity, 0.1)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-hover-state-layer-color, #1a73e8)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:hover .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
            opacity: .04;
            opacity: var(--mdc-checkbox-selected-hover-state-layer-opacity, .04)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-checkbox-selected-focus-state-layer-opacity, .12)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
            transition: opacity .15s linear
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-checkbox-selected-pressed-state-layer-opacity, .1)
        }

        .Ne8lhe.VfPpkd-MPu53c-OWXEXe-gk6SMd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-checkbox-selected-pressed-state-layer-opacity, 0.1)
        }

        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::before,
        .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-MPu53c-OWXEXe-gk6SMd .VfPpkd-OYHm6b::after {
            background-color: #1a73e8;
            background-color: var(--mdc-checkbox-selected-hover-state-layer-color, #1a73e8)
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
                border-color: GrayText;
                border-color: var(--mdc-checkbox-disabled-unselected-icon-color, GrayText);
                background-color: transparent
            }
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:checked~.VfPpkd-YQoJzd,
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[disabled]:indeterminate~.VfPpkd-YQoJzd,
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true][disabled]~.VfPpkd-YQoJzd {
                border-color: GrayText;
                background-color: GrayText;
                background-color: var(--mdc-checkbox-disabled-selected-icon-color, GrayText)
            }
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonText;
                color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonText;
                border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
            }
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
                color: ButtonFace;
                color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
            .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
                border-color: ButtonFace;
                border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
            }
        }

        .az2ine {
            will-change: unset
        }

        .VfPpkd-GCYh9b {
            padding: 10px
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .54)
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: #018786;
            border-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: #018786;
            border-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgba(0, 0, 0, .38)
        }

        .VfPpkd-GCYh9b .VfPpkd-RsCWK::before {
            background-color: #018786;
            background-color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-GCYh9b .VfPpkd-RsCWK::before {
            top: -10px;
            left: -10px;
            width: 40px;
            height: 40px
        }

        .VfPpkd-GCYh9b .VfPpkd-gBXA9-bMcfAe {
            top: 0;
            right: 0;
            left: 0;
            width: 40px;
            height: 40px
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
                border-color: GrayText
            }
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
                border-color: GrayText
            }
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
            .VfPpkd-GCYh9b.VfPpkd-GCYh9b-OWXEXe-OWB6Me .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
                border-color: GrayText
            }
        }

        .VfPpkd-GCYh9b {
            display: inline-block;
            position: relative;
            flex: 0 0 auto;
            box-sizing: content-box;
            width: 20px;
            height: 20px;
            cursor: pointer;
            will-change: opacity, transform, border-color, color
        }

        .VfPpkd-GCYh9b[hidden] {
            display: none
        }

        .VfPpkd-RsCWK {
            display: inline-block;
            position: relative;
            box-sizing: border-box;
            width: 20px;
            height: 20px
        }

        .VfPpkd-RsCWK::before {
            position: absolute;
            transform: scale(0, 0);
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: "";
            transition: opacity .12s 0ms cubic-bezier(.4, 0, .6, 1), transform .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-wVo5xe-LkdAo {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            border-width: 2px;
            border-style: solid;
            border-radius: 50%;
            transition: border-color .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-Z5TpLc-LkdAo {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            transform: scale(0, 0);
            border-width: 10px;
            border-style: solid;
            border-radius: 50%;
            transition: transform .12s 0ms cubic-bezier(.4, 0, .6, 1), border-color .12s 0ms cubic-bezier(.4, 0, .6, 1)
        }

        .VfPpkd-gBXA9-bMcfAe {
            position: absolute;
            margin: 0;
            padding: 0;
            opacity: 0;
            cursor: inherit;
            z-index: 1
        }

        .VfPpkd-GCYh9b-OWXEXe-dgl2Hf {
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 4px;
            margin-left: 4px
        }

        .VfPpkd-GCYh9b-OWXEXe-dgl2Hf .VfPpkd-gBXA9-bMcfAe {
            top: -4px;
            right: -4px;
            left: -4px;
            width: 48px;
            height: 48px
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 100%;
            width: 100%
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec,
            .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec::after,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-r6xRoe-LhBDec::after,
            .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-r6xRoe-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK {
            transition: opacity .12s 0ms cubic-bezier(0, 0, .2, 1), transform .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            transition: border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            transition: transform .12s 0ms cubic-bezier(0, 0, .2, 1), border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-GCYh9b-OWXEXe-OWB6Me {
            cursor: default;
            pointer-events: none
        }

        .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            transform: scale(.5);
            transition: transform .12s 0ms cubic-bezier(0, 0, .2, 1), border-color .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK,
        [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK {
            cursor: default
        }

        .VfPpkd-gBXA9-bMcfAe:focus+.VfPpkd-RsCWK::before {
            transform: scale(1);
            opacity: .12;
            transition: opacity .12s 0ms cubic-bezier(0, 0, .2, 1), transform .12s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-GCYh9b {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-eHTEvd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-eHTEvd::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-eHTEvd::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0);
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-eHTEvd::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b .VfPpkd-eHTEvd::after {
            background-color: #018786;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-secondary, #018786))
        }

        .VfPpkd-GCYh9b:hover .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-eHTEvd::before,
        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .VfPpkd-GCYh9b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d .VfPpkd-RsCWK::before,
        .VfPpkd-GCYh9b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-RsCWK::before {
            content: none
        }

        .VfPpkd-eHTEvd {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .kDzhGf {
            z-index: 0
        }

        .kDzhGf .VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-eHTEvd::after {
            z-index: -1
        }

        .kDzhGf .VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-eHTEvd::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-radio-state-color, rgb(26, 115, 232))
        }

        .kDzhGf:hover .VfPpkd-eHTEvd::before,
        .kDzhGf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-eHTEvd::before,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            background-color: rgb(60, 64, 67);
            background-color: var(--gm-radio-state-color, rgb(60, 64, 67))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            transition: opacity .15s linear
        }

        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)~.VfPpkd-eHTEvd::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .kDzhGf.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(95, 99, 104);
            border-color: var(--gm-radio-stroke-color--unchecked, rgb(95, 99, 104))
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(26, 115, 232);
            border-color: var(--gm-radio-stroke-color--checked, rgb(26, 115, 232))
        }

        .kDzhGf .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgb(26, 115, 232);
            border-color: var(--gm-radio-ink-color, rgb(26, 115, 232))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-stroke-color--unchecked, rgba(60, 64, 67, .38))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-stroke-color--checked, rgba(60, 64, 67, .38))
        }

        .kDzhGf [aria-disabled=true] .VfPpkd-gBXA9-bMcfAe+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf .VfPpkd-gBXA9-bMcfAe:disabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgba(60, 64, 67, .38);
            border-color: var(--gm-radio-disabled-ink-color, rgba(60, 64, 67, .38))
        }

        .kDzhGf .VfPpkd-RsCWK::before {
            background-color: rgb(26, 115, 232);
            background-color: var(--gm-radio-state-color, rgb(26, 115, 232))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled:not(:checked)+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(32, 33, 36);
            border-color: var(--gm-radio-stroke-color--unchecked-stateful, rgb(32, 33, 36))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled:checked+.VfPpkd-RsCWK .VfPpkd-wVo5xe-LkdAo {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-radio-stroke-color--checked-stateful, rgb(23, 78, 166))
        }

        .kDzhGf:hover .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo,
        .kDzhGf:active .VfPpkd-gBXA9-bMcfAe:enabled+.VfPpkd-RsCWK .VfPpkd-Z5TpLc-LkdAo {
            border-color: rgb(23, 78, 166);
            border-color: var(--gm-radio-ink-color--stateful, rgb(23, 78, 166))
        }

        .wHsUjf {
            will-change: unset
        }

        .VfPpkd-StrnGf-rymPhb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            line-height: 1.5rem;
            margin: 0;
            padding: 8px 0;
            list-style-type: none;
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-StrnGf-rymPhb:focus {
            outline: none
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: rgba(0, 0, 0, .54);
            color: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, .54))
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            background-color: transparent
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-icon-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c {
            opacity: .38
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-b9t22c,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc {
            padding-top: 4px;
            padding-bottom: 4px;
            font-size: .812rem
        }

        .VfPpkd-StrnGf-rymPhb-Tkg0ld {
            display: block
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            padding: 0;
            padding-left: 16px;
            padding-right: 16px;
            height: 48px
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b:focus {
            outline: none
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
        .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-StrnGf-rymPhb-ibnC6b:not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
            .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px double transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-StrnGf-rymPhb-ibnC6b.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
                border-color: CanvasText
            }
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 16px;
            padding-right: 16px;
            height: 72px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: 16px;
            height: 72px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] {
            padding-left: 16px;
            padding-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 20px;
            height: 20px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-f7MjDc {
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            fill: currentColor;
            object-fit: cover;
            margin-left: 0;
            margin-right: 32px;
            width: 24px;
            height: 24px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 32px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 32px;
            width: 24px;
            height: 24px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 32px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 40px;
            height: 40px;
            border-radius: 50%
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 40px;
            height: 40px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 56px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 100px;
            height: 56px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            display: inline-flex
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd {
            margin-left: auto;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-IhFlZd:not(.HzV7m-fuEl3d) {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-caption-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-caption-font-size, .75rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-caption-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-caption-font-weight, 400);
            letter-spacing: .0333333333em;
            letter-spacing: var(--mdc-typography-caption-letter-spacing, .0333333333em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-decoration: var(--mdc-typography-caption-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-caption-text-transform, inherit)
        }

        .VfPpkd-StrnGf-rymPhb-ibnC6b[dir=rtl] .VfPpkd-StrnGf-rymPhb-IhFlZd,
        [dir=rtl] .VfPpkd-StrnGf-rymPhb-ibnC6b .VfPpkd-StrnGf-rymPhb-IhFlZd {
            margin-left: 0;
            margin-right: auto
        }

        .VfPpkd-StrnGf-rymPhb-b9t22c {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-StrnGf-rymPhb-b9t22c[for] {
            pointer-events: none
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit);
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-L8ivfd-fmcmS {
            font-size: inherit
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 40px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc .VfPpkd-StrnGf-rymPhb-b9t22c {
            align-self: flex-start
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 64px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-f7MjDc {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aSi1db-RWgCYc.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-ibnC6b {
            height: 60px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc {
            margin-left: 0;
            margin-right: 16px;
            width: 36px;
            height: 36px
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb.VfPpkd-StrnGf-rymPhb-OWXEXe-EzIYc .VfPpkd-StrnGf-rymPhb-f7MjDc[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        :not(.VfPpkd-StrnGf-rymPhb-ibnC6b-OWXEXe-OWB6Me).VfPpkd-StrnGf-rymPhb-ibnC6b {
            cursor: pointer
        }

        a.VfPpkd-StrnGf-rymPhb-ibnC6b {
            color: inherit;
            text-decoration: none
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic {
            height: 0;
            margin: 0;
            border: none;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic {
            border-bottom-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd,
        .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-nNtqDd[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-Bz112c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-YLEF4c-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 72px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 72px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 72px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-JUCs7e-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 88px;
            margin-right: 0;
            width: calc(100% - 88px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 88px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 88px;
            margin-right: 0;
            width: calc(100% - 104px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 88px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 16px;
            margin-right: 0;
            width: calc(100% - 32px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-HiaYvf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc {
            margin-left: 116px;
            margin-right: 0;
            width: calc(100% - 116px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc[dir=rtl] {
            margin-left: 0;
            margin-right: 116px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            width: calc(100% - 16px)
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg {
            margin-left: 116px;
            margin-right: 0;
            width: calc(100% - 132px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg[dir=rtl] {
            margin-left: 0;
            margin-right: 116px
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2 {
            margin-left: 0;
            margin-right: 0;
            width: 100%
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2 {
            margin-left: 0;
            margin-right: 0;
            width: calc(100% - 16px)
        }

        [dir=rtl] .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2,
        .VfPpkd-StrnGf-rymPhb-OWXEXe-aTv5jf-rymPhb .VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-M1Soyc.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-UbuQg.VfPpkd-StrnGf-rymPhb-clz4Ic-OWXEXe-YbohUe-QFlW2[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .VfPpkd-StrnGf-rymPhb-JNdkSc .VfPpkd-StrnGf-rymPhb {
            padding: 0
        }

        .VfPpkd-StrnGf-rymPhb-oT7voc {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            margin: .75rem 16px
        }

        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            color: rgba(0, 0, 0, .54);
            color: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, .54))
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            background-color: transparent
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-icon-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-JMEf7e {
            color: rgba(0, 0, 0, .38);
            color: var(--mdc-theme-text-hint-on-background, rgba(0, 0, 0, .38))
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-JMEf7e {
            opacity: .38
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-L8ivfd-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me .VfPpkd-rymPhb-bC5pod-fmcmS {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b .VfPpkd-rymPhb-fpDzbe-fmcmS {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-pXU01b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-StrnGf-rymPhb-oT7voc {
            color: rgba(0, 0, 0, .87);
            color: var(--mdc-theme-text-primary-on-background, rgba(0, 0, 0, .87))
        }

        .VfPpkd-rymPhb-clz4Ic::after {
            border-bottom-color: white
        }

        .VfPpkd-rymPhb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
            line-height: 1.5rem
        }

        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit)
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body2-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-body2-font-size, .875rem);
            line-height: 1.25rem;
            line-height: var(--mdc-typography-body2-line-height, 1.25rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body2-font-weight, 400);
            letter-spacing: .0178571429em;
            letter-spacing: var(--mdc-typography-body2-letter-spacing, .0178571429em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body2-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body2-text-transform, inherit)
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-overline-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .75rem;
            font-size: var(--mdc-typography-overline-font-size, .75rem);
            line-height: 2rem;
            line-height: var(--mdc-typography-overline-line-height, 2rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-overline-font-weight, 500);
            letter-spacing: .1666666667em;
            letter-spacing: var(--mdc-typography-overline-letter-spacing, .1666666667em);
            text-decoration: none;
            -webkit-text-decoration: var(--mdc-typography-overline-text-decoration, none);
            text-decoration: var(--mdc-typography-overline-text-decoration, none);
            text-transform: uppercase;
            text-transform: var(--mdc-typography-overline-text-transform, uppercase)
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            width: 24px;
            height: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb {
            width: 56px;
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb {
            width: 100px;
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-scr2fc .VfPpkd-rymPhb-KkROqb {
            width: 36px;
            height: 20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-Bz112c .VfPpkd-rymPhb-JMEf7e {
            width: 24px;
            height: 24px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-MPu53c .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-GCYh9b .VfPpkd-rymPhb-JMEf7e {
            width: 40px;
            height: 40px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-scr2fc .VfPpkd-rymPhb-JMEf7e {
            width: 36px;
            height: 20px
        }

        .VfPpkd-rymPhb-oT7voc {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-subtitle1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-subtitle1-font-size, 1rem);
            line-height: 1.75rem;
            line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
            letter-spacing: .009375em;
            letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, .009375em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-subtitle1-text-transform, inherit)
        }

        .VfPpkd-rymPhb-clz4Ic {
            background-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-rymPhb-clz4Ic {
            height: 1px
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-rymPhb-clz4Ic::after {
                content: "";
                display: block;
                border-bottom-width: 1px;
                border-bottom-style: solid
            }
        }

        .VfPpkd-rymPhb {
            margin: 0;
            padding: 8px 0;
            list-style-type: none
        }

        .VfPpkd-rymPhb:focus {
            outline: none
        }

        .VfPpkd-rymPhb-Tkg0ld {
            display: block
        }

        .VfPpkd-rymPhb-ibnC6b {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
            padding: 0;
            align-items: stretch;
            cursor: pointer
        }

        .VfPpkd-rymPhb-ibnC6b:focus {
            outline: none
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 48px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 64px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb {
            height: 88px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc .VfPpkd-rymPhb-KkROqb {
            align-self: center;
            margin-top: 0
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc .VfPpkd-rymPhb-JMEf7e,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: center;
            margin-top: 0
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-JMEf7e {
            align-self: flex-start;
            margin-top: 16px
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-OWB6Me,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-tPcied-hXIJHe {
            cursor: auto
        }

        .VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
        .VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-rymPhb-ibnC6b:not(.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd):focus::before,
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px double transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:focus::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 3px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-rymPhb-ibnC6b.VfPpkd-rymPhb-ibnC6b-OWXEXe-gk6SMd:focus::before {
                border-color: CanvasText
            }
        }

        a.VfPpkd-rymPhb-ibnC6b {
            color: inherit;
            text-decoration: none
        }

        .VfPpkd-rymPhb-KkROqb {
            fill: currentColor;
            flex-shrink: 0;
            pointer-events: none
        }

        .VfPpkd-rymPhb-JMEf7e {
            flex-shrink: 0;
            pointer-events: none
        }

        .VfPpkd-rymPhb-Gtdoyb {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            align-self: center;
            flex: 1;
            pointer-events: none
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-Gtdoyb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-Gtdoyb {
            align-self: stretch
        }

        .VfPpkd-rymPhb-Gtdoyb[for] {
            pointer-events: none
        }

        .VfPpkd-rymPhb-fpDzbe-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-L8ivfd-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-L8ivfd-fmcmS {
            white-space: normal;
            line-height: 20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-BYmFj .VfPpkd-rymPhb-L8ivfd-fmcmS {
            white-space: nowrap;
            line-height: auto
        }

        .VfPpkd-rymPhb-bC5pod-fmcmS {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 24px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-vfifzc-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-YLEF4c .VfPpkd-rymPhb-KkROqb {
            border-radius: 50%
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 32px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 32px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-Bz112c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-JUCs7e.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb {
            margin-left: 16px;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 16px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-HiaYvf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb {
            margin-left: 0;
            margin-right: 16px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 16px;
            margin-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-aTv5jf.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 24px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 24px;
            margin-right: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-KkROqb {
            align-self: flex-start;
            margin-top: 8px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-fpDzbe-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS {
            display: block;
            margin-top: 0;
            line-height: normal;
            margin-bottom: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::before {
            display: inline-block;
            width: 0;
            height: 28px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb .VfPpkd-rymPhb-bC5pod-fmcmS::after {
            display: inline-block;
            width: 0;
            height: 20px;
            content: "";
            vertical-align: -20px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e {
            display: block;
            margin-top: 0;
            line-height: normal
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-UbuQg-r4m2rf .VfPpkd-rymPhb-JMEf7e::before {
            display: inline-block;
            width: 0;
            height: 32px;
            content: "";
            vertical-align: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-Woal0c-RWgCYc {
            height: 56px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-MPu53c.VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-aSi1db-MCEKJb {
            height: 72px
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b {
            padding-left: 0;
            padding-right: auto
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b.VfPpkd-rymPhb-ibnC6b[dir=rtl] {
            padding-left: auto;
            padding-right: 0
        }

        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb {
            margin-left: 8px;
            margin-right: 24px
        }

        [dir=rtl] .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb,
        .VfPpkd-rymPhb-ibnC6b-OWXEXe-SfQLQb-M1Soyc-GCYh9b .VfPpkd-rymPhb-KkROqb[dir=rtl] {
            margin-left: 24px;
            margin-right: 8px;
            transform: scaleX(0.08)
        }

        19.15% {
            animation-timing-function: cubic-bezier(0.152313, 0.196432, 0.648374, 1.004315);
            transform: scaleX(0.457104)
        }

        44.15% {
            animation-timing-function: cubic-bezier(0.257759, 0.003163, 0.211762, 1.38179);
            transform: scaleX(0.72796)
        }

        to {
            transform: scaleX(0.08)
        }

        }

        @keyframes buffering {
            to {
                transform: translateX(-10px)
            }
        }

        @keyframes buffering-reverse {
            to {
                transform: translateX(10px)
            }
        }

        @keyframes indeterminate-translate-ie {
            0% {
                transform: translateX(-100%)
            }
            to {
                transform: translateX(100%)
            }
        }

        @keyframes indeterminate-translate-reverse-ie {
            0% {
                transform: translateX(100%)
            }
            to {
                transform: translateX(-100%)
            }
        }

        .sZwd7c {
            height: 4px;
            overflow: hidden;
            position: relative;
            transform: translateZ(0);
            transition: opacity 250ms linear;
            width: 100%
        }

        .w2zcLc {
            position: absolute
        }

        .xcNBHc,
        .MyvhI,
        .l3q5xe {
            height: 100%;
            position: absolute;
            width: 100%
        }

        .w2zcLc {
            transform-origin: top left;
            transition: transform 250ms ease;
            -webkit-transition: transform 250ms ease, -webkit-transform 250ms ease;
            transition: transform 250ms ease, -webkit-transform 250ms ease
        }

        .MyvhI {
            transform-origin: top left;
            transition: transform 250ms ease;
            -webkit-transition: transform 250ms ease, -webkit-transform 250ms ease;
            transition: transform 250ms ease, -webkit-transform 250ms ease;
            animation: none
        }

        .l3q5xe {
            animation: none
        }

        .w2zcLc {
            background-color: #e6e6e6;
            height: 100%;
            transform-origin: top left;
            transition: transform 250ms ease;
            -webkit-transition: transform 250ms ease, -webkit-transform 250ms ease;
            transition: transform 250ms ease, -webkit-transform 250ms ease;
            width: 100%
        }

        .TKVRUb {
            transform: scaleX(0)
        }

        .sUoeld {
            visibility: hidden
        }

        .l3q5xe {
            background-color: #000;
            display: inline-block
        }

        .xcNBHc {
            background-size: 10px 4px;
            background-repeat: repeat-x;
            background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg%20version%3D%271.1%27%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20xmlns%3Axlink%3D%27http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%27%20x%3D%270px%27%20y%3D%270px%27%20enable-background%3D%27new%200%200%205%202%27%20xml%3Aspace%3D%27preserve%27%20viewBox%3D%270%200%205%202%27%20preserveAspectRatio%3D%27none%20slice%27%3E%3Ccircle%20cx%3D%271%27%20cy%3D%271%27%20r%3D%271%27%20fill%3D%27%23e6e6e6%27%2F%3E%3C%2Fsvg%3E');
            visibility: hidden
        }

        .sZwd7c.B6Vhqe .MyvhI {
            transition: none
        }

        .sZwd7c.B6Vhqe .TKVRUb {
            animation: primary-indeterminate-translate 2s infinite linear
        }

        .sZwd7c.B6Vhqe .TKVRUb>.l3q5xe {
            animation: primary-indeterminate-scale 2s infinite linear
        }

        .sZwd7c.B6Vhqe .sUoeld {
            animation: auxiliary-indeterminate-translate 2s infinite linear;
            visibility: visible
        }

        .sZwd7c.B6Vhqe .sUoeld>.l3q5xe {
            animation: auxiliary-indeterminate-scale 2s infinite linear
        }

        .sZwd7c.B6Vhqe.ieri7c .l3q5xe {
            transform: scaleX(0.45)
        }

        .sZwd7c.B6Vhqe.ieri7c .sUoeld {
            animation: none;
            visibility: hidden
        }

        .sZwd7c.B6Vhqe.ieri7c .TKVRUb {
            animation: indeterminate-translate-ie 2s infinite ease-out
        }

        .sZwd7c.B6Vhqe.ieri7c .TKVRUb>.l3q5xe,
        .sZwd7c.B6Vhqe.ieri7c .sUoeld>.l3q5xe {
            animation: none
        }

        .sZwd7c.juhVM .w2zcLc,
        .sZwd7c.juhVM .MyvhI {
            right: 0;
            transform-origin: center right
        }

        .sZwd7c.juhVM .TKVRUb {
            animation-name: primary-indeterminate-translate-reverse
        }

        .sZwd7c.juhVM .sUoeld {
            animation-name: auxiliary-indeterminate-translate-reverse
        }

        .sZwd7c.juhVM.ieri7c .TKVRUb {
            animation-name: indeterminate-translate-reverse-ie
        }

        .sZwd7c.qdulke {
            opacity: 0
        }

        .sZwd7c.jK7moc .sUoeld,
        .sZwd7c.jK7moc .TKVRUb,
        .sZwd7c.jK7moc .sUoeld>.l3q5xe,
        .sZwd7c.jK7moc .TKVRUb>.l3q5xe {
            -webkit-animation-play-state: paused;
            animation-play-state: paused
        }

        .sZwd7c.D6TUi .xcNBHc {
            animation: buffering 250ms infinite linear;
            visibility: visible
        }

        .sZwd7c.D6TUi.juhVM .xcNBHc {
            animation: buffering-reverse 250ms infinite linear
        }

        img,
        html,
        body,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        form,
        fieldset,
        embed,
        object,
        applet {
            border: 0;
            margin: 0;
            padding: 0
        }

        textarea,
        input,
        select,
        option {
            font-family: inherit;
            font-size: inherit
        }

        button {
            box-sizing: initial;
            -webkit-font-smoothing: inherit;
            align-items: initial;
            background: none;
            border: 0;
            color: inherit;
            font: inherit;
            margin: 0;
            padding: 0;
            text-align: inherit
        }

        h1,
        h2,
        h3 {
            font: inherit
        }

        ul {
            list-style-type: none
        }

        html {
            height: 100%;
            position: relative;
            z-index: -1
        }

        body {
            background-color: #eee;
            color: #333;
            font-family: "Roboto", Arial, sans-serif;
            font-size: 13px;
            font-weight: 300;
            line-height: 1.4;
            height: 100%;
            position: relative;
            text-rendering: optimizeLegibility;
            z-index: -1
        }

        body.k8Lt0 {
            min-width: 1024px
        }

        a {
            text-decoration: none
        }

        a,
        a:visited {
            color: #333
        }

        a:hover {
            cursor: pointer
        }

        .IQ1z0d a,
        .IQ1z0d a:visited {
            color: #15c;
            cursor: pointer
        }

        .IQ1z0d a:hover {
            text-decoration: underline
        }

        .g7W7Ed {
            margin-bottom: 1em
        }

        .LS81yb-Ud7fr {
            box-sizing: border-box;
            line-height: 1.4;
            font-size: 28px;
            font-weight: 100;
            min-height: 37px;
            min-width: 680px;
            padding: 5px;
            position: relative
        }

        img {
            vertical-align: middle
        }

        table {
            border-collapse: collapse;
            border-width: 0;
            empty-cells: show
        }

        .qJTHM-bN97Pc-ge6pde-bF1uUb {
            opacity: .65;
            filter: alpha(opacity=65);
            background: #ddd;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 30000
        }

        .qJTHM-bN97Pc-ge6pde-aZ2wEe {
            background-image: url(https://lh6.ggpht.com/s4qReSaucUB6sgUYQFZQcF31FBvtVehCtvI6Bc_WUGuLkSCzTfODYs84VrtujdRA29Lp);
            height: 150px;
            left: 50vw;
            margin-left: -75px;
            margin-top: -75px;
            position: fixed;
            top: 50vh;
            width: 150px
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .qJTHM-bN97Pc-ge6pde-aZ2wEe {
                background-image: url(https://lh6.ggpht.com/s4qReSaucUB6sgUYQFZQcF31FBvtVehCtvI6Bc_WUGuLkSCzTfODYs84VrtujdRA29Lp);
                background-size: contain
            }
        }

        .rymPhb-jyrRxf {
            border-collapse: collapse;
            margin: 0 5px
        }

        .rymPhb-jyrRxf-tJHJj {
            font-size: 12px;
            text-align: left;
            text-transform: uppercase
        }

        .rymPhb-jyrRxf-tJHJj th {
            padding: 15px 30px 15px 0
        }

        .rymPhb-oKdM2c:first-child {
            border-top: 1px solid #d6d6d6
        }

        .rymPhb-oKdM2c {
            border-bottom: 1px solid #d6d6d6
        }

        .rymPhb-oKdM2c:hover {
            background-color: #fff
        }

        .rymPhb-oKdM2c td {
            padding-right: 30px
        }

        .VfPpkd-WsjYwc {
            border-radius: 4px;
            border-radius: var(--mdc-shape-medium, 4px);
            background-color: #fff;
            background-color: var(--mdc-theme-surface, #fff);
            position: relative;
            box-shadow: 0 2px 1px -1px rgba(0, 0, 0, .2), 0 1px 1px 0 rgba(0, 0, 0, .14), 0 1px 3px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-WsjYwc .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-WsjYwc::after {
            border-radius: 4px;
            border-radius: var(--mdc-shape-medium, 4px)
        }

        .VfPpkd-WsjYwc-OWXEXe-INsAgc {
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12);
            border-width: 1px;
            border-style: solid;
            border-color: #e0e0e0
        }

        .VfPpkd-WsjYwc {
            display: flex;
            flex-direction: column;
            box-sizing: border-box
        }

        .VfPpkd-WsjYwc::after {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-WsjYwc::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-WsjYwc-OWXEXe-INsAgc::after {
            border: none
        }

        .VfPpkd-aGsRMb {
            border-radius: inherit;
            height: 100%
        }

        .VfPpkd-gBNGNe {
            position: relative;
            box-sizing: border-box;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover
        }

        .VfPpkd-gBNGNe::before {
            display: block;
            content: ""
        }

        .VfPpkd-gBNGNe:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .VfPpkd-gBNGNe:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit
        }

        .VfPpkd-gBNGNe-OWXEXe-BaYisc::before {
            margin-top: 100%
        }

        .VfPpkd-gBNGNe-OWXEXe-W3lGp-Clt0zb::before {
            margin-top: 56.25%
        }

        .VfPpkd-gBNGNe-bN97Pc {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-sizing: border-box
        }

        .VfPpkd-EScbFb-JIbuQc {
            display: flex;
            flex-direction: column;
            box-sizing: border-box;
            position: relative;
            outline: none;
            color: inherit;
            text-decoration: none;
            cursor: pointer;
            overflow: hidden
        }

        .VfPpkd-EScbFb-JIbuQc:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .VfPpkd-EScbFb-JIbuQc:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit
        }

        .VfPpkd-gqIiZe {
            display: flex;
            flex-direction: row;
            align-items: center;
            box-sizing: border-box;
            min-height: 52px;
            padding: 8px
        }

        .VfPpkd-gqIiZe-OWXEXe-Vkfede-rJCtOc {
            padding: 0
        }

        .VfPpkd-aPoio-c6xFrd,
        .VfPpkd-aPoio-fuEl3d {
            display: flex;
            flex-direction: row;
            align-items: center;
            box-sizing: border-box
        }

        .VfPpkd-aPoio-fuEl3d {
            color: rgba(0, 0, 0, .6);
            flex-grow: 1;
            justify-content: flex-end
        }

        .VfPpkd-aPoio-c6xFrd+.VfPpkd-aPoio-fuEl3d {
            margin-left: 16px;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-aPoio-c6xFrd+.VfPpkd-aPoio-fuEl3d,
        .VfPpkd-aPoio-c6xFrd+.VfPpkd-aPoio-fuEl3d[dir=rtl] {
            margin-left: 0;
            margin-right: 16px
        }

        .VfPpkd-aPoio {
            display: inline-flex;
            flex-direction: row;
            align-items: center;
            box-sizing: border-box;
            justify-content: center;
            cursor: pointer;
            user-select: none
        }

        .VfPpkd-aPoio:focus {
            outline: none
        }

        .VfPpkd-aPoio-OWXEXe-LgbsSe {
            margin-left: 0;
            margin-right: 8px;
            padding: 0 8px
        }

        [dir=rtl] .VfPpkd-aPoio-OWXEXe-LgbsSe,
        .VfPpkd-aPoio-OWXEXe-LgbsSe[dir=rtl] {
            margin-left: 8px;
            margin-right: 0
        }

        .VfPpkd-aPoio-OWXEXe-LgbsSe:last-child {
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-aPoio-OWXEXe-LgbsSe:last-child,
        .VfPpkd-aPoio-OWXEXe-LgbsSe:last-child[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        .VfPpkd-gqIiZe-OWXEXe-Vkfede-rJCtOc .VfPpkd-aPoio-OWXEXe-LgbsSe {
            justify-content: space-between;
            width: 100%;
            height: auto;
            max-height: none;
            margin: 0;
            padding: 8px 16px;
            text-align: left
        }

        [dir=rtl] .VfPpkd-gqIiZe-OWXEXe-Vkfede-rJCtOc .VfPpkd-aPoio-OWXEXe-LgbsSe,
        .VfPpkd-gqIiZe-OWXEXe-Vkfede-rJCtOc .VfPpkd-aPoio-OWXEXe-LgbsSe[dir=rtl] {
            text-align: right
        }

        .VfPpkd-aPoio-OWXEXe-Bz112c {
            margin: -6px 0;
            padding: 12px
        }

        .VfPpkd-aPoio-OWXEXe-Bz112c:not(:disabled) {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-EScbFb-JIbuQc {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::before,
        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d .VfPpkd-FJ5hab::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d .VfPpkd-FJ5hab::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-FJ5hab::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-FJ5hab::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-FJ5hab::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::before,
        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d .VfPpkd-FJ5hab::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::before,
        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, #000)
        }

        .VfPpkd-EScbFb-JIbuQc:hover .VfPpkd-FJ5hab::before,
        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-FJ5hab::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-FJ5hab::before,
        .VfPpkd-EScbFb-JIbuQc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-FJ5hab::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-EScbFb-JIbuQc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-FJ5hab::after {
            transition: opacity .15s linear
        }

        .VfPpkd-EScbFb-JIbuQc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-FJ5hab::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-EScbFb-JIbuQc .VfPpkd-FJ5hab {
            box-sizing: content-box;
            height: 100%;
            overflow: hidden;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 100%
        }

        .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::after,
        .VfPpkd-EScbFb-JIbuQc:not(.VfPpkd-ksKsZd-mWPk3d):focus::after {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 5px double transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-EScbFb-JIbuQc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::after,
            .VfPpkd-EScbFb-JIbuQc:not(.VfPpkd-ksKsZd-mWPk3d):focus::after {
                border-color: CanvasText
            }
        }

        .KC1dQ {
            border-radius: 8px;
            background-color: #fff;
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .KC1dQ .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Usd1Ac {
            border-radius: 8px;
            background-color: #fff;
            border: 1px solid rgb(218, 220, 224);
            box-shadow: none
        }

        .Usd1Ac .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Si6A0c {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            outline: none
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            background-color: #fff;
            background-color: var(--mdc-theme-surface, #fff)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-IE5DDf,
        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc-GGAcbc {
            background-color: rgba(0, 0, 0, .32)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-k2Wrsb {
            color: rgba(0, 0, 0, .87)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-cnG4Wd {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub {
            color: #000;
            color: var(--mdc-theme-on-surface, #000)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: #000;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-on-surface, #000))
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb,
        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb,
        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd.VfPpkd-Sx9Kwc-XuHpsb-clz4Ic-yePe5c .VfPpkd-T0kwCb {
            border-color: rgba(0, 0, 0, .12)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            margin-bottom: 0
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-XuHpsb-clz4Ic-tJHJj.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            border-radius: 4px;
            border-radius: var(--mdc-shape-medium, 4px)
        }

        .VfPpkd-P5QLlc {
            box-shadow: 0 11px 15px -7px rgba(0, 0, 0, .2), 0 24px 38px 3px rgba(0, 0, 0, .14), 0 9px 46px 8px rgba(0, 0, 0, .12)
        }

        .VfPpkd-k2Wrsb {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-headline6-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1.25rem;
            font-size: var(--mdc-typography-headline6-font-size, 1.25rem);
            line-height: 2rem;
            line-height: var(--mdc-typography-headline6-line-height, 2rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-headline6-font-weight, 500);
            letter-spacing: .0125em;
            letter-spacing: var(--mdc-typography-headline6-letter-spacing, .0125em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-headline6-text-decoration, inherit);
            text-decoration: var(--mdc-typography-headline6-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-headline6-text-transform, inherit)
        }

        .VfPpkd-cnG4Wd {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-body1-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: 1rem;
            font-size: var(--mdc-typography-body1-font-size, 1rem);
            line-height: 1.5rem;
            line-height: var(--mdc-typography-body1-line-height, 1.5rem);
            font-weight: 400;
            font-weight: var(--mdc-typography-body1-font-weight, 400);
            letter-spacing: .03125em;
            letter-spacing: var(--mdc-typography-body1-letter-spacing, .03125em);
            text-decoration: inherit;
            -webkit-text-decoration: var(--mdc-typography-body1-text-decoration, inherit);
            text-decoration: var(--mdc-typography-body1-text-decoration, inherit);
            text-transform: inherit;
            text-transform: var(--mdc-typography-body1-text-transform, inherit)
        }

        .VfPpkd-Sx9Kwc,
        .VfPpkd-IE5DDf {
            position: fixed;
            top: 0;
            left: 0;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 100%;
            height: 100%
        }

        .VfPpkd-Sx9Kwc {
            display: none;
            z-index: 7;
            z-index: var(--mdc-dialog-z-index, 7)
        }

        .VfPpkd-Sx9Kwc .VfPpkd-cnG4Wd {
            padding: 20px 24px 20px 24px
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            min-width: 280px
        }

        @media (max-width:592px) {
            .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
                max-width: calc(100vw - 32px)
            }
        }

        @media (min-width:592px) {
            .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
                max-width: 560px
            }
        }

        .VfPpkd-Sx9Kwc .VfPpkd-P5QLlc {
            max-height: calc(100% - 32px)
        }

        .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
            max-width: none
        }

        @media (max-width:960px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: 560px;
                width: 560px
            }
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        @media (max-width:720px) and (max-width:672px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: calc(100vw - 112px)
            }
        }

        @media (max-width:720px) and (min-width:672px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: 560px
            }
        }

        @media (max-width:720px) and (max-height:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: calc(100vh - 160px)
            }
        }

        @media (max-width:720px) and (min-height:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                max-height: 560px
            }
        }

        @media (max-width:720px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        @media (max-width:600px),
        (max-width:720px) and (max-height:400px),
        (min-width:720px) and (max-height:400px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                height: 100%;
                max-height: 100vh;
                max-width: 100vw;
                width: 100vw;
                border-radius: 0
            }
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                order: -1;
                left: -12px
            }
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-oclYLd {
                padding: 0 16px 9px;
                justify-content: flex-start
            }
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-k2Wrsb {
                margin-left: -8px
            }
        }

        @media (min-width:960px) {
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc {
                width: calc(100vw - 400px)
            }
            .VfPpkd-Sx9Kwc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-P5QLlc .VfPpkd-zMU9ub {
                right: -12px
            }
        }

        .VfPpkd-Sx9Kwc.VfPpkd-IE5DDf-OWXEXe-L6cTce .VfPpkd-IE5DDf {
            opacity: 0
        }

        .VfPpkd-IE5DDf {
            opacity: 0;
            z-index: -1
        }

        .VfPpkd-wzTsW {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            box-sizing: border-box;
            height: 100%;
            transform: scale(.8);
            opacity: 0;
            pointer-events: none
        }

        .VfPpkd-P5QLlc {
            position: relative;
            display: flex;
            flex-direction: column;
            flex-grow: 0;
            flex-shrink: 0;
            box-sizing: border-box;
            max-width: 100%;
            max-height: 100%;
            pointer-events: auto;
            overflow-y: auto
        }

        .VfPpkd-P5QLlc .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        [dir=rtl] .VfPpkd-P5QLlc,
        .VfPpkd-P5QLlc[dir=rtl] {
            text-align: right
        }

        @media (-ms-high-contrast:active),
        screen and (forced-colors:active) {
            .VfPpkd-P5QLlc {
                outline: 2px solid windowText
            }
        }

        .VfPpkd-P5QLlc::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 2px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-P5QLlc::before {
                border-color: CanvasText
            }
        }

        @media screen and (-ms-high-contrast:active),
        screen and (-ms-high-contrast:none) {
            .VfPpkd-P5QLlc::before {
                content: none
            }
        }

        .VfPpkd-k2Wrsb {
            display: block;
            margin-top: 0;
            position: relative;
            flex-shrink: 0;
            box-sizing: border-box;
            margin: 0 0 1px;
            padding: 0 24px 9px
        }

        .VfPpkd-k2Wrsb::before {
            display: inline-block;
            width: 0;
            height: 40px;
            content: "";
            vertical-align: 0
        }

        [dir=rtl] .VfPpkd-k2Wrsb,
        .VfPpkd-k2Wrsb[dir=rtl] {
            text-align: right
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            margin-bottom: 1px;
            padding-bottom: 15px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
            align-items: baseline;
            border-bottom: 1px solid transparent;
            display: inline-flex;
            justify-content: space-between;
            padding: 0 24px 9px;
            z-index: 1
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd {
                border-bottom-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-oclYLd .VfPpkd-zMU9ub {
            right: -12px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-k2Wrsb {
            margin-bottom: 0;
            padding: 0;
            border-bottom: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb {
            border-bottom: 0;
            margin-bottom: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-zMU9ub {
            top: 5px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb {
            border-top: 1px solid transparent
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-T0kwCb {
                border-top-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb-OWXEXe-diJVc .VfPpkd-zMU9ub {
            margin-top: 4px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-n9oEIb-OWXEXe-diJVc.VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-zMU9ub {
            margin-top: 0
        }

        .VfPpkd-cnG4Wd {
            flex-grow: 1;
            box-sizing: border-box;
            margin: 0;
            overflow: auto
        }

        .VfPpkd-cnG4Wd>:first-child {
            margin-top: 0
        }

        .VfPpkd-cnG4Wd>:last-child {
            margin-bottom: 0
        }

        .VfPpkd-k2Wrsb+.VfPpkd-cnG4Wd,
        .VfPpkd-oclYLd+.VfPpkd-cnG4Wd {
            padding-top: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-k2Wrsb+.VfPpkd-cnG4Wd {
            padding-top: 8px;
            padding-bottom: 8px
        }

        .VfPpkd-cnG4Wd .VfPpkd-StrnGf-rymPhb:first-child:last-child {
            padding: 6px 0 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-s2gQvd .VfPpkd-cnG4Wd .VfPpkd-StrnGf-rymPhb:first-child:last-child {
            padding: 0
        }

        .VfPpkd-T0kwCb {
            display: flex;
            position: relative;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            box-sizing: border-box;
            min-height: 52px;
            margin: 0;
            padding: 8px;
            border-top: 1px solid transparent
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-T0kwCb {
                border-top-color: CanvasText
            }
        }

        .VfPpkd-Sx9Kwc-OWXEXe-eu7FSc .VfPpkd-T0kwCb {
            flex-direction: column;
            align-items: flex-end
        }

        .VfPpkd-M1klYe {
            margin-left: 8px;
            margin-right: 0;
            max-width: 100%;
            text-align: right
        }

        [dir=rtl] .VfPpkd-M1klYe,
        .VfPpkd-M1klYe[dir=rtl] {
            margin-left: 0;
            margin-right: 8px
        }

        .VfPpkd-M1klYe:first-child {
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-M1klYe:first-child,
        .VfPpkd-M1klYe:first-child[dir=rtl] {
            margin-left: 0;
            margin-right: 0
        }

        [dir=rtl] .VfPpkd-M1klYe,
        .VfPpkd-M1klYe[dir=rtl] {
            text-align: left
        }

        .VfPpkd-Sx9Kwc-OWXEXe-eu7FSc .VfPpkd-M1klYe:not(:first-child) {
            margin-top: 12px
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c,
        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d,
        .VfPpkd-Sx9Kwc-OWXEXe-FnSee {
            display: flex
        }

        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d .VfPpkd-IE5DDf {
            transition: opacity .15s linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-uGFO6d .VfPpkd-wzTsW {
            transition: opacity 75ms linear, transform .15s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-IE5DDf,
        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-wzTsW {
            transition: opacity 75ms linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FnSee .VfPpkd-wzTsW {
            transform: none
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c .VfPpkd-IE5DDf {
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c .VfPpkd-wzTsW {
            transform: none;
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-TSZdd .VfPpkd-P5QLlc-GGAcbc {
            opacity: 1
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-wJB69c .VfPpkd-P5QLlc-GGAcbc {
            transition: opacity 75ms linear
        }

        .VfPpkd-Sx9Kwc-OWXEXe-FNFY6c.VfPpkd-P5QLlc-GGAcbc-OWXEXe-eo9XGd .VfPpkd-P5QLlc-GGAcbc {
            transition: opacity .15s linear
        }

        .VfPpkd-P5QLlc-GGAcbc {
            display: none;
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1
        }

        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-TSZdd .VfPpkd-P5QLlc-GGAcbc,
        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-eo9XGd .VfPpkd-P5QLlc-GGAcbc,
        .VfPpkd-P5QLlc-GGAcbc-OWXEXe-wJB69c .VfPpkd-P5QLlc-GGAcbc {
            display: block
        }

        .VfPpkd-Sx9Kwc-XuHpsb-pGuBYc {
            overflow: hidden
        }

        .VfPpkd-Sx9Kwc-OWXEXe-di8rgd-bN97Pc-QFlW2 .VfPpkd-cnG4Wd {
            padding: 0
        }

        .VfPpkd-Sx9Kwc-OWXEXe-vOE8Lb .VfPpkd-wzTsW .VfPpkd-zMU9ub {
            right: 12px;
            top: 9px;
            position: absolute;
            z-index: 1
        }

        .VfPpkd-IE5DDf-OWXEXe-uIDLbb {
            pointer-events: none
        }

        .VfPpkd-IE5DDf-OWXEXe-uIDLbb .VfPpkd-IE5DDf,
        .VfPpkd-IE5DDf-OWXEXe-uIDLbb .VfPpkd-P5QLlc-GGAcbc {
            display: none
        }

        .cC1eCc {
            z-index: 2001
        }

        .cC1eCc .VfPpkd-k2Wrsb {
            color: #3c4043
        }

        .cC1eCc .VfPpkd-cnG4Wd {
            color: #5f6368
        }

        .cC1eCc .VfPpkd-zMU9ub {
            color: rgb(95, 99, 104)
        }

        .cC1eCc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: rgb(95, 99, 104);
            background-color: var(--mdc-ripple-color, rgb(95, 99, 104))
        }

        .cC1eCc .VfPpkd-zMU9ub:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .cC1eCc .VfPpkd-zMU9ub:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .cC1eCc .VfPpkd-zMU9ub.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .cC1eCc .VfPpkd-IE5DDf,
        .cC1eCc .VfPpkd-P5QLlc-GGAcbc {
            background-color: rgba(32, 33, 36, .6)
        }

        .cC1eCc .VfPpkd-P5QLlc {
            background-color: #fff
        }

        .cC1eCc .VfPpkd-P5QLlc {
            border-width: 0;
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .cC1eCc .VfPpkd-P5QLlc .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .cC1eCc .VfPpkd-P5QLlc {
            border-radius: 8px
        }

        .cC1eCc .VfPpkd-T0kwCb {
            padding-top: 2px;
            padding-bottom: 2px
        }

        .cC1eCc .VfPpkd-T0kwCb .VfPpkd-RLmnJb {
            top: -6px;
            transform: none
        }

        .cC1eCc .VfPpkd-k2Wrsb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            padding-bottom: 13px
        }

        .cC1eCc .VfPpkd-cnG4Wd {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0142857143em;
            font-weight: 400
        }

        .cC1eCc .VfPpkd-T0kwCb .VfPpkd-LgbsSe+.VfPpkd-LgbsSe {
            margin-left: 8px
        }

        .cC1eCc.VfPpkd-Sx9Kwc-OWXEXe-n9oEIb .VfPpkd-k2Wrsb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1.125rem;
            letter-spacing: 0;
            font-weight: 400;
            padding-bottom: 0
        }

        .iGu0Be {
            text-align: center
        }

        [dir=rtl] .iGu0Be,
        .iGu0Be[dir=rtl] {
            text-align: center
        }

        .nE3Lu {
            color: rgb(26, 115, 232);
            height: 24px;
            width: 24px
        }

        .nE3Lu::after {
            content: "";
            display: block
        }

        .VfPpkd-BIzmGd {
            display: inline-flex;
            position: relative;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 56px;
            height: 56px;
            padding: 0;
            border: none;
            fill: currentColor;
            text-decoration: none;
            cursor: pointer;
            user-select: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            overflow: visible;
            transition: box-shadow .28s cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform .27s 0ms cubic-bezier(0, 0, .2, 1)
        }

        .VfPpkd-BIzmGd .VfPpkd-BFbNVe-bF1uUb {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0
        }

        .VfPpkd-BIzmGd[hidden] {
            display: none
        }

        .VfPpkd-BIzmGd::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .VfPpkd-BIzmGd:hover {
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus {
            box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
        }

        .VfPpkd-BIzmGd .VfPpkd-kLizxb-LhBDec {
            position: absolute
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kLizxb-LhBDec,
        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kLizxb-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 6px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kLizxb-LhBDec,
            .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kLizxb-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kLizxb-LhBDec::after,
        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kLizxb-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 8px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kLizxb-LhBDec::after,
            .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kLizxb-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-BIzmGd:active,
        .VfPpkd-BIzmGd:focus:active {
            box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 12px 17px 2px rgba(0, 0, 0, .14), 0 5px 22px 4px rgba(0, 0, 0, .12)
        }

        .VfPpkd-BIzmGd:active,
        .VfPpkd-BIzmGd:focus {
            outline: none
        }

        .VfPpkd-BIzmGd:hover {
            cursor: pointer
        }

        .VfPpkd-BIzmGd>svg {
            width: 100%
        }

        .VfPpkd-BIzmGd-OWXEXe-yolsp {
            width: 40px;
            height: 40px
        }

        .VfPpkd-BIzmGd-OWXEXe-X9G3K {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-button-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-button-font-size, .875rem);
            line-height: 2.25rem;
            line-height: var(--mdc-typography-button-line-height, 2.25rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-button-font-weight, 500);
            letter-spacing: .0892857143em;
            letter-spacing: var(--mdc-typography-button-letter-spacing, .0892857143em);
            text-decoration: none;
            -webkit-text-decoration: var(--mdc-typography-button-text-decoration, none);
            text-decoration: var(--mdc-typography-button-text-decoration, none);
            text-transform: uppercase;
            text-transform: var(--mdc-typography-button-text-transform, uppercase);
            border-radius: 24px;
            padding-left: 20px;
            padding-right: 20px;
            width: auto;
            max-width: 100%;
            height: 48px;
            line-height: normal
        }

        .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-wbSZ0b {
            border-radius: 24px
        }

        .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-Q0XOV {
            margin-left: -8px;
            margin-right: 12px
        }

        [dir=rtl] .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-Q0XOV,
        .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-Q0XOV[dir=rtl] {
            margin-left: 12px;
            margin-right: -8px
        }

        .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-nBWOSb+.VfPpkd-Q0XOV {
            margin-left: 12px;
            margin-right: -8px
        }

        [dir=rtl] .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-nBWOSb+.VfPpkd-Q0XOV,
        .VfPpkd-BIzmGd-OWXEXe-X9G3K .VfPpkd-nBWOSb+.VfPpkd-Q0XOV[dir=rtl] {
            margin-left: -8px;
            margin-right: 12px
        }

        .VfPpkd-BIzmGd-OWXEXe-dgl2Hf {
            margin-top: 4px;
            margin-bottom: 4px;
            margin-right: 4px;
            margin-left: 4px
        }

        .VfPpkd-BIzmGd-OWXEXe-dgl2Hf .VfPpkd-D4TID {
            position: absolute;
            top: 50%;
            height: 48px;
            left: 50%;
            width: 48px;
            transform: translate(-50%, -50%)
        }

        .VfPpkd-BIzmGd::before {
            position: absolute;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: 1px solid transparent;
            border-radius: inherit;
            content: "";
            pointer-events: none
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-BIzmGd::before {
                border-color: CanvasText
            }
        }

        .VfPpkd-nBWOSb {
            justify-content: flex-start;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow-x: hidden;
            overflow-y: visible
        }

        .VfPpkd-Q0XOV {
            transition: transform .18s 90ms cubic-bezier(0, 0, .2, 1);
            fill: currentColor;
            will-change: transform
        }

        .VfPpkd-BIzmGd .VfPpkd-Q0XOV {
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .VfPpkd-BIzmGd-OWXEXe-NywdZd {
            transform: scale(0);
            opacity: 0;
            transition: opacity 15ms linear .15s, transform .18s 0ms cubic-bezier(.4, 0, 1, 1)
        }

        .VfPpkd-BIzmGd-OWXEXe-NywdZd .VfPpkd-Q0XOV {
            transform: scale(0);
            transition: transform 135ms 0ms cubic-bezier(.4, 0, 1, 1)
        }

        .VfPpkd-BIzmGd {
            background-color: #018786;
            background-color: var(--mdc-theme-secondary, #018786);
            box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
        }

        .VfPpkd-BIzmGd .VfPpkd-Q0XOV {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .VfPpkd-BIzmGd,
        .VfPpkd-BIzmGd:not(:disabled) .VfPpkd-Q0XOV,
        .VfPpkd-BIzmGd:not(:disabled) .VfPpkd-nBWOSb,
        .VfPpkd-BIzmGd:disabled .VfPpkd-Q0XOV,
        .VfPpkd-BIzmGd:disabled .VfPpkd-nBWOSb {
            color: #fff;
            color: var(--mdc-theme-on-secondary, #fff)
        }

        .VfPpkd-BIzmGd:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) {
            border-radius: 50%
        }

        .VfPpkd-BIzmGd:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) .VfPpkd-wbSZ0b {
            border-radius: 50%
        }

        .VfPpkd-BIzmGd {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            will-change: transform, opacity
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d .VfPpkd-wbSZ0b::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d .VfPpkd-wbSZ0b::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-wbSZ0b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-wbSZ0b::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-wbSZ0b::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d .VfPpkd-wbSZ0b::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::after {
            background-color: #fff;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-on-secondary, #fff))
        }

        .VfPpkd-BIzmGd:hover .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .08;
            opacity: var(--mdc-ripple-hover-opacity, .08)
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-BIzmGd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        .VfPpkd-BIzmGd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden
        }

        .VfPpkd-BIzmGd {
            z-index: 0
        }

        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::before,
        .VfPpkd-BIzmGd .VfPpkd-wbSZ0b::after {
            z-index: -1;
            z-index: var(--mdc-ripple-z-index, -1)
        }

        .SaBhMc {
            background-color: #fff;
            height: 56px;
            width: 56px;
            padding-top: 2px;
            padding-top: max(0px, 2px);
            padding-right: 2px;
            padding-right: max(0px, 2px);
            padding-bottom: 2px;
            padding-bottom: max(0px, 2px);
            padding-left: 2px;
            padding-left: max(0px, 2px)
        }

        .SaBhMc:not(:disabled) {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .SaBhMc:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .SaBhMc:not(:disabled):hover {
            box-shadow: 0 2px 3px 0 rgba(60, 64, 67, .3), 0 6px 10px 4px rgba(60, 64, 67, .15)
        }

        .SaBhMc:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .12;
            background-color: transparent
        }

        .SaBhMc:not(:disabled):focus {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .SaBhMc:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .SaBhMc:not(:disabled):active {
            box-shadow: 0 4px 4px 0 rgba(60, 64, 67, .3), 0 8px 12px 6px rgba(60, 64, 67, .15)
        }

        .SaBhMc:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .14;
            background-color: transparent
        }

        .SaBhMc:disabled {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .SaBhMc:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .SaBhMc .VfPpkd-Q0XOV {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .SaBhMc:not(:disabled) .VfPpkd-Q0XOV {
            color: #3c4043
        }

        .SaBhMc:not(:disabled):hover .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .SaBhMc:not(:disabled):focus .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .SaBhMc .VfPpkd-wbSZ0b::before,
        .SaBhMc .VfPpkd-wbSZ0b::after {
            background-color: #1a73e8
        }

        .SaBhMc:hover .VfPpkd-wbSZ0b::before,
        .SaBhMc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .04
        }

        .SaBhMc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .SaBhMc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .SaBhMc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity 150ms linear
        }

        .SaBhMc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .1
        }

        .SaBhMc.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-fab-pressed-state-layer-opacity, 0.1)
        }

        .SaBhMc:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .SaBhMc:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #4285f4;
            border-style: solid;
            border-width: 2px;
            padding-top: 2px;
            padding-top: max(calc(0px - 2px), calc(calc(0px - 2px)*-1));
            padding-right: 2px;
            padding-right: max(calc(0px - 2px), calc(calc(0px - 2px)*-1));
            padding-bottom: 2px;
            padding-bottom: max(calc(0px - 2px), calc(calc(0px - 2px)*-1));
            padding-left: 2px;
            padding-left: max(calc(0px - 2px), calc(calc(0px - 2px)*-1))
        }

        .SaBhMc:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) {
            border-radius: 28px 28px 28px 28px
        }

        .SaBhMc:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) .VfPpkd-wbSZ0b {
            border-radius: 28px 28px 28px 28px
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .SaBhMc {
                padding-top: 0;
                padding-right: 0;
                padding-bottom: 0;
                padding-left: 0
            }
            .SaBhMc:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
            .SaBhMc:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
                border-style: solid;
                border-width: 0;
                padding-top: 0;
                padding-right: 0;
                padding-bottom: 0;
                padding-left: 0
            }
        }

        .bgpk6e {
            background-color: #fff;
            height: 48px;
            border-radius: 24px 24px 24px 24px;
            font-family: Google Sans, Roboto, Arial, sans-serif;
            font-size: .875rem;
            font-weight: 500;
            letter-spacing: .0178571429em;
            padding-top: 2px;
            padding-right: 24px;
            padding-bottom: 2px;
            padding-left: 24px;
            text-transform: none
        }

        .bgpk6e:not(:disabled) {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .bgpk6e:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .bgpk6e:not(:disabled):hover {
            box-shadow: 0 2px 3px 0 rgba(60, 64, 67, .3), 0 6px 10px 4px rgba(60, 64, 67, .15)
        }

        .bgpk6e:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .12;
            background-color: transparent
        }

        .bgpk6e:not(:disabled):focus {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .bgpk6e:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .bgpk6e:not(:disabled):active {
            box-shadow: 0 4px 4px 0 rgba(60, 64, 67, .3), 0 8px 12px 6px rgba(60, 64, 67, .15)
        }

        .bgpk6e:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .14;
            background-color: transparent
        }

        .bgpk6e:disabled {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .bgpk6e:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .bgpk6e .VfPpkd-Q0XOV {
            width: 36px;
            height: 36px;
            font-size: 36px
        }

        .bgpk6e:not(:disabled) .VfPpkd-Q0XOV {
            color: #3c4043
        }

        .bgpk6e:not(:disabled):hover .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .bgpk6e:not(:disabled):focus .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .bgpk6e .VfPpkd-wbSZ0b::before,
        .bgpk6e .VfPpkd-wbSZ0b::after {
            background-color: #1a73e8
        }

        .bgpk6e:hover .VfPpkd-wbSZ0b::before,
        .bgpk6e.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .04
        }

        .bgpk6e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .bgpk6e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .bgpk6e:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity 150ms linear
        }

        .bgpk6e:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .1
        }

        .bgpk6e.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-extended-fab-pressed-state-layer-opacity, 0.1)
        }

        .bgpk6e:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .bgpk6e:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #4285f4
        }

        .bgpk6e .VfPpkd-wbSZ0b {
            border-radius: 24px 24px 24px 24px
        }

        .bgpk6e:not(:disabled) .VfPpkd-nBWOSb {
            color: #3c4043
        }

        .bgpk6e:not(:disabled):hover .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .bgpk6e:not(:disabled):focus .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .bgpk6e:not(:disabled):active .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .bgpk6e .VfPpkd-Q0XOV {
            margin-left: calc(12px - 24px);
            margin-right: 12px
        }

        [dir=rtl] .bgpk6e .VfPpkd-Q0XOV,
        .bgpk6e .VfPpkd-Q0XOV[dir=rtl] {
            margin-left: 12px;
            margin-right: calc(12px - 24px)
        }

        .bgpk6e .VfPpkd-nBWOSb+.VfPpkd-Q0XOV {
            margin-left: 12px;
            margin-right: calc(12px - 24px)
        }

        [dir=rtl] .bgpk6e .VfPpkd-nBWOSb+.VfPpkd-Q0XOV,
        .bgpk6e .VfPpkd-nBWOSb+.VfPpkd-Q0XOV[dir=rtl] {
            margin-left: calc(12px - 24px);
            margin-right: 12px
        }

        .bgpk6e:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .bgpk6e:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-style: solid;
            border-width: 2px;
            padding-top: 2px;
            padding-right: 22px;
            padding-bottom: 2px;
            padding-left: 22px
        }

        @media screen and (forced-colors:active),
        (-ms-high-contrast:active) {
            .bgpk6e {
                padding-top: 0;
                padding-right: 24px;
                padding-bottom: 0;
                padding-left: 24px
            }
            .bgpk6e:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
            .bgpk6e:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
                border-style: solid;
                border-width: 0;
                padding-top: 0;
                padding-right: 24px;
                padding-bottom: 0;
                padding-left: 24px
            }
        }

        .QmHVyb {
            background-color: #1a73e8;
            height: 48px;
            border-radius: 24px 24px 24px 24px;
            font-family: Google Sans, Roboto, Arial, sans-serif;
            font-size: .875rem;
            font-weight: 500;
            letter-spacing: .0178571429em;
            padding-left: 24px;
            padding-right: 24px;
            text-transform: none
        }

        .QmHVyb:not(:disabled) {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .QmHVyb:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .QmHVyb:not(:disabled):hover {
            box-shadow: 0 2px 3px 0 rgba(60, 64, 67, .3), 0 6px 10px 4px rgba(60, 64, 67, .15)
        }

        .QmHVyb:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .12;
            background-color: transparent
        }

        .QmHVyb:not(:disabled):focus {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .QmHVyb:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .QmHVyb:not(:disabled):active {
            box-shadow: 0 4px 4px 0 rgba(60, 64, 67, .3), 0 8px 12px 6px rgba(60, 64, 67, .15)
        }

        .QmHVyb:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .14;
            background-color: transparent
        }

        .QmHVyb:disabled {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .QmHVyb:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .QmHVyb .VfPpkd-Q0XOV {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .QmHVyb:not(:disabled) .VfPpkd-Q0XOV {
            color: #fff
        }

        .QmHVyb .VfPpkd-wbSZ0b::before,
        .QmHVyb .VfPpkd-wbSZ0b::after {
            background-color: #202124
        }

        .QmHVyb:hover .VfPpkd-wbSZ0b::before,
        .QmHVyb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .16
        }

        .QmHVyb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .QmHVyb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .24
        }

        .QmHVyb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity 150ms linear
        }

        .QmHVyb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .2
        }

        .QmHVyb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-extended-fab-pressed-state-layer-opacity, 0.2)
        }

        .QmHVyb .VfPpkd-wbSZ0b {
            border-radius: 24px 24px 24px 24px
        }

        .QmHVyb:not(:disabled) .VfPpkd-nBWOSb {
            color: #fff
        }

        .QmHVyb .VfPpkd-Q0XOV {
            margin-left: calc(16px - 24px);
            margin-right: 16px
        }

        [dir=rtl] .QmHVyb .VfPpkd-Q0XOV,
        .QmHVyb .VfPpkd-Q0XOV[dir=rtl] {
            margin-left: 16px;
            margin-right: calc(16px - 24px)
        }

        .QmHVyb .VfPpkd-nBWOSb+.VfPpkd-Q0XOV {
            margin-left: 16px;
            margin-right: calc(16px - 24px)
        }

        [dir=rtl] .QmHVyb .VfPpkd-nBWOSb+.VfPpkd-Q0XOV,
        .QmHVyb .VfPpkd-nBWOSb+.VfPpkd-Q0XOV[dir=rtl] {
            margin-left: calc(16px - 24px);
            margin-right: 16px
        }

        .Hnvug {
            background-color: #fff;
            height: 48px;
            border-radius: 24px 24px 24px 24px;
            font-family: Google Sans, Roboto, Arial, sans-serif;
            font-size: .875rem;
            font-weight: 500;
            letter-spacing: .0178571429em;
            padding-left: 24px;
            padding-right: 24px;
            text-transform: none
        }

        .Hnvug:not(:disabled) {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .Hnvug:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .Hnvug:not(:disabled):hover {
            box-shadow: 0 2px 3px 0 rgba(60, 64, 67, .3), 0 6px 10px 4px rgba(60, 64, 67, .15)
        }

        .Hnvug:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .12;
            background-color: transparent
        }

        .Hnvug:not(:disabled):focus {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .Hnvug:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .Hnvug:not(:disabled):active {
            box-shadow: 0 4px 4px 0 rgba(60, 64, 67, .3), 0 8px 12px 6px rgba(60, 64, 67, .15)
        }

        .Hnvug:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .14;
            background-color: transparent
        }

        .Hnvug:disabled {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .Hnvug:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .Hnvug .VfPpkd-Q0XOV {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .Hnvug:not(:disabled) .VfPpkd-Q0XOV {
            color: #1a73e8
        }

        .Hnvug:not(:disabled):hover .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .Hnvug:not(:disabled):focus .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .Hnvug:not(:disabled):active .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .Hnvug .VfPpkd-wbSZ0b::before,
        .Hnvug .VfPpkd-wbSZ0b::after {
            background-color: #1a73e8
        }

        .Hnvug:hover .VfPpkd-wbSZ0b::before,
        .Hnvug.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .04
        }

        .Hnvug.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .Hnvug:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .Hnvug:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity 150ms linear
        }

        .Hnvug:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .1
        }

        .Hnvug.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-extended-fab-pressed-state-layer-opacity, 0.1)
        }

        .Hnvug .VfPpkd-wbSZ0b {
            border-radius: 24px 24px 24px 24px
        }

        .Hnvug:not(:disabled) .VfPpkd-nBWOSb {
            color: #1a73e8
        }

        .Hnvug:not(:disabled):hover .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .Hnvug:not(:disabled):focus .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .Hnvug:not(:disabled):active .VfPpkd-nBWOSb {
            color: #174ea6
        }

        .Hnvug .VfPpkd-Q0XOV {
            margin-left: calc(16px - 24px);
            margin-right: 16px
        }

        [dir=rtl] .Hnvug .VfPpkd-Q0XOV,
        .Hnvug .VfPpkd-Q0XOV[dir=rtl] {
            margin-left: 16px;
            margin-right: calc(16px - 24px)
        }

        .Hnvug .VfPpkd-nBWOSb+.VfPpkd-Q0XOV {
            margin-left: 16px;
            margin-right: calc(16px - 24px)
        }

        [dir=rtl] .Hnvug .VfPpkd-nBWOSb+.VfPpkd-Q0XOV,
        .Hnvug .VfPpkd-nBWOSb+.VfPpkd-Q0XOV[dir=rtl] {
            margin-left: calc(16px - 24px);
            margin-right: 16px
        }

        .OmoSvb {
            background-color: #fff;
            height: 56px;
            width: 56px
        }

        .OmoSvb:not(:disabled) {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .OmoSvb:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .OmoSvb:not(:disabled):hover {
            box-shadow: 0 2px 3px 0 rgba(60, 64, 67, .3), 0 6px 10px 4px rgba(60, 64, 67, .15)
        }

        .OmoSvb:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .12;
            background-color: transparent
        }

        .OmoSvb:not(:disabled):focus {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .OmoSvb:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .OmoSvb:not(:disabled):active {
            box-shadow: 0 4px 4px 0 rgba(60, 64, 67, .3), 0 8px 12px 6px rgba(60, 64, 67, .15)
        }

        .OmoSvb:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .14;
            background-color: transparent
        }

        .OmoSvb:disabled {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .OmoSvb:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .OmoSvb .VfPpkd-Q0XOV {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .OmoSvb:not(:disabled) .VfPpkd-Q0XOV {
            color: #1a73e8
        }

        .OmoSvb:not(:disabled):hover .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .OmoSvb:not(:disabled):focus .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .OmoSvb:not(:disabled):active .VfPpkd-Q0XOV {
            color: #174ea6
        }

        .OmoSvb .VfPpkd-wbSZ0b::before,
        .OmoSvb .VfPpkd-wbSZ0b::after {
            background-color: #1a73e8
        }

        .OmoSvb:hover .VfPpkd-wbSZ0b::before,
        .OmoSvb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-wbSZ0b::before {
            opacity: .04
        }

        .OmoSvb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wbSZ0b::before,
        .OmoSvb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wbSZ0b::before {
            transition-duration: 75ms;
            opacity: .12
        }

        .OmoSvb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-wbSZ0b::after {
            transition: opacity 150ms linear
        }

        .OmoSvb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-wbSZ0b::after {
            transition-duration: 75ms;
            opacity: .1
        }

        .OmoSvb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-fab-pressed-state-layer-opacity, 0.1)
        }

        .OmoSvb:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) {
            border-radius: 28px 28px 28px 28px
        }

        .OmoSvb:not(.VfPpkd-BIzmGd-OWXEXe-X9G3K) .VfPpkd-wbSZ0b {
            border-radius: 28px 28px 28px 28px
        }

        .GeXjpd:not(:disabled) {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .GeXjpd:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        .GeXjpd:not(:disabled):hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .GeXjpd:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .GeXjpd:not(:disabled):focus {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .GeXjpd:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .GeXjpd:not(:disabled):active {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .GeXjpd:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .GeXjpd:disabled {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .GeXjpd:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        .zI3eKe:not(:disabled) {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .zI3eKe:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        .zI3eKe:not(:disabled):hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .zI3eKe:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .zI3eKe:not(:disabled):focus {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .zI3eKe:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .zI3eKe:not(:disabled):active {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .zI3eKe:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .zI3eKe:disabled {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .zI3eKe:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        .pgdcAc:not(:disabled) {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .pgdcAc:not(:disabled) .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        .pgdcAc:not(:disabled):hover {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .pgdcAc:not(:disabled):hover .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .pgdcAc:not(:disabled):focus {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15)
        }

        .pgdcAc:not(:disabled):focus .VfPpkd-BFbNVe-bF1uUb {
            opacity: .08;
            background-color: transparent
        }

        .pgdcAc:not(:disabled):active {
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, .3), 0 4px 8px 3px rgba(60, 64, 67, .15)
        }

        .pgdcAc:not(:disabled):active .VfPpkd-BFbNVe-bF1uUb {
            opacity: .11;
            background-color: transparent
        }

        .pgdcAc:disabled {
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15)
        }

        .pgdcAc:disabled .VfPpkd-BFbNVe-bF1uUb {
            opacity: .05;
            background-color: transparent
        }

        [dir=rtl] .PcY7Ff .VfPpkd-Q0XOV,
        .PcY7Ff .VfPpkd-Q0XOV[dir=rtl] {
            transform: scaleX(-1)
        }

        .Hkd4je {
            height: 40px;
            width: 40px
        }

        a,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote {
            border: 0;
            color: inherit;
            font: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        body {
            border: 0;
            color: inherit;
            font: inherit;
            padding: 0;
            vertical-align: baseline
        }

        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup {
            border: 0;
            color: inherit;
            font: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        html {
            border: 0;
            color: inherit;
            font: inherit;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object {
            border: 0;
            color: inherit;
            font: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        ol {
            color: inherit;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline
        }

        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video {
            border: 0;
            color: inherit;
            font: inherit;
            font-size: 100%;
            margin: 0;
            padding: 0;
            vertical-align: baseline
        }

        html {
            -webkit-font-smoothing: antialiased;
            font-family: "Google Sans", Roboto, Helvetica, Arial, sans-serif;
            font-size: 16px;
            line-height: 1;
            height: 100%;
            position: static;
            z-index: 0
        }

        body {
            background-color: white;
            font-family: inherit;
            font-size: 14px;
            font-weight: normal;
            height: 100%;
            line-height: 1;
            margin: 0;
            position: static;
            z-index: 0
        }

        body.P9KVBf {
            background-color: #202124
        }

        body.k8Lt0 {
            min-width: auto
        }

        button {
            background: transparent;
            border: 0;
            box-shadow: none;
            color: inherit;
            min-height: 40px;
            min-width: 40px;
            text-transform: none
        }

        * {
            box-sizing: border-box
        }

        body ::-webkit-scrollbar {
            height: 0;
            width: 0
        }

        ::-webkit-scrollbar-thumb {
            background: none
        }

        ::-webkit-scrollbar-track {
            background-color: inherit
        }

        a:visited {
            color: initial
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block
        }

        ol {
            border: 0;
            list-style: none;
            margin: 0;
            padding: 0
        }

        ul {
            list-style: none
        }

        blockquote,
        q {
            quotes: none
        }

        blockquote:before,
        blockquote:after {
            content: none
        }

        q:before,
        q:after {
            content: none
        }

        table {
            border-collapse: collapse
        }

        input,
        textarea {
            background: none;
            border: 0;
            display: inline-block;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            outline: none;
            margin: 0;
            padding: 0;
            vertical-align: middle;
            white-space: normal
        }

        @keyframes quantumWizBoxInkSpread {
            0% {
                transform: translate(-50%, -50%) scale(0.2)
            }
            to {
                transform: translate(-50%, -50%) scale(2.2)
            }
        }

        @keyframes quantumWizIconFocusPulse {
            0% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0
            }
            to {
                transform: translate(-50%, -50%) scale(2);
                opacity: 1
            }
        }

        @keyframes quantumWizRadialInkSpread {
            0% {
                transform: scale(1.5);
                opacity: 0
            }
            to {
                transform: scale(2.5);
                opacity: 1
            }
        }

        @keyframes quantumWizRadialInkFocusPulse {
            0% {
                transform: scale(2);
                opacity: 0
            }
            to {
                transform: scale(2.5);
                opacity: 1
            }
        }

        .DPvwYc {
            font-family: "Material Icons Extended";
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-rendering: optimizeLegibility;
            text-transform: none;
            display: inline-block;
            word-wrap: normal;
            direction: ltr;
            font-feature-settings: "liga" 1;
            -webkit-font-smoothing: antialiased
        }

        html[dir="rtl"] .sm8sCf {
            transform: scaleX(-1);
            filter: FlipH
        }

        .JPdR6b {
            transform: translateZ(0);
            transition: max-width 0.2s cubic-bezier(0, 0, 0.2, 1), max-height 0.2s cubic-bezier(0, 0, 0.2, 1), opacity 0.1s linear;
            background: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0px 8px 10px 1px rgba(0, 0, 0, .14), 0px 3px 14px 2px rgba(0, 0, 0, .12), 0px 5px 5px -3px rgba(0, 0, 0, .2);
            box-sizing: border-box;
            max-height: 100%;
            max-width: 100%;
            opacity: 1;
            outline: 1px solid transparent;
            z-index: 2000
        }

        .XvhY1d {
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch
        }

        .JAPqpe {
            float: left;
            padding: 16px 0
        }

        .JPdR6b.qjTEB {
            transition: left 0.2s cubic-bezier(0, 0, 0.2, 1), max-width 0.2s cubic-bezier(0, 0, 0.2, 1), max-height 0.2s cubic-bezier(0, 0, 0.2, 1), opacity 0.05s linear, top 0.2s cubic-bezier(0, 0, 0.2, 1)
        }

        .JPdR6b.jVwmLb {
            max-height: 56px;
            opacity: 0
        }

        .JPdR6b.CAwICe {
            overflow: hidden
        }

        .JPdR6b.oXxKqf {
            transition: none
        }

        .z80M1 {
            color: #222;
            cursor: pointer;
            display: block;
            outline: none;
            overflow: hidden;
            padding: 0 24px;
            position: relative
        }

        .uyYuVb {
            display: flex;
            font-size: 14px;
            font-weight: 400;
            line-height: 40px;
            height: 40px;
            position: relative;
            white-space: nowrap
        }

        .jO7h3c {
            box-flex: 1;
            flex-grow: 1;
            min-width: 0
        }

        .JPdR6b.e5Emjc .z80M1 {
            padding-left: 64px
        }

        .JPdR6b.CblTmf .z80M1 {
            padding-right: 48px
        }

        .PCdOIb {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-repeat: no-repeat;
            height: 40px;
            left: 24px;
            opacity: 0.54;
            position: absolute
        }

        .z80M1.RDPZE .PCdOIb {
            opacity: 0.26
        }

        .z80M1.FwR7Pc {
            outline: 1px solid transparent;
            background-color: #eee
        }

        .z80M1.RDPZE {
            color: #b8b8b8;
            cursor: default
        }

        .z80M1.N2RpBe::before {
            transform: rotate(45deg);
            transform-origin: left;
            content: "\0000a0";
            display: block;
            border-right: 2px solid #222;
            border-bottom: 2px solid #222;
            height: 16px;
            left: 24px;
            opacity: 0.54;
            position: absolute;
            top: 13%;
            width: 7px;
            z-index: 0
        }

        .JPdR6b.CblTmf .z80M1.N2RpBe::before {
            left: auto;
            right: 16px
        }

        .z80M1.RDPZE::before {
            border-color: #b8b8b8;
            opacity: 1
        }

        .aBBjbd {
            pointer-events: none;
            position: absolute
        }

        .z80M1.qs41qe>.aBBjbd {
            animation: quantumWizBoxInkSpread 0.3s ease-out;
            animation-fill-mode: forwards;
            background-image: -webkit-radial-gradient(circle farthest-side, #bdbdbd, #bdbdbd 80%, rgba(189, 189, 189, 0) 100%);
            background-image: radial-gradient(circle farthest-side, #bdbdbd, #bdbdbd 80%, rgba(189, 189, 189, 0) 100%);
            background-size: cover;
            opacity: 1;
            top: 0;
            left: 0
        }

        .J0XlZe {
            color: inherit;
            line-height: 40px;
            padding: 0 6px 0 1em
        }

        .a9caSc {
            color: inherit;
            direction: ltr;
            padding: 0 6px 0 1em
        }

        .kCtYwe {
            border-top: 1px solid rgba(0, 0, 0, .12);
            margin: 7px 0
        }

        .B2l7lc {
            border-left: 1px solid rgba(0, 0, 0, .12);
            display: inline-block;
            height: 48px
        }

        @media screen and (max-width:840px) {
            .JAPqpe {
                padding: 8px 0
            }
            .z80M1 {
                padding: 0 16px
            }
            .JPdR6b.e5Emjc .z80M1 {
                padding-left: 48px
            }
            .PCdOIb {
                left: 12px
            }
        }

        .bewvKb {
            position: relative
        }

        .aoJE7e {
            display: flex;
            overflow-x: scroll;
            scroll-snap-type: x mandatory
        }

        .aoJE7e::-webkit-scrollbar {
            display: none
        }

        .lZ2Ckc {
            align-items: flex-end
        }

        .ULeU3b {
            flex-shrink: 0;
            scroll-snap-align: start
        }

        .hWUu9 {
            display: none;
            position: absolute;
            top: calc(50% - 28px)
        }

        .DUDfsf .hWUu9 {
            top: calc(50% - 16px)
        }

        .bewvKb:hover>.hWUu9,
        .bewvKb:active>.hWUu9,
        .bewvKb:focus-within>.hWUu9,
        .COriJb {
            display: block
        }

        .dwYR5 {
            left: -28px
        }

        .n1lOjd {
            right: -28px
        }

        .DUDfsf .dwYR5 {
            left: 0
        }

        .DUDfsf .n1lOjd {
            right: 0
        }

        .B1yxdb {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .B1yxdb:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .B1yxdb {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .B1yxdb:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .DpB3re .VfPpkd-wbSZ0b::before,
        .DpB3re .VfPpkd-wbSZ0b::after {
            background-color: rgb(60, 64, 67)
        }

        .ZfaqNc {
            height: 30px;
            min-height: 30px;
            min-width: 30px;
            width: 30px
        }

        @media (any-pointer:none) {
            .hWUu9 {
                display: none
            }
        }

        @media (any-pointer:coarse) {
            .bewvKb:hover>.hWUu9,
            .bewvKb:active>.hWUu9,
            .bewvKb:focus-within>.hWUu9,
            .COriJb {
                display: none
            }
        }

        @media screen and (any-pointer:coarse) and (min-width:1280px) {
            .bewvKb:hover>.hWUu9,
            .bewvKb:active>.hWUu9,
            .bewvKb:focus-within>.hWUu9,
            .COriJb {
                display: block
            }
        }

        c-wiz {
            contain: style
        }

        c-wiz>c-data {
            display: none
        }

        c-wiz.rETSD {
            contain: none
        }

        c-wiz.Ubi8Z {
            contain: layout style
        }

        .kUFljf {
            color: #333;
            font-size: 64px;
            font-weight: 100;
            line-height: 64px
        }

        .o9hhOd,
        .I26one,
        .iXRFPc {
            display: inline-block
        }

        .FUY6v:hover {
            cursor: pointer
        }

        .Bp7T9b,
        .deXnLd,
        .F7XJmb {
            display: inline-block;
            text-align: left
        }

        .Bp7T9b {
            height: 48px;
            width: 48px
        }

        .deXnLd {
            height: 16px;
            width: 16px
        }

        .F7XJmb {
            height: 12px;
            width: 12px
        }

        [dir=rtl] .xdPrrd {
            transform: scaleX(-1)
        }

        .Wi7KIe {
            fill: rgb(241, 243, 244);
            stop-color: rgb(241, 243, 244)
        }

        .P9KVBf .Wi7KIe {
            fill: rgb(60, 64, 67);
            stop-color: rgb(60, 64, 67)
        }

        .BHMmbe {
            color: #333;
            font-size: 64px;
            font-weight: 100;
            line-height: 64px
        }

        .T75of {
            background-size: contain
        }

        .LkLjZd,
        .LkLjZd:visited {
            border-radius: 2px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
            box-sizing: border-box;
            transition: all .2s;
            user-select: none;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .17);
            color: #737373;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            height: 36px;
            line-height: 34px;
            min-width: 40px;
            padding: 0 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            vertical-align: middle
        }

        .OzU4dc {
            font-size: 12px;
            font-weight: 400;
            height: 20px;
            line-height: 18px;
            padding: 0 8px
        }

        .nMZKrb {
            height: 30px;
            line-height: 28px;
            padding: 0 13px
        }

        .HPiPcc {
            font-size: 14px;
            height: 36px;
            line-height: 34px;
            padding: 0 20px
        }

        .yb6DRb .vkAqzf {
            font-size: 16px;
            height: 48px;
            line-height: 46px
        }

        .LkLjZd:hover {
            box-shadow: 0 1px 0 0 rgba(0, 0, 0, .27);
            cursor: pointer
        }

        .LkLjZd:active,
        .Ak314d {
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .27), inset 0 2px 0 #d6d6d6;
            background-color: #e5e5e5
        }

        .dhP5yc {
            background: #f5f5f5
        }

        .U8Ww7d,
        .VkbTne,
        .CqJCxd,
        .t2Y9uc,
        .mgVrBf,
        .AOhnBb,
        .XNBNjd,
        .n12wA,
        .U8Ww7d:visited,
        .VkbTne:visited,
        .CqJCxd:visited,
        .t2Y9uc:visited,
        .mgVrBf:visited,
        .AOhnBb:visited,
        .XNBNjd:visited,
        .n12wA:visited {
            border: 1px;
            color: #fff;
            line-height: 36px
        }

        .xjAeve,
        .xjAeve:visited,
        .IfEcue,
        .IfEcue:visited {
            border: 1px;
            color: #fff;
            line-height: 36px
        }

        .U8Ww7d.OzU4dc,
        .VkbTne.OzU4dc,
        .CqJCxd.OzU4dc,
        .t2Y9uc.OzU4dc,
        .mgVrBf.OzU4dc,
        .AOhnBb.OzU4dc,
        .XNBNjd.OzU4dc,
        .n12wA.OzU4dc,
        .xjAeve.OzU4dc,
        .IfEcue.OzU4dc {
            line-height: 20px
        }

        .U8Ww7d.nMZKrb,
        .VkbTne.nMZKrb,
        .CqJCxd.nMZKrb,
        .t2Y9uc.nMZKrb,
        .mgVrBf.nMZKrb,
        .AOhnBb.nMZKrb,
        .XNBNjd.nMZKrb,
        .n12wA.nMZKrb,
        .xjAeve.nMZKrb,
        .IfEcue.nMZKrb {
            line-height: 30px
        }

        .U8Ww7d.HPiPcc,
        .VkbTne.HPiPcc,
        .CqJCxd.HPiPcc,
        .t2Y9uc.HPiPcc,
        .mgVrBf.HPiPcc,
        .AOhnBb.HPiPcc,
        .XNBNjd.HPiPcc,
        .n12wA.HPiPcc,
        .xjAeve.HPiPcc,
        .IfEcue.HPiPcc {
            line-height: 36px
        }

        .U8Ww7d:hover,
        .VkbTne:hover,
        .CqJCxd:hover,
        .t2Y9uc:hover,
        .mgVrBf:hover,
        .AOhnBb:hover,
        .XNBNjd:hover,
        .n12wA:hover {
            box-shadow: inset 0 -2px 0 rgba(0, 0, 0, .27)
        }

        .xjAeve:hover,
        .IfEcue:hover {
            box-shadow: inset 0 -2px 0 rgba(0, 0, 0, .27)
        }

        .U8Ww7d:active,
        .VkbTne:active,
        .CqJCxd:active,
        .t2Y9uc:active,
        .mgVrBf:active,
        .AOhnBb:active,
        .XNBNjd:active,
        .n12wA:active {
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .27)
        }

        .xjAeve:active,
        .IfEcue:active {
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .27)
        }

        .U8Ww7d,
        .U8Ww7d:visited {
            background-color: #689f38
        }

        .drrice .IfEcue,
        .drrice .IfEcue:visited,
        .U8Ww7d.xjAeve,
        .U8Ww7d.xjAeve:visited {
            background-color: #689f38
        }

        .U8Ww7d:hover {
            background-color: #8bc34a
        }

        .drrice .IfEcue:hover,
        .U8Ww7d.xjAeve:hover {
            background-color: #8bc34a
        }

        .U8Ww7d:active {
            background-color: #33691e
        }

        .drrice .IfEcue:active,
        .U8Ww7d.xjAeve:active {
            background-color: #33691e
        }

        .VkbTne,
        .VkbTne:visited {
            background-color: #658092
        }

        .ZCcKKd .IfEcue,
        .ZCcKKd .IfEcue:visited,
        .VkbTne.xjAeve,
        .VkbTne.xjAeve:visited {
            background-color: #658092
        }

        .VkbTne:hover {
            background-color: #6f95ae
        }

        .ZCcKKd .IfEcue:hover,
        .VkbTne.xjAeve:hover {
            background-color: #6f95ae
        }

        .VkbTne:active {
            background-color: #435766
        }

        .ZCcKKd .IfEcue:active,
        .VkbTne.xjAeve:active {
            background-color: #435766
        }

        .CqJCxd,
        .CqJCxd:visited {
            background-color: #607d8b
        }

        .CqJCxd.xjAeve,
        .CqJCxd.xjAeve:visited {
            background-color: #607d8b
        }

        .CqJCxd:hover {
            background-color: #90a4ae
        }

        .CqJCxd.xjAeve:hover {
            background-color: #90a4ae
        }

        .CqJCxd:active {
            background-color: #90a4ae
        }

        .CqJCxd.xjAeve:active {
            background-color: #90a4ae
        }

        .t2Y9uc,
        .t2Y9uc:visited {
            background-color: #ed3b3b
        }

        .q9QOMe .IfEcue,
        .q9QOMe .IfEcue:visited,
        .t2Y9uc.xjAeve,
        .t2Y9uc.xjAeve:visited {
            background-color: #ed3b3b
        }

        .q9QOMe .cKScvc,
        .q9QOMe .cKScvc:visited {
            color: #a52714
        }

        .t2Y9uc:hover {
            background-color: #ff4d4d
        }

        .q9QOMe .IfEcue:hover,
        .t2Y9uc.xjAeve:hover {
            background-color: #ff4d4d
        }

        .t2Y9uc:active {
            background-color: #a52714
        }

        .q9QOMe .IfEcue:active,
        .t2Y9uc.xjAeve:active {
            background-color: #a52714
        }

        .K1b9Kc .IfEcue,
        .K1b9Kc .IfEcue:visited,
        .xI7Ale.xjAeve,
        .xI7Ale.xjAeve:visited {
            background-color: #039be5
        }

        .K1b9Kc .cKScvc,
        .K1b9Kc .cKScvc:visited {
            color: #01579b
        }

        .K1b9Kc .IfEcue:hover {
            background-color: #4fc3f7
        }

        .K1b9Kc .IfEcue:active {
            background-color: #01579b
        }

        .mgVrBf,
        .mgVrBf:visited {
            background-color: #737373
        }

        .mgVrBf.xjAeve,
        .mgVrBf.xjAeve:visited {
            background-color: #737373
        }

        .mgVrBf:hover {
            background-color: #8d8d8d
        }

        .mgVrBf.xjAeve:hover {
            background-color: #8d8d8d
        }

        .mgVrBf:active {
            background-color: #555
        }

        .AOhnBb,
        .AOhnBb:visited,
        .n12wA,
        .n12wA:visited {
            background-color: #0097a7
        }

        .AOhnBb:hover,
        .n12wA:hover {
            background-color: #00acc1
        }

        .AOhnBb:active,
        .n12wA:active {
            background-color: #00838f
        }

        .XNBNjd {
            color: #00838f
        }

        .XNBNjd,
        .XNBNjd:visited {
            background-color: transparent
        }

        .XNBNjd:hover,
        .XNBNjd:active {
            background-color: rgba(0, 131, 143, .122)
        }

        .XNBNjd,
        .XNBNjd:active,
        .XNBNjd:hover {
            box-shadow: none;
            border: none
        }

        .dhP5yc:focus {
            border: 1px solid rgba(0, 0, 0, .27)
        }

        .LkLjZd:focus {
            box-shadow: none;
            outline: 4px solid #c7dcfc
        }

        .ScJHi {
            border-radius: 4px
        }

        .hf6Ybc,
        .hf6Ybc:hover,
        .hf6Ybc:active,
        .hf6Ybc:focus,
        .hf6Ybc:visited {
            box-shadow: none;
            opacity: .4;
            cursor: default;
            outline: none
        }

        .MjT6xe {
            padding: 0 16px 0 16px;
            border-radius: 8px
        }

        .MjT6xe .VfPpkd-Jh9lGc {
            border-radius: 8px
        }

        .gw1rab {
            min-width: 96px
        }

        .brKGGd {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            height: 36px;
            margin: 6px 0;
            min-height: 36px;
            min-width: 160px;
            padding: 8px 16px
        }

        .HNnJkb {
            min-width: 160px
        }

        .sOCCfd:not(:disabled) {
            color: #fff
        }

        .sOCCfd:disabled {
            color: rgb(154, 160, 166)
        }

        .sOCCfd:not(:disabled) .VfPpkd-kBDsod {
            color: #fff
        }

        .sOCCfd:disabled .VfPpkd-kBDsod {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .sOCCfd:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .sOCCfd:disabled {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .sOCCfd:not(:disabled) .VfPpkd-kBDsod {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .sOCCfd:disabled .VfPpkd-kBDsod {
            color: rgb(95, 99, 104)
        }

        .ymHpFd:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .ymHpFd:not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .u4ICaf .BhQfub:not(:disabled) {
            background-color: #01875f
        }

        .u4ICaf .BhQfub:not(:disabled):hover {
            background-color: #056449
        }

        .u4ICaf .BhQfub:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .BhQfub:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #056449
        }

        .u4ICaf .BhQfub:not(:disabled):not(:disabled):active {
            background-color: #056449
        }

        .P9KVBf .u4ICaf .BhQfub:not(:disabled) {
            background-color: #e5be1a
        }

        .P9KVBf .u4ICaf .BhQfub:not(:disabled):hover {
            background-color: #00b380
        }

        .P9KVBf .u4ICaf .BhQfub:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .BhQfub:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #00b380
        }

        .P9KVBf .u4ICaf .BhQfub:not(:disabled):not(:disabled):active {
            background-color: #00b380
        }

        .u4ICaf .RZqa7d:not(:disabled) {
            background-color: #0179ca
        }

        .u4ICaf .RZqa7d:not(:disabled):hover {
            background-color: #035282
        }

        .u4ICaf .RZqa7d:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .RZqa7d:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #035282
        }

        .u4ICaf .RZqa7d:not(:disabled):not(:disabled):active {
            background-color: #035282
        }

        .P9KVBf .u4ICaf .RZqa7d:not(:disabled) {
            background-color: #50b4f4
        }

        .P9KVBf .u4ICaf .RZqa7d:not(:disabled):hover {
            background-color: #50b4f4
        }

        .P9KVBf .u4ICaf .RZqa7d:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .RZqa7d:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #50b4f4
        }

        .P9KVBf .u4ICaf .RZqa7d:not(:disabled):not(:disabled):active {
            background-color: #50b4f4
        }

        .u4ICaf .N9a7de:not(:disabled) {
            background-color: #c71c56
        }

        .u4ICaf .N9a7de:not(:disabled):hover {
            background-color: #8a0d37
        }

        .u4ICaf .N9a7de:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .N9a7de:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #8a0d37
        }

        .u4ICaf .N9a7de:not(:disabled):not(:disabled):active {
            background-color: #8a0d37
        }

        .P9KVBf .u4ICaf .N9a7de:not(:disabled) {
            background-color: #ff3369
        }

        .P9KVBf .u4ICaf .N9a7de:not(:disabled):hover {
            background-color: #ff708c
        }

        .P9KVBf .u4ICaf .N9a7de:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .N9a7de:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            background-color: #ff708c
        }

        .P9KVBf .u4ICaf .N9a7de:not(:disabled):not(:disabled):active {
            background-color: #ff708c
        }

        .u4ICaf .aLey0c:not(:disabled) {
            color: #01875f
        }

        .u4ICaf .aLey0c:not(:disabled):hover {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled):not(:disabled):active {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled) .VfPpkd-kBDsod {
            color: #01875f
        }

        .u4ICaf .aLey0c:not(:disabled):hover .VfPpkd-kBDsod {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #056449
        }

        .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #056449
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled) {
            color: #00a173
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled):hover {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled):not(:disabled):active {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled) .VfPpkd-kBDsod {
            color: #00a173
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled):hover .VfPpkd-kBDsod {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .P9KVBf .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #00b380
        }

        .P9KVBf .u4ICaf .aLey0c:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .aLey0c:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #00b380
        }

        .u4ICaf .s7d6Ne:not(:disabled) {
            color: #0179ca
        }

        .u4ICaf .s7d6Ne:not(:disabled):hover {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled):not(:disabled):active {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled) .VfPpkd-kBDsod {
            color: #0179ca
        }

        .u4ICaf .s7d6Ne:not(:disabled):hover .VfPpkd-kBDsod {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #035282
        }

        .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #035282
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled) {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):hover {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):not(:disabled):active {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled) .VfPpkd-kBDsod {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):hover .VfPpkd-kBDsod {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #50b4f4
        }

        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .s7d6Ne:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #50b4f4
        }

        .u4ICaf .x0t5t:not(:disabled) {
            color: #c71c56
        }

        .u4ICaf .x0t5t:not(:disabled):hover {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled):not(:disabled):active {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled) .VfPpkd-kBDsod {
            color: #c71c56
        }

        .u4ICaf .x0t5t:not(:disabled):hover .VfPpkd-kBDsod {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #8a0d37
        }

        .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #8a0d37
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled) {
            color: #ff3369
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled):hover {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled):not(:disabled):active {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled) .VfPpkd-kBDsod {
            color: #ff3369
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled):hover .VfPpkd-kBDsod {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-kBDsod,
        .P9KVBf .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-kBDsod {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled):not(:disabled):active .VfPpkd-kBDsod {
            color: #ff708c
        }

        .P9KVBf .u4ICaf .x0t5t:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .u4ICaf .x0t5t:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: #ff708c
        }

        @media screen and (min-width:1280px) {
            .brKGGd {
                font-family: "Google Sans", Roboto, Arial, sans-serif;
                line-height: 1.5rem;
                font-size: 1rem;
                letter-spacing: .00625em;
                font-weight: 500;
                height: 44px;
                margin: 2px 0;
                min-height: 44px;
                min-width: 200px;
                padding: 10px 16px
            }
        }

        .NMm5M {
            fill: currentColor;
            flex-shrink: 0
        }

        html[dir=rtl] .hhikbc {
            transform: scaleX(-1)
        }

        @media (max-height:752px) {
            .HQdjr .VfPpkd-P5QLlc {
                max-height: calc(100% - 32px)
            }
        }

        @media (min-height:752px) {
            .HQdjr .VfPpkd-P5QLlc {
                max-height: 720px
            }
        }

        @media (-ms-high-contrast:active) and (min-height:752px),
        (-ms-high-contrast:none) and (min-height:752px) {
            .HQdjr .VfPpkd-wzTsW {
                align-items: stretch;
                height: auto
            }
        }

        @media (max-width:752px) {
            .HQdjr .VfPpkd-P5QLlc {
                max-width: calc(100vw - 32px)
            }
        }

        @media (min-width:752px) {
            .HQdjr .VfPpkd-P5QLlc {
                max-width: 720px
            }
        }

        .HQdjr .VfPpkd-cnG4Wd {
            padding: 0 0 0 0
        }

        .jgIq1 {
            display: flex;
            flex-direction: column;
            height: calc(100vh - 32px);
            max-height: 720px;
            max-width: 720px;
            width: calc(100vw - 32px)
        }

        .t8iiQe {
            display: flex;
            flex-shrink: 0;
            padding: 24px 32px
        }

        .VTG6db {
            border-color: rgb(232, 234, 237);
            border-top: 1px solid
        }

        .VTG6db:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .VTG6db {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .VTG6db:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .GmeDHf {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
            position: relative
        }

        .GmeDHf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .P9KVBf .GmeDHf::before {
            background-color: rgb(232, 234, 237);
            content: "";
            height: 100%;
            left: 0;
            opacity: .08;
            position: absolute;
            top: 0;
            width: 100%
        }

        .a8Z62d {
            margin: -12px -12px 0 0;
            min-width: 48px
        }

        .fysCi {
            flex-grow: 1;
            margin: 0 32px;
            overflow: scroll;
            padding-bottom: 28px
        }

        @media (max-height:fit-content48px) {
            .d91Bpd .VfPpkd-P5QLlc {
                max-height: calc(100% - 48px)
            }
        }

        @media (min-height:fit-content48px) {
            .d91Bpd .VfPpkd-P5QLlc {
                max-height: fit-content
            }
        }

        @media (-ms-high-contrast:active) and (min-height:fit-content48px),
        (-ms-high-contrast:none) and (min-height:fit-content48px) {
            .d91Bpd .VfPpkd-wzTsW {
                align-items: stretch;
                height: auto
            }
        }

        @media (max-width:528px) {
            .d91Bpd .VfPpkd-P5QLlc {
                max-width: calc(100vw - 48px)
            }
        }

        @media (min-width:528px) {
            .d91Bpd .VfPpkd-P5QLlc {
                max-width: 480px
            }
        }

        .d91Bpd .VfPpkd-P5QLlc {
            min-width: calc(100vw - 32px)
        }

        .d91Bpd .VfPpkd-cnG4Wd {
            padding: 24px 24px 18px 24px
        }

        .VQi0fb {
            align-items: center;
            display: flex;
            justify-content: flex-end
        }

        @media screen and (min-width:512px) {
            .d91Bpd .VfPpkd-P5QLlc {
                min-width: 480px
            }
        }

        @media screen and (min-width:600px) {
            .jgIq1 {
                width: calc(100vw - 96px)
            }
        }

        .YjpPef {
            display: inline-block
        }

        .drrice .hrTbp,
        .drrice .hrTbp:visited {
            color: #33691e
        }

        .drrice .hrTbp.TCobc,
        .drrice .hrTbp.TCobc:visited {
            color: #558b2f
        }

        .drrice .JHTxhe a,
        .drrice .JHTxhe a:visited {
            color: #33691e
        }

        .K1b9Kc .hrTbp,
        .K1b9Kc .hrTbp:visited {
            color: #01579b
        }

        .K1b9Kc .JHTxhe a,
        .K1b9Kc .JHTxhe a:visited {
            color: #01579b
        }

        .q9QOMe .hrTbp,
        .q9QOMe .hrTbp:visited {
            color: #a52714
        }

        .q9QOMe .JHTxhe a,
        .q9QOMe .JHTxhe a:visited {
            color: #a52714
        }

        .fny74c .hrTbp,
        .fny74c .hrTbp:visited {
            color: #00838f
        }

        .fny74c .JHTxhe a,
        .fny74c .JHTxhe a:visited {
            color: #00838f
        }

        .wkJZwc {
            height: 48px;
            min-width: 964px;
            white-space: nowrap;
            width: 100%
        }

        .sVEEmc {
            width: 100%
        }

        .wkJZwc.NnzYY .sVEEmc {
            position: fixed;
            top: 0;
            z-index: 940
        }

        .t5eBue {
            box-shadow: 0 1px 0 rgba(0, 0, 0, .05);
            background: #fff;
            height: 48px;
            position: relative;
            top: 0;
            width: 100%
        }

        .NnzYY .t5eBue {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1)
        }

        .mZr3Me {
            display: inline-block;
            vertical-align: top
        }

        .t5eBue>.mZr3Me:first-child {
            margin-left: 238px
        }

        .GzbC1b {
            color: #737373;
            font-size: 24px;
            padding: 8px 14px 0 14px
        }

        .JRhuKe,
        .jGu02 {
            -webkit-font-smoothing: antialiased;
            color: #737373;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            height: 48px;
            line-height: 48px;
            text-decoration: none;
            vertical-align: top
        }

        .qAAUy {
            -webkit-user-select: none;
            padding: 0 14px
        }

        .jGu02.qs41qe {
            border-bottom-style: solid;
            border-bottom-width: 3px;
            color: #333;
            font-weight: 500;
            height: 45px
        }

        .jGu02 .uJjCzb,
        .jGu02 .uJjCzb:visited {
            box-sizing: border-box;
            color: #737373;
            display: block;
            font-weight: 400;
            height: 100%;
            padding: 0 14px;
            text-align: left;
            width: 100%
        }

        .jGu02.qs41qe .uJjCzb {
            color: #333;
            font-weight: 500
        }

        .JvjCjf {
            background: #d6d6d6;
            display: inline-block;
            height: 30px;
            margin: 9px 5px;
            padding: 0;
            width: 1px
        }

        .wvAFH {
            display: inline-block;
            position: relative;
            vertical-align: top
        }

        .JRhuKe:hover,
        .jGu02:hover {
            background-color: #e5e5e5;
            background-color: rgba(0, 0, 0, .05)
        }

        .kgGUm {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAAaElEQVR4AWP4jxfSXjqXrygzVwYhmClYmJUlAZcuqiz+X/w4VxkimS1cdKH4f9EcuHShbvEHiAK45K9CNyS7880hCvKMIZLFATC7URX8hEkipBEKvgMV/IVKYnqsMKL4ZVElHUMNLwQAZCvi2TxdGw0AAAAASUVORK5CYII=);
            background-position-y: center;
            background-repeat: no-repeat;
            display: inline-block;
            height: 15px;
            margin: 17px 3px 1px 3px;
            vertical-align: top;
            width: 15px
        }

        .LNKfBf {
            border-radius: 3px;
            box-shadow: 0 2px 40px rgba(0, 0, 0, .4);
            background: #fff;
            border: 1px solid #d6d6d6;
            max-height: 500px;
            overflow-x: hidden;
            overflow-y: auto;
            position: absolute;
            top: 0;
            white-space: nowrap;
            z-index: 1100
        }

        .zxErU {
            margin: -44px 0 0 -40px;
            padding: 40px;
            position: absolute
        }

        .zxErU>.LNKfBf:first-child {
            opacity: 1;
            filter: alpha(opacity=100);
            left: 0;
            position: relative;
            top: 0
        }

        .t5eBue .mZr3Me.KKjvXb .TwyJFf {
            font-size: 24px;
            font-weight: 300
        }

        .t5eBue .hAJqZ.KKjvXb,
        .t5eBue .r2Osbf.KKjvXb {
            font-weight: 500
        }

        .ovVTif .jGu02.qs41qe {
            color: #689f38
        }

        .t5eBue.ovVTif .hAJqZ.KKjvXb,
        .t5eBue.ovVTif .r2Osbf.KKjvXb {
            color: #8d9d29
        }

        .wWRLCd .jGu02.qs41qe {
            color: #ed3b3b
        }

        .t5eBue.wWRLCd .hAJqZ.KKjvXb,
        .t5eBue.wWRLCd .r2Osbf.KKjvXb {
            color: #a84137
        }

        .LW9aSc .jGu02.qs41qe {
            color: #039be5
        }

        .t5eBue.LW9aSc .hAJqZ.KKjvXb,
        .t5eBue.LW9aSc .r2Osbf.KKjvXb {
            color: #1380b5
        }

        .TEOqAc {
            display: inline-block;
            font-size: 13px;
            font-weight: 400;
            padding: 6px 0;
            vertical-align: top;
            width: 200px
        }

        .hAJqZ,
        .zyz7Fb,
        .r2Osbf {
            display: block;
            overflow: hidden;
            padding: 6px 14px;
            text-overflow: ellipsis
        }

        .zzpvMc:hover,
        .GL7Kod:hover,
        .KZnDLd:hover {
            background: #f5f5f5
        }

        .zzpvMc:active,
        .GL7Kod:active,
        .KZnDLd:active {
            background: #e5e5e5
        }

        .YcEAid {
            border-bottom: 1px solid #d6d6d6;
            width: 100%
        }

        .mZr3Me .pHFsbd {
            background-size: contain;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAQAAAADHm0dAAAAw0lEQVR4Ab3SPU6CQRAG4Ad6iH6egZIL6GkoaMQriJ3BM/hzAs6DDSQWxgoLDYV/+dbEbCbTECIFz3STdzeT2XUgI+WvRnZ6qNF7W3QNdHBmVaNLp+gY6MpMFAtzrRLVmlsoJpLGOkc85yPWGmEa7W8zDU7c+InuVBha1ua1YBZTDyV974rWEaHnQ/GmD9mX4gXZk+IT9rj1X7NeyRvooSdv4FJovCpRGysbea/Hkostr/WoON/7Dwh3NXprp3GNjh3EL96FjlMUNsVTAAAAAElFTkSuQmCC);
            height: 21px;
            width: 21px;
            margin: 0 17px;
            margin-bottom: 0;
            margin-left: 17px;
            margin-right: 17px;
            margin-top: 3.5px
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .mZr3Me .pHFsbd {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAQAAACQTsNJAAABH0lEQVR4AbWWUZHEIAyGPwmRgIRKQAISkLASkFAJSFgJlbASkIAD7mFvmTJM2GszN3kiYb7yJ38HaGpwDMtD36kX/JTy1yFpSqXrkH1K7RchRMqULMQlhA2P9G7MgA76dAbBs50gXX/GzzJmWXjyuU80cDRDuDfkMEGOBgSaMcL6HJmAIATy6iyo5RfuvMTxUj9FVBAyuUEUTARhZy64OaXMcUfexUAdD6gafBRfCd1s05iDCgljS0fblz/+9NuwLCvIpkL8CmKXg1BuNbYgvxA89faIK74Bzmw2B9Fs+wj5yw/ocIQvu/A0Y3gaPE2IZ4MGQr2NqMjHJ48+99TV65FJ3VePs2MjidBdubgyTrsS0XB5We9iO+S/nxb2R84P/gYvM+JaaPsAAAAASUVORK5CYII=);
                background-position: center;
                background-repeat: no-repeat;
                background-size: 17px
            }
        }

        .g3P27d .JRhuKe:hover {
            background: none;
            cursor: default
        }

        .b7cPmf:last-child {
            display: inline-block;
            position: absolute;
            right: 30px
        }

        .b7cPmf:last-child .g3P27d {
            margin: 0 10px;
            padding: 0;
            top: 10px
        }

        .b7cPmf:last-child .jGu02:hover {
            background-color: transparent
        }

        .CVBexe .L9ZZW {
            background-size: contain;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAQAAAADHm0dAAAAmUlEQVR4Ab2T7QmEQAwFp4QtYUu4Aq4IS9jSLCUlWMAVYQc55fQRHizcLzMgBIZoPiT/5gGVQSgJxkSls5HGRncVXuxVEjvd1Ltiy8gzIpsqVxXGlf3ES+ZmVFXNnPE+OENqVDUruJpS6WSlfoCrzVS1ZaoeQi8X3tac8GGJzwHCh9Xmqq9gISf4YllNmJ8LwcpC8yN84i/4Atxdv7BI3MwDAAAAAElFTkSuQmCC);
            background-position-y: center;
            background-repeat: no-repeat;
            display: inline-block;
            height: 21px;
            margin: 3px 3px 1px 3px;
            vertical-align: top;
            width: 21px
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .CVBexe .L9ZZW {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAqCAQAAABvygHQAAABI0lEQVR4Ae2WQc3DMAxGH4RCCIRAKYQedxyEQvghBEogDMIghIF/TWorVc76yVNO0/xu6/RUu45jbDz8pN8gJbNSTz9VVvLHUhYebx8+WMJSEhUTVFJAykzD0DRmLd3TtgDdMiilZhZSkk88WbFmr2hWLPWKkK6l7vPkTbhHs+y19ULqU0+78qRNsrLYge/LYr0onb59IyW7vx7veTMMux3viif3pSt2ZrI92NgDz9qVijOkpLUrVUKRvoWl/Q8lpSQt9S2lpJOQuuYflb47pkOkXKBbKi6tuvnjrPqYxslioHiqvaL6J2qgGMzxmsrRZ/CMS9WQnj5Kv5Hk5B988VGiQnFF+4rGlwndp88haw/3TVZYmAzmAQsaf9zJo1bJ0fyk/8xtIJkUZYI+AAAAAElFTkSuQmCC);
                background-size: contain
            }
        }

        .CRHL7b {
            display: inline-block;
            vertical-align: top
        }

        .CRHL7b.eZdLre:not(:last-child) {
            margin-right: 4px
        }

        .vUI6Ye {
            background-image: url(https://ssl.gstatic.com/android/market_images/web/loading_dark_small.gif);
            height: 40px;
            margin: 0 auto;
            width: 40px
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .vUI6Ye {
                background-image: url(https://lh3.ggpht.com/UaIc2B_JfXHF6PVELQxf13m5hkM2SNEbjbS-WQU6UD6JpmcGEh5dz81Crrg6OLWgp6k);
                background-size: contain
            }
        }

        .sIIDsc {
            background: #eee;
            color: #555;
            font-weight: 400;
            width: 100%
        }

        .RRKTjb {
            padding: 28px 5px
        }

        .XjE2Pb {
            margin-left: 5px
        }

        .BDUOnf {
            margin-right: 10px
        }

        .h0kJ5 {
            margin-left: 16px
        }

        .BOI2Dd .SvVgB:hover {
            text-decoration: underline
        }

        .TAviAb {
            background: #eee;
            width: 100%
        }

        .RqsaCf {
            color: #15c
        }

        .RqsaCf:hover {
            cursor: pointer;
            text-decoration: underline
        }

        .k8Lt0 .y089Ob {
            display: table-row;
            height: 1px;
            overflow: hidden
        }

        .zQTmif {
            height: 100%
        }

        .MCcOAc {
            display: flex;
            flex-direction: column
        }

        .SSPGKf {
            position: relative;
            min-height: 100%
        }

        .zQTmif {
            height: auto
        }

        .SSPGKf.BIIBbc {
            height: 100%;
            overflow: hidden
        }

        .T4LgNb {
            min-height: 100%;
            height: auto;
            position: relative
        }

        .T4LgNb.eejsDc {
            min-height: 100%;
            overflow-y: hidden;
            -webkit-overflow-scrolling: auto
        }

        .VjFXz {
            height: 56px
        }

        @media (min-width:600px) {
            .VjFXz {
                height: 64px
            }
        }

        #gb {
            position: fixed;
            left: 0;
            right: 0
        }

        .uirfo #gb {
            position: relative
        }

        .uirfo .VjFXz {
            height: 0
        }

        .uirfo .SSPGKf {
            min-height: calc(100vh - 56px);
            height: auto
        }

        @media (min-width:600px) {
            .uirfo .SSPGKf {
                min-height: calc(100vh - 64px);
                height: auto
            }
        }

        .k8Lt0 .Knqxbd {
            box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
            -webkit-user-select: none;
            background-color: #f5f5f5;
            background-color: rgba(245, 245, 245, .95);
            float: left;
            padding: 0;
            position: absolute;
            width: 200px;
            z-index: 984
        }

        .yb6DRb .Knqxbd {
            box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
            -webkit-user-select: none;
            background-color: #f5f5f5;
            background-color: rgba(245, 245, 245, .95);
            float: left;
            padding: 0;
            z-index: 984
        }

        .k8Lt0 .XBXPXc {
            list-style: none;
            margin: 0;
            padding: 0;
            width: 200px
        }

        .yb6DRb .XBXPXc,
        .yb6DRb .CoKTif {
            background: #fff;
            display: inline-block;
            font-size: 24px;
            padding-top: 15px;
            transition: all .2s ease;
            vertical-align: top;
            width: 260px;
            z-index: 984
        }

        .k8Lt0 .fle8Af .gm1qLe {
            cursor: pointer
        }

        .k8Lt0 .fle8Af {
            display: block
        }

        .k8Lt0 .CoKTif {
            background: rgba(238, 238, 238, .95);
            border-top: 1px solid #d9d9d9;
            box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
            padding-bottom: 10px;
            padding-top: 9px;
            position: absolute
        }

        .k8Lt0 .CoKTif .gm1qLe {
            box-sizing: border-box;
            display: block;
            padding-left: 20px;
            position: relative;
            width: 100%
        }

        .k8Lt0 .GtVJsf .fle8Af,
        .k8Lt0 .CoKTif .fle8Af {
            width: 200px
        }

        .Knqxbd .fle8Af:hover {
            background-color: rgba(0, 0, 0, .05)
        }

        .Knqxbd .gm1qLe {
            display: block;
            word-break: keep-all
        }

        .GtVJsf {
            display: inline-block;
            left: 0;
            line-height: normal;
            opacity: 1;
            filter: alpha(opacity=100);
            padding: 0;
            width: 200px;
            z-index: 1053
        }

        .DbRMwe {
            box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
            background: rgba(238, 238, 238, .95);
            border-top: 1px solid #d9d9d9;
            font-size: 18px;
            list-style-type: none;
            padding-bottom: 10px;
            padding-top: 9px;
            position: absolute
        }

        .k8Lt0 .ZpIPg {
            background-color: #fff;
            display: block;
            height: 48px;
            overflow: hidden;
            position: absolute;
            top: 0;
            width: 24px;
            z-index: 1051
        }

        .k8Lt0 .znPNx {
            background-color: #fff;
            display: block;
            height: calc(100% - 48px);
            overflow: hidden;
            position: absolute;
            top: 48px;
            width: 24px;
            z-index: 1053
        }

        .yb6DRb .ZpIPg,
        .yb6DRb .znPNx {
            display: none
        }

        .osoUAb {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAAWUlEQVR4AWP4TyIclhoQoMOg40BHAWENCOUfOv53HCCkAUU5EBsQ1IBQDoQBDAT9gKw8AcghqAFFOXEaLiCUU66BsJNo4WkGNC2URRzlSQMz8TWMgBxHGAIAU98Zi6TCZ6cAAAAASUVORK5CYII=);
            height: 24px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 24px
        }

        html[dir="rtl"] .osoUAb {
            transform: scaleX(-1)
        }

        .k8Lt0 .uQeS5e {
            line-height: normal;
            padding: 0;
            position: relative;
            top: 0;
            z-index: 1053
        }

        .yb6DRb .uQeS5e {
            display: block;
            height: 48px
        }

        .mzRh0d {
            display: block;
            height: 48px;
            overflow: hidden;
            text-decoration: none;
            width: 200px
        }

        .mzRh0d .pvVVcb {
            color: #555;
            display: table-cell;
            font-size: 18px;
            font-weight: 300;
            left: 56px;
            line-height: 20px;
            vertical-align: middle;
            width: 127px
        }

        .mzRh0d .pvVVcb:hover,
        .mzRh0d:focus .pvVVcb,
        .zyvEve:hover .pvVVcb {
            color: white
        }

        .iZhiic {
            z-index: 1054
        }

        .iZhiic .pvVVcb {
            color: #555;
            display: table-cell
        }

        .J919pd.uQeS5e {
            z-index: 1052
        }

        .E4WGcc .pvVVcb,
        .J919pd .pvVVcb {
            color: white;
            display: table-cell
        }

        .KiAlZb {
            bottom: 4px;
            color: #666;
            margin-left: 5px;
            position: relative;
            vertical-align: bottom
        }

        .zyvEve {
            display: table;
            height: 48px;
            position: absolute
        }

        .k8Lt0 .E4WGcc .zyvEve,
        .k8Lt0 .J919pd .zyvEve {
            width: 200px
        }

        .k8Lt0 .iZhiic .zyvEve {
            background-color: transparent;
            width: 200px
        }

        .S6Rud {
            background-position: center;
            background-repeat: no-repeat;
            display: table-cell;
            height: 48px;
            position: absolute;
            width: 65px
        }

        .yb6DRb .Mqdrgf {
            background-size: contain;
            display: inline-block;
            height: 30px;
            margin: 4px 0 6px 12px;
            vertical-align: bottom;
            width: 30px
        }

        .E4WGcc .S6Rud,
        .J919pd .S6Rud {
            width: 65px
        }

        .k8Lt0 .Mqdrgf {
            display: block;
            height: 24px;
            margin: 12px 0 0 28px;
            width: 24px
        }

        .N41Tic .S6Rud {
            background-color: #ed3b3b
        }

        .k8Lt0 .N41Tic .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYAQAAAADIDABVAAAAAnRSTlMAAHaTzTgAAAAZSURBVHgBY0AH9v//wLHx/zMgTAwfjtEAAGBCIjmpILE8AAAAAElFTkSuQmCC)
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .N41Tic .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAQAAAAB/ecQqAAAAAnRSTlMAAHaTzTgAAAAcSURBVHgBYyAX8P8Hgg9EUfxAEis1cPoIU2QCAG+uk23sAfY5AAAAAElFTkSuQmCC);
                background-position: center;
                background-repeat: no-repeat;
                background-size: 24px
            }
        }

        .yb6DRb .N41Tic .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8AQMAAAAAMksxAAAABlBMVEUAAADSPzEianKXAAAAAXRSTlMAQObYZgAAAB5JREFUeAFjGGBg/x8IDpDKsAGyDuNhDE1zMBkDCwBVJ5NtvCq0DQAAAABJRU5ErkJggg==)
        }

        .WEMC7e .S6Rud {
            background-color: #039be5
        }

        .k8Lt0 .WEMC7e .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAQklEQVR4AWMYfuA/AYBH/SMg9qSRBQhLaGkBQn7UAiDVAMI0sQBiOIJNoQWEwagFoxaMWjBqAengEa0sQFSZww4AAFuAn7nmsWNfAAAAAElFTkSuQmCC)
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .WEMC7e .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAfUlEQVR4Ae3ZAQbAMAyF4d1jl81lerQW7A5bhgdFzYJ6/D8BpfIByEFE6+5iP/7vOS3ndAWoSwhHgGrugGELUAAAAABQa/or3nEEaHkVVgAtPxUWgCyWbwaAUgAAAAAAAACALQEAAAAAAAAAAADo7oDmDNCRzw4wvp9ZiegBEmdtC8IUeXkAAAAASUVORK5CYII=);
                background-size: contain
            }
        }

        .yb6DRb .WEMC7e .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8BAMAAADI0sRBAAAAGFBMVEUAAAACd70Cd70Dd74Je8YCeL0CeL4EeL0r7NuwAAAACHRSTlMA/+WlG+zmgBnjrFYAAABOSURBVHgB7cmBBUAhFEbhgAD8L14DtEhDtEEL1P4QKoCDAnEPOHzOukir+SkjqzAH5p9ZD7JvyD0Se6kBdykC74yNn+CPOTAX5JrdedYAp10qXQNOToIAAAAASUVORK5CYII=);
            margin-bottom: 5px
        }

        .tkuA7b .S6Rud {
            background-color: #536dfe
        }

        .k8Lt0 .tkuA7b .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAOElEQVR4AWMYPGAU/KcyGOYW4JIjFMyD1wKaB9FoHIygjDZqwWMqmv8ImwWeVLLkEcgshkEDRgEA/1waP+EnnscAAAAASUVORK5CYII=)
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .tkuA7b .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAaElEQVR4Ae3TAQbAMBBFwdwj59+jtaB32EJQFKnCRuYBEP6QbZIkPcviAewKAAD4+q79DGBJAMD6RwwA4IgBAIq0LQAAAAAAAODMuh0zgMi6xQygZ+aVxRqbeptpIKLCdxob4m28JEk3quVi9j2bYE0AAAAASUVORK5CYII=);
                background-size: contain
            }
        }

        .yb6DRb .tkuA7b .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8BAMAAADI0sRBAAAAFVBMVEUAAAA/UbU/UrY/UbY/UrZCVb1AUbaBIiOMAAAAB3RSTlMA/+blpRvsKKw4owAAAEBJREFUeAFjGJJgFAhiAUNGGkLBBegvDQd0kqa/vymPsVFpRUxZYSRpR0xpESTpMEzpVCRpVid0WZUAhqEIRgEATVkkZoB2cKQAAAAASUVORK5CYII=);
            margin-bottom: 5px
        }

        .qKjvAb .S6Rud {
            background-color: #689f38
        }

        .k8Lt0 .qKjvAb .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAAL0lEQVR42mNgGEbgf8N/BGjALoKqAQVgF8HQgMrCFBkADaT5gdRQGo240YijNwAAGCY24I9hRLYAAAAASUVORK5CYII=)
        }

        .yb6DRb .qKjvAb .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAA9UlEQVR4Ae2aQQ0CMRQFkVAlZCVUQk/oqISeMbMSKmGlVMLnCWjKdj8lkMwkc31hAsAW9ga/AgAAAMDjeS+ySTtplduJ3U3Wid0my+rYQ9pF02A3OXaPlc+sOWwydHaDbM7tsiK4SXOaO7tZmtO2Itg+YPG/cvp+JfjdW8ARXCYfC8EEE0wwwQTLMrA6gutoe1EwFx5VmtPY2Y3SnNYVwZs0h/tge3dub6tOTEm2K7EyDHbDxegm0+ozcZBZlpPGie04sZtluAEA/PuHFl9LXHhwacnhgeMhv3gQTDDBBBPch18tJX+Ic8sDN7Vw25IHAAAAAHgBBwHtKnveQmMAAAAASUVORK5CYII=);
            margin-bottom: 7px
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .qKjvAb .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAWUlEQVR42u2VMQ4AIAjEeCL/X3gK7sZDGRhM2tGcdhHODAAOpGfkTqR3M/p5hXcyWhDycnQyWlDQyVwF1dlLBgGCyW86PmjTq2J82QGNRqOxrhHQaDQawKcsBeDBfV6+UwYAAAAASUVORK5CYII=);
                background-size: contain
            }
        }

        .KVqzMb .S6Rud {
            background-color: #658092
        }

        .k8Lt0 .KVqzMb .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAASElEQVR4Ae3UgQUAMAxE0azXfbNRB/mlgFBBjgZ5A9wHzkYfwAI2IhYl45LAZXrNA4Dz5vVAQhawYAITEAaqX0OifyC/ivHbAbxNq1XYMRDSAAAAAElFTkSuQmCC)
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .KVqzMb .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAeElEQVR4Ae3YxwFAQBQAUX2oaAulL/Gkh3Hfixw+MxV42FiYmZnlASVQASMva+3DT2RFAtQAkQFjbEBWES0BAoIBgAR0bK8F0hsAHftrnwccTMDdY+5LAAECBAgQIECAAAFPX4twpPgAAQKOH+qfBxy8Vvl1ZmY2A/cbq1/EHtwWAAAAAElFTkSuQmCC);
                background-size: contain
            }
        }

        .yb6DRb .KVqzMb .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8BAMAAADI0sRBAAAAGFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWNxwqAAAACHRSTlMAD1p9ioAoexSjZmYAAABMSURBVHgBYxiSYBQwKrtgACRpURe80ir4pU3wSyM4CDAw0ukQt5XhkC6BSLvjkIZ5jVxpEDl4pUel0RMwhB4IaURSxC6NSMhDD4wCAPLLW661plywAAAAAElFTkSuQmCC)
        }

        .KhlB4 .S6Rud {
            background-color: #444
        }

        .k8Lt0 .KhlB4 .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAoElEQVR4Ac2VQQrFIAxECxr+/Y+hV1TjH+jGhZq2U9sG3m7gIUnMVmtdyqOCCBTkDgoiKzhSjhEomFUBvyYvwHeQkSAbgtxkA1CQOiiIrMAuUqBGVq/0QFmBWWey3B7Y2TDaZAEbibzzVTSEZmp29gpHMpbA3dBkNxMIKMSYFqsHHiR70YZLmYAnBItfsLwHxm+qd0yRTO6B0Hvw+aO/hD+YMKohXloFLgAAAABJRU5ErkJggg==)
        }

        @media screen and (-webkit-min-device-pixel-ratio:1.5),
        screen and (min--moz-device-pixel-ratio:1.5),
        screen and (-o-min-device-pixel-ratio:1.5),
        screen and (min-resolution:1.5dppx) {
            .k8Lt0 .KhlB4 .Mqdrgf {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAA8ElEQVR4Ae3XQQqDQBBE0exl5hLO/S+ga/U8A65cTOoGAfuHiqGF2hY8kLZ8jTEenQR8IQloyqL0m1mU5gQcI/4cTsAFAC5lcgFOAHAq1QXoAKAr5V8B5V78gDl43ValOQE70Lu7ABN13VyASl03F6BQvQlIAABwTIlK9brGHHZGnXMa+ZA5f2iasgZ7588AcHS5xtxPJgGGVygAiO34RZmxHgCwE+dO2W70bFHApFzIhyzQEwFU5USmRKAnAihKB8Yc0BMAJCABCUjA48+o4UMGALxTAgBQY842Jbg57R9zQPxz2gbg3938J05AArC8AaWMp80+lFW3AAAAAElFTkSuQmCC);
                background-size: contain
            }
        }

        .yb6DRb .KhlB4 .Mqdrgf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8BAMAAADI0sRBAAAAMFBMVEUAAADnUQDnUgDmUQDTMTHULy/TLy/TLy/ULy8Dd74Cd74Cd70CeL0/UrY/UbY/UbU1SZrcAAAAD3RSTlMAl/3/mP3/l/6Y/v/9mf6Ng2dFAAAAe0lEQVR4AWMgG4wCIWMIUMQurQyVNsIubQwDAyvtmgYB4dil26DSqdil02BgWEtjRmgYLFiwJ4dSqHTIoEmrs3aDwEkGhnv/QeAtmvRpsPQeBob3YOl/aNK7IYCB4T8EkCA9Kk0gUOFRgkMaAQhLY0YoDjAHlhwoB6MAAG1dB889SeSuAAAAAElFTkSuQmCC);
            margin-bottom: 7px
        }

        .N41Tic.J919pd .zyvEve,
        .N41Tic .zyvEve:hover,
        .N41Tic .mzRh0d:focus .zyvEve {
            background-color: #ed3b3b
        }

        .qKjvAb.J919pd .zyvEve,
        .qKjvAb .zyvEve:hover,
        .qKjvAb .mzRh0d:focus .zyvEve {
            background-color: #689f38
        }

        .tkuA7b.J919pd .zyvEve,
        .tkuA7b .zyvEve:hover,
        .tkuA7b .mzRh0d:focus .zyvEve {
            background-color: #536dfe
        }

        .WEMC7e.J919pd .zyvEve,
        .WEMC7e .zyvEve:hover,
        .WEMC7e .mzRh0d:focus .zyvEve {
            background-color: #039be5
        }

        .KVqzMb.J919pd .zyvEve,
        .KVqzMb .zyvEve:hover,
        .KVqzMb .mzRh0d:focus .zyvEve {
            background-color: #658092
        }

        .KhlB4.J919pd .zyvEve,
        .KhlB4 .zyvEve:hover,
        .KhlB4 .mzRh0d:focus .zyvEve {
            background-color: #444
        }

        .N41Tic.SEJUd .zyvEve:hover,
        .qKjvAb.SEJUd .zyvEve:hover,
        .tkuA7b.SEJUd .zyvEve:hover,
        .WEMC7e.SEJUd .zyvEve:hover,
        .KVqzMb.SEJUd .zyvEve:hover,
        .KhlB4.SEJUd .zyvEve:hover {
            background-color: transparent
        }

        .gm1qLe .gWazle {
            font-weight: 700
        }

        .k8Lt0 .gm1qLe .Mqdrgf {
            display: none
        }

        .k8Lt0 .fle8Af .gm1qLe {
            color: #555;
            cursor: pointer;
            font-weight: 400;
            padding: 6px 12px 6px 23px
        }

        .yb6DRb .fle8Af .gm1qLe {
            background-color: #f5f5f5;
            color: #666;
            font-size: 20px;
            height: 48px;
            margin-left: 5px;
            width: 100%
        }

        .k8Lt0 .YWGNae {
            display: none
        }

        .yb6DRb .YWGNae {
            height: 15px;
            background-color: #f5f5f5
        }

        .tzLNed .EGz53e {
            padding-left: 24px;
            width: 176px
        }

        .hBVIsb .tzLNed .EGz53e {
            padding-left: 0
        }

        .EGz53e .AhXF6c {
            line-height: 20px;
            padding: 8px 12px 8px 23px
        }

        .EGz53e .gm1qLe {
            width: 152px
        }

        .POfIAc {
            background: rgba(0, 0, 0, .1);
            height: 1px;
            margin: 14px;
            width: 148px
        }

        .k8Lt0 .fle8Af {
            display: block;
            font-size: 14px;
            line-height: 18px
        }

        .fle8Af:hover,
        .AhXF6c:hover {
            background-color: rgba(0, 0, 0, .05)
        }

        .yb6DRb .fle8Af {
            background-color: #f5f5f5;
            color: #666;
            font-size: 20px;
            height: 48px;
            width: 100%
        }

        .gm1qLe,
        .WhMnYc,
        .WtH9qd {
            display: block;
            word-break: keep-all
        }

        .WhMnYc,
        .WtH9qd {
            color: #555
        }

        .APEy4b {
            color: transparent;
            font-size: 18px;
            list-style-type: none;
            padding-bottom: 6px;
            padding-top: 6px;
            position: absolute
        }

        .Mfkobe .APEy4b,
        .hBVIsb .APEy4b {
            position: relative
        }

        .J919pd .APEy4b {
            display: block
        }

        .iZhiic .APEy4b {
            display: none
        }

        .k8Lt0 .qBQ0O {
            position: fixed;
            top: 0
        }

        .k8Lt0 .Mfkobe .oPekyc {
            position: absolute
        }

        .k8Lt0 .oPekyc,
        .k8Lt0 .uQeS5e .o5mox {
            left: -200px
        }

        .APEy4b .gWazle {
            font-weight: 400
        }

        .N41Tic .gWazle,
        .N41Tic .gWazle .gm1qLe {
            color: #a84137
        }

        .WEMC7e .gWazle,
        .WEMC7e .gWazle .gm1qLe {
            color: #1380b5
        }

        .tkuA7b .gWazle,
        .tkuA7b .gWazle .gm1qLe {
            color: #294d96
        }

        .qKjvAb .gWazle,
        .qKjvAb .gWazle .gm1qLe {
            color: #8d9d29
        }

        .KVqzMb .gWazle,
        .KVqzMb .gWazle .gm1qLe {
            color: #4f6574
        }

        .KhlB4 .gWazle,
        .KhlB4 .gWazle .gm1qLe {
            color: #444
        }

        .shke5e {
            background: #fff;
            border-radius: 14px;
            color: #555;
            float: right;
            padding: 0 8px
        }

        .k8Lt0 .shke5e {
            font-size: 14px;
            height: 18px;
            line-height: 18px
        }

        .yb6DRb .shke5e {
            font-size: 20px;
            height: 30px;
            line-height: 28px;
            margin-right: 16px;
            margin-top: 9px
        }

        .HJP88 {
            background: #fff;
            border-bottom: 1px solid #aaa;
            height: 48px;
            left: 0;
            position: fixed;
            text-align: center;
            top: 0;
            width: 100%;
            z-index: 984
        }

        .kRE6F {
            background-size: contain;
            height: 24px;
            left: 11px;
            position: absolute;
            top: 11px;
            width: 24px
        }

        .kRE6F {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAP0lEQVR4Ae3WQQ0AIAwEQbRUCf5NFQ2Q40EYTsB82KSjLw8A2BsAULM6s38BQO4BTgHfFKBkJesA8PRtCgAAFqIqG6d6SeYzAAAAAElFTkSuQmCC)
        }

        .paODAb,
        .XoQmMd {
            cursor: pointer;
            display: inline-block;
            height: 46px;
            position: absolute;
            top: 0;
            width: 46px
        }

        .paODAb {
            left: 0
        }

        .XoQmMd {
            right: 0
        }

        .Su676c {
            background-size: contain;
            background-image: url(https://ssl.gstatic.com/android/market_images/web/play_prism_hlock_m.png);
            background-position: center;
            background-repeat: no-repeat;
            display: inline-block;
            height: 100%;
            width: 160px
        }

        .FpSRLc {
            background-color: #000;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 2001
        }

        .prwMD {
            position: fixed
        }

        .prwMD {
            transform: translate3d(260px, 0, 0)
        }

        .F8yzbe,
        .ugw7id {
            animation-duration: .4s;
            animation-fill-mode: forwards;
            animation-timing-function: cubic-bezier(.65, 0, .71, 1)
        }

        .F8yzbe {
            animation-name: openNav
        }

        .ugw7id {
            animation-name: closeNav
        }

        @keyframes openNav {
            0% {
                transform: translate3d(0, 0, 0)
            }
            100% {
                transform: translate3d(260px, 0, 0)
            }
        }

        @keyframes closeNav {
            0% {
                transform: translate3d(260px, 0, 0)
            }
            100% {
                transform: translate3d(0, 0, 0)
            }
        }

        .qZxJ9 {
            background: #fff;
            border: 1px solid #aaa;
            border-top: #d6d6d6;
            position: absolute;
            z-index: 2003
        }

        .hNW13c {
            cursor: pointer;
            padding: 6px
        }

        .QVznTd {
            font-weight: bold
        }

        .eOnYEd {
            background-color: #e5e5e5
        }

        @media screen and (max-width:600px) {
            .qZxJ9 {
                font-size: 16px;
                top: 50px
            }
            .hNW13c {
                padding: 10px 15px
            }
        }

        .YvpZrd {
            box-sizing: border-box;
            opacity: 1;
            transition: all .2s ease;
            background: #fff;
            background-color: #fff;
            left: 0;
            padding: 0 46px 0 0;
            position: absolute;
            text-align: left;
            top: 0;
            white-space: nowrap;
            width: 100%
        }

        .YvpZrd.xTMeO {
            opacity: 0;
            visibility: hidden
        }

        .YVbrWc,
        .YvpZrd .CWQUbf {
            cursor: pointer;
            display: inline-block;
            height: 46px;
            position: absolute;
            right: 0;
            top: 0;
            width: 46px
        }

        .iF7Enb,
        .sddlzf {
            background-size: contain;
            height: 24px;
            left: 11px;
            position: absolute;
            top: 11px;
            width: 24px
        }

        .iF7Enb {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAArElEQVR4Ae3WwQnFMAwDUI2QUb2RR+pIaUpuRQSRIArFP8cYPfhtbaObTwEFfAUUAESLKxLiL3JUN8jAjO/jpBg/ah9CBmY8J3j8JHQgo0vEq1IGoBCkSgcEglXogECwWx1YE+RmD+BBC1gHlgSP3wMIweO3AULw+DOAEgmcA5zg8X7A/xf5H7L/NfV/aP5W4W92/nbtHzj+kekf+v61xb94+VfHWt9/BRRQwA1YE6cuDHsiKgAAAABJRU5ErkJggg==)
        }

        .iEL1hc {
            box-sizing: border-box;
            display: inline-block;
            position: relative;
            white-space: nowrap;
            width: 100%
        }

        .zWUrcf {
            box-sizing: border-box;
            background-color: #fff;
            display: block;
            height: 48px;
            margin: 0;
            margin-right: 60px;
            position: relative;
            vertical-align: top;
            white-space: nowrap;
            width: 100%
        }

        .sddlzf {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAABEUlEQVR4Ae3WYW3HIBAFcCQgoXkKKgEJlYAEJNRBJVRCJUwCEioBCd2XjrxsvTDau2TJeu9rww+O/x9wh3Fe4P8B3wseERsKjjMFG6Jr1i8BzDQ0pyA9BjAi45CDjOEBgJHnLqRg7AWuh98xI5xZsDOB4R6QaYgfW4pEfL4BYKY+cxOuGxg7AXiUZo+Z2HuBKM+NC4m+6wK2OrNG1e1eu4C69NQEFnkqIgBfFx6awPT1bQ8QKuCbQPiLgHP6LdLfZP2fqfUfbTI+KswPO9vj+sPkwqEEsyuTslpd+okIi2cLgrgKnYcXPDIT3UC7ZEIGlAgZUCJkQImQASVCBpQIdYAJfYAIqxYRIWyycl7gBVTzCfNVunbqnVYGAAAAAElFTkSuQmCC)
        }

        .nA1O0c {
            background: transparent;
            border: none;
            font-size: 21px;
            height: 100%;
            margin-top: 4px;
            padding: 0;
            vertical-align: top;
            width: 100%
        }

        .nA1O0c:focus {
            outline: none
        }

        .Hgm2gf {
            padding: 8px 14px;
            position: relative
        }

        /*# sourceMappingURL=one_google.css.map */

        .bPAkEd {
            background: #555;
            display: block;
            height: 48px;
            width: 100%
        }

        .Ijq91c {
            display: block;
            position: relative;
            width: 100%
        }

        .Ijq91c .T3Ru8 {
            display: none
        }

        .Ijq91c .sh6Nsd {
            background-size: cover;
            border-radius: 18px;
            box-shadow: 0 2px 0 0 rgba(0, 0, 0, .17);
            background-position: center;
            border: 2px solid #f5f5f5;
            display: inline-block;
            height: 32px;
            margin: 6px 0 0 9px;
            vertical-align: top;
            width: 32px
        }

        .Ijq91c .rHSqDd {
            color: #f5f5f5;
            display: inline-block;
            font-size: 18px;
            margin: 12px 0 0 3px;
            max-width: 162px;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top;
            white-space: nowrap
        }

        .Ijq91c .kblou {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAXElEQVR4AaXRwQ2AIBSD4Y7kSGzRNRihI7oBJlUOz2I0kR7/j4QEjJd9A/dDcVB4AmwcnpaAnRt1kgVw2i+iAPOmSYs3zOx1oIKaBRSQuYLIASInyJzAOcH/3zwA4sXL9n1TAXwAAAAASUVORK5CYII=);
            background-repeat: no-repeat;
            background-position: center center;
            display: inline-block;
            height: 16px;
            padding: 16px;
            position: absolute;
            right: 0;
            top: 0;
            width: 16px
        }

        .Ijq91c .LFBkwd {
            box-sizing: border-box;
            color: #f5f5f5;
            display: inline-block;
            font-size: 24px;
            padding: 8px 16px;
            width: 100%
        }

        .VjFXz {
            display: none
        }

        .QKtxw {
            height: 100%;
            position: relative;
            z-index: -1
        }

        .A3aULc {
            margin-top: 49px;
            position: absolute;
            z-index: -1
        }

        .k8Lt0 .WpDbMd {
            box-sizing: border-box;
            display: table;
            height: calc(100% - 138px);
            margin-bottom: 15px;
            padding-left: 249px;
            padding-right: 49px;
            overflow-x: hidden;
            width: 100%
        }

        .k8Lt0 .GwcXac {
            box-sizing: border-box;
            display: table;
            height: calc(100% - 138px);
            margin-bottom: 15px;
            padding-left: 49px;
            padding-right: 49px;
            overflow-x: hidden;
            width: 100%
        }

        .yb6DRb .WpDbMd {
            background-color: #eee;
            display: flex;
            float: none;
            flex-direction: column;
            margin: 0 0 15px 0;
            padding-top: 47px;
            min-height: calc(100vh - 47px)
        }

        .Cq5pMb {
            position: fixed;
            top: 0;
            z-index: 30001
        }

        .Cq5pMb .SQxu9c {
            background-color: #4285f4
        }

        .Cq5pMb .Iq5ZMc {
            background-color: #c6dafc
        }

        .Cq5pMb .um3FLe {
            background-repeat: repeat-x;
            background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20version%3D%271.1%27%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20xmlns%3Axlink%3D%27http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%27%20x%3D%270px%27%20y%3D%270px%27%20enable-background%3D%27new%200%200%205%202%27%20xml%3Aspace%3D%27preserve%27%20viewBox%3D%270%200%205%202%27%20preserveAspectRatio%3D%27none%20slice%27%3E%3Ccircle%20cx%3D%271%27%20cy%3D%271%27%20r%3D%271%27%20fill%3D%27%23c6dafc%27%2F%3E%3C%2Fsvg%3E)
        }

        .XDXaGc {
            opacity: .65;
            background: #ddd;
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 30000
        }

        .qZhyCf {
            align-items: center;
            display: flex;
            flex-grow: 1
        }

        .CepEHc {
            border-radius: 8px;
            box-shadow: 0 -1px 5px rgba(0, 0, 0, .09), 0 3px 5px rgba(0, 0, 0, .06), 0 1px 2px rgba(0, 0, 0, .3), 0 1px 3px rgba(0, 0, 0, .15);
            flex-shrink: 0;
            margin-right: 16px
        }

        .AZIq5b {
            height: 48px;
            width: 48px
        }

        .VT20V {
            height: 64px;
            width: 64px
        }

        .xzVNx {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.75rem;
            font-size: 1.375rem;
            letter-spacing: 0;
            font-weight: 400;
            font-weight: 500;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            overflow: hidden
        }

        .xzVNx:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .xzVNx {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .xzVNx:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .sn1rbc {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            display: -webkit-box;
            overflow: hidden
        }

        .sn1rbc:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .sn1rbc {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .sn1rbc:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .pgrcce {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0178571429em;
            line-height: 1.25rem;
            line-height: 1.75rem
        }

        .NReR1d {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400
        }

        .NReR1d .rUZYqc {
            font-size: 8px;
            margin: 0 3px
        }

        .L0EQzf {
            display: flex;
            align-items: center
        }

        .M9mj3e {
            height: 12px;
            margin: 0 8px 0 10px;
            vertical-align: middle
        }

        @media screen and (min-width:1280px) {
            .AZIq5b {
                height: 56px;
                width: 56px
            }
            .VT20V {
                height: 72px;
                width: 72px
            }
            .NReR1d .rUZYqc {
                font-size: 10px
            }
            .M9mj3e {
                height: 14px
            }
        }

        .ydGPV {
            border-radius: 8px;
            margin-top: 8px
        }

        .PeWVCc {
            width: 48px;
            height: 48px;
            padding: 8px;
            font-size: 32px
        }

        .PeWVCc svg,
        .PeWVCc img {
            width: 32px;
            height: 32px
        }

        .WrEZCd {
            border-radius: 100%;
            height: 32px;
            width: 32px
        }

        .AX0y7c {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .AX0y7c:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .AX0y7c {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .AX0y7c:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .Ll1HQd:nth-child(n) {
            color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            font-weight: 400
        }

        .Ll1HQd:nth-child(n) .VfPpkd-StrnGf-rymPhb-f7MjDc {
            color: rgb(95, 99, 104)
        }

        .jDawJf {
            margin-left: 18px
        }

        .JyVPdd {
            margin: 5px 0 0 18px
        }

        .YQy4vd {
            align-items: center;
            display: flex;
            margin: 8px 16px
        }

        .jCQ2Zb {
            border-radius: 100%;
            height: 32px;
            margin-right: 24px;
            width: 32px
        }

        .ItxEje {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .JauZY {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400
        }

        .BYi1pe {
            border: 1px solid rgb(218, 220, 224);
            border-radius: 100px;
            height: 36px;
            margin: 24px 24px 24px 70px;
            max-width: 266px;
            overflow: hidden;
            padding: 8px 16px;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .ffeky:nth-child(n) {
            font-weight: 600
        }

        .pib0Be {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0178571429em;
            line-height: 1.25rem;
            font-size: .75rem;
            line-height: .875rem;
            padding: 12px 0;
            text-align: center
        }

        .pib0Be:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .pib0Be {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .pib0Be:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .j55CI {
            margin: 0 4px
        }

        .Afmgcd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .Afmgcd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .Afmgcd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .Afmgcd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .yhtbu {
            margin-left: 24px;
            margin-right: 24px;
            padding-bottom: 72px
        }

        @media screen and (min-width:600px) {
            .yhtbu {
                margin-left: 48px;
                margin-right: 48px
            }
        }

        @media screen and (min-width:1280px) {
            .yhtbu {
                margin-left: 72px;
                margin-right: 72px
            }
        }

        @media screen and (min-width:1440px) {
            .yhtbu {
                margin-left: auto;
                margin-right: auto;
                max-width: 1296px
            }
        }

        @media (hover:hover) {
            .yhtbu {
                padding-bottom: 16px
            }
        }

        .srvBL {
            border-color: rgb(232, 234, 237);
            border-bottom: 1px solid;
            margin-bottom: 36px;
            padding-top: 36px;
            width: 100%
        }

        .srvBL:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .srvBL {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .srvBL:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .Hc0nne {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 24px
        }

        .sv9Noe {
            margin-top: 32px;
            display: flex;
            flex-wrap: wrap
        }

        .GMGZAc,
        .CmHxkb,
        .KvNvKe,
        .dMOumf {
            font-family: "Google Sans", Helvetica, Arial, sans-serif;
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .GMGZAc:not(:disabled),
        .CmHxkb:not(:disabled),
        .KvNvKe:not(:disabled),
        .dMOumf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .GMGZAc {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .GMGZAc:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .CmHxkb {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .CmHxkb:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .KvNvKe {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .KvNvKe:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .dMOumf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .dMOumf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .GMGZAc {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0178571429em;
            line-height: 1.25rem;
            font-weight: 500
        }

        .CmHxkb {
            font-size: .875rem;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            font-weight: 400;
            width: max-content
        }

        .GMGZAc,
        .CmHxkb {
            line-height: 32px
        }

        .KvNvKe {
            font-size: .75rem;
            line-height: 48px;
            margin-right: 24px
        }

        .AJ34ce {
            display: grid;
            grid-template-columns: repeat(2, max-content);
            grid-template-rows: 1fr;
            column-gap: 12px
        }

        .GrpFfc {
            align-self: center;
            width: 24px;
            height: 18px
        }

        .dMOumf {
            font-size: .875rem;
            letter-spacing: .0142857143em;
            font-weight: 400;
            font-size: .75rem;
            line-height: 1.25rem;
            margin-top: .5rem
        }

        .CmHxkb:hover,
        .QOTGFf:hover,
        .tN8c4d:hover {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .CmHxkb:hover:not(:disabled),
        .QOTGFf:hover:not(:disabled),
        .tN8c4d:hover:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .CmHxkb:hover {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .CmHxkb:hover:not(:disabled) {
            color: #00a173
        }

        .P9KVBf .QOTGFf:hover {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .QOTGFf:hover:not(:disabled) {
            color: #00a173
        }

        .P9KVBf .tN8c4d:hover {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .tN8c4d:hover:not(:disabled) {
            color: #00a173
        }

        .AU8vyc {
            display: block;
            width: max-content
        }

        @media screen and (min-width:840px) {
            .yhtbu {
                padding-bottom: 16px
            }
            .Hc0nne {
                column-gap: 16px;
                grid-template-columns: 244px auto
            }
        }

        @media screen and (min-width:1280px) {
            .Hc0nne {
                column-gap: 24px;
                grid-template-columns: 266px auto
            }
            .KvNvKe {
                margin-right: 32px
            }
            .avtIH {
                margin-left: auto;
                margin-right: 0
            }
        }

        .JtbJpb {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .JtbJpb:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .JtbJpb {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .JtbJpb:not(:disabled) {
            color: #00a173
        }

        .VuUAje {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .VuUAje:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .VuUAje {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .VuUAje:not(:disabled) {
            color: #00a173
        }

        .nC9GBc {
            color: #0179ca;
            fill: #0179ca;
            stop-color: #0179ca
        }

        .nC9GBc:not(:disabled) {
            color: #0179ca
        }

        .P9KVBf .nC9GBc {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .nC9GBc:not(:disabled) {
            color: #50b4f4
        }

        .bDwnVb {
            color: #c71c56;
            fill: #c71c56;
            stop-color: #c71c56
        }

        .bDwnVb:not(:disabled) {
            color: #c71c56
        }

        .P9KVBf .bDwnVb {
            color: #ff3369;
            fill: #ff3369;
            stop-color: #ff3369
        }

        .P9KVBf .bDwnVb:not(:disabled) {
            color: #ff3369
        }

        .xCoTHe {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .xCoTHe:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .xCoTHe {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .xCoTHe:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .yyaGpb {
            display: flex;
            justify-content: center;
            width: 100%
        }

        .P7NFWb {
            background-color: #fff;
            border-top: 1px solid rgb(218, 220, 224);
            bottom: 0;
            display: flex;
            height: 56px;
            justify-content: center;
            left: 0;
            position: fixed;
            width: 100%;
            z-index: 3
        }

        .P9KVBf .P7NFWb {
            border-top: 1px solid rgb(95, 99, 104);
            background-color: rgb(32, 33, 36)
        }

        .uEz1ib {
            align-items: center;
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: center;
            max-width: 112px
        }

        .jb05Ib {
            line-height: 0
        }

        .WL3b7c {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical
        }

        .Y4jiDf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .Y4jiDf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .Y4jiDf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .Y4jiDf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .sziCu {
            display: none
        }

        @media (hover:hover) {
            .jb05Ib {
                display: none
            }
            .P7NFWb {
                border-top: none;
                height: 48px;
                position: static
            }
        }

        @media screen and (min-width:840px) {
            .P7NFWb {
                display: none
            }
        }

        .hQnXo {
            background-color: #fff;
            margin: 0;
            position: absolute;
            top: 0;
            width: 100vw
        }

        .hQnXo:not(:disabled) {
            background-color: #fff
        }

        .P9KVBf .hQnXo {
            background-color: rgb(32, 33, 36)
        }

        .P9KVBf .hQnXo:not(:disabled) {
            background-color: rgb(32, 33, 36)
        }

        .hQnXo.sMVRZe {
            height: 100vh;
            left: 0;
            z-index: 5
        }

        .hQnXo.sMVRZe .ePyrDc {
            border-color: rgb(218, 220, 224);
            border-bottom: solid 1px
        }

        .hQnXo.sMVRZe .ePyrDc:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .hQnXo.sMVRZe .ePyrDc {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .hQnXo.sMVRZe .ePyrDc:not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .ePyrDc {
            align-items: center;
            box-sizing: content-box;
            display: flex;
            height: 48px;
            margin: 0 2px;
            position: relative
        }

        .j1R2Me .Ic6Vy {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 18px;
            position: relative
        }

        .j1R2Me .Ic6Vy:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .j1R2Me .Ic6Vy {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .j1R2Me .Ic6Vy:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .UJwHBc .opB26b {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 24px;
            position: relative
        }

        .UJwHBc .opB26b:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .UJwHBc .opB26b {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .UJwHBc .opB26b:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .j1R2Me {
            display: none;
            height: 48px;
            padding: 15px 17px
        }

        .UJwHBc {
            display: inline;
            height: 48px;
            padding: 12px 12px 12px 24px
        }

        .XLWCmc {
            height: 48px;
            padding: 17px 19px;
            position: relative;
            width: 52px
        }

        .XLWCmc .VFjhDf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 14px
        }

        .XLWCmc .VFjhDf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .XLWCmc .VFjhDf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .XLWCmc .VFjhDf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .HWAcU {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            font-weight: 400;
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            height: 48px;
            width: 100%
        }

        .HWAcU:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .HWAcU {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .HWAcU:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .wirelessAndroidFinskyBoqWebChromeMaterialchromewebHeaderSearchbarSearchBarSearchInput::-webkit-input-placeholder {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            font-weight: 400;
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .HWAcU::placeholder {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            font-weight: 400;
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .wirelessAndroidFinskyBoqWebChromeMaterialchromewebHeaderSearchbarSearchBarSearchInput::-webkit-input-placeholder:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .HWAcU::placeholder:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .modeDarkTheme .wirelessAndroidFinskyBoqWebChromeMaterialchromewebHeaderSearchbarSearchBarSearchInput::-webkit-input-placeholder {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .HWAcU::placeholder {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .modeDarkTheme .wirelessAndroidFinskyBoqWebChromeMaterialchromewebHeaderSearchbarSearchBarSearchInput::-webkit-input-placeholder:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .HWAcU::placeholder:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .YVhSle {
            align-items: center;
            display: flex;
            height: 36px;
            margin: 6px 0;
            position: relative
        }

        .YVhSle[aria-selected=true] {
            background-color: rgba(32, 33, 36, .04)
        }

        .YVhSle[aria-selected=true]:not(:disabled) {
            background-color: rgba(32, 33, 36, .04)
        }

        .P9KVBf .YVhSle[aria-selected=true] {
            background-color: rgba(232, 234, 237, .04)
        }

        .P9KVBf .YVhSle[aria-selected=true]:not(:disabled) {
            background-color: rgba(232, 234, 237, .04)
        }

        .YVhSle[aria-selected=false] {
            background: none
        }

        .H3UN0 {
            overflow: auto
        }

        .fWLDob {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            align-items: center;
            display: flex;
            height: 100%
        }

        .fWLDob:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .fWLDob {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .fWLDob:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .FfLSic {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            align-items: center;
            display: flex;
            height: 100%
        }

        .FfLSic:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .FfLSic {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .FfLSic:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .QTWoUe {
            display: block;
            height: 100%;
            outline: none;
            width: 100%
        }

        .VnJy5c {
            height: 32px;
            margin: 0 12px 0 22px;
            position: relative;
            width: 32px
        }

        .VnJy5c .dbAtlf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 20px;
            padding: 6px
        }

        .VnJy5c .dbAtlf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .VnJy5c .dbAtlf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .VnJy5c .dbAtlf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .OWBiB {
            border-radius: 8px;
            height: 32px;
            width: 32px
        }

        .WuMlDe {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0178571429em;
            line-height: 1.25rem
        }

        .oWSyie {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400
        }

        .oWSyie .sRzXp {
            font-size: 9px
        }

        .XPmdRc {
            font-weight: 500
        }

        .NGOzcb {
            display: inline;
            margin-left: auto;
            padding: 0 26px
        }

        .NGOzcb .UzumSc {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 16px
        }

        .NGOzcb .UzumSc:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .NGOzcb .UzumSc {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .NGOzcb .UzumSc:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        @media (hover:hover) {
            .QvOuef {
                align-self: start;
                position: relative;
                width: 100%
            }
            .hQnXo {
                background-color: rgb(241, 243, 244);
                border-radius: 8px;
                margin: 4px auto;
                max-width: 720px;
                min-width: 285px;
                position: relative;
                width: calc(100vw - 320px)
            }
            .hQnXo:not(:disabled) {
                background-color: rgb(241, 243, 244)
            }
            .P9KVBf .hQnXo {
                background-color: rgb(60, 64, 67)
            }
            .P9KVBf .hQnXo:not(:disabled) {
                background-color: rgb(60, 64, 67)
            }
            .hQnXo.sMVRZe {
                background-color: #fff;
                box-shadow: 0 1px 2px rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
                height: unset;
                left: unset
            }
            .hQnXo.sMVRZe:not(:disabled) {
                background-color: #fff
            }
            .P9KVBf .hQnXo.sMVRZe {
                background-color: rgb(32, 33, 36)
            }
            .P9KVBf .hQnXo.sMVRZe:not(:disabled) {
                background-color: rgb(32, 33, 36)
            }
            .P9KVBf .hQnXo.sMVRZe {
                box-shadow: 0 1px 2px rgba(0, 0, 0, .3), 0 1px 3px 1px rgba(0, 0, 0, .15)
            }
            .j1R2Me {
                display: inline
            }
            .UJwHBc,
            .NGOzcb {
                display: none
            }
            .VnJy5c {
                margin: 0 12px
            }
            .VnJy5c .dbAtlf {
                font-size: 18px;
                padding: 7px
            }
        }

        @media screen and (hover:hover) and (min-width:840px) {
            .hQnXo {
                margin: 8px auto
            }
        }

        @media screen and (hover:hover) and (min-width:960px) {
            .QvOuef {
                position: absolute
            }
            .hQnXo {
                width: calc(100vw - 420px)
            }
        }

        @media screen and (hover:none) and (min-width:840px) {
            .QvOuef {
                align-self: start;
                position: relative;
                width: 100%
            }
            .hQnXo {
                background-color: rgb(241, 243, 244);
                border-radius: 8px;
                margin: 4px auto;
                max-width: 720px;
                min-width: 285px;
                position: relative;
                width: calc(100vw - 320px)
            }
            .hQnXo:not(:disabled) {
                background-color: rgb(241, 243, 244)
            }
            .P9KVBf .hQnXo {
                background-color: rgb(60, 64, 67)
            }
            .P9KVBf .hQnXo:not(:disabled) {
                background-color: rgb(60, 64, 67)
            }
            .hQnXo.sMVRZe {
                background-color: #fff;
                box-shadow: 0 1px 2px rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
                height: unset;
                left: unset
            }
            .hQnXo.sMVRZe:not(:disabled) {
                background-color: #fff
            }
            .P9KVBf .hQnXo.sMVRZe {
                background-color: rgb(32, 33, 36)
            }
            .P9KVBf .hQnXo.sMVRZe:not(:disabled) {
                background-color: rgb(32, 33, 36)
            }
            .P9KVBf .hQnXo.sMVRZe {
                box-shadow: 0 1px 2px rgba(0, 0, 0, .3), 0 1px 3px 1px rgba(0, 0, 0, .15)
            }
            .j1R2Me {
                display: inline
            }
            .UJwHBc,
            .NGOzcb {
                display: none
            }
            .VnJy5c {
                margin: 0 12px
            }
            .VnJy5c .dbAtlf {
                font-size: 18px;
                padding: 7px
            }
        }

        @media screen and (hover:none) and (min-width:840px) and (min-width:840px) {
            .hQnXo {
                margin: 8px auto
            }
        }

        @media screen and (hover:none) and (min-width:840px) and (min-width:960px) {
            .QvOuef {
                position: absolute
            }
            .hQnXo {
                width: calc(100vw - 420px)
            }
        }

        .VfPpkd-AznF2e-vzJc7b {
            overflow-y: hidden
        }

        .VfPpkd-AznF2e-vzJc7b.VfPpkd-AznF2e-vzJc7b-OWXEXe-oT9UPb .VfPpkd-AznF2e-LUERP-bN97Pc {
            transition: .25s transform cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-AznF2e-OFz35 {
            position: absolute;
            top: -9999px;
            width: 100px;
            height: 100px;
            overflow-x: scroll
        }

        .VfPpkd-AznF2e-LUERP-vJ7A6b {
            -webkit-overflow-scrolling: touch;
            display: flex;
            overflow-x: hidden
        }

        .VfPpkd-AznF2e-LUERP-vJ7A6b::-webkit-scrollbar,
        .VfPpkd-AznF2e-OFz35::-webkit-scrollbar {
            display: none
        }

        .VfPpkd-AznF2e-LUERP-vJ7A6b-OWXEXe-XuHpsb {
            overflow-x: scroll
        }

        .VfPpkd-AznF2e-LUERP-bN97Pc {
            position: relative;
            display: flex;
            flex: 1 0 auto;
            transform: none;
            will-change: transform
        }

        .VfPpkd-AznF2e-vzJc7b-OWXEXe-fW01td-I3Yihd .VfPpkd-AznF2e-LUERP-bN97Pc {
            justify-content: flex-start
        }

        .VfPpkd-AznF2e-vzJc7b-OWXEXe-fW01td-CpWD9d .VfPpkd-AznF2e-LUERP-bN97Pc {
            justify-content: flex-end
        }

        .VfPpkd-AznF2e-vzJc7b-OWXEXe-fW01td-oXtfBe .VfPpkd-AznF2e-LUERP-bN97Pc {
            justify-content: center
        }

        .VfPpkd-AznF2e-vzJc7b-OWXEXe-oT9UPb .VfPpkd-AznF2e-LUERP-vJ7A6b {
            -webkit-overflow-scrolling: auto
        }

        .VfPpkd-AznF2e {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            font-family: Roboto, sans-serif;
            font-family: var(--mdc-typography-button-font-family, var(--mdc-typography-font-family, Roboto, sans-serif));
            font-size: .875rem;
            font-size: var(--mdc-typography-button-font-size, .875rem);
            line-height: 2.25rem;
            line-height: var(--mdc-typography-button-line-height, 2.25rem);
            font-weight: 500;
            font-weight: var(--mdc-typography-button-font-weight, 500);
            letter-spacing: .0892857143em;
            letter-spacing: var(--mdc-typography-button-letter-spacing, .0892857143em);
            text-decoration: none;
            -webkit-text-decoration: var(--mdc-typography-button-text-decoration, none);
            text-decoration: var(--mdc-typography-button-text-decoration, none);
            text-transform: uppercase;
            text-transform: var(--mdc-typography-button-text-transform, uppercase);
            position: relative
        }

        .VfPpkd-AznF2e .VfPpkd-jY41G-V67aGc {
            color: rgba(0, 0, 0, .6)
        }

        .VfPpkd-AznF2e .VfPpkd-cfyjzb {
            color: rgba(0, 0, 0, .54);
            fill: currentColor
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec,
        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 8px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% - 12px);
            width: calc(100% - 8px);
            margin-top: -2px;
            z-index: 2
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec,
            .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec::after,
        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 10px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec::after,
            .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-wJCpie-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wJCpie-LhBDec,
        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wJCpie-LhBDec {
            pointer-events: none;
            border: 2px solid transparent;
            border-radius: 8px;
            box-sizing: content-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% - 8px);
            width: calc(100% - 8px);
            z-index: 2
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wJCpie-LhBDec,
            .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wJCpie-LhBDec {
                border-color: CanvasText
            }
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wJCpie-LhBDec::after,
        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wJCpie-LhBDec::after {
            content: "";
            border: 2px solid transparent;
            border-radius: 10px;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: calc(100% + 4px);
            width: calc(100% + 4px)
        }

        @media screen and (forced-colors:active) {
            .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-wJCpie-LhBDec::after,
            .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-wJCpie-LhBDec::after {
                border-color: CanvasText
            }
        }

        .VfPpkd-N5Lhkf {
            position: relative
        }

        .VfPpkd-cfyjzb {
            width: 24px;
            height: 24px;
            font-size: 24px
        }

        .VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            color: #6200ee;
            color: var(--mdc-theme-primary, #6200ee);
            fill: currentColor
        }

        .VfPpkd-AznF2e {
            background: none
        }

        .VfPpkd-AznF2e {
            min-width: 90px;
            padding-right: 24px;
            padding-left: 24px;
            display: flex;
            flex: 1 0 auto;
            justify-content: center;
            box-sizing: border-box;
            margin: 0;
            padding-top: 0;
            padding-bottom: 0;
            border: none;
            outline: none;
            text-align: center;
            white-space: nowrap;
            cursor: pointer;
            -webkit-appearance: none;
            z-index: 1
        }

        .VfPpkd-AznF2e::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .VfPpkd-AznF2e[hidden] {
            display: none
        }

        .VfPpkd-AznF2e-OWXEXe-jJNx8e-QBLLGd {
            flex: 0 1 auto
        }

        .VfPpkd-N5Lhkf {
            display: flex;
            align-items: center;
            justify-content: center;
            height: inherit;
            pointer-events: none
        }

        .VfPpkd-jY41G-V67aGc {
            transition: .15s color linear;
            display: inline-block;
            line-height: 1;
            z-index: 2
        }

        .VfPpkd-cfyjzb {
            transition: .15s color linear;
            z-index: 2
        }

        .VfPpkd-AznF2e-OWXEXe-eu7FSc .VfPpkd-N5Lhkf {
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .VfPpkd-AznF2e-OWXEXe-eu7FSc .VfPpkd-jY41G-V67aGc {
            padding-top: 6px;
            padding-bottom: 4px
        }

        .VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc,
        .VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            transition-delay: .1s
        }

        .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-eu7FSc) .VfPpkd-cfyjzb+.VfPpkd-jY41G-V67aGc {
            padding-left: 8px;
            padding-right: 0
        }

        [dir=rtl] .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-eu7FSc) .VfPpkd-cfyjzb+.VfPpkd-jY41G-V67aGc,
        .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-eu7FSc) .VfPpkd-cfyjzb+.VfPpkd-jY41G-V67aGc[dir=rtl] {
            padding-left: 0;
            padding-right: 8px
        }

        .VfPpkd-AznF2e {
            --mdc-ripple-fg-size: 0;
            --mdc-ripple-left: 0;
            --mdc-ripple-top: 0;
            --mdc-ripple-fg-scale: 1;
            --mdc-ripple-fg-translate-end: 0;
            --mdc-ripple-fg-translate-start: 0;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        .VfPpkd-AznF2e .VfPpkd-YVzG2b::before,
        .VfPpkd-AznF2e .VfPpkd-YVzG2b::after {
            position: absolute;
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            content: ""
        }

        .VfPpkd-AznF2e .VfPpkd-YVzG2b::before {
            transition: opacity 15ms linear, background-color 15ms linear;
            z-index: 1;
            z-index: var(--mdc-ripple-z-index, 1)
        }

        .VfPpkd-AznF2e .VfPpkd-YVzG2b::after {
            z-index: 0;
            z-index: var(--mdc-ripple-z-index, 0)
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d .VfPpkd-YVzG2b::before {
            transform: scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d .VfPpkd-YVzG2b::after {
            top: 0;
            left: 0;
            transform: scale(0);
            transform-origin: center center
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-ZNMTqd .VfPpkd-YVzG2b::after {
            top: var(--mdc-ripple-top, 0);
            left: var(--mdc-ripple-left, 0)
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-lJfZMc .VfPpkd-YVzG2b::after {
            animation: mdc-ripple-fg-radius-in 225ms forwards, mdc-ripple-fg-opacity-in 75ms forwards
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-Tv8l5d-OmS1vf .VfPpkd-YVzG2b::after {
            animation: mdc-ripple-fg-opacity-out .15s;
            transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
        }

        .VfPpkd-AznF2e .VfPpkd-YVzG2b::before,
        .VfPpkd-AznF2e .VfPpkd-YVzG2b::after {
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d .VfPpkd-YVzG2b::after {
            width: var(--mdc-ripple-fg-size, 100%);
            height: var(--mdc-ripple-fg-size, 100%)
        }

        .VfPpkd-AznF2e .VfPpkd-YVzG2b::before,
        .VfPpkd-AznF2e .VfPpkd-YVzG2b::after {
            background-color: #6200ee;
            background-color: var(--mdc-ripple-color, var(--mdc-theme-primary, #6200ee))
        }

        .VfPpkd-AznF2e:hover .VfPpkd-YVzG2b::before,
        .VfPpkd-AznF2e.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .VfPpkd-AznF2e:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .VfPpkd-AznF2e.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .VfPpkd-YVzG2b {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            will-change: transform, opacity
        }

        .WbUJNb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            padding-right: 16px;
            padding-left: 16px;
            text-transform: none;
            min-width: auto
        }

        .WbUJNb .VfPpkd-jY41G-V67aGc {
            color: rgb(95, 99, 104)
        }

        .WbUJNb .VfPpkd-cfyjzb {
            color: rgb(95, 99, 104);
            fill: currentColor
        }

        .WbUJNb .VfPpkd-YVzG2b::before,
        .WbUJNb .VfPpkd-YVzG2b::after {
            background-color: rgb(60, 64, 67);
            background-color: var(--mdc-ripple-color, rgb(60, 64, 67))
        }

        .WbUJNb:hover .VfPpkd-YVzG2b::before,
        .WbUJNb.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .WbUJNb.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .WbUJNb:hover .VfPpkd-jY41G-V67aGc,
        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-jY41G-V67aGc,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-jY41G-V67aGc,
        .WbUJNb:active .VfPpkd-jY41G-V67aGc {
            color: rgb(32, 33, 36)
        }

        .WbUJNb:hover .VfPpkd-cfyjzb,
        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-cfyjzb,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-cfyjzb,
        .WbUJNb:active .VfPpkd-cfyjzb {
            color: rgb(32, 33, 36);
            fill: currentColor
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-YVzG2b::before,
        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-YVzG2b::after {
            background-color: rgb(26, 115, 232);
            background-color: var(--mdc-ripple-color, rgb(26, 115, 232))
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd:hover .VfPpkd-YVzG2b::before,
        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: rgb(26, 115, 232)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            color: rgb(26, 115, 232);
            fill: currentColor
        }

        .WbUJNb:hover.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc,
        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc,
        .WbUJNb:active.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: rgb(23, 78, 166)
        }

        .WbUJNb:hover.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb,
        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb,
        .WbUJNb:active.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            color: rgb(23, 78, 166);
            fill: currentColor
        }

        .WbUJNb:hover .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .WbUJNb.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .WbUJNb:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .WbUJNb:active .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(23, 78, 166)
        }

        .WbUJNb.VfPpkd-AznF2e-OWXEXe-eu7FSc {
            height: 64px
        }

        .JJYS0b {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            padding-right: 16px;
            padding-left: 16px;
            text-transform: none;
            min-width: auto
        }

        .JJYS0b .VfPpkd-jY41G-V67aGc {
            color: rgb(95, 99, 104)
        }

        .JJYS0b .VfPpkd-cfyjzb {
            color: rgb(95, 99, 104);
            fill: currentColor
        }

        .JJYS0b:hover .VfPpkd-jY41G-V67aGc,
        .JJYS0b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-jY41G-V67aGc,
        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-jY41G-V67aGc,
        .JJYS0b:active .VfPpkd-jY41G-V67aGc {
            color: rgb(32, 33, 36)
        }

        .JJYS0b:hover .VfPpkd-cfyjzb,
        .JJYS0b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-cfyjzb,
        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-cfyjzb,
        .JJYS0b:active .VfPpkd-cfyjzb {
            color: rgb(32, 33, 36);
            fill: currentColor
        }

        .JJYS0b .VfPpkd-YVzG2b::before,
        .JJYS0b .VfPpkd-YVzG2b::after {
            background-color: rgb(60, 64, 67);
            background-color: var(--mdc-ripple-color, rgb(60, 64, 67))
        }

        .JJYS0b:hover .VfPpkd-YVzG2b::before,
        .JJYS0b.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .JJYS0b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-press-opacity, .12)
        }

        .JJYS0b.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.12)
        }

        .JJYS0b.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: rgb(32, 33, 36)
        }

        .JJYS0b.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            color: rgb(32, 33, 36);
            fill: currentColor
        }

        .JJYS0b:hover .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .JJYS0b.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .JJYS0b:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb,
        .JJYS0b:active .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(23, 78, 166)
        }

        .VfPpkd-AznF2e-uDEFge .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #6200ee;
            border-color: var(--mdc-theme-primary, #6200ee)
        }

        .VfPpkd-AznF2e-uDEFge .VfPpkd-AznF2e-wEcVzc-OWXEXe-Bz112c {
            color: #018786;
            color: var(--mdc-theme-secondary, #018786)
        }

        .VfPpkd-AznF2e-uDEFge .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-top-width: 2px
        }

        .VfPpkd-AznF2e-uDEFge .VfPpkd-AznF2e-wEcVzc-OWXEXe-Bz112c {
            height: 34px;
            font-size: 34px
        }

        .VfPpkd-AznF2e-uDEFge {
            display: flex;
            position: absolute;
            top: 0;
            left: 0;
            justify-content: center;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1
        }

        .VfPpkd-AznF2e-wEcVzc {
            transform-origin: left;
            opacity: 0
        }

        .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            align-self: flex-end;
            box-sizing: border-box;
            width: 100%;
            border-top-style: solid
        }

        .VfPpkd-AznF2e-wEcVzc-OWXEXe-Bz112c {
            align-self: center;
            margin: 0 auto
        }

        .VfPpkd-AznF2e-uDEFge-OWXEXe-auswjd .VfPpkd-AznF2e-wEcVzc {
            opacity: 1
        }

        .VfPpkd-AznF2e-uDEFge .VfPpkd-AznF2e-wEcVzc {
            transition: .25s transform cubic-bezier(.4, 0, .2, 1)
        }

        .VfPpkd-AznF2e-uDEFge-OWXEXe-di8rgd-RCfa3e .VfPpkd-AznF2e-wEcVzc {
            transition: none
        }

        .VfPpkd-AznF2e-uDEFge-OWXEXe-GN5I5c .VfPpkd-AznF2e-wEcVzc {
            transition: .15s opacity linear
        }

        .VfPpkd-AznF2e-uDEFge-OWXEXe-auswjd.VfPpkd-AznF2e-uDEFge-OWXEXe-GN5I5c .VfPpkd-AznF2e-wEcVzc {
            transition-delay: .1s
        }

        .rvBHac .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(26, 115, 232)
        }

        .rvBHac .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-top-width: 3px
        }

        .rvBHac .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .pawmVc {
            margin: 0 2px;
            min-width: 24px
        }

        .PRdtG .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(26, 115, 232)
        }

        .VfPpkd-AznF2e-ZMv3u {
            width: 100%
        }

        .VfPpkd-AznF2e {
            height: 48px
        }

        .VfPpkd-AznF2e-OWXEXe-eu7FSc {
            height: 72px
        }

        .ZcNJTb,
        .P8HBFd {
            display: none
        }

        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd:hover .VfPpkd-YVzG2b::before,
        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-active-hover-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-active-focus-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-active-pressed-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e.VfPpkd-AznF2e-OWXEXe-auswjd.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-primary-navigation-tab-active-pressed-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd):hover .VfPpkd-YVzG2b::before,
        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd).VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-YVzG2b::before {
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-inactive-hover-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-YVzG2b::before,
        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd):not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-YVzG2b::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-inactive-focus-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd):not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-YVzG2b::after {
            transition: opacity .15s linear
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd):not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-YVzG2b::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-primary-navigation-tab-inactive-pressed-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-auswjd).VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-primary-navigation-tab-inactive-pressed-state-layer-opacity, 0)
        }

        .ucf8re .VfPpkd-AznF2e:not(.VfPpkd-AznF2e-OWXEXe-eu7FSc) {
            height: 64px;
            height: var(--mdc-primary-navigation-tab-container-height, 64px)
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):hover.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):focus.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):active.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:disabled.VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):not(.VfPpkd-AznF2e-OWXEXe-auswjd) .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):hover:not(.VfPpkd-AznF2e-OWXEXe-auswjd) .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):focus:not(.VfPpkd-AznF2e-OWXEXe-auswjd) .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:not(:disabled):active:not(.VfPpkd-AznF2e-OWXEXe-auswjd) .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .ucf8re .VfPpkd-AznF2e:disabled:not(.VfPpkd-AznF2e-OWXEXe-auswjd) .VfPpkd-cfyjzb {
            fill: currentColor
        }

        .q2wkXd:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #01875f
        }

        .q2wkXd:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #01875f
        }

        .P9KVBf .q2wkXd:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #00a173
        }

        .P9KVBf .q2wkXd:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #00a173
        }

        .cvzg3c:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #01875f
        }

        .cvzg3c:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #01875f
        }

        .P9KVBf .cvzg3c:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #00a173
        }

        .P9KVBf .cvzg3c:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #00a173
        }

        .AthEce:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #0179ca
        }

        .AthEce:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #0179ca
        }

        .P9KVBf .AthEce:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #50b4f4
        }

        .P9KVBf .AthEce:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #50b4f4
        }

        .ROhV3c:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #c71c56
        }

        .ROhV3c:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #c71c56
        }

        .P9KVBf .ROhV3c:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: #ff3369
        }

        .P9KVBf .ROhV3c:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: #ff3369
        }

        .dUghbc:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: rgb(32, 33, 36)
        }

        .dUghbc:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(32, 33, 36)
        }

        .P9KVBf .dUghbc:nth-child(n):nth-child(n).VfPpkd-AznF2e-OWXEXe-auswjd .VfPpkd-jY41G-V67aGc {
            color: rgb(232, 234, 237)
        }

        .P9KVBf .dUghbc:nth-child(n):nth-child(n) .VfPpkd-AznF2e-wEcVzc-OWXEXe-NowJzb {
            border-color: rgb(232, 234, 237)
        }

        @media screen and (min-width:840px) {
            .P8HBFd {
                display: block
            }
        }

        .oc9n0c {
            align-items: center;
            display: flex;
            margin: 0 10px 0 auto
        }

        .r9optf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .r9optf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .r9optf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .r9optf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .oPjgQb {
            align-items: center;
            display: flex;
            height: 56px;
            width: 100%
        }

        .QKrU5e {
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)
        }

        .S3WLMd {
            background-color: #fff;
            position: fixed;
            top: 0;
            transition: box-shadow .2s ease-in-out;
            width: 100%;
            z-index: 3
        }

        .P9KVBf .S3WLMd {
            background-color: rgb(32, 33, 36)
        }

        .f0UV3d {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.75rem;
            font-size: 1.375rem;
            letter-spacing: 0;
            font-weight: 400;
            font-weight: 500;
            align-items: center;
            display: flex;
            height: 100%;
            margin: 0 16px;
            white-space: nowrap;
            z-index: 1
        }

        .f0UV3d:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .f0UV3d {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .f0UV3d:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .f0UV3d:focus:not(:focus-visible) {
            outline: none
        }

        .kOqhQd {
            margin-right: 8px;
            height: 40px;
            width: 40px
        }

        @media (hover:none) {
            .SwliHe {
                display: none
            }
        }

        @media screen and (min-width:840px) {
            .oPjgQb {
                height: 64px
            }
            .f0UV3d {
                margin: 0 14px 0 28px
            }
            .SwliHe {
                display: flex
            }
        }

        .glB9Ve {
            margin-top: 80px
        }

        .Czez9d {
            margin-top: 56px
        }

        .glB9Ve.xsXTx,
        .Czez9d.xsXTx {
            margin-top: 0
        }

        .nI07g {
            margin-left: 24px;
            margin-right: 24px
        }

        @media screen and (min-width:600px) {
            .nI07g {
                margin-left: 48px;
                margin-right: 48px
            }
        }

        @media screen and (min-width:1280px) {
            .nI07g {
                margin-left: 72px;
                margin-right: 72px
            }
        }

        @media screen and (min-width:1440px) {
            .nI07g {
                margin-left: auto;
                margin-right: auto;
                max-width: 1296px
            }
        }

        @media (hover:hover) {
            .glB9Ve {
                margin-top: 128px
            }
            .Czez9d {
                margin-top: 104px
            }
        }

        @media screen and (min-width:840px) {
            .glB9Ve {
                margin-top: 88px
            }
            .Czez9d {
                margin-top: 64px
            }
        }

        .w7Iutd {
            align-items: center;
            display: flex
        }

        .w7Iutd>:first-child:last-child~.wVqUob,
        .w7Iutd>:first-child:nth-last-child(2)~.wVqUob,
        .w7Iutd>:first-child:nth-last-child(3)~.wVqUob {
            padding: 0 24px
        }

        .wVqUob {
            padding: 0 16px;
            position: relative;
            min-width: 96px
        }

        .wVqUob:first-child {
            padding-left: 0
        }

        .wVqUob:not(:first-child)::before {
            background-color: rgb(232, 234, 237);
            content: "";
            display: block;
            height: 24px;
            left: 0;
            position: absolute;
            top: calc(50% - 12px);
            width: 1px
        }

        .P9KVBf .wVqUob:not(:first-child)::before {
            background-color: rgb(60, 64, 67)
        }

        .ClM7O {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            align-items: center;
            display: flex;
            height: 24px;
            justify-content: center;
            white-space: nowrap
        }

        .ClM7O:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .ClM7O {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .ClM7O:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .g1rdde {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            align-items: center;
            display: flex;
            height: 20px;
            justify-content: center;
            white-space: nowrap
        }

        .g1rdde:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .g1rdde {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .g1rdde:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .eQLGk {
            cursor: pointer;
            line-height: 12px;
            margin-left: 4px
        }

        .TT9eCd {
            align-items: center;
            display: flex
        }

        .ERwvGb:nth-child(n) {
            font-size: 12px
        }

        .yyf8A:nth-child(n) {
            font-size: inherit
        }

        .z9nYqc {
            cursor: pointer;
            line-height: 12px;
            margin-left: 4px
        }

        .hJ7Hse:nth-child(n) {
            font-size: inherit
        }

        .Qh5JFb {
            line-height: 12px;
            margin-left: 4px
        }

        .atLm6 {
            margin-right: 16px;
            vertical-align: middle
        }

        .svjvqd {
            height: 18px;
            margin-right: 7px;
            width: 18px
        }

        .XjKdFd {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            margin-bottom: 12px
        }

        .XjKdFd:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .XjKdFd {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .XjKdFd:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .sUSdNe {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            margin-bottom: 10px
        }

        .sUSdNe:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .sUSdNe {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .sUSdNe:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .m46uhe {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .m46uhe:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .m46uhe {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .m46uhe:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .N8A3ib {
            font-size: .75rem;
            font-weight: 400;
            height: 48px;
            margin-top: 0;
            margin-bottom: 0;
            border-radius: 8px
        }

        .N8A3ib .VfPpkd-kBDsod {
            font-size: 1rem;
            width: 1rem;
            height: 1rem
        }

        .N8A3ib .VfPpkd-RLmnJb {
            height: 100%
        }

        .N8A3ib .VfPpkd-Jh9lGc {
            border-radius: 8px
        }

        .B8vmF {
            font-size: .75rem;
            font-weight: 400;
            border-radius: 8px;
            padding: 0
        }

        .B8vmF .VfPpkd-kBDsod {
            font-size: 1rem;
            width: 1rem;
            height: 1rem
        }

        .B8vmF .VfPpkd-Jh9lGc {
            border-radius: 8px
        }

        .SnQSJf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            display: flex;
            align-items: center
        }

        .SnQSJf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .SnQSJf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .SnQSJf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .NSgJbf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            display: flex;
            align-items: center;
            margin-top: 20px
        }

        .NSgJbf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .NSgJbf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .NSgJbf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .EcKMce {
            font-size: .75rem;
            font-weight: 400
        }

        .qWEIpd {
            margin-left: 8px;
            margin-right: 8px
        }

        .qWEIpd:nth-child(n) {
            font-size: 16px
        }

        @media screen and (min-width:1280px) {
            .N8A3ib {
                font-size: .875rem
            }
        }

        .U1pfve {
            flex-shrink: 0;
            margin-right: 6px
        }

        .U1pfve:nth-child(n) {
            font-size: 25px
        }

        .j1J7Vc {
            z-index: 0
        }

        .X7dYee {
            align-items: center;
            display: flex;
            margin-left: 5px;
            padding: 4px 0
        }

        .fKG8ve {
            margin: 0 30px 0 12px
        }

        .Peiswb {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            margin-bottom: 12px
        }

        .Peiswb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .Peiswb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .Peiswb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .lPVVWd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            margin-bottom: 10px
        }

        .lPVVWd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .lPVVWd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .lPVVWd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .tU8Y5c {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .tU8Y5c:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .tU8Y5c {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .tU8Y5c:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .wkMJlb {
            margin: 0 auto;
            min-height: 56px;
            position: relative;
            width: calc(100% - 48px)
        }

        .YWi3ub {
            max-width: 1296px
        }

        .DAXFJc {
            max-width: 1600px
        }

        .dzkqwc {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            padding-bottom: 32px
        }

        .dzkqwc:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .dzkqwc {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .dzkqwc:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        body:not(.P9KVBf) .P9KVBf .dzkqwc {
            background-color: #202124
        }

        body:not(.P9KVBf) .P9KVBf .dzkqwc:not(:disabled) {
            background-color: #202124
        }

        .smjjUc {
            position: fixed;
            top: 96px;
            z-index: 1
        }

        .F0CGId,
        .nRgZne {
            margin-top: 40px
        }

        .atOvg {
            display: none
        }

        @media screen and (min-width:600px) {
            .wkMJlb {
                width: calc(100% - 96px)
            }
        }

        @media screen and (min-width:960px) {
            .nRgZne {
                display: flex;
                justify-content: space-between
            }
            .qZmL0 {
                width: calc(100% - 348px)
            }
            .o45e4d {
                width: 276px
            }
            .srfs5 {
                width: calc(50% - 12px)
            }
            .atOvg {
                display: inherit
            }
            .OaCuEc {
                display: none
            }
            .owletd {
                position: fixed;
                right: 48px;
                top: 132px
            }
            .Zmm8o {
                bottom: 0;
                position: absolute;
                right: 0
            }
        }

        @media screen and (min-width:1280px) {
            .qZmL0 {
                width: calc(100% - 436px)
            }
            .o45e4d {
                width: 364px
            }
            .wkMJlb {
                width: calc(100% - 144px)
            }
            .owletd {
                right: 72px
            }
        }

        @media screen and (min-width:1440px) {
            .DDv5Bb {
                right: calc(50% - 648px)
            }
        }

        @media screen and (min-width:1744px) {
            .tc8wJ {
                right: calc(50% - 800px)
            }
        }

        .Z1Dz7b {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .Z1Dz7b:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .Z1Dz7b {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .Z1Dz7b:not(:disabled) {
            color: #00a173
        }

        .qOrUJd {
            color: #0179ca;
            fill: #0179ca;
            stop-color: #0179ca
        }

        .qOrUJd:not(:disabled) {
            color: #0179ca
        }

        .P9KVBf .qOrUJd {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .qOrUJd:not(:disabled) {
            color: #50b4f4
        }

        .p3tk0 {
            color: #c71c56;
            fill: #c71c56;
            stop-color: #c71c56
        }

        .p3tk0:not(:disabled) {
            color: #c71c56
        }

        .P9KVBf .p3tk0 {
            color: #ff3369;
            fill: #ff3369;
            stop-color: #ff3369
        }

        .P9KVBf .p3tk0:not(:disabled) {
            color: #ff3369
        }

        .wcB8se {
            background-color: #01875f
        }

        .wcB8se:not(:disabled) {
            background-color: #01875f
        }

        .P9KVBf .wcB8se {
            background-color: #00a173
        }

        .P9KVBf .wcB8se:not(:disabled) {
            background-color: #00a173
        }

        .lf0Bpf {
            background-color: #0179ca
        }

        .lf0Bpf:not(:disabled) {
            background-color: #0179ca
        }

        .P9KVBf .lf0Bpf {
            background-color: #50b4f4
        }

        .P9KVBf .lf0Bpf:not(:disabled) {
            background-color: #50b4f4
        }

        .Dy42ad {
            background-color: #c71c56
        }

        .Dy42ad:not(:disabled) {
            background-color: #c71c56
        }

        .P9KVBf .Dy42ad {
            background-color: #ff3369
        }

        .P9KVBf .Dy42ad:not(:disabled) {
            background-color: #ff3369
        }

        .wtdZ1c {
            margin-top: 25px;
            display: flex
        }

        .PCpMl {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-size: 1rem;
            font-weight: 400;
            letter-spacing: .0125em;
            line-height: 1.5rem
        }

        .PCpMl:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .PCpMl {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .PCpMl:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .q0hsib {
            margin: 10px 0
        }

        .ERjVt {
            margin: auto;
            width: 100%
        }

        .zr0aGc {
            display: flex;
            justify-content: space-between
        }

        .njDCuc {
            width: 100%
        }

        .Qap6Zd {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .6875rem;
            letter-spacing: .0727272727em;
            font-weight: 500;
            text-transform: uppercase
        }

        .DfQkVd {
            column-gap: 20px;
            display: grid;
            grid-template-columns: repeat(1, auto)
        }

        .PuYTX {
            padding: 24px;
            margin-top: 20px;
            border: 1px solid;
            border-color: rgb(218, 220, 224);
            border-radius: 8px
        }

        .PuYTX:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .PuYTX {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .PuYTX:not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .qWaare {
            display: flex;
            justify-content: space-between
        }

        .ID8ywc {
            text-align: right;
            min-height: unset;
            outline: none;
            cursor: pointer
        }

        .ID8ywc:hover,
        .ID8ywc:active {
            text-decoration: underline
        }

        .ID8ywc:disabled {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .ID8ywc:disabled:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .ID8ywc:disabled {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .P9KVBf .ID8ywc:disabled:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .gbNCWd {
            margin-top: 15px;
            display: flex;
            justify-content: space-between
        }

        .XlHvpd {
            flex-direction: row-reverse;
            display: flex;
            width: 100%
        }

        @media screen and (min-width:700px) {
            .ERjVt {
                width: unset
            }
            .zr0aGc {
                column-gap: 30px;
                display: grid;
                grid-template-columns: repeat(5, auto)
            }
            .DfQkVd {
                grid-template-columns: repeat(2, auto)
            }
        }

        .B6OPpd {
            align-items: flex-start;
            display: flex;
            margin-top: 12px
        }

        .FKQO6 {
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
            vertical-align: middle
        }

        .cXHvHc {
            margin-left: 16px
        }

        .pH8Kj {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-size: 1rem;
            font-weight: 400;
            letter-spacing: .00625em;
            line-height: 1.5rem
        }

        .pH8Kj:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .pH8Kj {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .pH8Kj:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .GR37Ed {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            margin-top: 6px
        }

        .AMTWz {
            align-items: center;
            display: flex;
            height: 52px;
            margin-top: 18px;
            margin-bottom: 31px
        }

        .Opz00c {
            margin-right: 6px
        }

        .aazPze {
            display: flex;
            flex: 2;
            font-size: 18px;
            font-weight: 500;
            margin-left: 21px
        }

        .D3Qfie {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            background-color: #fff;
            border: 1px rgb(218, 220, 224) solid;
            border-radius: 8px;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            height: 32px;
            letter-spacing: .25px;
            line-height: 18px;
            min-width: auto;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: none;
            transition: background .2s .1s;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            z-index: 0
        }

        .P9KVBf .D3Qfie {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166)
        }

        .P9KVBf .D3Qfie {
            background-color: rgb(32, 33, 36)
        }

        .P9KVBf .D3Qfie {
            border: 1px rgb(95, 99, 104) solid
        }

        .P9KVBf .D3Qfie::before,
        .P9KVBf .D3Qfie::after {
            background-color: rgb(218, 220, 224);
            background-color: var(--mdc-ripple-color, rgb(218, 220, 224))
        }

        .P9KVBf .D3Qfie:hover::before,
        .P9KVBf .D3Qfie.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE::before {
            opacity: .08;
            opacity: var(--mdc-ripple-hover-opacity, .08)
        }

        .P9KVBf .D3Qfie.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe::before,
        .P9KVBf .D3Qfie:not(.VfPpkd-ksKsZd-mWPk3d):focus::before {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-focus-opacity, .24)
        }

        .P9KVBf .D3Qfie:not(.VfPpkd-ksKsZd-mWPk3d)::after {
            transition: opacity .15s linear
        }

        .P9KVBf .D3Qfie:not(.VfPpkd-ksKsZd-mWPk3d):active::after {
            transition-duration: 75ms;
            opacity: .24;
            opacity: var(--mdc-ripple-press-opacity, .24)
        }

        .P9KVBf .D3Qfie.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.24)
        }

        .D3Qfie.qs41qe {
            border: none;
            padding: 1px
        }

        .D3Qfie.KKjvXb {
            color: rgb(26, 115, 232);
            fill: rgb(26, 115, 232);
            background-color: rgb(232, 240, 254);
            border: none;
            padding: 1px
        }

        .P9KVBf .D3Qfie.KKjvXb {
            color: rgb(138, 180, 248);
            fill: rgb(138, 180, 248)
        }

        .P9KVBf .D3Qfie.KKjvXb {
            background-color: rgba(138, 180, 248, .24)
        }

        .P9KVBf .D3Qfie:focus {
            color: #fff;
            fill: #fff
        }

        .D3Qfie:focus .Gggmbb {
            opacity: .12
        }

        .D3Qfie .Gggmbb {
            background-color: rgb(95, 99, 104)
        }

        .P9KVBf .D3Qfie .Gggmbb {
            background-color: rgb(218, 220, 224)
        }

        .Gggmbb {
            bottom: 0;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .UQI9cd {
            height: 24px;
            line-height: 10px
        }

        .UQI9cd .kW9Bj {
            margin: 0 12px
        }

        .kW9Bj {
            align-items: center;
            display: flex;
            position: relative;
            margin: 0 16px
        }

        .kW9Bj .ypTNYd {
            display: inline-block;
            margin: 6px 4px
        }

        .c6xzBd {
            display: inline-flex;
            flex-shrink: 0;
            margin: 0 4px 0 0
        }

        .c6xzBd.jv2yne {
            display: none
        }

        .D3Qfie.u3bW4e {
            outline: 1px solid transparent
        }

        @charset "UTF-8";
        .b6SkTb {
            display: flex;
            flex-wrap: wrap;
            gap: 12px
        }

        .rE4BKe {
            gap: 12px
        }

        .kofMvc {
            border-radius: 9999px
        }

        .kofMvc .Ka7T4c,
        .KnEF3e .Ka7T4c {
            font-size: 16px
        }

        .KuPXpe {
            border: 0
        }

        .KuPXpe.mrSlsb {
            color: #056449;
            fill: #056449;
            stop-color: #056449
        }

        .KuPXpe.mrSlsb:not(:disabled) {
            color: #056449
        }

        .P9KVBf .KuPXpe.mrSlsb {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .KuPXpe.mrSlsb:not(:disabled) {
            color: #00b380
        }

        .KuPXpe.EFMXQ {
            color: #056449;
            fill: #056449;
            stop-color: #056449
        }

        .KuPXpe.EFMXQ:not(:disabled) {
            color: #056449
        }

        .P9KVBf .KuPXpe.EFMXQ {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .KuPXpe.EFMXQ:not(:disabled) {
            color: #00b380
        }

        .KuPXpe.NWM5Eb {
            color: #8a0d37;
            fill: #8a0d37;
            stop-color: #8a0d37
        }

        .KuPXpe.NWM5Eb:not(:disabled) {
            color: #8a0d37
        }

        .P9KVBf .KuPXpe.NWM5Eb {
            color: #ff708c;
            fill: #ff708c;
            stop-color: #ff708c
        }

        .P9KVBf .KuPXpe.NWM5Eb:not(:disabled) {
            color: #ff708c
        }

        .KuPXpe.ArLwsf {
            color: #035282;
            fill: #035282;
            stop-color: #035282
        }

        .KuPXpe.ArLwsf:not(:disabled) {
            color: #035282
        }

        .P9KVBf .KuPXpe.ArLwsf {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .KuPXpe.ArLwsf:not(:disabled) {
            color: #50b4f4
        }

        .zhWc7e {
            height: 16px;
            width: 16px
        }

        .ah7Sve {
            background-color: #fff;
            border-radius: 4px
        }

        .ah7Sve:not(:disabled) {
            background-color: #fff
        }

        .P9KVBf .ah7Sve {
            background-color: rgb(32, 33, 36)
        }

        .P9KVBf .ah7Sve:not(:disabled) {
            background-color: rgb(32, 33, 36)
        }

        .KnEF3e {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem
        }

        .KnEF3e:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .KnEF3e {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .KnEF3e:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .KnEF3e.FwR7Pc {
            background-color: rgb(232, 234, 237)
        }

        .KnEF3e.FwR7Pc:not(:disabled) {
            background-color: rgb(232, 234, 237)
        }

        .P9KVBf .KnEF3e.FwR7Pc {
            background-color: rgb(60, 64, 67)
        }

        .P9KVBf .KnEF3e.FwR7Pc:not(:disabled) {
            background-color: rgb(60, 64, 67)
        }

        .ah7Sve.e5Emjc .KnEF3e {
            padding-left: 45px
        }

        .KnEF3e.N2RpBe::before {
            border-color: rgb(232, 234, 237);
            border-bottom: 2px solid;
            border-right: 2px solid;
            content: " ";
            display: block;
            height: 11px;
            left: 20px;
            opacity: 1;
            position: absolute;
            top: 24%;
            transform: rotate(45deg);
            transform-origin: left;
            width: 5px
        }

        .KnEF3e.N2RpBe::before:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .KnEF3e.N2RpBe::before {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .KnEF3e.N2RpBe::before:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .KnEF3e .Ce1Y1c {
            left: 16px
        }

        .mrSlsb.KKjvXb {
            color: #056449;
            fill: #056449;
            stop-color: #056449;
            background-color: #e6f3ef
        }

        .mrSlsb.KKjvXb:not(:disabled) {
            color: #056449
        }

        .P9KVBf .mrSlsb.KKjvXb {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .mrSlsb.KKjvXb:not(:disabled) {
            color: #00b380
        }

        .mrSlsb.KKjvXb:not(:disabled) {
            background-color: #e6f3ef
        }

        .P9KVBf .mrSlsb.KKjvXb {
            background-color: #013d2c
        }

        .P9KVBf .mrSlsb.KKjvXb:not(:disabled) {
            background-color: #013d2c
        }

        .EFMXQ.KKjvXb {
            color: #056449;
            fill: #056449;
            stop-color: #056449;
            background-color: #e6f3ef
        }

        .EFMXQ.KKjvXb:not(:disabled) {
            color: #056449
        }

        .P9KVBf .EFMXQ.KKjvXb {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .EFMXQ.KKjvXb:not(:disabled) {
            color: #00b380
        }

        .EFMXQ.KKjvXb:not(:disabled) {
            background-color: #e6f3ef
        }

        .P9KVBf .EFMXQ.KKjvXb {
            background-color: #013d2c
        }

        .P9KVBf .EFMXQ.KKjvXb:not(:disabled) {
            background-color: #013d2c
        }

        .NWM5Eb.KKjvXb {
            color: #8a0d37;
            fill: #8a0d37;
            stop-color: #8a0d37;
            background-color: #f9e8ee
        }

        .NWM5Eb.KKjvXb:not(:disabled) {
            color: #8a0d37
        }

        .P9KVBf .NWM5Eb.KKjvXb {
            color: #ff708c;
            fill: #ff708c;
            stop-color: #ff708c
        }

        .P9KVBf .NWM5Eb.KKjvXb:not(:disabled) {
            color: #ff708c
        }

        .NWM5Eb.KKjvXb:not(:disabled) {
            background-color: #f9e8ee
        }

        .P9KVBf .NWM5Eb.KKjvXb {
            background-color: #610b29
        }

        .P9KVBf .NWM5Eb.KKjvXb:not(:disabled) {
            background-color: #610b29
        }

        .ArLwsf.KKjvXb {
            color: #035282;
            fill: #035282;
            stop-color: #035282;
            background-color: #e5f1f9
        }

        .ArLwsf.KKjvXb:not(:disabled) {
            color: #035282
        }

        .P9KVBf .ArLwsf.KKjvXb {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .ArLwsf.KKjvXb:not(:disabled) {
            color: #50b4f4
        }

        .ArLwsf.KKjvXb:not(:disabled) {
            background-color: #e5f1f9
        }

        .P9KVBf .ArLwsf.KKjvXb {
            background-color: #024066
        }

        .P9KVBf .ArLwsf.KKjvXb:not(:disabled) {
            background-color: #024066
        }

        .EgPD2d {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            line-height: 1.25rem
        }

        .EgPD2d:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .EgPD2d {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .EgPD2d:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .YNR7H {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .ocpBU {
            background-color: rgb(248, 249, 250);
            display: grid;
            align-items: center;
            margin: 24px 24px 0;
            padding: 12px 16px 16px;
            grid-row-gap: 12px;
            grid-template-columns: 1fr
        }

        .ocpBU:not(:disabled) {
            background-color: rgb(248, 249, 250)
        }

        .P9KVBf .ocpBU {
            background-color: #2a2b2e
        }

        .P9KVBf .ocpBU:not(:disabled) {
            background-color: #2a2b2e
        }

        .T6E0ze {
            display: flex;
            align-items: center
        }

        .gSGphe {
            display: grid;
            align-items: center;
            grid-column-gap: 16px;
            grid-template-columns: repeat(2, max-content)
        }

        .abYEib {
            border-radius: 50%;
            width: 32px;
            height: 32px;
            overflow: hidden;
            background-size: cover
        }

        .X5PpBb {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem
        }

        .X5PpBb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .X5PpBb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .X5PpBb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .I6j64d {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem
        }

        .I6j64d:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .I6j64d {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .I6j64d:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .Jx4nYe,
        .AJTPZc {
            margin-top: 16px
        }

        .AJTPZc {
            font-family: Roboto, Arial, sans-serif;
            font-size: .75rem;
            font-weight: 400;
            letter-spacing: .025em;
            line-height: 1rem
        }

        .bp9Aid {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            font-size: .75rem;
            font-weight: 400;
            letter-spacing: .025em;
            line-height: 1rem;
            margin-left: 1ch
        }

        .bp9Aid:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .bp9Aid {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .bp9Aid:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .I9Jtec {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            margin-left: auto
        }

        .I9Jtec:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .I9Jtec {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .I9Jtec:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .ras4vb {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem
        }

        .ras4vb:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .ras4vb {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .ras4vb:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .Anb3we {
            align-items: center;
            display: flex;
            margin-top: 12px
        }

        .NC0Ppb {
            font-family: Roboto, Arial, sans-serif;
            font-size: .75rem;
            font-weight: 400;
            letter-spacing: .025em;
            line-height: 1rem;
            margin-right: 24px
        }

        .B6Yvkd {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            background-color: #fff
        }

        .B6Yvkd:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .B6Yvkd {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .B6Yvkd:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .B6Yvkd:not(:disabled) {
            background-color: #fff
        }

        .P9KVBf .B6Yvkd {
            background-color: rgb(32, 33, 36)
        }

        .P9KVBf .B6Yvkd:not(:disabled) {
            background-color: rgb(32, 33, 36)
        }

        .bO7Z3c {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .bO7Z3c:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .bO7Z3c {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .bO7Z3c:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .h3YV2d {
            margin-top: 8px;
            font-size: .875rem;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            overflow-wrap: anywhere
        }

        .HcyOxe {
            container-type: inline-size;
            container-name: section-wrapper;
            padding-top: 20px;
            width: 100%
        }

        .cswwxf {
            padding-bottom: 20px
        }

        .VMq4uf {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1.125rem;
            letter-spacing: 0;
            font-weight: 400;
            font-weight: 500;
            display: flex;
            justify-content: space-between
        }

        .VMq4uf:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .VMq4uf {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .VMq4uf:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .VMq4uf .W7A5Qb {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 20px;
            padding: 2px
        }

        .VMq4uf .W7A5Qb:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .VMq4uf .W7A5Qb {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .VMq4uf .W7A5Qb:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .VxpoF {
            margin: -12px
        }

        .EaMWib {
            margin-right: 16px
        }

        .XfZNbf {
            display: flex;
            align-items: center
        }

        .aJ3edd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            font-family: Roboto, Helvetica, Arial, sans-serif
        }

        .aJ3edd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .aJ3edd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .aJ3edd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .SfzRHd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            font-family: Roboto, Helvetica, Arial, sans-serif
        }

        .SfzRHd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .SfzRHd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .SfzRHd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .jqSImf {
            display: none
        }

        @media screen and (min-width:600px) {
            .HcyOxe {
                margin-bottom: 16px
            }
            .VMq4uf {
                justify-content: start
            }
            .tvTcgc {
                justify-content: space-between
            }
        }

        .CiSZSd {
            display: none
        }

        @media screen and (min-width:600px) {
            .ZVqkWd {
                display: none
            }
            .CiSZSd {
                display: inherit;
                margin-left: auto
            }
        }

        .Mmzrq {
            display: inline
        }

        .YDZHB {
            display: none
        }

        @container section-wrapper (min-width: 600px) {
            .Mmzrq {
                display: none
            }
            .YDZHB {
                display: inherit;
                margin-left: auto
            }
        }

        @media screen and (min-width:960px) {
            .ruhdXe {
                border-radius: 8px;
                border-color: rgb(232, 234, 237);
                border: 1px solid
            }
            .ruhdXe:not(:disabled) {
                border-color: rgb(232, 234, 237)
            }
            .P9KVBf .ruhdXe {
                border-color: rgb(60, 64, 67)
            }
            .P9KVBf .ruhdXe:not(:disabled) {
                border-color: rgb(60, 64, 67)
            }
            .vFw3rb {
                padding-left: 28px;
                padding-right: 28px
            }
            .cswwxf {
                padding-bottom: 20px
            }
            .ut40Kd {
                padding: 0 28px 20px
            }
        }

        @media screen and (min-width:1280px) {
            .HcyOxe {
                margin-bottom: 24px
            }
            .VxpoF {
                margin: -11px
            }
            .VMq4uf {
                font-family: "Google Sans", Roboto, Arial, sans-serif;
                line-height: 1.75rem;
                font-size: 1.375rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .aJ3edd {
                font-size: .875rem;
                font-weight: 400;
                letter-spacing: .0142857143em;
                line-height: 1.25rem
            }
        }

        .h3V8eb {
            padding: 16px 0
        }

        .H6372c {
            display: flex;
            flex-wrap: wrap
        }

        .WsVJrc {
            width: 100%;
            margin-top: 4px
        }

        .qeidne {
            display: flex;
            justify-content: space-between
        }

        .bkJP6e {
            margin-top: 24px
        }

        .FM7w {
            margin-bottom: 12px
        }

        @media screen and (min-width:960px) {
            .h3V8eb {
                padding: 20px 0
            }
            .viPire {
                padding-left: 28px;
                padding-right: 28px;
                padding-bottom: 20px
            }
        }

        @media screen and (min-width:1280px) {
            .h3V8eb {
                padding: 24px 0
            }
            .H6372c {
                column-gap: 56px;
                display: grid;
                grid-template-columns: max-content auto
            }
            .qeidne {
                column-gap: 16px;
                display: grid;
                grid-template-columns: repeat(5, auto)
            }
            .bkJP6e {
                width: auto;
                justify-self: end;
                margin-top: 0
            }
        }

        .nT6z {
            border-color: rgb(218, 220, 224);
            border: 1px solid;
            padding: 20px;
            margin: 16px 0 24px
        }

        .nT6z:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .nT6z {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .nT6z:not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .P4w39d {
            display: flex;
            padding-top: 24px
        }

        .Jwxk6d {
            display: grid;
            flex-grow: 1;
            grid-template-columns: 1fr
        }

        .HJV0ef {
            padding-bottom: 16px
        }

        .Te9Tpc {
            column-gap: 24px;
            display: grid;
            flex-grow: 1;
            grid-template-columns: max-content auto
        }

        .jILTFe {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans Display", Roboto, Arial, sans-serif;
            line-height: 4rem;
            font-size: 4.5rem;
            letter-spacing: 0;
            font-weight: 400
        }

        .jILTFe:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .jILTFe {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .jILTFe:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .EHUI5b {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            margin-top: .5rem
        }

        .EHUI5b:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .EHUI5b {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .EHUI5b:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .JzwBgb {
            display: grid;
            grid-template-columns: max-content auto;
            align-items: center
        }

        .Qjdn7d {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            padding-right: 16px
        }

        .RJfYGf {
            border-radius: 9999px;
            background-color: rgb(232, 234, 237);
            height: 10px
        }

        .RJfYGf:not(:disabled) {
            background-color: rgb(232, 234, 237)
        }

        .P9KVBf .RJfYGf {
            background-color: rgb(60, 64, 67)
        }

        .P9KVBf .RJfYGf:not(:disabled) {
            background-color: rgb(60, 64, 67)
        }

        .RutFAf {
            height: 100%;
            border-radius: inherit
        }

        .EGFGHd {
            padding: 16px 0
        }

        .QKBJgd {
            margin-bottom: 12px
        }

        .gy9zre {
            display: inline-flex
        }

        .E3Ryad {
            margin-top: -10px;
            display: none
        }

        .LK61ib {
            display: none
        }

        @media screen and (min-width:600px) {
            .gy9zre {
                display: none
            }
            .E3Ryad {
                display: inline
            }
            .LK61ib {
                display: flex
            }
        }

        .NHV5Cb {
            display: inline-flex
        }

        .ImZn0c {
            margin-top: -10px;
            display: none
        }

        .RfOaib {
            display: none
        }

        @container section-wrapper (min-width: 600px) {
            .NHV5Cb {
                display: none
            }
            .ImZn0c {
                display: inline
            }
            .RfOaib {
                display: flex
            }
        }

        @media screen and (min-width:960px) {
            .HJV0ef {
                padding-bottom: 20px
            }
            .EGFGHd {
                padding: 20px 0
            }
            .l1VJWc {
                border-color: rgb(232, 234, 237);
                border-top: 1px solid
            }
            .l1VJWc:not(:disabled) {
                border-color: rgb(232, 234, 237)
            }
            .P9KVBf .l1VJWc {
                border-color: rgb(60, 64, 67)
            }
            .P9KVBf .l1VJWc:not(:disabled) {
                border-color: rgb(60, 64, 67)
            }
            .vl3Fyf {
                padding-left: 28px;
                padding-right: 28px
            }
        }

        @media screen and (min-width:1280px) {
            .HJV0ef {
                padding-bottom: 24px
            }
            .EGFGHd {
                padding: 24px 0
            }
            .vl3Fyf {
                padding-left: 32px;
                padding-right: 32px
            }
        }

        .ukROQd .iCNeVd,
        .eLyZDd .iCNeVd {
            height: 24px;
            width: 24px
        }

        .XkAcee {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .XkAcee:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .XkAcee {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .XkAcee:not(:disabled) {
            color: #00a173
        }

        .x6Orkf {
            color: #c71c56;
            fill: #c71c56;
            stop-color: #c71c56
        }

        .x6Orkf:not(:disabled) {
            color: #c71c56
        }

        .P9KVBf .x6Orkf {
            color: #ff3369;
            fill: #ff3369;
            stop-color: #ff3369
        }

        .P9KVBf .x6Orkf:not(:disabled) {
            color: #ff3369
        }

        .rLq5qb {
            color: #0179ca;
            fill: #0179ca;
            stop-color: #0179ca
        }

        .rLq5qb:not(:disabled) {
            color: #0179ca
        }

        .P9KVBf .rLq5qb {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .rLq5qb:not(:disabled) {
            color: #50b4f4
        }

        .aThNrd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .aThNrd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .aThNrd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .P9KVBf .aThNrd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .eLyZDd {
            display: none
        }

        .LS2TS:focus .XkAcee,
        .LS2TS:hover .XkAcee {
            color: #056449;
            fill: #056449;
            stop-color: #056449
        }

        .LS2TS:focus .XkAcee:not(:disabled),
        .LS2TS:hover .XkAcee:not(:disabled) {
            color: #056449
        }

        .P9KVBf .LS2TS:focus .XkAcee {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .LS2TS:focus .XkAcee:not(:disabled) {
            color: #00b380
        }

        .P9KVBf .LS2TS:hover .XkAcee {
            color: #00b380;
            fill: #00b380;
            stop-color: #00b380
        }

        .P9KVBf .LS2TS:hover .XkAcee:not(:disabled) {
            color: #00b380
        }

        .LS2TS:focus .x6Orkf,
        .LS2TS:hover .x6Orkf {
            color: #8a0d37;
            fill: #8a0d37;
            stop-color: #8a0d37
        }

        .LS2TS:focus .x6Orkf:not(:disabled),
        .LS2TS:hover .x6Orkf:not(:disabled) {
            color: #8a0d37
        }

        .P9KVBf .LS2TS:focus .x6Orkf {
            color: #ff708c;
            fill: #ff708c;
            stop-color: #ff708c
        }

        .P9KVBf .LS2TS:focus .x6Orkf:not(:disabled) {
            color: #ff708c
        }

        .P9KVBf .LS2TS:hover .x6Orkf {
            color: #ff708c;
            fill: #ff708c;
            stop-color: #ff708c
        }

        .P9KVBf .LS2TS:hover .x6Orkf:not(:disabled) {
            color: #ff708c
        }

        .LS2TS:focus .rLq5qb,
        .LS2TS:hover .rLq5qb {
            color: #035282;
            fill: #035282;
            stop-color: #035282
        }

        .LS2TS:focus .rLq5qb:not(:disabled),
        .LS2TS:hover .rLq5qb:not(:disabled) {
            color: #035282
        }

        .P9KVBf .LS2TS:focus .rLq5qb {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .LS2TS:focus .rLq5qb:not(:disabled) {
            color: #50b4f4
        }

        .P9KVBf .LS2TS:hover .rLq5qb {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .LS2TS:hover .rLq5qb:not(:disabled) {
            color: #50b4f4
        }

        @media screen and (min-width:600px) {
            .ukROQd {
                display: none
            }
            .eLyZDd {
                display: inherit
            }
        }

        @media screen and (min-width:1280px) {
            .ukROQd {
                display: inherit
            }
            .eLyZDd {
                display: none
            }
        }

        .YpSFl {
            font-weight: 400;
            cursor: pointer
        }

        .y0Muaf {
            opacity: .7;
            text-decoration: line-through
        }

        .ishze {
            width: 100%
        }

        @media screen and (min-width:600px) {
            .ishze {
                width: unset
            }
        }

        .aQspe {
            width: 100%
        }

        @media screen and (min-width:600px) {
            .aQspe {
                width: unset
            }
        }

        .MMZjL {
            background-color: transparent;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAAEbUlEQVR4Ae3bX2gdWR0H8JGkMV2IN9oqXcnasi6yC+qqD+4KSqukIoIbkfVJcPdR8aFFRQSVKFoolFJp6UNBDb70oRVTRVRQSR/qH0SaphJttTGtNopiuWmSJt5755yPL1IuCHpz58zcFOZ3nhPmQ+Y3M+d3vsk84qsGlLVqQA2oATWgBtSAGlADakAN2G4ZccCLTviReSuaVq1aseDHjvuQJwxn26oKAV7jBefcsKatIxfEhyvIdbTd91tnHTa2owCGvdUptzyQC4Lov6ubsukPvuYpQzsC4Dnn/VMuiqLeKur4u295ZsAAr3XaPUHUXfNmTDuoe02bMU83Qu4fjtkzIIAhH3RDRwTQNGNK43/8TMOUGc0uRNuCSUOVA4w7a0MEsOwljayn0vCS5S7EujNGKwV4nV9pix5efLbt6kJEbXNeVRnA05bkImBaI+urNEx39cNNE5UATFgRRLDs2axQedYyiIIl+0oHmHBHEMGsRla4NMwCgiWPlwow4vcCYCZLVmZAFMwbLQ1gxPfkYvflJyd0XDBaFuAzWt2XXxJhyydKAXjaPRHMZ6WUeRCteLIMwA8FEU37SwLs1wTBxeQAk7YAU1lpZQpEWyaTAgy7LoK5rNQyB4JrRlMCPqYF/P/bx22HCt1GEG36aDKAx1zt/ekDLhkv+DQKLhtNBXiPdcD+HgGsOlrwb7DquVSAbwhgNuuhAHDZ2/oizCLKnUoC0PAXEUxtEwBfNt7nsyi4YXcKwPttiWhmWR8A/TS1JqINb08BOK4DZvsEwCUH+riJOj6XAnBZAEcKALbZ1I6A4PspAHcFcLAQAK712tQOguCPhQEesy5AlhUGwNd7a2oQNe0qCjjgXyKWEwG47cM9/JZlRJv2FgUc0hYxlwzQU1ObQ9Ty5qKAjycG9NDUXYC2w0UBR5IDemjqLsCLRQFHBwz4yKN9C7W871Fv4meKAp7UGuhjdE+KF1kc0IssJHiRZZk/D/BT4qasOOBnA/yYu5gC8BUdsfDn9Pi2P6fp+FQKwLs8GNCGZs1bUgDG/EkYwJYy+p3RNJv6c3Kx4k09uROpphKHrIsVj1Voeke6wdavhYoHW9FPjKQbLb5sq9LRIpteSD3cDZUOd39pOO14/b22xIrG62x4d/oDju8KVHDAEeW+XcYJzRutVHLEFNzxhnIO+T5pq4JDvgdeLuuUctSF0o9Zc9+0Kzmgi7AgpCeYAeSu2FVu1OD1lgRKiBpEwXV7yw97PG6plLBHbtHeauI2ExZLiNss2Fdd4GnMTxMGnoKWH9hdbeTslU5aSxI5C+47ZngQob9JV7ULhv5arnjn4GKXe3zR33T6jl3e9XmvHnTw9Sln/FVnG6HXKGi766SJnRE9HvImX7Boozsx/XABEAVBx5p5n7UvvGJnhb/HHHbaNataOvL/rCAIcrmOlqbf+Krn7a4+/N1jGfaED/iS7/iFRbcsuWXRz533ac93N3hRQP0fHDWgBtSAGlADakANqAE1oAbUgH8Dl4A0+61z7D0AAAAASUVORK5CYII=);
            background-repeat: no-repeat;
            border: 0;
            bottom: 0;
            height: 96px;
            left: 0;
            margin: auto;
            right: 0;
            top: 0;
            width: 96px
        }

        .MMZjL:focus,
        .MMZjL:hover,
        .MMZjL:active {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAAGlUlEQVR4Ae2bXWwUVRSAx4QAcYIPjRDFn4SalAhZJDEqMYrGPgg+aCAkxcaYSCUGn2oiPDUaX1pDoomNNSqBhIChIeEBt6X/LaWlW2htCW2xy+72Z0u323Yp3e3MTndn5oxjb890FpO6vXdmFpI556l328755p5z77nnnuW0x1xdAOvVBXABXAAXwAVwAVwABuE5D1esaxlXYWjZ0ohH/4xOHAHguUKulDvNeVfV01yp/nv8owawR3/H3jVpmf43jwQAr7tGNeel0mr9b3k7ASiM31i7s+VY79mgbyYQj0lCWpAFOSaF4jdmzgQ/u7m9eX0NHYQdAHsy/f3Z+iM3L41PLCRlGRRQQRfNUFBBARlEeSRxcfRwd17dQ3Gxx2kA3uzz62vebj8/MikuKiosifZfMaOklHvC73d3t66ryYgJ3jkAj9lx9nU03kukVCAGZiegKTC/+Gf4jbYMZ/I4A1C48tAXGi6MJtIPv/NA3Buu8h/oMmuV3xsOxDMhVJhPnQpsbTBBFNoPcBQftq7m0xsTC4rJeCHtDZf0bM707wzdXFfS4w0L6RUIGULxIp/JmY7aC1CKD9pSf3FUUlaMj4rH+zNNXw3jeH9UXIGQ5OpRvtb4vNQ+AMP8FxuHHsgAJuPXvgsQCJyHvtjTdSYEWwCK8QGvtUVE1TC/yr/am199Jqr8K/EwIRQ0GZ8VWw9ghG5BU0zCsI2Ke9txnE73tkdFggAQEbc1msPZSoB8rhrNn06i+e1Tme+edh7ap8g8/IuQjwjVXL51ADxXiYlCeAF9xxtmNx7VG8ZZCMSNcK7keKsAitH8jqgKYDbfcgQFmiMGQrE1APn4kJNDsmqP+WaElPrNbWM03wqAClx7EmlY3mnJiNUaiBOEmLSrZXmsgh3Ag//eN02CV0jvaLYHYEcz2aMBWiPGqIcRAN9/kS+lkuAt6SEjdmhJD7pRkQ/ngA3AgwlzKEHcpy9GRuzSvhiZg+DKauRhAMDk4as+efn9/7/7RJMHu1jcaHkOlC97MbGgB+DJv3jqSmA++9VH0+Xa1JZ6xtUI+mPGHPCUAJg+fHRdkvH9ZwWgiyBXDLLNgSDv68C0ghIAj42XxwFI6pCNAZoh/bF3qDKl9imS3p0fweMmJQDmKjMSrGH90TLkF/+Wesq1CCYWNl0hI1QAuAJ93J1Syfqf3eO1h4QmqIX00kFHefcarkQUAJgBnQkq6EBUACSod7as3YkU+OEOZkUUABgB/TESAeWDlAAUQV0+SJyoM4pRQAGAZatZiQAc6KIFQAnGsw3qA10EYFLA0hcFAO4BkkwAOC8LAMofI9kF9fJSmt5QQ35eMwBuYjtb0iosHR7ZATCoP89iNYuKZD9+DqtG/BoBcA062EUmoC9GDUAR1CQnAk1W37yK6xAlwNf9VgNgUJcPZgEARd2MAOWD7AA0QY0Ax3oZASpyDPBFz+PtQuohHwI8pkH8ehsCUC6ju1rknC6jRvGdZ9nItBxtZMCykRmpxEwyd6nEBEsqgcncX7O5S+aM8koZQzr9q18BYEinac7IpNyrwHcDDOk0rkMfdC4quTnQJOW3jESC4UiZVzclAuTgSKmNL2BdgvFQf2lcBXD2UK+LCmeDrIf6QtzMJBmcLassuex717CswlzYGn4A4HBhS+uZ3WgUtphLiydupZwsLeqSUo7cxNKiVcVdcLK4OzRn9LV4LCmvH+pKqeBMeV0XSfnwOpbXLbvguDoFoNl+wUGKirUT1l1wGHPwSktMcuSKCaaTLzfj+7f0ku/b2ykHLvkWlRO3rL3kM7IivrY5Yvc1qwqXwxtqrLtmRalEhFAcLEZA88nuO3DfML/SllaDl5oiJDOyvNUANIBQ4vkGc6uBLc0e+Y0R0Y5mDxXGiPlEC21styloGktY324Tipt6VYptbnjKq+udtbDhCWT1+vSmKzY3PGUiPFl7LpSULWk5A1E+FTA1xJY61vRX5AvMy6xNf+rA/fc7TL9z1NG2y60NlcNziwp12+Ws9OPfz9Q713aJ4jE3He9urR6NIUQWQvp3Zd34c6GCpowGZI/jrcfoTK+2/jQ8lpAU7Jg2aabpuiiQlAPxk3e2NT6R2Y7P57j5O6/ucPeF0WBckGVVAXVZiaik+VsV0v753+7u78QVh7n52/r2+/U125s/6f55uC0yODeWmBQj4qQ4lhiYa7z3/dD+Tgxw+vZ79wsQzn0Fxf0S0KP/NSz3m3wugAvgArgALoAL4AK4AP8AFiQqJF55B00AAAAASUVORK5CYII=);
            cursor: pointer;
            transition: background .1s
        }

        .bKsVV,
        .j9Syhb {
            display: block;
            margin: auto
        }

        .bKsVV {
            height: 48px;
            width: 48px
        }

        .j9Syhb {
            height: 40px;
            width: 40px
        }

        .Qv3d6b,
        .zwAiMc {
            align-items: center;
            border-radius: 50%;
            display: flex
        }

        .Qv3d6b:hover,
        .zwAiMc:hover,
        .Qv3d6b:focus,
        .zwAiMc:focus,
        .Qv3d6b:active,
        .zwAiMc:active {
            background-color: rgba(0, 0, 0, .5);
            cursor: pointer;
            transition: background .1s
        }

        .Qv3d6b {
            height: 64px;
            width: 64px
        }

        .zwAiMc {
            height: 42px;
            width: 42px;
            position: absolute;
            left: 0;
            top: 0
        }

        .FN1l2,
        .Z8c4ge {
            border: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            right: 0;
            top: 0
        }

        .FN1l2 {
            height: 64px;
            width: 64px
        }

        .Z8c4ge {
            height: 42px;
            width: 42px;
            position: relative
        }

        @media screen and (min-width:1280px) {
            .Qv3d6b,
            .FN1l2 {
                height: 72px;
                width: 72px
            }
            .bKsVV {
                height: 56px;
                width: 56px
            }
            .zwAiMc,
            .Z8c4ge {
                height: 52px;
                width: 52px
            }
            .j9Syhb {
                height: 48px;
                width: 48px
            }
        }

        .MSLVtf {
            display: inline-block;
            position: relative
        }

        .TdqJUe {
            cursor: pointer;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .lgooh {
            position: absolute
        }

        .G1zzid {
            border-color: rgb(232, 234, 237);
            border-bottom: 1px solid;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 24px;
            padding-bottom: 20px
        }

        .G1zzid:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .G1zzid {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .G1zzid:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .PdF49b {
            flex-basis: 100%
        }

        .r7tDJb {
            border-color: rgb(232, 234, 237);
            border-top: 1px solid;
            margin-top: 24px;
            width: 100%
        }

        .r7tDJb:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .r7tDJb {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .r7tDJb:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .sMUprd {
            flex-basis: 50%;
            margin-top: 24px
        }

        .q078ud {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .q078ud:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .q078ud {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .q078ud:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .reAt0 {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0178571429em;
            line-height: 1.25rem;
            margin-top: 3px
        }

        .reAt0:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .reAt0 {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .reAt0:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .XCWUge {
            border-color: rgb(232, 234, 237);
            border-top: 1px solid;
            margin-top: 24px;
            padding-top: 24px
        }

        .XCWUge:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .XCWUge {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .XCWUge:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .D1uV5e {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            padding-bottom: 24px
        }

        .D1uV5e:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .D1uV5e {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .D1uV5e:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .v0MAtc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .v0MAtc:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .v0MAtc {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .v0MAtc:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .dvNYbb {
            border-color: rgb(232, 234, 237);
            border-bottom: 1px solid;
            padding-bottom: 24px;
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .dvNYbb:not(:disabled) {
            border-color: rgb(232, 234, 237)
        }

        .P9KVBf .dvNYbb {
            border-color: rgb(60, 64, 67)
        }

        .P9KVBf .dvNYbb:not(:disabled) {
            border-color: rgb(60, 64, 67)
        }

        .dvNYbb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .dvNYbb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .dvNYbb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .SerYrb {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            padding-top: 10px;
            padding-bottom: 20px
        }

        .SerYrb:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .SerYrb {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .SerYrb:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .Lg7Rne {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .Lg7Rne:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .Lg7Rne {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .Lg7Rne:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .TCqkTe {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .TCqkTe:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .TCqkTe {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .TCqkTe:not(:disabled) {
            color: #00a173
        }

        .Vvn1K:hover {
            cursor: pointer
        }

        .NWVpwe a {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .NWVpwe a:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .NWVpwe a {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .NWVpwe a:not(:disabled) {
            color: #00a173
        }

        .bARER {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 6;
            line-clamp: 6;
            max-height: 7.5rem;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .TKjAsc {
            display: grid;
            grid-gap: 16px;
            grid-template-columns: repeat(2, 1fr);
            margin-top: 24px
        }

        .lXlx5 {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .lXlx5:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .lXlx5 {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .lXlx5:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .xg1aie {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            margin-top: 4px
        }

        .Uc6QCc {
            display: flex;
            flex-wrap: wrap;
            gap: 16px 12px;
            margin-bottom: 4px;
            margin-top: 28px
        }

        @media screen and (min-width:600px) {
            .Uc6QCc {
                margin-bottom: 0
            }
        }

        .LMoCf {
            min-height: auto;
            padding: 0 15px 0 15px;
            height: 32px;
            margin-top: 0;
            margin-bottom: 0;
            border-radius: 16px
        }

        .LMoCf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .LMoCf:not(:disabled):hover {
            color: rgb(32, 33, 36)
        }

        .LMoCf:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .LMoCf:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: rgb(32, 33, 36)
        }

        .LMoCf:not(:disabled):not(:disabled):active {
            color: rgb(32, 33, 36)
        }

        .LMoCf:disabled {
            color: rgb(95, 99, 104)
        }

        .LMoCf .VfPpkd-Jh9lGc::before,
        .LMoCf .VfPpkd-Jh9lGc::after {
            background-color: rgb(60, 64, 67)
        }

        .LMoCf .VfPpkd-RLmnJb {
            height: 100%
        }

        .LMoCf .VfPpkd-Jh9lGc {
            border-radius: 16px
        }

        .LMoCf:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .LMoCf:not(:disabled):hover {
            border-color: rgb(218, 220, 224)
        }

        .LMoCf:not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .LMoCf:not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: rgb(32, 33, 36)
        }

        .LMoCf:disabled {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .LMoCf:nth-child(n) {
            height: 32px;
            margin-top: 0;
            margin-bottom: 0;
            border-radius: 16px
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled):hover {
            color: rgb(189, 193, 198)
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .LMoCf:nth-child(n):not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            color: rgb(189, 193, 198)
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled):not(:disabled):active {
            color: rgb(189, 193, 198)
        }

        .P9KVBf .LMoCf:nth-child(n):disabled {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .LMoCf:nth-child(n) .VfPpkd-Jh9lGc::before,
        .P9KVBf .LMoCf:nth-child(n) .VfPpkd-Jh9lGc::after {
            background-color: rgb(154, 160, 166)
        }

        .P9KVBf .LMoCf:nth-child(n) .VfPpkd-RLmnJb {
            height: 100%
        }

        .P9KVBf .LMoCf:nth-child(n) .VfPpkd-Jh9lGc {
            border-radius: 16px
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled):hover {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .LMoCf:nth-child(n):not(:disabled).VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe,
        .P9KVBf .LMoCf:nth-child(n):not(:disabled):not(.VfPpkd-ksKsZd-mWPk3d):focus {
            border-color: rgb(189, 193, 198)
        }

        .P9KVBf .LMoCf:nth-child(n):disabled {
            border-color: rgb(95, 99, 104)
        }

        .be0Qw {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500;
            margin-bottom: 12px
        }

        .be0Qw:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .be0Qw {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .be0Qw:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .sULsue {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            margin-bottom: 10px
        }

        .sULsue:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .sULsue {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .sULsue:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .VAgTTd {
            display: flex
        }

        .LMcLV {
            flex-direction: column
        }

        .P44HY {
            margin-left: 24px
        }

        .LMcLV .P44HY {
            margin-left: 0
        }

        .zwjsl {
            width: 100%
        }

        @media screen and (min-width:600px) {
            .zwjsl {
                width: unset
            }
            .LMcLV {
                flex-direction: row
            }
            .LMcLV .P44HY {
                margin-left: 24px
            }
        }

        .FuSudc {
            display: flex;
            flex-direction: column
        }

        .gobkX {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            margin-top: 16px
        }

        .gobkX:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .gobkX {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .gobkX:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .A65HHb {
            text-decoration: underline
        }

        .A65HHb:visited {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .A65HHb:visited:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .A65HHb:visited {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .A65HHb:visited:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .Vj78Oe,
        .KUSTKe,
        .qwPPwf,
        .Atcj9b,
        .IwTLXb {
            height: 100%
        }

        .Vj78Oe .Atcj9b,
        .Vj78Oe .IwTLXb {
            padding-bottom: 3px
        }

        .Vj78Oe .C4JtQb {
            aspect-ratio: 16/9;
            height: 100%;
            max-height: fit-content;
            width: unset
        }

        .Vj78Oe .B5GQxf {
            height: 100%;
            max-height: fit-content;
            width: unset
        }

        .Utde2e {
            margin-right: 12px
        }

        .Utde2e:last-child {
            margin-right: 0
        }

        .B5GQxf {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 8px;
            cursor: pointer;
            height: 204px;
            min-width: 92px
        }

        .B5GQxf .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .C4JtQb {
            object-fit: cover;
            width: 362px
        }

        @media screen and (min-width:600px) {
            .UbmABe {
                margin-bottom: 16px
            }
        }

        @media screen and (min-width:1280px) {
            .UbmABe {
                margin-bottom: 24px
            }
            .Utde2e {
                margin-right: 16px
            }
            .B5GQxf {
                height: 296px
            }
            .C4JtQb {
                width: 526px
            }
        }

        .oUaal:nth-child(n) {
            font-size: 12px
        }

        .YVLXxf {
            align-items: center;
            display: flex;
            fill: currentColor
        }

        .xGa6dd {
            height: 16px;
            min-width: 16px
        }

        .MKV5ee {
            cursor: pointer;
            line-height: 12px;
            margin-left: 4px
        }

        .oS3zXb {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.75rem;
            font-size: 1.375rem;
            letter-spacing: 0;
            font-weight: 400;
            align-items: center;
            display: flex
        }

        .oS3zXb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .oS3zXb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .oS3zXb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .gQLaEd {
            height: 40px;
            margin-right: 16px;
            min-width: 40px
        }

        .bdxpHd {
            margin-top: 16px
        }

        .vfQhrf {
            display: grid;
            grid-gap: 24px
        }

        .VVmwY {
            border: 0;
            margin: -12px;
            overflow: hidden
        }

        .P9KVBf .vfQhrf .VVmwY {
            background: inherit;
            border: 0
        }

        .VVmwY .j25Vu {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 18px;
            margin-right: 16px
        }

        .VVmwY .j25Vu:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .VVmwY .j25Vu {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .VVmwY .j25Vu:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .RrSxVb {
            display: flex;
            padding: 12px;
            position: relative
        }

        .pZ8Djf {
            margin-top: 2px
        }

        .aeSZJ {
            display: flex;
            padding: 12px
        }

        .Bne0R {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .Bne0R:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .Bne0R {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .Bne0R:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .HhKIQc {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .HhKIQc:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .HhKIQc {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .HhKIQc:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .xFVDSb {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500
        }

        .xFVDSb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .xFVDSb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .xFVDSb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .pSEeg {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            overflow-wrap: anywhere
        }

        .pSEeg:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .pSEeg {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .pSEeg:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        @media screen and (min-width:600px) {
            .pZ8Djf {
                margin-top: 0
            }
        }

        @media screen and (min-width:960px) {
            .vfQhrf:not(.BxIr0d) {
                grid-template-columns: repeat(2, 1fr)
            }
            .C221Ne {
                grid-column: 1/span 2
            }
        }

        .CAYEaf {
            margin-left: -6px
        }

        .kuvzJc {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            z-index: 1;
            background-color: rgba(0, 0, 0, .54);
            border-radius: 48px;
            color: #fff;
            width: fit-content
        }

        .cvriud {
            align-items: center;
            cursor: pointer;
            display: flex;
            justify-content: center;
            padding: 0 26px
        }

        @media screen and (min-width:1280px) {
            .cvriud {
                padding: 2px 30px
            }
        }

        .PyyLUd,
        .oiEt0d {
            height: 56.25vw;
            width: 100vw
        }

        .PyyLUd {
            position: absolute;
            right: -24px;
            top: 0;
            width: 100vw
        }

        .oiEt0d {
            object-fit: cover;
            padding: 1px;
            position: absolute;
            right: 0;
            width: 100%
        }

        .jaQz3d {
            background: linear-gradient(to top, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%);
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            position: absolute
        }

        .Mqg6jb {
            display: none;
            position: absolute;
            right: 0;
            top: 48px
        }

        .arM4bb {
            width: 180px
        }

        .Q3MhI {
            bottom: -10px;
            filter: blur(10px);
            left: 20px;
            opacity: 50%;
            position: absolute;
            z-index: -1
        }

        .NXRaDe {
            width: 140px
        }

        .nm4vBd,
        .Q3MhI {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 4px
        }

        .nm4vBd .VfPpkd-BFbNVe-bF1uUb,
        .Q3MhI .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .Mhrnjf .nm4vBd,
        .Mhrnjf .Q3MhI {
            border-radius: 20%
        }

        .hnnXjf {
            display: inline-flex;
            flex-direction: column;
            justify-content: flex-end;
            position: relative
        }

        .hnnXjf:not(.XcNflb) {
            margin-top: 48px
        }

        .XcNflb .Fd93Bb {
            max-height: 112px
        }

        .XcNflb .qxNhq {
            margin-top: calc(56.25vw - 40px)
        }

        .Il7kR,
        .qxNhq {
            align-items: flex-start;
            display: flex
        }

        .cN0oRe {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 4px;
            margin-right: 20px;
            width: 50px
        }

        .cN0oRe .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .fFmL2e {
            border-radius: 20%
        }

        .Fd93Bb {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 2rem;
            font-size: 1.5rem;
            letter-spacing: 0;
            font-weight: 400;
            font-weight: 500;
            align-items: flex-end;
            display: flex;
            overflow-wrap: anywhere;
            width: 100%;
            word-break: keep-all
        }

        .tv4jIf {
            margin-top: 2px
        }

        .Vbfug {
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.5rem;
            font-size: 1rem;
            letter-spacing: .00625em;
            font-weight: 500
        }

        .auoIOc {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f
        }

        .auoIOc:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .auoIOc {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .auoIOc:not(:disabled) {
            color: #00a173
        }

        .V6ZMnd {
            color: #0179ca;
            fill: #0179ca;
            stop-color: #0179ca
        }

        .V6ZMnd:not(:disabled) {
            color: #0179ca
        }

        .P9KVBf .V6ZMnd {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .V6ZMnd:not(:disabled) {
            color: #50b4f4
        }

        .dkLwx {
            color: #c71c56;
            fill: #c71c56;
            stop-color: #c71c56
        }

        .dkLwx:not(:disabled) {
            color: #c71c56
        }

        .P9KVBf .dkLwx {
            color: #ff3369;
            fill: #ff3369;
            stop-color: #ff3369
        }

        .P9KVBf .dkLwx:not(:disabled) {
            color: #ff3369
        }

        .ulKokd {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400
        }

        .ulKokd:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .ulKokd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .ulKokd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .JU1wdd {
            height: 64px;
            margin: 16px 0 24px -24px;
            padding: 12px 0;
            width: 100vw
        }

        .l8YSdd {
            align-items: center;
            display: flex;
            overflow: auto;
            width: 100%
        }

        .l8YSdd::before {
            width: 24px;
            content: "";
            display: block;
            flex-shrink: 0
        }

        .QhHVZd {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 8px;
            flex-shrink: 0;
            margin-right: 16px;
            width: 48px
        }

        .QhHVZd .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .atwQXd {
            bottom: 50%;
            position: absolute;
            right: 50%;
            transform: translate(50%, 50%)
        }

        .fGct3b .cN0oRe,
        .J1Igtd .cN0oRe {
            display: inline-block
        }

        .hIGwCc .cN0oRe,
        .fGct3b .QhHVZd,
        .J1Igtd .QhHVZd {
            display: none
        }

        .hIGwCc .QhHVZd {
            display: inline-block
        }

        @media screen and (min-width:600px) {
            .XcNflb .cN0oRe {
                width: 96px
            }
            .PyyLUd {
                right: -48px
            }
            .ynrBgc {
                font-family: "Google Sans Display", Roboto, Arial, sans-serif;
                line-height: 3.25rem;
                font-size: 2.75rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .F5UCq {
                font-family: "Google Sans", Roboto, Arial, sans-serif;
                line-height: 2.75rem;
                font-size: 2.25rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .rQkmxe {
                font-family: "Google Sans", Roboto, Arial, sans-serif;
                line-height: 2.5rem;
                font-size: 2rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .JU1wdd {
                margin-left: -72px
            }
            .l8YSdd::before {
                width: 72px
            }
        }

        @media screen and (min-width:840px) {
            .jaQz3d {
                background: linear-gradient(to right, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%), linear-gradient(to top, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%)
            }
            .Mqg6jb {
                display: inline
            }
            .Il7kR .cN0oRe {
                display: none
            }
            .XcNflb {
                min-height: 56.25vw
            }
            .XcNflb .qxNhq {
                margin-top: 112px
            }
            .Fd93Bb {
                width: 560px
            }
            .Il7kR .Fd93Bb,
            .Il7kR .tv4jIf {
                width: 500px
            }
            .tv4jIf {
                margin-top: 16px
            }
            .atwQXd {
                display: none
            }
        }

        @media screen and (min-width:960px) {
            .Il7kR .Fd93Bb,
            .Il7kR .tv4jIf {
                width: 636px
            }
            .J1Igtd .cN0oRe {
                display: none
            }
            .J1Igtd .QhHVZd {
                display: inline-block
            }
        }

        @media screen and (min-width:1024px) {
            .PyyLUd,
            .oiEt0d {
                height: 468px;
                width: 832px
            }
            .PyyLUd {
                right: -72px
            }
            .XcNflb {
                min-height: 436px
            }
            .XcNflb .Fd93Bb {
                max-height: 192px
            }
            .JU1wdd {
                margin-left: 0;
                width: 100%
            }
            .l8YSdd::before {
                width: 0
            }
        }

        @media screen and (min-width:1280px) {
            .XcNflb .cN0oRe {
                width: 128px
            }
            .arM4bb {
                width: 240px
            }
            .NXRaDe {
                width: 200px
            }
            .PyyLUd,
            .oiEt0d {
                height: 532px;
                width: 947px
            }
            .jaQz3d {
                background: linear-gradient(to right, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%), linear-gradient(to top, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%), linear-gradient(to left, rgb(32, 33, 36) 0, rgba(0, 0, 0, 0) 56%)
            }
            .XcNflb {
                min-height: 500px
            }
            .Il7kR .Fd93Bb,
            .Il7kR .tv4jIf {
                width: 800px
            }
            .xwcR9d {
                font-family: "Google Sans Display", Roboto, Arial, sans-serif;
                line-height: 4.75rem;
                font-size: 4rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .p5VxAd {
                font-family: "Google Sans Display", Roboto, Arial, sans-serif;
                line-height: 4rem;
                font-size: 3.5rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
            .toLpDd {
                font-family: "Google Sans Display", Roboto, Arial, sans-serif;
                line-height: 3.25rem;
                font-size: 2.75rem;
                letter-spacing: 0;
                font-weight: 400;
                font-weight: 500
            }
        }

        @media screen and (min-width:1440px) {
            .PyyLUd,
            .oiEt0d {
                height: 600px;
                width: 1067px
            }
            .XcNflb {
                min-height: 568px
            }
        }

        @charset "UTF-8";
        .UIuSk:not(:first-child)::before {
            content: " · "
        }

        .XGHsbd {
            border-color: rgb(218, 220, 224);
            border-radius: 8px;
            border: 1px solid;
            margin-top: 30px;
            padding: 20px 20px 0
        }

        .XGHsbd:not(:disabled) {
            border-color: rgb(218, 220, 224)
        }

        .P9KVBf .XGHsbd {
            border-color: rgb(95, 99, 104)
        }

        .P9KVBf .XGHsbd:not(:disabled) {
            border-color: rgb(95, 99, 104)
        }

        .kZzHU {
            text-decoration: underline
        }

        .wGcURe {
            align-items: flex-start;
            display: flex
        }

        .wGcURe:not(:first-child) {
            margin-top: 20px
        }

        .wGcURe:only-child {
            margin-bottom: 20px
        }

        .whEyae {
            height: 20px;
            margin-right: 20px;
            width: 20px
        }

        .jECfAf {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400
        }

        .jECfAf:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .jECfAf {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .jECfAf:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .jECfAf a {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            text-decoration: underline
        }

        .jECfAf a:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .jECfAf a {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .jECfAf a:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .qQhJce {
            margin: 10px 0
        }

        .PbKvK {
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            display: inline-block;
            vertical-align: middle;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAXUlEQVR4AaXRwQ3AIAiF4Y7AKG70r8KojOAG1DYxcDB5Teq74RdRvFLkG3gWhhPkSuDYKnXAYJItk9EAVtuNWAHf5bfZJl4gjiAK5DkdnE5I3UJfUj9TD0qP+vdv3sq2BlCSAd3JAAAAAElFTkSuQmCC);
            height: 20px;
            margin-bottom: 2px;
            width: 20px
        }

        .Fgrxaf {
            margin-top: -12px
        }

        .AFTNG {
            color: #aecbfa;
            cursor: pointer;
            font-weight: 400;
            padding: 0 10px
        }

        .AFTNG:hover {
            text-decoration: underline
        }

        .AFTNG:visited {
            color: #aecbfa;
            cursor: pointer
        }

        .DiJ38 {
            bottom: 5px;
            position: fixed;
            width: 100%;
            z-index: 100
        }

        .CpIzte {
            background-color: #333;
            color: #fff;
            display: flex;
            font-size: 16px;
            justify-content: center;
            padding-top: 10px
        }

        .NresQd {
            font-weight: 600;
            padding-right: 10px
        }

        .za2PWe {
            margin-bottom: 5px;
            margin-left: 10px;
            width: 80px
        }

        .hcq9Df,
        .edaMIf,
        .hcq9Df .bGJWSe {
            align-items: center;
            display: flex
        }

        .hcq9Df .OBVQ7 {
            padding-left: 16px
        }

        .kk2r5b {
            align-items: unset;
            display: flex;
            flex-direction: column
        }

        .kk2r5b .bGJWSe {
            flex-grow: 1
        }

        .kk2r5b .OBVQ7 {
            margin: auto
        }

        .OBVQ7 {
            z-index: 1;
            align-items: center;
            display: flex;
            gap: 8px
        }

        .IZOk1 {
            z-index: 1;
            display: none;
            margin-left: auto
        }

        .lYzcx {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            margin-left: 12px
        }

        .lYzcx:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .lYzcx {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .lYzcx:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .bFXtGf {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem
        }

        .vO0kpf {
            display: flex;
            flex-wrap: wrap;
            margin-top: 16px
        }

        .HtY85d {
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            display: flex;
            padding: 4px 0
        }

        .HtY85d:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .HtY85d {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .HtY85d:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .HtY85d .zCLmzf {
            flex-shrink: 0;
            font-size: 20px;
            height: 20px;
            margin-right: 12px;
            width: 20px
        }

        .qwdCOd {
            width: 100%
        }

        .AqX8Cf a {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .AqX8Cf a:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .AqX8Cf a {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .AqX8Cf a:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .kdG1Ee {
            color: #d93025;
            fill: #d93025;
            stop-color: #d93025;
            font-weight: 600
        }

        .kdG1Ee:not(:disabled) {
            color: #d93025
        }

        .P9KVBf .kdG1Ee {
            color: #fa4839;
            fill: #fa4839;
            stop-color: #fa4839
        }

        .P9KVBf .kdG1Ee:not(:disabled) {
            color: #fa4839
        }

        .qOpXWb {
            color: #d93025;
            fill: #d93025;
            stop-color: #d93025
        }

        .qOpXWb:not(:disabled) {
            color: #d93025
        }

        .P9KVBf .qOpXWb {
            color: #fa4839;
            fill: #fa4839;
            stop-color: #fa4839
        }

        .P9KVBf .qOpXWb:not(:disabled) {
            color: #fa4839
        }

        .pFise {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f;
            font-weight: 600
        }

        .pFise:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .pFise {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .pFise:not(:disabled) {
            color: #00a173
        }

        .NiPN6 {
            color: #0179ca;
            fill: #0179ca;
            stop-color: #0179ca;
            font-weight: 600
        }

        .NiPN6:not(:disabled) {
            color: #0179ca
        }

        .P9KVBf .NiPN6 {
            color: #50b4f4;
            fill: #50b4f4;
            stop-color: #50b4f4
        }

        .P9KVBf .NiPN6:not(:disabled) {
            color: #50b4f4
        }

        .Gg3Ydd {
            color: #c71c56;
            fill: #c71c56;
            stop-color: #c71c56;
            font-weight: 600
        }

        .Gg3Ydd:not(:disabled) {
            color: #c71c56
        }

        .P9KVBf .Gg3Ydd {
            color: #ff3369;
            fill: #ff3369;
            stop-color: #ff3369
        }

        .P9KVBf .Gg3Ydd:not(:disabled) {
            color: #ff3369
        }

        .Eprpof {
            text-decoration: underline
        }

        .P9KVBf .lYzcx .eT1oJ {
            z-index: 0
        }

        .P9KVBf .lYzcx .eT1oJ .VfPpkd-Bz112c-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ .VfPpkd-Bz112c-Jh9lGc::after {
            z-index: -1
        }

        .P9KVBf .lYzcx .eT1oJ:disabled {
            color: rgba(232, 234, 237, .38);
            color: var(--gm-iconbutton-disabled-ink-color, rgba(232, 234, 237, .38))
        }

        .P9KVBf .lYzcx .eT1oJ .VfPpkd-Bz112c-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ .VfPpkd-Bz112c-Jh9lGc::after {
            background-color: rgb(232, 234, 237);
            background-color: var(--mdc-ripple-color, rgb(232, 234, 237))
        }

        .P9KVBf .lYzcx .eT1oJ:hover .VfPpkd-Bz112c-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Bz112c-Jh9lGc::before {
            opacity: .04;
            opacity: var(--mdc-ripple-hover-opacity, .04)
        }

        .P9KVBf .lYzcx .eT1oJ.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Bz112c-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Bz112c-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: .12;
            opacity: var(--mdc-ripple-focus-opacity, .12)
        }

        .P9KVBf .lYzcx .eT1oJ:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Bz112c-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .P9KVBf .lYzcx .eT1oJ:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Bz112c-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: .1;
            opacity: var(--mdc-ripple-press-opacity, .1)
        }

        .P9KVBf .lYzcx .eT1oJ.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0.1)
        }

        .P9KVBf .lYzcx .eT1oJ:disabled:hover .VfPpkd-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ:disabled.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
            opacity: 0;
            opacity: var(--mdc-ripple-hover-opacity, 0)
        }

        .P9KVBf .lYzcx .eT1oJ:disabled.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
        .P9KVBf .lYzcx .eT1oJ:disabled:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-focus-opacity, 0)
        }

        .P9KVBf .lYzcx .eT1oJ:disabled:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
            transition: opacity .15s linear
        }

        .P9KVBf .lYzcx .eT1oJ:disabled:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
            transition-duration: 75ms;
            opacity: 0;
            opacity: var(--mdc-ripple-press-opacity, 0)
        }

        .P9KVBf .lYzcx .eT1oJ:disabled.VfPpkd-ksKsZd-mWPk3d {
            --mdc-ripple-fg-opacity: var(--mdc-ripple-press-opacity, 0)
        }

        @media screen and (min-width:600px) {
            .kk2r5b {
                align-items: center;
                flex-direction: row
            }
            .kk2r5b .bGJWSe {
                flex-grow: unset
            }
            .kk2r5b .OBVQ7 {
                margin: 0;
                padding-left: 16px
            }
            .HtY85d {
                margin-right: 36px
            }
        }

        .rA4hHd {
            width: 100%
        }

        .nC7tdd {
            max-width: 620px
        }

        .cOP9Jc {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .cOP9Jc:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .cOP9Jc {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .cOP9Jc:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        @media screen and (min-width:840px) {
            .IZOk1 {
                display: block
            }
        }

        .ubGTjb {
            align-items: center;
            display: inline-flex;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .sT93pb {
            display: inline-block;
            vertical-align: center
        }

        .OnEJge {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .sYJxkd,
        .w2kbF,
        .JUF8md,
        .wMUdtb {
            font-family: Roboto, Arial, sans-serif;
            line-height: 1rem;
            font-size: .75rem;
            letter-spacing: .025em;
            font-weight: 400;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            letter-spacing: .2px
        }

        .wMUdtb {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36)
        }

        .wMUdtb:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .wMUdtb {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .wMUdtb:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .Q4fJQd .Yvy3Fd,
        .sYJxkd,
        .O9T88b,
        .w2kbF,
        .JUF8md {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104)
        }

        .Q4fJQd .Yvy3Fd:not(:disabled),
        .sYJxkd:not(:disabled),
        .O9T88b:not(:disabled),
        .w2kbF:not(:disabled),
        .JUF8md:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .Q4fJQd .Yvy3Fd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .Q4fJQd .Yvy3Fd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .sYJxkd {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .sYJxkd:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .O9T88b {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .O9T88b:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .w2kbF {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .w2kbF:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .P9KVBf .JUF8md {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .JUF8md:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .sYJxkd {
            padding: 0 8px
        }

        .Q4fJQd .Yvy3Fd {
            font-size: .625rem
        }

        .CKzsaf,
        .Q4fJQd {
            align-items: center;
            display: inline-flex;
            height: 100%
        }

        .Q4fJQd {
            padding-left: 2px
        }

        .Lip2w {
            display: inline-block;
            margin-left: 3px
        }

        .f1rXgf {
            font-style: italic
        }

        .JUF8md {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166);
            text-decoration: line-through
        }

        .JUF8md:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        .Q64Ric {
            margin-left: 4px
        }

        .K4Wkre {
            color: #01875f;
            fill: #01875f;
            stop-color: #01875f;
            font-weight: 500
        }

        .K4Wkre:not(:disabled) {
            color: #01875f
        }

        .P9KVBf .K4Wkre {
            color: #00a173;
            fill: #00a173;
            stop-color: #00a173
        }

        .P9KVBf .K4Wkre:not(:disabled) {
            color: #00a173
        }

        .DdYX5 {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-size: .875rem;
            font-weight: 400;
            letter-spacing: .0142857143em;
            line-height: 1.25rem;
            font-family: Roboto, Helvetica, Arial, sans-serif;
            letter-spacing: -.2px
        }

        .DdYX5:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .DdYX5 {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .DdYX5:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .ePXqnb {
            margin-left: 12px
        }

        .O9T88b {
            height: 12px;
            vertical-align: middle
        }

        @media screen and (min-width:1280px) {
            .w2kbF,
            .JUF8md,
            .wMUdtb {
                font-size: .875rem;
                font-weight: 400;
                letter-spacing: .0142857143em;
                line-height: 1.25rem;
                letter-spacing: .2px
            }
            .K4Wkre {
                font-weight: 500
            }
            .Q4fJQd .Yvy3Fd {
                font-size: .75rem
            }
            .muC06c {
                font-size: 14px;
                line-height: 20px
            }
            .DdYX5 {
                font-size: 1rem;
                font-weight: 400;
                letter-spacing: .00625em;
                line-height: 1.5rem;
                letter-spacing: 0
            }
            .ePXqnb {
                margin-left: 16px
            }
            .O9T88b {
                height: 14px
            }
            .YL5Er {
                fill: #5f6368
            }
            .Q64Ric {
                margin-left: 8px
            }
        }

        .j2FCNc {
            column-gap: 16px;
            display: grid;
            grid-template-columns: max-content auto;
            margin: 16px 0
        }

        .cQv9D {
            margin: 12px
        }

        .stzEZd {
            border-radius: 12px;
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            height: 56px;
            width: 56px
        }

        .stzEZd .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .ECOsRb {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 4px;
            height: 108px;
            width: 72px
        }

        .ECOsRb .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .GGwY5 {
            border-width: 0;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
            border-radius: 4px;
            height: 72px;
            width: 72px
        }

        .GGwY5 .VfPpkd-BFbNVe-bF1uUb {
            opacity: 0
        }

        .cXFu1 {
            display: grid;
            grid-template-rows: max-content;
            height: fit-content;
            row-gap: 2px
        }

        .V81Nob {
            background-color: rgb(248, 249, 250)
        }

        .V81Nob:not(:disabled) {
            background-color: rgb(248, 249, 250)
        }

        .P9KVBf .V81Nob {
            background-color: #2a2b2e
        }

        .P9KVBf .V81Nob:not(:disabled) {
            background-color: #2a2b2e
        }

        .yY9yUc {
            background-color: rgb(248, 249, 250);
            height: 14px;
            margin-bottom: 10px
        }

        .yY9yUc:not(:disabled) {
            background-color: rgb(248, 249, 250)
        }

        .P9KVBf .yY9yUc {
            background-color: #2a2b2e
        }

        .P9KVBf .yY9yUc:not(:disabled) {
            background-color: #2a2b2e
        }

        .yY9yUc:first-child {
            width: 125px
        }

        .yY9yUc:nth-child(2) {
            width: 175px
        }

        .yY9yUc:last-child {
            margin-bottom: 0;
            width: 100px
        }

        @media screen and (min-width:1280px) {
            .cQv9D {
                margin: 16px 12px
            }
            .stzEZd {
                height: 64px;
                width: 64px
            }
            .ECOsRb {
                border-radius: 4px;
                height: 132px;
                width: 88px
            }
            .GGwY5 {
                height: 88px;
                width: 88px
            }
            .cXFu1 {
                row-gap: 0
            }
        }

        .ErwGJf {
            display: grid;
            grid-gap: 24px;
            grid-template-columns: repeat(2, 1fr)
        }

        .ErwGJf .fUtUMc {
            border-radius: 8px;
            margin: -12px
        }

        .nT2RTe {
            display: flex;
            position: relative
        }

        @media screen and (min-width:960px) {
            .ErwGJf {
                grid-template-columns: repeat(1, 1fr)
            }
        }

        .T4LgNb {
            bottom: 0;
            left: 0;
            top: 0;
            right: 0;
            position: absolute;
            z-index: 1
        }

        .QMEh5b {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 3
        }

        .AOq4tb {
            height: 56px
        }

        .kFwPee {
            position: relative;
            z-index: 1;
            height: 100%
        }

        .ydMMEb {
            height: 56px;
            width: 100%
        }

        .SSPGKf {
            overflow-y: hidden;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0
        }

        .ecJEib .AOq4tb,
        .ecJEib .ydMMEb {
            height: 64px
        }

        .e2G3Fb.EWZcud .AOq4tb,
        .e2G3Fb.EWZcud .ydMMEb {
            height: 48px
        }

        .e2G3Fb.b30Rkd .AOq4tb,
        .e2G3Fb.b30Rkd .ydMMEb {
            height: 56px
        }

        .SSPGKf {
            position: relative;
            min-height: 100%
        }

        .SSPGKf.BIIBbc {
            height: 100%;
            overflow: hidden
        }

        .kFwPee {
            backface-visibility: hidden;
            min-height: 100%;
            height: auto
        }

        .T4LgNb {
            min-height: 100%;
            position: relative
        }

        .T4LgNb.eejsDc {
            min-height: 100%;
            overflow-y: hidden;
            -webkit-overflow-scrolling: auto
        }

        .QMEh5b {
            position: fixed
        }

        .aA0Vnf {
            color: rgb(32, 33, 36);
            fill: rgb(32, 33, 36);
            stop-color: rgb(32, 33, 36);
            font-family: "Google Sans", Roboto, Arial, sans-serif;
            line-height: 1.25rem;
            font-size: .875rem;
            letter-spacing: .0178571429em;
            font-weight: 500;
            align-items: center;
            display: flex
        }

        .aA0Vnf:not(:disabled) {
            color: rgb(32, 33, 36)
        }

        .P9KVBf .aA0Vnf {
            color: rgb(232, 234, 237);
            fill: rgb(232, 234, 237);
            stop-color: rgb(232, 234, 237)
        }

        .P9KVBf .aA0Vnf:not(:disabled) {
            color: rgb(232, 234, 237)
        }

        .aA0Vnf .GfskQe {
            color: rgb(95, 99, 104);
            fill: rgb(95, 99, 104);
            stop-color: rgb(95, 99, 104);
            font-size: 18px;
            margin-right: 16px
        }

        .aA0Vnf .GfskQe:not(:disabled) {
            color: rgb(95, 99, 104)
        }

        .P9KVBf .aA0Vnf .GfskQe {
            color: rgb(154, 160, 166);
            fill: rgb(154, 160, 166);
            stop-color: rgb(154, 160, 166)
        }

        .P9KVBf .aA0Vnf .GfskQe:not(:disabled) {
            color: rgb(154, 160, 166)
        }

        sentinel {}

        /*# sourceURL=/_/boq-play/_/ss/k=boq-play.PlayStoreUi.EMK8mr1GfXw.L.B1.O/am=5sBh-IPA7vxCCwAI/d=1/ed=1/rs=AB1caFVWaeD_fbEMmfRuIl1sBoIAhNnIpA/m=appdetailsview,_b,_tp,_r */
    </style>
    <script nonce="">
        onCssLoad();
    </script>
    <style nonce="">
        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 100;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxIIzI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 300;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc4.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu72xKOzY.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxKOzY.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7mxKOzY.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4WxKOzY.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7WxKOzY.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu7GxKOzY.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxK.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fBBc4.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2)format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2)format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            src: url(//fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Material Icons Extended';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/materialiconsextended/v149/kJEjBvgX7BgnkSrUwT8UnLVc38YydejYY-oE_LvJ.woff2)format('woff2');
        }

        .material-icons-extended {
            font-family: 'Material Icons Extended';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        @font-face {
            font-family: 'Google Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlematerialicons/v130/Gw6kwdfw6UnXLJCcmafZyFRXb3BL9rvi0QZG3Q.woff2)format('woff2');
        }

        .google-material-icons {
            font-family: 'Google Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        @font-face {
            font-family: 'Product Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/productsans/v9/pxiDypQkot1TnFhsFMOfGShVGdeOcEg.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Product Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/productsans/v9/pxiDypQkot1TnFhsFMOfGShVF9eO.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2ugCIlsw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vQCIlsw.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vACIlsw.woff2)format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2sQCIlsw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2sACIlsw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vgCI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2ugCIlsw.woff2)format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vQCIlsw.woff2)format('woff2');
            unicode-range: U+0370-03FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vACIlsw.woff2)format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2sQCIlsw.woff2)format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2sACIlsw.woff2)format('woff2');
            unicode-range: U+0100-02AF, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: 'Google Sans';
            font-style: normal;
            font-weight: 500;
            src: url(//fonts.gstatic.com/s/googlesans/v29/4UaRrENHsxJlGDuGo1OIlJfC6mGS6vhAK1YobMu2vgCI.woff2)format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <script nonce="">
        (function() {
            /*

             Copyright The Closure Library Authors.
             SPDX-License-Identifier: Apache-2.0
            */
            'use strict';

            function aa() {
                var b = t,
                    c = 0;
                return function() {
                    return c < b.length ? {
                        done: !1,
                        value: b[c++]
                    } : {
                        done: !0
                    }
                }
            }
            var w = this || self;
            /*

             Copyright 2013 Google LLC.
             SPDX-License-Identifier: Apache-2.0
            */
            var x = {};

            function ba(b, c) {
                if (null === c) return !1;
                if ("contains" in b && 1 == c.nodeType) return b.contains(c);
                if ("compareDocumentPosition" in b) return b == c || !!(b.compareDocumentPosition(c) & 16);
                for (; c && b != c;) c = c.parentNode;
                return c == b
            };
            /*

             Copyright 2011 Google LLC.
             SPDX-License-Identifier: Apache-2.0
            */
            function ca(b, c) {
                return function(d) {
                    d || (d = window.event);
                    return c.call(b, d)
                }
            }

            function y(b) {
                b = b.target || b.srcElement;
                !b.getAttribute && b.parentNode && (b = b.parentNode);
                return b
            }
            var B = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent),
                da = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent),
                ea = {
                    A: 1,
                    INPUT: 1,
                    TEXTAREA: 1,
                    SELECT: 1,
                    BUTTON: 1
                };

            function fa() {
                this._mouseEventsPrevented = !0
            }
            var ha = {
                    Enter: 13,
                    " ": 32
                },
                C = {
                    A: 13,
                    BUTTON: 0,
                    CHECKBOX: 32,
                    COMBOBOX: 13,
                    FILE: 0,
                    GRIDCELL: 13,
                    LINK: 13,
                    LISTBOX: 13,
                    MENU: 0,
                    MENUBAR: 0,
                    MENUITEM: 0,
                    MENUITEMCHECKBOX: 0,
                    MENUITEMRADIO: 0,
                    OPTION: 0,
                    RADIO: 32,
                    RADIOGROUP: 32,
                    RESET: 0,
                    SUBMIT: 0,
                    SWITCH: 32,
                    TAB: 0,
                    TREE: 13,
                    TREEITEM: 13
                },
                E = {
                    CHECKBOX: !0,
                    FILE: !0,
                    OPTION: !0,
                    RADIO: !0
                },
                F = {
                    COLOR: !0,
                    DATE: !0,
                    DATETIME: !0,
                    "DATETIME-LOCAL": !0,
                    EMAIL: !0,
                    MONTH: !0,
                    NUMBER: !0,
                    PASSWORD: !0,
                    RANGE: !0,
                    SEARCH: !0,
                    TEL: !0,
                    TEXT: !0,
                    TEXTAREA: !0,
                    TIME: !0,
                    URL: !0,
                    WEEK: !0
                },
                ia = {
                    A: !0,
                    AREA: !0,
                    BUTTON: !0,
                    DIALOG: !0,
                    IMG: !0,
                    INPUT: !0,
                    LINK: !0,
                    MENU: !0,
                    OPTGROUP: !0,
                    OPTION: !0,
                    PROGRESS: !0,
                    SELECT: !0,
                    TEXTAREA: !0
                };

            function ja(b) {
                this.g = b;
                this.h = []
            };
            var G = w._jsa || {};
            G._cfc = void 0;
            G._aeh = void 0;
            /*

             Copyright 2005 Google LLC.
             SPDX-License-Identifier: Apache-2.0
            */
            function L() {
                this.o = [];
                this.g = [];
                this.j = [];
                this.m = {};
                this.h = null;
                this.l = []
            }

            function M(b) {
                return String.prototype.trim ? b.trim() : b.replace(/^\s+/, "").replace(/\s+$/, "")
            }

            function ka(b, c) {
                return function n(a, k) {
                    k = void 0 === k ? !0 : k;
                    var e = c;
                    if ("click" == e && (B && a.metaKey || !B && a.ctrlKey || 2 == a.which || null == a.which && 4 == a.button || a.shiftKey)) e = "clickmod";
                    else {
                        var f = a.which || a.keyCode;
                        !f && a.key && (f = ha[a.key]);
                        da && 3 == f && (f = 13);
                        if (13 != f && 32 != f) f = !1;
                        else {
                            var g = y(a),
                                h;
                            (h = "keydown" != a.type || !!(!("getAttribute" in g) || (g.getAttribute("type") || g.tagName).toUpperCase() in F || "BUTTON" == g.tagName.toUpperCase() || g.type && "FILE" == g.type.toUpperCase() || g.isContentEditable) || a.ctrlKey || a.shiftKey ||
                                a.altKey || a.metaKey || (g.getAttribute("type") || g.tagName).toUpperCase() in E && 32 == f) || ((h = g.tagName in ea) || (h = g.getAttributeNode("tabindex"), h = null != h && h.specified), h = !(h && !g.disabled));
                            if (h) f = !1;
                            else {
                                h = (g.getAttribute("role") || g.type || g.tagName).toUpperCase();
                                var v = !(h in C) && 13 == f;
                                g = "INPUT" != g.tagName.toUpperCase() || !!g.type;
                                f = (0 == C[h] % f || v) && g
                            }
                        }
                        f && (e = "clickkey")
                    }
                    g = a.srcElement || a.target;
                    f = N(e, a, g, "", null);
                    var l, z;
                    for (h = g; h && h != this; h = h.__owner || ("#document-fragment" !== (null == (l = h.parentNode) ? void 0 :
                            l.nodeName) ? h.parentNode : null == (z = h.parentNode) ? void 0 : z.host)) {
                        var m = h;
                        var q = void 0;
                        v = m;
                        var r = e,
                            la = a;
                        var p = v.__jsaction;
                        if (!p) {
                            var D;
                            p = null;
                            "getAttribute" in v && (p = v.getAttribute("jsaction"));
                            if (D = p) {
                                p = x[D];
                                if (!p) {
                                    p = {};
                                    for (var H = D.split(ma), na = H ? H.length : 0, I = 0; I < na; I++) {
                                        var A = H[I];
                                        if (A) {
                                            var J = A.indexOf(":"),
                                                T = -1 != J;
                                            p[T ? M(A.substr(0, J)) : oa] = T ? M(A.substr(J + 1)) : A
                                        }
                                    }
                                    x[D] = p
                                }
                                v.__jsaction = p
                            } else p = pa, v.__jsaction = p
                        }
                        "maybe_click" == r && p.click ? (q = r, r = "click") : "clickkey" == r ? r = "click" : "click" != r || p.click || (r =
                            "clickonly");
                        q = G._cfc && p.click ? G._cfc(v, la, p, r, q) : {
                            eventType: q ? q : r,
                            action: p[r] || "",
                            event: null,
                            ignore: !1
                        };
                        if (q.ignore || q.action) break
                    }
                    q && (f = N(q.eventType, q.event || a, g, q.action || "", m, f.timeStamp));
                    f && "touchend" == f.eventType && (f.event._preventMouseEvents = fa);
                    if (q && q.action) {
                        if (l = "clickkey" == e) l = y(a), l = (l.type || l.tagName).toUpperCase(), (l = 32 == (a.which || a.keyCode) && "CHECKBOX" != l) || (l = y(a), z = l.tagName.toUpperCase(), g = (l.getAttribute("role") || "").toUpperCase(), l = "BUTTON" === z || "BUTTON" === g ? !0 : !(l.tagName.toUpperCase() in
                            ia) || "A" === z || "SELECT" === z || (l.getAttribute("type") || l.tagName).toUpperCase() in E || (l.getAttribute("type") || l.tagName).toUpperCase() in F ? !1 : !0);
                        l && (a.preventDefault ? a.preventDefault() : a.returnValue = !1);
                        if ("mouseenter" == e || "mouseleave" == e || "pointerenter" == e || "pointerleave" == e)
                            if (l = a.relatedTarget, !("mouseover" == a.type && "mouseenter" == e || "mouseout" == a.type && "mouseleave" == e || "pointerover" == a.type && "pointerenter" == e || "pointerout" == a.type && "pointerleave" == e) || l && (l === m || ba(m, l))) f.action = "", f.actionElement =
                                null;
                            else {
                                e = {};
                                for (var u in a) "function" !== typeof a[u] && "srcElement" !== u && "target" !== u && (e[u] = a[u]);
                                e.type = "mouseover" == a.type ? "mouseenter" : "mouseout" == a.type ? "mouseleave" : "pointerover" == a.type ? "pointerenter" : "pointerleave";
                                e.target = e.srcElement = m;
                                e.bubbles = !1;
                                f.event = e;
                                f.targetElement = m
                            }
                    } else f.action = "", f.actionElement = null;
                    m = f;
                    b.h && !m.event.a11ysgd && (u = N(m.eventType, m.event, m.targetElement, m.action, m.actionElement, m.timeStamp), "clickonly" == u.eventType && (u.eventType = "click"), b.h(u, !0));
                    if (m.actionElement) {
                        if (b.h) {
                            if (!m.actionElement ||
                                "A" != m.actionElement.tagName || "click" != m.eventType && "clickmod" != m.eventType || (a.preventDefault ? a.preventDefault() : a.returnValue = !1), (a = b.h(m)) && k) {
                                n.call(this, a, !1);
                                return
                            }
                        } else {
                            if ((k = w.document) && !k.createEvent && k.createEventObject) try {
                                var K = k.createEventObject(a)
                            } catch (ua) {
                                K = a
                            } else K = a;
                            m.event = K;
                            b.l.push(m)
                        }
                        G._aeh && G._aeh(m)
                    }
                }
            }

            function N(b, c, d, a, k, n) {
                return {
                    eventType: b,
                    event: c,
                    targetElement: d,
                    action: a,
                    actionElement: k,
                    timeStamp: n || Date.now()
                }
            }

            function qa(b, c) {
                return function(d) {
                    var a = b,
                        k = c,
                        n = !1;
                    "mouseenter" == a ? a = "mouseover" : "mouseleave" == a ? a = "mouseout" : "pointerenter" == a ? a = "pointerover" : "pointerleave" == a && (a = "pointerout");
                    if (d.addEventListener) {
                        if ("focus" == a || "blur" == a || "error" == a || "load" == a || "toggle" == a) n = !0;
                        d.addEventListener(a, k, n)
                    } else d.attachEvent && ("focus" == a ? a = "focusin" : "blur" == a && (a = "focusout"), k = ca(d, k), d.attachEvent("on" + a, k));
                    return {
                        eventType: a,
                        i: k,
                        capture: n
                    }
                }
            }

            function O(b, c, d) {
                if (!b.m.hasOwnProperty(c)) {
                    var a = ka(b, c);
                    d = qa(d || c, a);
                    b.m[c] = a;
                    b.o.push(d);
                    for (a = 0; a < b.g.length; ++a) {
                        var k = b.g[a];
                        k.h.push(d.call(null, k.g))
                    }
                    "click" == c && O(b, "keydown")
                }
            }
            L.prototype.i = function(b) {
                return this.m[b]
            };

            function ra(b, c) {
                var d = new ja(c);
                a: {
                    for (var a = 0; a < b.g.length; a++)
                        if (P(b.g[a].g, c)) {
                            c = !0;
                            break a
                        }
                    c = !1
                }
                if (c) return b.j.push(d), d;
                Q(b, d);
                b.g.push(d);
                c = b.j.concat(b.g);
                a = [];
                for (var k = [], n = 0; n < b.g.length; ++n) {
                    var e = b.g[n];
                    if (R(e, c)) {
                        a.push(e);
                        for (var f = 0; f < e.h.length; ++f) {
                            var g = e.g,
                                h = e.h[f];
                            g.removeEventListener ? g.removeEventListener(h.eventType, h.i, h.capture) : g.detachEvent && g.detachEvent("on" + h.eventType, h.i)
                        }
                        e.h = []
                    } else k.push(e)
                }
                for (n = 0; n < b.j.length; ++n) e = b.j[n], R(e, c) ? a.push(e) : (k.push(e), Q(b, e));
                b.g = k;
                b.j = a;
                return d
            }

            function Q(b, c) {
                var d = c.g;
                sa && (d.style.cursor = "pointer");
                for (d = 0; d < b.o.length; ++d) c.h.push(b.o[d].call(null, c.g))
            }

            function R(b, c) {
                for (var d = 0; d < c.length; ++d)
                    if (c[d].g != b.g && P(c[d].g, b.g)) return !0;
                return !1
            }

            function P(b, c) {
                for (; b != c && c.parentNode;) c = c.parentNode;
                return b == c
            }
            var sa = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent),
                ma = /\s*;\s*/,
                oa = "click",
                pa = {};
            var t = "click dblclick focus focusin blur error focusout keydown keyup keypress load mouseover mouseout mouseenter mouseleave submit toggle touchstart touchend touchmove touchcancel auxclick change compositionstart compositionupdate compositionend beforeinput input textinput copy cut paste mousedown mouseup wheel contextmenu dragover dragenter dragleave drop dragstart dragend pointerdown pointermove pointerup pointercancel pointerenter pointerleave pointerover pointerout gotpointercapture lostpointercapture ended loadedmetadata pagehide pageshow visibilitychange beforematch".split(" ");
            if (!(t instanceof Array)) {
                var S;
                var U = "undefined" != typeof Symbol && Symbol.iterator && t[Symbol.iterator];
                if (U) S = U.call(t);
                else if ("number" == typeof t.length) S = {
                    next: aa()
                };
                else throw Error(String(t) + " is not an iterable or ArrayLike");
                for (var V, ta = []; !(V = S.next()).done;) ta.push(V.value)
            };
            var W = function(b) {
                    return {
                        trigger: function(c) {
                            var d = b.i(c.type);
                            d || (O(b, c.type), d = b.i(c.type));
                            var a = c.target || c.srcElement;
                            d && d.call(a.ownerDocument.documentElement, c)
                        },
                        bind: function(c) {
                            b.h = c;
                            b.l && (0 < b.l.length && c(b.l), b.l = null)
                        }
                    }
                }(function() {
                    var b = window,
                        c = new L,
                        d = ra(c, b.document.documentElement);
                    t.forEach(function(n) {
                        return O(c, n)
                    });
                    var a, k;
                    "onwebkitanimationend" in b && (a = "webkitAnimationEnd");
                    O(c, "animationend", a);
                    "onwebkittransitionend" in b && (k = "webkitTransitionEnd");
                    O(c, "transitionend", k);
                    return {
                        s: c,
                        u: d
                    }
                }().s),
                X = ["BOQ_wizbind"],
                Y = window || w;
            X[0] in Y || "undefined" == typeof Y.execScript || Y.execScript("var " + X[0]);
            for (var Z; X.length && (Z = X.shift());) X.length || void 0 === W ? Y[Z] && Y[Z] !== Object.prototype[Z] ? Y = Y[Z] : Y = Y[Z] = {} : Y[Z] = W;
        }).call(this);
    </script>
    <script nocollect="" src="./3 Star Paly  – Apps on Google Play_files/m=_b,_tp,_r" defer="" id="base-js" nonce=""></script>
    <script nonce="">
        if (window.BOQ_loadedInitialJS) {
            onJsLoad();
        } else {
            document.getElementById('base-js').addEventListener('load', onJsLoad, false);
        }
    </script>
    <script nonce="">
        window['_wjdc'] = function(d) {
            window['_wjdd'] = d
        };
    </script>
    <meta content="NOODP" name="robots">


    <title id="main-title">Rajdhani Market</title>
    <meta name="description" property="og:description" content="Trusted by 4 Cr+ users. Play fantasy sports responsibly https://bit.ly/RespMy11C">
    <meta property="og:image" content="https://play-lh.googleusercontent.com/yUNWB21_800_kh799jgKgieY97PLuuWv5k8TGzaeHUUzBDn_GF7EU4WBHiqv9SmHPys">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@GooglePlay">
    <meta name="twitter:title" content="3 Star Paly  – Apps on Google Play">
    <meta name="twitter:description" content="Trusted by 4 Cr+ users. Play fantasy sports responsibly https://bit.ly/RespMy11C">
    <meta name="twitter:image" content="https://play-lh.googleusercontent.com/yUNWB21_800_kh799jgKgieY97PLuuWv5k8TGzaeHUUzBDn_GF7EU4WBHiqv9SmHPys=w600-h300-pc0xffffff-pd">
    <meta name="appstore:developer_url" content="https://www.3 Star Paly .com/">
    <meta name="appstore:bundle_id" content="com.games24x7.3 Star Paly .fantasycricket">
    <meta name="appstore:store_id" content="com.games24x7.3 Star Paly .fantasycricket">
    <script nonce="">
        var AF_initDataKeys = ["ds:0", "ds:1", "ds:2", "ds:3", "ds:4", "ds:5", "ds:6", "ds:7", "ds:8", "ds:9", "ds:10", "ds:11", "ds:12", "ds:13", "ds:14"];
        var AF_dataServiceRequests = {
            'ds:0': {
                id: 'T6C6Se',
                request: []
            },
            'ds:1': {
                id: 'Qu3lde',
                request: [null, true]
            },
            'ds:2': {
                id: 'X5bnOb',
                ext: 1.59168981E8,
                request: []
            },
            'ds:3': {
                id: 'CLXjtf',
                ext: 1.84915516E8,
                request: [
                    ["com.games24x7.3 Star Paly .fantasycricket", 7]
                ]
            },
            'ds:4': {
                id: 'A6yuRe',
                request: [
                    ["com.games24x7.3 Star Paly .fantasycricket", 7]
                ]
            },
            'ds:5': {
                id: 'cBDeQe',
                request: [null, ["com.games24x7.3 Star Paly .fantasycricket", 7]]
            },
            'ds:6': {
                id: 'Ws7gDc',
                request: [null, null, [
                        [1, 9, 10, 11, 13, 14, 19, 20, 38, 43, 47, 49, 52, 58, 59, 63, 69, 70, 73, 74, 75, 78, 79, 80, 91, 92, 95, 96, 97, 100, 101, 103, 106, 112, 119, 129, 137, 139, 141, 145, 146]
                    ],
                    [
                        [
                            [true, true, 1], null, [
                                [null, []]
                            ], null, null, null, null, [null, 2], null, null, null, null, null, null, null, null, null, null, null, null, null, null, [1]
                        ],
                        [null, [
                            [null, []]
                        ]],
                        [null, [
                            [null, []]
                        ], null, [true]],
                        [null, [
                            [null, []]
                        ]], null, null, null, null, [
                            [
                                [null, []]
                            ]
                        ],
                        [
                            [
                                [null, []]
                            ]
                        ]
                    ], null, [
                        ["com.games24x7.3 Star Paly .fantasycricket", 7]
                    ]
                ]
            },
            'ds:7': {
                id: 'ag2B9c',
                ext: 1.92838566E8,
                request: [
                    [null, ["com.games24x7.3 Star Paly .fantasycricket", 7], null, [
                        [3, [6, null, []]], null, null, [1, 8]
                    ]],
                    [true]
                ]
            },
            'ds:8': {
                id: 'c5NYSc',
                request: [null, ["com.games24x7.3 Star Paly .fantasycricket", 7]]
            },
            'ds:9': {
                id: 'oCPfdb',
                request: [null, [1, null, [40], null, [null, null, null, null, null, null, null, null, 2]],
                    ["com.games24x7.3 Star Paly .fantasycricket", 7]
                ]
            },
            'ds:10': {
                id: 'Ws7gDc',
                request: [null, null, [
                        [52]
                    ],
                    [
                        [null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, [2]]
                    ], null, [
                        ["com.games24x7.3 Star Paly .fantasycricket", 7]
                    ]
                ]
            },
            'ds:11': {
                id: 'oCPfdb',
                request: [null, [2, null, [40], null, [null, null, null, null, null, null, null, null, 2]],
                    ["com.games24x7.3 Star Paly .fantasycricket", 7]
                ]
            },
            'ds:12': {
                id: 'MTfLfb',
                request: [null, ["com.games24x7.3 Star Paly .fantasycricket", 7]]
            },
            'ds:13': {
                id: 'jRco8',
                request: []
            },
            'ds:14': {
                id: 'shGlA',
                request: [null, 0]
            }
        };
        var AF_initDataChunkQueue = [];
        var AF_initDataCallback;
        var AF_initDataInitializeCallback;
        if (AF_initDataInitializeCallback) {
            AF_initDataInitializeCallback(AF_initDataKeys, AF_initDataChunkQueue, AF_dataServiceRequests);
        }
        if (!AF_initDataCallback) {
            AF_initDataCallback = function(chunk) {
                AF_initDataChunkQueue.push(chunk);
            };
        }
    </script>
    <style nonce="" type="text/css" data-late-css="">
        .EDId0c {
            position: relative
        }

        .nhh4Ic {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            z-index: 1;
            pointer-events: none
        }

        .nhh4Ic[data-state=snapping],
        .nhh4Ic[data-state=cancelled] {
            transition: transform 200ms
        }

        .MGUFnf {
            display: block;
            width: 28px;
            height: 28px;
            padding: 15px;
            margin: 0 auto;
            transform: scale(0.7);
            background-color: #fafafa;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .2);
            transition: opacity 400ms
        }

        .nhh4Ic[data-state=resting] .MGUFnf,
        .nhh4Ic[data-state=cooldown] .MGUFnf {
            transform: scale(0);
            transition: transform 150ms
        }

        .nhh4Ic .LLCa0e {
            stroke-width: 3.6px;
            transform: translateZ(1px)
        }

        .nhh4Ic[data-past-threshold=false] .LLCa0e {
            opacity: .3
        }

        .rOhAxb {
            fill: #4285f4;
            stroke: #4285f4
        }

        .A6UUqe {
            display: none;
            stroke-width: 3px;
            width: 28px;
            height: 28px
        }

        .tbcVO {
            width: 28px;
            height: 28px
        }

        .bQ7oke {
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden
        }

        .A6UUqe.qs41qe {
            animation-name: quantumWizSpinnerRotate;
            animation-duration: 1568.63ms;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            display: inline-block
        }

        .A6UUqe.SdoWjb {
            display: inline-block
        }

        .A6UUqe.qs41qe .ceIWpc {
            stroke: none;
            fill: none
        }

        .A6UUqe.sf4e6b .qjUCkf {
            stroke-width: 0
        }

        .qjUCkf {
            transition: stroke-width 400ms;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 14px 14px;
            stroke-dasharray: 58.9 58.9;
            stroke-dashoffset: 58.9;
            fill: none;
            transform: rotate(0deg)
        }

        .A6UUqe.SdoWjb .qjUCkf {
            transition-duration: 0
        }

        .A6UUqe.iPwZeb .qjUCkf {
            animation-delay: -466ms, -466ms, -466ms
        }

        .A6UUqe.qs41qe .qjUCkf {
            animation-name: quantumWizSpinnerFillUnfill, quantumWizSpinnerRot, quantumWizSpinnerColors;
            animation-duration: 1333ms, 5332ms, 5332ms;
            animation-iteration-count: infinite, infinite, infinite;
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1), steps(4), linear;
            animation-fill-mode: forwards
        }

        @keyframes quantumWizSpinnerRotate {
            0% {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes quantumWizSpinnerFillUnfill {
            0% {
                stroke-dashoffset: 58.8
            }
            50% {
                stroke-dashoffset: 0
            }
            to {
                stroke-dashoffset: -58.4
            }
        }

        @keyframes quantumWizSpinnerRot {
            0% {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(-360deg)
            }
        }

        @keyframes quantumWizSpinnerColors {
            0% {
                stroke: #4285f4
            }
            18% {
                stroke: #4285f4
            }
            25% {
                stroke: #db4437
            }
            43% {
                stroke: #db4437
            }
            50% {
                stroke: #f4b400
            }
            68% {
                stroke: #f4b400
            }
            75% {
                stroke: #0f9d58
            }
            93% {
                stroke: #0f9d58
            }
            to {
                stroke: #4285f4
            }
        }

        .rFrNMe {
            -webkit-user-select: none;
            -webkit-user-select: none;
            -webkit-tap-highlight-color: transparent;
            display: inline-block;
            outline: none;
            padding-bottom: 8px;
            width: 200px
        }

        .aCsJod {
            height: 40px;
            position: relative;
            vertical-align: top
        }

        .aXBtI {
            display: flex;
            position: relative;
            top: 14px
        }

        .Xb9hP {
            display: flex;
            box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            min-width: 0%;
            position: relative
        }

        .A37UZe {
            box-sizing: border-box;
            height: 24px;
            line-height: 24px;
            position: relative
        }

        .qgcB3c:not(:empty) {
            padding-right: 12px
        }

        .sxyYjd:not(:empty) {
            padding-left: 12px
        }

        .whsOnd {
            box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            background-color: transparent;
            border: none;
            display: block;
            font: 400 16px poppins;
            height: 24px;
            line-height: 24px;
            margin: 0;
            min-width: 0%;
            outline: none;
            padding: 0;
            z-index: 0
        }

        .rFrNMe.dm7YTc .whsOnd {
            color: #fff
        }

        .whsOnd:invalid,
        .whsOnd:-moz-submit-invalid,
        .whsOnd:-moz-ui-invalid {
            box-shadow: none
        }

        .I0VJ4d>.whsOnd::-ms-clear,
        .I0VJ4d>.whsOnd::-ms-reveal {
            display: none
        }

        .i9lrp {
            background-color: rgba(0, 0, 0, .12);
            bottom: -2px;
            height: 1px;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            width: 100%
        }

        .i9lrp:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: -2px;
            left: 0;
            right: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0);
            pointer-events: none
        }

        .rFrNMe.dm7YTc .i9lrp {
            background-color: rgba(255, 255, 255, .7)
        }

        .OabDMe {
            transform: scaleX(0);
            background-color: #4285f4;
            bottom: -2px;
            height: 2px;
            left: 0;
            margin: 0;
            padding: 0;
            position: absolute;
            width: 100%
        }

        .rFrNMe.dm7YTc .OabDMe {
            background-color: #a1c2fa
        }

        .rFrNMe.k0tWj .i9lrp,
        .rFrNMe.k0tWj .OabDMe {
            background-color: #d50000;
            height: 2px
        }

        .rFrNMe.k0tWj.dm7YTc .i9lrp,
        .rFrNMe.k0tWj.dm7YTc .OabDMe {
            background-color: #e06055
        }

        .whsOnd[disabled] {
            color: rgba(0, 0, 0, .38)
        }

        .rFrNMe.dm7YTc .whsOnd[disabled] {
            color: rgba(255, 255, 255, .5)
        }

        .whsOnd[disabled]~.i9lrp {
            background: none;
            border-bottom: 1px dotted rgba(0, 0, 0, .38)
        }

        .OabDMe.Y2Zypf {
            animation: quantumWizPaperInputRemoveUnderline .3s cubic-bezier(0.4, 0, 0.2, 1)
        }

        .rFrNMe.u3bW4e .OabDMe {
            animation: quantumWizPaperInputAddUnderline .3s cubic-bezier(0.4, 0, 0.2, 1);
            transform: scaleX(1)
        }

        .rFrNMe.sdJrJc>.aCsJod {
            padding-top: 24px
        }

        .AxOyFc {
            transform-origin: bottom left;
            transition: all .3s cubic-bezier(0.4, 0, 0.2, 1);
            transition-property: color, bottom, transform;
            -webkit-transition-property: color, bottom, transform, -webkit-transform;
            transition-property: color, bottom, transform, -webkit-transform;
            color: rgba(0, 0, 0, .38);
            font: 400 16px poppins;
            font-size: 16px;
            pointer-events: none;
            position: absolute;
            bottom: 3px;
            left: 0;
            width: 100%
        }

        .whsOnd:not([disabled]):focus~.AxOyFc,
        .whsOnd[badinput=true]~.AxOyFc,
        .rFrNMe.CDELXb .AxOyFc,
        .rFrNMe.dLgj8b .AxOyFc {
            transform: scale(0.75) translateY(-39px)
        }

        .whsOnd:not([disabled]):focus~.AxOyFc {
            color: #3367d6
        }

        .rFrNMe.dm7YTc .whsOnd:not([disabled]):focus~.AxOyFc {
            color: #a1c2fa
        }

        .rFrNMe.k0tWj .whsOnd:not([disabled]):focus~.AxOyFc {
            color: #d50000
        }

        .ndJi5d {
            color: rgba(0, 0, 0, .38);
            font: 400 16px poppins;
            max-width: 100%;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            text-overflow: ellipsis;
            top: 2px;
            left: 0;
            white-space: nowrap
        }

        .rFrNMe.CDELXb .ndJi5d {
            display: none
        }

        .K0Y8Se {
            -webkit-tap-highlight-color: transparent;
            font: 400 12px poppins;
            height: 16px;
            margin-left: auto;
            padding-left: 16px;
            padding-top: 8px;
            pointer-events: none;
            opacity: .3;
            white-space: nowrap
        }

        .rFrNMe.dm7YTc .AxOyFc,
        .rFrNMe.dm7YTc .K0Y8Se,
        .rFrNMe.dm7YTc .ndJi5d {
            color: rgba(255, 255, 255, .7)
        }

        .rFrNMe.Tyc9J {
            padding-bottom: 4px
        }

        .dEOOab,
        .ovnfwe:not(:empty) {
            -webkit-tap-highlight-color: transparent;
            -webkit-box-flex: 1;
            flex: 1 1 auto;
            font: 400 12px poppins;
            min-height: 16px;
            padding-top: 8px
        }

        .LXRPh {
            display: flex
        }

        .ovnfwe {
            pointer-events: none
        }

        .dEOOab {
            color: #d50000
        }

        .rFrNMe.dm7YTc .dEOOab,
        .rFrNMe.dm7YTc.k0tWj .whsOnd:not([disabled]):focus~.AxOyFc {
            color: #e06055
        }

        .ovnfwe {
            opacity: .3
        }

        .rFrNMe.dm7YTc .ovnfwe {
            color: rgba(255, 255, 255, .7);
            opacity: 1
        }

        .rFrNMe.k0tWj .ovnfwe,
        .rFrNMe:not(.k0tWj) .ovnfwe:not(:empty)+.dEOOab {
            display: none
        }

        @keyframes quantumWizPaperInputRemoveUnderline {
            0% {
                transform: scaleX(1);
                opacity: 1
            }
            to {
                transform: scaleX(1);
                opacity: 0
            }
        }

        @keyframes quantumWizPaperInputAddUnderline {
            0% {
                transform: scaleX(0)
            }
            to {
                transform: scaleX(1)
            }
        }

        .KL4X6e {
            background: #eee;
            bottom: 0;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0
        }

        .TuA45b {
            opacity: .8
        }

        .O0WRkf {
            -webkit-user-select: none;
            transition: background .2s .1s;
            border: 0;
            border-radius: 3px;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            min-width: 4em;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            -webkit-tap-highlight-color: transparent;
            z-index: 0
        }

        .A9jyad {
            font-size: 13px;
            line-height: 16px
        }

        .zZhnYe {
            transition: box-shadow .28s cubic-bezier(0.4, 0, 0.2, 1);
            background: #dfdfdf;
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, .14), 0px 3px 1px -2px rgba(0, 0, 0, .12), 0px 1px 5px 0px rgba(0, 0, 0, .2)
        }

        .zZhnYe.qs41qe {
            transition: box-shadow .28s cubic-bezier(0.4, 0, 0.2, 1);
            transition: background .8s;
            box-shadow: 0px 8px 10px 1px rgba(0, 0, 0, .14), 0px 3px 14px 2px rgba(0, 0, 0, .12), 0px 5px 5px -3px rgba(0, 0, 0, .2)
        }

        .e3Duub,
        .e3Duub a,
        .e3Duub a:hover,
        .e3Duub a:link,
        .e3Duub a:visited {
            background: #4285f4;
            color: #fff
        }

        .HQ8yf,
        .HQ8yf a {
            color: #4285f4
        }

        .UxubU,
        .UxubU a {
            color: #fff
        }

        .ZFr60d {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: transparent
        }

        .O0WRkf.u3bW4e .ZFr60d {
            background-color: rgba(0, 0, 0, .12)
        }

        .UxubU.u3bW4e .ZFr60d {
            background-color: rgba(255, 255, 255, .3)
        }

        .e3Duub.u3bW4e .ZFr60d {
            background-color: rgba(0, 0, 0, 0.122)
        }

        .HQ8yf.u3bW4e .ZFr60d {
            background-color: rgba(66, 133, 244, .15)
        }

        .Vwe4Vb {
            transform: translate(-50%, -50%) scale(0);
            transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s;
            -webkit-transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s, -webkit-transform 0s ease .2s;
            transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s, -webkit-transform 0s ease .2s;
            background-size: cover;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            visibility: hidden
        }

        .O0WRkf.qs41qe .Vwe4Vb {
            transform: translate(-50%, -50%) scale(2.2);
            opacity: 1;
            visibility: visible
        }

        .O0WRkf.qs41qe.M9Bg4d .Vwe4Vb {
            -webkit-transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            -webkit-transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1);
            -webkit-transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1)
        }

        .O0WRkf.j7nIZb .Vwe4Vb {
            transform: translate(-50%, -50%) scale(2.2);
            visibility: visible
        }

        .oG5Srb .Vwe4Vb,
        .zZhnYe .Vwe4Vb {
            background-image: radial-gradient(circle farthest-side, rgba(0, 0, 0, .12), rgba(0, 0, 0, .12) 80%, rgba(0, 0, 0, 0) 100%)
        }

        .HQ8yf .Vwe4Vb {
            background-image: radial-gradient(circle farthest-side, rgba(66, 133, 244, .25), rgba(66, 133, 244, .25) 80%, rgba(66, 133, 244, 0) 100%)
        }

        .e3Duub .Vwe4Vb {
            background-image: radial-gradient(circle farthest-side, #3367d6, #3367d6 80%, rgba(51, 103, 214, 0) 100%)
        }

        .UxubU .Vwe4Vb {
            background-image: radial-gradient(circle farthest-side, rgba(255, 255, 255, .3), rgba(255, 255, 255, .3) 80%, rgba(255, 255, 255, 0) 100%)
        }

        .O0WRkf.RDPZE {
            box-shadow: none;
            color: rgba(68, 68, 68, 0.502);
            cursor: default;
            fill: rgba(68, 68, 68, 0.502)
        }

        .zZhnYe.RDPZE {
            background: rgba(153, 153, 153, .1)
        }

        .UxubU.RDPZE {
            color: rgba(255, 255, 255, 0.502);
            fill: rgba(255, 255, 255, 0.502)
        }

        .UxubU.zZhnYe.RDPZE {
            background: rgba(204, 204, 204, .1)
        }

        .CwaK9 {
            position: relative
        }

        .RveJvd {
            display: inline-block;
            margin: .5em
        }

        .FKF6mc,
        .FKF6mc:focus {
            display: block;
            outline: none;
            text-decoration: none
        }

        .FKF6mc:visited {
            fill: inherit;
            stroke: inherit
        }

        .U26fgb.u3bW4e {
            outline: 1px solid transparent
        }

        .mUbCce {
            -webkit-user-select: none;
            transition: background .3s;
            border: 0;
            border-radius: 50%;
            cursor: pointer;
            display: inline-block;
            flex-shrink: 0;
            height: 48px;
            outline: none;
            overflow: hidden;
            position: relative;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
            width: 48px;
            z-index: 0
        }

        .mUbCce>.TpQm9d {
            height: 48px;
            width: 48px
        }

        .mUbCce.u3bW4e,
        .mUbCce.qs41qe,
        .mUbCce.j7nIZb {
            -webkit-transform: translateZ(0);
            -webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%)
        }

        .YYBxpf {
            border-radius: 0;
            overflow: visible
        }

        .YYBxpf.u3bW4e,
        .YYBxpf.qs41qe,
        .YYBxpf.j7nIZb {
            -webkit-mask-image: none
        }

        .fKz7Od {
            color: rgba(0, 0, 0, .54);
            fill: rgba(0, 0, 0, .54)
        }

        .p9Nwte {
            color: rgba(255, 255, 255, .75);
            fill: rgba(255, 255, 255, .75)
        }

        .fKz7Od.u3bW4e {
            background-color: rgba(0, 0, 0, .12)
        }

        .p9Nwte.u3bW4e {
            background-color: rgba(204, 204, 204, .25)
        }

        .YYBxpf.u3bW4e {
            background-color: transparent
        }

        .VTBa7b {
            transform: translate(-50%, -50%) scale(0);
            transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s;
            -webkit-transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s, -webkit-transform 0s ease .2s;
            transition: opacity .2s ease, visibility 0s ease .2s, transform 0s ease .2s, -webkit-transform 0s ease .2s;
            background-size: cover;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 0;
            visibility: hidden
        }

        .YYBxpf.u3bW4e .VTBa7b {
            animation: quantumWizIconFocusPulse .7s infinite alternate;
            height: 100%;
            left: 50%;
            top: 50%;
            width: 100%;
            visibility: visible
        }

        .mUbCce.qs41qe .VTBa7b {
            transform: translate(-50%, -50%) scale(2.2);
            opacity: 1;
            visibility: visible
        }

        .mUbCce.qs41qe.M9Bg4d .VTBa7b {
            -webkit-transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            -webkit-transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1);
            -webkit-transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1);
            transition: transform 0.3s cubic-bezier(0, 0, 0.2, 1), opacity .2s cubic-bezier(0, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0, 0, 0.2, 1)
        }

        .mUbCce.j7nIZb .VTBa7b {
            transform: translate(-50%, -50%) scale(2.2);
            visibility: visible
        }

        .fKz7Od .VTBa7b {
            background-image: radial-gradient(circle farthest-side, rgba(0, 0, 0, .12), rgba(0, 0, 0, .12) 80%, rgba(0, 0, 0, 0) 100%)
        }

        .p9Nwte .VTBa7b {
            background-image: radial-gradient(circle farthest-side, rgba(204, 204, 204, .25), rgba(204, 204, 204, .25) 80%, rgba(204, 204, 204, 0) 100%)
        }

        .mUbCce.RDPZE {
            color: rgba(0, 0, 0, .26);
            fill: rgba(0, 0, 0, .26);
            cursor: default
        }

        .p9Nwte.RDPZE {
            color: rgba(255, 255, 255, 0.502);
            fill: rgba(255, 255, 255, 0.502)
        }

        .xjKiLb {
            position: relative;
            top: 50%
        }

        .xjKiLb>span {
            display: inline-block;
            position: relative
        }

        .C0oVfc {
            line-height: 20px;
            min-width: 88px
        }

        .C0oVfc .RveJvd {
            margin: 8px
        }

        .fb0g6 {
            position: relative
        }

        .llhEMd {
            transition: opacity .15s cubic-bezier(0.4, 0, 0.2, 1) .15s;
            background-color: rgba(0, 0, 0, 0.502);
            bottom: 0;
            left: 0;
            opacity: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 5000
        }

        .llhEMd.iWO5td {
            transition: opacity .05s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 1
        }

        .mjANdc {
            transition: transform .4s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition: transform .4s cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform .4s cubic-bezier(0.4, 0, 0.2, 1);
            transition: transform .4s cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform .4s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-box-align: center;
            box-align: center;
            align-items: center;
            display: flex;
            -webkit-box-orient: vertical;
            box-orient: vertical;
            flex-direction: column;
            bottom: 0;
            left: 0;
            padding: 0 5%;
            position: absolute;
            right: 0;
            top: 0
        }

        .x3wWge,
        .ONJhl {
            display: block;
            height: 3em
        }

        .eEPege>.x3wWge,
        .eEPege>.ONJhl {
            box-flex: 1;
            flex-grow: 1
        }

        .J9Nfi {
            flex-shrink: 1;
            max-height: 100%
        }

        .g3VIld {
            -webkit-box-align: stretch;
            box-align: stretch;
            align-items: stretch;
            display: flex;
            -webkit-box-orient: vertical;
            box-orient: vertical;
            flex-direction: column;
            transition: transform .225s cubic-bezier(0, 0, 0.2, 1);
            -webkit-transition: transform .225s cubic-bezier(0, 0, 0.2, 1), -webkit-transform .225s cubic-bezier(0, 0, 0.2, 1);
            transition: transform .225s cubic-bezier(0, 0, 0.2, 1), -webkit-transform .225s cubic-bezier(0, 0, 0.2, 1);
            position: relative;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24);
            max-width: 24em;
            outline: 1px solid transparent;
            overflow: hidden
        }

        .vcug3d .g3VIld {
            padding: 0
        }

        .g3VIld.kdCdqc {
            transition: transform .15s cubic-bezier(0.4, 0, 1, 1);
            -webkit-transition: transform .15s cubic-bezier(0.4, 0, 1, 1), -webkit-transform .15s cubic-bezier(0.4, 0, 1, 1);
            transition: transform .15s cubic-bezier(0.4, 0, 1, 1), -webkit-transform .15s cubic-bezier(0.4, 0, 1, 1)
        }

        .Up8vH.CAwICe {
            transform: scale(0.8)
        }

        .Up8vH.kdCdqc {
            transform: scale(0.9)
        }

        .vcug3d {
            -webkit-box-align: stretch;
            box-align: stretch;
            align-items: stretch;
            padding: 0
        }

        .vcug3d>.g3VIld {
            box-flex: 2;
            flex-grow: 2;
            border-radius: 0;
            left: 0;
            right: 0;
            max-width: 100%
        }

        .vcug3d>.ONJhl,
        .vcug3d>.x3wWge {
            box-flex: 0;
            flex-grow: 0;
            height: 0
        }

        .tOrNgd {
            display: flex;
            flex-shrink: 0;
            font: 500 20px poppins;
            padding: 24px 24px 20px 24px
        }

        .vcug3d .tOrNgd {
            display: none
        }

        .TNczib {
            box-pack: justify;
            -webkit-box-pack: justify;
            justify-content: space-between;
            flex-shrink: 0;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .24);
            background-color: #455a64;
            color: white;
            display: none;
            font: 500 20px poppins
        }

        .vcug3d .TNczib {
            display: flex
        }

        .PNenzf {
            box-flex: 1;
            flex-grow: 1;
            flex-shrink: 1;
            overflow: hidden;
            word-wrap: break-word
        }

        .TNczib .PNenzf {
            margin: 16px 0
        }

        .VY7JQd {
            height: 0
        }

        .TNczib .VY7JQd,
        .tOrNgd .bZWIgd {
            display: none
        }

        .R6Lfte .Wtw8H {
            flex-shrink: 0;
            display: block;
            margin: -12px -6px 0 0
        }

        .PbnGhe {
            box-flex: 2;
            flex-grow: 2;
            flex-shrink: 2;
            display: block;
            font: 400 14px/20px poppins;
            padding: 0 24px;
            overflow-y: auto
        }

        .Whe8ub .PbnGhe {
            padding-top: 24px
        }

        .hFEqNb .PbnGhe {
            padding-bottom: 24px
        }

        .vcug3d .PbnGhe {
            padding: 16px
        }

        .XfpsVe {
            display: flex;
            flex-shrink: 0;
            box-pack: end;
            -webkit-box-pack: end;
            justify-content: flex-end;
            padding: 24px 24px 16px 24px
        }

        .vcug3d .XfpsVe {
            display: none
        }

        .OllbWe {
            box-pack: end;
            -webkit-box-pack: end;
            justify-content: flex-end;
            display: none
        }

        .vcug3d .OllbWe {
            display: flex;
            -webkit-box-align: start;
            box-align: start;
            align-items: flex-start;
            margin: 0 16px
        }

        .kHssdc.O0WRkf.C0oVfc,
        .XfpsVe .O0WRkf.C0oVfc {
            min-width: 64px
        }

        .kHssdc+.kHssdc {
            margin-left: 8px
        }

        .TNczib .kHssdc {
            color: #fff;
            margin-top: 10px
        }

        .TNczib .Wtw8H {
            margin: 4px 24px 4px 0
        }

        .TNczib .kHssdc.u3bW4e,
        .TNczib .Wtw8H.u3bW4e {
            background-color: rgba(204, 204, 204, .25)
        }

        .TNczib .kHssdc>.Vwe4Vb,
        .TNczib .Wtw8H>.VTBa7b {
            background-image: radial-gradient(circle farthest-side, rgba(255, 255, 255, .3), rgba(255, 255, 255, .3) 80%, rgba(255, 255, 255, 0) 100%)
        }

        .TNczib .kHssdc.RDPZE,
        .TNczib .Wtw8H.RDPZE {
            color: rgba(255, 255, 255, .5);
            fill: rgba(255, 255, 255, .5)
        }

        .EmVfjc {
            display: inline-block;
            position: relative;
            width: 28px;
            height: 28px
        }

        .Cg7hO {
            position: absolute;
            width: 0;
            height: 0;
            overflow: hidden
        }

        .xu46lf {
            width: 100%;
            height: 100%
        }

        .EmVfjc.qs41qe .xu46lf {
            animation: spinner-container-rotate 1568ms linear infinite
        }

        .ir3uv {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0
        }

        .uWlRce {
            border-color: #4285f4
        }

        .GFoASc {
            border-color: #db4437
        }

        .WpeOqd {
            border-color: #f4b400
        }

        .rHV3jf {
            border-color: #0f9d58
        }

        .EmVfjc.qs41qe .ir3uv.uWlRce {
            animation: spinner-fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, spinner-blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .EmVfjc.qs41qe .ir3uv.GFoASc {
            animation: spinner-fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, spinner-red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .EmVfjc.qs41qe .ir3uv.WpeOqd {
            animation: spinner-fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, spinner-yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .EmVfjc.qs41qe .ir3uv.rHV3jf {
            animation: spinner-fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both, spinner-green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .HBnAAc {
            position: absolute;
            box-sizing: border-box;
            top: 0;
            left: 45%;
            width: 10%;
            height: 100%;
            overflow: hidden;
            border-color: inherit
        }

        .HBnAAc .X6jHbb {
            width: 1000%;
            left: -450%
        }

        .xq3j6 {
            display: inline-block;
            position: relative;
            width: 50%;
            height: 100%;
            overflow: hidden;
            border-color: inherit
        }

        .xq3j6 .X6jHbb {
            width: 200%
        }

        .X6jHbb {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-sizing: border-box;
            height: 100%;
            border-width: 3px;
            border-style: solid;
            border-color: inherit;
            border-bottom-color: transparent;
            border-radius: 50%;
            animation: none
        }

        .xq3j6.ERcjC .X6jHbb {
            border-right-color: transparent;
            transform: rotate(129deg)
        }

        .xq3j6.dj3yTd .X6jHbb {
            left: -100%;
            border-left-color: transparent;
            transform: rotate(-129deg)
        }

        .EmVfjc.qs41qe .xq3j6.ERcjC .X6jHbb {
            animation: spinner-left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .EmVfjc.qs41qe .xq3j6.dj3yTd .X6jHbb {
            animation: spinner-right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both
        }

        .EmVfjc.sf4e6b .xu46lf {
            animation: spinner-container-rotate 1568ms linear infinite, spinner-fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1)
        }

        @keyframes spinner-container-rotate {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes spinner-fill-unfill-rotate {
            12.5% {
                transform: rotate(135deg)
            }
            25% {
                transform: rotate(270deg)
            }
            37.5% {
                transform: rotate(405deg)
            }
            50% {
                transform: rotate(540deg)
            }
            62.5% {
                transform: rotate(675deg)
            }
            75% {
                transform: rotate(810deg)
            }
            87.5% {
                transform: rotate(945deg)
            }
            to {
                transform: rotate(1080deg)
            }
        }

        @keyframes spinner-blue-fade-in-out {
            0% {
                opacity: .99
            }
            25% {
                opacity: .99
            }
            26% {
                opacity: 0
            }
            89% {
                opacity: 0
            }
            90% {
                opacity: .99
            }
            to {
                opacity: .99
            }
        }

        @keyframes spinner-red-fade-in-out {
            0% {
                opacity: 0
            }
            15% {
                opacity: 0
            }
            25% {
                opacity: .99
            }
            50% {
                opacity: .99
            }
            51% {
                opacity: 0
            }
        }

        @keyframes spinner-yellow-fade-in-out {
            0% {
                opacity: 0
            }
            40% {
                opacity: 0
            }
            50% {
                opacity: .99
            }
            75% {
                opacity: .99
            }
            76% {
                opacity: 0
            }
        }

        @keyframes spinner-green-fade-in-out {
            0% {
                opacity: 0
            }
            65% {
                opacity: 0
            }
            75% {
                opacity: .99
            }
            90% {
                opacity: .99
            }
            to {
                opacity: 0
            }
        }

        @keyframes spinner-left-spin {
            0% {
                transform: rotate(130deg)
            }
            50% {
                transform: rotate(-5deg)
            }
            to {
                transform: rotate(130deg)
            }
        }

        @keyframes spinner-right-spin {
            0% {
                transform: rotate(-130deg)
            }
            50% {
                transform: rotate(5deg)
            }
            to {
                transform: rotate(-130deg)
            }
        }

        @keyframes spinner-fade-out {
            0% {
                opacity: .99
            }
            to {
                opacity: 0
            }
        }

        .hUTled {
            height: 50px;
            left: 50%;
            margin-left: -25px;
            margin-top: -25px;
            position: fixed;
            text-align: center;
            top: 50%;
            width: 50px;
            z-index: 20001
        }

        .k7smx {
            background-color: #fff;
            bottom: 0;
            left: 0;
            opacity: .5;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 20000
        }

        .drrice .i5DZme {
            color: #33691e
        }

        .K1b9Kc .i5DZme {
            color: #01579b
        }

        .q9QOMe .i5DZme {
            color: #a52714
        }

        .drrice .cJSJvc {
            background-color: #689f38
        }

        .K1b9Kc .cJSJvc {
            background-color: #039be5
        }

        .q9QOMe .cJSJvc {
            background-color: #ed3b3b
        }

        .drrice .OvVWOc {
            color: #689f38
        }

        .K1b9Kc .OvVWOc {
            color: #039be5
        }

        .q9QOMe .OvVWOc {
            color: #ed3b3b
        }

        .D4ALMb {
            display: none
        }

        .bYEzqc {
            background-color: rgba(255, 255, 255, 0.8)
        }

        .bYEzqc.LAhoGb {
            background-color: rgba(0, 0, 0, .75)
        }

        .bYEzqc.ZCaYnd {
            background-color: rgba(0, 0, 0, .9)
        }

        .LhXUod {
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 11px 15px 1px rgba(0, 0, 0, .14), 0px 4px 20px 3px rgba(0, 0, 0, .12), 0px 6px 7px -4px rgba(0, 0, 0, .2);
            max-width: none;
            outline: none;
            overflow: visible
        }

        .t89eC {
            max-width: 40em
        }

        @media screen and (max-width:480px) {
            .t89eC {
                max-width: 100%
            }
        }

        .so3xDb {
            cursor: default
        }

        .so3xDb .XAUpld {
            margin-left: 16px
        }

        html[dir="rtl"] .so3xDb .XAUpld {
            margin-left: 0;
            margin-right: 16px
        }

        .MSFxAb {
            left: 40px;
            min-height: 150px;
            position: absolute;
            top: -40px;
            width: 150px;
            z-index: 1
        }

        @media screen and (max-width:480px) {
            .MSFxAb {
                display: none
            }
        }

        .Pq2lFf,
        .Q2n72b {
            padding-left: 40px
        }

        .Pq2lFf {
            padding-right: 40px
        }

        .gZccZc {
            padding-left: 224px
        }

        @media screen and (max-width:480px) {
            .gZccZc {
                padding-left: 40px
            }
        }

        .dIodBf {
            display: inline-block
        }

        .miUA7 {
            font-size: 26px
        }

        .LruL2b {
            color: #616161;
            font-size: 13px;
            font-weight: 500
        }

        .oMtcG {
            font-size: 20px;
            font-weight: 400
        }

        .drrice .oMtcG {
            color: #558b2f
        }

        .ZCaYnd .VY7JQd .Wtw8H {
            margin-right: 6px
        }

        .ZCaYnd .tOrNgd {
            margin-bottom: 12px
        }

        .ZCaYnd .PNenzf {
            visibility: hidden
        }

        .ZCaYnd .VY7JQd .xjKiLb {
            fill: white
        }

        .qlYO9b {
            left: 0;
            padding: 12px;
            position: fixed;
            text-align: center;
            top: 6px;
            width: 100%;
            z-index: 20003
        }

        .Gq7XXc {
            border-radius: 3px;
            box-shadow: 0 2px 40px rgba(0, 0, 0, .4);
            background-color: #fe8;
            border: 1px solid #ba5;
            font-weight: 500;
            padding: 7px 14px
        }

        @media screen and (max-width:600px) {
            .qlYO9b {
                box-shadow: 0 2px 40px rgba(0, 0, 0, .4);
                background-color: #fe8;
                top: 48px;
                width: auto
            }
            .Gq7XXc {
                box-shadow: none;
                border: 0;
                font-size: 16px;
                font-weight: 300;
                padding: 0
            }
        }

        .VfPpkd-YAxtVc {
            background-color: #333333
        }

        .VfPpkd-gIZMF {
            color: rgba(255, 255, 255, .87)
        }

        .VfPpkd-YAxtVc {
            min-width: 344px
    </style>

</head>

<body>
            <div class="kFwPee">
                <div class="tU8Y5c">
                    <div class="P9KVBf">
                        <div class="dzkqwc">
                            <div class="wkMJlb YWi3ub">
                                    <div class="PyyLUd"><video jscontroller="yABLaf" jsaction="rcuQ6b:mLIhuf" class="oiEt0d" jsname="crqSuf" preload="auto" muted="" poster="uploaded_img/Maskgroup.png" tabindex="-1" loop=""><source src="https://play-games.googleusercontent.com/vp/mp4/1280x720/IU19ucYMETw.mp4" type="video/mp4"></video>
                                        <div
                                            class="jaQz3d"></div>
                            </div>
                            <div class="hnnXjf XcNflb J1Igtd">
                                <div class="qxNhq"><img src="uploaded_img/logo.png" srcset="uploaded_img/logo.png" class="T75of cN0oRe fFmL2e" aria-hidden="true" alt="Icon image" itemprop="image" data-iml="6772.10000000149" data-atf="false">
                                    <div>
                                        <h1 class="Fd93Bb F5UCq p5VxAd" itemprop="name"><span>Rajdhani Market</span></h1>
                                        <div class="tv4jIf">
                                            <div class="Vbfug auoIOc"><a href=""><span>Instantly Withdraw</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="JU1wdd">
                                    <div class="l8YSdd"><img src="uploaded_img/logo.png" class="T75of QhHVZd" aria-hidden="true" alt="Icon image" itemprop="image"
                                            data-iml="6772.5" data-atf="true">
                                        <div class="w7Iutd">

                                            <div class="wVqUob" data-toggle="modal" data-target="#myModall">
                                                <div class="ClM7O">
                                                    <div itemprop="starRating">
                                                        <div class="TT9eCd" aria-label="Rated 4.2 stars out of five stars">4.1</div>
                                                    </div>
                                                </div>
                                                <div class="g1rdde">45980 Reviews</div>
                                            </div>



                                            <div class="wVqUob">
                                                <div class="ClM7O">50K+</div>
                                                <div class="g1rdde">Downloads</div>
                                            </div>
                                            <div class="wVqUob">
                                                <div class="ClM7O"><img src="uploaded_img/unnamed (7).webp" srcset="https://play-lh.googleusercontent.com/QNpsl4k43vdbfwUAlVLZul2W5O5MUGOToystzghc97mljVHbUwtc639tahcuDsAVHdaGMyZA40AmMVcB_ws=w96-h32-rw 2x" class="T75of xGa6dd" alt="Content rating"
                                                        itemprop="image" data-iml="6806.199999999255" data-atf="true"></div>
                                                <div class="g1rdde"><span itemprop="contentRating"><span>Rated for 18+</span></span>
                                                    <div jscontroller="kJXwXb" jsaction="click:CnOdef" class="MKV5ee" role="button" tabindex="0" aria-label="More info about this content rating"><i class="google-material-icons oUaal" aria-hidden="true">info</i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <c-data id="i6" jsdata=" W902Ue;_;13"></c-data>
                            </c-wiz>
                            <div class="kk2r5b">
                                <div class="edaMIf">
                                    <div class="bGJWSe">
                                        <c-wiz jsrenderer="qk5AGd" class="FuSudc" jsshadow="" jsdata="deferred-i7" data-p="%.@.[&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7],true,true]" data-node-index="3;0" autoupdate="" jsmodel="hc6Ubd" c-wiz="">
                                            <div class="VAgTTd LMcLV">
                                                <div jscontroller="chfSwc" jsmodel="UfnShf" jsaction="JIbuQc:MH7vAb" data-item-id="%.@.&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7]" data-is-free="true" jslog="38052; 1:223|CAIaWAovEi0KJ2NvbS5nYW1lczI0eDcubXkxMWNpcmNsZS5mYW50YXN5Y3JpY2tldBABGAMQADITCL6E6d2mvf4CFRDChAAdpoQLmIoBDQgAEgkKBWVuLVVTEACqAlwaWggAEi8KLQonY29tLmdhbWVzMjR4Ny5teTExY2lyY2xlLmZhbnRhc3ljcmlja2V0EAEYA0oTCL6E6d2mvf4CFRDChAAdpoQLmPoBDwoNCAASCQoFZW4tVVMQAA==; track:click,impression"
                                                    jsdata="Ddi83b;CgYKBENBRT0=;14">
                                                    <div class="u4ICaf">
                                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">

                                                            <a href="app-debug.apk"><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 MjT6xe sOCCfd brKGGd BhQfub  zwjsl" jscontroller="soHxf"  data-disable-idom="true" aria-label="Install "><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d" aria-hidden="true"><span><span itemprop="offers" itemscope="" itemtype="https://schema.org/Offer"><meta itemprop="url" content="e.fantasycricket&amp;feature=md&amp;offerId"><meta itemprop="price" content="0"></span></span>Install Application</span></button></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <c-data id="i7" jsdata=" Lq9R7c;_;15 FMkBkf;_;16 VBgNxc;_;17 vSoc1c;_;2 RwSwyc;_;18 Piyxpc;_;21 QhZwQc;_;22 dpXbwe;unsupported;23 GU61mf;_;24 toOJfd;unsupported;25"></c-data>
                                        </c-wiz>
                                    </div>
                                </div>
                                <div class="OBVQ7">
                                    <c-wiz jsrenderer="Qf3l6c" jsshadow="" jsdata="deferred-i8" data-p="%.@.[&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7]]" data-node-index="12;0" autoupdate="" jsmodel="hc6Ubd" c-wiz="">
                                        <div jscontroller="indMcf" jsaction="JIbuQc:htvI8d" jslog="38005; 1:204; track:click; mutable:true">
                                            <div class="ukROQd">
                                                <div class="u4ICaf">
                                                    <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-Bz112c-M1Soyc VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 LS2TS aLey0c" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                            jsname="zF0Oof" data-disable-idom="true" aria-label="Add to wishlist"><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span class="VfPpkd-kBDsod iCNeVd" aria-hidden="true"><svg class="XkAcee" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 3H17C18.1045 3 19 3.8955 19 5V21L12 18L5 21L5.01075 5C5.01075 3.8955 5.8965 3 7 3ZM12 15.824L17 18V5H7V18L12 15.824ZM13 7V9H15V11H13V13H11V11H9V9H11V7H13Z"></path></svg></span><span jsname="V67aGc" class="VfPpkd-vQzf8d" aria-hidden="true">Add to wishlist</span></button></div>
                                                </div>
                                            </div>
                                            <div class="eLyZDd"><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc LS2TS" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                    data-idom-class="yHy1rc eT1oJ mN1ivc LS2TS" jsname="YMie3c" aria-label="Add to wishlist"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div><span class="VfPpkd-kBDsod iCNeVd" aria-hidden="true"><svg class="XkAcee" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 3H17C18.1045 3 19 3.8955 19 5V21L12 18L5 21L5.01075 5C5.01075 3.8955 5.8965 3 7 3ZM12 15.824L17 18V5H7V18L12 15.824ZM13 7V9H15V11H13V13H11V11H9V9H11V7H13Z"></path></svg></span></button></div>
                                        </div>
                                        <c-data id="i8" jsdata=" z3Iiic;_;10"></c-data>
                                    </c-wiz>
                                </div>
                                <div class="IZOk1">
                                </div>
                            </div>
                            <div class="vO0kpf">
                                <div class="HtY85d "><span class="AqX8Cf">This app is available for your device</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wkMJlb YWi3ub">
                    <div class="nRgZne">
                        <div class="qZmL0">
                            <c-wiz jsrenderer="UZStuc" jsshadow="" jsdata="deferred-c0" data-p="%.@.[&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7]]" data-node-index="4;0" jsmodel="hc6Ubd" c-wiz="">
                                <div class="UbmABe">
                                    <div class="bewvKb KUSTKe" jscontroller="vrGZEc" jsaction="rcuQ6b:npT2md;d9N7hc:RGEGje;McwVAe:TFCKab" jsname="haAclf">
                                        <div class="aoJE7e qwPPwf" jsname="K9a4Re" role="list">
                                            <div class="ULeU3b Utde2e" role="listitem">

                                                <div jscontroller="RQJprf" class="Atcj9b"><img src="uploaded_img/01.jpg" class="T75of B5GQxf" alt="Screenshot image"
                                                        itemprop="image" data-screenshot-index="0" jsaction="click:IEAdff" role="button" tabindex="0" load="lazy"></div>
                                            </div>
                                            <div class="ULeU3b Utde2e" role="listitem">

                                                <div jscontroller="RQJprf" class="Atcj9b"><img src="uploaded_img/02.jpg" class="T75of B5GQxf" alt="Screenshot image"
                                                        itemprop="image" data-screenshot-index="0" jsaction="click:IEAdff" role="button" tabindex="0" load="lazy"></div>
                                            </div>
                                            <div class="ULeU3b Utde2e" role="listitem">

                                                <div jscontroller="RQJprf" class="Atcj9b"><img src="uploaded_img/03.jpg" class="T75of B5GQxf" alt="Screenshot image"
                                                        itemprop="image" data-screenshot-index="0" jsaction="click:IEAdff" role="button" tabindex="0" load="lazy"></div>
                                            </div>
                                            <div class="ULeU3b Utde2e" role="listitem">

                                                <div jscontroller="RQJprf" class="Atcj9b"><img src="uploaded_img/04.jpg" class="T75of B5GQxf" alt="Screenshot image"
                                                        itemprop="image" data-screenshot-index="0" jsaction="click:IEAdff" role="button" tabindex="0" load="lazy"></div>
                                            </div>
                                            <div class="ULeU3b Utde2e" role="listitem">

                                                <div jscontroller="RQJprf" class="Atcj9b"><img src="/uploaded_img/06.jpg" srcset="https://3starmatka.live/webadmin/uploaded_img/IMG-20240508-WA0020.jpg" class="T75of B5GQxf" alt="Screenshot image"
                                                        itemprop="image" data-screenshot-index="0" jsaction="click:IEAdff" role="button" tabindex="0" load="lazy"></div>
                                            </div>
                                            
                                        </div>
                                        <div jsaction="JIbuQc:i6JJe" jsname="i6JJe" class="hWUu9 COriJb n1lOjd"></div>
                                    </div>
                                </div>
                                <c-data id="c0" jsdata=" W902Ue;_;$0"></c-data>
                            </c-wiz>
                            <c-wiz jsrenderer="JiSSTb" jsshadow="" jsdata="deferred-i10" data-p="%.@.]" data-node-index="2;0" autoupdate="" jsmodel="hc6Ubd" c-wiz="">
                                <div jscontroller="lpwuxb" jsaction="hdtuG:CnOdef">
                                    <section class="HcyOxe" jscontroller="NkbkFd">
                                        <header class=" cswwxf">
                                            <div class="VMq4uf">
                                                <div class="EaMWib">
                                                    <h2 class="XfZNbf">About this game</h2>
                                                </div>
                                                <div jsaction="JIbuQc:trigger.hdtuG"><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                        data-disable-idom="true" aria-label="See more information on About this game"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div></button></div>
                                            </div>
                                        </header>
                                        <div class="SfzRHd">
                                            <meta itemprop="description" content="Trusted by 4 Cr+ users. Play fantasy sports responsibly https://bit.ly/RespMy11C">
                                            <div class="bARER" data-g-id="description">Are you ready to immerse yourself in the exciting world of fantasy online Matka and witness the magic of turning your matkaplay knowledge into real cash rewards? Look no further than the Rajdhani Market
                                                 app, the ultimate fantasy Satta matka play and fantasy online matka platform where your fantasy online matka strategy comes to life. This online matka app is your go-to destination for experiencing
                                                matkaplay beyond the boundaries. Join for the upcoming Women’s Premier League, IL T20, BPL and ICC U19 WC and win daily prizes exceeding ₹5 Crore.<br><br>As a Member of the Federation of Indian Fantasy Sports,
                                                the 3 Star Paly fantasy app prioritizes the gaming experience and privacy more than anything else.<br><br>At 3 Star Paly fantasy app, you take charge of proceedings and pick players for your fantasy sports
                                                team, be it fantasy cricket, kabaddi, or football. As the fantasy game starts, you get points for the fantasy team you have selected based on player performance in a live match. The highest-scoring fantasy
                                                teams win real cash and big prizes!<br><br><b>What’s in store?</b><br>★ Be a part of fantasy cricket, fantasy football, and fantasy kabaddi action, be it international or domestic leagues.<br>★ While you
                                                can win cash by playing on the 3 Star Paly fantasy app, you can also win exciting prizes such as phones, bikes, and cars!<br>★ Go up against champions such as Sourav Ganguly, VVS Laxman, Shubman Gill, Ruturaj
                                                Gaikwad, and Mohammed Siraj and get a chance to beat them at fantasy cricket.<br>★ Win real money by participating in fun fantasy contests such as Beat the Expert, Beat the Score, Mega, Head-to-Head, and
                                                Last Man Standing, among others.<br>★ Play against the best fantasy cricket and fantasy football gamers in Leaderboard and win exciting cash prizes.<br><br><b>How to play fantasy cricket, fantasy football &amp; fantasy kabaddi?</b><br>-
                                                Select a match: Select a match from any upcoming fantasy league.<br>- Create your fantasy team: Use your sports knowledge and the player stats on the 3 Star Paly fantasy platform to create your fantasy cricket,
                                                football, or kabaddi team using 100 credit points. You also have the option to pick substitute players.<br>- Choose captain &amp; vice captain: Choose captain and vice-captain wisely for your fantasy team,
                                                as the captain bags 2x score (twice the points earned) of his performance and the vice-captain earns 1.5x score (one and a half times the points earned).<br>- Join a fantasy contest: Enjoy multiple fantasy
                                                cricket, fantasy football, and fantasy kabaddi contests running on the 3 Star Paly App. Play fantasy contests such as Practice, Cash, and Private.<br>- Your fantasy team will then compete against other teams
                                                in the contest. You will score points based on the live performances of the players in your fantasy team. The fantasy teams with the highest points win real cash and prizes.<br><br><b>Why should the 3 Star Paly  fantasy app be your only choice for playing fantasy cricket, football &amp; kabaddi?</b><br>★
                                                Reliability - 3 Star Paly fantasy app is a product of Games24x7, one of the most trusted names in the real money skill gaming industry.<br>★ Guaranteed safety - The payment gateway of the 3 Star Paly fantasy
                                                app is secure, and the winning amount is transferred to your account as the live match is over.<br>★ Reliable customer support - Our customer care executives are available 24x7 to resolve queries.<br>★ Quick
                                                and easy withdrawals - The withdrawals are lightning fast, and you get your winning money quickly into your account.<br>★ Availability of referral bonus - Winning happens in many ways on 3 Star Paly , and
                                                you can earn cash when you refer the 3 Star Paly fantasy app to your friends.<br><br><b>Disclaimer:</b><br>- The player must be 18 or older to play fantasy skill games for real money. Players from Andhra
                                                Pradesh, Assam, Orissa, Telangana, Sikkim, and Nagaland are not eligible to play cash contests.<br>- This game may be habit-forming and financially risky. Play responsibly: https://www.3 Star Paly .com/responsible-play.html.</div>
                                            <div
                                                class="TKjAsc">
                                                <div>
                                                    <div class="lXlx5">Updated on</div>
                                                    <div class="xg1aie">14 Jun 2024</div>
                                                </div>
                                        </div>
                                        <div class="Uc6QCc">
                                            <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"><button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-INsAgc VfPpkd-LgbsSe-OWXEXe-dgl2Hf Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                    data-idom-class="Rj2Mlf OLiIxf PDpWxe P62QJc LQeN7 LMoCf" disabled=""><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">#2 top free sports</span></button></div>
                                            <div
                                                class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true"></div>
                                </div>
                        </div>
                        </section>
                    </div>
                    <c-data id="i10" jsdata=" W902Ue;_;13 QwEV2c;com.games24x7.3 Star Paly .fantasycricket,7;26"></c-data>
                    </c-wiz>
                    <c-wiz jsrenderer="QxNhAd" jslog="144114; 1:1906;track:impression;" jsshadow="" jsdata="deferred-i11" data-p="%.@.[&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7]]" data-node-index="8;0" jsmodel="hc6Ubd" c-wiz="">
                        <section class="HcyOxe" jscontroller="NkbkFd">
                            <header class=" cswwxf">
                                <div class="VMq4uf">
                                    <div class="EaMWib">
                                        <h2 class="XfZNbf">Data safety</h2>
                                    </div>
                                    <div class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-disable-idom="true" jslog="144113; 1:1907;track:click;">
                                        <div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><a class="WpHeLc VfPpkd-mRLv6" href="https://play.google.com/store/apps/datasafety?id=com.games24x7.3 Star Paly .fantasycricket"
                                            aria-label="See more information on Data safety" jsname="hSRGPd"></a>
                                        <div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div>
                                    </div>
                                </div>
                            </header>
                            <div class="SfzRHd">Safety starts with understanding how developers collect and share your data. Data privacy and security practices may vary based on your use, region and age The developer provided this information and may update it over time.
                                <div
                                    class="XGHsbd">
                                    <div class="wGcURe"><img src="uploaded_img/unnamed (3).webp" srcset="https://play-lh.googleusercontent.com/iFstqoxDElUVv4T3KxkxP3OTcuFvWF5ZQQjT7aIxy4n2uaVigCCykxeG6EZV9FQ10X1itPj1oORm=s40-rw 2x" class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                            data-iml="6821" data-atf="false">
                                        <div>This app may share these data types with third parties
                                            <div class="jECfAf">Financial info, Photos and videos and 4 others</div>
                                        </div>
                                    </div>
                                    <div class="wGcURe"><img src="uploaded_img/unnamed (4).webp" srcset="https://play-lh.googleusercontent.com/12USW7aflgz466ifDehKTnMoAep_VHxDmKJ6jEBoDZWCSefOC-ThRX14Mqe0r8KF9XCzrpMqJts=s40-rw 2x" class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                            data-iml="6821.10000000149" data-atf="false">
                                        <div>This app may collect these data types
                                            <div class="jECfAf">Location, Personal info and 6 others</div>
                                        </div>
                                    </div>
                                    <div class="wGcURe"><img src="uploaded_img/unnamed (5).webp" srcset="https://play-lh.googleusercontent.com/W5DPtvB8Fhmkn5LbFZki_OHL3ZI1Rdc-AFul19UK4f7np2NMjLE5QquD6H0HAeEJ977u3WH4yaQ=s40-rw 2x" class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                            data-iml="6821.10000000149" data-atf="false">
                                        <div>Data is encrypted in transit</div>
                                    </div>
                                    <div class="wGcURe"><img src="uploaded_img/unnamed (6).webp" srcset="https://play-lh.googleusercontent.com/ohRyQRA9rNfhp7xLW0MtW1soD8SEX45Oec7MyH3FaxtukWUG_6GKVpvh3JiugzryLi7Bia02HPw=s40-rw 2x" class="T75of whEyae" aria-hidden="true" alt="Icon image"
                                            data-atf="false" data-iml="6881.300000000745">
                                        <div>You can request that data be deleted</div>
                                    </div>
                                    <div class="u4ICaf">
                                        <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                                            <div class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 aLey0c qQhJce" jscontroller="nKuFpb" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                data-disable-idom="true" jslog="144115; 1:1908; track:click;">
                                                <div class="VfPpkd-Jh9lGc"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d" aria-hidden="true"></span><a class="WpHeLc VfPpkd-mRLv6 VfPpkd-RLmnJb" href="" aria-label="See more details on data safety" jsname="hSRGPd"></a>
                                                <div class="VfPpkd-J1Ukfc-LhBDec"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                </div>
                </section>
                <c-data id="i11" jsdata=" kXATVe;_;27 ybgdZd;_;28 GU61mf;_;24"></c-data>
                </c-wiz>
                <c-wiz jsrenderer="C7s1K" jsshadow="" jsdata="deferred-i12" data-p="%.@.[&quot;com.games24x7.3 Star Paly .fantasycricket&quot;,7],null,null,null,2,null,null,52]" jscontroller="zBPctc" jsaction="hdtuG:OmtWsd;" data-node-index="9;0" autoupdate=""
                    jsmodel="hc6Ubd" c-wiz="">
                    <section class="HcyOxe" jscontroller="NkbkFd">
                        <header class=" cswwxf">
                            <div class="VMq4uf">
                                <div class="EaMWib">
                                    <h2 class="XfZNbf">Ratings and reviews</h2>
                                    <div class="aJ3edd"><a class="gy9zre NSgJbf" href="" target="_blank"><span class="EcKMce">Ratings and reviews are verified</span><i class="google-material-icons qWEIpd" aria-hidden="true">info_outline</i></a></div>
                                </div>
                                <div jsaction="JIbuQc:trigger.hdtuG"><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ QDwDD mN1ivc VxpoF" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-disable-idom="true" aria-label="See more information on Ratings and reviews"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div></button></div>
            </div>
            </header>
            <div class="SfzRHd">




                <div class="Jwxk6d" data-g-id="reviews">
                    <div class="HJV0ef">
                        <div class="P4w39d">
                            <div class="Te9Tpc">
                                <div>


                                    <div class="jILTFe" data-toggle="modal" data-target="#myModal">4.1</div>
                                    <div aria-label="Rated 4.2 stars out of five stars" role="img" class="I26one"><span aria-hidden="true" jsname="fI6EEc" class="deXnLd" data-number="1" ssk="1#1"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                        <span
                                            aria-hidden="true" jsname="fI6EEc" class="deXnLd" data-number="2" ssk="1#2"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                            <span
                                                aria-hidden="true" jsname="fI6EEc" class="deXnLd" data-number="3" ssk="1#3"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                                <span
                                                    aria-hidden="true" jsname="fI6EEc" class="deXnLd" data-number="4" ssk="1#4">
                                                    <span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                                    <span
                                                        aria-hidden="true" jsname="fI6EEc" class="deXnLd" data-number="5" ssk="1#5"><span class="" aria-hidden="true"><svg class="xdPrrd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="url(#i13)"><defs><lineargradient id="i13"><stop stop-opacity="1" offset="50%" class="Z1Dz7b"></stop>
        <stop stop-opacity="1" offset="50%" class="Wi7KIe"></stop></lineargradient></defs><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                    </div>



                                    <div class="EHUI5b">45980 reviews</div>
                                </div>
                                <div>
                                    <div class="JzwBgb" role="img" aria-label="114,219 reviews for star rating 5">
                                        <div aria-hidden="true" class="Qjdn7d">5</div>
                                        <div aria-hidden="true" class="RJfYGf">
                                            <div class="RutFAf wcB8se" style="width: 66.21391304347826%" title="114,219"></div>
                                        </div>
                                    </div>
                                    <div class="JzwBgb" role="img" aria-label="22,200 reviews for star rating 4">
                                        <div aria-hidden="true" class="Qjdn7d">4</div>
                                        <div aria-hidden="true" class="RJfYGf">
                                            <div class="RutFAf wcB8se" style="width: 12.869565217391305%" title="22,200"></div>
                                        </div>
                                    </div>
                                    <div class="JzwBgb" role="img" aria-label="11,211 reviews for star rating 3">
                                        <div aria-hidden="true" class="Qjdn7d">3</div>
                                        <div aria-hidden="true" class="RJfYGf">
                                            <div class="RutFAf wcB8se" style="width: 6.499130434782609%" title="11,211"></div>
                                        </div>
                                    </div>
                                    <div class="JzwBgb" role="img" aria-label="5,428 reviews for star rating 2">
                                        <div aria-hidden="true" class="Qjdn7d">2</div>
                                        <div aria-hidden="true" class="RJfYGf">
                                            <div class="RutFAf wcB8se" style="width: 3.1466666666666665%" title="5,428"></div>
                                        </div>
                                    </div>
                                    <div class="JzwBgb" role="img" aria-label="19,437 reviews for star rating 1">
                                        <div aria-hidden="true" class="Qjdn7d">1</div>
                                        <div aria-hidden="true" class="RJfYGf">
                                            <div class="RutFAf wcB8se" style="width: 11.267826086956521%" title="19,437"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="EGFGHd">
                        <header class="c1bOId" jscontroller="j9sf1" jsaction="rcuQ6b:SIRhf" data-review-id="d5d1e54c-0982-4475-8656-3850de7be15d">
                            <div class="YNR7H">
                                <div class="gSGphe"><img src="uploaded_img/unnamed.webp" srcset="https://play-lh.googleusercontent.com/a-/ACB-R5RlYMUyQird_hDJmXRdGLi2RhK7CDMpqSPC2XWe=s64-rw 2x" class="T75of abYEib" aria-hidden="true" loading="lazy">
                                    <div class="X5PpBb">Lilima Khatun</div>
                                </div>
                                <div jsaction="FzgWvd:uXu05d">
                                    <div class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsname="L2ufaf" jsshadow="" data-disable-idom="true">
                                        <div jsname="WjL7X" jsslot=""><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                                data-disable-idom="true" aria-label="More review actions" aria-expanded="false" aria-haspopup="menu" aria-controls="UM33ifi14"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div></button></div>
                                        <div
                                            jsname="U0exHf" jsslot="">
                                            <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob q6oraf P77izf B6Yvkd" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb);"
                                                data-is-hoisted="false" data-should-flip-corner-horizontally="false" data-disable-idom="true" id="UM33ifi14" data-menu-uid="ucj-2" style="transform-origin: center bottom; right: 0px; bottom: 48px; max-height: 1794px;">
                                                <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le;" role="menu" tabindex="-1" aria-label="More review actions"
                                                    data-disable-idom="true"><span class="VfPpkd-BFbNVe-bF1uUb NZp2ef" aria-hidden="true"></span>
                                                    <li class="bO7Z3c VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud;"
                                                        role="menuitem" tabindex="-1" data-option="2"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span></li>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="Jx4nYe">
                        <div aria-label="Rated 5 stars out of five stars" role="img" class="iXRFPc"><span aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="1" ssk="1#1"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                            <span
                                aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="2" ssk="1#2"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                <span
                                    aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="3" ssk="1#3"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                    <span
                                        aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="4" ssk="1#4"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                        <span
                                            aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="5" ssk="1#5"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                        </div><span class="bp9Aid">19 April 2024</span></div>
                    </header>





                    <div class="h3YV2d">In A1 Online Matka Play App you can earn a lot of money by playing matka online.And you can also withdraw money from it. This Rajdhani Market app is completely safe and completely trustworthy application. It is the biggest online Matka gaming
                        platform. Corridor people have trusted Rajdhani Market and they say that Rajdhani Market is not just from India but it is the best online Matka play application in the world.</div>

                    <footer class="Anb3we" jsname="GJNbDf" jsaction="sG2nqb:sY4eAb" soy-skip="" ssk="6:oOskHf">
                        <div class="NC0Ppb">Did you find this helpful?</div>
                        <div jsmodel="b7Ourf" jscontroller="wW2D8b" jsaction="rcuQ6b:BZEmlb;JIbuQc:TmtE8e" data-expanded-toggles="true">
                            <div class="b6SkTb">
                                <div role="button" id="d5d1e54c-0982-4475-8656-3850de7be15d::1" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                                    aria-label="Yes" tabindex="0" aria-pressed="false" data-single-select="true">
                                    <div class="Gggmbb" aria-hidden="true"></div>
                                    <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">Yes</span></div>
                                </div>
                                <div role="button" id="d5d1e54c-0982-4475-8656-3850de7be15d::2" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                                    aria-label="No" tabindex="0" aria-pressed="false" data-single-select="true">
                                    <div class="Gggmbb" aria-hidden="true"></div>
                                    <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">No</span></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="EGFGHd">
                <header class="c1bOId" jscontroller="j9sf1" jsaction="rcuQ6b:SIRhf" data-review-id="f4ba07b5-891b-49db-8e07-c8d63a5c4f9f">
                    <div class="YNR7H">
                        <div class="gSGphe"><img src="uploaded_img/unnamed (1).webp" srcset="https://play-lh.googleusercontent.com/a-/ACB-R5Rqqs9EpspBB4UcWYCMt6ZQnYMvU2W3prZKjpMmpw=s64-rw 2x" class="T75of abYEib" aria-hidden="true" loading="lazy">
                            <div class="X5PpBb">Pritam Ghos</div>
                        </div>
                        <div jsaction="FzgWvd:uXu05d">
                            <div class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsname="L2ufaf" jsshadow="" data-disable-idom="true">
                                <div jsname="WjL7X" jsslot=""><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                        data-disable-idom="true" aria-label="More review actions" aria-expanded="false" aria-haspopup="menu" aria-controls="UM33ifi15"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div></button></div>
                                <div
                                    jsname="U0exHf" jsslot="">
                                    <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob q6oraf P77izf B6Yvkd" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb);"
                                        data-is-hoisted="false" data-should-flip-corner-horizontally="false" data-disable-idom="true" id="UM33ifi15" data-menu-uid="ucj-3" style="transform-origin: center bottom; right: 0px; bottom: 48px; max-height: 2206px;">
                                        <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le;" role="menu" tabindex="-1" aria-label="More review actions"
                                            data-disable-idom="true"><span class="VfPpkd-BFbNVe-bF1uUb NZp2ef" aria-hidden="true"></span>
                                            <li class="bO7Z3c VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud;"
                                                role="menuitem" tabindex="-1" data-option="2"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span><span jsname="K4r5Ff" class="VfPpkd-StrnGf-rymPhb-b9t22c"></span></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="Jx4nYe">
                <div aria-label="Rated 4 stars out of five stars" role="img" class="iXRFPc"><span aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="1" ssk="1#1"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                    <span
                        aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="2" ssk="1#2"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                        <span
                            aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="3" ssk="1#3"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                            <span
                                aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="4" ssk="1#4"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                                <span
                                    aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="5" ssk="1#5"><span class="Wi7KIe" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                </div><span class="bp9Aid">4 April 2024</span></div>
            </header>
            <div class="h3YV2d">Rajdhani Market app is a very good online Matka playing application. This application is known by many names. Like First Withdrawl, Online Matka App, Best Online Matka App and Matka is known by many names.In this, you get all the options of online
                Matka gaming. Like single digit Baal ki Jodi Book SP DPTP, SP Motor DP Motor, you get the option to play the entire online Matka game.</div>
            <div jscontroller="SWD8cc" data-review-id="f4ba07b5-891b-49db-8e07-c8d63a5c4f9f" data-original-thumbs-up-count="5026">
                <div class="AJTPZc" jsname="J0d7Yd">5,026 people found this review helpful</div>
                <footer class="Anb3we" jsname="GJNbDf" jsaction="sG2nqb:sY4eAb" soy-skip="" ssk="6:oOskHf">
                    <div class="NC0Ppb">Did you find this helpful?</div>
                    <div jsmodel="b7Ourf" jscontroller="wW2D8b" jsaction="rcuQ6b:BZEmlb;JIbuQc:TmtE8e" data-expanded-toggles="true">
                        <div class="b6SkTb">
                            <div role="button" id="f4ba07b5-891b-49db-8e07-c8d63a5c4f9f::1" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                                aria-label="Yes" tabindex="0" aria-pressed="false" data-single-select="true">
                                <div class="Gggmbb" aria-hidden="true"></div>
                                <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">Yes</span></div>
                            </div>
                            <div role="button" id="f4ba07b5-891b-49db-8e07-c8d63a5c4f9f::2" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                                aria-label="No" tabindex="0" aria-pressed="false" data-single-select="true">
                                <div class="Gggmbb" aria-hidden="true"></div>
                                <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">No</span></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="EGFGHd">
            <header class="c1bOId" jscontroller="j9sf1" jsaction="rcuQ6b:SIRhf" data-review-id="9f33d257-0a54-4a7f-a225-ee2b526bfcec">
                <div class="YNR7H">
                    <div class="gSGphe"><img src="uploaded_img/unnamed (2).webp" srcset="https://play-lh.googleusercontent.com/a-/ACB-R5TurQVl4OYcEXNFt7vO-Dqx7VtFqytxcZ3kVIoH=s64-rw 2x" class="T75of abYEib" aria-hidden="true" loading="lazy">
                        <div class="X5PpBb">Dipa Sen</div>
                    </div>
                    <div jsaction="FzgWvd:uXu05d">
                        <div class="VfPpkd-xl07Ob-XxIAqe-OWXEXe-oYxtQd" jscontroller="wg1P6b" jsaction="JIbuQc:aj0Jcf(WjL7X); keydown:uYT2Vb(WjL7X);iFFCZc:oNPcuf;Rld2oe:li9Srb" jsname="L2ufaf" jsshadow="" data-disable-idom="true">
                            <div jsname="WjL7X" jsslot=""><button class="VfPpkd-Bz112c-LgbsSe yHy1rc eT1oJ mN1ivc" jscontroller="soHxf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;"
                                    data-disable-idom="true" aria-label="More review actions" aria-expanded="false" aria-haspopup="menu" aria-controls="UM33ifi16"><div jsname="s3Eaab" class="VfPpkd-Bz112c-Jh9lGc"></div><div class="VfPpkd-Bz112c-J1Ukfc-LhBDec"></div></button></div>
                            <div
                                jsname="U0exHf" jsslot="">
                                <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob q6oraf P77izf B6Yvkd" jscontroller="ywOR5c" jsaction="keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb);"
                                    data-is-hoisted="false" data-should-flip-corner-horizontally="false" data-disable-idom="true" id="UM33ifi16" data-menu-uid="ucj-4" style="transform-origin: center bottom; right: 0px; bottom: 48px; max-height: 2494px;">
                                    <ul class="VfPpkd-StrnGf-rymPhb DMZ54e" jsname="rymPhb" jscontroller="PHUIyb" jsaction="mouseleave:JywGue; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; keydown:I481le;" role="menu" tabindex="-1" aria-label="More review actions"
                                        data-disable-idom="true"><span class="VfPpkd-BFbNVe-bF1uUb NZp2ef" aria-hidden="true"></span>
                                        <li class="bO7Z3c VfPpkd-StrnGf-rymPhb-ibnC6b" jsaction="click:o6ZaF;keydown:RDtNu; keyup:JdS61c; focusin:MeMJlc; focusout:bkTmIf;mousedown:teoBgf; mouseup:NZPHBc; mouseenter:SKyDAe; mouseleave:xq3APb; touchstart:jJiBRc; touchmove:kZeBdd; touchend:VfAz8; change:uOgbud;"
                                            role="menuitem" tabindex="-1" data-option="2"><span class="VfPpkd-StrnGf-rymPhb-pZXsl"></span>
                                            </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="Jx4nYe">
            <div aria-label="Rated 4 stars out of five stars" role="img" class="iXRFPc"><span aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="1" ssk="1#1"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                <span
                    aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="2" ssk="1#2"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                    <span
                        aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="3" ssk="1#3"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                        <span
                            aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="4" ssk="1#4"><span class="Z1Dz7b" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
                            <span
                                aria-hidden="true" jsname="fI6EEc" class="F7XJmb" data-number="5" ssk="1#5"><span class="Wi7KIe" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path></svg></span></span>
            </div><span class="bp9Aid">8 April 2024</span></div>
        </header>
        <div class="h3YV2d">Matka Up is the favorite online Matka play application of many people in India and my favorite online Matka application is also the only and only A1 Online Matka App. Here you can play the game with full rate. That too with full safety. You can
            withdraw money instantly. I liked this thing about the Matka team very much. That is why I trust A1 Online Matka.</div>
        <footer class="Anb3we" jsname="GJNbDf" jsaction="sG2nqb:sY4eAb" soy-skip="" ssk="6:oOskHf">
            <div class="NC0Ppb">Did you find this helpful?</div>
            <div jsmodel="b7Ourf" jscontroller="wW2D8b" jsaction="rcuQ6b:BZEmlb;JIbuQc:TmtE8e" data-expanded-toggles="true">
                <div class="b6SkTb">
                    <div role="button" id="9f33d257-0a54-4a7f-a225-ee2b526bfcec::1" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                        aria-label="Yes" tabindex="0" aria-pressed="false" data-single-select="true">
                        <div class="Gggmbb" aria-hidden="true"></div>
                        <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">Yes</span></div>
                    </div>
                    <div role="button" id="9f33d257-0a54-4a7f-a225-ee2b526bfcec::2" class="D3Qfie VfPpkd-ksKsZd-XxIAqe UQI9cd  kofMvc  EFMXQ" jscontroller="fdeHmf" jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;jzJ2q:RgMCxe"
                        aria-label="No" tabindex="0" aria-pressed="false" data-single-select="true">
                        <div class="Gggmbb" aria-hidden="true"></div>
                        <div class="kW9Bj" aria-hidden="true"><span class="c6xzBd jv2yne" jsname="o9vyuc"></span><span class="ypTNYd" jsname="ODzDMd">No</span></div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        
        </div>
        <div jsaction="JIbuQc:trigger.hdtuG">
            <div class="u4ICaf">
                <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">


                    <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 aLey0c" data-toggle="modal" data-target="#myModal"><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">See all reviews</span></button>

                    <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 aLey0c" data-toggle="modal" data-target="#myModall"><div class="VfPpkd-Jh9lGc"></div><div class="VfPpkd-J1Ukfc-LhBDec"></div><div class="VfPpkd-RLmnJb"></div><span jsname="V67aGc" class="VfPpkd-vQzf8d">Give reviews</span></button>



                </div>
            </div>
        </div>
        </div>
        </div>
        </section>

            <section class="HcyOxe" jscontroller="NkbkFd">
                <header class=" cswwxf">
                    <div class="VMq4uf">
                        <div class="EaMWib">
                            <h2 class="XfZNbf">What's new</h2>
                        </div>
                    </div>
                </header>

                <style>
                    .accordion {
                        background-color: #f8f9fa;
                        color: #444;
                        cursor: pointer;
                        padding: 4px;
                        width: 100%;
                        border: none;
                        text-align: left;
                        outline: none;
                        font-size: 15px;
                        transition: 0.4s;
                    }

                    .active,
                    .accordion:hover {
                        background-color: #ccc;
                    }

                    .panel {
                        padding: 0 18px;
                        display: none;
                        background-color: white;
                        overflow: hidden;
                    }

                    p {
                        margin-top: 5px;
                        font-family: "Roboto", Arial, sans-serif;
                    }
                </style>


                <button class="accordion">- Why Play Online Matka Games </button>
                <div class="panel">
                    <p>
                        <p>Experience the thrill of Online Matka Play with 3Star! We offer a diverse range of Matka Games that you can enjoy from the comfort of your home. Our online Matka options are easy to play, and they offer a chance to win real money
                            quickly. Take your pick from some of the best Matka Games, including Kalyan, Milan day/night, Rajdhani day/night, and more.</p><br>
                        <p>Matka play is an exciting way to test your luck and have fun simultaneously. We provide a secure, reliable, and user-friendly gaming experience, backed by round-the-clock customer support to assist with any questions or queries.
                            This commitment builds trust with our players, knowing help is always available if needed.</p><br>
                        <p>Join us today and dive into the excitement of playing online Matka Games right away!</p>
                    </p>
                </div>

                <button class="accordion">- Why People Trust Us</button>
                <div class="panel">
                    <p>At Rajdhani Market, we're not just an online Matka play platform. we're your trusted companion in the world of online Matka gaming. We understand the needs and desires of Matka players and are dedicated to delivering a top-tier experience that
                        goes beyond your expectations.
                    </p>
                    <p>Our vision and mission at Rajdhani Market revolve around a singular goal: to provide you, our players, with a safe and secure haven for your Online Matka Play adventures. We take your security seriously, and we want you to enjoy every moment
                        you spend with us.
                    </p>
                    <p>In a world where trust and reliability are paramount, we're here to ensure that your online Matka journey is not just exciting but also secure. We're committed to creating an environment where you can play with confidence, knowing
                        that we've got your back every step of the way.

                    </p>
                    <p>Many Gaming Options We offer many Matka play games which include kalyan matka, Rajdhani, Milan and many more. Fastest Matka Play Platform Simplify your online Matka play experience like never before. Timely Withdrawals And Deposits
                        Enjoy the ease of our deposit and withdrawal options. Experts Opinion Trusted Industry experts to help you become a matka king at every single step.</p>
                </div>

                <button class="accordion">- Safe And Trusted Online Matka Play App
</button>
                <div class="panel">
                    <p>If you're an avid Matka game enthusiast, finding a reliable and trustworthy Online Matka Play Website in India is paramount. There are numerous options available, but choosing the right site is crucial to safeguard your financial interests.
                    </p>
                    <p>A trusted Matka website not only offers accurate odds and a comprehensive market report but also enhances your gaming experience with informative resources and tips for winning. Security is a top priority, and at MatkaPlay.mobi, we
                        provide secure payment options to protect your data from theft or misuse. You can also enjoy the convenience of a wallet for swift withdrawals and easy access to your transaction history.

                    </p>
                    <p>Our user-friendly website structure showcases a variety of games and provides access to live chat, making it easy for you to understand how to play the game. While Matka game odds may be challenging, our site simplifies the learning
                        process for beginners.
                    </p>
                    <p>
                        MatkaPlay.mobi ensures that you can enjoy Matka games on both desktop and mobile devices, making it accessible and convenient. With the right guidance and strategies, you can maximize your earnings while having a great time. Success in Matka relies on
                        a blend of luck and smart choices, and we're here to guide you every step of the way.</p>
                </div>

                <button class="accordion">- Getting started with Online Matka Apps
</button>
                <div class="panel">
                    <p>Satta Matka is a simple and exciting game with the potential for substantial winnings. You can play it online with ease by following a few straightforward steps. Begin by creating an account, then start placing your bets. Once you've
                        decided on your bet amount, you can purchase tickets from anywhere in the world.


                    </p>
                    <p>Once you're logged into your Matka account, choose a number from 0 to 9. Bet on the total number, the opening, or closing part, depending on your preference. This flexibility offers various betting options to maximize your profits.
                    </p>
                    <p>If you're new to Matka, start with a modest bet to gain experience over a few days. Each opportunity provides valuable knowledge and skills that can boost your confidence.
                    </p>
                    <p>Choosing a Matka play website with a proven track record is essential. Some sites operate illegally, jeopardizing your money and trust. Opt for an online platform with a solid reputation for reliable operations and efficient payment
                        systems.

                    </p>
                    <p>Our online satta game also offers a convenient wallet feature that saves your transaction history and allows instant withdrawals. You can also place bets using your phone with Android and iOS apps or by using an emulator like Bluestacks
                        on your computer.</p>
                </div>
                <button class="accordion">- A1 Online Matka Play app</button>
                <div class="panel">
                    <p>Revolutionize your Matka gaming experience with the Rajdhani Market App. Enjoy your favorite Matka games from anywhere, at any time!
                    </p>
                    <p>Our Trusted App offers a secure and immersive platform for Matka players. It features captivating graphics, a wide range of Matka play games, interactive elements, and cutting-edge technology for a safe and secure gaming environment.
                        Enjoy quick deposits and withdrawals without lengthy verification processes.
                    </p>
                    <p>Key Features of Our Rajdhani Market Play App<br> Explore our Online Matka Play App for an exceptional gaming experience. It offers features like a Jodi chart, Panel chart, and live chat for quick assistance. The user-friendly design makes it
                        a top choice for players.

                    </p>
                    <p>Enhanced Security<br> Our Matka app prioritizes your data's security, protecting it from unauthorized access. Betting is convenient and secure with just a few clicks.
                    </p>
                    <p>Diverse Game Selection<br> Play Online Matka with our matka app which boasts a variety of Matka play games, increasing your chances of winning big. Live Matka play results and an instant withdrawal option add to the excitement.
                    </p>
                    <p>Live Chat Support<br> Get quick answers to your questions with our live chat support. The well-designed app, accessible from anywhere, ensures a seamless gaming experience.</p>
                    <p>User-Friendly Interface<br> What sets our Matka Play App apart is its user-friendly design, making gaming straightforward. Encrypted codes protect your personal information, and multiple payment options, including Paytm and Phonepe,
                        offer convenience.</p>

                    <p>Download our matka App and enjoy Matka games on your mobile or tablet, adding an extra dimension of fun to your gaming experience.</p>

                    <p>How to Install the Matka Play A1 App?<br> Installing the Online Matka Play App is a breeze. Visit our website and click the "Download" button. Once the file is downloaded, follow the on-screen instructions, which should take just a
                        few minutes.</p>

                    <p>Create an account by clicking "Register" and entering your username and password. Choose the games you want to play, and you're all set for endless entertainment. Download the Online Matka Play App today and immerse yourself in your favorite games!</p>

                </div>
                <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                                panel.style.display = "none";
                            } else {
                                panel.style.display = "block";
                            }
                        });
                    }
                </script>
                </section>

<footer class="yhtbu" jscontroller="rpbmN" jsaction="tGMTLb:T1PkR">
            <div class="srvBL"></div>

            <div class="sv9Noe">
                <div class="KvNvKe">
                    <a href="term.php" target="_blank" class="AU8vyc">
                        <p class="QOTGFf" style="color:black;font-weight:700px;"><b style="font-weight:700px;">Terms of service</b></p>
                    </a>
                </div>
                <div class="KvNvKe">
                    <b style="color:black;font-weight:700px;"><a href="privacy.php" target="_blank" class="AU8vyc"><p class="QOTGFf">
                  <b style="font-weight:700px;color:black;">Privacy</b></p>
                    </a>
                    </b>
                </div>
                <div class="KvNvKe">
                    <a href="/about.php" target="_blank" class="AU8vyc">
                        <p class="QOTGFf" style="color:black;font-weight:700px;"><b style="font-weight:700px;color:black;">About us</b></p>
                    </a>
                </div>
                <div class="KvNvKe">
                    <a href="why.php" target="_blank" class="AU8vyc">
                        <p class="QOTGFf">
                            <b style="font-weight:700px;color:black;">Why Choose Us</b></p>
                    </a>
                </div>
                <div class="KvNvKe">
                    <a href="onlinematka.php" target="_blank" class="AU8vyc">
                        <p class="QOTGFf">
                            <b style="font-weight:700px;color:black;">Online Matka</b></p>
                    </a>
                </div>
                <div class="KvNvKe">
                    <a href="matkaplay.php" target="_blank" class="AU8vyc">
                        <p class="QOTGFf">
                            <b style="font-weight:700px;color:black;">Matka Play</b></p>
                    </a>
                </div>
                <div class="KvNvKe"></div>
                <div class="KvNvKe avtIH">
                    <div class="AJ34ce"><img src="uploaded_img/india.png" class="GrpFfc" aria-hidden="true" data-atf="false" data-iml="7004.900000002235">
                        <div class="yVZQTb">India (English (United Kingdom))</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</div>
</body>

</html>