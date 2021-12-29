<?php
	include_once("agent.inc.php");
	$test = new Agent("jeff", "j", "melling", "5461231235", "jeff@email.com", "Travel Agent", "1");
	echo $test;
	$test->setAgtFirstName("bob");
	echo $test;



 // $c1->setFirstName("fred");
 //  $c1->setLastName("flintstone");