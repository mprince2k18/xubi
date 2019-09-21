<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> @yield('title') </title>



    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!-- signatra-font -->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/signatra-font.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('xubisoft/assets/images/xubi/cropped-download-32x32.jpg') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/rev-settings.css') }}">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/plugins.css') }}" />
    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/style.css') }}">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset('xubisoft/assets/css/responsive.css') }}" />




  </head>

<style>

.nav-menu li.active>a{
  color: #ecf0f1 !important;
  background-color: #00AEEF;
}
.nav-menu li a:hover{
  background-color: #00AEEF;
  color: #ecf0f1 !important;

}


.xs-header.header-style4 .xs-menus .nav-menu>li>a{
  padding: 15px 15px !important;
  border-radius: 10px;
  }

    /*PRELOADING------------ */

    #global-loader {
        position:fixed;
        z-index:50000;
        background: url('https://static.wixstatic.com/media/a9c507_e7dfa5241a674cd88e4f79eea3ec1013~mv2.gif') no-repeat 50% 50% rgba(255, 255, 255);
        left:0;
        top:0;
        right:0;
        bottom:0;
        margin:0 auto
    }

.header-transparent{
  position: fixed;
}

.case-details-banner{
  margin-top: 83px;
}

/* scroll bar */

body::-webkit-scrollbar {
    width: 0.7em;
}

body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

body::-webkit-scrollbar-thumb {
background-image: linear-gradient(to top, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%);
  outline: 1px solid slategrey;
  border-radius: 15px;
}

/* scroll bar end */
.main-menu{
/* background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); */
background-color: white;
border-radius: 0 0 8px 8px;
}


.xs-footer-section{
  background-image: url({{ asset('xubisoft/assets/images/footer-bg.jpg') }});
  background-repeat:no-repeat;
  background-size: cover;

}

.xs-footer-section .footer-top-area{
  background-color: rgba(0,0,0,0.8);
}

.xs-footer-section.footer-style3 .footer-bottom-area{
  background-color: #2d3436;
}






