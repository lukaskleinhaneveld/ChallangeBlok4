<?php

function index(){
    render("barberers/index", array(
		'students' => getAllStudents()
	));
}

function schedual(){
    render("barberers/schedual", array(
		'students' => getAllStudents()
	));
}
