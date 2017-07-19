<?php

class describe extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function artefact($query = [], $id = '') {

		$id = str_replace('_', '/', $id);

		$artefact['details'] = $this->model->getArtefactDetails($id);

		if($artefact['details']) {
			$artefact['images'] = $this->model->getArtefactImages($id);
			$artefact['neighbours'] = $this->model->getNeighbourhood($artefact['details']);
		}

		($artefact['details']) ? $this->view('describe/artefact', $artefact) : $this->view('error/index');
	}
}

?>
