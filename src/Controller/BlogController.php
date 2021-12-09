<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;


class BlogController extends AbstractController
{
    /**
     * @OA\Get(
     * path="/posts",
     *      @OA\Response(
     *          response = "200",
     *          description="Nos articless",
     *          @OA\JsonContent(type="string", description="Titre du premier article"),
     *      )
     * )
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
