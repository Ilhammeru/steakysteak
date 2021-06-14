<!DOCTYPE html>
<html lang="en">

<head>

    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- START STYLES -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font/sf-font.css">

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

    <!-- END STYLES -->

    <!-- START PLUGINS -->

    <!-- jQuery v3.5.1 -->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.5.1.min.js?v3.5.1"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="<?= base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Lazy size -->
    <script src="<?= base_url(); ?>assets/lazysizes/lazysizes.min.js"></script>

</head>

<style>
    /* keyframes */

    /**
    * ----------------------------------------
    * animation slide-in-bottom
    * ----------------------------------------
    */
    @-webkit-keyframes slide-in-bottom {
        0% {
            -webkit-transform: translateY(40px);
            transform: translateY(40px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes slide-in-bottom {
        0% {
            -webkit-transform: translateY(40px);
            transform: translateY(40px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }
    }

    /**
    * ----------------------------------------
    * animation slide-in-fwd-top
    * ----------------------------------------
    */
    @-webkit-keyframes slide-in-fwd-top {
        0% {
            -webkit-transform: translateZ(-700px) translateY(-400px);
            transform: translateZ(-700px) translateY(-400px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
            opacity: 1;
        }
    }

    @keyframes slide-in-fwd-top {
        0% {
            -webkit-transform: translateZ(-700px) translateY(-400px);
            transform: translateZ(-700px) translateY(-400px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateZ(0) translateY(0);
            transform: translateZ(0) translateY(0);
            opacity: 1;
        }
    }

    /**
    * ----------------------------------------
    * animation slide-out-bck-top
    * ----------------------------------------
    */
    @-webkit-keyframes slide-out-bck-top {
        0% {
            -webkit-transform: translateZ(1) translateY(0);
            transform: translateZ(1) translateY(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translateZ(-1100px) translateY(-1000px);
            transform: translateZ(-1100px) translateY(-1000px);
            opacity: 0;
        }
    }

    @keyframes slide-out-bck-top {
        0% {
            -webkit-transform: translateZ(1) translateY(0);
            transform: translateZ(1) translateY(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translateZ(-1100px) translateY(-1000px);
            transform: translateZ(-1100px) translateY(-1000px);
            opacity: 0;
        }
    }

    /**
    * ----------------------------------------
    * animation slide-in-right
    * ----------------------------------------
    */
    @-webkit-keyframes slide-in-right {
        0% {
            -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slide-in-right {
        0% {
            -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
        }
    }


    /**
    * ----------------------------------------
    * animation slide-out-left
    * ----------------------------------------
    */
    @-webkit-keyframes slide-out-left {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translateX(-3000px);
            transform: translateX(-3000px);
            opacity: 0;
        }
    }

    @keyframes slide-out-left {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1;
        }

        100% {
            -webkit-transform: translateX(-3000px);
            transform: translateX(-3000px);
            opacity: 0;
        }
    }


    /**
    * ----------------------------------------
    * animation wave effect
    * ----------------------------------------
    */
    @keyframes wave {
        0% {
            left: 0;
            border-radius: none;
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(227, 227, 227, 1) 100%);
        }

        20% {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(220, 220, 220, 1) 100%);
        }

        50% {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(218, 218, 218, 1) 100%);
        }

        70% {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(220, 220, 220, 1) 100%);
        }

        85% {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(225, 225, 225, 1) 100%);
        }

        100% {
            left: 68%;
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(227, 227, 227, 1) 100%);
        }
    }

    /**
    * ----------------------------------------
    * animation left-slide
    * ----------------------------------------
    */
    @keyframes left-slide {
        0% {
            left: 5em;
        }

        20% {
            left: 2em;
        }

        40% {
            left: 0em;
        }

        60% {
            left: -2em;
        }

        100% {
            left: -5em;
        }
    }


    /* end keyframes */


    /* animation */

    .slide-in-bottom {
        -webkit-animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    .slide-in-fwd-top {
        -webkit-animation: slide-in-fwd-top .7s cubic-bezier(0.250, 1, 0.250, 0.940) both;
        animation: slide-in-fwd-top .7s cubic-bezier(0.250, 1, 0.250, 0.940) both;
    }

    .slide-out-bck-top {
        -webkit-animation: slide-out-bck-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: slide-out-bck-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    .slide-out-left {
        -webkit-animation: slide-out-left 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: slide-out-left 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    .slide-in-right {
        -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    /* end animation */

    .row {
        --bs-gutter-x: 0;
    }

    body,
    html {
        overflow-x: hidden;
        background: #e6e6e6;

        --sfpd-regular: "SF Pro Display Regular";
        --sfpd-bold: "SF Pro Display Bold";
        --sfpd-semibold: "SF Pro Display Semibold";
        --sfpd-heavy: "SF Pro Display Heavy";
        --sfpd-medium: "SF Pro Display Medium";
        --sfpd-light: "SF Pro Display Light";
        --sfpd-ultralight: "SF Pro Display Ultra Light";
        --sfpd-thin: "SF Pro Display Thin";
        --app-bold: "Appetite Bold";
        --app-italic: "Appetite Italic";
        --hell-b: "Helvetica Bold";
        --hell-i: "Helvetica Italic";
    }

    .franchise-div > .row > .col-xl-6 > img,
    .responsive-video {
        width: 100%;
        height: auto;
    }

    .whatsapp-kota-div {
        color: green;
    }

    .modal-whatsapp-icon>svg {
        width: 40px;
        height: auto;
    }

    .banner-template {
        background: #e6e6e6;
        width: 100%;
        height: 30em;
    }

    .card-beef-series,
    .card-chicken-series,
    .card-combo-series,
    .card-beverage-series {
        width: 100%;
        height: 17.5em;
        background: #e8e8e8;
        border-radius: 25px;
    }

    .card-series-helper {
        padding: 0.8em;
    }

    .wave {
        background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
        height: 100%;
        width: 8em;
        position: relative;
        animation: wave 0.7s linear infinite;
        border-radius: 25px;
    }

    .wave-banner {
        background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
        height: 100%;
        width: 20em;
        position: relative;
        animation: wave 0.7s linear infinite;
        border-radius: 25px;
    }

    .main-navbar {
        background: #e6e6e6;
        padding: 0.8em 2em;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
    }

    .col-nav {
        padding: 0 6em;
    }

    .nav-home,
    .nav-franchise {
        text-align: center;
        background: #B50206;
        border-radius: 25px;
        color: #fff;
        font-size: 0.875rem;
        padding: 0.4em 0;
        font-weight: bold;
        cursor: pointer;
        font-weight: 900;
    }

    .active-nav {
        box-shadow: none;
        background: #cccccc;
    }

    .nav-logo {
        text-align: center;
        background: #E6E6E6;
        border-radius: 18px;
        /* position: absolute; */
        padding: 0.1em 1em 0.7em 1em;
        z-index: 1001;
        top: 0;
        box-shadow: 0 5px 3px -3px rgba(0, 0, 0, 0.25);
        margin-top: 1.2rem;
    }

    .logo-container>img {
        width: 55px;
        height: 55px;
        z-index: 1;
    }

    .row.flavour {
        padding: 0 5em;
        margin-top: 0.5em;
    }

    .row.flavour.second {
        margin-top: -0.1em;
    }

    .banner-img {
        background: #FFAF09;
    }

    .banner-img-item {
        z-index: 1
    }

    .banner-img-item>img {
        width: 100%;
        height: 28em;
        padding: 0.5em 0 0 0;
        margin-top: 2em;
        margin-right: 1em;
        z-index: 1;
    }

    .banner-img-text {
        /* align-self: center; */
        padding-left: 3em;
        z-index: 2;
    }

    .banner-img-text>table {
        width: 100%;
        font-size: 8.5vw;
        line-height: 1;
        color: #fff;
        font-weight: bold;
        font-family: var(--app-bold);
    }

    .card-img-store {
        margin: 0 0 0.8em 0;
        transition: ease .5s;
        border-radius: 25px;
        max-height: 100%;
        height: 100%;
        filter: drop-shadow(0px 5px 10px rgba(0, 0, 0, 0.25));
    }

    .img-store {
        z-index: -10;
        border-top-left-radius: 25px !important;
        border-top-right-radius: 25px !important;
    }

    .card-body-store {
        transition: ease .5s;
        bottom: 0;
        background: #fff;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        border-radius: 25px;
    }

    .multiply-icon {
        bottom: 0;
        transition: ease .5s;
        position: relative;
    }

    .button-card {
        margin-top: 0.4em;
        display: none;
        transition: ease .5s;
        bottom: 0.5em;
        position: relative;
    }

    .btn-instagram,
    .btn-maps {
        background: #B50206;
        padding: 0.6em 0.8em;
        border-radius: 11px;
        outline: none;
        border: none;
        color: #fff;
        font-size: 1vw;
        align-items: center;
        vertical-align: middle;
    }

    .row.store {
        padding: 0 3em;
        margin-bottom: 3em;
    }

    .row-second-store {
        transition: ease .5s;
    }

    .target-first-col {
        margin-top: 1em;
    }

    .show-more-button {
        cursor: pointer;
    }

    .show-more-button>p {
        margin-bottom: 0;
        font-family: var(--hell-b);
        color: #B50206;
    }

    .col-siluet {
        text-align: end;
        position: relative;
        bottom: 13em;
        right: 2em;
    }

    .town-name {
        color: #828282;
        font-family: var(--hell-b);
        font-size: 0.8em;
        text-transform: uppercase;
        margin: 0 0.4em;
    }

    .dot>img {
        width: 5px;
        height: 5px;
    }

    .col-footer-text {
        text-align: justify;
        padding-right: 10em;
    }

    .span-footer-text {
        color: #828282;
        font-family: var(--hell-b);
        font-size: 0.9em;
        line-height: 1;
        text-align: justify;
    }

    .span-footer-text-collapsed {
        color: #828282;
        font-family: var(--hell-b);
        font-size: 0.9em;
        margin-top: 0.6em;
        line-height: 1;
    }

    .arrow-collapse {
        transition: ease .5s;
    }

    .rtr {
        transform: rotate(-180deg);
    }

    p.join-us {
        font-size: 2em;
        color: #B50206;
        font-family: var(--app-bold);
        text-transform: capitalize;
        margin-bottom: 0;
    }

    p.become-franchise {
        font-size: 3.4em;
        color: #FFAF09;
        font-family: var(--app-bold);
        text-transform: capitalize;
        margin-bottom: 0;
    }

    .collapse-text-trigger {
        margin-bottom: 0.5em;
        color: #B50206;
        font-size: 0.7em;
        font-family: var(--hell-b);
        cursor: pointer;
    }

    .row-main-footer {
        position: relative;
        z-index: inherit;
        transition: ease .5s;
        margin-top: 2em;
    }

    .row-town-list {
        background: #CCCCCC;
        margin-bottom: 1em;
    }

    .detail-town-list {
        position: relative;
        bottom: 8em;
    }

    .footer-img-left,
    .footer-img-right {
        height: auto;
    }

    #footer-img-left-mobile,
    #footer-img-right-mobile {
        display: none;
    }

    button.how-to-join {
        background: #E6E6E6;
        padding: 0.4em 1em;
        text-transform: capitalize;
        color: #B50206;
        font-family: var(--app-bold);
        font-size: 0.9em;
        border-radius: 12px;
        border: none;
        width: 12em;
        cursor: pointer;
    }

    .footer-fixed {
        background: #B50206;
        padding: 0.9em 3em;
    }

    .footer-fixed>div {
        align-items: center;
    }

    .instagram-footer,
    .whatsapp-footer {
        font-family: var(--app-bold);
        color: #fff;
        font-size: 0.8em;
        cursor: pointer;
    }

    .whatsapp-footer,
    .instagram-footer {
        display: block;
    }

    .whatsapp-footer-icon,
    .instagram-footer-icon {
        display: none
    }

    .divide {
        color: #fff;
        margin: 0 0.8em;
    }

    .contact-us {
        background: #FFAF09;
        padding: 0.7em 0.8em;
        border-radius: 12px;
        font-size: 0.8em;
        color: #fff;
        font-family: var(--app-bold);
        margin-right: 1em;
        cursor: pointer
    }

    .div-contact-us {
        display: block;
    }

    .more-than-steak {
        width: 350px;
        height: auto;
    }

    .detail-menu {
        display: block;
    }

    .animate-menu-tab {
        animation: left-slide ease .5s;
    }

    .tab-badge {
        position: relative;
        background: #fff;
        border-bottom-left-radius: 18px;
        border-bottom-right-radius: 18px;
        width: 10em;
        height: 4em;
        z-index: 0;
        left: 22.5em;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
    }

    .slide-tab {
        display: flex;
        left: 13.2em;
        position: relative;
        transition: ease .8s;
        z-index: 10;
    }

    .slide-tab-beef {
        left: 13.2em;
    }

    .slide-tab-chicken {
        left: 4em;
    }

    .slide-tab-combo {
        left: -6em;
    }

    .slide-tab-beverage {
        left: -16.3em;
    }

    .inactive-tab {
        color: #cccccc !important;
        font-size: 1em !important;
        transition: ease .5s;
    }

    .active-text-tab {
        color: #B50206 !important;
        font-size: 1.2em !important;
    }

    .active-text-etc {
        color: #B50206 !important;
        font-size: 1.1em !important;
    }

    .active-text-combo {
        color: #E29008 !important;
        font-size: 1.1em !important;
    }

    .active-text-beverage {
        color: #62B0D4 !important;
        font-size: 1.1em !important;
        font-weight: 800;
    }

    .active-div-text {
        top: 1em !important;
    }

    .inactive-beef-tab {
        top: 2.2em !important;
    }

    .inactive-etc-tab {
        top: 1.5em !important;
    }

    .chicken-tab>p {
        transition: ease .8s;
    }

    .menu-title {
        cursor: pointer;
        position: relative;
        /* left: -11em; */
        top: 1.7em;
        margin-right: 2em;
        transition: ease .5s;
        /* width: 12em; */
    }

    .secondary-menu {
        cursor: pointer;
        position: relative;
        /* left: -11em; */
        top: 1.5em;
        margin-right: 1em;
        transition: ease .8s;
        /* width: 12em; */
    }

    .secondary-menu>p {
        margin-bottom: 0;
        color: #cccccc;
        font-family: var(--app-b);
        font-size: 1em;
        font-weight: bold;
        text-transform: uppercase;
        padding: 0.7em 0 0.2em 0;
        margin-right: 1em;
    }

    .menu-title>p {
        /* background: #fff;
        border-bottom-left-radius: 18px;
        border-bottom-right-radius: 18px; */
        /* padding: 0.7em 1em 0.2em 1em; */
        margin-bottom: 0;
        font-family: var(--hell-b);
        font-size: 1.2em;
        text-transform: uppercase;
        color: #B50206;
    }

    .desc-menu {
        color: #B50206;
        font-family: var(--hell-b);
        font-size: 0.9em;
        margin-top: 3em;
    }

    .desc-menu-combo {
        color: #E29008;
        font-family: var(--hell-b);
        font-size: 0.9em;
        margin-top: 3em;
    }

    .desc-menu-beverage {
        color: #62B0D4;
        font-family: var(--hell-b);
        font-size: 0.9em;
        margin-top: 3em;
    }

    .carousel-item {
        height: 40em;
    }

    .tab-menu {
        position: relative;
        left: 5em;
        transition: ease .8s;
        z-index: 10;
    }

    .nav-tab-carousel {
        padding: 0 5em;
        left: 100%;
        top: 2em;
        position: relative;
        transition: ease .8s;
    }

    .nav-tab-carousel-move {
        left: 100% !important;
    }

    .blury-tab {
        filter: blur(2px);
    }

    .col-img-chicken {
        background: #fff;
        /* padding: 1.3em 0.2em; */
        border-radius: 12px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
        width: 9.5em;
        margin: 0 0.6em;
        max-height: 8.5em;
    }

    .img-chicken {
        /* background: #fff; */
        padding: 1.3em 0.2em;
        width: 150px;
        height: 130px;
        /* border-radius: 12px; */
        /* box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15); */
    }

    .img-chicken-blur {
        filter: blur(3px);
    }

    .helper-img-chicken {
        background: #B50206;
    }

    .helper-img-beverage {
        background: #62B0D4;
    }

    .helper-img-combo {
        background: #FFAF09 !important;
    }

    .hover-text {
        position: relative;
        bottom: 5em;
        opacity: 0;
        transition: ease .3s;
    }

    .hover-combo {
        bottom: 5em;
        padding: 0 1em;
    }

    .hover-beverage {
        bottom: 7.5em;
        padding: 0 1em;
    }

    .hover-text>span {
        font-family: var(--hell-b);
        font-size: 0.8em;
        color: #fff;
    }

    .row-img-chicken {
        padding: 0 12em;
    }

    .row-img-beef {
        padding: 0 12em;
    }

    .large-view {
        display: none;
    }

    .medium-view {
        display: none;
        padding: 0;
    }

    .xlarge-view {
        display: block;
    }

    .banner-menu-img {
        border-radius: 25px;
    }

    .btn-show-more-collapse:focus {
        box-shadow: none;
        outline: none;
    }

    .p-collapse {
        margin-bottom: 0.8em;
        padding: 0;
    }

    @media screen and (max-width: 414px) {

        .banner-img-item>img {
            width: 100%;
            height: auto;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 0.4em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 0.8em;
        }

        .col-nav {
            padding: 0;
        }

        .banner {
            margin-top: 3.2em;
        }

        .banner-img-item {
            width: 100%;
            margin-top: 0;
        }

        .banner-img-text {
            text-align: center;
            padding-left: 0;
            padding-top: 0;
        }

        .banner-img-text>table {
            font-size: 14vw;
        }

        .col-category {
            padding: 0 !important;
        }

        .logo-icon {
            width: 70px;
            height: 70px;
        }

        .col-text-2 {
            width: 83.3333333333%;
        }

        .col-text-1,
        .col-text-3 {
            width: 8.3333333333%;
        }

        .col-text-2>p {
            font-size: 26px !important;
        }

        .row-store-image {
            margin-top: 1em;
            padding: 0 3em;
        }

        .card-img-store {
            margin-top: -0.2em;
            height: 100%;
        }


        .row.flavour {
            padding: 0 0.4em;
            margin-top: 0.9em;
        }

        .row.store {
            padding: 0 0.4em;
            margin-bottom: 3em;
        }

        .card-1-transform {
            position: relative;
            bottom: 1em !important;
            border-radius: 0;
        }

        p.join-us {
            font-size: 1.5em;
            color: #B50206;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        p.become-franchise {
            font-size: 2em;
            color: #FFAF09;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .btn-join {
            text-align: center;
            padding: 0 3em;
            position: relative;
            bottom: 6em;
        }

        .btn-join>button {
            width: 100%;
            padding: 0.5em 1em;
        }

        .btn-instagram {
            margin-left: 0.8em;
            font-size: 0.6em;
        }

        .btn-maps {
            font-size: 0.6em;
        }

        .button-card {
            bottom: 2.2em;
        }

        .col-store {
            margin-top: 1em;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 9em;
            left: 3.2em;
        }

        .large-view {
            display: none;
        }

        .medium-view {
            display: none;
            padding: 0 4em;
        }

        .multiply-icon {
            left: 3.2em;
        }

        .col-footer-text {
            text-align: justify;
            padding: 0 2em;
            margin-bottom: 8em;
        }

        #footer-img-left,
        #footer-img-right {
            display: none;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: block;
            width: 8.333%;
        }

        .col-center-footer {
            width: 80%;
        }

        .more-than-steak {
            width: 240px;
            height: auto;
        }

        .col-siluet {
            text-align: center;
            right: 0.2em;
        }

        .img-siluet {
            width: 250px;
            height: auto;
            position: relative;
            bottom: -5em;
        }

        .footer-fixed {
            background: #B50206;
            padding: 0.9em 0.5em;
        }

        .footer-fixed>div {
            align-items: center;
        }

        .instagram-footer,
        .whatsapp-footer {
            font-family: var(--app-bold);
            color: #fff;
            font-size: 0.7em;
            cursor: pointer;
        }

        .whatsapp-footer {
            display: none;
        }

        .instagram-footer {
            display: none;
        }

        .whatsapp-footer-icon,
        .instagram-footer-icon {
            display: block;
            color: #fff;
        }

        .divide {
            color: #fff;
            margin: 0 1em;
        }

        .contact-us {
            background: #FFAF09;
            padding: 0.7em 0.8em;
            border-radius: 12px;
            font-size: 0.7em;
            color: #fff;
            font-family: var(--app-bold);
            margin-right: 1em;
            cursor: pointer
        }

        .div-contact-us {
            display: block;
        }

        .banner-template {
            background: #e6e6e6;
            width: 100%;
            height: 27em;
        }

        .card-beef-series,
        .card-chicken-series,
        .card-combo-series,
        .card-beverage-series {
            width: 100%;
            height: 10em;
            background: grey;
            border-radius: 17px;
        }

        .card-series-helper {
            padding: 0.2em 0.4em;
        }

        .wave {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
            height: 100%;
            width: 4em;
            position: relative;
            animation: wave 0.7s linear infinite;
            border-radius: 25px;
        }

        .wave-banner {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
            height: 100%;
            width: 10em;
            position: relative;
            animation: wave 0.7s linear infinite;
            border-radius: 25px;
        }

        .desc-menu {
            color: #B50206;
            font-family: var(--hell-b);
            font-size: 0.9em;
            margin-top: 0em;
            padding: 0 2em;
            text-align: center;
        }

        .desc-menu-combo {
            color: #E29008;
            font-family: var(--hell-b);
            font-size: 0.9em;
            padding: 0.2em;
            margin-top: -3em;
        }

        .desc-menu-beverage {
            color: #62B0D4;
            font-family: var(--hell-b);
            font-size: 0.9em;
            padding: 0.2em;
            margin-top: -3em;
        }

        .carousel-item {
            height: 54em;
            transition: ease .5s;
        }

        .carousel-beef-chicken {
            height: 31em;
        }

        .carousel-combo {
            height: 34em;
        }

        .carousel-beverage {
            height: 27em;
        }

        .hover-text>span {
            font-family: var(--hell-b);
            font-size: 0.5em;
            color: #fff;
            line-height: 1;
        }

        .hover-combo {
            bottom: 5em;
            padding: 0 0.5em;
        }

        .hover-beverage {
            bottom: 5em;
            padding: 0 0.5em;
        }

        .back {
            margin-left: -8.3em;
            z-index: 1001;
        }

        .back-tab {
            width: 30px;
            height: 30px;
        }

        .tab-badge {
            position: relative;
            background: #fff;
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
            width: 12em;
            height: 3em;
            z-index: 0;
            left: 2em;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            top: -2em;
        }

        .active-div-text {
            font-family: var(--hell-b);
            font-size: 1.1em;
            color: #B50206;
            display: block !important;
            width: 11em;
        }

        .active-text-etc {
            font-size: 1.2em;
        }

        .inactive-tab {
            display: none;
        }

        .slide-tab-beef {
            left: -0.9em;
            top: -5.5em;
        }

        .slide-tab-chicken {
            left: -4.5em;
            top: -5.9em;
        }

        .slide-tab-combo {
            left: -4.5em;
            top: -6em;
        }

        .slide-tab-beverage {
            left: -4.5em;
            top: -5.9em;
        }

        .secondary-menu {
            display: none;
        }

        .img-beef,
        .img-chicken {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 90px;
        }

        .row-img-beef,
        .row-img-chicken {
            padding: 0 3.8em;
            margin-left: 3em;
        }

        .col-img-beef,
        .col-img-chicken {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 0.6em;
            max-height: 5.5em;
        }

        .row-img-combo {
            padding: 0em;
            margin-left: 6.6em;
        }

        .row-img-combo-2 {
            padding: 0 5.2em;
            margin-right: 0;
            margin-left: 1.4em;
        }

        .col-img-combo {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 0.6em;
            max-height: 5.5em;
            padding: 0;
        }

        .col-combo-last {
            margin-left: 3.8em;
        }

        .img-combo {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 110px;
        }

        .row-img-beverage {
            margin-left: 7.5em;
        }

        .col-img-beverage {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 3em;
            max-height: 5.5em;
            padding: 0;
        }

        .img-beverage {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 110px;
        }

        .detail-town-list {
            position: relative;
            bottom: 4em;
            margin: 0 0.1em;
        }

        .town-name {
            color: #828282;
            font-family: var(--hell-b);
            font-size: 0.5em;
            text-transform: uppercase;
        }

        .helper-img-chicken {
            background: #B50206;
        }

        .helper-img-beverage {
            background: #62B0D4;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0;
            text-align: center;
        }
    }


    @media screen and (max-width: 375px) {
        .banner-img-item>img {
            width: 100%;
            height: auto;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 0.4em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 0.8em;
        }

        .col-nav {
            padding: 0;
        }

        .banner {
            margin-top: 3.2em;
        }

        .banner-img-item {
            width: 100%;
            margin-top: 0;
        }

        .banner-img-text {
            text-align: center;
            padding-left: 0;
            padding-top: 0;
        }

        .banner-img-text>table {
            font-size: 14vw;
        }

        .col-category {
            padding: 0 !important;
        }

        .logo-icon {
            width: 70px;
            height: 70px;
        }

        .col-text-2 {
            width: 83.3333333333%;
        }

        .col-text-1,
        .col-text-3 {
            width: 8.3333333333%;
        }

        .col-text-2>p {
            font-size: 26px !important;
        }

        .row-store-image {
            margin-top: 1em;
            padding: 0 3em;
        }

        .card-img-store {
            margin-top: -0.2em;
            height: 100%;
        }


        .row.flavour {
            padding: 0 0.4em;
            margin-top: 0.9em;
        }

        .row.store {
            padding: 0 0.4em;
            margin-bottom: 3em;
        }

        .card-1-transform {
            position: relative;
            bottom: 1em !important;
            border-radius: 0;
        }

        p.join-us {
            font-size: 1.5em;
            color: #B50206;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        p.become-franchise {
            font-size: 2em;
            color: #FFAF09;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .btn-join {
            text-align: center;
            padding: 0 3em;
            position: relative;
            bottom: 6em;
        }

        .btn-join>button {
            width: 100%;
            padding: 0.5em 1em;
        }

        .btn-instagram {
            margin-left: 0.8em;
            font-size: 0.6em;
        }

        .btn-maps {
            font-size: 0.6em;
        }

        .button-card {
            bottom: 2.2em;
        }

        .col-store {
            margin-top: 1em;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 9em;
            left: 3.2em;
        }

        .large-view {
            display: none;
        }

        .medium-view {
            display: none;
            padding: 0 4em;
        }

        .multiply-icon {
            left: 3.2em;
        }

        .col-footer-text {
            text-align: justify;
            padding: 0 2em;
            margin-bottom: 8em;
        }

        #footer-img-left,
        #footer-img-right {
            display: none;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: block;
            width: 8.333%;
        }

        .col-center-footer {
            width: 80%;
        }

        .more-than-steak {
            width: 240px;
            height: auto;
        }

        .col-siluet {
            text-align: center;
            right: 0.2em;
        }

        .img-siluet {
            width: 250px;
            height: auto;
            position: relative;
            bottom: -5em;
        }

        .footer-fixed {
            background: #B50206;
            padding: 0.9em 0.5em;
        }

        .footer-fixed>div {
            align-items: center;
        }

        .instagram-footer,
        .whatsapp-footer {
            font-family: var(--app-bold);
            color: #fff;
            font-size: 0.7em;
            cursor: pointer;
        }

        .whatsapp-footer {
            display: none;
        }

        .instagram-footer {
            display: none;
        }

        .whatsapp-footer-icon,
        .instagram-footer-icon {
            display: block;
            color: #fff;
        }

        .divide {
            color: #fff;
            margin: 0 1em;
        }

        .contact-us {
            background: #FFAF09;
            padding: 0.7em 0.8em;
            border-radius: 12px;
            font-size: 0.7em;
            color: #fff;
            font-family: var(--app-bold);
            margin-right: 1em;
            cursor: pointer
        }

        .div-contact-us {
            display: none;
        }

        .banner-template {
            background: #e6e6e6;
            width: 100%;
            height: 27em;
        }

        .card-beef-series,
        .card-chicken-series,
        .card-combo-series,
        .card-beverage-series {
            width: 100%;
            height: 10em;
            background: grey;
            border-radius: 17px;
        }

        .card-series-helper {
            padding: 0.2em 0.4em;
        }

        .wave {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
            height: 100%;
            width: 4em;
            position: relative;
            animation: wave 0.7s linear infinite;
            border-radius: 25px;
        }

        .wave-banner {
            background: linear-gradient(90deg, rgba(230, 230, 230, 1) 0%, rgba(212, 212, 212, 1) 38%, rgba(159, 159, 159, 1) 100%);
            height: 100%;
            width: 10em;
            position: relative;
            animation: wave 0.7s linear infinite;
            border-radius: 25px;
        }

        .desc-menu {
            color: #B50206;
            font-family: var(--hell-b);
            font-size: 0.9em;
            margin-top: 0em;
            padding: 0 2em;
            text-align: center;
        }

        .desc-menu-combo {
            color: #E29008;
            font-family: var(--hell-b);
            font-size: 0.9em;
            padding: 0.2em;
            margin-top: -3em;
        }

        .desc-menu-beverage {
            color: #62B0D4;
            font-family: var(--hell-b);
            font-size: 0.9em;
            padding: 0.2em;
            margin-top: -3em;
        }

        .carousel-item {
            height: 53em;
            transition: ease .5s;
        }

        .carousel-beef-chicken {
            height: 31em;
        }

        .carousel-combo {
            height: 34em;
        }

        .carousel-beverage {
            height: 27em;
        }

        .hover-text>span {
            font-family: var(--hell-b);
            font-size: 0.5em;
            color: #fff;
            line-height: 1;
        }

        .hover-combo {
            bottom: 5em;
            padding: 0 0.5em;
        }

        .hover-beverage {
            bottom: 5em;
            padding: 0 0.5em;
        }

        .back {
            margin-left: -8.3em;
            z-index: 1001;
        }

        .back-tab {
            width: 30px;
            height: 30px;
        }

        .tab-badge {
            position: relative;
            background: #fff;
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
            width: 12em;
            height: 3em;
            z-index: 0;
            left: 1em;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            top: -2em;
        }

        .active-div-text {
            font-family: var(--hell-b);
            font-size: 1.1em;
            color: #B50206;
            display: block !important;
            width: 11em;
        }

        .active-text-etc {
            font-size: 1.2em;
        }

        .inactive-tab {
            display: none;
        }

        .slide-tab-beef {
            left: -1.8em;
            top: -5.5em;
        }

        .slide-tab-chicken {
            left: -5.5em;
            top: -5.9em;
        }

        .slide-tab-combo {
            left: -5.4em;
            top: -6em;
        }

        .slide-tab-beverage {
            left: -5.5em;
            top: -5.9em;
        }

        .secondary-menu {
            display: none;
        }

        .img-beef,
        .img-chicken {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 90px;
        }

        .row-img-beef,
        .row-img-chicken {
            padding: 0 3.8em;
            margin-left: 1.8em;
        }

        .col-img-beef,
        .col-img-chicken {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 0.6em;
            max-height: 5.5em;
        }

        .row-img-combo {
            padding: 0em;
            margin-left: 5.5em;
        }

        .row-img-combo-2 {
            padding: 0 5.2em;
            margin-right: 0;
            margin-left: 0.3em;
        }

        .col-img-combo {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 0.6em;
            max-height: 5.5em;
            padding: 0;
        }

        .col-combo-last {
            margin-left: 3.8em;
        }

        .img-combo {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 110px;
        }

        .row-img-beverage {
            margin-left: 6.2em;
        }

        .col-img-beverage {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 5em;
            margin: 0 3em;
            max-height: 5.5em;
            padding: 0;
        }

        .img-beverage {
            padding: 1.3em 0.2em;
            width: 80px;
            height: 110px;
        }

        .detail-town-list {
            position: relative;
            bottom: 4em;
            margin: 0 0.1em;
        }

        .town-name {
            color: #828282;
            font-family: var(--hell-b);
            font-size: 0.5em;
            text-transform: uppercase;
        }

        .helper-img-chicken {
            background: #B50206;
        }

        .helper-img-beverage {
            background: #62B0D4;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0;
            text-align: center;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media screen and (min-width: 768px) {
        .banner-img-item>img {
            width: 100%;
            height: auto;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 2em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 0.9em;
        }

        .col-nav {
            padding: 0;
        }

        .medium-view {
            display: block;
            padding: 0 4em;
        }

        .xlarge-view {
            display: none;
        }

        .button-card {
            bottom: 3.2em;
        }

        .card-1-transform {
            position: relative;
            bottom: 4em !important;
            border-radius: 0;
            padding: 1rem 1rem 0 1rem;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 18em !important;
            left: 7.5em;
        }

        .multiply-icon {
            position: relative;
            left: 7.5em;
        }

        .card-img-store {
            height: 100%;
        }

        .tab-badge {
            position: relative;
            background: #fff;
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
            width: 12em;
            height: 4em;
            z-index: 0;
            left: 7.1em;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
        }

        .slide-tab-beef {
            left: 1.6em;
        }

        .slide-tab-chicken {
            left: -1.6em;
        }

        .slide-tab-combo {
            left: 0em;
        }

        .slide-tab-beverage {
            left: 1em;
        }

        .secondary-menu {
            display: none;
        }

        .carousel-item {
            height: 85em;
            transition: ease .5s;
        }

        .carousel-beef-chicken {
            height: 70em;
        }

        .carousel-combo {
            height: 60em;
        }

        .carousel-beverage {
            height: 25em;
        }

        .hover-text>span {
            font-family: var(--hell-b);
            font-size: 0.8em;
            color: #fff;
        }

        .active-div-text {
            font-family: var(--hell-b);
            font-size: 1.1em;
            color: #B50206;
            display: block;
        }

        .row-helper-img-chicken,
        .row-helper-img-beef {
            margin-left: 1.3em;
        }

        .inactive-tab {
            display: none;
        }

        .helper-img-chicken {
            background: #B50206 !important;
        }

        .helper-img-beverage {
            background: #62B0D4 !important;
        }

        .img-beef,
        .img-chicken {
            padding: 1.3em 0.2em;
            width: 140px;
            height: 120px;
        }

        .row-img-beef,
        .row-img-chicken {
            padding: 0 12em;
            margin-left: 1.8em;
        }

        .col-img-beef,
        .col-img-chicken {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 9em;
            margin: 0 0.6em;
            max-height: 8.5em;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: none;
        }

        .col-footer-text {
            text-align: center;
            padding: 0 3em;
            margin-bottom: 3.5em;
        }

        .col-siluet {
            text-align: end;
            position: relative;
            bottom: 3.5em;
            right: 6em;
        }

        .btn-join {
            padding: 0 15em;
        }

        .how-to-join {
            width: 100%;
        }

        .more-than-steak {
            position: relative;
            top: 3em;
        }

        #footer-img-left {
            display: none;
        }

        #footer-img-left-mobile {
            display: block;
        }

        #footer-img-right {
            display: none;
        }

        #footer-img-right-mobile {
            display: block;
        }

        button.how-to-join {
            position: relative;
            bottom: 2em;
        }

        .detail-town-list {
            position: relative;
            bottom: 0em;
        }

        .footer-img-left,
        .footer-img-right {
            height: 50vh;
        }

        .row-img-combo {
            padding: 0em;
            margin-right: 2.5em;
        }

        .row-img-combo-2 {
            padding: 0 5em;
            margin-left: 6.4em;
        }

        .col-img-combo {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 11.5em;
            margin: 0 0.6em;
            max-height: 10.5em;
            padding: 0;
        }

        .col-combo-last {
            margin-left: 7em;
        }

        .img-combo {
            padding: 0.8em 0.9em;
            width: 180px;
            height: 170px;
        }

        .row-img-beverage {
            margin-left: 5em;
        }

        .col-img-beverage {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 11.5em;
            margin: 0 0.6em;
            max-height: 10.5em;
            padding: 0;
        }

        .img-beverage {
            padding: 0.8em 0.9em;
            width: 200px;
            height: 190px;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0 14em;
        }

    }


    /* Large devices (desktops, 992px and up) */
    @media screen and (min-width: 992px) {
        .banner-img-item>img {
            width: 100%;
            height: auto;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 2em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 0.9em;
        }

        .col-nav {
            padding: 0;
        }

        .medium-view {
            display: block;
            padding: 0 18em;
        }

        .card-1-transform {
            position: relative;
            bottom: 2em !important;
            border-radius: 0;
            padding: 1rem 1rem 0 1rem;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 12em !important;
            left: 4em;
        }

        .multiply-icon {
            left: 4.2em;
        }

        .btn-instagram {
            font-size: 0.8em;
        }

        .btn-maps {
            font-size: 0.8em;
        }

        .button-card {
            bottom: 1.5em;
            left: 1em;
            /* display: block; */
        }

        .card-img-store {
            height: 100%;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: none;
        }

        p.join-us {
            font-size: 1.5em;
            color: #B50206;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        p.become-franchise {
            font-size: 2.2em;
            color: #FFAF09;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .col-siluet {
            text-align: end;
            position: relative;
            bottom: 11em;
        }

        .img-siluet {
            width: 370px;
            height: auto;
        }

        .carousel-item {
            height: 31em;
        }

        .menu-title {
            margin-right: 1em;
        }

        .secondary-menu {
            margin-right: 0;
            display: block;
        }

        .tab-badge {
            position: relative;
            background: #fff;
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
            width: 10em;
            height: 4em;
            z-index: 0;
            left: 14em;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
        }

        .inactive-tab {
            font-size: 0.8em;
        }

        .combo-tab,
        .beverage-tab {
            width: 9em;
        }

        .chicken-tab {
            width: 10em;
        }

        .beef-tab {
            width: 7em;
        }

        .active-tab {
            width: 11em;
        }

        .slide-tab-beef {
            left: 4.8em;
        }

        .slide-tab-chicken {
            left: -2.7em;
        }

        .slide-tab-combo {
            left: -12.4em;
        }

        .slide-tab-beverage {
            left: -21.4em;
        }

        .hover-text>span {
            font-family: var(--hell-b);
            font-size: 0.8em;
            color: #fff;
        }

        .active-div-text {
            font-family: var(--hell-b);
            font-size: 1em;
            color: #B50206;
            display: block;
        }

        .inactive-tab {
            display: block;
        }

        .helper-img-chicken {
            background: #B50206 !important;
        }

        .helper-img-beverage {
            background: #62B0D4 !important;
        }

        .row-img-beef,
        .row-img-chicken {
            padding: 0 4.6em;
            margin: 0;
        }

        .row-helper-img-beef,
        .row-helper-img-chicken {
            padding: 0 1.7em;
        }

        .col-img-beef,
        .col-img-chicken {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 9em;
            margin: 0 0.6em;
            max-height: 8.5em;
        }

        .img-beef,
        .img-chicken {
            padding: 1.3em 0.2em;
            width: 140px;
            height: 130px;
        }

        .row-desc {
            margin-top: 1em;
        }

        .col-footer-text {
            text-align: justify;
            padding: 0 5.7em 0 3em;
            margin-bottom: 0;
        }

        .col-siluet {
            text-align: end;
            position: relative;
            bottom: 11em;
            left: 2em;
        }

        .btn-join {
            padding: 0 0 0 3em;
        }

        #footer-img-left {
            display: block;
        }

        #footer-img-left-mobile {
            display: none;
        }

        #footer-img-right {
            display: block;
        }

        #footer-img-right-mobile {
            display: none;
        }

        button.how-to-join {
            position: relative;
            bottom: 0em;
        }

        .detail-town-list {
            position: relative;
            bottom: 5em;
        }

        .more-than-steak {
            position: relative;
            top: -3em;
        }

        .row-img-combo {
            padding: 0 10.5em;
            margin-right: 0;
        }

        .row-img-combo-2 {
            padding: 0 5.2em;
            margin-right: 0;
            margin-left: 0;
        }

        .col-img-combo {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 9.5em;
            margin: 0 0.6em;
            max-height: 8.5em;
            padding: 0;
        }

        .img-combo {
            padding: 0.8em 0.9em;
            width: 140px;
            height: 130px;
        }

        .row-img-beverage {
            margin-left: 13em;
        }

        .col-img-beverage {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 11.5em;
            margin: 0 0.6em;
            max-height: 10.5em;
            padding: 0;
        }

        .img-beverage {
            padding: 0.8em 0.9em;
            width: 200px;
            height: 190px;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0;
        }
    }

    /* X-Large devices (large desktops, 1200px and up) */
    @media screen and (min-width: 1200px) {
        .banner-img-item>img {
            width: 100%;
            height: auto;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 2em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 1.1em;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 10em !important;
            left: 6.2em;
        }

        .card-1-transform {
            position: relative;
            bottom: 4em !important;
            border-radius: 0;
        }

        .multiply-icon {
            left: 6.2em;
        }

        .btn-instagram {
            margin-left: 0.8em;
            font-size: 0.9em;
        }

        .btn-maps {
            font-size: 0.9em;
        }

        .button-card {
            bottom: 3.2em;
            left: 1em;
        }

        .card-img-store {
            height: 100%;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: none;
        }

        p.join-us {
            font-size: 1.5em;
            color: #B50206;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        p.become-franchise {
            font-size: 2.8em;
            color: #FFAF09;
            font-family: var(--app-bold);
            text-transform: capitalize;
            margin-bottom: 0;
        }

        .row-img-chicken {
            padding: 0 10em;
        }

        .tab-badge {
            left: 21.3em;
        }

        .slide-tab-beef {
            left: 10.5em;
        }

        .slide-tab-chicken {
            left: 3.1em;
        }

        .slide-tab-combo {
            left: -6.8em;
        }

        .slide-tab-beverage {
            left: -15.6em;
        }

        .row-img-chicken,
        .row-img-beef {
            padding: 0 15.1em;
        }

        .row-img-combo {
            padding: 0 21em;
            margin-right: 0;
        }

        .row-img-combo-2 {
            padding: 0 15.8em;
            margin-right: 0;
            margin-left: 0;
        }

        .row-img-beverage {
            margin-left: 23.6em;
        }

        .carousel-item {
            height: 42em;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0;
        }
    }

    /* XX-Large devices (larger desktops, 1400px and up) */
    @media screen and (min-width: 1400px) {
        .banner-img-item>img {
            width: 100%;
            height: 28em;
            padding: 0.5em 0 0 0;
            margin-top: 2em;
            margin-right: 1em;
            z-index: 1;
        }

        .main-navbar {
            background: #e6e6e6;
            padding: 0.8em 2em;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.20);
        }

        .nav-home,
        .nav-franchise {
            font-size: 0.875rem;
        }

        .col-nav {
            padding: 0 6em;
        }

        .card-1-transform {
            position: relative;
            bottom: 3.8em !important;
            border-radius: 0;
        }

        #footer-img-left-mobile,
        #footer-img-right-mobile {
            display: none;
        }

        .btn-instagram {
            margin-left: 1em;
        }

        .multiply-icon-transform {
            position: relative;
            bottom: 10em !important;
        }

        .multiply-icon {
            left: 0;
            text-align: end;
            position: relative;
        }

        .card-img-store {
            height: 100%;
            margin: 0.5em;
        }

        .carousel-item {
            height: 41em;
            margin-bottom: 3em;
        }

        .row-img-chicken {
            padding: 0 12.8em;
            text-align: center;
        }

        .chicken-tab {
            width: 11em;
        }

        .slide-tab-beef {
            left: 12em;
        }

        .slide-tab-chicken {
            left: 4.5em;
        }

        .slide-tab-combo {
            left: -6.5em;
        }

        .slide-tab-beverage {
            left: -15.5em;
        }

        .tab-badge {
            position: relative;
            background: #fff;
            border-bottom-left-radius: 18px;
            border-bottom-right-radius: 18px;
            width: 10em;
            height: 4em;
            z-index: 0;
            left: 23em;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
        }

        .hover-text>span {
            font-family: var(--hell-b);
            font-size: 0.8em;
            color: #fff;
        }

        .active-div-text {
            font-family: var(--hell-b);
            font-size: 1em;
            color: #B50206;
            display: block;
        }

        .inactive-tab {
            display: block;
        }

        .helper-img-chicken {
            background: #B50206 !important;
        }

        .helper-img-beverage {
            background: #62B0D4 !important;
        }

        .row-img-beef,
        .row-img-chicken {
            padding: 0 11.4em;
            margin: 0
        }

        .row-img-combo {
            padding: 0 19.3em;
            margin-right: 0;
        }

        .row-img-combo-2 {
            padding: 0 13.1em;
            margin-left: 0;
            margin-right: 0;
        }

        .row-img-beverage {
            margin-left: 25.9em;
        }

        .col-img-beef,
        .col-img-chicken {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 12em;
            margin: 0 0.6em;
            max-height: 10em;
            padding: 0 0.5em;
        }

        .row-helper-img-beef,
        .row-helper-img-chicken {
            padding: 0 1.4em;
        }

        .col-img-combo {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 11.5em;
            margin: 0 0.6em;
            max-height: 10.5em;
            padding: 0;
        }

        .col-img-beverage {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgb(0 0 0 / 15%);
            width: 11.5em;
            margin: 0 0.6em;
            max-height: 10.5em;
            padding: 0;
        }

        .img-beef,
        .img-chicken {
            padding: 0.8em 0.9em;
            width: 160px;
            height: 140px;
        }

        .img-combo {
            padding: 0.8em 0.9em;
            width: 180px;
            height: 170px;
        }

        .img-beverage {
            padding: 0.8em 0.9em;
            width: 200px;
            height: 190px;
        }

        .span-address {
            font-family: var(--sfpd-reagular);
            color: #B50206;
        }

        .medium-view {
            display: none;
        }

        .xlarge-view {
            display: block;
        }

        .img-siluet {
            width: 450px;
            height: auto;
            position: relative;
            bottom: -5em;
        }

        .col-siluet {
            text-align: end;
            position: relative;
            bottom: 19em;
            left: 1em;
        }

        .town-name {
            color: #828282;
            font-family: var(--hell-b);
            font-size: 0.8em;
            text-transform: uppercase;
        }

        .dot>img {
            width: 5px;
            height: 5px;
        }

        .p-collapse {
            margin-bottom: 0.8em;
            padding: 0;
        }
    }
</style>

<body>