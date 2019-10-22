<?php
	/**
	 * All the functions goes here
	 */
	class User
	{
		public $db;
		function __construct($con)
		{
			if(!isset($this->db)){
				$this->db = $con;
			}
		}
		public function addUser($email,$password,$fullname,$age,$created){
			$st = $this->db->prepare("INSERT INTO user_table (email,password,fullname,age,created) VALUES(:email,:password,:fullname,:age,:created)");
			$st->bindParam(':email',$email);
			$st->bindParam(':password',$password);
			$st->bindParam(':fullname',$fullname);
			$st->bindParam(':age',$age);
			$st->bindParam(':created',$created);
			$st->execute();
			return true;
		}
		public function addnewItem($name,$price,$image){
			$st = $this->db->prepare("INSERT INTO tbl_product(name,price,image) VALUES(:name,:price,:image)");
			$st->bindParam(':name',$name);
			$st->bindParam(':price',$price);
			$st->bindParam(':image',$image);
			$st->execute();
			return true;
		}
		public function isExistUserByEmail($email){
			$st = $this->db->prepare("SELECT * FROM user_table WHERE email=:email");
			$st->bindParam(':email',$email);
			$st->execute();
			$resultSet = $st->fetch(PDO::FETCH_ASSOC);
			if($resultSet){
				return true;
			}
			return false;
		}
		public function isExistUserByEmailAndPassword($email,$password){
			$st = $this->db->prepare("SELECT * FROM user_table WHERE email=:email AND password=:password");
			$st->bindParam(':email',$email);
			$st->bindParam(':password',$password);
			$st->execute();
			$resultSet = $st->fetch(PDO::FETCH_ASSOC);
			if($resultSet){
				return true;
			}
			return false;
		}
		public function getUserByEmailAndPassword($email,$password){
			$st = $this->db->prepare("SELECT * FROM user_table WHERE email=:email AND password=:password");
			$st->bindParam(':email',$email);
			$st->bindParam(':password',$password);
			$st->execute();
			$resultSet = $st->fetch(PDO::FETCH_ASSOC);
			return $resultSet;
		}
		public function getUserById($id){
			$st = $this->db->prepare("SELECT * FROM user_table WHERE id=:id");
			$st->bindParam(':id',$id);
			$st->execute();
			$resultSet = $st->fetch(PDO::FETCH_ASSOC);
			return $resultSet;
		}
		public function getProductById($id){
			$st = $this->db->prepare("SELECT * FROM pro_table WHERE id=:id");
			$st->bindParam(':id',$id);
			$st->execute();
			$resultSet = $st->fetch(PDO::FETCH_ASSOC);
			return $resultSet;
		}
		public function getAllUser(){
			$st = $this->db->prepare("SELECT * FROM user_table");
			$st->execute();
			$resultSet = $st->fetchAll(PDO::FETCH_ASSOC);
			return $resultSet;
		}
		public function getAllProduct(){
			$st = $this->db->prepare("SELECT * FROM tbl_product");
			$st->execute();
			$resultSet = $st->fetchAll(PDO::FETCH_ASSOC);
			return $resultSet;
		}
		public function deleteUser($id){
			$st = $this->db->prepare("DELETE FROM user_table WHERE id=:id");
			$st->bindParam(':id',$id);
			$st->execute();
			return true;
		}
		public function deleteItem($id){
			$st = $this->db->prepare("DELETE FROM tbl_product WHERE id=:id");
			$st->bindParam(':id',$id);
			$st->execute();
			return true;
		}
		public function updateProfileById($email,$password,$fullname,$age,$id){
			$st = $this->db->prepare("UPDATE user_table SET email=:email,password=:password,fullname=:fullname,age=:age WHERE id=:id");
			$st->bindParam(':email',$email);
			$st->bindParam(':password',$password);
			$st->bindParam(':fullname',$fullname);
			$st->bindParam(':age',$age);
			$st->bindParam(':id',$id);
			$st->execute();
			return true;
		}
		/*public function updateItemById($id,$product_name,$price,$place){
			$st = $this->db->prepare("UPDATE user_table SET product_name=:product_name,price=:price,place=:place WHERE id=:id");
			$st->bindParam(':product_name',$product_name);
			$st->bindParam(':price',$price);
			$st->bindParam(':place',$place);
			$st->execute();
			return true;
		}*/
		public function uploadImage($image,$id){
			$st = $this->db->prepare("UPDATE product_table SET image=:image WHERE id=:id");
			$st->bindParam(':image',$image);
			$st->bindParam(':id',$id);
			$st->execute();
			return true;
		}

	}
?>
