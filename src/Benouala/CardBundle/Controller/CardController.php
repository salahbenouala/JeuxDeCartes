<?php

namespace Benouala\CardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Benouala\CardBundle\Entity\Card;
use Benouala\CardBundle\Entity\CardManager;
use Symfony\Component\HttpFoundation\JsonResponse;


class CardController extends Controller
{
    public function indexAction()
    {
		$cardManager=new CardManager(json_decode(file_get_contents('https://recrutement.local-trust.com/test/cards/57187b7c975adeb8520a283c')));

        return $this->render('BenoualaCardBundle:Card:index.html.twig', array('cardManager' => $cardManager));
    }
}
