<?php

function scanFolder($path) {

	$list = scandir($path);
	
	$response = [];

	foreach ($list as $item) {
		if (is_file($path . '/' . $item)) {
			$response[] = $path . '/' .$item . ' - is file<br/>';
		}
		if (is_dir($path . '/' . $item)) {
			$response[] = $path . '/' . $item . ' - is dir<br/>';
			if ($item !== '.' && $item !== '..') {
				$response = array_merge(
					$response, 
					scanFolder($path . '/' . $item)
				);
			}
		}
	}
	return $response;
}



