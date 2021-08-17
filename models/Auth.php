<?php 

class Auth {

	private $pdo;
	private $base;

	public function __construct(PDO $pdo, $base) {
		$this->pdo = $pdo;
		$this->base = $base;
	}	

	public function checkToken() {
		if (!empty($_SESSION['token'])) {

			$token = $_SESSION['token'];

			

		}

		header('Location: '.$this->base.'/login.php');
		exit;
	}

}
