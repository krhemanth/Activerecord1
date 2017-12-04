<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$record = new todo();
$record->owneremail="krishna@njit.edu";
$record->ownerid="1";
$record->createddate="2018-10-23";
$record->duedate="2018-10-19";
$record->message="Hi All";
$record->isdone="0";
$record->insert();
//print_r($record);
$record = todos::create();
//print_r($record);

$records = todos::findAll();
$result=todos::buildHtml($records,get_object_vars(todos::create()));
print_r($result);

$record = new todo();
$record->id='23';
$record->owneremail="sample@njit.edu";
$record->ownerid="1";
$record->createddate="2018-10-23";
$record->duedate="2018-10-23";
$record->message="Get Later";
$record->isdone="1";
$record->update();

$records = todos::findAll();
$result=todos::buildHtml($records,get_object_vars(todos::create()));
print_r($result);

$record = new todo();
$record->id='25';
$record->delete();

$records = todos::findAll();
$result=todos::buildHtml($records,get_object_vars(todos::create()));
print_r($result);
