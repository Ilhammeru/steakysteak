<!doctype html>

<html>

<head>
    <title>
        &Bobabar
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- START STYLES -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/materialize/dist/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="<?=base_url();?>assets/font/ny-font.css" rel="stylesheet">

    <!-- Sweetalert2 v10.3.5 -->
    <link rel="stylesheet" href="<?=base_url();?>assets/vendor/sweetalert2/dist/sweetalert2.min.css?v10.3.5">

    <!-- END STYLES -->

    <!-- START PLUGINS -->

    <!-- jQuery v3.5.1 -->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery-3.5.1.min.js?v3.5.1"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="<?=base_url();?>assets/materialize/dist/js/materialize.min.js"></script>

    <!-- Sweetalert2 v10.3.5 -->
    <script src="<?=base_url();?>assets/vendor/sweetalert2/dist/sweetalert2.min.js?v10.3.5"></script>

    <style>
    html {
        /* font-family: -apple-system, BlinkMacSystemFont, sans-serif; */
        font-family: 'New York Medium Bold';
        background-color: rgb(245, 235, 220);
    }

    .i-navbar {
        height: 1.3em;
        color: #00704a;
    }

    .title-navbar {
        display: block;
        font-size: .75em;
        text-transform: uppercase;
        line-height: 10px;
    }

    nav.nav-header {
        background-color: rgb(245, 235, 220);
        top: 0;
        position: fixed;
        z-index: 1000;
    }

    nav.nav-footer {
        bottom: 0;
        position: fixed;]
    }

    nav .brand-logo {
        padding: .350rem 0;
    }

    .nav-footer .tabs {
        background-color: rgb(245, 235, 220);
        height: 56px;
    }

    .nav-footer .tabs .tab {
        line-height: 20px;
        height: 56px;
    }

    .nav-footer .tabs .tab a {
        color: rgb(80, 35, 20);
        font-weight: 750;
        padding: .75rem 0;
    }

    .nav-footer .tabs .tab a.active {
        color: rgb(214, 35, 0);
    }

    .nav-footer .tabs .indicator {
        background-color: transparent;
    }

    li.tab {
        text-transform: none !important;
    }

    .img-head {
        height: 1.5em;
        width: auto;
    }

    #home, #franchise, #flavours, #contact {
        padding-top: 56px;
    }

    .col #franchise-content .row {
        margin-left: 0;
        margin-right: 0;
    }

    .home-banner, .franchise-banner {
        width: 100%;
        background-color: transparent;
    }

    .home-banner img, .franchise-banner img {
        width: 100%;
        height: 100%;
    }

    .flavour-banner {
        line-height: 90%;
        text-transform: none;
        width: 100%;
        color: rgb(245, 235, 220);
        padding: 2rem 0px 2.7rem;
        background-color: rgb(214, 35, 0);
        text-align: center;
        font-size: 2rem;
        font-weight: normal;
    }

    .home-content, .franchise-content {
        padding: 0 1em;
    }
    
    .flavour-content {
        margin: 0px;
        padding: 2rem 1rem 10px;
    }    
    
    .contact-banner {
        line-height: 90%;
        text-transform: none;
        width: 100%;
        color: rgb(245, 235, 220);
        padding: 2rem 0px 2.7rem;
        background-color: rgb(214, 35, 0);
        text-align: center;
        font-size: 2rem;
        font-weight: normal;
    }

    .contact-content {
        padding: 1em;
    }

    .flavour-grid {
        display: grid;
        gap: 1rem;
        grid-template-columns: 1fr 1fr;
        min-height: 250px;
        text-decoration: none;
    }

    .flavour-box {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        height: inherit;
        min-height: 100%;
        padding: 0px;
        text-decoration: none;
        background-color: rgb(255, 255, 255);
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
        border-radius: 10px;
        transition: box-shadow 0.3s ease 0s;
    }

    .flavour-img {
        border-radius: 10px 10px 0px 0px;
        height: 6.25rem;
        overflow: hidden;
        position: relative;
    }

    .flavour-title {
        display: flex;
        flex-direction: column;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 0.8rem 0.5rem;
        text-align: center;
    }

    .home-footer {
        position: relative;
        display: flex;
        flex-direction: column;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 100%;
        background-color: rgb(239, 225, 204);
        padding: 2.75rem 1rem;
    }

    .home-footer-content {
        display: flex;
        flex-direction: column;
        place-content: center;
        -webkit-box-pack: center;
        width: 100%;
        max-width: 23rem;
        text-align: center;
        color: rgb(80, 35, 20);
    }

    .card {
        position: initial;
        border: none;
        margin: 0px;
        font-size: inherit;
        text-align: left;
        background: white;
        border-radius: 1em;
        box-shadow: rgb(73 73 73 / 20%) 0px 0px 4px 0px;
        transition: box-shadow 0.3s ease 0s;
    }

    .card .card-content {
        padding: 1em 1.5em;
    }

    .card .card-image.with-content img {
        border-top-left-radius: 1em;
        border-top-right-radius: 1em;
    }

    .card .card-image.image-only img {
        border-radius: 1em;
    }

    .content-title {
        color: rgb(80, 35, 20);
        line-height: 1.75;
        margin: 1rem auto 16px;
        text-align: center;
        font-weight: normal;
        text-transform: none;
        font-size: 1.5rem;
    }

    .card.card-flavours {
        line-height: 90%;
        margin: 0px;
        text-transform: none;
        width: 100%;
        color: rgb(245, 235, 220);
        padding: 2rem 0px 2.7rem;
        background-color: rgb(214, 35, 0);
        text-align: center;
        font-size: 2rem;
        font-weight: normal;
    }

    .card-content-title {
        font-size: 1.5rem;
        color: rgb(80, 35, 20);
        text-align: left;
        line-height: 1.2;
        text-transform: initial;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        -webkit-box-orient: vertical;
    }

    .card .card-content p {
        font-size: 0.9375rem;
        color: rgb(80, 35, 20);
        text-align: left;
    }

    .title-flavour {
        font-size: .750rem;
        color: rgb(80, 35, 20);
        text-align: center;
        line-height: 1.2;
        text-transform: initial;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        -webkit-box-orient: vertical;
    }

    input[type=text]:not(.browser-default):focus:not([readonly])+label,
    input[type=email]:not(.browser-default):focus:not([readonly])+label,
    input[type=number]:not(.browser-default):focus:not([readonly])+label,
    textarea.materialize-textarea:focus:not([readonly])+label {
        color: rgb(80, 35, 20);
    }

    input[type=text]:not(.browser-default):focus:not([readonly]),
    input[type=email]:not(.browser-default):focus:not([readonly]),
    input[type=number]:not(.browser-default):focus:not([readonly]),
    textarea.materialize-textarea:focus:not([readonly]) {
        border-bottom: 1px solid rgb(80, 35, 20);
        box-shadow: 0 1px 0 0 rgb(80, 35, 20);
        color: rgb(80, 35, 20);
    }

    .btn {
        border-radius: .5em;
        text-transform: none;
    }

    .btn, .btn:hover {
        background-color: rgb(80, 35, 20);
    }

    .wa-logo {
        height: 3em;
        float: right;
    }

    .roll-in-left {
        -webkit-animation: roll-in-left 0.6s ease-out both;
                animation: roll-in-left 0.6s ease-out both;
    }
    
    /* General Styles */
    .p-0 {
        padding: 0 !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .mb-1 {
        margin-bottom: 1em !important;
    }

    .mb-2 {
        margin-bottom: 2em !important;
    }

    .mb-3 {
        margin-bottom: 3em !important;
    }

    .mb-4 {
        margin-bottom: 4em !important;
    }

    .mb-5 {
        margin-bottom: 5em !important;
    }

    .mt-5 {
        margin-top: 5em !important;
    }

    /* ----------------------------------------------
    * Generated by Animista on 2021-2-24 15:9:33
    * Licensed under FreeBSD License.
    * See http://animista.net/license for more info. 
    * w: http://animista.net, t: @cssanimista
    * ---------------------------------------------- */

    /**
    * ----------------------------------------
    * animation roll-in-left
    * ----------------------------------------
    */
    @-webkit-keyframes roll-in-left {
    0% {
        -webkit-transform: translateX(-800px) rotate(-540deg);
                transform: translateX(-800px) rotate(-540deg);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateX(0) rotate(0deg);
                transform: translateX(0) rotate(0deg);
        opacity: 1;
    }
    }
    @keyframes roll-in-left {
    0% {
        -webkit-transform: translateX(-800px) rotate(-540deg);
                transform: translateX(-800px) rotate(-540deg);
        opacity: 0;
    }
    100% {
        -webkit-transform: translateX(0) rotate(0deg);
                transform: translateX(0) rotate(0deg);
        opacity: 1;
    }
    }

    </style>

</head>
<body>
