/**
* Author: Connor, 102061410
* Target: register.html
* Purpose: This file is for ...
* Created: 20/9/18
* Last updated: 20/9/18
* Credits: (Any guidane/help/code? Credit it her.)
*/

"use strict";


function getCondition(){
	var conditionName = "unknown";
	var conditionArray = document.getElementById("myid").getElementsByTagName("input");

	for (var i=0; i<conditionArray.length; i++){
	if (conditionArray[i].checked)
		conditionName = conditionArray[i].value;
	}
	return conditionName;
}


function checkCarAge(carage){
	var errMsg = "";
	var condition = getCondition();
	switch (condition){
		case "Poor":
			if (carage > 10){
				errMsg = "We dont have poor cars over 10 years old.\n";
			}
			break;
		case "Used":
			if (carage > 5){
				errMsg = "We dont have used cars over 5 years old.\n";
			}
			break;
		case "New":
			if (carage > 0){
				errMsg = "We dont have new cars over 0 years old, they are unused.\n";
			}
			break;
		default:
			errMsg = "You need to select a car type.\n";
	}

	return errMsg;
}


function ValidatePostCode(state, postcode){
	var tempresult = false;

	if ((state == "nsw") && ((postcode.charAt(0) == '1')||(postcode.charAt(0) == '2'))){
		tempresult = true;
	}
	if ((state == "vic") && ((postcode.charAt(0) == '3')||(postcode.charAt(0) == '8'))){
		tempresult = true;
	}
	if ((state == "qld") && ((postcode.charAt(0) == '4')||(postcode.charAt(0) == '9'))){
		tempresult = true;
	}
	if ((state == "wa") && (postcode.charAt(0) == '6')){
		tempresult = true;
	}
	if ((state == "taz") && (postcode.charAt(0) == '7')){
		tempresult = true;
	}
	if ((state == "sa") && (postcode.charAt(0) == '5')){
		tempresult = true;
	}
	if ((state == "nt") && ((postcode.charAt(0) == '0')||(postcode.charAt(0) == '8'))){
		tempresult = true;
	}

	return tempresult;
}


function validate(){
	var errMsg = "";
	var result = true;
	var givenname = document.getElementById("givenname").value;
	var familyname = document.getElementById("familyname").value;
	var carage = document.getElementById("carage").value;
	var state = document.getElementById("state").value;
	var postcode = document.getElementById("postcode").value;
	var street = document.getElementById("street").value;
	var suburb = document.getElementById("suburb").value;
	var paint = document.getElementById("paint").checked;
	var spoiler = document.getElementById("spoiler").checked;
	var roofRacks = document.getElementById("roofRacks").checked;
	var tintedWindows = document.getElementById("tintedWindows").checked;
	

	// if (!givenname.match(/^[a-zA-Z- ]+$/)) {
	// 	errMsg = errMsg + "Your first name must only contain alpha characters\n";
	// 	result = false;
	// }

	// if (!familyname.match(/^[a-zA-Z-]+$/)) {
	// 	errMsg = errMsg + "Your last name must only contain alpha characters or a hyphen\n";
	// 	result = false;
	// }

	// if (!street.match(/^[a-zA-Z-]+$/)) {
	// 	errMsg = errMsg + "Your street name must be alpha characters only\n";
	// 	result = false;
	// }

	// if (!suburb.match(/^[a-zA-Z-]+$/)) {
	// 	errMsg = errMsg + "Your suburb name must be alpha characters only\n";
	// 	result = false;
	// }

	// if (!state.match(/^[a-zA-Z]+$/)) {
	// 	errMsg += "You must enter a valid state\n";
	// 	result = false;
	// }

	// if (!isFinite(postcode)){
	// 	errMsg = errMsg + "You must enter a valid postcode\n";
	// 	result = false;
	// }
	// else {
	// 	var temppost = ValidatePostCode(state, postcode);
	// 	if (temppost == false){
	// 		errMsg += "Please enter a valid postcode\n";
	// 		result = false;
	// 	}
	// }

	// if (!isFinite(carage)){
	// 	errMsg = errMsg + "You must enter a valid car age\n";
	// 	result = false;
	// }
	// else {
	// 	var tempMsg = checkCarAge(carage);
	// 	if (tempMsg != ""){
	// 		errMsg = errMsg + tempMsg;
	// 		result = false;
	// 	}
	// }

	// if(!(paint||spoiler||roofRacks||tintedWindows)){
	// 	errMsg += "Please select at least one addon\n"
	// 	result = false;
	// }

	if (result){
		storeBooking(givenname, familyname, postcode, state, paint, spoiler, roofRacks, tintedWindows);
	}


	if (errMsg != "") {
		alert(errMsg);
	}

	return result;
	storeBooking();
}


function storeBooking (givenname, familyname, postcode, state, paint, spoiler, roofRacks, tintedWindows){
	var condition = getCondition();
	var addon = "";
	if(paint) addon = "Paint";
	if(spoiler) addon += "Spoiler";
	if(roofRacks) addon += "Roof Racks";
	if(tintedWindows) addon += "Tinted Windows";
	
	sessionStorage.addon = addon;
	sessionStorage.givenname = givenname;
	sessionStorage.familyname = familyname;
	sessionStorage.postcode = postcode;
	sessionStorage.state = state;
	sessionStorage.condition = condition;


	// alert("Trip stored: " + sessionStorage.trip)
}


function prefill_form(){
	if(sessionStorage.givenname != undefined){
		document.getElementById("firstname").value = sessionStorage.givenname;
	}
	if(sessionStorage.familyname != undefined){
		document.getElementById("lastname").value = sessionStorage.familyname;	
	}
	if(sessionStorage.postcode != undefined){
		document.getElementById("age").value = sessionStorage.postcode;	
	}
	if(sessionStorage.addon != undefined){
		document.getElementById("trip").value = sessionStorage.addon;		
	}
	if(sessionStorage.cost != undefined){
		document.getElementById("cost").value = sessionStorage.cost;			
	}		
	if(sessionStorage.condition != undefined){
		switch(localStorage.species){
				case "Poor":
					document.getElementById("poor").checked = true;
					break;
				case "Used":
					document.getElementById("used").checked = true;
					break;	
				case "New":
					document.getElementById("new").checked = true;
					break;	
		}
	}
	if(sessionStorage.state != undefined){
		switch(localStorage.state){
			case "VIC":
				document.getElementById("VIC").checked = true;
				break;
			case "TAS":
				document.getElemnetById("TAS").check = true;
				break;
			case "NSW":
				document.getElementById("NSW").checked = true;
				break;
			case "QLD":
				document.getElemnetById("QLD").check = true;
				break;
			case "WA":
				document.getElementById("WA").checked = true;
				break;
			case "SA":
				document.getElemnetById("SA").check = true;
				break;
			case "NT":
				document.getElementById("NT").checked = true;
				break;
		}
	}
}
	

function init () {

	var regForm = document.getElementById("regform");
	regForm.onsubmit = validate;
	window.onload = prefill_form();
 }

window.onload = init;