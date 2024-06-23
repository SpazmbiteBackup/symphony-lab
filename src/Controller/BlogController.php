<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route("/strona_glowna","main_page")]
    public function index(): Response
    {
        return new Response("To bedzie strona glowna");
    }

}
