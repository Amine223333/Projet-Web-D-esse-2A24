<?php
	class Particips{
		private $id_p=null;
		private $Nom_p=null;
		private $Prenom=null;
		private $adresse_mail=null;
		private $id_event=null;


		
		
		private $password=null;
		function __construct($id_p, $Nom_p, $Prenom, $adresse_mail, $id_event){
			$this->id_p=$id_p;
			$this->Nom_p=$Nom_p;
			$this->Prenom=$Prenom;
			$this->adresse_mail=$adresse_mail;
			$this->id_event=$id_event;


		}
		function getid_p(){
			return $this->id_p;
		}
		function getNom_p(){
			return $this->Nom_p;
		}
		function getPrenom(){
			return $this->Prenom;
		}
		function getadresse_mail(){
			return $this->adresse_mail;
		}
		function getid_event(){
			return $this->id_event;
		}
		
        //setters
        function setid_p(int $id_p){
			$this->id_p=$id_p;
		}
		function setNom_p(string $Nom_p){
			$this->Nom_p=$Nom_p;
		}
		function setPrenom(string $Prenom){
			$this->Prenom=$Prenom;
		}
		function setadresse_mail(string $adresse_mail){
			$this->adresse_mail=$adresse_mail;
		}
		function setid_event(int $id_event){
			$this->id_event=$id_event;
		}
		
	}


?>