<?php

namespace mvc\controller;

use mvc\model\Back;
use mvc\model\YourName;

class Controller {

	public function control(array $post) :string {
		$page = "src/view/front.php";
		if (isset($post["id"])) {
			switch ($post["id"]) {
				case "yourName":
					$page = (new YourName())->execute($post);
					break;
				case "back":
					$page = (new Back())->execute($post);
			}
		}
		return $page;
	}
}