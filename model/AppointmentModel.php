<?php

function getAllAppointments(){
	$db = openDatabaseConnection();

	$query = $db->prepare($sql);
	$query->execute(array());

	$db = null;

	return $query->fetchAll();
}
