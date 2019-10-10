<!doctype html>
<!-- http://localhost/Asst2Sprint1TheAnswer.php -->
<!-- put your name here  -->
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Asst 2 Sprint 1</title>
</head>
<body>
<?php
//  step 1 rename this file to Asst2Sprint1.php 
$mysqlObj;
// $TableName doesn't need to be global for sprint 1 but we will make it global 
// in preparation for the assignment. 
$TableName;

function OpenConnection()
{
	$Host = "localhost";
	$UserName = "root";
	$Password = "mysql";
	$Database = "test";
	$mysqlObj = new mysqli($Host, $UserName, $Password,$Database);
	if ($mysqlObj) 
		echo "<p>Connection open</p>" ; 
	else 
		echo "<p>Connection failed" . $mysqlObj->connect_error . "</p>";
}

function CloseConnection()
{
	$stmt->close();
	mysqli_close($mysqlObj);
}

// main
$TableName = "BandSprint1";
OpenConnection();

echo "<p>";
// Write code to drop the table and create the table.
if (($stmt = $mysqlObj->prepare("Drop table If Exists $tableName"))) 
    $stmt->execute();
// Display "Table $TableName created" or "Unable to create $TableName".\
$BandName = "BandName varchar(30)";
$CDs = "CDsSold int";
$Price = "Price double";
$ManagerFees = "ManagerFees double";
$RecordingCost = "RecordingCost double";
$Distributer = "DistributerFee double";
$Manufacturing = "Manufacturing ";
$GigDate = "";
$BarSales = "";
$stmt = $mysqlObj->prepare("Create Table $TableName($BandName, $CDs, $Price, $ManagerFees, $RecordingCost, $Distributer, $Manufacturing, $GigDate, $BarSales)");
if ($stmt->error)
    echo "Prepare failed ". $stmt->error . $mysqlObj->error;
		
if ($stmt->execute()) 
    echo "$TableName table created.";
else
    echo "Can't create table $TableName. Execute failed: (" . $stmt->errno . ") " . $stmt->error;

echo "</p>";

echo "<p>";
// Write code to insert the values below in to the table. 
// Echo "Record successfully added to $TableName" or 
// "Unable to add record to $TableName". 
$BandName = "We Rock";
$CDs = 5;
$Price = 20;
$ManagerFees = 2200;
$RecordingCost = 1300;
$Distributer = 1200;
$Manufacturing = 4000;
$GigDate = '2017-7-7';
// Bar sales is a boolean so this variable needs to be an integer
$BarSales = 1;

$query = "Insert Into $TableName (PetName, Weight, AnimalType) Values (?, ?, ?)";
	if (!($stmt = $mysqlObj->prepare($query)))	
		echo "Prepare failed: (" . $mysqlObj->errno . ") " . $mysqlObj->error;
	$BindSuccess = $stmt->bind_param("sds", $userName, $userWeight, $userAnimalType);
	if (!$BindSuccess) 
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
echo "</p>";

echo "<p>";  
// Write code to retrieve and display all records in the table. 
// To mirror the real world, no * in the select is permitted.
// The data display can be very simple: 
// echo "$BandName $CDsSold $Price ...."

echo "</p>";

echo "<p>";
// Write code to modify the record for the We Rock band.
// The band name is not changing. Here are the new field values.
$CDs = 700;
$Price = 11;
$ManagerFees = 2222;
$RecordingCost = 3333;
$Distributer = 4444;
$Manufacturing = 5555;
$GigDate = '2016-12-12';
$BarSales = 0;

echo "</p>";

echo "<p>";
// To test your modify feature, paste the code
// here that displays all records in the table

echo "</p>";
CloseConnection();
?>
</body>
</html>