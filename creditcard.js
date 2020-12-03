/**
* Author: Connor, 102061410
* Target: register.html
* Purpose: This file is for ...
* Created: 20/9/18
* Last updated: 20/9/18
* Credits: (Any guidane/help/code? Credit it her.)
*/

"use strict";


function validate() {

	var errMsg = "";
	var result = true;
	var cardName = document.getElementById("cardName").value;

	if (!cardName.match(/^[a-zA-Z]+$/)) {
		errMsg = errMsg + "Please enter the name on card\n";
		result = false;
	}								
}


function init () {

	var bookForm = document.getElementById("bookform");
	bookForm.onsubmit = validate;
 }

window.onload = init;