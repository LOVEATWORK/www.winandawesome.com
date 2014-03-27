<?php
	
	$client_id = "b3bd2606a06147dd83cabec03c17131f"; //your client-id here

	$tags = array("win", "awesome");
	$cachefile = "instagram_cache/tags.cache";
	$tmpfile = "instagram_cache/tmp.cache";
	$objects = array();
	$count = 25;
	$json = null;

	
	// If the file exists, and hasn't expired, grab it from disk
	if (file_exists($cachefile) && time()-filemtime($cachefile) < 3600) {
	
		$json = json_decode(file_get_contents($cachefile), true);
	
	} else {

		// If not, iterate tags and create new cachefile.

		foreach ($tags as $tag) {
		
			$contents = file_get_contents("https://api.instagram.com/v1/tags/$tag/media/recent?client_id=$client_id");
			file_put_contents($tmpfile, $contents);

			$json = json_decode($contents, true);

			$i = 0;

			foreach ($json["data"] as $value) {
				array_push($objects, createImage($value));
				if (++$i == $count) break;
			}

		};

		$json = $objects;
		file_put_contents($cachefile, json_encode($objects));
			
	}

	// $insta = getRandomItem($json);
	
	echo getImageAsHTML($json);

	
	function createImage($value) {

		$image = array(
				'thumb' => $value["images"]["thumbnail"]["url"],
				'image' => $value["images"]["standard_resolution"]["url"],
				'link' => $value["link"],
				'time' => date("d/m/y", $value["created_time"]),
				'nick' => $value["user"]["username"],
				'avatar' => $value["user"]["profile_picture"],
				'tags' => $value["tags"]
			);

		return $image;
	}

	function getRandomItem($arr) {
		return $arr[array_rand($arr)];
	}

	function getImageAsHTML($arr) {

		$img = getRandomItem($arr);
		return sprintf("<img src='%s' title='%s' alt='%s' />", $img["image"], $img["nick"], $img["time"]);

	}

?>