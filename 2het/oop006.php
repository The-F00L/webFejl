<?php

include ("classes.php");

$oldal = new site();
$oldal->doctype();
$oldal->html_start();
	$oldal->head_start();
		$oldal->title();
	$oldal->head_stop();
	$oldal->body_start();
		$api = new basic();
			$api->p_start();
			$api->ido();
			$api->p_stop();
	$oldal->body_stop();	
$oldal->html_stop();

?>