<?php 

declare(strict_types=1);

echo "asdfghjk";

class Transcation  {
public float $amount;
public string $description;

    public function __construct(float $amount, string $description )
    {
        $this->amount=$amount;
        $this->description=$description;
    }

    public function addtax(float $rate):transcation 
    {
        $this->amount +=$this->amount*$rate/100;
        return $this;
          
    }
    
    public function applyDiscount(float $rate)
    {
        $this -> amount-=$this->amount*$rate/100;
        return $this;
    }

    public function getAmount():float
    {
        return $this->amount;
    }

    public function __destruct()
    {
        echo "destruct " . $this->description;

    }

}




?>