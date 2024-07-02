"use strict"; //using strict
//start event listner
// This function is called when the window loads
function start() {
  // Adds an event listener to the "totalAmount" element to listen for a click event and call the calculateDiscount function
  document.getElementById("totalAmount").addEventListener("click", calculateDiscount, false);
  // Adds an event listener to the "orderButton" element to listen for a click event and call the orderNow function
  document.getElementById("orderButton").addEventListener("click", orderNow, false);
}
// This function redirects the user to the orders.php page
function orderNow() {
  window.location = "orders.php";
}
// This function calculates the discount based on the input value and displays the result
function calculateDiscount() {
  // Gets the input value from the "amounttext" element
  var totalPrice;
  totalPrice = document.getElementById("amounttext").value;
  // If the input value is less than or equal to 100, display a message indicating how much more the user needs to spend to receive cashback
  if (totalPrice <= 100) {
    document.getElementById("resultPara").innerHTML =
      100 - totalPrice + "" + " still need to shop  to  receive the cashback <br> Your total price is " + totalPrice;

    // If the input value is greater than 100 but less than or equal to 150, apply an 8% discount and display the result
  } else if (totalPrice > 100 && totalPrice <= 150) {
    totalPrice -= (totalPrice / 100) * 8;
    document.getElementById("resultPara").innerHTML =
      "Congrats , you will recieve a cashback offer of 8%." +
      "<br>You will get a total discount of $" +
      (totalPrice / 100) * 8 +
      "<br>Your final price  is " +
      totalPrice;
    // If the input value is greater than 150 but less than or equal to 200, apply a 10% discount and display the result
  } else if (totalPrice > 150 && totalPrice <= 200) {
    totalPrice -= (totalPrice / 100) * 10;
    document.getElementById("resultPara").innerHTML =
      "Congrats , you will recieve a cashback offer of 10%." +
      "<br>You will get a total discount of $" +
      (totalPrice / 100) * 10 +
      "<br>Your final price  is " +
      totalPrice;
    // If the input value is greater than 200, apply a 15% discount and display the result
  } else if (totalPrice > 200) {
    totalPrice -= (totalPrice / 100) * 15;
    document.getElementById("resultPara").innerHTML =
      "Congrats , you will recieve a cashback offer of 15%." +
      "<br>You will get a total discount of $" +
      (totalPrice / 100) * 15 +
      "<br>Your final price  is " +
      totalPrice;
    // If the input value is not a number, display an alert message
  } else {
    alert("Invalid input, please enter a number.");
  }
}
// Adds an event listener to the window to call the start function when the window loads
window.addEventListener("load", start, false);
