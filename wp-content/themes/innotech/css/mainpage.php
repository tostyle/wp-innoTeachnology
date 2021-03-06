<?php
    header("Content-type: text/css; charset: UTF-8");
?>
@font-face {
    font-family: engFont;
    src: url(../fonts/source_san/SourceSansPro-Regular.otf);
}
@font-face {
    font-family: engFontBold;
    src: url(../fonts/source_san/SourceSansPro-Bold.otf);
}
@font-face {
    font-family: thaiFont;
    src: url(../fonts/RSU_Regular.ttf);
}


html {
    width: 100%;
    height: 100%;
 /*   font-size: 62.5%;*/
}

body {
    font-family: thaiFont;
	font-size: 1.6em;
    width: 100%;
    height: 100%;
}
.aboutUs ,.award,.career,.statInfomation
{
	font-family: thaiFont;
}
.thai-font,
{
	font-family: thaiFont;
}
.eng-font
{
	font-family: thaiFont;
}
h2
{
	font-family: thaiFont;
	font-weight: bold;
	color: #194570;
}
p
{
	margin-bottom: 1px;
}
.clear
{
	clear: both;
}
.clear:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
	}
.text-bold
{
	font-weight: bold;
}
.modal-backdrop {
  /*  background-color: black;
     opacity:0.9 !important;*/
   
}
.modal-backdrop.in {
  opacity:0.8;
}
.link-active
{
	color: #194570;
	font-weight:bold
}
.social-nav >li>a.language-link
{
	padding-left: 2px;
	padding-right: 2px;
}
.navbar{
  
    width: 1280px;
    height: 131px;
    margin: 0 auto;
    background-color: white;
}
.nav-container
{
	padding-left: 30px;

}
.navbar-nav
{
	font-size: 20px;
}
.navbar-header
{
	padding-top: 10px;
}
.navbar-collapse > div 
{
	float: right;
}
.navbar-default .navbar-nav>li>a {
  color: #080808;
}
.navbar-default .navbar-nav>li>a:hover {
  color: #194570;
  font-weight: bold;
}
.social-nav >li>a
{
	padding-left: 5px;
	padding-right: 5px;
}
.content
{
	width:1280px;
	margin: 0 auto;
}
/*=============================================================
	-----------------------------------HOME page --------------
================================================================
*/
.homeSlider
{
	margin-top: 131px;
}
.homeLogo
{
/*	margin: 0 auto;*/
	display: table;
	width: 100%;
	height: 292px;
}
.home-icon-div
{
	display: table-cell;
	/*width: 62%;*/
	/*margin: 0 auto;*/
	text-align: center;
vertical-align: middle;
	/*padding-top: 50px;*/
}
.home-icon
{
	display: inline-block;
	/*float: left;*/
	text-align: center;
	margin-right: 150px;
	width: 159px;
}
.home-icon.last
{
	margin-right: 0px;
}

.home-icon > h3
{
	font-weight: bold;
	color: #194570;

}
.home-icon:hover > h3
{
	color: #DF7425 ;
}

.logo-pic 
{
	width: 159px;
	height: 159px;
}
.pic-money
{
	 background-image: url("../photo/icon-saving-money.png");
}
.pic-money:hover 
{
	 background-image: url("../photo/icon-saving-money-over.png");
}

