<?php

class data extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function insert() {

		$jsonFiles = $this->model->getFilesIteratively(PHY_ARCHIVES_URL, $pattern = '/index.json$/i');
		
		$db = $this->model->db->useDB();
		$collection = $this->model->db->createCollection($db);

		foreach ($jsonFiles as $jsonFile) {

			$contentString = file_get_contents($jsonFile);
			$content = json_decode($contentString, true);
			$content = $this->model->beforeDbUpadte($content);

			$result = $collection->insertOne($content);
		}
	}

	// Use this method for global changes in json files
	public function modify() {

		$jsonFiles = $this->model->getFilesIteratively(PHY_ARCHIVES_URL . '004/', $pattern = '/index.json$/i');
		
		foreach ($jsonFiles as $jsonFile) {

			$contentString = file_get_contents($jsonFile);
			$content = json_decode($contentString, true);

			$content['Type'] = 'Photograph';

			// if(isset($content['albumID'])) unset($content['albumID']);

			// $id = $this->model->getIdFromPath($jsonFile);
			// $content['id'] = $id;

			// // Remove null elements
			// $content = array_filter($content);
			$json = json_encode($content, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

			file_put_contents($jsonFile, $json);
		}
	}
}

?>
