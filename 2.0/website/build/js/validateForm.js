// JavaScript Document
$(document).ready(function()
{
	"use strict";
	
	//alert("validation");
	
	var $requiredFields = $(".form-required");
	var $submitButton = $('#contact-submit');
	var $buttonOn = false;
	var $nameValid = false;
	var $emailEntered = false;
	var $emailValid = false;
	var $reasonValid = false;
	var $messageValid = false;
	var $valid = false;
	
	/*$requiredFields.focus(function(){
		validateForm();
	});*/
	
	$requiredFields.focusin(function(){
		validateButton();
	});
	
	$requiredFields.focusout(function(){
		validateButton();
	});
	
	$requiredFields.change(function(){
		validateButton();
	});
	
	$requiredFields.keyup(function(){
		validateButton();
	});
	
	function validateEmail(sEmail) {
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		
    	if (filter.test(sEmail)) {
			return true;
		}else {
			return false;
		}
	}
	
	function validateButton(){
		//alert("validate");
		//console.log("name length "+$("#contact-name").val().length);
		if($("#contact-name").val().length > 1){
			$nameValid = true;
		}else{
			$nameValid = false;
		}
		
		if($("#contact-message").val().length > 4){
			$messageValid = true;
		}else{
			$messageValid = false;
		}
		
		if($("#contact-email").val().length > 0){
			$emailEntered = true;
		}else{
			$emailEntered = false;
		}
		
		//$emailValid = validateEmail( $("#contact-email").val() );
		
		if($nameValid&&$emailValid&&$reasonValid&&$messageValid){
			$valid = true;
		}else{
			$valid = false;
		}
		
		if($nameValid && $messageValid && $emailEntered){
			$buttonOn = true;
		}else{
			$buttonOn = false;
		}
		
		
		if($buttonOn){
			$submitButton.css("opacity", "1");
			$submitButton.attr("disabled", false);
		}else{
			$submitButton.css("opacity", "0.4");
			$submitButton.attr("disabled", "true");
		}
		
		//$('#contact-reason').selectmenu('refresh', true);
		
		$submitButton.click(function(){
			validateForm();
		});
	}	
	
	$("form").submit(function(event) {
		$emailValid = validateEmail( $("#contact-email").val() );
		$reasonValid = $( "#contact-reason").val()!=="0";
		if (!$nameValid || ! $emailValid || !$reasonValid || !$messageValid) { 
		  event.preventDefault();
		}
	});
	
	function validateForm(){
		console.log($emailValid, $reasonValid);
		
		if($( "#contact-reason").val()==="0"){
			$reasonValid = false;
			$("#validation-reason").css("display", "block");
		}else{
			$reasonValid = true;
			$("#validation-reason").css("display", "none");
		}
		
		$emailValid = validateEmail( $("#contact-email").val() );

		if($emailValid===false){
			$("#validation-email").css("display", "block");
		}else{
			$("#validation-email").css("display", "none");
			//now 
		}

		if($nameValid&&$emailValid&&$reasonValid&&$messageValid){
			$("form").submit();
			return(true);
		}else{
			return(false);
		}
	}
	
});