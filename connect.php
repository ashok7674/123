<?php
    $PatientName = $_POST['PatientName'];
    $RelativeName = $_POST['RelativeName'];
    $PatientAge = $_POST['PatientAge'];
    $Gender = $_POST['Gender'];
    $PatientID = $_POST['PatientID'];
    $PreviousProblem = $_POST['PreviousProblem'];
    $PrasentProblem = $_POST['PrasentProblem'];
    $PhoneNumber = $_POST['PhoneNumber'];

    // Database connection
	$conn = new mysqli('localhost','root','root','patient');
	if($conn->connect_errror()){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(patientname,relativesName,patientage, gender,patientid,previousproblem,presentproblem,phonemuber,) values(?, ?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssisissi", $patientName, $patientName, $gender, $PatientID, $PreviousProblem,$PrasentProblem, $phonenumber);
	    $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
?>