.start-header {
	opacity: 1;
	transform: translateY(0);
	padding: 10px 0;
	box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.start-header.scroll-on {
	box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
	padding: 5px 0;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.start-header.scroll-on .navbar-brand img{
	height: 28px;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navigation-wrap{
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 1000;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navbar{
	padding: 0;
}
.navbar-brand img{
	height: 52px;
	width: auto;
	display: block;
	-webkit-transition : all 0.3s ease-out;
	transition : all 0.3s ease-out;
}
.navbar-toggler {
	float: right;
	border: none;
	padding-right: 0;
}
.navbar-toggler:active,
.navbar-toggler:focus {
	outline: none;
}
.navbar-light .navbar-toggler-icon {
	width: 24px;
	height: 17px;
	background-image: none;
	position: relative;
	border-bottom: 1px solid #000;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after,
.navbar-light .navbar-toggler-icon:before{
	width: 24px;
	position: absolute;
	height: 1px;
	background-color: #000;
	top: 0;
	left: 0;
	content: '';
	z-index: 2;
    transition: all 300ms linear;
}
.navbar-light .navbar-toggler-icon:after{
	top: 8px;
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
	transform: rotate(45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
	transform: translateY(8px) rotate(-45deg);
}
.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	border-color: transparent;
}
.nav-link{
	color: #212121 !important;
	font-weight: 500;
    transition: all 200ms linear;
}
.nav-item:hover .nav-link{
	color: #8167a9 !important;
}
.nav-item.active .nav-link{
	color: #777 !important;
}
.nav-link {
	position: relative;
	padding: 5px 0 !important;
	display: inline-block;
}
.nav-item:after{
	position: absolute;
	bottom: -5px;
	left: 0;
	width: 100%;
	height: 2px;
	content: '';
	background-color: #8167a9;
	opacity: 0;
    transition: all 200ms linear;
}
.nav-item:hover:after{
	bottom: 0;
	opacity: 1;
}
.nav-item.active:hover:after{
	opacity: 0;
}
.nav-item{
	position: relative;
    transition: all 200ms linear;
}

/* #Primary style
================================================== */

.bg-light {
	background-color: #fff !important;
    transition: all 200ms linear;
}
.section {
    position: relative;
	width: 100%;
	display: block;
}
.full-height {
    height: 100vh;
}
.over-hide {
    overflow: hidden;
}
.absolute-center {
	position: absolute;
	top: 50%;
	left: 0;
	width: 100%;
  margin-top: 40px;
	transform: translateY(-50%);
	z-index: 20;
}
h1{
	font-size: 48px;
	line-height: 1.2;
	font-weight: 700;
	color: #212112;
	text-align: center;
}
p{
	text-align: center;
	margin: 0;
	padding-top: 10px;
	opacity: 1;
	transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1700ms;
}
body.hero-anime p{
	opacity: 0;
	transform: translateY(40px);
    transition-delay: 1700ms;
}
h1 span{
	display: inline-block;
    transition: all 300ms linear;
	opacity: 1;
	transform: translate(0);
}
body.hero-anime h1 span:nth-child(1){
	opacity: 0;
	transform: translateY(-20px);
}
body.hero-anime h1 span:nth-child(2){
	opacity: 0;
	transform: translateY(-30px);
}
body.hero-anime h1 span:nth-child(3){
	opacity: 0;
	transform: translateY(-50px);
}
body.hero-anime h1 span:nth-child(4){
	opacity: 0;
	transform: translateY(-10px);
}
body.hero-anime h1 span:nth-child(5){
	opacity: 0;
	transform: translateY(-50px);
}
body.hero-anime h1 span:nth-child(6){
	opacity: 0;
	transform: translateY(-20px);
}
body.hero-anime h1 span:nth-child(7){
	opacity: 0;
	transform: translateY(-40px);
}
body.hero-anime h1 span:nth-child(8){
	opacity: 0;
	transform: translateY(-10px);
}
body.hero-anime h1 span:nth-child(9){
	opacity: 0;
	transform: translateY(-30px);
}
body.hero-anime h1 span:nth-child(10){
	opacity: 0;
	transform: translateY(-20px);
}
h1 span:nth-child(1){
    transition-delay: 1000ms;
}
h1 span:nth-child(2){
    transition-delay: 700ms;
}
h1 span:nth-child(3){
    transition-delay: 900ms;
}
h1 span:nth-child(4){
    transition-delay: 800ms;
}
h1 span:nth-child(5){
    transition-delay: 1000ms;
}
h1 span:nth-child(6){
    transition-delay: 700ms;
}
h1 span:nth-child(7){
    transition-delay: 900ms;
}
h1 span:nth-child(8){
    transition-delay: 800ms;
}
h1 span:nth-child(9){
    transition-delay: 600ms;
}
h1 span:nth-child(10){
    transition-delay: 700ms;
}
body.hero-anime h1 span:nth-child(11){
	opacity: 0;
	transform: translateY(30px);
}
body.hero-anime h1 span:nth-child(12){
	opacity: 0;
	transform: translateY(50px);
}
body.hero-anime h1 span:nth-child(13){
	opacity: 0;
	transform: translateY(20px);
}
body.hero-anime h1 span:nth-child(14){
	opacity: 0;
	transform: translateY(30px);
}
body.hero-anime h1 span:nth-child(15){
	opacity: 0;
	transform: translateY(50px);
}
h1 span:nth-child(11){
    transition-delay: 1300ms;
}
h1 span:nth-child(12){
    transition-delay: 1500ms;
}
h1 span:nth-child(13){
    transition-delay: 1400ms;
}
h1 span:nth-child(14){
    transition-delay: 1200ms;
}
h1 span:nth-child(15){
    transition-delay: 1450ms;
}
#switch,
#circle {
	cursor: pointer;
	-webkit-transition: all 300ms linear;
	transition: all 300ms linear;
}
#switch {
	width: 60px;
	height: 8px;
	border: 2px solid #8167a9;
	border-radius: 27px;
	background: #000;
	position: relative;
	display: block;
	margin: 0 auto;
	text-align: center;
	opacity: 1;
	transform: translate(0);
    transition: all 300ms linear;
    transition-delay: 1900ms;
}
body.hero-anime #switch{
	opacity: 0;
	transform: translateY(40px);
    transition-delay: 1900ms;
}
#circle {
	position: absolute;
	top: -11px;
	left: -13px;
	width: 26px;
	height: 26px;
	border-radius: 50%;
	background: #000;
}
.switched {
	border-color: #000 !important;
	background: #8167a9 !important;
}
.switched #circle {
	left: 43px;
	box-shadow: 0 4px 4px rgba(26,53,71,0.25), 0 0 0 1px rgba(26,53,71,0.07);
	background: #fff;
}
.nav-item .dropdown-menu {
    transform: translate3d(0, 10px, 0);
    visibility: hidden;
    opacity: 0;
	max-height: 0;
    display: block;
	padding: 0;
	margin: 0;
    transition: all 200ms linear;
}
.nav-item.show .dropdown-menu {
    opacity: 1;
    visibility: visible;
	max-height: 999px;
    transform: translate3d(0, 0px, 0);
}
.dropdown-menu {
	padding: 10px!important;
	margin: 0;
	font-size: 13px;
	letter-spacing: 1px;
	color: #212121;
	background-color: #fcfaff;
	border: none;
	border-radius: 3px;
	box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
    transition: all 200ms linear;
}
.dropdown-toggle::after {
	display: none;
}

