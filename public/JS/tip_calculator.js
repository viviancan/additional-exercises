/*-----------------------------------------------------------
		Chapter 1 Exercise - Calculator Tip Problem 
-----------------------------------------------------------*/
var billTotal = prompt("What is the total of your bill?");
var tipPercentage = prompt("What is your tip percentage?");

function tipCalculator(){

	if (billTotal || tipPercentage == NaN){
		alert("Please enter a valid number!");
		
	}else{
		var tipAmount = 0;
	
		tipAmount = billTotal * (tipPercentage/100);
		billTotal = parseFloat(billTotal) + parseFloat(tipAmount);
	
		return "Tip Amount: " + tipAmount + " Bill Total: " + billTotal;
		
		}

}




console.log(tipCalculator());