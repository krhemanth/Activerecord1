<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class account extends model {
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    public function __construct()
    { 
        $this->tableName = 'accounts';
    }
}