.dropdown-item {
	padding: 3px 15px;
	color: #212121;
	border-radius: 2px;
    transition: all 200ms linear;
}
.dropdown-item:hover,
.dropdown-item:focus {
	color: #fff;
	background-color: rgba(129,103,169,.6);
}

body.dark{
	color: #fff;
	background-color: #1f2029;
}
body.dark h1{
	color: #fff;
}
body.dark h1 span{
    transition-delay: 0ms !important;
}
body.dark p{
	color: #fff;
    transition-delay: 0ms !important;
}
body.dark .bg-light {
	background-color: #14151a !important;
}
body.dark .start-header {
	box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.15);
}
body.dark .start-header.scroll-on {
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.15);
}
body.dark .nav-link{
	color: #fff !important;
}
body.dark .nav-item.active .nav-link{
	color: #999 !important;
}
body.dark .dropdown-menu {
	color: #fff;
	background-color: #1f2029;
	box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25);
}
body.dark .dropdown-item {
	color: #fff;
}
body.dark .navbar-light .navbar-toggler-icon {
	border-bottom: 1px solid #fff;
}
body.dark .navbar-light .navbar-toggler-icon:after,
body.dark .navbar-light .navbar-toggler-icon:before{
	background-color: #fff;
}
body.dark .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	border-color: transparent;
}



/* #Media
================================================== */

@media (max-width: 767px) {
	h1{
		font-size: 38px;
	}
	.nav-item:after{
		display: none;
	}
	.nav-item::before {
		position: absolute;
		display: block;
		top: 15px;
		left: 0;
		width: 11px;
		height: 1px;
		content: "";
		border: none;
		background-color: #000;
		vertical-align: 0;
	}
	.dropdown-toggle::after {
		position: absolute;
		display: block;
		top: 10px;
		left: -23px;
		width: 1px;
		height: 11px;
		content: "";
		border: none;
		background-color: #000;
		vertical-align: 0;
		transition: all 200ms linear;
	}
	.dropdown-toggle[aria-expanded="true"]::after{
		transform: rotate(90deg);
		opacity: 0;
	}
	.dropdown-menu {
		padding: 0 !important;
		background-color: transparent;
		box-shadow: none;
		transition: all 200ms linear;
	}
	.dropdown-toggle[aria-expanded="true"] + .dropdown-menu {
		margin-top: 10px !important;
		margin-bottom: 20px !important;
	}
	body.dark .nav-item::before {
		background-color: #fff;
	}
	body.dark .dropdown-toggle::after {
		background-color: #fff;
	}
	body.dark .dropdown-menu {
		background-color: transparent;
		box-shadow: none;
	}
}

  .dropdown-item{
    padding: 20px 15px;
    border-bottom: 1px solid #353b48;
  }


/* -------------------------------------- */
.icon {
  line-height: 2.3;
}
/* -------------------------------------- */





/*
=====
DEPENDENCES
=====
*/

/* The component will reset button browser styles */

.r-button{
  --uirButtonBackgroundColor: var(--rButtonBackgroundColor, transparent);
  --uirButtonPadding: var(--rButtonPadding, var(--rButtonPaddingTop, 0) var(--rButtonPaddingRight, 0) var(--rButtonPaddingBottom, 0) var(--rButtonPaddingLeft, 0));
  --uirButtonBorderWidth: var(--rButtonBorderWidth, 0);
  --uirButtonBorderStyle: var(--rButtonBorderStyle, solid);
  --uirButtonBorderColor: var(--rButtonBorderColor, currentColor);
  --uirButtonFontFamily: var(--rButtonFontFamily, inherit);
  --uirButtonFontSize: var(--rButtonFontSize,  inherit);
  --uirButtonColor: var(--rButtonColor);

  background-color: var(--uirButtonBackgroundColor);
  padding: var(--uirButtonPadding);

  border-width: var(--uirButtonBorderWidth);
  border-style: var(--uirButtonBorderStyle);
  border-color: var(--uirButtonBorderColor);

  cursor: pointer;

  font-family: var(--uirButtonFontFamily);
  font-size: var(--uirButtonFontSize);
}

