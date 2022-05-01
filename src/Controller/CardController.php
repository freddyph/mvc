<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CardController extends AbstractController
{
    /**
     * @Route("/card", name="card-home")
     */
    public function home(): Response
    {
        $deck = new \App\Card\Deck();
        //$card = new \App\Card\Card("10","3");
        //$deck->shuffling();
        $data = [
            'title' => 'Card',
            'deck_value' => $deck->getAsString(),
            //'test' => $deck->getAsString(),
            //'card_color' => $card->getColor(),
        ];
    
        return $this->render('card/cardstart.html.twig', $data);
    }


    /**
     * @Route("/card/draw/", name="card-draw")
     */
    public function draw(): Response
    {
        $deck = new \App\Card\Deck();
        $deck->shuffle();
        $number_in_deck = $deck->count_card();
        $drawn = $deck->draw();
        $number_in_deck2 = $deck->count_card();
        

        $data = [
            'title' => 'Card drawn many times',
            'numDraws' => $number_in_deck,
            'drawn' => $drawn->getCard(),
            'test' => $number_in_deck2,
        ];
        return $this->render('card/draw.html.twig', $data);
    }
    
    /**
     * @Route("/card/draw/{numDraws}", name="card-drawn")
     */
    public function drawn(int $numDraws): Response
    {
        $deck = new \App\Card\Deck();
        $deck->shuffle();
        $drawn = "";

        $cards = "";
        for ($i = 1; $i <= $numDraws; $i++) {
            $drawn = $deck->draw();
            $cards .= $drawn->getCard();
        }
        //$output = array_map(function ($cards) { return $cards->name; }, $drawn);
        $data = [
            'title' => 'Card drawn many times',
            'numDraws' => $numDraws,
            'drawn' => $cards,
            //'cards' => $cards,
        ];
        return $this->render('card/draw.html.twig', $data);
    }

        /**
     * @Route("/card/shuffle", name="card-shuffle")
     */
    public function shuffle(): Response
    {
        $deck = new \App\Card\Deck();
        $deck->shuffle();

        $data = [
            'title' => 'Deck shuffled',
            'shuffled' => $deck->getAsString(),
        ];
        return $this->render('card/shuffle.html.twig', $data);
    }
}
