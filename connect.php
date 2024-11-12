<?php

$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$history = $_POST['history'];
$scan-results = $_POST['scan_results'];
$comment = $_POST['comment'];

//cdatabase connection
$conn = new mysqli('localhost','root','','st_mary's_hospital_db');
if($conn->connect_error){
die('connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into Patient(Patient_Name, Age, Weight, Address, Contact, Email_Address, Medical_history, Scan_Results, Doctor's_Comment)
	values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("siisissss",$name, $age, $weight, $address, $contact, $email, $history, $scan_results, $comment);
	$stmt->execute();
	echo "submission successful........";
	$stmt->close();
	$conn->close();
}





















?>