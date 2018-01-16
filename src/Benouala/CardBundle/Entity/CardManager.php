<?php

namespace Benouala\CardBundle\Entity;

class CardManager
{
	use JSON;
	
	private $exerciceId;
	private $dateCreation;
	private $candidateId;
	private $firstName;
	private $lastName;
	private $cards=array();
	private $cardsOrderedByCategory=array();
	private $cardsOrderedByValue=array();
	private $categoryOrder=array();
	private $valueOrder=array();
	
	public function __construct($game){
		$this->exerciceId=$game->exerciceId;
		$this->dateCreation=date("Y-m-d H:i:s",$game->dateCreation);
		$this->candidateId=$game->candidate->candidateId;
		$this->firstName=$game->candidate->firstName;
		$this->lastName=$game->candidate->lastName;
		$this->categoryOrder=$game->data->categoryOrder;
		$this->valueOrder=$game->data->valueOrder;
		foreach($game->data->cards as $card)
			array_push($this->cards,new Card($card->category,$card->value));
		$this->order('category');
		$this->order('value');
	}
	
	public function setExerciceId($exerciceId){
		$this->exerciceId=$exerciceId;
	}
	
	public function setDateCreation($dateCreation){
		$this->dateCreation=$dateCreation;
	}
	public function setCandidateId($candidateId){
		$this->candidateId=$candidateId;
	}
	public function setFirstName($firstName){
		$this->firstName=$firstName;
	}
	public function setLastName($lastName){
		$this->lastName=$lastName;
	}
	public function setCategoryOrder($categoryOrder){
		$this->categoryOrder=$categoryOrder;
	}
	public function setValueOrder($valueOrder){
		$this->valueOrder=$valueOrder;
	}
	
	public function setCards($cards){
		$this->cards=$cards;
	}
	
	public function setCardsOrderedByCategory($cardsOrderedByCategory){
		$this->cardsOrderedByCategory=$cardsOrderedByCategory;
	}
	
	public function setCardsOrderedByValue($cardsOrderedByValue){
		$this->cardsOrderedByValue=$cardsOrderedByValue;
	}
	
	
	public function getExerciceId(){
		return $this->exerciceId;
	}
    
    public function getDateCreation(){
		return $this->dateCreation;
	}
	
	public function getCandidateId(){
		return $this->candidateId;
	}
	
	public function getFirstName(){
		return $this->firstName;
	}
	
	public function getLastName(){
		return $this->lastName;
	}
	
	public function getCards(){
		return $this->cards;
	}
	
	public function getCardsOrderedByCategory(){
		return $this->cardsOrderedByCategory;
	}
	
	public function getCardsOrderedByValue(){
		return $this->cardsOrderedByValue;
	}
	
	public function getValueOrder(){
		return $this->valueOrder;
	}
	
	public function getCategoryOrder(){
		return $this->categoryOrder;
	}
	
	public function order($attribute){ // category or value
		foreach($this->{$attribute.'Order'} as $value)
			foreach($this->cards as $card)
				if($card->{'get'.ucfirst($attribute)}()==$value)
					array_push($this->{'cardsOrderedBy'.ucfirst($attribute)},$card);
	}
	
	public function toJson()
    {
        return json_encode(get_object_vars($this));
    }
}