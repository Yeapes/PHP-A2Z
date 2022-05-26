<?php

class Fund{
    private $fund;
 
    function __construct($initial_fund = 0){
        $this->fund = $initial_fund;
    }

    public function addFund($money){
        $this->fund += $money;
        // echo "add";
    }

    // public function deductFund($money){
    //     $this->fund -= $money;
    // }

    // public function offerMoney($money){
    //     $this->fund += $money;
    // }

    public function getFund(){ 
        echo "Your fund is {$this->fund}";
    }
}

$fund1 = new Fund();
$fund1->addFund(200);

$fund1->getFund();