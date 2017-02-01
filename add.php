<?php

include("db_connect.php");

$email = $_POST['email'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$birthday = $_POST['birthday'];
$numberOfGroup = $_POST['numberOfGroup'];
$valueExam = $_POST['valueExam'];
$gender = $_POST['gender'];

if(isset ($_POST['add'])) {
$qry = $pdo->prepare("INSERT INTO students (name, lastName, gender, email, sumExam, birthday, numberOfGroup) 
VALUES (:name, :lastName, :gender, :email, :sumExam, :birthday, :numberOfGroup)");

$qry-> bindParam(':name', $name);
$qry-> bindParam(':lastName', $lastName);
$qry-> bindParam(':gender', $gender);
$qry-> bindParam(':email', $email);
$qry-> bindParam(':sumExam', $valueExam);
$qry-> bindParam(':birthday', $birthday);
$qry-> bindParam(':numberOfGroup', $numberOfGroup);
$qry-> execute(); 

echo "Success!";
}
