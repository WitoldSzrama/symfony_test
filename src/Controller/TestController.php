<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;




class TestController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function welcome()
    {


        $name = "witold Szrama";
        return $this->render('test/welcome.html.twig',
        [
            'name' => $name,
        ]);
    }

    
}
