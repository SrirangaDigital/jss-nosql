<?php


class editModel extends Model {

	public function __construct() {

		parent::__construct();
	}

	public function editArtefact($id) {
		
		$file = PHY_METADATA_URL . str_replace('_','/',$id) . '/index.json';
		$artefactDetails = file_get_contents($file);
		$data = json_decode($artefactDetails);
		$data->thumbnailPath = $this->getThumbnailPath($data->id);
		$data->idURL = $id;
		return ($data);
	}	
}

?>
