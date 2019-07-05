<?php

namespace FOND\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FONDAnnonce/Default/index.html.twig');
    }
}
