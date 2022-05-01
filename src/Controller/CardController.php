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
     * @Route("/card/draw/{numDraws}", name="card-draw")
     */
    public function draw(int $numDraws): Response
    {
        $card = new \App\Card\Card();

        $cards = [];
        for ($i = 1; $i <= $numRolls; $i++) {
            $card->draw();
            $drawn[] = $card->getAsString();
        }

        $data = [
            'title' => 'Card drawn many times',
            'numDraws' => $numDraws,
            'drawn' => $drawn,
        ];
        return $this->render('card/roll.html.twig', $data);
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
