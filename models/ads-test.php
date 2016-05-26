<?php

require 'Ad.php';

// making a new add
$ads = new Ad();
$ads->user_id = '1';
$ads->name = 'Topo Chico';
$ads->description = 'Case of 24 carbonated mineral waters imported from Mexico';
$ads->price = '20.00';
$ads->img_url = 'http://bit.ly/1TExKS6';
$ads->save();
var_dump($ads->attributes);

$ads->name = 'Bubble Water';
$ads->save();
var_dump($ads);