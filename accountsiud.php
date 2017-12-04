<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//this is used to save the record or update it (if you know how to make update work and insert)
// $record->save();
//$record = accounts::findOne(1);
//This is how you would save a new todo item

$record = new account();
$record->email="abc@njit.edu";
$record->fname="x";
$record->lname="y";
$record->phone="123455678";
$record->birthday="23-09-1994";
$record->gender="male";
$record->password="123";
$record->insert();
//print_r($record);
$record = accounts::create();
//print_r($record);

$records = accounts::findAll();
$result=accounts::buildHtml($records,get_object_vars(accounts::create()));
print_r($result);

$record = new account();
$record->id='11';
$record->email='rocks@njit.edu';
$record->fname="rash";
$record->lname="mica";
$record->phone="0790716794";
$record->birthday="31-08-1995";
$record->gender="female";
$record->password="12345";
$record->update();

$records = accounts::findAll();
$result=accounts::buildHtml($records,get_object_vars(accounts::create()));
print_r($result);

$record = new account();
$record->id='100';
$record->delete();

$records = accounts::findAll();
$result=accounts::buildHtml($records,get_object_vars(accounts::create()));
print_r($result);
