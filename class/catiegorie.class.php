<?php

class catiegorie{
	public function getAllCatiegorie(){
		$openMazadDataBase = new dataBase(HOST, DB_NAME, DB_USER, DB_PASS);
		$openMazadDataBase->setTable('categorie');
		return $openMazadDataBase->select();
	}// end of function getAllCatiegorie
}//end of class catiegorie