.r-button::-moz-focus-inner,
.r-button[type="button"]::-moz-focus-inner,
.r-button[type="reset"]::-moz-focus-inner,
.r-button[type="submit"]::-moz-focus-inner {

  /* Remove the inner border and padding in Firefox. */

  border-style: none;
  padding: 0;
}

/* The component will reset browser's styles of link */

.r-link{
    --uirLinkDisplay: var(--rLinkDisplay, inline-flex);
    --uirLinkTextColor: var(--rLinkTextColor);
    --uirLinkTextDecoration: var(--rLinkTextDecoration, none);

    display: var(--uirLinkDisplay) !important;
    color: var(--uirLinkTextColor) !important;
    text-decoration: var(--uirLinkTextDecoration) !important;
}

/* The component will reset browser's styles of list */

.r-list{
    --uirListPaddingLeft: var(--rListPaddingLeft, 0);
    --uirListMarginTop: var(--rListMarginTop, 0);
    --uirListMarginBottom: var(--rListMarginBottom, 0);
    --uirListListStyle: var(--rListListStyle, none);

    padding-left: var(--uirListPaddingLeft) !important;
    margin-top: var(--uirListMarginTop) !important;
    margin-bottom: var(--uirListMarginBottom) !important;
    list-style: var(--uirListListStyle) !important;
}

/* Basic styles of the hamburger component */

.m-hamburger{
  --uiHamburgerDisplay: var(--hamburgerDisplay, inline-flex);
  --uiHamburgerWidth: var(--hamburgerWidth, 28px);
  --uiHamburgerHeight: var(--hamburgerHeight, 20px);
  --uiHamburgerThickness: var(--hamburgerThickness, 4px);
  --uiHamburgerBorderRadius: var(--hamburgerBorderRadius, 5px);
  --uiHamburgerBgColor: var(--hamburgerBgColor, currentColor);

  display: var(--uiHamburgerDisplay);
  width: var(--uiHamburgerWidth);
  height: var(--uiHamburgerHeight);

  position: relative;
  text-indent: -9999px;
}

.m-hamburger::before,
.m-hamburger::after,
.m-hamburger__label{
  width: 100%;
  height: var(--uiHamburgerThickness);
  border-radius: var(--uiHamburgerBorderRadius);
  background-color: var(--uiHamburgerBgColor);

  position: absolute;
  left: 0;
}

.m-hamburger::before,
.m-hamburger::after{
  content:"";
}

.m-hamburger::before{
  top: 0;
}

.m-hamburger::after{
  bottom: 0;
}

.m-hamburger__label{
  /* The calculation of middle hamburger button line position */

  top: calc(50% - calc(var(--uiHamburgerThickness) / 2));
}

/*
=====
MENU STYLES
=====
*/

