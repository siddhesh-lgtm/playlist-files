<?php 
declare(strict_types=1);


require_once'./one.php';

//classes and objects here :
 
$amount = (new transcation(100, 'trn1'))
->addtax(5)
->applyDiscount(10);


var_dump($transaction->getAmount());




// $transaction = new transcation(100, 'Transaction 1 ');
// $transaction->addtax(10);
// $transaction->applyDiscount(10);
// var_dump($transaction->amount);





?>