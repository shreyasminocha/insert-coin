<?php

include("../config.php");

// FILEPATH URL --> RELATIVE_PATH
// SIDE-EFFECT: Written redirect PHP to filepath
//	Create a simple PHP redirection file at $filepath to $url;
//	return the relative path to it.
function write_alias($filepath, $url)
{
	$file_p = fopen($filepath, 'w');
		
	fwrite($file_p, "<?php header('Location: " . $url . "'); ?>\n");
	fclose($file_p);

	return $filepath;
}



// FILEPATH SOURCE_STRING --> RELATIVE_PATH
// SIDE-EFFECT: Written metadata TXT at $filepath.txt
//	Create a metadata file for set path;
//	return the relative path to it.
function write_metadata($filepath, $source)
{
	if (empty($source)) {
		$source = "[citation needed]";
	}

	$file_p = fopen($filepath . ".txt", 'w');
	$source_string = "Source:\n"
		. prefix_text(set_line_length($source, 50),
				"          ");

	fwrite($file_p, $source_string);
	fclose($file_p);
}


?>