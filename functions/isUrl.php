<?php
// Uses PHP's filter_var to check for valid URL

function isUrl($url) {
	$validation = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);
	if ($validation){
		$output = true;
	}else{
		$output = false;
	}
	return $output;
}