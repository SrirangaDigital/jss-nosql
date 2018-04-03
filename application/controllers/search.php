<?php

class search extends Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function field($query = []) {
		
		if(empty($query)) {

			$this->view('error/index');
			return;
		}

		$page = 1;

		if(isset($query['page'])) {

			$page = $query['page'];
			unset($query['page']);
		}

		$result = $this->model->getSearchResults($query, $page);

		if($page == '1')
			($result != 'noData') ? $this->view('search/result', $result) : $this->view('error/noResults', 'search/index/');
		else
			echo json_encode($result);
	}

	public function fulltext($query = []) {
		
		if(!(isset($query['term']))) {

			$this->view('error/index');
			return;
		}

		$data['term'] = $query['term'];
		$page = (isset($query['page'])) ? $query['page'] : "1";

		$result = $this->model->getFullTextSearchResults($data, $page);

		if($page == '1')
			($result != 'noData') ? $this->view('search/fulltextResult', $result) : $this->view('error/noResults', 'search/index/');
		else
			echo json_encode($result);
	}

	public function advanced(){

		$keyArray = ["AccessLevel", "Box", "BoxTitle", "DataExists", "Date", "Description", "Event", "EventID", "EventType", "File", "FileID", "FileTitle", "From", "Keywords", "Language", "Misc", "People", "Place", "To", "Type"];
		($keyArray)? $this->view('search/advanced', $keyArray) : $this->view('error/noResults', 'search/index/');
	}
}

?>
