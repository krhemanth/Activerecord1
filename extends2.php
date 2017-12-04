<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class todos extends collection {
    protected static $modelName = 'todo';
}