.mobile-menu{
  --uiMenuCircleSize: var(--menuCircleSize, 100px);
  --uiMenuCircleOffset: var(--menuCircleOffset, 10px);
  --uiMenuCircleBgColor: var(--menuCircleBgColor, currentColor);

  --hamburgerWidth: var(--menuHamburgerWidth, 28px);
  --hamburgerHeight: var(--menuHamburgerHeight, 20px);
  --hamburgerBgColor: var(--menuHamburgerBgColor, #fff);

  box-sizing: border-box;
  width: 100%;

  display: flex;
  flex-direction: column;
  align-items: center;

  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 9998;
}

.menu__nav{
  box-sizing: border-box;
  width: 100%;
  height: 0;

  transition: opacity .2s ease-out;
  opacity: 0;

  display: flex;
  align-items: flex-end;
  z-index: 2;
}

.menu__list{
  width: 100%;
  max-height: 100%;
  display: none;

  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
}

.menu__toggle{
  box-sizing: border-box;
  width: var(--uiMenuCircleSize);
  height: calc(var(--uiMenuCircleSize) / 2);
  padding: 0;

  flex: none;

  position: relative;
  display: flex;
  align-items: flex-end;
  justify-content: center;
}

.menu__toggle::before{
  /*
  1. The font-size property is used to simplify calculations of the element's sizes and position
  2. The negative value for the bottom property need for hiding half of circle.
  */

  content: "";
  width: 1em;
  height: 1em;
  font-size: var(--uiMenuCircleSize); /* 1 */

  background-color: #e74c3c;
  border-radius: 50%;

  position: absolute;
  bottom: -.5em; /* 2 */
  left: calc(50% - .5em);

  will-change: width, height;
  transition: transform .25s cubic-bezier(0.04, -0.1, 0.29, 0.98),
    width .25s cubic-bezier(0.04, -0.1, 0.29, 0.98),
    height .25s cubic-bezier(0.04, -0.1, 0.29, 0.98);
}

.menu__hamburger::before{
  /* Increase of click button area   */

  content: "";
  width: 100%;
  height: 100%;

  position: absolute;
  top: 0;
  left: 0;
}

/* styles of hamburger's animation */

.m-hamburger::before,
.m-hamburger::after,
.m-hamburger__label{
  transition-timing-function: ease;
  transition-duration: .15s;
}

.m-hamburger::before,
.m-hamburger::after{
  transition-property: transform;
}

.m-hamburger__label{
  transition-property: transform, opacity;
}

/*
=====
MENU STATES
=====
*/

.menu__hamburger:focus{
  outline: none;
}

.menu_activated{
  height: 100%;
}

.menu_activated .menu__nav{
  height: 100%;
  opacity: 1;

  will-change: opacity;
  transition-duration: .2s;
  transition-delay: .3s;
}

.menu_activated .menu__toggle::before{
  width: 100vmax;
  height: 100vmax;
  transform: translate3d(-50vh, -50vh, 0) scale(5);
  transition-duration: 1s;
}

.menu_activated .menu__list{
  display: block;
}

.menu_activated .m-hamburger::before{
  top: 50%;
  transform: translate3d(0, -50%, 0) rotate(45deg);
}

.menu_activated .m-hamburger::after{
  transform: translate3d(0, -50%, 0) rotate(135deg);
  top: 50%;
}

.menu_activated .m-hamburger__label{
  transform: rotate(-45deg) translate3d(-.285em,-.3em, 0);
  opacity: 0;
}

/*
=====
SETTINGS
=====
*/

:root{
  --colorWhite: #fff;
  --colorMain: #4557bb;
  --rLinkTextColor: var(--colorMain);
  --menuCircleSize: 100px;
  --menuCircleBgColor: var(--colorMain);
  --menuHamburgerWidth: 28px;
  --menuHamburgerHeight: 20px;
  --menuHamburgerBgColor: var(--colorWhite);
}

/*
=====
DEMO
=====
*/





.page{
  max-width: 380px;
  padding: 10px;
  margin: auto;
  text-align: center;
}

.page__name{
  display: block;
  font-size: 3rem;
  font-weight: 700;
}

.page__hint{
  display: block;
  line-height: 1.45;
  margin-top: 1rem;
}

.menu__group{
  --rLinkTextColor: var(--colorWhite);

  padding: .5rem 3rem;
  font-size: 2.0rem;
  font-weight: 700;
  text-transform: uppercase;
}








</style>




<body class="hero-anime">
    <!--[if lt IE 10]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

  <!-- Loader Start-->
<div id="global-loader" ></div>
  <!-- Loader End-->

    <!-- prelaoder -->
    <!--
	 <div id="preloader">
        <div class="preloader-wrapper">
            <div class="spinner"></div>
        </div>
     </div>
-->
    <!-- END prelaoder -->
    <!-- header section -->
    <div class="navigation-wrap bg-light start-header start-style">
  		<div class="container">
  			<div class="row">
  				<div class="col-12">
  					<nav class="navbar navbar-expand-md navbar-light">

  						<a class="navbar-brand" href="{{ route('homepage') }}" target="_blank"><img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt=""></a>

  						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  							<span class="navbar-toggler-icon"></span>
  						</button>

  						<div class="collapse navbar-collapse" id="navbarSupportedContent">
  							<ul class="navbar-nav ml-auto py-4 py-md-0">
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
  									<a class="nav-link" href="{{ route('homepage') }}">HOME</a>
  								</li>
                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('services') }}">SERVICES</a>
  									<div class="dropdown-menu">
  										<a class="dropdown-item" href="{{ route('custom_software') }}">CUSTOM SOFTWARE DEVELOPMENT</a>
  										<a class="dropdown-item" href="{{ route('web_design_development') }}">WEB DESIGN & DEVELOPMENT</a>
  										<a class="dropdown-item" href="{{ route('apps_development') }}">APPS DEVELOPMENT</a>
  										<a class="dropdown-item" href="{{ route('graphics_solution') }}">GRAPHICS SOLUTION</a>
  										<a class="dropdown-item" href="{{ route('career_development') }}">CAREER DEVELOPMENT</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">DOMAIN AND HOSTING</a>
  										<a class="dropdown-item" href="{{ route('clipping_path_services') }}">CLIPPING PATH SERVICE</a>
  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('products') }}">PRODUCTS</a>
  									<div class="dropdown-menu">
  										<a class="dropdown-item" href="{{ route('custom_software') }}">ERP SOFTWARE</a>
  										<a class="dropdown-item" href="{{ route('web_design_development') }}">POS SOFTWARE</a>
  										<a class="dropdown-item" href="{{ route('apps_development') }}">HR & PAYROLL SOFTWARE</a>
  										<a class="dropdown-item" href="{{ route('graphics_solution') }}">FREIGHT FORWARDING SOFTWARE</a>
  										<a class="dropdown-item" href="{{ route('career_development') }}">ACCOUNTING & INVENTORY SOFTWARE</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">SCHOOL MANAGEMENT SOFTWARE</a>
  									</div>
  								</li>


                  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('services') }}">TRAINING</a>
  									<div class="dropdown-menu">
  										<a class="dropdown-item" href="{{ route('custom_software') }}">Web Design & Development</a>
  										<a class="dropdown-item" href="{{ route('web_design_development') }}">Graphics & Animation</a>
  										<a class="dropdown-item" href="{{ route('apps_development') }}">Android Apps Development</a>
  										<a class="dropdown-item" href="{{ route('graphics_solution') }}">NETWORKING</a>
  										<a class="dropdown-item" href="{{ route('graphics_solution') }}">ADVANCED NETWORKING</a>
  										<a class="dropdown-item" href="{{ route('career_development') }}">CCNA</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">CCNA Security Engineer</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">WordPress Customization</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">Software Development</a>
  										<a class="dropdown-item" href="{{ route('domain_hosting') }}">SEIP Training</a>
  									</div>
  								</li>


  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="{{ route('contact') }}">CONTACT CENTER</a>
  								</li>

  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<a class="nav-link" href="#">ABOUT</a>
  								</li>
  								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
  									<!-- <a class="nav-link" href="#">Contact</a> -->
                    <a href="#modal-popup-2" class="navsearch-button xs-modal-popup">
                          <i class="icon icon-search"></i>
                        </a>
  									<!-- <a class="nav-link" href="#">Contact</a> -->
  								</li>
  							</ul>
  						</div>

  					</nav>
  				</div>
  			</div>
  		</div>
  	</div>


    <!-- Mobile menu -->

    <div class="mobile-menu">
  <nav class="menu__nav">
    <ul class="r-list menu__list">
      <li class="menu__group">
        <a href="{{ route('homepage') }}" class="r-link menu__link">HOME</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('services') }}" class="r-link menu__link">SERVICES</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('products') }}" class="r-link menu__link">PRODUCTS</a>
      </li>
      <li class="menu__group">
        <a href="#" class="r-link menu__link">TRAINING</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('contact') }}" class="r-link menu__link">CONTACT CENTER</a>
      </li>
      <li class="menu__group">
        <a href="{{ route('homepage') }}" class="r-link menu__link">ABOUT</a>
      </li>

    </ul>
  </nav>
  <div class="menu__toggle">
    <button class="r-button menu__hamburger">
      <span class="m-hamburger">
        <span class="m-hamburger__label">Open menu</span>
      </span>
    </button>
  </div>
