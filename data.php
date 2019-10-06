<<?php 

	$connect = mysqli_connect("my host","my user","my passwrod","my db");

	mysqli_query($connect,"INSERT INTO lic(email , name, phone, messsage)

	VALUES ('$_POST[email]', '$_POST[name]', '$_POST[phone]', '$_POST[messsage]')";

 ?>