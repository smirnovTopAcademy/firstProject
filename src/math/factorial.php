<?php

use FirstProject\App\Controller\Test;
use FirstProject\App\Response\HtmlResponse;
use FirstProject\App\Response\JsonResponse;
use FirstProject\App\Response\Response;
use FirstProject\App\Request\Request;

class Factorial
{
    public function index(): Response
    {
      return new HtmlResponse('Function index');
    }

    public function custom(Request $request): Response
    {
      return new JsonResponse(['custom' => 'Function custom']);
    }
}