</div>

<!-- Mobile menu end -->



        <!-- search panel strart -->
        <!-- xs modal -->
        <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="xs-search-panel">
                          <form method="GET" action="{{ route('search') }}" class="xs-search-group">
                            <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                            <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End xs modal -->
        <!-- end search panel strart -->

<!-- header end -->

@yield('content')



<!-- END sidebar widget item -->
<!-- END offset cart strart -->
<!-- footer section start -->
<footer class="xs-footer-section footer-style3">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <div class="footer-logo-wraper">
                            <a href="index.html" class="footer-logo"> <img src="{{ asset('xubisoft/assets/images/xubi/xubi_logo2.png') }}" alt="footer logo"> </a>
                        </div>
                        <p>Address <a href="https://goo.gl/maps/QJyb48gb1RVkqV3Q8" target="_blank">HOUSE-19, ROAD-4, SECTOR-4, UTTARA, DHAKA-1230</a></p>
                        <p>Contact Info
                          <a href="+880258955125">+880258955125</a>
                          <a href="+8801611609372">+8801611609372</a>
                           <a href="mailto:contact@xubisoft.com">contact@xubisoft.com</a>
                           <a href="mailto:info@xubisoft.com">info@xubisoft.com</a>
                         </p>
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="xs-list">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="blog-grid-sidebar.html">News & Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="cases.html">Case</a></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">About Us</h4>
                        <ul class="xs-list">
                            <li><a href="about.html">Our Company</a></li>
                            <li><a href="about.html">Advisory Board</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Our Services</h4>
                        <ul class="xs-list">
                            <li><a href="portfolio.html">Web Design</a></li>
                            <li><a href="portfolio-masonry.html">Web Application</a></li>
                            <li><a href="portfolio.html">Android Apps</a></li>
                            <li><a href="portfolio-masonry.html">iOS Apps</a></li>
                            <li><a href="portfolio.html">Mobile Application</a></li>
                            <li><a href="portfolio-masonry.html">Web Development</a></li>
                            <li><a href="portfolio.html">Corporate Service</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="xs-list">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Legal info</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget">
                        <h4 class="widget-title">Other Links</h4>
                        <ul class="xs-list">
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Cookies</a></li>
                            <li><a href="#">Adchoies</a></li>
                        </ul>
                        <!-- .xs-list END -->
                    </div>
                    <!-- .footer-widget END -->
                </div>
            </div>
            <!-- .row END -->
        </div>
        <!-- .container END -->
    </div>
    <!-- .footer-top-area END -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-section">
                        <p>Copyright 2019, <a href="#">Xubisoft</a> All Rights Reserved.</p>
                    </div>
                    <!-- .copyright-section END -->
                </div>
                <div class="col-md-6">
                    <div class="copyright-content">
                        <ul class="social-list version-2">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-bottom-area END -->
