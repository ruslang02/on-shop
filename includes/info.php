<?php
$siteInfo = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/config/info.json");
if ($siteInfo === false) die("Site information file failed to load.<br />Please contact administrator.");
$siteInfo = json_decode($siteInfo); // Retrieving configuration file and decoding it
if ($siteInfo === false) die("Site information file failed to decode.<br />Please contact administrator.");