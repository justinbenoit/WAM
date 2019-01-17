// JavaScript Document

$(document).ready(function()
{
	"use strict";
	//var filename = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);
	//var pagename = filename.substring(0, filename.indexOf("."));
	//var $thispage = $("#nav"+pagename);
	//var slideTime = 250;

	var $menuopen = $('#menu-open');
	var $menuclose = $('#menu-close');
	var $mainNav = $("#main-nav");
	var $mainNavClose = $("#main-nav-close");
	
	

	$menuopen.click(function(){
		openNav();
	});
	
	$menuclose.click(function(){
		closeNav();
	});
	
	$( window ).scroll(function() {
		closeNav();
	});
	
	function openNav(){
		$menuclose.css("display","block");
        $menuopen.css("display", "none");
		$mainNav.css("display", "block");
		$mainNavClose.css("display", "block");
		//$mainnav.slideDown(slideTime);
	}
	
	function closeNav(){
		$menuclose.css("display","none");
        $menuopen.css("display", "block");
		$mainNav.css("display", "none");
		$mainNavClose.css("display", "none");
		//$mainnav.slideUp(slideTime);
	}
	
	
	
});