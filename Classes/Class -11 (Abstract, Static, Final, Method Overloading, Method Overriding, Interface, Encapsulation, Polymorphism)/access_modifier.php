<?php

class Accounts{

    public function accountInfo(){

        return "Name,Email,Phone";
    }


    private function accountBalance(){

        return "30000";
    }


    protected function accountTransaction(){

        return "200, 300,500";
    }

}

$obj = new Accounts();