.pic-power
{
	 background-image: url("../photo/icon-saving-power.png");
}
.pic-power:hover
{
	 background-image: url("../photo/icon-saving-power-over.png");
}
.pic-awards
{
	 background-image: url("../photo/icon-saving-awards.png");
}
.pic-awards:hover
{
	 background-image: url("../photo/icon-saving-awards-over.png");
}
/*===============================================================================================
stat information
=================================================================================================
*/
.statInfomation
{
	 background-image: url("../photo/statistics-information/pic-bg-statistics-information.jpg");
	 min-height: 570px;
	  
}
.statInfomation > div
{
	float: left;

}
.inno
{
	width: 840px;
	padding-top: 44px;
	padding-left: 44px;
}
.map
{
	width: 440px;
	background-position:10px 22px;
	 background-image: url("../photo/statistics-information/pic-thailand-map.png");
	 background-repeat: no-repeat;
	  min-height: 570px;
}
.full-pic
{
	width:1280px !important;
}
.stat-pic
{
	margin-top: 44px;
}
.stat-pic > div,.stat-pic > img
{
	float: left;

}
.stat-pic > div
{
	margin-right: 49px;
}
.stat-pic > img
{
	margin-right: 5px;
}
.inno-detail
{
	width: 100%;
	min-height: 150px;
	background-color:rgba(231,239,242,0.9);
	margin-top: 240px;
	margin-left: -44px;
	/*opacity: 0.5;*/
	padding-right: 54px;
	padding-top: 13px;
}
.inno-detail h2
{

	margin-top: 0px;
	margin-bottom: 5px;
}
.inno-detail-text
{
	float:right;
}
.inno-detail-text > p
{
	/*font-size: 1.8em;*/
	/*font-size: 18px;*/
}
/*=======================================================================================================================
service
========================================================================================================================
*/
.our-service-head
{
	height: 114px;
	text-align: center;
	vertical-align: middle;
display: inline-block;
}
.our-service-head > h2
{
	/*display: inline-block;
	vertical-align: middle;*/
	 line-height:114px;
    vertical-align:middle;
	text-align: center;
	margin-bottom: 0px;
	margin-top: 0px;
	color: white;
}
.our-service
{
	display: inline-block;
/*	text-align: center;
	width: 1190px;
	margin:0 auto;*/
}
.service
{
	height: 721px;
	background-color: #194570;
	text-align: center;
}
.service-header
{
	height: 91px;
	color: #194570;
	font-weight: bold;
}
.service-pic
{
	float: left;
	/*margin-top: 10px;*/
}
#service-pic-1
{
	 background-image: url("../photo/our-service/pic-service-01-on.png");
}
#service-pic-1:hover
{
	 background-image: url("../photo/our-service/pic-service-01-over.png");
}
#service-pic-2
{
	 background-image: url("../photo/our-service/pic-service-02-on.png");
}
#service-pic-2:hover
{
	 background-image: url("../photo/our-service/pic-service-02-over.png");
}
#service-pic-3
{
	 background-image: url("../photo/our-service/pic-service-03-on.png");
}
#service-pic-3:hover
{
	 background-image: url("../photo/our-service/pic-service-03-over.png");
}
#service-pic-4
{
	 background-image: url("../photo/our-service/pic-service-04-on.png");
}
#service-pic-4:hover
{
	 background-image: url("../photo/our-service/pic-service-04-over.png");
}
.service-picture
{	
	width: 268px;
	height: 554px;
	float: left;
	/*margin-top: 10px;*/
	margin-right: 28px;
}
.service-picture:hover
{
	cursor: pointer;
}
.service-picture.last
{
	margin-right:0px;
}
.service-read-more
{
	margin-top: 30px;
}
/*==================================================================================================================== 
about us
======================================================================================================================
*/
.aboutUs
{
	background-color: #194570;
	 background-image: url("../photo/about-us/pic-about-us.jpg");

}
.aboutUs > div
{
	/*display: inline-block;
	  vertical-align: top;*/

}
.aboutUs-detail
{

	margin-left: 590px;
	padding-top: 41px;
	padding-left: 52px;
}
.aboutUs-detail > div 
{
	margin-top: 15px;
}
.aboutUs-detail > h2
{
	font-weight: bold;
	color: #194570;
	  margin-top: 0px;
  margin-bottom: 18px;
}
.aboutUs-detail  p
{
	font-size: 20px;
	color: #194570;
}
.about-us-subject
{
	margin-top: 24px;
}
.about-us-subject-detail
{

	margin-left: 20px;
	display: inline-block;
	  vertical-align: top;
}
.about-us-subject-detail p 
{
	font-size: 20px;
	color: #194570;
	margin-bottom: 1px;

}
.about-us-subject-detail h3
{
	margin-top: 3px;
	font-weight: bold;
	color: #194570;
}
.about-us-read-more
{
	margin-right: 80px;
	float: right;

}
.about-us-read-more h3
{
	font-weight: bold;
	color: #194570;
}
/*======================================================================================================================
contact us
========================================================================================================================
*/
.contactUs
{
	text-align: center;
}
.contactUs h2
{
	line-height: 91px;
	margin-top: 0px;
	margin-bottom: 0px;
}

