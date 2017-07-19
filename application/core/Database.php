<?php

class Database extends PDO {

	public function __construct() {
	
	}

	public function useDB() {

		// Establish connection
		$connection = new MongoDB\Client("mongodb://" . DB_USER . ":" . DB_PASSWORD . "@" . DB_HOST . ":" . DB_PORT . "/" . DB_NAME);

		// Select db
		$db = $connection->{DB_NAME};
		return $db;
	}

	public function createCollection($db) {

		// Drop collection if exists
		$db->dropCollection(ARTEFACT_COLLECTION);

		// Create Collection
		$db->createCollection(ARTEFACT_COLLECTION);

		// Select collection
		$collection = $this->selectCollection($db);

		//Create fulltext index on every field
		$collection->createIndex(['$**' => 'text']);

		return $collection;
	}

	public function selectCollection($db) {

		// Select collection
		$collection = $db->selectCollection(ARTEFACT_COLLECTION);

		return $collection;
	}	

	public function selectUserCollection($db) {

		// Select user collection
		$collection = $db->selectCollection(USER_COLLECTION);

		return $collection;
	}
}

?>
