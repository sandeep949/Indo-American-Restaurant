var globaltotalprice = 0;
// Function to add event listeners to buttons
function start() {
  document.getElementById("cartButton").addEventListener("click", addToCart, false);
  document.getElementById("dealsButton").addEventListener("click", goToDeals, false);
}

// Function called when add to cart button is clicked
function addToCart() {
  chickenQuantity();
  lambQuantity();
  paneerQuantity();
  MalaiQuantity();
  faloodaQuantity();
  calculateTotalPrice();
}

// Function called when deals button is clicked
function goToDeals() {
  //the question mark ? is used to separate the base URL from the query string parameter and if there are more than one parameter 
  //they are separated by ampersand &
  window.location = "deals.php?totalprice=" + globaltotalprice;
}

// Function to check chicken quantity input
function chickenQuantity() {
  var selectedValue1 = document.getElementById("quantityChicken").value;
  if (selectedValue1 > 10) {
    alert("Quantity should not exceed 10");
    document.getElementById("quantityChicken").value = "";
  } else {
    calculateTotalPrice();
  }
}

// Function to check lamb quantity input
function lambQuantity() {
  var selectedValue2 = document.getElementById("quantityLamb").value;
  if (selectedValue2 > 10) {
    alert("Quantity should not exceed 10");
    document.getElementById("quantityLamb").value = "";
  } else {
    calculateTotalPrice();
  }
}

// Function to check paneer quantity input
function paneerQuantity() {
  var selectedValue3 = document.getElementById("quantityPaneer").value;
  if (selectedValue3 > 10) {
    alert("Quantity should not exceed 10");
    document.getElementById("quantityPaneer").value = "";
  } else {
    calculateTotalPrice();
  }
}

// Function to check malai quantity input
function MalaiQuantity() {
  var selectedValue4 = document.getElementById("quantityMalai").value;
  if (selectedValue4 > 10) {
    alert("Quantity should not exceed 10");
    document.getElementById("quantityMalai").value = "";
  } else {
    calculateTotalPrice();
  }
}

// Function to check falooda quantity input
function faloodaQuantity() {
  var selectedValue5 = document.getElementById("quantityFalooda").value;
  if (selectedValue5 > 10) {
    alert("Quantity should not exceed 10");
    document.getElementById("quantityFalooda").value = "";
  } else {
    calculateTotalPrice();
  }
}
// Function to calculate total price of items
function calculateTotalPrice() {
  
  var totalPrice = 0.0;
  var quantityChickenInput = document.getElementById("quantityChicken").value;
  var quantityLambInput = document.getElementById("quantityLamb").value;
  var quantityPaneerInput = document.getElementById("quantityPaneer").value;
  var quantityMalaiInput = document.getElementById("quantityMalai").value;
  var quantityFaloodaInput = document.getElementById("quantityFalooda").value;

  // Parse the quantity input values to integers or 0 if input is empty or not a number
  //If "quantityChickenInput" cannot be parsed as an integer, or is not provided at all, then "quantityChicken" is assigned a default value of 0.
  const quantityChicken = parseInt(quantityChickenInput) || 0;
  const quantityLamb = parseInt(quantityLambInput) || 0;
  const quantityPaneer = parseInt(quantityPaneerInput) || 0;
  const quantityMalai = parseInt(quantityMalaiInput) || 0;
  const quantityFalooda = parseInt(quantityFaloodaInput) || 0;

  // Set the price per item for each item
  const pricePerChicken = 10.99;
  const pricePerLamb = 12.99;
  const pricePerPaneer = 10.99;
  const pricePerMalai = 12.99;
  const pricePerFalooda = 12.99;
  // Calculate the total price by multiplying the quantity of each item by its price and adding them up
  var totalPrice =
    quantityChicken * pricePerChicken +
    quantityLamb * pricePerLamb +
    quantityPaneer * pricePerPaneer +
    quantityMalai * pricePerMalai +
    quantityFalooda * pricePerFalooda;
  // Round the total price to two decimal places
  totalPrice = parseFloat(totalPrice.toFixed(2));
  //globaltotalprice = totalPrice;
  // Display the total price on the webpage
  document.getElementById("totalPrice").innerHTML = "Your Total Price is  : $ " + totalPrice;
  globaltotalprice = totalPrice;
}

window.addEventListener("load", start, false);
