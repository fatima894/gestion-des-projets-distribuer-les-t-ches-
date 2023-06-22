@extends('layouts.app')
@section('content')
<head>
  <meta charset="utf-8">
  <title>gebs-online</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="gebs,tallygenicom,printronix,PHARMA@SYS,ASSA@PHAR,Gebs Pharma,les imprimantes IBM,imprimantes matricielles" name="keywords">
  <meta content="gebs maroc,tallygenicom maroc,printronix maroc,PHARMA@SYS gebs,ASSA@PHAR gebs,Gebs Pharma gebs,logiciel grossisterie pharmaceutique,logiciel de gestion de pharmacie,logiciel de distribution grossisterie parapharmacie" name="description">
  <meta name="rebots" content="index,follow">

  <!-- Favicons -->
  <link href="img/logo2.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="style2.css" rel="stylesheet">
<style>
   
        body {
        background: #fff;
        color: #666666;
        font-family: "Open Sans", sans-serif;
        overflow-x: hidden;
        }

    a {
    color: #1dc8cd;
    transition: 0.5s;
    }

    a:hover, a:active, a:focus {
    color: #428fe4;
    outline: none;
    text-decoration: none;
    }

    p {
    padding: 0;
    margin: 0 0 30px 0;
    }

    h1, h2, h3, h4, h5, h6 {
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    margin: 0 0 20px 0;
    padding: 0;
    }

    /* Back to top button */
    .back-to-top {
    position: fixed;
    display: none;
    background: linear-gradient(45deg, #0062cc, #1dc8cd);
    color: #fff;
    padding: 2px 20px 8px 20px;
    font-size: 16px;
    border-radius: 4px 4px 0 0;
    right: 15px;
    bottom: 0;
    transition: none;
    }

    .back-to-top:focus {
    background: linear-gradient(45deg, #0062cc, #1dc8cd);
    color: #fff;
    outline: none;
    }

    .back-to-top:hover {
    background: #1dc8cd;
    color: #fff;
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
    padding: 30px 0;
    height: 77px;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
    background-color: #4d88ff;
    }

    #header #logo {
    width: ;
    }

    #header #logo h1 {
    font-size: 36px;
    margin: -4px 0 0 0;
    padding: 0;
    line-height: 1;
    display: inline-block;
    font-family: "Montserrat", sans-serif;
    font-weight: 300;
    letter-spacing: 3px;
    text-transform: uppercase;
    
    }

    #header #logo h1 a, #header #logo h1 a:hover {
    color: #fff;
    }

    #header #logo img {
    padding: 0%;
    margin: 0;
    }

    @media (max-width: 768px) {
    #header #logo h1 {
        font-size: 28px;
        margin-top: 0;
    }
    #header #logo img {
        max-height:50px;
    }
    }

    #header.header-fixed {
    background: linear-gradient(45deg, #0062cc, #1dc8cd);
    padding: 10px 0;
    height: 72px;
    transition: all 0.5s;
    }

    /*--------------------------------------------------------------
    # Intro Section
    --------------------------------------------------------------*/
    #intro {
    width: 100%;
    height: 100vh;
    background: linear-gradient(45deg,  #ccddff, #1dc8cd), url("../img/intro-bg.jpg") center top no-repeat;
    background-size: cover;
    position: relative;
    }

    @media (min-width: 1024px) {
    #intro {
        background-attachment: fixed;
    }
    }

    #intro .intro-text {
    position: absolute;
    left: 0;
    top: 60px;
    right: 0;
    height: calc(50% - 60px);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    }

    #intro h2 {
    margin: 30px 0 10px 0;
    padding: 0 15px;
    font-size: 48px;
    font-weight: 400;
    line-height: 56px;
    color: #fff;
    }

    @media (max-width: 768px) {
    #intro h2 {
        font-size: 28px;
        line-height: 36px;
    }
    }

    #intro p {
    color: #fff;
    margin-bottom: 20px;
    padding: 0 15px;
    font-size: 24px;
    }

    @media (max-width: 768px) {
    #intro p {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 20px;
    }
    }

    #intro .btn-get-started {
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 28px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    border: 2px solid #fff;
    color: #fff;
    }

    #intro .btn-get-started:hover {
    color: #1dc8cd;
    background: #fff;
    }

    #intro .product-screens {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    text-align: center;
    width: 100%;
    height: 50%;
    }

    #intro .product-screens img {
    box-shadow: 0px -2px 19px 4px rgba(0, 0, 0, 0.29);
    }

    #intro .product-screens .product-screen-1 {
    position: absolute;
    z-index: 30;
    left: calc(50% + 54px);
    bottom: 0;
    top: 20px;
    }

    #intro .product-screens .product-screen-2 {
    position: absolute;
    z-index: 20;
    left: calc(50% - 154px);
    bottom: 0;
    top: 90px;
    }

    #intro .product-screens .product-screen-3 {
    position: absolute;
    z-index: 10;
    left: calc(50% - 374px);
    bottom: 0;
    top: 150px;
    }

    @media (max-width: 767px) {
    #intro .product-screens .product-screen-1 {
        position: static;
        padding-top: 30px;
    }
    #intro .product-screens .product-screen-2, #intro .product-screens .product-screen-3 {
        display: none;
    }
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /* Nav Menu Essentials */
    .nav-menu, .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
    }

    .nav-menu ul {
    position: absolute;
    display: none;
    top: 100%;
    left: 0;
    z-index: 99;
    }

    .nav-menu li {
    position: relative;
    white-space: nowrap;
    }

    .nav-menu > li {
    float: left;
    }

    .nav-menu li:hover > ul,
    .nav-menu li.sfHover > ul {
    display: block;
    }

    .nav-menu ul ul {
    top: 0;
    left: 70%;
    }

    .nav-menu ul li {
    min-width: 180px;
    }

    /* Nav Menu Arrows */
    .sf-arrows .sf-with-ul {
    padding-right: 30px;
    }

    .sf-arrows .sf-with-ul:after {
    content: "\f107";
    position: absolute;
    right: 15px;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    }

    .sf-arrows ul .sf-with-ul:after {
    content: "\f105";
    }

    /* Nav Meu Container */
    #nav-menu-container {
    float: right;
    margin: 0;
    }

    @media (max-width: 768px) {
    #nav-menu-container {
        display: none;
    }
    }

    /* Nav Meu Styling */
    .nav-menu a {
    padding: 0 8px 10px 8px;
    text-decoration: none;
    display: inline-block;
    color: #fff;
    font-family: "Montserrat", sans-serif;
    font-weight: 400;
    font-size: 16px;
    outline: none;
    }

    .nav-menu > li {
    margin-left: 5px;
    }

    .nav-menu ul {
    margin: 4px 0 0 0;
    padding: 10px;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    background: #fff;
    }

    .nav-menu ul li {
    transition: 0.3s;
    }

    .nav-menu ul li a {
    padding: 10px;
    color: #333;
    transition: 0.3s;
    display: block;
    font-size: 13px;
    text-transform: none;
    }

    .nav-menu ul li:hover > a {
    color: #1dc8cd;
    }

    .nav-menu ul ul {
    margin: 0;
    }

    /* Mobile Nav Toggle */
    #mobile-nav-toggle {
    position: fixed;
    right: 0;
    top: 0;
    z-index: 999;
    margin: 20px 20px 0 0;
    border: 0;
    background: none;
    font-size: 24px;
    display: none;
    transition: all 0.4s;
    outline: none;
    cursor: pointer;
    }

    #mobile-nav-toggle i {
    color: #fff;
    }

    @media (max-width: 768px) {
    #mobile-nav-toggle {
        display: inline;
    }
    }

    /* Mobile Nav Styling */
    #mobile-nav {
    position: fixed;
    top: 0;
    padding-top: 18px;
    bottom: 0;
    z-index: 998;
    background: rgba(52, 59, 64, 0.9);
    left: -260px;
    width: 260px;
    overflow-y: auto;
    transition: 0.4s;
    }

    #mobile-nav ul {
    padding: 0;
    margin: 0;
    list-style: none;
    }

    #mobile-nav ul li {
    position: relative;
    }

    #mobile-nav ul li a {
    color: #fff;
    font-size: 16px;
    overflow: hidden;
    padding: 10px 22px 10px 15px;
    position: relative;
    text-decoration: none;
    width: 100%;
    display: block;
    outline: none;
    }

    #mobile-nav ul li a:hover {
    color: #fff;
    }

    #mobile-nav ul li li {
    padding-left: 30px;
    }

    #mobile-nav ul .menu-has-children i {
    position: absolute;
    right: 0;
    z-index: 99;
    padding: 15px;
    cursor: pointer;
    color: #fff;
    }

    #mobile-nav ul .menu-has-children i.fa-chevron-up {
    color: #1dc8cd;
    }

    #mobile-nav ul .menu-item-active {
    color: #1dc8cd;
    }

    #mobile-body-overly {
    width: 100%;
    height: 100%;
    z-index: 997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(52, 59, 64, 0.9);
    display: none;
    }

    /* Mobile Nav body classes */
    body.mobile-nav-active {
    overflow: hidden;
    }

    body.mobile-nav-active #mobile-nav {
    left: 0;
    }

    body.mobile-nav-active #mobile-nav-toggle {
    color: #fff;
    }

    /*--------------------------------------------------------------
    # Sections
    --------------------------------------------------------------*/
    /* Sections Header
    --------------------------------*/
    .section-header .section-title {
    font-size: 32px;
    color: #111;
    text-align: center;
    font-weight: 400;
    }

    .section-header .section-description {
    text-align: center;
    padding-bottom: 40px;
    color: #777;
    font-style: italic;
    }

    .section-header .section-divider {
    display: block;
    width: 60px;
    height: 3px;
    background: #1dc8cd;
    background: linear-gradient(0deg, #1dc8cd 0%, #55fabe 100%);
    margin: 0 auto;
    margin-bottom: 20px;
    }

    /* Section with background
    --------------------------------*/
    .section-bg {
    background: #eff5f5;
    }

    /* About Us Section
    --------------------------------*/
    #about {
    padding: 60px 0;
    overflow: hidden;
    }

    #about .about-img {
    height: 510px;
    overflow: hidden;
    }

    #about .about-img img {
    margin-left: -15px;
    max-width: 100%;
    }

    @media (max-width: 768px) {
    #about .about-img {
        height: auto;
    }
    #about .about-img img {
        margin-left: 0;
        padding-bottom: 30px;
    }
    }

    #about .content .h2 {
    color: #333;
    font-weight: 300;
    font-size: 24px;
    }

    #about .content h3 {
    color: #777;
    font-weight: 300;
    font-size: 18px;
    line-height: 26px;
    font-style: italic;
    }

    #about .content p {
    line-height: 26px;
    }

    #about .content p:last-child {
    margin-bottom: 0;
    }

    #about .content i {
    font-size: 20px;
    padding-right: 4px;
    color: #1dc8cd;
    }

    #about .content ul {
    list-style: none;
    padding: 0;
    }

    #about .content ul li {
    padding-bottom: 10px;
    }

    /* Product Featuress Section
    --------------------------------*/
    #features {
    background: #fff;
    padding: 60px 0 0 0;
    overflow: hidden;
    }

    #features .features-img {
    text-align: center;
    padding-top: 20px;
    }

    @media (min-width: 769px) {
    #features .features-img {
        padding-top: 120px;
        margin-top: -200px;
    }
    }

    #features .features-img img {
    max-width: 100%;
    }

    #features .box {
    margin-bottom: 15px;
    text-align: center;
    }

    #features .icon {
    margin-bottom: 10px;
    }

    #features .icon i {
    color: #666666;
    font-size: 40px;
    transition: 0.5s;
    }

    #features .icon i:before {
    background: #1dc8cd;
    background: linear-gradient(45deg, #1dc8cd 0%, #55fabe 100%);
    background-clip: border-box;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }

    #features .title {
    font-weight: 300;
    margin-bottom: 15px;
    font-size: 22px;
    }

    #features .title a {
    color: #111;
    }

    #features .description {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 10px;
    }

    #features .section-description {
    padding-bottom: 10px;
    }

    /* Product Advanced Featuress Section
    --------------------------------*/
    #advanced-features {
    overflow: hidden;
    }

    #advanced-features .features-row {
    padding: 60px 0 30px 0;
    }

    #advanced-features h2 {
    font-size: 26px;
    font-weight: 700;
    color: #000;
    }

    #advanced-features h3 {
    font-size: 16px;
    line-height: 24px;
    font-weight: 400;
    font-style: italic;
    color: #999;
    }

    #advanced-features p {
    line-height: 24px;
    color: #777;
    margin-bottom: 30px;
    }

    #advanced-features i {
    color: #666666;
    font-size: 64px;
    transition: 0.5s;
    float: left;
    padding: 0 15px 0px 0;
    line-height: 1;
    }

    #advanced-features i:before {
    background: #1dc8cd;
    background: linear-gradient(45deg, #1dc8cd 0%, #55fabe 100%);
    background-clip: border-box;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }

    #advanced-features .advanced-feature-img-right {
    max-width: 100%;
    float: right;
    padding: 0 0 30px 30px;
    }

    #advanced-features .advanced-feature-img-left {
    max-width: 100%;
    float: left;
    padding: 0 30px 30px 0;
    }

    @media (max-width: 768px) {
    #advanced-features .advanced-feature-img-right, #advanced-features .advanced-feature-img-left {
        max-width: 50%;
    }
    }

    @media (max-width: 767px) {
    #advanced-features .advanced-feature-img-right, #advanced-features .advanced-feature-img-left {
        max-width: 100%;
        float: none;
        padding: 0 0 30px 0;
    }
    }

    /* Call To Action Section
    --------------------------------*/
    #call-to-action {
    overflow: hidden;
    background: linear-gradient(rgba(0, 138, 230, 0.65), rgba(0, 1, 0, 0.2)), url(../img/call-to-action-bg.jpg) fixed center center;
    background-size: cover;
    padding: 80px 0;
    text-align: center;
    }

    #call-to-action .cta-title {
    color: #fff;
    font-size: 30px;
    font-weight: 700;
    }

    #call-to-action .cta-text {
    color: #fff;
    
    }

    @media (min-width: 769px) {
    #call-to-action .cta-btn-container {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    }

    #call-to-action .cta-btn {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 30px;
    border-radius: 25px;
    transition: background 0.5s;
    margin: 10px;
    border: 2px solid #fff;
    color: #fff;
    }

    #call-to-action .cta-btn:hover {
    background: #1dc8cd;
    border: 2px solid #1dc8cd;
    }

    /* More Features Section
    --------------------------------*/
    #more-features {
    padding: 60px 0 60px 0;
    overflow: hidden;
    }

    #more-features .box {
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
    background: #fff;
    transition: 0.4s;
    }

    #more-features .icon {
    float: left;
    }

    #more-features .icon i {
    color: #666666;
    font-size: 80px;
    transition: 0.5s;
    line-height: 0;
    }

    #more-features .icon i:before {
    background: #1dc8cd;
    background: linear-gradient(45deg, #1dc8cd 0%, #55fabe 100%);
    background-clip: border-box;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    }

    #more-features h4 {
    margin-left: 100px;
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
    }

    #more-features h4 a {
    color: #111;
    }

    #more-features p {
    font-size: 14px;
    margin-left: 100px;
    margin-bottom: 0;
    line-height: 24px;
    }

    @media (max-width: 767px) {
    #more-features .box {
        margin-bottom: 20px;
    }
    #more-features .icon {
        float: none;
        text-align: center;
        padding-bottom: 15px;
    }
    #more-features h4, #more-features p {
        margin-left: 0;
        text-align: center;
    }
    }

    /* Clients Section
    --------------------------------*/
    #clients {
    padding: 30px 0;
    background: #fff;
    overflow: hidden;
    }

    #clients img {
    max-width: 100%;
    opacity: 0.5;
    transition: 0.3s;
    padding: 15px 0;
    }

    #clients img:hover {
    opacity: 1;
    }

    /* Pricing Section
    --------------------------------*/
    #pricing {
    padding: 60px 0 60px 0;
    overflow: hidden;
    }

    #pricing .box {
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
    background: #fff;
    text-align: center;
    }

    #pricing h3 {
    font-weight: 400;
    margin-bottom: 15px;
    font-size: 28px;
    }

    #pricing h4 {
    font-size: 46px;
    color: #1dc8cd;
    font-weight: 300;
    }

    #pricing h4 sup {
    font-size: 20px;
    top: -20px;
    }

    #pricing h4 span {
    color: #bababa;
    font-size: 20px;
    }

    #pricing ul {
    padding: 0;
    list-style: none;
    color: #999;
    text-align: left;
    line-height: 20px;
    }

    #pricing ul li {
    padding-bottom: 12px;
    }

    #pricing ul i {
    color: #1dc8cd;
    font-size: 18px;
    padding-right: 4px;
    }

    #pricing .get-started-btn {
    background: #515e61;
    display: inline-block;
    padding: 6px 30px;
    border-radius: 20px;
    color: #fff;
    transition: none;
    font-size: 14px;
    font-weight: 400;
    font-family: "Montserrat", sans-serif;
    }

    #pricing .featured {
    border: 2px solid #1dc8cd;
    }

    #pricing .featured .get-started-btn {
    background: linear-gradient(45deg, #1de099, #1dc8cd);
    }

    /* Frequently Asked Questions Section
    --------------------------------*/
    #faq {
    padding: 60px 0;
    overflow: hidden;
    }

    #faq #faq-list {
    padding: 0;
    list-style: none;
    }

    #faq #faq-list li {
    border-bottom: 1px solid #ddd;
    }

    #faq #faq-list a {
    padding: 18px 0;
    display: block;
    position: relative;
    font-family: "Montserrat", sans-serif;
    font-size: 22px;
    line-height: 1;
    font-weight: 300;
    padding-right: 20px;
    }

    #faq #faq-list i {
    font-size: 24px;
    position: absolute;
    right: 0;
    top: 16px;
    }

    #faq #faq-list p {
    margin-bottom: 20px;
    }

    @media (max-width: 768px) {
    #faq #faq-list a {
        font-size: 18px;
    }
    #faq #faq-list i {
        top: 13px;
    }
    }

    #faq #faq-list a.collapse {
    color: #1dc8cd;
    }

    #faq #faq-list a.collapsed {
    color: #000;
    }

    #faq #faq-list a.collapsed i::before {
    content: "\f2c7" !important;
    }

    /* Our Team Section
    --------------------------------*/
    #team {
    padding: 60px 0;
    overflow: hidden;
    }

    #team .member {
    text-align: center;
    margin-bottom: 20px;
    }

    #team .member .pic {
    margin-bottom: 15px;
    overflow: hidden;
    height: 260px;
    }

    #team .member .pic img {
    max-width: 100%;
    }

    #team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    }

    #team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
    }

    #team .member .social {
    margin-top: 15px;
    }

    #team .member .social a {
    color: #b3b3b3;
    }

    #team .member .social a:hover {
    color: #1dc8cd;
    }

    #team .member .social i {
    font-size: 18px;
    margin: 0 2px;
    }

    /* Gallery Section
    --------------------------------*/
    #gallery {
    background: #fff;
    padding: 60px 0 0 0;
    overflow: hidden;
    }

    #gallery .container-fluid {
    padding: 0px;
    }

    #gallery .gallery-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 1;
    -webkit-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
    }

    #gallery .gallery-item {
    overflow: hidden;
    position: relative;
    padding: 0;
    vertical-align: middle;
    text-align: center;
    }

    #gallery .gallery-item img {
    -webkit-transition: all ease-in-out 0.4s;
    transition: all ease-in-out 0.4s;
    width: 100%;
    }

    #gallery .gallery-item:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    }

    #gallery .gallery-item:hover .gallery-overlay {
    opacity: 1;
    background: rgba(0, 0, 0, 0.7);
    }

    /* Contact Section
    --------------------------------*/
    #contact {
    box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
    padding: 60px 0;
    overflow: hidden;
    }

    #contact .contact-about h3 {
    font-size: 36px;
    margin: 0 0 10px 0;
    padding: 0;
    line-height: 1;
    font-family: "Montserrat", sans-serif;
    font-weight: 300;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #0080ff;
    }

    #contact .contact-about p {
    font-size: 14px;
    line-height: 24px;
    font-family: "Montserrat", sans-serif;
    color: #888;
    }

    #contact .social-links {
    padding-bottom: 22px;
    }

    #contact .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #fff;
    color: #33adff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    border: 1px solid #1dc8cd;
    }
    #par{
    font-size: 22px;
    font-family: Trebuchet MS
    }

    #contact .social-links a:hover {
    background: #0062cc;
    color: #fff;
    }

    #contact .info {
    color: #333333;
    }

    #contact .info i {
    font-size: 32px;
    color:  #0099ff;
    float: left;
    line-height: 1;
    }

    #contact .info p {
    padding: 0 0 10px 42px;
    line-height: 28px;
    font-size: 14px;
    }

    #contact .form #sendmessage {
    color: #1dc8cd;
    border: 1px solid #1dc8cd;
    display: none;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
    }

    #contact .form #errormessage {
    color: red;
    display: none;
    border: 1px solid green;
    text-align: center;
    padding: 15px;
    font-weight: 600;
    margin-bottom: 15px;
    }

    #contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
    display: block;
    }

    #contact .form .validation {
    color: red;
    display: none;
    margin: 0 0 20px;
    font-weight: 400;
    font-size: 13px;
    }

    #contact .form input, #contact .form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    }

    #contact .form button[type="submit"] {
    background: linear-gradient(45deg, #0062cc, #1dc8cd);
    border: 0;
    border-radius: 20px;
    padding: 8px 30px;
    color: #fff;
    }

    #contact .form button[type="submit"]:hover {
    cursor: pointer;
    }

    /*--------------------------------------------------------------
    # Footer
    --------------------------------------------------------------*/
    #footer {
    background: #fff;
    box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
    padding: 30px 0;
    color: #333;
    font-size: 14px;
    }

    #footer .credits {
    font-size: 13px;
    color: #888;
    }

    #footer .footer-links a {
    color: #666;
    padding-left: 15px;
    }

    #footer .footer-links a:first-child {
    padding-left: 0;
    }

    #footer .footer-links a:hover {
    color: #1dc8cd;
    }
    </style>
    <style type="text/css">
        .text-primary{
    color:#f8f9fa!important;
    }
    .section-title{
    margin-top: -3%;
    }
    .section-header{
        margin-top: -0.5%;

    }



    </style>
    <style>.osSwitch{position:relative;display:inline-block;width:34px;height:15.3px}.osSwitch input{opacity:0;width:0;height:0}.osSlider{position:absolute;top:0;left:0;right:0;bottom:0;border-radius:34px;background-color:#93a0b5;transition:0.4s}.osSlider:before{position:absolute;content:'';height:13px;width:13px;left:2px;bottom:1px;border-radius:50%;background-color:white;transition:0.4s}input:checked+.sliderGreen{background-color:#04d289}input:checked+.sliderRed{background-color:#ff3b30}input:not(:checked)+.defaultGreen{background-color:#04d289}input:checked+.osSlider:before{transform:translateX(17px)}
    </style><style>
        @font-face {
        font-family: 'SegoeUI_online_security'; 
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui.woff);
        }

        @font-face {
        font-family: 'SegoeUI_bold_online_security'; 
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui-bold.woff);
        }
    </style><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style>
