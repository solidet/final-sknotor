<?php
Class Accommodation{
	private $db;
	function __construct($DB_con){
		$this->db=$DB_con;
	}
	public function SelectAccommodation(){	
		try{
			$stmt= $this->db->prepare("SELECT somrak_accommodation.accommodationid,somrak_accommodation.accommodation,somrak_user.firstname,somrak_user.lastname,somrak_address.address,somrak_accommodation.feature,somrak_accommodation.activate FROM somrak_accommodation
										INNER JOIN somrak_user ON somrak_user.userid =somrak_accommodation.userid
										INNER JOIN somrak_address ON somrak_address.addressid =somrak_accommodation.addressid
										ORDER BY somrak_accommodation.accommodationid DESC");
			$stmt->execute();
			return $AccommodationRow=$stmt->fetchall();
		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}				
	}// end select province
}
?>