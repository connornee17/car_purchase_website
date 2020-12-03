/**
* Author: Connor, 102061410
* Target: register.html
* Purpose: This file is for ...
* Created: 20/9/18
* Last updated: 20/9/18
* Credits: (Any guidane/help/code? Credit it her.)
*/

"use strict";


function getCardType() {
	var cardtypeName = "unknown";
	var cardtypeArray = document.getElementById("cardType").getElementsByTagName("input");

	for (var i=0; i<cardtypeArray.length; i++){
	if (cardtypeArray[i].checked)
		cardtypeName = cardtypeArray[i].value;
	}
	return cardtypeName;
}


function checkCardNumber(cardNumber){
	var errMsg = "";
	var cardType = getCardType();
	var tempresult = false;

	switch (cardType){
		case "Mastercard":
			if ((cardNumber.charAt(0) == 5)&&(cardNumber.charAt(1) == 1)&&(cardNumber.charAt(14) == 5)&&(cardNumber.charAt(15) == 5)) {
				tempresult = true;
			}
			break;
		case "Visa":
			if (cardNumber.charAt(0) == '4') {
				tempresult = true;
			}
			break;
		case "Americanexpress":
			if (((cardNumber.charAt(0) == 3)&&(cardNumber.charAt(1) == 4))||((cardNumber.charAt(0) == 3)&&(cardNumber.charAt(1) == 7))&&(cardNumber <= 999999999999999)){
				tempresult = true;
			}
			break;
		case "Giftcard":
			if (cardNumber > 16){
				tempresult = true;
			}
		default:
			errMsg = "You need to select a card type.\n";
	}
	if (tempresult == false) {
		errMsg = "You must enter a valid card number\n";
	} 

	return errMsg;
}


function validate(){
	
	var errMsg = "";
	var result = true;
	var cardName = document.getElementById("cardName").value;
	var cardNumber = document.getElementById("cardNumber").value;

	// if (!cardName.match(/^[a-zA-Z]+$/)) {
	// 	errMsg = errMsg + "Please enter the name on card\n";
	// 	result = false;
	// }	

	// if (!isFinite(cardNumber)){
	// 	errMsg = errMsg + "You must enter a valid card number\n";
	// 	result = false;
	// }
	// else {
	// 	var tempMsg = checkCardNumber(cardNumber);
	// 	if (tempMsg != ""){
	// 		errMsg = errMsg + tempMsg;
	// 		result = false;
	// 	}
	// }

	// if (errMsg != "") {
	// 	alert(errMsg);
	// }

	return result;    
}


function calcCost(addon){
	var cost = 0;
	if (addon.search("Paint") != -1) cost = 100;
	if (addon.search("Spoiler")!= -1) cost += 250;
	if (addon.search("Roof Racks")!= -1) cost += 400;
	if (addon.search("Tinted Windows")!= -1) cost += 500;
	return cost;
}

function getBooking(){
	var cost = 0;
	if(sessionStorage.givenname != undefined){   
	
		document.getElementById("confirm_name").textContent = sessionStorage.givenname + " " + sessionStorage.familyname;
		document.getElementById("confirm_postcode").textContent = sessionStorage.postcode;
		document.getElementById("confirm_state").textContent = sessionStorage.state;
		document.getElementById("confirm_addon").textContent = sessionStorage.addon;
		document.getElementById("confirm_condition").textContent = sessionStorage.condition;
	
		cost = calcCost(sessionStorage.addon)
		document.getElementById("confirm_cost").textContent = cost;
	
		document.getElementById("givenname").value = sessionStorage.givenname;
		document.getElementById("familyname").value = sessionStorage.familyname;
		document.getElementById("postcode").value = sessionStorage.postcode;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("condition").value = sessionStorage.condition;
		document.getElementById("addon").value = sessionStorage.addon;
	
		document.getElementById("cost").value = cost;
	}

}

function cancelBooking(){
	window.location = "index.html";
}


function init () {
	
	
	var bookForm = document.getElementById("bookform");
	var cancel = document.getElementById("cancelButton");
	bookForm.onsubmit = validate;         
	getBooking();
	cancel.onclick = cancelBooking;
	
 }

window.onload = init;