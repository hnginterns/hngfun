<?php

$database = require 'bootstrap.php';


$password = $database->fetch('password');

require 'index.view.php';
