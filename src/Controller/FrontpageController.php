<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontpageController extends AbstractController
{
    /**
     * @Route("/", name="frontpage")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/impress", name="impress")
     */
    public function impress(): Response
    {
        return $this->render('impress.html.twig');
    }

    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacy(): Response
    {
        return $this->render('privacy.html.twig');
    }
}
