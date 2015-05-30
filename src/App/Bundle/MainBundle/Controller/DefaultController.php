<?php

namespace App\Bundle\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * The default controller handling the homepage
 */
class DefaultController extends Controller
{
    /**
     * Display the homepage
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('AppMainBundle:Default:index.html.twig');
    }
}
