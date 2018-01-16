<?php

namespace Benouala\CardBundle\Entity;

class Card
{
	private $category;

	private $value;
  
	public function __construct($category,$value){
		$this->setCategory($category);
		$this->setValue($value);
	}

	public function setCategory($category)
	{
		$this->category = $category;
	}
  
	public function setValue($value)
	{
		$this->value = $value;
	}
  
	public function getValue()
	{
		return $this->value;
	}
	
	public function getCategory()
	{
		return $this->category;
	}
}