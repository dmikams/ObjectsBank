<?php
// Author: Sanchez, Dannah Mikayla M.
// Section: WD203
// Date of Last Update: January 16, 2026

class Account {
    private $accNum;
    private $accType;
    private $balance;

    public function __construct($accNum, $accType, $balance) {
        $this->accNum = $accNum;
        $this->accType = $accType;
        $this->balance = $balance;
    }

    public function getAccountNumber() {
        return $this->accNum;
    }

    public function getAccountType() {
        return $this->accType;
    }

    public function getBalance() {
        return $this->balance;
    }
}
