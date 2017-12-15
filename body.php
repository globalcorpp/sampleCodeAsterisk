#!/usr/bin/php -q
<?php
set_time_limit(30);
require('phpagi.php');
error_reporting(E_ALL);

$agi = new AGI();
$agi->answer();

$agi->verbose("######### saeed ##########");
$agi->stream_file("welcome");

$agi->hangup ();
?>
