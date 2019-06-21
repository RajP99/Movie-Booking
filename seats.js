function calculateTotal(){
	var total = getTotal();

	var divObj = document.getElementById("noTax");
	var divObj1 = document.getElementById("withTax");
	divObj.style.display="block"; 
	divObj1.style.display="block";
	divObj.innerHTML = "The total price without tax is: $" + total.toFixed(2);
	divObj1.innerHTML = "The toal price including tax is: $" + (total*1.13).toFixed(2);
}

function getTotal(){
	var seats = document.getElementsByName("seat[]");
	var sum = 0;
	for(var i=0; i < seats.length; i++){
		if (seats[i].checked == true){
			sum += 8;
		}
	}
	return sum;	
}