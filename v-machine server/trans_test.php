<?php

	// GET parameters...

	$pubKey = $_GET['pubKey'];
	$price = $_GET['price'];


	require_once('easybitcoin.php');

	// create object
	// Bitcoin('username','password','localhost','port number')
	// localhost is your loopback address

	$bitcoin = new Bitcoin('bitcoinrpc','testuser2@','127.0.0.1','18443');


	$balance_before = $bitcoin->getbalance();

	echo "your balance before transaction : ".$balance_before;

	$bitcoin->sendtoaddress($pubKey,$price);

	echo "<pre>";
	echo "</pre>";


	$balance_after = $bitcoin->getbalance();

	echo "your balance after transaction : ".$balance_after;

?>
