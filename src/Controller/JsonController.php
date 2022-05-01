<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class JsonController extends AbstractController
{
    private $number;



    /**
     * @Route("card/api/deck", name="api-deck")
     */
    public function number(): Response
    {
        $deck = new \App\Card\Deck();

        $data = [
            'deck_value' => $deck->getAsString()
        ];

        $response = new Response();
        $response->setContent(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
