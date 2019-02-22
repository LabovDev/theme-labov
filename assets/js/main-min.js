var header_height=60;$(document).ready(function(){
// deleay rotating homepage text appear
setTimeout(function(){$("#home-hero .inner").animate({opacity:"1"})},1e3),
// Hamburger menu animations
$("button.hamburger").on("click",function(){$(this).toggleClass("is-active"),currentPosition=$("#nav-wrap nav").css("right"),duration=250,destPosition="-100%","0px"!=currentPosition&&(destPosition="0px"),$("#nav-wrap nav").stop().animate({right:destPosition},duration)}),
// Footer input border animations
$('footer input[type="text"], footer textarea').on("focus",function(){$(this).parent().addClass("focus")}),$('footer input[type="text"], footer textarea').on("blur",function(){$(this).parent().removeClass("focus")}),
// Homepage scroll arrow
$(".about-scroll").on("click",function(){
//alert('test');
$("html, body").animate({scrollTop:$(".twelve-hours").offset().top-header_height},1e3)}),
// Capabilities scroll arrow
$(".capabilities-scroll").on("click",function(){
//alert('test');
$("html, body").animate({scrollTop:$("#capabilities").offset().top-header_height},1e3)}),
// Verticals arrow scroll
$("#vertical .arrow").on("click",function(){
//alert('test');
$("html, body").animate({scrollTop:$(".we-are").offset().top-header_height},1e3)}),
// Talk with us arrow scrolls
$(".talk-with-us").on("click",function(){
//alert('test');
$("html, body").animate({scrollTop:$("#contact-form").offset().top-header_height},1e3)}),
// Case Study arrow scroll
$(".page-header.case-study").on("click",function(){
//alert('test');
$("html, body").animate({scrollTop:$("#case-study").offset().top-header_height},1e3)}),
// Rotate Words on Homepage
$(".words").rotateWords({fadeSpeed:500,pauseSpeed:6e3}),
// Generic, reusable lightbox close event
$(".lightbox-close").on("click",function(){$.colorbox.close()}),
// Team Member lightbox
$(".person-lightbox").colorbox({width:"90%",height:"90%",closeButton:!1,onOpen:function(){$("#team-member").css("opacity",0)},onComplete:function(){$.colorbox.resize(),$("#team-member").css("opacity",1)}}),
// About Video lightbox
$(".about-video-btn").colorbox({inline:!0,width:"90%",height:"90%",closeButton:!1}),
// Preload home vertical background images
$("#home-hero .bg-image").each(function(){var o=$(this).css("background-image");"none"!=o&&(o=o.replace("url(","").replace(")","").replace(/\"/gi,""),img=new Image,img.src=o,console.log("Preloading Image: "+o))}),
// Home verticals hovers
$(".home-verticals li a").hover(function(){var o=$(this).attr("data-image");$("#home-hero .bg-image:not(."+o+")").animate({opacity:0}),$("#home-hero ."+o).animate({opacity:1})},function(){}),window.sr=ScrollReveal(),sr.reveal(".logos .row"),$(window).on("scroll",function(){300<$(window).scrollTop()?($(".blue-bar").addClass("scrolled"),$("#logo").addClass("scrolled"),$("#menu-toggle").addClass("scrolled")):($(".blue-bar").removeClass("scrolled"),$("#logo").removeClass("scrolled"),$("#menu-toggle").removeClass("scrolled"))}),
// Case Study Gallery lightbox
$(".the-gallery a").colorbox({rel:"gallery-img"})});