</head>
<body>

  
  

  
  <section id="intro">
    <div class="intro-text">
      <h2>Global Electronic Business Solutions</h2>
      <p>Createur de Solutions Createur de Valeurs</p>
      <a href="#about" class="btn-get-started scrollto">Qui sommes-nous ?</a>
      <a ><img src="img/slide8.png" alt="" width="50%"></a>
    </div>
   
  </section>

  <main id="main">
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Présentation de GEBS</h3>
          <span class="section-divider"></span>
          <p class="section-description text-center">
            GEBS est une société marocaine créée en 2010 par des ingénieurs étudies en Allemagne avec une large expérience dans le domaine NTIC. GEBS développe des excellents logiciels de gestion pour le domaine pharmaceutique, en autre GEBS est distributeur certifie des imprimantes matricielles PRINTRONIX&amp;TallyGenicom au Maroc, qui remplacent les imprimantes IBM. Nous commercialisons des produits informatiques de déférentes marques renommés. Nous proposons aussi des formations professionnelles.
            Votre priorité est la gestion de votre activité. Notre priorité est de vous fournir des solutions et des supports sur lesquels vous pouvez compter, quel que soit votre environnement d'activité.
          </p>
        </div>
 

          <div class="text-center" >
            
            <h4>Notre Mission:</h4>
            <ul>
            <li><i class="ion-android-checkmark-circle"></i> Accompagner les entreprises dans leurs développements digitals.</li>
          </ul>
            <h4>Notre Devis</h4>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ecouter et adapter les solutions au besoin personnalisé.</li>
              <li><i class="ion-android-checkmark-circle"></i> Accompagnement, développement durable et maitrise de l’activité.</li>
            </ul>
            
            
                <h4 class="text-info">Le Digital au service de l’entreprise:</h4>
            <p>
              Les systèmes d'informations ne sont plus considérés comme outil de support, mais ils sont devenu aujourd’hui un choix stratégique pour les entreprises modernes afin de réaliser ces objectifs stratégiques.
            </p>
            <p>
              </p><h4 class="text-success">Objectifs:</h4>
            <p></p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Performance , Productivité, Compétitivité , Croissance </li>
              
            </ul>
          </div>
        

      </div>
    </section>

   
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Nos domaines d'activité</h3>
          <span class="section-divider"></span>
          <p class="section-description"></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">

            <h4 class="title"><a href="GEBS-logiciels.html">Développement Informatique</a></h4>
              <p class="description">Les logiciels développés par GEBS sont synonyme de simplicité, contrôle, fiabilité, efficacité et transparence. Une combinaison parfaite des compétences informatiques et maîtrises des processus de métier</p><br>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">

            <h4 class="title"><a href="http://www.africprintronix.com/" target="_blank">Materiels informatiques</a></h4>
              <p class="description">GEBS est distributeur certifie des imprimantes matricielles PRINTRONIX&amp;TallyGenicom au Maroc, qui remplacent les imprimantes IBM6500 et IBM6400. Nous commercialisons des produits de déférentes marques renommés. </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">

            <h4 class="title"><a href="Geo-Localisation.html">Géo-Localisation</a></h4>
              <p class="description">Géo-localisation de véhicules fait l’un des axes de notre activité. Avec notre Solution GEBS-GeLo nous vous proposons un système intégré pour la géo-localisation de vos véhicules et la gestion efficace de votre flotte....</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">

            <h4 class="title"><a href="" target="_blank">Consulting et Coaching</a></h4>
              <p class="description">Management, Gestion, Organisation, Diagnostic, Etudes de marché, Plan d’affaires. <br>
Formation professionnelle.</p><br>
            </div>
          </div>

        </div>
      </div>
    </section>
    
    </section>

  </main>



  <!-- JavaScript Libraries -->

  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


@endsection