</footer>
<!-- footer section end -->

<!-- js file start -->
<script src="{{ asset('xubisoft/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/plugins.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/Popper.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/scrollax.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/swiper.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyDeZubzJTQgtjreqsdaGMGXxaxP-pv6pSk"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/delighters.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/typed.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/skrollr.min.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/shuffle-letters.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/main.js') }}"></script>
<script src="{{ asset('xubisoft/assets/js/sweetalert2.all.js') }}"></script>

<script>
  @include('sweetalert::alert')
</script>

<script type="text/javascript">
// ______________ PAGE LOADING
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("fast");
	})
</script>



<!-- End js file -->
<script>
    var swiper = new Swiper('.blog-slider', {
        spaceBetween: 30
        , effect: 'fade'
        , loop: false
        , mousewheel: {
            invert: false
        , }
        , // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination'
            , clickable: true
        , }
    });
</script>

<script type="text/javascript">


/* Please ❤ this if you like it! */


(function($) { "use strict";

$(function() {
  var header = $(".start-style");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
});

//Animation

$(document).ready(function() {
  $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover

$('body').on('mouseenter mouseleave','.nav-item',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('.nav-item');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});

//Switch light/dark

$("#switch").on('click', function () {
  if ($("body").hasClass("dark")) {
    $("body").removeClass("dark");
    $("#switch").removeClass("switched");
  }
  else {
    $("body").addClass("dark");
    $("#switch").addClass("switched");
  }
});

})(jQuery);
</script>



<script type="text/javascript">

(function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.menuNode = settings.menuNode;
    }

    toggleMenuState(className) {
      if (typeof className !== 'string' || className.length === 0) {
        return console.log('you did not give the class for toggleState function');
      }
      return  this.menuNode.classList.toggle(className);
    }
  }

  const jsMenuNode = document.querySelector('.mobile-menu');
  const demoMenu = new Menu ({
    menuNode: jsMenuNode
  });

  function callMenuToggle(event) {
    demoMenu.toggleMenuState('menu_activated');
  }

  jsMenuNode.querySelector('.menu__hamburger').addEventListener('click', callMenuToggle);
})();



</script>






</body>

</html>
