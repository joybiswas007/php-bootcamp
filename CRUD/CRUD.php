<?php

class CRUD{

	private $conn;

	function __construct($nunyabiz) {
		$this->conn = $nunyabiz;
	}

	public function readRecords() {
		try {
			$sql = "SELECT * FROM student";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo $result['ID'];
				echo $result['NAME'];
			}
			$stmt->closeCursor();
		} catch (PDOException $e) {
			throw new PDOException($e->getMessage());
		}
		return $this;
	}

	public function insertRecords($id, $name) {
		try {
			$sql = "INSERT INTO student(ID, NAME) VALUES(:ID, :NAME)";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':ID', $id, PDO::PARAM_INT);
			$stmt->bindValue(':NAME', $name, PDO::PARAM_STR);
			if ( $stmt->execute() ) {
				echo "Records has been inserted!";
			} else {
				echo "unable to insert records into database";
			}
			$stmt->closeCursor();
		} catch (PDOException $e) {
			throw new PDOException($e->getMessage());
		}
		return $this;
	}

	public function updateRecords($id, $name) {
		try {	
			$sql = "UPDATE student SET NAME = :NAME WHERE ID = :ID";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":NAME", $name, PDO::PARAM_STR);
			$stmt->bindValue(":ID", $id, PDO::PARAM_INT);
			if( $stmt->execute() ) {
				echo "records has been updated!";
			} else {
				echo "unable to update records :(";
			}
			$stmt->execute();

		} catch (PDOException $e) {
			throw new PDOException($e->getMessage());
		}
		return $this;
	}

	public function deleteRecords($id) {
		try {
			$sql = "DELETE FROM student WHERE ID = :ID";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":ID", $id, PDO::PARAM_INT);
			if( $stmt->execute() ) {
				echo "records has been deleted";
			} else {
				echo "unable to delete records";
			}
			$stmt->closeCursor();

		} catch (PDOException $e) {
			throw new PDOException($e->getMessage());
		}
		return $this;
	}
}