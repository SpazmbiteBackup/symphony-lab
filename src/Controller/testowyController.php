<?php
declare(strict_types=1);
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testowyController extends AbstractController
{
    #[Route("/testowy","testowy-index")]
    public function index(): Response
    {
        return new Response("Hello World");
    }

}
