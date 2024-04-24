/*-- Google Font --*/
@import url("https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900");
@import url("https://fonts.googleapis.com/css?family=Spectral:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap");
/*-- Common Style --*/
*, *::after, *::before {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

html, body {
  height: 100%;
}

.py-4{
  background-image: url(assets/images/backgrounds/login-bg.jpg);
}
body {
  background-color: #ffffff;
  line-height: 24px;
  font-size: 15px;
  font-style: normal;
  font-weight: 400;
  visibility: visible;
  font-family: "Work Sans", sans-serif;
  color: #777777;
  position: relative;
}
body.newsletter-overlay-active {
  overflow: hidden;
  position: relative;
}
body.newsletter-overlay-active:after {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  background-color: #333;
  opacity: 0.8;
  z-index: 999;
  visibility: visible;
}
body.vertical-header {
  padding-left: 120px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  body.vertical-header {
    padding-left: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  body.vertical-header {
    padding-left: 0;
  }
}
@media only screen and (max-width: 767px) {
  body.vertical-header {
    padding-left: 0;
  }
}
body.active-body-search-overlay {
  overflow: hidden;
}

h1, h2, h3, h4, h5, h6 {
  color: #333333;
  font-family: "Work Sans", sans-serif;
  font-weight: 400;
  margin-top: 0;
}

h1 {
  font-size: 36px;
  line-height: 42px;
}

h2 {
  font-size: 30px;
  line-height: 36px;
}

h3 {
  font-size: 24px;
  line-height: 30px;
}

h4 {
  font-size: 18px;
  line-height: 24px;
}

h5 {
  font-size: 14px;
  line-height: 18px;
}

h6 {
  font-size: 12px;
  line-height: 14px;
}

p:last-child {
  margin-bottom: 0;
}

a, button {
  color: inherit;
  display: inline-block;
  line-height: inherit;
  text-decoration: none;
  cursor: pointer;
}

a, button, img, input, span {
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

*:focus {
  outline: none !important;
}

a:focus {
  color: inherit;
  outline: none;
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

button, input[type=submit] {
  cursor: pointer;
}

ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

/*-- 
    - Row 
-----------------------------------------*/
.row {
  --bs-gutter-x: 1.875rem;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

/*-- 
    - Input Placeholder
-----------------------------------------*/
input:-moz-placeholder, textarea:-moz-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input:-ms-input-placeholder, textarea:-ms-input-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

/*-- Tab Content & Pane Fix --*/
.tab-content {
  width: 100%;
}
.tab-content .tab-pane {
  display: block;
  height: 0;
  max-width: 100%;
  visibility: hidden;
  overflow: hidden;
  opacity: 0;
}
.tab-content .tab-pane.active {
  height: auto;
  visibility: visible;
  opacity: 1;
  overflow: visible;
}

/* active inactive class */
.active {
  visibility: visible;
  opacity: 1;
}

.inactive {
  visibility: hidden;
  opacity: 0;
}

/* scroll to top*/
a.scroll-top {
  background: #333333;
  width: 50px;
  height: 50px;
  line-height: 50px;
  display: none;
  text-align: center;
  color: #ffffff;
  font-family: "Ionicons";
  position: fixed;
  right: 25px;
  bottom: 25px;
  z-index: 999;
  border-radius: 50%;
}
a.scroll-top:after {
  content: "\f3d7";
  display: inline;
  font-size: 25px;
}
a.scroll-top:hover {
  background-color: #abb8c0;
}

/*----------  Sharp border tippyjs theme  ----------*/
/* If `animateFill: true` (default) */
.tippy-tooltip.sharpborder-theme .tippy-backdrop {
  background-color: #333333;
  font-weight: 400;
  color: #fff;
}

/* If `animateFill: false` */
.tippy-tooltip.sharpborder-theme {
  font-weight: 400;
  border-radius: 0;
  font-size: 12px;
  -webkit-box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
          box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
  background: #383838;
  color: #fff;
  line-height: 12px;
  white-space: nowrap;
  padding: 8px 10px;
}

/*----------  no background style  ----------*/
.no-bg {
  background-color: transparent !important;
}

/*----------  separator  ----------*/
.separator {
  width: 100%;
  height: 1px;
  background-color: #EBEBEB;
}

/*----------  home content  ----------*/
.home-content {
  overflow-x: hidden;
}

/*----------  small separator  ----------*/
.small-separator {
  position: relative;
}
.small-separator span {
  position: absolute;
  width: 120px;
  height: 2px;
  background-color: #D8D8D8;
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

/*----------  form  ----------*/
.lezada-form form input[type=text], .lezada-form form input[type=email], .lezada-form form input[type=password], .lezada-form form textarea {
  font-size: 14px;
  display: block;
  color: #333;
  width: 100%;
  border: 1px solid transparent;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background: transparent;
  border-bottom: 2px solid #cccccc;
  padding: 2px 0;
}
.lezada-form form input[type=text]:hover, .lezada-form form input[type=text]:active, .lezada-form form input[type=text]:focus, .lezada-form form input[type=email]:hover, .lezada-form form input[type=email]:active, .lezada-form form input[type=email]:focus, .lezada-form form input[type=password]:hover, .lezada-form form input[type=password]:active, .lezada-form form input[type=password]:focus, .lezada-form form textarea:hover, .lezada-form form textarea:active, .lezada-form form textarea:focus {
  border-bottom-color: #333;
}
.lezada-form form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.lezada-form form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.lezada-form form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.lezada-form form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.lezada-form form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.lezada-form form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #777;
}
.lezada-form form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #777;
}

.overflow-hidden {
  overflow: hidden;
}

/*----------  container custom style  ----------*/
@media (min-width: 1200px) {
  .container {
    --bs-gutter-x: 1.875rem;
    max-width: 1200px;
  }
  .container.wide {
    max-width: 95%;
  }
  .container.full {
    max-width: 100%;
    padding: 0;
  }
}
/*=============================================
=            02. Header            =
=============================================*/
/*
    Site Mobile Navigation
------------------------------------------*/
.site-mobile-navigation {
  width: 100%;
  position: relative;
  z-index: 99;
}

/*Site Mobile Nav*/
.site-mobile-nav {
  margin-right: 0 !important;
  max-width: none;
}

.site-mobile-nav .dl-trigger {
  position: absolute;
  right: 0;
  top: -25px;
}

.site-mobile-nav .hamburger {
  display: block;
  cursor: pointer;
  -webkit-transition: all 0.15s linear;
  transition: all 0.15s linear;
  background-color: transparent;
  border: 0;
  margin: 0;
  overflow: visible;
  padding: 0;
  width: auto;
  height: auto;
}

.site-mobile-nav .hamburger.dl-active, .site-mobile-nav .hamburger:hover, .site-mobile-nav .hamburger:focus {
  background-color: transparent;
}

.site-mobile-nav .hamburger::after {
  display: none;
}

.site-mobile-nav .hamburger .hamburger-box {
  width: 26px;
  height: 20px;
  display: block;
  position: relative;
}

.site-mobile-nav .hamburger .hamburger-box .hamburger-inner {
  display: block;
  top: 50%;
  margin-top: -2px;
}

.site-mobile-nav .hamburger .hamburger-box .hamburger-inner, .site-mobile-nav .hamburger .hamburger-box .hamburger-inner::before, .site-mobile-nav .hamburger .hamburger-box .hamburger-inner::after {
  width: 26px;
  height: 2px;
  background-color: #232324;
  border-radius: 4px;
  position: absolute;
  -webkit-transition: all 0.15s ease;
  transition: all 0.15s ease;
}

.site-mobile-nav .hamburger .hamburger-box .hamburger-inner::before, .site-mobile-nav .hamburger .hamburger-box .hamburger-inner::after {
  content: "";
  display: block;
}

.site-mobile-nav .hamburger .hamburger-box .hamburger-inner::before {
  top: -8px;
}

.site-mobile-nav .hamburger .hamburger-box .hamburger-inner::after {
  bottom: -8px;
}

.site-mobile-nav .hamburger--spin .hamburger-inner {
  -webkit-transition-duration: 0.22s;
  transition-duration: 0.22s;
  -webkit-transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.site-mobile-nav .hamburger--spin .hamburger-inner::before {
  -webkit-transition: top 0.1s 0.25s ease-in, opacity 0.1s ease-in;
  transition: top 0.1s 0.25s ease-in, opacity 0.1s ease-in;
}

.site-mobile-nav .hamburger--spin .hamburger-inner::after {
  -webkit-transition: bottom 0.1s 0.25s ease-in, -webkit-transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  transition: bottom 0.1s 0.25s ease-in, -webkit-transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  transition: bottom 0.1s 0.25s ease-in, transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19);
  transition: bottom 0.1s 0.25s ease-in, transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19), -webkit-transform 0.22s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.site-mobile-nav .hamburger--spin.dl-active .hamburger-inner {
  -webkit-transform: rotate(225deg);
  transform: rotate(225deg);
  -webkit-transition-delay: 0.12s;
  transition-delay: 0.12s;
  -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}

.site-mobile-nav .hamburger--spin.dl-active .hamburger-inner::before {
  top: 0;
  opacity: 0;
  -webkit-transition: top 0.1s ease-out, opacity 0.1s 0.12s ease-out;
  transition: top 0.1s ease-out, opacity 0.1s 0.12s ease-out;
}

.site-mobile-nav .hamburger--spin.dl-active .hamburger-inner::after {
  bottom: 0;
  -webkit-transform: rotate(-90deg);
  transform: rotate(-90deg);
  -webkit-transition: bottom 0.1s ease-out, -webkit-transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: bottom 0.1s ease-out, -webkit-transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: bottom 0.1s ease-out, transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: bottom 0.1s ease-out, transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1), -webkit-transform 0.22s 0.12s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.site-mobile-nav .dl-menu {
  background-color: #ffffff;
  overflow: hidden;
  -webkit-box-shadow: 0 2px 12px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 12px 2px rgba(0, 0, 0, 0.1);
  margin: 40px 0 0 0;
}

.site-mobile-nav .dl-menu li {
  border-bottom: 1px solid #eeeeee;
}

.site-mobile-nav .dl-menu li:last-child {
  border-bottom: none;
}

.site-mobile-nav .dl-menu li > a {
  color: #232324;
  display: block;
  position: relative;
  padding: 10px 25px;
  line-height: 30px;
  font-weight: 400;
}

.site-mobile-nav .dl-menu li > a:not(:only-child)::after {
  font-family: "FontAwesome";
  content: "\f105";
  font-size: 18px;
  color: #232324;
  right: 25px;
}

.site-mobile-nav .dl-menu li:hover > a {
  color: #ffffff;
  background-color: #333333;
}

.site-mobile-nav .dl-menu li:hover > a::after {
  color: #ffffff;
}

.site-mobile-nav .dl-menu li .dl-submenu {
  background-color: transparent !important;
}

.site-mobile-nav .dl-menu li .dl-submenu li.dl-back a {
  background-color: transparent;
  text-align: right;
  color: #232324;
  z-index: 3;
  position: relative;
}

.site-mobile-nav .dl-menu li .dl-submenu li.dl-back a::after {
  font-family: "FontAwesome";
  content: "\f177";
  left: 25px;
  color: #232324;
  z-index: -1;
  position: absolute;
  top: 0;
  line-height: 50px;
  width: auto;
  right: auto;
}

.site-mobile-nav .dl-menu li .dl-submenu li.dl-back:hover a {
  color: #ffffff;
  background-color: #333333;
}

.site-mobile-nav .dl-menu li .dl-submenu li.dl-back:hover a::after {
  color: #ffffff;
}

.site-mobile-nav .dl-submenu {
  background-color: #ffffff !important;
  top: 40px !important;
}

/*----------  offcanvas about  ----------*/
.about-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  z-index: 1;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.about-overlay.active-about-overlay {
  visibility: visible;
  opacity: 1;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  z-index: 9999;
}
.about-overlay.active-about-overlay .overlay-content {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  visibility: visible;
  opacity: 1;
}
.about-overlay.active-about-overlay:after {
  visibility: visible;
  opacity: 0.5;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.about-overlay:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: #000000;
  opacity: 0;
  visibility: hidden;
  z-index: -1;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.about-overlay .overlay-content {
  background-color: #ffffff;
  width: 360px;
  height: 100vh;
  z-index: 3;
  padding: 30px 40px;
  position: relative;
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  visibility: hidden;
  opacity: 0;
  overflow: auto;
}
.about-overlay .overlay-content .overlay-content-container {
  padding: 20px 0;
}
.about-overlay .overlay-content .close-icon {
  position: absolute;
  top: 30px;
  right: 30px;
}
.about-overlay .overlay-content .close-icon a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.about-overlay .overlay-content .close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.about-overlay .overlay-content .close-icon a i {
  font-size: 25px;
  color: #333333;
}
.about-overlay .overlay-content .widget-wrapper .single-widget h2.widget-title {
  font-size: 24px;
  line-height: 26px;
  margin-bottom: 30px;
}
.about-overlay .overlay-content .contact-widget .email {
  margin-bottom: 35px;
}
.about-overlay .overlay-content .contact-widget .email a:hover {
  color: #333333;
}
.about-overlay .overlay-content .contact-widget .phone {
  font-size: 24px;
  font-weight: 600;
  color: #333;
  margin-bottom: 35px;
}
.about-overlay .overlay-content .contact-widget .social-icons ul li {
  display: inline-block;
}
.about-overlay .overlay-content .contact-widget .social-icons ul li:last-child a {
  margin-right: 0;
}
.about-overlay .overlay-content .contact-widget .social-icons ul li a {
  display: inline-block;
  margin-right: 20px;
  color: inherit;
}
.about-overlay .overlay-content .contact-widget .social-icons ul li a i {
  font-size: 18px;
}

/*----------  wishlist overlay  ----------*/
/*----------  offcanvas wishlist  ----------*/
.wishlist-overlay {
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: 9998;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.wishlist-overlay.active-wishlist-overlay {
  visibility: visible;
  opacity: 1;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.wishlist-overlay.active-wishlist-overlay .wishlist-overlay-content {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.wishlist-overlay.active-wishlist-overlay:after {
  visibility: visible;
  opacity: 0.5;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.wishlist-overlay:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
  opacity: 0;
  visibility: hidden;
  z-index: -1;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.wishlist-overlay .wishlist-overlay-content {
  background-color: #ffffff;
  width: 380px;
  height: 100%;
  z-index: 9999;
  padding: 20px;
  position: fixed;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  top: 0;
  right: 0;
  overflow: auto;
}
.wishlist-overlay .wishlist-overlay-content .close-icon {
  position: absolute;
  top: 20px;
  right: 20px;
}
.wishlist-overlay .wishlist-overlay-content .close-icon a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.wishlist-overlay .wishlist-overlay-content .close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.wishlist-overlay .wishlist-overlay-content .close-icon a i {
  font-size: 25px;
  color: #333333;
}

/*----------  cart overlay  ----------*/
/*----------  offcanvas cart  ----------*/
.cart-overlay {
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: 9998;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.cart-overlay.active-cart-overlay {
  visibility: visible;
  opacity: 1;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.cart-overlay.active-cart-overlay .cart-overlay-content {
  -webkit-transform: translateX(0);
          transform: translateX(0);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.cart-overlay.active-cart-overlay:after {
  visibility: visible;
  opacity: 0.5;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.cart-overlay:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000000;
  opacity: 0;
  visibility: hidden;
  z-index: -1;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.cart-overlay .cart-overlay-content {
  background-color: #ffffff;
  width: 380px;
  height: 100%;
  z-index: 9999;
  padding: 20px;
  position: fixed;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  top: 0;
  right: 0;
  overflow: auto;
}
@media only screen and (max-width: 479px) {
  .cart-overlay .cart-overlay-content {
    width: 300px;
  }
}
.cart-overlay .cart-overlay-content .close-icon {
  position: absolute;
  top: 20px;
  right: 20px;
}
.cart-overlay .cart-overlay-content .close-icon a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.cart-overlay .cart-overlay-content .close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.cart-overlay .cart-overlay-content .close-icon a i {
  font-size: 25px;
  color: #333333;
}

.offcanvas-cart-content-container .cart-title {
  font-size: 18px;
  line-height: 28px;
  color: #333333;
  font-weight: 500;
  border-bottom: 1px solid #eeeeee;
  padding-bottom: 5px;
  margin-bottom: 20px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container {
  position: relative;
  max-height: 330px;
  overflow: auto;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-bottom: 1px solid #eeeeee;
  padding-bottom: 25px;
  margin-bottom: 25px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .cart-close-icon {
  position: absolute;
  top: 0;
  right: 15px;
  line-height: 8px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .cart-close-icon a {
  color: #333333;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .cart-close-icon a i {
  font-size: 8px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .cart-close-icon a:hover {
  color: #ff0000;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product:last-child {
  margin-bottom: 0;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .image {
  width: 80px;
  margin-right: 15px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content {
  width: calc(100% - 80px);
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content h5 {
  font-size: 15px;
  line-height: 17px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content h5 a {
  color: #333333;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content p .cart-count {
  font-size: 12px;
  line-height: 22px;
  color: #7e7e7e;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content p .main-price {
  font-size: 14px;
  line-height: 22px;
  font-weight: 600;
  color: #333333;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content p .main-price.discounted {
  font-size: 12px;
  line-height: 22px;
  color: #7e7e7e;
  text-decoration: line-through;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-product-container .single-cart-product .content p .discounted-price {
  font-size: 14px;
  line-height: 22px;
  font-weight: 600;
  color: #333333;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-subtotal {
  border-top: 1px solid #eeeeee;
  border-bottom: 1px solid #eeeeee;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-top: 25px;
  font-size: 16px;
  font-weight: 600;
  line-height: 25px;
  color: #333333;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-subtotal .subtotal-amount {
  float: right;
  overflow: hidden;
}
.offcanvas-cart-content-container .cart-product-wrapper .free-shipping-text {
  margin-top: 25px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-buttons {
  margin-top: 30px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-buttons a {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  color: #ffffff;
  border-radius: 0;
  border: 1px solid #333333;
  background-color: #333333;
  display: block;
  text-align: center;
  padding: 5px 10px;
  margin-bottom: 15px;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-buttons a:last-child {
  margin-bottom: 0;
}
.offcanvas-cart-content-container .cart-product-wrapper .cart-buttons a:hover {
  background-color: #d3122a;
  border-color: #d3122a;
}

/*----------  search overlay  ----------*/
.search-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: #ffffff;
  -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  z-index: 999999;
}
.search-overlay.active-search-overlay {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.search-overlay .search-close-icon {
  position: absolute;
  top: 30px;
  right: 30px;
}
.search-overlay .search-close-icon a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.search-overlay .search-close-icon a i {
  font-size: 40px;
  color: #333333;
}
@media only screen and (max-width: 767px) {
  .search-overlay .search-close-icon a i {
    font-size: 25px;
  }
}
.search-overlay .search-close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.search-overlay .search-overlay-content {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.search-overlay .search-overlay-content .input-box {
  margin-bottom: 15px;
}
.search-overlay .search-overlay-content .input-box form input {
  background: none;
  border: none;
  border-bottom: 2px solid #222222;
  font-size: 67px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .search-overlay .search-overlay-content .input-box form input {
    font-size: 40px;
  }
}
@media only screen and (max-width: 767px) {
  .search-overlay .search-overlay-content .input-box form input {
    font-size: 40px;
  }
}
@media only screen and (max-width: 575px) {
  .search-overlay .search-overlay-content .input-box form input {
    font-size: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .search-overlay .search-overlay-content .input-box form input {
    font-size: 20px;
  }
}
.search-overlay .search-overlay-content .input-box form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #dcdcdc;
  opacity: 1; /* Firefox */
}
.search-overlay .search-overlay-content .input-box form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #dcdcdc;
  opacity: 1; /* Firefox */
}
.search-overlay .search-overlay-content .input-box form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #dcdcdc;
  opacity: 1; /* Firefox */
}
.search-overlay .search-overlay-content .input-box form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #dcdcdc;
  opacity: 1; /* Firefox */
}
.search-overlay .search-overlay-content .input-box form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #dcdcdc;
  opacity: 1; /* Firefox */
}
.search-overlay .search-overlay-content .input-box form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #dcdcdc;
}
.search-overlay .search-overlay-content .input-box form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #dcdcdc;
}
.search-overlay .search-overlay-content .search-hint span {
  font-size: 13px;
  line-height: 21px;
  color: #999999;
  font-weight: 500;
}

/*----------  navigation overlay  ----------*/
.overlay-navigation-menu {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  display: table;
  /*----------  close icon  ----------*/
  /*----------  overlay menu container style  ----------*/
}
.overlay-navigation-menu:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #ffffff;
  content: "";
  z-index: -1;
  opacity: 0.9;
}
.overlay-navigation-menu .overlay-menu-close-icon {
  display: inline-block;
  position: absolute;
  top: 30px;
  right: 30px;
}
.overlay-navigation-menu .overlay-menu-close-icon a {
  color: #333333;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.overlay-navigation-menu .overlay-menu-close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.overlay-navigation-menu .overlay-menu-close-icon a i {
  font-size: 25px;
}
.overlay-navigation-menu .overlay-navigation-menu-container {
  text-align: center;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  overflow: auto;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav {
  margin: auto;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li {
  margin-bottom: 20px;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li:last-of-type {
  margin-bottom: 0;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li a {
  font-size: 32px;
  line-height: 57px;
  color: #333333;
  position: relative;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li a:after {
  position: absolute;
  bottom: 0;
  left: auto;
  right: 0;
  width: 0;
  height: 2px;
  content: "";
  background-color: #333;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li a:hover:after {
  left: 0;
  right: auto;
  width: 100%;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li.has-children ul li {
  margin-bottom: 0;
}
.overlay-navigation-menu .overlay-navigation-menu-container nav ul li.has-children ul li a {
  font-size: 20px;
  line-height: 40px;
}

/*----------  header bottom   ----------*/
.header-bottom-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 40%;
        flex-basis: 40%;
  }
}
@media only screen and (max-width: 767px) {
  .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
  }
}
.header-bottom-container .header-bottom-navigation {
  -ms-flex-preferred-size: 60%;
      flex-basis: 60%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-bottom-container .header-bottom-navigation {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
  }
}
@media only screen and (max-width: 767px) {
  .header-bottom-container .header-bottom-navigation {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
  }
}
.header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
  }
}
@media only screen and (max-width: 767px) {
  .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 40%;
        flex-basis: 40%;
  }
}

/*----------  sticky header style  ----------*/
.header-sticky.is-sticky {
  position: fixed;
  z-index: 999;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  -webkit-animation: 700ms ease-in-out 0s normal none 1 running fadeInDown;
          animation: 700ms ease-in-out 0s normal none 1 running fadeInDown;
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  -webkit-backface-visibility: hidden;
}

/*----------  header bottom horizontal navigation menu  ----------*/
nav.center-menu > ul {
  text-align: center;
}
nav.center-menu > ul > li.menu-item-has-children ul.mega-menu {
  right: 50%;
  -webkit-transform: translateX(50%);
          transform: translateX(50%);
}
nav.site-nav > ul > li {
  line-height: 80px;
  position: static;
  display: inline-block;
  margin: 0 25px;
  text-align: left;
}
nav.site-nav > ul > li a {
  position: relative;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li {
    margin: 0 20px;
  }
}
nav.site-nav > ul > li:hover > a {
  position: relative;
  color: #333;
}
nav.site-nav > ul > li:hover > a:after {
  right: auto;
  left: 0;
  width: 100%;
}
nav.site-nav > ul > li.menu-item-has-children:hover .sub-menu {
  visibility: visible;
  margin-top: 0;
  opacity: 1;
}
nav.site-nav > ul > li.menu-item-has-children > a {
  position: relative;
}
nav.site-nav > ul > li.menu-item-has-children > a:before {
  font-family: fontAwesome;
  position: absolute;
  top: 50%;
  right: -15px;
  content: "\f107";
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #d0d0d0;
}
nav.site-nav > ul > li > a {
  font-weight: 500;
  color: #7e7e7e;
}
nav.site-nav > ul > li > a:after {
  position: absolute;
  right: 0;
  bottom: 30px;
  left: auto;
  width: 0;
  height: 1px;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
  background-color: #333;
}
nav.site-nav > ul > li ul.sub-menu {
  position: absolute;
  z-index: 9999;
  visibility: hidden;
  margin-top: 45px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  background-color: #ffffff;
  -webkit-box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
          box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
}
nav.site-nav > ul > li ul.sub-menu li {
  line-height: 1;
}
nav.site-nav > ul > li ul.single-column-menu {
  min-width: 280px;
  max-width: 350px;
  padding: 30px;
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li {
  position: relative;
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li:after {
  font-family: fontAwesome;
  position: absolute;
  right: 0;
  content: "\f105";
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li:hover .multilevel-submenu {
  visibility: visible;
  margin-top: 0;
  opacity: 1;
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu {
  position: absolute;
  top: 0;
  left: 110%;
  visibility: hidden;
  min-width: 280px;
  margin-top: 15px;
  padding: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  background-color: #ffffff;
  -webkit-box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
          box-shadow: -2px 2px 81px -27px rgba(0, 0, 0, 0.3);
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu {
    left: -140%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu {
    left: -140%;
  }
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu li {
  display: block;
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu li a {
  margin-bottom: 15px;
}
nav.site-nav > ul > li ul.single-column-menu.single-column-has-children > li .multilevel-submenu li:last-child a {
  margin-bottom: 0;
}
nav.site-nav > ul > li ul.single-column-menu li a {
  font-size: 15px;
  line-height: 22px;
  position: relative;
  margin-bottom: 15px;
  color: #7e7e7e;
}
nav.site-nav > ul > li ul.single-column-menu li a:hover {
  color: #333333;
}
nav.site-nav > ul > li ul.single-column-menu li a:hover:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  content: "";
  background-color: #e7e7e7;
}
nav.site-nav > ul > li ul.single-column-menu li:last-child a {
  margin-bottom: 0;
}
nav.site-nav > ul > li ul.mega-menu {
  z-index: 9999;
  overflow: hidden;
  padding: 30px 60px;
}
nav.site-nav > ul > li ul.mega-menu > li {
  display: inline-block;
  border-right: 1px solid #e7e7e7;
}
nav.site-nav > ul > li ul.mega-menu > li ul li {
  display: block;
}
nav.site-nav > ul > li ul.mega-menu-column-4 {
  right: 400px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  max-width: 1100px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-4 {
    max-width: 850px;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 25%;
          flex: 0 0 25%;
  padding-left: 30px;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li:first-child {
  padding-left: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-4 > li:nth-of-type(3) {
    border-right: none;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li:last-child {
  border-right: none;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li:last-child .menu-image {
  position: absolute;
  padding-right: 60px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-4 > li:last-child {
    display: none;
    padding-left: 0;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-4 > li {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li a.mega-column-title {
  font-size: 15px;
  font-weight: 500;
  line-height: 18px;
  margin-bottom: 20px;
  color: #333333;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li a.mega-column-title:after {
  display: none;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li .mega-sub-menu li a {
  font-size: 15px;
  line-height: 22px;
  position: relative;
  margin-bottom: 15px;
  color: #7e7e7e;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li .mega-sub-menu li a:hover {
  color: #333333;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li .mega-sub-menu li a:hover:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  content: "";
  background-color: #e7e7e7;
}
nav.site-nav > ul > li ul.mega-menu-column-4 > li .mega-sub-menu li:last-child a {
  margin-bottom: 0;
}
nav.site-nav > ul > li ul.mega-menu-column-5 {
  right: 450px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  max-width: 1170px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-5 {
    max-width: 950px;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  padding: 0 25px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-5 > li {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li:first-child {
  padding-left: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-5 > li:nth-of-type(4) {
    border-right: none;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li:last-child {
  padding-right: 0;
  border-right: none;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li:last-child .menu-image {
  position: absolute;
  padding-right: 60px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  nav.site-nav > ul > li ul.mega-menu-column-5 > li:last-child {
    display: none;
    margin-left: 0;
  }
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li a.mega-column-title {
  font-size: 15px;
  font-weight: 500;
  line-height: 18px;
  margin-bottom: 20px;
  color: #333333;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li a.mega-column-title:after {
  display: none;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li > .mega-sub-menu li {
  position: relative;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li > .mega-sub-menu li img {
  position: absolute;
  z-index: 99;
  bottom: -20px;
  left: 50%;
  visibility: hidden;
  width: 250px;
  height: auto;
  opacity: 0;
  border-radius: 5px;
  -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li > .mega-sub-menu li:hover img {
  bottom: -10px;
  visibility: visible;
  opacity: 1;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li .mega-sub-menu li a {
  font-size: 15px;
  line-height: 22px;
  position: relative;
  margin-bottom: 15px;
  color: #7e7e7e;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li .mega-sub-menu li a:hover {
  color: #333333;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li .mega-sub-menu li a:hover:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  content: "";
  background-color: #e7e7e7;
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li .mega-sub-menu li a:before {
  position: absolute;
  z-index: 99;
  top: 0;
  right: 0;
  visibility: visible;
  width: 250px;
  height: auto;
  content: "";
  opacity: 1;
  border-radius: 5px;
  background-image: "attr(data-homeimage)";
  -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}
nav.site-nav > ul > li ul.mega-menu-column-5 > li .mega-sub-menu li:last-child a {
  margin-bottom: 0;
}

/*----------  header right icons  ----------*/
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-right-icons {
    margin-right: 55px;
  }
}
@media only screen and (max-width: 767px) {
  .header-right-icons {
    margin-right: 45px;
  }
}
.header-right-icons .single-icon {
  margin-left: 30px;
}
@media only screen and (max-width: 479px) {
  .header-right-icons .single-icon {
    margin-left: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .header-right-icons .single-icon.wishlist {
    display: none;
  }
}
@media only screen and (max-width: 479px) {
  .header-right-icons .single-icon.user-login {
    display: none;
  }
}
.header-right-icons .single-icon a {
  position: relative;
}
.header-right-icons .single-icon a i {
  font-size: 20px;
  color: #333;
}
.header-right-icons .single-icon a span.count {
  font-size: 14px;
  font-weight: 500;
  line-height: 16px;
  position: absolute;
  top: -5px;
  right: -10px;
  width: 16px;
  height: 16px;
  text-align: center;
  color: #ffffff;
  border-radius: 50%;
  background-color: #d3122a;
}

/* overlay close */
.overlay-close,
.wishlist-overlay-close,
.cart-overlay-close {
  position: absolute;
  z-index: 2;
  width: 100%;
  height: 100%;
}

/*----------  header split  ----------*/
.header-split {
  border-bottom: 1px solid #efefef;
}
.header-split:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-split::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-split::before {
    display: none;
  }
}
.header-split.is-sticky::before {
  display: none;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 10%;
        flex-basis: 10%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 10%;
        flex-basis: 10%;
  }
}
.header-split .header-bottom .header-bottom-container .logo-with-offcanvas .logo {
  position: absolute;
  left: 50%;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas .logo {
    left: 45%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas .logo {
    left: 45%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas .logo {
    position: relative;
    left: 0;
  }
}
@media only screen and (max-width: 767px) {
  .header-split .header-bottom .header-bottom-container .logo-with-offcanvas .logo {
    position: relative;
    left: 0;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .header-split .header-bottom .header-bottom-container .header-bottom-navigation {
    -ms-flex-preferred-size: 70%;
        flex-basis: 70%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .header-split .header-bottom .header-bottom-container .header-bottom-navigation {
    -ms-flex-preferred-size: 70%;
        flex-basis: 70%;
  }
}

/*----------  header offcanvas about     ----------*/
.header-offcanvas-about {
  border-bottom: 1px solid #efefef;
  position: relative;
}
.header-offcanvas-about:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-offcanvas-about::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-offcanvas-about::before {
    display: none;
  }
}
.header-offcanvas-about.is-sticky::before {
  display: none;
}

/* icon  about off canvas*/
.offcanvas-about-icon a {
  color: #333;
  display: inline-block;
}
.offcanvas-about-icon a i {
  font-size: 30px;
}

/*----------  header wide topbar  ----------*/
.header-wide-topbar {
  border-bottom: 1px solid #efefef;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) inset;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) inset;
}
.header-wide-topbar.is-sticky .header-top {
  display: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-wide-topbar {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-wide-topbar {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
}

/*----------  header top  ----------*/
.header-top {
  border-bottom: 1px solid #dedede;
}
.header-top .header-separator {
  margin: 0 10px;
  color: #d8d8d8;
}

.top-newsletter-subscription a {
  font-size: 14px;
}
.top-newsletter-subscription a:hover {
  color: #333333;
}

.order-online-text {
  font-size: 14px;
}
.order-online-text a {
  font-size: 14px;
  line-height: 14px;
  color: #333333;
  border-bottom: 1px solid #333333;
}

.header-top-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.header-top-container .header-top-left {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-top-container .header-top-left {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
@media only screen and (max-width: 767px) {
  .header-top-container .header-top-left {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
}
.header-top-container .header-top-right {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-top-container .header-top-right {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-top-container .header-top-right {
    display: none;
  }
}
.header-top-container .header-top-right .top-social-icons ul li {
  display: inline-block;
}
.header-top-container .header-top-right .top-social-icons ul li a {
  color: #333333;
  margin-right: 20px;
}
.header-top-container .header-top-right .top-social-icons ul li:last-child a {
  margin-right: 0;
}

.change-dropdown {
  position: relative;
  margin-right: 15px;
}
.change-dropdown > a {
  font-size: 14px;
  color: #7e7e7e;
  position: relative;
}
.change-dropdown > a:hover {
  color: #333333;
}
.change-dropdown > a:before {
  position: absolute;
  top: 0;
  right: -15px;
  content: "\f107";
  font-family: fontAwesome;
}
.change-dropdown:hover ul {
  visibility: visible;
  opacity: 1;
  margin-top: 0;
}
.change-dropdown ul {
  position: absolute;
  top: 120%;
  background-color: #ffffff;
  -webkit-box-shadow: -1px 10px 80px -15px rgba(0, 0, 0, 0.3);
          box-shadow: -1px 10px 80px -15px rgba(0, 0, 0, 0.3);
  min-width: 150px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  margin-top: 10px;
  z-index: 999;
}
.change-dropdown ul li a {
  font-size: 14px;
  display: block;
  padding: 8px 15px;
  color: #7e7e7e;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.change-dropdown ul li a:hover {
  color: #333333;
  padding-left: 20px;
}

/*----------  header box topbar  ----------*/
.header-box-topbar:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  content: "";
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-box-topbar::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-box-topbar::before {
    display: none;
  }
}
.header-box-topbar.is-sticky::before {
  display: none;
}
.header-box-topbar.is-sticky .header-bottom {
  padding-top: 0 !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .header-box-topbar.is-sticky .header-bottom {
    padding-top: 40px !important;
  }
}
.header-box-topbar.is-sticky .header-bottom-container .language-currency-change-container {
  display: none;
}
.header-box-topbar.is-sticky .header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
  text-align: left;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .header-box-topbar.is-sticky .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 40%;
        flex-basis: 40%;
  }
}
.header-box-topbar.is-sticky .header-bottom-container .header-bottom-navigation {
  -ms-flex-preferred-size: 60%;
      flex-basis: 60%;
  -webkit-box-ordinal-group: 3;
      -ms-flex-order: 2;
          order: 2;
  margin-top: 0;
}
.header-box-topbar.is-sticky .header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 20%;
      flex-basis: 20%;
  -webkit-box-ordinal-group: 4;
      -ms-flex-order: 3;
          order: 3;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .header-box-topbar.is-sticky .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
  }
}
.header-box-topbar .header-bottom-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.header-box-topbar .header-bottom-container .language-currency-change-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-box-topbar .header-bottom-container .language-currency-change-container {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-box-topbar .header-bottom-container .language-currency-change-container {
    display: none;
  }
}
.header-box-topbar .header-bottom-container .language-currency-change-container .header-separator {
  margin: 0 20px;
}
.header-box-topbar .header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 40%;
      flex-basis: 40%;
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-box-topbar .header-bottom-container .logo-with-offcanvas {
    text-align: left;
  }
}
@media only screen and (max-width: 767px) {
  .header-box-topbar .header-bottom-container .logo-with-offcanvas {
    text-align: left;
  }
}
.header-box-topbar .header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-box-topbar .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
  }
}
@media only screen and (max-width: 767px) {
  .header-box-topbar .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 60%;
        flex-basis: 60%;
  }
}
.header-box-topbar .header-bottom-container .header-bottom-navigation {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  margin-top: 40px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-box-topbar .header-bottom-container .header-bottom-navigation {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-box-topbar .header-bottom-container .header-bottom-navigation {
    display: none;
  }
}

/*----------  header without topbar  ----------*/
.header-without-topbar {
  position: relative;
}
.header-without-topbar:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-without-topbar::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-without-topbar::before {
    display: none;
  }
}
.header-without-topbar.is-sticky::before {
  display: none;
}
.header-without-topbar.no-shadow:before {
  display: none;
}
.header-without-topbar.slider-bottom-header {
  position: static;
  z-index: 99;
  /*----------  sticky header style  ----------*/
}
.header-without-topbar.slider-bottom-header.slider-bottom-header-sticky.is-sticky {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  -webkit-animation: 700ms ease-in-out 0s normal none 1 running fadeInDown;
          animation: 700ms ease-in-out 0s normal none 1 running fadeInDown;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  z-index: 999;
  background-color: #ffffff;
}

/*----------  header transparent background  ----------*/
.header-transparent-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  /*----------  for 404 and coming soon  ----------*/
}
.header-transparent-background .language-currency-change-container .change-dropdown > a {
  color: #ffffff;
}
.header-transparent-background:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-background::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-background::before {
    display: none;
  }
}
.header-transparent-background.is-sticky::before {
  display: none;
}
.header-transparent-background.is-sticky {
  background-color: #ffffff;
  border-bottom: 1px solid #efefef;
}
.header-transparent-background.is-sticky .logo a img:nth-child(1) {
  visibility: hidden;
  opacity: 0;
  display: none;
}
.header-transparent-background.is-sticky .logo a img:nth-child(2) {
  visibility: visible;
  opacity: 1;
  display: block;
}
.header-transparent-background.is-sticky .header-bottom-navigation .site-main-nav .site-nav > ul > li > a {
  color: #7e7e7e;
}
.header-transparent-background.is-sticky .header-bottom-navigation .site-main-nav .site-nav > ul > li > a:hover {
  color: #333333;
}
.header-transparent-background.is-sticky .header-right-container .header-right-icons .single-icon a i {
  color: #333;
}
.header-transparent-background:hover {
  background-color: #ffffff;
  border-bottom: 1px solid #efefef;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) inset;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2) inset;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-background:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
    border: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-background:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
    border: none;
  }
}
.header-transparent-background:hover .language-currency-change-container .change-dropdown > a {
  color: #7e7e7e;
}
.header-transparent-background:hover .logo a img:nth-child(1) {
  visibility: hidden;
  opacity: 0;
  display: none;
}
.header-transparent-background:hover .logo a img:nth-child(2) {
  visibility: visible;
  opacity: 1;
  display: block;
}
.header-transparent-background:hover .header-bottom-navigation .site-main-nav .site-nav > ul > li > a {
  color: #7e7e7e;
}
.header-transparent-background:hover .header-bottom-navigation .site-main-nav .site-nav > ul > li > a:hover {
  color: #333333;
}
.header-transparent-background:hover .header-right-container .header-right-icons .single-icon a i {
  color: #333;
}
.header-transparent-background:hover .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner {
  background-color: #333333;
}
.header-transparent-background:hover .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:before {
  background-color: #333333;
}
.header-transparent-background:hover .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:after {
  background-color: #333333;
}
.header-transparent-background .logo a img:nth-child(2) {
  visibility: hidden;
  opacity: 0;
  display: none;
}
.header-transparent-background .header-bottom-navigation .site-main-nav .site-nav > ul > li > a {
  color: #ffffff;
}
.header-transparent-background .header-right-container .header-right-icons .single-icon a i {
  color: #ffffff;
}
.header-transparent-background .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner {
  background-color: #ffffff;
}
.header-transparent-background .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:before {
  background-color: #ffffff;
}
.header-transparent-background .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:after {
  background-color: #ffffff;
}
.header-transparent-background--black {
  -webkit-box-shadow: none;
          box-shadow: none;
  border-bottom: none;
}
.header-transparent-background--black .logo a img:nth-child(1) {
  visibility: hidden;
  opacity: 0;
  display: none;
}
.header-transparent-background--black .logo a img:nth-child(2) {
  visibility: visible;
  opacity: 1;
  display: block;
}
.header-transparent-background--black .header-bottom-navigation {
  visibility: hidden;
  opacity: 0;
}
.header-transparent-background--black .header-right-container .header-right-icons .single-icon a i {
  color: #333;
}
.header-transparent-background--black .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner {
  background-color: #333;
}
.header-transparent-background--black .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:before {
  background-color: #333;
}
.header-transparent-background--black .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:after {
  background-color: #333;
}
.header-transparent-background--black:hover {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-bottom: none;
}

/*----------  header overlay menu  ----------*/
.header-overlay-menu {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
}
.header-overlay-menu:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-overlay-menu::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-overlay-menu::before {
    display: none;
  }
}
.header-overlay-menu.is-sticky:before {
  display: none;
}
.header-overlay-menu.is-sticky .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #333;
}
.header-overlay-menu.is-sticky .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu:hover {
  background-color: #fff;
  border-bottom: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.header-overlay-menu:hover .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #333;
}
.header-overlay-menu:hover .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 50% !important;
      flex-basis: 50% !important;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #ffffff;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu .header-bottom .header-bottom-container .header-bottom-navigation {
  display: none;
}
.header-overlay-menu .header-bottom .header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
}

.overlay-navigation-inactive {
  visibility: hidden;
  opacity: 0;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.overlay-navigation-inactive .overlay-navigation-menu-container {
  visibility: hidden;
  opacity: 0;
  -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
}
.overlay-navigation-inactive .overlay-navigation-menu-container nav ul li {
  opacity: 0;
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
}

.overlay-navigation-active {
  visibility: visible;
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
}
.overlay-navigation-active .overlay-navigation-menu-container nav ul li {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
}

/*----------  header overlay menu  ----------*/
.header-overlay-menu {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
}
.header-overlay-menu:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-overlay-menu::before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-overlay-menu::before {
    display: none;
  }
}
.header-overlay-menu.is-sticky:before {
  display: none;
}
.header-overlay-menu.is-sticky .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #333;
}
.header-overlay-menu.is-sticky .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu:hover {
  background-color: #fff;
  border-bottom: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.header-overlay-menu:hover .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #333;
}
.header-overlay-menu:hover .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 50% !important;
      flex-basis: 50% !important;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #ffffff;
}
.header-overlay-menu .header-bottom .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-overlay-menu .header-bottom .header-bottom-container .header-bottom-navigation {
  display: none;
}
.header-overlay-menu .header-bottom .header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 50%;
      flex-basis: 50%;
}

.overlay-navigation-inactive {
  visibility: hidden;
  opacity: 0;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.overlay-navigation-inactive .overlay-navigation-menu-container {
  visibility: hidden;
  opacity: 0;
  -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
}
.overlay-navigation-inactive .overlay-navigation-menu-container nav ul li {
  opacity: 0;
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
}

.overlay-navigation-active {
  visibility: visible;
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
}
.overlay-navigation-active .overlay-navigation-menu-container nav ul li {
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  -webkit-transition-delay: 0.5s;
          transition-delay: 0.5s;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
}

/*----------  non transparent overlay menu  ----------*/
.header-nontransparent-overlay-menu {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  /*----------  creative home header style  ----------*/
}
.header-nontransparent-overlay-menu.static-header {
  position: static;
}
.header-nontransparent-overlay-menu.static-header.is-sticky {
  position: fixed;
}
.header-nontransparent-overlay-menu.static-header.is-sticky:before {
  display: none;
}
.header-nontransparent-overlay-menu:before {
  position: absolute;
  top: -3px;
  left: 0;
  width: 100%;
  height: 3px;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  content: "";
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-nontransparent-overlay-menu.creative-home-header {
    border-bottom: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-nontransparent-overlay-menu.creative-home-header {
    border-bottom: none;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-nontransparent-overlay-menu {
    border-bottom: 1px solid #efefef;
  }
  .header-nontransparent-overlay-menu:before {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-nontransparent-overlay-menu {
    -webkit-box-shadow: none;
            box-shadow: none;
    border-bottom: 1px solid #efefef;
  }
  .header-nontransparent-overlay-menu:before {
    display: none;
  }
}
.header-nontransparent-overlay-menu .header-bottom-container .logo-with-offcanvas {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-nontransparent-overlay-menu .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
  }
}
@media only screen and (max-width: 767px) {
  .header-nontransparent-overlay-menu .header-bottom-container .logo-with-offcanvas {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
  }
}
.header-nontransparent-overlay-menu .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a {
  color: #333333;
}
.header-nontransparent-overlay-menu .header-bottom-container .logo-with-offcanvas .overlay-menu-icon a i {
  font-size: 25px;
}
.header-nontransparent-overlay-menu .header-bottom-container .header-bottom-navigation {
  display: none;
}
.header-nontransparent-overlay-menu .header-bottom-container .logo {
  -ms-flex-preferred-size: 40%;
      flex-basis: 40%;
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-nontransparent-overlay-menu .header-bottom-container .logo {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    text-align: left;
  }
}
@media only screen and (max-width: 767px) {
  .header-nontransparent-overlay-menu .header-bottom-container .logo {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
    text-align: left;
  }
}
.header-nontransparent-overlay-menu .header-bottom-container .header-right-container {
  -ms-flex-preferred-size: 30%;
      flex-basis: 30%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-nontransparent-overlay-menu .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .header-nontransparent-overlay-menu .header-bottom-container .header-right-container {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
.header-nontransparent-overlay-menu:hover {
  background-color: #fff;
}

/*----------  header vertical  ----------*/
.header-vertical {
  width: 120px;
  background-color: #333333;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  padding: 30px 15px;
  z-index: 99;
}

.vertical-header-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  height: 100%;
}

.header-bottom-container.vertical-header-bottom .logo-with-offcanvas {
  -ms-flex-preferred-size: 40%;
      flex-basis: 40%;
}
.header-bottom-container.vertical-header-bottom .header-bottom-navigation {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
}
.header-bottom-container.vertical-header-bottom .header-right-container {
  -ms-flex-preferred-size: 60%;
      flex-basis: 60%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .header-bottom-container.vertical-header-bottom .header-right-container .header-right-icons {
    margin-right: 55px;
  }
}
.header-bottom-container .header-right-icons.vertical-dark-menu-bottom {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.header-bottom-container .header-right-icons.vertical-dark-menu-bottom p.copyright-text {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
  margin-bottom: 40px;
  white-space: nowrap;
  color: #ababab;
  font-size: 15px;
}
.header-bottom-container .header-right-icons.vertical-dark-menu-bottom .single-icon {
  margin-top: 40px;
  margin-left: 0;
}
.header-bottom-container .header-right-icons.vertical-dark-menu-bottom .single-icon a i {
  color: #fff;
}
.header-bottom-container .header-right-icons.vertical-dark-menu-bottom .single-icon a span {
  border: 1px solid #ffffff;
  width: 20px;
  height: 20px;
  right: -15px;
}

.menu-icon-container {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .menu-icon-container {
    top: 30%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .menu-icon-container {
    top: 30%;
  }
}
.menu-icon-container a {
  display: inline-block;
}
.menu-icon-container a.active .menu-icon:nth-child(1) {
  -webkit-transform: rotate(50deg) translate(6px, 5px);
          transform: rotate(50deg) translate(6px, 5px);
}
.menu-icon-container a.active .menu-icon:nth-child(2) {
  -webkit-transform: rotate(-50deg) translate(0, 0px);
          transform: rotate(-50deg) translate(0, 0px);
}
.menu-icon-container a.active .menu-icon:nth-child(3) {
  visibility: hidden;
  opacity: 0;
}
.menu-icon-container a .menu-icon {
  width: 25px;
  height: 3px;
  background-color: #ffffff;
  display: block;
  position: relative;
}
.menu-icon-container a .menu-icon:nth-child(1) {
  margin-bottom: 5px;
}
.menu-icon-container a .menu-icon:nth-child(2) {
  margin-bottom: 5px;
}
.vertical-menu-container-dark {
  position: fixed;
  top: 0;
  width: 320px;
  height: 100vh;
  background-color: #383838;
  -webkit-transform: translateX(-30px);
          transform: translateX(-30px);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  z-index: 99999;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .vertical-menu-container-dark {
    width: 300px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .vertical-menu-container-dark {
    width: 280px;
  }
}
@media only screen and (max-width: 767px) {
  .vertical-menu-container-dark {
    display: none;
  }
}
.vertical-menu-container-dark.active {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.vertical-menu-container-dark nav {
  text-align: center;
  margin: auto;
  -webkit-box-flex: 1;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
}
.vertical-menu-container-dark nav > ul > li > a {
  font-size: 28px;
  line-height: 42px;
  margin-bottom: 30px;
  color: #ffffff;
  font-weight: 500;
  position: relative;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .vertical-menu-container-dark nav > ul > li > a {
    font-size: 22px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .vertical-menu-container-dark nav > ul > li > a {
    font-size: 22px;
  }
}
.vertical-menu-container-dark nav > ul > li > a:hover:after {
  left: 0;
  right: auto;
  width: 100%;
}
.vertical-menu-container-dark nav > ul > li > a:after {
  position: absolute;
  bottom: 0;
  right: 0;
  left: auto;
  width: 0;
  height: 1px;
  background-color: #ffffff;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.vertical-menu-container-dark nav > ul > li:last-child a {
  margin-bottom: 0;
}
.vertical-menu-container-dark nav > ul > li.has-children {
  position: relative;
}
.vertical-menu-container-dark nav > ul > li.has-children:hover > ul {
  visibility: visible;
  opacity: 1;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul {
  position: absolute;
  top: -100%;
  left: 100%;
  background-color: #333;
  min-width: 300px;
  max-width: 400px;
  text-align: left;
  padding: 30px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition-duration: 0.3s;
          transition-duration: 0.3s;
  -webkit-transition-delay: 0.3s;
          transition-delay: 0.3s;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li.has-children {
  position: relative;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li.has-children:after {
  position: absolute;
  right: 0;
  content: "\f105";
  font-family: fontAwesome;
  color: #fff;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li.has-children:hover ul.multilevel-submenu {
  visibility: visible;
  opacity: 1;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li.has-children ul.multilevel-submenu {
  position: absolute;
  left: 105%;
  top: -50%;
  min-width: 300px;
  max-width: 400px;
  background-color: #333;
  padding: 30px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li a {
  color: #ffffff;
  position: relative;
  display: inline-block;
  margin-bottom: 15px;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li a:hover:after {
  visibility: visible;
  opacity: 1;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #4b4b4b;
  visibility: hidden;
  opacity: 0;
  content: "";
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li:last-child a {
  margin-bottom: 0;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li:last-child ul li a {
  margin-bottom: 15px;
}
.vertical-menu-container-dark nav > ul > li.has-children > ul li:last-child ul li:last-child a {
  margin-bottom: 0;
}

.vertical-menu-mobile-header {
  background-color: #333;
}
.vertical-menu-mobile-header .header-right-icons .single-icon a i {
  color: #fff;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .vertical-menu-mobile-header .site-mobile-navigation .site-mobile-nav .dl-trigger {
    top: -33px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .vertical-menu-mobile-header .site-mobile-navigation .site-mobile-nav .dl-trigger {
    top: -33px;
  }
}
@media only screen and (max-width: 767px) {
  .vertical-menu-mobile-header .site-mobile-navigation .site-mobile-nav .dl-trigger {
    top: -33px;
  }
}
.vertical-menu-mobile-header .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner {
  background-color: #fff;
}
.vertical-menu-mobile-header .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:before {
  background-color: #fff;
}
.vertical-menu-mobile-header .site-mobile-navigation .hamburger .hamburger-box .hamburger-inner:after {
  background-color: #fff;
}

/*=====  End of 02. Header  ======*/
/*=============================================
=            03. Breadcrumb            =
=============================================*/
/*----------  backgrounds  ----------*/
.breadcrumb-area {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url('../images/backgrounds/testimonial-bg.png');
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-area {
    background-position-x: 10%;
  }
}
@media only screen and (max-width: 767px) {
  .breadcrumb-area {
    background-position-x: 10%;
  }
}
@media only screen and (max-width: 575px) {
  .breadcrumb-area {
    background-position-x: 20%;
  }
}
@media only screen and (max-width: 479px) {
  .breadcrumb-area {
    background-position-x: 35%;
  }
}

/*----------  breadcrumb title  ----------*/
.breadcrumb-title {
  font-size: 48px;
  line-height: 1.5;
  color: #333333;
  margin-bottom: 20px;
}
@media only screen and (max-width: 767px) {
  .breadcrumb-title {
    font-size: 45px;
  }
}
@media only screen and (max-width: 575px) {
  .breadcrumb-title {
    font-size: 42px;
  }
}
@media only screen and (max-width: 479px) {
  .breadcrumb-title {
    font-size: 30px;
  }
}

.breadcrumb-list {
  line-height: 1;
}
.breadcrumb-list__item {
  display: inline-block;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 500;
  line-height: 1.5;
}
.breadcrumb-list__item a {
  color: #999999;
}
.breadcrumb-list__item:after {
  right: 0;
  content: "/";
  margin: 0 5px 0 10px;
  color: #333333;
}
.breadcrumb-list__item--active {
  color: #333333;
  text-transform: uppercase;
}
.breadcrumb-list__item--active:after {
  visibility: hidden;
  opacity: 0;
}

/*=====  End of 03. Breadcrumb  ======*/
/*=============================================
=            04. Section title            =
=============================================*/
/*----------  default style  ----------*/
.section-title {
  margin-bottom: -5px;
}
.section-title h1 {
  font-size: 48px;
  line-height: 64px;
  margin-top: -13px;
  margin-bottom: 15px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .section-title h1 {
    font-size: 40px;
    line-height: 56px;
  }
}
@media only screen and (max-width: 767px) {
  .section-title h1 {
    font-size: 36px;
    line-height: 52px;
  }
}
@media only screen and (max-width: 575px) {
  .section-title h1 {
    font-size: 32px;
    line-height: 48px;
  }
}
@media only screen and (max-width: 479px) {
  .section-title h1 {
    font-size: 25px;
    line-height: 41px;
  }
}
.section-title h1 a {
  color: #333;
  display: inline-block;
}
.section-title h1 a:hover {
  opacity: 0.85;
}
.section-title p {
  line-height: 26px;
}
.section-title p.subtitle--deep {
  font-size: 14px;
  color: #333;
  font-weight: 500;
  margin-bottom: 35px;
  line-height: 24px;
  letter-spacing: 1px;
  margin-top: -5px;
}
.section-title p.subtitle--trending-home {
  font-size: 18px;
  line-height: 28px;
  font-weight: 400;
  margin-bottom: 0;
}
@media only screen and (max-width: 767px) {
  .section-title p.subtitle--trending-home {
    font-size: 16px;
    line-height: 26px;
  }
}
@media only screen and (max-width: 575px) {
  .section-title p.subtitle--trending-home {
    font-size: 14px;
    line-height: 24px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .section-title--concepthome h1 {
    font-size: 40px;
  }
}
@media only screen and (max-width: 479px) {
  .section-title--concepthome h1 {
    font-size: 40px;
  }
}
.section-title__label p {
  font-size: 14px;
  line-height: 24px;
  letter-spacing: 1px;
  font-weight: 600;
  color: #333333;
  margin-bottom: 0;
}
.section-title__label p span:before {
  display: inline-block;
  content: "";
  width: 50px;
  height: 1px;
  background-color: #cccccc;
  margin: 0 15px 5px 15px;
}
.section-title__label--left {
  position: absolute;
  -webkit-transform: rotate(90deg) translate(30%, 300%);
          transform: rotate(90deg) translate(30%, 300%);
}
.section-title__label--right {
  position: absolute;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
  right: -15px;
}
.section-title__label-style2 p {
  font-weight: 500;
}
.section-title__label-style2--left {
  position: absolute;
  top: 250px;
}
.section-title__label-style2--right {
  position: absolute;
  top: 250px;
}
.section-title__label-style3 p {
  font-weight: 500;
}
.section-title__label-style3--left {
  position: static;
  -webkit-transform: none;
          transform: none;
}
.section-title__label-style3--right {
  position: static;
  -webkit-transform: none;
          transform: none;
}
.section-title--one--collectionhome {
  font-size: 18px;
  line-height: 28px;
  color: #333;
}
.section-title--one--spectral h1 {
  font-family: "Spectral", serif;
  font-weight: 500;
}
.section-title--login h2 {
  font-size: 34px;
  line-height: 48px;
  color: #333;
}
.section-title--login p {
  font-size: 16px;
  line-height: 28px;
}
.section-title .title-blue {
  font-size: 50px;
  line-height: 1.3;
  font-family: "Spectral", serif;
  font-style: normal;
  color: #404969;
  font-weight: 400;
}
@media only screen and (max-width: 767px) {
  .section-title .title-blue {
    font-size: 40px;
  }
}
.section-title--full-border {
  font-size: 17px;
  color: #404969;
  line-height: 20px;
  text-align: center;
  font-weight: 600;
  font-style: normal;
  letter-spacing: 2px;
  position: relative;
}
.section-title--full-border span {
  display: inline-block;
  z-index: 9;
  padding: 0 20px;
  background-color: #ffffff;
}
.section-title--full-border:before {
  content: "";
  background-color: rgb(236, 234, 234);
  height: 1px;
  width: 100%;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: -1;
}

/*----------  slider title  ----------*/
.widget-slider-title {
  font-size: 20px;
  line-height: 22px;
  color: #333;
  font-weight: 600;
  margin-bottom: 35px;
  position: relative;
  padding-right: 60px;
}

/*----------  section label  ----------*/
.section-label {
  font-size: 14px;
  line-height: 24px;
  letter-spacing: 1px;
  font-weight: 600;
  color: #333333;
  margin-bottom: 0;
}

/*----------  instagram title  ----------*/
.instagram-title-container .title {
  font-size: 17px;
  color: rgba(51, 51, 51, 0.35);
  line-height: 1.3;
  font-weight: 600;
  font-style: normal;
  letter-spacing: 2px;
  margin-bottom: 30px;
}
.instagram-title-container .subtitle {
  font-size: 50px;
  font-weight: 300;
  line-height: 1.3;
  color: #333;
  font-style: italic;
  font-family: "Spectral", serif;
}
@media only screen and (max-width: 767px) {
  .instagram-title-container .subtitle {
    font-size: 40px;
  }
}
.instagram-title-container .subtitle--blue {
  font-style: normal;
  color: #404969;
  font-weight: 400;
}

/*=====  End of 04. Section title  ======*/
/*=============================================
=            05. Category            =
=============================================*/
/*----------  default style  ----------*/
.single-category {
  position: relative;
  overflow: hidden;
  /*----------  category style two  ----------*/
  /*----------  category style three  ----------*/
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category {
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category {
    margin-bottom: 10px;
  }
}
.single-category--concept-home .single-category__content .title p {
  font-size: 34px;
  line-height: 44px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category--concept-home .single-category__content .title p {
    font-size: 28px;
    line-height: 38px;
  }
}
.single-category--concept-home .single-category__content--textbanner {
  border: none;
}
.single-category--concept-home .single-category__content--textbanner:hover {
  border: none;
}
.single-category--concept-home .single-category__content--textbanner p span {
  color: #fff;
}
.single-category--concept-home--custom-width1 {
  max-width: 370px;
  margin: 0 auto;
}
.single-category--cosmetics-home .single-category__content .title p {
  font-size: 24px;
  line-height: 34px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category--cosmetics-home .single-category__content .title p {
    font-size: 28px;
    line-height: 38px;
  }
}
.single-category--cosmetics-home .single-category__content--textbanner {
  border: none;
}
.single-category--cosmetics-home .single-category__content--textbanner:hover {
  border: none;
}
.single-category--cosmetics-home .single-category__content--textbanner p span {
  color: #fff;
}
.single-category--cosmetics-home--custom-width1 {
  max-width: 370px;
  margin: 0 auto;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category--two {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-category--two {
    margin-bottom: 0;
  }
}
.single-category--three {
  position: relative;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category--three {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-category--three {
    margin-bottom: 0;
  }
}
.single-category__image {
  overflow: hidden;
  position: relative;
}
.single-category__image img {
  width: 100%;
  -webkit-transition: 0.8s;
  transition: 0.8s;
}
.single-category__image:after {
  display: block;
  position: absolute;
  content: "";
  top: 20px;
  left: 20px;
  width: calc(100% - 40px);
  height: calc(100% - 40px);
  background-color: transparent;
  border: 1px solid #ffffff;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.single-category__image--two:after {
  display: none;
}
.single-category__image--three--creativehome:after {
  display: none;
}
.single-category__content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  z-index: 5;
  position: relative;
  /*----------  category two content style  ----------*/
  /*----------  category three content style  ----------*/
  /*----------  simple text banner  ----------*/
}
.single-category__content .title {
  width: 70%;
  position: relative;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content .title {
    width: 70%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content .title {
    width: 70%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content .title {
    width: 70%;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content .title {
    width: 70%;
  }
}
.single-category__content .title p {
  font-size: 18px;
  line-height: 36px;
  font-weight: 400;
  margin: 0;
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  margin-bottom: 0;
  color: #333;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
}
.single-category__content .title a {
  display: inline-block;
  font-size: 24px;
  line-height: 36px;
  color: #d3122a;
  -webkit-transform: translateY(60%);
          transform: translateY(60%);
  visibility: hidden;
  opacity: 0;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  position: absolute;
  top: 0;
  left: 0;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content .title a {
    font-size: 22px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content .title a {
    font-size: 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content .title a {
    font-size: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content .title a {
    font-size: 20px;
  }
}
.single-category__content .product-count {
  width: 30%;
  font-size: 14px;
  line-height: 36px;
  font-weight: 500;
  letter-spacing: 1px;
  text-align: right;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content .product-count {
    width: 30%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content .product-count {
    width: 30%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content .product-count {
    width: 30%;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content .product-count {
    width: 30%;
  }
}
.single-category__content .product-count:before {
  display: inline-block;
  vertical-align: middle;
  content: "";
  width: 50px;
  height: 1px;
  margin-right: 10px;
  background-color: #cccccc;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content .product-count:before {
    width: 30px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content .product-count:before {
    width: 10px;
  }
}
@media only screen and (max-width: 479px) {
  .single-category__content .product-count:before {
    width: 10px;
  }
}
.single-category__content--two .title p {
  display: none;
}
.single-category__content--two .title a {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  color: #333;
  font-weight: 500;
}
.single-category__content--three {
  position: absolute;
  bottom: 50px;
  left: 50px;
  width: calc(100% - 100px);
  /*----------  creative home style  ----------*/
  /*----------  banner category  ----------*/
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three {
    bottom: 25px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content--three {
    bottom: 25px;
  }
}
.single-category__content--three .title {
  width: 100%;
}
.single-category__content--three .title p {
  color: #333333;
  font-size: 34px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three .title p {
    font-size: 24px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content--three .title p {
    font-size: 24px;
  }
}
.single-category__content--three--creativehome {
  bottom: 30px;
  left: 40px;
  width: 100%;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content--three--creativehome {
    bottom: 0;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three--creativehome {
    bottom: 0;
    left: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content--three--creativehome {
    bottom: 0;
    left: 20px;
  }
}
.single-category__content--three--creativehome .title p > a {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  font-weight: 500;
  font-style: normal;
  font-size: 34px;
  line-height: 48px;
  color: #333333;
  text-transform: capitalize;
}
.single-category__content--three--creativehome .title p > a:hover {
  color: #333;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content--three--creativehome .title p > a {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three--creativehome .title p > a {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content--three--creativehome .title p > a {
    font-size: 25px;
    line-height: 35px;
  }
}
.single-category__content--three--creativehome .title a {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  position: static;
  visibility: visible;
  opacity: 1;
  font-size: 14px;
  color: #333;
  text-transform: uppercase;
  font-weight: 500;
}
.single-category__content--three--creativehome .title a:hover {
  color: #d3122a;
}
.single-category__content--three--banner {
  width: 50%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three--banner {
    width: 80%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content--three--banner {
    width: 80%;
    bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-category__content--three--banner {
    bottom: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .single-category__content--three--banner {
    width: 100%;
    bottom: 5px;
  }
}
.single-category__content--three--banner .title p {
  margin-bottom: 15px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--three--banner .title p {
    font-size: 28px;
    line-height: 38px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content--three--banner .title p {
    margin-bottom: 5px;
  }
}
.single-category__content--three--banner .title p a {
  font-weight: 400;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content--three--banner .title p a {
    font-size: 15px;
    line-height: 25px;
  }
}
.single-category__content--three--banner .title p a span {
  display: block;
}
.single-category__content--three--banner .title > a {
  border-bottom: 1px solid #333;
  line-height: 22px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-category__content--three--banner .title > a {
    font-size: 12px;
    line-height: 22px;
  }
}
.single-category__content--three--banner .title > a:hover {
  border-color: #d3122a;
}
.single-category__content--textbanner {
  padding: 40px;
  border: 1px solid #d8d8d8;
  min-height: 520px;
  display: block;
  position: relative;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content--textbanner {
    min-height: 400px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--textbanner {
    min-height: 350px;
  }
}
.single-category__content--textbanner a {
  font-size: 24px;
  line-height: 36px;
  font-weight: 400;
  color: #333;
  position: absolute;
  top: 30px;
  right: 40px;
  z-index: 5px;
}
.single-category__content--textbanner a:hover {
  color: #d3122a;
}
.single-category__content--textbanner p {
  position: absolute;
  bottom: 30px;
}
.single-category__content--textbanner p span {
  display: block;
  font-size: 56px;
  line-height: 66px;
  color: #333;
  font-weight: 300;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-category__content--textbanner p span {
    font-size: 42px;
    line-height: 52px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-category__content--textbanner p span {
    font-size: 35px;
    line-height: 45px;
  }
}
.single-category__content--textbanner:hover {
  border: 1px solid #dddddd;
}
.single-category__content--white .title p a {
  color: #ffffff;
}
.single-category__content--white .title p a:hover {
  color: #ffffff;
}
.single-category__content--white .title a {
  color: #ffffff;
  border-color: #ffffff;
}
.single-category:hover .single-category__image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.single-category:hover .single-category__image:after {
  visibility: visible;
  opacity: 1;
}
.single-category:hover .single-category__content .title p {
  visibility: hidden;
  opacity: 0;
  -webkit-transform: translateY(-60%);
          transform: translateY(-60%);
}
.single-category:hover .single-category__content .title a {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-category:hover .single-category__content.single-category__content--three--creativehome .title p {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-category:hover .single-category__content.single-category__content--three--creativehome .title a {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-category .banner-link {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  margin: auto;
}

/*----------  category wrapper  ----------*/
.product-category-container--collectionhome-wrapper {
  margin-bottom: -60px;
}

/*----------  Masonry category layout  ----------*/
.masonry-category-layout {
  margin-bottom: -10px;
}
.masonry-category-layout .grid-item {
  margin-bottom: 10px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .masonry-category-layout .grid-item {
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .masonry-category-layout .grid-item {
    margin-bottom: 10px;
  }
}
.masonry-category-layout--creativehome {
  margin-bottom: -25px;
}
.masonry-category-layout--creativehome .grid-item {
  margin-bottom: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .masonry-category-layout--creativehome .grid-item {
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .masonry-category-layout--creativehome .grid-item {
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 575px) {
  .masonry-category-layout--creativehome .grid-item {
    margin-bottom: 30px;
  }
}
/*----------  accessories single category  ----------*/
.accessories-single-category {
  position: relative;
  overflow: hidden;
}
.accessories-single-category a.banner-hover {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.accessories-single-category img {
  width: 100%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.accessories-single-category span.number {
  position: absolute;
  top: 40px;
  left: 40px;
  z-index: 2;
  font-size: 18px;
  line-height: 36px;
  letter-spacing: 1px;
  font-weight: 600;
  color: #333333;
}
.accessories-single-category__content {
  position: absolute;
  bottom: 30px;
  left: 30px;
}
.accessories-single-category__content p {
  margin-bottom: 0;
}
.accessories-single-category__content p.name {
  font-size: 18px;
  line-height: 28px;
  font-weight: 400;
  color: #333333;
}
.accessories-single-category__content p.price {
  font-size: 14px;
  line-height: 28px;
  font-weight: 700;
  color: #333333;
}
.accessories-single-category__content p.price .discounted {
  color: #9b9b9b;
  font-size: 12px;
  line-height: 28px;
  font-weight: 300;
  text-decoration: line-through;
  padding-right: 10px;
}
.accessories-single-category:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.product-category-text-content {
  width: 920px;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
}
.product-category-text-content .image {
  margin-bottom: 30px;
}
.product-category-text-content .image img {
  -webkit-animation-name: spin;
          animation-name: spin;
  -webkit-animation-duration: 6000ms;
          animation-duration: 6000ms;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.product-category-text-content .title {
  font-size: 40px;
  line-height: 1.3;
  color: #404969;
  margin-bottom: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .product-category-text-content .title {
    font-size: 35px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .product-category-text-content .title {
    font-size: 25px;
  }
}
.product-category-text-content .text {
  margin-bottom: 50px;
}
.product-category-text-content a {
  display: inline-block;
  color: #ffffff;
  background-color: #e75e47;
  border-color: transparent;
  font-size: 14px;
  font-weight: 500;
  padding: 15px 50px;
}
.product-category-text-content a:hover {
  background-color: #404969;
}

.product-category-list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: -30px;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.product-category-list .single-product-category {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 20%;
          flex: 0 0 20%;
  max-width: 20%;
  margin-bottom: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product-category-list .single-product-category {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33%;
            flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}
@media only screen and (max-width: 767px) {
  .product-category-list .single-product-category {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .product-category-list .single-product-category {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
  }
}
.product-category-list .single-product-category__image {
  margin-bottom: 20px;
  min-height: 130px;
}
.product-category-list .single-product-category__image a {
  display: block;
  width: 100%;
}
.product-category-list .single-product-category__image a:hover img {
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}
.product-category-list .single-product-category__title {
  font-size: 20px;
  color: #404969;
  line-height: 1.3;
  font-weight: 500;
}
.product-category-list .single-product-category__title:hover {
  color: #e75e47;
}
.product-category-list .single-product-category__title:hover span {
  color: #e75e47;
}
.product-category-list .single-product-category__title span {
  font-weight: 300;
  font-size: 14px;
  color: #404969;
}

/*=====  End of 05. Category  ======*/
/*=============================================
=            06. Slider            =
=============================================*/
/*----------  default settings  ----------*/
.slick-slide > div > div {
  vertical-align: middle;
}

/*----------  product category slider  ----------*/
.product-category-slider:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.product-category-slider .slick-list {
  margin-right: -25px;
  margin-left: -25px;
}
@media only screen and (max-width: 767px) {
  .product-category-slider .slick-list {
    margin-right: -15px;
    margin-left: -15px;
  }
}
.product-category-slider .col {
  padding: 0 25px;
}
@media only screen and (max-width: 767px) {
  .product-category-slider .col {
    padding: 0 15px;
  }
}
.product-category-slider .slick-arrow {
  background: none;
  border: none;
  font-size: 40px;
  color: #333;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
}
.product-category-slider .slick-arrow.slick-next {
  right: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .product-category-slider .slick-arrow.slick-next {
    right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .product-category-slider .slick-arrow.slick-next {
    right: 15px;
  }
}
.product-category-slider .slick-arrow.slick-prev {
  left: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .product-category-slider .slick-arrow.slick-prev {
    left: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .product-category-slider .slick-arrow.slick-prev {
    left: 15px;
  }
}

/*----------  short single product slider  ----------*/
.product-carousel {
  /*----------  smart home separate style  ----------*/
}
.product-carousel .slick-list {
  margin-left: -15px;
  margin-right: -15px;
}
.product-carousel .slick-arrow {
  background: none;
  border: none;
  font-size: 30px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.product-carousel .slick-arrow.slick-next {
  right: -60px;
}
.product-carousel .slick-arrow.slick-prev {
  left: -60px;
}
.product-carousel .slick-dots {
  list-style: none;
  display: block;
  text-align: center;
  margin-top: 105px;
  padding: 0;
  width: 100%;
}
@media only screen and (max-width: 767px) {
  .product-carousel .slick-dots {
    margin-top: 50px;
  }
}
.product-carousel .slick-dots li {
  position: relative;
  display: inline-block;
  height: 10px;
  width: 10px;
  margin-right: 15px;
  margin-left: 0;
  line-height: 1.5;
  padding: 0;
  cursor: pointer;
  background: none;
}
.product-carousel .slick-dots li:last-child {
  margin-right: 0;
}
.product-carousel .slick-dots li.slick-active button {
  background-color: transparent !important;
  border: 1px solid #333333;
  border-radius: 100%;
  opacity: 1;
  width: 18px;
  height: 18px;
  margin: 0;
}
.product-carousel .slick-dots li button {
  font-size: 0;
  display: block;
  cursor: pointer;
  outline: 0;
  line-height: 0;
  border: 0;
  width: 10px;
  height: 10px;
  color: transparent;
  background-color: #1f1f1f !important;
  opacity: 0.2;
  padding: 0;
  border-radius: 50%;
  margin: 0 4px;
}
.product-carousel:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.product-carousel:hover .slick-arrow.slick-next {
  right: -50px;
}
.product-carousel:hover .slick-arrow.slick-prev {
  left: -50px;
}
.product-carousel--smarthome .slick-list {
  margin-left: -15px;
  margin-right: -15px;
}
.product-carousel--smarthome .slick-dots {
  margin-top: 50px;
  margin-bottom: 20px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product-carousel--smarthome .slick-dots {
    margin-bottom: 15px;
  }
}
@media only screen and (max-width: 767px) {
  .product-carousel--smarthome .slick-dots {
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .product-carousel--smarthome .slick-dots {
    margin-bottom: 35px;
  }
}

/*----------  single product widget slider  ----------*/
.single-product-widget-slider-container .slick-arrow {
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  border: none;
  color: #999999;
  font-size: 12px;
  line-height: 28px;
  width: 28px;
  height: 28px;
}
.single-product-widget-slider-container .slick-arrow.slick-prev {
  right: 30px;
}

.single-product-widget-slider .slick-slide > div {
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
  margin-bottom: 20px;
}
.single-product-widget-slider .slick-slide > div:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}

/*----------  blog post slider  ----------*/
.blog-post-slider .slick-list {
  margin-left: -15px;
  margin-right: -15px;
}
.blog-post-slider .slick-arrow {
  background: none;
  border: none;
  font-size: 30px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.blog-post-slider .slick-arrow.slick-next {
  right: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .blog-post-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .blog-post-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
.blog-post-slider .slick-arrow.slick-prev {
  left: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .blog-post-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .blog-post-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
.blog-post-slider:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.blog-post-slider:hover .slick-arrow.slick-next {
  right: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .blog-post-slider:hover .slick-arrow.slick-next {
    right: -25px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .blog-post-slider:hover .slick-arrow.slick-next {
    right: -25px;
  }
}
.blog-post-slider:hover .slick-arrow.slick-prev {
  left: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .blog-post-slider:hover .slick-arrow.slick-prev {
    left: -35px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .blog-post-slider:hover .slick-arrow.slick-prev {
    left: -35px;
  }
}

/*----------  instagram slider  ----------*/
.instagram-carousel .slick-list {
  margin-left: -15px;
  margin-right: -15px;
}
.instagram-carousel .slick-arrow {
  background: none;
  border: none;
  font-size: 30px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.instagram-carousel .slick-arrow.slick-next {
  right: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel .slick-arrow.slick-next {
    right: 0;
  }
}
.instagram-carousel .slick-arrow.slick-prev {
  left: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel .slick-arrow.slick-prev {
    left: 0;
  }
}
.instagram-carousel:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.instagram-carousel:hover .slick-arrow.slick-next {
  right: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
.instagram-carousel:hover .slick-arrow.slick-prev {
  left: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}

.instagram-carousel-type3 .slick-arrow,
.instagram-carousel-type2 .slick-arrow {
  background: none;
  border: none;
  font-size: 30px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.instagram-carousel-type3 .slick-arrow.slick-next,
.instagram-carousel-type2 .slick-arrow.slick-next {
  right: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel-type3 .slick-arrow.slick-next,
.instagram-carousel-type2 .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel-type3 .slick-arrow.slick-next,
.instagram-carousel-type2 .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel-type3 .slick-arrow.slick-next,
.instagram-carousel-type2 .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel-type3 .slick-arrow.slick-next,
.instagram-carousel-type2 .slick-arrow.slick-next {
    right: 0;
  }
}
.instagram-carousel-type3 .slick-arrow.slick-prev,
.instagram-carousel-type2 .slick-arrow.slick-prev {
  left: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel-type3 .slick-arrow.slick-prev,
.instagram-carousel-type2 .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel-type3 .slick-arrow.slick-prev,
.instagram-carousel-type2 .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel-type3 .slick-arrow.slick-prev,
.instagram-carousel-type2 .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel-type3 .slick-arrow.slick-prev,
.instagram-carousel-type2 .slick-arrow.slick-prev {
    left: 0;
  }
}
.instagram-carousel-type3:hover .slick-arrow,
.instagram-carousel-type2:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.instagram-carousel-type3:hover .slick-arrow.slick-next,
.instagram-carousel-type2:hover .slick-arrow.slick-next {
  right: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-next,
.instagram-carousel-type2:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-next,
.instagram-carousel-type2:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-next,
.instagram-carousel-type2:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-next,
.instagram-carousel-type2:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
.instagram-carousel-type3:hover .slick-arrow.slick-prev,
.instagram-carousel-type2:hover .slick-arrow.slick-prev {
  left: -50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-prev,
.instagram-carousel-type2:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-prev,
.instagram-carousel-type2:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-prev,
.instagram-carousel-type2:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-carousel-type3:hover .slick-arrow.slick-prev,
.instagram-carousel-type2:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}

/*----------  multi testimonial slider  ----------*/
.multi-testimonial-slider-container .slick-list {
  margin-left: -15px;
  margin-right: -15px;
}
.multi-testimonial-slider-container .slick-arrow {
  background: none;
  border: none;
  font-size: 72px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.multi-testimonial-slider-container .slick-arrow.slick-next {
  right: -100px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .multi-testimonial-slider-container .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .multi-testimonial-slider-container .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .multi-testimonial-slider-container .slick-arrow.slick-next {
    right: 0;
  }
}
.multi-testimonial-slider-container .slick-arrow.slick-prev {
  left: -100px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .multi-testimonial-slider-container .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .multi-testimonial-slider-container .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .multi-testimonial-slider-container .slick-arrow.slick-prev {
    left: 0;
  }
}
.multi-testimonial-slider-container:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.multi-testimonial-slider-container--style2 .slick-arrow {
  top: -80px;
  right: 0 !important;
  left: auto !important;
  visibility: visible;
  opacity: 1;
  font-size: 30px !important;
  color: #404969;
}
.multi-testimonial-slider-container--style2 .slick-arrow.slick-prev {
  right: 50px !important;
}
.multi-testimonial-slider-container--white-content .multi-testimonial-single-item__text {
  color: #ffffff;
}
.multi-testimonial-slider-container--white-content .multi-testimonial-single-item__author-info .content .name {
  color: #ffffff;
}
.multi-testimonial-slider-container--white-content .multi-testimonial-single-item__author-info .content .designation {
  color: #ffffff;
}

/*----------  smart home carousel container  ----------*/
.product-carousel-container--smarthome {
  overflow: hidden;
}

/*----------  decor hero slider  ----------*/
.decor-slider-wrapper .slick-arrow {
  background: none;
  border: none;
  font-size: 62px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
@media only screen and (max-width: 767px) {
  .decor-slider-wrapper .slick-arrow {
    font-size: 32px;
    color: #333;
  }
}
@media only screen and (max-width: 479px) {
  .decor-slider-wrapper .slick-arrow {
    font-size: 25px;
  }
}
.decor-slider-wrapper .slick-arrow.slick-next {
  right: 20%;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .decor-slider-wrapper .slick-arrow.slick-next {
    right: 10%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .decor-slider-wrapper .slick-arrow.slick-next {
    right: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .decor-slider-wrapper .slick-arrow.slick-next {
    right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .decor-slider-wrapper .slick-arrow.slick-next {
    right: 0;
  }
}
.decor-slider-wrapper .slick-arrow.slick-prev {
  left: 20%;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .decor-slider-wrapper .slick-arrow.slick-prev {
    left: 10%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .decor-slider-wrapper .slick-arrow.slick-prev {
    left: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .decor-slider-wrapper .slick-arrow.slick-prev {
    left: 0;
  }
}
@media only screen and (max-width: 767px) {
  .decor-slider-wrapper .slick-arrow.slick-prev {
    left: 0;
  }
}
.decor-slider-wrapper:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}

.decor-single-slider {
  padding: 0 100px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .decor-single-slider {
    padding: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .decor-single-slider {
    padding: 0;
  }
}
@media only screen and (max-width: 767px) {
  .decor-single-slider {
    padding: 0;
  }
}

.decor-single-slider-content {
  position: relative;
}
.decor-single-slider-content .slider-image img {
  margin-left: auto;
  margin-right: auto;
}
.decor-single-slider-content .slider-content {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  left: 70px;
}
@media only screen and (max-width: 479px) {
  .decor-single-slider-content .slider-content {
    left: 30px;
  }
}
@media only screen and (max-width: 575px) {
  .decor-single-slider-content .slider-content a.lezada-button {
    font-size: 12px;
    padding: 10px 20px;
  }
}
@media only screen and (max-width: 479px) {
  .decor-single-slider-content .slider-content a.lezada-button {
    font-size: 10px;
    padding: 5px 15px;
  }
}
.decor-single-slider-content .color-title {
  font-size: 16px;
  line-height: 36px;
  letter-spacing: 3px;
  font-weight: 600;
  margin-bottom: 8px;
  text-transform: uppercase;
}
@media only screen and (max-width: 575px) {
  .decor-single-slider-content .color-title {
    font-size: 12px;
    line-height: 32px;
  }
}
@media only screen and (max-width: 479px) {
  .decor-single-slider-content .color-title {
    margin-bottom: 0;
    line-height: 26px;
  }
}
.decor-single-slider-content .color-title--blue {
  color: #68aaeb;
}
.decor-single-slider-content .color-title--green {
  color: #7a9f63;
}
.decor-single-slider-content .color-title--brown {
  color: #c5a374;
}
.decor-single-slider-content .color-title--orange {
  color: #db8b79;
}
.decor-single-slider-content .main-title {
  font-size: 40px;
  line-height: 56px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #333333;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .decor-single-slider-content .main-title {
    font-size: 30px;
    line-height: 45px;
  }
}
@media only screen and (max-width: 767px) {
  .decor-single-slider-content .main-title {
    font-size: 30px;
    line-height: 45px;
  }
}
@media only screen and (max-width: 575px) {
  .decor-single-slider-content .main-title {
    font-size: 20px;
    line-height: 35px;
  }
}
@media only screen and (max-width: 479px) {
  .decor-single-slider-content .main-title {
    margin-bottom: 10px;
  }
}

/*----------  big image gallery slider  ----------*/
.shop-product__big-image-gallery-slider {
  position: relative;
}
.shop-product__big-image-gallery-slider .slick-dots {
  list-style: none;
  display: block;
  text-align: center;
  padding: 0;
  width: 100%;
  position: absolute;
  bottom: 20px;
}
@media only screen and (max-width: 767px) {
  .shop-product__big-image-gallery-slider .slick-dots {
    margin-top: 50px;
  }
}
.shop-product__big-image-gallery-slider .slick-dots li {
  position: relative;
  display: inline-block;
  height: 10px;
  width: 10px;
  margin-right: 15px;
  margin-left: 0;
  line-height: 1.5;
  padding: 0;
  cursor: pointer;
  background: none;
}
.shop-product__big-image-gallery-slider .slick-dots li:last-child {
  margin-right: 0;
}
.shop-product__big-image-gallery-slider .slick-dots li.slick-active button {
  background-color: transparent !important;
  border: 1px solid #333333;
  border-radius: 100%;
  opacity: 1;
  width: 18px;
  height: 18px;
  margin: 0;
}
.shop-product__big-image-gallery-slider .slick-dots li button {
  font-size: 0;
  display: block;
  cursor: pointer;
  outline: 0;
  line-height: 0;
  border: 0;
  width: 10px;
  height: 10px;
  color: transparent;
  background-color: #1f1f1f !important;
  opacity: 0.2;
  padding: 0;
  border-radius: 50%;
  margin: 0 4px;
}
.shop-product__big-image-gallery-slider .slick-arrow {
  background: none;
  border: none;
  font-size: 30px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.shop-product__big-image-gallery-slider .slick-arrow.slick-next {
  right: 20px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-next {
    right: 0;
  }
}
.shop-product__big-image-gallery-slider .slick-arrow.slick-prev {
  left: 20px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__big-image-gallery-slider .slick-arrow.slick-prev {
    left: 0;
  }
}
.shop-product__big-image-gallery-slider:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.shop-product__big-image-gallery-slider:hover .slick-arrow.slick-next {
  right: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
.shop-product__big-image-gallery-slider:hover .slick-arrow.slick-prev {
  left: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__big-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}

/*----------  small image gallery slider  ----------*/
.shop-product__small-image-gallery-slider {
  position: relative;
  cursor: pointer;
}
.shop-product__small-image-gallery-slider--vertical {
  position: relative;
  cursor: pointer;
}
.shop-product__small-image-gallery-slider--vertical .slick-current .single-image img {
  border-color: #333;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.shop-product__small-image-gallery-slider--vertical .single-image {
  margin-bottom: 10px;
}
.shop-product__small-image-gallery-slider--vertical .single-image img {
  border: 1px solid transparent;
  width: 100%;
}
@media only screen and (max-width: 767px) {
  .shop-product__small-image-gallery-slider--vertical .single-image {
    padding: 0 5px;
  }
}
.shop-product__small-image-gallery-slider--vertical .slick-arrow {
  position: absolute;
  z-index: 3;
  height: 30px;
  width: 49%;
  color: #ffffff;
  opacity: 0.7;
  background-color: #7e7e7e;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  border: none;
}
.shop-product__small-image-gallery-slider--vertical .slick-arrow.slick-prev {
  left: 0 !important;
  top: auto;
  bottom: 0;
}
.shop-product__small-image-gallery-slider--vertical .slick-arrow.slick-next {
  left: auto;
  right: 0 !important;
  top: auto;
  bottom: 0;
}
.shop-product__small-image-gallery-slider .single-image img {
  border: 1px solid transparent;
}
.shop-product__small-image-gallery-slider .slick-current .single-image img {
  border-color: #333;
}
.shop-product__small-image-gallery-slider .slick-arrow {
  background: none;
  border: none;
  font-size: 20px;
  color: #e7e7e7;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.shop-product__small-image-gallery-slider .slick-arrow.slick-next {
  right: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-next {
    right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-next {
    right: 0;
  }
}
.shop-product__small-image-gallery-slider .slick-arrow.slick-prev {
  left: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-prev {
    left: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__small-image-gallery-slider .slick-arrow.slick-prev {
    left: 0;
  }
}
.shop-product__small-image-gallery-slider:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.shop-product__small-image-gallery-slider:hover .slick-arrow.slick-next {
  right: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-next {
    right: 10px;
  }
}
.shop-product__small-image-gallery-slider:hover .slick-arrow.slick-prev {
  left: 10px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__small-image-gallery-slider:hover .slick-arrow.slick-prev {
    left: 10px;
  }
}

.lezada-slick-slider--fullscreen {
  position: relative;
  height: 700px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .lezada-slick-slider--fullscreen {
    height: 600px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .lezada-slick-slider--fullscreen {
    height: 500px;
  }
}
@media only screen and (max-width: 767px) {
  .lezada-slick-slider--fullscreen {
    height: 500px;
  }
}
@media only screen and (max-width: 479px) {
  .lezada-slick-slider--fullscreen {
    height: 400px;
  }
}
.lezada-slick-slider--fullscreen .slick-list, .lezada-slick-slider--fullscreen .slick-track, .lezada-slick-slider--fullscreen .slick-slide > div {
  height: 100%;
}
.lezada-slick-slider--fullscreen .slick-active .lezada-single-slider__content * {
  -webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
}
.lezada-slick-slider--fullscreen .slick-active .lezada-single-slider__content .subtitle {
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.lezada-slick-slider--fullscreen .slick-active .lezada-single-slider__content .main-title {
  -webkit-animation-duration: 1.5s;
          animation-duration: 1.5s;
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.lezada-slick-slider--fullscreen .slick-active .lezada-single-slider__content .lezada-button {
  -webkit-animation-duration: 2.5s;
          animation-duration: 2.5s;
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.lezada-slick-slider--fullscreen .lezada-single-slider {
  height: 100%;
  width: 100%;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content {
  padding-right: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .lezada-slick-slider--fullscreen .lezada-single-slider__content {
    padding: 0 15px;
  }
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .subtitle {
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  margin-bottom: 33px;
  color: #ffffff;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .subtitle--black {
  color: #333;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .main-title {
  font-size: 56px;
  line-height: 71px;
  margin-bottom: 35px;
  color: #ffffff;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .main-title--black {
  color: #333;
}
@media only screen and (max-width: 767px) {
  .lezada-slick-slider--fullscreen .lezada-single-slider__content .main-title {
    font-size: 40px;
    line-height: 60px;
  }
}
@media only screen and (max-width: 479px) {
  .lezada-slick-slider--fullscreen .lezada-single-slider__content .main-title {
    font-size: 30px;
    line-height: 40px;
  }
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .lezada-button {
  background-color: #ffffff;
  color: #333 !important;
  border-color: #ffffff;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .lezada-button:hover {
  background-color: transparent;
  color: #ffffff !important;
  border-color: #ffffff;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .lezada-button--red {
  background-color: #d3122a;
  border-color: #d3122a;
  color: #ffffff !important;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .lezada-button--dark {
  background-color: #333;
  color: #fff !important;
  border-color: #333;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content .lezada-button--dark:hover {
  background-color: transparent;
  color: #333 !important;
  border-color: #333;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style {
  padding-left: 15px;
  padding-top: 100px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style {
    padding-top: 60px;
  }
}
@media only screen and (max-width: 767px) {
  .lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style {
    padding-top: 50px;
  }
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style .subtitle {
  font-family: "Spectral", serif;
  font-weight: 300;
  font-style: italic;
  text-transform: capitalize;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style .main-title {
  font-family: "Spectral", serif;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style .lezada-button {
  background-color: transparent;
  color: #ffffff !important;
}
.lezada-slick-slider--fullscreen .lezada-single-slider__content--spectral-style .lezada-button:hover {
  background-color: #ffffff;
  color: #333 !important;
}
.lezada-slick-slider--fullscreen .lezada-single-slider--overlay {
  position: relative;
}
.lezada-slick-slider--fullscreen .lezada-single-slider--overlay:before {
  position: absolute;
  content: "";
  background: #000000;
  opacity: 0.4;
  width: 100%;
  height: 100%;
}
.lezada-slick-slider--fullscreen .slick-arrow {
  position: absolute;
  top: 50%;
  background: #fff;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 50px;
  height: 50px;
  text-align: center;
  line-height: 51px;
  color: #999;
  -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 7px rgba(0, 0, 0, 0.15);
  -webkit-transition: 0.3s;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
  font-size: 18px;
  border: none;
  z-index: 3;
}
@media only screen and (max-width: 767px) {
  .lezada-slick-slider--fullscreen .slick-arrow {
    display: none;
  }
}
.lezada-slick-slider--fullscreen .slick-arrow:hover {
  background-color: #333;
  color: #ffffff;
}
.lezada-slick-slider--fullscreen .slick-arrow.slick-prev {
  left: 15px;
  right: auto;
}
.lezada-slick-slider--fullscreen .slick-arrow.slick-next {
  right: 15px;
  left: auto;
}
.lezada-slick-slider--fullscreen .slick-dots {
  position: absolute;
  left: 50%;
  bottom: 30px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.lezada-slick-slider--fullscreen .slick-dots li button {
  font-size: 0;
  width: 12px;
  height: 12px;
  background: #999;
  margin: 0 5px;
  border-radius: 50%;
  border: none;
}
.lezada-slick-slider--fullscreen .slick-dots li.slick-active button {
  background: #fff;
}
.lezada-slick-slider--fullscreen:hover .slick-arrow {
  visibility: visible;
  opacity: 1;
}
.lezada-slick-slider--fullscreen:hover .slick-arrow.slick-prev {
  left: 30px;
  right: auto;
}
.lezada-slick-slider--fullscreen:hover .slick-arrow.slick-next {
  right: 30px;
  left: auto;
}
.lezada-slick-slider--swimsuit-home {
  height: 840px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .lezada-slick-slider--swimsuit-home {
    height: 800px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .lezada-slick-slider--swimsuit-home {
    height: 750px;
  }
}
@media only screen and (max-width: 479px) {
  .lezada-slick-slider--swimsuit-home {
    height: 550px;
  }
}
.lezada-slick-slider--swimsuit-home .slick-list, .lezada-slick-slider--swimsuit-home .slick-track, .lezada-slick-slider--swimsuit-home .slick-slide > div {
  height: 100%;
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content {
  padding-left: 30px;
  padding-right: 30px;
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home {
  width: 100%;
  height: 100%;
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home .image {
  margin-bottom: 30px;
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home .image img {
  margin-left: auto;
  margin-right: auto;
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home .content .title {
  color: #E75E47;
  font-size: 30px;
  font-weight: 400;
  margin-bottom: 15px;
}
@media only screen and (max-width: 479px) {
  .lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home .content .title {
    font-size: 25px;
  }
}
.lezada-slick-slider--swimsuit-home .lezada-single-slider__content .swimsuit-home .content .price {
  color: #E75E47;
  font-size: 17px;
  font-weight: 600;
}
.lezada-slick-slider--swimsuit-home .slick-dots {
  position: absolute;
  bottom: 30px;
  left: 30px;
}
.lezada-slick-slider--swimsuit-home .slick-dots li {
  display: inline-block;
}
.lezada-slick-slider--swimsuit-home .slick-dots li button {
  background: none;
  border: none;
  background-color: #000;
  opacity: 0.2;
  height: 5px;
  width: 20px;
  font-size: 0;
  margin-right: 5px;
  padding: 0;
}
.lezada-slick-slider--swimsuit-home .slick-dots li.slick-active button {
  opacity: 1;
}

.slider-area--transparent-header .lezada-slick-slider--fullscreen {
  height: 900px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .slider-area--transparent-header .lezada-slick-slider--fullscreen {
    height: 700px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-area--transparent-header .lezada-slick-slider--fullscreen {
    height: 700px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-area--transparent-header .lezada-slick-slider--fullscreen {
    height: 600px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-area--transparent-header .lezada-slick-slider--fullscreen {
    height: 550px;
  }
}
@media only screen and (max-width: 479px) {
  .slider-area--transparent-header .lezada-slick-slider--fullscreen {
    height: 500px;
  }
}

.lezada-single-slider--cover {
  background-size: cover;
}
.lezada-single-slider--overlay {
  position: relative;
}
.lezada-single-slider--overlay:before {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #000000;
  content: "";
  width: 100%;
  height: 100%;
  opacity: 0.6;
}

/*=====  End of 06. Slider  ======*/
/*=============================================
=            07. Short single product            =
=============================================*/
/*----------  default style  ----------*/
.single-product {
  /*----------  product image  ----------*/
  /*----------  floating badge style  ----------*/
  /*----------  floating icon style  ----------*/
  /*----------  floating product variation  ----------*/
  /*----------  product content  ----------*/
  /*----------  hover style  ----------*/
  /*----------  smart home style  ----------*/
}
.single-product__image {
  position: relative;
}
.single-product__image > a {
  display: block;
}
.single-product__image > a img {
  width: 100%;
  -webkit-transition: 0.9s;
  transition: 0.9s;
}
.single-product__image > a img:nth-child(1) {
  visibility: visible;
  opacity: 1;
  z-index: 2;
}
.single-product__image > a img:nth-child(2) {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  opacity: 0;
  z-index: 1;
}
.single-product__floating-badges {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 9;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
.single-product__floating-badges span {
  text-transform: lowercase;
  display: inline-block;
  height: 48px;
  width: 48px;
  line-height: 48px;
  font-weight: 500;
  border-radius: 100%;
  z-index: 3;
  text-align: center;
  color: #ffffff;
  font-size: 14px;
  margin-bottom: 10px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-product__floating-badges span {
    height: 40px;
    width: 40px;
    line-height: 40px;
  }
}
.single-product__floating-badges span:last-child {
  margin-bottom: 0;
}
.single-product__floating-badges span.onsale {
  background-color: #98d8ca;
}
.single-product__floating-badges span.hot {
  background-color: #c61932;
}
.single-product__floating-badges span.out-of-stock {
  background-color: #333;
  font-size: 20px;
  cursor: pointer;
}
.single-product__floating-icons {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 9;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}
.single-product__floating-icons span {
  display: inline-block;
  visibility: hidden;
  opacity: 0;
}
.single-product__floating-icons span:nth-child(1) {
  -webkit-transition: 0.3s;
  transition: 0.3s;
  margin-top: 5px;
}
.single-product__floating-icons span:nth-child(2) {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  margin-top: 5px;
}
.single-product__floating-icons span:nth-child(3) {
  -webkit-transition: 0.9s;
  transition: 0.9s;
  margin-top: 5px;
}
.single-product__floating-icons span a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  background-color: #ffffff;
  text-align: center;
  margin-bottom: 5px;
  color: #7e7e7e;
}
.single-product__floating-icons span a:hover {
  color: #333;
}
.single-product__floating-icons span a i {
  font-size: 20px;
}
.single-product__variations {
  position: absolute;
  bottom: 25px;
  right: 20px;
  width: calc(100% - 40px);
  background-color: #ffffff;
  z-index: 9;
  padding: 10px;
  -webkit-transform: translateY(-50px);
          transform: translateY(-50px);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.9s;
  transition: 0.9s;
}
.single-product__variations .size-container {
  text-align: center;
}
.single-product__variations .size-container span.size {
  display: inline-block;
  cursor: pointer;
  margin-right: 8px;
  font-weight: 600;
  color: #999999;
  font-size: 14px;
}
.single-product__variations .size-container span.size:hover {
  color: #333333;
}
.single-product__variations .size-container span.size.active {
  color: #333333;
}
.single-product__variations .size-container span.size:last-child {
  margin-right: 0;
}
.single-product__variations .color-container {
  text-align: center;
}
.single-product__variations .color-container span {
  cursor: pointer;
  display: inline-block;
  border-radius: 500px;
  height: 18px;
  width: 18px;
  line-height: 18px;
  margin-right: 8px;
  border: 1px solid #ddd;
}
.single-product__variations .color-container span.active {
  -webkit-box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px #aaaaaa;
          box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px #aaaaaa;
}
.single-product__variations .color-container span.black {
  background-color: #000000;
}
.single-product__variations .color-container span.blue {
  background-color: #1E73BE;
}
.single-product__variations .color-container span.yellow {
  background-color: #DD9933;
}
.single-product__variations .color-container span:last-child {
  margin-right: 0;
}
.single-product__variations .clear-link {
  display: block;
  text-align: center;
  font-size: 8px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  text-decoration: underline;
  color: #333;
}
.single-product__variations .clear-link:hover {
  text-decoration: none;
}
.single-product__content {
  position: relative;
  padding-top: 25px;
}
.single-product__content .title {
  position: relative;
}
.single-product__content .title h3 {
  margin-bottom: 0;
}
.single-product__content .title h3 a {
  display: block;
  font-size: 17px;
  line-height: 1.6;
  margin-bottom: 10px;
  font-weight: 400;
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
          transform: translateY(0);
  color: #333;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
}
.single-product__content .title > a {
  display: inline-block;
  font-size: 18px;
  line-height: 28px;
  color: #d3122a;
  -webkit-transform: translateY(60%);
          transform: translateY(60%);
  visibility: hidden;
  opacity: 0;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  position: absolute;
  top: 0;
  left: 0;
  font-weight: 500;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-product__content .title > a {
    font-size: 16px;
  }
}
.single-product__content .title > a.active:before {
  content: "\f121";
  font-family: Ionicons;
  display: inline-block;
  margin-right: 5px;
  font-size: 15px;
  font-weight: 500;
  vertical-align: middle;
}
.single-product__content .title > a:before {
  content: "+";
  display: inline-block;
  margin-right: 5px;
}
.single-product__content .price .discounted-price {
  font-size: 14px;
  line-height: 1;
  font-weight: 600;
  color: #333333;
}
.single-product__content .price .main-price {
  font-size: 14px;
  line-height: 1;
  font-weight: 600;
  color: #333333;
  margin-right: 5px;
}
.single-product__content .price .main-price.discounted {
  color: #aaaaaa;
  font-weight: 600;
  font-size: 12px;
  line-height: 1;
  text-decoration: line-through;
}
.single-product__content:hover .single-product__variations {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(-80px);
          transform: translateY(-80px);
}
.single-product:hover .single-product__image a img:nth-child(2) {
  visibility: visible;
  opacity: 1;
}
.single-product:hover .single-product__content .title h3 a {
  visibility: hidden;
  opacity: 0;
  -webkit-transform: translateY(-60%);
          transform: translateY(-60%);
}
.single-product:hover .single-product__content .title > a {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-product:hover .single-product__floating-icons span {
  visibility: visible;
  opacity: 1;
}
.single-product:hover .single-product__floating-icons span:nth-child(1) {
  margin-top: 0;
}
.single-product:hover .single-product__floating-icons span:nth-child(2) {
  margin-top: 0;
}
.single-product:hover .single-product__floating-icons span:nth-child(3) {
  margin-top: 0;
}
.single-product--smarthome {
  position: relative;
}
.single-product--smarthome .single-product__content {
  position: absolute;
  bottom: 30px;
  left: 15px;
  z-index: 3;
}
.single-product--wearablehome {
  position: relative;
  border: 1px solid #DDDDDD;
}
.single-product--wearablehome .single-product__floating-icons {
  top: 50px;
}
.single-product--wearablehome .single-product__floating-cart {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 9;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  margin-top: 5px;
}
.single-product--wearablehome .single-product__floating-cart span.title a {
  font-size: 18px;
  line-height: 28px;
  color: #d3122a;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  font-weight: 500;
}
.single-product--wearablehome .single-product__floating-cart span.title a.active:before {
  content: "\f121";
  font-family: Ionicons;
  display: inline-block;
  margin-right: 5px;
  font-size: 15px;
  font-weight: 500;
  vertical-align: middle;
}
.single-product--wearablehome .single-product__floating-cart span.title a:before {
  content: "+";
  display: inline-block;
  margin-right: 5px;
}
.single-product--wearablehome .single-product__content {
  position: absolute;
  bottom: 30px;
  left: 15px;
  z-index: 3;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform: translateY(10px);
          transform: translateY(10px);
}
.single-product--wearablehome .single-product__content .title h3 a {
  -webkit-transform: none;
          transform: none;
}
.single-product--wearablehome:hover .single-product__floating-cart {
  visibility: visible;
  opacity: 1;
  margin-top: 0;
}
.single-product--wearablehome:hover .single-product__content {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-product--wearablehome:hover .title h3 a {
  visibility: visible !important;
  opacity: 1 !important;
  -webkit-transform: none !important;
          transform: none !important;
}
.single-product--list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
@media only screen and (max-width: 767px) {
  .single-product--list {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
.single-product--list .single-product__image {
  -ms-flex-preferred-size: 370px;
      flex-basis: 370px;
  margin-right: 30px;
}
@media only screen and (max-width: 767px) {
  .single-product--list .single-product__image {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    margin-right: 0;
    margin-bottom: 30px;
  }
}
.single-product--list .single-product__content {
  -ms-flex-preferred-size: calc(100% - 400px);
      flex-basis: calc(100% - 400px);
  padding-top: 0;
}
@media only screen and (max-width: 767px) {
  .single-product--list .single-product__content {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
.single-product--list .single-product__content .title h3 a {
  font-size: 25px;
}
.single-product--list .single-product__content .price {
  margin-bottom: 30px;
}
.single-product--list .single-product__content .price .main-price, .single-product--list .single-product__content .price .discounted-price {
  font-size: 16px;
}
.single-product--list .short-desc {
  margin-bottom: 30px;
}
.single-product--list:hover .single-product__image a img:nth-child(2) {
  visibility: visible;
  opacity: 1;
}
.single-product--list:hover .single-product__floating-icons span {
  visibility: visible;
  opacity: 1;
}
.single-product--list:hover .single-product__variations {
  visibility: visible;
  opacity: 1;
}

/*----------  single widget product  ----------*/
.single-widget-product {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.single-widget-product__image {
  width: 120px;
}
.single-widget-product__image a {
  display: block;
}
.single-widget-product__image a img {
  width: 100%;
}
.single-widget-product__content {
  width: calc(100% - 120px);
  padding-left: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.single-widget-product__content__top h3 {
  line-height: 1;
  margin-bottom: 0;
}
.single-widget-product__content__top h3 a {
  font-size: 16px;
  line-height: 22px;
  color: #7e7e7e;
}
.single-widget-product__content__top h3 a:hover {
  color: #333;
}
.single-widget-product__content__top .price .discounted-price {
  font-size: 14px;
  line-height: 1;
  font-weight: 600;
  color: #333333;
}
.single-widget-product__content__top .price .main-price {
  font-size: 14px;
  line-height: 1;
  font-weight: 600;
  color: #333333;
  margin-right: 5px;
}
.single-widget-product__content__top .price .main-price.discounted {
  color: #aaaaaa;
  font-weight: 600;
  font-size: 12;
  line-height: 1;
  text-decoration: line-through;
}
.single-widget-product__content__top .rating i {
  font-size: 16px;
}
.single-widget-product__content__top .rating i.ion-android-star, .single-widget-product__content__top .rating i.ion-android-star-half {
  color: #F5CC26;
}
.single-widget-product__content__top .rating i.ion-android-star-outline {
  color: #7e7e7e;
}
.single-widget-product__content__bottom a.cart-btn {
  display: inline-block;
  font-size: 18px;
  line-height: 28px;
  color: #d3122a;
  -webkit-transition-duration: 0.6s;
          transition-duration: 0.6s;
  top: 0;
  left: 0;
  font-weight: 500;
}
.single-widget-product__content__bottom a.cart-btn.active:before {
  content: "\f121";
  font-family: Ionicons;
  display: inline-block;
  margin-right: 5px;
  font-size: 15px;
  font-weight: 400;
  vertical-align: middle;
}
.single-widget-product__content__bottom a.cart-btn:before {
  content: "+";
  display: inline-block;
  margin-right: 5px;
}

/*=====  End of 07. Short single product  ======*/
/*=============================================
=           08. button            =
=============================================*/
/*----------  default style  ----------*/
.lezada-button {
  background-color: #333;
  color: #fff !important;
  text-transform: uppercase;
  display: inline-block;
  border-radius: 0;
  border: 1px solid #333;
  font-weight: 500;
  letter-spacing: 1px;
  /*----------  small button style  ----------*/
  /*----------  medium button style  ----------*/
  /*----------  large button style  ----------*/
  /*----------  extra large button style  ----------*/
  /*----------  icon left style  ----------*/
}
.lezada-button:hover {
  background-color: transparent;
  color: #333 !important;
}
.lezada-button--small {
  font-size: 12px;
  padding: 8px 15px;
}
.lezada-button--small--style2 {
  padding: 7px 15px;
}
.lezada-button--medium {
  font-size: 14px;
  padding: 10px 45px;
}
.lezada-button--large {
  font-size: 16px;
  padding: 12px 35px;
}
.lezada-button--xl {
  font-size: 18px;
  padding: 20px 35px;
}
.lezada-button--icon {
  /*----------  icon left style  ----------*/
  /*----------  icon right style  ----------*/
}
.lezada-button--icon--left i {
  margin-right: 5px;
}
.lezada-button--icon--right i {
  margin-left: 5px;
}

/*----------  lezada button 2  ----------*/
.lezada-button-2 {
  text-transform: uppercase;
  font-size: 14px;
  line-height: 20px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  display: inline-block;
  position: relative;
}
.lezada-button-2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #333;
  opacity: 0.2;
  content: "";
}
.lezada-button-2:before {
  font-size: 0;
  padding-right: 0;
  font-weight: 400;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  line-height: 0;
  content: "\f218";
  font-family: "Ionicons";
}
.lezada-button-2:hover {
  color: #d3122a;
}
.lezada-button-2:hover:before {
  font-size: 14px;
  line-height: 0;
  padding-right: 8px;
  visibility: visible;
  opacity: 1;
}

/*----------  load more button  ----------*/
.lezada-loadmore-button {
  color: #333;
  letter-spacing: 1px;
  font-weight: 500;
}
.lezada-loadmore-button:hover {
  color: #333;
}
.lezada-loadmore-button i {
  display: inline-block;
  font-size: 16px;
  padding-right: 8px;
  font-weight: 600;
  color: #333;
}

/*----------  shopping more button  ----------*/
.lezada-shopping-more-button {
  font-size: 14px;
  line-height: 18px;
  letter-spacing: 1px;
  color: #333;
  font-weight: 500;
  text-transform: uppercase;
  border-bottom: 1px solid #D6D6D6;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.lezada-shopping-more-button:hover {
  border-color: #333;
  color: #333;
}

/*=====  End of 08. button  ======*/
/*=============================================
=            09. Backgrounds            =
=============================================*/
/*----------  lookbook home backgrounds  ----------*/
.lookbook-bg-1 {
  background-image: url("../images/parallax-bg/bg-parallax-1.jpg");
}

.lookbook-bg-2 {
  background-image: url("../images/parallax-bg/bg-parallax-2.jpg");
}

.lookbook-bg-3 {
  background-image: url("../images/parallax-bg/bg-parallax-3.jpg");
}

.lookbook-bg-4 {
  background-image: url("../images/parallax-bg/bg-parallax-4.jpg");
}

.lookbook-bg-5 {
  background-image: url("../images/decor-four/banner-1.jpg");
}

.lookbook-bg-6 {
  background-image: url("../images/coffee-two/bg-1.jpg");
}

.lookbook-bg-7 {
  background-image: url("../images/coffee-two/bg-2.jpg");
}

.lookbook-bg-8 {
  background-image: url("../images/coffee-two/bg-3.jpg");
}

.lookbook-bg-9 {
  background-image: url("../images/coffee-two/bg-4.jpg");
}

.lookbook-bg-10 {
  background-image: url("../images/coffee-three/bg-1.jpg");
}

/*----------  about backgrounds  ----------*/
.about-video-bg-1 {
  background-image: url("../images/category/bg-video-about-us-large.png");
}

.about-video-bg-2 {
  background-image: url("../images/backgrounds/video-about.png");
}

.about-video-bg-3 {
  background-image: url("../images/jewelry-one/video-bg.png");
}

.about-bg-4 {
  background-image: url("../images/jewelry-one/section-bg.jpg");
}

.about-video-bg-5 {
  background-image: url("../images/tyres-two/video-bg.png");
}

.about-video-bg-6 {
  background-image: url("../images/coffee-four/video-bg.jpg");
}

.about-video-bg-7 {
  background-image: url("../images/games-one/video-bg.png");
}

.about-video-bg-8 {
  background-image: url("../images/games-two/video-bg.png");
}

.about-video-bg-9 {
  background-image: url("../images/health-four/video-bg.jpg");
}

/*----------  countdown backgrounds  ----------*/
.countdown-bg-1 {
  background-image: url("../images/countdown/bg-countdown-1.jpg");
  background-color: #F9F9F9;
}

.countdown-bg-2 {
  background-image: url("../images/countdown/bg-countdown-2.jpg");
  background-color: #F9F9F9;
}

.countdown-bg-3 {
  background-image: url("../images/food-four/banner-1.png");
  background-color: #F9F9F9;
}

.countdown-bg-3 {
  background-color: #F9F9F9;
}

.countdown-bg-4 {
  background-color: #F4F4F4;
}

/*----------  breadcrumb backgrounds   ----------*/
.breadcrumb-bg-1 {
  background-image: url("../images/breadcrumb-bg/01.jpg");
}

.breadcrumb-bg-2 {
  background-image: url("../images/breadcrumb-bg/background-heading-page.png");
}

/*----------  testimonial backgrounds  ----------*/
.testimonial-bg-1 {
  background-image: url("../images/backgrounds/bg-testimonials.png");
  background-repeat: no-repeat;
}

.testimonial-bg-2 {
  background-image: url("../images/backpack-one/testimonial.jpg");
  background-repeat: no-repeat;
}

.testimonial-bg-3 {
  background-image: url("../images/coffee-one/testimonial-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

.testimonial-bg-4 {
  background-image: url("../images/fishing-one/testimonial-bg.png");
  background-repeat: no-repeat;
  background-size: cover;
}

.testimonial-bg-5 {
  background-image: url("../images/flower-three/testimonial-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

.testimonial-bg-6 {
  background-image: url("../images/pottery-one/testimonial-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

/*----------  page backgrounds  ----------*/
.bg-404 {
  background-image: url("../images/backgrounds/404-bg.jpg");
}

.bg-coming-soon {
  background-image: url("../images/backgrounds/bg-coming-soon.png");
}

.mc-newsletter-blue-bg {
  background-color: #6D7F96;
}

.mc-newsletter-red-bg {
  background-color: #D11830;
}

.newsletter-content-bg-1 {
  background-image: url("../images/backgrounds/popup.jpg");
}

.newsletter-content {
  background-size: cover;
  background-repeat: no-repeat;
}

.nothing-found-area {
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .nothing-found-area {
    background-position-x: 40%;
  }
}
@media only screen and (max-width: 575px) {
  .nothing-found-area {
    background-position-x: 20%;
  }
}
@media only screen and (max-width: 479px) {
  .nothing-found-area {
    background-position-x: 45%;
  }
}

.coming-soon-area {
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .coming-soon-area {
    background-position-x: 70%;
  }
}
@media only screen and (max-width: 767px) {
  .coming-soon-area {
    background-position-x: 60%;
  }
}
@media only screen and (max-width: 575px) {
  .coming-soon-area {
    background-position-x: 20%;
  }
}
@media only screen and (max-width: 479px) {
  .coming-soon-area {
    background-position-x: 45%;
  }
}

.grey-bg {
  background-color: #F8F8F8 !important;
}

.orange-bg {
  background-color: #f26522 !important;
}

.red-bg {
  background-color: #FF5A72 !important;
}

.grey-bg-two {
  background-color: #F7F7F7 !important;
}

.dark-grey-bg {
  background-color: #5e5656;
}

.dark-bg {
  background-color: #191717;
}

.blue-bg {
  background-color: #404969;
}

.green-bg {
  background-color: #E6F0F4;
}

.orange-bg {
  background-color: #F9D0C2;
}

.countdown-background {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.single-lookbook-section {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
  background-size: cover;
  min-height: 100vh;
}

/*----------  single category textbanner   ----------*/
.single-category-textbanner-bg {
  background-image: url("../images/category/brand.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

/*----------  about video background area  ----------*/
.about-video-bg-area {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center right;
}

/*=====  End of 09. Backgrounds  ======*/
/*=============================================
=            banner background            =
=============================================*/
.banner-bg-one {
  background-image: url("../images/jewelry-one/section-bg-2.jpg");
}

.banner-bg-two {
  background-image: url("../images/swimsuit-one/slider-bg-image.jpg");
}

.single-image-text-banner-bg-one {
  background-image: url("../images/swimsuit-one/banner-bg-1.png");
}

.single-image-text-banner-bg-two {
  background-image: url("../images/swimsuit-one/banner-bg-2.png");
}

/*=====  End of banner background  ======*/
/*=============================================
=            footer backgrounds            =
=============================================*/
.footer-bg-1 {
  background-image: url("../images/coffee-one/footer-bg.jpg");
  background-repeat: no-repeat;
}

.footer-bg-2 {
  background-image: url("../images/coffee-four/footer-bg.jpg");
  background-repeat: no-repeat;
}

/*=====  End of footer backgrounds  ======*/
/*=============================================
=            lookbook bg overlay            =
=============================================*/
.homepage-content--lookbook-overlay .single-lookbook-section {
  position: relative;
  z-index: 1;
}
.homepage-content--lookbook-overlay .single-lookbook-section:before {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #000000;
  content: "";
  width: 100%;
  height: 100%;
  opacity: 0.6;
  z-index: -1;
}

/*=====  End of lookbook bg overlay  ======*/
/*=============================================

/*=============================================
=            11. countdown timer            =
=============================================*/
.countdown-wrapper h3 {
  font-size: 48px;
  line-height: 58px;
  color: #333;
  margin-bottom: 30px;
  margin-top: -10px;
}
@media only screen and (max-width: 575px) {
  .countdown-wrapper h3 {
    font-size: 38px;
    line-height: 48px;
  }
}
@media only screen and (max-width: 479px) {
  .countdown-wrapper h3 {
    font-size: 28px;
    line-height: 38px;
  }
}
.countdown-wrapper--style2 a.lezada-button:hover {
  border-color: #ffffff;
  color: #ffffff !important;
}
.countdown-wrapper--white-bg a.lezada-button:hover {
  border-color: #000000;
  color: #000000 !important;
}

.deal-countdown.text-white * {
  color: #ffffff !important;
}
.deal-countdown .single-countdown {
  display: inline-block;
  margin-bottom: 40px;
  margin-right: 100px;
}
@media only screen and (max-width: 767px) {
  .deal-countdown .single-countdown {
    margin-right: 50px;
  }
}
@media only screen and (max-width: 479px) {
  .deal-countdown .single-countdown {
    margin-right: 15px;
  }
}
.deal-countdown .single-countdown:last-child {
  margin-right: 0;
}
.deal-countdown .single-countdown:last-child .single-countdown__time:after {
  display: none;
}
.deal-countdown .single-countdown__time {
  position: relative;
  display: block;
  font-size: 56px;
  line-height: 56px;
  color: #7e7e7e;
  font-weight: 300;
  margin-bottom: 30px;
}
@media only screen and (max-width: 767px) {
  .deal-countdown .single-countdown__time {
    font-size: 48px;
    line-height: 48px;
  }
}
@media only screen and (max-width: 479px) {
  .deal-countdown .single-countdown__time {
    font-size: 32px;
    line-height: 22px;
  }
}
.deal-countdown .single-countdown__time:after {
  position: absolute;
  top: 0;
  left: 170%;
  content: ":";
  font-size: 35px;
}
@media only screen and (max-width: 767px) {
  .deal-countdown .single-countdown__time:after {
    left: 150%;
  }
}
@media only screen and (max-width: 479px) {
  .deal-countdown .single-countdown__time:after {
    left: 120%;
  }
}
.deal-countdown .single-countdown__text {
  font-size: 14px;
  line-height: 22px;
  color: #9b9b9b;
  text-transform: uppercase;
  font-weight: 600;
}

/*=====  End of 11. countdown timer  ======*/
/*=============================================
=            12. Blog            =
=============================================*/
.blog-post-area {
  overflow-x: hidden;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .blog-post-wrapper {
    margin-bottom: -50px !important;
  }
}
@media only screen and (max-width: 767px) {
  .blog-post-wrapper {
    margin-bottom: -50px !important;
  }
}
.blog-post-wrapper--masonry {
  margin-bottom: -40px;
}

/*----------  blog slider intro  ----------*/
.blog-intro h2 {
  font-size: 48px;
  line-height: 64px;
  color: #333;
  max-width: 80%;
  margin-bottom: 15px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .blog-intro h2 {
    font-size: 40px;
    line-height: 56px;
    margin-top: -5px;
  }
}
@media only screen and (max-width: 767px) {
  .blog-intro h2 {
    font-size: 36px;
    line-height: 52px;
    margin-top: -5px;
  }
}
@media only screen and (max-width: 575px) {
  .blog-intro h2 {
    font-size: 32px;
    line-height: 48px;
  }
}
@media only screen and (max-width: 479px) {
  .blog-intro h2 {
    font-size: 25px;
    line-height: 41px;
  }
}
.blog-intro p {
  font-size: 15px;
  line-height: 26px;
  margin-bottom: 30px;
}

/*----------  blog slider single post  ----------*/
.single-slider-post {
  /*----------  image  ----------*/
  /*----------  content  ----------*/
}
.single-slider-post__image a {
  display: block;
}
.single-slider-post__image a img {
  width: 100%;
}
.single-slider-post__content .post-date {
  margin-bottom: 15px;
}
.single-slider-post__content .post-date a {
  font-size: 14px;
  line-height: 18px;
  color: #999;
  text-transform: capitalize;
  display: inline-block;
  border-bottom: 1px solid transparent;
}
.single-slider-post__content .post-date a:hover {
  color: #333;
  border-bottom: 1px solid #999;
}
.single-slider-post__content .post-date i {
  margin-right: 5px;
}
.single-slider-post__content h2 {
  margin-bottom: 0;
}
.single-slider-post__content h2 a {
  font-size: 24px;
  line-height: 36px;
  color: #333;
  margin-bottom: 15px;
}
.single-slider-post__content p.post-excerpt {
  font-size: 15px;
  line-height: 24px;
  color: #777777;
  margin-bottom: 15px;
}
.single-slider-post__content a.blog-readmore-btn {
  text-transform: uppercase;
  font-size: 14px;
  line-height: 20px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  display: inline-block;
  position: relative;
}
.single-slider-post__content a.blog-readmore-btn:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #333;
  opacity: 0.2;
  content: "";
}
.single-slider-post__content a.blog-readmore-btn:before {
  font-size: 0;
  padding-right: 0;
  font-weight: 400;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  line-height: 0;
  content: "\f218";
  font-family: "Ionicons";
}
.single-slider-post__content a.blog-readmore-btn:hover {
  color: #d3122a;
}
.single-slider-post__content a.blog-readmore-btn:hover:before {
  font-size: 14px;
  line-height: 0;
  padding-right: 8px;
  visibility: visible;
  opacity: 1;
}

/*----------  widget post  ----------*/
.single-widget-post {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-bottom: 25px;
  margin-bottom: 25px;
  border-bottom: 1px solid #e7e7e7;
}
.single-widget-post:last-child {
  padding-bottom: 0;
  margin-bottom: 0;
  border-bottom: none;
}
.single-widget-post .image {
  -ms-flex-preferred-size: 100px;
      flex-basis: 100px;
}
.single-widget-post .content {
  -ms-flex-preferred-size: calc(100% - 100px);
      flex-basis: calc(100% - 100px);
  padding-left: 20px;
}
.single-widget-post .content .widget-post-title {
  font-size: 15px;
  line-height: 24px;
}
.single-widget-post .content .widget-post-title a {
  color: #333;
}

/*----------  blog post list view  ----------*/
.single-slider-post--list {
  border-bottom: 1px solid #D8D8D8;
  padding-bottom: 60px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
@media only screen and (max-width: 767px) {
  .single-slider-post--list {
    display: block;
  }
}
.single-slider-post--list__image {
  -ms-flex-preferred-size: 450px;
      flex-basis: 450px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-slider-post--list__image {
    -ms-flex-preferred-size: 320px;
        flex-basis: 320px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-slider-post--list__image {
    -ms-flex-preferred-size: 320px;
        flex-basis: 320px;
  }
}
.single-slider-post--list__content {
  -ms-flex-preferred-size: calc(100% - 450px);
      flex-basis: calc(100% - 450px);
  padding-left: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-slider-post--list__content {
    -ms-flex-preferred-size: calc(100% - 320px);
        flex-basis: calc(100% - 320px);
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-slider-post--list__content {
    -ms-flex-preferred-size: calc(100% - 320px);
        flex-basis: calc(100% - 320px);
  }
}
@media only screen and (max-width: 767px) {
  .single-slider-post--list__content {
    padding-left: 0;
  }
}
.single-slider-post--list__content .post-date {
  margin-bottom: 0;
  line-height: 1;
}
.single-slider-post--sticky {
  border-bottom: 1px solid #E5E5E5;
}
.single-slider-post--sticky .post-title a {
  font-size: 34px;
  line-height: 51px;
}

/*----------  post tag  ----------*/
.post-tags {
  position: relative;
}
.post-tags i {
  position: absolute;
  color: #333;
}
.post-tags ul {
  display: inline-block;
}
.post-tags ul li {
  display: inline-block;
}
.post-tags ul li:first-child {
  padding-left: 20px;
}
.post-tags ul li a {
  border-bottom: 1px solid transparent;
}
.post-tags ul li a:hover {
  color: #333;
  border-bottom: 1px solid #999;
}

/*----------  post share  ----------*/
.post-share span {
  padding-right: 10px;
}
.post-share ul {
  display: inline-block;
}
.post-share ul li {
  display: inline-block;
  margin-right: 5px;
}
.post-share ul li a {
  color: #333;
}

/*----------  post comment  ----------*/
.post-comment a {
  font-size: 14px;
  line-height: 18px;
  color: #999;
  text-transform: capitalize;
  display: inline-block;
  border-bottom: 1px solid transparent;
}
.post-comment a:hover {
  color: #333;
  border-bottom: 1px solid #999;
}
.post-comment i {
  margin-right: 5px;
}

/*----------  post category  ----------*/
.post-category a {
  font-size: 14px;
  line-height: 19px;
  letter-spacing: 1px;
  color: #ababab;
  font-weight: 500;
  text-transform: uppercase;
  border-bottom: 1px solid transparent;
}
.post-category a:hover {
  color: #333;
  border-bottom: 1px solid #999;
}

/*----------  post title  ----------*/
.post-user a {
  font-size: 14px;
  line-height: 18px;
  color: #999;
  text-transform: capitalize;
  display: inline-block;
  border-bottom: 1px solid transparent;
}
.post-user a:hover {
  color: #333;
  border-bottom: 1px solid #999;
}
.post-user i {
  margin-right: 5px;
}

/*----------  author info  ----------*/
.single-author {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
@media only screen and (max-width: 767px) {
  .single-author {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    text-align: center;
  }
}
.single-author__image {
  -ms-flex-preferred-size: 70px;
      flex-basis: 70px;
}
.single-author__image img {
  border-radius: 50%;
}
@media only screen and (max-width: 767px) {
  .single-author__image {
    margin-bottom: 30px;
  }
}
.single-author__content {
  -ms-flex-preferred-size: calc(100% - 70px);
      flex-basis: calc(100% - 70px);
  padding-left: 30px;
}
@media only screen and (max-width: 767px) {
  .single-author__content {
    padding-left: 0;
  }
}
.single-author__content .username {
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
.single-author__content .message {
  font-size: 15px;
  line-height: 27px;
}

/*----------  comment block  ----------*/
.comment-title {
  font-size: 34px;
  line-height: 47px;
  color: #333;
}
.comment-title span {
  color: #ababab;
}

/*----------  single comment  ----------*/
.single-comment {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-bottom: 1px solid #e8e8e8;
  padding-bottom: 40px;
  margin-bottom: 40px;
}
@media only screen and (max-width: 767px) {
  .single-comment {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    text-align: center;
  }
}
.single-comment--reply {
  margin-left: 60px;
}
@media only screen and (max-width: 767px) {
  .single-comment--reply {
    margin-left: 50px;
  }
}
.single-comment__image {
  -ms-flex-preferred-size: 70px;
      flex-basis: 70px;
}
.single-comment__image img {
  border-radius: 50%;
}
@media only screen and (max-width: 767px) {
  .single-comment__image {
    margin-bottom: 30px;
  }
}
.single-comment__content {
  -ms-flex-preferred-size: calc(100% - 70px);
      flex-basis: calc(100% - 70px);
  padding-left: 30px;
}
@media only screen and (max-width: 767px) {
  .single-comment__content {
    padding-left: 0;
  }
}
.single-comment__content .username {
  font-size: 18px;
  line-height: 19px;
  font-weight: 400;
  color: #333;
}
.single-comment__content .date {
  font-size: 14px;
  line-height: 22px;
  color: #ababab;
  font-weight: 400;
  padding-left: 20px;
  float: right;
}
@media only screen and (max-width: 767px) {
  .single-comment__content .date {
    float: none;
  }
}
.single-comment__content .message {
  font-size: 18px;
  line-height: 28px;
  margin-bottom: 30px;
}
.single-comment__content .reply-link {
  color: #7e7e7e;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 500;
}
.single-comment__content .reply-link i {
  padding-right: 5px;
}
.single-comment__content .reply-link:hover {
  color: #333;
}

/*=====  End of 12. Blog  ======*/
/*=============================================
=            13. Pagination            =
=============================================*/
.pagination ul {
  width: 100%;
  text-align: center;
  margin-top: -5px;
}
.pagination ul li {
  display: inline-block;
  margin-right: 20px;
  min-width: 20px;
}
.pagination ul li a {
  text-align: center;
  display: block;
  color: #ababab;
  font-weight: 500;
}
.pagination ul li a:hover {
  color: #333;
}
.pagination ul li.active {
  border-bottom: 1px solid #ababab;
}
.pagination ul li.active a {
  color: #333;
}

/*=====  End of 13. Pagination  ======*/
/*=============================================
=            14. Instagram section            =
=============================================*/
/*----------  instagram section intro  ----------*/
.instagram-section-intro p a {
  font-size: 14px;
  font-weight: 500;
  line-height: 24px;
  display: inline-block;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #333333;
  border-bottom: 1px solid transparent;
}
.instagram-section-intro p a:hover {
  border-bottom: 1px solid #ccc;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .instagram-section-intro p {
    margin-top: -5px;
  }
}
@media only screen and (max-width: 767px) {
  .instagram-section-intro p {
    margin-top: -5px;
  }
}
.instagram-section-intro h3 {
  font-size: 34px;
  font-weight: 400;
  line-height: 48px;
  margin-top: 15px;
  margin-bottom: 0;
  text-transform: none;
  color: #333333;
}

/*----------  instagram slider item  ----------*/
.instagram-item {
  position: relative;
  z-index: 1;
}
.instagram-item:before {
  position: absolute;
  top: 0;
  left: 0;
  visibility: hidden;
  width: 100%;
  height: 100%;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
  pointer-events: none;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.4);
}
.instagram-item .instagram-hvr-content {
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 50%;
  visibility: hidden;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  opacity: 0;
}
.instagram-item .instagram-hvr-content span {
  margin-right: 20px;
  color: #ffffff;
}
.instagram-item .instagram-hvr-content span:last-child {
  margin-right: 0;
}
.instagram-item .instagram-hvr-content span i.fa {
  margin-right: 5px;
}
.instagram-item a {
  display: block;
}
.instagram-item a img {
  width: 100%;
}
.instagram-item:hover:before {
  visibility: visible;
  opacity: 1;
}
.instagram-item:hover .instagram-hvr-content {
  visibility: visible;
  opacity: 1;
}

/*----------  instagram grid  ----------*/
.instagram-grid {
  margin-right: -15px;
  margin-bottom: -15px;
}
.instagram-grid .instagram_gallery a {
  display: inline-block;
  width: 25%;
  padding: 0;
  padding-right: 15px;
  padding-bottom: 15px;
}
@media only screen and (max-width: 767px) {
  .instagram-grid .instagram_gallery a {
    width: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .instagram-grid .instagram_gallery a {
    width: 100%;
  }
}
.instagram-grid .instagram_gallery a img {
  position: relative;
  width: 100%;
}

.instagram_gallery .slick-list {
  margin-right: -15px;
  margin-left: -15px;
}
.instagram_gallery .slick-list .slick-track .slick-slide {
  padding-right: 15px;
  padding-left: 15px;
}
.instagram_gallery .slick-list .slick-track .slick-slide a img {
  max-width: 100% !important;
}

/*----------  instagram Feed Thumb  ----------*/
.instagram-feed-thumb {
  padding: 0 2px;
}
.instagram-feed-thumb img {
  max-width: 100%;
}

/*=====  End of 14. Instagram section  ======*/
/*=============================================
=            15. Shoppable home style            =
=============================================*/
/*----------  shoppable category   ----------*/
.single-shoppable {
  position: relative;
  /*----------  shoppable content  ----------*/
  /*----------  cloth tag  ----------*/
}
.single-shoppable img {
  width: 100%;
}
.single-shoppable .shoppable-content {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  max-width: 800px;
}
@media only screen and (max-width: 767px) {
  .single-shoppable .shoppable-content {
    position: static;
    -webkit-transform: none;
            transform: none;
    max-width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: -10px;
  }
}
.single-shoppable .shoppable-content p {
  font-size: 16px;
  color: #333333;
  line-height: 36px;
  text-align: center;
  font-family: Work Sans;
  font-weight: 600;
  font-style: normal;
  margin-bottom: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-shoppable .shoppable-content p {
    font-size: 14px;
    line-height: 32px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-shoppable .shoppable-content p {
    font-size: 14px;
    line-height: 28px;
  }
}
.single-shoppable .shoppable-content h2 {
  font-size: 72px;
  color: #333333;
  line-height: 100px;
  text-align: center;
  font-family: Work Sans;
  font-weight: 600;
  font-style: normal;
  max-width: 500px;
  margin-bottom: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-shoppable .shoppable-content h2 {
    font-size: 60px;
    line-height: 90px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-shoppable .shoppable-content h2 {
    font-size: 30px;
    line-height: 60px;
  }
}
@media only screen and (max-width: 767px) {
  .single-shoppable .shoppable-content h2 {
    max-width: 100%;
    font-size: 30px;
    line-height: 45px;
  }
}
.single-shoppable .shoppable-content a {
  border-radius: 100%;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  color: #333333;
  background-color: transparent;
  border: 1px solid #C7C2B8;
  font-size: 14px;
  display: inline-block;
  margin-top: 30px;
}
.single-shoppable .shoppable-content a:hover {
  background-color: #333;
  border-color: #333;
  color: #fff;
}
.single-shoppable .shoppable-content--playicon {
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  position: absolute;
  top: 50%;
  left: 50%;
  max-width: 800px;
}
.single-shoppable .shoppable-content--playicon a {
  width: auto;
  height: auto;
  border: none;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  margin-top: 0;
}
@media only screen and (max-width: 479px) {
  .single-shoppable .shoppable-content--playicon a {
    width: 50px;
    height: 50px;
  }
}
.single-shoppable .shoppable-content--playicon a:hover {
  background: none;
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.single-shoppable .cloth-tag {
  position: absolute;
  top: 0;
  max-width: 400px;
  width: 100%;
}
.single-shoppable .cloth-tag__icon {
  background-color: #ffffff;
  color: #333333;
  font-size: 15px;
  font-weight: 700;
  -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
          box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.25);
  width: 25px;
  height: 25px;
  line-height: 25px;
  display: inline-block;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;
  margin-left: -12.5px;
}
.single-shoppable .cloth-tag__icon:hover {
  background-color: #d3122a;
  color: #ffffff;
}
.single-shoppable .cloth-tag__icon.active {
  background-color: #d3122a;
  color: #ffffff;
}
.single-shoppable .cloth-tag__content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 15px;
  margin-top: 20px;
  background-color: #fff;
  -webkit-box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 14px rgba(0, 0, 0, 0.2);
  position: absolute;
  min-width: 300px;
  max-width: 500px;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  z-index: 5;
}
.single-shoppable .cloth-tag__content.active {
  -webkit-animation: fadeIn 0.3s forwards;
          animation: fadeIn 0.3s forwards;
}
.single-shoppable .cloth-tag__content__image {
  -ms-flex-preferred-size: 100px;
      flex-basis: 100px;
}
.single-shoppable .cloth-tag__content__content {
  -ms-flex-preferred-size: calc(100% - 100px);
      flex-basis: calc(100% - 100px);
  padding-left: 30px;
}
.single-shoppable .cloth-tag__content__content h1 {
  font-size: 18px;
  line-height: 22px;
  font-weight: 500;
}
.single-shoppable .cloth-tag__content__content p.price {
  font-size: 16px;
  line-height: 28px;
  font-weight: 700;
  color: #333333;
}
.single-shoppable .cloth-tag__content__content p.price .discounted {
  color: #9b9b9b;
  font-size: 12px;
  line-height: 28px;
  font-weight: 300;
  text-decoration: line-through;
  padding-right: 10px;
}

/*=====  End of 15. Shoppable home style  ======*/
/*=============================================
=            16. About            =
=============================================*/
/*----------  about video bg area  ----------*/
.about-video-bg-area {
  position: relative;
}
.about-video-bg-area .video-text {
  font-size: 14px;
  line-height: 24px;
  text-align: center;
  font-weight: 400;
  font-style: normal;
  -webkit-transform: rotate(-90deg) translateY(-50%);
          transform: rotate(-90deg) translateY(-50%);
  letter-spacing: 1px;
  top: 50%;
}
@media only screen and (max-width: 767px) {
  .about-video-bg-area .video-text {
    display: none;
  }
}
.about-video-bg-area .video-text a {
  color: #333333;
}
.about-video-bg-area .video-text a:hover {
  opacity: 0.85;
}
.about-video-bg-area .video-text-start {
  position: absolute;
  left: -10%;
}
.about-video-bg-area .video-text-end {
  position: absolute;
  right: -10%;
}
.about-video-bg-area .play-icon a img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.about-video-bg-area .play-icon a:hover img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}
.about-video-bg-area h1 {
  font-size: 40px;
  color: #ffffff;
  line-height: 50px;
  text-align: center;
  font-weight: 500;
  font-style: normal;
  letter-spacing: 12px;
}

/*----------  about page text  ----------*/
.about-page-text {
  font-size: 15px;
  line-height: 26px;
  color: #7e7e7e;
  letter-spacing: 0.5px;
}

/*----------  about two page text block   ----------*/
.about-single-block p {
  font-size: 15px;
  line-height: 26px;
  margin-bottom: 40px;
}
.about-single-block p.subtitle {
  font-size: 14px;
  line-height: 24px;
  color: #333;
  font-weight: 500;
  margin-bottom: 20px;
}
.about-single-block h1 {
  font-size: 34px;
  line-height: 48px;
  color: #333;
  font-weight: 400;
  margin-bottom: 30px;
}
.about-single-block a {
  font-size: 14px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  border-bottom: 1px solid #ccc;
}
.about-single-block a:hover {
  border-color: #333;
}

/* about section */
.about-section-content .subtitle {
  font-size: 24px;
  font-weight: 700;
}
@media only screen and (max-width: 767px) {
  .about-section-content .subtitle {
    font-size: 16px;
  }
}
.about-section-content .title {
  font-size: 36px;
  font-weight: 700;
}
@media only screen and (max-width: 767px) {
  .about-section-content .title {
    font-size: 28px;
  }
}
@media only screen and (max-width: 767px) {
  .about-section-content {
    margin-bottom: 30px;
  }
}

.video-icon-content__title {
  font-size: 50px;
  line-height: 1.3;
  font-weight: 400;
  font-family: "Spectral", serif;
  margin-bottom: 50px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .video-icon-content__title {
    font-size: 42px;
  }
}
@media only screen and (max-width: 479px) {
  .video-icon-content__title {
    font-size: 30px;
  }
}
.video-icon-content__icon-content-wrapper .single-icon-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 40px;
  width: 440px;
  max-width: 100%;
}
.video-icon-content__icon-content-wrapper .single-icon-content__icon {
  -ms-flex-preferred-size: 100px;
      flex-basis: 100px;
}
.video-icon-content__icon-content-wrapper .single-icon-content__content {
  -ms-flex-preferred-size: calc(100% - 100px);
      flex-basis: calc(100% - 100px);
}
.video-icon-content__icon-content-wrapper .single-icon-content__content .title {
  font-size: 25px;
  line-height: 1.3;
  font-style: italic;
  font-family: "Spectral", serif;
  font-weight: 400;
  color: #333;
  margin-bottom: 25px;
}
@media only screen and (max-width: 479px) {
  .video-icon-content__icon-content-wrapper .single-icon-content__content .title {
    font-size: 22px;
  }
}
.video-icon-content__icon-content-wrapper .single-icon-content__content .text {
  font-size: 15px;
  line-height: 1.5;
  color: #7e7e7e;
}
.video-icon-content__icon-content-wrapper .single-icon-content:last-child {
  margin-bottom: 0;
}

.about-bg-content {
  text-align: center;
  background-color: #F0DDD6;
  padding: 140px 190px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .about-bg-content {
    padding: 100px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .about-bg-content {
    padding: 80px 50px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .about-bg-content {
    padding: 100px;
  }
}
@media only screen and (max-width: 767px) {
  .about-bg-content {
    padding: 80px;
  }
}
@media only screen and (max-width: 479px) {
  .about-bg-content {
    padding: 50px 30px;
  }
}
.about-bg-content__title {
  font-size: 40px;
  line-height: 1.5;
  color: #333;
  font-family: "Spectral", serif;
  margin-bottom: 35px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .about-bg-content__title {
    font-size: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .about-bg-content__title {
    font-size: 25px;
  }
}
.about-bg-content__text {
  font-size: 18px;
  line-height: 2;
  font-family: "Spectral", serif;
  color: #7e7e7e;
}
.about-bg-content__link {
  font-size: 14px;
  line-height: 1.2;
  color: #333;
  font-weight: 500;
  position: relative;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  padding-bottom: 3px;
}
.about-bg-content__link:after {
  -webkit-transition: 0.3s;
  transition: 0.3s;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #333;
  opacity: 0.2;
  content: "";
}
.about-bg-content__link:hover {
  color: #333;
}
.about-bg-content__link:hover:after {
  opacity: 1;
}

.about-bg-background {
  height: 100%;
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .about-bg-background {
    height: 400px;
  }
}
@media only screen and (max-width: 479px) {
  .about-bg-background {
    height: 300px;
  }
}

/*=====  End of 16. About  ======*/
/*=============================================
=            17. widget            =
=============================================*/
/*----------  default  ----------*/
.lezada-widget {
  /*----------  widget title  ----------*/
}
.lezada-widget .widget-title {
  font-size: 14px;
  line-height: 24px;
  font-weight: 500;
  color: #333;
}
.lezada-widget .widget-content {
  font-size: 15px;
  line-height: 26px;
  color: #7e7e7e;
  margin-bottom: 0;
}

/*=====  End of 17. widget  ======*/
/*=============================================
=            18. Testimonial            =
=============================================*/
/*----------  multi testimonial single item  ----------*/
.multi-testimonial-single-item__text {
  font-size: 18px;
  line-height: 36px;
  padding-bottom: 40px;
}
.multi-testimonial-single-item__author-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.multi-testimonial-single-item__author-info .image {
  -ms-flex-preferred-size: 80px;
      flex-basis: 80px;
  width: 80px;
  height: 80px;
}
.multi-testimonial-single-item__author-info .image img {
  border-radius: 500px;
  width: 100%;
}
.multi-testimonial-single-item__author-info .content {
  -ms-flex-preferred-size: calc(100% - 80px);
      flex-basis: calc(100% - 80px);
  padding-left: 25px;
  margin-top: 10px;
}
.multi-testimonial-single-item__author-info .content .name {
  font-size: 18px;
  line-height: 25px;
  font-weight: 600;
  color: #333;
  margin-bottom: 0;
}
.multi-testimonial-single-item__author-info .content .designation {
  font-size: 16px;
  line-height: 22px;
  color: #7e7e7e;
}

/*----------  single testimonial single item  ----------*/
.single-testimonial-single-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media only screen and (max-width: 767px) {
  .single-testimonial-single-item {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
.single-testimonial-single-item__image {
  -ms-flex-preferred-size: 300px;
      flex-basis: 300px;
  padding-left: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-testimonial-single-item__image {
    padding-left: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-testimonial-single-item__image {
    padding-left: 0;
  }
}
.single-testimonial-single-item__content {
  -ms-flex-preferred-size: calc(100% - 300px);
      flex-basis: calc(100% - 300px);
  padding: 0 30px;
  padding-left: 50px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-testimonial-single-item__content {
    padding: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-testimonial-single-item__content {
    padding: 0;
  }
}
.single-testimonial-single-item__content .text {
  font-size: 24px;
  line-height: 40px;
  color: #333;
  font-weight: 300;
}
.single-testimonial-single-item__content .client-info .name {
  font-size: 18px;
  line-height: 25px;
  font-weight: 600;
  color: #333;
}
.single-testimonial-single-item__content .client-info .designation {
  font-size: 16px;
  line-height: 22px;
  color: #7e7e7e;
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  color: #ffffff;
  padding: 0 100px;
}
@media only screen and (max-width: 767px) {
  .single-testimonial-single-item--no-thumb .single-testimonial-single-item__content {
    padding: 0 30px;
  }
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content .text {
  color: #ffffff;
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content .client-info p, .single-testimonial-single-item--no-thumb .single-testimonial-single-item__content .client-info span {
  color: #ffffff;
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content--dark {
  color: #333;
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content--dark .text {
  color: #333;
}
.single-testimonial-single-item--no-thumb .single-testimonial-single-item__content--dark .client-info p, .single-testimonial-single-item--no-thumb .single-testimonial-single-item__content--dark .client-info span {
  color: #333;
}

.single-item-testimonial-area.dark-grey-bg * {
  color: #ffffff !important;
}

/*=====  End of 18. Testimonial  ======*/
/*=============================================
=            19. Brands            =
=============================================*/
.single-brand {
  text-align: center;
}
.single-brand a img {
  opacity: 0.85;
}
.single-brand a:hover img {
  opacity: 1;
}
.single-brand--light a img {
  opacity: 0.3;
}

.brand-carousel-content__title {
  font-size: 17px;
  color: rgba(51, 51, 51, 0.35);
  line-height: 1.3;
  font-weight: 600;
  font-style: normal;
  letter-spacing: 2px;
  margin-bottom: 30px;
}
.brand-carousel-content__text {
  font-size: 32px;
  line-height: 1.3;
  font-weight: 200;
  font-style: italic;
  font-family: "Spectral", serif;
  color: #333;
  width: 730px;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
}
@media only screen and (max-width: 575px) {
  .brand-carousel-content__text {
    font-size: 25px;
  }
}

/*=====  End of 19. Brands  ======*/
/*=============================================
=            20. Product list            =
=============================================*/
@media only screen and (min-width: 1200px) {
  .column-five [class*=col-lg-] {
    -ms-flex-preferred-size: 20%;
        flex-basis: 20%;
  }
}

@media only screen and (min-width: 1200px) {
  .col-xl-is-five {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
}

@media only screen and (min-width: 992px) {
  .col-lg-is-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%;
    max-width: 20%;
  }
}

/*----------  tab product style  ----------*/
.tab-product-navigation .nav-tabs {
  border-bottom: none;
}
.tab-product-navigation .nav-tabs .nav-link {
  border: none;
  font-size: 48px;
  line-height: 64px;
  color: #ccc;
}
@media only screen and (max-width: 767px) {
  .tab-product-navigation .nav-tabs .nav-link {
    font-size: 38px;
    line-height: 55px;
  }
}
@media only screen and (max-width: 479px) {
  .tab-product-navigation .nav-tabs .nav-link {
    font-size: 22px;
    line-height: 32px;
  }
}
.tab-product-navigation .nav-tabs .nav-link.active {
  color: #333;
}
.tab-product-navigation .nav-tabs .nav-link:hover {
  color: #333;
}

/*=====  End of 20. Product list  ======*/
/*=============================================
=            21. banner            =
=============================================*/
.single-banner {
  /*----------  banner zoom effect  ----------*/
}
.single-banner--hoverzoom {
  position: relative;
  overflow: hidden;
}
.single-banner--hoverzoom > a {
  display: block;
}
.single-banner--hoverzoom > a img {
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 100%;
}
.single-banner--hoverzoom > a:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.single-banner--hoverzoom > a .banner-content {
  position: absolute;
  display: inline-block;
}
.single-banner--hoverzoom > a .banner-content--product-type {
  bottom: 30px;
  left: 30px;
}
.single-banner--hoverzoom > a .banner-content--product-type .name {
  font-size: 18px;
  line-height: 28px;
  font-weight: 400;
  color: #333333;
  display: block;
}
.single-banner--hoverzoom > a .banner-content--product-type .price {
  font-size: 14px;
  line-height: 28px;
  font-weight: 700;
  color: #333333;
}
.single-banner--hoverzoom > a .banner-content--product-type--bigtitle {
  bottom: 50px;
  left: 50px;
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverzoom > a .banner-content--product-type--bigtitle {
    bottom: 20px;
    left: 20px;
  }
}
.single-banner--hoverzoom > a .banner-content--product-type--bigtitle .name {
  font-size: 34px;
  line-height: 48px;
  font-weight: 300;
  margin-bottom: 20px;
}
.single-banner--hoverzoom > a .banner-content--product-type--bigtitle .name span {
  display: block;
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverzoom > a .banner-content--product-type--bigtitle .name {
    font-size: 24px;
    line-height: 34px;
    margin-bottom: 0;
  }
}
.single-banner--hoverzoom > a .banner-content--product-type--bigtitle .price {
  font-size: 14px;
  line-height: 28px;
  font-weight: 700;
  color: #777;
}
.single-banner--hoverzoom > a .banner-content--banner-type--top-right {
  top: 15%;
  width: 27%;
  right: 5%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-right {
    right: 15%;
  }
}
@media only screen and (max-width: 767px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-right {
    right: 10%;
  }
}
@media only screen and (max-width: 575px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-right {
    right: 15%;
  }
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-right {
    width: 40%;
  }
}
.single-banner--hoverzoom > a .banner-content--banner-type--top-left {
  top: 15%;
  width: 30%;
  left: 10%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-left {
    width: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .single-banner--hoverzoom > a .banner-content--banner-type--top-left {
    width: 50%;
  }
}
.single-banner--hoverzoom > a .banner-content--banner-type .name {
  font-weight: 400;
  font-style: normal;
  font-size: 34px;
  line-height: 48px;
  color: #333333;
  margin-bottom: 10px;
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverzoom > a .banner-content--banner-type .name {
    font-size: 24px;
    line-height: 32px;
  }
}
.single-banner--hoverzoom > a .banner-content--banner-type .name span {
  display: block;
}
.single-banner--hoverzoom > a .banner-content--banner-type .lezada-button-link {
  position: relative;
  text-transform: none;
  background-color: transparent;
  border: none;
  padding: 0;
  margin-top: 10px;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  color: #333;
  padding-bottom: 3px;
}
.single-banner--hoverzoom > a .banner-content--banner-type .lezada-button-link:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #333;
}
.single-banner--hoverzoom > a .banner-content--banner-type .lezada-button-link:hover {
  color: #d3122a;
}
.single-banner--hoverzoom > a .banner-content--banner-type .lezada-button-link:hover:after {
  background-color: #d3122a;
}
.single-banner--hoverborder {
  position: relative;
  overflow: hidden;
}
.single-banner--hoverborder img {
  width: 100%;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.single-banner--hoverborder .banner-link {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.single-banner--hoverborder .banner-content {
  position: absolute;
  width: 100%;
  top: 50%;
  bottom: auto;
}
.single-banner--hoverborder .banner-content--middle-white {
  left: 50%;
  text-align: center;
  font-size: 37px;
  line-height: 48px;
  text-transform: uppercase;
  color: #ffffff;
  font-weight: 300;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-banner--hoverborder .banner-content--middle-white {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-banner--hoverborder .banner-content--middle-white {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-banner--hoverborder .banner-content--middle-white {
    font-size: 20px;
    line-height: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .single-banner--hoverborder .banner-content--middle-white {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverborder .banner-content--middle-white {
    font-size: 15px;
    line-height: 25px;
  }
}
.single-banner--hoverborder .banner-content--middle-dark {
  color: #333;
}
.single-banner--hoverborder .banner-content--black-left {
  text-align: left;
  left: 80px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-banner--hoverborder .banner-content--black-left {
    left: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverborder .banner-content--black-left {
    left: 30px;
  }
}
.single-banner--hoverborder .banner-content span.bold-white {
  font-weight: 600;
  padding-right: 10px;
}
.single-banner--hoverborder .banner-content span.big-text {
  font-size: 37px;
  line-height: 48px;
  letter-spacing: 5px;
  text-transform: uppercase;
  color: #333333;
  font-weight: 500;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-banner--hoverborder .banner-content span.big-text {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-banner--hoverborder .banner-content span.big-text {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-banner--hoverborder .banner-content span.big-text {
    font-size: 20px;
    line-height: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .single-banner--hoverborder .banner-content span.big-text {
    font-size: 25px;
    line-height: 35px;
  }
}
@media only screen and (max-width: 479px) {
  .single-banner--hoverborder .banner-content span.big-text {
    font-size: 15px;
    line-height: 25px;
  }
}
.single-banner--hoverborder .banner-content span.small-text {
  font-size: 14px;
  line-height: 22px;
  color: #777;
}
.single-banner--hoverborder:after {
  display: block;
  position: absolute;
  content: "";
  top: 20px;
  left: 20px;
  width: calc(100% - 40px);
  height: calc(100% - 40px);
  background-color: transparent;
  border: 1px solid #ffffff;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.single-banner--hoverborder:hover:after {
  visibility: visible;
  opacity: 1;
}
.single-banner--hoverborder:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

/*----------  ad section   ----------*/
@media only screen and (max-width: 767px) {
  .footer-banner-section--special-home img {
    margin-top: -10px;
  }
}
@media only screen and (max-width: 479px) {
  .footer-banner-section--special-home img {
    margin-top: 0;
  }
}

.footer-banner-tags ul li {
  display: inline-block;
  margin-right: 20px;
}
.footer-banner-tags ul li a {
  color: #7e7e7e;
  font-size: 18px;
  line-height: 23px;
  display: block;
  border-bottom: 1px solid transparent;
  padding-bottom: 3px;
}
.footer-banner-tags ul li a:hover {
  border-bottom: 1px solid #D6D6D6;
}

.footer-banner-content h2 {
  font-size: 40px;
  line-height: 56px;
}
@media only screen and (max-width: 767px) {
  .footer-banner-content h2 {
    font-size: 30px;
    line-height: 42px;
  }
}

/*----------  product side banner  ----------*/
.product-side-banner {
  position: sticky;
  top: 0;
}
.product-side-banner:hover img {
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
}
.product-side-banner--link {
  display: block;
  text-align: center;
  font-size: 48px;
  line-height: 56px;
  color: #333;
}
.product-side-banner--link:hover {
  color: #333;
  opacity: 0.85;
}

.banner-cta-bg {
  background-size: cover;
  background-repeat: no-repeat;
}

.banner-cta-content__title {
  font-size: 16px;
  font-weight: 600;
  line-height: 1.2;
  color: #ffffff;
  margin-bottom: 40px;
}
.banner-cta-content__subtitle {
  font-size: 40px;
  line-height: 1.4;
  color: #ffffff;
  font-family: "Spectral", serif;
  margin-bottom: 40px;
}
@media only screen and (max-width: 767px) {
  .banner-cta-content__subtitle {
    font-size: 30px;
  }
}
.banner-cta-content__button {
  display: inline-block;
  color: #ffffff;
  border: 1px solid #ffffff;
  padding: 10px 45px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  font-size: 14px;
  font-weight: 500;
}
.banner-cta-content__button:hover {
  background-color: #ffffff;
  color: #333;
}

.single-image-text-banner__media {
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
}
@media only screen and (max-width: 767px) {
  .single-image-text-banner__media {
    height: 600px;
  }
}
@media only screen and (max-width: 479px) {
  .single-image-text-banner__media {
    height: 400px;
  }
}
.single-image-text-banner__content {
  text-align: center;
  padding: 200px 80px;
  height: 100%;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .single-image-text-banner__content {
    padding: 100px 50px;
  }
}
@media only screen and (max-width: 479px) {
  .single-image-text-banner__content {
    padding: 80px 30px;
  }
}
.single-image-text-banner__content .image {
  margin-bottom: 30px;
}
.single-image-text-banner__content .text {
  font-size: 30px;
  line-height: 1.2;
  color: #333;
  font-family: "Spectral", serif;
  font-weight: 400;
  margin-bottom: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (max-width: 479px) {
  .single-image-text-banner__content .text {
    font-size: 20px;
  }
}
.single-image-text-banner__content a {
  text-transform: uppercase;
  font-size: 14px;
  line-height: 20px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  display: inline-block;
  position: relative;
}
.single-image-text-banner__content a:before {
  font-size: 0;
  padding-right: 0;
  font-weight: 400;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  line-height: 0;
  content: "\f218";
  font-family: "Ionicons";
}
.single-image-text-banner__content a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #333;
  opacity: 0.2;
  content: "";
}
.single-image-text-banner__content a:hover:before {
  font-size: 14px;
  line-height: 0;
  padding-right: 8px;
  visibility: visible;
  opacity: 1;
}
.single-image-text-banner__content--yellow-bg {
  background-color: #FBD47D;
}
.single-image-text-banner__content--pink-bg {
  background-color: #F9D0C2;
}

/*=====  End of 21. banner  ======*/
/*=============================================
=            22. filter product            =
=============================================*/
/*----------  filter title  ----------*/
.filter-title .product-filter-menu li {
  display: inline-block;
  font-size: 48px;
  line-height: 64px;
  color: #ccc;
  cursor: pointer;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .filter-title .product-filter-menu li {
    font-size: 40px;
    line-height: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .filter-title .product-filter-menu li {
    font-size: 30px;
    line-height: 40px;
  }
}
.filter-title .product-filter-menu li:hover {
  color: #333;
}
.filter-title .product-filter-menu li .filter-separator {
  color: #ccc;
  margin: 0 30px;
}
@media only screen and (max-width: 767px) {
  .filter-title .product-filter-menu li .filter-separator {
    margin: 0 15px;
  }
}
.filter-title .product-filter-menu li.active {
  color: #333;
}
.filter-title--type-two .product-filter-menu li {
  font-size: 14px;
  line-height: 24px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 0 20px;
}
.filter-title--type-two .product-filter-menu li:first-child {
  padding-left: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .filter-title--type-two .product-filter-menu li {
    padding: 0 15px;
  }
}
@media only screen and (max-width: 767px) {
  .filter-title--type-two .product-filter-menu li {
    padding: 0 5px;
  }
}

/*=====  End of 22. filter product  ======*/
/*=============================================
=            23. fashion home           =
=============================================*/
/*----------  fashion home intro  ----------*/
.fashion-home-intro {
  position: relative;
}
.fashion-home-intro p.label {
  font-size: 14px;
  line-height: 24px;
  color: #333;
  font-weight: 500;
  margin-bottom: 10px;
}
.fashion-home-intro p.description {
  margin-bottom: 30px;
  max-width: 350px;
}
.fashion-home-intro p.shadow-text {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%) rotate(90deg);
          transform: translateY(-50%) rotate(90deg);
  font-size: 77px;
  line-height: 84px;
  color: #333;
  font-weight: 700;
  opacity: 0.1;
}
@media only screen and (max-width: 575px) {
  .fashion-home-intro p.shadow-text {
    display: none;
  }
}
.fashion-home-intro h2.title {
  font-size: 48px;
  line-height: 72px;
  color: #333;
  margin-bottom: 20px;
}
@media only screen and (max-width: 479px) {
  .fashion-home-intro h2.title {
    font-size: 38px;
    line-height: 65px;
  }
}
.fashion-home-intro a.lezada-shop-link {
  font-size: 14px;
  line-height: 18px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-bottom: 1px solid #D6D6D6;
}
.fashion-home-intro a.lezada-shop-link:hover {
  border-color: #333;
}

/*----------  product size  ----------*/
.single-product--large-size {
  max-width: 400px;
  margin: 0 auto;
}
.single-product--small-size {
  max-width: 300px;
  margin: 0 auto;
}

/*=====  End of 23. fashion home    ======*/
/*=============================================
=            24. cosmetics home            =
=============================================*/
/*----------  cosmetics home intro  ----------*/
.cosmetics-home-intro {
  position: relative;
}
.cosmetics-home-intro p.label {
  font-size: 14px;
  line-height: 24px;
  color: #333;
  font-weight: 500;
  margin-bottom: 10px;
}
.cosmetics-home-intro p.description {
  margin-bottom: 30px;
  max-width: 500px;
}
.cosmetics-home-intro p.shadow-text {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%) rotate(90deg);
          transform: translateY(-50%) rotate(90deg);
  font-size: 77px;
  line-height: 84px;
  color: #333;
  font-weight: 700;
  opacity: 0.1;
}
@media only screen and (max-width: 575px) {
  .cosmetics-home-intro p.shadow-text {
    display: none;
  }
}
.cosmetics-home-intro h2.title {
  font-size: 48px;
  line-height: 72px;
  color: #333;
  margin-bottom: 20px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cosmetics-home-intro h2.title {
    font-size: 38px;
    line-height: 65px;
  }
}
@media only screen and (max-width: 479px) {
  .cosmetics-home-intro h2.title {
    font-size: 32px;
    line-height: 55px;
  }
}
.cosmetics-home-intro a.lezada-shop-link {
  font-size: 14px;
  line-height: 18px;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-bottom: 1px solid #D6D6D6;
}
.cosmetics-home-intro a.lezada-shop-link:hover {
  border-color: #333;
}

/*=====  End of 24. cosmetics home  ======*/
/*=============================================
=            25. Shop             =
=============================================*/
.shop-page-content {
  overflow-x: hidden;
}

/*----------  shop page header  ----------*/
.shop-page-header {
  border-bottom: 1px solid #d8d8d8;
  padding: 20px 0;
}

.single-icon {
  margin-left: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-icon {
    margin-left: 0;
  }
}
@media only screen and (max-width: 767px) {
  .single-icon {
    margin-left: 0;
  }
}

/*----------  filter icons  ----------*/
.filter-icons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media only screen and (max-width: 767px) {
  .filter-icons {
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
  }
}

/*----------  filter dropdown  ----------*/
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .filter-dropdown {
    display: none;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .filter-dropdown {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .filter-dropdown {
    display: block;
  }
}
.filter-dropdown .nice-select {
  padding-left: 0px;
  padding-right: 35px;
  background-color: #ffffff;
  border-radius: 0;
  border-top: none;
  border-right: none;
  border-left: none;
  border-bottom: 2px solid #cccccc;
}
.filter-dropdown .nice-select.open .list {
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: scale(1) translateY(0);
          transform: scale(1) translateY(0);
  z-index: 99;
}
.filter-dropdown .nice-select .list {
  padding: 10px;
  border-radius: 0;
  margin: 0;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
          box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}

/*----------  grid icons  ----------*/
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .grid-icons {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .grid-icons {
    display: none;
  }
}
.grid-icons a {
  margin-left: 20px;
  color: #ccc;
}
.grid-icons a.active {
  color: #333;
}
.grid-icons a:hover {
  color: #333;
}

/*----------  advance filter icon  ----------*/
.advance-filter-icon a {
  color: #7e7e7e;
  position: relative;
  font-weight: 500;
}
.advance-filter-icon a:after {
  position: absolute;
  bottom: 0;
  left: auto;
  right: 0;
  width: 0;
  height: 1px;
  content: "";
  background-color: #333;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.advance-filter-icon a.active {
  color: #333;
}
.advance-filter-icon a.active:after {
  width: 100%;
  right: auto;
  left: 0;
}
.advance-filter-icon a:hover {
  color: #333;
}
.advance-filter-icon a:hover:after {
  width: 100%;
  right: auto;
  left: 0;
}

/*----------  shop advance filter area  ----------*/
.shop-advance-filter-area {
  background-color: #F9F9F9;
  display: none;
}

/*----------  single filter widget  ----------*/
.single-filter-widget--title {
  font-size: 24px;
  line-height: 26px;
  color: #333;
  margin-bottom: 30px;
}
.single-filter-widget--list li {
  font-size: 15px;
  padding: 10px 0;
}
.single-filter-widget--list li:first-child {
  padding-top: 0;
}
.single-filter-widget--list li:last-child {
  padding-bottom: 0;
}
.single-filter-widget--list li a {
  color: #999;
  position: relative;
}
.single-filter-widget--list li a:after {
  position: absolute;
  bottom: 0;
  left: auto;
  right: 0;
  width: 0;
  background-color: #333;
  height: 1px;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.single-filter-widget--list li a.active {
  color: #333;
}
.single-filter-widget--list li a:hover {
  color: #333;
}
.single-filter-widget--list li a:hover:after {
  width: 100%;
  left: 0;
  right: auto;
}
.single-filter-widget--list li .quantity {
  float: right;
}
.single-filter-widget--list--size li {
  display: block;
}
.single-filter-widget--list--size li:hover a {
  color: #333;
}
.single-filter-widget--list--size li:hover .quantity {
  color: #333;
}
.single-filter-widget--list--size li a {
  color: #ccc;
}
.single-filter-widget--list--size li a:after {
  display: none;
}
.single-filter-widget--list--size li .quantity {
  color: #ccc;
}
.single-filter-widget--list--brand li {
  display: block;
}
.single-filter-widget--list--brand li:hover a {
  color: #333;
}
.single-filter-widget--list--brand li:hover .quantity {
  color: #333;
}
.single-filter-widget--list--brand li a:after {
  -webkit-transition: 0s;
  transition: 0s;
  background-color: #ccc;
}
.single-filter-widget--list--color li {
  margin-right: 20px;
  margin-bottom: 15px;
  display: inline-block;
}
.single-filter-widget--list--color li a span.color-picker {
  display: inline-block;
  vertical-align: top;
  height: 18px;
  width: 18px;
  line-height: 18px;
  border-radius: 100%;
}
.single-filter-widget--list--color li a span.black {
  background-color: #000;
}
.single-filter-widget--list--color li a span.blue {
  background-color: #1e73be;
}
.single-filter-widget--list--color li a span.brown {
  background-color: #dd9933;
}
.single-filter-widget--list--color li a span.gold {
  background-color: #cc9933;
}
.single-filter-widget--list--color li a span.green-coral {
  background-color: #a1aeb2;
}
.single-filter-widget--list--color li a span.grey {
  background-color: #eeeeee;
}
.single-filter-widget--list--color li a span.oak {
  background-color: #cba98e;
}
.single-filter-widget--list--color li a span.pink {
  background-color: #efdae7;
}
.single-filter-widget--list--color li a span.silver {
  background-color: #999999;
}
.single-filter-widget--list--color li a span.white {
  background-color: #ffffff;
}
.single-filter-widget--list--color li a.active span {
  -webkit-box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px rgba(0, 0, 0, 0.3);
          box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px rgba(0, 0, 0, 0.3);
}
.single-filter-widget--list--color li a:hover span {
  -webkit-box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px rgba(0, 0, 0, 0.3);
          box-shadow: 0 0 0 2px #ffffff, 0 0 0 3px rgba(0, 0, 0, 0.3);
}
.single-filter-widget--list--color li a:after {
  display: none;
}
.single-filter-widget--list--category li {
  padding: 0;
  padding-bottom: 20px;
}
.single-filter-widget--list--category li .quantity {
  float: right;
  margin-right: 20px;
  color: #999;
}
.single-filter-widget--list--category li:last-child {
  padding-bottom: 0;
}
.single-filter-widget--list--category li.has-children {
  position: relative;
}
.single-filter-widget--list--category li.has-children ul {
  display: none;
  margin-top: 10px;
}
.single-filter-widget--list--category li.has-children ul li {
  padding: 0;
  padding-left: 10px;
  padding-bottom: 10px;
}
.single-filter-widget--list--category li.has-children ul li:last-child {
  padding-bottom: 0;
}
.single-filter-widget--list--category li a.expand-icon {
  position: absolute;
  top: 0;
  right: 0;
}
.single-filter-widget--list--category li a.expand-icon:after {
  display: none;
}
.single-filter-widget--list--category li a:after {
  -webkit-transition: 0s;
  transition: 0s;
  background-color: #ccc;
}

/*----------  search widget   ----------*/
.search-widget {
  position: relative;
}
.search-widget input {
  background: transparent;
  width: 100%;
  height: 40px;
  font-size: 14px;
  line-height: 19px;
  background-clip: padding-box;
  padding-left: 0;
  padding-right: 20px;
  margin: 0;
  border: none;
  border-bottom: 2px solid #cccccc;
}
.search-widget input:hover {
  border-color: #333;
}
.search-widget button {
  position: absolute;
  top: 0;
  right: 0;
  background-color: transparent !important;
  border: none;
  padding: 0;
}
.search-widget button i {
  font-size: 18px;
  line-height: 40px;
  color: #ababab;
}

/*----------  single sidebar widget  ----------*/
.single-sidebar-widget--title {
  font-size: 24px;
  line-height: 26px;
  color: #333;
  margin-bottom: 30px;
}
.single-sidebar-widget--list li {
  font-size: 15px;
  padding: 10px 0;
}
.single-sidebar-widget--list li:first-child {
  padding-top: 0;
}
.single-sidebar-widget--list li:last-child {
  padding-bottom: 0;
}
.single-sidebar-widget--list li a {
  color: #999;
  position: relative;
}
.single-sidebar-widget--list li a:after {
  position: absolute;
  bottom: 0;
  left: auto;
  right: 0;
  width: 0;
  background-color: #333;
  height: 1px;
  content: "";
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.single-sidebar-widget--list li a.active {
  color: #333;
}
.single-sidebar-widget--list li a:hover {
  color: #333;
}
.single-sidebar-widget--list li a:hover:after {
  width: 100%;
  left: 0;
  right: auto;
}
.single-sidebar-widget--list li .quantity {
  float: right;
}
.single-sidebar-widget--list--category li {
  padding: 0;
  padding-bottom: 20px;
}
.single-sidebar-widget--list--category li .quantity {
  float: right;
  margin-right: 20px;
  color: #999;
}
.single-sidebar-widget--list--category li:last-child {
  padding-bottom: 0;
}
.single-sidebar-widget--list--category li.has-children {
  position: relative;
}
.single-sidebar-widget--list--category li.has-children ul {
  display: none;
  margin-top: 10px;
}
.single-sidebar-widget--list--category li.has-children ul li {
  padding: 0;
  padding-left: 10px;
  padding-bottom: 10px;
}
.single-sidebar-widget--list--category li.has-children ul li:last-child {
  padding-bottom: 0;
}
.single-sidebar-widget--list--category li a.expand-icon {
  position: absolute;
  top: 0;
  right: 0;
}
.single-sidebar-widget--list--category li a.expand-icon:after {
  display: none;
}
.single-sidebar-widget--list--category li a:after {
  -webkit-transition: 0s;
  transition: 0s;
  background-color: #ccc;
}

/*----------  sidebar widget product  ----------*/
.widget-product-wrapper .single-widget-product-wrapper {
  border-bottom: 1px solid #EEEEEE;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.widget-product-wrapper .single-widget-product-wrapper .single-widget-product__image {
  width: 100px;
}
.widget-product-wrapper .single-widget-product-wrapper .single-widget-product__content {
  width: calc(100% - 100px);
}
.widget-product-wrapper .single-widget-product-wrapper:last-child {
  border: none;
  margin-bottom: 0;
  padding-bottom: 0;
}

/*----------  tag style  ----------*/
.tag-container a {
  position: relative;
  display: inline-block;
  font-size: 15px !important;
  color: #7e7e7e;
}
.tag-container a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  background-color: #333333;
  height: 1px;
  width: calc(100% - 18px);
  opacity: 0;
  -webkit-transition: opacity 0.5s ease;
  transition: opacity 0.5s ease;
}
.tag-container a:after {
  display: inline-block;
  content: "/";
  color: #999999;
  margin: 0 5px;
}
.tag-container a:hover:before {
  opacity: 0.2;
}

/*----------  price filter  ----------*/
.sidebar-price #price-range {
  width: 96%;
  height: 7px;
  margin: 7px 0;
  background-color: #2c2c2c;
  position: relative;
  border-radius: 50px;
}
.sidebar-price #price-range .ui-slider-range {
  position: absolute;
  height: 100%;
  top: 0;
  background-color: #333;
}
.sidebar-price #price-range .ui-slider-handle {
  background-color: #333;
  position: absolute;
  width: 17px;
  height: 17px;
  border-radius: 50px;
  display: block;
  top: -5px;
  -webkit-transition: none;
  transition: none;
  -webkit-box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.15);
          box-shadow: 2px 4px 4px rgba(0, 0, 0, 0.15);
}
.sidebar-price input {
  border: none;
  font-size: 14px;
  color: #777;
  font-weight: 500;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .sidebar-price input {
    width: 69%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .sidebar-price input {
    width: 69%;
  }
}
.sidebar-price .price-range-button {
  float: right;
  font-size: 14px;
  font-weight: 600;
  color: #333333;
  text-transform: uppercase;
}

/*----------  grid change  ----------*/
.shop-product-wrap {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.shop-product-wrap [class*=col], .shop-product-wrap [class*=col-] {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.shop-product-wrap.list [class*=col], .shop-product-wrap.list [class*=col-] {
  -webkit-box-flex: 1;
      -ms-flex: 1 0 100%;
          flex: 1 0 100%;
  width: 100%;
  max-width: 100%;
  -webkit-transition: 0.8s;
  transition: 0.8s;
}
.shop-product-wrap.list .single-product {
  display: none;
}
.shop-product-wrap.three-column .single-product--list, .shop-product-wrap.four-column .single-product--list, .shop-product-wrap.five-column .single-product--list {
  display: none;
}

/*=====  End of 25. Shop   ======*/
/*=============================================
=            26. Shop product            =
=============================================*/
.shop-product {
  /*----------  shop product description  ----------*/
  /*----------  navigation arrow  ----------*/
  /*----------  rating  ----------*/
  /*----------  title  ----------*/
  /*----------  price  ----------*/
  /*----------  short description  ----------*/
  /*----------  buttons  ----------*/
  /*----------  product block  ----------*/
  /*----------  brands  ----------*/
  /*----------  description tab  ----------*/
  /*----------  long description  ----------*/
  /*----------  additional information  ----------*/
  /*----------  review section     ----------*/
  /*----------  lezada form review  ----------*/
  /*----------  shop product image gallery  ----------*/
  /*----------  variation image  ----------*/
  /*----------  extra info area  ----------*/
  /*----------  extra info   ----------*/
  /*----------  extra info video  ----------*/
}
.shop-product__description {
  position: relative;
}
.shop-product__navigation {
  position: absolute;
  top: 0;
  right: 0;
}
@media only screen and (max-width: 479px) {
  .shop-product__navigation {
    display: none;
  }
}
.shop-product__navigation a {
  font-size: 34px;
  color: #ababab;
  margin-right: 10px;
}
.shop-product__navigation a:last-child {
  margin-right: 0;
}
.shop-product__navigation a:hover {
  color: #333;
}
.shop-product__rating .product-rating i {
  font-size: 16px;
}
.shop-product__rating .product-rating i.active {
  color: #f5cc26;
}
.shop-product__rating .review-link a {
  color: #7e7e7e;
}
.shop-product__rating .review-link a:hover {
  color: #333;
}
.shop-product__title h2 {
  font-size: 34px;
}
.shop-product__price .main-price {
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
.shop-product__price .main-price.discounted {
  font-size: 15px;
  color: #aaa;
  text-decoration: line-through;
  margin-right: 10px;
}
.shop-product__price .discounted-price {
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
.shop-product__short-desc {
  font-size: 15px;
  line-height: 24px;
}
.shop-product__buttons .lezada-compare-button {
  font-size: 0;
  display: inline-block;
  height: 44px;
  width: 44px;
  line-height: 40px;
  text-align: center;
  border: 1px solid #d8d8d8;
}
.shop-product__buttons .lezada-compare-button i {
  font-size: 20px;
  color: #ababab;
  line-height: 40px;
}
.shop-product__buttons .lezada-compare-button:hover {
  background-color: #333;
  border-color: #333;
}
.shop-product__buttons .lezada-compare-button:hover i {
  color: #fff;
}
.shop-product__block {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.shop-product__block__title {
  -ms-flex-preferred-size: 25%;
      flex-basis: 25%;
  font-size: 16px;
  line-height: 32px;
  color: #333;
  font-weight: 500;
}
@media only screen and (max-width: 479px) {
  .shop-product__block__title {
    -ms-flex-preferred-size: 100px;
        flex-basis: 100px;
  }
}
.shop-product__block__value .shop-product-size-list .single-size {
  font-size: 24px;
  line-height: 24px;
  color: #ababab;
  margin-right: 35px;
  cursor: pointer;
}
@media only screen and (max-width: 479px) {
  .shop-product__block__value .shop-product-size-list .single-size {
    margin-right: 25px;
  }
}
.shop-product__block__value .shop-product-size-list .single-size:last-child {
  margin-right: 0;
}
.shop-product__block__value .shop-product-size-list .single-size.active {
  color: #333;
}
.shop-product__block__value .shop-product-size-list .single-size:hover {
  color: #333;
}
.shop-product__block__value .shop-product-color-list ul li a span {
  height: 24px;
  width: 24px;
}
.shop-product__brands {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.shop-product__brands a {
  display: block;
}
.shop-product__description-tab {
  border-top: 1px solid #ededed;
}
.shop-product__description-tab--double-border {
  border-bottom: 1px solid #ededed;
}
.shop-product__description-tab .tab-product-navigation--product-desc .nav-tabs a {
  font-size: 28px;
  line-height: 50px;
  color: #ababab;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__description-tab .tab-product-navigation--product-desc .nav-tabs a {
    font-size: 18px;
    line-height: 40px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__description-tab .tab-product-navigation--product-desc .nav-tabs a {
    font-size: 18px;
    line-height: 40px;
  }
}
@media only screen and (max-width: 575px) {
  .shop-product__description-tab .tab-product-navigation--product-desc .nav-tabs a {
    font-size: 16px;
    line-height: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .shop-product__description-tab .tab-product-navigation--product-desc .nav-tabs a {
    font-size: 22px;
    line-height: 30px;
  }
}
.shop-product__long-desc p {
  max-width: 70%;
  margin: 0 auto;
}
@media only screen and (max-width: 767px) {
  .shop-product__long-desc p {
    max-width: 100%;
  }
}
.shop-product__long-desc--wide p {
  max-width: 50%;
}
@media only screen and (max-width: 767px) {
  .shop-product__long-desc--wide p {
    max-width: 100%;
  }
}
.shop-product__additional-info .shop-attributes {
  width: 100%;
  max-width: 550px;
  margin: 0 auto;
  font-size: 16px;
  border-bottom: 1px solid #ededed;
}
.shop-product__additional-info .shop-attributes th {
  font-size: 14px;
  font-weight: 500;
  color: #333333;
  border-top: 1px solid #ededed;
  padding-top: 10px;
  padding-bottom: 10px;
}
.shop-product__additional-info .shop-attributes td {
  font-size: 14px;
  padding: 6px 10px 6px 0;
  border-top: 1px solid #ededed;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
}
.shop-product__additional-info .shop-attributes td:first-of-type {
  padding-left: 10px;
}
.shop-product__review {
  max-width: 70%;
  margin: 0 auto;
}
@media only screen and (max-width: 767px) {
  .shop-product__review {
    max-width: 100%;
  }
}
.shop-product__review--wide {
  max-width: 50%;
}
@media only screen and (max-width: 767px) {
  .shop-product__review--wide {
    max-width: 100%;
  }
}
.shop-product__review .review-title {
  font-size: 24px;
  line-height: 28px;
  color: #333;
  font-weight: 400;
  text-align: center;
}
.shop-product .lezada-form--review .rating-title {
  font-size: 14px;
  line-height: 25px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-weight: 500;
  color: #333;
}
.shop-product .lezada-form--review .product-rating i {
  cursor: pointer;
}
.shop-product .shop-product__big-image-gallery-wrapper {
  position: relative;
  cursor: crosshair;
}
.shop-product .shop-product__big-image-gallery-wrapper .single-product__floating-badges--shop-product {
  position: absolute;
  top: 20px;
  left: 20px;
}
.shop-product .shop-product__big-image-gallery-wrapper .shop-product-rightside-icons {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 3;
}
.shop-product .shop-product__big-image-gallery-wrapper .shop-product-rightside-icons span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  color: #7e7e7e;
}
.shop-product .shop-product__big-image-gallery-wrapper .shop-product-rightside-icons span a:hover {
  color: #333;
}
.shop-product .shop-product__big-image-gallery-wrapper .shop-product-rightside-icons .wishlist-icon {
  font-size: 30px;
  margin-bottom: 20px;
}
.shop-product .shop-product__big-image-gallery-wrapper .shop-product-rightside-icons .enlarge-icon {
  font-size: 30px;
}
.shop-product__variation-image {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.shop-product__variation-image__title a {
  font-size: 15px;
  line-height: 24px;
  font-weight: 600;
  color: #7e7e7e;
}
.shop-product__variation-image__title a:hover {
  color: #333;
}
.shop-product__variation-image .single-image {
  position: relative;
  -ms-flex-preferred-size: 25%;
      flex-basis: 25%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__variation-image .single-image {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__variation-image .single-image {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .shop-product__variation-image .single-image {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
.shop-product__variation-image .single-image:before {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #000;
  content: "";
  visibility: hideen;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.shop-product__variation-image .single-image:after {
  content: "";
  height: 1px;
  width: 0;
  position: absolute;
  left: 22%;
  top: 50%;
  background-color: #ffffff;
  -webkit-transition-duration: 0.5s;
          transition-duration: 0.5s;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.shop-product__variation-image .single-image .image-meta {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-55%, -50%);
          transform: translate(-55%, -50%);
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  color: #ffffff;
  visibility: hidden;
  opacity: 0;
  width: 100%;
  text-align: center;
}
.shop-product__variation-image .single-image:hover:before {
  visibility: visible;
  opacity: 0.5;
}
.shop-product__variation-image .single-image:hover:after {
  width: 30px;
}
.shop-product__variation-image .single-image:hover .image-meta {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.shop-product__extra-info-area {
  background-color: #eee;
}
.shop-product__extra-info table {
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 14px;
  line-height: 2;
  border-bottom: 1px solid #ededed;
}
.shop-product__extra-info table td {
  padding: 6px 10px 6px 10px;
}
.shop-product__extra-info-video .video-area {
  height: 800px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .shop-product__extra-info-video .video-area {
    height: 600px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .shop-product__extra-info-video .video-area {
    height: 500px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .shop-product__extra-info-video .video-area {
    height: 300px;
  }
}
@media only screen and (max-width: 767px) {
  .shop-product__extra-info-video .video-area {
    height: 300px;
  }
}

/*----------  single review  ----------*/
.single-review {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-bottom: 1px solid #e8e8e8;
  padding-bottom: 40px;
  margin-bottom: 40px;
}
.single-review__image {
  -ms-flex-preferred-size: 70px;
      flex-basis: 70px;
}
.single-review__image img {
  border-radius: 50%;
}
.single-review__content {
  -ms-flex-preferred-size: calc(100% - 70px);
      flex-basis: calc(100% - 70px);
  padding-left: 30px;
}
.single-review__content .username {
  font-size: 18px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
.single-review__content .date {
  font-size: 14px;
  line-height: 22px;
  color: #777;
  font-weight: 400;
  padding-left: 20px;
}
.single-review__content .message {
  font-size: 18px;
  line-height: 28px;
}

/*=====  End of 26. Shop product  ======*/
/*=============================================
=            27. order tracking            =
=============================================*/
.order-tracking-box {
  background-color: #F7F7F7;
}

.order-tracking-form label {
  font-size: 20px;
  line-height: 32px;
  color: #333;
}
.order-tracking-form .order-tracking-button {
  padding: 10px 65px;
}

/*=====  End of 27. order tracking  ======*/
/*=============================================
=            28. My account            =
=============================================*/
.login-form {
  background-color: #f7f7f7;
  padding: 60px 50px;
  border-radius: 12%;
}
@media only screen and (max-width: 479px) {
  .login-form {
    padding: 50px 20px;
  }
}
.login-form--register {
  padding: 60px 50px;
}
@media only screen and (max-width: 479px) {
  .login-form--register {
    padding: 50px 20px;
  }
}
.login-form--register label {
  font-size: 15px;
  line-height: 24px;
  font-weight: 500;
  color: #333;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.login-form--register label span {
  color: #ff0000;
}

.remember-text {
  font-size: 16px;
  line-height: 25px;
  color: #333;
  font-weight: 500;
}

.reset-pass-link {
  display: block;
  font-size: 15px;
  line-height: 24px;
  color: #333;
  margin-top: 20px;
}
.reset-pass-link:hover {
  color: #333;
}

.myaccount-tab-menu a {
  font-weight: 400;
  font-size: 13px;
  display: inline-block;
  padding: 7px 10px;
  text-transform: capitalize;
  float: left;
  margin: 0 5px 0 0;
}
.myaccount-tab-menu a:last-child {
  margin: 0 0px 0 0;
}
@media only screen and (max-width: 767px) {
  .myaccount-tab-menu a {
    padding: 4px 6px;
    margin: 0 5px 5px 0;
  }
}
.myaccount-tab-menu a:hover, .myaccount-tab-menu a.active {
  background-color: #333;
  border-color: #333;
  color: #ffffff;
}

#myaccountContent {
  margin-top: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  #myaccountContent {
    margin-bottom: 50px;
  }
}
@media only screen and (max-width: 767px) {
  #myaccountContent {
    margin-bottom: 30px;
  }
}

.myaccount-content {
  border: 1px solid #eeeeee;
  padding: 30px;
}
@media only screen and (max-width: 767px) {
  .myaccount-content {
    padding: 20px 15px;
  }
}
.myaccount-content form {
  margin-top: -20px;
}
.myaccount-content h3 {
  font-size: 20px;
  border-bottom: 1px dashed #ccc;
  padding-bottom: 10px;
  margin-bottom: 25px;
  font-weight: 600;
}
.myaccount-content .welcome a:hover {
  color: #333;
}
.myaccount-content .welcome strong {
  font-weight: 600;
  color: #333;
}
.myaccount-content fieldset {
  margin-top: 20px;
}
.myaccount-content fieldset legend {
  font-size: 16px;
  margin-bottom: 20px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid #ccc;
}
.myaccount-content .account-details-form {
  margin-top: 50px;
}
.myaccount-content .account-details-form .single-input-item {
  margin-bottom: 20px;
}
.myaccount-content .account-details-form .single-input-item label {
  font-size: 14px;
  text-transform: capitalize;
  display: block;
  margin: 0 0 5px;
}
.myaccount-content .account-details-form .single-input-item input {
  border: 1px solid #e8e8e8;
  height: 50px;
  background-color: transparent;
  padding: 2px 20px;
  color: #1f2226;
  font-size: 13px;
  width: 100%;
}
.myaccount-content .account-details-form .single-input-item input:focus {
  border: 1px solid #343538;
}
.myaccount-content .account-details-form .single-input-item button {
  border: none;
  background-color: #333;
  text-transform: uppercase;
  font-weight: 600;
  padding: 9px 25px;
  color: #fff;
  font-size: 13px;
}
.myaccount-content .account-details-form .single-input-item button:hover {
  background-color: #1f2226;
}

.myaccount-table {
  white-space: nowrap;
  font-size: 14px;
}
.myaccount-table table th,
.myaccount-table .table th {
  padding: 10px;
  font-weight: 600;
  background-color: #f8f8f8;
  border-color: #ccc;
  border-bottom: 0;
  color: #1f2226;
}
.myaccount-table table td,
.myaccount-table .table td {
  padding: 10px;
  vertical-align: middle;
  border-color: #ccc;
}

.saved-message {
  background-color: #fff;
  border-top: 3px solid #333;
  font-size: 14px;
  padding: 20px 0;
  color: #333;
}

/*=====  End of 28. My account  ======*/
/*=============================================
=            29. Cart and wishlist            =
=============================================*/
.cart-table {
  border: 1px solid #e7e7e7;
  width: 100%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table thead {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table thead {
    display: none;
  }
}
.cart-table tr {
  border-bottom: 1px solid #ededed;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table tr {
    position: relative;
    display: block;
    text-align: center;
    border: 1px solid #ededed;
    padding: 30px 0;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table tr {
    position: relative;
    display: block;
    text-align: center;
    border: 1px solid #ededed;
    padding: 30px 0;
  }
}
.cart-table th {
  text-transform: uppercase;
  font-size: 15px;
  line-height: 24px;
  font-weight: 500;
  letter-spacing: 1px;
  color: #222222;
  background-color: transparent;
  padding: 16px 12px;
}
.cart-table th:first-of-type {
  padding-left: 25px;
}
.cart-table td {
  padding-top: 30px;
  padding-bottom: 30px;
  padding-left: 25px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td {
    text-align: center;
    display: block;
    width: 100% !important;
    margin: 0 auto;
    padding: 0 !important;
    border: none;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td {
    text-align: center;
    display: block;
    width: 100% !important;
    margin: 0 auto;
    padding: 0 !important;
    border: none;
  }
}
.cart-table td.product-thumbnail {
  width: 115px;
}
.cart-table td.product-name a {
  display: block;
  font-size: 16px;
  font-weight: 500;
  line-height: 1;
  margin-bottom: 20px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td.product-name a {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td.product-name a {
    margin-top: 20px;
  }
}
.cart-table td.product-name a:hover {
  color: #333;
}
.cart-table td.product-name .product-variation {
  display: block;
  line-height: 22px;
  float: left;
  clear: both;
  color: #ababab;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td.product-name .product-variation {
    float: none;
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td.product-name .product-variation {
    float: none;
    margin-bottom: 10px;
  }
}
.cart-table td.product-price {
  clear: left;
}
.cart-table td.product-price .price {
  font-size: 14px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
.cart-table td.total-price {
  clear: left;
}
.cart-table td.total-price .price {
  font-size: 14px;
  line-height: 28px;
  font-weight: 600;
  color: #333;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td.product-quantity {
    margin-bottom: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td.product-quantity {
    margin-bottom: 20px;
  }
}
.cart-table td.product-remove {
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td.product-remove {
    position: absolute;
    top: 10px;
    right: 10px;
    width: auto !important;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td.product-remove {
    position: absolute;
    top: 0px;
    right: 10px;
    width: auto !important;
  }
}
.cart-table td.product-remove a {
  text-align: center;
  font-size: 0;
  display: block;
  height: 45px;
  width: 45px;
  color: #ababab;
  border: 2px solid #e6e6e6;
}
.cart-table td.product-remove a i {
  font-size: 20px;
  line-height: 41px;
}
.cart-table td.product-remove a:hover {
  color: #c61932;
  border-color: #c61932;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .cart-table td.product-remove a {
    border: none;
    width: auto;
    height: auto;
  }
}
@media only screen and (max-width: 767px) {
  .cart-table td.product-remove a {
    border: none;
    width: auto;
    height: auto;
  }
}

.cart-coupon-area {
  border-bottom: 1px solid #eeeeee;
}

.cart-calculation-area {
  background-color: #F7F7F7;
  padding: 40px;
}
.cart-calculation-area h2 {
  font-size: 34px;
  font-weight: 400;
  text-align: center;
  margin-top: 0;
}

.cart-calculation-table {
  width: 100%;
}
.cart-calculation-table th {
  text-transform: uppercase;
  font-size: 15px;
  line-height: 24px;
  font-weight: 500;
  letter-spacing: 1px;
  color: #222222;
  background-color: transparent;
  padding: 16px 12px;
  padding-left: 10px;
}
.cart-calculation-table td {
  padding-left: 10px !important;
  text-align: right;
}
.cart-calculation-table td.subtotal {
  font-size: 14px;
  line-height: 28px;
  color: #333;
  font-weight: 600;
}
.cart-calculation-table td.total {
  font-size: 24px;
  line-height: 48px;
  color: #333;
  font-weight: 600;
}

/*=====  End of 29. Cart and wishlist  ======*/
/*=============================================
=            30. Checkout            =
=============================================*/
/*-- Checkout Title --*/
.checkout-title {
  font-size: 20px;
  line-height: 23px;
  text-decoration: underline;
  text-transform: capitalize;
  font-weight: 700;
  margin-bottom: 30px;
}

/*-- Checkout Form --*/
.checkout-form label {
  font-size: 15px;
  line-height: 24px;
  font-weight: 500;
  color: #333;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.checkout-form .nice-select {
  width: 100%;
  background-color: #ffffff;
  border: none;
  border-bottom: 2px solid #cccccc;
  border-radius: 0;
  line-height: 23px;
  padding: 10px 20px;
  font-size: 14px;
  height: 45px;
  color: #777777;
  margin-bottom: 15px;
}
.checkout-form .nice-select::after {
  width: 6px;
  height: 6px;
  border-width: 1px;
  right: 20px;
  border-color: #777777;
}
.checkout-form .nice-select .current {
  color: #777777;
  display: block;
  line-height: 23px;
}
.checkout-form .nice-select .list {
  width: 100%;
}
.checkout-form .nice-select:hover {
  border-color: #333;
}
.checkout-form input {
  width: 100%;
  background-color: #ffffff;
  border: 1px solid #999999;
  border-radius: 0;
  line-height: 23px;
  padding: 10px 20px;
  font-size: 14px;
  color: #777777;
  margin-bottom: 15px;
}
.checkout-form input[type=checkbox] {
  width: auto;
}
.checkout-form .check-box {
  float: left;
  margin-right: 70px;
}
.checkout-form .check-box:last-child {
  margin-right: 0;
}
.checkout-form .check-box input[type=checkbox] {
  display: none;
}
.checkout-form .check-box input[type=checkbox] + label {
  position: relative;
  padding-left: 30px;
  line-height: 20px;
  font-size: 14px;
  font-weight: 400;
  color: #333333;
  margin: 0;
}
.checkout-form .check-box input[type=checkbox] + label::before {
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  display: block;
  border: 2px solid #999999;
  content: "";
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.checkout-form .check-box input[type=checkbox] + label::after {
  position: absolute;
  left: 0;
  top: 0;
  display: block;
  content: "\f00c";
  font-family: Fontawesome;
  font-size: 12px;
  line-height: 20px;
  opacity: 0;
  color: #333333;
  width: 20px;
  text-align: center;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.checkout-form .check-box input[type=checkbox]:checked + label::before {
  border: 2px solid #333333;
}
.checkout-form .check-box input[type=checkbox]:checked + label::after {
  opacity: 1;
}

/*-- Shipping Form --*/
#shipping-form {
  display: none;
}

/*-- Checkout Cart Total --*/
.checkout-cart-total {
  background-color: #f2f2f2;
  padding: 45px;
}
@media only screen and (max-width: 575px) {
  .checkout-cart-total {
    padding: 30px;
  }
}
.checkout-cart-total h4 {
  -ms-flex-preferred-size: 18px;
      flex-basis: 18px;
  line-height: 23px;
  font-weight: 700;
}
.checkout-cart-total h4:first-child {
  margin-top: 0;
  margin-bottom: 25px;
}
.checkout-cart-total h4:last-child {
  margin-top: 15px;
  margin-bottom: 0;
}
.checkout-cart-total h4 span {
  float: right;
  display: block;
}
.checkout-cart-total ul {
  border-bottom: 1px solid #999999;
}
.checkout-cart-total ul li {
  color: #777777;
  font-size: 14px;
  line-height: 23px;
  font-weight: 500;
  display: block;
  margin-bottom: 16px;
}
.checkout-cart-total ul li span {
  color: #333333;
  float: right;
}
.checkout-cart-total p {
  font-size: 14px;
  line-height: 30px;
  font-weight: 600;
  color: #505050;
  padding: 10px 0;
  border-bottom: 1px solid #999999;
  margin: 0;
}
.checkout-cart-total p span {
  float: right;
}

/*-- Checkout Payment Method --*/
.checkout-payment-method {
  background-color: #f2f2f2;
  padding: 45px;
}
@media only screen and (max-width: 575px) {
  .checkout-payment-method {
    padding: 30px;
  }
}

/*-- Single Payment Method --*/
.single-method {
  margin-bottom: 20px;
}
.single-method:last-child {
  margin-bottom: 0;
}
.single-method input[type=radio] {
  display: none;
}
.single-method input[type=radio] + label {
  position: relative;
  padding-left: 30px;
  line-height: 20px;
  font-size: 14px;
  font-weight: 400;
  color: #333333;
  margin: 0;
}
.single-method input[type=radio] + label::before {
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px;
  display: block;
  border: 2px solid #999999;
  content: "";
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.single-method input[type=radio] + label::after {
  position: absolute;
  left: 5px;
  top: 5px;
  display: block;
  content: "";
  opacity: 0;
  background-color: #333333;
  width: 10px;
  text-align: center;
  height: 10px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.single-method input[type=radio]:checked + label::before {
  border: 2px solid #333333;
}
.single-method input[type=radio]:checked + label::after {
  opacity: 1;
}
.single-method input[type=checkbox] {
  display: none;
}
.single-method input[type=checkbox] + label {
  position: relative;
  padding-left: 30px;
  line-height: 20px;
  font-size: 14px;
  font-weight: 400;
  color: #777777;
  margin: 0;
}
.single-method input[type=checkbox] + label::before {
  position: absolute;
  left: 0;
  top: 0;
  width: 16px;
  height: 16px;
  display: block;
  border: 2px solid #999999;
  content: "";
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.single-method input[type=checkbox] + label::after {
  position: absolute;
  left: 4px;
  top: 4px;
  display: block;
  content: "";
  opacity: 0;
  background-color: #333333;
  width: 8px;
  text-align: center;
  height: 8px;
  -webkit-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.single-method input[type=checkbox]:checked + label::before {
  border: 2px solid #333333;
}
.single-method input[type=checkbox]:checked + label::after {
  opacity: 1;
}
.single-method p {
  display: none;
  margin-top: 8px;
  font-size: 14px;
  color: #777777;
  line-height: 23px;
}

/*-- Place Order --*/
.place-order {
  margin-top: 40px;
  width: 140px;
  height: 36px;
  border: none;
  line-height: 24px;
  padding: 6px 20px;
  float: left;
  font-weight: 400;
  text-transform: uppercase;
  color: #ffffff;
  background-color: #333333;
}
.place-order:hover {
  background-color: #fff;
}

/*=====  End of 30. Checkout  ======*/
/*=============================================
=            31. 404 page            =
=============================================*/
.nothing-found-content {
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
.nothing-found-content h1 {
  font-size: 72px;
  line-height: 100px;
  color: #333;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .nothing-found-content h1 {
    font-size: 50px;
    line-height: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .nothing-found-content h1 {
    font-size: 50px;
    line-height: 80px;
  }
}
@media only screen and (max-width: 479px) {
  .nothing-found-content h1 {
    font-size: 35px;
    line-height: 60px;
  }
}
.nothing-found-content p {
  font-size: 14px;
  line-height: 24px;
  color: #696969;
  font-weight: 600;
  letter-spacing: 4px;
}
@media only screen and (max-width: 479px) {
  .nothing-found-content p {
    text-align: center;
  }
}
.nothing-found-content p a {
  letter-spacing: 1px;
  font-weight: 500;
  color: #333;
  text-transform: uppercase;
  border-bottom: 1px solid #333;
}
.nothing-found-content p a:hover {
  color: #d3122a;
}

/*=====  End of 31. 404 page  ======*/
/*=============================================
=            32. Coming soon            =
=============================================*/
.coming-soon-content {
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.coming-soon-subtitle {
  font-size: 24px;
  line-height: 36px;
  color: #7e7e7e;
}
@media only screen and (max-width: 479px) {
  .coming-soon-subtitle {
    font-size: 18px;
    line-height: 26px;
  }
}

.coming-soon-title {
  font-size: 72px;
  line-height: 86px;
  color: #333333;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .coming-soon-title {
    font-size: 62px;
    line-height: 76px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .coming-soon-title {
    font-size: 56px;
    line-height: 66px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .coming-soon-title {
    font-size: 58px;
    line-height: 66px;
  }
}
@media only screen and (max-width: 767px) {
  .coming-soon-title {
    font-size: 48px;
    line-height: 56px;
  }
}
@media only screen and (max-width: 575px) {
  .coming-soon-title {
    font-size: 42px;
    line-height: 56px;
  }
}
@media only screen and (max-width: 479px) {
  .coming-soon-title {
    font-size: 32px;
    line-height: 46px;
  }
}

.coming-soon-subscribe-form {
  position: relative;
  width: 80%;
}
@media only screen and (max-width: 575px) {
  .coming-soon-subscribe-form {
    width: 100%;
  }
}
.coming-soon-subscribe-form:hover input {
  border-bottom-color: #333;
}
.coming-soon-subscribe-form input {
  background: none;
  border: none;
  border-bottom: 2px solid #cccccc;
  padding: 10px 0;
  width: 100%;
  padding-right: 40px;
}
.coming-soon-subscribe-form input:focus {
  border-bottom-color: #333;
}
.coming-soon-subscribe-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.coming-soon-subscribe-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.coming-soon-subscribe-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.coming-soon-subscribe-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.coming-soon-subscribe-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.coming-soon-subscribe-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #777777;
}
.coming-soon-subscribe-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #777777;
}
.coming-soon-subscribe-form button {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background: none;
  border: none;
  color: #333;
  font-size: 14px;
  padding: 0;
}
.coming-soon-subscribe-form button:hover {
  color: #333;
}

@media only screen and (max-width: 479px) {
  .coming-soon-deal-countdown .single-countdown__time::after {
    left: 100%;
  }
}

/*=====  End of 33. Coming soon  ======*/
/*=============================================
=            33. FAQ            =
=============================================*/
.faq-title {
  font-size: 35px;
  line-height: 38px;
}
@media only screen and (max-width: 575px) {
  .faq-title {
    font-size: 25px;
    line-height: 32px;
  }
}

.single-faq .card {
  border: none;
}
.single-faq .card-header {
  background-color: transparent;
  border-bottom: none;
}
.single-faq .card-header h5 button {
  font-size: 24px;
  line-height: 30px;
  color: #333;
  padding-left: 0;
  overflow-wrap: break-word;
  white-space: normal;
  text-align: left;
  text-decoration: none;
}
.single-faq .card-header h5 button:hover, .single-faq .card-header h5 button:focus {
  text-decoration: none;
}
@media only screen and (max-width: 575px) {
  .single-faq .card-header h5 button {
    font-size: 18px;
    line-height: 26px;
  }
}
.single-faq .card-body p {
  font-size: 15px;
  line-height: 24px;
  color: #777;
}

/*=====  End of 33. FAQ  ======*/
/*=============================================
=            34. Call to action             =
=============================================*/
.cta-area {
  background-color: #6D7F96;
}

.cta-content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
@media only screen and (max-width: 767px) {
  .cta-content {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.cta-title h2 {
  font-size: 35px;
  line-height: 38px;
  color: #fff;
}
@media only screen and (max-width: 767px) {
  .cta-title h2 {
    text-align: center;
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 479px) {
  .cta-title h2 {
    font-size: 28px;
    line-height: 32px;
  }
}

.lezada-cta-button {
  background-color: #fff;
  color: #333 !important;
  border-color: #fff;
}
.lezada-cta-button:hover {
  background-color: #333;
  color: #fff !important;
  border-color: #333;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .background-cta-area--swimsuit-home {
    height: 700px !important;
  }
}
@media only screen and (max-width: 767px) {
  .background-cta-area--swimsuit-home {
    height: 600px !important;
  }
}
@media only screen and (max-width: 479px) {
  .background-cta-area--swimsuit-home {
    height: 400px !important;
  }
}

.background-cta-content__subtitle {
  font-size: 20px;
  font-weight: 600;
  font-style: italic;
  line-height: 1.2;
  color: #ffffff;
  font-family: "Spectral", serif;
  margin-bottom: 30px;
}
.background-cta-content__title {
  font-size: 50px;
  font-weight: 500;
  line-height: 1.5;
  color: #ffffff;
  font-family: "Spectral", serif;
  margin-bottom: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .background-cta-content__title {
    font-size: 40px;
    line-height: 1.3;
  }
}
@media only screen and (max-width: 479px) {
  .background-cta-content__title {
    font-size: 30px;
  }
}
.background-cta-content__btn {
  padding: 10px 50px;
  background-color: #ffffff;
  color: #333;
  font-weight: 500;
  letter-spacing: 1px;
}
.background-cta-content__btn:hover {
  background-color: #E65E46;
  color: #fff;
}

/*=====  End of 34. Call to action   ======*/
/*=============================================
=            35. contact us            =
=============================================*/
/*=====  End of 35. contact us  ======*/
/*=============================================
=            36. Icon box            =
=============================================*/
.icon-box-area--feature-icon {
  border-top: 1px solid #EEEEEE;
  border-bottom: 1px solid #EEEEEE;
}

/*----------  single icon box  ----------*/
.single-icon-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.single-icon-box--feature-icon {
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}
.single-icon-box--feature-icon .icon-box-icon {
  color: #cccccc;
  font-size: 30px;
}
.single-icon-box--feature-icon .icon-box-icon--green {
  color: #98d8ca;
}
.single-icon-box--feature-icon .icon-box-content .title {
  color: #222222;
  font-size: 16px;
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 1.5;
}
.single-icon-box--feature-icon .icon-box-content .content {
  color: #878787;
  font-size: 15px;
  line-height: 1.6;
  margin-top: 15px;
}
.single-icon-box--grey-center-iconbox {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
}
.single-icon-box--grey-center-iconbox .icon-box-icon {
  color: #cccccc;
  font-size: 56px;
  margin-bottom: 30px;
}
.single-icon-box--grey-center-iconbox .icon-box-content {
  padding-left: 0;
}
.single-icon-box--grey-center-iconbox .icon-box-content h3 {
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 1.5;
  color: #222222;
  font-size: 16px;
}
.single-icon-box--grey-center-iconbox .icon-box-content p {
  color: #878787;
  font-size: 15px;
  line-height: 1.6;
  margin-top: 15px;
}
.single-icon-box--color-center-iconbox {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  text-align: center;
  min-height: 300px;
  padding-top: 70px;
}
.single-icon-box--color-center-iconbox .icon-box-icon {
  color: #cccccc;
  font-size: 56px;
  margin-bottom: 30px;
}
.single-icon-box--color-center-iconbox .icon-box-content {
  padding-left: 0;
}
.single-icon-box--color-center-iconbox .icon-box-content h3 {
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 1.5;
  color: #222222;
  font-size: 16px;
}
.single-icon-box--color-center-iconbox .icon-box-content p {
  color: #878787;
  font-size: 15px;
  line-height: 1.6;
  margin-top: 15px;
}
.single-icon-box--color-center-iconbox--green {
  background-color: #EDF6EB;
}
.single-icon-box--color-center-iconbox--green .icon-box-icon {
  color: #A3D39C;
}
.single-icon-box--color-center-iconbox--yellow {
  background-color: #F8F5DE;
}
.single-icon-box--color-center-iconbox--yellow .icon-box-icon {
  color: #DDB759;
}
.single-icon-box--color-center-iconbox--blue {
  background-color: #ECF4FB;
}
.single-icon-box--color-center-iconbox--blue .icon-box-icon {
  color: #7EB7E6;
}

.icon-box-icon {
  font-size: 32px;
  color: #d8d8d8;
}

.icon-box-content {
  padding-left: 20px;
}
.icon-box-content .title {
  color: #333333;
  font-size: 14px;
  line-height: 21px;
  letter-spacing: 1px;
  font-weight: 500;
  margin-bottom: 10px;
}
.icon-box-content .content {
  font-size: 15px;
  line-height: 24px;
  color: #878787;
}
.icon-box-content .content span {
  display: block;
}

/*=====  End of 36. Icon box  ======*/
/*=============================================
=            37. Google map            =
=============================================*/
.google-map {
  height: 500px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .google-map {
    height: 400px;
  }
}
.google-map--style-2 {
  height: 700px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .google-map--style-2 {
    height: 600px;
  }
}
.google-map--style-3 {
  height: 400px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .google-map--style-3 {
    height: 300px;
  }
}

.group-map-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .group-map-container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media only screen and (max-width: 767px) {
  .group-map-container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.single-map {
  -ms-flex-preferred-size: 32%;
      flex-basis: 32%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-map {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (max-width: 767px) {
  .single-map {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}

/*=====  End of 37. Google map  ======*/
/*=============================================
=            38. Team            =
=============================================*/
.single-team-member:hover .member-image img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.single-team-member:hover .member-image:after {
  visibility: visible;
  opacity: 1;
}
.single-team-member:hover .member-image .social-list {
  visibility: visible;
  opacity: 1;
}
.single-team-member--style-square {
  position: relative;
}
.single-team-member--style-square .member-image {
  max-width: 100%;
  max-height: 100%;
  border-radius: 0;
}
.single-team-member--style-square .member-image img {
  border-radius: 0;
}
@media only screen and (max-width: 767px) {
  .single-team-member--style-square .member-image img {
    width: 100%;
  }
}
.single-team-member--style-square .member-image:after {
  border-radius: 0;
}
.single-team-member--style-square .member-image .social-list {
  bottom: 25px;
  top: auto;
  -webkit-transform: none;
          transform: none;
  left: 20px;
}
.single-team-member--style-square .member-caption {
  position: absolute;
  bottom: 50px;
  left: 0;
  width: 100%;
  text-align: left;
  padding: 20px 40px;
  opacity: 0;
  visibility: hidden;
  z-index: 1;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  color: #fff;
}
.single-team-member--style-square .member-caption .name {
  color: #fff;
  font-size: 34px;
  line-height: 36px;
  font-weight: 600;
  margin: 17px 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.5s;
  transition: 0.5s;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .single-team-member--style-square .member-caption .name {
    font-size: 25px;
    line-height: 28px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-team-member--style-square .member-caption .name {
    font-size: 18px;
    line-height: 22px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-team-member--style-square .member-caption .name {
    font-size: 18px;
    line-height: 22px;
  }
}
@media only screen and (max-width: 479px) {
  .single-team-member--style-square .member-caption .name {
    font-size: 22px;
    line-height: 25px;
  }
}
.single-team-member--style-square .member-caption .subtext {
  -webkit-transform: translateY(50%);
          transform: translateY(50%);
  -webkit-transition: 0.5s;
  transition: 0.5s;
  display: inline-block;
}
.single-team-member--style-square:hover .member-caption {
  visibility: visible;
  opacity: 1;
}
.single-team-member--style-square:hover .member-caption .name {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.single-team-member--style-square:hover .member-caption .subtext {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.member-image {
  position: relative;
  border-radius: 100%;
  max-width: 200px;
  max-height: 200px;
  margin: 0 auto;
  overflow: hidden;
}
.member-image img {
  border-radius: 100%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.member-image:after {
  position: absolute;
  display: block;
  content: "";
  top: 0;
  left: 0;
  border-radius: 100%;
  width: 100%;
  height: 100%;
  background: rgba(51, 51, 51, 0.7);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.social-inside {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}

.social-list {
  position: absolute;
  width: 100%;
  top: 50%;
  left: 50%;
  z-index: 1;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.social-list li {
  display: inline-block;
  margin: 0 15px;
  font-size: 20px;
  color: #fff;
}
.social-list li a i {
  font-size: 16px;
  display: inline-block;
  vertical-align: middle;
}
.social-list li a:hover {
  color: #d11830;
}

.member-caption .name {
  margin-bottom: 8px;
  font-size: 24px;
  line-height: 36px;
  font-weight: 600;
  margin: 10px 0;
}
.member-caption .subtext {
  overflow: hidden;
  letter-spacing: 0.03em;
  font-size: 16px;
  line-height: 16px;
  height: 28px;
  margin: 0;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

/*=====  End of 38. Team  ======*/
/*=============================================
=            39. Newsletter            =
=============================================*/
.border-top-bottom {
  border-top: 1px solid #EBEBEB;
  border-bottom: 1px solid #EBEBEB;
}

.mc-newsletter-content-container {
  background-color: #D11830;
}

.mc-newsletter-content {
  border: 1px solid #fff;
}
.mc-newsletter-content .icon i {
  color: #ffffff;
  font-size: 70px;
}
.mc-newsletter-content .title h3 {
  color: #ffffff;
  font-size: 40px;
  font-weight: 500;
  letter-spacing: 1px;
  line-height: 1.5;
}
@media only screen and (max-width: 479px) {
  .mc-newsletter-content .title h3 {
    font-size: 30px;
  }
}
.mc-newsletter-content .title p {
  line-height: 1.6;
  margin-top: 15px;
  color: #ffffff;
  font-size: 15px;
}
@media only screen and (max-width: 479px) {
  .mc-newsletter-content .title p {
    font-size: 13px;
  }
}
.mc-newsletter-content--big-icon {
  border: none;
}
.mc-newsletter-content--big-icon .icon i {
  color: rgba(34, 34, 34, 0.1);
  font-size: 150px;
}
.mc-newsletter-content--big-icon .title h3 {
  color: #222222;
  font-size: 40px;
}
.mc-newsletter-content--big-icon .title p {
  color: #999999;
  font-size: 15px;
}
.mc-newsletter-content--big-icon .mc-newsletter-form input {
  border-bottom-color: #cccccc;
  color: #333333;
}
.mc-newsletter-content--big-icon .mc-newsletter-form input:focus {
  border-bottom-color: #ccc;
}
.mc-newsletter-content--big-icon .mc-newsletter-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.mc-newsletter-content--big-icon .mc-newsletter-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.mc-newsletter-content--big-icon .mc-newsletter-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.mc-newsletter-content--big-icon .mc-newsletter-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.mc-newsletter-content--big-icon .mc-newsletter-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777;
  opacity: 1; /* Firefox */
}
.mc-newsletter-content--big-icon .mc-newsletter-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #777;
}
.mc-newsletter-content--big-icon .mc-newsletter-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #777;
}
.mc-newsletter-content--big-icon .mc-newsletter-form button {
  color: #333333;
}
.mc-newsletter-content--big-icon .mc-newsletter-form button:hover {
  color: #333;
}
.mc-newsletter-content--big-icon .link a {
  color: #333333;
}
.mc-newsletter-content--fullwidth {
  border: none;
}
.mc-newsletter-content--fullwidth .icon i {
  color: #ffffff;
  font-size: 35px;
}

/*----------  subscription form   ----------*/
.mc-newsletter-form {
  position: relative;
  max-width: 500px;
  width: 100%;
  margin: auto;
}
@media only screen and (max-width: 767px) {
  .mc-newsletter-form {
    max-width: 400px;
  }
}
@media only screen and (max-width: 575px) {
  .mc-newsletter-form {
    max-width: 350px;
  }
}
@media only screen and (max-width: 479px) {
  .mc-newsletter-form {
    max-width: 240px;
  }
}
.mc-newsletter-form input {
  background: none;
  border: none;
  border-bottom: 2px solid #fff;
  padding: 10px 0;
  width: 100%;
  padding-right: 40px;
  color: #fff;
}
.mc-newsletter-form input:focus {
  border-bottom-color: #fff;
}
.mc-newsletter-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fff;
}
.mc-newsletter-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #fff;
}
.mc-newsletter-form button {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background: none;
  border: none;
  color: #fff;
  font-size: 14px;
  line-height: 22px;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 0;
}
@media only screen and (max-width: 479px) {
  .mc-newsletter-form button {
    font-size: 12px;
  }
}
.mc-newsletter-form button:hover {
  color: #fff;
}
.mc-newsletter-form--popup {
  margin: 0;
}
.mc-newsletter-form--popup input {
  border-bottom: 2px solid #ccc;
  color: #333;
}
.mc-newsletter-form--popup input:focus {
  border-bottom-color: #ccc;
}
.mc-newsletter-form--popup ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #333;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form--popup ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #333;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form--popup :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #333;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form--popup ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #333;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form--popup ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #333;
  opacity: 0.5; /* Firefox */
}
.mc-newsletter-form--popup :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #ccc;
}
.mc-newsletter-form--popup ::-ms-input-placeholder { /* Microsoft Edge */
  color: #ccc;
}
.mc-newsletter-form--popup button {
  color: #333;
}
.mc-newsletter-form--popup button:hover {
  color: #333;
}

.link a {
  color: #fff;
  text-decoration: underline;
}

/*----------  newsletter popup style  ----------*/
.newsletter-overlay-inactive .newsletter-content {
  visibility: hidden;
  opacity: 0;
  -webkit-animation-name: "fadeOut";
          animation-name: "fadeOut";
}

.newsletter-content {
  max-width: 870px;
  width: 100%;
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-150%, -50%);
          transform: translate(-150%, -50%);
  z-index: 9999;
  padding: 50px 60px 70px 400px;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .newsletter-content {
    max-width: 900px;
    padding: 50px 60px 70px 400px;
  }
}
.newsletter-content.show-popup {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.newsletter-content.hide-popup {
  visibility: hidden;
  opacity: 0;
}
.newsletter-content h2 {
  font-size: 34px;
  line-height: 48px;
  font-weight: 300;
  color: #333333;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .newsletter-content h2 {
    font-size: 26px;
    line-height: 36px;
  }
}
.newsletter-content h2 span {
  font-weight: 600;
}
.newsletter-content p {
  font-size: 15px;
  line-height: 26px;
  letter-spacing: 1px;
}
.newsletter-content .close-icon {
  position: absolute;
  top: 20px;
  right: 20px;
}
.newsletter-content .close-icon a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
}
.newsletter-content .close-icon a:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.newsletter-content .close-icon a i {
  font-size: 25px;
  color: #333333;
}
.newsletter-content .mailchimp-alerts {
  position: absolute;
  bottom: 130px;
}

/*=====  End of 39. Newsletter  ======*/
/*=============================================
=            40. Footer             =
=============================================*/
.footer-container.footer-one {
  background-color: #f8f8f8;
  /* background-color: #A3D39C; */
  background-image: url('../images/backgrounds/testimonial-bg.png');
}
.footer-container.footer-one.dark-bg {
  background-color: #191717;
}
.footer-container.footer-one.dark-bg * {
  color: #ffffff !important;
}
.footer-container.footer-one.dark-bg .subscription-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.dark-bg .subscription-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.dark-bg .subscription-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.dark-bg .subscription-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.dark-bg .subscription-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.dark-bg .subscription-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fff;
}
.footer-container.footer-one.dark-bg .subscription-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #fff;
}
.footer-container.footer-one.dark-bg .subscription-form input:focus {
  border-bottom-color: #fff;
}
.footer-container.footer-one.blue-bg {
  background-color: #404969;
}
.footer-container.footer-one.blue-bg * {
  color: #ffffff !important;
}
.footer-container.footer-one.blue-bg .subscription-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.blue-bg .subscription-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.blue-bg .subscription-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.blue-bg .subscription-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.blue-bg .subscription-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #fff;
  opacity: 1; /* Firefox */
}
.footer-container.footer-one.blue-bg .subscription-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #fff;
}
.footer-container.footer-one.blue-bg .subscription-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #fff;
}
.footer-container.footer-one.blue-bg .subscription-form input:focus {
  border-bottom-color: #fff;
}
.footer-container.footer-one .col {
  -ms-flex-preferred-size: 17.5%;
      flex-basis: 17.5%;
  margin-bottom: 50px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-one .col:first-child {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-one .col:first-child {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-one .col:first-child {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-one .col:first-child {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-one .col:nth-child(2) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-one .col:nth-child(2) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-one .col:nth-child(2) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-one .col:nth-child(2) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-one .col:nth-child(3) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-one .col:nth-child(3) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-one .col:nth-child(3) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-one .col:nth-child(3) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-one .col:nth-child(4) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-one .col:nth-child(4) {
    -ms-flex-preferred-size: 33.33%;
        flex-basis: 33.33%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-one .col:nth-child(4) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-one .col:nth-child(4) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
.footer-container.footer-one .col:last-child {
  max-width: 30%;
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-one .col:last-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-one .col:last-child {
    max-width: 60%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-one .col:last-child {
    max-width: 100%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
    -webkit-box-flex: 0;
        -ms-flex-positive: 0;
            flex-grow: 0;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-one .col:last-child {
    max-width: 100%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
.footer-container.footer-two {
  background-color: #F8F8F8;
}
.footer-container.footer-two .col {
  margin-bottom: 50px;
  -ms-flex-preferred-size: 13.33%;
      flex-basis: 13.33%;
}
.footer-container.footer-two .col:first-child {
  max-width: 30%;
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-two .col:first-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-two .col:first-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-two .col:first-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-two .col:first-child {
    max-width: 100%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-two .col:nth-child(2) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-two .col:nth-child(2) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-two .col:nth-child(2) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-two .col:nth-child(2) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-two .col:nth-child(3) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-two .col:nth-child(3) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-two .col:nth-child(3) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-two .col:nth-child(3) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-two .col:nth-child(4) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-two .col:nth-child(4) {
    -ms-flex-preferred-size: 25%;
        flex-basis: 25%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-two .col:nth-child(4) {
    -ms-flex-preferred-size: 50%;
        flex-basis: 50%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-two .col:nth-child(4) {
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
.footer-container.footer-two .col:last-child {
  max-width: 30%;
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-container.footer-two .col:last-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-container.footer-two .col:last-child {
    max-width: 50%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (max-width: 767px) {
  .footer-container.footer-two .col:last-child {
    max-width: 100%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}
@media only screen and (max-width: 479px) {
  .footer-container.footer-two .col:last-child {
    max-width: 100%;
    -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
  }
}

/*----------  footer three and four  ----------*/
.footer {
  background-color: #f8f8f8;
}
.footer .footer__copyright-text {
  font-size: 14px;
}
.footer .footer__copyright-text span {
  font-weight: 700;
  color: #333;
}
.footer--four--creativehome {
  border-top: 1px solid #eeeeee;
}

/*----------  footer single widget  ----------*/
.footer-single-widget h5.widget-title {
  font-size: 14px;
  font-weight: 600;
  color: #333;
  margin-bottom: 30px;
}
.footer-single-widget .logo {
  margin-bottom: 35px;
}
.footer-single-widget .copyright-text p {
  font-size: 15px;
  line-height: 30px;
  color: #777777;
}
.footer-single-widget .copyright-text p span {
  display: block;
}
.footer-single-widget p.footer-email {
  color: #696969;
  margin-bottom: 30px;
}
.footer-single-widget p.footer-phone {
  font-size: 30px;
  line-height: 40px;
  font-weight: 500;
  color: #333;
  margin-bottom: 75px;
}

/*----------  footer navigation style  ----------*/
.footer-nav-container nav ul li {
  padding: 10px 0;
}
.footer-nav-container nav ul li a {
  font-size: 15px;
  line-height: 20px;
  color: #999999;
  position: relative;
}
.footer-nav-container nav ul li a:hover {
  color: #333;
}
.footer-nav-container nav ul li a:hover:after {
  visibility: visible;
  opacity: 1;
}
.footer-nav-container nav ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 1px;
  background-color: #d1d1d1;
  visibility: hidden;
  opacity: 0;
  content: "";
}
.footer-nav-container nav ul li:first-child {
  padding-top: 0;
}
.footer-nav-container nav ul li:last-child {
  padding-bottom: 0;
}
.footer-nav-container--change-color nav ul li a {
  color: #7e7e7e;
}
.footer-nav-container--horizontal nav ul li {
  display: inline-block;
  margin-right: 40px;
  padding-top: 0;
  line-height: 1;
  padding-bottom: 0;
}
.footer-nav-container--horizontal nav ul li a {
  color: #7e7e7e;
  font-size: 14px;
  line-height: 18px;
}
.footer-nav-container--horizontal nav ul li:last-child {
  margin-right: 0;
}

/*----------  footer social link style  ----------*/
.footer-social-links ul li {
  position: relative;
}
.footer-social-links ul li a {
  padding-left: 30px;
  display: inline-block;
}
.footer-social-links ul li a:hover {
  color: #333;
}
.footer-social-links ul li a:hover:after {
  visibility: hidden !important;
  opacity: 0 !important;
}
.footer-social-links ul li a i {
  position: absolute;
  left: 0;
  color: #333;
}
.footer-social-links--change-color ul li a i {
  color: #777777;
}

/*----------  footer social icons  ----------*/
.social-icons--footer ul li {
  display: inline-block;
  margin-right: 20px;
}
.social-icons--footer ul li a {
  color: #333;
}
.social-icons--footer ul li a i {
  font-size: 15px;
}
.social-icons--footer ul li a:hover {
  color: #333;
}
.social-icons--footer ul li:last-child {
  margin-right: 0;
}

/*----------  footer subscription widget  ----------*/
.footer-subscription-widget {
  /*----------  subscription form   ----------*/
}
.footer-subscription-widget .footer-subscription-title {
  font-size: 34px;
  line-height: 34px;
  color: #333;
  margin-bottom: 30px;
}
.footer-subscription-widget .subscription-subtitle {
  margin-bottom: 35px;
}
.footer-subscription-widget .subscription-form {
  position: relative;
}
.footer-subscription-widget .subscription-form input {
  background: none;
  border: none;
  border-bottom: 2px solid #cccccc;
  padding: 10px 0;
  width: 100%;
  padding-right: 40px;
}
.footer-subscription-widget .subscription-form input:focus {
  border-bottom-color: #333;
}
.footer-subscription-widget .subscription-form ::-webkit-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.footer-subscription-widget .subscription-form ::-moz-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.footer-subscription-widget .subscription-form :-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.footer-subscription-widget .subscription-form ::-ms-input-placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.footer-subscription-widget .subscription-form ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #777777;
  opacity: 1; /* Firefox */
}
.footer-subscription-widget .subscription-form :-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #777777;
}
.footer-subscription-widget .subscription-form ::-ms-input-placeholder { /* Microsoft Edge */
  color: #777777;
}
.footer-subscription-widget .subscription-form button {
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background: none;
  border: none;
  color: #cccccc;
  font-size: 35px;
  padding: 0;
}
.footer-subscription-widget .subscription-form button:hover {
  color: #333;
}
.footer-subscription-widget .mailchimp-alerts {
  position: absolute;
  bottom: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1499px) {
  .footer-subscription-widget .mailchimp-alerts {
    bottom: -90px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-subscription-widget .mailchimp-alerts {
    bottom: -50px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-subscription-widget .mailchimp-alerts {
    bottom: -70px;
  }
}
@media only screen and (max-width: 767px) {
  .footer-subscription-widget .mailchimp-alerts {
    bottom: -80px;
  }
}
@media only screen and (max-width: 479px) {
  .footer-subscription-widget .mailchimp-alerts {
    bottom: -95px;
  }
}
.footer-subscription-widget--change-subscription-style .footer-subscription-title {
  font-size: 40px;
  line-height: 50px;
  font-weight: 300;
}
.footer-subscription-widget--change-subscription-style .subscription-form button {
  color: #333;
  font-size: 14px;
  line-height: 22px;
  font-weight: 500;
}

/*----------  footer top  ----------*/
.footer-top--green-bg {
  background: #98d8ca;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (max-width: 767px) {
  .footer-top--green-bg {
    padding-top: 30px;
    padding-bottom: 30px;
  }
}

.footer-top-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-top-container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}
@media only screen and (max-width: 767px) {
  .footer-top-container {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
}

.footer-top-single-widget {
  text-align: center;
  border-right: 1px solid #E7E7E7;
  -ms-flex-preferred-size: 33.33%;
      flex-basis: 33.33%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-top-single-widget {
    border-right: none;
  }
}
@media only screen and (max-width: 767px) {
  .footer-top-single-widget {
    border-right: none;
  }
}
.footer-top-single-widget .footer-top-widget-title {
  font-size: 16px;
  line-height: 26px;
  color: #333;
  font-weight: 600;
  margin-bottom: 15px;
  margin-top: 25px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-top-single-widget .footer-top-widget-title {
    margin-top: 0;
  }
}
@media only screen and (max-width: 767px) {
  .footer-top-single-widget .footer-top-widget-title {
    margin-top: 0;
  }
}
.footer-top-single-widget .content {
  margin-bottom: 35px;
}
.footer-top-single-widget .content p {
  margin-bottom: 0;
}
.footer-top-single-widget:last-child {
  border-right: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-top-single-widget:last-child .content {
    margin-bottom: 0;
  }
}
@media only screen and (max-width: 767px) {
  .footer-top-single-widget:last-child .content {
    margin-bottom: 0;
  }
}

/*=====  End of 40. Footer   ======*/
/*=============================================
=            41. compare           =
=============================================*/
.compare-table .table tbody tr th.first-column {
  min-width: 292px;
  font-size: 15px;
  color: #262626;
  margin: 0;
  font-weight: 500;
  padding: 10px 30px;
  border: none;
  background-color: #e9e9e9;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .compare-table .table tbody tr th.first-column {
    min-width: 200px;
  }
}
@media only screen and (max-width: 767px) {
  .compare-table .table tbody tr th.first-column {
    min-width: 150px;
    padding: 10px 20px;
  }
}
.compare-table .table tbody tr:first-child th {
  padding-top: 53px;
}
.compare-table .table tbody tr:last-child th {
  padding-bottom: 55px;
}
.compare-table .table tbody tr td {
  text-align: center;
  padding: 17px 15px;
  vertical-align: middle;
  border-color: #e7e7e7;
}
.compare-table .table tbody tr td.product-image-title {
  min-width: 293px;
  vertical-align: bottom;
  padding: 27px 10px 35px;
}
@media only screen and (max-width: 767px) {
  .compare-table .table tbody tr td.product-image-title {
    min-width: 220px;
  }
}
.compare-table .table tbody tr td.product-image-title .compare-remove a {
  font-size: 16px;
}
.compare-table .table tbody tr td.product-image-title .compare-remove a i {
  padding-right: 5px;
}
.compare-table .table tbody tr td.product-image-title .compare-remove a:hover {
  color: #d3122a;
}
.compare-table .table tbody tr td.product-image-title .image {
  clear: both;
  width: 100%;
  margin: 14px 0 7px;
  display: block;
}
.compare-table .table tbody tr td.product-image-title .image img {
  width: auto;
}
.compare-table .table tbody tr td.product-image-title .category {
  float: left;
  clear: both;
  color: #333;
  text-transform: capitalize;
  letter-spacing: 0.5px;
}
.compare-table .table tbody tr td.product-image-title .pro-title {
  display: block;
  overflow: hidden;
}
.compare-table .table tbody tr td.product-image-title .pro-title > a {
  float: left;
  clear: both;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  margin-top: 5px;
  display: block;
  width: 100%;
}
.compare-table .table tbody tr td.product-image-title .pro-title > a:hover {
  color: #d3122a;
}
.compare-table .table tbody tr td.product-image-title .compare-btn {
  margin: 14px 0 0;
}
.compare-table .table tbody tr td.product-image-title .compare-btn a {
  background-color: #343538;
  padding: 10px 20px;
  color: #fff;
  display: inline-block;
}
.compare-table .table tbody tr td.product-image-title .compare-btn a:hover {
  background-color: #d3122a;
}
.compare-table .table tbody tr td.pro-desc p {
  margin: 0;
  font-size: 14px;
  line-height: 1.88;
}
.compare-table .table tbody tr td.pro-price {
  font-size: 15px;
  font-weight: 400;
  color: #343538;
}
.compare-table .table tbody tr td.pro-sku, .compare-table .table tbody tr td.pro-stock, .compare-table .table tbody tr td.pro-weight {
  font-size: 15px;
  font-weight: 400;
}
.compare-table .table tbody tr td.pro-dimensions {
  font-size: 15px;
  font-weight: 400;
}