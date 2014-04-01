<?php

namespace Feedme\ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class RecipeController extends Controller {
    public function listAction() {
        $data = [
            [
                'id' => 1,
                'title' => 'Title',
                'description' => 'description'
            ]
        ];

        return new JsonResponse($data);
    }
} 