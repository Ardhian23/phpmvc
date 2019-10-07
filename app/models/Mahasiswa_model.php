<?php 

class Mahasiswa_model{
	private $dbh;
	private $stmt;

	// koneksi DB
	public function __construct(){
		$dsn = 'mysql:host=localhost;dbname=phpmvc';
		try {
			$this->dbh = new PDO($dsn, 'root', '');
		}catch(PDOException $e){
			die($e->getMesage());
		}
	}

 public function getAllMahasiswa(){
 	$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
 	$this->stmt->execute();
 	return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
 }
}