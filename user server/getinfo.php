<?php
    
    require_once('easybitcoin.php');
    
    // create object
    // Bitcoin('username','password','localhost','port number')
    // localhost is your loopback address
    $bitcoin = new Bitcoin('bitcoinrpc','testuser2@','127.0.0.1','18443');
    
    
    $info = $bitcoin->getwalletinfo();
    
    $HDmasterkey = $info['hdmasterkeyid'];
    
    $balance = $info['balance'];
    
    
    // array('index' => value ...)
    $user_info = array('HDmasterkey' => $HDmasterkey, 'balance' => $balance);
    
    // json encoding
    echo json_encode($user_info);
    
    
?>
