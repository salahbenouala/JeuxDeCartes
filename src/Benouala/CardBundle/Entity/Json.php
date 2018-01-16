<?php
namespace Benouala\CardBundle\Entity;

trait JSON
{
  public function toJson()
  {
		return json_encode(get_object_vars($this));
  }
}