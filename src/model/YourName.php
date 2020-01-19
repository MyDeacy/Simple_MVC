<?php

namespace mvc\model;

class YourName {

	function execute(array $post) :string {
		$output = "Hello, " . $post["name"] . "！";
		$_SESSION["name"] = $output;
		return "src/view/result.php";
	}
}