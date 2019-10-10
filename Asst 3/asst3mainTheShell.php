<?php
// *** Modify the line below to run your asst. Test the link 
// http://localhost/LnFnAsst3/asst3main.php

date_default_timezone_set('America/Toronto');
if (isset($_POST['findFlightsButton'])) displayFlights() ;
   else if (isset($_POST['bookFlightButton'])) bookFlight();
      else if (isset($_POST['rentCarButton'])) rentCar();
	    else if (isset($_POST['bookHotelButton'])) bookHotel();
			else displayMainForm() ;	
			
function displayMainForm()
{
	echo "<form action = ? method = post>";
	echo "<div class = \"leftpiece\">";
	echo "<fieldset>
	<legend>Rent A Car</legend>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Customer Name"); 
	DisplayTextbox("f_CarCustomerName", 25, "");
	echo "</div>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Price Per Day");
	DisplayTextbox("f_CarPricePerDay", 0);
	echo "</div>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Number of Days");
	DisplayTextbox("f_CarNbrOfDays", 0);
	echo "</div>";

	echo "<div class = \"addspace\">";
	DisplayLabel("Insurance");
	DisplayTextbox("f_CarInsurance", 7, 0);
	echo "</div>";
	echo "<button name = \"rentCarButton\">Rent a car</button>";
	echo "</fieldset>";
	echo "</div><div class = \"middlepiece\">";
	
	echo "<fieldset>
	<legend>Book A Hotel</legend>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Customer Name"); 
	DisplayTextbox("f_HotelCustomerName", 25, "");
	echo "</div>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Price Per Day");
	DisplayTextbox("f_HotelPricePerDay", 7, 0);
	echo "</div>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Number of Days");
	DisplayTextbox("f_HotelNbrOfDays", 4, 0);
	echo "</div>";
	echo "<div class = \"addspace\">";
	DisplayLabel("Parking");
	DisplayTextbox("f_HotelParking", 7, 0);
	echo "</div>";
 	echo "<p><button name = \"bookHotelButton\">Book a hotel</button></p>";
	echo "</fieldset>";
	echo "</div>";
	echo "<div class = \"rightpiece\">";
	echo "<fieldset><legend>Trips</legend>"; 
	echo "<div class = \"addspace\">";
 	DisplayLabel("Trips");


	echo "</div>";
	echo "<button name = \"findFlightsButton\">Find Flights</button>";
	echo "</fieldset>";
	echo "</div>";
	echo "</form>";
}
function rentCar()
{
	echo "<form action = ? method = post>";
	echo "<p>";
	
	echo "Thank you for borrowing our race car. " .
	"Subtotal: $" . number_format($subTotal,2) .
	". Tax amount: $" . number_format($tax,2) .
	". Total: $" . number_format($total,2);
	echo "</p>";
	echo "<button name = \"Home\">Home</button>";
	echo "</form>";	
}
function bookHotel()
{
	echo "<form action = ? method = post>";
	echo "<p>";
	 
	echo "Thank you for staying with us. " .
	"Subtotal: $" . number_format($subTotal,2) .
	". Tax amount: $" . number_format($tax,2) .
	". Total: $" . number_format($total,2);
	echo "</p>";
	echo "<button name = \"Home\">Home</button>";
	echo "</form>";
}


function displayFlights()
{  
	echo "<h2>Showing Your Flights</h2>";
	echo "<form action = ? method = post>";
	echo "<button name = \"bookFlightButton\">Book flight</button>";
	echo "</form>";

}
function bookFlight()
{	
	echo "<h2>Your Flight Is Booked!</h2>";	
 	echo "<form action = ? method = post>";
	// when building the interval string for flight length single quotes are required 
}
?>