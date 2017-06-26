<?php

function getAppointments(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM appointments";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetch();
}
