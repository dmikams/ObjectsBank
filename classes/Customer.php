<?php
// Author: Sanchez, Dannah Mikayla M.
// Section: WD203
// Date of Last Update: January 16, 2026

class Customer {
    private $fName;
    private $lName;
    private $accounts;

    public function __construct($fName, $lName, $accounts) {
        $this->fName = $fName;
        $this->lName = $lName;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->fName . " " . $this->lName;
    }

    public function getAccounts() {
        return $this->accounts;
    }
}
