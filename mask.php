<?php
include("res/config.php");
include("res/library/main.php");

create_page("create " . strtolower($GLOBALS["url_aliasize_item"]),
		"mask/create.php", $GLOBALS["url_aliasize_alt"],
		$GLOBALS["url_aliasize_img"]);

?>
