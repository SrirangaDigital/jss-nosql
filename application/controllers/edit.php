<?php


class edit extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function artefact($query, $id='') {
	
		$data = $this->model->editArtefact($id);
		($data) ? $this->view('edit/artefact', $data) : $this->view('error/index');
	}

	public function updateArtefactJson() {
		
		$data = $this->model->getPostData();
		if(!$data){$this->view('error/index');return;}

		$fileContents = array();

		foreach($data as $value){

			$fileContents[$value[0]] = $value[1];
		}

		$path = PHY_METADATA_URL . $fileContents['id'] . "/index.json";

		$fileContentsJson = json_encode($fileContents,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

		if(file_put_contents($path, $fileContentsJson))
		{
			$this->model->syncArtefactJsonToDB($fileContents['id']);
			
			if(REQUIRE_GIT_TRACKING)
			{
				$this->redirect('gitcvs/updateRepo/' . str_replace('/', '_', $fileContents['id']));
			}
			else
			{
				$url =  BASE_URL . 'describe/artefact/' . str_replace('/', '_', $fileContents['id']);
				$this->absoluteRedirect($url);
			}
			
		}
		else
		{
			$this->view('error/prompt',["msg"=>"Problem in writing data to a file"]);
		}
	}

}

?>
