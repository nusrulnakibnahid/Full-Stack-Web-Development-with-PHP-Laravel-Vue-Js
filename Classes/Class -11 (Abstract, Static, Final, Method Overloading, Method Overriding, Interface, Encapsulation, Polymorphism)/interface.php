<?php

interface LossProfitCalculation {

    public function purchase();
    public function slaes();
    public function calculate(int $pur, int $sal);

}

class myCalculation implements LossProfitCalculation {

    public function purchase() {  
        // Implementation for purchase
    }

    public function slaes() {
        // Implementation for slaes
    }
  
    public function calculate(int $pur, int $sal) {
        // Implementation for calculate
    }


}

?>