.contactUs div
{
	display: inline-block;

}
.inno-footer
{
	background-color: #413D3D;
	color: white;
	min-height: 215px;
	margin-top:30px;
	padding: 20px;
}
.inno-footer h3
{
	font-weight: bold;
	margin-top: 0px;
	margin-right: 174px;
}
.inno-footer div
{
	float: left;
}
.footer-detail div
{
	float: left;
	margin-right: 100px;
}
.footer-detail > p > span
{
	float: left;
	width: 50px;
}
/*========================================================================================================================
award
=========================================================================================================================
*/
.award
{
	background-color: #F1F1F1;
	text-align: center;
	color:  #194570;
}
.award >div
{
	display: inline-block;
}
.award-list
{
	display: inline-block;
}
.award > div > h2
{
	margin-top: 58px;
	font-weight: bold;
	margin-bottom: 1px;
}
.award-logo
{
	margin-right: 84px;
}
.award-detail
{
	float: left;
	
}
.award-text
{
	padding-top: 40px;
	color: #194570;
	font-size: 24px;
}
.award-text h4
{
	margin-top:0px;
}
.award-text-detail
{
	font-size: 22px;
}
.award-pic
{
	height: auto;
	width: 100%;
}
.award-pic img
{
	padding-top: 9px;
	/*display: inline-block;*/
	float: left;
}
.award-read-more
{
	padding-top: 10px;
	margin-bottom: 10px;
	  margin-right: 150px;
}
.award-read-more a
{
	color: #194570;
}
/*=================================================================================================================================
career
==================================================================================================================================
*/
.career
{
	background-color:  #194570;
}
.career-detail
{
	width: 569px;
	padding-top: 2%;
	padding-left: 4%;
	color: white;
}
.career div
{
	/*float: left;*/
	display: inline-block;
	vertical-align: top;
	word-spacing: -1;
}
.career-pic
{
	width: 50%;
}
.career h2
{
	color: white;
	margin-top: 0px;
}
.career p 
{
	font-size: 2rem;
	margin-bottom:1px; 
}
@media only screen and (max-width: 1080px) {

   body { font-size: 1.4rem; }

}


.career-link,.career-link:active,.career-link:visited,.career-link:link
{
	color: white;
	text-decoration: none;
}
.career-link:hover
{
	color : #FBED21;
}
p.open-position
{
	margin-top: 4%;
	margin-bottom: 15px;
}
/*
===============================================================================================
modal
================================================================================================
*/
div.modal-career
{
	background-color: #154472;
	color: white;
	font-size: 18px;
}
div.modal-career .close
{
	color: white;
	opacity: 1;
}
div.modal-service-width
{
	width: 1180px;
}
a.carousel-control.modal-slider-control
{
	background-image: none;
}
.modal-firstpage
{
	width: 1180px;
}
#service-detail-picture
{
	width: 100%;
	height:708px;
	margin: 0 auto;
	background-repeat: no-repeat;
}
.firstpage-picture
{
	border-radius: 5px;
	margin : 0 auto;
	position: relative;
	width: 1180px;
	height: 708px;
	    background-image: url(../photo/index/pic-index-news.jpg);
  
    background-repeat: no-repeat, no-repeat;
}
.map-download a
{
	color: #DF7425 ;
}
#facebook-popup-link
{
	display: block;
	  position: absolute;
  bottom: 50px;
  margin: 0 auto;
  width: 236px;
   left: 0;
  right: 0;
 /* left: 480px;*/
}
a.boxclose{
    float:right;
    margin-top:-5px;
    margin-right:-5px;
    cursor:pointer;
    color: #fff;
    border: 1px solid #AEAEAE;
    border-radius: 30px;
    background: #000000;
    font-size: 31px;
    font-weight: bold;
    display: inline-block;
    line-height: 0px;
    padding: 11px 3px;      
    text-decoration: none; 
}
a.boxclose.box-award
{
	position: absolute;
	top:-5px;
	left:880px;
	z-index: 6000000000000;
}
a.boxclose:hover
{
	text-decoration: none; 
}

.boxclose:before {
    content: "×";

}
.modal-award
{
	border-radius: 6px;
}
