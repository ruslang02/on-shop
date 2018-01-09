<?php
function getString($id)
{ // Finds a localized string from config file and returns according to locale or GET argument 'locale'
	global $siteInfo;
	if (!empty($_GET["locale"]))
		$locale = $_GET["locale"];
	else if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$locale = trim(explode(",", $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0]);
	} else $locale = "en-US";
	$attempt1 = $siteInfo->localizedStrings->$id->$locale;
	$attempt2 = $siteInfo->localizedStrings->$id->{substr($locale, 0, 2)};
	if ($attempt1 !== null) return $attempt1;
	else if ($attempt2 !== null) return $attempt2;
	else return $siteInfo->localizedStrings->$id->en;
}