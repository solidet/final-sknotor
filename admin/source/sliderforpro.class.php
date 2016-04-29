<?php
Class Sliderforpro{
	private $db;
	function __construct($DB_con){
		$this->db=$DB_con;
	}
	public function SelectProvince(){	
		try{
			$stmt= $this->db->prepare("SELECT * FROM somrak_address WHERE activate=1");
			$stmt->execute();
			return $ProvinceRow=$stmt->fetchall();
		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}				
	}// end select province
}
?>