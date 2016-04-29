<?php
Class User{
	private $db;
	function __construct($DB_con){
		$this->db=$DB_con;
	}
	public function SelectUser(){	
		try{
			$stmt= $this->db->prepare("SELECT somrak_user.userid,somrak_user.firstname,somrak_user.lastname,somrak_gender.gender,somrak_user.username,somrak_user.email,somrak_address.address,somrak_usertype.usertype,somrak_accommodation.accommodation FROM somrak_user
										INNER JOIN somrak_gender ON somrak_gender.genderid =somrak_user.genderid
										INNER JOIN somrak_address ON somrak_address.addressid =somrak_user.addressid
										INNER JOIN somrak_usertype ON somrak_usertype.usertypeid =somrak_user.usertypeid
										INNER JOIN somrak_accommodation ON somrak_accommodation.userid=somrak_user.userid
										WHERE somrak_user.activate=1");
			$stmt->execute();
			return $UserRow=$stmt->fetchall();
		}catch(PDOException $e){
			echo $e->getMessage();
			return false;
		}				
	}// end select province
}
?>