<?php
class Customer{
    public $id;
    public $name;
    public $email;
    public $balance;

    public function getCustomer($id){
        $this->id = $id;
    }
}

$customer = new Customer;



?>